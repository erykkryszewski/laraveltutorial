<x-layout>
  <x-slot:heading>
    Jobs
  </x-slot:heading>

  {{-- stuff added to main --}}
  <ul>
    @foreach($jobs as $job)
    <li class="mt-3">
      <a href="/jobs/{{$job['id']}}">
        <strong>{{ $job['title'] }}</strong> pays {{ $job['salary'] }}
      </a>
    </li>
    @endforeach
  </ul>
</x-layout>