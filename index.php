<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RusTechnica - сайт о техниках</title>
    <link rel="stylesheet" href="resources/styles/main.css">
</head>
<body>


<?php
echo "Hello, Rustдam!";?>

<header>
    <?php
require_once("header.php");
?>
</header>


<section>
    <?php
require_once("local-nav.php");
?>
</section>

<article>
<?php
require_once("article.php");
?>
</article>

<footer>
    <?php
    require_once("footer.php");
    ?>
</footer>

<script src="resources/scripts/main.js"></script>
</body>
</html>