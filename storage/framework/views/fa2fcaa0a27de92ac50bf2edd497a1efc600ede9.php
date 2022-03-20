<?php $__env->startSection('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('assets/css/uikit.min.css')); ?>" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

<style>
    .content-wrapper{
        background: none !important;
    }
    .form-part{
        background: white;
        padding: 15px;
    }

    .uk-form-stacked input{
        border: none;
        border-bottom: 1px solid #ccc;
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<script>
    $(document).ready(function(){
    flatpickr("#expire_date", {
    enableTime: false,
    dateFormat: "Y-m-d",
});
    })
</script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-sm-12">
        <div class="container-fluid">
                <form class="uk-grid-small uk-form-stacked" action="<?php echo e(url('ads/create')); ?>" method="POST" id="" uk-grid>
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('post'); ?>
                        <div class="col-sm-7">
                            <div class="form-part">
                            <h3>Ad Details</h3>
                            
                            <div class="uk-inline uk-width-1-1@s">
                                    <label for="" class="uk-form-label">Title</label>
                                    <input class="uk-input" type="text" name="title" placeholder="Enter ad title">
                            </div>
                            
                            <div class="uk-inline uk-width-1-1@s">
                                    <label for="" class="uk-form-label">Expire Date Ad</label>
                                    <input class="uk-input" type="text" id="expire_date" name="expire_date" placeholder="Enter expire date">
                            </div>
                            
                            <div class="uk-child-width-expand@s" uk-grid>
                                
                                <div>
                                        <label for="" class="uk-form-label">Price</label>
                                        <input class="uk-input" type="text" name="price" placeholder="Enter ad price">
                                </div>
                                
                                <div>
                                        <label for="" class="uk-form-label">Discount Percentage</label>
                                        <input class="uk-input" type="text" name="discount" placeholder="%">
                                </div>
                                
                                <div>
                                        <label for="" class="uk-form-label">Currency</label>
                                        <input class="uk-input" type="text" name="email" placeholder="Enter Ad curreny">
                                </div>
                            </div>
                            
                            <div class="uk-inline uk-width-1-1@s">
                                    <label for="" class="uk-form-label">Condition</label>
                                    <input class="uk-input" type="text" name="email" placeholder="Enter ad condition">
                             </div>
                             
                             <div class="uk-inline uk-width-1-1@s">
                                 <div class="jumbotron">
                                     <p>Drag&Drop files</p>
                                    <input class="uk-file uk-file-primary" type="file" name="images[]" multiple/>
                                 </div>
                             </div>
                             
                             <div class="uk-inline uk-width-1-1@s">
                                    <label for="" class="uk-form-label">Description</label>
                                    <textarea name="desc" id="" class="uk-textarea" cols="30" rows="10" placeholder="Description Ad"></textarea>
                             </div>

                             <div class="uk-inline uk-width-1-1@s text-center">
                                 <br/>
                                    <input type="submit" name="save" value="Save Ad" id="" class="uk-button uk-button-primary">
                             </div>
                            </div>
                        </div>
                            
                        <div class="col-sm-5">
                            <div class="col-sm-12">
                                <div class="row">
                                        <div class="col-sm-12">
                                                <div class="uk-inline uk-width-1-1@s">
                                                        <div class="form-part">
                                                                <h3>Ad Category</h3>
                                                                <label for="" class="uk-form-label">Choose Sector</label>
                                                                <select name="sector_id" class="uk-select" id="">
                                                                    <?php if(!empty($sectors)): ?>
                                                                        <?php $__currentLoopData = $sectors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sector): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                            <option value="<?php echo e($sector->id); ?>"><?php echo e($sector->sector_name); ?></option>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    <?php endif; ?>
                                                                </select>
                                                        </div>                                        
                                                     </div>
                    
                                        </div>
                                        <div class="col-sm-12">
                                            <br/>
                                            
                                            <div class="form-part">
                                                    <h3>Ad Location & Contact</h3>
                                                    <div class="uk-inline uk-width-1-1@s">
                                                            <label for="" class="uk-form-label">Location</label>
                                                            <input class="uk-input" type="text" name="location" placeholder="Enter location">
                                                    </div>
                                                </div>

                                                
                                                <div class="form-part">
                                                        <div class="uk-inline uk-width-1-1@s">
                                                                <label for="" class="uk-form-label">City</label>
                                                                <input class="uk-input" type="text" name="city" placeholder="Enter city">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-part">
                                                            <div class="uk-inline uk-width-1-1@s">
                                                                    <label for="" class="uk-form-label">Country</label>
                                                                    <input class="uk-input" type="text" name="county" placeholder="Enter Ad Country">
                                                            </div>
                                                        </div>
                                                    
                                                    <div class="form-part">
                                                            <div class="uk-inline uk-width-1-1@s">
                                                                    <label for="" class="uk-form-label">State</label>
                                                                    <input class="uk-input" type="text" name="state" placeholder="Enter ad state">
                                                            </div>
                                                        </div>
                                                    
                                                    <div class="form-part">
                                                            <div class="uk-inline uk-width-1-1@s">
                                                                    <label for="" class="uk-form-label">Street</label>
                                                                    <input class="uk-input" type="text" name="street" placeholder="Enter ad street">
                                                            </div>
                                                        </div>
                                                    
                                                    <div class="form-part">
                                                            <div class="uk-inline uk-width-1-1@s">
                                                                    <label for="" class="uk-form-label">Phone</label>
                                                                    <input class="uk-input" type="text" name="phone" placeholder="Enter ad phone">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\online_shopping-master\resources\views/seller/ads/submit_ad.blade.php ENDPATH**/ ?>