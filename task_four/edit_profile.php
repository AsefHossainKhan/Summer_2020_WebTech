<?php

	session_start();
	function setEmail() {
		echo $_SESSION["email"];
	}

	function setName() {
		echo $_SESSION["name"];
	}

	function setDateOfBirth() {
		echo $_SESSION["dateOfBirth"];
	}

	function checkGender($gender) {
		if($_SESSION["gender"] == $gender) {
			echo "checked = \"checked\"";
		}
		else {
		}
	}
?>

<fieldset>
    <legend><b>EDIT PROFILE</b></legend>
	<form>
		<br/>
		<table width="100%" cellpadding="0" cellspacing="0">
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><input name="name" type="text" value=<?php setName(); ?>></td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td>
					<input name="email" type="text" value=<?php setEmail(); ?>>
					<abbr title="hint: sample@example.com"><b>i</b></abbr>
				</td>
				<td></td>
			</tr>				
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td>Gender</td>
				<td>:</td>
				<td>   
					<input name="gender" type="radio" <?php checkGender("Male"); ?> value="Male">Male
					<input name="gender" type="radio" <?php checkGender("Female"); ?> value="Female">Female
					<input name="gender" type="radio" <?php checkGender("Other"); ?> value="Other">Other
				</td>
				<td></td>
			</tr>		
			<tr><td colspan="4"><hr/></td></tr>
			<tr>
				<td valign="top">Date of Birth</td>
				<td valign="top">:</td>
				<td>
					<input name="dob" type="text" value="<?php setDateOfBirth(); ?>">
					<br/>
					<font size="2"><i>(dd/mm/yyyy)</i></font>
				</td>
				<td></td>
			</tr>
		</table>
		<hr/>
		<input type="submit" value="Submit">		
	</form>
</fieldset>