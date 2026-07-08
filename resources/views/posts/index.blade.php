<x-layouts::app :title="__('Blog Posts')">
    <div 
        class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl p-6 bg-white dark:bg-neutral-900 border border-neutral-200 dark:border-neutral-700"
        x-data="{ users: @json($usernames) }"
    >
        <div class="flex justify-between items-center">
            <h1 class="text-2xl font-bold text-neutral-900 dark:text-neutral-100">Blog Posts</h1>
            <!--
            <select multiple class="px-3 py-1.5 text-sm bg-neutral-100 dark:bg-neutral-800 text-neutral-700 dark:text-neutral-200 rounded-lg border border-neutral-300 dark:border-neutral-600 outline-none">
                @foreach($usernames as $name)
                    <option value={{ $name }}>{{ $name }}</option>
                @endforeach
            </select>
            -->
        </div>

        <hr class="border-neutral-200 dark:border-neutral-700">

        <div class="space-y-4">
            @if(count($posts) > 0)
                @foreach($posts as $post)
                    <a href="{{ route('posts.show', $post['id']) }}" class="block p-4 rounded-lg border border-neutral-200 dark:border-neutral-800 bg-neutral-50 dark:bg-neutral-950 hover:bg-neutral-100/50 dark:hover:bg-neutral-900/40 hover:border-neutral-300 dark:hover:border-neutral-700 transition-all group">
                        <h2 class="text-xl font-semibold text-neutral-800 dark:text-neutral-200">{{ $post['title'] }}</h2>
                        <p class="mt-2 text-neutral-600 dark:text-neutral-400">{{ $post['content'] }}</p>
                    </a>
                @endforeach
            @else
                <p class="text-neutral-500">No posts found.</p>
            @endif
        </div>

        {{ $posts->links('pagination::simple-tailwind') }}
    </div>
</x-layouts::app>