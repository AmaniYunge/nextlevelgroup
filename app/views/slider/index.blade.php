@extends('master')

@section('breadcumbs')
<li><a href="{{url("slider")}}">Home</a></li>
<li class="active">Slider</li>
@stop

@section('contents')
<div class="panel panel-default col-md-8">
    <div class="panel-body" id="listslider">
        @include('slider.list')
    </div>
</div>
<div class="panel panel-default col-md-4">
    <div class="panel-body" id="addslider">
        @include('slider.add')
    </div>
</div>

@stop