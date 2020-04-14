<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, reiciendis?</p>

    <?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    function myHadler($level, $message, $file, $line, $context)
    {
        switch ($level) 
        {
            case E_WARNING:
                $type = 'Warning';
                break;
            case E_NOTICE:
                $type = 'Notice';
                break;
            default;
                return false;
        }
        echo "<h2>$type: $message</h2>";
        echo "<p><strong>File</strong>: $file:$line</p>";
        echo "<p><strong>Context</strong>: $" . join(', $', array_keys($context)) . "</p>";
        return true;

        set_error_handler('myHandler', E_ALL);
    }
    ?>
</body>

</html>