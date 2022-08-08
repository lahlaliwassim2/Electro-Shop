<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;

class ComputerController extends Controller
{
        //array of static data
        // private static function getData(){
        //     // return [
        //     //     ['id' => 1 , 'name' => 'LG ' , 'origin' => 'Koria'],
        //     //     ['id' => 2 , 'name' => 'HP ' , 'origin' => 'USA'],
        //     //     ['id' =>3 , 'name' => 'Siemens ' , 'origin' => 'Germany']
        //     // ];
        // }




    /**
     *
     *
     *
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('computers.index', [
            'computers'=>Computer::all()
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
        return view(('computers.create'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */




    public function store(Request $request)
    {
        //validation
        $request->validate([
            'computer-name' => 'required',
            'computer-origin' =>'required',
            'computer-price' => ['required','integer']  //or => 'required|integer';

        ]);




        $computer = new Computer();
        $computer->name = strip_tags($request->input('computer-name')); //dryouruserinput
        $computer->origin = strip_tags($request->input('computer-origin'));
        $computer->price = strip_tags($request->input('computer-price'));

        $computer->save();
        return redirect()->route('computers.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($computer)
    {
        //
            $index = Computer::findOrFail($computer);


            return view('computers.show',[
                'computer'=> $index
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
