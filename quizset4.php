
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
                                <div class="well" id="question"><b><b>Question 1</b> <hr>
#include &lt;stdio.h&gt;
int main()
{
    int a = 300, b, c;
    if(a >= 400)
        b = 300;
    c = 200;
    printf("%d, %d, %d\n", a, b, c);
    return 0;
}                                  
    
1. <input type = radio name="q1" value="1"> 300, 300, 200
2. <input type = radio name="q1" value="2"> Garbage, 300, 200
3. <input type = radio name="q1" value="3"> 300, Garbage, 200
4. <input type = radio name="q1" value="4"> 300, 300, Garbage
</div>

<div class="well" id="question"><b>Question 2</b> <hr>A conditional loop is a loop which will repeat code until a 
                                    
1. <input type = radio name="q2" value="1"> TRUE
2. <input type = radio name="q2" value="2"> FALSE
</div>
                                
                                
<div class="well" id="question"><b>Question 3</b> <hr>What will be the output of the following code?
#include&lt;stdio.h&gt;                                    
int main()
{
    float a = 0.3;
    if(0.3 > a)
        printf("True\n");
    else
        printf("False\n");
    return 0;
}
 
1. <input type = radio name="q3" value="1"> TRUE
2. <input type = radio name="q3" value="2"> FALSE
3. <input type = radio name="q3" value="3"> ERROR
4. <input type = radio name="q3" value="4"> NONE
</div>
                                
<div class="well" id="question"><b>Question 4</b> <hr>
#include&lt;stdio.h&gt;                                    
void main()
{
    const int a;
    int b = 10’
    a = b;
    printf(“%d”,b);
    printf(“%d”,b++);
    printf(“%d”,a++);
}

1. <input type = radio name="q4_1" value="Error"> Error
2. <input type = radio name="q4_1" value="101111"> 101111
3. <input type = radio name="q4_1" value="101010"> 101010
4. <input type = radio name="q4_1" value="101110"> 101110
</div>
                                
                                <div class="well" id="question"><b>Question 5</b> <hr>
#include&lt;stdio.h&gt;                                    
void main()
{
   char c = 2*2+2;
   printf(“%d”,c);
}                            
   
1. <input type = radio name="q5" value="1"> Error
2. <input type = radio name="q5" value="2"> Garbage Value
3. <input type = radio name="q5" value="3"> 8
4. <input type = radio name="q5" value="4"> 6
</div>
    <div class="well" id="question"><b>Question 6</b> <hr>Complete the following C program to find the factors of a number.
#include&lt;stdio.h&gt;
int main()
{
    int n=12;      
    int i;
    for(i=1;i&lt;n;i++)
    {
        if(<input type=text name="q6">)
        {
            printf("%d", i);
        }
    }
    return(0);
}
</div>
       
    <div class="well" id="question"><b>Question 7</b> <hr>
    What will happen when we compile and run following c program

#include&lt;stdio.h&gt;
int main(){
int i=1,j;
for( ; ; ){
if(i)
  j=--i;
if(j&lt;10)
    printf(“progchamps”,j++);
else
    break;
  }
return 0;
}
                                    
                           
   
1. <input type = radio name="q7_1" value="1"> Compile error
2. <input type = radio name="q7_1" value="2"> No compile error but it will run infinite loop printing progchamps
3. <input type = radio name="q7_1" value="3"> No compile error and it will print progchamps 10 times
4. <input type = radio name="q7_1" value="4"> No compile error but it will print progchamps 9 times
</div> 
                                
<div class="well" id="question"><b>Question 8</b> <hr>Which of the following items can be stored as an integer data type?
1. <input type = radio name="q8" value="1"> 100 m sprint timing
2. <input type = radio name="q8" value="2"> Number of pages in a book
3. <input type = radio name="q8" value="3"> Item's price
4. <input type = radio name="q8" value="4"> Currency conversion
</div>
                                
    <div class="well" id="question"><b>Question 9</b> <hr>
        What is the output of following program.

#include&lt;stdio.h&gt;
int main()
{
   int pn=100;
   if(pn>20)
      if(pn&lt;20)
         printf("Heyyyyy");
   else
      printf("Hiiiii");
return 0;
}
                          
   
1. <input type = radio name="q9_1" value="No output"> No output
2. <input type = radio name="q9_1" value="Hiiiii"> Hiiiii
3. <input type = radio name="q9_1" value="Heyyyyy"> Heyyyyy
4. <input type = radio name="q9_1" value="HeyyyyyHiiiii"> HeyyyyyHiiiii
</div>
                                
<div class="well" id="question"><b>Question 10</b> <hr>
        Which Programming language is faster ?
   
1. <input type = radio name="q10_1" value="C"> C
2. <input type = radio name="q10_1" value="C++"> C++
3. <input type = radio name="q10_1" value="JAVA"> JAVA
4. <input type = radio name="q10_1" value="PYTHON"> PYTHON
</div>
                                
                                
<div class="well" id="question"><b>Question 11</b> <hr>
        What is the output of following program.

#include&lt;stdio.h&gt;
int main()
{
    int i = 3;
    while (i--)
    {
        int i = 100;
        i--;
        printf("%d ", i);
    }
    return 0;
}

                          
   
1. <input type = radio name="q11_1" value="Infinite Loop"> Infinite Loop
2. <input type = radio name="q11_1" value="99 99 99"> 99 99 99
3. <input type = radio name="q11_1" value="99 98 97"> 99 98 97
4. <input type = radio name="q11_1" value="Error"> Error
</div>
                                
    <div class="well" id="question"><b>Question 12</b> <hr>
  Let x be an integer which can take a value 0 or 1. The statement 
        if(x==0) 
            x=1; 
        else 
            x=0; 
   is equivalent to which one of the following?                          
   
1. <input type = radio name="q12_1" value="x=1+x"> x=1+x
2. <input type = radio name="q12_1" value="x=1-x"> x=1-x
3. <input type = radio name="q12_1" value="x=x-1"> x=x-1

4. <input type = radio name="q12_1" value="x=1%x"> x=1%x
</div>
                                
<div class="well" id="question"><b>Question 13</b> <hr>
  Which of the following are incorrect statements? If int a=10.
1. if( a==10 ) printf("Progchamp");
2. if( 10==a ) printf("Progchamp");
3. if( a=10 ) printf("Progchamp");
4. if( 10=a ) printf("Progchamp");                          
   
1. <input type = radio name="q13" value="3 and 4."> 3 and 4.
2. <input type = radio name="q13" value="3 only."> 3 only.
3. <input type = radio name="q13" value="4 only."> 4 only.
4. <input type = radio name="q13" value="2,3 and 4."> 2,3 and 4.
</div>
                                
<div class="well" id="question"><b>Question 14</b> <hr>What is the missing number of the following sequence? 6, 11, 21, 36, 56, ?                          
   
1. <input type = radio name="q14" value="1"> 42
2. <input type = radio name="q14" value="2"> 51
3. <input type = radio name="q14" value="3"> 81
4. <input type = radio name="q14" value="4"> 91
</div>
                                
<div class="well" id="question"><b>Question 15</b> <hr>
At the end of the day one market stall had 16 apples and 48 oranges left. Another market stall had 36 apples and 24 oranges left. What is the difference between the percentages of apples left in the two market stalls?                        
   
1. <input type = radio name="q15_1" value="35"> 35%
2. <input type = radio name="q15_1" value="40"> 40%
3. <input type = radio name="q15_1" value="20"> 20%
4. <input type = radio name="q15_1" value="28"> 28%
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

            </div> 
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