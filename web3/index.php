<html>
<head>
    <title>Calculation Form</title>
</head>
<body>
    <form action="calc.php" method="post">
    <b>First Value: </b><br/>
    <input type="text" size="100" name="fvalue"><br/>
    <b>Second Value: </b><br/>
    <input type="text" size="100" name="svalue"><br/>
    <b>Calculation:</b><br/>
    <input type="radio" name="calcu" value="+">+</input>
    <input type="radio" name="calcu" value="-">-</input>
    <input type="radio" name="calcu" value="*">*</input>
    <input type="radio" name="calcu" value="/">/</input>
    <br/>
    <input type="submit" value="Calculate">
    <input type="reset" value="Clear"><br/>
    </form>
</body>

</html>