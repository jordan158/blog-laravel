@extends('layouts.home')
@section('content')
    <div class="middle">我是layouts区域的替换内容</div>
@parent {{--通过@parent调用p标签中的内容--}}
    @endsection