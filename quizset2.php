
<?php
include("base.php"); 
     session_start();
     $user=$_SESSION['tempuser'];
     if ($_SESSION['tempuser']) {
         
        $query = "SELECT * from participant_details where receipt_no='$user' "; 
        $details = mysqli_query($conn, $query);
        $val = mysqli_fetch_assoc($details);
        $name = $val['name'];
        
?>


<html class="gr__codzilla_org_in">

<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" media="screen" href="css/css.css">
        <link rel="stylesheet" href="css/bootstrap.css">
   

        <!-- Custom styles for our template -->
        <link rel="stylesheet" href="css/main2.css">
        
        <link rel="stylesheet" href="css/solveQuestion.css">
        
        <script type="text/javascript">
        history.pushState(null, null, location.href);
        window.onpopstate = function () {
        history.go(1);
    };
        </script>
        <title>ProgChamp</title>
<style>
p {
  text-align: center;
  font-size: 20px;
  margin-top:0px;
  color: #fff;
}
</style>
    </head>
    <body data-gr-c-s-loaded="true" oncontextmenu="return false">
        


<!-- Fixed navbar -->
<div class="navbar navbar-inverse headroom navbar-fixed-top" id="headerId">
    <div class="container">
        <div class="navbar-header">
           
            <a class="navbar-brand" href="#">
                <img src="geek.png" alt="logo" width="42" height="50"><span style="font-family: monospace">PROGCHAMP</span><sub> &lt; Because everything is coded! &gt; </sub>
            </a>
        </div>
        
        <div class="navbar-header navbar-right">
           <p id="timer"></p>
            <a class="navbar-brand" href="#">
                <img src="cyno.png" alt="logo" width="42" height="50"><span style="font-family: monospace">CYNOSURE 2k18</span>
            </a>
        </div>
        
    </div>
</div> 

<br>
<br>
<br>
<br>
        <!-- container -->
        <div class="container-fluid" id="fullContainer" style="padding-left:40px; padding-right: 40px;">
            
            <div class="fuelux">
                <!-- Article main content -->
                <article class="col-xs-12 maincontent">

                    <header class="page-header">
                        <h1 class="page-title">
                            <small>Hi, <?php echo $name; ?> </small>
                        </h1>
                    </header>
                    <header class="page-header">
                        <h1 class="page-title">Quiz 
                            <small>Basics of Programming</small>
                        </h1>
                    </header>
            
                </article>

                <div class="maincontent">
                    
                    <form id="quizform" method="POST" action="response.php">
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="problem" spellcheck="false">
                            <div class="content"> 
                                <div class="well" id="question"><b>Question 1</b> <hr>What would be the output of the following program?
main()
{
    int i = 4;
    switch(i)
    {
        default:
            printf(“Apple”);
        case 1:
            printf(“Mango”);
            break;
        case 2:
            printf(“Banana”);
            break;
        case 3:
            printf(“Orange”);
    }
}
<input type=text name="q1" autocomplete="off">.

</div>

<div class="well" id="question"><b>Question 2</b> <hr>Which option lists the problem- solving steps in the correct order?
1. Create the procedures needed to execute the solution
2. Use logic to plan a solution to the problem
3. Test and refine the solution
4. Identify and understand the problem
<input type=radio name="q2" value="1">1,2,3,4
<input type=radio name="q2" value="2">4,1,2,3
<input type=radio name="q2" value="3">4,2,1,3
<input type=radio name="q2" value="4">2,1,4,3
</div>

<div class="well" id="question"><b>Question 3</b> <hr>Which variable data type would be used to store how many players a team has?
<input type=radio name="q3" value="1">Boolean
<input type=radio name="q3" value="2">Integer
<input type=radio name="q3" value="3">String
<input type=radio name="q3" value="4">Single
</div>
<div class="well" id="question"><b>Question 4</b> <hr>Look at this series: 53, 53, 40, 40, 27, 27, ... What number should come next?
<input type=radio name="q4" value="1">12
<input type=radio name="q4" value="2">14
<input type=radio name="q4" value="3">27
<input type=radio name="q4" value="4">53
</div>
<div class="well" id="question"><b>Question 5</b> <hr>A variable name can start with a underscore ?
<input type=radio name="q5" value="1">True
<input type=radio name="q5" value="2">False
</div>
<div class="well" id="question"><b>Question 6</b> <hr>Give the equivalent of a binary number in decimal
The number 100111110 in decimal is <input type=text name="q6">.
</div>
<div class="well" id="question"><b>Question 7</b> <hr>What will be the output of the program?
#include<stdio.h>
int main()
{
    int x=4, y, z;
    y = --x;
    z = x--;
    printf("%d, %d, %d\n", x, y, z);
    return 0;
}
<input type=radio name="q7" value="1">4,3,3
<input type=radio name="q7" value="2">4,3,2
<input type=radio name="q7" value="3">3,3,2
<input type=radio name="q7" value="4">2,3,3
</div>
<div class="well" id="question"><b>Question 8</b> <hr>Pointing to a woman, Abhijit said, "Her granddaughter is the only daughter of my brother." How is the woman related to Abhijit?
<input type=radio name="q8" value="1">Sister
<input type=radio name="q8" value="2">Grandmother
<input type=radio name="q8" value="3">Mother-in-law
<input type=radio name="q8" value="4">Mother
</div>
<div class="well" id="question"><b>Question 9</b> <hr>What is the output of the following code?
int main()
{
    int a=18, b=4;
    printf("%d", a%b);
}
<input type=radio name="q9" value="1">0
<input type=radio name="q9" value="2">2
<input type=radio name="q9" value="3">4.5
<input type=radio name="q9" value="4">4
</div>

<div class="well" id="question"><b>Question 10</b> <hr>How to define two dimensional 3 x 3  integer matrix in variable a?
<input type=text name="q10">
</div>
<div class="well" id="question"><b>Question 11</b> <hr>What will be the output of (1011 or 1000)?
<input type=text name="q11">.
Note: 1011, 1000 are binary numbers.
</div>
<div class="well" id="question"><b>Question 12</b> <hr>Three unbiased coins are tossed. What is the probability of getting at most two heads? 
<input type=radio name="q12" value="1">3/4
<input type=radio name="q12" value="2">1/4 
<input type=radio name="q12" value="3">3/8
<input type=radio name="q12" value="4">7/8
</div>
<div class="well" id="question"><b>Question 13</b> <hr>Complete the following C program to find if the number is positive or negative:

#include <stdio.h>
int main()
{
    int n = -20;
    if(<input type=text name="q13">)
        printf("Negative");
    else 
        printf("Positive");
}
</div> 
<div class="well" id="question"><b>Question 14</b> <hr>The "\n" character does which of the following operations?
<input type=radio name="q14" value="1">Double line spacing
<input type=radio name="q14" value="2">Character deletion
<input type=radio name="q14" value="3">Places cursor on the next line
<input type=radio name="q14" value="4">Character backspace
</div>   
<div class="well" id="question"><b>Question 15</b> <hr>What are the three main programming structures?
<input type=radio name="q15" value="1">Sequence, selection, loop
<input type=radio name="q15" value="2">Structured, object-oriented, procedural
<input type=radio name="q15" value="3">Java, Python, Ruby
<input type=radio name="q15" value="4">Machine, assembly, high-level



</div> 

                            </div>
                            <div class="actionbar"> 
                                <button class="btn  btn-info" id="submit" type="submit" name="submitresponse"> Submit</button>                            
                            </div>
                           
                        </div>
                        

                        
                    </div>
                </form>
                </div>
            </div>
        </div>	<!-- /container -->
        


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
                                <li>SNP Software - http://www.snpsoftwaretechnology.com</li>
                                <li>Abhishek Pathak - http://mlcode.ml/</li>
                                
                            </ul>
                        </div>
                    </div>
                </div>

            </div> <!-- /row of widgets -->
        </div>
    </div>
    
</footer>


        
 
<script>
document.getElementById('timer').innerHTML =
  60 + ":" + 00;
startTimer();

function startTimer() {
  var presentTime = document.getElementById('timer').innerHTML;
  var timeArray = presentTime.split(/[:]+/);
  var m = timeArray[0];
  var s = checkSecond((timeArray[1] - 1));
  if(s==59){m=m-1}
  if(m<0){alert('Timeout, submit your test')}
  
  document.getElementById('timer').innerHTML =
    m + ":" + s;
  setTimeout(startTimer, 1000);
}

function checkSecond(sec) {
  if (sec < 10 && sec >= 0) {sec = "0" + sec}; // add zero in front of numbers < 10
  if (sec < 0) {sec = "59"};
  return sec;
}
</script>   


</body>
</html>
<?php
}
else{
    echo('You are not logged in');
}
?>