<?php include 'rsvpDB.php'; ?>
<form class="form-inline flexform" method="post">
						<div class="col-md-2 col-sm-2">
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="name" class="sr-only">How many people?</label>
								<input type="text" class="form-control"  name="name" id="name" placeholder="name" required>
							</div>
							<div class="form-group">
								<label>Attendance</label>
								<div>
									<label>
										<input type="radio" name="attendance" value="Yes" onclick="showInput()" required>
										Yes, I will attend
									</label>
								</div>
								<div>
									<label>
										<input type="radio" name="attendance" value="No" onclick="hideInput()" required>
										Sorry, I can't make it
									</label>
								</div>
        					</div>
							<div class="row" id="additionalInput" style="display: none;">
								<div class="col-md-4">
									<div class="form-group">
										<label for="guest">No. of guest</label>
										<input name="guest" type="number" class="form-control" placeholder="Max <?php echo isset($_GET['for']) ? $records[$index]['max'] : '5'; ?> people" min="0" max="<?php echo isset($_GET['for']) ? $records[$index]['max'] : '5'; ?>" value="" required>
                                        <div id="guestFeedback" class="invalid-feedback"></div>
									</div>
								</div>
								<div class="col-md-8">
									<div class="form-group">
										<label for="number">Phone number</label>
										<input  name="number" type="tel" pattern="[0-9]{10,12}" class="form-control" title="Please enter phone number" id="number" required>
                                        <div id="guestFeedback" class="invalid-feedback"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<button type="submit" name="attend" class="btn btn-default btn-block">Submit</button>
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

	// function validateForm() {
    //         const attendance = document.querySelector('input[name="attendance"]:checked').value;
    //         if (attendance === 'Yes') {
    //             const guestInput = document.querySelector('input[name="guest"]');
    //             const numberInput = document.querySelector('input[name="number"]');
                
    //             if (guestInput.value === '' || numberInput.value === '') {
    //                 alert('Please fill in the required fields.');
    //                 return false;
    //             }
    //         }
    //         return true; // Form submission continues if validation passes
    //     }
</script>