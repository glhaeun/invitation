<div class="modal fade" id="emailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="inviteGuestModalLabel">Share to Email</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p id="userName"></p>
                <form action="process_email.php" method="POST">
                    <input type="hidden" id="hiddenUserName" name="name" value="">
                    <div class="form-group">
                        <label for="guestEmail">Email Address</label>
                        <input type="text" class="form-control" id="guestEmail" name="guestEmail" placeholder="Enter guest email">
                    </div>
                    <div class="form-group">
                        <label for="subject" class="">Subject</label>
                        <input type="text" id="subject" required name="subject" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="message">Invitation message</label>
                        <textarea type="text" required id="message" name="message" rows="2" class="form-control md-textarea"></textarea>              
                    </div>
                    <button type="submit" name="email" class="btn btn-primary">Share</button>
                </form>
            </div>
        </div>
    </div>
</div>