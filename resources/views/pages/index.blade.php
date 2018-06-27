<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>How to Use Webcam In PHP</title>
    <link href="https://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/examples/jumbotron-narrow/jumbotron-narrow.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/webcampagedesign.css')}}">
    <style>

</style>
  </head>

  <body>
    <div id="header">
    <div id="logo">
      <img src="images/download.png" height="80px">
    </div>
    <ul id="navbar">
      <li><h1 id="heading">Visitor Registration</h1></li>
      <li><a href="#">Signout</a></li>
    </ul>
  </div>

    <div class="container">
        
        
        <div class="col-md-6">
            <div class="text-center">
        <div id="camera_info"></div>
    <div id="camera"></div><br>
    <button id="take_snapshots" class="btn btn-success btn-sm">Take Snapshots</button>
    
     <a href="form" id="blink"> Back</a>
    
      </div>
        </div>
        <div class="col-md-6">
            <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Image</th><th>Image Name</th>
                </tr>
            </thead>
            <tbody id="imagelist">
            
            </tbody>
        </table>
        </div>
    </div> <!-- /container -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="{{asset('js/jpeg_camera_with_dependencies.min.js')}}" type="text/javascript"></script>

  <script type="text/javascript" src="{{asset('js/webcamjs.js')}}">
  

</script>
	
  </body>
</html>