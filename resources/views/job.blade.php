<x-layout>
  <x-slot:heading>
    Job
  </x-slot:heading>

  {{-- stuff added to main --}}
  <h1 class="font-bold">{{ $job['title'] }}</h1>
  <p>This job pays {{$job['salary']}}</p>
</x-layout>