<div class="row my-4 mb-5 mt-5">
    <div class="col-lg-12">
        <div class="row justify-content-between mt-3 mb-4">
            <div class="col">
                <h3><?php echo e(__('Orders')); ?></h3>
            </div>
            <div class="col-sm-4">
                <select class="form-control" id="order-perfomace">
                    <option selected value="7"><?php echo e(__('Last 7 Days')); ?></option>
                    <option value="15"><?php echo e(__('Last 15 Days')); ?></option>
                    <option value="30"><?php echo e(__('Last 30 Days')); ?></option>
                    <option value="365"><?php echo e(__('Last 365 Days')); ?></option>
                </select>
            </div>
        </div>
        <div class="chartjs-size-monitor">
            <div class="chartjs-size-monitor-expand">
                <div class="chart-inner-div"></div>
            </div>
            <div class="chartjs-size-monitor-shrink">
                <div class="chart-inner-div-2"></div>
            </div>
        </div>
        <canvas id="orderChart" width="864" class="chartjs-render-monitor"></canvas>
    </div>
</div>

<input type="hidden" id="get-order-data" value="<?php echo e(route('user.order.chart')); ?>">
<?php /**PATH /Volumes/my-works/laravel/multipayent/script/resources/views/user/dashboard/charts/order.blade.php ENDPATH**/ ?>