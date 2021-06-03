<?php 

$server   = "localhost";
$username = "root";
$password = "";
$dbname   = "licence-form";

$conn = new mysqli($server, $username, $password, $dbname);

if($conn){
    echo "connected";
}

/* INSERT INTO details(id_number,
                     last_name,
                     first_name,
                     user_email,
                     postal_address,
                     postal_suburb,
                     postal_town,
                     postal_code,
                     street_address,
                     street_suburb,
                     street_town,
                     street_code,
                     licence_number,
                     reg_number,
                     vin_number,
                     vehicle_make,
                     vehicle_series,
                     odometer_reading) VALUES($);
                     */
                    