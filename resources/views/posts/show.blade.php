<x-layouts::app :title="$post->title">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl p-6 bg-white dark:bg-neutral-900 border border-neutral-200 dark:border-neutral-700 max-w-3xl mx-auto">
        
        <div class="flex items-center justify-between">
            <a href="/posts" class="inline-flex items-center gap-1.5 text-sm font-medium text-neutral-500 dark:text-neutral-400 hover:text-neutral-900 dark:hover:text-neutral-100 transition-colors group">
                <span class="group-hover:-translate-x-0.5 transition-transform">&larr;</span> Back to Posts
            </a>
            
            <div class="text-xs text-neutral-400 dark:text-neutral-500">
                Published {{ $post->created_at }}
            </div>
        </div>

        <hr class="border-neutral-200 dark:border-neutral-700 my-2">

        <article class="flex-1 flex flex-col gap-6">
            <div>
                <h1 class="text-3xl font-extrabold tracking-tight text-neutral-900 dark:text-neutral-100 sm:text-4xl">
                    {{ $post->title }}
                </h1>
                
                <p class="mt-2 text-sm text-neutral-500 dark:text-neutral-400">
                    By <span class="font-semibold text-neutral-700 dark:text-neutral-300">{{ $post->user->name }}</span>
                </p>
            </div>

            <div class="text-base text-neutral-700 dark:text-neutral-200 leading-relaxed whitespace-pre-line break-words">
                {{ $post->body }}
            </div>
        </article>

    </div>
</x-layouts::app>