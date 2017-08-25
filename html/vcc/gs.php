<?php 
include("redirect.php");
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>VCC</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bm.css">
	<link rel="stylesheet" href="css/btm.css">
  <link rel="icon" href="favicon.gif">
  
</head>
<body>

<!-- Navigation Bar start-->

<nav class="navbar navbar-default navbar-static-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="vcc.php">VCC</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li ><a href="questions.php">HOME</a></li>
        <li ><a href="mysub.php">My Submissions</a></li>
        <li ><a href="rank.php">Ranks</a></li>
        <li class="active"><a href="gs.php">Getting Started</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"> Welcome <?php echo $_SESSION['name']; ?></a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<!-- Nav Bar End-->

	<div class="container">
  		<div id="mycont">
  			<h3>Getting Started</h3>	
  			<div class="smright">
  			<p> The Compiler Used to complie the programs is  <b>GCC (Ubuntu) version 4.8.2</b>. Every Program is compiled and if there are no errors
            then it is runned aganist our Test Case and if the Output Produced by the program is the same as the expected output and
            if it is produced before a time limit the solution is <span style="color:green">Accepted</span>.
        </p>

<hr>
        <h3>Common Results and there meaning</h3>
                <p>These are the Possible Results that You can Expect from the program you submit</p>
        
        <table class="table table-bordered ">
          <tr>
             <th>Result</th>
             <th>Meaning</th>
           </tr> 
           <tr bgcolor="#5cb85c">
             <td>AC</td>
             <td>Accepted</td>
           </tr>
           <tr bgcolor="#FF8362">
             <td>WA</td>
             <td>Wrong Answer</td>
           </tr>
           <tr bgcolor="#f0ad4e">
             <td>TLE</td>
             <td>Time Limited Exceeded</td>
           </tr>
           <tr bgcolor="#4FD5D6">
             <td>RE_NUM</td>
             <td>Runtime Error</td>
           </tr>
           <tr bgcolor="#d3d3d3">
             <td>CE</td>
             <td>Compilation Error</td>
           </tr>
           
        </table>
<hr>
<h3>RunTime Error Explanation</h3>
        <p>Runtime errors do not appear while a program is being compiled. Instead they occur as the program is being executed. usually because they don't handle the input properly or because of some logical error.
        </br>
        </br>Here are the list of typical Runtime Erros that you can might come across. </p>
        <table class="table table-bordered table-striped ">
          <tr class="info">
             <th>Type</th>
             <th>Meaning</th>
           </tr > 
           <tr class="info">
              <td>RE_2</td>
              <td>Upon Receiving an Interactive Attention Signal like `CTRL + C` </td>
            </tr>
           <tr class="info">
              <td>RE_6</td>
              <td>Voluntary exit of the program</td>
            </tr>
            <tr class="info">
              <td>RE_8</td>
              <td>Arithmetic Error</td>
            </tr>
            <tr class="info">
              <td>RE_4</td>
              <td>Illegal Instruction</td>
            </tr>
            <tr class="info">
              <td>RE_11</td>
              <td>Illeagal Acess</td>
            </tr>
            <tr class="info">
              <td>RE_139 and Others </td>
              <td>
                <ul style="margin-left: -25px;">
                  <li>Infinite Recursion</li>
                  <li>Using So Much Memory</li>
                  <li>Creating A Child Process</li>
                  <li>Using Pointers or Dynamic Memory Allocatoin or File Manipulation
                      (Security Reasons)
                  </li>
                </ul>

              </td>
            </tr> 
           
        </table>

<hr>

<h3>FAQ</h3>

        <p > <b>Sample C Program</b> </p>
<pre>
#include&lt;stdio.h&gt;

int main() {
 printf("Hello World!!"); 
 return 0;
}
</pre>
        <p><b>Sample CPP Program</b> </p>
<pre>
#include&lt;iostream&gt;
using namespace std;

int main() {
 cout&lt;&lt;"Hello World!!"; 
 return 0;
}
</pre>

<h2>Demo Question With Answer</h2>


		<h2>No Copying</h2>
	<div id="questiontag">

		<div id="question">
		Rahul is a nursery kid from a town called Byte Land, He's Teacher, Bob gets angry when some one copies during exams.<br>Today Bob is conducting a surprise Slip Test and Rahul snapped into the harsh reality he's made to face.&nbsp;</div><div id="question">Bob Gave A total of &nbsp;T Questions and Rahul needs to copy them.&nbsp;<br>
		<br>
		Why Don't you help him ??
		</div>
		<br>
		<div id="constraints">
			<h4>Constraints:</h4>
			
			<ul>
				<li> 0 &lt; T &lt; 1000</li>
			</ul>
		</div>
		<div id="questiontag"><div id="sampleInput"><h4><br></h4><h4>Input:</h4><div id="input"><ul style="list-style-type: none;"><li>The First Line of Input Contains T ,<span style="line-height: 1.42857143;">Followed by T Answers to copy</span></li><li></li></ul></div></div></div><div id="questiontag"><div id="sampleOutput"><h4>Output:</h4><div id="output"><ul style="list-style-type: none;"><li>Print each Answer Separated by a new Line.</li></ul></div></div></div><a href="http://localhost/vcc/submit.php?qcode=sub" style="background-color: rgb(255, 255, 255);"></a>
		<div id="sampleInput">
			<h4>Sample Input:</h4>
			<div id="input">
			<ul style="list-style-type: none;">
				<li>4</li>
				<li>32</li>
				<li>45</li>
				<li>94</li>
				<li>33</li>
			</ul>
			</div>
		</div>
		<br>
		<div id="sampleOutput">
			<h4>Output:</h4>
			<div id="output">
			<ul style="list-style-type: none;">
				<li>32</li>
				<li>45</li>
				<li>94</li>
				<li>33</li>
			</ul><div><br></div>

			</div>
		</div>
	</div>


        <p><b>Sample C Program for NO Copy</b> </p>
<pre>
#include<stdio.h>

int main() {
  
  int t,a;
  scanf("%d",&amp;t);
  while(t--) {
  scanf("%d",&amp;a);
  printf("%d\n",a);
  }

}
</pre>

        <p><b>Sample CPP Program for No Copy</b> </p>
<pre>
#include<stdio.h>
#include<iostream>
using namespace std;
int main() {
  
  int t,a;
  cin&gt;&gt;t;
  while(t--) {
  cin&gt;&gt;a;
  cout&lt;&lt;a&lt;&lt;endl;
  }

}
</pre>

           
          </div>
  		</div>
	</div>
</body>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bjm.js"></script>
</html>
