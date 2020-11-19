@extends('layouts.app') <!-- Use code from views>layouts>app.blade.php folder -->

@section('content')

    <div class="jumbotron text-center">
        <h1 class="display-3">Hello, world!</h1>
        <p class="lead">This is a simple blog created using Laravel</p>
        <!--
        <hr class="my-2">
        <p>It uses utility classes for typography and
        spacing to space content out within the larger container.</p>
        -->
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="#!" role="button">Login?</a>
            <a class="btn btn-secondary btn-lg" href="#!" role="button">Register</a>
        </p>
    </div>
@endsection