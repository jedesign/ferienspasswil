@props(['user'])
@php /** @var \App\Models\User $user */ @endphp
<address
    class="col-span-2 flex flex-col bg-gradient-to-br from-yellow-100 to-yellow-200 rounded-lg shadow p-8 not-italic relative hover:shadow-md">
    <h3 class="text-gray-900 text-lg leading-5 font-medium mb-3">{{$user->firstname}} {{$user->lastname}}</h3>
    {{$slot}}
</address>
