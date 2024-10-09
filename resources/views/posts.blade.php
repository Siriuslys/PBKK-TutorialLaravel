@php
    use Illuminate\Support\Str;
@endphp

<x-layout> 
    <x-slot:title>{{ $title }}</x-slot:title>
    <div>

    <div class="py-4 px-4 mx-auto max-w-screen-xl lg:px-6">
        <div class="mx-auto w-full max-w-screen-md">
            <form class="flex justify-center w-full">
                @if(request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if(request('author'))
                <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="flex flex-grow">
                    <div class="relative w-full">
                        <label for="search" class="hidden mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Search</label>
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                            </svg>
                        </div>
                        <input class="block p-3 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:rounded-none sm:rounded-l-lg focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search for article" type="search" id="search" name="search">
                    </div>
                    <div class="flex-none">
                        <button type="submit" class="py-3 px-5 text-sm font-medium text-center text-black rounded-lg border cursor-pointer bg-primary-700 border-primary-600 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    {{ $posts -> links() }}
    
    
     <article class="mt-10 flex flex-wrap justify-center items-center relative mx-auto mb-5">

        @forelse ($posts as $post )    

      
        

        <div class="mb-10 mr-10 max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="" />
            </a>
            <div class="p-5">
                <a href="/posts/{{ $post['slug'] }}">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $post['title'] }}</h5>
                </a>
                <div class="text-sm">
                    <a href='/posts?author={{ $post->author->username}}' class="text-gray-900 dark:text-white leading-none mb-4 hover:underline">By: {{ $post->author->name }}</p>
                    <a href='/posts?category={{ $post->category->slug }}' class="hover:underline text-gray-900 dark:text-white leading-none mb-4 ">In {{ $post->category->name }}  </a>
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

        @empty
        <div>
        <p class= "font-semibold text-xl my-4">Article not found!</p>
        <a href="/posts": class="block text-blue-600 hover:underline">&laquo; Back to all posts</a>
        </div>
        @endforelse

     </article>
    </div>
</x-layout>
