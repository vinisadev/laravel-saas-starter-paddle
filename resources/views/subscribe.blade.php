<x-app-slot>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Subscribe') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <x-paddle-button :checkout="$checkout" class="px-8 py-4">
          Subscribe
        </x-paddle-button>
      </div>
    </div>
  </div>
</x-app-layout>