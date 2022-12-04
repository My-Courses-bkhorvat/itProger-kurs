@extends('layouts.app')

@section('title-block')Главная страница @endsection

@section('content')
<h1>Главная страница</h1>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. A assumenda at corporis ea earum eligendi et id magni maxime modi neque odit quibusdam quidem quisquam reprehenderit, similique ut veniam voluptate?
    </p>
@endsection

@section('aside')
    @parent
    <p>Dop text</p>
@endsection
