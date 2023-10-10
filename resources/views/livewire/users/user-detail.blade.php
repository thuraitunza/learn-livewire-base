<?php

use App\Models\User;
use function Livewire\Volt\state;
use function Livewire\Volt\mount;

state([ 'user' => null ]);

mount(function($id) {
    $this->user = User::find($id);
}); ?>

<div class="border rounded p-4">
    <h3 class="text-2xl mb-2">{{ $user->name }}</h3>
    <p class="text-gray-600 mb-2">{{ $user->email }}</p>
    <div class="mb-4">
        <small class="text-gray-400">
            {{ $user->created_at->diffForHumans() }}
        </small>
    </div>

    <a href="/users" class="text-blue-500"
        wire:navigate>&laquo; Go back</a>
</div>
