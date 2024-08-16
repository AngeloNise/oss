<table border="1px">
    <tr>
        <th>Letter of Intent</th>
        <th>Application Form</th>
        <th>Pre Numbered Tickets</th>
        <th>Official Receipts</th>
        <th>Control Sheets</th>
        <th>Reservation Slip</th>
        <th>Goods/Services Inspection</th>
        <th>Statement of Projected Net</th>
        <th>Submitter's Email</th>
    </tr>

    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td>
            <?php if($item->Letter_of_Intent): ?>
                <a href="<?php echo e(route('view', ['type' => 'letter_of_intent', 'filename' => $item->Letter_of_Intent])); ?>" target="_blank">View</a>
                <a href="<?php echo e(route('download', ['filename' => $item->Letter_of_Intent])); ?>" target="_blank">Download</a>
            <?php endif; ?>
        </td>
        <td>
            <?php if($item->Application_Form): ?>
                <a href="<?php echo e(route('view', ['type' => 'application_form', 'filename' => $item->Application_Form])); ?>" target="_blank">View</a>
                <a href="<?php echo e(route('download', ['filename' => $item->Application_Form])); ?>" target="_blank">Download</a>
            <?php endif; ?>
        </td>
        <td>
            <?php if($item->Pre_Numbered_Tickets): ?>
                <a href="<?php echo e(route('view', ['type' => 'pre_numbered_tickets', 'filename' => $item->Pre_Numbered_Tickets])); ?>" target="_blank">View</a>
                <a href="<?php echo e(route('download', ['filename' => $item->Pre_Numbered_Tickets])); ?>" target="_blank">Download</a>
            <?php endif; ?>
        </td>
        <td>
            <?php if($item->Official_Receipts): ?>
                <a href="<?php echo e(route('view', ['type' => 'official_receipts', 'filename' => $item->Official_Receipts])); ?>" target="_blank">View</a>
                <a href="<?php echo e(route('download', ['filename' => $item->Official_Receipts])); ?>" target="_blank">Download</a>
            <?php endif; ?>
        </td>
        <td>
            <?php if($item->Control_Sheets): ?>
                <a href="<?php echo e(route('view', ['type' => 'control_sheets', 'filename' => $item->Control_Sheets])); ?>" target="_blank">View</a>
                <a href="<?php echo e(route('download', ['filename' => $item->Control_Sheets])); ?>" target="_blank">Download</a>
            <?php endif; ?>
        </td>
        <td>
            <?php if($item->Reservation_Slip): ?>
                <a href="<?php echo e(route('view', ['type' => 'reservation_slip', 'filename' => $item->Reservation_Slip])); ?>" target="_blank">View</a>
                <a href="<?php echo e(route('download', ['filename' => $item->Reservation_Slip])); ?>" target="_blank">Download</a>
            <?php endif; ?>
        </td>
        <td>
            <?php if($item->Goods_Services_Inspection): ?>
                <a href="<?php echo e(route('view', ['type' => 'goods_services_inspection', 'filename' => $item->Goods_Services_Inspection])); ?>" target="_blank">View</a>
                <a href="<?php echo e(route('download', ['filename' => $item->Goods_Services_Inspection])); ?>" target="_blank">Download</a>
            <?php endif; ?>
        </td>
        <td>
            <?php if($item->Statement_of_Projected_Net): ?>
                <a href="<?php echo e(route('view', ['type' => 'statement_of_projected_net', 'filename' => $item->Statement_of_Projected_Net])); ?>" target="_blank">View</a>
                <a href="<?php echo e(route('download', ['filename' => $item->Statement_of_Projected_Net])); ?>" target="_blank">Download</a>
            <?php endif; ?>
        </td>
        <td>
            <?php echo e($item->user ? $item->user->email : 'Unknown'); ?> <!-- Display email or 'Unknown' if user is null -->
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php /**PATH D:\College\oss\resources\views//faculty/auth/preevaldoc.blade.php ENDPATH**/ ?>