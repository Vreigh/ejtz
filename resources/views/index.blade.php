@extends('layouts.app')

@section('content')

<div class="container">


    <div class="row" style="text-align: center; margin-bottom: 20px;">
        <h1>Wybierz przedmiot:</h1>
    </div>


    <div class="row subject-container">
        @foreach($subjects as $subject)
            <a href="{{url('tasks/' . $subject->identifier)}}">
                <div class="col col-sm-6 col-md-4 col-lg-3 subject-outer">
                    <div class="row">
                        <div class="col-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 subject" style="background-color: {{$subject->color}};">
                            <span><strong>{{$subject->name}}</strong> <span style="color: darkred;">(1)</span> <span style="color: darkgreen";>(1)</span></span>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    </div>

</div>

@endsection
