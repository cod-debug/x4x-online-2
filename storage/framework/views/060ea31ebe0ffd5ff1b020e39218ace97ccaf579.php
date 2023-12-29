<?php $__env->startSection('styles'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong>PLAYERS</strong>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-condensed">
                            <thead>
                                <th>Name</th>
                                <th>Contact</th>
                                <th>Username</th>
                                <th>Wallet Balance</th>
                                <th>Action/s</th>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $direct_players; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($dp->name); ?></td>
                                        <td><?php echo e($dp->contact_number); ?></td>
                                        <td><?php echo e($dp->username); ?></td>
                                        <td><?php echo e(floor($dp->wallet->balance*100)/100); ?></td>
                                        <td>
                                            <a type="button" class="btn btn-secondary btn-sm" href="<?php echo e(route('wallet.history', ['id'=>$dp->id])); ?>">WALLET HISTORY</a>
                                            <a type="button" class="btn btn-warning btn-sm" href="<?php echo e(route('player.events', ['id'=>$dp->id])); ?>">BETTING HISTORY</a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
              </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<?php echo $__env->make('partials._jsvariables', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script src="<?php echo e(asset('js/main.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u428933156/domains/swcslasher.online/public_html/dmiphonl_source/resources/views/admin/downlines/players.blade.php ENDPATH**/ ?>