



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>VCC</title>
	<link rel="stylesheet" href="/vcc/css/style.css">
	<link rel="stylesheet" href="/vcc/css/bm.css">
	<link rel="stylesheet" href="/vcc/css/btm.css">
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
        <li><a href="gs.php">Getting Started</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      	
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<!-- Nav Bar End-->

	<div class="container">
		<h1 align="center">Answers</h1>
		<h2>Fact</h2>
<pre>
#include&lt;stdio.h&gt;
#include&lt;iostream&gt;
using namespace std;
int fact(int n)
{
	int ans=1;
	while(n)
	{
		ans*=n;
		n--;
	}
	 return  ans;
}
int main()
{	
	int t;
	cin>>t;
	while(t--)
	{
		int n;
		cin>>n;
		cout&lt;&lt;fact(n)&lt;&lt;endl;
	}
	return 0;
}
</pre>

		<h2>GCD</h2>
<pre>
#include&lt;stdio.h&gt;
#include&lt;iostream&gt;
using namespace std;
int gcd(int m,int n)
{
	if(n == 0)
	 return m;
	else
	 return gcd(n,m%n);
}
int main()
{
	int t;
	cin>>t;
	int a,b;
	while(t--)
	{
		cin>>a>>b;
		cout&lt;&lt;gcd(a,b)&lt;&lt;endl;
	}
	return 0;
}
</pre>


<br><br><br>
	</div>
</body>
<script type="text/javascript" src="/vcc/js/jquery.js"></script>
<script type="text/javascript" src="/vcc/js/bjm.js"></script>
</html>
