<?php

namespace App\Http\Controllers;

use App\Models\faculty;
use Illuminate\Http\Request;
use App\Models\term;
use App\Models\subjectMaster;

class usercontroller extends Controller
{
    public function subject(){
       $data = term::all();
       return view('subject',['items' => $data]);
    }

    public function subjectAdd(Request $request)
    {
        $data = new subjectMaster;
        $data->subject = $request->subject;
        $data->term_id = $request->term_id;
        $data->save();
        return redirect('/subjectlist');
    }

    public function subjectlist()
    {
        $data = subjectMaster::all();
        return view('subjectlist',['items' => $data]);
    }

    public function facultyAdd(Request $request)
    {
        $data = new faculty;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->save();
        return redirect('/subjectlist');
    }

    public function facultylist()
    {
        $data = faculty::all();
        return view('facultylist',['items' => $data]);
    }
}
