<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript">
      var datefield=document.createElement("input")
      datefield.setAttribute("type", "date")
      if (datefield.type!="date"){ //if browser doesn't support input type="date", load files for jQuery UI Date Picker
         document.write('<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />\n')
        document.write('<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"><\/script>\n')
        document.write('<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"><\/script>\n')
      }
   </script>

 <script>
    if (datefield.type!="date"){ //if browser doesn't support input type="date", initialize date picker widget:
       jQuery(function($){ //on document.ready
           $('.datepicker').datepicker( { dateFormat:'yy-mm-dd'});
       })
    }
	
	
 </script>

 <script src="javascript.js"></script>

	<style>.error {color: #FF0000;}
	span {color:#1aff1a;}</style>
  
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
	  #username{color:white;}
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px;}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
	  
	  
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    
	}
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height:auto;
        padding: 15px;
		position:absolute;}
      .row.content {height:auto;}
	  
	  
	  
    }
  </style>
   <script>
  $(document).ready(function () {
    var height1 = $('.content').height()
    var height2 = $('body').height()

    if (height1 > height2) {
        $('.sidenav').height(height1)
    } else {
        $('.sidenav').height(height2)
    }
});</script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
   
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="web.php">Home</a></li>
        <li><a href="check.php">Profile</a></li>
        <li><a href="listingprofiles.php">View Listing</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><div id ="username" onload="us()">

<?php

if ( $_SESSION["user"] =="")
{echo"<a href='login.html'><span class='glyphicon glyphicon-log-in'></span> Login</a>" ;
header('Refresh:0; url=login.html');
	$msg=" Please Login to continue";
echo"<script>alert('$msg');</script>";}

else
 { echo"<b><i>welcome &nbsp ". $_SESSION["user"] . "</i></b><br>";
 echo "<b><i><a href='logout.php'>Logout</a> </i></b>";}
?>
</div></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">
  <div class="row ">
    <div class="col-sm-2 sidenav">
      
    </div>
    <div class="col-sm-8 text-left content ">
      
    <h2 style ="text-align:center">Profile PHPS batch 1990</h2>
            <form class="form-horizontal " role="form" method="post"  action="prof.php"   enctype="multipart/form-data" id="myForm">
    
	<div class="form-group">
	    <label for="name" class="control-label col-sm-5">Name:<span class="error">*</span></label>
		<div class="col-sm-3">
		
		<input type="text" class="form-control" name="name"  onblur="validate('name', this.value)" placeholder="Enter your name" required><br>
	</div>
	<div class="col-sm-2"><label><div class ="control-label" id="name"></div></label> </div>

	</div>
		
	<div class="form-group">
		<label for="date"class="control-label col-sm-5">Date of Birth:<span class="error">*</span></label>
		<div class="col-sm-3">
		
		<input type="date" class="form-control datepicker" name="dob" onblur="validate('dob', this.value)" placeholder="dd/mm/yyyy" required><br>
		</div>
<div class="col-sm-2"><label><div class ="control-label"id="dob"></div></label> </div>
	</div>
	
	<div class="form-group">
		<label for="date" class="control-label col-sm-5">Date of marriage:</label>
		<div class="col-sm-3">
		<input type="date" class="form-control datepicker" name="dom" onblur="validate('dom', this.value)" placeholder="dd/mm/yyyy"><br>
		</div>
		<div class="col-sm-2"><label><div class ="control-label"id="dom"></div></label> </div>

	</div>
		
		<div class="form-group">
		<label for="name" class="control-label col-sm-5">Wife's Name:</label>
		<div class="col-sm-3">
		<input type="text" class="form-control" name="wn" onblur="validate('wn', this.value)" ><br>
		</div>
		<div class="col-sm-2"><label><div class ="control-label"id="wn"></div></label> </div>

	</div>
		
		<div class="form-group">
		<label for="name" class="control-label col-sm-5">Children's Name:</label>
		<div class="col-sm-3">
		<input type="text" class="form-control" name="kname" onblur="validate('kname', this.value)"><br>
		</div>
		<div class="col-sm-2"><label><div class ="control-label"id="kname"></div></label> </div>

	</div>
		
		<div class="form-group">
		<label for="date" class="control-label col-sm-5">Children's date of Birth:</label>
		<div class="col-sm-3">
		<input type="date" class="form-control datepicker" name="kdob" placeholder="dd/mm/yyyy" onblur="validate('kdob', this.value)"><br>
		</div>
		<div class="col-sm-2"><label><div class ="control-label"id="kdob"></div></label> </div>

	</div>
		
		
		<div class="form-group">
		<label for="name" class="control-label col-sm-5">Father's Name:</label>
		<div class="col-sm-3">
		<input type="text" class="form-control" name="fname" onblur="validate('fname', this.value)"><br>
		</div>
		<div class="col-sm-2"><label><div class ="control-label"id="fname"></div></label> </div>
	</div>
		
		<div class="form-group">
		<label for="name" class="control-label col-sm-5">Mother's Name:</label>
		<div class="col-sm-3">
		<input type="text" class="form-control" name="mname" onblur="validate('mname', this.value)"><br>
		</div>
		<div class="col-sm-2"><label><div class ="control-label"id="mname"></div></label> </div>
	</div>
		
		<div class="form-group">
		<label for="locationname"class="control-label col-sm-5">Location of the parents:</label>
		<div class="col-sm-2">
		<input type="text" class="form-control" name="lname" onblur="validate('lname', this.value)"><br>
		</div>
		<div class="col-sm-2"><label><div class ="control-label"id="lname"></div></label> </div>
	</div>
<hr>
		<div class="form-group">
		<label for="job"class="control-label col-sm-5">Nature of job:</label><br>
		<div class="col-sm-2">
		<div class="radio">
		<label><input type="radio"  name="job" value= "employed"checked>Employed<br></label>
		</div>
		<div class="radio">
		<label><input type="radio" name="job" value="self">Self<br></label>
		</div>
			</div>
	</div>
		
		<div class="form-group">
		<label for="name" class="control-label col-sm-5">Name of the organisation:</label>
		<div class="col-sm-3">
		<input type="text" class="form-control" name="oname" onblur="validate('oname', this.value)"><br>
		</div>
		<div class="col-sm-2"><label><div class ="control-label"id="oname"></div></label> </div>
	</div>
		
		<div class="form-group">
		<label for="name"class="control-label col-sm-5">Area of work:</label>
		<div class="col-sm-3">
		<input type="text" class="form-control" name="wname" onblur="validate('wname', this.value)"><br>
		</div>
		<div class="col-sm-2"><label><div class ="control-label"id="wname"></div></label> </div>
	</div>
		
		<div class="form-group">
		<label for="name"class="control-label col-sm-5">Area of specialisation:</label>
		<div class="col-sm-3">
		<input type="text" class="form-control" name="sname" onblur="validate('sname', this.value)"><br>
		</div>
		<div class="col-sm-2"><label><div class ="control-label"id="sname"></div></label> </div>
	</div>
		
		<div class="form-group">
		<label for="job" class="control-label col-sm-5">Area of interest:</label><br>
		<div class="col-sm-5">
		<div class="checkbox">
		<label><input type="checkbox"  name="interest" value="sports" checked>Sports</label> 
		</div>
			<div class="checkbox">
		<label><input type="checkbox" name="interest" value="music">Music</label>
			</div>
			<div class="checkbox">
		<label><input type="checkbox" name="interest" value="charity">Charity</label>
			</div>
				<div class="checkbox">
		<label><input type="checkbox"  name="interest" value="religious">Religious<br></label>
			</div>
		</div>
	</div>
		
		<div class="form-group">
		<label for="name" class="control-label col-sm-5">Location of the work:</label>
		<div class="col-sm-3">
		<input type="text" class="form-control" name="wl" onblur="validate('wl', this.value)"><br>
		</div>
		<div class="col-sm-2"><label><div class ="control-label"id="wl"></div></label> </div>
	</div>

		<div class="form-group">
		<label for="business" class="control-label col-sm-5">Aspiration to do business on own:</label><br>
		<div class="col-sm-3">
		<div class="radio">
      <label><input type="radio"  name="business" value="yes" checked>Yes</label>
    </div>
    <div class="radio">
      <label><input type="radio"   name="business" value="No">No</label>
    </div>

	</div>
	
	</div>
		
		<div class="form-group">
		<label for="role" class="control-label col-sm-5">If yes, what sort of role wanted to play:</label><br>
		<div class="col-sm-5"><div class="radio">
      <label><input type="radio" name="role" value="Investor">Investor</label>
    </div>
    <div class="radio">
      <label><input type="radio" name="role" value="Managing the business">Managing the business</label>
    </div>
    <div class="radio ">
      <label><input type="radio" name="role" value="providing of business reference">providing of business reference</label>
    </div>
		</div>
	</div>
		
		<hr>
		<div class="form-group">
		<label for="contact" class="control-label col-sm-5" >Contact information</label><br>
		</div>
	
		
		
		<div class="form-group">
		<label for="contact" class="control-label col-sm-5">Phone number:	<span class="error">*</span></label>
		<div class="col-sm-3">
	
		<input type="tel" class="form-control" name="phno" placeholder="Enter phone number"  pattern="[0-9]{10}"onblur="validate('phno', this.value)"><br>
		</div>
		<div class="col-sm-2"><label><div class ="control-label"id="phno"></div></label> </div>
	</div>
		
		
		<div class="form-group">
		<label for="contact" class="control-label col-sm-5">Altenative phone number:</label>
		<div class="col-sm-3">
		<input type="tel" class="form-control" name="altphno" onblur="validate('altphno', this.value)"><br>
		</div>
				<div class="col-sm-2"><label><div class ="control-label"id="altphno" ></div></label> </div>
			</div>
		
		
		<div class="form-group">
		<label for="email" class="control-label col-sm-5">Email:<span class="error">*</span></label>
		<div class="col-sm-3">
		
		<input type="email" class="form-control" name="email" placeholder="Enter email" required onblur="validate('email', this.value)"><br>
		</div>
				<div class="col-sm-2"><label><div class ="control-label"id="email"></div></label> </div>
			</div>
		
		
		<div class="form-group">
		<label for="fbid" class="control-label col-sm-5">Facebook Id:</label>
		<div class="col-sm-3">
		<input type="text" class="form-control" name="fbid" onblur="validate('fbid', this.value)"><br>
		</div>
				<div class="col-sm-2"><label><div class ="control-label"id="fbid" ></div></label> </div>
				</div>
		
		
		<div class="form-group">
		<label for="skypeid" class="control-label col-sm-5">Skype Id:</label>
		<div class="col-sm-3">
		<input type="text" class="form-control" name="skypeid" onblur="validate('skypeid', this.value)"><br>
		</div>
				<div class="col-sm-2"><label><div class ="control-label"id="skypeid"></div></label> </div>
	</div>
		
		
		<div class="form-group">
		<label for="photo" class="control-label col-sm-5">Option to upload photo:</label><br>
		</div>
	
		
		<div class="form-group">
		<label for="img" class="control-label col-sm-5">Individual photo:<span class="error">*</span></label>
		
		<div class="col-sm-3">
		<input type="file" accept="image/*" name="img" required  onblur="validate('img', this.value)"><br>
		</div>
		<div class="col-sm-2"><label><div class ="control-label"id="img"></div></label> </div>
	</div>
		
		
		<div class="form-group">
		<label for="img" class="control-label col-sm-5">Family photo:</label>
		<div class="col-sm-3">
		<input type="file" name="fimg" accept="image/*" onblur="validate('fimg', this.value)"><br>
		</div>
				<div class="col-sm-2"><label><div class ="control-label"id="fimg"></div></label> </div>
			</div>
		
		<div class="form-group">
		
		<div class=" control-label col-sm-5">
		<input type="button" onclick="checkForm()" value="Submit" >
		</div>
	</div>
		</form>
    </div> 
   
  </div>
</div>

<footer class="container-fluid text-center">
  <p>An itsbs developed website</p>
</footer>

</body>
</html>
