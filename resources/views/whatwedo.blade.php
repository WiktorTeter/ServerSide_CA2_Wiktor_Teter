@extends('layouts.app')

@section('content')
<div class="py-8">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <h1 class="text-3xl font-bold text-gray-900">What We Do</h1>
                <p class="mt-4 text-lg text-gray-600">
                    We are dedicated to sharing the latest in tech through engaging and informative blogs. Our platform is a hub for tech enthusiasts and professionals to explore, learn, and discuss cutting-edge technologies and industry trends.
                </p>
                <div class="mt-6">
                    <h2 class="text-2xl font-semibold text-gray-900">Featured Tech Blogs</h2>
                    <!-- Blog posts list -->
                    <div class="mt-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                        <!-- Example blog post card -->
                        <div class="bg-gray-100 p-4 rounded-lg shadow">
                            <h3 class="font-semibold text-xl text-gray-800">AI what is it?</h3>
                            <p class="text-gray-600 mt-2">Become more informed on artifical Intelligence</p>
                            <div class="mt-4 flex justify-between items-center">
                                <a href="/blog/ai-what-is-it" class="text-blue-600 hover:text-blue-800 transition duration-300">Read more</a>
                                <span class="text-sm text-gray-500">Published on: 15/03/2024</span>
                            </div>
                        </div>

                        <div class="bg-gray-100 p-4 rounded-lg shadow">
                            <h3 class="font-semibold text-xl text-gray-800">Virtual and Augmented Reality</h3>
                            <p class="text-gray-600 mt-2">Become more informed on Virual and Augmented Reality</p>
                            <div class="mt-4 flex justify-between items-center">
                                <a href="/blog/blog/exploring-the-boundaries-virtual-and-augmented-reality-and-their-endless-possibilities" class="text-blue-600 hover:text-blue-800 transition duration-300">Read more</a>
                                <span class="text-sm text-gray-500">Published on: 15/03/2024</span>
                            </div>
                        </div>

                        <div class="bg-gray-100 p-4 rounded-lg shadow">
                            <h3 class="font-semibold text-xl text-gray-800">Crypocurrency</h3>
                            <p class="text-gray-600 mt-2">Become more informed on Crypocurrency</p>
                            <div class="mt-4 flex justify-between items-center">
                                <a href="/blog/unveiling-the-crypto-revolution-possibilities-beyond-currency" class="text-blue-600 hover:text-blue-800 transition duration-300">Read more</a>
                                <span class="text-sm text-gray-500">Published on: 15/03/2024</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection