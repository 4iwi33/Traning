<?php
if (isset($_GET["send"])) {
    $name = $_GET["name"];

    // print_r($_GET);

    echo "Hello" . " " . $name;
}
