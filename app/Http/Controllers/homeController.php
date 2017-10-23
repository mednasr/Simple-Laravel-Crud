<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use home;
use App\user;

class homeController extends Controller
{
    public function index()
    {
        $user = user::find(1)->passport; // one to one relationdhip
        return view('test',compact('user'));

        // return view('test');
        // $data = home::all();
        // $sum=5+5;
        // return $sum;
        // return view('test',compact('sum'));

        /* pass parameter from controller to views */

        $tests=['this','is','test'];
        /* 1ere methode*/
        //  return view('test',['tests'=>$tests]);
        /*eme methode*/
        //  return view('test')->with(['tests'=>$tests]);
        /*3eme methode*/
        // return view('test')->withTests($tests);
        /*4eme methode*/
      //  return view('test',compact('tests'));
    }
    //
}
