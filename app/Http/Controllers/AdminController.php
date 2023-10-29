<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Services;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function homePage(){
        $page_title = "Admin - Dashboard";
        return view('admin.home',compact('page_title'));
    }

    public function services(){
        $page_title = "Admin - Services";
        $service_data = Services::all();
        return view('admin.services',compact('page_title','service_data'));
    }

    public function orders(){
        $page_title = "Admin - Orders";
        $order_data = Order::all();
        return view('admin.orders',compact('page_title','order_data'));
    }
}
