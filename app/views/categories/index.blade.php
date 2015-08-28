@extends('layout.default')
@section('content')

<div class='row'>
    @foreach($categories as $category)
    <div class='col-md-8 col-md-offset-2 categories-lesson'>
        <div class='col-md-4'>
            {{ HTML::image($category->icon, $category->name) }}
        </div>
        <div class='col-md-6'>
            <h4>{{ $category->name }}</h4>
            <h6>
                You are learned {{ $learnedWordsCount[$category->id] }}/
                {{ $category->words()->count() }}
            </h6>
            <p>
                {{ $category->description }}
            </p>
            <div>
                {{ Form::open(['route' => 'lessons.store']) }}
                    {{ Form::hidden('category_id', $category->id) }}
                    {{ Form::submit('Start', ['class' => 'btn btn-primary start']) }}
                {{ Form::close() }}
            </div>
        </div>
    </div>
    @endforeach
</div>

@stop
