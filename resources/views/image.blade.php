@foreach(\App\Building::all() as $building)
    <img src="{{ $building->photo() }}" width="100px">
@endforeach