@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Post by: ') }}</div>

                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <img class="" src="{{ url('img/dog.jpeg') }}" alt="">
                    <p class="card-text">Ini foto peliharaan saya</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Komentar 1</li>
                    <li class="list-group-item">Komentar 2</li>
                    <li class="list-group-item">Komentar 3</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Like</a>
                    <a href="#" class="card-link">Komentar</a>
                </div>

                <form action="" method="post">
                    @csrf 
                    <input type="text" name="komentar">
                    <button type="submit" class="button is-primary is-fullwidth is-large">
                        {{ __('Komen') }}
                    </button>
                </form>
            </div>
        </div>

        <div class="col-md-8"> <br>
        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Post by: ') }}</div>

                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <img class="" src="{{ url('img/dog.jpeg') }}" alt="">
                    <p class="card-text">Ini foto peliharaan saya</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Komentar 1</li>
                    <li class="list-group-item">Komentar 2</li>
                    <li class="list-group-item">Komentar 3</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Like</a>
                    <a href="#" class="card-link">Komentar</a>
                </div>

                <form action="" method="post">
                    @csrf 
                    <input type="text" name="komentar">
                    <button type="submit" class="button is-primary is-fullwidth is-large">
                        {{ __('Komen') }}
                    </button>
                </form>
            </div>
        </div>

        <div class="col-md-8"> <br>
        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Post by: ') }}</div>

                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <img class="" src="{{ url('img/dog.jpeg') }}" alt="">
                    <p class="card-text">Ini foto peliharaan saya</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Komentar 1</li>
                    <li class="list-group-item">Komentar 2</li>
                    <li class="list-group-item">Komentar 3</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Like</a>
                    <a href="#" class="card-link">Komentar</a>
                </div>

                <form action="" method="post">
                    @csrf 
                    <input type="text" name="komentar">
                    <button type="submit" class="button is-primary is-fullwidth is-large">
                        {{ __('Komen') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
