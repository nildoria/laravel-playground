<x-layout>
    <x-slot:heading>
        Job Title
    </x-slot:heading>
    <h2 class="text-xl font-bold">{{$job['title']}}</h2>
    <p>Pays {{$job['salary']}} per year</p>
    <p>Company: {{$job['company']}}</p>
</x-layout>