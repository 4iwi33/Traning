<title>dom_name</title>
<?php
preg_match(
    '@^(?:http://)?([^/]+)@i',
    "http://www.php.net/index.html",
    $mathes
);
$host = $mathes[1];

preg_match('/[^.]+\.[^.]+$/', $host, $mathes);
echo "Domen name: {$mathes[0]}\n";
?>