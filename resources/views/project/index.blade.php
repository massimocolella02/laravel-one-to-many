@extends('./layouts.app')

@section('content')
    <div class="row justify-content-center gap-4 mt-5">
        @foreach ($projects as $elem)
            <div class="col-3">
                <div class="card">
                    <a href="{{ Route('project.show', $elem->id) }}" class="text-decoration-none text-dark">
                        <div class="card-body">
                            <h5 class="card-title">{{ $elem['name_project'] }}</h5>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@endsection