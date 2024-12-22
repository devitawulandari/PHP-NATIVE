<?php
// Menampilkan pesan
echo "Hello World";

//mengelolah from input
if ($_serve["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    echo "Hello, " .$name;

}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
             <meta charset="UTF-8" content="width=device-width, initial-scale=1.0">
             <meta name="viewport" content="width=device-whidth, initial-scale=1.0>
             <title>Form input<title>
                