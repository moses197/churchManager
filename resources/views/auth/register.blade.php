<!--register user page-->
@extends('layout.main.app')

@section('content')
        <div class="">
            <form action=" route('register') " method="post">
                <label for="name">Email</label>
                <input type="text" name="name" id="name" placeholder="Name" autofocus require>

                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Email" require>

                <label for="phone">Phone</label>
                <input type="phone" name="phone" id="phone" placeholder="Password" require>

                <label for="address">Address</label>
                <input type="address" name="address" id="address" placeholder="Phone Number" require>


                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Address" require>

                <label for="status">Status</label>
                <input type="status" name="status" placeholder="Status" require>

                <button type="submit">Register</button>
            </form>
        </div>
        
        <script src="" async defer></script>
    
@endsection