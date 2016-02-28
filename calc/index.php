<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<?php //include("Calculator.php");?>
</head>
<body>
<form name="form1" method="post" action="calc_view.php">
<input type="number" name="number1" />
<select name="operator">
	<option value="+">+</option>
    <option value="-">-</option>
    <option value="*">*</option>
    <option value="/">/</option>
</select>
<input type="number" name="number2" />
<input type="submit" name="calculate" value="calculate"/>
</form><br>
<br>

</body>
</html>