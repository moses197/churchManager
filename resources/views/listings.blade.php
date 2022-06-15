<h1>{{$name}}</h1>

@foreach($heading as $head)

<h2>
    <a href="/listings/{{$head['id']}}" >{{$head['title']}}</a>
</h2>

<p>{{$head['description']}}</p>

@endforeach

