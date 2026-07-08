<x-layouts::app :title="__('Blog Posts')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl p-6 bg-white dark:bg-neutral-900 border border-neutral-200 dark:border-neutral-700">
        <h1 class="text-2xl font-bold text-neutral-900 dark:text-neutral-100">Blog Posts</h1>
        <hr class="border-neutral-200 dark:border-neutral-700">

        <div class="space-y-4">
            @if(count($posts) > 0)
                @foreach($posts as $post)
                    <div class="p-4 rounded-lg border border-neutral-200 dark:border-neutral-800 bg-neutral-50 dark:bg-neutral-950">
                        <h2 class="text-xl font-semibold text-neutral-800 dark:text-neutral-200">{{ $post['title'] }}</h2>
                        <p class="mt-2 text-neutral-600 dark:text-neutral-400">{{ $post['content'] }}</p>
                    </div>
                @endforeach
            @else
                <p class="text-neutral-500">No posts found.</p>
            @endif
        </div>
    </div>
</x-layouts::app>