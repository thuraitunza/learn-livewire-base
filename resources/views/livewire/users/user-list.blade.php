<?php

use App\Models\User;
use function Livewire\Volt\state;

state([ 'users' => fn () => User::all() ]);

$delete = function ($id) {
    $user = User::find($id);
    $user->delete();

    $this->users = User::all();
}; ?>

<ul class="mt-4">
    @foreach ($users as $user)
        <li class="border-b py-2 mb-2 flex justify-between"
            wire:key="{{ $user->id }}">

            <a href="/users/view/{{ $user->id }}"
                 class="text-blue-700" wire:navigate>
                {{ $user->name }}
            </a>

            <button wire:click="delete({{ $user->id }})"
                class="text-red-500 text-xl font-bold">
                &times;
            </button>
        </li>
    @endforeach
</ul>
