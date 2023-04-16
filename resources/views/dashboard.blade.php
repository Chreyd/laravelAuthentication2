<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <ul>
                        <li>Nombre de Notification:{{ auth()->user()->notifications->count() }}</li>
                        <li>Notification Non Lu:{{ auth()->user()->UnreadNotifications->count() }}</li>
                        <li>Notification Lu:{{ auth()->user()->readNotifications->count() }}</li>
                    </ul>

                    @foreach (auth()->user()->notifications as $notification)
                        {{ $notification->data['title'] }} ||
                        {{ $notification->data['mon_email'] }} |||
                         {{ $notification->markAsRead() }} {{-- Marqué que la notification a été lue --}}
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
