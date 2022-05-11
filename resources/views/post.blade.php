<x-layout>
  <article>
      <h1>{!! $post->title !!}</h1>
      <p>By <a href="">{{ $post->user->name }}</a> in<a href="{{ $post->category->slug }}">
        {{ $post->category->name }}
      </a>
      </p>

      <p>
          {!! $post->body !!}
      </p>

  </article>



  <a href="/">Go Back</a>

</x-layout>
