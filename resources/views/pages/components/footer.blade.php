<footer class="text-center text-white footer" style="color:rgb(38, 38, 38);background-color: #262626;">
  <!-- Grid container -->
  <!-- Grid container -->

  <!-- Copyright -->
  
  <div class="container " style='padding-bottom:20px; padding-top:20px;'>
  <div class="row ">
    <div class="col-sm">
      <div class="text-center p-3" style="background-color: #262626;">
      <br>
      © 2020 Copyright:
      <a class="text-white" href="https://site-bg.net">SITE-BG</a>
    </div>
    </div>
    <div class="col-sm" >
    <p>Join our career list to not miss any opportunities.</p>
      <form id="subscripe-form"enctype="multipart/form-data" action="{{route('subscribe')}}" method="POST"> 
        @method('POST')
        @csrf
        <div class="row" style="justify-content:center;">
          <div class="col-auto">
            <input id="subscribe_col" name="email" type="email" style=" width:200px;" class="form-control" placeholder="Your email" required>
            <br>
          </div>
          
          <div class="col-auto">
          
            <button style="background-color:#28ABB1;  width:200px;" type="button" class="btn btn-primary mb-2">Subscribe</button>
          </div>
          
        </div>
      </form>
    </div>
    
  </div>
</div>
</footer>

<script type="text/javascript">

$('#subscripe-form button').on('click', function(e){
    e.preventDefault();

	  let email = $('#subscribe_col').val();
	
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }                    
    });
    $.ajax({
      
		url: "{{route('subscribe')}}",
      type:"post",
      data:{
		email:email,
      },
      success: function(data) {
        $('.flash-message').html(data.alert);    
        window.scrollTo({ top: 0, behavior: 'smooth' });
      },
      });
    });
  

  </script>

