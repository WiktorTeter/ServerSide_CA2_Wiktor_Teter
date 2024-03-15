@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    Do you want to become a developer?
                </h1>
                <a 
                    href="/blog/how-to-become-a-better-web-developer"
                    class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase hover:shadow-lg transition-shadow duration-300 ease-in-out">
                    Read More
                </a>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" width="700" alt="">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                Struggling to be a better web developer?
            </h2>
            
            <p class="py-8 text-gray-500 text-s">
               This article will help you to become a better web developer.
            </p>


            <a 
                href="/blog/how-to-become-a-better-web-developer"
                class="uppercase bg-orange-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Find Out More
            </a>
        </div>
    </div>

    <div class="text-center p-15 bg-orange-400 text-white">
        <h2 class="text-2xl pb-5 text-l"> 
            I'm an expert in...
        </h2>

        <span class="font-extrabold block text-4xl py-1">
            Web Development
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Social Media
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Cryptocurrency
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Virtual Reality
        </span>
    </div>

    <div class="text-center py-15">
        <span class="uppercase text-s text-gray-400">
            Blog
        </span>

        <h2 class="text-4xl font-bold py-10">
            Recent Posts
        </h2>

        <p class="m-auto w-4/5 text-gray-500">
            Check out the latest posts from our blog to become more informed on the latest trends and news in the tech industry.
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 w-4/5 mx-auto mt-10">

        <div class="flex bg-yellow-500 rounded-lg shadow-lg overflow-hidden transform transition-all hover:scale-105">
            <div class="m-auto py-10 px-5 text-center">
                <span class="uppercase text-sm font-bold text-gray-100">
                    Artificial Intelligence
                </span>

                <h3 class="text-xl font-bold text-gray-100 py-4">
                    Looking to become more informed on AI? Check out our latest post.
                </h3>

                <a 
                    href="/blog/ai-what-is-it-2"
                    class="inline-block bg-yellow-600 text-gray-100 hover:bg-yellow-700 text-sm font-bold py-3 px-6 rounded-lg transition-colors">
                    Find Out More
                </a>
            </div>
        </div>
        <div class="flex bg-yellow-500 rounded-lg shadow-lg overflow-hidden transform transition-all hover:scale-105">
            <div class="m-auto py-10 px-5 text-center">
                <span class="uppercase text-sm font-bold text-gray-100">
                    Web Development
                </span>

                <h3 class="text-xl font-bold text-gray-100 py-4">
                    Looking to become more a better web developer? Check out our latest post.
                </h3>

                <a 
                    href="/blog/how-to-become-a-better-web-developer-2"
                    class="inline-block bg-yellow-600 text-gray-100 hover:bg-yellow-700 text-sm font-bold py-3 px-6 rounded-lg transition-colors">
                    Find Out More
                </a>
            </div>
        </div>
        <div class="flex bg-yellow-500 rounded-lg shadow-lg overflow-hidden transform transition-all hover:scale-105">
            <div class="m-auto py-10 px-5 text-center">
                <span class="uppercase text-sm font-bold text-gray-100">
                    Virtual and Augmented Reality
                </span>

                <h3 class="text-xl font-bold text-gray-100 py-4">
                    Looking to become more informed on VR and AR? Check out our latest post.
                </h3>

                <a 
                    href="/blog/exploring-the-boundaries-virtual-and-augmented-reality-and-their-endless-possibilities-2"
                    class="inline-block bg-yellow-600 text-gray-100 hover:bg-yellow-700 text-sm font-bold py-3 px-6 rounded-lg transition-colors">
                    Find Out More
                </a>
            </div>
        </div>
        <div class="flex bg-yellow-500 rounded-lg shadow-lg overflow-hidden transform transition-all hover:scale-105">
            <div class="m-auto py-10 px-5 text-center">
                <span class="uppercase text-sm font-bold text-gray-100">
                    Crypocurrency
                </span>

                <h3 class="text-xl font-bold text-gray-100 py-4">
                    Looking to become more informed on Cryptocurrency? Check out our latest post.
                </h3>

                <a 
                    href="/blog/unveiling-the-crypto-revolution-possibilities-beyond-currency-2"
                    class="inline-block bg-yellow-600 text-gray-100 hover:bg-yellow-700 text-sm font-bold py-3 px-6 rounded-lg transition-colors">
                    Find Out More
                </a>
            </div>
        </div>
        <div class="flex bg-yellow-500 rounded-lg shadow-lg overflow-hidden transform transition-all hover:scale-105">
            <div class="m-auto py-10 px-5 text-center">
                <span class="uppercase text-sm font-bold text-gray-100">
                    TikTok
                </span>

                <h3 class="text-xl font-bold text-gray-100 py-4">
                    Looking to become more informed on TikTok? Check out our latest post.
                </h3>

                <a 
                    href="/blog/the-tiktok-phenomenon-unleashing-creativity-and-connecting-the-world-2"
                    class="inline-block bg-yellow-600 text-gray-100 hover:bg-yellow-700 text-sm font-bold py-3 px-6 rounded-lg transition-colors">
                    Find Out More
                </a>
            </div>
        </div>


        
        <div>
            <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" alt="">
        </div>
    </div>
@endsection