
<link rel="stylesheet" href="{{ asset('style.css') }}">

你好，{{ $name }} ，你的年紀是 {!! $age !!}

<ul>
@foreach ($games as $item)
<li>第{{ $loop->iteration }}個 - {{ $item }}   First:{{ $loop->first}}  Last:{{ $loop->last}}</li>  
@endforeach
</ul>
<a href="{{ url('/paint') }}">畫廊</a>
{{ $global }}
{{ $multi }}

@include('include')