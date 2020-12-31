<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Attribute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\AttributeValidRequest;

class AttributeController  extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Index()
    {
        try {
            $attribute = Attribute::orderBy('id', 'DESC')->paginate(PAGINATION_COUNT);
            return view('admin.attribute.index', compact('attribute'));
        } catch (\Exception $ex) {
            DB::rollBack();
            return redirect()->back()->with('fail', __('admin/error.msg_error_back'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Create()
    {
        return view('admin.attribute.create-attribute');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function Store(AttributeValidRequest $request)
    {
        try {
            DB::beginTransaction();
            $attribute = Attribute::create();
            $attribute->name = $request->name;
            $attribute->save();
            DB::commit();
            return redirect()->route('main.attribute')->with(['success' => 'تم ألاضافة بنجاح']);
        } catch (\Exception $ex) {
            DB::rollBack();
            return redirect()->back()->with('fail', __('admin/error.msg_error_back'));
        }
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Attribute  $attribute
     * @return \Illuminate\Http\Response
     */
    public function Edit($id)
    {
        try {
            $attribute = Attribute::find($id);
            if (!$attribute)
                return redirect()->back()->with(['fail' => 'there is error on data']);
            return view('admin.attribute.edit-attribute', compact('attribute'));
        } catch (\Exception $ex) {
            DB::rollBack();
            return redirect()->back()->with('fail', __('admin/error.msg_error_back'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Attribute  $attribute
     * @return \Illuminate\Http\Response
     */
    public function Update(AttributeValidRequest $request, $id)
    {
       
        try {
            $attribute = Attribute::find($id);
            $attribute->name = $request->name;
            $attribute->save();
            return redirect()->route('main.attribute')->with(['success' => 'تم التعديل بنجاح']);
        } catch (\Exception $ex) {
            DB::rollBack();
            return redirect()->back()->with('fail', __('admin/error.msg_error_back'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Attribute  $attribute
     * @return \Illuminate\Http\Response
     */
    public function Delete($id)
    {
        $attribute=Attribute::find($id);
        $attribute->delete();
        return redirect()->route('main.attribute')->with(['success' => 'تم الحذف بنجاح']);
    }
}
