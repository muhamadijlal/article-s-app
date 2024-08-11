@extends('index')

@section('content')
<div class="container m-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
  @for ($i=1; $i<=5; $i++)
    <article class="rounded-lg border border-gray-100 bg-white p-4 shadow-sm transition hover:shadow-lg sm:p-6 h-[265px]">
      <span class="inline-block rounded bg-blue-600 p-2 text-white">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="h-6 w-6"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor"
        >
          <path d="M12 14l9-5-9-5-9 5 9 5z" />
          <path
            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"
          />
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"
          />
        </svg>
      </span>

      <a href="{{ route("article") }}">
        <h3 class="mt-0.5 text-3xl line-clamp-2 font-bold text-gray-900">
          Lorem ipsum dolor sit, amet consectetur adipisicing elit.
        </h3>
      </a>

      <p class="mt-2 line-clamp-2 text-sm/relaxed text-gray-400">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus pariatur
        animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet corporis quidem, mollitia
        itaque minus soluta, voluptates neque explicabo tempora nisi culpa eius atque dignissimos.
        Molestias explicabo corporis voluptatem?
      </p>

      <div class="flex items-center mt-8 text-xs gap-5">
        <p class="font-bold text-gray-500">July 2024</p>
        <span class="font-bold text-gray-500">🙌 204</span>
        <span class="font-bold text-gray-500">💬 5</span>
      </div>
    </article>
  @endfor
</div>
@endsection