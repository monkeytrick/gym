<?php
https://stackoverflow.com/questions/62972936/pdo-could-not-find-driver-in-laravel-7-20-0

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classes;
use Illuminate\Support\Facades\Auth;


class ClassesController extends Controller
{
    //

    public function index(){

        $classes = Classes::where('class_date', '>', \Carbon\Carbon::now())->get();
                
        return view('home', ['classes' => $classes]);

    }

    public function store(Request $request){

        // $classes = Classes::all();
       
        // return view('home', ['classes' => $classes]);

        if(!Auth::check()){
            return('log in re-direct');
        }

        $request->validate([
            'class-date' => 'required',
            'class-name' => 'required | string',
            'class-price' => 'required | numeric',
            'class-slots' => 'required | numeric'
        ]);

        $addClass = Classes:: create([

            'class_name' => $request->input('class-name'),
            'class_slots_avail' => $request->input('class-slots'),
            'class_slots_booked' => 0,
            'class_date' => $request->input('class-date'),
            'class_reg_price' => $request->input('class-price')

        ]);

        // return("RECEIVED and validated");
    }

    public function update(Request $request){

        $update_class = Classes::find($request->input('classId'));

        if($update_class->class_date < \Carbon\Carbon::now()) {
            return("error with date");
        }
        else {

            $update_class->class_date = $request->input('classTime');
            $update_class->class_reg_price = $request->input('classPrice');
            $update_class->class_slots_avail = $request->input('slots');
            
            $update_class->save();
        
            return("New class  " . $update_class . \Carbon\Carbon::now());

            //Update modal and class
        }
    }

    public function destroy(Request $request){

        if(Classes::destroy($request->input('classId'))) {

            return('class ' . $request->input('classId') . 'deleted');
        }

        else {
             
            return('Error with delete');
        };

        // return($request->input());

        // $update_class = Classes::find($request->input('classId'));

        // if($update_class->class_date < \Carbon\Carbon::now()) {
        //     return("error with date");
        // }
        // else {

        //     $update_class->class_date = $request->input('classTime');
        //     $update_class->class_reg_price = $request->input('classPrice');
        //     $update_class->class_slots_avail = $request->input('slots');
            
        //     $update_class->save();
        
        //     return("New class  " . $update_class . \Carbon\Carbon::now());

        //     //Update modal and class
        // }
    }
}
