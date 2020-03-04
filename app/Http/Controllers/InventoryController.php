<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class InventoryController extends Controller
{
    //
      public function index()
    {
    	$user = User::all();
    	return view('inventory.index')->with('users', $user);
    }
}
