
@foreach ($details->chunk(4) as $detail)
<div id="p_history">
  @foreach($detail as $d)
    <div id="m_name" class="">{{$d->name}}</div>
    {{-- <div id="m_strength">{{ $d->nth(1) }}</div> --}}
  @endforeach
</div>
@endforeach
