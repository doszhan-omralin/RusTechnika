<?php

?>

<!DOCTYPE html>
<html lang="ru">  
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>RusTechnica - сайт о техниках</title>

    <!-- styles for main page -->
    <link rel="stylesheet" href="resources/styles/main.css">

    <!-- bootstrap styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body  class="d-flex flex-column min-vh-100">

<div class="container-fluid pt-5"></div> 

<!-- header -->
<header>
    <?php
require_once("header.php");
?>
</header>

<!-- main content in site -->
<main>

</main>

<div class="container-fluid pt-5"></div> 

<!-- footer -->
<footer class="mt-auto">
    <?php
    require_once("footer.php");
    ?>
</footer>


<!-- scripts of main page -->
<script src="resources/scripts/main.js"></script>

<!-- bootstrap scripts -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>