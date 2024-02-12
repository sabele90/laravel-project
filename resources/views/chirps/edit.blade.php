<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Chrip') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('chirps.update', $chirp)}}">
                        <!-- To avoid 419 expired page: -->
                        @csrf @method('PUT')
                        <textarea name="message" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="{{__('What\'s on your mind?')}}">{{ old('message', $chirp->message)}}</textarea>
                        <x-input-error class="mt-2" :messages="$errors->get('message')" />
                        <x-primary-button class="mt-4">{{ __('Chirp')}}</x-primary-button>
                    </form>
                </div>

            </div>

</x-app-layout>