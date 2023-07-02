<div class="bg-white border-2 2xs:w-full xs:w-full sm:w-full md:w-1/2 lg:w-1/2 xl:w-1/2 2xl:w-1/2 w-1/2 p-5">
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <h1 class="text-2xl font-bold mb-5">Register</h1>
    <x-errors title="We found {errors} validation error(s)" />
    <form wire:submit.prevent="register">
        @csrf

        <div class="mb-3">
            <x-input wire:model="username" label="Username" placeholder="Username" class="" />
        </div>
        <div class="mb-3">
            <x-inputs.password label="Password" wire:model='password' placeholder="Password" />
            <div x-data="{ showPasswordError: @entangle('showPasswordError') }">
                <p x-show="showPasswordError" class="text-red-500 text-sm">Password must be at least 8 characters long.
                </p>
            </div>
        </div>
        <div class="mb-3">
            <x-inputs.password label="Confirm Password" wire:model="password_confirmation"
                placeholder="Confirm Password" />
            <div x-data="{ showConfirmPasswordError: @entangle('showConfirmPasswordError') }">
                <p x-show="showConfirmPasswordError" class="text-red-500 text-sm">Password do not match.</p>
            </div>
        </div>
        <div class="mb-3">
            <x-input wire:model="first_name" label="First Name" placeholder="First Name" />
        </div>
        <div class="mb-3">
            <x-input wire:model="last_name" label="Last Name" placeholder="Last Name" />
        </div>
        <div class="mb-3">
            <x-input wire:model="email" label="Email" placeholder="Email" />
        </div>

        <div class="mt-6 flex justify-end">

            <x-button secondary label="Back to Login" wire:click='login' class="mx-3" />
            <x-button info label="Submit" wire:click='submit' type="submit" wire:loading.remove />
            <x-button info label="Submitting..." wire:loading wire:target="submit" wire:loading.attr='disabled' />
        </div>
    </form>
</div>
