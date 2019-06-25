<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class PagingController extends Controller
{
    //
    
    public function index(){
        $users = DB::table('employee')->paginate(2);
        
        return view('paging_test',['users'=>$users]);
    }
}
