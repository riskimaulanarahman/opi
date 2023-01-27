<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="/" class="logo logo-dark">
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
                    <?php $__currentLoopData = $sidemenu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sidemenu_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($sidemenu_item['sequence_id'] == $sequenceitem['id'] && $sidemenu_item['is_active'] && $sidemenu_item['parent_id'] == null): ?>
                            <li>
                                <a href="<?php echo e(!$sidemenu_item['is_parent'] ? $sidemenu_item['route'] : '#'); ?>" class="<?php echo e($sidemenu_item['is_parent'] ? 'has-arrow' : ''); ?>">
                                    <i class="icon nav-icon" data-eva="shopping-bag-outline"></i>
                                    <span class="menu-item" data-key="t-ecommerce"><?php echo e($sidemenu_item['title']); ?></span>
                                </a>
                                <?php if($sidemenu_item['is_parent']): ?>
                                    <ul class="sub-menu" aria-expanded="false">
                                        
                                            <li><a href="/">
                                                <i class="icon nav-icon" data-eva="grid-outline"></i>
                                                <span class="menu-item" data-key="t-dashboards">
                                                    test
                                                </span>
                                                <span class="badge rounded-pill bg-primary">3</span>
                                            </a></li>
                                            
                                                
                                            
                                        
                                    </ul>
                                <?php endif; ?>
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
                </script> &copy; Borex.
            </p>
            <p class="mb-0">Design & Develop by Themesbrand</p>
        </div>
    </div>
</div>
<!-- Left Sidebar End --><?php /**PATH D:\riski_maulana\www\oasysv2\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>