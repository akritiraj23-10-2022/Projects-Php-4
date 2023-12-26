<?php
	error_reporting(E_ALL & ~E_NOTICE);
?>
<HTML>
	<HEAD>
		<TITLE>Product Master</TITLE>
	</HEAD>
	<BODY>
	<center>
			<FIELDSET style="width:50%;">
				<LEGEND style="color:Blue"><b>Product Master</b></LEGEND>
					<TABLE WIDTH="396" ALIGN="center" CELLPADDING="1" CELLSPACING="1" BORDERCOLOR="#000000" BGCOLOR="#FFFFFF">
						<FORM ACTION="productValidate.php" METHOD="POST" NAME="frmProductMaster" enctype="multipart/form-data">
						<TR>
							<TD COLSPAN=2>Product Name:</TD>
							<TD><INPUT TYPE="Text" NAME="txtProdName" SIZE="28" MAXLENGTH="15" TABINDEX="1" VALUE="<?php echo $_POST['txtProdName']?>"></TD>
						</TR>  
						<TR>
							<TD COLSPAN=2>Product Description:</TD>
							<TD><TEXTAREA NAME="taProdDesc" ROWS="4" COLS="21" TABINDEX="2"><?php echo $_POST['taProdDesc'];?></TEXTAREA></TD>
						</TR>

						<TR>
							<TD COLSPAN=2>Product Quantity:</TD>
							<TD><INPUT TYPE="Text" NAME="txtProdQuantity" SIZE="28" MAXLENGTH="15" TABINDEX="3" VALUE="<?php echo $_POST['txtProdQuantity']?>">
							</TD>
						</TR>  

						<TR>
							<TD COLSPAN=2>Product Price:</TD>
							<TD><INPUT TYPE="Text" NAME="txtProdPrice" SIZE="28" MAXLENGTH="15" TABINDEX="4" VALUE="<?php echo $_POST['txtProdPrice']?>">
							</TD>
						</TR>  

						<TR>
							<TD COLSPAN=2>Image:</TD>
							<TD><INPUT type="file" NAME="file4Upload" tabindex="5"/></TD>
						</TR>
						
						<TR>
							<TD></TD>
							<TD colspan="2"><INPUT TYPE="Submit" NAME="btnSubmit" VALUE="Submit" tabindex="6" />
							<INPUT TYPE="Reset" NAME="btnCancel" VALUE="Cancel" tabindex="7" /></TD>
						</TR>

						<TR>
							<TD><INPUT TYPE="Hidden" NAME="hiddProdName" VALUE="Product Master" /></TD>
						</TR>
						</FORM>
					</TABLE>
			</FIELDSET>
		</center>
	</BODY>
</HTML>
