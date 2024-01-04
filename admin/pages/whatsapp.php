<div class="modal fade" id="whatsappModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="inviteGuestModalLabel">Share to WA</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p id="nameWA"></p>
                <form action="process_whatsapp.php" method="POST">
                    <input type="hidden" id="hiddenNameWA" name="name" value="">
                    <div class="form-group">
                        <label for="guestWA">WA number (+ kode negara)</label>
                        <input type="text" class="form-control" id="guestWA" name="guestWA" placeholder="Enter guest number">
                    </div>
                    <div class="form-group">
                        <label for="message">Invitation message</label>
                        <textarea type="text" required id="message" name="message" rows="5" class="form-control md-textarea"></textarea>              
                    </div>
                    <div class="form-group">
                        <label for="message">Invitation Link</label>
                        <input type="text" class="form-control" id="guestWA" name="guestWA" placeholder="link" disabled>              
                    </div>
                    <button type="submit" name="whatsapp" class="btn btn-primary">Share</button>
                </form>
            </div>
        </div>
    </div>
</div>