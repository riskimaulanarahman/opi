



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
                                        <a class="nav-link dropdown-toggle arrow-none" href="<?php echo e(route($data['menu'][$key]['routes'])); ?>"
                                            id="topnav-dashboard" role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="icon nav-icon" data-eva="<?php echo e($data['icon']); ?>"></i>
                                            <span data-key="t-dashboards"><?php echo e($data['menu'][$key]['title']); ?></span>
                                        </a>
                                    </li>
                                <?php else: ?>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-dashboard" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icon nav-icon" data-eva="grid-outline"></i>
                                            <span data-key="t-dashboards"><?php echo e($data['menu'][$key]['title']); ?></span>
                                            <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-dashboard">
                                            <?php $__currentLoopData = $data['menu'][$key]['submenu']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keysub => $itemsub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <a href="<?php echo e(route($data['menu'][$key]['submenu'][$keysub]['routes'])); ?>"
                                                class="dropdown-item"
                                                data-key="t-ecommerce"><?php echo e($data['menu'][$key]['submenu'][$keysub]['title']); ?></a>
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

                <div class="flex-shrink-0 align-self-end ms-2">
                    <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Create new request</button>
                </div>
            </div>
        </div>

        <?php if($data['data'] !== null): ?>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="">
                            <div class="table-responsive">
                                <table class="table project-list-table table-nowrap align-middle table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col">Request Number</th>
                                            <th scope="col">Request For</th>
                                            <th scope="col">Request Date</th>
                                            <th scope="col">Form Type</th>
                                            <th scope="col">Status</th>
                                            <th scope="col" style="width: 200px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><b>AADC/IHM/20/12/23</b></td>
                                            <td>
                                                <img src="<?php echo e(URL::asset('assets/images/users/avatar-2.jpg')); ?>" alt=""
                                                    class="avatar-sm rounded-circle me-2">
                                                <a href="#" class="text-body">Simon Ryles</a>
                                            </td>
                                            <td>19 July 2022</td>
                                            <td>Planning</td>
                                            <td><span class="badge badge-soft-success mb-0">Aprroved</span></td>
                                            <td>
                                                <ul class="list-inline mb-0">
                                                    <li class="list-inline-item">
                                                        <a href="javascript:void(0);" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title="Edit" class="px-2 text-primary"><i
                                                                class="bx bx-pencil font-size-18"></i></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="javascript:void(0);" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title="Delete" class="px-2 text-danger"><i
                                                                class="bx bx-trash-alt font-size-18"></i></a>
                                                    </li>
                                                    <li class="list-inline-item dropdown">
                                                        <a class="text-muted dropdown-toggle font-size-18 px-2" href="#"
                                                            role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                            <i class="bx bx-dots-vertical-rounded"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="#">Action</a>
                                                            <a class="dropdown-item" href="#">Another action</a>
                                                            <a class="dropdown-item" href="#">Something else here</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row g-0 align-items-center pb-4 mt-8">
                    <div class="col-sm-6">
                        <div>
                            <p class="mb-sm-0">Showing 1 to 10 of 57 entries</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="float-sm-end">
                            <ul class="pagination mb-sm-0">
                                <li class="page-item disabled">
                                    <a href="#" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                                </li>
                                <li class="page-item active">
                                    <a href="#" class="page-link">1</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">2</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">3</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">4</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">5</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <div class="card-body">
                <img src="<?php echo e(URL::asset('assets/images/no-data.svg')); ?>" alt="" height="400" style="margin-left: auto; margin-right: auto;" />
            </div>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\oasys2023\resources\views/grid/index.blade.php ENDPATH**/ ?>