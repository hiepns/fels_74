@extends('layout.default')
@section('content')

<div class='row'>
    <div class='col-md-6 col-md-offset-3'>
        <div class='col-md-6'>
            <h4>{{ $chosenAnswers[0]->word->category->name }}</h4>
        </div>
        <div class = 'col-md-6'>
            <h4>Result: {{ $score }}/20</h4>
        </div>
    </div>
    @foreach ($chosenAnswers as $answer)
        <div class='col-md-8 col-md-offset-2 result'>
            <div class='col-md-6'>
                <div class='col-md-6'>
                    @if ($answer->correct)
                        <span class='glyphicon glyphicon-ok'></span>
                    @else
                        <span class='glyphicon glyphicon-remove'></span>
                    @endif
                </div>
                <div class='col-md-6 nihon'>
                    {{ $answer->word->content }}
                </div>
            </div>
            <div class='col-md-6'>
                <div class='col-md-6'>
                    {{ $answer->content }}
                </div>
                <div class = 'col-md-6'>
                    <a class='btn btn-primary btn-sm speak'>
                        <span class='glyphicon glyphicon-bullhorn'></span> 
                        Speak
                    </a>
                </div>
            </div>
        </div>
    @endforeach
</div>
{{ HTML::script('http://code.responsivevoice.org/responsivevoice.js') }}
{{ HTML::script('/js/results.js') }}
@stop
