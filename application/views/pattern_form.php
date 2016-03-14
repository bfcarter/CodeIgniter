<form method="post">
	<div>
		<label for= "patternbook_id"> Pattern Name</label>
		<select name="patternbook_id">
			<?php
			foreach ($patternbook_form_options as $patternbook_id => $patternbook_name) {
			echo '<option value=" ' . html_escape($patternbook_id) . '">' . html_escape($patternbook_name) . '</option>';
			}
			?>
		</select>
	</div>
	<div>
		<label for="addpattern_number"> Pattern Number</label>
		<input type="text" name="addpattern_number" value=" " />
	</div>
	<div>
		<label for="addpattern_date_publication"> Date Published</label>
		<input type="text" name="addpattern_Date_publication" value= " "/>
	</div>
	<div>
		<input type="submit" value="Save"/>
	</div>
</form>
		


</body>
</html>
