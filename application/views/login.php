<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Internship @ HP </title>
	<meta name="description" content="Login page">
	<meta http-equiv="content-type" content="text/html;charset=UTF-8">
	<?php include('templates/sources.php') ?>
</head>

<body>


 <div style="font-family:'HPFont';" id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
		<li data-target="#myCarousel" data-slide-to="3"></li>
		<li data-target="#myCarousel" data-slide-to="4"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          
          <div class="container">
            <div class="carousel-caption">
			 <center><img class="img-responsive" src="<?php echo base_url('images/ID.png');?>" alt="Hi, Intern"/></center>
              <br/><br/>
            </div>
          </div>
        </div>
		<div class="item">
          <div class="container">
            <div class="carousel-caption">
              <h1>Centralized Master List</h1><br/><br/><br/>
			  <p>We automatically collect all tickets in your SM queue and tracks it wherever it goes until closed.</p>
              <br/><br/><br/>
            </div>
          </div>
        </div>
		<div class="item">
          <div class="container">
            <div class="carousel-caption">
              <h1>Real-time. Synchronized.</h1><br/><br/><br/><br/><br/>
			  <p>We synchronize all your tickets with Service Manager on the most optimal intervals as possible.</p>
              
            </div>
          </div>
        </div>
        <div class="item">
          <div class="container">
            <div class="carousel-caption">
              <h1>Community</h1><br/><br/>
              <p>User count</p>
			  <br/><br/><br/>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="container">
            <div class="carousel-caption">
              <h1>Voulez-vous rejoindre ?</h1><br/><br/>
              <p>Simply send the requirements to adrian-lester.tan@hp.com.
			  <br/><br/>
			  <div align=left>
			  <font size=3px>Requirements:<br/>
			  <ul>
			  <li>Team Name and members (Employee ID only)</li>
			  <li>Team Members(Employee ID only) and IM SPOCS/Shift Leads</li>
			  <li>Team's SM Queue(s)</li>
			  <li>Perks (not required): Application-Service-CI mapping for Application-level reporting.</li>
			  </font>
			  </ul>
			  </div>
			  <br/>
			  </p>
				
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->

<!--login-->

<div class="row">
	<div class="col-md-4 col-md-offset-4">
			<div class="panel panel-default">
				<ul class ="nav nav-tabs justified">
						<li class="active"><a href="#">SIGN UP</a></li>
						<li><a href="#">LOGIN</a></li>
				</ul>
			</div>	
	</div>
</div>	
	



<?php include('templates/footer.php')?>	

</body>
</html>