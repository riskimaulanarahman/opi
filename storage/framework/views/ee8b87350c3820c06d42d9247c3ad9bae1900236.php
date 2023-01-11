<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Starter_Page'); ?>  <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


<?php $__env->startSection('pagetitle'); ?> Starter Page <?php $__env->stopSection(); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/riskimaulanarahman/Documents/www/borexstartup/resources/views/pages-starter.blade.php ENDPATH**/ ?>