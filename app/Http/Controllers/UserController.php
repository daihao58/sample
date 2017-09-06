<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
    public function create(){
        return view('users.create');
    }
}