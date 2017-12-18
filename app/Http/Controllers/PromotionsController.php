<?php

namespace App\Http\Controllers;
use App\Promotion;
use Illuminate\Http\Request;

class PromotionsController extends Controller
{
    public function index()
    {
        $promotions = Promotion::all();
        return view('promotions.index',compact('promotions'));
    }

    public function show(Promotion $promotions)
    {
        return view('promotions.show',compact('promotions'));
    }
}
