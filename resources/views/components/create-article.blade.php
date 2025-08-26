<div class="flex flex-col w-2xl gap-4">
    <form class="flex flex-1 flex-col gap-2" method="POST" action="{{ route('articles.store') }}">
        <div class="flex flex-1 flex-col gap-2">
            @csrf
            <input class="p-2 bg-gray-300 rounded-lg focus:bg-gray-600 focus:text-gray-100 focus:border-none focus:outline-none" type="text" placeholder="Article Title" name="title" required/>
            <textarea class="p-2 bg-gray-300 rounded-lg focus:bg-gray-600 focus:text-gray-100 focus:border-none focus:outline-none" rows="4" placeholder="Article Content" name="content" required></textarea>
        </div>
        <div class="flex flex-1 flex-row gap-2 justify-end">
            <button type="submit" class="rounded py-1 px-2 bg-gray-300 hover:bg-gray-600 focus:bg-gray-600 focus:text-gray-100 hover:text-gray-100 focus:border-none focus:outline-none">Create Article</button>
        </div>
    </form>
</div>
