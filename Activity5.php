
<?php

?>

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
      <span>
        <label for="Name">Name:</label>
        <input type="text" name="Name" /><br />
      </span>
      <span>
        <label for="Username">Username:</label>
        <input type="text" name="Username" /><br />
      </span>
      <span>
        <label for="Password">Password:</label>
        <input type="text" name="Password" /><br />
      </span>
      <span>
        <label for="Address">Address:</label>
        <input type="text" name="Address" /><br />
      </span>
      <span>
        <label for="Country">Country:</label>
        <select id="Country" name="Country">
          <option  hidden>Select Country</option>
          <option value="USA">America</option>
          <option value="TR">Turkey</option>
          <option value="FR">France</option>
          <option value="GB">England</option>
        </select>
        <br />
      </span>
      <span>
        <label for="Zip Code">Zip Code:</label>
        <input type="number" name="Zip Code" /><br />
      </span>
      <span>
        <label for="EMail">EMail:</label>
        <input type="email" name="EMail" /><br />
      </span>
      <span id="Sex">
        <label for="Sex">Sex:</label>
        <input type="radio" id="male" name="Sex" value="male" />
        <label for="male">Male</label>
        <input type="radio" id="female" name="Sex" value="female" />
        <label for="female">Female</label> <br />
      </span>
      <span id="Language">
        <label class="title">Language:</label>
        <label for="English"> English </label>
        <input type="checkbox" name="Language[]" value="English" id="English" />
        <label for="French"> French </label>
        <input type="checkbox" name="Language[]" value="French" id="French" />
        <label for="Germany"> Germany </label>
        <input type="checkbox" name="Language[]" value="Germany" id="Germany" />
        <br />
      </span>
      <span>
        <label for="About">About:</label>
        <textarea name="About" cols="30" rows="4"></textarea> <br />
      </span>
      <span>
        <input type="submit" value="Submit" name="Submit" />
      </span>
    </form>
  </body>
</html>
