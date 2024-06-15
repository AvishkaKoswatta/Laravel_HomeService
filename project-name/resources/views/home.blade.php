@extends('forms.applayout')

@section('content')
<div class="container">
    <h1>Recent Posts</h1>
    <ul class="list-group mt-3">
        @foreach($forms as $form)
            <li class="list-group-item">
                <strong>{{ $form->user->name }}</strong> posted a service: {{ $form->service_type }}
                <p>{{ $form->description }}</p>
            </li>
        @endforeach
    </ul>
</div>
@endsection
