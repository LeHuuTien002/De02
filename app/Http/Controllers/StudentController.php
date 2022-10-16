<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function get_all_student(){
        $students = Student::all(); //fetch all products from DB
        return view('students.student_manage', ['students' => $students]);
    }
    public function get_student_by_id($id){
        $student = Student::findOrFail($id);
        return view('students.student_edit',['student' => $student]);
    }
    public function student_edit(Request $request, $id){
        $student = Student::findOrFail($id);
        $student->fullname = $request->txtFullName;
        $student->birthday = $request->txtBirthday;
        $student->address = $request->txtAddress;
        $student->save();
        return redirect('/student');
    }
    public function create(){
        return view('students.add');
    }
    public function add(Request $request){
        $student = new Student;
        $student->fullname = $request->txtFullName;
        $student->birthday = $request->txtBirthday;
        $student->address = $request->txtAddress;
        $student->save();
        return redirect('/student');
    }
    public function del ($id){
        $student = Student::FindOrFail($id);
        $student->delete();
        return redirect('/student');
    }
    public function show($id){
        $student = Student::findOrFail($id);
        return view('students.show', ['student' => $student]);
    }
}
