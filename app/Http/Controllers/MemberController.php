<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;

class MemberController extends Controller
{
    public function index($id = null) {
        if ($id == null) {
            return Member::orderBy('id', 'asc')->get();            
        } else {
            return $this->members_by_group($id);
        }
    }

    public function store(Request $request) {

        $newMembers = "";
        foreach ($request->input('params')['list'] as $new) {
            if ($new['isChecked']) {
                $member = new Member;
                $member->group_id = $request->input('params')['idGroup'];
                $member->person_id = $new['id'];
                $member->save();
                $newMembers .= $new['id'] . ", ";
            }
        }

        $newMembers = substr($newMembers, 0, -2);

        return 'New Members in this Group: '. $request->input('params')['idGroup'] . " are ($newMembers)";
    }

    public function members_by_group($id) {
        return Member::join('person', 'person_id', '=', 'person.id')
            ->where('group_id', '=', $id)
            ->select('person.*')
            ->get();
    }

    public function destroy(Request $request) {

        $removeMembers = "";
        foreach ($request->input('params')['list'] as $remove) {
            if ($remove['isChecked']) {

                $member = Member::where([
                            ['group_id', '=', $request->input('params')['idGroup']],
                            ['person_id', '=', $remove['id']]
                        ])->get();
                
                Member::find($member[0]->id)->delete();
                
                $removeMembers .= $remove['id'] . ", ";
            }
        }

        $removeMembers = substr($removeMembers, 0, -2);        

        return 'Members Removed from this Group ('. $request->input('params')['idGroup'] . "): $removeMembers";

    }

}
