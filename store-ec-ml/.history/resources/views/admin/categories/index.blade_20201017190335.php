@extends('admin.layout')
@section('content')
<!--  BEGIN CONTENT PART  -->
{{@foreach ($cate as $item)
<ul>
    $item
@endforeach}}
<!--  END CONTENT PART  -->
@endsection