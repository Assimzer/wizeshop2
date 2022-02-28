@extends('layouts.master')
@section('content')
     <!-- Start Banner Area -->
	<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Confirmation</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Confirmation</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->
    <div class="container my-5">
        <div class="orders">
        <h2 class="text-center">orders details</h2>
        <div class=" table-responsive order_details_table">
            <div class="d-flex justify-content-between my-5 px-5">
                <h4>
                    <i class="fas fa-receipt"></i>
                    orders #472
                    <h4>date : 24/12/2021</h4>
                </h4>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <td class="col">product</td>
                        <td class="col">quantity</td>
                        <td class="col">total</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><b>product</b></td>
                        <td>x3</td>
                        <td>$6</td>
                    </tr>
                    <tr>
                        <td><b>subtotal</b></td>
                        <td></td>
                        <td>$6</td>
                    </tr>
                    <tr>
                        <td><b>tax</b></td>
                        <td></td>
                        <td>0.85</td>
                    </tr>
                    <tr>
                        <td><b>total</b></td>
                        <td></td>
                        <td>6.85</td>
                    </tr>
                </tbody>

            </table>
        </div>
        </div>
    </div>
@stop