<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Option;
use App\Models\Product;
use App\Models\Attribute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\OptionValidRequest;

class OptionController extends Controller
{
    public function Index()
    {

        try {
            $option = Option::Active()->with([
                'Attribute' => function ($attribute) {
                    $attribute->select('id');
                },
                'Product' => function ($product) {
                    $product->select('id');
                }
            ])
                ->orderBy('id', 'DESC')->paginate(PAGINATION_COUNT);
            return view('admin.option.index', compact('option'));
        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->back()->with('fail', __('admin/error.msg_error_back'));
        }
    }

    public function Create()
    {

        try {
            $data = [];
            $data['attribute'] = Attribute::select('id')->OrderBy('id', 'DESC')->paginate(PAGINATION_COUNT);
            $data['product'] = Product::select('id')->OrderBy('id', 'DESC')->paginate(PAGINATION_COUNT);
            return view('admin.option.create-option', compact('data'));
        } catch (\Exception $ex) {
            DB::rollback();
            return redirect()->back()->with('fail', __('admin/error.msg_error_back'));
        }
    }

    public function Store(OptionValidRequest $request)
    {
        // try {
            DB::beginTransaction();
            $option = Option::create($request->except('_token'));
            $option->name = $request->name;
            $option->save();
            DB::commit();
            return redirect()->route('main.option')->with(['success', 'operation accomplished successfully']);
        // } catch (\Exception $ex) {
        //     DB::rollback();
        //     return redirect()->back()->with('fail', __('admin/error.msg_error_back'));
        // }
    }

    public function Edit($id)
    {
        try {
            $data = [];
            $data['option'] = Option::find($id);
            if (!$data['option'])
                return redirect()->back()->with('fail', __('admin/error.msg_error_back'));
            $data['attribute'] = Attribute::select('id')->orderBy('id', 'DESC')->paginate(PAGINATION_COUNT);
            $data['product'] = Product::select('id')->orderBy('id', 'DESC')->paginate(PAGINATION_COUNT);
            return view('admin.option.edit-option', compact('data'));
        } catch (\Exception $ex) {
            DB::rollBack();
            return redirect()->back()->with('fail', __('admin/error.msg_error_back'));
        }
    }

    public function Update(OptionValidRequest $request, $id)
    {

        try {
            DB::beginTransaction();
            $option = Option::find($id);
            if (!$option)
                return redirect()->back()->with('fail', __('admin/error.msg_error_back'));
            $option->update($request->only('price', 'attribute_id', 'product_id'));
            $option->name = $request->name;
            $option->save();
            DB::commit();
            return redirect()->route('main.option')->with(['success', 'operation accomplished successfully']);
        } catch (\Exception $ex) {
            DB::rollBack();
            return redirect()->back()->with('fail', __('admin/error.msg_error_back'));
        }
    }

    public function Delete($id)
    {
        $option =Option::find($id);
        if(! $option)
        return redirect()->back()->with('fail', __('admin/error.msg_error_back'));
        $option->update(array('status'=>"1"));
        return redirect()->route('main.option')->with(['success', 'operation accomplished successfully']);

    }
}
