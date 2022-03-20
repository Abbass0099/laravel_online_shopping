<?php $__env->startSection("content-header"); ?>
<h3>Dashbord</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<style>
    .empty-dash{
        min-height: 200px;
        display: flex;
        justify-content: center;
        font-weight: bold;
        font-size: 1.1em;
    }
</style>    
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="box box-solid box-default">
    <div class="box-header">
        <h3>Dashbord</h3>
    </div>
    <div class="box-body">
        <?php if($ads->count() == 0 ): ?>
            <div class="empty-dash">
                Sorry. Dashboard is empty
            </div>
        <?php endif; ?>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\online_shopping-master\resources\views/seller/ads/all.blade.php ENDPATH**/ ?>