<div class="modal fade" id="withdrawCommissionModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <form action="<?php echo e(route('request.withdraw')); ?>" method="POST">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Withdraw</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <?php echo e(csrf_field()); ?>

                    <div class="form-group">
                        <label>Amount to Withdraw</label>
                        <?php if(Auth::user()->type == 'player'): ?>
                            <input type="number" max="<?php echo e(Auth::user()->wallet->balance); ?>" class="form-control" name="amount" required>
                        <?php else: ?>
                            <input type="number" max="<?php echo e(Auth::user()->wallet->commission); ?>" class="form-control" name="amount" required>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label>Withdraw To</label>
                        <select name="withdraw_method" class="form-control select" required>
                            <option value="gcash">Gcash</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Account Name</label>
                        <input type="text" max="" class="form-control" name="account_name" required>
                    </div>
                    <div class="form-group">
                        <label>Account Number</label>
                        <input type="text" max="" class="form-control" name="account_number" required>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php /**PATH /home/u428933156/domains/swcslasher.online/public_html/dmiphonl_source/resources/views/partials/modals/_widthdrawCommission.blade.php ENDPATH**/ ?>