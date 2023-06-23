@extends('./layouts.app')

@section('content')
    <div class="container text-center my-3">
        <h2>{{ $project['name_project'] }}</h2>
        <span>Data di creazione: {{ $project['created_date'] }}</span>
        <p>{{ $project['description'] }}</p>
        <a href="{{ Route('project.index') }}" class="btn btn-primary">Indietro</a>
    </div>
@endsection