<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function index() {
      echo "Redirecting to controller's action.";
      //redirect()->action('RedirectController@index');
      //redirect()->route('/get');
   }
}
