<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-lime-600 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-10">
            <div class="bg-violet-600 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-10 text-lime-600 text-center text-xl">
  {{ __("You're logged in!") }}
  <p>Šis teksts rādās!</p>
</div>
            </div>
        </div>
    </div>
</x-app-layout>
