<?php

namespace App\Http\Controllers;
use App\Http\Requests\CreatePromotionsRequest;
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

    public function create()
    {
        return view('promotions.create');
    }

    public function store(CreatePromotionsRequest $request)
    {
        Promotion::create($request->all());
        return 'Completado';
    }
}
