<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\experiance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class contentController extends Controller
{
    public function experiancelist (){
        $experiance = DB::select('select * from experiance');

        if ($experiance){
            return view('admin.experiance')->with('experiance', $experiance);
        } else {
            return 'racxa moxda simon da ar daseleqtda';
        }
    }

    public function deleteexp ($id){
        $deleted = DB::table('experiance')->where('id','=', $id)->delete();
        if ($deleted){
            return view('admin.experiance')->with('successdelexp', "exp deleted");
        }

    }

    public function createexppage (){

        return view('admin.createexp');

    }

    public function saveexp(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'type' => 'required',
//            'email' => 'required|email|unique:Admins',
//            'password' => 'required|min:8|max:20',
        ]);

        $expe = new experiance;
        $expe->title = $request->title;
        $expe->teaser_date = $request->teaser_date;
        $expe->teaser = $request->teaser;
        $expe->description = $request->description;
        $expe->type = $request->type;
        $save = $expe->save();




        if ($save) {
            return redirect('admin/experiance')->with('successaddexp', 'administrator Successfully added');
        } else {
            return back()->with('fail', 'Something wrong');
        }
    }

}
