<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    public function index()
    {
        $employee = Employer::orderBy('position', 'ASC')->get();
        return view('employer.index',compact('employee'));
    }

    public function indexAPI()
    {
        return $employee = Employer::orderBy('position', 'ASC')->get();        
    }
    
    public function add()
    {
        return view('employer.employee_Add');
    }
    public function insert(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|max:255',
            'designation' => 'required|max:500',
            'position' => 'required|max:500',
            'department' => 'required|max:500',
            'facebook' => 'required|max:1000',
            'twitter' => 'required|max:1000',
            'instagram' => 'required|max:1000',
            'linkedin' => 'required|max:1000',
            'image' => 'required|image|mimes:jpg,png,bmp,jpeg'
        ]);
        $employee = new Employer();
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename =  time(). '.'.$ext;
            $file->move('assets/uploads/member',$filename);
            $employee->image = $filename;
        }
        $employee->name = $request->input('name');
        $employee->designation = $request->input('designation');
        $employee->position = $request->input('position');
        $employee->department = $request->input('department');
        $employee->facebook = $request->input('facebook');
        $employee->twitter = $request->input('twitter');
        $employee->instagram = $request->input('instagram');
        $employee->linkedin = $request->input('linkedin');
        $employee->save();
        return redirect('employees')->with('status',"Member Added Successfully");
    }
    public function edit(Request $request,$id)
    {
        $employee = Employer::find($id);
        return view('employer.emplyee_edit',compact('employee'));
    }
    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'name' => 'required|max:255',
            'designation' => 'required|max:500',
            'position' => 'required|max:500',
            'department' => 'required|max:500',
            'facebook' => 'required|max:1000',
            'twitter' => 'required|max:1000',
            'instagram' => 'required|max:1000',
            'linkedin' => 'required|max:1000',

        ]);
        $employee = Employer::find($id);
        if($request->hasfile('image'))
        {
            $path='assets/uploads/member/'.$employee->image;
            if(isset($employee->image) && file_exists($path))
            {
                unlink($path);
            }
            $file = $request->file('image');
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename =  time(). '.'.$ext;
            $file->move('assets/uploads/member',$filename);
            $employee->image = $filename;

        }
        $employee->name = $request->input('name');
        $employee->designation = $request->input('designation');
        $employee->position = $request->input('position');
        $employee->department = $request->input('department');
        $employee->facebook = $request->input('facebook');
        $employee->twitter = $request->input('twitter');
        $employee->instagram = $request->input('instagram');
        $employee->linkedin = $request->input('linkedin');
        $employee->update();
        return redirect('employees')->with('status',"Member Updated Successfully");
    }
    public function destroy($id)
    {
        $employee = Employer::find($id);
        if($employee->image)
        {
            $path='assets/uploads/member/'.$employee->image;
            if(isset($employee->image) && file_exists($path))
            {
                unlink($path);
            }
        }
        $employee->delete();
        return redirect('employees')->with('status',"Member deleted Successfully");
    }

}
