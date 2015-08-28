<!DOCTYPE html>
<html>
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
    <style type='text/css'>
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
<h3>Category: {{$category->name}}</h3>
<table>
    <tr>
        <td>Word</td>
        <td>Meaning</td>
    </tr>
    @foreach($words as $word)
        <tr>
            <td style="font-family: MS Mincho;">{{ $word->content }}</td>
            @foreach($word->answers as $answer)
                @if ($answer->correct)
                    <td style="font-family: DejaVu Sans;">{{ $answer->content }}</td>
                @endif
            @endforeach
        </tr>
    @endforeach
</table>
</body>
</html>
