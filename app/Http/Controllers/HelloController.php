<?php
# @Author: michaelegan
# @Date:   2019-09-24T15:02:20+01:00
# @Last modified by:   michaelegan
# @Last modified time: 2019-09-24T15:04:35+01:00




namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function hello()
    {
      return view('hello');
    }
}
