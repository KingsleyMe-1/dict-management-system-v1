<?php
session_start();

	if(isset($_POST["save"])) {
		$availability = filter_input(INPUT_POST, 'availability', FILTER_SANITIZE_SPECIAL_CHARS);
		$functional = filter_input(INPUT_POST, 'functional', FILTER_SANITIZE_SPECIAL_CHARS);
		$set_number = filter_input(INPUT_POST, 'set-number', FILTER_SANITIZE_NUMBER_INT);
		$serial_number = filter_input(INPUT_POST, 'serial-number', FILTER_SANITIZE_NUMBER_INT);
		$property_number = filter_input(INPUT_POST, 'property-number', FILTER_SANITIZE_NUMBER_INT);
		
		$availability_mon = filter_input(INPUT_POST, 'availability-monitor', FILTER_SANITIZE_SPECIAL_CHARS);
		$functional_mon = filter_input(INPUT_POST, 'functional-monitor', FILTER_SANITIZE_SPECIAL_CHARS);
		$set_mon = filter_input(INPUT_POST, 'set-monitor', FILTER_SANITIZE_NUMBER_INT);
		$serial_mon = filter_input(INPUT_POST, 'serial-monitor', FILTER_SANITIZE_NUMBER_INT);
		$property_mon = filter_input(INPUT_POST, 'property-monitor', FILTER_SANITIZE_NUMBER_INT);

        $_SESSION['availability'] = $availability; 
		$_SESSION['functional'] = $functional;
		$_SESSION['set-number'] = $set_number;
		$_SESSION['serial-number'] = $serial_number;
		$_SESSION['property-number'] = $property_number;

		$_SESSION['availability-monitor'] = $availability_mon; 
		$_SESSION['functional-monitor'] = $functional_mon;
		$_SESSION['set-monitor'] = $set_mon;
		$_SESSION['serial-monitor'] = $serial_mon;
		$_SESSION['property-monitor'] = $property_mon;
		

		// include database connection file
		include_once("database.php");
				
		// Insert user data into table
	$results = mysqli_query($mysqli, "INSERT INTO computer_inventory(available,functional,set_no,serial_no,property_no,avai_monitor,func_monitor,set_no_mo,ser_no_mo,pro_no_mo)
				VALUES('$availability','$functional','$set_number','$serial_number', '$property_number','$availability_mon', '$functional_mon', '$set_mon', '$serial_mon', '$property_mon')");
		
		// Show message when user added
		echo "User added successfully";
        header("Location:computer.php");
        die;
	}

