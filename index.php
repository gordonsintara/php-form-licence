<?php
    require 'includes/header.php';
?>

<div class = "container">
    <form class="form"action="form-controller.php" method="post">
    <div class="form-titles"> 
        <label><h2>Particulars of Vehicle owner</h2></label>
    </div>
        <div class="form-control ">
            <label>ID Number</label>
            <input type="text" name="id_number"  id="id_number"   placeholder="Enter ID number here..." required>
            <i class="fa fa-check-circle fa-2x"></i>
            <i class="fa fa-exclamation-circle fa-2x"></i>
            <br>
            <br>
            <p> error message </p>
        </div>

        <div class="form-control error">
            <label>Surname</label>
            <input type="text" name="last_name"     placeholder="Enter Surname here..." required>
            <i class="fa fa-check-circle fa-2x"></i>
            <i class="fa fa-exclamation-circle fa-2x"></i>
            <br>
            <br>
            <p> error message </p>
        </div>

        <div class = "form-control">
            <label><strong>Initials</strong></label>
            <input type="text" name="user_initials" placeholder="Enter initials..." required>
            <i class="fa fa-check-circle fa-2x"></i>
            <i class="fa fa-exclamation-circle fa-2x"></i>
            <br>
            <br>
            <p> error message </p>
        </div>

        <div class="form-control">
            <label><h3>First Name</h3></label>
            <input type="text" name="first_name"    placeholder="Enter your first names..." required>
            <i class="fa fa-check-circle fa-2x"></i>
            <i class="fa fa-exclamation-circle fa-2x"></i>
            <br>
            <br>
            <p> error message </p>
        </div>

        <div class="form-control">
            <label>Email</label>
            <input type="text" name="user_email"    placeholder="E-mail address"required>
            <i class="fa fa-check-circle fa-2x"></i>
            <i class="fa fa-exclamation-circle fa-2x"></i>
            <br>
            <br>
            <p> error message </p>
        </div>

        <div class="form-control">
            <label>Home Phone</label>
            <input type="text" name="user_home_phone" placeholder="Home Phone Number"required>
            <i class="fa fa-check-circle fa-2x"></i>
            <i class="fa fa-exclamation-circle fa-2x"></i>
            <br>
            <br>
            <p> error message </p>
        </div>

        <div class="form-control">
            <label>Cell Phone</label>
            <input type="text" name="user_cell_number"    placeholder="Cell Phone Number"required>
            <i class="fa fa-check-circle fa-2x"></i>
            <i class="fa fa-exclamation-circle fa-2x"></i>
            <br>
            <br>
            <p> error message </p>
        </div>

        <div class="form-control">
            <label>Prefered Contact</label>
            <input type="text" name="user_prefered_nuber"    placeholder="Number to call during the day"required>
            <i class="fa fa-check-circle fa-2x"></i>
            <i class="fa fa-exclamation-circle fa-2x"></i>
            <br>
            <br>
            <p> error message </p>
        </div>

        <div class="form-control">
            <label>Postal Address</label>
            <input type="text" name="postal_address" placeholder="Postal address" required>
            <i class="fa fa-check-circle fa-2x"></i>
            <i class="fa fa-exclamation-circle fa-2x"></i>
            <br>
            <br>
            <p> error message </p>
        </div>

        <div class="form-control">
            <label>Suburb</label>
            <input type="text" name="postal_suburb"  placeholder="Suburb" required>
            <i class="fa fa-check-circle fa-2x"></i>
            <i class="fa fa-exclamation-circle fa-2x"></i>
            <br>
            <br>
            <p> error message </p>
        </div>

        <div class="form-control">
            <label>City/Town</label>
            <input type="text" name="postal_town"    placeholder="City/Town" required>
            <i class="fa fa-check-circle fa-2x"></i>
            <i class="fa fa-exclamation-circle fa-2x"></i>
            <br>
            <br>
            <p> error message </p>
        </div>

        <div class="form-control">
            <label>Area Code</label>
            <input type="text" name="postal_code"    placeholder="Postal Code" required>
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
            <label>Street Address</label>
            <input type="text" name="street_address"    placeholder="Street address" required>
            <i class="fa fa-check-circle fa-2x"></i>
            <i class="fa fa-exclamation-circle fa-2x"></i>
            <br>
            <br>
            <p> error message </p>
        </div>

        <div class="form-control">
            <label>Suburb</label>
            <input type="text" name="street_suburb"     placeholder="Suburb" required>
            <i class="fa fa-check-circle fa-2x"></i>
            <i class="fa fa-exclamation-circle fa-2x"></i>
            <br>
            <br>
            <p> error message </p>
        </div>

        <div class="form-control">
            <label>City/Town</label>
            <input type="text" name="street_town"        placeholder="City/Town" required>
            <i class="fa fa-check-circle fa-2x"></i>
            <i class="fa fa-exclamation-circle fa-2x"></i>
            <br>
            <br>
            <p> error message </p>
        </div>

        <div class="form-control">
            <label>Postal Code<label>
            <input type="text" name="street_code"       placeholder="Postal Code" required>
            <i class="fa fa-check-circle fa-2x"></i>
            <i class="fa fa-exclamation-circle fa-2x"></i>
            <br>
            <br>
            <p> error message </p>

        <div class = "form-titles">    
            <label> <h2>Identification of Motor Vehicle</h2></label>
        </div>

        <div class="form-control">
            <label>Licence Number</label>
            <input type="text" name="licence_number"placeholder="Licence Number" required>
            <i class="fa fa-check-circle fa-2x"></i>
            <i class="fa fa-exclamation-circle fa-2x"></i>
            <br>
            <br>
            <p> error message </p>
        </div>

        <div class="form-control">
            <label>Registration Number</label>
            <input type="text" name="reg_number"    placeholder="Vehicle Registration number" required>
            <i class="fa fa-check-circle fa-2x"></i>
            <i class="fa fa-exclamation-circle fa-2x"></i>
            <br>
            <br>
            <p> error message </p>
        </div>

        <div class="form-control">
            <label>Chassis/Vin Number</label>
            <input type="text" name="vin_number"    placeholder="Chassis/vin number" required>
            <i class="fa fa-check-circle fa-2x"></i>
            <i class="fa fa-exclamation-circle fa-2x"></i>
            <br>
            <br>
            <p> error message </p>
        </div>

        <div class="form-control">
            <label>Make of Vehicle</label>
            <input type="text" name="vehicle_make" placeholder="Make of vehicle" required>
            <i class="fa fa-check-circle fa-2x"></i>
            <i class="fa fa-exclamation-circle fa-2x"></i>
            <br>
            <br>
            <p> error message </p>
        </div>

        <div class="form-control">
            <label>Vehicle Series</label>
            <input type="text" name="vehicle_series" placeholder="Vehicle Series" required>
            <i class="fa fa-check-circle fa-2x"></i>
            <i class="fa fa-exclamation-circle fa-2x"></i>
            <br>
            <br>
            <p> error message </p>
        </div>

        <div class="form-control">
            <label>Odometer Reading</label>
            <input type="text" name="odometer_reading" placeholder="Odometer reading" required>
            <i class="fa fa-check-circle fa-2x"></i>
            <i class="fa fa-exclamation-circle fa-2x"></i>
            <br>
            <br>
            <p> error message </p>
        </div>

        <input id="button" type="submit" name="submit" value="submit">

    </form>
</div>

<?php
    require_once 'app.js';

?>