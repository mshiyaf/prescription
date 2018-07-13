<div id="p_history">


</div>

<script>
var wrapper2 = $('#p_history');
@foreach ($appointment as $a)
var id = {{$a}};
$.ajax({
  url: '/get_history',
  method: 'post',
  data: {
    id:id
  },
  success: function(data){
    var $div2 = ('<div class="history">'{{$p}}'</div>');
    $(wrapper2).append($div2);
  }
});



@endforeach
</script>
