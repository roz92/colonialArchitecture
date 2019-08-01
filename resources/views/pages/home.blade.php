 @extends('layouts.app')

@section('content')
    <section id="home">
        <div class="overlay"></div>
          <div class="home-content-table">
            <div class="home-content-tablecell">
              <div class="row">
                <div class="col-twelve">
                  <h3 class="animate-intro">Welcome to</h3>
                    <h1 class="animate-intro">Metadata Enrichment of Colonial Architecture</h1>
                      <div class="more animate-intro">
                        <a class="smoothscroll button stroke" href="#contact">Upload photos</a>
                      </div>
                </div>
              </div> 
            </div> 

        <div class="scrolldown">
            <a href="#contact" class="scroll-icon smoothscroll">Scroll Down
              <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
            </a>
        </div>

    </section>

<!-- section Nutshell instruction 
      ================================================== -->

    <section id="about">
      <div class="row about-wrap">
        <div class="col-full">
          <div class="about-profile-bg"></div>
            <div class="intro">
              <h3 class="animate-this">Instructions in a nutshell</h3>
                <p>First of all, thank you for helping me! <br>
                    Upload photos of colonial buildings that you can find in your surroundings in Indonesia and fill in the other empty fields where possible!
                </p> 
            </div>   
          </div> <!-- end col-full  -->
        </div> <!-- end about-wrap  -->
    </section> <!-- end Nutshell instruction  -->

<!-- section project info
      ================================================== -->
    <section id="services">
      <div class="overlay"></div>
        <div class="gradient-overlay"></div>
          <div class="row narrow section-intro with-bottom-sep animate-this">
            <div class="col-full">
              <h3>About the research</br>
                ArchiMediaL and colonialarchitecture.eu</h3>
                <p class="lead">My research focuses on a case study of ArchiMediaL. With the help of machine learning algorithms ArchiMediaL develops new tools to enable automatic development and linking of metadata and image content. The dataset that ArchiMediaL uses is the colonial architecture dataset managed by TU Delft. The dataset contains information European colonial architecture designed and created between 1850 and 1970. <br>
                Metadata is essentially information about data. Good descriptive metadata is important to make sure that resources will survive and continue to be accessible in the future. Without metadata a digital resource may not be retrievable, identifiable or usable. This leads to the importance of enriching the metadata of colonial architecture.
                As aforementioned, ArchiMediaL uses machine learning algorithms, but these algorithms are only as good as the data they are trained on. This means that the dataset needs to accurately represent the real world. 
                </p>
            </div> 
          </div>
        </div> <!-- end col-full  -->
      </div> <!-- end about-wrap  -->
    </section> <!-- end project info -->

  <!-- section existing buildings
   ================================================== -->
    <section id="portfolio">
      <div class="intro-wrap">
        <div class="row narrow section-intro with-bottom-sep animate-this">
          <div class="col-twelve">
            <h3>Existing dataset</h3>
              <p class="lead">Click on <a href="{{ route('buildings.index') }}">here</a> to find the some of the existing colonial architecture buildings</p>          
              
              <div class="row services-content">
                <div class="services-list block-1-2 block-tab-full group">
                  <div class="bgrid service-item animate-this"> 

                    <img src="images/colonial.jpg" alt="Avatar">           
                      <div class="service-content">
                        <a href="http://colonialarchitecture.eu/"><h3 class="h05">Colonialarchitecture.eu</h3></a>
                          <p>This website is dedicated to buildings and sites designed and created between circa 1850 and 1970 in countries outside of Europe that at the time were ruled by Europeans.
                          </p>              
                      </div>             
                  </div> <!-- end bgrid -->

              <div class="bgrid service-item animate-this">
               <!-- <span class="icon"><i class="icon-earth"></i></span>  -->
                <img src="images/archimedial.jpg" alt="Avatar">                         
                  <div class="service-content"> 
                    <a href="http://archimedial.net/"><h3 class="h05">ArchiMediaL</h3></a>
                    <p>ArchiMediaL aims to enriching and linki historical architectural and urban image collections. In close cooperation between architectural historians and computer scientists, ArchiMediaL researches the automatic recognition of architectural and urban forms in diverse visual media that are available digitally or on the web.
                    </p>              
                  </div>                            
              </div> <!-- end bgrid -->

            </div> <!-- end services-list -->    
          </div> <!-- end services-content -->    
        </div>      
      </div> <!-- end row section-intro -->       
    </div> <!-- end existing buildings -->    
    </section>

<!--    ================================================== -->
    <section>
          <!-- <div class="row narrow section-intro with-bottom-sep animate-this"> -->
            <!-- <div class="col-twelve"> -->
                    @include("partials/create_import")              
                    <!-- <a class="btn btn-success" href="{{ route('buildings.index') }}"><h3>Upload New Photos</h3></a> -->
                <!-- </div> end col-full -->
            <!-- </div> end row -->
    </section> <!-- end services -->

@endsection