<?php
    require 'includes/header.php';
?>

<div class = "container">
    <form class="form"action="form-controller.php" method="post" id="form">
    <div class="form-titles"> 
        <label><h2>Particulars of Vehicle owner</h2></label>
    </div>
        <div class="form-control ">
            <label><strong>ID Number</strong></label>
            <input type="text" name="id_number"  id="id_number"   placeholder="Enter ID number here..." >
            <i class="fa fa-check-circle fa-2x"></i>
            <i class="fa fa-exclamation-circle fa-2x"></i>
            <br>
            <br>
            <span class="error">* <?php echo $idErr;?></span>
            <p> error message </p>
        </div>

        <div class="form-control error">
            <label>Surname</label>
            <input type="text" name="last_name"     placeholder="Enter Surname here..." >
            <i class="fa fa-check-circle fa-2x"></i>
            <i class="fa fa-exclamation-circle fa-2x"></i>
            <br>
            <br>
            <span class="error">* <?php echo $nameErr;?></span>
            <p> error message </p>
        </div>

        <div class = "form-control">
            <label><strong>Initials</strong></label>
            <input type="text" name="user_initials" placeholder="Enter initials..." >
            <i class="fa fa-check-circle fa-2x"></i>
            <i class="fa fa-exclamation-circle fa-2x"></i>
            <br>
            <br>
            <p> error message </p>
        </div>

        <div class="form-control">
            <label><strong>First Name</strong></label>
            <input type="text" name="first_name"    placeholder="Enter your first names..." >
            <i class="fa fa-check-circle fa-2x"></i>
            <i class="fa fa-exclamation-circle fa-2x"></i>
            <br>
            <br>
            <p> error message </p>
        </div>

        <div class="form-control">
            <label><strong>Email</strong></label>
            <input type="text" name="user_email"    placeholder="E-mail address">
            <i class="fa fa-check-circle fa-2x"></i>
            <i class="fa fa-exclamation-circle fa-2x"></i>
            <br>
            <br>
            <p> error message </p>
        </div>

        <div class="form-control">
            <label><strong>Home Phone</strong></label>
            <input type="text" name="user_home_phone" placeholder="Home Phone Number">
            <i class="fa fa-check-circle fa-2x"></i>
            <i class="fa fa-exclamation-circle fa-2x"></i>
            <br>
            <br>
            <p> error message </p>
        </div>

        <div class="form-control">
            <label><strong>Cell Phone</strong></label>
            <input type="text" name="user_cell_number"    placeholder="Cell Phone Number">
            <i class="fa fa-check-circle fa-2x"></i>
            <i class="fa fa-exclamation-circle fa-2x"></i>
            <br>
            <br>
            <p> error message </p>
        </div>

        <div class="form-control">
            <label><strong>Prefered Contact</strong></label>
            <input type="text" name="user_prefered_nuber"    placeholder="Number to call during the day">
            <i class="fa fa-check-circle fa-2x"></i>
            <i class="fa fa-exclamation-circle fa-2x"></i>
            <br>
            <br>
            <p> error message </p>
        </div>

        <div class="form-control">
            <label><strong>Postal Address</strong></label>
            <input type="text" name="postal_address" placeholder="Postal address" >
            <i class="fa fa-check-circle fa-2x"></i>
            <i class="fa fa-exclamation-circle fa-2x"></i>
            <br>
            <br>
            <p> error message </p>
        </div>

        <div class="form-control">
            <label><strong>Suburb</strong></label>
            <input type="text" name="postal_suburb"  placeholder="Suburb" >
            <i class="fa fa-check-circle fa-2x"></i>
            <i class="fa fa-exclamation-circle fa-2x"></i>
            <br>
            <br>
            <p> error message </p>
        </div>

        <div class="form-control">
            <label><strong>City/Town</strong></label>
            <input type="text" name="postal_town"    placeholder="City/Town" >
            <i class="fa fa-check-circle fa-2x"></i>
            <i class="fa fa-exclamation-circle fa-2x"></i>
            <br>
            <br>
            <p> error message </p>
        </div>

        <div class="form-control">
            <label><strong>Area Code</strong></label>
            <input type="text" name="postal_code"    placeholder="Postal Code" >
            <i class="fa fa-check-circle fa-2x"></i>
            <i class="fa fa-exclamation-circle fa-2x"></i>
            <br>
            <br>
            <p> error message </p>
        </div>
        <!-- put in "same as postal button "-->
        <div class="check">
            <label for="same_as_postal"> Street address is the same as postal address</label><br>
            <input type="checkbox" id="same_as_postal" name="same_postal" value="Same Address as postal">
        </div>
        
        <div class="form-control">
            <label><strong>Street Address</strong></label>
            <input type="text" name="street_address"    placeholder="Street address" >
            <i class="fa fa-check-circle fa-2x"></i>
            <i class="fa fa-exclamation-circle fa-2x"></i>
            <br>
            <br>
            <p> error message </p>
        </div>

        <div class="form-control">
            <label><strong>Suburb</strong></label>
            <input type="text" name="street_suburb"     placeholder="Suburb" >
            <i class="fa fa-check-circle fa-2x"></i>
            <i class="fa fa-exclamation-circle fa-2x"></i>
            <br>
            <br>
            <p> error message </p>
        </div>

        <div class="form-control">
            <label><strong>City/Town</strong></label>
            <input type="text" name="street_town"        placeholder="City/Town" >
            <i class="fa fa-check-circle fa-2x"></i>
            <i class="fa fa-exclamation-circle fa-2x"></i>
            <br>
            <br>
            <p> error message </p>
        </div>

        <div class="form-control">
            <label><strong>Postal Code</strong><label>
            <input type="text" name="street_code"       placeholder="Postal Code" >
            <i class="fa fa-check-circle fa-2x"></i>
            <i class="fa fa-exclamation-circle fa-2x"></i>
            <br>
            <br>
            <p> error message </p>

        <div class = "form-titles">    
            <label> <h2>Identification of Motor Vehicle</h2></label>
        </div>

        <div class="form-control">
            <label><strong>Licence Number</strong></label>
            <input type="text" name="licence_number"placeholder="Licence Number" >
            <i class="fa fa-check-circle fa-2x"></i>
            <i class="fa fa-exclamation-circle fa-2x"></i>
            <br>
            <br>
            <p> error message </p>
        </div>

        <div class="form-control">
            <label><strong>Registration Number</strong></label>
            <input type="text" name="reg_number"    placeholder="Vehicle Registration number" >
            <i class="fa fa-check-circle fa-2x"></i>
            <i class="fa fa-exclamation-circle fa-2x"></i>
            <br>
            <br>
            <p> error message </p>
        </div>

        <div class="form-control">
            <label><strong>Chassis/Vin Number</strong></label>
            <input type="text" name="vin_number"    placeholder="Chassis/vin number" >
            <i class="fa fa-check-circle fa-2x"></i>
            <i class="fa fa-exclamation-circle fa-2x"></i>
            <br>
            <br>
            <p> error message </p>
        </div>

        <div class="form-control">
            <label><strong>Make of Vehicle</strong></label>
            <input type="text" name="vehicle_make" placeholder="Make of vehicle" >
            <i class="fa fa-check-circle fa-2x"></i>
            <i class="fa fa-exclamation-circle fa-2x"></i>
            <br>
            <br>
            <p> error message </p>
        </div>

        <div class="form-control">
            <label><strong>Vehicle Series</strong></label>
            <input type="text" name="vehicle_series" placeholder="Vehicle Series" >
            <i class="fa fa-check-circle fa-2x"></i>
            <i class="fa fa-exclamation-circle fa-2x"></i>
            <br>
            <br>
            <p> error message </p>
        </div>

        <div class="form-control">
            <label><strong>Odometer Reading</strong></label>
            <input type="text" name="odometer_reading" placeholder="Odometer reading" >
            <i class="fa fa-check-circle fa-2x"></i>
            <i class="fa fa-exclamation-circle fa-2x"></i>
            <br>
            <br>
            <p> error message </p>
        </div>

        <input id="button" type="submit" name="submit" value="submit">

    </form>
</div>

