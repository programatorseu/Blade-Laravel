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
    
    <x-section>
        <div>
            <x-dropdown>
                <x-slot name="trigger">
                    <button>Click Me</button>
                </x-slot>

                <x-dropdown-link href="/">One</x-dropdown-link>
                <x-dropdown-link href="/">Two</x-dropdown-link>
                <x-dropdown-link href="/">Three</x-dropdown-link>
            </x-dropdown>
        </div>
    </x-section>
</x-layout>