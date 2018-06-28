
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
                             <div class="well" id="question"><b>Question 1</b> <hr>What would be the output of the program?
#include&lt;stdio.h&gt;                                    
void main()
{
    int x=22;
    if(x=10)
        printf("TRUE");
    else
        printf("FALSE");
}
                                    
    
1. <input type = radio name="q1" value="1"> TRUE
2. <input type = radio name="q1" value="2"> FALSE
3. <input type = radio name="q1" value="3"> ERROR
4. <input type = radio name="q1" value="4"> NONE
</div>

<div class="well" id="question"><b>Question 2</b> <hr>Give the equivalent of a decimal number in octal
The number 2018 in octal is <input type=text name="q9">.
</div>
                                
                                
       <div class="well" id="question"><b>Question 3</b> <hr>A unbiased die is tossed. Find the probability of getting a multiple of 3.
  
1. <input type = radio name="q3" value="1"> 1/2
2. <input type = radio name="q3" value="2"> 1/3
3. <input type = radio name="q3" value="3"> 1/4
4. <input type = radio name="q3" value="4"> 2/5
</div>
                                
 <div class="well" id="question"><b>Question 4</b> <hr>
Variables can hold different types of data, and they are classified based on the type of data they hold. 
The numbers 7.5, 2.1 and 48.6 would be stored using which variable data type? 

1. <input type = radio name="q4" value="1"> Boolean
2. <input type = radio name="q4" value="2"> Floating
3. <input type = radio name="q4" value="3"> String 
4. <input type = radio name="q4" value="4"> Integer
</div>
                                
 <div class="well" id="question"><b>Question 5</b> <hr>Which control structure will execute an instruction only after the computer evaluates conditions to determine if a certain condition exists? 
1. <input type = radio name="q5" value="1"> Selection
2. <input type = radio name="q5" value="2"> Loop 
3. <input type = radio name="q5" value="3"> Functional
4. <input type = radio name="q5" value="4"> Sequence
</div>
 <div class="well" id="question"><b>Question 6</b> <hr>Complete the following C program to find the given number is even or odd.
#include&lt;stdio.h&gt;
int main()
{
    int a = 7585;  
    if (<input type=text name="q6">)
    {
        printf("number is even");
    }
    else
    {
        printf("number is odd");       
    }
    return(0);
}
</div>
       
    <div class="well" id="question"><b>Question 7</b> <hr>Which of this is a valid identifier?                       
   
1. <input type = radio name="q7" value="1"> !hello_
2. <input type = radio name="q7" value="2"> 4getme
3. <input type = radio name="q7" value="3"> _hello_world
4. <input type = radio name="q7" value="4"> None of this
</div> 
                                
<div class="well" id="question"><b>Question 8</b> <hr>How many times will the value of 'i' be printed?
#include&lt;stdio.h&gt;
int main()
{
    int i = 0;
    while(i &lt;= 255)
    {
        printf("%d", i);
        i++;
    }
    return 0;
}                      
   
1. <input type = radio name="q8" value="1"> 1 time
2. <input type = radio name="q8" value="2"> 255 times
3. <input type = radio name="q8" value="3"> Infinite times
4. <input type = radio name="q8" value="4"> 256 times
</div>
                                
<div class="well" id="question"><b>Question 9</b> <hr>A AND gate has a :
<input type=radio name="q9" value="1">Low inputs and a High output
<input type=radio name="q9" value="2">High inputs and a Low output
<input type=radio name="q9" value="3">High inputs and a High output
<input type=radio name="q9" value="4">None of these

</div>
                                
<div class="well" id="question"><b>Question 10</b> <hr>Write code to generate multiplication table of 5
#include <stdio.h>
int main()
{
    int n=5, i;
    for(i=1; i&lt;=10; ++i)
    {
        printf("%d",<input type=text name="q10">);
    }
    return 0;
}
</div>
                                
                                
<div class="well" id="question"><b>Question 11</b> <hr>Pointing to a photograph of a boy Suresh said, “He is the son of the only son of my mother.” How is Suresh related to that boy?
1. <input type = radio name="q11" value="1"> Brother
2. <input type = radio name="q11" value="2"> Uncle
3. <input type = radio name="q11" value="3"> Cousin
4. <input type = radio name="q11" value="4"> Father
</div>
                                
<div class="well" id="question"><b>Question 12</b> <hr>Write a code to calculate time, if distance (in kms) and speed (in m/sec) are given.
int main()                          
{
    int d=50, s=10;
    int t;
    <input type=text name="q12">
    printf("Time = %d", t);
}
</div>
                                
<div class="well" id="question"><b>Question 13</b> <hr>
Which of the following are incorrect statements? if int a=10.
1. if( a==10 ) printf("Progchamp");
2. if( 10==a ) printf("Progchamp");
3. if( a=10 ) printf("Progchamp");
4. if( 10=a ) printf("Progchamp");                          
   
1. <input type = radio name="q13" value="1"> 3 and 4.
2. <input type = radio name="q13" value="2"> 3 only.
3. <input type = radio name="q13" value="3"> 4 only.
4. <input type = radio name="q13" value="4"> 2,3 and 4.
</div>
                                
<div class="well" id="question"><b>Question 14</b> <hr>
what is the missing number of the following sequence? 2, 12, 60, 240, 720, 1440, ?, 0                          
   
1. <input type = radio name="q14" value="1"> 2880
2. <input type = radio name="q14" value="2"> 1440
3. <input type = radio name="q14" value="3"> 720
4. <input type = radio name="q14" value="4"> 0
</div>
                                
<div class="well" id="question"><b>Question 15</b> <hr>
At the end of the day one market stall had 16 apples and 48 oranges left. 
Another market stall had 36 apples and 24 oranges left. 
What is the difference between the percentages of apples left in the two market stalls?                        
   
1. <input type = radio name="q15" value="1"> 35%
2. <input type = radio name="q15" value="2"> 40%
3. <input type = radio name="q15" value="3"> 20%
4. <input type = radio name="q15" value="4"> 28%
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
                
                ;
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