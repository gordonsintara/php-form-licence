<?php
require_once 'config/db.php';

if(isset($_POST['submit'])){
    // put strip html in each form input
// ID number  
        if (empty($_POST["id_number"])){        
            $idErr = "Name is required";
            echo $IdErr; 
            exit();        
        } else {
            if(!preg_match('/^[0-9]*$/', $_POST['id_number'])){
                echo 'Id can only have Numbers';
                exit();
            }else{
                $usr_id= htmlspecialchars($_POST['id_number'], ENT_QUOTES);
            }
        }

// Surname
        if (empty($_POST["last_name"])){        
          $nameErr = "Name is required";
          echo $reErr; 
          exit();        
        } else {
            if(!preg_match('/^[a-zA-Z\s]+$/', $_POST['last_name'])){
                echo 'can only have letters';
                exit();
            }else{
                $usr_lname = htmlspecialchars($_POST['last_name']);
            }
        }

// Initials
        if (empty($_POST["user_initials"])){        
            $nameErr = "Initials is required";
            echo $reErr; 
            exit();        
        } else {
            if(!preg_match('/^[a-zA-Z\s]+$/', $_POST['user_initials'])){
                echo 'can only have letters';
                exit();
            }else{
                $usr_initials = htmlspecialchars($_POST['user_initials'], ENT_QUOTES);
            }
        }

// First Name
        if (empty($_POST["first_name"])){        
            $nameErr = "Initials is required";
            echo $reErr; 
            exit();        
        } else {
            if(!preg_match('/^[a-zA-Z\s]+$/', $_POST['first_name'])){
                echo 'can only have letters';
                exit();
            }else{
                $usr_fname = htmlspecialchars($_POST['first_name'], ENT_QUOTES);
            }
        }

    

// Email    
    $usr_email    = htmlspecialchars($_POST['user_email'], ENT_QUOTES);


// Home phone
    
        if (empty($_POST["user_home_phone"])){        
            $idErr = "Name is required";
            echo $IdErr; 
            exit();        
        } else {
            if(!preg_match('/^[0-9]*$/', $_POST['user_home_phone'])){
                echo 'Id can only have Numbers';
                exit();
            }else{
                $usr_home_ph = htmlspecialchars($_POST['user_home_phone'], ENT_QUOTES);
            }
        }

// Cell Phone
        if (empty($_POST["user_cell_number"])){        
            $idErr = "Cell phone number is required";
            echo $IdErr; 
            exit();        
        } else {
            if(!preg_match('/^[0-9]*$/', $_POST['user_cell_number'])){
                echo 'Id can only have Numbers';
                exit();
            }else{
                $usr_cell_ph = htmlspecialchars($_POST['user_cell_number'], ENT_QUOTES);
            }
        }

// Postal Address
    
    if (empty($_POST["postal_address"])){        
        $idErr = "postal address is required";
        echo $IdErr; 
        exit();        
    }else {
        $usr_postaddr = htmlspecialchars($_POST['postal_address'], ENT_QUOTES);
        }
    // Suburb of postal address
    if (empty($_POST["postal_suburb"])){        
        $idErr = "postal suburb is required";
        echo $IdErr; 
        exit();        
    }else {
        $usr_postsub  = htmlspecialchars($_POST['postal_suburb'], ENT_QUOTES);
        }
    


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

    $query = "INSERT INTO details(id_number,
                        last_name,
                        first_name,
                        user_email,
                        user_home_phone,
                        user_cell_number,
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
                        odometer_reading) 
                    VALUES('$usr_id',
                        '$usr_lname',
                        '$usr_fname',
                        '$usr_email',
                        '$usr_home_ph',
                        '$usr_cell_ph',
                        '$usr_postaddr',
                        '$usr_postsub',
                        '$usr_posttown',
                        '$usr_postcode',
                        '$usr_straddr', 
                        '$usr_strsub',
                        '$usr_strtwn',
                        '$usr_strcode',
                        '$usr_lnumber',
                        '$usr_rnumber',
                        '$usr_vnumber',
                        '$vehicle_make',
                        '$vehicle_seri',
                        '$vehicle_ode'
                                
                                )";

    }