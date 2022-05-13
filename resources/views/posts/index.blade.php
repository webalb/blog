
<x-layout>
    @include('posts._header')
    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

    @if ($posts->count())

        <x-post-featured-card :post="$posts[0]" />

            @if ($posts->count()> 1)

                <div class="lg:grid lg:grid-cols-6">

        `           @foreach($posts->skip(1) as $post)

                         <x-post-card
                             :post="$post"
                             class="{{ $loop->iteration < 3 ? 'col-span-2' : 'col-span-2' }}"
                         />

                    @endforeach

                </div>
            @endif
        @else
               <p style="text-align: center">No Post Yet. Please check back latter!</p>
    @endif



    </main>



</x-layout>
