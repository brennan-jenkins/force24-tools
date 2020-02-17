<?php
	require_once('includes/header.php');
?>
<div class="container">
	<div class="page-container">
		<div class="row">
			<div class="container-banner">
				<div class="col-md-10 offset-md-1" style="padding:0;">
					<h6>
						Please make sure you have followed the advice covered within our <a href="includes/f24-tracking-document-V2.5.pdf" download>Tracking and Form Capture Handbook</a>
					</h6>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 offset-md-1" id="iframeContainer">
				<div class="tracking-script-generator-wrapper">
					<h1 style="color:#00a4c3">Force24 Tracking Script & Form Mapping</h1>
					<h3 class="black-text">Your Client ID</h3>
					<input type="text" id="clientIdValue" maxlength="36" value="00000000-0000-0000-0000-000000000000">
					<div class="clear"></div>

					<h3 class="black-text">Would you like anonymous data collection?</h3>
					<div class="styled-radio"><input type="radio" name="anonCookieValue" id="anonCookieTrue" value="true"><label for="anonCookieTrue">Yes</label></div>
					<div class="styled-radio"><input type="radio" name="anonCookieValue" id="anonCookieFalse" value="false"><label for="anonCookieFalse">No</label></div>
					<div class="clear"></div>

					<h3 class="black-text">Do you have a form you'd like to map to the Force24 portal?</h3>
					<div class="styled-radio"><input type="radio" name="addFormMapping" id="addFormMappingTrue" value="true"><label for="addFormMappingTrue">Yes</label></div>
					<div class="styled-radio"><input type="radio" name="addFormMapping" id="addFormMappingFalse" value="false"><label for="addFormMappingFalse">No</label></div>
					<div class="clear"></div>

					<div class="mappingSettings">
						<h3 class="black-text">Marketing List ID</h3>
						<input type="text" id="MLIdValue" maxlength="36" value="00000000-0000-0000-0000-000000000000">
						<div class="clear"></div>
						
						<h3 class="black-text">Is your form selector and ID or a Class</h3>
						<div class="styled-radio"><input type="radio" name="formMappingSelectorType" id="formMappingSelectorTypeId" value="#"><label for="formMappingSelectorTypeId">ID</label></div>
						<div class="styled-radio"><input type="radio" name="formMappingSelectorType" id="formMappingSelectorTypeClass" value="."><label for="formMappingSelectorTypeClass">Class</label></div>	
						<div class="clear"></div>		

						<h3 class="black-text">what is the value of your form selector (class/id)</h3>
						<input type="text" id="formSelectorValue" value="Force24Form">
						<div class="clear"></div>
						
						<h3 class="black-text">Please select where you would like to map your form fields within our portal</h3>
						<div class="row">
						<div class="col-md-6">
							<div class="styled-checkbox"><input type="checkbox" name="formMappingLocation" id="FirstName" value='FirstName:' class="nameToMapBind"><label for="FirstName">FirstName</label><input type="text" value="" placeholder="Name of your forms First Name field" class="nameToMap nameToMapBind textInputName" name="nameToMap"></div>
							<div class="styled-checkbox"><input type="checkbox" name="formMappingLocation" id="LastName" value='LastName:' class="nameToMapBind"><label for="LastName">LastName</label><input type="text" value="" placeholder="Name of your forms Last Name field" class="nameToMap nameToMapBind" name="nameToMap"></div>
							<div class="styled-checkbox"><input type="checkbox" name="formMappingLocation" id="MiddleName" value='MiddleName:' class="nameToMapBind"><label for="MiddleName">MiddleName</label><input type="text" value="" placeholder="Name of your forms Middle Name field" class="nameToMap nameToMapBind" name="nameToMap"></div>
							<div class="styled-checkbox"><input type="checkbox" name="formMappingLocation" id="Salutation" value='Salutation:' class="nameToMapBind"><label for="Salutation">Salutation</label><input type="text" value="" placeholder="Name of your forms Salutation field" class="nameToMap nameToMapBind" name="nameToMap"></div>
							<div class="styled-checkbox"><input type="checkbox" name="formMappingLocation" id="CompanyName" value='CompanyName:' class="nameToMapBind"><label for="CompanyName">CompanyName</label><input type="text" value="" placeholder="Name of your forms Company Name field" class="nameToMap nameToMapBind" name="nameToMap"></div>
							<div class="styled-checkbox"><input type="checkbox" name="formMappingLocation" id="JobTitle" value='JobTitle:' class="nameToMapBind"><label for="JobTitle">JobTitle</label><input type="text" value="" placeholder="Name of your forms Job Title field" class="nameToMap nameToMapBind" name="nameToMap"></div>
							<div class="styled-checkbox"><input type="checkbox" name="formMappingLocation" id="PhoneNumber" value='PhoneNumber:' class="nameToMapBind"><label for="PhoneNumber">PhoneNumber</label><input type="text" value="" placeholder="Name of your forms Phone Number field" class="nameToMap nameToMapBind" name="nameToMap"></div>
							<div class="styled-checkbox"><input type="checkbox" name="formMappingLocation" id="HomePhoneNumber" value='HomePhoneNumber:' class="nameToMapBind"><label for="HomePhoneNumber">HomePhoneNumber</label><input type="text" value="" placeholder="Name of your forms Home Phone field" class="nameToMap nameToMapBind" name="nameToMap"></div>
							<div class="styled-checkbox"><input type="checkbox" name="formMappingLocation" id="AddressLine1" value='AddressLine1:' class="nameToMapBind"><label for="AddressLine1">AddressLine1</label><input type="text" value="" placeholder="Name of your forms Address Line 1 field" class="nameToMap nameToMapBind" name="nameToMap"></div>
							<div class="styled-checkbox"><input type="checkbox" name="formMappingLocation" id="AddressLine2" value='AddressLine2:' class="nameToMapBind"><label for="AddressLine2">AddressLine2</label><input type="text" value="" placeholder="Name of your forms Address Line 2 field" class="nameToMap nameToMapBind" name="nameToMap"></div>
							<div class="styled-checkbox"><input type="checkbox" name="formMappingLocation" id="AddressLine3" value='AddressLine3:' class="nameToMapBind"><label for="AddressLine3">AddressLine3</label><input type="text" value="" placeholder="Name of your forms Address Line 3 field" class="nameToMap nameToMapBind" name="nameToMap"></div>
							<div class="styled-checkbox"><input type="checkbox" name="formMappingLocation" id="PostCode" value='PostCode:' class="nameToMapBind"><label for="PostCode">PostCode</label><input type="text" value="" placeholder="Name of your forms Post Code field" class="nameToMap nameToMapBind" name="nameToMap"></div>
							<div class="styled-checkbox"><input type="checkbox" name="formMappingLocation" id="City" value='City:' class="nameToMapBind"><label for="City">City</label><input type="text" value="" class="nameToMap nameToMapBind" name="nameToMap"></div>
							<div class="styled-checkbox"><input type="checkbox" name="formMappingLocation" id="County" value='County:' class="nameToMapBind"><label for="County">County</label><input type="text" value="" placeholder="Name of your forms County field" class="nameToMap nameToMapBind" name="nameToMap"></div>
							<div class="styled-checkbox"><input type="checkbox" name="formMappingLocation" id="Country" value='Country:' class="nameToMapBind"><label for="Country">Country</label><input type="text" value="" placeholder="Name of your forms Country field" class="nameToMap nameToMapBind" name="nameToMap"></div>
							<div class="styled-checkbox"><input type="checkbox" name="formMappingLocation" id="EmailAddress" value='EmailAddress:' class="nameToMapBind"><label for="EmailAddress">EmailAddress</label><input type="text" value="" placeholder="Name of your forms Email field" class="nameToMap nameToMapBind" name="nameToMap"></div>
							<div class="styled-checkbox"><input type="checkbox" name="formMappingLocation" id="Aux1" value='Aux1:' class="nameToMapBind"><label for="Aux1">Aux1</label><input type="text" value="" placeholder="Name of the field you want to map to Aux1" class="nameToMap nameToMapBind" name="nameToMap"></div>
						</div>
						<div class="col-md-6">
							<div class="styled-checkbox"><input type="checkbox" name="formMappingLocation" id="Aux2" value='Aux2:' class="nameToMapBind"><label for="Aux2">Aux2</label><input type="text" value="" placeholder="Name of the field you want to map to Aux2" class="nameToMap nameToMapBind" name="nameToMap"></div>
							<div class="styled-checkbox"><input type="checkbox" name="formMappingLocation" id="Aux3" value='Aux3:' class="nameToMapBind"><label for="Aux3">Aux3</label><input type="text" value="" placeholder="Name of the field you want to map to Aux3" class="nameToMap nameToMapBind" name="nameToMap"></div>
							<div class="styled-checkbox"><input type="checkbox" name="formMappingLocation" id="Aux4" value='Aux4:' class="nameToMapBind"><label for="Aux4">Aux4</label><input type="text" value="" placeholder="Name of the field you want to map to Aux4" class="nameToMap nameToMapBind" name="nameToMap"></div>
							<div class="styled-checkbox"><input type="checkbox" name="formMappingLocation" id="Aux5" value='Aux5:' class="nameToMapBind"><label for="Aux5">Aux5</label><input type="text" value="" placeholder="Name of the field you want to map to Aux5" class="nameToMap nameToMapBind" name="nameToMap"></div>
							<div class="styled-checkbox"><input type="checkbox" name="formMappingLocation" id="Aux6" value='Aux6:' class="nameToMapBind"><label for="Aux6">Aux6</label><input type="text" value="" placeholder="Name of the field you want to map to Aux6" class="nameToMap nameToMapBind" name="nameToMap"></div>
							<div class="styled-checkbox"><input type="checkbox" name="formMappingLocation" id="Aux7" value='Aux7:' class="nameToMapBind"><label for="Aux7">Aux7</label><input type="text" value="" placeholder="Name of the field you want to map to Aux7" class="nameToMap nameToMapBind" name="nameToMap"></div>
							<div class="styled-checkbox"><input type="checkbox" name="formMappingLocation" id="Aux8" value='Aux8:' class="nameToMapBind"><label for="Aux8">Aux8</label><input type="text" value="" placeholder="Name of the field you want to map to Aux8" class="nameToMap nameToMapBind" name="nameToMap"></div>
							<div class="styled-checkbox"><input type="checkbox" name="formMappingLocation" id="Aux9" value='Aux9:' class="nameToMapBind"><label for="Aux9">Aux9</label><input type="text" value="" placeholder="Name of the field you want to map to Aux9" class="nameToMap nameToMapBind" name="nameToMap"></div>
							<div class="styled-checkbox"><input type="checkbox" name="formMappingLocation" id="Aux10" value='Aux10:' class="nameToMapBind"><label for="Aux10">Aux10</label><input type="text" value="" placeholder="Name of the field you want to map to Aux10" class="nameToMap nameToMapBind" name="nameToMap"></div>
							<div class="styled-checkbox"><input type="checkbox" name="formMappingLocation" id="AuxDate1" value='AuxDate1:' class="nameToMapBind"><label for="AuxDate1">AuxDate1</label><input type="text" value="" placeholder="Name of the field you want to map to AuxDate1" class="nameToMap nameToMapBind" name="nameToMap"></div>
							<div class="styled-checkbox"><input type="checkbox" name="formMappingLocation" id="AuxDate2" value='AuxDate2:' class="nameToMapBind"><label for="AuxDate2">AuxDate2</label><input type="text" value="" placeholder="Name of the field you want to map to AuxDate2" class="nameToMap nameToMapBind" name="nameToMap"></div>
							<div class="styled-checkbox"><input type="checkbox" name="formMappingLocation" id="AuxDate3" value='AuxDate3:' class="nameToMapBind"><label for="AuxDate3">AuxDate3</label><input type="text" value="" placeholder="Name of the field you want to map to AuxDate3" class="nameToMap nameToMapBind" name="nameToMap"></div>
							<div class="styled-checkbox"><input type="checkbox" name="formMappingLocation" id="AuxDate4" value='AuxDate4:' class="nameToMapBind"><label for="AuxDate4">AuxDate4</label><input type="text" value="" placeholder="Name of the field you want to map to AuxDate4" class="nameToMap nameToMapBind" name="nameToMap"></div>
							<div class="styled-checkbox"><input type="checkbox" name="formMappingLocation" id="AuxDate5" value='AuxDate5:' class="nameToMapBind"><label for="AuxDate5">AuxDate5</label><input type="text" value="" placeholder="Name of the field you want to map to AuxDate5" class="nameToMap nameToMapBind" name="nameToMap"></div>
							<div class="styled-checkbox"><input type="checkbox" name="formMappingLocation" id="AuxDateTime1" value='AuxDateTime1:' class="nameToMapBind"><label for="AuxDateTime1">AuxDateTime1</label><input type="text" value="" placeholder="Name of the field you want to map to AuxDateTime1" class="nameToMap nameToMapBind" name="nameToMap"></div>
							<div class="styled-checkbox"><input type="checkbox" name="formMappingLocation" id="AuxDateTime2" value='AuxDateTime2:' class="nameToMapBind"><label for="AuxDateTime2">AuxDateTime2</label><input type="text" value="" placeholder="Name of the field you want to map to AuxDateTime2" class="nameToMap nameToMapBind" name="nameToMap"></div>
							<div class="styled-checkbox"><input type="checkbox" name="formMappingLocation" id="AuxDateTime3" value='AuxDateTime3:' class="nameToMapBind"><label for="AuxDateTime3">AuxDateTime3</label><input type="text" value="" placeholder="Name of the field you want to map to AuxDateTime3" class="nameToMap nameToMapBind" name="nameToMap"></div>					
						</div></div>
					</div>
				</div>
			</div>
			<div class="col-md-5 offset-md-1">
				<div class="tracking-script-code">
					<textarea name="tracking-script-code" id="tracking-script-code"></textarea>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	document.addEventListener("DOMContentLoaded", function() {
      document.body.classList.add("tracking-script");
    });
</script>
<?php
	require_once('includes/footer.php');
?> 