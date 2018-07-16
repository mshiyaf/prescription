
@for ($i=0; $i < $details->count(); $i=$i+4)
  <div class="input_fields_wrap">
    <div class="card" style="border-radius: 10px; border: 1px solid rgb(26, 187, 156);">
      <div class="card-body" style="padding: 17px 0px 6px 15px;">

        <div id="m_name">Name: {{ $details[$i] }}</div>
        <div id="m_strength">Strength: {{ $details[$i+1] }}</div>
        <div id="dosage">Dosage Form: {{ $details[$i+2] }}</div>
        <div id="duration">Duration: {{ $details[$i+3] }}</div>

      </div>
    </div>
  </div>
@endfor
