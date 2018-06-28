
<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
session_start();
include("base.php");
if (isset($_POST['submit'])){
$user=$_POST['receiptNo'];
$pass=$_POST['name'];
$college=$_POST['college'];
$set_no=$_POST['set_no'];
$sql="select * from participant_details where receipt_no='$user' and name='$pass'";
$que1 = mysqli_query($conn, $sql);

if(mysqli_num_rows($que1))
{
$_SESSION['tempuser']=$user;
$sql1 = "UPDATE participant_details set college='$college', set_no='$set_no' where receipt_no='$user'";
    
     if (mysqli_query($conn, $sql1)) {
            echo "Record updated successfully";
            header("location: quizset" .$set_no. ".php");
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
}
else
{
echo '<h1>Invalid details.</h1><br/> <a href="login.html">Try Login again...</a>';
}

if(!mysqli_query($conn, $sql))
{die('error:'.mysqli_error());}

mysqli_close($conn);}
?>

<html class="gr__codzilla_org_in"><head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" media="screen" href="css/css.css">
        <link rel="stylesheet" href="css/bootstrap.css">
   

        <!-- Custom styles for our template -->
        <link rel="stylesheet" href="css/main2.css">
        
        <link rel="stylesheet" href="css/solveQuestion.css">
        

        <title>ProgChamp</title>

    </head>
    <body data-gr-c-s-loaded="true" oncontextmenu="return false">
        


<!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-static-top" id="headerId">
    <div class="container">
        <div class="navbar-header">
           
            <a class="navbar-brand" href="#">
                <img src="geek.png" alt="logo" width="42" height="50"><span style="font-family: monospace">PROGCHAMP</span><sub> &lt; Because everything is coded! &gt; </sub>
            </a>
        </div>
        <div class="navbar-header navbar-right">
           
            <a class="navbar-brand" href="#">
                <img src="cyno.png" alt="logo" width="42" height="50"><span style="font-family: monospace">CYNOSURE 2k18</span>
            </a>
        </div>
        
    </div>
</nav> 

<div class="container-fluid" id="fullContainer" style="padding-left:40px; padding-right: 40px;">
    <article class="col-xs-12 maincontent">
                    <hr>
                    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                        <div class="panel panel-default well">
                            <div class="panel-body">
                                
                                <h3 class="thin text-center">Log In To Your Account</h3>
                                <hr>
                                
                                
                                <form id="loginform" method="POST" action="index.php">
                                    
                                    <div class="top-margin form-group ">
                                        <label>Receipt No.<span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="   glyphicon glyphicon-list-alt" aria-hidden="true"></span></span>
                                            <input id="receiptNo" name="receiptNo" class="form-control" placeholder="Receipt No." type="text" required>
                                        </div>
                                       
                                    </div>
                                    
                                    <div class="top-margin form-group ">
                                        <label>Name<span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
                                            <input id="name" name="name" class="form-control" placeholder="Full Name" type="text" required>
                                        </div>  
                                    </div>

                                    <div class="top-margin form-group ">
                                    <input type=radio name="college" value="degree">Degree
                                    <input type=radio name="college" value="diploma">Diploma
                                    </div>

                                    <div class="top-margin form-group ">
                                        <label>Set no<span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
                                            <input id="set_no" name="set_no" class="form-control" placeholder="Set number" type="text" required>
                                        </div>  
                                    </div>
                                   
                                    <hr>
                                    <div class="text-center">
                                        <button class="btn btn-success" type="submit" name="submit">Log In</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                </article>
</div>

<style>
    #footer{
        bottom:0px;
        left:0px;
        right:0px;
        margin-bottom:0px;
    }
</style>



<footer id="footer" class="top-space">
    <div class="footer1">
        <div class="container-fluid" style="position:relative;">
            <div class="row">

                <div class="col-md-8 widget">
                    <div style="padding-left:10px;font-size: 14px;color: #757575;">
                        <h3 class="widget-title">Contact Us</h3>
                        <div class="widget-body">
                            <div itemprop="email" style="padding-bottom: 2px;"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>&nbsp;&nbsp;Snehal Gharat : 9975226167</div>
                            <div itemprop="website" style="padding-bottom: 2px;"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>&nbsp;&nbsp;Vivek Pawar : 9769748955</div> 
                        </div>	
                    </div>
                </div>
                
                
                <div class="col-md-4 widget">
                    <div style="padding-left:10px;font-size: 14px;color: #757575;">
                        <h3 class="widget-title">Our Sponsors</h3>
                        <div class="widget-body">
                            <ul style="list-style-type:none;padding: 0px">
                                <li>SNP Software - http://www.snpsoftwaretechnology.com/</li>
                                <li>Abhishek Pathak - http://mlcode.ml/</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div> <!-- /row of widgets -->
        </div>
    </div>
    
</footer>


        
    


</body>
</html>