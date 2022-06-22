<?php

namespace App\Http\Controllers;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        $brand = Brand::all();

         return view('brand.index',compact('brand'));
    }
    public function add()
    {
        return view('brand.brand_Add');
    }
    public function insert(Request $request)
    {

        $this->validate($request,[
            'brand_name' => 'required|max:255',
            'image' => 'required|image|mimes:jpg,png,bmp,jpeg'
        ]);

        $brand = new Brand();
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename =  time(). '.'.$ext;
            $file->move('assets/uploads/brand',$filename);
            $brand->image = $filename;
        }
        $brand->brand_name = $request->input('brand_name');
        $brand->link = $request->input('brand_link');
        $brand->save();

        return redirect('brand')->with('status',"Brand Added Successfully");
    }
    public function edit(Request $request,$id)
    {
        $brand = Brand::find($id);
        return view('brand.brand_edit',compact('brand'));
    }
    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'brand_name' => 'required|max:255',


        ]);
        $brand = Brand::find($id);
        if($request->hasfile('image'))
        {
            $path='assets/uploads/brand/'.$brand->image;
            if(isset($brand->image) && file_exists($path))
            {
                unlink($path);
            }
            $file = $request->file('image');
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename =  time(). '.'.$ext;
            $file->move('assets/uploads/brand',$filename);
            $brand->image = $filename;

        }
        $brand->brand_name = $request->input('brand_name');
        $brand->link = $request->input('brand_link');

        $brand->update();
        return redirect('brand')->with('status',"Brand Updated Successfully");
    }
    public function destroy($id)
    {
        $brand = Brand::find($id);
        if($brand->image)
        {
            $path='assets/uploads/brand/'.$brand->image;
            if(isset($brand->image) && file_exists($path))
            {
                unlink($path);
            }
        }
        $brand->delete();
        return redirect('brand')->with('status',"brand deleted Successfully");
    }
}
