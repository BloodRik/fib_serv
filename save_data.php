<?php
if(isset($_POST['value'])) {
    // Get the submitted value
    $value = $_POST['value'];

    // Set the filename with current date
    $filename = 'statistics/data_' . date('Y-m-d') . '.json';

    // Open the file in append mode
    $file = fopen($filename, 'a');

    // Add the submitted value to the file
    fwrite($file, $value . PHP_EOL);

    // Close the file
    fclose($file);

    // Output success message
    echo "Data saved successfully.";
}
?>
