<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Chartjs_Charts'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>



<?php $__env->startSection('pagetitle'); ?>Chartjs <?php $__env->stopSection(); ?>


    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Line Chart</h4>
                </div>
                <div class="card-body">
                    <canvas id="lineChart" class="chartjs-chart"
                        data-colors='["rgba(59, 118, 225, 0.2)", "#3b76e1", "rgba(235, 239, 242, 0.2)", "#ebeff2"]'></canvas>
                </div>
            </div>
        </div> <!-- end col -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Bar Chart</h4>
                </div>
                <div class="card-body">
                    <canvas id="bar" class="chartjs-chart"
                        data-colors='["rgba(99, 171, 111, 0.8)", "rgba(99, 171, 111, 0.9)"]'></canvas>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Pie Chart</h4>
                </div>
                <div class="card-body">
                    <canvas id="pieChart" class="chartjs-chart" data-colors='["#63ad6f", "#ebeff2"]'></canvas>
                </div>
            </div>
        </div> <!-- end col -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Donut Chart</h4>
                </div>
                <div class="card-body">
                    <canvas id="doughnut" class="chartjs-chart" data-colors='["#3b76e1", "#ebeff2"]'></canvas>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Polar Chart</h4>
                </div>
                <div class="card-body">
                    <canvas id="polarArea" class="chartjs-chart"
                        data-colors='["#f56e6e", "#63ad6f", "#f1734f", "#3b76e1"]'> </canvas>
                </div>
            </div>
        </div> <!-- end col -->

        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Radar Chart</h4>
                </div>
                <div class="card-body">
                    <canvas id="radar" class="chartjs-chart"
                        data-colors='["rgba(42, 181, 125, 0.2)", "#63ad6f", "rgba(59, 118, 225, 0.2)", "#3b76e1"]'></canvas>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(URL::asset('assets/libs/chart.js/chart.js.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/js/pages/chartjs.init.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/riskimaulanarahman/Documents/www/borexstartup/resources/views/charts-chartjs.blade.php ENDPATH**/ ?>