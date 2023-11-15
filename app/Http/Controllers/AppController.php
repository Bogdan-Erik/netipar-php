<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNameRequest;
use App\Http\Requests\UpdateNameRequest;
use App\Models\Name;
use Illuminate\Support\Facades\Session;
use Inertia\Inertia;

class AppController extends Controller
{
/**
 * Display a listing of the resource.
 *
 * @return \Inertia\Response
 */
    public function index(): \Inertia\Response
    {
        $names = Name::with('emails')->get();

        return Inertia::render('NamesList', [
            'title' => 'Nevek listája',
            'names' => $names,
        ]);
    }

/**
 * Create page for the new resource.
 *
 * @return \Inertia\Response
 */
    public function create(): \Inertia\Response
    {
        return Inertia::render('CreateName', [
            'title' => 'Új név felvétele',
        ]);
    }

    /**
     * Modify the given name.
     *
     * @param  Name  $name
     * @return \Inertia\Response
     */
    public function modify(Name $name): \Inertia\Response
    {
        return Inertia::render('ModifyName', [
            'record' => $name,
            'title' => 'Név szerkesztése',
        ]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Name  $name
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateNameRequest $request, Name $name): \Illuminate\Http\RedirectResponse
    {
        try {
            $name->update($request->all());
            Session::flash('message', 'Sikeres név módosítás!');
        } catch (\Exception $e) {
            Session::flash('error', 'Hiba történt a név módosítása közben: ' . $e->getMessage());
        }

        Session::flash('message', 'Sikeres név módosítás!');

        return redirect()->route('names.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreNameRequest $request): \Illuminate\Http\RedirectResponse
    {
        try {
            Name::create($request->validated());
            Session::flash('message', 'Sikeres hozzáadás!');
        } catch (\Exception $e) {
            Session::flash('error', 'Hiba történt a név létrehozása közben közben: ' . $e->getMessage());
        }

        return redirect()->route('names.index');
    }

    /**
     * Delete the given name.
     *
     * @param  Name  $name
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Name $name): \Illuminate\Http\RedirectResponse
    {
        try {
            $name->delete();
            Session::flash('message', 'Sikeres törlés!');
        } catch (\Exception $e) {
            Session::flash('error', 'Hiba történt a név törlése közben közben: ' . $e->getMessage());
        }

        return redirect()->route('names.index');
    }
}
