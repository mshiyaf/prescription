

  <div class="ui cards">

  @for ($i=$details->count()-1; $i >=0; $i=$i-9)

      <div class="card" style="border-radius: 5px; border: 1px solid rgb(26, 187, 156); margin: 15px 10px 11px 10px;">
        <div class="card-body" style="padding: 17px 10px 14px 22px;">
          <div class="row">
            <div class="col-md-9 col-xs-12" id="m_name"><b style="font-size:16px;">{{ $details[$i-4] }}</b></div>
            <div class="col-md-3 col-xs-12" style="float: right;">Prescribed On : {{ $details[$i] }}</div>
            <div class="col-md-8 col-xs-12" id="m_brand">Brand : {{ $details[$i-5] }}</div>
            <div class="col-md-8 col-xs-12" id="m_strength">Strength : {{ $details[$i-3] }}</div>
            <div class="col-md-8 col-xs-12" id="dosage">Dosage Form : {{ $details[$i-2] }}</div>
            @if ($details[$i-6] != 0)
            <div class="col-md-8 col-xs-12" id="m_intake_mrng">Morning Intake Amount :{{ $details[$i-6] }}</div>
            @endif
            @if ($details[$i-7] != 0)
            <div class="col-md-8 col-xs-12" id="m_intake_noon">Noon Intake Amount :{{ $details[$i-7] }}</div>
            @endif
            @if ($details[$i-8] != 0)
            <div class="col-md-8 col-xs-12" id="m_intake_mrng">Evening Intake Amount :{{ $details[$i-8] }}</div>
            @endif
            <div class="col-md-8 col-xs-12" id="duration">Duration : {{ $details[$i-1] }}</div>
          </div>
          {{-- <div id="p_date" style="text-align: right;margin-top: 0rem;">{{ $details[$i] }}</p></div> --}}
        </div>
      </div>

  @endfor
  </div>
