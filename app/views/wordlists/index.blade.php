@extends('layout.default')
@section('content')

<div class='row'>
    <div class='wordlist'>
        <h3>Categories:</h3>
        {{ Form::select('category', $categories, null, ['class' => 'col-xs-2']) }}

        {{ Form::radio('choose', 'learned') }}
        Learned

        {{ Form::radio('choose', 'not learned') }}
        Not Learned

        {{ Form::radio('choose', 'all', true) }}
        All

        <div class='button'>
            {{ Form::button('Filter', [
                'class' => 'btn btn-primary',
                'id' => 'filter', 
                'data-url' => url('/word_list')
            ]) }}
            
            {{ Form::button('PDF', [
                'class' => 'btn btn-primary',
                'id' => 'export2pdf',
                'style' => 'display:none',
                'data-url' => url('/word_list')
            ]) }}
        </div>
    </div>
</div>

<div id='word-list'></div>

@stop
