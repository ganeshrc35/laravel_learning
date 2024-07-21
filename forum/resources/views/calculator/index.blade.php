<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Calculator</title>
</head>
<body>
	<form method = "post" action="/calculation/calculate">
		<label>Enter First Number</label>
		<input type="text" name="first_number" value=""><br/>
		<label>Enter Second Number</label>
		<input type="text" name="second_number" value=""><br/>
		@csrf
		<input type="submit" name="Calculate" value="Calculate">
	</form>
	@if(isset($result))
		{{$result}}
	@endif
</body>
</html>