<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    
    public function getIndex(){
    	return view('index');
    }

    public function getAbout(){
    	$fname = 'JUDE CLARK';
    	$lname = 'ERANA';
    	$fullname = $fname." ".$lname; 

    	
    	$data['firstname']= $fname;
    	$data['lastname']= $lname;
    	$data['fullname']= $fullname;
    	return view('about', $data);
    }

    public function getContact(){
    	
    	return view('contact');
    }
}
