<?php
include("base.php");
	 session_start();
	 $user=$_SESSION['tempuser'];
	 if ($_SESSION['tempuser']) {
	 	$query = "SELECT * from participant_details where receipt_no='$user' "; 
        $details = mysqli_query($conn, $query);
        $val = mysqli_fetch_assoc($details);
        $set_no = $val['set_no'];
	 	
if (isset($_POST['submitresponse'])){
	$q1=$_POST['q1'];
	$q2=$_POST['q2'];
	$q3=$_POST['q3'];
	$q4=$_POST['q4'];
	$q5=$_POST['q5'];
	$q6=$_POST['q6'];
	$q7=$_POST['q7'];
	$q8=$_POST['q8'];
	$q9=$_POST['q9'];
	$q10=$_POST['q10'];
	$q11=$_POST['q11'];
	$q12=$_POST['q12'];
	$q13=$_POST['q13'];
	$q14=$_POST['q14'];
	$q15=$_POST['q15'];
	
			$sql = "INSERT into response(r_no,set_no,q1,q2,q3,q4,q5,q6,q7,q8,q9,q10,q11,q12,q13,q14,q15) VALUES ('$user', '$set_no', '$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$q13','$q14','$q15' )";
	
	 
	 	
	 if (mysqli_query($conn, $sql)) {
		    echo "Record updated successfully";
			header("location: logout.php");
		} else {
		    echo "Error updating record: " . mysqli_error($conn);
		}
	}
}
mysqli_close($conn);
?>