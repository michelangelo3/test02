<?php
HtmlStart();
print('<h3>Dies ist test2.php<h3>');

// ############################################
// HTML-Tags Seitenbeginn
// ############################################
function HtmlStart() {
    print('<html><head>');
    print('<title>test2.php</title>');
    print('</head><body>');
}

// ############################################
// HTML-Tags Seitenende
// ############################################
function HtmlEnd() {
    print('</body></html>');
}
?>