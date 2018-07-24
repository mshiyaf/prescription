

  <div class="ui cards">
@foreach($details as $d)

@foreach($d as $det)
  <div class="card" style="border-radius: 5px; border: 1px solid rgb(26, 187, 156); margin: 15px 10px 11px 10px;">
    <div class="card-body" style="padding: 17px 10px 14px 22px;">
      <div class="row">
        <div class="col-md-9 col-xs-12" id="m_name"><b style="font-size:16px;"><?php echo $det->medicine_name;?></b></div>
        <div class="col-md-3 col-xs-12" style="float: right;">Prescribed On :<?php echo $det->created_at;?></div>
        <div class="col-md-8 col-xs-12" id="m_brand">Brand : <?php echo $det->medicine_brand;?></div>
        <div class="col-md-8 col-xs-12" id="m_strength">Strength : <?php echo $det->medicine_strength;?></div>
        <div class="col-md-8 col-xs-12" id="dosage">Dosage Form : <?php echo $det->dosage_form;?></div>
        @if ($det->morning_qty != 0)
        <div class="col-md-8 col-xs-12" id="m_intake_mrng">Morning Intake Amount :<?php echo $det->morning_qty;?></div>
        @endif
        @if ($det->afternoon_qty != 0)
        <div class="col-md-8 col-xs-12" id="m_intake_noon">Noon Intake Amount :<?php echo $det->afternoon_qty;?></div>
        @endif
        @if ($det->evening_qty != 0)
        <div class="col-md-8 col-xs-12" id="m_intake_evening">Evening Intake Amount :<?php echo $det->evening_qty;?></div>
        @endif
        <div class="col-md-8 col-xs-12" id="duration">Duration : <?php echo $det->duration?></div>
      </div>
    </div>
  </div>
@endforeach
@endforeach







  </div>
