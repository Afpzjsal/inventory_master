<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;
use App\Models\Supplier;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
   public function index()
   {
    return view('pages.history.index');
   }



}
