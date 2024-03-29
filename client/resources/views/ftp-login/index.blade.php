@extends('layout.layout')
@section('header')
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/util.css">
	<link rel="stylesheet" type="text/css" href="/css/main.css" />
@endsection
@section('content')
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form action="/connect" method="POST" class="login100-form validate-form flex-sb flex-w">

					<input type="hidden" name="_token" value="{{ csrf_token() }}" />

					<span class="login100-form-title p-b-32">
						FTP login
					</span>

					<span class="txt1 p-b-11">
						Host
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate="Host is required">
						<input class="input100" type="text" name="host" />
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11">
						Username
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate="Username is required">
						<input class="input100" type="text" name="username" />
						<span class="focus-input100"></span>
					</div>

					<span class="txt1 p-b-11">
						Password
					</span>
					<div class="wrap-input100 m-b-12">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="password" >
						<span class="focus-input100"></span>
					</div>

					<span class="txt1 p-b-11">
						Port
					</span>
					<div class="wrap-input100 m-b-12">
						<input class="input100" type="number" name="port" min="0" max="65525" placeholder="21"/>
						<span class="focus-input100"></span>
					</div>

					<?php //TODO: Add info to localstorage ?>
					<!--<div class="flex-sb-m w-full p-b-48">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>
					</div>-->

					<div class="container-login100-form-btn">
						<button name="Connect" class="login100-form-btn">
							Connect
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
@endsection

@section('footer')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="/js/main.js"></script>
@endsection


