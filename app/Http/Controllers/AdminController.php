<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Models\JobApplication;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $unreadMessageCount = Contact::where('status', '0')->count();
        $totalApplications = JobApplication::count();
        return view('admin.index',compact('unreadMessageCount', 'totalApplications'));
    }
 }
