<div class="container" style="margin-top:-25px; margin-bottom: -25px;">
        <div style="text-align:center;"class="row">
            <div class="col-sm">
            <div class="text-center" style="margin-bottom:-30px;">
                <h2 class="mt-5 mb-5">FAQ</h2>
            </div>
            <section class="container my-5" id="maincontent">
                <section id="accordion">
                    @foreach ($questions as $question)
                        <a class="py-3 d-block h-100 w-100 position-relative z-index-1 pr-1 text-secondary border-top" aria-controls="{{$question->id}}" aria-expanded="false" data-toggle="collapse" href="#{{$question->id}}" role="button">
                        <div class="position-relative">
                        <h2 class="h4 m-0 pr-3">
                            {{$question->title}}
                            @if($loop->last)
                               <hr>
                            @endif
                        </h2>
                        <div class="position-absolute top-0 right-0 h-100 d-flex align-items-center">
                            <i class="fa fa-plus"></i>
                        </div>
                        </div>
                    </a>
                    <div class="collapse" id="{{$question->id}}" style="">
                        <div class="card card-body border-0 p-0">
                        <p>{{$question->content}}</p>
                        {{$question->title}}
                            @if($loop->last)
                               <hr>
                            @endif
                        </div>
                    </div>
                    @endforeach
                    </div>
            </div>
        </div>
    </section>
    
  </section >