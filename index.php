Calculator

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Welcome to Calculator </h1>
    <form name = "name"  method = "POST">
        <label>1st Number: </label>
        <input type = "text" id="num1" name="num1"></br></br>
        <label>2nd Number: </label>
        <input type = "text" id="num2" name="num2"></br></br>
        <input type="submit" id="btn1" value="plus" name="sum"> 
        <input type="submit" id="btn2" value="minus" name="diff"> 
        <input type="submit" id="btn3" value="multiply" name="prod"> 
        <input type="submit" id="btn4" value="divide" name="quo"> 

</br></br></br>

        <?php
    if(isset($_POST['sum']))
    {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $result = $num1 + $num2;
        echo "<h1>" .$result. "</h1>";
    }
    if(isset($_POST["diff"]))
    {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $result = $num1 - $num2;

        echo "<h1>" .$result. "</h1>";
    }
    if(isset($_POST["prod"]))
    {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $result = $num1 * $num2;

        echo "<h1>" .$result. "</h1>";
    }
    if(isset($_POST["quo"]))
    {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $result = $num1 / $num2;

        echo "<h1>" .$result. "</h1>";
    }

?>
</body>
</html>