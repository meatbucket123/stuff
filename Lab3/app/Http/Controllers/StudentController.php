<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function showForm()
    {
        return view('registration');
    }


    public function submitForm(Request $request)
    {

        $validated = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'student_number' => 'required',
            'gender' => 'required',
            'birthday' => 'required',
            'course' => 'required',
            'email' => 'required|email',
            'contact_number' => 'required',

        ]);


        // save data 2 sesh
        session(['student_data' => $validated]);

        // viewInfo redeirect
        return redirect()->route('viewInfo')->with('success', 'Registration Successful!');
    }

    // data display
    public function viewInfo(Request $request)
    {
        // Retrieve the data from the session
        $studentData = session('student_data');

        // form redirection if no darta exist
        if (!$studentData) {
            return redirect()->route('registration.form')->with('error', 'No student data found.');
        }

        // Pass the student data to the view
        return view('viewinfo', ['student' => $studentData]);
    }

    // Test URL
    public function TestURL()
    {
        return "This is a test page.";
    }
}
