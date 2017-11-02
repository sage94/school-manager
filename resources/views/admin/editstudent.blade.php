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
                <h3>Profile Update</h3>
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
                    <h2>Update your Profile</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                      
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">


                    <!-- Smart Wizard -->
                    <p>Only correct information should be entered.</p>
                     <div class="col-md-8 col-md-offset-2 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-bars"></i> Profile Update</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div class="col-xs-3">
                      <!-- required for floating -->
                      <!-- Nav tabs -->
                      <ul class="nav nav-tabs tabs-left">
                        <li class="active"><a href="#home" data-toggle="tab">Personal Information</a>
                        </li>
                        <li><a href="#profile" data-toggle="tab">Background Information</a>
                        </li>
                        <li><a href="#messages" data-toggle="tab">Academic Informaton</a>
                        </li>
                        <li><a href="#settings" data-toggle="tab">About Yourself</a>
                        </li>
                      </ul>
                    </div>

                    <div class="col-xs-9">
                      <!-- Tab panes -->
                      <div class="tab-content">
                        <div class="tab-pane active" id="home">
                               <form  method="post" action="/admin/registerstudents" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                                  {{csrf_field()}}
                                  <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span class="required">*</span>
                                    </label>
                                    <div class="col-md-8 col-xs-12">
                                      <input type="text" id="name" name='name' required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                  </div>

                            
                                  <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="regno">Registration Number <span class="required">*</span>
                                    </label>
                                    <div class="col-md-8  col-xs-12">
                                      <input type="text" id="username" name="username" required="required" class="form-control col-md-7 col-xs-12">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Session<span class="required">*</span></label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                      <select class="form-control" required="" name="session">
                                        <option disabled ="" selected ="">Select session</option>
                                        @foreach($sessions as $session)
                                        <option value = "{{$session->name}}">{{$session->name}}</option>

                                        @endforeach
                                      </select>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Level<span class="required">*</span></label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                      <select class="form-control" required="" name="level" >
                                        <option disabled ="" selected ="">Select Level</option>
                                        @foreach($levels as $level)
                                        <option value = "{{$level->name}}">{{$level->name}}</option>

                                        @endforeach
                                      </select>
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Class<span class="required">*</span></label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                      <select class="form-control" required="" name="klass">
                                        <option disabled ="" selected ="">Select Class</option>
                                        @foreach($klasses as $klass)
                                        <option value = "{{$klass->name}}">{{$klass->name}}</option>

                                        @endforeach
                                      </select>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Term<span class="required">*</span></label>
                                    <div class="col-md-8 col-sm-6 col-xs-12">
                                      <select class="form-control" required="" name="term">
                                        <option disabled ="" selected ="">Select Term</option>
                                        @foreach($terms as $term)
                                        <option value = "{{$term->name}}">{{$term->name}}</option>

                                        @endforeach
                                      </select>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
                                    <div class="col-md-8  col-xs-12">
                                      <div id="gender" class="btn-group" data-toggle="buttons">
                                        <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                          <input type="radio" name="gender" value="male"> &nbsp; Male &nbsp;
                                        </label>
                                        <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                          <input type="radio" name="gender" value="female"> Female
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                          
                                  <div class="form-group">
                                    <div class="col-md-8  col-xs-12 col-md-offset-3">
                                    <hr>
                                      <button type="submit" class="btn btn-success">Register Student</button>
                                      <button class="btn btn-primary" type="reset">Reset</button>
                                      
                                    </div>
                                  </div>

                                </form>

                            
                            
                             
                        </div>
                        <div class="tab-pane" id="profile">



                      @if(session('error'))
                        <div class="alert alert-danger"><p>{{session('error')}}</p></div>
                        @endif
                            <form method="post" action="/admin/editprofile" 
                            id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                            {{csrf_field()}}
                              <div class="form-group">
                                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="first-name">Nationality <span class="required">*</span>
                                </label>
                                <div class="col-md-8 col-sm-8 col-xs-12">
                                  <input type="text" id="first-name"  value="{{Auth::user()->country}}" required="required" disabled="true" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="phone">State of Origin<span class="required">*</span>
                                </label>
                                <div class="col-md-8 col-sm-8 col-xs-12">
                                  <input type="tel" id="phone" name="phone" value="{{Auth::user()->state}}" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="middle-name" class="control-label col-md-4 col-sm-4 col-xs-12">Local Government</label>
                                <div class="col-md-8 col-sm-8 col-xs-12">
                                  <input id="email" class="form-control col-md-7 col-xs-12" type="text" value="{{Auth::user()->lga}}" name="email">
                                </div>
                              </div>
                              
                              <div class="form-group">
                                <label class="control-label col-md-4 col-sm-4 col-xs-12">Residential Address <span class="required">*</span>
                                </label>
                                <div class="col-md-8 col-sm-8 col-xs-12">
                                  <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" value="{{Auth::user()->dateofbirth}}" required="required" name="dateofbirth" type="date">
                                </div>
                              </div>
                              <div class="ln_solid"></div>
                              <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                  
                                  <button class="btn btn-primary" type="reset">Reset</button>
                                  <button type="submit" class="btn btn-success">Update</button>
                                </div>
                              </div>

                            </form>

                        </div>
                        <div class="tab-pane" id="messages">

                        @if(session('error'))
                        <div class="alert alert-danger"><p>{{session('error')}}</p></div>
                        @endif
                            <form method="post" action="/admin/editprofile" 
                            id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                            {{csrf_field()}}
                              <div class="form-group">
                                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="first-name">Year of Addmission <span class="required">*</span>
                                </label>
                                <div class="col-md-8 col-sm-8 col-xs-12">
                                  <input type="text" id="first-name"  value="{{Auth::user()->name}}" required="required" disabled="true" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="phone">Level<span class="required">*</span>
                                </label>
                                <div class="col-md-8 col-sm-8 col-xs-12">
                                  <input type="tel" id="phone" name="phone" value="{{Auth::user()->phone}}" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="middle-name" class="control-label col-md-4 col-sm-4 col-xs-12">Class</label>
                                <div class="col-md-8 col-sm-8 col-xs-12">
                                  <input id="email" class="form-control col-md-7 col-xs-12" type="text" value="{{Auth::user()->email}}" name="email">
                                </div>
                              </div>
                              
                              <div class="form-group">
                                <label class="control-label col-md-4 col-sm-4 col-xs-12">House<span class="required">*</span>
                                </label>
                                <div class="col-md-8 col-sm-8 col-xs-12">
                                  <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" value="{{Auth::user()->dateofbirth}}" required="required" name="dateofbirth" type="date">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-4 col-sm-4 col-xs-12">Term<span class="required">*</span>
                                </label>
                                <div class="col-md-8 col-sm-8 col-xs-12">
                                  <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" value="{{Auth::user()->dateofbirth}}" required="required" name="dateofbirth" type="date">
                                </div>
                              </div>
                              <div class="ln_solid"></div>
                              <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                  
                                  <button class="btn btn-primary" type="reset">Reset</button>
                                  <button type="submit" class="btn btn-success">Update</button>
                                </div>
                              </div>

                            </form>



                        </div>
                        <div class="tab-pane" id="settings">
                           @if(session('error'))
                        <div class="alert alert-danger"><p>{{session('error')}}</p></div>
                        @endif
                            <form method="post" action="/admin/editprofile" 
                            id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                            {{csrf_field()}}
                              <div class="form-group">
                                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="first-name">Your Skills <span class="required">*</span>
                                </label>
                                <div class="col-md-8 col-sm-8 col-xs-12">
                                  <input type="text" id="first-name"  value="{{Auth::user()->name}}" required="required" disabled="true" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-4 col-sm-4 col-xs-12" for="phone">Areas of Interest<span class="required">*</span>
                                </label>
                                <div class="col-md-8 col-sm-8 col-xs-12">
                                  <input type="tel" id="phone" name="phone" value="{{Auth::user()->phone}}" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="middle-name" class="control-label col-md-4 col-sm-4 col-xs-12">Class</label>
                                <div class="col-md-8 col-sm-8 col-xs-12">
                                  <input id="email" class="form-control col-md-7 col-xs-12" type="text" value="{{Auth::user()->email}}" name="email">
                                </div>
                              </div>
                              
                              <div class="form-group">
                                <label class="control-label col-md-4 col-sm-4 col-xs-12">Best quotes<span class="required">*</span>
                                </label>
                                <div class="col-md-8 col-sm-8 col-xs-12">
                                  <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" value="{{Auth::user()->dateofbirth}}" required="required" name="dateofbirth" type="date">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-4 col-sm-4 col-xs-12">Posts Held<span class="required">*</span>
                                </label>
                                <div class="col-md-8 col-sm-8 col-xs-12">
                                  <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" value="{{Auth::user()->dateofbirth}}" required="required" name="dateofbirth" type="date">
                                </div>
                              </div>
                              <div class="ln_solid"></div>
                              <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                  
                                  <button class="btn btn-primary" type="reset">Reset</button>
                                  <button type="submit" class="btn btn-success">Update</button>
                                </div>
                              </div>

                            </form>


                        </div>
                      </div>
                    </div>

                    <div class="clearfix"></div>

                  </div>
                </div>
              </div>
                    <!-- End SmartWizard Content -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
 
        
@endsection

@section('footer')
  @include('partials.teachers.footer')
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
    <!-- jQuery Smart Wizard -->
    <script src="../vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../js/custom.js"></script>
@endsection