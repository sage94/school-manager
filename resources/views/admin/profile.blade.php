@extends('layouts.main')

@section('header')
@include('partials.admin.header')
@endsection


@section('body')
<!--Body goes here-->
      <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3> Admin Profile</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Your Current Profile</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                     
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="col-md-10 col-md-offset-1 col-sm-9 col-xs-12 profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar">
                          <!-- Current avatar -->
                          <img class="img-responsive avatar-view" src="/images/img.jpg" alt="Avatar" title="Change the avatar">
                        </div>
                      </div>
                      <h3>{{Auth::user()->name}}</h3>
                      <ul class="list-unstyled user_data">
                        <li><i class="fa fa-map-marker user-profile-icon"></i>{{Auth::user()->email}}
                        </li>
                        <li><i class="fa fa-map-marker user-profile-icon"></i>{{Auth::user()->phone}}
                        </li>

                        <li>
                          <i class="fa fa-briefcase user-profile-icon"></i> {{Auth::user()->gender}}
                        </li>

                        <li class="m-top-xs">
                          <i class="fa fa-external-link user-profile-icon"></i>
                          <a href="http://www.kimlabs.com/profile/" target="_blank">www.kimlabs.com</a>
                        </li>
                      </ul>

                      <br />

                      <!-- start skills -->
                      <h4>Skills</h4>
                      <ul class="list-unstyled user_data">
                        <li>
                          <p>Web Applications</p>
                          <div >
                            <p>Web Applications</p>
                          </div>
                        </li>
                       
                      </ul>
                      <!-- end of skills -->

                    </div>
                   
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
        
@endsection

@section('footer')
  @include('partials.admin.footer')
@endsection


@section('scripts')
   <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
   

    <!-- Custom Theme Scripts -->
    <script src="../js/custom.js"></script>

  </body>
</html>
@endsection