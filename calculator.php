<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="calculator.css"/>
</head>
<body>


<div id="content">
    <h1> Calculator</h1>
    <form method="post">
        <div id="data">
            <label>First oprerad:</label>
            <input type="text" name="number1"/><br/>
            <label>Operator:</label>
            <select id="operator" name="pheptinh">
                <option value="add"> Addition</option>
                <option value="sub"> Subtruction</option>
                <option value="mul"> Multiply</option>
                <option value="div"> Division</option>
            </select><br/>
            <br/>
            <label>Second oprerad:</label>
            <input type="text" name="number2"/><br/>

        </div>
        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Submit"/>
        </div>
        <br/>
        <center><?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $number1 = $_POST["number1"];
                $number2 = $_POST["number2"];
                $pheptinh = $_POST["pheptinh"];


                switch ($pheptinh) {
                    case "add":  //co the dung Addition
                        echo "Result: " . ($number1 + $number2);
                        break;
                    case "sub": //co the dung Subtruction
                        echo "Result: " . ($number1 - $number2);
                        break;
                    case "mul":
                        echo "Result: " . ($number1 * $number2);
                        break;
                    case "div":
                        if ($number2 != 0) {
                            echo "Result: " . ($number1 / $number2);
                        } else {
                            echo "No Result";
                        }
                }
            }
            ?>
        </center>
    </form>
</div>

</body>
</html>