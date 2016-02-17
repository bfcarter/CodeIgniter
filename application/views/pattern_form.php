
<form method="post">
    <div>
        <label for=  "pattern_id"> Pattern name</label>
        <select name= "pattern_id">
            <?php
            foreach ($pattern_form_options as $pattern_id => $pattern_name) {
                echo '<option value="' . html_escape($pattern_id) . '">' . html_escape($pattern_name) . '</option>';
                }
                ?>
            </select>
        </div>
        <div>
            <label for=""
</form>


