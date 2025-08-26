@props(['title', 'content', 'id'])

<div class="flex flex-col w-2xl  p-4 bg-gray-300 rounded-lg focus:bg-gray-600 focus:text-gray-100 focus:border-none focus:outline-none">
    <div class="flex flex-row justify-between items-center border-b py-2 px-1 border-dashed border-gray-400">
        <h1>{{ $title }}</h1>
        <form action="{{ route('articles.destroy', $id) }}" method="post" onsubmit="return confirm('Are you sure?');">
            @csrf
            @method('DELETE')
            <button class="py-1 px-2 text-gray-400 hover:text-red-500 hover:bg-red-300 rounded-lg cursor-pointer">x</button>

        </form>
    </div>

    <div class="rounded-lg py-2 px-1 flex flex-1 flex-col">
        <p>{{ $content }}</p>
    </div>

</div>

