<?php
require_once 'config/db.php';

if(isset($_POST['submit'])){
    // put strip html in each form input
    $usr_id       = htmlspecialchars($_POST['id_number'], ENT_QUOTES);

        if (empty($_POST["last_name"])){        
          $nameErr = "Name is required";         
        } else {
            if(!preg_match('/^[a-zA-Z\s]+$/', $_POST['last_name'])){
                echo 'can only have letters';
                exit();
            }else{
                $usr_lname = htmlspecialchars($_POST['last_name']);
            }
        }

     
    $usr_initials = htmlspecialchars($_POST['user_initials'], ENT_QUOTES);
    $usr_fname    = htmlspecialchars($_POST['first_name'], ENT_QUOTES);
    $usr_email    = htmlspecialchars($_POST['user_email'], ENT_QUOTES);
    $usr_home_ph    = htmlspecialchars($_POST['user_home_phone'], ENT_QUOTES);
    $usr_cell_ph    = htmlspecialchars($_POST['user_cell_number'], ENT_QUOTES);
    $usr_postaddr = htmlspecialchars($_POST['postal_address'], ENT_QUOTES);
    $usr_postsub  = htmlspecialchars($_POST['postal_suburb'], ENT_QUOTES);
    $usr_posttown = htmlspecialchars($_POST['postal_town'], ENT_QUOTES);
    $usr_postcode = htmlspecialchars($_POST['postal_code'], ENT_QUOTES);
    $usr_straddr  = htmlspecialchars($_POST['street_address'], ENT_QUOTES);
    $usr_strsub   = htmlspecialchars($_POST['street_suburb'], ENT_QUOTES);
    $usr_strtwn   = htmlspecialchars($_POST['street_town'], ENT_QUOTES);
    $usr_strcode  = htmlspecialchars($_POST['street_code'], ENT_QUOTES);
    $usr_lnumber  = htmlspecialchars($_POST['licence_number'], ENT_QUOTES);
    $usr_rnumber  = htmlspecialchars($_POST['reg_number'], ENT_QUOTES);
    $usr_vnumber  = htmlspecialchars($_POST['vin_number'], ENT_QUOTES);
    $vehicle_make = htmlspecialchars($_POST['vehicle_make'], ENT_QUOTES);
    $vehicle_seri = htmlspecialchars($_POST['vehicle_series'], ENT_QUOTES);
    $vehicle_ode = htmlspecialchars($_POST['odometer_reading'], ENT_QUOTES);

    ?>