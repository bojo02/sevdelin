
@if(!empty($promotion))
<div  class=" marquee" style="background-color: #eb0000; color:white; white-space: nowrap;">
    <div class="center_p" style=" "><p id="text"> {!! $promotion->text !!}</p></div> 
</div>

@endif


<style>
  .marquee {
    overflow: hidden;position: relative;
    
  }

  .center_p {
    animation: marquee 20s linear infinite; width:100%;
  }

  @keyframes marquee {
    from {transform: translateX(100%); }
    to {transform: translateX(-60%); }
  }

  .center_p p {
  line-height: 1.5;
  display: inline-block;
  vertical-align: middle;
}

  @media only screen and (min-width: 350px) and (max-width: 530px){
       .center_p {
    animation: marquee 10s linear infinite; width:100%;
  }

  @keyframes marquee {
    from {transform: translateX(100%); }
    to {transform: translateX(-300%); }
  }
  }
</style>
