<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;

class ServicesController extends Controller
{
    public function index(){
        return response([
            'services' => Services::orderBy('created_at','desc')
            ->get()
        ],200);
    }
}
