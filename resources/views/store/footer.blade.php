<!-- start footer -->
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

    
    <!-- Modal  for Enroll Course-->

  <div class="modal fade" id="enrollCourse" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-center" id="exampleModalLabel"
          style="font-size:20px;font-family:monospace">
             User Info</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <!-- <span aria-hidden="true">&times;</span> -->
          </button>
        </div>
        <div class="modal-body">
            <form method="POST" action="{{route('order-store')}}">
		  {{csrf_field()}}
              <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" id="exampleInpuText" name="name" >
                <br>
                
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                <br><br>
                <label for="phone">Mobile Phone</label>
                <input type="text" class="form-control" id="phone" name="phone">
                <small id="phonehelp" class="form-text text-muted">use your available phone to contact with you</small>
                <br><br>
              </div>
              <button type="submit" class="btn btn-primary">Submit Orders</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!-- End Update profile section -->



    <!-- End Courses Section -->
  <div class="clear"></div>





   <script type="text/javascript" src="{{ url('design/frontEnd/subernovaSite/store/js/action.js') }}"></script>

   <script src="{{ url('design/frontEnd/subernovaSite/all/js/jquery-1.11.1.min-1.js') }}"></script>
   <script src="{{ url('design/frontEnd/subernovaSite/all/js/bootstrap.min.js') }}"></script>

</body>
</html>