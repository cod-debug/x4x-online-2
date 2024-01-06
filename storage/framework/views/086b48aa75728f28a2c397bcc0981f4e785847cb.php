<?php $__env->startSection('styles'); ?>
<style>
    .completed{
        color: #dc3545;
        font-weight: bolder;
    }

    .open{
        color: #28a745;
        font-weight: bolder;
    }
    .closed{
        color: #ffc107;
        font-weight: bolder;
    }
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong>CREATED EVENTS</strong>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-condensed">
                        <thead>
                            <th>ID</th>
                            <th>Event Name</th>
                            <th>Fight URL</th>
                            <th>Date Created</th>
                            <th>Status</th>
                            <th>Action/s</th>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($event->event_id); ?></td>
                                <td><?php echo e($event->name); ?></td>
                                <td><?php echo e($event->live_url); ?></td>
                                <td><?php echo e(date('m/d/Y',strtotime($event->created_at))); ?></td>
                                <td><span class="<?php echo e($event->status); ?>"><?php echo e(strtoupper($event->status)); ?></span></td>
                                <td>
                                    <a href="<?php echo e(route('show.event', $event->id)); ?>"
                                        class="btn btn-primary btn-sm">View</a>
                                    <?php if($event->game_id == 1): ?>
                                    <?php elseif($event->game_id == 17): ?>
                                        
                                    <?php elseif($event->game_id == 14): ?>
                                        
                                    <?php elseif($event->game_id == 26): ?>
                                        
                                    <?php elseif($event->game_id == 27): ?>
                                        
                                    <?php else: ?>
                                        
                                    <?php endif; ?>

                                    <?php if($event->status != 'completed'): ?>
                                        <a href="<?php echo e(route('edit.event', $event->id)); ?>"
                                            class="btn btn-success btn-sm">Edit</a>
                                    <?php endif; ?>
                                    
                                    
                                    <a href="<?php echo e(route('show.fights', $event->id)); ?>"
                                        class="btn btn-warning btn-sm">Fights</a>

                                    <?php if(Auth::user()->type == 'super-admin'): ?>
                                        <button data-url="<?php echo e(route('delete.event', $event->id)); ?>"
                                            data-status="<?php echo e($event->status); ?>"
                                            class="btn btn-danger btn-del-event btn-sm">Delete</button>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
              </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>

<script>
    $(document).ready(function () {
        $('.table').DataTable();
        $('.btn-del-event').on('click',function(){
            let url = $(this).data('url');
            Swal.fire({
                title: 'Are you sure you want to delete this event?',
                text: "",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href=url;
                }
            })
        })
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\swcslasher\resources\views/admin/events/index.blade.php ENDPATH**/ ?>