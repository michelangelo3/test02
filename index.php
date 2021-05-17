<?php
// Includes und Requires
require_once 'standard.php';

StdHtmlHeader('PHP Testprojekt');

print('<h3>hello, this is index.php</h3>');
PrintLink('test1.php','test1');
PrintLink('test2.php','test2');
PrintLink('phpinfo.php','phpinfo');

StdHtmlFooter();
