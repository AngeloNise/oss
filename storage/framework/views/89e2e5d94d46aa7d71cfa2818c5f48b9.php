
<?php $__env->startSection('content'); ?>
    <div class="form-container">
        <h2>Upload Your Documents</h2>
        <h2>FRA Pre-Evaluation</h2>
        <form action="<?php echo e(route('documents.store')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="letter_of_intent">Letter of Intent:</label>
                <input type="file" name="letter_of_intent" accept=".pdf,.docx">
            </div>
            <div class="form-group">
                <label for="application_form">Application Form:</label>
                <input type="file" name="application_form" accept=".pdf,.docx">
            </div>
            <div class="form-group">
                <label for="pre_numbered_tickets">Pre Numbered Tickets:</label>
                <input type="file" name="pre_numbered_tickets" accept=".pdf,.docx">
            </div>
            <div class="form-group">
                <label for="official_receipts">Official Receipts:</label>
                <input type="file" name="official_receipts" accept=".pdf,.docx">
            </div>
            <div class="form-group">
                <label for="control_sheets">Control Sheets:</label>
                <input type="file" name="control_sheets" accept=".pdf,.docx">
            </div>
            <div class="form-group">
                <label for="reservation_slip">Reservation Slip:</label>
                <input type="file" name="reservation_slip" accept=".pdf,.docx">
            </div>
            <div class="form-group">
                <label for="goods_services_inspection">Goods/Services Inspection:</label>
                <input type="file" name="goods_services_inspection" accept=".pdf,.docx">
            </div>
            <div class="form-group">
                <label for="statement_of_projected_net">Statement of Projected Net:</label>
                <input type="file" name="statement_of_projected_net" accept=".pdf,.docx">
            </div>
            <button type="submit">Upload</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.orglayout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Desktop\new\resources\views\preevalfra.blade.php ENDPATH**/ ?>