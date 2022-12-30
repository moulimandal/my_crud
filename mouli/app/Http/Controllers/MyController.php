<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\models\post;
use App\models\muser;
use App\models\mstate;
use App\models\mgender;

use Illuminate\Console\View\Components\Confirm;
use Symfony\Contracts\Service\Attribute\Required;
use Yajra\DataTables\DataTables;

class MyController extends Controller
{
    public function merge()
    {
        $user = muser::all();
        $state = mstate::all();
        $gender = mgender::all();

        return view('show', ['ser' => $user, 'sta' => $state, 'gen' => $gender]);
    }

    // public function showTable()
    // {
    //     $value = post::with('mergeuser', 'mergegender', 'mergestate')->get();
    //     // dd($value);
    //     return response()->json([
    //         'values' => $value,
    //     ]);
    // }

    public function modalstore(Request $request)
    {
        $request->validate(
            [
                'user' => 'Required',
                'name' => 'Required|max:10|string',
                'last_name' => 'required|max:10|string',
                'email' => 'required|email|max:25|unique:pt,email',
                'password' => 'required|Confirmed',
                'password_confirmation' => 'required',
                'phoneno' => 'required|min:10|max:10',
                'gender' => 'Required',
                'dob' => 'Required',
                'address' => 'Required',
                'state' => 'Required',



            ],
            [
                'user.required' => '**Please select one',
                'name.required' => '**Please enter your name',
                'last_name.required' => '**Please enter your last name is required',
                'email.required' => '**Please enter valid email address',
                'email.unique' => '**This email address already exist',
                'password.required' => '**Please enter your password',
                'password_confirmation.required' => '**Please confirm your password',
                'phoneno.required' => '**Please enter 10 digit phone number',
                'gender.required' => '**Please enter your gender',
                'dob.required' => '**Please enter your date of birth',
                'address.required' => '**Please enter your address',
                'state.required' => '**Please choose your state',




            ]

        );
        $pose = new post;
        $pose->user = $request->get('user');
        $pose->name = $request->get('name');
        $pose->last_name = $request->get('last_name');
        $pose->dob = $request->get('dob');
        $pose->gender = $request->get('gender');
        $pose->email = $request->get('email');
        $pose->password = $request->get('password');
        $pose->cpassword = $request->get('password_confirmation');
        $pose->phoneno = $request->get('phoneno');
        $pose->state = $request->get('state');
        $pose->address = $request->get('address');

        $pose->save();
        // $f = $request->get('name');
        // $l = $request->get('last_name');

        // return $pose;
        // dd($pose);

        // return response()->json([
        //     'message' => 'student added successfully',
        // ]);
        return "succ...";
    }

    public function editTable($id)
    {

        $val = post::with('mergeuser', 'mergegender', 'mergestate')->find($id);
        if ($val) {
            return response()->json([
                'poste' => $val,
            ]);
        }
    }
    public function updateTable(Request $request, $id)
    {
        $request->validate(
            [

                'user' => 'Required',
                'name' => 'Required|max:20|string',
                'last_name' => 'required|max:20|string',
                'email' => 'required|email',
                'password' => 'required|Confirmed',
                'password_confirmation' => 'required',
                'phoneno' => 'required|min:10|max:10',
                // 'gender' => 'required',
                'dob' => 'Required',
                'address' => 'Required',
                'state' => 'Required',


            ],
            [
                'user.required' => '**Please select one',
                'name.required' => '**Please enter your name',
                'last_name.required' => '**Please enter your last name is required',
                'email.required' => '**Please enter valid email address',
                // 'email.unique' => '**This email address already exist',
                'password.required' => '**Please enter your password',
                'password_confirmation.required' => '**Please confirm your password',
                'phoneno.required' => '**Please enter 10 digit phone number',
                'gender.required' => '**Please enter your gender',
                'dob.required' => '**Please enter your date of birth',
                'address.required' => '**Please enter your address',
                'state.required' => '**Please choose your state',



            ]

        );
        $vals = post::find($id);
        $vals->user = $request->get('user');
        $vals->name = $request->get('name');
        $vals->last_name = $request->get('last_name');
        $vals->dob = $request->get('dob');
        $vals->gender = $request->get('gender');
        $vals->email = $request->get('email');
        $vals->password = $request->get('password');
        $vals->cpassword = $request->get('password_confirmation');
        $vals->phoneno = $request->get('phoneno');
        $vals->state = $request->get('state');
        $vals->address = $request->get('address');
        $vals->save();
        return response()->json([
            'message' => ' upadte successfully',
        ]);
    }

    public function deteteTable($id)
    {
        $del = post::with('mergeuser', 'mergegender', 'mergestate')->find($id);
        $del->delete();
        // $a = $del->name;
        // $b = $del->last_name;
        return response()->json([
            'message' => 'deletd successfully',
        ]);
    }

    public function status($id)
    {
        $sta = post::find($id);
        if ($sta->status == '1') {
            $sta->status = 0;
        } else {
            $sta->status = 1;
        }
        $sta->save();
        return response()->json([
            'message' => 'status updated',
        ]);
    }
    public function datatable()
    {
        $data = post::with('mergeuser', 'mergegender', 'mergestate')->get();
        return DataTables::of($data)->addIndexColumn()
        ->addColumn('edit',function($valu){
            $edit= '<button name="edit" id="' . $valu->id . '" class="edit_u btn btn-warning btn-sm mt-2" data-toggle="modal" data-target="#edit_Modal">Edit</button>';
            return $edit;
        })
        ->addColumn('delete',function($valu){
            $delete= '<button type="button name="delete" id="'. $valu->id.'" class="delete_u btn btn-danger btn-sm mt-2" data-toggle="modal" data-target="#deleteModal">delete</button>';
                 return $delete;
        })
         ->addColumn('status', function ($valu) {
          if($valu->status=='1'){
                $enable= '<button type="button name="enable" id="' . $valu->id . '"  class="st_u  btn btn-success btn-sm mt-2" data-toggle="modal" data-target="#status_Modal">Enable</button>';
            return $enable;
          }
         else 
         {
            $disable ='<button type="button name="enable" id="' . $valu->id . '" class="st_u  btn btn-info btn-sm mt-2" data-toggle="modal" data-target="#status_Modal">Disable</button>';
            return $disable;
         }
        })

        ->rawColumns(['edit','delete','status'])
        ->make(true);
    }
}
