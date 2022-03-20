<?php $__env->startSection("css"); ?>
  <link rel="stylesheet" href="<?php echo e(asset('assets/css/dashboard.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="profile">
  <div class="container">

    <div class="row">
      <form class="" action="" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
      <div class="col-sm-6 left-content">
        <h5>Account details</h5>
          <div class="row one">
            <div class="col-sm-6">
              <label for="">Select New Avatar</label>
              <input type="file" name="" value="">
            </div>
            <div class="col-sm-6">
              <label for="">Email</label>
              <input type="email" name="" value="<?php echo e($seller->email); ?>">
            </div>
          </div>
          <div class="row two">
            <div class="col-sm-6">
              <label for="">Frist Name</label>
              <input type="text" name="" value="<?php echo e($seller->first_name); ?>">
            </div>
            <div class="col-sm-6">
              <label for="">Last Name</label>
              <input type="text" name="" value="<?php echo e($seller->last_name); ?>">
            </div>
          </div>

          <div class="row three">
            <div class="col-sm-6">
              <label for="">Phone</label>
              <input type="text" name="" value="<?php echo e($seller->phone); ?>">
            </div>
            <div class="col-sm-6">
              <label for="">City</label>
              <input type="text" name="" value="<?php echo e($seller->city); ?>">
            </div>
          </div>
          <div class="row three">
            <div class="col-sm-6">
              <label for="">Register Certifaction</label>
              <iframe src="<?php echo e($seller->reg_cert); ?>" style="width: 100%;height: 100%;border: none;"></iframe>
              <input type="hidden" name="" value="">
            </div>
            <div class="col-sm-6">
              <label for="">Commerciel Register</label>
              <iframe src="<?php echo e($seller->com_cert); ?>" style="width: 100%;height: 100%;border: none;"></iframe>
              <input  type="hidden" name="" value="">
            </div>
          </div>

          <input class="col-sm-4 col-sm-offset-4 btn btn-primary" type="submit" value="Update Account">
      </div>
      <div class="col-sm-4 right-content">
        <h5>Change Password</h5>
        <div class="col-sm-12 four">
          <label for="photo">Old Password</label>
          <input type="password" name="" value="" placeholder="You current password">
        </div>
        <div class="col-sm-12 five">
          <label for="photo">New Password</label>
          <input type="password" name="" value="" placeholder="You New password">
        </div>
        <div class="col-sm-12 six">
          <label for="photo">Confirm Password</label>
          <input type="password" name="" value="" placeholder="Confirm New Password">
        </div>

        <input class="col-sm-4 col-sm-offset-4 btn btn-primary" type="submit" value="Change Password">
      </div>
    </form>
    </div>

  </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\online_shopping-master\resources\views/seller/profile.blade.php ENDPATH**/ ?>