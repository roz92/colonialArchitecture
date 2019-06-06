@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Show Building</h2>
            </div>

            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('buildings.index') }}"> Back</a>
            </div>
        </div>
    </div>

   

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Photo of Building:</strong>
                <img src="{{ $building->image }}" width="100px">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name of Building:</strong>
                {{ $building->name_of_building }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Location of Building:</strong>
                {{ $building->location_of_building }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>AAT Concept:</strong>
                {{ $building->AAT_Concept }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Built in:</strong>
                {{ $building->built_in }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Add some text about the building:</strong>
                {{ $building->optional_text }}
            </div>
        </div>
    </div>

@endsection