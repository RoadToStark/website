<h1>Bienvenue sur la page des projets :)</h1>

@foreach($projects as $key => $project)
    <ul>
        <li>ID : {{ $project->id }} </li>
        <li>Name : {{ $project->name }} </li>
        <li>Description : {{ $project->description }} </li>
    </ul>
@endforeach