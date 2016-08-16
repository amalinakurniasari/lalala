@extends('layouts.app')

@section('left-top')
  @include('layouts.left-top')
@stop

@section('left-bottom')
  @include('layouts.left-bottom')
@stop

@section('canvas')
  @include('layouts.canvas')
@stop

@section('center')
  @include('layouts.center')
@stop

@section('right')
  @include('layouts.right')
@stop

@extends('layouts.footapp')