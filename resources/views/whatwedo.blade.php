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

                        <!-- Loop through each blog post -->
                        @forelse($blogPosts as $post)
                            <div class="bg-gray-100 p-4 rounded-lg shadow">
                                <h3 class="font-semibold text-xl text-gray-800">{{ $post->title }}</h3>
                                <p class="text-gray-600 mt-2">{{ Str::limit($post->description, 90) }}</p>
                                <div class="mt-4 flex justify-between items-center">
                                    <a href="{{ url('/blog/' . $post->slug) }}" class="text-blue-600 hover:text-blue-800 transition duration-300">Read more</a>
                                    <span class="text-sm text-gray-500">Published on: {{ $post->created_at->format('d/m/Y') }}</span>
                                </div>
                            </div>
                        @empty
                            <p>No posts to display.</p>
                        @endforelse
                    </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection