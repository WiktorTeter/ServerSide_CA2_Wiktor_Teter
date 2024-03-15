@extends('layouts.app')

@section('content')
<div class="py-8">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <h1 class="text-3xl font-bold text-gray-900 mb-6">Phone Contacts</h1>
                <div class="space-y-4">
                    <div class="bg-gray-100 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 ease-in-out">
                        <h2 class="font-semibold text-xl text-gray-800">Customer Service</h2>
                        <p class="text-gray-600 mt-2">+1 800 123 4567</p>
                    </div>
                    <div class="bg-gray-100 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 ease-in-out">
                        <h2 class="font-semibold text-xl text-gray-800">Technical Support</h2>
                        <p class="text-gray-600 mt-2">+1 800 456 7890</p>
                    </div>
                    <div class="bg-gray-100 p-6 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 ease-in-out">
                        <h2 class="font-semibold text-xl text-gray-800">Corporate Office</h2>
                        <p class="text-gray-600 mt-2">+1 800 789 0123</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
