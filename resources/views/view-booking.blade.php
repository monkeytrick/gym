@extends('layouts.layout')
@section('content')
<section>
    <div class="container">
        <div class="row">
        	<div class="col-12"> 
                @if($bookings->new_booking)
                <h2>Your Booking is Confirmed!</h2>
                @endif   
            	<div class="table-responsive shop_cart_table">
                	<table class="table">
                    	<thead>
                        	<tr>
                            	<th class="product-thumbnail">Booking Reference</th>
                                <th class="product-name">Class</th>
                                <th class="product-price">Day</th>
                                <th class="product-quantity">Time</th>
                                <th class="product-subtotal">Cost</th>
                                @if($bookings->class_date > now()) 
                                <th class="product-remove">Cancel</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                        	<tr>
                            	<td class="product-thumbnail">{{ $bookings['booking_id'] }}</td>
                                <td class="product-name" data-title="Product"><a href="#">{{ $bookings['class_name'] }}</a></td>
                                <td class="product-price" data-title="Price">{{ $bookings['class_date'] }}</td>
                                <td class="product-price" data-title="Price">{{ $bookings['class_time'] }}</td>
                              	<td class="product-subtotal" data-title="Total">¥{{ $bookings['class_reg_price'] }}</td>
                                
                                  @if($bookings->class_date > now()) 

                                <td class="product-remove" type="submit"data-title="Remove">

                                <form action="/booking/{{ $bookings['bookingRef'] }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="ti-close">X</button>
                                </form>

                                @endif

                                </td>
                                
                            </tr>
                        </tbody>
                        <tfoot>
                        	<tr>
                            	<td colspan="6">
                                	<div class="row no-gutters align-items-center">
                                    	<div class="col-lg-4 col-md-6 mb-3 mb-md-0">
                                            <!-- <div class="coupon field_form input-group">
                                                <input type="text" value="" class="form-control" placeholder="Enter Coupon Code..">
                                                <div class="input-group-append">
                                                	<button class="btn btn-default btn-sm" type="submit">Apply Coupon</button>
                                                </div>
                                            </div> -->
                                    	</div>
                                        <div class="col-lg-8 col-md-6 text-center text-md-right">
                                            <a href="/booking" class="btn btn-default btn-sm">View All Bookings</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
        	<div class="col-12">
            	<div class="small_divider clearfix"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 offset-md-6">
            	<div class="small_padding bg_gray">
                    <p>An email has been sent with these details</p>
                    <p>An email has been sent with these details</p>
                    <div class="heading_s2">
                        <h5>Cart Totals</h5>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <tbody><tr>
                                <td class="cart_total_label">Cart Subtotal</td>
                                <td class="cart_total_amount">$226.00</td>
                            </tr>
                            <tr>
                                <td class="cart_total_label">Total</td>
                                <td class="cart_total_amount"><strong>$226.00</strong></td>
                            </tr>
                        </tbody></table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection