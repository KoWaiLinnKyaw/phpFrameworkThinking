<?php 
    $title = ucwords(Request::uri());
    if ($title == "") {
        $title = "Home";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php require "views/components/Navbar.php"; ?>
