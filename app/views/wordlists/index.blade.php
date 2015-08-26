@extends('layout.default')
@section('content')

<div class='row'>
    <div class='wordlist'>
        <h3>Categories:</h3>
        {{ Form::select('category', $categories, null, ['class' => 'col-xs-2']) }}

        <label class='radio-inline' for='learned'>
            {{ Form::radio('choose', 'learned') }}
            Learned
        </label>

        <label class='radio-inline' for='learned'>
            {{ Form::radio('choose', 'not learned') }}
            Not Learned
        </label> 

        <label class='radio-inline' for='learned'>
            {{ Form::radio('choose', 'all', true) }}
            All
        </label> 

        <div class="button">
            {{ Form::button('Filter', ['class' => 'btn btn-primary', 'id' => 'filter', 'data-url' => url('/word_list')]) }}
            {{ Form::button('PDF', ['class' => 'btn btn-primary']) }}
        </div>
    </div>
</div>

<div id='word-list'></div>

@stop
