<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;

class GroupController extends Controller
{

    public function index($id = null) {
        if ($id == null) {
            return Group::with('type')->orderBy('id', 'asc')->get();            
        } else {
            return $this->show($id);
        }
    }

    public function store(Request $request) {

        $group = new Group;
        $group->name = $request->input('params')['name'];
        $group->type_id = $request->input('params')['type']['id'];
        $group->save();

        return 'Group Created with id: '. $group->id;
    }

    public function show($id) {
        return Group::with('type')->find($id);
    }

    public function update(Request $request, $id) {

        $group = Group::find($id);
        $group->name = $request->input('params')['name'];
        $group->type_id = $request->input('params')['type']['id'];
        $group->save();

        return 'Group Updated with id: '. $group->id;
    }

    public function destroy($id) {
        $group = Group::find($id)->delete();

        return 'Group record deleted';

    }
}
