@extends('layouts.app')


@section('content')

   <section id="home">

    <div class="overlay"></div>

    <div class="home-content-table">  
       <div class="home-content-tablecell">
        <div class="row">
          <div class="col-twelve">            
            
                <h3 class="animate-intro"></h3>
                <h1 class="animate-intro">
              Time to upload some photos!
                </h1> 

                <div class="more animate-intro">
                  <a class="smoothscroll button stroke" href="#upload">
                    Upload
                  </a>
                </div>              

            </div> <!-- end col-twelve --> 
        </div> <!-- end row --> 
       </div> <!-- end home-content-tablecell -->        
    </div> <!-- end home-content-table -->
   </section>

<section id="upload">

    @if ($message = Session::get('success'))
      <div class="alert alert-success">
        <p>{{ $message }}</p>
      </div>

    @endif

  <div class="row">
  <div class="grid">
    @foreach ($buildings as $building)
        
            <div class="card grid-item-20">
                @if ($building->image)
                <img class="card-img-top" src="{{ $building->image }}" alt="Card image cap">
                @elseif ($building->bt)
                <img class="card-img-top" src="http://colonialarchitecture.eu/islandora/object/{{ $building->bt }}/datastream/OBJ" alt="Card image cap">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $building->name }}</h5>
                    <p class="card-text">{{ $building->description }}</p>
                    <p class="card-text">{{ $building->text}}</p>
                    <!-- <a href="/buildings/{{ $building->id }}" class="btn btn-primary">Go somewhere</a> -->
                    @if($building->lat && $building->long)
                        <a href="https://www.google.com/maps/search/?api=1&query={{ $building->lat }},{{ $building->long }}" target="_blank" class="btn btn-primary">View on Google maps</a>
                    @endif
                </div>
            </div>
            
    @endforeach
  </div> <!-- .grid div-->
</div> <!-- .row div --> 


   </section>
   
<!--  Java Script
   ================================================== 
   <script src="js/jquery-2.1.3.min.js"></script>
   <script src="js/plugins.js"></script>
   <script src="js/main.js"></script>

</header>
 -->@endsection