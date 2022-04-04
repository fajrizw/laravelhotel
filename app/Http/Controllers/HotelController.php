<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;

class HotelController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotels = Hotel::all();
        return view('hotel', ['hotels' => $hotels]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'location' => 'required',
            'price' => 'required',
            'fasilitate' => 'required',
            'desc' => 'required',
            'image'=>'required',
            'image.*'=> 'image|file|max:2048']);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path().'/image/', $imageName);
        $hotel = Hotel::create([
            'name' => $request['name'],
            'location' => $request['location'],
            'price' => $request['price'],
            'fasilitate'=>$request['fasilitate'],
            'desc'=>$request['desc'],
            'image'=>$imageName]);

        return redirect('/hotel')->with('success', 'Hotel has been added.');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hotel = Hotel::findorFail($id);
        $hotels = Hotel::all();
        return view('detail', [
        'hotel' => $hotel,
        'hotels' => $hotels
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
        $hotel = Hotel::findorfail($id);
        return view('edit', [
            'title' => 'Hotel',
            'hotel' => $hotel

        ]);
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
        $request->validate([
            'name' => 'required',
            'location' => 'required',
            'price' => 'required',
            'fasilitate' => 'required',
            'desc' => 'required',
            'image'=>'required',
            'image.*'=> 'audio|file|max:2048']);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path().'/image/', $imageName);
        $hotel = Hotel::find($id)->update([
            'name' => $request['name'],
            'location' => $request['location'],
            'price' => $request['price'],
            'fasilitate'=>$request['fasilitate'],
            'desc'=>$request['desc'],
            'image'=>$imageName]);

        return redirect('/hotel')->with('success', 'Hotel has been added.');
    
    }
    
    
    
  

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hotel = Hotel::find($id);
        $hotel->delete();
        return redirect('hotel')->with('success', 'Hotel has been deleted.');
    }
}
