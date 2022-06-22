<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::all();
        return view('product.index',compact('product'));
    }
    public function indexAPI()
    {
        return $product = Product::all();      
    }

    public function add()
    {
        return view('product.add');
    }
    public function insert(Request $request)
    {
        $this->validate($request,[
            'title' => 'required|max:255',
            'description' => 'required|max:1000',
            'status' => 'required|max:500',
            'image' => 'required|image|mimes:jpg,png,bmp,jpeg'
        ]);
        $product = new Product();
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename =  time(). '.'.$ext;
            $file->move('assets/uploads/product',$filename);
            $product->image = $filename;
        }
        $product->title = $request->input('title');
        $product->description = $request->input('description');
        $product->status = $request->input('status');
        $product->link = $request->input('link');
        $product->save();
        return redirect('products')->with('status',"Product Added Successfully");
    }
    public function edit($id)
    {
        $product = Product::find($id);
        return view('product.edit',compact('product'));
    }
    public function update(Request $request,$id)
    {
        $this->validate($request,[
        'title' => 'required|max:255',
        'description' => 'required|max:1000',
        'status' => 'required|max:500',

        ]);
        $product = Product::find($id);
        if($request->hasfile('image'))
        {
            $path='assets/uploads/product/'.$product->image;
            if($path)
            {
                unlink($path);
            }
            $file = $request->file('image');
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename =  time(). '.'.$ext;
            $file->move('assets/uploads/product',$filename);
            $product->image = $filename;

        }
        $product->title = $request->input('title');
        $product->description = $request->input('description');
        $product->status = $request->input('status');
        $product->link = $request->input('link');
        $product->update();
        return redirect('products')->with('status',"Product Updated Successfully");
    }
    public function destroy($id)
    {
        $product = Product::find($id);
        if($product->image)
        {
            $path='assets/uploads/product/'.$product->image;
            if(isset($product->image) && file_exists($path))
            {
                unlink($path);
            }
        }
        $product->delete();
        return redirect('products')->with('status',"Product deleted Successfully");
    }
 }

