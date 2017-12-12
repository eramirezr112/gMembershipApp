<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Type;

class TypeController extends Controller
{
    public function index($id = null) {
        if ($id == null) {
            return Type::orderBy('id', 'asc')->get();
        } else {
            return $this->show($id);
        }
    }

    public function store(Request $request) {

        $type = new Type;
        $type->name = $request->input('params')['name'];
        $type->save();

        return 'Type Created with id: '. $type->id;
    }

    public function show($id) {
        return Type::find($id);
    }

    public function update(Request $request, $id) {

        $type = Type::find($id);
        $type->name = $request->input('params')['name'];
        $type->save();

        return 'Type Updated with id: '. $type->id;
    }

    public function destroy($id) {
        $type = Type::find($id)->delete();

        return 'Type record deleted';

    }
}
