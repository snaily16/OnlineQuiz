
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
                                <div class="well" id="question"><b>Question 1</b> <hr>#include &lt;stdio.h &gt;
int main()
{
    printf("ProgChamps");
    main();
    return 0;
}
<input type=radio name="q1" value="1">Infinite
<input type=radio name="q1" value="2">32767
<input type=radio name="q1" value="3">65535
<input type=radio name="q1" value="4">0

</div>

<div class="well" id="question"><b>Question 2</b> <hr>What will be the output of this program: 
#include<stdio.h>
int main(){
        float me = 5.25;
        double you = 5.25;
        if(me == you)
                printf("Hello world");
        else
                printf("Bye world");
        return 0;
}
<input type=radio name="q2" value="1">Hello world
<input type=radio name="q2" value="2">Bye world
<input type=radio name="q2" value="3">Compilation Error
<input type=radio name="q2" value="4">Runtime Error
</div>

<div class="well" id="question"><b>Question 3</b> <hr>The mother of Sukesh is the only daughter of Saritha’s father.
How Saritha is related to Sukesh?
<input type=radio name="q3" value="1">Aunt
<input type=radio name="q3" value="2">Sister
<input type=radio name="q3" value="3">Mother
<input type=radio name="q3" value="4">Data inadequate
</div>
<div class="well" id="question"><b>Question 4</b> <hr>A NAND gate has a :
<input type=radio name="q4" value="1">Low inputs and a High output
<input type=radio name="q4" value="2">High inputs and a Low output
<input type=radio name="q4" value="3">High inputs and a High output
<input type=radio name="q4" value="4">None of these
</div>
<div class="well" id="question"><b>Question 5</b> <hr>Complete the following C program to find the factorial of a number:

int main()
{
    int n=6, i;
    int fact =1;
    for(i=1;i<=n;i++)
        <input type=text name="q5">;
    printf(“%d”, fact);
    return 0;
}
</div>
<div class="well" id="question"><b>Question 6</b> <hr>Imagine writing a program that instructs a bird how to take off, fly, and land. What function is likely to be looped?
<input type=radio name="q6" value="1">Lift off
<input type=radio name="q6" value="2">Flap wings
<input type=radio name="q6" value="3">Find landing positon
<input type=radio name="q6" value="4">Land
</div>
<div class="well" id="question"><b>Question 7</b> <hr>Look at this series: 7, 10, 8, 11, 9, 12, ... What number should come next?
<input type=radio name="q7" value="1">20
<input type=radio name="q7" value="2">10
<input type=radio name="q7" value="3">13
<input type=radio name="q7" value="4">12
</div>
<div class="well" id="question"><b>Question 8</b> <hr>In programming, = is used for comparison, whereas, == is used for assignment of two quantities.
<input type=radio name="q8" value="1">True
<input type=radio name="q8" value="2">False
</div>
<div class="well" id="question"><b>Question 9</b> <hr>Give the equivalent of a decimal number in binary
The number 2018 in binary is <input type=text name="q9">.
</div>
<div class="well" id="question"><b>Question 10</b> <hr>Which control statement is used to check if condition has been met or not?
<input type=radio name="q10" value="1">If-else
<input type=radio name="q10" value="2">For 
<input type=radio name="q10" value="3">Array
<input type=radio name="q10" value="4">Variables
</div>
<div class="well" id="question"><b>Question 11</b> <hr>The keywords cannot be used as variable names.
<input type=radio name="q11" value="1">True
<input type=radio name="q11" value="2">False
</div>
<div class="well" id="question"><b>Question 12</b> <hr>.009 / x = .01
What is the value of x?
<input type=radio name="q12" value="1">.0009
<input type=radio name="q12" value="2">.09 
<input type=radio name="q12" value="3">.9
<input type=radio name="q12" value="4">9
</div>
<div class="well" id="question"><b>Question 13</b> <hr>Complete the following C program to find the number of digits in given number:

#include <stdio.h>
int main()
{
    int n=1234;
    int count = 0;
    while( ____ )
    {
        n =n/10;
        ++count;
    }

    printf("Number of digits: %d", count);
}
<input type=radio name="q13" value="1">i=0
<input type=radio name="q13" value="2">i!=0 
<input type=radio name="q13" value="3">string[i]=='\0'
<input type=radio name="q13" value="4">string[i]!='\0'
</div> 
<div class="well" id="question"><b>Question 14</b> <hr>Complete the following C program to find the length of the string:
void main()
{
    char string[50]="ProgChamp";
    int i, length = 0;
    for (i = 0; <input type=text name="q14">; i++)
    {
        length++;
    }
}

</div>   
<div class="well" id="question"><b>Question 15</b> <hr>What will you use to print '\n'?
<input type=radio name="q15" value="1"> \n
<input type=radio name="q15" value="2"> \\n 
<input type=radio name="q15" value="3"> '\n'
<input type=radio name="q15" value="4"> Not possible


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