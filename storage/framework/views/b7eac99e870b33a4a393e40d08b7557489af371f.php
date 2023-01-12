<header id="page-topbar" class="isvertical-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="index" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="<?php echo e(URL::asset('assets/images/logo-dark-sm.png')); ?>" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="<?php echo e(URL::asset('assets/images/logo-dark-sm.png')); ?>" alt="" height="22">
                    </span>
                </a>

                <a href="index" class="logo logo-light">
                    <span class="logo-lg">
                        <img src="<?php echo e(URL::asset('assets/images/logo-light.png')); ?>" alt="" height="22">
                    </span>
                    <span class="logo-sm">
                        <img src="<?php echo e(URL::asset('assets/images/logo-light-sm.png')); ?>" alt="" height="22">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item vertical-menu-btn topnav-hamburger">
                <span class="hamburger-icon open">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </button>

            <div class="d-none d-sm-block ms-3 align-self-center">
                <h4 class="page-title"><?php echo $__env->yieldContent('pagetitle'); ?></h4>
            </div>

        </div>

        <div class="d-flex">
            <div class="dropdown d-inline-block d-lg-none ms-2">
                <button type="button" class="btn header-item" id="page-header-search-dropdown" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i data-feather="search" class="icon-lg"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                    aria-labelledby="page-header-search-dropdown">

                    <form class="p-3">
                        <div class="form-group m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search ..."
                                    aria-label="Search Result">

                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            

            


            

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon right-bar-toggle" id="right-bar-toggle-v">
                    <i class="icon-sm" data-eva="settings-outline"></i>
                </button>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item user text-start d-flex align-items-center"
                    id="page-header-user-dropdown-v" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="<?php if(Auth::user()->avatar != ''): ?><?php echo e(URL::asset('images/' . Auth::user()->avatar)); ?><?php else: ?><?php echo e(URL::asset('assets/images/users/avatar-1.jpg')); ?><?php endif; ?>" alt="Header Avatar">
                </button>
                <div class="dropdown-menu dropdown-menu-end pt-0">
                    <div class="p-3 border-bottom">
                        <h6 class="mb-0"><?php echo e(Auth::user()->name); ?></h6>
                        <p class="mb-0 font-size-11 text-muted"><?php echo e(Auth::user()->email); ?></p>
                    </div>
                    <a class="dropdown-item mt-2" href="contacts-profile"><i
                            class="mdi mdi-account-circle text-muted font-size-16 align-middle me-1"></i> <span
                            class="align-middle">Profile</span></a>
                    
                    
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"><i
                            class="mdi mdi-account text-muted font-size-16 align-middle me-1"></i> <span
                            class="align-middle">Balance : <b>12</b></span></a>
                    
                    
                    
                    <a class="dropdown-item" href="pages-faqs"><i
                            class="mdi mdi-lifebuoy text-muted font-size-16 align-middle me-1"></i> <span
                            class="align-middle">Help</span></a>
                    <a class="dropdown-item " href="javascript:void();"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                            class="bx bx-power-off font-size-16 align-middle me-1"></i> <span
                            key="t-logout"><?php echo app('translator')->get('translation.Logout'); ?></span></a>
                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                        <?php echo csrf_field(); ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
<?php /**PATH D:\mysql\htdocs\borexstartup\resources\views/layouts/topbar.blade.php ENDPATH**/ ?>