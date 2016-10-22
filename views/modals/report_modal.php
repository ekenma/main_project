
<div id="reportModal" class="modal fade" role="dialog">
    <div class="modal-dialog padding-all-15">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header padding-all-15">
                <button type="button" class="close" data-dismiss="modal" title="Close Modal">&times;</button>
                <h4 class="modal-title">Report Advertisement</h4>
            </div>
            <div class="modal-body padding-all-15 row-centered">
                <img src="./assests/images/web_logo_square.png" class="img-responsive col-centered" style="width: 100px; height: auto"/>
                <div style="width: 100%; height: auto">
                    <form action="" method="post" style="margin-top: 10px; text-align: left">
                        <div class="form-group">
                            <label for="reason">Reason</label>
                            <select name="Reason" class="form-control" required>
                                <option value="">Reason</option>
                                <option value="Unvailable">Unavailable Advertisement</option>
                                <option value="Fraud">Fraud</option>
                                <option value="Duplicate">Duplicate</option>
                                <option value="Spam">Spam</option>
                                <option value="Unsuitable">Unsuitable</option>
                                <option value="Wrong">Wrong Category</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Your E-mail</label>
                            <input type="email" class="form-control" required placeholder="email@you.com *"/>
                        </div>
                        <div class="form-group">
                            <label>Message</label>
                            <textarea class="form-control" placeholder="Message *" required></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-default btn-report">SUBMIT</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer padding-all-15">
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
