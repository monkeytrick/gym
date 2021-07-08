
<h1>Booking is here like anything</h1>

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
                        	<tr>
                            	<td class="product-thumbnail">{{ $class['bookingRef'] }}</td>
                                <td class="product-name" data-title="Product"><a href="#">{{ $class['class_name'] }}</a></td>
                                <td class="product-price" data-title="Price">{{ $class['class_date'] }}</td>
                                <td class="product-price" data-title="Price">{{ $class['class_time'] }}</td>
                              	<td class="product-subtotal" data-title="Total">¥{{ $class['class_reg_price'] }}</td>
                                <td class="product-remove" data-title="Remove"><a href="#"><i class="ti-close"></i></a></td>
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
                                            <a href="#" class="btn btn-default btn-sm">View All class</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tfoot>
                    </table>