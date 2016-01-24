@extends('app.master')

@section('title', 'Login')

@section('content')

	<section class="section">
		<h2 class="font-1 center">Login</h2>

		<div class="row">
			<form class="col s12 l6 auth-container">
				<div class="row">
					<div class="input-field col s6">
						<input placeholder="Placeholder" id="first_name" type="text" class="validate">
						<label for="first_name">First Name</label>
					</div>
					<div class="input-field col s6">
						<input id="last_name" type="text" class="validate">
						<label for="last_name">Last Name</label>
					</div>
				</div>

				<div class="row">
					<div class="input-field col s12">
						<input disabled value="I am not editable" id="disabled" type="text" class="validate">
						<label for="disabled">Disabled</label>
					</div>
				</div>

				<div class="row">
					<div class="input-field col s12">
					<input id="password" type="password" class="validate">
					<label for="password">Password</label>
					</div>
				</div>

				<div class="row">
					<div class="input-field col s12">
					<input id="email" type="email" class="validate">
					<label for="email">Email</label>
					</div>
				</div>

				<p class="social-btn-container">
					<a class="social-btn waves-effect waves-light btn">
						<i class="fa fa-facebook-official"></i>
						Facebook
					</a>
					<a class="s3 social-btn waves-effect waves-light btn">
						<i class="fa fa-facebook-official"></i>
						Facebook
					</a>
				</p>

			</form>
		</div>

	</section>

@endsection