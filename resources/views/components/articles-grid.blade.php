@props(['articles'])
<x-article-featured-card :article="$articles[0] " />
    @if ($articles->count() > 1)
        <div class="lg:grid lg:grid-cols-3">
            @foreach ($articles->skip(1) as $article)
                <x-article-card :article="$article" class="cols-span-2" />
            @endforeach
        </div>
    @endif
