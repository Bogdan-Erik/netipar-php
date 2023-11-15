<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmailRequest;
use App\Http\Requests\UpdateEmailRequest;
use App\Models\Email;
use App\Models\Name;
use Illuminate\Support\Facades\Session;
use Inertia\Inertia;

class EmailController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create(Name $name): \Inertia\Response
    {
        return Inertia::render('CreateEmail', [
            'name' => $name,
            'title' => 'Új email cím hozzáadása',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmailRequest $request, Name $name): \Illuminate\Http\RedirectResponse
    {
        try {
            $name->emails()->create($request->validated());

            Session::flash('message', 'Sikeres email hozzáadás!');
        } catch (\Exception $e) {
            Session::flash('error', 'Hiba történt az email cím létrehozása közben közben: ' . $e->getMessage());
        }

        return redirect()->route('names.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Email $email): \Illuminate\Http\RedirectResponse
    {
        try {
            $email->delete();
            Session::flash('message', 'Sikeres törlés!');
        } catch (\Exception $e) {
            Session::flash('error', 'Hiba történt az email cím törlése közben közben: ' . $e->getMessage());
        }

        return redirect()->route('names.index');
    }
}
