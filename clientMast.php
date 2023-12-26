<?php
error_reporting(E_ALL & ~E_NOTICE);

	if ($_POST['txtFirstName']=="")
	{
		echo "<center><FONT COLOR='RED' ALIGN='CENTER'>Please Enter Client's First Name.</FONT></center>";
		echo "<HR>";
		include("clientMaster.php");
	}
	else if ($_POST['txtLastName']=="")
	{
		echo "<center><FONT COLOR='RED'>Please Enter Client's Last Name.</FONT></center>";
		echo "<HR>";
		include("clientMaster.php");
	}
	else if ($_POST['taAddress']=="")
	{
		echo "<center><FONT COLOR='RED'>Please Enter Client's Address.</FONT></center>";
		echo "<HR>";
		include("clientMaster.php");
	}
	else if (($_POST['pwdPassword'] ==""))
	{
		echo "<center><FONT COLOR='RED'>Please Enter Password.</FONT></center>";
		echo "<HR>";
		include("clientMaster.php");
	}
	else if(!isset($_POST['rdGender']))
	{
		echo "<center><FONT COLOR='RED'>Please Select Gender.</FONT></center>";
		echo "<HR>";
		include("clientMaster.php");
	}
	else if(!isset($_POST['chkAgree']))
	{
		echo "<center><FONT COLOR='RED'>Please accept the terms and conditions.</FONT></center>";
		echo "<HR>";
		include("clientMaster.php");
	}
	else
	{
		echo "<center><FONT COLOR='BLUE'>The Form Name is " . $_POST['frmClientInfo'] . " -- This is a hidden Variable </FONT><BR /> </center>";
		echo "<center><FONT COLOR='BROWN'>Client Data Entered Successfully</FONT> </center>";
		echo "<HR>";
		$_POST="";
		include("clientMaster.php");
	}

?>
