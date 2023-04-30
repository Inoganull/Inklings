@props(['category'])

<a href="/?category={{ $category->slug }}"
    class="px-3 py-1 border border-blue-600 rounded-full text-blue-500 text-xs uppercase font-semibold"
    style="font-size: 10px">
        {{ $category->name }}
</a>


