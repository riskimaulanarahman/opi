

    <body class="content" id="bodycontent" 
        <?php $__currentLoopData = $themes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $theme): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            data-layout-mode="<?php echo e($theme->layout_mode); ?>"
            data-topbar="<?php echo e($theme->layout_mode); ?>"
            data-layout-size="<?php echo e($theme->layout_width); ?>"
            data-layout-scrollable="<?php echo e($theme->layout_position); ?>"
            data-sidebar-size="<?php echo e($theme->sidebar_size); ?>"
            data-sidebar="<?php echo e(($theme->layout_mode == 'dark') ? $theme->layout_mode : $theme->sidebar_color); ?>"
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    >






<?php /**PATH /Users/riskimaulanarahman/Documents/www/odpcustomer/resources/views/layouts/body.blade.php ENDPATH**/ ?>