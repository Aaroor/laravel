<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB as DB;
use Request;
//use DB;
use App\config;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use App\Contact;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;

$values=DB::table('users')
->where('email','=','aarooran@gmail.com')
->where('password','=','test325')
->first();

echo "$values->username";
