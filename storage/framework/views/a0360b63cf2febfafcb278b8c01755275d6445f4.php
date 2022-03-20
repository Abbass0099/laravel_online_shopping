<!-- Navbar -->
<nav class="uk-navbar uk-navbar-container" uk-navbar>
    <a href="#my-id" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>
    <div class="uk-navbar-left">
        <a href="/" class="uk-navbar-item uk-logo uk-light">Shopping Now</a>
        <ul class="uk-navbar-nav">
            <li><a href="#" class="uk-navbar-item">عربي</a></li>
        </ul>
    </div>
    <div class="uk-navbar-center">
        <ul class="uk-navbar-nav">
            <li class="uk-active"><a href="/">Home</a></li>
            <li><a href="<?php echo e(url('about-us')); ?>">About Us</a></li>
            <li><a href="#">Cart</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </div>
    <div class="uk-navbar-right">
        <ul class="uk-navbar-nav">
            <?php if(!\Auth::guard('seller')->check()): ?>
            <li><a href="#"><span uk-icon="bell"></span>Notifications</a></li>
            <li><a href="#" uk-toggle="target: #seller-login-modal" type="button"><span uk-icon="lock"></span> Login</a></li>
            <li><a href="#" uk-toggle="target: #register-modal" type="button"><span uk-icon="user"></span> Register</a></li>
            <?php endif; ?>
            <li>
                    <a href="<?php echo e(url('ads/create')); ?>" class="uk-button uk-button-primary uk-submit-add">
                        <span style="display: inline" uk-icon="file-edit"></span> Submit Ad
                    </a>
            </li>
        </ul>
    </div>
</nav><?php /**PATH D:\{}{}{}{}{}{}{}{}{}\LESSONSS\Courses + Projects\Projects\Al masre project\online_shopping-master\resources\views/layouts/navbar.blade.php ENDPATH**/ ?>