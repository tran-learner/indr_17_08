<x-app-layout>
{{-- 
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="flex flex-col">
       {{--  <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        {{ __("You're logged in!") }}
                    </div>
                </div>
            </div>
        </div> --}}

        <div class="iframeBorder">
            <iframe src="http://localhost:5173/"
                style="position: absolute; width: 100%; height: 100%; border: 0;" allowfullscreen
                loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
{{--             <iframe
                src="http://localhost:5174/"
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
        </div>
    </div>

</x-app-layout>
