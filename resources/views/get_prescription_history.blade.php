<div id="p_history">


</div>

<script>
var wrapper2 = $('#p_history');
@foreach ($prescriptions as $p)
  var $div2 = ('<div class="history">'{{$p}}'</div>');
  $(wrapper2).append($div2);
@endforeach
</script>
