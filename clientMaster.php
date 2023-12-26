<?php
error_reporting(E_ALL & ~E_NOTICE);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>CLIENT MASTER</title>
</head>

<BODY>
<center>
<div style="width:60%;" >
	<div id="divError"></div>
	<fieldset>	
		<legend style="color:Brown; font-weight:bold">Client Master</legend>
			<table width="100%" align="center" cellpadding="5" cellspacing="2" bgcolor="#FFFFFF" border="0">
				<form id="frmClientMaster" action="clientMast.php" method="post" >
					<tr>
						<td width="40%" align="right">First Name :</td>
						<td width="40%"><input type="text" name="txtFirstName" id="txtFirstName" size="29" maxlength="15" tabindex="1" VALUE="<?php echo $_POST['txtFirstName']?>"/></td>
					</tr>
					<tr>
						<td width="40%" align="right">Last Name :</td>
						<td width="40%"><input type="text" name="txtLastName" id="txtLastName" size="29" maxlength="15" tabindex="2" VALUE="<?php echo $_POST['txtLastName']?>" /></td>
					</tr>
					<tr>
						<td width="40%" align="right">Address :</td>
						<td width="40%"><textarea name="taAddress" rows="3" cols="18" tabindex="3" VALUE="<?php echo $_POST['taAddress']?>"><?php echo $_POST['taAddress']?></textarea></td>
					</tr>
					<tr>
						<td width="40%" align="right">Password :</td>
						<td width="40%"><input type="password" name="pwdPassword" id="pwdPassword" size="29" maxlength="15" tabindex="4" VALUE="<?php echo $_POST['pwdPassword']?>" /></td>
					</tr>
					<tr>
						<td width="40%" align="right">Gender :</td>
						<td width="40%">
							<input type="radio" name="rdGender" value="male" tabindex="5" <?php echo (isset($_POST['rdGender']) && $_POST['rdGender']=="male" ? 'checked="true"': '')?> /> Male
							<input type="radio" name="rdGender" value="female" tabindex="6" <?php echo (isset($_POST['rdGender']) && $_POST['rdGender']=="female" ? 'checked="true"': '')?> />Female
						</td>
					</tr>
					
					<tr>		
						<td width="40%" align="right">Country :</td>
						<td width="40%">
							<select name="selectCountry" size="1" tabindex="7">
								<option selected="selected" <?php if ($_POST['selectCountry']=='India') echo 'SELECTED';?>> India</option>
								<option <?php if ($_POST['selectCountry']=='United Kingdom') echo 'SELECTED';?>> United Kingdom</option>
								<option <?php if ($_POST['selectCountry']=='USA') echo 'SELECTED';?>> USA</option>
								<option <?php if ($_POST['selectCountry']=='Australia') echo 'SELECTED';?>> Australia</option>
							</select>
						</td>
					</tr>
					<tr>
						<td width="40%" align="right">Terms and conditions:</td>
						<td width="40%">
							<input type="checkbox" name="chkAgree" value="Agree"  tabindex="8" <?php echo (isset($_POST['chkAgree']) && $_POST['chkAgree']=="Agree" ? 'checked="true"': '')?> />I Agree
						</td>
					</tr>
					<tr>
						<td width="40%" align="right"></td>
						<td width="40%" >
						<input type="submit" id="btnSubmit" name="btnSubmit" value="Submit" tabindex="9" />
							<input type="reset" id="btnCancel" name="btnCancel" value="Cancel" tabindex="11" />
						</td>
					</tr>
					<tr>
						<td width="100%" align="right" colspan="2">
								<INPUT TYPE="Hidden" NAME="frmClientInfo" VALUE="Client Master Details" />
						</td>
					</tr>

				</form>
			</table>
	</fieldset>
	</div>
	</center>

</body>
</html>