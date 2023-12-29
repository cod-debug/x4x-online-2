<script>
    var statusUpdateURL = "<?php echo e(route('change.status')); ?>";
    var token = "<?php echo e(Session::token()); ?>";
    var convertURL = "<?php echo e(route('convert.account')); ?>";
    var subUser = "<?php echo e(getSubUser(Auth::user()->type)); ?>";
</script>
<?php /**PATH /home/u428933156/domains/swcslasher.online/public_html/dmiphonl_source/resources/views/partials/_jsvariables.blade.php ENDPATH**/ ?>