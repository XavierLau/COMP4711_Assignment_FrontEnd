<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>{pagetitle}</title>
        <meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel="stylesheet" type="text/css" href="/assets/css/default.css"/>       
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!--Script-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>js/jquery.js" ></script>
        <script src="js/datatables/datatables.js"></script>
        <script>
         $(document).ready(function() {
                $('#item1').click(function(){                    
                    var title=$(this).attr("value");
                   
                    $('<div class="block">'+'<button id="item" type="button" class="list-group-item">'+title+'</button>'+'</div>').appendTo('div#newitem')
                    
                });
                 $('#item2').click(function(){
                    
                    var title=$(this).attr("value");
                
                    if(title.length){        
                        $('<div class="block">'+'<button id="item" type="button" class="list-group-item">'+title+'</button>'+'</div>').appendTo('div#newitem')
                    }
                });
                 $('#item3').click(function(){
                    
                    var title=$(this).attr("value");
                 
                    if(title.length){        
                       $('<div class="block">'+'<button id="item" type="button" class="list-group-item">'+title+'</button>'+'</div>').appendTo('div#newitem')
                    }
                });
                 $('#item4').click(function(){
                    
                    var title=$(this).attr("value");
                
                    if(title.length){        
                        $('<div class="block">'+'<button id="item" type="button" class="list-group-item">'+title+'</button>'+'</div>').appendTo('div#newitem')
                    }
                });
                 $('#item5').click(function(){
                    
                    var title=$(this).attr("value");
                    
                    if(title.length){        
                        $('<div class="block">'+'<button id="item" type="button" class="list-group-item">'+title+'</button>'+'</div>').appendTo('div#newitem')
                    }
                });
               $(document).on('click', '#item', function(e){
                    $(this).closest('div.block').remove();            
                });
    });
        </script>
	</head>
	<body>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">McDonald Trump</a>
              </div>
              <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                  <li class="active"><a href="#">Home</a></li>
                  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Page 1-1</a></li>
                      <li><a href="#">Page 1-2</a></li>
                      <li><a href="#">Page 1-3</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Page 2</a></li>
                  <li><a href="#">Page 3</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                  <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
              </div>
            </div>
         </nav>
        <div id="container">
			{content}
			<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. 
				{ci_version}</p>
        </div>
        
	</body>
</html>