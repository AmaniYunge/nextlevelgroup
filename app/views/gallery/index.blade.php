@extends('master')

@section('breadcumbs')
<li><a href="{{url("gallery")}}">Home</a></li>
<li class="active">Gallery</li>
@stop

@section('contents')
<div class="panel panel-default col-md-8">
    <div class="panel-body" id="listgallery">
        @include('gallery.list')
    </div>
</div>
<div class="panel panel-default col-md-4">
    <div class="panel-body" id="addgallery">
        @include('gallery.add')
    </div>
</div>

@stop