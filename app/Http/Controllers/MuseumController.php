<?php

namespace App\Http\Controllers;

use App\Models\Museum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MuseumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $museums = Museum::all();

      return view('museums.index', compact('museums'));
    }

    public function museums_distance($param)
    {
      // Creare la View con SQL (tabella solo lettura)
      // CREATE OR REPLACE VIEW coordinates AS
      // SELECT name,id, ST_Distance_sphere(POINT(coordinate_x, coordinate_y), POINT(45, 5)) / 1000 AS distance FROM museums ORDER BY distance;

      $sql = 'SELECT * FROM coordinates';

      $museums = DB::select(DB::raw($sql));

      return view('museums.museums_distance', compact('museums', 'param'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('museums.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $form_data = $request->all();

      $new_museum = new Museum();

      $new_museum->fill($form_data);

      $new_museum->save();

      return redirect()->route('museums.show', $new_museum);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Museum  $museum
     * @return \Illuminate\Http\Response
     */
    public function show(Museum $museum)
    {
        return view('museums.show', compact('museum'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Museum  $museum
     * @return \Illuminate\Http\Response
     */
    public function edit(Museum $museum)
    {
        return view('museums.edit', compact('museum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Museum  $museum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Museum $museum)
    {
      $form_data = $request->all();

      $museum->update($form_data);

      return redirect()->route('museums.show', compact('museum'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Museum  $museum
     * @return \Illuminate\Http\Response
     */
    public function destroy(Museum $museum)
    {
      $museum->delete();
      return redirect()->route('museums.index')->with('trashElement', "'$museum->name' è stato eliminato correttamente");
    }
}
