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
                            <a class="smoothscroll button stroke" href="#about">
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

<!-- section Nutshell instruction 
      ================================================== -->

   <section id="about">

    <div class="row about-wrap">
      <div class="col-full">

        <div class="about-profile-bg"></div>

        <div class="intro">
          <h3 class="animate-this">Instructions in a nutshell</h3>
          <p>Short description and instruction <br>
            (e.g. Upload photos of colonial buildings and add some text where possible!</p> 
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
          <h1>Click on here to find the some of the existing colonial architecture buildings</h1>       
          
          <p class="lead">some text</p>          

            <div class="row services-content">
      <div class="services-list block-1-2 block-tab-full group">
        <div class="bgrid service-item animate-this"> 

          <span class="icon"><i class="icon-paint-brush"></i></span>            

              <div class="service-content">
                <h3 class="h05">Colonialarchitecture.eu</h3>

                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
              </p>              
            </div>             

        </div> <!-- end bgrid -->

        <div class="bgrid service-item animate-this"> 

          <span class="icon"><i class="icon-earth"></i></span>                          

              <div class="service-content"> 
                <h3 class="h05">ArchiMediaL</h3>  

                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
              </p>              
              </div>                            

         </div> <!-- end bgrid -->

        </div> <!-- end services-list -->
      
    </div> <!-- end services-content -->    
        </div>      
      </div> <!-- end row section-intro -->       

    </div> <!-- end existing buildings -->    

  

  </section>

    <!-- about
    ================================================== -->
   <section id="portfolio">
    
    <div class="intro-wrap">

      <div class="row narrow section-intro with-bottom-sep animate-this">
        <div class="col-twelve">

                <a class="btn btn-success" href="{{ route('buildings.index') }}"><h3>Upload New Photos</h3></a>
            </div> <!-- end col-full -->
        </div> <!-- end row -->



    </section> <!-- end services -->

    <section id="testimonials">

        <div class="row">
            <div class="col-twelve">
                <h2 class="animate-this">About Me</h2>
            </div>
        </div>

        <div class="row flex-container">
            <div id="testimonial-slider" class="flex-slider animate-this">
                <ul class="slides">
                    <li>
                      <p>
                          BLA BLA BLA
                      </p>
                        <div class="testimonial-author">
                          <img src="images/avatars/test.png" alt="Author mage">
                          <div class="author-info">
                              Roz Sabir
                              <span class="position">Msc Information Sciences, VU Amsterdam</span>
                          </div>
                        </div>
                    </li> <!-- end slide -->
                </ul> <!-- end slides -->
            </div> <!-- end testimonial-slider -->
        </div> <!-- end flex-container -->
    </section> <!-- end testimonials -->

    <section id="contact">

        <div class="overlay"></div>

        <div class="row narrow section-intro with-bottom-sep animate-this">
            <div class="col-twelve">
                <h3>Contact</h3>
                <h1>Get In Touch.</h1>

                <p class="lead">Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur arcu erat,
                    accumsan id imperdiet et, porttitor at sem. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.</p>

                <h5>Contact Information</h5>
                
                <div class="cinfo">
                    <h6>Email Me At</h6>
                    <p>
                        r.sabir@student.vu.nl<br>
                        rozsabir1@gmail.com
                    </p>
                </div> <!-- end cinfo -->

                <div class="cinfo">
                    <h6>Call Me At</h6>
                    <p>
                        Mobile: (+31) 6 411 86323<br>
                    </p>
                </div>
            </div>
        </div> <!-- end section-intro -->


        </div> <!-- end cinfo -->

        </div> <!-- end row contact-content -->

    </section> <!-- end contact -->
@endsection