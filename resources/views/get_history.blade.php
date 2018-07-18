

  <div class="ui cards">
  @for ($i=$details->count()-1; $i >=0; $i=$i-5)

      <div class="card" style="border-radius: 5px; border: 1px solid rgb(26, 187, 156);">
        <div class="card-body" style="padding: 15px 0px 6px 15px;">
          <div class="row">
            <div class="col-md-9 col-xs-12" id="m_name"><b style="font-size:15px;">{{ $details[$i-4] }}</b></div>
            <div class="col-md-3 col-xs-12" style="float: right;">Prescribed On : {{ $details[$i] }}</div>
            <div class="col-md-8 col-xs-12" id="m_strength">Strength: {{ $details[$i-3] }}</div>
            <div class="col-md-8 col-xs-12" id="dosage">Dosage Form: {{ $details[$i-2] }}</div>
            <div class="col-md-8 col-xs-12" id="duration">Duration: {{ $details[$i-1] }}</div>
          </div>

        </div>
      </div>

  @endfor
  </div>
