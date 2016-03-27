@extends('master')

@section('breadcumbs')
<li><a href="{{url("offer")}}">Home</a></li>
<li class="active">offer</li>
@stop

@section('contents')
<div class="panel panel-default col-md-8">
    <div class="panel-body" id="listoffer">
        @include('offer.list')
    </div>
</div>
<div class="panel panel-default col-md-4">
    <div class="panel-body" id="addoffer">
        @include('offer.add')
    </div>
</div>

@stop