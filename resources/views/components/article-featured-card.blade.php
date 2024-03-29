@props(['article'])
<article
    class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
    <div class="py-6 px-5 lg:flex">
        <div class="flex-1 lg:mr-8">
            <img src="./images/illustration-1.png" alt="Blog Post illustration" class="rounded-xl">
        </div>

        <div class="flex-1 flex flex-col justify-between">
            <header class="mt-8 lg:mt-0">
                <div class="space-x-2">
                    <x-category-button :category="$article->category" />
                </div>

                <div class="mt-4">
                    <h1 class="text-3xl">
                        <a href="/articles/{{$article->slug}}">
                            {{ $article->title }}
                        </a>
                        
                    </h1>

                    <span class="mt-2 block text-gray-400 text-xs">
                            Published <time>{{ $article->created_at->diffForHumans() }}</time>
                        </span>
                </div>
            </header>


            <footer class="flex justify-between items-center mt-8">
                <div class="flex items-center text-sm">
                    <img src="./images/lary-avatar.svg" alt="Lary avatar">
                    <div class="ml-3">
                        <h5 class="font-bold">
                        <a href="/?author={{ $article->author->username }}">{{ $article->author->username }}</a>

                        </h5>
                        
                    </div>
                </div>

            </footer>
        </div>
    </div>
</article>