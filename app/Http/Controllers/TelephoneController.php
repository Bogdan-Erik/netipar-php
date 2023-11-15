<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTelephoneRequest;
use App\Models\Name;
use App\Models\Telephone;
use Illuminate\Support\Facades\Session;
use Inertia\Inertia;

class TelephoneController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create(Name $name): \Inertia\Response
    {
        return Inertia::render('CreateTelephone', [
            'name' => $name,
            'title' => 'Új telefonszám hozzáadása',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTelephoneRequest $request, Name $name): \Illuminate\Http\RedirectResponse
    {
        try {
            $name->telephones()->create($request->validated());

            Session::flash('message', 'Sikeres telefonszám hozzáadás!');
        } catch (\Exception $e) {
            Session::flash('message', 'Hiba történt az email cím létrehozása közben közben: ' . $e->getMessage());
        }

        return redirect()->route('names.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Telephone $telephone): \Illuminate\Http\RedirectResponse
    {
        try {
            $telephone->delete();
            Session::flash('message', 'Sikeres törlés!');
        } catch (\Exception $e) {
            Session::flash('message', 'Hiba történt a telefonszám törlése közben közben: ' . $e->getMessage());
        }

        return redirect()->route('names.index');
    }
}
