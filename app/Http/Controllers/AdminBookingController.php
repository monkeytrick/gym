<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Booking;


class AdminBookingController extends Controller
{
    //
    function bookings(){

    $bookings = Booking::leftJoin('classes', 'bookings.class_id', '=', 'classes.class_id')
                            ->leftJoin('users', 'bookings.user_id', '=', 'users.id')
                            ->get(['bookings.booking_id', 'users.name','classes.class_id',
                                   'classes.class_name', 'classes.class_date', 'users.phone','users.email']);  
    
                            $today     = $bookings->where('class_date', '=', \Carbon\Carbon::today());
                            $past      = $bookings->where('class_date', '<', \Carbon\Carbon::today());
                            $thisWeek  = $bookings->where('class_date', '>', \Carbon\Carbon::today());

                    return(['today' => $today->values(), 'past' => $past->values(), 'thisWeek' => $thisWeek->values()]);
    
    }
};