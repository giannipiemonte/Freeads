<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AdStore;
class AdController extends Controller
{
    public function index()
        {
            return view('create');
        }

        public function strore (AdStore $request){
        }
}
