
<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Dashboards'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php $__env->startSection('pagetitle'); ?> <?php echo e(auth::user()->fullname); ?>, <small>Welcome to your Dashboard.</small> <?php $__env->stopSection(); ?>
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
                                        <i data-eva="layers-outline" class="fill-white"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="mb-1">ODC-BRU-FAH</h5>
                                <p class="mb-0 text-muted">Available : <span><?php echo e($availableOdp); ?></span></p>
                                <p class="mb-0 text-muted">Existing : <span><?php echo e($existingOdp); ?></span></p>
                                <p class="mb-0 text-muted">Broken : <span><?php echo e($brokenOdp); ?></span></p>
                                <p class="mb-0 text-muted">Total : <span><?php echo e($totalOdp); ?></span></p>
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
    </div>
    <!-- end col -->
    <div class="col-xxl-3">

        <div class="user-sidebar">
            <div class="card">
                <div class="card-body p-0">
                    <div class="user-profile-img">
                        <img src="<?php echo e(URL::asset('assets/images/post-1.jpg')); ?>" class="profile-img profile-foreground-img rounded-top"
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

                    <div class="mt-n5 position-relative">
                        <div class="text-center">
                            <img src="<?php if(Auth::user()->avatar != ''): ?><?php echo e(URL::asset('images/' . Auth::user()->avatar)); ?><?php else: ?><?php echo e(URL::asset('assets/images/users/avatar-1.jpg')); ?><?php endif; ?>" alt=""
                                class="avatar-xl rounded-circle img-thumbnail">

                            <div class="mt-3">
                                <h5 class="mb-1"><?php echo e(auth::user()->fullname); ?></h5>
                            </div>
                        </div>
                    </div>

                        </div>
                    </div>
                </div>
            </div>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\odpcustomer\resources\views/dashboard/index.blade.php ENDPATH**/ ?>