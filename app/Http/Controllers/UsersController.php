<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Booking;


use Auth;

class UsersController extends Controller

{

//-- show profile with bookings --//

    function show(){

        //https://stackoverflow.com/questions/19325312/how-to-create-multiple-where-clause-query-using-laravel-eloquent

        //group by

        //get first three where current date is smaller than class date and cancelled is N - future
        //get first three where cancelled is N and current date is larger than class date - past
        //get first three where cancelled is Y and current date is larger than 

        //consider group by or alias

        //set conditions within arrays
        $futureBook = Booking::where('user_id', Auth::id())
                    ->where(['bookings.cancelled' => 'N'])
                    ->where('classes.class_date', '>', \Carbon\Carbon::now())->take(3)
                    // ->where(['bookings.cancelled' => 'N', 'classes.class_date' > \Carbon\Carbon::now()])->take(3)
                    ->leftjoin('classes', 'bookings.class_id', '=', 'classes.class_id')
                    ->get(['bookings.user_id', 'bookings.booking_id', 'bookings.cancelled', 'classes.class_name','classes.class_date', 
                    'classes.class_time', 'classes.class_reg_price']);

        $pastBook = Booking::where('user_id', Auth::id())
                    ->where(['bookings.cancelled' => 'N'])
                    ->where('classes.class_date', '<', \Carbon\Carbon::now())->take(3)

                    ->leftjoin('classes', 'bookings.class_id', '=', 'classes.class_id')
                    ->get(['bookings.user_id', 'bookings.booking_id', 'bookings.cancelled', 'classes.class_name','classes.class_date', 
                    'classes.class_time', 'classes.class_reg_price']);

        $cancBook = Booking::where('user_id', Auth::id())
                    ->where(['bookings.cancelled' => 'Y'])->take(3)
                    ->leftjoin('classes', 'bookings.class_id', '=', 'classes.class_id')
                    ->get(['bookings.user_id', 'bookings.booking_id', 'bookings.cancelled', 'classes.class_name','classes.class_date', 
                    'classes.class_time', 'classes.class_reg_price']);



        // else{

        //     $canc_book = [];
        //     $curr_book = [];
        //     $past_book = [];

        //     foreach($booking as $booked) {
        //         if($booked->cancelled == 'Y'){
        //             array_push($canc_book, $booked);
        //         }
        //         elseif($booked->cancelled == 'N' && $booked->class_date > \Carbon\Carbon::now()) {
        //             array_push($curr_book, $booked);
        //         }
        //         else {
        //             array_push($past_book, $booked);
        //         }
        //     }

        // }

        // return view('user-profile', ['canc_book' => $canc_book, 'curr_book' => $curr_book, 'past_book' => $past_book]);
        // \error_log($booking);
        return view('user-profile', ['curr_book' => $futureBook, 'past_book' => $pastBook, 'canc_book' => $cancBook]);
    }

    //-- update profile info --//


    function update(Request $request) {

        $user = User::find(Auth::id());

        // Need to checj user is authd or has admin credentials

        if($request->has('name')) {
            $field = "name";
            $data = $request->input('name');
        }
        elseif($request->has('email')) {
            $field = "email";
            $data = $request->input('email');
        }
        else {
            $field = "phone";
            $data = $request->input('phone');
        }


        $user->$field = $data;
        $user->save();
        
        return ($data);


    }


}
