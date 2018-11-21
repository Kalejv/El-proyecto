<?php

namespace Futbol\Http\Controllers;

use Futbol\Club;
use Illuminate\Http\Request;
use Futbol\Http\Requests\StoreClubRequest;

class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clubs = Club::all();
        return view('clubs.index', compact('clubs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clubs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClubRequest $request)
    {
        $club = new Club();

        if ($request->hasfile('avatar')) {
            $file = $request->file('avatar');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
        }

        $club->name = $request->input('name');
        $club->slug = $request->input('slug');
        $club->text = $request->input('text');
        $club->avatar = $name;
        $club->save();
        return redirect()->route('clubs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Club $club)
    {
        return view('clubs.show', compact('club'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Club $club)
    {
        return view('clubs.edit', compact('club'));
        return redirect()->route('clubs.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Club $club)
    {
        $club->fill($request->except('avatar'));
        if ($request->hasfile('avatar')) {
            $file = $request->file('avatar');
            $name = time().$file->getClientOriginalName();
            $club->avatar = $name;
            $file->move(public_path().'/images/', $name);
        }
        $club->save();
        return redirect()->route('clubs.show',[$club])->with('status', 'El Club ha sido actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Club $club)
    {
        $file_pauth = public_path().'/images/'.$club->avatar;
        \File::delete($file_pauth);
        $club->delete();
        return redirect()->route('clubs.index');
    }
}
