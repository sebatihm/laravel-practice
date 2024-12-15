<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveEnrollmentRequest;
use App\Models\Enrollment;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    public function __construct() {
        $this->middleware('auth')->except('show','index');
    }
    

    public function index(){
        $enrollments = Enrollment::get();

        return view('enrollments',['enrollments' => $enrollments]);
    }

    public function show($id){
        $enroll = Enrollment::FindOrFail($id);
        return view('enrollments.show',['enroll' => $enroll]);
    }

    public function create(){
        return view('enrollments.create',['enroll' =>new Enrollment]);
    }

    public function store(SaveEnrollmentRequest $request){
        Enrollment::create($request->validated());

        return to_route('groups.index');

    }
    
    public function edit($enroll){
        $enroll = Enrollment::FindOrFail($enroll);
        return view('enrollments.edit',['enroll' => $enroll]);
    }

    public function update(SaveEnrollmentRequest $request,$enroll){
        $enroll = Enrollment::find($enroll);
        $enroll->update($request->validated());

        return to_route('groups.show', $enroll);
    }

    public function destroy($id){
        $id = Enrollment::FindOrFail($id);
        $id->delete();

        return to_route('groups.index');
    }
}
