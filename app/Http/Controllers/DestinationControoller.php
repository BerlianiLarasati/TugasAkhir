<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;
use App\Models\Image;

class DestinationControoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $destinations = Destination::get();

        return response()->json([
            'data' => $destinations
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $destinations = new Destination();
        $destinations->name = $request->name;
        $destinations->address = $request->address;
        $destinations->address_url = $request->address_url;
        $destinations->description = $request->description;
        $destinations->area_id = $request->area_id;
        $destinations->user_id = $request->user_id;
        $destinations->save();

        $image = new Image();
        $image->image_url = $request->image_url;
        $image->save();

        return response()->json([
            'data' => $destinations
        ]);

        // 'name',
        // 'address',
        // 'address_url',
        // 'description',
        // 'area_id',
        // 'user_id' 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $destinations = Destination::find($id);

        return response()->json([
            'data' => $destinations
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $destinations = Destination::find($id);

        $destinations->name = $request->name;
        $destinations->address = $request->address;
        $destinations->address_url = $request->address_url;
        $destinations->description = $request->description;
        $destinations->area_id = $request->area_id;
        $destinations->user_id = $request->user_id;
        $destinations->save();

        return response()->json([
            'data' => $destinations
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destinations = Destinations::findOrFail($id);
        $destinations->delete();
        
        return response()->json([
            'message' => 'Destinations deleted'
        ]);
    }
}
