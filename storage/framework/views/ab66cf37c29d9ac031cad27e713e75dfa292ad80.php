<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="index" class="logo logo-dark">
            <span class="logo-sm">
                
                <b style="font-size: 30px;">O</b>
            </span>
            <span class="logo-lg">
                
                <b style="font-size: 30px;">OASys</b>
            </span>
        </a>

        <a href="index" class="logo logo-light">
            <span class="logo-lg">
                
                <b style="font-size: 30px;">OASys</b>
            </span>
            <span class="logo-sm">
                
                <b style="font-size: 30px;">O</b>
            </span>
        </a>
    </div>

    <button type="button" class="btn btn-sm px-3 header-item vertical-menu-btn topnav-hamburger">
        <span class="hamburger-icon">
            <span></span>
            <span></span>
            <span></span>
        </span>
    </button>

    <div data-simplebar class="sidebar-menu-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->

            <ul class="metismenu list-unstyled" id="side-menu">
                <?php $__currentLoopData = $sequence; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sequenceitem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="menu-title" data-key="t-applications"><?php echo e($sequenceitem['title']); ?></li>
                    <?php $__currentLoopData = $sidebar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($item['group'] == $sequenceitem['id']): ?>
                            <li>
                                <a href="javascript: void(0);" class="<?php echo e($item['is_parent'] ? 'has-arrow' : ''); ?>">
                                    <i class="icon nav-icon" data-eva="shopping-bag-outline"></i>
                                    <span class="menu-item" data-key="t-ecommerce"><?php echo e($item['title']); ?></span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <?php $__currentLoopData = $sidebar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subitem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($item['id'] === $subitem['parent_id']): ?>
                                            <li>
                                                <a href="javascript: void(0);">
                                                    <i class="icon nav-icon" data-eva="grid-outline"></i>
                                                    <span class="menu-item" data-key="t-dashboards"><?php echo e($subitem['title']); ?></span>
                                                    <span class="badge rounded-pill bg-primary">3</span>
                                                </a>
                                            </li>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>

        <!-- Sidebar -->
        <div class="p-3 px-4 sidebar-footer">
            <p class="mb-1 main-title">
                <script>
                    document.write(new Date().getFullYear())
                </script> &copy; <b>OAsys</b>.
            </p>
            <p class="mb-0">Developed by <b>KF Planning</b></p>
        </div>
    </div>
</div>
<!-- Left Sidebar End --><?php /**PATH D:\mysql\htdocs\oasys_update\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>