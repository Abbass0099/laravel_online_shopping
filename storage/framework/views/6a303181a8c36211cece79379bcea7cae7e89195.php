<?php $__env->startSection('content'); ?>
<div class="breadcrumb-div uk-background-cover uk-height-small uk-flex uk-flex-middle uk-light" data-src="<?php echo e(asset('assets/images/home.png')); ?>" uk-img>
    <div>
        <h3>How it works</h3>
        <ul class="uk-breadcrumb">
            <li><a href="/">Home</a></li>
            <li><span>How it works</span></li>
        </ul>
    </div>
</div>
<section class="how-it-works">
    <div class="uk-container">
        <div class="uk-child-width-1-1@s how-it-items" uk-grid>
            <div>
                <div class="uk-child-width-1-2@s" uk-grid>
                    <div class="uk-text-center">
                        <h4>1. Create An Account</h4>
                        <p>
                            First thing you need to do is to create your own account which will allow you to post
                            ads and better communications with our members as well as some very cool features
                        </p>
                    </div>
                    <div class="uk-text-right">
                        <img data-src="<?php echo e(asset('assets/icons/creat-content.svg')); ?>" uk-img alt="">
                    </div>
                </div>
            </div>

            <div>
                <div class="uk-child-width-1-2@s" uk-grid>
                    <div class="uk-text-left">
                        <img data-src="<?php echo e(asset('assets/icons/creat-content.svg')); ?>" uk-img alt="">
                    </div>
                    <div class="uk-text-center">
                        <h4>2. Shopping Ads</h4>
                        <p>
                            Detailed information about specific products that you sell.
                            Shopping ads can refer to product shopping ads, which feature just one product,
                            or Showcase Shopping ads, which feature several related products.
                        </p>
                    </div>
                </div>
            </div>

            <div>
                <div class="uk-child-width-1-2@s" uk-grid>
                    <div class="uk-text-center">
                        <h4>3. Post An Ad</h4>
                        <p>
                            Once you are finished with creating your account
                            it is time to sell goods and/or services tou are offering and in order to do
                            that add submit some ads so people can notice you
                        </p>
                    </div>
                    <div class="uk-text-right">
                        <img data-src="<?php echo e(asset('assets/icons/post-an-add.svg')); ?>" uk-img alt="">
                    </div>
                </div>
            </div>

            <div>
                <div class="uk-child-width-1-2@s" uk-grid>
                    <div class="uk-text-left">
                        <img data-src="<?php echo e(asset('assets/icons/earning.svg')); ?>" uk-img alt="">
                    </div>
                    <div class="uk-text-center">
                        <h4>4. Start Earning</h4>
                        <p>
                            Now sit back, relax and wait for the potential buyers
                            to contact you regarding goods and/or services you are offering
                            and start earning money and building contact as easy as that
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\online_shopping-master\resources\views/home/how_it_works.blade.php ENDPATH**/ ?>