<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div id="content">
    <h1>Future Value Calculator</h1>

    <form method="POST">
        <div id="data">
            <label>Investment Amount:</label>
            <input type="text" name="investment" value="0"/><br/>

            <label>Yearly Interest Rate:</label>
            <input type="text" name="rate" value="0"/><br/>

            <label>Number of Years:</label>
            <input type="text" name="years" value="0"/>
        </div>
        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Calculate"/><br/>
        </div>
    </form>
</div>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $investment = $_POST["investment"];
    $YearlyInterestRate=$_POST["rate"];
    $numberOfYears=$_POST["years"];
    $result=$investment+($investment*$YearlyInterestRate*0.01)*$numberOfYears;

    echo $result;


}

?>

</body>
</html>
