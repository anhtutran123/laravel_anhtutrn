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
			@if(!($errors->has('mail_address')))
				<div class="form-group">
					<label for="inputEmail">Email address</label>
					<input class="form-control" name="mail_address" id="mail-address" placeholder="Enter email" value="{{ old('mail_address') }}">
				</div>
			@elseif($errors->has('mail_address'))
				<div class="form-group text-danger">
					<label for="inputEmail">Email address</label>
					<input class="form-control is-invalid" name="mail_address" id="mail-address" placeholder="Enter email" value="{{ old('mail_address') }}">
					<p>{{ $errors->first('mail_address') }}</p>
				</div>
			@endif
			@if(!($errors->has('password')))
				<div class="form-group">
					<label for="inputPassword">Password</label>
					<input class="form-control" type="password" name="password" id="password" placeholder="Password" value="">
				</div>
			@elseif($errors->has('password'))
				<div class="form-group text-danger">
					<label for="inputPassword">Password</label>
					<input class="form-control is-invalid" type="password" name="password" id="password" placeholder="Password" value="">
					<p>{{ $errors->first('password') }}</p>
				</div>
			@endif
			@if(!($errors->has('password_confirmation')))
				<div class="form-group">
					<label for="inputPasswordConfirm">Password confirmation</label>
					<input class="form-control" type="password" name="password_confirmation" id="password-confirmation" placeholder="Re-enter password" value="">
				</div>
			@elseif($errors->has('password_confirmation'))
				<div class="form-group text-danger">
					<label for="inputPasswordConfirm">Password confirmation</label>
					<input class="form-control is-invalid" type="password" name="password_confirmation" id="password-confirmation" placeholder="Re-enter password" value="">
					<p>{{ $errors->first('password_confirmation') }}</p>
				</div>
			@endif
			@if(!($errors->has('name')))
				<div class="form-group">
					<label for="inputName">Name</label>
					<input class="form-control" type="text" name="name" id="name" placeholder="Name" value="{{ old('name') }}">
				</div>
			@elseif($errors->has('name'))
				<div class="form-group text-danger">
					<label for="inputName">Name</label>
					<input class="form-control is-invalid" type="text" name="name" id="name" placeholder="Name" value="{{ old('name') }}">
					<p>{{ $errors->first('name') }}</p>
				</div>
			@endif
			@if(!($errors->has('address')))
				<div class="form-group">
					<label for="inputAddress">Address</label>
					<input class="form-control" type="text" name="address" id="address" placeholder="Address" value="{{ old('address') }}">
				</div>
			@elseif($errors->has('address'))
				<div class="form-group text-danger">
					<label for="inputAddress">Address</label>
					<input class="form-control is-invalid" type="text" name="address" id="address" placeholder="Address" value="{{ old('address') }}">
					<p>{{ $errors->first('address') }}</p>
				</div>
			@endif
			@if(!($errors->has('phone')))
				<div class="form-group">
					<label for="inputPhone">Phone</label>
					<input class="form-control" type="text" name="phone" id="phone" placeholder="Phone" value="{{ old('phone') }}">
				</div>
			@elseif($errors->has('phone'))
				<div class="form-group text-danger">
					<label for="inputPhone">Phone</label>
					<input class="form-control is-invalid" type="text" name="phone" id="phone" placeholder="Phone" value="{{ old('phone') }}">
					<p>{{ $errors->first('phone') }}</p>
				</div>
			@endif
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="addAction" value="">Add User</button>
		</div>
	</form>
</div>
</body>
</html>
