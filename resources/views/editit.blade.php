<div class="row">
<div class="form-group">
<div class="col-md-3 col-xs-12">
<label for="medicine">Choose Medicine *</label>
</div>
<div class="col-md-6 col-xs-12">

<select class="form-control" required="" id="med_name" name="med_name"><option selected="selected" value="">Choose..</option><option value="120">dolo</option></select>
</div>
</div>
</div>
<br>

<div id="strength"></div>
<div class="row">
<div class="form-group">
<div class="col-md-3 col-xs-12">
<label for="strength">Strength of Medicine *</label>
</div>
<div class="col-md-6 col-xs-12">
<input class="form-control" id="med_strength" required="" placeholder="Dosage" name="med_strength" type="text" readonly="readonly">
</div>
</div>
</div>
<br>




<div id="relation_area"></div>

<div class="row" id="intake">
<div class="form-group">
<div class="col-md-3 col-xs-12">
<label for="gender" class="control-label col-md-3 col-sm-3 col-xs-12">Intake</label>
</div>
<div class="col-md-6 col-xs-12">
<div id="med_intake" class="btn-group" data-toggle="buttons">
<label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
<input type="radio" name="med_intake" value="before"> &nbsp; Before food &nbsp;
</label>
<label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
<input type="radio" name="med_intake" value="after" checked="">After food
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
