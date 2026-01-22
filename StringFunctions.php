<?php

$school   = "HOLY ANGEL UNIVERSITY";
$fullname = "Endaya, Adrienne";
$messy    = "   School of Computing   ";
$text     = "Dynamic Web Applications and Development Tools";

include("header.php");
?>

<link rel="stylesheet" href="styles.css">

<table>
    <tbody>

      
        <tr>
            <th colspan="2">Changing the Case of Characters</th>
        </tr>
        <tr>
            <td>Lowercase</td>
            <td><?= strtolower($school) ?></td>
        </tr>
        <tr>
            <td>Uppercase</td>
            <td><?= strtoupper($school) ?></td>
        </tr>
        <tr>
            <td>Capitalize</td>
            <td><?= ucwords(strtolower($school)) ?></td>
        </tr>

        
        <tr>
            <th colspan="2">Counting Characters and Words</th>
        </tr>
        <tr>
            <td>Number of Characters</td>
            <td><?= strlen($fullname) ?></td>
        </tr>
        <tr>
            <td>Number of Words</td>
            <td><?= str_word_count($fullname) ?></td>
        </tr>

        
        <tr>
            <th colspan="2">Removing and Replacing Characters</th>
        </tr>
        <tr>
            <td>Remove whitespaces from left</td>
            <td>"<?= ltrim($messy) ?>"</td>
        </tr>
        <tr>
            <td>Remove whitespaces from right</td>
            <td>"<?= rtrim($messy) ?>"</td>
        </tr>
        <tr>
            <td>Remove whitespaces from left and right</td>
            <td>"<?= trim($messy) ?>"</td>
        </tr>
        <tr>
            <td>String replace</td>
            <td><?= str_replace("Development", "Programming", $text) ?></td>
        </tr>
        <tr>
            <td>String ireplace</td>
            <td><?= str_ireplace("web", "WEB", $text) ?></td>
        </tr>
        <tr>
            <td>String Repeat</td>
            <td><?= str_repeat("PHP ", 3) ?></td>
        </tr>

        
        <tr>
            <th colspan="2">Other Built-in Functions</th>
        </tr>
        <tr>
            <td>is numeric (123456789)</td>
            <td><?= is_numeric(123456789) ? "True" : "False" ?></td>
        </tr>
        <tr>
            <td>Number format (123456789)</td>
            <td><?= number_format(123456789, 2) ?></td>
        </tr>
        <tr>
            <td>Integer Value (1234.56789)</td>
            <td><?= intval(1234.56789) ?></td>
        </tr>
        <tr>
            <td>Float Value (1234.56789)</td>
            <td><?= floatval(1234.56789) ?></td>
        </tr>
        <tr>
            <td>Absolute Value (-50)</td>
            <td><?= abs(-50) ?></td>
        </tr>
        <tr>
            <td>Rounded Value (1234.56789)</td>
            <td><?= round(1234.56789) ?></td>
        </tr>
        <tr>
            <td>Maximum Value (5, 10, 15)</td>
            <td><?= max(5, 10, 15) ?></td>
        </tr>
        <tr>
            <td>Power (4, 8)</td>
            <td><?= pow(4, 8) ?></td>
        </tr>
        <tr>
            <td>Square Root (144)</td>
            <td><?= sqrt(144) ?></td>
        </tr>
        <tr>
            <td>Random Number (1-100)</td>
            <td><?= rand(1, 100) ?></td>
        </tr>
        <tr>
            <td>Length of Number (123456789)</td>
            <td><?= strlen((string)123456789) ?></td>
        </tr>

    </tbody>
</table>

<?php include("footer.php"); ?>