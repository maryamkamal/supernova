
<!-- Contact Section -->
<div class="contactus-1 section-image" style="background-image: url('design/frontEnd/subernovaSite/contact/photos/any.jpg'); padding-top: 50px">

    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h2 class="title">Get in Touch</h2>
                <h4 class="description">You need more information? Check what other persons are saying about our product. They are very happy with their purchase.</h4>
                <div class="info info-horizontal">
                    <div class="icon icon-primary">
                        <i class="fas fa-map-marker-alt fa-2x"></i>
                    </div>
                    <div class="description">
                        <h4 class="info-title">Find us at the office</h4>
                        <p class="description"> Ali Zaki Tower,<br> Zagazig Ash SharQuiya Egypt
                        </p>
                    </div>
                </div>
                <div class="info info-horizontal">
                    <div class="icon icon-primary">
                        <i class="fas fa-mobile fa-2x"></i>
                    </div>
                    <div class="description">
                        <h4 class="info-title">Give us a ring</h4>
                        <p class="description"> Ahmed Elsayed<br>
                            01553636161<br>
                            Sat - Fri, 8:00-22:00<br>
                            a7medelsayed087@gmail.com
                        </p>
                    </div>
                </div>

            </div>
            <div class="col-md-5 ml-auto mr-auto">
                <div class="card card-contact card-raised">
                    <form role="form" id="contact-form" method="post" action="{{url('/store/Contact')}}">
                    {{ csrf_field() }}
                        <div class="card-header text-center">
                            <h4 class="card-title">Contact Us</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6  px-2{{ $errors->has('fname') ? ' has-error' : '' }}" style="max-width: 100%">
                                    <label>First name</label>
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text" style="padding-right: 17px;">
                                            <i class="fas fa-user fa-2x"></i>
                                        </span>
                                      </div>
                                      <input type="text" name="fname" class="form-control" placeholder="First Name..." aria-label="First Name..." style="padding:26px" value="{{ old('fname') }}" required >
                                     @if ($errors->has('fname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fname') }}</strong>
                                    </span>
                                    @endif
                                    </div>
                                </div>
                                <div class="col-md-6  pl-2 " style="max-width: 100%">
                                    <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                                        <label>Last name</label>
                                        <div class="input-group">
                                          <div class="input-group-prepend" style="max-width: 100%">
                                            <span class="input-group-text" style="padding-right: 17px">
                                                <i class="fas fa-user fa-2x"></i>
                                            </span>
                                          </div>
                                          <input type="text"  name="lname" class="form-control" placeholder="Last Name..." aria-label="Last Name..." style="padding:26px;padding-left: 14px" value="{{ old('lname') }}" required >
                                        @if ($errors->has('lname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lname') }}</strong>
                                    </span>
                                     @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Email address</label>
                                <div class="input-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text" style="padding-right: 17px">
                                        <i class="fas fa-envelope fa-2x"></i>
                                    </span>
                                  </div>
                                  <input type="text" name="email" class="form-control" placeholder="Email Here..." style="padding:26px" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                </div>
                            </div>
                            <div class="form-group {{ $errors->has('message') ? ' has-error' : '' }}">
                                <label>Your message</label>
                                <textarea name="message" class="form-control" id="message" rows="6" placeholder="type your message..." value="{{ old('message') }}" required></textarea>
                            @if ($errors->has('message'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="row">
                                    <div class="col-md-6 ">
                                      
                                      <!-- If you want to add recaptcha -->

                                   <!--    <div class="custom-control custom-checkbox my-1 mr-sm-2">
                                            <input type="checkbox" class="custom-control-input" id="customControlInline">
                                            <label class="custom-control-label" for="customControlInline"> 
                                                <p style="color:light; text-decoration: none;"> I am not a robot</p>
                                               </label>
                                        </div> -->

                                        <!-- ------------------------------ -->
  
                                    </div>
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary btn-round pull-right">Send Message</button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- End Contatact -->

                <!-- Start overlay loading sectionn -->
                <section class="load-overlay">
                         <div class='wrap'>
                             <div class='angle'></div>
                             <div class='angle'></div>
                             <div class='angle'></div>
                             <div class='angle'></div>
                         </div>
                         <svg version='1.1' xmlns='http://www.w3.org/2000/svg'>
                             <defs>
                                 <filter id='goo'>
                                     <fegaussianblur in='SourceGraphic' result='blur' stddeviation='12'></fegaussianblur>
                                     <fecolormatrix in='blur' mode='matrix' result='goo' values='1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9'></fecolormatrix>
                                     <fecomposite in2='goo' in='SourceGraphic' operator='atop'></fecomposite>
                                 </filter>
                             </defs>
                         </svg>
                </section>

<!-- End Section -->

    <!-- Scripts and jquery files  -->
    <!-- ================================== -->

    <script type="text/javascript" src="{{ url('design/frontEnd/subernovaSite/mywork_makerspace_login_register/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('design/frontEnd/subernovaSite/all/js/jquery-1.11.1.min-1.js') }}"></script>
    <script src="{{ url('design/frontEnd/subernovaSite/all/js/Modernizr.js') }}"></script>
    <script type="text/javascript" src="{{ url('design/frontEnd/subernovaSite/mywork_makerspace_login_register/js/jquery.nicescroll.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('design/frontEnd/subernovaSite/mywork_makerspace_login_register/js/plugins.js') }}"></script>

    <script type="text/javascript" src="{{ url('design/frontEnd/subernovaSite/mywork_makerspace_login_register/js/ninja-slider.js') }}"></script>
    <script type="text/javascript" src="{{ url('design/frontEnd/subernovaSite/all/js/wow.min.js') }}"></script>





   <script src="{{ url('design/frontEnd/subernovaSite/all/js/jquery-1.11.1.min-1.js') }}"></script>
   
   <script src="{{ url('design/frontEnd/subernovaSite/all/js/bootstrap.min.js') }}"></script>




    <script>
        new WOW().init();

    </script>
    <!-- ================================== -->
</body>

</html>
