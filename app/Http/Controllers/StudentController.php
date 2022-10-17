<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function get_all_student()
    {
        return view('student_manage', [
            'students' => Student::get()
        ]);
    }

    public function get_student_by_id($id)
    {
        return view('student_edit', [
            'student' => Student::find($id)
        ]);
    }

    public function edit(Request $request, $id)
    {
        $updated = Student::where('id', $id)->update([
            'fullname' => $request->post('fullname'),
            'birthday' => $request->post('birthday'),
            'address' => $request->post('address')
        ]);

        return redirect(route('student.index'))->with('success', $updated);
    }
}
