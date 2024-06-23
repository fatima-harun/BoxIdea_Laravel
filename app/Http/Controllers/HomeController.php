<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Idee;

class HomeController extends Controller
{
    public function index(){

      $idees = Idee::all();

      return view('personnels.home', compact('idees'));
    }
}
