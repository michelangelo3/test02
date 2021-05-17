<?php
// ************************************
// Wird bei allen includiert
// ************************************
error_reporting(E_ALL);
ini_set('display_errors', 'On');

// Link auf index.php ausgeben
function HomeLink() {
    print('<p><a href="index.php">Home</a></p>');
}
function PrintLink($cLink,$cLinkText,$lMitBr = true) {
     print('<a href="'.$cLink.'">'.$cLinkText.'</a>');
     if($lMitBr) {
         print('<br>');
     }
}

// Standard HTML-Tags am Seitenbeginn
function StdHtmlHeader($cTitel) {
    print('<html><head>');
    print('<title>'.$cTitel.'</title>');
    print('</head><body>');
}

// Standard HTML-Tags am Seitenende
function StdHtmlFooter() {
    print('</body></html>');
}
?>