<?php

namespace Tests\Feature\Component;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class ParticipantCreateFormTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function firstname_is_required(): void
    {
        Livewire::test('participant.create')
            ->set('firstname', '')
            ->call('save')
            ->assertHasErrors(['firstname' => 'required']);
    }

    // TODO[rw]: add all other fileds (30.05.21 rw)

}
