<?php
/*
===================================
zock!

Developed by
------------
* Michael Schroeder:
   michael.p.schroeder@gmail.com 
*
*

http://zock.sf.net

zock! is a free software licensed under GPL (General public license) v3
      more information look in the root folder for "LICENSE".
===================================
*/

/*the only thing worth mentionable here is the fact that the title, description & 
keywords are set dynamically. All the variables are delivered from the function
siteConstructor()*/

global $settings, $style;
if (isset($style['favicon'])) $favicon = '<link rel="shortcut icon" href="src/style_'.$settings['style'].'/img/'.$style['favicon'].'" type="image/x-icon" />';
if(defined(INSTALLING)) $installation_style = '<link rel="stylesheet" type="text/css" href="src/style_'.$settings['style'].'/layout_installation.css" />';
global $header;

$style_css = '<link rel="stylesheet" type="text/css" href="src/style_'.$settings['style'].'/layout.css" />';

$bootstrap = '<script type="text/javascript" src="src/opensource/bootstrap/js/bootstrap.js"></script>
            <link rel="stylesheet" type="text/css" href="src/opensource/bootstrap/css/bootstrap.min.css"/>';

$bootstrap_activators = '<script type="text/javascript">
                            $(document).ready(function() {
                                $(".collapse").collapse();
                                $("[rel=popover]").popover({placement: "left"});
                                $("[rel=tooltip]").tooltip();
                                $("[rel=modal]").modal();
                                $(".modal").appendTo($("body"));
                                $(".modal-backdrop").appendTo($("body"));

                            })
                        </script>';

$header ='<!DOCTYPE html>
<html>
<head>
	<title>'.$title.'></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
	<meta name="description" content="'.$desc.'" />
	<meta name="keywords" content="'.$keys.'" />
	'. $installation_style.'
	'. $favicon.'


	<script type="text/javascript" src="src/functions.js" ></script>

    <script type="text/javascript" src="src/opensource/jquery/js/jquery-2.1.0.min.js"></script>


    <script type="text/javascript" src="src/opensource/jquery/js/jquery-ui-1.8.2.custom.min.js"></script>
    <link rel="stylesheet" type="text/css" href="src/opensource/jquery/css/jquery-ui-1.8.2.custom.css"/>

    <script language="text/javascript" type="text/javascript" src="src/opensource/jqplot/jquery.jqplot.min.js"></script>
            <script type="text/javascript" src="src/opensource/jqplot/plugins/jqplot.barRenderer.min.js"></script>
            <script type="text/javascript" src="src/opensource/jqplot/plugins/jqplot.categoryAxisRenderer.min.js"></script>
            <script type="text/javascript" src="src/opensource/jqplot/plugins/jqplot.pointLabels.min.js"></script>
    <link rel="stylesheet" type="text/css" href="src/opensource/jqplot/jquery.jqplot.css" />
       	'.$bootstrap.'
       	'.$bootstrap_activators.'
        '.$style_css.'


</head>';

function getHeader() {
    global $header;
    return $header;
}
?>
