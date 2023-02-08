



<?php $__env->startSection('title'); ?>
    <?php echo e($data['title']); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('pagetitle'); ?>
    <?php echo e($data['title']); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <?php if($data['menu'] != null): ?>
        <div class="topnav">
            <div class="container-fluid">
                <nav class="navbar navbar-light navbar-expand-lg topnav-menu">
                    <div class="collapse navbar-collapse" id="topnav-menu-content">
                        <ul class="navbar-nav">
                            <?php $__currentLoopData = $data['menu']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($data['menu'][$key]['submenu'] == null): ?>
                                    <li class="nav-item">
                                        <a class="nav-link dropdown-toggle arrow-none" href="<?php echo e($data['menu'][$key]['route']); ?>"
                                            id="topnav-dashboard" role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="icon nav-icon" data-eva="<?php echo e($data['menu'][$key]['icon']); ?>"></i>
                                            <span data-key="t-dashboards"><?php echo e($data['menu'][$key]['title']); ?></span>
                                        </a>
                                    </li>
                                <?php else: ?>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-dashboard" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icon nav-icon" data-eva="<?php echo e($data['menu'][$key]['icon']); ?>"></i>
                                            <span data-key="t-dashboards"><?php echo e($data['menu'][$key]['title']); ?></span>
                                            <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-dashboard">
                                            <?php $__currentLoopData = $data['menu'][$key]['submenu']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keysub => $itemsub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <a href="<?php echo e($data['menu'][$key]['submenu'][$keysub]['route']); ?>"
                                                class="dropdown-item"
                                                data-key="t-ecommerce">
                                                <i class="icon nav-icon" data-eva="<?php echo e($data['menu'][$key]['submenu'][$keysub]['icon']); ?>"></i>
                                                <span data-key="t-dashboards"><?php echo e($data['menu'][$key]['submenu'][$keysub]['title']); ?></span>
                                            </a>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </li>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    <?php endif; ?>

    <div class="card <?php echo e($data['menu'] != null ? 'mt-3' : null); ?>">
        <div class="card-body">
            <div class="d-flex align-items-center">
                <div class="flex-shrink-0 me-3">
                    <div class="avatar">
                        <div class="avatar-title rounded bg-primary bg-gradient">
                            <i class="fill-white" data-eva="<?php echo e($data['icon']); ?>"></i>
                        </div>
                    </div>
                </div>
                <div class="flex-grow-1">
                    <p class="text-muted mb-1"><?php echo e($data['module']); ?></p>
                    <h4 class="mb-0">List <?php echo e($data['title']); ?></h4>
                </div>

                
            </div>
        </div>

        <div class="card-body" style="padding: 10px; !important">
            <div id="gridContainer" style="height: 600px;"></div>
        </div>

    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>
        // var pathname = window.location.pathname;
        // console.log(pathname);
        // jsmainpath(pathname);
        // if(pathname == '/module') {
        //     $.getScript('assets/js/grid/module.js');
        // } else if(pathname == '/useraccess') {
        //     $.getScript('assets/js/grid/useraccess.js');
        // } else if(pathname == '/sidemenu') {
        //     $.getScript('assets/js/grid/sidemenu.js');
        // } else if(pathname == '/icons') {
        //     $.getScript('assets/js/grid/icons.js');
        // }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\riski_maulana\www\oasysv2\resources\views/grid/index.blade.php ENDPATH**/ ?>