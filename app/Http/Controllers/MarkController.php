<?php

namespace App\Http\Controllers;
use App\Models\Marks;
use Carbon\Carbon;
use Session;

use Illuminate\Http\Request;

class MarkController extends Controller
{
    public function create(){
        return view('index');
    }


    public function index(Request $request){
        $mark = new Marks;
        $mark->name = $request->name;
        $mark->bangla = $request->bangla;
        $mark->english = $request->english;
        $mark->math = $request->math;
        $mark->phy = $request->phy;
        $mark->chem = $request->chem;
        $avg = $mark->bangla+$mark->english+$mark->math+$mark->phy+ $mark->chem;
        if($avg>=400 && $avg<=500){
            $mark->gpa = "A+";
        }
        elseif($avg>=350 && $avg<=399){
            $mark->gpa = "A";
        }
        elseif($avg>=300 && $avg<=349){
            $mark->gpa = "B+";
        }
        elseif($avg>=0 && $avg<=164){
            $mark->gpa = "fail";
        }
        $mark->save();
        $data = Marks::orderBy('id')->get();
        return view('allstudent',compact('data'));
    }
}
