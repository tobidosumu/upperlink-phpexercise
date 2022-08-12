<?php

declare(strict_types = 1);

// Your Code
$file_path = '../transaction_files/sample_1.csv';

// convert file to array
function file_to_array($file_path) {
    $file_handle = fopen($file_path, 'r');
    while (!feof($file_handle) ) {
        $line_of_text[] = fgetcsv($file_handle);
    }
    fclose($file_handle);
    return $line_of_text;
}

// call and pass file path into file_to_array()
$transactions_array = file_to_array($file_path);

// remove the first elements in the array
array_shift($transactions_array);

// change amount color
function changeExpenseColor($amount) {

    if ($amount < 0) {
        echo '<td style="color:red">' . $amount . '</td>';
    } else {
        echo '<td style="color:green">' . $amount . '</td>';
    }
}
