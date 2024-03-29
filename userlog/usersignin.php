<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta me="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Vinayak's Web</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="../icofont/icofont.min.css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<! -- we can add java script to add java script -- >
    <div id="wrapper">

    

        <div id="page-wrapper">
            <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Details </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Please fill up the form below:
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="addeduser.php" method="post">
                                     
                                        <div class="form-group">
                                            <label>Enter Full Name</label>
                                            <input class="form-control" name="name" type="text" placeholder="Example:Harry Den" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Enter Guardian's Name</label>
                                            <input class="form-control" placeholder="Guardian's Name" name="guardiansname" required>
                                        </div>
                                        
                                        <div class="form-group">
                                                        <label>  
                                            Gender:   
                                            </label>  <br>  
                                            <input type="radio" id="gender" name="gender" value="Male"  required="required"/> Male    
                                            <br>  
                                            <input type="radio" id="gender" name="gender" value="Female"  required="required"/> Female  <br/>  
                                            <input type="radio" id="gender" name="gender" value="Other"  required="required"/> Other  <br/>    
                                           
                                        <div class="form-group">
                                            <label>Enter D.O.B</label>
                                            <input class="form-control" type="date" name="dob" max = "08-12-2005" required>
                                            <! -- max is not working here so i suggest to apply java script -- >
                                            
                                        </div>

                                        <div class="form-group"> 
                                            <label>Enter Weight</label>
                                            <input class="form-control" type="number" placeholder="Enter Weight" name="weight" min="50" max="120"required>
                                            <p class="help-block">you should be atleast 50 kg of  weight to donate blood</p>
                                        </div>

                                        <div class="form-group">
                                            <label>Blood  Group</label><br>
                                             <select name="bloodgroup" id="bloodgroup" required="required">
                                                  <option value="A+">A+</option>
                                                  <option value="A-">A-</option>
                                                  <option value="B+">B+</option>
                                                  <option value="B-">B-</option>
                                                  <option value="AB+">AB+</option>
                                                  <option value="AB-">AB-</option>
                                                  <option value="O+">O+</option>
                                                <option value="O-">O-</option>
                                                </select><br>
                                            
                                           
                                        </div>

                                        <div class="form-group">
                                            <label>Enter Email Id</label>
                                            <input class="form-control" type="email" pattern="[^ @]*@[^ @]*"placeholder="Enter Email Id" name="email" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Enter Address</label>
                                            <input class="form-control" type="text" placeholder="Enter Address Here" name="address" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Enter Contact Number</label>
                                        <input class="form-control" type="number" placeholder="Contact Number" pattern="[1-9]{1}[0-9]{9}"name="contact"  required>
                                        </div>

                                        <div class="form-group">
                                            <label>Enter Username</label>
                                            <input class="form-control" placeholder="Enter Here" name="username" required>
                                            <p class="help-block">In order to create donor's account.</p>
                                            <p class="help-block">Example: harry20</p>
                                        </div>

                                        <div class="form-group">
                                            <label>Enter Password</label>
                                            <input class="form-control" name="password" type="password" id="myInput" required>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" onclick="myFunction()">Show Password
                                                </label>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-success" class="btn btn-success" style="border-radius:0%";>Submit Form</button>

                
                                    </form>


                                </div>                      

                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            </div>
            <!-- /.containerfluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <script>
        function myFunction() {
          var x = document.getElementById("myInput");
          if (x.type === "password") {
            x.type = "text";
          } else {
            x.type = "password";
          }
        }
        </script>

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

<footer>
        <p>&copy; <?php echo date("Y"); ?>: Developed By Versha And Vinayak</p>
    </footer>
	
	<style>
	footer{
   background-color: #424558;
    bottom: 0;
    left: 0;
    right: 0;
    height: 35px;
    text-align: center;
    color: #CCC;
}

footer p {
    padding: 10.5px;
    margin: 0px;
    line-height: 100%;
}
	</style>

</html>
