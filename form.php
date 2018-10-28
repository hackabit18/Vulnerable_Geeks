<?php
require 'test.php';


?>

<!--index.html-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Registration Form</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
<!--    <link href="styling.css" rel="stylesheet">-->
    <link rel="stylesheet" href="form.css">
    <link href='https://fonts.googleapis.com/css?family=Vollkorn' rel='stylesheet' type='text/css'>

    <link href="https://fonts.googleapis.com/css?family=Catamaran" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">




              <!--	Validating form with the help of JavaScript-->
  <script>
        function validateForm()
        {
            var name = document.forms["RegForm"]["Name"];
            var add = document.forms["RegForm"]["Address"];
             var email = document.forms["RegForm"]["EMail"];
            var we = document.forms["RegForm"]["WorkingExperiance"];
            var mob = document.forms["RegForm"]["MobileNO"];
            var password = document.forms["RegForm"]["Password"];
            var promise = document.forms["RegForm"]["Promise"];
            
            var promises = document.forms["RegForm"]["comments"];
            var file = document.forms["RegForm"]["File"];
            var checked = document.forms["RegForm"]["Checks"];
            


            if (name.value == "")
            {
                window.alert("Please enter your name.");
                name.focus();
                return false;
            }



            if (add.value == "")
            {
                window.alert("Please enter your Full Address.");
                number.focus();
                return false;
            }



            if (email.value == "")
            {
                window.alert("Please enter a valid e-mail address.");
                email.focus();
                return false;
            }

            if (email.value.indexOf("@", 0) < 0)
            {
                window.alert("Please enter a valid e-mail address.");
                email.focus();
                return false;
            }

            if (email.value.indexOf(".", 0) < 0)
            {
                window.alert("Please enter a valid e-mail address.");
                email.focus();
                return false;
            }


            if (we.value == "")
            {
                window.alert("Please enter your Working Experiance.");
                branch.focus();
                return false;
            }

            if (mob.value == "")
            {
                window.alert("Please enter your mobile  number.");
                phone.focus();
                return false;
            }

             


            if (password.value == "")
            {
                window.alert("Please enter your Password");
                password.focus();
                return false;
            }

            if (promise.value == "")
            {
                window.alert("Please enter your Promises that you will provide");
                hobby.focus();
                return false;
            }
            
            if (amount.value == "")
            {
                window.alert("Please enter the Amount.");
                amount.focus();
                return false;
            }


             if (file.value == "")
            {
                window.alert("Please Upload your pic less than 40 KB");
                file.focus();
                return false;
            }

            if (checked.value == "")
            {
                window.alert("Please tick the box to Proceed");
                checked.focus();
                return false;
            }



//            if (what.selectedIndex < 1)
//            {
//                alert("Please enter your course.");
//                what.focus();
//                return false;
//            }

            return true;
          }
      </script>



  </head>
    <body background="Images/carpenter2.jpg">
<!--  <body background="Images/carpentry3.jpg" data-spy="scroll" data-target="#mynavBar">-->
     

      <!--Create the home section with title, goal and joins us button-->
    <div class="jumbotron" id="home">
          <div class="container">
              <h1>Register your self</h1>

          </div>

    </div>

    <div class="section">

       <div class="input">
           

<!--
             <div class="row" id="hdlog">

                          <div id="dev" class="col-md-4">
                              <img id="tlogo" src="images/techprologo.jpg" alt="Techpro Logo" width="100px" height="60px" align="left">

                          </div>

                          <div class="col-md-4">
                              <h1 id="head">Provider</h1>

                          </div>

                          <div class="col-md-4">
                             <img id="qlogo" src="images/qlogo.png" alt="Techpro Logo" width="100px" height="60px" align="right">

                          </div>

            </div>
-->

<!--     action="/cgi-bin/test.cgi"-->

        <form class="form-horizontal" action="form.php" method="POST" name="RegForm" onsubmit="return(validateForm());" >


           <div class="form-group">
            <label for="Name" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="Name" name="name" placeholder="Your Name">
            </div>
          </div>


           <div class="form-group">
            <label for="digit" class="col-sm-2 control-label">Address</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="digit" name="addr" placeholder="Full Address">
            </div>
          </div>

           <div class="form-group">
            <label for="EMail" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-5">
              <input type="email" class="form-control" id="email" name="email" placeholder="you@email.com">
            </div>
          </div>


          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">WorkingExperiance</label>
            <div class="col-sm-5">
            <textarea name="wep" maxlength="500" class="form-control"  placeholder="Mention your work experience that you have."></textarea>

            </div>
          </div>

          <div class="form-group">
            <label for="digit" class="col-sm-2 control-label">MobileNo.</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="digit" name="mob" placeholder="Enter contact no.">
            </div>
          </div>

          <!--<div class="form-group">
            <label for="digit" class="col-sm-2 control-label">Amount</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="digit" name="amount"  placeholder="Put Rs 50">
            </div>
          </div>-->

          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-5">
              <input type="password" class="form-control" id="inputPassword3" name="password" placeholder="Password">
            </div>
          </div>
            
            <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Confirm Password</label>
            <div class="col-sm-5">
              <input type="password" class="form-control" id="inputPassword3" name="password" placeholder="Re-Enter-Password">
            </div>
          </div>


          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Promises</label>
            <div class="col-sm-5">
            <textarea name="promise" maxlength="500" class="form-control"  placeholder="Mention your work flow that you will provide to user."></textarea>

            </div>
          </div>


          <input style="margin-left:250px" type="submit" value="Submit">

        <!--<diiv id="file">
              <div class="form-group">
                <label for="exampleInputFile">File input</label><br>
                 <div class="col-sm-">
                <input type="file" name="File" id="exampleInputFile">
                <p class="help-block" style="color:floralwhite">Upload your Pic less than 40 KB.</p>
                 </div>
              </div>-->

              <!--<div class="checkbox">
                <label>
                  <input name="Checks" type="checkbox"> Check me out
                </label>
              </div>  -->
<!--              <input style="margin-top:50px; margin-left:150px" type="submit" name="submit" value="Register">-->
            
            
                                          
            
            
<!--                                     LOCATION-->
            
            
            
            
            
<!--            <button style="margin-left:250px" onclick="getLocation()">Submit</button>-->

<p id="demo"></p>

<script>
var x = document.getElementById("demo");

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
    x.innerHTML = "Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude;
}
</script>



<!--              <a href=""  type="submit" class="btn btn-primary btn-lg active" name="Submit"  role="button">Submit</a>-->



        </form>

      </div>




     </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
      <script>
          $(function(){
                $('.carousel').carousel({
                    interval: 10000
                });
          });
      </script>
  </body>
</html>
