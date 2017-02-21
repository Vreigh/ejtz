@extends('layouts.app')

@section('content')

<div class="container">


    <div class="row" style="text-align: center; margin-bottom: 20px;">
        <h1>Wybierz przedmiot:</h1>
    </div>


    <div class="row subject-container">
        @for($i=0; $i<10; $i++)
            <div class="col col-sm-6 col-md-4 col-lg-3 subject-outer">
                <div class="row">
                    <div class="col-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1 subject" style="background-color: grey;">
                        <span>TO <span style="color: orange;">(1)</span> <span style="color: lightgreen";>(1)</span></span>
                    </div>
                </div>
            </div>
        @endfor
    </div>

</div>

@endsection
