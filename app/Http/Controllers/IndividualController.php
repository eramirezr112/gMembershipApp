<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Individual;

class IndividualController extends Controller
{
    public function index($id = null) {
        if ($id == null) {
            return Individual::orderBy('id', 'asc')->get();
        } else {
            return $this->show($id);
        }
    }

    public function store(Request $request) {

        $individual = new Individual;
        $individual->name = $request->input('params')['name'];
        $individual->lastName = $request->input('params')['lastName'];
        $individual->email = $request->input('params')['email'];
        $individual->save();

        return 'Individual Created with id: '. $individual->id;
    }

    public function show($id) {
        return Individual::find($id);
    }

    public function update(Request $request, $id) {

        $individual = Individual::find($id);
        $individual->name = $request->input('params')['name'];
        $individual->lastName = $request->input('params')['lastName'];
        $individual->email = $request->input('params')['email'];
        $individual->save();

        return 'Individual Updated with id: '. $individual->id;
    }

    public function destroy($id) {
        $individual = Individual::find($id)->delete();

        return 'Individual record deleted';

    }
}
