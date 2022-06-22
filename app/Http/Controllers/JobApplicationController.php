<?php

namespace App\Http\Controllers;

use App\Models\JobApplication;
use Illuminate\Http\Request;

class JobApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function insertAPI(Request $request)
    {
        date_default_timezone_set("Asia/Dhaka");
        $this->validate($request, [
            'jobId' => 'required',
            'name' => 'required',
            'experience' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'resume' => 'required',

        ]);

        $application = new JobApplication();
        $application->jobId = $request->input('jobId');
        $application->name = $request->input('name');
        $application->experience = $request->input('experience');
        $application->email = $request->input('email');
        $application->phone = $request->input('phone');
        $application->portfolio = $request->input('portfolio');
        $application->linkedin = $request->input('linkedin');

        if ($request->hasFile('resume')) {
            $file = $request->file('resume');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . ' ' . $application->name . '.' . $ext;
            $file->move('assets/uploads/applied-job-resume', $filename);
            $application->resume = $filename;
        }

        //------ Send SMS After Apply ------
        if($application->save() == 1){
            $url = "http://66.45.237.70/api.php";
            $number = $application->phone;
            $text = "$application->name,\r\nWe have received your application.\r\n\r\nExcel IT AI";
            $data = array(
                'username' => "ShahidMahmum",
                'password' => "Shahid26@.",
                'number' => "$number",
                'message' => "$text",
            );
    
            $ch = curl_init(); // Initialize cURL
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $smsresult = curl_exec($ch);
            $p = explode("|", $smsresult);
            $sendstatus = $p[0];
        }
       
        return $application->save();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JobApplication  $jobApplication
     * @return \Illuminate\Http\Response
     */
    public function show(JobApplication $jobApplication)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JobApplication  $jobApplication
     * @return \Illuminate\Http\Response
     */
    public function edit(JobApplication $jobApplication)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JobApplication  $jobApplication
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JobApplication $jobApplication)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JobApplication  $jobApplication
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobApplication $jobApplication)
    {
        //
    }

    // $url = "http://66.45.237.70/api.php";
    //     $number=$request->mobile;
    //     $text="Your Bpp Shops OTP Code is ".$otp;
    //     $data= array(
    //     'username'=>"ShahidMahmum",
    //     'password'=>"Shahid26@.",
    //     'number'=>"$number",
    //     'message'=>"$text"
    //     );

    //     $ch = curl_init(); // Initialize cURL
    //     curl_setopt($ch, CURLOPT_URL,$url);
    //     curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //     $smsresult = curl_exec($ch);
    //     $p = explode("|",$smsresult);
    //     $sendstatus = $p[0];
}
