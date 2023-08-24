<?php

namespace App\Http\Controllers;
use App\Models\Materiel;


use Illuminate\Http\Request;

class DashboardController extends Controller
{
 public function index()
{
    $totalMateriels = Materiel::count();
    return view('dashboard', compact("totalMateriels"));



}

}
