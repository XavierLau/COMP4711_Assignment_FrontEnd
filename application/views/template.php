<?php
if (!defined('APPPATH'))
	exit('No direct script access allowed');
/**
 * views/template.php
 *
 * Pass in $pagetitle (which will in turn be passed along)
 * and $pagebody, the name of the content view.
 *
 * ------------------------------------------------------------------------
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>{pagetitle}</title>
        <meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" type="text/css" href="/assets/css/default.css"/>
        <link rel="stylesheet" type="text/css" href="/assets/css/home.css"/>
        <link rel="stylesheet" type="text/css" href="/assets/css/item.css"/>
        <link rel="stylesheet" type="text/css" href="/assets/css/production.css"/>
        <link rel="stylesheet" type="text/css" href="/assets/css/receiving.css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/jquery.dataTables.min.js"></script>
        <script>
        $(document).ready(function() {                
		$(document).on('click', '#items2', function(e){
                    var title=$(this).attr("value");
                    var nametitle = title.substr(0, title.indexOf('=')-1);
                    var nametitle2 = title.substr(0, title.length);
                    var price = nametitle2.substr(0,nametitle2.indexOf('/')); 
                    $('<div class="block">'+'<button id="item" class="btn col-xs-8 btn-info">'+nametitle+" "+ price +'</button>').appendTo('div#newitem')          
                });
                $(document).on('click', '#item2', function(e){
                     $(this).closest('div.block').remove();            
                });
        });
        </script>
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-content" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand">{pagetitle}</a>
                </div>
                <div id="navbar-content" class="navbar-collapse collapse">
                    {menubar}
                <p class="navbar-text navbar-right">Role: {userrole}</p>
                </div>
            </div>
        </nav>  
        <div id="content" class="container">
            {content}
        </div>
        <div id="footer" class="span12">
            Copyright &copy; 2016,  <a href="mailto:someone@somewhere.com">Someone</a>.
        </div>
    </body>
</html>
