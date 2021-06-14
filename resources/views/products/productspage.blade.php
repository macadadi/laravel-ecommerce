@extends('../master')
@section('content')

<div class='conta'>
{{-- product section --}}


<div class="container col-md-6">
    {{-- loop throgh all the database elements --}}
  
   
    <div id="carouselExampleControls" class="carousel slide  bg-info" data-ride="carousel ">
        <div class="carousel-inner  ">
           @foreach ($products as $product )
            
           <div class="carousel-item {{$product['id']=='1' ? 'active' : '' }} ">
            <img class="d-block w-100 corousal-img"  src="{{$product->gallary}} "  alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                <h3>{{$product->name}}</h3>
                <h5>{{$product->price}}</h5>
                <p>{{$product->description}}</p>
              </div>
          </div>
           @endforeach
     
       
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
   
      {{-- display a single product --}}
     
    
</div>
<hr>
<div class=" p-4 bg-primary d-flex flex-wrap ">
  
      @foreach ($products as $product)
      <div class='  col-md-4 '>
        <div class="mr-1 bg-info">
         <img class="max-width: 100%  img-fluid "  src="{{$product->gallary}} "  alt="{{$product->name}}">
         <div class=" d-md-block">
            <h3>{{$product->name}}</h3>
            <h5>{{$product->price}}</h5>
            <p>{{$product->description}}</p>
          </div>
        </div>  
      </div>
      @endforeach


  </div>

  
</div>
</div>
@endsection