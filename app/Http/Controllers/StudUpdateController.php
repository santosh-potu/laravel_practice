<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class StudUpdateController extends Controller
{
    public function index() {
      $users = DB::select('select * from student');
      return view('stud_edit_view',['users'=>$users]);
   }
    public function show(Request $request){
        $users = DB::table('student')->where('id',$request->id)->get();
        return view('stud_update',['users'=>$users]);
    }
    
     public function edit(Request $request,$id) { 
     $name = $request->input('stud_name');
      //DB::update('update student set name = ? where id = ?',[$name,$id]);
     DB::table('student')
            ->where('id', $id)
            ->update(['name' => $name]);
      echo "Record updated successfully.<br/>";
      echo '<a href = "/edit-records">Click Here</a> to go back.';
   }
}
