@extends('layouts.main')

@php
    use App\Models\Article;

    $articles = Article::get();
@endphp
@section('content')

<div class="w-full h-full flex flex-col gap-4 items-center">
    <x-create-article />

    <div class="w-2xl">
        <p class="text-gray-400">Articles</p>
    </div>
    <div class="flex flex-col flex-1 overflow-y-auto gap-4">
        @foreach ($articles as $article )
            <x-article :id="$article->id" :title="$article->title" :content="$article->content" />
        @endforeach
    </div>

</div>

@endsection

