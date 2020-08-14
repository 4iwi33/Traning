<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="text" id="num1" value="0">
        <span>+</span>
        <input type="text" id="num2" value="0">
        <span>=</span>
        <span id="demo">0</span>
    </form>

    <script>
        function fun() {
            let value1 = parseFloat(document.getElementById("num1").value);
            let value2 = parseFloat(document.getElementById("num2").value);
            document.getElementById("demo").innerHTML = value1 + value2;
        }

        document.getElementById("num1").addEventListener("keyup", fun);

        document.getElementById("num2").addEventListener("keyup", fun);
    </script>
</body>

</html>