@if(!empty('status') && $sess == false)
@if($status->content == '1')
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">How did you learn about us?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="subscripe-form" action="{{route('reachStore')}}" method="POST"> 
        @method('POST')
        @csrf
          <div class="form-group">
            <label for="exampleFormControlSelect1">Please, select:</label>
            <select class="form-control" id="exampleFormControlSelect1">
              @foreach ($reaches as $reach)
              <option value="{{$reach->id}}">{{$reach->text}}</option>
              @endforeach
            </select>

          </div>

      <button type="button" id="sbm_btn" class="btn btn-success btn-lg btn-block">Submit</button>  
      </form>
    </div>
    </div>
  </div>
</div>


<script>
setTimeout(function() {
    $('#exampleModal').modal();
}, 5000);
</script>

<script type="text/javascript">

$('#subscripe-form #sbm_btn').on('click', function(e){
    e.preventDefault();
    $('#exampleModal').modal('hide');
	  let content = $('#exampleFormControlSelect1').val();
	
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }                    
    });
    $.ajax({
      
		url: "{{route('reachStore')}}",
      type:"post",
      data:{
        content:content,
      },
      success: function(data) {
        $('.flash-message').html(data.alert);    
        window.scrollTo({ top: 0, behavior: 'smooth' });
        
      },
      });
    });
  

  </script>
@endif
@endif
