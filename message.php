                <form class="form-inline flexform" style="gap:20px;" method="post">
						<div class="col-md-2 col-sm-2">
						</div>
						<div class="col-md-6 mb-5"  style="width:80%;">
								<input style="text-align: center; width: 100%"  type="text" class="form-control"  name="name" id="name" placeholder="Enter Name" required
								<?php if (!$_SESSION['guestMode'] && isset($_SESSION['user'])) : ?>
									value="<?= $_SESSION['user'] ?>"
								<?php endif; ?>>
						</div>

                        <div class="col-md-6 mb-5" style="width:80%;">
								<textarea style="text-align: center; width: 100%"  type="text" class="form-control" rows="5"  name="message" id="message" placeholder="Enter Message" required></textarea>
						</div>

						<div class="col-md-4">
							<button type="submit" name="post" class="btn btn-default btn-block">Submit</button>
						</div>
						<div class="col-md-2 col-sm-2"></div>	
					</form>

                    <?php

if (isset($_POST['post'])) {
    $time = date("Y-m-d H:i:s"); // Current date and time
    $name = $_POST['name'];
    $commentText = $_POST['message'];

	$query = "INSERT INTO message (name, message, date) VALUES (?, ?, ?)";
    $statement = $connect->prepare($query);
    $statement->execute([$name, $commentText, $time]);
   
}
?>