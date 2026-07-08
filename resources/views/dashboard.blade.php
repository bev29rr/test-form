<x-layouts::app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="grid auto-rows-min gap-4 md:grid-cols-3">
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <div class="p-5 flex flex-col h-full justify-between">
                    
                    <div class="flex justify-between items-baseline mb-3">
                        <h2 class="text-sm font-bold tracking-wide uppercase text-neutral-400 dark:text-neutral-500">
                            Latest Posts
                        </h2>
                        <a href="/posts" class="text-xs font-semibold text-blue-600 dark:text-blue-400 hover:text-blue-700 transition-colors">
                            View All &rarr;
                        </a>
                    </div>

                    <div class="flex-1 flex flex-col gap-2.5 min-w-0 justify-center">
                        @if(count($posts) > 0)
                            @foreach($posts as $post)
                                <a href="/posts" class="group block p-2.5 rounded-lg border border-neutral-100 dark:border-neutral-800/60 bg-neutral-50/50 dark:bg-neutral-950/40 hover:bg-neutral-50 dark:hover:bg-neutral-950 hover:border-neutral-200 dark:hover:border-neutral-800 transition-all min-w-0">
                                    <h3 class="font-medium text-xs text-neutral-800 dark:text-neutral-200 group-hover:text-blue-600 dark:group-hover:text-blue-400 line-clamp-1 transition-colors">
                                        {{ $post['title'] }}
                                    </h3>
                                    <p class="text-[11px] text-neutral-500 dark:text-neutral-400 line-clamp-1 mt-0.5">
                                        {{ $post['content'] }}
                                    </p>
                                </a>
                            @endforeach
                        @else
                            <div class="flex flex-1 items-center justify-center border border-dashed border-neutral-200 dark:border-neutral-800 rounded-lg p-4">
                                <p class="text-xs text-neutral-400 dark:text-neutral-500">No recent posts available.</p>
                            </div>
                        @endif
                    </div>

                </div>
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
        </div>
        <div class="relative h-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
        </div>
    </div>
</x-layouts::app>
