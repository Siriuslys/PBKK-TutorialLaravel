<x-layout> 
    <x-slot:title>{{ $title }}</x-slot:title>

{{-- <article class= "mx-auto">
<main class=" lg:py-24 justify-center px-52 mt-1 max-w-screen-xl lg:pt-16 lg:pb-24 mx-auto bg-white antialiased">
    <a href="/posts" class="font-medium hover:underline">&laquo;Back to posts</a>
    <div class="mb-1 flex justify-between px-4 mx-auto max-w-screen-xl ">
        <article class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
            <header class="mb-4 lg:mb-6 not-format">
                <h1 class="mt-4 mb-2 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl">{{ $post ['title'] }}</h1>
                <address class="flex items-center mb-6 not-italic">
                    <div class="inline-flex items-center mr-3 text-sm text-gray-900 ">
                        <div>
                            <a href="#" rel="author" class="text-xl font-bold text-gray-900">{{ $post ['author'] }}</a>
                            <p class="text-base text-gray-500">Graphic Designer, educator & CEO Flowbite</p>
                            <p class="text-base text-gray-500">Feb. 8, 2022</p>
                        </div>
                    </div>
                </address>
            </header>
            <p class="lead">Flowbite is an open-source library of UI components built with the utility-first
                classes from Tailwind CSS. It also includes interactive elements such as dropdowns, modals,
                datepickers.</p>
            <p class= "mb-5">{{$post ['body']}}</p>
        </article>
    </div>
  </main>
    </article> --}}
{{-- 
<article class="mx-auto">
        <main class=" lg:py-24 justify-center px-52 mt-1 max-w-screen-xl pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
            <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
                <article class="mx-auto w-full max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                    <header class="mb-4 lg:mb-6 not-format">
                        <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">{{ $post ['title'] }}</h1>
                        <address class="flex items-center mb-6 not-italic">
                            <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                                <div>
                                    <a href="#" rel="author" class="text-xl font-bold text-gray-900 dark:text-white">{{ $post ['author'] }}</a>
                                    <p class="text-base text-gray-500 dark:text-gray-400"><time pubdate datetime="2022-02-08" title="February 8th, 2022">Feb. 8, 2022</time></p>
                                </div>
                            </div>
                        </address>
                    </header>
                    <p class="lead">Flowbite is an open-source library of UI components built with the utility-first
                        classes from Tailwind CSS. It also includes interactive elements such as dropdowns, modals,
                        datepickers.</p>
                    <p>{{$post ['body']}}</p>
            </div>
        </main>
    </article> --}}

    <article class="mx-auto bg-white ">
        <main class="lg:py-24 justify-center mt-1 max-w-screen-xl pt-8 pb-16 lg:pt-16 lg:pb-24  dark:bg-gray-900 antialiased">
            <div class="flex justify-between px-4 mx-auto max-w-screen-xl">
                <article class="mx-auto px-16 max-w-2xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                    <a href="/posts" class="font-medium hover:underline text-gray-700">&laquo;Back to posts</a>
                    <header class="mb-4 lg:mb-6 not-format">
                        <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">{{ $post['title'] }}</h1>
                        <address class="flex items-center mb-6 not-italic">
                            <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                                <div>
                                    <a href="#" rel="author" class="text-xl font-bold text-gray-900 dark:text-white">{{ $post['author'] }}</a>
                                    <p class="text-base text-gray-500 dark:text-gray-400"><time pubdate datetime="2022-02-08" title="February 8th, 2022">Feb. 8, 2022</time></p>
                                </div>
                            </div>
                        </address>
                    </header>
                    <p class="lead">Flowbite is an open-source library of UI components built with the utility-first classes from Tailwind CSS. It also includes interactive elements such as dropdowns, modals, datepickers.</p>
                    <p>{{ $post['body'] }}</p>
                </article>
            </div>
        </main>
    </article>
    

</x-layout> 
