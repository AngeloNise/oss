<?php $__env->startSection('content'); ?>
<?php if(session('success')): ?>
    <div class="alert alert-success">
        <?php echo e(session('success')); ?>

    </div>
<?php endif; ?>

<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
<div class="form-container">
    <form action="<?php echo e(url('uploaddocument')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <h2>Upload Your Documents</h2>
        <h2>FRA Pre-Evaluation</h2>
        <div class="form-group">
            <label for="Letter_of_Intent">Letter of Intent:</label>
            <input type="file" name="Letter_of_Intent" accept=".pdf,.doc,.docx">
        </div>
        <div class="form-group">
            <label for="Application_Form">Application Form:</label>
            <input type="file" name="Application_Form" accept=".pdf,.doc,.docx">
        </div>
        <div class="form-group">
            <label for="Pre_Numbered_Tickets">Pre Numbered Tickets:</label>
            <input type="file" name="Pre_Numbered_Tickets" accept=".pdf,.doc,.docx">
        </div>
        <div class="form-group">
            <label for="Official_Receipts">Official Receipts:</label>
            <input type="file" name="Official_Receipts" accept=".pdf,.doc,.docx">
        </div>
        <div class="form-group">
            <label for="Control_Sheets">Control Sheets:</label>
            <input type="file" name="Control_Sheets" accept=".pdf,.doc,.docx">
        </div>
        <div class="form-group">
            <label for="Reservation_Slip">Reservation Slip:</label>
            <input type="file" name="Reservation_Slip" accept=".pdf,.doc,.docx">
        </div>
        <div class="form-group">
            <label for="Goods_Services_Inspection">Goods/Services Inspection:</label>
            <input type="file" name="Goods_Services_Inspection" accept=".pdf,.doc,.docx">
        </div>
        <div class="form-group">
            <label for="Statement_of_Projected_Net">Statement of Projected Net:</label>
            <input type="file" name="Statement_of_Projected_Net" accept=".pdf,.doc,.docx">
        </div>
        <button type="submit">Upload</button>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.orglayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\DL\OSS\oss\resources\views\org\auth\preevalfra.blade.php ENDPATH**/ ?>