<table class="table table-flush" id="subscriber-table">
    <thead class="thead-light">
    <tr>
        <th><?php echo e(__("S/N")); ?></th>
        <th><?php echo e(__("From")); ?></th>
        <th><?php echo e(__("Amount")); ?></th>
        <th><?php echo e(__("Charge")); ?></th>
        <th><?php echo e(__("Type")); ?></th>
        <th><?php echo e(__("Reason")); ?></th>
        <th><?php echo e(__("Created")); ?></th>
    </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($loop->index + 1); ?></td>
            <td>
                <?php echo e($transaction->name); ?><br>
                <?php echo e($transaction->email); ?>

            </td>
            <td><?php echo e(currency_format($transaction->amount, currency: $transaction->currency)); ?></td>
            <td><?php echo e(currency_format($transaction->charge, currency: $transaction->currency)); ?></td>
            <td>
                <?php if($transaction->type == 'credit'): ?>
                    <span class="badge badge-success"><i class="fas fa-arrow-circle-down"></i> <?php echo e(__("Credit")); ?></span>
                <?php else: ?>
                    <span class="badge badge-danger"><i class="fas fa-arrow-circle-up"></i> <?php echo e(__("Debit")); ?></span>
                <?php endif; ?>
            </td>
            <td><?php echo wordwrap($transaction->reason, 50, "<br />\n"); ?></td>
            <td><?php echo e(formatted_date($transaction->created_at)); ?></td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php /**PATH /Volumes/my-works/laravel/multipayent/script/resources/views/user/transactions/_all.blade.php ENDPATH**/ ?>