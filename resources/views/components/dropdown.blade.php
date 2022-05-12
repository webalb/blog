@props(['trigger'])

<div x-data="{ open: false }" @click.away="open = false">

                        {{--    Trigger--}}
    <div @click="open = ! open">
        {{ $trigger }}
    </div>

                {{--Links--}}
    <div x-show="open" @click.outside="open = false" class="py-2 absolute bg-gray-100 w-full z-50 rounded-xl mt-4 overflow-auto max-h-52">
        {{ $slot }}
    </div>
</div>
