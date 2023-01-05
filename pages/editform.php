<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BDMS</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="../icofont/icofont.min.css">

</head>

<body>



    <div id="wrapper">

        <?php include 'includes/nav.php'?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Donor's Detail</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Please make your changes by updating the form below:
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                
                                <?php
include 'dbconnect.php';
$id=$_GET['id'];
$qry= "select * from donor where id='$id'";
$result=mysqli_query($conn,$qry);
while($row=mysqli_fetch_array($result)){
    
?>                                    
                                    <form role="form" action="edit.php" method="post">
                                     
                                        <div class="form-group">
                                            <label>Enter Full Name</label>
                                            <input class="form-control" name="name" type="text" value='<?php echo $row['name']; ?>' required>
                                            <p class="help-block">Example:Harry Den</p>
                                        </div>
                                        <div class="form-group">
                                            <label>Enter Guardian's Name</label>
                                            <input class="form-control" type="text" name="guardiansname" value='<?php echo $row['guardiansname']; ?>' required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Gender </label> 
                                             <br>  
                                            <input type="radio" id="gender" name="gender" value="male"  required="required"/> Male    
                                            <br>  
                                            <input type="radio" id="gender" name="gender" value="female"  required="required"/> Female  <br/>   
                                            <input type="radio" id="gender" name="gender" value="Other"  required="required"/> Other  <br/>
                                        </div>

                                        <div class="form-group">
                                            <label>Enter D.O.B</label>
                                            <input class="form-control" type="date" name="dob" value='<?php echo $row['dob']; ?>' required>
                                        </div>

                                        <div class="form-group">
                                            <label>Enter Weight</label>
                                            <input class="form-control" type="number" name="weight" value='<?php echo $row['weight']; ?>' min="50" max="120"required>
                                            <p class="help-block">you should be atleast 50 kg of  weight to donate blood</p>
                                        </div>

                                        <div class="form-group">
                                            <label for="Blood Group">Choose a Blood Group:</label><br>

                                            <select name="bloodgroup" id="bloodgroup" required="required">
                                                  <option value="A+">A+</option>
                                                  <option value="A-">A-</option>
                                                  <option value="B+">B+</option>
                                                  <option value="B-">B-</option>
                                                   <option value="AB+">AB+</option>
                                                  <option  value="AB-">AB-</option>
                                                  <option value="O+">O+</option>
                                                <option value="O-">O-</option>
                                                </select><br>                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Enter Email Id</label>
                                            <input class="form-control" type="email"  pattern="[^ @]*@[^ @]*"pattern="[^ @]*@[^ @]*" name="email" value='<?php echo $row['email']; ?>' required>
                                        </div>

                                        <div class="form-group">
                                            <label>Enter Address</label>
                                            <input class="form-control" type="text" name="address" value='<?php echo $row['address']; ?>' required>
                                        </div>

                                        <div class="form-group">
                                            <label>Enter Contact Number</label>
                                            <input class="form-control" type="number" name="contact" value='<?php echo $row['contact']; ?>' required>
                                        </div>

                                       
                       <!-- id hidden grna input type ma "hidden" -->
    <input type="hidden" name="id" value="<?php echo $row['id'];?>">              
                                    
                                
                                        
                
                                    
                                    <button type="submit" class="btn btn-success">Make Changes</button>
                                    </form>
                                </div>
    <?php
}
?>
                                
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
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

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
        <p>&copy; <?php echo date("Y"); ?>: Developed By Trixy Web</p>
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