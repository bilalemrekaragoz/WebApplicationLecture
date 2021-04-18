<?php?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>About You</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="css/activity5.css" />
  </head>
  <body>
    <form action="Activity5-Preview.php" method="GET">
      <h1>Registration Form</h1>
        <label for="Name">Name:</label>
        <input type="text" name="Name" /><br />
        <label for="Username">Username:</label>
        <input type="text" name="Username" /><br />
        <label for="Password">Password:</label>
        <input type="password" name="Password" /><br />
        <label for="Address">Address:</label>
        <input type="text" name="Address" /><br />
        <label for="Country">Country:</label>
        <select name="Country">
          <option hidden selected value="0">Select Country</option>
          <option value="USA">America</option>
          <option value="TR">Turkey</option>
          <option value="FR">France</option>
          <option value="GB">England</option>
        </select>
        <br />
        <label for="Zip_Code">Zip Code:</label>
        <input type="number" name="Zip_Code" /><br />
        <label for="Email">EMail:</label>
        <input type="email" name="Email" /><br />
      <div id="Sex"> 
        <label for="Sex">Sex:</label>
        <input type="radio" id="male" name="Sex" value="male" />
        <label for="male">Male</label>
        <input type="radio" id="female" name="Sex" value="female" />
        <label for="female">Female</label> <br />
      </div>
      <div id="Language">
        <label class="title">Language:</label>
        <label for="English"> English </label>
        <input type="checkbox" name="Language[]" value="English" id="English" />
        <label for="French"> French </label>
        <input type="checkbox" name="Language[]" value="French" id="French" />
        <label for="Germany"> Germany </label>
        <input type="checkbox" name="Language[]" value="Germany" id="Germany" />
        <br />
      </div>
        <label for="About">About:</label>
        <textarea name="About" cols="30" rows="4"></textarea> <br />
        <input type="submit" value="Submit" name="Submit"/>
    </form>
  </body>
</html>






