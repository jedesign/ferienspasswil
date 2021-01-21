<div class="mt-4 flex-grow flex flex-col justify-between">
    <ul class="-mx-0.5 -my-1 flex justify-center flex-wrap">
        <x-participant.card.badge>{{$participant->birthdate->age}} Jahre</x-participant.card.badge>
        <x-participant.card.badge>{{$participant->school_grade}}. Klasse</x-participant.card.badge>
        <x-participant.card.badge>{{$participant->photos_allowed?'':'keine '}}Fotos erlaubt</x-participant.card.badge>
    </ul>
</div>
