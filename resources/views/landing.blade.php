@extends('layouts.main')

@php
    use App\Models\Article;

    $latestArticle = Article::orderBy('created_at', 'desc')->first();
@endphp

@section('content')
<div class="w-full h-full flex flex-col justify-center items-center">
    <x-article :id="$latestArticle->id" :title="$latestArticle->title" :content="$latestArticle->content" />
</div>
@endsection
