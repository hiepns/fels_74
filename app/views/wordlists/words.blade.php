<div class='row'>
    @foreach (range(1, 2) as $index) 
        <div class='col-md-6 word-line'>
            <div class='col-md-4'>Word</div>
            <div class='col-md-4'>Meaning</div>
        </div>
    @endforeach
</div>

<div class='row'>
    @foreach($words as $word)
        <div class='col-md-6 word-line'>
            <div class='col-md-4'>
                {{ $word->content }}
            </div>

            @foreach($word->answers as $ans)
                @if ($ans->correct) 
                    <div class='col-md-4'>
                        {{ $ans->content }}
                    </div>
                @endif
            @endforeach
        </div>
    @endforeach
</div>
