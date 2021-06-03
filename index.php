<?php
    require 'includes/header.php';
?>

<div>
    <form action="form-controller.php" method="post">
    <label>Particulars of Vehicle owner</label>

        <input type="text" name="id_number"     placeholder="ID Number" required>
        <input type="text" name="last_name"     placeholder="Surname" required>
        <input type="text" name="user_initials" placeholder="Initials" required>
        <input type="text" name="first_name"    placeholder="First names" required>
        <input type="text" name="user_email"    placeholder="E-mail address"required>
        <input type="text" name="user_home_phone" placeholder="Home Phone Number"required>
        <input type="text" name="user_cell_number"    placeholder="Cell Phone Number"required>
        <input type="text" name="user_prefered_nuber"    placeholder="Number to call during the day"required>
        <input type="text" name="postal_address" placeholder="Postal address" required>
        <input type="text" name="postal_suburb"  placeholder="Suburb" required>
        <input type="text" name="postal_town"    placeholder="City/Town" required>
        <input type="text" name="postal_code"    placeholder="Postal Code" required>
        <!-- put in "same as postal button "-->
        <input type="checkbox" id="same_as_postal" name="same_postal" value="Same Address as postal">
        <label for="same_as_postal"> Street address is the same as postal address</label><br>
        <input type="text" name="street_address"    placeholder="Street address" required>
        <input type="text" name="street_suburb"     placeholder="Suburb" required>
        <input type="text" name="street_town"        placeholder="City/Town" required>
        <input type="text" name="street_code"       placeholder="Postal Code" required>

        <label> Identification of Motor Vehicle</label>
        
        <input type="text" name="licence_number"placeholder="Licence Number" required>
        <input type="text" name="reg_number"    placeholder="Vehicle Registration number" required>
        <input type="text" name="vin_number"    placeholder="Chassis/vin number" required>
        <input type="text" name="vehicle_make" placeholder="Make of vehicle" required>
        <input type="text" name="vehicle_series" placeholder="Vehicle Series" required>
        <input type="text" name="odometer_reading" placeholder="Odometer reading" required>


        <input type="submit" name="submit" value="submit">

    </form>
</div>