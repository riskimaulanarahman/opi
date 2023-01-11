<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Create_New'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(URL::asset('assets/libs/flatpickr/flatpickr.min.css')); ?>">
    <link href="<?php echo e(URL::asset('assets/libs/dropzone/dropzone.min.css')); ?>" rel="stylesheet" type="text/css" />

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


<?php $__env->startSection('pagetitle'); ?>Create New <?php $__env->stopSection(); ?>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Create New Project</h4>
                </div>
                <div class="card-body">

                    <form>
                        <div class="row mb-4">
                            <label for="projectname" class="col-form-label col-lg-2">Project Name</label>
                            <div class="col-lg-10">
                                <input id="projectname" name="projectname" type="text" class="form-control"
                                    placeholder="Enter Project Name...">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="projectdesc" class="col-form-label col-lg-2">Project Description</label>
                            <div class="col-lg-10">
                                <textarea class="form-control" id="projectdesc" rows="3"
                                    placeholder="Enter Project Description..."></textarea>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label class="col-form-label col-lg-2">Project Date</label>
                            <div class="col-lg-10">
                                <div class="input-daterange input-group" id="project-date-inputgroup"
                                    data-provide="datepicker" data-date-format="dd M, yyyy"
                                    data-date-container='#project-date-inputgroup' data-date-autoclose="true">
                                    <input type="text" class="form-control" id="datepicker-datetime-start"
                                        placeholder="Start Date" name="start" />
                                    <input type="text" class="form-control" id="datepicker-datetime-end"
                                        placeholder="End Date" name="end" />
                                </div>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="projectbudget" class="col-form-label col-lg-2">Budget</label>
                            <div class="col-lg-10">
                                <input id="projectbudget" name="projectbudget" type="text"
                                    placeholder="Enter Project Budget..." class="form-control">
                            </div>
                        </div>
                    </form>
                    <div class="row mb-4">
                        <label class="col-form-label col-lg-2">Attached Files</label>
                        <div class="col-lg-10">
                            <form action="/" method="post" class="dropzone">
                                <div class="fallback">
                                    <input name="file" type="file" multiple />
                                </div>

                                <div class="dz-message needsclick">
                                    <div class="mb-3">
                                        <i class="display-4 text-muted bx bxs-cloud-upload"></i>
                                    </div>

                                    <h4>Drop files here or click to upload.</h4>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-lg-10">
                            <button type="submit" class="btn btn-primary">Create Project</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <!-- datepicker js -->
    <script src="<?php echo e(URL::asset('assets/libs/flatpickr/flatpickr.min.js')); ?>"></script>

    <!-- dropzone plugin -->
    <script src="<?php echo e(URL::asset('assets/libs/dropzone/dropzone.min.js')); ?>"></script>

    <!-- init js -->
    <script src="<?php echo e(URL::asset('assets/js/pages/task-creat.init.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/riskimaulanarahman/Documents/www/borexstartup/resources/views/projects-create.blade.php ENDPATH**/ ?>