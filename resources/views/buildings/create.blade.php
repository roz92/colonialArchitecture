@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Building</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('buildings.index') }}"> Back</a>
        </div>
    </div>
</div>

   

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

   

<form action="{{ route('buildings.store') }}" method="POST" enctype="multipart/form-data">

    @csrf

     <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="image-field">Photo of Building:</label>
                <input type="file" name="image" class="form-control-file" id="image-field">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="name-field">Name of Building:</label>
                <input type="text" name="name" class="form-control" id="name-field" placeholder="Bankgebouw Javasche Bank Bandjermasin">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>Location of Building:</label>
                <input type="text" name="location" class="form-control" placeholder="e.g. Bandjermasin">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>AAT Concept:</label>
                <select name="description" class="form-control">
                    <option selected disabled>Pick something?!</option>
                    @foreach($values as $value)
                        <option value="{{ $value }}">{{ $value }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>Built in:</label>
                <select name="build_in" class="form-control" >
                    <option selected disabled>Select a year</option>
                    @for($year = 1950; $year <= date('Y'); $year++)
                        <option value="{{ $year }}">{{ $year }}</option>
                    @endfor
                </select>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label>Add some text about the building:</label>
                <textarea class="form-control" style="height:150px" name="text" placeholder="e.g. an anecdote"></textarea>
            </div>
        </div>


        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>   

</form>

@endsection