@extends('layouts.app')

@section('content')
    <jumbotron v-cloak>
        <h3>{{ config('blog.article.title') }}</h3>

        <h6>{{ config('blog.article.description') }}</h6>
    </jumbotron>

    @include('widgets.article')

    <div class="row">
        <div class="text-center">
          {{ $articles->links() }}
        </div>
    </div>
@endsection
