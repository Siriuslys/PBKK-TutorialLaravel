@php
    use Illuminate\Support\Str;
@endphp

<x-layout> 
    <x-slot:title>{{ $title }}</x-slot:title>

    
     <article class="mt-10 flex flex-wrap justify-center items-center relative mx-auto mb-5">
        
        @foreach ($posts as $post )    

        {{-- <a href="/posts/{{ $post['slug'] }}" class="block">
            <div class="mt-5 flex justify-center items-center relative max-w-sm w-full lg:max-w-full lg:flex mb-5">
                <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url('/img/card-left.jpg')" title="Woman holding a mug">
                </div>
                <div class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-lg p-4 flex flex-col justify-between leading-normal">
                    <div class="mb-8">
                        <div class="text-gray-900 font-bold text-xl mb-4"></div>
                        <div class="flex items-center mb-2 mt-2">
                            
                        </div>
                        <p class="text-gray-700 text-base"></p>
                    </div>

                </div>
            </div>
        </a> --}}

        

        <div class="mb-10 mr-10 max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
            </a>
            <div class="p-5">
                <a href="/posts/{{ $post['slug'] }}">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $post['title'] }}</h5>
                </a>
                <div class="text-sm">
                    <a href='/authors/{{ $post->author->id}}' class="text-gray-900 dark:text-white leading-none mb-4 hover:underline">By: {{ $post->author->name }}</p>
                    <a href='#' class="text-gray-900 dark:text-white leading-none mb-4 hover:underline">in Web  </p>
                    <p class="text-gray-600 dark:text-white mb-2">{{ $post->created_at->format('j F Y') }}</p>
                </div>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ Str::limit($post['body'], 100)}}</p>
                <a href="/posts/{{ $post['slug'] }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Read more
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>

        @endforeach

     </article>
</x-layout>
