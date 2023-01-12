<?php $__env->startSection('title'); ?>
    Dashboard
<?php $__env->stopSection(); ?>

<?php $isHr = true ?>
<?php if($isHr): ?>
    <?php if (isset($component)) { $__componentOriginal0ec1267fc28d6a98ac64be61eaa8884c10c1501b = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Dashboard::class, ['title' => 'HR']); ?>
<?php $component->withName('dashboard'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0ec1267fc28d6a98ac64be61eaa8884c10c1501b)): ?>
<?php $component = $__componentOriginal0ec1267fc28d6a98ac64be61eaa8884c10c1501b; ?>
<?php unset($__componentOriginal0ec1267fc28d6a98ac64be61eaa8884c10c1501b); ?>
<?php endif; ?>
<?php else: ?>
    <?php if (isset($component)) { $__componentOriginal0ec1267fc28d6a98ac64be61eaa8884c10c1501b = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Dashboard::class, ['title' => 'OAsys']); ?>
<?php $component->withName('dashboard'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0ec1267fc28d6a98ac64be61eaa8884c10c1501b)): ?>
<?php $component = $__componentOriginal0ec1267fc28d6a98ac64be61eaa8884c10c1501b; ?>
<?php unset($__componentOriginal0ec1267fc28d6a98ac64be61eaa8884c10c1501b); ?>
<?php endif; ?>
<?php endif; ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\mysql\htdocs\oasys_update\resources\views/dashboard/index.blade.php ENDPATH**/ ?>