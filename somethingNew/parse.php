<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        textarea[name="msg"],
        input[name="name"] {
            display: block;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>

    <div id="txt"></div>

    <form action="" method="post">
        <textarea name="msg" id="msg"></textarea>
        <input type="text" name="name">
        <input type="button" value="ok">
    </form>

    <script>
        document.getElementById("msg").addEventListener("keyup", function() {
            reg = /дурак|негодяй/g
            event.target.value = event.target.valye.replace(reg, "😈");
        });
    </script>
</body>

</html>