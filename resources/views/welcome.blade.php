<x-layout>
    <x-section>
        <x-dropdownx>
            <x-slot name="trigger">
                <button>Click here</button>
            </x-slot>
            <x-dropdown-link target="_blank" rel="noopener noreferrer" href="https://google.co.in">One</x-dropdown-link>
            <x-dropdown-link target="_blank" rel="noopener noreferrer" href="https://www.youtube.com">Two</x-dropdown-link>
            <x-dropdown-link target="_blank" rel="noopener noreferrer" href="https://www.hollywood.com/">Three</x-dropdown-link>
        </x-dropdownx>
    </x-section>
    <x-section>
        <x-dropdownx>
            <x-slot name="trigger">
                <button>Click Me</button>
            </x-slot>
            <a href="/" class="block px-4 py-1 hover:bg-gray-400 text-sm">One</a>
            <a href="/" class="block px-4 py-1 hover:bg-gray-400 text-sm">Two</a>
            <a href="/" class="block px-4 py-1 hover:bg-gray-400 text-sm">Three</a>
        </x-dropdownx>
    </x-section>

    <x-section>Hello There</x-section>
    <x-section>Hello There Again</x-section>
    <x-section>Hello There again there</x-section>

    <x-flash type="error">
        Whoops! sorry about that
    </x-flash>

    <x-flash class="mt-10">
        Great Job
    </x-flash>

    <x-modalx title="Deactivate Your Account?" submit-label="Deactivate">
        <x-slot name="trigger">
            <button @click="open = true" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-400">
                Open Model
            </button>
        </x-slot>

        Are you really sure you want to deactivate your account? All your data will be permanently removed. This action
        cannot
        be undone.
    </x-modalx>



</x-layout>