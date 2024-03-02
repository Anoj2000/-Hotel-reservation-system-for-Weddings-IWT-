<?php
include 'connect.php';
if (isset($_POST['submit'])) {
  $First_Name = $_POST['First_Name'];
  $Last_Name = $_POST['Last_Name'];
  $User_Name = $_POST['User_Name'];
  $Email = $_POST['Email'];
  $Password = $_POST['Password'];
  $Confirm_Password = $_POST['Confirm_Password'];
  $Date = $_POST['Date'];
  $Gender = $_POST['Gender'];
  $Number_of_Guest = $_POST['Number_of_Guest'];
  $Contact_Number = $_POST['Contact_Number'];

  $sql = "INSERT INTO registration (First_Name, Last_Name, User_Name, Email, Password, Confirm_Password, Date, Gender, Number_of_Guest, Contact_Number)
  VALUES ('$First_Name', '$Last_Name', '$User_Name', '$Email', '$Password', '$Confirm_Password', '$Date', '$Gender', '$Number_of_Guest', '$Contact_Number')";
  $result = mysqli_query($con, $sql);
  if ($result) {
    //echo "Data inserted successfully";
    header('location:display.php');
    exit;
  } else {
    die(mysqli_error($con));
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Beverly Hills Hotel</title>
  <link rel="stylesheet" href="index.css" />
  <link rel="stylesheet" href="style.css" />
  <script src="script.js"></script>
</head>
<body>
  <header>
    <ul>
      <li>
        <img src="/WhatsApp Image 2023-06-11 at 17.04.57.jpg" alt="logo" />
      </li>
      <li><a href="#">Home</a></li>
      <li><a href="#">About Us</a></li>
      <li><a href="#">Contact Us</a></li>
      <li id="log in"><a href="#">Log in</a></li>
      <li id="sign up"><a href="#">Sign Up</a></li>
      <li id="profile"><a href="#">User Profile</a></li>
    </ul>
  </header>
  <div class="container">
    <div class="jumbotron">
      <div class="row">
        <div class="col-mid">
          <h1>Plan your wedding</h1>
          <h2><strong>Registration</strong></h2>
        </div>
        <form id="registration-form" action="" method="POST">
          <div class="input-box">
            <label for="first-name"><b>First Name</b></label>
            <input
              type="text"
              placeholder="Enter First Name"
              name="First_Name"
              id="first-name"
              required
            /><br /><br />

            <label for="last-name"><b>Last Name</b></label>
            <input
              type="text"
              placeholder="Enter Last Name"
              name="Last_Name"
              id="last-name"
              required
            /><br /><br />

            <label for="username"><b>Username</b></label>
            <input
              type="text"
              placeholder="Enter Username"
              name="User_Name"
              id="username"
              required
            /><br /><br />

            <label for="email"><b>Email</b></label>
            <input
              type="email"
              placeholder="Enter Email"
              name="Email"
              id="email"
              required
            /><br /><br />

            <label for="password"><b>Password</b></label>
            <input
              type="password"
              placeholder="Enter Password"
              name="Password"
              id="password"
              required
            /><br /><br />

            <label for="confirm-password"><b>Confirm Password</b></label>
            <input
              type="password"
              placeholder="Confirm Password"
              name="Confirm_Password"
              id="confirm-password"
              required
            /><br /><br />
            <h3>When is the Big Day?</h3>

            <label for="check-in"><b>Check-in</b></label>
            <input
              type="date"
              id="check-in"
              name="Date"
              required
            /><br /><br />

            <label for="gender"><b>Gender</b></label
            ><br />
            <input type="radio" name="Gender" value="m" checked />
            Male<br />
            <input type="radio" name="Gender" value="f" /> Female<br />
            <input type="radio" name="Gender" value="o" />
            Other<br /><br />

            <label for="guest-count"><b>Expected Number of Guests</b></label>
            <input
              type="number"
              placeholder="Enter number of guests"
              name="Number_of_Guest"
              id="guest-count"
              required
            /><br /><br />

            <label for="contact-number"><b>Contact Number</b></label>
            <input
              type="tel"
              placeholder="+94XX-XX-XX-XXX"
              name="Contact_Number"
              id="contact-number"
              required
            /><br /><br />

            <input type="submit" value="Submit" name="submit" />
            <input type="reset" value="Reset" />
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
