<div x-data="{ showModal: false }" class="flex items-center justify-center min-h-screen">
    <!-- Button -->
    {{ $trigger }}
    <button
        @click="showModal = true"
        class="px-6 py-2 text-white bg-indigo-600 rounded-lg hover:bg-indigo-700 transition"
    >
        Open Modal
    </button>

    <!-- Modal Overlay -->
    <div
        x-show="showModal"
        x-transition.opacity
        class="fixed inset-0 bg-black/50 z-40"
    ></div>

    <!-- Modal Content -->
    <div
        x-show="showModal"
        x-transition
        @keydown.escape.window="showModal = false"
        class="fixed inset-0 flex items-center justify-center z-50"
        aria-modal="true"
        role="dialog"
    >
        <div
            @click.away="showModal = false"
            class="bg-white rounded-2xl shadow-2xl max-w-md w-full p-6 space-y-4"
        >
            <h2 class="text-xl font-semibold text-gray-900">{{ $title }}</h2>
            <p class="text-gray-600">{{ $slot }}</p>
            <div class="flex justify-end space-x-2">
                <button
                    @click="showModal = false"
                    class="px-4 py-2 rounded-lg text-sm bg-gray-200 hover:bg-gray-300 transition"
                >
                    {{ $cancelLabel ?? 'Cancel' }}
                </button>
                <button
                    @click="showModal = false"
                    class="px-4 py-2 rounded-lg text-sm bg-indigo-600 text-white hover:bg-indigo-700 transition"
                >
                    {{ $submitLabel ?? 'Submit' }}
                </button>
            </div>
        </div>
    </div>
</div>