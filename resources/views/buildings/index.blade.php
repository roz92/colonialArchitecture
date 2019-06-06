@extends('layouts.app')

@section('content')
   <!-- home
   ================================================== -->
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
                  <a class="smoothscroll button stroke" href="{{ route('buildings.create') }}">
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

    @foreach ($buildings as $building)
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ $building->photo() }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{ $building->name }}</h5>
                    <p class="card-text">{{ $building->description }}</p>
                    <p class="card-text">{{ $building->text}}</p>
                    <a href="/buildings/{{ $building->id }}" class="btn btn-primary">Go somewhere</a>
                    @if($building->maps())
                        <a href="{{ $building->maps() }}" target="_blank" class="btn btn-primary">View on Google maps</a>
                    @endif
                </div>
            </div>
        </div>
    
    @endforeach
        </div>

    {!! $buildings->links() !!}    


<!--               <h3>Send Us A Message</h3>
                  <form name="contactForm" id="contactForm" method="post">          
                  <div class="form-field">
                    <input name="contactName" type="text" id="contactName" placeholder="Name" value="" minlength="2" required="">
                  </div>

                    <div class="row">
                      <div class="col-six tab-full">
                        <div class="form-field">
                          <input name="contactEmail" type="email" id="contactEmail" placeholder="Email" value="" required="">
                        </div>                   
                      </div>
                    </div>
                      
                    <div class="col-six tab-full">              
                      <div class="form-field">
                        <input name="contactSubject" type="text" id="contactSubject" placeholder="Subject" value="">
                      </div>                   
                    </div>
                  
                  </div>  

                    <div class="form-field">
                      <textarea name="contactMessage" id="contactMessage" placeholder="message" rows="10" cols="50" required=""></textarea>
                    </div>  -->

             <!--   <div class="form-field">
                  <button class="submitform">Submit</button>

                  <div id="submit-loader">
                    <div class="text-loader">Sending...</div>                             
                    <div class="s-loader">
                    <div class="bounce1"></div>
                    <div class="bounce2"></div>
                    <div class="bounce3"></div>
              </div> -->
            </div>
               </div>

          </form>
        
       </div> <!-- end col-full -->
    </div> <!-- end row -->

   </section> <!-- end about -->

@endsection