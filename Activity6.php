<?php
    $output_value = null;
    $input_value = null;
    $output_currency = null;
    $input_currency = null;
    if(isset($_POST["convert"]))
    {
        $input_value = $_POST["input_value"];
        $input_currency = $_POST["input_currency"];
        $output_currency = $_POST["output_currency"];
        $currencies = array("USD"=>1, "EUR"=>1.20, "CAD"=>0.8);


        foreach($currencies as $key => $value)
        {
            if($key == $input_currency)
            {
                $input = $value;
            }

            if($key == $output_currency)
            {
                $output = $value;
            }
        }
        $output_value = $input_value * ($input/$output);
    }
?>


<!DOCTYPE html>
<html lang="en">
    <head>
	    <title>Activity 6</title>
        <link rel="stylesheet" href="css/activity6.css" type="text/css">
    </head>
    <body>
        <h1>Currency Converter</h1>  
        <form action="" method="POST">
            <div class="input-area">
                <span class="value">
                    <label for="input_value" class="label">From:</label>
                    <input type="number" name="input_value" id="input_value" required value="<?php echo $input_value;?>">
                </span>
                <span class="currency">
                    <label for="input_currency" class="label">Currency:</label>
                    <select name="input_currency" id="input_currency" required>
                        <option value>Select a Currency</option>
                        <?php
                        echo
                        '<option value="USD"'; if($input_currency=="USD") echo "selected"; echo '>US Dollar</option>
                        <option value="CAD" '; if($input_currency=="CAD") echo "selected";  echo '>Canadian Dollar</option>
                        <option value="EUR" '; if($input_currency=="EUR") echo "selected";  echo '>Euro</option>';
                        ?>
                    </select>
                </span>
            </div>
            <div class="output-area">
                <span class="value">
                    <label for="output_value" class="label">To:</label>
                    <output name="output_value" id="output_value">
                        <?php echo number_format((float)$output_value, 2, '.', '');?>
                    </output>
                </span>
                <span class="currency">
                    <label for="output_currency" class="label">Currency:</label>
                    <select name="output_currency" id="output_currency" required>
                        <option value>Select a Currency</option>
                        <?php
                        echo
                        '<option value="USD"'; if($output_currency=="USD") echo "selected"; echo '>US Dollar</option>
                        <option value="CAD" '; if($output_currency=="CAD") echo "selected";  echo '>Canadian Dollar</option>
                        <option value="EUR" '; if($output_currency=="EUR") echo "selected";  echo '>Euro</option>';
                        ?>
                    </select>
                </span>
            </div>
            <div class="button-area">
                <input type="submit" value="Convert" id="button" name="convert">
            </div>
        </form>
    </body>
</html>

