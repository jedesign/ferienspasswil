<address
    class="col-span-2 flex flex-col bg-gradient-to-br from-yellow-100 to-yellow-200 rounded-lg shadow p-8 not-italic relative hover:shadow-md">
    <h3 class="text-gray-900 text-lg leading-5 font-medium mb-3">{{$guardian->firstname}} {{$guardian->lastname}}</h3>
    {{$guardian->street}} {{$guardian->street_number}} <br>
    {{$guardian->postcode}} {{$guardian->city}} <br>
    {{$guardian->phone}} <br>
    {{$guardian->email}}
    <a href="{{route('dashboard.profile')}}"
       class="absolute top-0 right-0 w-8 h-8 mt-3 mr-3 text-gray-900 p-2 bg-gray-100 rounded-full hover:bg-gray-200 transition-colors duration-150">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
            <path
                d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"/>
        </svg>
    </a>
</address>
