<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNameRequest;
use App\Models\Name;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Inertia\Inertia;

  class AppController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $names = Name::all();

        return Inertia::render('NamesList', [
            'title' => 'Nevek listája',
            'names' => $names,
          ]);
    }

    /**
     * Display a listing of the resource.
     */
    public function create()
    {
        return Inertia::render('CreateName', [
            'title' => 'Új név felvétele',
          ]);
    }

    public function store(StoreNameRequest $request)
    {
        Name::create($request->validated());

        Session::flash('message', 'Sikeres hozzáadás!');

        return redirect()->route('names.index');
    }
}
