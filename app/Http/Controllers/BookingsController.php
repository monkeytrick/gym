<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\bookingConfirm;
use App\Models\Booking;
use App\Models\Classes;

use Illuminate\Support\Collection;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;


class BookingsController extends Controller
{
    function index(Request $request){

        if(!Auth::check()){
            return('log in re-direct');
        }

        $booking = Booking::where('user_id', Auth::id())
        ->leftjoin('classes', 'bookings.class_id', '=', 'classes.class_id')
        ->get(['bookings.user_id', 'bookings.booking_id', 'bookings.cancelled', 'classes.class_name','classes.class_date', 
        'classes.class_reg_price']);


        if(!$booking){
            return('No bookings found');
        }
        else{
            // return view('all-bookings', ['bookings' => $booking]);

            // $bookings = collect($booking);

            $canc_book = [];
            $curr_book = [];
            $past_book = [];

            foreach($booking as $booked) {
                if($booked->cancelled == 'Y'){
                    array_push($canc_book, $booked);
                }
                elseif($booked->cancelled == 'N' && $booked->class_date > \Carbon\Carbon::now()) {
                    array_push($curr_book, $booked);
                }
                else {
                    array_push($past_book, $booked);
                }
            }

            return view('all-bookings', ['canc_book' => $canc_book, 'curr_book' => $curr_book, 'past_book' => $past_book]);
        }

    }

    function show(Request $request){

        $booking = Booking::where('booking_id', $request->route('id'))
        ->leftjoin('classes', 'bookings.class_id', '=', 'classes.class_id')
        ->first(['bookings.user_id', 'bookings.booking_id', 'bookings.cancelled', 'classes.class_name','classes.class_date', 
        'classes.class_reg_price']);


        if(!Auth::check()){
            return('log in re-direct');
        }
        elseif(!$booking){
            return('booking not found');
        }
        elseif(!Auth::id() == $booking->user_id){
            return('Credentials do not match');
        }
        else{
            return view('view-booking', ['bookings' => $booking]);
        }


    }

    // SEND ADMIN EMAIL FOR BOOKED AND CANCELLED CLASSES
    //
    function store(Request $request) {

        $id = $request->input('class');
        
        $class = Classes::where('class_id', $id)->first();

        if($class) {

            if($class->class_slots_booked < $class->class_slots_avail) {

                 $booking = new Booking();
                
                 $booking->class_id = $id;
                 $booking->user_id = Auth::id();

                 if($booking->save()){

                    $class->where('class_id', $id)->increment('class_slots_booked');
                    $class->booking_id = $booking->id;
                    $class->new_booking = true;

                    //Send email
                    Mail::to($request->user())->send(new bookingConfirm($class));

                    return view('view-booking', ['bookings' => $class]);
                 }              
            }
            else return('Class Fully Booked');       

        }
        else return('Class Not Available');
    }


    function destroy(Request $request) {

        // Send notifcation to admin of cancelled class

                //if authd
                if(Auth::check()){

                    $booking = Booking::where('booking_id', $request->route('id'))
                                        ->leftjoin('classes', 'bookings.class_id', '=', 'classes.class_id')
                                        ->first(['bookings.booking_id', 'bookings.user_id', 'bookings.class_id', 'classes.class_date']);

                    if($booking) {
                    
                    // If user ID correct for class
                        if($booking->user_id == Auth::id()){

                            // Check class is in the future/not expired
                            if($booking->class_date > now()){
                                Booking::where('booking_id', $booking->booking_id)
                                        ->update(['cancelled' => 'Y', 'cancel_time' =>  \Carbon\Carbon::now()]);
                                
                                Classes::where('class_id', $booking->class_id)
                                        ->decrement('class_slots_booked');
                            }
                            else{
                                return('class expired');
                            };                        
                        }
                        else{
                            return('YOU do not have permission for this');
                        }
                    }

                }
                else{
                    return('YOU do not have permission for this');
                }
        //if class belongs
        //if date is in future

        return('Ready to delete');
    }






//END OF CLass
};
