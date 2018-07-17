

  <div class="ui cards">
  @for ($i=$details->count()-1; $i >=0; $i=$i-5)

      <div class="card" style="border-radius: 5px; border: 1px solid rgb(26, 187, 156);">
        <div class="card-body" style="padding: 15px 0px 6px 15px;">
          <div style="text-align: right;margin-right: 15px;">{{ $details[$i] }}</div>
          <div style="padding-top: -15px" id="m_name">Name: <b>{{ $details[$i-4] }}</b></div>
          <div id="m_strength">Strength: {{ $details[$i-3] }}</div>
          <div id="dosage">Dosage Form: {{ $details[$i-2] }}</div>
          <div id="duration">Duration: {{ $details[$i-1] }}</div>
        </div>
      </div>

  @endfor
  </div>
