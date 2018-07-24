<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>Todays Appointments</title>
    <meta name="description" content="ONLINE APPOINTMENT SCHEDULING PLATFORM ">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicons -->
    <link rel="shortcut icon" href="/assets/images/favicon.ico">

    <link rel="apple-touch-icon" sizes="57x57" href="/assets/images/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/assets/images/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/assets/images/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/images/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/assets/images/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/assets/images/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/assets/images/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/assets/images/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/assets/images/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/assets/images/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon-16x16.png">
    <link rel="manifest" href="/assets/images/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/assets/images/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- end favicon -->

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap -->
    <link href="https://www.booknmeet.com/assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://www.booknmeet.com/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Datatables -->
    <link href="https://www.booknmeet.com/assets/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="https://www.booknmeet.com/assets/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="https://www.booknmeet.com/assets/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="https://www.booknmeet.com/assets/custom/custom.css" rel="stylesheet">

    <link href="https://www.booknmeet.com/assets/dropdownstyle/css/cs-select.css" rel="stylesheet">
    <link href="https://www.booknmeet.com/assets/dropdownstyle/css/cs-skin-border.css" rel="stylesheet">

    <link href="/css/app.css?v=13" rel="stylesheet">

</head>


<body class="nav-md footer_fixed">
    <div class="container body">
        <div class="main_container">

            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="https://www.booknmeet.com/dashboard" class="site_title"><img src="https://www.booknmeet.com/images/logo-BOOKNMET-ICON.png"  alt="..." id="logo_small"><img src="https://www.booknmeet.com/images/logo-booknmeet.png"  alt="..." id="logo_large"></a>
                    </div>
                    <div class="clearfix"></div>

                    <!-- menu prile quick info -->
                    <div class="profile">
                        <div class="profile_pic">
                            <img src="https://www.booknmeet.com/images/img.png" alt="" class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Welcome,</span>


                            <h2>Dr. Santhi</h2>
                            <h2>Dr Santhis Clinic</h2>
                            <h2>Pandra</h2>
                        </div>
                    </div>
                    <!-- /menu prile quick info -->

                    <br />


                    <!-- sidebar menu -->

                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                        <div class="menu_section">
                            <h3>&nbsp;</h3>
                            <ul class="nav side-menu">
                                <li><a><i class="fa fa-clock-o"></i> Appointments <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="/">Todays Appointments</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                    </div>

                    <!-- /sidebar menu -->



                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                        <a data-toggle="tooltip" data-placement="top" target="_blank" href="https://facebook.com/booknmeet" title="Facebook">
                            <!--<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>-->

                            <i class="fa fa-facebook-f"></i>
                        </a>
                        <a data-toggle="tooltip" data-placement="top" target="_blank" href="https://twitter.com/booknmeet" title="Twitter">
                  <i class="fa fa-twitter"></i>
                </a>
                        <a data-toggle="tooltip" data-placement="top" target="_blank" href="https://plus.google.com/+Booknmeet" title="Google Plus">
                  <i class="fa fa-google-plus"></i>
                </a>
                        <a data-toggle="tooltip" data-placement="top" target="_blank" href="https://in.linkedin.com/in/booknmeet" title="LinkedIn">
                   <i class="fa fa-linkedin"></i>
                </a>
                    </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <nav class="" role="navigation">
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
				                    <img src="https://www.booknmeet.com/images/img.png" alt="">

				                        Dr. Santhi

                  <span class=" fa fa-angle-down"></span>
                </a>
                                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                                    <li>
                                        <a href="https://www.booknmeet.com/profile/multiple-profile"><i class="fa fa-key pull-right"></i> Switch Profile</a>
                                    </li>
                                    <li><a href="https://www.booknmeet.com/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                    </li>
                                </ul>
                            </li>
                            <li role="presentation" class="dropdown">
                                <a href="/dashboard" class="dropdown-toggle info-number" aria-expanded="false">
                    <i class="fa fa-book"></i>
                    <span class="badge bg-green newAppCount"></span>
                  </a>
                            </li>

                        </ul>
                        <audio id="sound"><source src="/bing.mp3" type="audio/mpeg"></audio>
                    </nav>
                    <div class="ui-pnotify dark ui-pnotify-fade-normal ui-pnotify-in ui-pnotify-fade-in ui-pnotify-move" aria-live="assertive" aria-role="alertdialog" style="display: none;position:absolute;width: 187px;right: 36px;top: 36px;cursor: auto;">
                        <div class="alert ui-pnotify-container alert-info ui-pnotify-shadow" role="alert" style="min-height: 16px;">
                            <div class="ui-pnotify-closer" aria-role="button" tabindex="0" title="Close" style="cursor: pointer; visibility: hidden; display: none;"><span class="glyphicon glyphicon-remove"></span></div>
                            <div class="ui-pnotify-sticker" aria-role="button" aria-pressed="true" tabindex="0" title="Unstick" style="cursor: pointer; visibility: hidden; display: none;"><span class="glyphicon glyphicon-play" aria-pressed="true"></span></div>
                            <div class="ui-pnotify-text" aria-role="alert">New appointment request</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /top navigation -->

            <!-- page content -->
            <div class="right_col" role="main">

                <br />
                <div class="right_col_container">
                    <div class="flash-message">
                    </div>
                    <!-- end .flash-message -->

                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Todays Appointments<small></small></h2>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <form method="POST" action="https://www.booknmeet.com/dashboard/today-appointments" accept-charset="UTF-8"><input name="_token" type="hidden" value="3oJqmpONVg6xPKCp7ITmSQl0njFufeCKwhehY3P6">
                                        <table id="datatable-responsive" class="table table-striped dt-responsive nowrap" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>Staff</th>
                                                    <th>Service</th>
                                                    <th>Time</th>
                                                    <th>Status</th>
                                                    <th>Name</th>
                                                    <th>Mobile Number</th>
                                                    <th>Email</th>
                                                    <th>Address</th>
                                                    <th>Description</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </form>

                                </div>
                            </div>
                        </div>

                        <br />
                        <br />
                        <br />
                    </div>
                </div>
            </div>

            <div class="modal fade bs-recurring-modal-lg in" tabindex="-1" role="dialog" aria-hidden="true" style="display: none; padding-right: 15px;">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">

                        <div class="modal-header" id="pres_tab">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

                            <ul class="nav nav-tabs">

                                <li class="active"><a data-toggle="tab" href="#new_prescription">New Prescription</a></li>
                                <li><a data-toggle="tab" href="#p_history" onclick="get_history()">Prescription History</a></li>

                            </ul>

                        </div>
                        <div class="modal-body" id="pres_modal">


                            <div class="tab-content">
                                <div id="new_prescription" class="tab-pane fade in active">



                                    <form accept-charset="UTF-8" id="rcapp" data-parsley-validate>

                                        <div class="input_fields_wrap">
                                          <div class="m_initial card" style="border-radius: 10px; border: 1px solid rgb(26, 187, 156);">
                                            <div class="card-body" style="padding: 22px 18px 7px 20px;">

                                              <div class="row" id="m_name">
                                                  <div class="form-group">
                                                      <div class="col-md-2 col-xs-12">
                                                          <label for="medicine">Enter Medicine *</label>
                                                      </div>
                                                      <div class="col-md-3 col-xs-12">
                                                          <input type="text" class="form-control typeahead tt-query" autocomplete="off" spellcheck="false" required="" id="med_name" name="med_name">
                                                      </div>
                                                      <div class="col-md-3 col-xs-12" id="m_form_label">
                                                          <label for="m_brand">Brand *</label>
                                                      </div>
                                                      <div class="col-md-3 col-xs-12">
                                                          <input type="text" class="form-control typeahead tt-query" autocomplete="off" spellcheck="false" required="" id="med_brand" name="med_brand">
                                                      </div>
                                                  </div>
                                              </div>
                                              <br>


                                              <div class="row" id="m_strength">
                                                  <div class="form-group">
                                                      <div class="col-md-2 col-xs-12">
                                                          <label for="strength">Strength *</label>
                                                      </div>
                                                      <div class="col-md-3 col-xs-12">
                                                          <input class="form-control" id="med_strength" required="" placeholder="Dosage" name="med_strength" type="text">
                                                      </div>
                                                      <div class="col-md-3 col-xs-12" id="m_form_label">
                                                          <label for="m_form">Dosage Form *</label>
                                                      </div>
                                                      <div class="col-md-3 col-xs-12">
                                                          <select class="form-control" required="" id="m_form" name="m_form">
                                                            <option selected="selected" value="">Form..</option>
                                                            <option value="Tablet">Tablet</option>
                                                            <option value="Suspension">Suspension</option>
                                                            <option value="Ointment">Ointment</option>
                                                            <option value="Syrup">Syrup</option>
                                                            <option value="Eye Drop">Eye Drop</option>
                                                            <option value="Ear Drop">Ear Drop</option>
                                                            <option value="Suppository">Suppository</option>
                                                            <option value="Nebulizer">Nebulizer</option>
                                                            <option value="Inhaler">Inhaler</option>
                                                            <option value="Other">Other</option>
                                                          </select>
                                                      </div>
                                                  </div>
                                              </div>
                                              <br>

                                              <div class="row" id="m_dur">
                                                  <div class="form-group">
                                                      <div class="col-md-2 col-xs-12">
                                                          <label for="duration">Duration *</label>
                                                      </div>
                                                      <div class="col-md-1 col-xs-4">
                                                          <input name="duration" type="number" min="0" class="form-control" id="duration" placeholder=" " required data-parsley-errors-container="#msg-holder" >
                                                      </div>

                                                      <div class="col-md-2 col-xs-8">
                                                          <select name="time" id="time" class="form-control" >
                                                          <option value="Days">Days</option>
                                                          <option value="Weeks">Weeks</option>
                                                          <option value="Months">Months</option>
                                                        </select>
                                                      </div>

                                                  </div>

                                              </div>
                                              <div class="col-md-2"></div>
                                              <div class="col-md-3 col-xs-12" id="msg-holder" style="padding-left: 4px;"></div><br>
                                              <br>

                                              <div class="row" id="intake">
                                                  <div class="form-group">
                                                      <div class="col-md-2 col-xs-12">
                                                          <label for="med_intake">Intake *</label>
                                                      </div>
                                                      <div class="col-md-3 col-xs-12">
                                                          <div id="med_intake"  class="btn-group" data-toggle="buttons" >
                                                              <label class="btn btn-default" id="med_intake_but" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default" >
                                                                <input type="radio"  name="med_intake"  value="Before Food" data-parsley-errors-container="#checkbox-errors" required >Before food</label>
                                                              <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                                <input type="radio" name="med_intake"  value="After Food">After food</label>

                                                          </div>
                                                          <div id="checkbox-errors"></div>

                                                      </div>

                                                  </div>
                                              </div>
                                              <br>

                                              <div class="row" style="padding: 5px 0px 0px 0px;" id="timing">
                                                <div class="form-group" >

                                                  <div class="col-md-2 col-xs-12">
                                                      <label for="strength">Intake Time *</label>
                                                  </div>

                                                  <div class="col-sm-2">

                                                        <label class="control control--checkbox">Morning
                                                          <input type="hidden" name="mrngcheck" id="mrngcheck" value="0">
                                                          <input type="checkbox" value="1" id="mrngcheck1"  onchange="document.getElementById('mrngcheck').value = this.checked ? 1 : 0" data-parsley-multiple="d-s-c" required data-parsley-errors-container="#message-holder" >
                                                          <div class="control__indicator"></div>
                                                        </label>
                                                        <input class="m_input_dis form-control" type="text" id="mrng_qty" disabled="disabled" placeholder="Qty" >
                                                  </div>

                                                  <div class="col-sm-2">

                                                        <label class="control control--checkbox">Noon
                                                          <input type="hidden" name="nooncheck" id="nooncheck" value="0">
                                                          <input type="checkbox" value="1" id="nooncheck1" onchange="document.getElementById('nooncheck').value = this.checked ? 1 : 0" data-parsley-multiple="d-s-c" >
                                                          <div class="control__indicator"></div>
                                                        </label>
                                                        <input class="m_input_dis form-control" type="text" id="noon_qty" disabled="disabled" placeholder="Qty">
                                                  </div>

                                                  <div class="col-sm-2">

                                                        <label class="control control--checkbox">Evening
                                                          <input type="hidden" name="eveningcheck" id="eveningcheck" value="0">
                                                          <input type="checkbox" value="1" id="eveningcheck1" onchange="document.getElementById('eveningcheck').value = this.checked ? 1 : 0" data-parsley-multiple="d-s-c" >
                                                          <div class="control__indicator"></div>
                                                        </label>
                                                        <input class="m_input_dis form-control" type="text" id="evening_qty" disabled="disabled" placeholder="Qty">

                                                  </div>
                                                  <div class="col-sm-2">


                                                      <label class="control control--checkbox">Other
                                                        <input type="checkbox" value="1" id="other_check" data-parsley-multiple="d-s-c" >
                                                        <div class="control__indicator"></div>
                                                      </label>
                                                        <input class="m_input_dis form-control" type="text" id="custom_timing" disabled="disabled" >
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="col-md-2"></div>
                                              <p id="message-holder" ></p>
                                              <br>

                                              <div class="row" id="add_medicine">
                                                  <div class="form-group">
                                                      <div class="col-md-8 col-xs-12">
                                                        <button type="button" id="add_medicine" class="add_field_button btn btn-primary">Add Medicine</button>
                                                        <button class="btn btn-primary" id="m_reset" type="reset">Reset</button>
                                                      </div>
                                                  </div>
                                              </div>

                                            </div>
                                          </div>
                                        </div>

                                        <div class="input_fields_wrap" style="border-radius: 10px;">
                                            <div class="x_panel">
                                                <div class="x_title">
                                                  <h5><i class="fa fa-align-left"></i> Added Medicines </h5>
                                                  <div class="clearfix"></div>
                                                </div>

                                                <div class="x_content">
                                                  <!-- start accordion -->
                                                  <div id="input_pres" class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
                                                  </div>
                                                  <!-- end of accordion -->
                                                </div>
                                            </div>
                                        </div>


                                    <div class="card col-md-12 col-xs-12" id="m_desc" style="border: 1px solid rgb(26, 187, 156);">
                                      <div class="col-md-3 col-xs-12" style="padding:  10px 10px 10px 10px;">
                                        <label for="med_description">Description (Max Length:200) Optional </label>
                                      </div>
                                      <div class="col-md-9 col-xs-12" style="padding:  10px 10px 10px 10px;">
                                        <textarea class="form-control" data-parsley-trigger="keyup" data-parsley-maxlength="200" data-parsley-validation-threshold="10" name="med_description" cols="50" rows="5" id="med_description" data-gramm="true"  spellcheck="false"  style="z-index: auto; position: relative; line-height: 20px; font-size: 14px; transition: none; background: transparent !important;"></textarea>
                                      </div>
                                    </div>
                                    </form>

                                    <div class="col-md-8 col-sm-6 col-xs-12 col-md-offset-5">
                                      <button type="button" class="cancel btn btn-primary">Cancel</button>
                                      <button class="prescription_btn btn btn-success" id="submit">Submit</button>
                                    </div>



                                </div>


                                <div id="p_history" class="tab-pane fade in">


                                </div>
                            </div>
                        </div>

                </div>
            </div>
        </div>

    </div>


    <!-- Small modal -->

    <!-- footer content -->
    <footer>
        <div class="copyright-info">
            <p class="pull-right" style="font-size: 10px;margin:0">BOOKNMEET - Online Appointment Scheduling Platform by UILOCATE
            </p>
        </div>
        <div class="clearfix"></div>
    </footer>
    <!-- /footer content -->

    </div>
    <!-- /page content -->
    </div>


    <!-- jQuery -->
    <script src="https://www.booknmeet.com/assets/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="https://www.booknmeet.com/assets/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Parsley -->

    <script src="https://www.booknmeet.com/assets/parsleyjs/dist/parsley.min.js"></script>




    <!-- Datatables -->
    <script src="https://www.booknmeet.com/assets/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="https://www.booknmeet.com/assets/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="https://www.booknmeet.com/assets/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="https://www.booknmeet.com/assets/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="https://www.booknmeet.com/assets/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="https://www.booknmeet.com/assets/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="https://www.booknmeet.com/assets/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="https://www.booknmeet.com/assets/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="https://www.booknmeet.com/assets/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="https://www.booknmeet.com/assets/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="https://www.booknmeet.com/assets/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="https://www.booknmeet.com/assets/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="https://www.booknmeet.com/assets/moment/min/moment.min.js"></script>
    <script src="https://www.booknmeet.com/assets/datepicker/daterangepicker.js"></script>
    <script src="https://www.booknmeet.com/assets/typeahead.bundle.js"></script>
    <script>
        var app_id;
        var x = 0;
        var m_inval = null;
        var add_button = $(".add_field_button");
        var wrapper = $("#input_pres");
        $(document).ready(function() {
            setDataTable();

            $( "#other_check" ).on( "click", function() {
             $("#custom_timing").prop('disabled',!this.checked);
            });

            $( "#mrngcheck1" ).on( "click", function() {
              $("#mrng_qty").prop('disabled',!this.checked);
            });

            $( "#nooncheck1" ).on( "click", function() {
               $("#noon_qty").prop('disabled',!this.checked);
            });

            $( "#eveningcheck1" ).on( "click", function() {
              $("#evening_qty").prop('disabled',!this.checked);
            });

            $( "#other_check" ).on( "click", function() {
             $("#custom_timing").prop('disabled',!this.checked);
            });

            $("body").on('click', ".prescription", function() {
                $(".bs-recurring-modal-lg").show();
                app_id = $(this).attr('id');
                $("#rcapp_id").val(app_id);
            });

            $("body").on('click', ".cancel,.close", function() {
                $(this).parents(".modal").hide();
                $("#rcapp").parsley().reset();
                $("div[id='to_delete']").remove();
                $("#custom_timing").prop('disabled','disabled');
                $("#evening_qty").prop('disabled','disabled');
                $("#noon_qty").prop('disabled','disabled');
                $("#mrng_qty").prop('disabled','disabled');
            });

            $("body").on('click', "#m_reset", function() {
                $("#rcapp").parsley().reset();
                $("#custom_timing").prop('disabled','disabled');
                $("#evening_qty").prop('disabled','disabled');
                $("#noon_qty").prop('disabled','disabled');
                $("#mrng_qty").prop('disabled','disabled');
            });


            $("#med_intake > label.btn").on("click", function(){
                // num = +this.value;
                m_inval = $(this).find("input[name=med_intake]").val();
            });


            // Constructing the suggestion engine
            var medicine_names = new Bloodhound({
                datumTokenizer: Bloodhound.tokenizers.whitespace,
                queryTokenizer: Bloodhound.tokenizers.whitespace,
                prefetch: {url:'/get-medicine-names',cache:false}
            });


            // Initializing the typeahead
            $('#med_name').typeahead({
                hint: true,
                highlight: true, /* Enable substring highlighting */
                minLength: 1 /* Specify minimum characters required for showing result */
            },
            {
                source: medicine_names
            });

            // Constructing the suggestion engine
            var medicine_brands = new Bloodhound({
                datumTokenizer: Bloodhound.tokenizers.whitespace,
                queryTokenizer: Bloodhound.tokenizers.whitespace,
                prefetch: {url:'/get-medicine-brands',cache:false}
            });


            // Initializing the typeahead
            $('#med_brand').typeahead({
                hint: true,
                limit: 10,
                highlight: true, /* Enable substring highlighting */
                minLength: 1 /* Specify minimum characters required for showing result */
            },
            {
                source: medicine_brands
            });


            $("#med_name").change(function(){
              var medicine_name = $(this).val();

              $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
              });

              $.ajax({
                url: "/get-medicine-brand-on-name",
                method: 'post',
                data: {
                  medicine_name:medicine_name
                },
                success: function(data){

                  // Constructing the suggestion engine
                  var medicine_brands = new Bloodhound({
                      datumTokenizer: Bloodhound.tokenizers.whitespace,
                      queryTokenizer: Bloodhound.tokenizers.whitespace,
                      prefetch: {url:'/get-medicine-brand-on-name',cache:false}
                  });


                  // Initializing the typeahead
                  $('#med_brand').typeahead({
                      hint: true,
                      limit: 10,
                      highlight: true, /* Enable substring highlighting */
                      minLength: 1 /* Specify minimum characters required for showing result */
                  },
                  {
                      source: medicine_brands
                  });


                }
              });



            });

        });

        function setDataTable() {
            $('#datatable-responsive').DataTable({
                "destroy": true,
                processing: true,
                serverSide: true,
                ajax: {
                    "url": "<?= route('appointmentProcessing')?>",
                    "datatype": "json",
                    "type": "POST",
                    "data": {
                        "_token": "<?= csrf_token()?>"
                    }
                },
                aaSorting: [
                    [2, 'desc']
                ],
                columns: [{
                        data: 'staff',
                        name: 'bm_company_staff.staff_name'
                    },
                    {
                        data: 'service',
                        name: 'bm_services.service_name'
                    },
                    {
                        data: 'time',
                        name: 'appointment_time'
                    },
                    {
                        data: 'status',
                        name: 'appointment_status'
                    },
                    {
                        data: 'name',
                        name: 'bm_users.name'
                    },
                    {
                        data: 'mobile',
                        name: 'bm_users.mobile_number'
                    },
                    {
                        data: 'email',
                        name: 'bm_users.email'
                    },
                    {
                        data: 'address',
                        name: 'bm_users.address'
                    },
                    {
                        data: 'description',
                        name: 'description'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    }
                ]
            });
        };

        function get_history(){
          var mobile = "8921625606";
          $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });
          $.ajax({
            url: '/get_history',
            method: 'post',
            data: {
              mobile:mobile
            },
            success: function(data){
              $("#p_history").html('');
        			$("#p_history").html(data.details);
            }
          });

        };





        $(add_button).click(function(e) {
            e.preventDefault();

            x++;

            $("#rcapp").parsley().validate();
            if($("#rcapp").parsley().isValid())
            {
            var mname=document.getElementById("med_name").value;
            var mbrand=document.getElementById("med_brand").value;
            var mstrength=document.getElementById("med_strength").value;
            var mform=document.getElementById("m_form").value;
            var mdur=document.getElementById("duration").value;
            var mtime=document.getElementById("time").value;
            if (document.getElementById("mrngcheck").value==1) {
              var mrngcheck=1;
              var mrng ="Morning ";
            var mrng_qty=document.getElementById("mrng_qty").value;
            }
            else {
              var mrng="";
              var mrng_qty="";
            }
            if (document.getElementById("nooncheck").value==1) {
              var nooncheck=1;
              var noon=" Noon ";
            var noon_qty=document.getElementById("noon_qty").value;

            }
            else {
              var noon="";
              var noon_qty="";
            }
            if (document.getElementById("eveningcheck").value==1) {
              var eveningcheck=1;
              var evening=" Evening ";
              var evening_qty=document.getElementById("evening_qty").value;

            }
            else {
              var evening="";
              var evening_qty="";
            }
            var custom_timing=document.getElementById("custom_timing").value;

            var $div1 = ('<div id="to_delete"><div class="panel added_medicine col-md-11 col-xs-9"><a class="added_medicine_head panel-heading collapsed" role="tab" id="heading'+x+'" data-toggle="collapse" data-parent="#accordion" href="#collapse'+x+'" aria-expanded="false" aria-controls="collapse'+x+'"><h5 id="mname">'+mname+'</h5></a><div id="collapse'+x+'" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading'+x+'"><div class="panel-body row"><div class="col-md-2 card mlist_card"><h4 class="h_med">Brand</h4><p id="mbrand">'+mbrand+'</p></div><div class="col-md-2 card mlist_card"><h4 class="h_med">Strength</h4><p id="mstrength">'+mstrength+'</p></div><div class="col-md-2 card mlist_card"><h4 class="h_med">Dosage Form</h4><p id="mform">'+mform+'</p></div><div class="col-md-2 card mlist_card"><h4 class="h_med">Duration</h4><p id="mdur" style="display:inline;">'+mdur+'</p><p style="display:inline;"> </p><p id="mtime" style="display:inline;">'+mtime+'</p></div><div class="col-md-2 card mlist_card"><h4 class="h_med">Intake</h4><p id="mval">'+m_inval+'</p></div><div class="col-md-2 card mlist_card"><h4 class="h_med">Time and Quantity</h4><span id="mrng">'+mrng+'</span><span id="mrngqty">'+mrng_qty+'</span><br><span id="noon">'+noon+'</span><span id="noonqty">'+noon_qty+'</span><br><span id="evening">'+evening+'</span><span id="eveningqty">'+evening_qty+'</span></div><div class="col-md-2 card mlist_card"><h4 class="h_med">Other</h4><p id="customtiming">'+custom_timing+'</p></div></div><div><div class="col-md-1 col-xs-12" style="float:right; margin-right:10px; margin-bottom: 5px;"><button type="button" class="edit_medicine btn btn-primary">Edit</button></div></div></div></div><div class="col-md-1 col-xs-1"><button type="button" class="del_medicine btn btn-primary">Delete</button></div></div>');

            $(wrapper).append($div1);

            $('#rcapp')[0].reset();
            $("#custom_timing").prop('disabled','disabled');
            $("#evening_qty").prop('disabled','disabled');
            $("#noon_qty").prop('disabled','disabled');
            $("#mrng_qty").prop('disabled','disabled');
          }

        });

        $(wrapper).on("click",".del_medicine",function(e){
          e.preventDefault();
          $(this).parent().parent().remove();

        });

        $(wrapper).on("click",".edit_medicine",function(e){
          e.preventDefault();
          // var mname2;
          // var mname2 = $(this).parent().parent().parent().parent().html();
          var mname1 = $(this).parent().parent().parent().parent().find("#mname").text();
          var mbrand1 = $(this).parent().parent().parent().parent().find("#mbrand").text();
          var mstrength1 = $(this).parent().parent().parent().parent().find("#mstrength").text();
          var mform1 = $(this).parent().parent().parent().parent().find("#mform").text();
          var mdur1 = $(this).parent().parent().parent().parent().find("#mdur").text();
          var mtime1 = $(this).parent().parent().parent().parent().find("#mtime").text();
          var mval1 = $(this).parent().parent().parent().parent().find("#mval").text();
          var mrng1 = $(this).parent().parent().parent().parent().find("#mrng").text();
          var mintake_mrng = mrng1.includes("Morning");
          var noon1 = $(this).parent().parent().parent().parent().find("#noon").text();
          var mintake_noon= noon1.includes("Noon");
          var evening1 = $(this).parent().parent().parent().parent().find("#evening").text();
          var mintake_evening = evening1.includes("Evening");
          var mrngqty1 = $(this).parent().parent().parent().parent().find("#mrngqty").text();
          var noonqty1 = $(this).parent().parent().parent().parent().find("#noonqty").text();
          var eveningqty1 = $(this).parent().parent().parent().parent().find("#eveningqty").text();
          var custom_timing1 = $(this).parent().parent().parent().parent().find("#customtiming").text();


          $("#med_name").val(mname1);
          $("#med_name").trigger('change');
          $("#med_brand").val(mbrand1);
          $("#med_brand").trigger('change');
          $("#med_strength").val(mstrength1);
          $("#med_strength").trigger('change');
          $("#m_form").val(mform1);
          $("#m_form").trigger('change');
          $("#duration").val(mdur1);
          $("#duration").trigger('change');
          $("#time").val(mtime1);
          // $("#time").trigger('change');
          $("#custom_timing").val(custom_timing1);
          $("#custom_timing").trigger('change');
          if (mintake_mrng==true) {
            $("#mrngcheck1").attr("checked",1);

            $("#mrng_qty").val(mrngqty1);
            $("#mrng_qty").trigger('change');
            $("#mrng_qty").prop('disabled',false);
          }
          if(mintake_noon==true){
            $("#nooncheck1").attr("checked",1);
            $("#noon_qty").val(noonqty1);
            $("#noon_qty").trigger('change');
          }
          if(mintake_evening==true){
            $("#eveningcheck1").attr("checked",1);
            $("#evening_qty").val(eveningqty1);
            $("#evening_qty").trigger('change');
          }

          $(this).parent().parent().parent().parent().parent().remove();

          $('#pres_modal').animate({scrollTop:0},'slow(100)');

        });


        $('#submit').click(function(e){
          e.preventDefault();

          var description = $("#med_description").val();

          $(".added_medicine").each(function(){

            var appointment_id = 1;
            var medicine_name = $(this).find("#mname").html();
            var medicine_strength = $(this).find("#mstrength").html();
            var medicine_brand = $(this).find("#mbrand").html();
            var dosage_form = $(this).find("#mform").html();
            var duration = $(this).find("#mdur").html();
            var time = $(this).find("#mtime").html();
            var full_dur = duration+' '+time;
            var intake_timing = $(this).find("#mval").html();
            var mrng1 = $(this).find("#mrng").html();
            var mrng= mrng1.includes("Morning");
            if (mrng==true) {
              var morning = 1;
              var morning_qty=$(this).find("#mrngqty").html();
            }
            else {
              var morning = 0;
              var morning_qty=0;
            }
            var noon1 = $(this).find("#noon").html();

            var aftn= noon1.includes("Noon");
            if (aftn==true) {
              var afternoon = 1;
              var afternoon_qty=$(this).find("#noonqty").html();

            }
            else {
              var afternoon = 0;
              var afternoon_qty=0;
            }
            var evening1 = $(this).find("#evening").html();

            var evng = evening1.includes("Evening");
            if (evng==true) {
              var evening = 1;
              var evening_qty=$(this).find("#eveningqty").html();

            }
            else {
              var evening = 0;
              var evening_qty=0;
            }
            var custom_timing = $(this).find("#customtiming").html();


            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
            });

            $("#input_pres").parsley().validate();
            if($("#input_pres").parsley().isValid())
            {
            $.ajax({
              url: "/prescription",
              method: 'post',
              dataType:'json',
              data: {
                appointment_id:appointment_id,
                 medicine_name:medicine_name,
                 medicine_brand:medicine_brand,
                 medicine_strength:medicine_strength,
                 dosage_form:dosage_form,
                 full_dur:full_dur,
                 intake_timing:intake_timing,
                 morning:morning,
                 morning_qty:morning_qty,
                 afternoon:afternoon,
                 afternoon_qty:afternoon_qty,
                 evening:evening,
                 evening_qty:evening_qty,
                 custom_timing:custom_timing,
                 description:description

              },
              success: function(data){
                alert('success');
                $('#rcapp')[0].reset();
                $("div[id='to_delete']").remove();
                $("#custom_timing").prop('disabled','disabled');
                $("#evening_qty").prop('disabled','disabled');
                $("#noon_qty").prop('disabled','disabled');
                $("#mrng_qty").prop('disabled','disabled');
                $(".modal").hide();
              }
            });

          }
          });

    });


    </script>

    <!-- Custom Theme Scripts -->
    <script src="https://www.booknmeet.com/assets/custom/custom.js"></script>

    <script src="https://www.booknmeet.com/assets/dropdownstyle/js/classie.js"></script>
    <script type="text/javascript">
        $(".greetings").fadeOut(5000);
    </script>



</body>

</html>
