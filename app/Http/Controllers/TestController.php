<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class   TestController extends Controller
{
    public function index()
    {

        // $test = new test();
        // $test->name = 'masum ahmed';
        // $test->email = 'masumahmed@gmail.com';
        // $test->phone = '01700000000';
        // $test->save();

        $query = 'SELECT @@global.time_zone, @@session.time_zone';


        $res = Test::query($query);
        // Test::create($test);

        // dd('hello world');


        dd($res);

        // return view('test.index');
    }
}
