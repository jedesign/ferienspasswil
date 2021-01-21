<address
    class="col-span-2 flex flex-col bg-gradient-to-br from-yellow-100 to-yellow-200 rounded-lg shadow p-8 not-italic relative hover:shadow-md">
    <h3 class="text-gray-900 text-lg leading-5 font-medium mb-3">{{$guardian->firstname}} {{$guardian->lastname}}</h3>
    {{$guardian->street}} {{$guardian->street_number}} <br>
    {{$guardian->postcode}} {{$guardian->city}} <br>
    {{$guardian->phone}} <br>
    {{$guardian->email}}
    <x-card.button-edit href="{{route('dashboard.profile')}}"/>
</address>
