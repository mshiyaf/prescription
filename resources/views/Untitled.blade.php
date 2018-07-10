<form method="POST" action="https://www.booknmeet.com/dashboard/createnewappointment" accept-charset="UTF-8" id="demo-form" data-parsley-validate=""><input name="_token" type="hidden" value="3oJqmpONVg6xPKCp7ITmSQl0njFufeCKwhehY3P6">


                       <div class="row">
                           <div class="form-group">
                                 <div class="col-md-6 col-xs-12">
                             <select class="form-control" required="" id="service" name="service"><option selected="selected" value="">Choose..</option><option value="120">Homeopathy</option></select>
                                 </div>
                           </div>
                       </div>
                       <br><div id="staff_area"></div><div class="row">
                           <div class="form-group">
                                 <div class="col-md-3 col-xs-12">
                           <label for="date">Date for the appointment *</label>
                                 </div>
                                 <div class="col-md-6 col-xs-12">
                             <input class="date-picker form-control" id="date" required="" placeholder="DD/MM/YYY" name="date" type="text" readonly="readonly">
                                 </div>
                           </div>
                       </div>
                       <br>

                     <div class="row">
                           <div class="form-group">
                                 <div class="col-md-3 col-xs-12">
                                      <label for="time_slot">Time Slot*:</label>
                                 </div>
                                 <div class="col-md-6 col-xs-12">
                                    <select class="form-control" required="" id="time_slot" name="time_slot"><option selected="selected" value="">Choose..</option></select>
                                    <span class="green"></span>
                                 </div>
                           </div>
                       </div>
                       <br>


                       <div class="row">
                           <div class="form-group">
                                 <div class="col-md-3 col-xs-12">
                             <label for="appointment_for">Appointment For </label>
                                 </div>
                                 <div class="col-md-6 col-xs-12">
                              <select class="form-control" id="appointment_for" name="appointment_for"><option selected="selected" value="">Choose..</option><option value="self">Self</option><option value="mother">Mother</option><option value="father">Father</option><option value="other">Other</option></select>
                                 </div>
                           </div>
                       </div>
                        <br>
                        <div id="relation_area"></div>

                       <div class="row" id="genderWrap">
                           <div class="form-group">
                                 <div class="col-md-3 col-xs-12">
                              <label for="gender" class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
                                 </div>
                                 <div class="col-md-6 col-xs-12">
                                      <div id="gender" class="btn-group" data-toggle="buttons">
                                        <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                          <input type="radio" name="gender" value="male"> &nbsp; Male &nbsp;
                                        </label>
                                        <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                          <input type="radio" name="gender" value="female" checked=""> Female
                                        </label>
                                        <label class="btn btn-default " data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                          <input type="radio" name="gender" value="other" checked=""> Other
                                        </label>
                                      </div>

                                 </div>
                           </div>
                       </div>
                      <br>
                     <div class="row">
                           <div class="form-group">
                                 <div class="col-md-3 col-xs-12">
                           <label for="dob">Date Of Birth</label>
                                 </div>
                                 <div class="col-md-6 col-xs-12">
                             <input class="form-control date-picker" id="dob" placeholder="DD/MM/YYY" name="dob" type="text">
                                 </div>
                           </div>
                       </div>
                       <br>


                   <div class="row">
                           <div class="form-group">
                                 <div class="col-md-3 col-xs-12">
                                   <label for="description">Description (100 max)</label>
                                 </div>
                                 <div class="col-md-6 col-xs-12">
                                      <textarea class="form-control" data-parsley-trigger="keyup" data-parsley-maxlength="100" data-parsley-validation-threshold="10" name="description" cols="50" rows="10" id="description"></textarea>
                                 </div>
                           </div>
                       </div>
					<br>
                   <div class="row">
                      <div class="form-group">
                                 <div class="col-md-3 col-xs-12">
                                 </div>
                                 <div class="col-md-6 col-xs-12">
									<button type="button" class="cancel btn btn-primary">Cancel</button>
                                     <input class="btn btn-primary btn-submit" type="submit" value="Create">
                                 </div>
                           </div>

                        <br>
					<input type="hidden" name="user_id" id="user_id" value="1c9ac0159c94d8d0cbedc973445af2da">
                    </div>
                   </form>
