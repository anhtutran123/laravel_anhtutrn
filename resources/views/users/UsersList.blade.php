<!DOCTYPE html>
<html>
<head>
	<title>Users List Site</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
@include('flash::message')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<legend>LIST USERS</legend>
	<a href="{{ route('users.create') }}">
		<button class="btn btn-outline-success my-2 my-sm-0" type="submit">ADD</button>
	</a>
</nav>
<table class="table">
	<thead class="thead-dark text-center">
	<tr>
		<th>#</th>
		<th>Mail Address</th>
		<th>Name</th>
		<th>Address</th>
		<th>Phone Number</th>
	</tr>
	</thead>
	<tbody>
	@foreach($users as $key => $user)
		<tr>
			<td>{{ ++$key + ($users->currentPage() - 1) * $users->perPage()}}</td>
			<td>{{ $user -> mail_address }}</td>
			<td>{{ $user -> name }}</td>
			<td>{{ $user -> address }}</td>
			<td>{{ $user -> phone }}</td>
		</tr>
	@endforeach
	</tbody>
</table>
{!! $users->links() !!}
<script>
	$('#flash-overlay-modal').modal();
</script>
</body>
</html>
