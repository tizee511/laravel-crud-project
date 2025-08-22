@extends('layouts.navpage');
@section('title')
users
@endsection

@section('content')
@parent
<h1 style="color: red;font-size:bold"> Eng.Nashwan </h1>
<h1>Welcome to the User Page</h1>
@endsection

@section('scripts')
@parent;
<h1>Users Scripts Section</h1>
@endsection

{{-- Hello, {!! $userename !!}. --}}

D:\Learning Laravel All Files\Code Apps Laravel\

{{-- @unless (Auth::check())
    You are not signed in.
@endunless --}}



{{-- The current UNIX timestamp is {{ time() }} --}}

{{-- <br>
@if ($userename === 1)
    I have one record!
@elseif ($userename > 1)
    I have multiple $userename!
@else
    I don't have any $userename!
@endif
{{-- Ex for Switch --}}
{{-- <br><br>
 @switch($i)
    @case(1)
        First case...
        @break
    @case(2)
        Second case...
        @break
    @default
        Default case...
@endswitch  --}}


{{-- Switch statements can be constructed
using the @switch, @case, @break, @default and @endswitch directives --}}

{{-- @for ($i = 0; $i < 10; $i++)
    The current value is {{ $i }}
@endfor --}}
{{-- loop using the @continue and @break directives --}}
{{-- @for ($i = 0; $i < 10; $i++)
    @if ($i % 2 === 0)
        <p>{{ $i }} is even <br></p>
    @else
        @continue;
    @endif
    @if ($i === 4)
        @break
    @endif
@endfor --}}
{{-- ------------------ --}}



