<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login Forms </title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<form method="post" action="one.php">
    
    	<div class="row" style="padding-top:200px">
          <div class="col-md-4"></div>
          <div class="col-md-3">
          
          <!--login form -->
          
          	<div class="panel panel-default">
              <div class="panel-body" align="center">
              	<h1 style="size:32;">Login Form</h1>
              	<div class="input-group">
                	<span class="input-group-addon"> <span class="glyphicon glyphicon-user" ></span></span>
                		<nav><input type="text" name="userf" placeholder="Username" class="form-control" /></nav>
                    
                </div>
              		 
              	<div class="input-group" style="padding-top:10px;">
                	<span class="input-group-addon"> <span class="glyphicon glyphicon-asterisk" ></span></span>
                	<nav><input type="password" name="passf" placeholder="Password" class="form-control" /></nav>
                </div>
                
                <div style="padding-top:10px;">
                	 <nav>
                         <input type="submit" name="login"  class="btn btn-default" value="Login" />
                         <input type="submit" name="close"  class="btn btn-default" value="Close"/>
                     </nav>    
                </div>
                
            
                	
              </div>
            </div>
          
          <!--login end -->
          
          
          </div>
          <div class="col-md-4"></div>
        </div>
    
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    </form>
  </body>
</html>

