@extends('index')

@section('content')
<div class="container m-auto">
  <div class="p-5 h-screen">
    <div class="mt-10">
      <h1 class="text-4xl font-bold text-slate-900">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur, ipsum!</h1>
    </div>

    <div class="flex items-center mt-10 text-sm gap-5">
      <p class="font-semibold text-gray-500">July 2024</p>
      <span class="font-semibold text-gray-500">🙌 204</span>
      <span class="font-semibold text-gray-500">💬 5</span>
    </div>
  </div>

  <div class="bg-gray-100 w-full p-4 sm:p-6 space-y-3">
    <div class="mb-10">
      <h4 class="text-xl font-bold">Written by Stanley.</h4>
      <p class="text-sm text-slate-700 font-thin">Programmer | Fullstack Web Developer</p>
    </div>

    <hr class="border-gray-300 mb-10" />

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 justify-center">
      @for ($i=1; $i<=6; $i++)
        <article class="h-[265px] border-b-[.5px] border-slate-300">
          <a href="#">
            <h3 class="mt-0.5 text-2xl line-clamp-2 font-bold text-gray-900">
              Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            </h3>
          </a>

          <p class="mt-2 line-clamp-2 text-sm/relaxed text-gray-400">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae dolores, possimus pariatur
            animi temporibus nesciunt praesentium dolore sed nulla ipsum eveniet corporis quidem, mollitia
            itaque minus soluta, voluptates neque explicabo tempora nisi culpa eius atque dignissimos.
            Molestias explicabo corporis voluptatem?
          </p>

          <div class="flex items-center mt-24 text-xs gap-5">
            <p class="font-bold text-gray-500">July 2024</p>
            <span class="font-bold text-gray-500">🙌 204</span>
            <span class="font-bold text-gray-500">💬 5</span>
          </div>
        </article>
      @endfor
    </div>
  </div>
</div>
@endsection