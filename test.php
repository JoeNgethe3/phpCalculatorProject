<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>First php program in my xp</title>
</head>
<body>
	<form action="functions.php" method="post">
		<input type="text" name="num01" placeholder="Number 1">
		<select name="oper">
			<label>Choose operation!</label>
			<option value="add">Add</option>
			<option value="sub">Subtract</option>
			<option value="mul">Multiply</option>
		</select>
		<input type="text" name="num02" placeholder="Number 2"></input>
		<button type="submit">Calculate</button>
	</form>
	
</body>
</html>