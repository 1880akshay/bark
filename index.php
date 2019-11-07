<?php
      require 'dbconfig/config.php';
      session_start();
?>
<!DOCTYPE html>
<html lang="en">
      <head>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <link rel="stylesheet" href="css/style.css">
            <title>Bark</title>
            <!-- 
            <script type="text/javascript">
                  function phone() {
                        var phone_num= getElementById("phone_num").value;
                        var length_num= phone_num.length;
                        if (length_num!=10) {
                              alert("Invalid phone number")
                        }
                  }
            </script> -->
            <style>
            body{
                  background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url(image.jpg);
            }
            </style>
      </head>
      <body>
            <!-- Header Part -->
            
            <header>
                  <div class="container">
                        <div class="row">
                              <div class="col-12">
                                    <div class="modal fade" tabindex="-1" id="loginModal" data-keyboard="false" data-backdrop="static">
                                          <div class="modal-dialog modal-sm">
                                                <div class="modal-content">
                                                      <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                      </div>
                                                      <div class="modal-body">
                                                            <form method="post">
                                                                  <div class="form-group">
                                                                        <label for="inputUserName"><b>Phone Number</b></label>
                                                                        <input class="form-control" placeholder="Enter the phone number" name="phone" type="number" id="inputUserName" required/>
                                                                  </div>
                                                                  <div class="form-group">
                                                                        <label for="inputPassword"><b>Password</b></label>
                                                                        <input class="form-control" placeholder="Login Password" name="password" type="password" id="inputPassword" required/>
                                                                  </div>
                                                                  <div class="modal-footer">
                                                                        <input type="submit" name="submit_btn" class="btn btn-primary" value="Login">
                                                                  </div>
                                                            </form>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
      
                  <div class="p-1" id="topHeader">
                        <div class="container">
                              <div class="row">
                                    <div class="col-12 text-right">
                                          <a class="p-1" href="tel:9123362220"><i class="fa fa-phone" aria-hidden="true"></i><b>&nbsp9123362220</b></a>
                                          <a class="p-1" href="mailto:helpdesk@bark.net.in"><b><i class="fa fa-envelope" aria-hidden="true"></i>&nbsphelpdesk@bark.net.in</b></a>
                                    </div>
                              </div>
                        </div>
                  </div>

                  <div id="bottomHeader" class="p-2">
                        <div class="container-fluid">
                              <div id="login-box" class="row">
                                    <div class="col-12 pl-md-5 pl-4 text-left">
                                          <h1 class="main-title pt-1">Bark
                                                <p class="sign-in pt-2">
                                                      <button title="Click to sign-in" type="submit" class="btn btn-primary" data-target="#loginModal" data-toggle="modal"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp Sign In</button>
                                                </p>
                                          </h1>
                                    </div>
                              </div>
                        </div>
                  </div>
            </header>
            
            <!-- End of Header Part -->
            
            <!-- Main Content -->
            
            <div class="container main-content">
                  <div class="row">
                        <div class="col-md-7 pt-md-5 about pl-md-5 pr-md-5 pl-4 pr-4">
                              <center><h5>Bark helps you to connect and share with the people having like passion.</h5></center>
                              <img class="img-fluid pt-1" src="imgs/connect.png" alt="">
                              <h1 class="pb-1 pt-3">About Us</h1>
                              <br>
                              <p class="pb-4">
                                    Bark provides its users a platform which allows them to unfurl their ideas by connecting them with the people sharing common goals. One of the powerful reasons to connect people having like interests
                                    is that their ideas may collide and create a new and potentially greater idea.
                              </p>
                        </div>
                        <div class="col-md-5 heading">
                              <h1>Create an account</h1>
                              <form class="form pl-md-4 pr-md-4 pl-4 pr-4" method="post">     
                                    <small><font color="white"><center><b>It's free and always will be</b></center></font></small><br>
                                    <div class="form-group textbox">
                                          <label for="fname">First Name:<font color="red">*</font></label><br>
                                          <i class="fa fa-2x fa-user" aria-hidden="true"></i>
                                          <input title="First Name" type="text" id="fname" name="fname" class="pt-2 pb-1" placeholder="Enter your first name" required>
                                    </div>
                                    <div class="form-group textbox">
                                          <label for="lname">Last Name:<font color="red">*</font></label><br>
                                          <i class="fa fa-2x fa-user" aria-hidden="true"></i>
                                          <input title="Last Name" type="text" id="lname" name="lname" class="pt-2 pb-1" placeholder="Enter your last name" required>
                                    </div>
                                    <label for="exampleInputEmail1">Gender:<font color="red">*</font></label>
                                    <br>
                                    <div class="form-check form-check-inline">
                                          <input title="Male" type="radio" class="form-check-input" name="gender" id="inlineRadio1" value="Male" checked>
                                          <label for="inlineRadio1" class="form-check-label">Male</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                          <input title="Female" type="radio" class="form-check-input" name="gender" id="inlineRadio1" value="Female">
                                          <label for="inlineRadio1" class="form-check-label">Female</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                          <input title="Transgender" type="radio" class="form-check-input" name="gender" id="inlineRadio1" value="Transgender">
                                          <label for="inlineRadio1" class="form-check-label">Other</label>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="form-group textbox">
                                          <label for="exampleInputPassword1">Phone:<font color="red">*</font></label><br>
                                          <i class="fa fa-2x fa-phone" aria-hidden="true"></i>
                                          <input type="number" title="Phone Number" name="phone" class="pt-2 pb-1" placeholder="Enter your Phone Number" id="phone_num"  required>
                                    </div>
                                    <div class="form-group form-check form-check-inline">
                                          <label for="inputState">Birthday:<font color="red">*</font></label>&nbsp&nbsp<br><br>
                                          <select name="date" id="inputState" class="form-control dob" required>
                                                <option value="01" selected>01</option>
                                                <option value="02">02</option>
                                                <option value="03">03</option>
                                                <option value="04">04</option>
                                                <option value="05">05</option>
                                                <option value="06">06</option>
                                                <option value="07">07</option>
                                                <option value="08">08</option>
                                                <option value="09">09</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                                <option value="25">25</option>
                                                <option value="26">26</option>
                                                <option value="27">27</option>
                                                <option value="28">28</option>
                                                <option value="29">29</option>
                                                <option value="30">30</option>
                                                <option value="31">31</option>
                                          </select>
                                          &nbsp&nbsp
                                          <select name="month" id="inputState" class="form-control dob" required>
                                                <option value="01" selected>January</option>
                                                <option value="02">February</option>
                                                <option value="03">March</option>
                                                <option value="04">April</option>
                                                <option value="05">May</option>
                                                <option value="06">June</option>
                                                <option value="07">July</option>
                                                <option value="08">August</option>
                                                <option value="09">September</option>
                                                <option value="10">October</option>
                                                <option value="11">November</option>
                                                <option value="12">December</option>
                                          </select>
                                          &nbsp&nbsp
                                          <select name="year" id="inputState" class="form-control dob" required>
                                                <option value="2006" selected>2006</option>
                                                <option value="2005">2005</option>
                                                <option value="2004">2004</option>
                                                <option value="2003">2003</option>
                                                <option value="2002">2002</option>
                                                <option value="2001">2001</option>
                                                <option value="2000">2000</option>
                                                <option value="1999">1999</option>
                                                <option value="1998">1998</option>
                                                <option value="1997">1997</option>
                                                <option value="1996">1996</option>
                                                <option value="1995">1995</option>
                                                <option value="1994">1994</option>
                                                <option value="1993">1993</option>
                                                <option value="1992">1992</option>
                                                <option value="1991">1991</option>
                                                <option value="1990">1990</option>

                                                <option value="1989">1989</option>
                                                <option value="1988">1988</option>
                                                <option value="1987">1987</option>
                                                <option value="1986">1986</option>
                                                <option value="1985">1985</option>
                                                <option value="1984">1984</option>
                                                <option value="1983">1983</option>
                                                <option value="1982">1982</option>
                                                <option value="1981">1981</option>
                                                <option value="1980">1980</option>

                                                <option value="1979">1979</option>
                                                <option value="1978">1978</option>
                                                <option value="1977">1977</option>
                                                <option value="1976">1976</option>
                                                <option value="1975">1975</option>
                                                <option value="1974">1974</option>
                                                <option value="1973">1973</option>
                                                <option value="1972">1972</option>
                                                <option value="1971">1971</option>
                                                <option value="1970">1970</option>

                                                <option value="1969">1969</option>
                                                <option value="2068">1968</option>
                                                <option value="1967">1967</option>
                                                <option value="1966">1966</option>
                                                <option value="1965">1965</option>
                                                <option value="1964">1964</option>
                                                <option value="1963">1963</option>
                                                <option value="1962">1962</option>
                                                <option value="1961">1961</option>
                                                <option value="1960">1960</option>

                                                <option value="1959">1959</option>
                                                <option value="2058">1958</option>
                                                <option value="1957">1957</option>
                                                <option value="1956">1956</option>
                                                <option value="1955">1955</option>
                                                <option value="1954">1954</option>
                                                <option value="1953">1953</option>
                                                <option value="1952">1952</option>
                                                <option value="1951">1951</option>
                                                <option value="1950">1950</option>
                                          </select>
                                    </div>
                                    <br>
                                    <div class="form-group textbox">
                                          <label for="exampleInputEmail1">Email address:</label><br>
                                          <i class="fa fa-2x fa-envelope" aria-hidden="true"></i>
                                          <input title="Email Address" type="email" name="email" class="pt-2 pb-1" placeholder="Enter your email">
                                    </div>
                                    <div class="form-group textbox">
                                          <label for="exampleInputPassword1">Password:<font color="red">*</font></label><br>
                                          <i class="fa fa-2x fa-lock" aria-hidden="true"></i>
                                          <input type="password" title="Password" name="password" class="pt-2 pb-1" placeholder="Enter your Password" required>
                                    </div>
                                    <div class="form-group textbox">
                                          <label for="exampleInputPassword1">Confirm Password:<font color="red">*</font></label><br>
                                          <i class="fa fa-2x fa-lock" aria-hidden="true"></i>
                                          <input type="password" title="Re-enter your Password for confirmation" name="cpassword" class="pt-2 pb-1" placeholder="Re-enter your Password" required>
                                    </div>
                                    <br>
                                    <center>
                                          <button title="Click to submit the entered information" type="submit" name="signup_btn" class="btn btn-success"  onclick="phone()"><i class="fa fa-upload" aria-hidden="true"></i>&nbsp Create my account</button>
                                    </center>
                                    <br><br><br><br><br>
                              </form>
                        </div>
                  </div>
            </div>
            
            <!-- End of Main Content -->
            
            <!-- Footer Section -->
                  
            <footer>
                  <div class="container-fluid">
                        <div class="row">
                              <div class="col-12 text-center">
                                    <p class="footer_content pb-1">&copy; All Rights Reserved.<br>Designed by the Tech Department.</p>
                              </div>
                        </div>
                  </div>
            </footer>
            
            <!-- End of Footer Section -->
            
            <!-- PHP Content -->

            <?php
                  if(isset($_POST['signup_btn']))
                  {
                        $fname = $_POST['fname'];
                        $lname = $_POST['lname'];
                        $gender = $_POST['gender'];
                        $phone = $_POST['phone'];
                        $date = $_POST['date'];
                        $month = $_POST['month'];
                        $year = $_POST['year'];
                        $email = $_POST['email'];
                        $password = $_POST['password'];
                        $cpassword = $_POST['cpassword'];

                        $new_date = (string)$date;
                        $new_month = (string)$month;
                        $new_year = (string)$year;
                        
                        $dateofbirth = $new_date.'/'.$new_month.'/'.$new_year;

                        $len = strlen($phone);
                  
                        if($len!=10 || $phone<=0){
                            echo '<script type="text/javascript">alert("Invalid Phone Number")</script>';
                        }
                        
                        $query = "select * from credentials WHERE phone='$phone'";
                        $query2 = "select * from user_info WHERE email='$email'";
                        $query_run = mysqli_query($con,$query);
                        $query_run2 = mysqli_query($con,$query2);

                        if(mysqli_num_rows($query_run)>0)
                        {
                              echo '<script type="text/javascript">alert("The phone number already exists!")</script>';
                        }
                        elseif (mysqli_num_rows($query_run2)>0) {
                              echo '<script type="text/javascript">alert("The email already exists!")</script>';
                        }
                        else{
                              if($password==$cpassword)
                              {
                                    $query = "insert into user_info values('$fname','$lname','$gender','$phone','$dateofbirth','$email')";
                                    $query1 = "insert into credentials values('$phone','$password')";
                                    $query_run = mysqli_query($con,$query);
                                    $query_run1 = mysqli_query($con,$query1);

                                    if($query_run && $query_run1){
                                          echo '<script type="text/javascript">alert("Account created successfully !")</script>';
                                    }
                              }
                              else{
                                    echo '<script type="text/javascript">alert("Password and Confirm Password does not match !")</script>';
                              }
                        }
                  }
                  if(isset($_POST['submit_btn']))
                  {
                        $phone = $_POST['phone'];
                        $password = $_POST['password'];

                        $query = "select * from credentials WHERE phone='$phone' AND password='$password'";
                        $query_run = mysqli_query($con,$query);

                        if(mysqli_num_rows($query_run)>0){
                              #$row = mysqli_fetch_assoc($query_run3);
                              #$firstname = $row['firstname'];
                              #$full_name = $firstname.' '.$lastname;
                              $_SESSION['full_name'] = $full_name;
                              header('location:homepage.php');
                        }
                        else{
                              echo '<script type="text/javascript">alert("Invalid credentials !")</script>';
                        }
                  }
            ?>

            <script src="js/jquery-3.3.1.slim.min.js"></script>
            <script src="js/popper.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
      </body>
</html>