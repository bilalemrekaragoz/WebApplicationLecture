<?php
    $information = array(
    "Name"=>"Not Provided",
    "Username"=>"Not Provided",
    "Password"=>"Not Provided",
    "Address"=>"Not Provided",
    "Country"=>"Not Provided",
    "Zip_Code"=>"Not Provided",
    "Email"=>"Not Provided",
    "About"=>"Not Provided");


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Your Informations</title>
    </head>
    <body>
        <h1>Preview</h1>
        <?php
            foreach($information as $value => $key)
            {
                if($_GET[$value] != null && $_GET[$value] != 0)
                {
                    $key = $_GET[$value];
                    if ($value == "Language")
                    {
                        for($i = 0; $i < sizeof($key); $i++)
                        {
                            echo "$key[$i] <br/>";
                        }
                    }
                    else
                    {
                        echo "$key <br/>";
                    }
                }
                else
                {
                    echo "$value: $key <br/>";
                }
                            
            }
        ?>
    </body>
</html>
  
