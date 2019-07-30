<!DOCTYPE html>
<html>
<head>
<title>Create User</title>
<link rel="stylesheet" href="/js/app.js">
<link rel="stylesheet" href="/css/app.css">
</head>
<body>
<div class="container">
	<form class="col-lg-6" method="post" action="{{ route('users.store') }}">
		@csrf
		<div class="">
			<div class="form-group @if($errors->has('mail_address')) {{ 'text-danger' }} @endif">
				<label for="inputEmail">Email address</label>
				<input class="form-control @if($errors->has('mail_address')) {{ 'is-invalid' }} @endif" name="mail_address" id="mail-address" placeholder="Enter email" value="{{ old('mail_address') }}">
				<p>{{ $errors->first('mail_address') }}</p>
			</div>
			<div class="form-group @if($errors->has('password')) {{ 'text-danger' }} @endif">
				<label for="inputPassword">Password</label>
				<input class="form-control @if($errors->has('password')) {{ 'is-invalid' }} @endif" type="password" name="password" id="password" placeholder="Password" value="">
				<p>{{ $errors->first('password') }}</p>
			</div>
			<div class="form-group @if($errors->has('password_confirmation')) {{ 'text-danger' }} @endif">
				<label for="inputPasswordConfirm">Password confirmation</label>
				<input class="form-control @if($errors->has('password_confirmation')) {{ 'is-invalid' }} @endif" type="password" name="password_confirmation" id="password-confirmation" placeholder="Re-enter password" value="">
				<p>{{ $errors->first('password_confirmation') }}</p>
			</div>
			<div class="form-group @if($errors->has('name')) {{ 'text-danger' }} @endif">
				<label for="inputName">Name</label>
				<input class="form-control @if($errors->has('name')) {{ 'is-invalid' }} @endif" type="text" name="name" id="name" placeholder="Name" value="{{ old('name') }}">
				<p>{{ $errors->first('name') }}</p>
			</div>
			<div class="form-group @if($errors->has('address')) {{ 'text-danger' }} @endif">
				<label for="inputAddress">Address</label>
				<input class="form-control @if($errors->has('address')) {{ 'is-invalid' }} @endif" type="text" name="address" id="address" placeholder="Address" value="{{ old('address') }}">
				<p>{{ $errors->first('address') }}</p>
			</div>
			<div class="form-group @if($errors->has('phone')) {{ 'text-danger' }} @endif">
				<label for="inputPhone">Phone</label>
				<input class="form-control @if($errors->has('phone')) {{ 'is-invalid' }} @endif" type="text" name="phone" id="phone" placeholder="Phone" value="{{ old('phone') }}">
				<p>{{ $errors->first('phone') }}</p>
			</div>
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="addAction" value="">Add User</button>
		</div>
	</form>
</div>
</body>
</html>
