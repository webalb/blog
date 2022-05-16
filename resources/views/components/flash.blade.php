
@if (session()->has('success'))
    <div x-data="{ open: true}" x-init="setTimeout(() => open = false, 4000)" x-show="open"
    class="fixed bg-green-500 py-2 px-4 rounded-xl bottom-3 right-3 text-sm">
        <p>{{ session('success') }}</p>
    </div>
@endif
