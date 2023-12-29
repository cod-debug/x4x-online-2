<?php $__env->startSection('styles'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong>LOAD HISTORY</strong>
                </div>
                <div class="card-body">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#load">CASH INS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#withdraw">CASH OUTS</a>
                        </li>
                    </ul>
                    <div class="tab-content mt-3">
                        <div class="tab-pane active" id="load">
                            <div class="table-responsive">
                                <table class="table table-bordered table-condensed">
                                    <thead>
                                        <th>#</th>
                                        <th>TO</th>
                                        <th>FROM</th>
                                        <th>AMOUNT</th>
                                        <th>BALANCE</th>
                                        <th>REMARKS</th>
                                        <th>NOTES</th>
                                        <th>DATE/TIME</th>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $loads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $n): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($i+1); ?></td>
                                                <td><?php echo e(($n->user_to)); ?></td>
                                                <td><?php echo e(($n->user_from)); ?></td>
                                                <td><?php echo e(bcdiv($n->amount,1,2)); ?></td>
                                                <td><?php echo e(bcdiv($n->ending_balance,1,2)); ?></td>
                                                <td><?php echo e(($n->remarks)); ?></td>
                                                <td><?php echo e(($n->user_notes)); ?></td>
                                                <td><?php echo e(date('m/d/Y h:i:s A',strtotime($n->created_at))); ?></td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane" id="withdraw">
                            <div class="table-responsive">
                                <table class="table table-bordered table-condensed">
                                    <thead>
                                        <th>#</th>
                                        <th>FROM</th>
                                        <th>TO</th>
                                        <th>AMOUNT</th>
                                        <th>REMARKS</th>
                                        <th>NOTES</th>
                                        <th>DATE/TIME</th>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $withdraws; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $n): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($i+1); ?></td>
                                                <td><?php echo e(($n->user_to)); ?></td>
                                                <td><?php echo e(($n->user_from)); ?></td>
                                                <td><?php echo e(floor($n->amount*100)/100); ?></td>
                                                <td><?php echo e(($n->remarks)); ?></td>
                                                <td><?php echo e(($n->user_notes)); ?></td>
                                                <td><?php echo e(date('m/d/Y h:i:s A',strtotime($n->created_at))); ?></td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script>
    $(document).ready(function () {
        $('.table').DataTable();

        $('tr').on('click','.btn-approve',function(){
            let x = confirm('Approve this load request?')
            let id = $(this).data('id');
            let url = $(this).data('url');
            if(x){
                window.location.href = url;
            }
        })
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u428933156/domains/swcslasher.online/public_html/dmiphonl_source/resources/views/admin/load/index.blade.php ENDPATH**/ ?>