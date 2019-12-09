<?php
if(isset( $_POST['fname']))
    $fname = $_POST['fname'];
if(isset( $_POST['lname']))
    $lname = $_POST['lname'];
if(isset( $_POST['email']))
    $email = $_POST['email'];
if(isset( $_POST['phone']))
    $phone = $_POST['phone'];
if(isset( $_POST['priceRangeFrom']))
    $priceRangeFrom = $_POST['priceRangeFrom'];
if(isset( $_POST['priceRangeTo']))
    $priceRangeTo = $_POST['priceRangeTo'];
if(isset( $_POST['maxDistance']))
    $maxDistance = $_POST['maxDistance'];
if(isset( $_POST['homeType']))
    $homeType = $_POST['homeType'];
if(isset( $_POST['bedroomNum']))
    $bedroomNum = $_POST['bedroomNum'];
if(isset( $_POST['bathroomNum']))
    $bathroomNum = $_POST['bathroomNum'];
if(isset( $_POST['specialEquip']))
    $specialEquip = $_POST['specialEquip'];
if(isset( $_POST['garageSize']))
    $garageSize = $_POST['garageSize'];
if(isset( $_POST['comments']))
    $comments = $_POST['comments'];



$subject = 'Website Contact Form Submission';

$mailheader .= "From: postmaster@southerntechfusion.com \r\n";
$mailheader .= "MIME-Version: 1.0\r\n";
$mailheader .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$message = '<html><body>';
$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';

if((isset( $_POST['fname'])) and (isset( $_POST['lname']))){
    $message .= "<tr style='background: #eee;'><td><strong>Name:</strong></td><td > $fname $lname </td></tr>";
}

if(isset( $_POST['email'])){
    $message .= "<tr><td><strong>Email:</strong></td><td > $email </td></tr>";
}

if(isset( $_POST['phone'])){
    $message .= "<tr><td><strong>Phone Number:</strong></td><td > $phone </td></tr>";
}

if((isset( $_POST['priceRangeFrom'])) and (isset( $_POST['priceRangeTo']))){
    $message .= "<tr><td><strong>Price Range:</strong></td><td >$priceRangeFrom - $priceRangeTo</td></tr>";
}

if(isset( $_POST['maxDistance'])){
    $message .= "<tr><td><strong>Maximum distance from job:</strong></td><td >$maxDistance</td></tr>";
}

if(isset( $_4POST['homeType'])){
    $message .= "<tr><td><strong>What type of home are you looking for (house, apartment, etc.):</strong></td><td >$homeType</td></tr>";
}

if(isset( $_POST['bedroomNum'])){
    $message .= "<tr><td><strong>Number of bedrooms:</strong></td><td >$bedroomNum</td></tr>";
}

if(isset( $_POST['bathroomNum'])){
    $message .= "<tr><td><strong>Number of bathrooms:</strong></td><td >$bathroomNum</td></tr>";
}

if(isset( $_POST['specialEquip'])){
    $message .= "<tr><td><strong>Do you need special equipment?:</strong></td><td >$specialEquip</td></tr>";
}

if(isset( $_POST['garageSize'])){
    $message .= "<tr><td><strong>Garage size:</strong></td><td >$garageSize</td></tr>";
}

if(isset( $_POST['comments'])){
    $message .= "<tr><td><strong>Any other request or comments:</strong></td><td >$comments</td></tr>";
}

$message .= "</table>";
$message .= "</body></html>";

$recipient = "homeresettlement@gmail.com julian@techfusionconsulting.com";

mail($recipient, $subject, $message, $mailheader) or die("Error!");

header('Location: http://homeresettlement.com/index.php/our-plans/');
?>