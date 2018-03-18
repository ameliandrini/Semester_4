<!DOCTYPE html>
<html>
<head>
	<title>Laravel Testing</title>
</head>
<body>
<form method="POST" action="/update">
	{{csrf_field()}}
	<input type="text" name="name" placeholder="" required>{{ $user->name }}<br/>
	<input type="text" name="email" placeholder="" required="">{{ $user->email }}<br/>
	<button type="submit">Submit</button>

</form>
<a href="/users">Users</a>
</body>
</html>