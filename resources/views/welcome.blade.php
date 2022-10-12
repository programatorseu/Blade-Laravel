<x-layout>
    <x-flash type="error">
        You are now logged out
    </x-flash>

    <x-flash class="mt-10">
        You are now logged out
    </x-flash>

    <x-modal
        title="Deactivate Your Account?"
        submit-label="Deactivate"
    >
        <x-slot name="trigger">
            <button @click="on = true">Show Modal</button>
        </x-slot>
        Are you really sure you want to deactivate your account? All of your data will be permanently removed. This action cannot be undone.
    </x-modal>


</x-layout>