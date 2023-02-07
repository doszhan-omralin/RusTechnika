<?php
  //set headers to NOT cache a page
  header("Cache-Control: no-cache, must-revalidate"); //HTTP 1.1
  header("Pragma: no-cache"); //HTTP 1.0
  header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past

  //or, if you DO want a file to cache, use:
  //header("Cache-Control: max-age=2592000"); //30days (60sec * 60min * 24hours * 30days)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RusTechnica - сайт о техниках</title>
    <link rel="stylesheet" и type="text/css" href = "styles\main.css">
</head>
<body>

<header>
    <?php
require_once("header.php");
?>
</header>


<h1 style="color: white;">Authors: Rustam, Doszhan, Timur, Ernar, Kirill!</h1>




<footer>
    <?php
    require_once("footer.php");
    ?>
</footer>
</body>
</html>