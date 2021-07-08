@extends('layouts.layout')
@section('content')
<section>
    <div class="container">

    <h1>Bookings</h1>

    @if(count($curr_book) > 0)
        <div class="row">
        	<div class="col-12"> 
                <h2>Upcoming Classes</h2>
            	<div class="table-responsive shop_cart_table">
                	<table class="table">
                    	<thead>
                        	<tr>
                            	<th class="product-thumbnail">Booking Reference</th>
                                <th class="product-name">Class</th>
                                <th class="product-price">Day</th>
                                <th class="product-quantity">Time</th>
                                <th class="product-subtotal">Cost</th>
                                <th class="product-remove">Cancel</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($curr_book as $booking)
                        	<tr>
                            	<td class="product-thumbnail">{{ $booking['booking_id'] }}</td>
                                <td class="product-name" data-title="Product"><a href="#">{{ $booking['class_name'] }}</a></td>
                                <td class="product-price" data-title="Price">{{ $booking['class_date'] }}</td>
                                <td class="product-price" data-title="Price">{{ $booking['class_time'] }}</td>
                              	<td class="product-subtotal" data-title="Total">¥{{ $booking['class_reg_price'] }}</td>
                                <td class="product-remove" type="submit"data-title="Remove">
                                <form action="/booking/{{ $booking['booking_id'] }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="ti-close">X</button>
                                </form>
                                </td>                                
                            </tr>
                            @endforeach   
                        </tbody>
                        <tfoot>
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
    @endif

    @if(count($past_book) > 0)
        <div class="row">
        <div class="col-12"> 
            <h2>Past Classes</h2>
            	<div class="table-responsive shop_cart_table">
                	<table class="table">
                    	<thead>
                        	<tr>
                            	<th class="product-thumbnail">Booking Reference</th>
                                <th class="product-name">Class</th>
                                <th class="product-price">Day</th>
                                <th class="product-quantity">Time</th>
                                <th class="product-subtotal">Cost</th>
                                <th class="product-subtotal"></th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($past_book as $booking)
                        	<tr>
                            	<td class="product-thumbnail">{{ $booking['booking_id'] }}</td>
                                <td class="product-name" data-title="Product"><a href="#">{{ $booking['class_name'] }}</a></td>
                                <td class="product-price" data-title="Price">{{ $booking['class_date'] }}</td>
                                <td class="product-price" data-title="Price">{{ $booking['class_time'] }}</td>
                              	<td class="product-subtotal" data-title="Total">¥{{ $booking['class_reg_price'] }}</td>                             
                            </tr>
                            @endforeach   
                        </tbody>
                        <tfoot>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    @endif
    
    @if(count($canc_book) > 0)
    <div class="row">
        <div class="col-12"> 
            <h2>Cancelled Bookings</h2>
            	<div class="table-responsive shop_cart_table">
                	<table class="table">
                    	<thead>
                        	<tr>
                            	<th class="product-thumbnail">Booking Reference</th>
                                <th class="product-name">Class</th>
                                <th class="product-price">Day</th>
                                <th class="product-quantity">Time</th>
                                <th class="product-subtotal">Cost</th>
                                <th class="product-subtotal"></th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($canc_book as $booking)
                        	<tr>
                            	<td class="product-thumbnail">{{ $booking['booking_id'] }}</td>
                                <td class="product-name" data-title="Product"><a href="#">{{ $booking['class_name'] }}</a></td>
                                <td class="product-price" data-title="Price">{{ $booking['class_date'] }}</td>
                                <td class="product-price" data-title="Price">{{ $booking['class_time'] }}</td>
                              	<td class="product-subtotal" data-title="Total">¥{{ $booking['class_reg_price'] }}</td>                             
                            </tr>
                            @endforeach   
                        </tbody>
                        <tfoot>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

    @endif
    </div>
</section>
@endsection