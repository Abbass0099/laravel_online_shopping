<?php $__env->startSection('content'); ?>
    <!-- Image cover -->
    <div class="uk-child-width-1-1@s uk-light" uk-grid>
        <div class="image-cover-parent">
            <div class="uk-background-cover uk-height-large uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: url(<?php echo e(asset('assets/images/home.png')); ?>);">
                <div class="cover-content">
                    <div>
                        <div class="uk-child-width-1-1@s">
                            <h1>World's Larget Marketplace</h1>
                            <p class="uk-align-center">Browse from than 15,000,000</p>
                        </div>
                        <!-- Form -->
                        <div class="uk-child-width-1-2@s uk-flex uk-flex-center uk-flex-middle home-form">
                            <form class="uk-grid-small" uk-grid>
                                <div class="uk-inline uk-width-1-3@s">
                                    <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: location"></span>
                                    <input class="uk-input" type="text" placeholder="All cities">
                                </div>
                                <div class="uk-inline uk-width-1-3@s">
                                    <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: nut"></span>
                                    <input class="uk-input" type="text" placeholder="In categories">
                                </div>
                                <div class="uk-inline uk-width-1-3@s">
                                    <button class="uk-width-1-1 uk-button uk-button-primary">Search</button>
                                </div>

                                <div class="uk-inline uk-inline uk-width-1-1@s">
                                    <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: search"></span>
                                    <input class="uk-input" type="text" placeholder="Search for">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Categories simple -->
            <div class="categories uk-container">
                <div class="uk-grid-small uk-child-width-expand@s uk-text-center" uk-grid>
                    <div><a href="#"><img src="<?php echo e(asset('assets/icons/medication.svg')); ?>" alt="" />Pharmacy products</a></div>
                    <div><a href="#"><img src="<?php echo e(asset('assets/icons/oil.svg')); ?>" alt="">Device products</a></div>
                    <div><a href="#"><img src="<?php echo e(asset('assets/icons/pesticide.svg')); ?>" alt="">Food products</a></div>
                    <div><a href="#"><img src="<?php echo e(asset('assets/icons/pesticide.svg')); ?>" alt="">Chemical products</a></div>
                    <div><a href="#"><img src="<?php echo e(asset('assets/icons/agriculture.svg')); ?>" alt="">Agriculture products</a></div>
                    <div><a href="#"><img src="<?php echo e(asset('assets/icons/pesticide.svg')); ?>" alt="">Cosmetics&Beauty</a></div>
                    <div><a href="#"><img src="<?php echo e(asset('assets/icons/pesticide.svg')); ?>" alt="">Other products</a></div>
                </div>
            </div>
        </div>
    </div>
    <section class="deals">
        <!-- Categories -->
        <div class="uk-container">
            <div class="uk-child-width-1-1@s uk-flex uk-flex-center uk-text-center" uk-grid>
                <div>
                    <h3>Categories</h3>
                    <p>Don't know what you search for? Here are some cool categories</p>
                </div>
            </div>
            <div class="uk-child-width-1-3@s uk-flex uk-flex-center uk-flex-middle uk-grid-small" uk-grid>
                <div>
                    <div class="uk-background-cover uk-height-medium uk-panel uk-flex uk-flex-center uk-flex-bottom" style="border-radius: 3px; background-image: url(<?php echo e(asset('assets/images/home.png')); ?>);">
                    <h4>Today deals</h4>
                    </div>
                </div>
                <div>
                    <div class="uk-background-cover uk-height-medium uk-panel uk-flex uk-flex-center uk-flex-bottom" style="border-radius: 3px; background-image: url(<?php echo e(asset('assets/images/surface-laptop-2.jpg')); ?>);">
                        <h4>Special deals</h4>
                    </div>
                </div>
                <div>
                    <div class="uk-background-cover uk-height-medium uk-panel uk-flex uk-flex-center uk-flex-bottom" style="border-radius: 3px; background-image: url(<?php echo e(asset('assets/images/apple-brand-device-1334598.jpg')); ?>);">
                        <h4>Free deals</h4>
                    </div>
                </div>
            </div>
    </section>

    <section class="latest-ads">
        <div class="uk-container">
            <div class="uk-flex uk-flex-center">
                <ul class="uk-list-inline">
                    <li><button class="uk-button uk-button-primary">Latest Ads</button></li>
                    <li><button class="uk-button uk-button-default">Comming soon</button></li>
                </ul>
            </div>
            <div uk-slider>
                <div class="uk-position-relative uk-visible-toggle" tabindex="-1" uk-slider>
                    <ul class="uk-slider-items uk-child-width-1-4@s">
                        <li>
                            <div>
                                <div class="uk-card uk-card-default uk-card-small">
                                    <div class="uk-card-media-top">
                                        <img src="<?php echo e(asset('assets/images/apple-brand-device-1334598.jpg')); ?>" alt="">
                                    </div>
                                    <div class="uk-card-body">
                                        <div class="uk-card-badge uk-label">-10$</div>
                                        <div uk-grid>
                                            <div class="uk-width-1-2@s cat">
                                                <span class="uk-icon" uk-icon="icon: bell"></span>
                                                Device products
                                            </div>
                                            <div class="uk-width-1-2@s cat">
                                                <span class="uk-icon" uk-icon="icon: location"></span>
                                                Kwait
                                            </div>
                                        </div>
                                        <!--- Product name -->
                                        <h4 class="uk-card-header" style="margin-top: 0; border: none">Ipad pro</h4>

                                        <!-- Price -->
                                        <div class="offer-price">
                                            <span class="old-price">
                                                1000
                                            </span>
                                            <span class="new-price">
                                                500
                                            </span>
                                        </div>

                                        <!-- Offer end date -->
                                        <div class="">
                                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                                <div class="uk-width-auto">
                                                    <span class="uk-icon" uk-icon="icon: clock"></span>
                                                </div>

                                                <div class="uk-width-expand">
                                                    <span class="header-title">The offer ends in:</span>
                                                    <span class="offer-time">10 Days 04:01:55</span>
                                                </div>

                                                <div class="uk-width-auto">
                                                    <span class="uk-icon" uk-icon="icon: heart"></span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div>
                                <div class="uk-card uk-card-default uk-card-small">
                                    <div class="uk-card-media-top">
                                        <img src="<?php echo e(asset('assets/images/Sofia-Body-Shampoo-shower-gel-shower-cream.jpg')); ?>" alt="">
                                    </div>
                                    <div class="uk-card-body">
                                        <div class="uk-card-badge uk-label">-10$</div>
                                        <div uk-grid>
                                            <div class="uk-width-1-2@s cat">
                                                <span class="uk-icon" uk-icon="icon: bell"></span>
                                                Device products
                                            </div>
                                            <div class="uk-width-1-2@s cat">
                                                <span class="uk-icon" uk-icon="icon: location"></span>
                                                Kwait
                                            </div>
                                        </div>
                                        <!--- Product name -->
                                        <h4 class="uk-card-header" style="margin-top: 0; border: none">Ipad pro</h4>

                                        <!-- Price -->
                                        <div class="offer-price">
                                            <span class="old-price">
                                                1000
                                            </span>
                                            <span class="new-price">
                                                500
                                            </span>
                                        </div>

                                        <!-- Offer end date -->
                                        <div class="">
                                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                                <div class="uk-width-auto">
                                                    <span class="uk-icon" uk-icon="icon: clock"></span>
                                                </div>

                                                <div class="uk-width-expand">
                                                    <span class="header-title">The offer ends in:</span>
                                                    <span class="offer-time">10 Days 04:01:55</span>
                                                </div>

                                                <div class="uk-width-auto">
                                                    <span class="uk-icon" uk-icon="icon: heart"></span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div>
                                <div class="uk-card uk-card-default uk-card-small">
                                    <div class="uk-card-media-top">
                                        <img src="<?php echo e(asset('assets/images/surface-laptop-2.jpg')); ?>" alt="">
                                    </div>
                                    <div class="uk-card-body">
                                        <div class="uk-card-badge uk-label">-10$</div>
                                        <div uk-grid>
                                            <div class="uk-width-1-2@s cat">
                                                <span class="uk-icon" uk-icon="icon: bell"></span>
                                                Device products
                                            </div>
                                            <div class="uk-width-1-2@s cat">
                                                <span class="uk-icon" uk-icon="icon: location"></span>
                                                Kwait
                                            </div>
                                        </div>
                                        <!--- Product name -->
                                        <h4 class="uk-card-header" style="margin-top: 0; border: none">Ipad pro</h4>

                                        <!-- Price -->
                                        <div class="offer-price">
                                            <span class="old-price">
                                                1000
                                            </span>
                                            <span class="new-price">
                                                500
                                            </span>
                                        </div>

                                        <!-- Offer end date -->
                                        <div class="">
                                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                                <div class="uk-width-auto">
                                                    <span class="uk-icon" uk-icon="icon: clock"></span>
                                                </div>

                                                <div class="uk-width-expand">
                                                    <span class="header-title">The offer ends in:</span>
                                                    <span class="offer-time">10 Days 04:01:55</span>
                                                </div>

                                                <div class="uk-width-auto">
                                                    <span class="uk-icon" uk-icon="icon: heart"></span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div>
                                <div class="uk-card uk-card-default uk-card-small">
                                    <div class="uk-card-media-top">
                                        <img src="<?php echo e(asset('assets/images/apple-brand-device-1334598.jpg')); ?>" alt="">
                                    </div>
                                    <div class="uk-card-body">
                                        <div class="uk-card-badge uk-label">-10$</div>
                                        <div uk-grid>
                                            <div class="uk-width-1-2@s cat">
                                                <span class="uk-icon" uk-icon="icon: bell"></span>
                                                Device products
                                            </div>
                                            <div class="uk-width-1-2@s cat">
                                                <span class="uk-icon" uk-icon="icon: location"></span>
                                                Kwait
                                            </div>
                                        </div>
                                        <!--- Product name -->
                                        <h4 class="uk-card-header" style="margin-top: 0; border: none">Ipad pro</h4>

                                        <!-- Price -->
                                        <div class="offer-price">
                                            <span class="old-price">
                                                1000
                                            </span>
                                            <span class="new-price">
                                                500
                                            </span>
                                        </div>

                                        <!-- Offer end date -->
                                        <div class="">
                                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                                <div class="uk-width-auto">
                                                    <span class="uk-icon" uk-icon="icon: clock"></span>
                                                </div>

                                                <div class="uk-width-expand">
                                                    <span class="header-title">The offer ends in:</span>
                                                    <span class="offer-time">10 Days 04:01:55</span>
                                                </div>

                                                <div class="uk-width-auto">
                                                    <span class="uk-icon" uk-icon="icon: heart"></span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div>
                                <div class="uk-card uk-card-default uk-card-small">
                                    <div class="uk-card-media-top ">
                                        <img src="<?php echo e(asset('assets/images/764378_0.png')); ?>" alt="">
                                    </div>
                                    <div class="uk-card-body">
                                        <div uk-grid>
                                            <div class="uk-width-1-2@s cat">
                                                <span class="uk-icon" uk-icon="icon: bell"></span>
                                                Device products
                                            </div>
                                            <div class="uk-width-1-2@s cat">
                                                <span class="uk-icon" uk-icon="icon: location"></span>
                                                Kuwait
                                            </div>
                                        </div>
                                        <!--- Product name -->
                                        <h4 class="uk-card-header" style="margin-top: 0; border: none">Ipad pro</h4>

                                        <!-- Price -->
                                        <div class="offer-price">
                                            <span class="old-price">
                                                1000
                                            </span>
                                            <span class="new-price">
                                                500
                                            </span>
                                        </div>

                                        <!-- Offer end date -->
                                        <div class="">
                                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                                <div class="uk-width-auto">
                                                    <span class="uk-icon" uk-icon="icon: clock"></span>
                                                </div>

                                                <div class="uk-width-expand">
                                                    <span class="header-title">The offer ends in:</span>
                                                    <span class="offer-time">10 Days 04:01:55</span>
                                                </div>

                                                <div class="uk-width-auto">
                                                    <span class="uk-icon" uk-icon="icon: heart"></span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>

                    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

                </div>

                <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

            </div>
    </section>

    <!-- Ads packages -->
    <section class="packages">
        <div class="uk-container">
            <div class="uk-flex uk-flex-center">
                <h3>Pricing Packages</h3>
            </div>
            <div class="uk-grid-small" uk-grid>
                <div class="uk-width-1-4@s">
                    <div class="uk-card uk-card-default">
                        <div class="uk-card-body uk-card-primary uk-text-center">
                            <h4>$10.00</h4>
                        </div>
                        <div class="uk-card-body uk-text-center">
                            <p>Once you create an account you will be able to submit for <b>10</b> ads for free</p>
                            <br />
                            <br />
                            <button class="uk-button uk-button-primary">Register Now</button>
                        </div>
                    </div>
                </div>

                <div class="uk-width-1-4@s">
                    <div class="uk-card uk-card-default">
                        <div class="uk-card-body uk-card-secondary uk-text-center">
                            <h4>$10.00</h4>
                        </div>
                        <div class="uk-card-body uk-text-center">
                            <p>Once you create an account you will be able to submit for <b>10</b> ads for free</p>
                            <br />
                            <br />
                            <button class="uk-button uk-button-secondary">Purchase Now</button>
                        </div>
                    </div>
                </div>

                <div class="uk-width-1-4@s">
                    <div class="uk-card uk-card-default">
                        <div class="uk-card-body uk-card-primary uk-text-center">
                            <h4>$10.00</h4>
                        </div>
                        <div class="uk-card-body uk-text-center">
                            <p>Once you create an account you will be able to submit for <b>10</b> ads for free</p>
                            <br />
                            <br />
                            <button class="uk-button uk-button-primary">Purchase Now</button>
                        </div>
                    </div>
                </div>

                <div class="uk-width-1-4@s">
                    <div class="uk-card uk-card-default">
                        <div class="uk-card-body uk-card-secondary uk-text-center">
                            <h4>$10.00</h4>
                        </div>
                        <div class="uk-card-body uk-text-center">
                            <p>Once you create an account you will be able to submit for <b>10</b> ads for free</p>
                            <br />
                            <br />
                            <button class="uk-button uk-button-secondary">Purchase Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php if(session()->has('error')): ?>
<script>
    UIkit.notification("<div class='uk-alert-danger'><?php echo e(session('error')); ?></div>")
</script>
<?php endif; ?>
<?php if(session()->has('error-login')): ?>
<script>
    UIkit.notification("<div class='uk-alert-danger'><?php echo e(session('error-login')); ?></div>")
    UIkit.modal("#seller-login-modal").show()
</script>
<?php endif; ?>

<script>
    $(document).ready(function(){
      $(document).on("submit", "#seller-signup", function(){
          var form_data = new FormData(this)
          var url = $(this).attr('action')
            $.ajax({
                type: "POST", 
                url: url, 
                data: form_data,
                dataType: 'json',
                contentType: false,
                processData: false,
                cache: false,
                beforeSend: function(){
                    UIkit.notification("<div class='uk-alert-info'>Processing</div>")
                    $("#seller-signup .uk-alert-danger").remove();
                    $("#seller-signup input").css({border: "1px solid #ccc"});
                },
                success: function(data){
                    UIkit.notification({
                        message: data.status,
                        status: 'success',
                        pos: 'top-center',
                        timeout: 5000
                    });
                    $("#seller-signup")[0].reset();
                    UIkit.modal("#register-modal").hide()
                },
                error: function(data, exception){
                    var inputs = ['first_name', 'last_name','sector_id', 'phone', 'email', 'city', 'password', 'reg_cert', 'com_cert', 'agree_terms'];
                    $.each(data.responseJSON.errors, function(index, value){
                        $.each(inputs, function(i, v){
                            if(index == v){
                                $("input[name="+v+"]").after("<div class='uk-alert uk-alert-danger'>"+value+"</div>")
                                $("input[name="+v+"]").css({border: "1px solid red"})
                            }
                        })
                        
                    })
                }

            })
          return false;
      })
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\{}{}{}{}{}{}{}{}{}\LESSONSS\Courses + Projects\Projects\Al masre project\online_shopping-master\resources\views/home/home.blade.php ENDPATH**/ ?>