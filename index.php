<html>
 <head>
  <title>PHP-Test</title>
 </head>
 <body>
 <?php start(); ?>
 <br>
 <a href="test1.php">test1</a>
 </body>
</html>

<?php
// Vorschau mit: php -S localhost:8000 -t /workspace/test02
function start() {
    print('hello, this is index.php');
}
?>
