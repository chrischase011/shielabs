<div class="bg-white border-2 2xs:w-full xs:w-full sm:w-full md:w-1/2 lg:w-1/2 xl:w-1/2 2xl:w-1/2 w-1/2 p-5">
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <h1 class="text-2xl font-bold mb-5">Login</h1>

    <x-errors />
    <x-dialog />
    @if (session()->has('successLogin'))
        <script>
            document.addEventListener('livewire:load', function() {
                window.addEventListener('DOMContentLoaded', function() {
                    window.$wireui.dialog({
                        title: 'Successfully Registered!',
                        description: "{{ session()->get('successLogin') }}",
                        icon: 'success'
                    })
                });
            });
        </script>
    @endif

    <form wire:submit.prevent='authenticate'>
        @csrf
        <div class="mb-3">
            <x-input wire:model="username" label="Username" placeholder="Username" class="" />
        </div>
        <div class="mb-3">
            <x-inputs.password label="Password" wire:model='password' placeholder="Password" />
        </div>

        <div class="my-5">
            <span class="text-sm">Don't have an account? <a href="#" wire:click="register"
                    class="no-underline text-moonstone">Register Here</a></span>
        </div>

        <div class="mt-6 flex justify-end">
            <x-button info label="Submit" wire:click='submit' type="submit" wire:loading.remove />
            <x-button info label="Authenticating..." wire:loading wire:target="submit" wire:loading.attr='disabled' />
        </div>
    </form>

</div>
