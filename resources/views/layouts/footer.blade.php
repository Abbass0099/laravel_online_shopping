<footer>
    <div class="links-footer">
        <div class="uk-child-width-1-5@s" uk-grid>
            <div class="shop-pic">
                <img src="{{asset('assets/images/shopping.png')}}" alt="">
            </div>
            <div class="links-list">
                <b>Shopping Now</b>
                <ul class="uk-list">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">All sectors</a></li>
                    <li><a href="#">Parmacy products</a></li>
                    <li><a href="#">Chimecal products</a></li>
                    <li><a href="#">Device products</a></li>
                    <li><a href="#">Food products</a></li>
                    <li><a href="#">Cosemetics&Beauty</a></li>
                    <li><a href="#">Other products</a></li>
                </ul>
            </div>
            <div>
                <b>Quick links</b>
                <ul class="uk-list">
                    <li><a href="{{url('how-it-works')}}">How it works</a></li>
                    <li><a href="{{url('contact-us')}}">Contact us</a></li>
                    <li><a href="#">Terms and conditions</a></li>
                </ul>
            </div>
            <div class="links-social uk-text-center">
                <b>Follow Us</b>
                <br />
                <br />
                <div>
                    <a href="#"><span class="uk-icon uk-icon-button" uk-icon="icon: facebook"></span></a>
                    <a href="#"><span class="uk-icon uk-icon-button" uk-icon="icon: google"></span></a>
                    <a href="#"><span class="uk-icon uk-icon-button" uk-icon="icon: twitter"></span></a>
                </div>
            </div>
            <div uk-grid>
                <table>
                    <tr>
                        <td>
                            <img src="{{asset('assets/images/The-FACE-Baked-Blush-Nectar-768x768.jpg')}}" width="90" height="50" alt="">
                        </td>
                        <td>
                            <ul class="uk-list">
                                <li>Velvet Plush</li>
                                <li>$40.00</li>
                                <li>Cosmetics&Beauty</li>
                            </ul>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="contact-us">
        <div class="uk-child-expand-1-1@s uk-flex uk-flex-center" uk-grid>
            <div>
                <h4 class="uk-text-center">We are always at your service! Contact Us</h4>
                <div uk-grid>
                    <div class="uk-width-auto@s">
                        <table>
                            <tr>
                                <td rowspan="2"><span class="uk-icon uk-icon-large uk-icon-button" uk-icon="icon: question; ratio: 2"></span></td>
                                <td>Help Center</td>
                            </tr>
                            <tr>
                                <td>You have a query or a problem</td>
                            </tr>
                        </table>
                    </div>
                    <div class="uk-width-auto@s">
                        <table>
                            <tr>
                                <td rowspan="2"><span class="uk-icon uk-icon-large uk-icon-button" uk-icon="icon: mail; ratio: 2"></span></td>
                                <td>Help Center</td>
                            </tr>
                            <tr>
                                <td>info@onlineshop.com</td>
                            </tr>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="copyrights">
        <div class="uk-child-expand-1-1@s uk-flex uk-flex-center" uk-grid>
            <div class="copyright-date">
                <hr />
                Copyright&copy {{date('Y')}} ShoppingNow.com. All rights reserved.<br />
            </div>
        </div>
    </div>
</footer>

<!-- Registration modal -->
<div id="register-modal" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <!-- <button class="uk-modal-close" uk-icon="close" type="button"></button> -->
        <h2 class="uk-modal-title">Register</h2>
        <div class="">
            <div class="uk-child-width-1-1@s uk-flex uk-flex-center uk-flex-middle">
            <form class="uk-grid-small uk-form-stacked" action="{{url('seller_register')}}" id="seller-signup" uk-grid enctype="multipart/form-data">
                    @csrf
                    <div class="uk-inline uk-width-1-2@s">
                        <label for="" class="uk-form-label">First name</label>
                        <input class="uk-input" type="text" name="first_name" placeholder="Enter first name">
                    </div>

                    <div class="uk-inline uk-width-1-2@s">
                        <label for="" class="uk-form-label">Last name</label>
                        <input class="uk-input" type="text" name="last_name" placeholder="Enter last name">
                    </div>

                    <div class="uk-inline uk-width-1-2@s">
                        <label for="" class="uk-form-label">Email</label>
                        <input class="uk-input" type="email" name="email" placeholder="Enter your email">
                    </div>

                    <div class="uk-inline uk-width-1-2@s">
                        <label for="" class="uk-form-label">Sector</label>
                        <select name="sector_id" id="" class="uk-select">
                            <option value="">Select one sector</option>
                            @if(!empty($sectors))
                            @foreach($sectors as $sector)
                            <option value="{{$sector->id}}">{{ucfirst($sector->sector_name)}}</option>
                            @endforeach
                            @endif
                        </select>
                    </div>

                    <div class="uk-inline uk-width-1-2@s">
                        <label for="" class="uk-form-label">Phone</label>
                        <input class="uk-input" type="text" name="phone" placeholder="Enter your phone">
                    </div>

                    <div class="uk-inline uk-width-1-2@s">
                        <label for="" class="uk-form-label">City</label>
                        <input class="uk-input" type="text" name="city" placeholder="Enter your city">
                    </div>

                    <div class="uk-inline uk-width-1-2@s">
                        <label for="" class="uk-form-label">Password</label>
                        <input class="uk-input" type="password" name="password" placeholder="Enter your password">
                    </div>

                    <div class="uk-inline uk-width-1-2@s">
                        <label for="" class="uk-form-label">Confirm password</label>
                        <input class="uk-input" type="password" name="password_confirmation" placeholder="Re-enter your password">
                    </div>

                    <div class="uk-inline uk-width-1-2@s">
                        <label for="" class="uk-form-label">Registration certificate</label>
                        <input class="uk-input" type="file" name="reg_cert">
                    </div>

                    <div class="uk-inline uk-width-1-2@s">
                        <label for="" class="uk-form-label">Commercial certificate</label>
                        <input class="uk-input" type="file" name="com_cert" placeholder="Enter email address">
                    </div>
                    <div class="uk-inline uk-width-1-2@s">
                        <input type="checkbox" class="uk-checkbox" name="agree_terms"> I agree to the Service policy <a href="#">Terms&conditions</a>
                    </div>
                    <div class="uk-inline uk-width-1-1@s uk-text-center">
                        <input class="uk-button uk-button-primary uk-width-full" type="submit" name="sign_up" value="Sign Up">
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<div id="seller-login-modal" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <!-- <button class="uk-modal-close" uk-icon="close" type="button"></button> -->
        <h2 class="uk-modal-title">Login</h2>
        <div class="">
            <div class="uk-child-width-1-1@s uk-flex uk-flex-center uk-flex-middle">
            <form class="uk-grid-small uk-form-stacked" action="{{url('seller_login')}}" id="seller-login-form" uk-grid>
                    @csrf
                    <div class="uk-inline uk-width-1-2@s">
                        <label for="" class="uk-form-label">Email</label>
                        <input class="uk-input" type="text" name="email" placeholder="Enter your email">
                    </div>

                    <div class="uk-inline uk-width-1-2@s">
                        <label for="" class="uk-form-label">Password</label>
                        <input class="uk-input" type="password" name="password" placeholder="Enter your email">
                    </div>
                    <div class="uk-inline uk-width-1-2@s">
                        <input type="checkbox" class="uk-checkbox" name="remember"> Remember Me                    </div>
                    <div class="uk-inline uk-width-1-1@s uk-text-center">
                        <a href="#">Forgotten your password?</a>
                        <br />
                        <input class="uk-button uk-button-primary uk-width-full" type="submit" name="sign_up" value="Login">
                        <div id="result"></div>
                    </div>
                    <div class="uk-inline uk-width-1-1@s uk-text-center">
                        <hr>
                        <div>
                                <a href="#"><span class="uk-icon uk-icon-button" uk-icon="icon: facebook"></span></a>
                                <a href="#"><span class="uk-icon uk-icon-button" uk-icon="icon: google"></span></a>
                                <a href="#"><span class="uk-icon uk-icon-button" uk-icon="icon: twitter"></span></a>
                        </div>
                        Don't have an account? <a href="#" onclick="swithToSignUp(this)"><b>Sign up.</b></a>
                    </div>   
                </form>
</div>
<script src="{{asset('assets/js/jquery-1.11.1.min.js')}}" type="text/javascript"></script>
@yield('scripts')
<script type="text/javascript">
function swithToSignUp(event){
    var regForm = "#register-modal"
    var logForm = "#seller-login-modal"
    // Hide login form 
    UIkit.modal(logForm).hide();
    // Show register form
    UIkit.modal(regForm).show();

}

 // Form login 
 $(document).on("submit", "#seller-login-form", function(){
     var url = $(this).attr('action')
     var form_data = new FormData(this)

     $.ajax({
        url: url,
        type: "POST",
        contentType: false,
        dataType: 'json',
        data: form_data,
        processData: false,
        cache: false,
        beforeSend:function(){
            UIkit.notification("<div id='process' class='uk-alert uk-alert-info'>Processing</div>")
        },
        success: function(data){
            if(data.status == true){
                window.location.href= data.msg
            }else{
                $("#seller-login-form #result").html("<div class='uk-alert uk-alert-danger'>"+data.msg+"</div>")
            }
            UIkit.notification.closeAll()
        },
        error: function(data){
            $.each(data.responseJSON.errors, function(index, value){
                if(index == 'email'){
                    $("#seller-login-form input[name=email]").css({"border-color": "red"})
                    $("#seller-login-form input[name=email]").after("<div class='uk-alert uk-alert-danger'>"+value+"</div>")
                }
                else if(index == 'password'){
                    $("#seller-login-form input[name=password]").css({"border-color": "red"})
                    $("#seller-login-form input[name=password]").after("<div class='uk-alert uk-alert-danger'>"+value+"</div>")
                }
            })
            UIkit.notification.closeAll()
        }
     })
     return false;
 })
</script>
</body>

</html>