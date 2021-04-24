<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Companies;
class CompaniesController extends Controller
{
    public function index(){
       // $companies= Companies:: all();
        $companies= Companies:: paginate(7);
        return view('Companies.index', compact('companies'));
    }
}
