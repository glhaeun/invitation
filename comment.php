<?php
// Function to sanitize input data
function sanitizeInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>


<form class="form-inline flexform" style="display: flex; flex-direction: column; align-item: center;" method="post" >
	<div class="form-group" style="margin: 8px 0; width: 39%">
		<input type="text" name="name" placeholder="Name" style="text-align: center; width: 100%" required>
	</div>
	<div class="form-group" style="margin: 8px 0;">
        <textarea name="comment" rows="4" cols="50" placeholder="Wishes" style="text-align: center;" required></textarea>
	</div>
    <div class="col-md-4 col-sm-4" style="margin: 0px 0px 80px 0px;">
		<button type="submit" name="post" onClick="" style="width: 100%; margin: 0px;" class="btn btn-default btn-block">Post</button>
	</div>
</form>

