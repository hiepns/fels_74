@if (count($errors) > 0)
    <div class="alert alert-danger">
        <div>
            The form contains {{ count($errors) }} error(s).
        </div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
