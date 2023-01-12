



<?php $__env->startSection('title'); ?>
    Advance
<?php $__env->stopSection(); ?>


<?php $__env->startSection('pagetitle'); ?>
    Advance
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <?php if (isset($component)) { $__componentOriginalf808867ef4979a95de522673097ce12c1ce5d0a5 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Gridmenu::class, []); ?>
<?php $component->withName('gridmenu'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf808867ef4979a95de522673097ce12c1ce5d0a5)): ?>
<?php $component = $__componentOriginalf808867ef4979a95de522673097ce12c1ce5d0a5; ?>
<?php unset($__componentOriginalf808867ef4979a95de522673097ce12c1ce5d0a5); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\mysql\htdocs\oasys_update\resources\views/advance/index.blade.php ENDPATH**/ ?>