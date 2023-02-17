<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\player;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $player = Player::all();
        return view('players.index', compact(['player']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('players.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*    $extension = $request->file('image')->getClientOriginalExtension();
        $newName = $request->name . '.' . now()->timestamp . '.' . $extension;
        $request->file('image')->storeAs('images', $newName); */
        // !uplaod image
        $image = $request->file('image');
        $image->storeAs('public/images', $image->hashName());

        /*   Player::create([
            'name' => $request->name,
            'nim' => $request->nim,
            'gender' => $request->gender,
            'kelas' => $request->kelas,
            'image' => $image->hashName()
        ]); */
        //

        Player::create($request->except('_token', 'submit'));
        return redirect('/players')->with(['success' => "data berhasil di simpan"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // ! Edit menggunakan ::find

        $player = Player::find($id);

        return view('players.edit', compact(['player']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $player = Player::find($id);

        $player->update($request->except('_token', 'submit'));
        return redirect('/players');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $player = Player::find($id);
        $player->delete();
        return redirect('/players');
    }
}