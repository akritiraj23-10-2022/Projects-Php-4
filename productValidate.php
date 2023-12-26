<?php
	error_reporting(E_ALL & ~E_NOTICE);
	//print_r ($_POST);
	//print_r ($_FILES);

		if ($_POST['txtProdName']=="")
		{
			echo "<center><span style='color: Red;'>Please Enter Product's Name.</span></span>";
			echo "<HR>";
			include("productMaster.php");
		}
		
		else if ($_POST['taProdDesc']=="")
		{
			echo "<center><span style='color: Red;'>Please Enter Product's Description.</span></center>";
			echo "<HR>";
			include("productMaster.php");
		}

		else if ($_POST['txtProdQuantity']=="")
		{
			echo "<center><span style='color: Red;'>Please Enter Product's Quantity.</span></center>";
			echo "<HR>";
			include("productMaster.php");
		}

		else if (!is_numeric($_POST['txtProdQuantity']))
		{
			echo "<center><span style='color: Red;'>Please Enter Numeric Value for Product Quantity.</span></center>";
			echo "<HR>";
			include("productMaster.php");
		}

		else if ($_POST['txtProdPrice']=="")
		{
			echo "<center><span style='color: Red;'>Please Enter Price of the Product.</span></center>";
			echo "<HR>";
 
			include("productMaster.php");
		}

		else if (!is_numeric($_POST['txtProdPrice']))
		{
			echo "<center><span style='color: Red;'>Please Enter numeric value for Product Price.</span></center>";
			echo "<HR>";
			include("productMaster.php");
		}

		else if ($_FILES['file4Upload']['name']=="")
		{

			echo "<center><span style='color: Red;'>Please Choose a Image to be uploaded.</span></center>";
			echo "<HR>";
			include("productMaster.php");
		}
		else
		{
			$target_path = "uploadFile/";

			$target_path = $target_path.$_FILES['file4Upload']['name']; 

			if(move_uploaded_file($_FILES['file4Upload']['tmp_name'], $target_path))
			{
				 echo "<center><span style='color: Red;'><b>The image file has been uploaded Successfully.</b></span></center>";
			}
			else
			{
				echo "Sorry there was an error uploading the file, please try again!";
			} 

			echo "<center><span style='color: Red;'><b>The Form Name is " . $_POST['hiddProdName'] . "</b></span><BR></center>";
			echo "<center><span style='color: Red;'><b>Product Data Entered Successfully</b></span></center>";
			echo "<HR>";
			$_POST="";
			include("productMaster.php");
		}
	?>
	
	
