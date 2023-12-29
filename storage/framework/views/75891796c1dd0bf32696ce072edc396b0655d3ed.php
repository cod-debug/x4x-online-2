<?php $__env->startSection('styles'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <strong>EDIT GAME DATA</strong>
                </div>
                <div class="card-body">
                    <form action="<?php echo e(route('update.game', ['id'=>$game->id])); ?>" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12">
                                <?php echo e(csrf_field()); ?>

                                <div class="form-group">
                                    <label>Display Name</label>
                                    <input type="text" name="display_name" value="<?php echo e($game->display_name); ?>" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label>Game Type</label>
                                    <select name="type" class="form-control" required>
                                        <option value="">--Select Game Type--</option>
                                        <option value="commission" <?php echo e($game->type == 'commission' ? 'selected' : ''); ?>>Commission</option>
                                        <option value="banker" <?php echo e($game->type == 'banker' ? 'selected' : ''); ?>>Banker</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="">Banner</label>
                                    <div class="input-group mb-3">
                                        <div class="custom-file">
                                          <input type="file" onchange="preview()" class="custom-file-input" name="thumbnail" aria-describedby="inputGroupFileAddon01">
                                          <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Plasada (%)</label>
                                    <input type="number" value="<?php echo e($game->plasada); ?>" step="0.01" name="plasada" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status" class="form-control">
                                        <option value="coming_soon" <?php echo e($game->status == 'coming_soon' ? 'selected' : ''); ?>>Coming Soon</option>
                                        <option value="open" <?php echo e($game->status == 'open' ? 'selected' : ''); ?>>Open</option>
                                        <option value="closed" <?php echo e($game->status == 'closed' ? 'selected' : ''); ?>>Closed</option>
                                    </select>
                                </div>

                                <button class="btn btn-success btn-sm float-right">UPDATE GAME</button>
                            </div>
                        </div>
                    </form>
                </div>
              </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <strong>Banner Preview</strong>
                </div>
                <div class="card-body">
                    <img id="frame" class="img-thumbnail" src="<?php echo e(asset($game->banner)); ?>" alt="">
                </div>
              </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script>
    $(document).ready(function () {
        $('.table').DataTable();
    });

    function preview() {
        frame.src=URL.createObjectURL(event.target.files[0]);
    }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u428933156/domains/swcslasher.online/public_html/dmiphonl_source/resources/views/admin/games/edit.blade.php ENDPATH**/ ?>