<!DOCTYPE html>
<html>
<head>
	<title>Laravel Exercise</title>
</head>
<body>
<table border="1">
	<tr>
		<th>Name</th>
		<th>Email</th>
		<th>Action</th>
	</tr>
	
	@foreach($users as $user)
	<tr>
		<td>{{ $user->name }}</td>
		<td>{{ $user->email }}</td>
		<td>
			<a href="/user/edit/{{ $user->id }} ">Edit</a>
			<a href="/user/delete/{{ $user->id }} ">Delete</a>
		</td>
	</tr>
	@endforeach
	
</table>
<a href="/">Form</a>
</body>
</html>