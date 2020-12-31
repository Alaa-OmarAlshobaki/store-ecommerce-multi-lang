<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Traits\GeneralTraites;
use App\Http\Controllers\Controller;
use App\Http\Requests\SliderValidRequest;

class SliderController extends Controller
{
    use GeneralTraites;
    public function ViewImages()
    {
        $slider = Slider::get();
        return view('admin.slider.slider', compact('slider'));
    }

    public function StoreImages(Request $request)
    {
        $file = $request->file('dzfile');
        $filename = uploadImage('slider', $file);
        return response()->json([
            'name' => $filename,
            'original_name' => $file->getClientOriginalName(),

        ]);
    }
    public function StoreImagesDB(SliderValidRequest $request)
    {
        try {
            if ($request->has('document') && count($request->document) > 0) {
                foreach ($request->document as $image) {
                    Slider::create([
                        'photo' => $image
                    ]);
                }
            }
            return redirect()->back()->with(['success' => 'تم التحديث بنجاح']);
        } catch (\Exception $ex) {
        }
    }
    public function SliderController($id){
        $delete=Slide::find($id);
        $path=parse_url($delete->photo);
        \F

    }
}
