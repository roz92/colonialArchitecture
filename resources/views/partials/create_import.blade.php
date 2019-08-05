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
      
        <h3 style="text-align: center;">Upload new building</h3>

            <form name="contactForm" action="{{ route('buildings.store') }}" method="POST" enctype="multipart/form-data">

            @csrf

            <div class="row">
                <div class="form-field">
                    <!-- <label for="image-field">Photo of Building:</label> -->
                        <button type="button" class="btn btn-primary" onclick="document.querySelector('#image-field').click();" style="display: block; width: 100%; margin-bottom: -30px;">Upload</button>
                    <input type="file" name="image" class="form-control-file" id="image-field" style="visibility: hidden;">
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
                            @for($year = 1950; $year <= date('Y'); $year++)
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
    </div>

</form>