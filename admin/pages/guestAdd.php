<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="inviteGuestModalLabel">Invite Guest</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="process_invite.php" method="POST">
                    <div class="form-group">
                        <label for="guestName">Name</label>
                        <input type="text" class="form-control" id="guestName" name="guestName" placeholder="Enter guest name">
                    </div>
                    <!-- <div class="form-group">
                        <label for="guestEmail">Email</label>
                        <input type="email" class="form-control" id="guestEmail" name="guestEmail" placeholder="Enter guest email">
                    </div> -->
                    <button type="submit" name="invite" class="btn btn-primary">Send Invitation</button>
                </form>
            </div>
        </div>
    </div>
</div>