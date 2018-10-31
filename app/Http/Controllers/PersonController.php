<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;
use App\Profile;
use App\App;
use App\Http\Resources\PersonResource;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return PersonResource::collection(Person::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $person = Person::create($request->all());
        $apps = App::find($request['apps']);
        $person->apps()->attach($apps);
        return new PersonResource($person);
    }

    /**
     * Display the specified resource.
     *
     * @param  Person $person
     * @return \Illuminate\Http\Response
     */
    public function show(Person $person)
    {
        return new PersonResource($person);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Person  $person
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Person $person)
    {
        $person->update($request->all());
        return new PersonResource($person);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Person  $person
     * @return \Illuminate\Http\Response
     */
    public function destroy(Person $person)
    {
        $person->apps()->detach();
        $person->delete();
        return response()->json(null, 204);
    }
}
