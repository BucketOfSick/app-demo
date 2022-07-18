<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuitarsController extends Controller
{
    private static function getData() {
        return [
            ['id' => 1, 'name' =>'Auto1', 'brand' => 'BMW'],
            ['id' => 2, 'name' =>'Auto2', 'brand' => 'Audi'],
            ['id' => 3, 'name' =>'Auto3', 'brand' => 'Ford'],
            ['id' => 4, 'name' =>'Auto4', 'brand' => 'lambo']
        ];
    } 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // GET

        return view('guitars.index', [
            'guitars' => self::getData(),
            'userInput' => '<script>alert("Hello")</script>'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // GET
        return view('guitars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // POST
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($guitar)
    {
        // GET 
        $guitars = self::getData();

        $index = array_search($guitar, array_column($guitars, 'id'));

        if ($index === false) {
            abort(404);
        }

        return view('guitars.show', [
            'guitar' => $guitars[$index]
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
        // GET
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
        // POST
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // DELETE
    }
}
