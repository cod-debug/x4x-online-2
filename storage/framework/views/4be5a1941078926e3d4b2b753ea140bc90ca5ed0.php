<?php $__env->startSection('styles'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong>GAMES LIST</strong>
                    <a class="btn btn-success float-right" href="<?php echo e(route('create.game')); ?>">CREATE NEW GAME</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-condensed">
                        <thead>
                            <th>Name</th>
                            <th>Banner</th>
                            <th>Game URL</th>
                            <th>PLASADA (%)</th>
                            <th>Status</th>
                            <th>Action/s</th>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $games; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $game): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e(strtoupper($game->name)); ?></td>
                                    <td><img src="<?php echo e(asset($game->banner)); ?>" width="150" height="50" alt=""></td>
                                    <td><?php echo e(strtoupper($game->url)); ?></td>
                                    <td><?php echo e(strtoupper($game->plasada)); ?>%</td>
                                    <td><?php echo e(strtoupper($game->status)); ?></td>
                                    <td>
                                        <a href="<?php echo e(route('edit.game', $game->id)); ?>" class="btn btn-success btn-sm">EDIT</a>
                                        <button class="btn btn-danger btn-sm btn-delete" data-url="<?php echo e(route('delete.game', ['id'=>$game->id])); ?>">DELETE</button>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
              </div>
        </div>
    </div>
    <?php echo $__env->make('partials.modals._depositAmount', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<?php echo $__env->make('partials._jsvariables', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script src="<?php echo e(asset('js/main.js')); ?>"></script>
<script>
    $('tr').on('click','.btn-delete',function(){
        let url = $(this).data('url');
        Swal.fire({
        title: 'Do you want to delete this game?',
        showCancelButton: true,
        confirmButtonText: 'Yes',
        cancelButtonText: `No`,
        }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                window.location.href = url;
            }
        })
    })
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\swcslasher\resources\views/admin/games/index.blade.php ENDPATH**/ ?>