<?php

use App\Models\User;
use function Livewire\Volt\state;
use function Livewire\Volt\rules;

state([ 'name' => '', 'email' => '' ]);

rules([
    'name' => ['required'],
    'email' => ['required', 'email'],
]);

$save = function () {
    $this->validate();

    User::factory()->create([
        "name" => $this->name,
        "email" => $this->email,
    ]);

    $this->redirect("/users", navigate: true);
}; ?>

<form wire:submit="save">
    <input type="text" wire:model="name"
        class="w-full border rounded p-3"
        placeholder="Name">
    <div class="text-red-600 text-sm mb-3">
        @error('name') {{ $message }} @enderror
    </div>

    <input type="text" wire:model="email"
        class="w-full border rounded p-3"
        placeholder="Email">
    <div class="text-red-600 text-sm mb-3">
        @error('email') {{ $message }} @enderror
    </div>

    <button type="submit"
        class="rounded bg-blue-700 text-white py-2 px-6">
            Add User
    </button>
</form>
