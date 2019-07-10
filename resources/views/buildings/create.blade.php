@extends('layouts.app')

@section('content')

    <section id="home">

        <div class="overlay"></div>

        <div class="home-content-table">
            <div class="home-content-tablecell">
                <div class="row">
                    <div class="col-twelve">

                        <h3 class="animate-intro">Welcome to</h3>
                        <h1 class="animate-intro">
                            Metadata Enrichment of Colinial Architecture
                        </h1>

                        <div class="more animate-intro">
                            <a class="smoothscroll button stroke" href="#contact">
                                Instructions
                            </a>
                        </div>

                    </div>
                </div> 
        </div> 

        <div class="scrolldown">
            <a href="#instructions" class="scroll-icon smoothscroll">
                Scroll Down
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
            </a>
        </div>

    </section>

<!--   <section id="contact">
      <div class="overlay"></div>


        <div class="row contact-content">
            <div class="col-seven tab-full animate-this">
                <h5>Add A New Building</h5>

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
                    <div class="col-six tab-full">              
                        <div class="form-field">
                            <input name="contactSubject" type="text" id="contactSubject" placeholder="Subject" value="">
                      </div>                               
                    </div>
                </div>
                                         
                <div class="form-field">
                    <textarea name="contactMessage" id="contactMessage" placeholder="message" rows="10" cols="50" required=""></textarea>
                </div> 

                <div class="form-field">
                  <button class="submitform">Submit</button>

                  <div id="submit-loader">
                     <div class="text-loader">Sending...</div>                             
                      <div class="s-loader">
                                <div class="bounce1"></div>
                                <div class="bounce2"></div>
                                <div class="bounce3"></div>
                            </div>
                        </div>
                </div>
                </form> 
-->


@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<section id="contact">
      <div class="overlay"></div>


        <div class="row contact-content">
            <div class="col-seven tab-full animate-this">
                <h5>Add A New Building</h5>

                <form name="contactForm" action="{{ route('buildings.store') }}" method="POST" enctype="multipart/form-data">

    @csrf

<div class="row">
    <div class="form-field">
        <!-- <label for="image-field">Photo of Building:</label> -->
        <input type="file" name="image" class="form-control-file" id="image-field">
    </div>
</div>
    
 <!--   <div class="row">
        <div class="col-six tab-full">
            <div class="form-field">
                <label for="name-field">Name of Building:</label>
                <input type="text" name="name" class="form-control" id="name-field" placeholder="Bankgebouw Javasche Bank Bandjermasin">
            </div>
        </div>
-->

    <div class="row">
        <div class="col-six tab-full">
            <div class="form-field">
                <!-- <label>e.g. Bankgebouw Javasche Bank</label> -->
                <input name="name" type="text" id="name-field" placeholder="Name of Building" value="" required="">
            </div>                         
        </div>

        <div class="col-six tab-full">
            <div class="form-field">
                <!-- <label>e.g. Jakarta</label> -->
                <input type="text" name="location" class="form-control" placeholder="Location of Building">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-six tab-full">
            <div class="form-field">
            <!-- <label>e.g. Bank</label> -->
                <select name="description" class="form-control">
                    <option selected disabled>Choose type of building</option>
                    @foreach($values as $value)
                        <option value="{{ $value }}">{{ $value }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-six tab-full">
            <div class="form-field">
               <!--  <label>Construction date:</label> -->
                <select name="build_in" class="form-control" >
                    <option selected disabled>Select a year</option>
                    @for($year = 1850; $year <= date('Y'); $year++)
                        <option value="{{ $year }}">{{ $year }}</option>
                    @endfor
                </select>
            </div>
        </div>
    </div>

    <div class="row">
            <div class="form-group">
                <!-- <label>Add some text about the building:</label> -->
                <textarea class="form-control" style="height:150px" name="text" placeholder="Add some text about the building"></textarea>
            </div>
    </div>


        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>   

</form>

@endsection