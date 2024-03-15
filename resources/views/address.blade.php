@extends('layouts.app')

@section('content')
<div class="py-8">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <h1 class="text-3xl font-bold text-gray-900 mb-6">Our Offices</h1>
                <div class="space-y-4">
                    <div class="bg-gray-100 p-4 rounded-lg shadow">
                        <h2 class="font-semibold text-xl text-gray-800">Headquarters</h2>
                        <p class="text-gray-600 mt-2">123 Tech Avenue, Silicon Valley, CA, 94025</p>
                    </div>
                    <div class="bg-gray-100 p-4 rounded-lg shadow">
                        <h2 class="font-semibold text-xl text-gray-800">East Coast Office</h2>
                        <p class="text-gray-600 mt-2">456 Innovation Drive, New York, NY, 10001</p>
                    </div>
                    <div class="bg-gray-100 p-4 rounded-lg shadow">
                        <h2 class="font-semibold text-xl text-gray-800">European Branch</h2>
                        <p class="text-gray-600 mt-2">789 Creative Road, London, UK, N1 0XX</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
