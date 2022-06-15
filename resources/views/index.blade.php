<!--this is a index page for the churchmanager app or home page-->

@extends('layout.main.app')

@section('content')
        <nav>
            <ul>
                <a href=""><li>Login</li></a>
                <a href=""><li>Register</li></a>
                <a href=""><li>List Book</li></a>
            </ul>
        </nav>
        <!--<script src="" async defer></script>-->
    <main>
        <h2> Welcome to the main page of the church </h2>

        <div> 
            <h3>List of books below</h3>
            @foreach($heading as $head)
            <p> {{$head['name']}}</p>
            @endforeach
       </div>
    </main>

@endsection
</html>
