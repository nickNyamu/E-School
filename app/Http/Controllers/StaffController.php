<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staffs = Staff::latest()->paginate(5);

        return view('teachers', compact('staffs'))
            ->with('i', (request()->input('page', 1) -1) *5);
    }

    public function login()
    {
        return view('teacher.login');
    }

    public function check(Request $request){
        $request -> validate([
            'email' => 'required|email|exists:admins,email',
            'password' => 'required'
        ],[
            'email.exists'=>'The email does not exist'
        ]);

        $creds = $request->only('email', 'password');

        if(Auth::attempt($creds)){
            return redirect()->route('teacher.home');
        }else{
            return redirect()->route('teacher.login')->with('fail', 'Incorrect credentials');
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'nationalID' => 'required',
            'telNo' => 'required',
            'hCounty' => 'required',
            'status' => 'required',
            'role' => 'required',
            'password' => 'required'
            
        ]);

        Staff::create($request->all());

        return redirect()->route('teachers');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
