@extends('layouts.layout')

@section('content')

<!--include delete modal -->
<x-modal-delete/>

<!-- START SECTION TRAINER INFO -->
<section>
	<div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="team_detail">
                	<div class="row">
                    	<div class="col-md-12 mb-4 mb-lg-0">
                        	<h5>Personal Info</h5>
                            <hr>	
                            <ul class="list_none trainer_info">
                            	<li>
                                	<span>Name:</span>
                                	<p>Elena Mark</p>
                                </li>
                                <li>
                                    <span>Email:</span>
                                    <a href="mailto:info@sitename.com">info@sitename.com</a>
                                </li>
                                <li>
                                    <span>Phone No:</span>
                                    <p>+ (123) 1512-578</p>
                                </li>	
                                <li>
                                    <span>Social:</span>
                                    <ul class="list_none social_icons border_social">
                                        <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                                        <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                                        <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
                                        <li><a href="#"><i class="ion-social-youtube-outline"></i></a></li>
                                        <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                    </div>
            	</div>
        	</div>
		</div>
		<div class="small_divider clearfix"></div>

		<div class="card-body">
				<div class="row gutters">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
						<h6 class="mb-3 text-primary">Personal Details</h6>
					</div>

					
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group">
							<label for="fullName">Name</label>
							<div class="edit-info input-group mb-3" style="display: flex">
								<p style="width: 92%">{{ Auth::user()->name }}</p>
								<i class="ti-marker-alt pen-edit"></i>
								<div class="hide-before">
									<input type='text' class="form-control" name="name" id='fullName'>								
									<div class="input-group-append">
										<i class="ti-check-box input-group-text"></i>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group">
							<label for="fullName">Email</label>
							<div class="edit-info input-group mb-3" style="display: flex">
								<p style="width: 92%">{{ Auth::user()->email }}</p>
								<i class="ti-marker-alt pen-edit"></i>
								<div class="hide-before">
									<input type='email' name='email' class="form-control" id='fullName'>								
									<div class="input-group-append">
										<i class="ti-check-box input-group-text"></i>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
						<div class="form-group">
							<label for="fullName">Phone No.</label>
							<div class="edit-info input-group mb-3" style="display: flex">
								<p style="width: 92%">{{ Auth::user()->phone }}</p>
								<i class="ti-marker-alt pen-edit"></i>
								<div class="hide-before">
									<input type='number' name="phone" class="form-control" id='fullName'>								
									<div class="input-group-append">
										<i class="ti-check-box input-group-text"></i>
									</div>
								</div>
							</div>
						</div>
					</div>


				</div>

			</div>
		
    </div>
</section>
<!-- END SECTION TRAINER INFO -->

<section>
    <div class="container">
		<div class="row">
			<div class="col-12">
				<div class="heading_s2 text-center">
					<h5>Bookings</h5>
					<hr>
				</div>
			</div>
		</div>
		<div class="small_divider clearfix"></div>


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
                                <td class="cancel-option product-remove" id="{{ $booking['booking_id'] }}" data-title="Remove">
									<a class="cancel {{ $booking['booking_id'] }}"href="" data-toggle='modal' data-target='#cancelModal'>X</a></td>                                
                            </tr>
                            @endforeach   
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
                                            <a href="{{ route('booking.index') }}" class="btn btn-default btn-sm">View All</a>
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
    @else
		<h2>No upcoming bookings</h2>
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
                                            <a href="{{ route('booking.index') }}" class="btn btn-default btn-sm">View All</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
	@else
		<h2>No past bookings</h2>
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
                                            <a href="{{ route('booking.index') }}" class="btn btn-default btn-sm">View All</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
	@else
		<h2>No upcoming cancelled</h2>
    @endif
    </div>
</section>




<!-- // Edit personal info. -->
<script>


let editInfo = document.querySelectorAll('.pen-edit');

editInfo.forEach(item => {
	item.addEventListener('click', function(){

		//delete element with details
		//create new element 
		//append to parent
		let elem = event.target
		// let text = elem.firstElementChild.innerText	

			//rhide first element
			elem.parentNode.firstElementChild.setAttribute('style', 'display: none !important')
			//hide pen icon
			elem.setAttribute('style', 'display: none');
			//Display input fields

			// Save as variable and re-set to display none
			elem.nextElementSibling.setAttribute('style', 'display: flex !important; width: 95%;');


				event.target.nextElementSibling.children[1].addEventListener('click', function(){

					let updateField = event.target.parentNode.parentNode.children[0].name;

					let updateInfo = event.target.parentNode.parentNode.children[0].value;

					let newData = updateField + "=" + updateInfo

					// console.log(newData)
			
					sendNew(newData, elem)

				})
	})
})


			


function sendNew(newData, elem) {

	let xhttp = new XMLHttpRequest();

	xhttp.onreadystatechange = function() {
		if(this.readyState == 4 && this.status == 200) {

			elem.parentNode.firstElementChild.innerText = this.responseText
			elem.parentNode.firstElementChild.setAttribute('style', 'display: flex; width: 95%;')
			//hide pen icon
			elem.setAttribute('style', 'display: flex');
			//Display input fields

			// Save as variable and re-set to display none
			elem.nextElementSibling.setAttribute('style', 'display: none !important');
		}
	}

	xhttp.open('PUT',"{{ Auth::id() }}", true);
    xhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	xhttp.setRequestHeader("X-CSRF-Token", "{{ csrf_token() }}")
   
    xhttp.send(newData);	
}


</script>

<script src="{{asset('js/ajaxtest.js')}}"></script>



@endsection


