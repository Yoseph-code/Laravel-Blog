@extends('layouts.app')

@section('content')

    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    Do yu want to become a developer?
                </h1>
                <a href="/blog" class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                    Read More
                </a>
            </div>
        </div>
    </div>
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="https://media.istockphoto.com/photos/love-working-from-home-picture-id1182641010?s=612x612"
                width="700" alt="" srcset="">
        </div>
        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-4xl font-extrabold text-gray-600">
                Struggling to be a better web developer?
            </h2>
            <p class="py-8 text-gray-500 text-l">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae eveniet iure quisquam, accusamus
                assumenda voluptas excepturi animi illum deserunt nobis delectus facilis hic non, exercitationem repellendus
                incidunt quos et! Saepe!
            </p>
            <p class="font-extrabold text-gray-600 text-xl pb-9">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, eveniet nobis id suscipit quis facere
                debitis beatae vero sint quas aliquid optio doloribus fugiat sequi nemo. Necessitatibus ea corrupti
                incidunt.
            </p>
            <a href="/blog" class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Find out more
            </a>
        </div>
    </div>

    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5 text-l">
            i´m an expert in...
        </h2>
        <span class="font-extrabold block text-4xl py-1">
            UX design
        </span>
        <span class="font-extrabold block text-4xl py-1">
            UI design
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Project management
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Digital strategy
        </span>
    </div>

    <div class="text-center py-15">
        <span class="uppercase text-s text-gray-400">
            Blog
        </span>
        <h2 class="text-4xl font-bold py-10">
            Recent posts
        </h2>
        <p class="m-auto w-4/5 text-gray-500">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis possimus ipsam non vero tempore similique
            nobis, modi nostrum ducimus. Voluptas repellendus explicabo possimus exercitationem quisquam quas mollitia nisi
            a optio?
        </p>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    PHP
                </span>
                <h3 class="text-xl font-bold py-10">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Suscipit maxime sapiente rem qui, ad eos
                    quidem delectus unde aliquam illo sed quo saepe tempore quis impedit aut voluptatem iusto nostrum!
                </h3>
                <a href=""
                    class="uppercase bg-transparent border-2 border-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                    Find out more
                </a>
            </div>
        </div>
        <div>
            <img src="https://media.istockphoto.com/photos/love-working-from-home-picture-id1182641010?s=612x612"
                width="700" alt="" srcset="">
        </div>
    </div>

@endsection
