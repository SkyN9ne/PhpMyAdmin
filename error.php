<?php
/* $Id$ */
// vim: expandtab sw=4 ts=4 sts=4:

/**
 *
 * phpMyAdmin fatal error display page
 * 
 */
$lang = isset( $_REQUEST['lang'] ) ? $_REQUEST['lang'] : 'en';
$dir  = isset( $_REQUEST['dir']  ) ? $_REQUEST['dir']  : 'ltr';
$char = isset( $_REQUEST['char'] ) ? $_REQUEST['char'] : 'utf-8';
$type = isset( $_REQUEST['type'] ) ? $_REQUEST['type'] : 'error';

header('Content-Type: text/html; charset=' . $char);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $lang; ?>" dir="<?php echo $dir; ?>">
<head>
    <title>phpMyAdmin</title>
    <meta http-equiv="Content-Type" content="text/html; charset=<?php echo $char; ?>" />
    <style type="text/css">
    <!--
    html {
        padding: 0;
        margin: 0;
    }
    body  {
        font-family: sans-serif;
        font-size: small;
        color: #000000;
        background-color: #F5F5F5;
        margin: 1em;
    }
    h1 {
        margin: 0;
        padding: 0.3em;
        font-size: 1.4em;
        font-weight: bold;
        color: #ffffff;
        background-color: #ff0000;
    }
    p {
        margin: 0;
        padding: 0.5em;
        border: 0.1em solid red;
        background-color: #ffeeee;
    }
    //-->
    </style>
</head>
<body>
<h1>phpMyAdmin - <?php echo $type; ?></h1>
<p><?php
if (get_magic_quotes_gpc()) {
    echo stripslashes($_REQUEST['error']); }
else {
    echo $_REQUEST['error'];
}?></p>
</body>
</html>
