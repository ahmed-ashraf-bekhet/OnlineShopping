@extends('layouts.app')

@section('content')
<h1>hello {{ $hh }} {{ $username }}</h1>
<h2><a href="{{ route('profile',['hh'=>1,'username'=>'ali']) }}">profile</a> </h2>
<form action="/user" >
    {{ csrf_field() }}
    {{-- {{ method_field('PUT') }} --}}
    <input type="email" name="email"><br>
    <input type="submit" value="submit">
</form>
@if (count($services)>0)
@foreach ($services as $service)
    <table aria-expanded="true">
        <tr aria-label="action">
            <td aria-label="aria-expanded">
                {{$service}}
            </td>
        </tr>
    </table>
@endforeach


            
@endif
@endsection


<button type="button" class="btn btn-primary">Primary</button>
<button type="button" class="btn btn-secondary">Secondary</button>
<button type="button" class="btn btn-success">Success</button>
<button type="button" class="btn btn-danger">Danger</button>
<button type="button" class="btn btn-warning">Warning</button>
<button type="button" class="btn btn-info">Info</button>
<button type="button" class="btn btn-light">Light</button>
<button type="button" class="btn btn-dark">Dark</button>
<button type="button" class="btn btn-link">Link</button>