<form wire:submit.prevent="update">
    <input type="text" wire:model="firstname">
    <input type="text" wire:model="lastname">
    <input type="text" wire:model="street">
    <input type="text" wire:model="street_number">
    <input type="text" wire:model="postcode">
    <input type="text" wire:model="city">
    <input type="text" wire:model="phone">
    <input type="text" wire:model="email">

    <input type="submit" value="Speichern">
</form>
