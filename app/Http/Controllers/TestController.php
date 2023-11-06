<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
  public function index()
  {
    $user = User::find(1);
    $user["categories"] = $user->categories()->get();
    $user["tasks"] = $user->tasks()->get();

    return $user;
  }
}
