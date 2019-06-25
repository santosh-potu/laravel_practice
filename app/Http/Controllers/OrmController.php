<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class OrmController extends Controller
{
    //
    public function getMessages(){
        $employees = \App\Employee::where('salary','>','10000')
                                    ->orderBy('salary','DESC')
                                    ->get();
        
        foreach($employees as $employee){
            echo $employee->id." - "
                 .$employee->name." - ".
                  $employee->salary."<br/>";
        }
    }
}
