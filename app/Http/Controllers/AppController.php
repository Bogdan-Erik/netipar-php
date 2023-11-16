<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNameRequest;
use App\Http\Requests\UpdateNameRequest;
use App\Http\Resources\NameResource;
use App\Models\Name;
use App\Traits\FileUploadTrait;
use Illuminate\Support\Facades\Session;
use Inertia\Inertia;

class AppController extends Controller
{

    use FileUploadTrait;
/**
 * Display a listing of the resource.
 *
 * @return \Inertia\Response
 */
    public function index(): \Inertia\Response
    {
        $names = Name::with(['emails', 'telephones'])->get();
        $nameResources = NameResource::collection($names);

        return Inertia::render('NamesList', [
            'title' => 'Nevek listája',
            'names' => $nameResources,
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
            'record' => new NameResource($name),
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
        $data = $request->validated();

        try {
            if ($request->hasFile('picture')) {
                $data['picture'] =  $this->uploadImage($request->file('picture'));
            } else {
                $data['picture'] = $name->picture;
            }

            $data['mail_address'] = $request->get('same_address') ? $request->get('address') : $data['mail_address'];


            $name->update($data);
            Session::flash('message', 'Sikeres név módosítás!');
        } catch (\Exception $e) {
            Session::flash('ercror', 'Hiba történt a név módosítása közben: ' . $e->getMessage());
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
        $data = $request->validated();

        try {
            if ($request->hasFile('picture')) {
                $data['picture'] =  $this->uploadImage($request->file('picture'));
            }

            $data['mail_address'] = $request->get('same_address') ? $request->get('address') : $data['mail_address'];

            Name::create($data);
            Session::flash('message', 'Sikeres hozzáadás!');
        } catch (\Exception $e) {
            Session::flash('message', 'Hiba történt a név létrehozása közben közben: ' . $e->getMessage());
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
