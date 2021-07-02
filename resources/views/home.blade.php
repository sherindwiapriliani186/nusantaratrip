@extends('template.layout')

@section('content')  
@foreach ($berita as $b)
</div>   
  <div class="main">
    <div class="card">
      <div class="head-card">
        <img src="{{asset('img/hutan.webp')}}" alt="">
      </div>
     <div class="body-card">
        <h1>{{$b->title}}</h1>
        <p>{{$b->content}}.</p>
     </div>
    </div> 
  </div> 
@endforeach                
@endsection