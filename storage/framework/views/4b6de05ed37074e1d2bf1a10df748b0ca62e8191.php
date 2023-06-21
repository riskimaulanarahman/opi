
<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Dashboards'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php $__env->startSection('pagetitle'); ?> <?php echo e($employee->FullName); ?>, <small>Welcome to your Dashboard.</small> <?php $__env->stopSection(); ?>
<div class="row">
    <div class="col-xxl-9">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 me-3">
                                <div class="avatar">
                                    <div class="avatar-title rounded bg-primary bg-gradient">
                                        <i data-eva="shopping-bag" class="fill-white"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <p class="text-muted mb-1">Pending Submissions</p>
                                <h4 class="mb-0">1</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
            <div class="col-xl-6 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 me-3">
                                <div class="avatar">
                                    <div class="avatar-title rounded bg-primary bg-gradient">
                                        <i data-eva="pie-chart-2" class="fill-white"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <p class="text-muted mb-1">Need Your Approval</p>
                                <h4 class="mb-0">2</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
            
            <!-- end col -->
        </div>
        <!-- end row -->

        <div class="row">
            

            

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-start">
                            <div class="flex-grow-1">
                                <h5 class="card-title mb-3">List of Pending Submissions</h5>
                            </div>
                        </div>

                        <div class="mx-n4" data-simplebar style="max-height: 296px;">
                            <ul class="list-unstyled mb-0">
                                <li class="px-4 py-3">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar-sm">
                                                <div class="avatar-title bg-primary bg-gradient rounded">
                                                    #1
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-muted mb-1 text-truncate">Next Approval
                                            </p>
                                            <div class="fw-semibold font-size-15">Department Head : Fransisco</div>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <h5
                                                class="font-size-14 mb-0 text-truncate w-xs bg-info p-2 rounded text-center">
                                                Advance/IHM/2023/01/0001</h5>
                                        </div>
                                    </div>
                                </li>
                        </div>
                    </div>
                </div>
                <!-- end card -->
            </div>

            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-start">
                            <div class="flex-grow-1">
                                <h5 class="card-title mb-3">List of Need your Approval</h5>
                            </div>
                        </div>

                        <div class="mx-n4" data-simplebar style="max-height: 296px;">
                            <ul class="list-unstyled mb-0">
                                <li class="px-4 py-3">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar-sm">
                                                <div class="avatar-title bg-success bg-gradient rounded">
                                                    #1
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-muted mb-1 text-truncate">Creator
                                            </p>
                                            <div class="fw-semibold font-size-15">Riski Maulana Rahman</div>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <h5
                                                class="font-size-14 mb-0 text-truncate w-xs bg-soft-success p-2 rounded text-center">
                                                Advance/IHM/2023/02/0003</h5>
                                        </div>
                                    </div>
                                </li>
                                <li class="px-4 py-3">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar-sm">
                                                <div class="avatar-title bg-success bg-gradient rounded">
                                                    #2
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1 overflow-hidden">
                                            <p class="text-muted mb-1 text-truncate">Creator
                                            </p>
                                            <div class="fw-semibold font-size-15">Anggoro Setiawan</div>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <h5
                                                class="font-size-14 mb-0 text-truncate w-xs bg-soft-success p-2 rounded text-center">
                                                TR/IHM/2023/02/0001</h5>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->

        <div class="card">
            <div class="card-body pb-0">
                <div class="d-flex align-items-start">
                    <div class="flex-grow-1">
                        <h5 class="card-title mb-3">Trend Submissions</h5>
                    </div>
                    <div class="flex-shrink-0">
                        <div class="dropdown">
                            <a class="dropdown-toggle text-reset" href="#" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <span class="fw-semibold">Year :</span> <span class="text-muted">2023<i
                                        class="mdi mdi-chevron-down ms-1"></i></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">2023</a>
                                <a class="dropdown-item" href="#">2022</a>
                                <a class="dropdown-item" href="#">2021</a>
                                <a class="dropdown-item" href="#">2020</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row gy-4">
                    <div class="col-xxl-3">
                        <div>
                            <div class="mt-3 mb-3">
                                <p class="text-muted mb-1">Total</p>

                                <div class="d-flex flex-wrap align-items-center gap-2">
                                    <h2 class="mb-0">0</h2>
                                </div>
                            </div>

                            <div class="row g-0">
                                <div class="col-sm-6">
                                    <div class="border-bottom border-end p-3 h-100">
                                        <p class="text-muted text-truncate mb-1">Approved</p>
                                        <h5 class="text-truncate mb-0">0</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="border-bottom p-3 h-100">
                                        <p class="text-muted text-truncate mb-1">Rejected</p>
                                        <h5 class="text-truncate mb-0">0</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-0">
                                <div class="col-sm-6">
                                    <div class="border-bottom border-end p-3 h-100">
                                        <p class="text-muted text-truncate mb-1">Rework</p>
                                        <h5 class="text-truncate mb-0">0</h5>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="border-bottom p-3 h-100">
                                        <p class="text-muted text-truncate mb-1">Draft</p>
                                        <h5 class="text-truncate mb-0">0</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-9">
                        <div>
                            <div id="chart-column" class="apex-charts" data-colors='["#f1f3f7", "#3b76e1"]'></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->

        
    </div>
    <!-- end col -->
    <div class="col-xxl-3">

        <div class="user-sidebar">
            <div class="card">
                <div class="card-body p-0">
                    <div class="user-profile-img">
                        <img src="<?php echo e(URL::asset('assets/images/pattern-bg.jpg')); ?>" class="profile-img profile-foreground-img rounded-top"
                            style="height: 120px;" alt="">
                        <div class="overlay-content rounded-top">
                            <div>
                                <div class="user-nav p-3">
                                    <div class="d-flex justify-content-end">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i data-eva="more-horizontal-outline" data-eva-width="20"
                                                    data-eva-height="20" class="fill-white"></i>
                                            </a>

                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><button class="dropdown-item" onClick="uploadButton()">Change Profile Picture</button></li>
                                                <div id="upload-popup">
                                                    <form id="upload-form" method="POST" enctype="multipart/form-data">
                                                        
                                                        <div class="input-group">
                                                            <input type="file" class="form-control" id="picture-input" accept="image/*">
                                                            <button class="btn btn-primary" type="button" id="submit-button" onClick="submitButton()">Upload</button>
                                                        </div>
                                                    </form>
                                                </div>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end user-profile-img -->

                    <div class="mt-n5 position-relative">
                        <div class="text-center">
                            <img src="<?php if(Auth::user()->avatar != ''): ?><?php echo e(URL::asset('images/' . Auth::user()->avatar)); ?><?php else: ?><?php echo e(URL::asset('assets/images/users/avatar-1.jpg')); ?><?php endif; ?>" alt=""
                                class="avatar-xl rounded-circle img-thumbnail">

                            <div class="mt-3">
                                <h5 class="mb-1"><?php echo e($employee->FullName); ?></h5>
                                <p class="text-muted"><?php echo e($employee->SAPID); ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="p-3">
                        <div class="row text-center pb-3">
                            <div class="col-6 border-end">
                                <div class="p-1">
                                    <h5 class="mb-1">0</h5>
                                    <p class="text-muted mb-0">Leave</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="p-1">
                                    <h5 class="mb-1">0</h5>
                                    <p class="text-muted mb-0">DayOff</p>
                                </div>
                            </div>
                        </div>

                        

                        <hr class="mb-4">
                        <div class="px-4 mx-n3" data-simplebar style="height: 350px;">

                            <div>
                                <h5 class="card-title mb-3">Employee Information <i class="fas fa-info-circle"></i></h5>

                                <ul class="list-unstyled mb-0">
                                    <li class="py-2">
                                        <div class="d-flex align-items-start">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar-md h-auto p-1 py-2 bg-light rounded">
                                                    <div class="text-center">
                                                        <div><i class="far fa-calendar-alt"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 pt-2 text-muted">
                                                <p class="mb-0"><?php echo e($employee->JoinDate); ?></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="py-2">
                                        <div class="d-flex align-items-start">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar-md h-auto p-1 py-2 bg-light rounded">
                                                    <div class="text-center">
                                                        <div><i class="far fa-user"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 pt-2 text-muted">
                                                <p class="mb-0"><?php echo e($employee->level->Level); ?></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="py-2">
                                        <div class="d-flex align-items-start">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar-md h-auto p-1 py-2 bg-light rounded">
                                                    <div class="text-center">
                                                        <div><i class="fas fa-industry"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 pt-2 text-muted">
                                                <p class="mb-0"><?php echo e($employee->companycode); ?></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="py-2">
                                        <div class="d-flex align-items-start">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar-md h-auto p-1 py-2 bg-light rounded">
                                                    <div class="text-center">
                                                        <div><i class="fas fa-building"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 pt-2 text-muted">
                                                <p class="mb-0"><?php echo e($employee->department->DepartmentName); ?></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="py-2">
                                        <div class="d-flex align-items-start">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar-md h-auto p-1 py-2 bg-light rounded">
                                                    <div class="text-center">
                                                        <div><i class="fas fa-briefcase"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 pt-2 text-muted">
                                                <p class="mb-0"><?php echo e($employee->designation->DesignationName); ?></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="py-2">
                                        <div class="d-flex align-items-start">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar-md h-auto p-1 py-2 bg-light rounded">
                                                    <div class="text-center">
                                                        <div><i class="fas fa-map-pin"></i></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 pt-2 text-muted">
                                                <p class="mb-0"><?php echo e($employee->location->Location); ?></p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
    </div>
    <!-- end col -->
</div>
<!-- end row -->


<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<!-- apexcharts -->
<script src="<?php echo e(URL::asset('/assets/libs/apexcharts/apexcharts.min.js')); ?>"></script>

<!-- dashboard init -->
<script src="<?php echo e(URL::asset('/assets/js/pages/dashboard.init.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\riski_maulana\www\oasysv2\resources\views/dashboard/index.blade.php ENDPATH**/ ?>