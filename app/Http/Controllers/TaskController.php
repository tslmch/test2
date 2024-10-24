<?php

namespace App\Http\Controllers;
use App\Models\Task;

use Illuminate\Http\Request;

class TaskController extends Controller
{
  public function index(Request $request)
    {
    return view('index');
    }

  public function store(Task $tasks)  
  {

  }

  public function update( Request $request, Task $tasks)
  {

  }
}
