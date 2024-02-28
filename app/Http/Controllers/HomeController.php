<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
   function index() {
    $users = User::all();
    return view('tela-principal',compact('users'));
   }
}
