<h1>Ici vous pouvez voir une roadmap :)</h1>

<ul>
	<li>ID : {{ $roadmap->id }} </li>
    <li>Description : {{ $roadmap->description }} </li>
    <li>Projet : {{ $roadmap->project()->first()->name }} </li>
</ul>