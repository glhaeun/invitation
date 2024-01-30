<?php include 'rsvpDB.php'; ?>
<form class="form-inline flexform" method="post">
						<div class="col-md-2 col-sm-2">
						</div>
						<div class="col-md-6" style="color:white;">
							<div class="form-group">
								<label for="name" class="sr-only">How many people?</label>
								<?php 
									if($_SESSION['guestMode']){
										?>
										<input type="text" class="form-control"  name="name" id="name" placeholder="name" disabled>
										<?php
									} else {
										?>
										<input type="text" class="form-control"  name="name" id="name" placeholder="name" required>
										<?php
									}
								?>
							</div>
							<div class="form-group">
								<label>Attendance</label>
								<div>
									<label>
									<?php 
										if($_SESSION['guestMode']){
											?>
											<input type="radio" name="attendance" value="Yes" onclick="showInput()" disabled>
											<?php
										} else {
											?>
											<input type="radio" name="attendance" value="Yes" onclick="showInput()" required>
											<?php
										}
									?>
										Yes, I will attend
									</label>
								</div>
								<div>
									<label>
									<?php 
										if($_SESSION['guestMode']){
											?>
											<input type="radio" name="attendance" value="No" onclick="hideInput()" disabled>
											<?php
										} else {
											?>
											<input type="radio" name="attendance" value="No" onclick="hideInput()" required>
											<?php
										}
									?>
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
									<?php 
										if($_SESSION['guestMode']){
											?>
											<input type="submit" name="attend" class="btn btn-default btn-block" value="Submit" disabled>
											<?php
										} else {
											?>
												<input type="submit" name="attend" class="btn btn-default btn-block" value="Submit">
											<?php
										}
									?>
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

</script>