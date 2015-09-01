@extends('layout.default')
@section('content')

<div class='lesson-form'>
    <h3>{{ $lesson->category->name }}</h3>

    @foreach($lesson->words as $index => $word)
        @if ($index < 1)
            <div id='word-{{ $index }}' class='row'>
        @else
            <div id='word-{{ $index }}' class='row hide'>
        @endif
            <div>
                <h4>{{ $index + 1 }}/{{ $lesson->words()->count() }}</h4>
            </div>
            <div class='col-md-4 word'>
                <h1 id='nihon'>{{ $word->content }}</h1>
                {{ Form::button('<span class="glyphicon glyphicon-bullhorn"></span> Speak', ['class' => 'btn btn-primary btn-sm center-block speak']) }}
            </div>
            <div class='col-md-5 list-answer'>
                <ul>
                    @foreach($word->answers as $ans)
                        <li>
                            {{ Form::button($ans->content, [
                                'class' => 'btn answer', 
                                'data-url' => route('lessons.results.update', [$lesson->id, 1]),
                                'data-wordid' => $word->id,
                                'data-answerid' => $ans->id
                            ]) }}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endforeach
</div>

<script type='text/javascript'>
    var num = 0;
    var total_words = {{ $lesson->words()->count() }};
    var result_url = '{{ route('lessons.results.index', $lesson->id) }}';
</script>
{{ HTML::script('http://code.responsivevoice.org/responsivevoice.js') }}
{{ HTML::script('/js/lessons.js') }}
@stop
