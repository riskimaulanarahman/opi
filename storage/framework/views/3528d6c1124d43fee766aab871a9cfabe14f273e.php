<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Form_Editors'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <link href="<?php echo e(URL::asset('assets/libs/quill/quill.min.css')); ?>" rel="stylesheet">

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


<?php $__env->startSection('pagetitle'); ?>Form Editors <?php $__env->stopSection(); ?>


    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Ckeditor Classic Editor</h4>
                </div><!-- end card header -->
                <div class="card-body">
                    <div id="ckeditor-classic"></div>
                </div>
            </div>
        </div><!-- end col-->
    </div><!-- end row -->

    <div class="row">
        <div class="col-lg-12">
            <div class="mt-3 mb-3">
                <h5 class="mb-0 pb-1 text-decoration-underline">Quilljs Editor</h5>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Snow Editor</h4>
                </div>
                <div class="card-body">

                    <div id="snow-editor" style="height: 300px;">
                        <h3><span class="ql-size-large">Hello World!</span></h3>
                        <p><br></p>
                        <h3>This is an simple editable area.</h3>
                        <p><br></p>
                        <ul>
                            <li>
                                Select a text to reveal the toolbar.
                            </li>
                            <li>
                                Edit rich document on-the-fly, so elastic!
                            </li>
                        </ul>
                        <p><br></p>
                        <p>
                            End of simple area
                        </p>

                    </div> <!-- end Snow-editor-->
                </div> <!-- end card-body-->
            </div> <!-- end card-->

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Bubble Editor</h4>
                </div>
                <div class="card-body">

                    <div id="bubble-editor" style="height: 300px;">
                        <h3><span class="ql-size-large">Hello World!</span></h3>
                        <p><br></p>
                        <h3>This is an simple editable area.</h3>
                        <p><br></p>
                        <ul>
                            <li>
                                Select a text to reveal the toolbar.
                            </li>
                            <li>
                                Edit rich document on-the-fly, so elastic!
                            </li>
                        </ul>
                        <p><br></p>
                        <p>
                            End of simple area
                        </p>
                    </div> <!-- end Snow-editor-->
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div><!-- end col -->
    </div>
    <!-- end row -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(URL::asset('assets/libs/@ckeditor/@ckeditor.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/libs/quill/quill.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/js/pages/form-editor.init.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/riskimaulanarahman/Documents/www/borexstartup/resources/views/form-editors.blade.php ENDPATH**/ ?>