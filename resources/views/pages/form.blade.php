<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
	<meta name="viewport" content="width=device-width initial-scale=1" charset="utf-8">
	
	   
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
<!-- <div class="container-fluid">
	<div class="row">
	<div class="col-sm-12">		 -->
		<div id="header">
		<div id="logo">
			<img src="download.png" height="80px">
		</div>
		<ul id="navbar">
			<li><h1 id="heading">Visitor Registration</h1></li>
			<li><a href="#">Signout</a></li>
		</ul>
	</div><!-- 
	</div>
	</div>		
	</div> -->
	
	<div class="container-fluid">
	<div class="row">
		<h1 style="color: white" id="h1">Enter Visitor's Credentials</h1>
		<div class="col-sm-12">
			<div class="col-sm-5">

				<table class="table ">  
                     <tr></tr>
                <?php  
                //class connectionClass extends mysqli{
			    $host="localhost";$dbname="phptutorial";$dbpass="";$dbuser="root";
    			$con=mysqli_connect($host,$dbuser,$dbpass,$dbname);
    
    			/*public function __construct() {
        				if($this->connect($this->host, $this->dbuser, $this->dbpass, $this->dbname)){}
        					else
       	 					{	echo "hello  ";
            					return "<h1>Error while connecting database</h1>";
        					}
    				}
				}
                */
				//$lastid=0;
                $query = "SELECT Image FROM webcam where id=(select max(id) from webcam)";  
                $result = mysqli_query($con,$query);  
               // $i=1;
                
                	# code...
                
               // echo "ehheellelel".$lastid;
                if ($result->num_rows > 0) {
                	//echo "heloo";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo  $row["Image"]."<br>"; 
        //$url=$row["Image"];
       // $url2=(string)$url;
      // echo $url;
    	//echo "ehheellelel   ".$lastid;
    	//if($lastid==$row['id']){

    		$url=$row['Image'];
        echo '  
                          <tr>  
                               <td>  
                               		   <img src='.$url.' height="130" width="130" class="img-thumnail" />  
 
                                
                               </td>  
                          </tr>  
                     ';  
          //       }
                 
                     
    }

    }
      
                ?>  
                <tr>
                     	<a href="index.php" id="clicklink">Profile Image</a>
                     </tr>
                </table>

                <!-- <tr>
                	<a href="index.php">Click Here22222!</a>
                </tr>  -->






                <table class="table">  
                     
                <?php  
                //class connectionClass extends mysqli{
			    $host="localhost";$dbname="phptutorial";$dbpass="";$dbuser="root";
    			$con=mysqli_connect($host,$dbuser,$dbpass,$dbname);
    
    			/*public function __construct() {
        				if($this->connect($this->host, $this->dbuser, $this->dbpass, $this->dbname)){}
        					else
       	 					{	echo "hello  ";
            					return "<h1>Error while connecting database</h1>";
        					}
    				}
				}
                */
                $query = "SELECT idimage FROM proof where uid=( select max(uid) from proof)";  
                $result = mysqli_query($con,$query);
                 		
                if ($result->num_rows > 0) {
    // output data of each row
  	while($row = $result->fetch_assoc()) {
       // echo "id: " . $row["Image"]."<br>";
        $url=$row["idimage"];
        //$url2=(string)$url;
       	

        echo '  
                          <tr>  
                               <td>  
                               		   <img src="secondone/'.$url.'"  height="130" width="130" class="img-thumnail" />  
 
                                
                               </td>  
                          </tr>  
                     ' ;  
                 
                     
    }

    }
                /*$url = $row['Image'];
                echo "Hello ".$url;
                while($row = mysqli_fetch_array($result))*/  
               /* {  
                    $url = $row['Image'];
                     echo '  
                          <tr>  
                               <td>  
                                    <img src="webcamImage/20180618054915.jpg" height="200" width="200" class="img-thumnail" />  

                               </td>  
                          </tr>  
                     ';  
                     echo $url;
                     echo $_POST['image'];
                }  */
                ?>  
                	<tr>
                     	<a href="secondone/index2.php" id="clicklink">Id Proof Image</a>
                     </tr>	
                </table> 
			</div>
			<div class="col-sm-7">
				<form action="#" method="post" id="form">
					<form class="form-group">
					<label>Name:</label> 

					<input type="text" name="Name" class="form-control">
					</form>
					<form class="form-group">
					<label>Phone Number</label>: <input type="tel" name="Phone"  class="form-control">
					</form>
					<form class="form-group">
					<label>Address:</label> <input class="form-control" align="right" type="text" name="Address">
					</form>
					<form class="form-group">
					<label>Visitor's Company Name:</label> <input class="form-control" type="text" name="Company">
					</form>
					<form class="form-group">
					<label>Contact Person:</label> <input class="form-control" type="text" name="Contact" >
					</form>
					<form class="form-group">
					<label>Purpose:</label> <input class="form-control" type="text" name="Purpose">
					</form>
					<form class="form-group">
					<label>Visitor ID type: </label><input class="form-control" type="text" name="ID"><br><br>
					</form>
					<input class="btn btn-block btn-primary" type="submit" class="submit" value="submit"/>
				</form>
			</div>
		</div>
	</div>
	</div>
		

		
		
	

</body>
</html>