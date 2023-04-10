<title>Deskripsi</title>
@extends('master')

@section('judul')
<div style="font-size:5vw">Deskripsi</div>
@endsection

@section('isi')
    @if ($var['id']==1)
        <div style="background-color: red; font-size:3vw">
            {{$var['desc']}}
        </div>
    @elseif ($var['id']==2)
        <div style="background-color: gold; font-size:3vw">
            {{$var['desc']}}
        </div>
    @else ()
        <div style="background-color: silver; font-size:3vw">
            {{$var['desc']}}
        </div>
    @endif
@endsection
