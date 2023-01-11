<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.E_Charts'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


<?php $__env->startSection('pagetitle'); ?>Echarts <?php $__env->stopSection(); ?>


    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Line Chart</h4>
                </div>
                <div class="card-body">
                    <div id="line-chart" data-colors='["#63ad6f"]' class="e-charts"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Mix Line-Bar</h4>
                </div>
                <div class="card-body">
                    <div id="mix-line-bar" data-colors='["#63ad6f", "#3b76e1", "#f56e6e"]' class="e-charts"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Doughnut Chart</h4>
                </div>
                <div class="card-body">
                    <div id="doughnut-chart" data-colors='["#3b76e1", "#f9c256", "#f56e6e", "#57c9eb", "#63ad6f"]'
                        class="e-charts"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Pie Chart</h4>
                </div>
                <div class="card-body">
                    <div id="pie-chart" data-colors='["#f56e6e", "#63ad6f", "#57c9eb", "#f9c256", "#3b76e1"]'
                        class="e-charts"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Scatter Chart</h4>
                </div>
                <div class="card-body">
                    <div id="scatter-chart" data-colors='["#63ad6f"]' class="e-charts"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Bubble Chart</h4>
                </div>
                <div class="card-body">
                    <div id="bubble-chart" class="e-charts"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Candlestick Chart</h4>
                </div>
                <div class="card-body">
                    <div id="candlestick-chart" data-colors='["#3b76e1","#63ad6f"]' class="e-charts"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Gauge Chart</h4>
                </div>
                <div class="card-body">
                    <div id="gauge-chart" data-colors='["#63ad6f","#3b76e1","#f56e6e"]' class="e-charts"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(URL::asset('assets/libs/echarts/echarts.min.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('assets/js/pages/echarts.init.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/riskimaulanarahman/Documents/www/borexstartup/resources/views/charts-echart.blade.php ENDPATH**/ ?>