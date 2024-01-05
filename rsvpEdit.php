<?php include 'rsvpGet.php'; 
include 'rsvpDB.php';?>
<form class="form-inline flexform" method="post">
						<div class="col-md-2 col-sm-2">
						</div>
						<div class="col-md-6" style="color:white;">
							<div class="form-group">
								<label for="name" class="sr-only">How many people?</label>
								<input type="text" class="form-control"  name="name" id="name" placeholder="name" required disabled value="<?=$name ?>" >
							</div>
							<div class="form-group">
								<label>Attendance</label>
								<div>
									<label>
										<input type="radio" name="attendance" value="Yes" onclick="showInput()" required disabled  <?php if ($attendance === 'Yes') echo 'checked' ?>>
										Yes, I will attend 
									</label>
								</div>
								<div>
									<label>
										<input type="radio" name="attendance" value="No" onclick="hideInput()" required disabled <?php if ($attendance === 'No') echo 'checked' ?>>
										Sorry, I can't make it
									</label>
								</div>
        					</div>
							<div class="row" id="additionalInput" style="<?php if ($attendance === 'Yes') echo 'display: block'; else echo 'display: none'; ?>">
								<div class="col-md-4">
									<div class="form-group">
										<label for="guest">No. of guest</label>
										<input name="guest" type="number" class="form-control" value="<?=$guest ?>" disabled placeholder="Max <?php echo isset($_GET['for']) ? $records[$index]['max'] : '5'; ?> people" min="0" max="<?php echo isset($_GET['for']) ? $records[$index]['max'] : '5'; ?>" value="" required>
                                        <div id="guestFeedback" class="invalid-feedback"></div>
									</div>
								</div>
								<div class="col-md-8">
									<div class="form-group">
										<label for="number">Phone number</label>
										<input  name="number" type="tel" pattern="[0-9]{10,12}" value="<?=$number ?>"  disabled class="form-control" title="Please enter phone number" id="number" required>
                                        <div id="guestFeedback" class="invalid-feedback"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4" style="display: flex; align-items:center;">
                        <button type="button" onclick="enableInputs()" class="btn btn-default btn-block" name="enable">Edit</button>
							<input type="submit" name="edit" class="btn btn-default btn-block" disabled value="Save">
						</div>
						<div class="col-md-2 col-sm-2"></div>	
					</form>

<script>
	function showInput() {
        document.getElementById('additionalInput').style.display = 'block';
		
    }

    function hideInput() {
        document.getElementById('additionalInput').style.display = 'none';
		document.querySelector('input[name="guest"]').removeAttribute('required');
        document.querySelector('input[name="number"]').removeAttribute('required');
    }

    function enableInputs() {
    document.getElementById('name').removeAttribute('disabled');
    document.querySelector('input[name="attendance"][value="Yes"]').removeAttribute('disabled');
    document.querySelector('input[name="attendance"][value="No"]').removeAttribute('disabled');

    document.querySelector('button[name="enable"]').style.display = 'none';

    var inputFields = document.querySelectorAll('input, textarea'); // Select all input and textarea fields
    inputFields.forEach(input => {
        input.removeAttribute('disabled');
    });

    // var attendanceRadios = document.querySelectorAll('input[name="attendance"]');
    // attendanceRadios.forEach(radio => {
    //     radio.checked = false;
    // });
}

	
</script>