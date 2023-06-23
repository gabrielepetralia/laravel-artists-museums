<?php

namespace App\Http\Controllers;

use App\Models\Artwork;
use Illuminate\Http\Request;

class PageController extends Controller
{
  public function index()
  {
    return view('home');
  }
}
