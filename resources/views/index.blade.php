@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
       <div class="flex text-gray-100 pt-10">
           <div class="m-auto pt-4 pb-16 sm:m-auto">
               <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14" >
                   Do you want to become a developer ?
               </h1>
               <a class="text-center bh-gray-700 py-2 px-4 font-bold text-xl uppercase" href="/blog">
                  Read more
               </a>

           </div>

       </div>
    </div>

  <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
      <div>
          <img src="https://cdn.pixabay.com/photo/2016/11/19/15/32/laptop-1839876_960_720.jpg"
             width="700"  alt="coding image">

      </div>

      <div class="m-auto sm:m-auto text-left w-4/5 block">
          <h2 class="text-4xl font-extrabold text-gray-600">
              Struggling to be a better web developer
          </h2>
          <p class="py-8 text-gray-500 text-s" >
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, animi, architecto asperiores culpa deleniti excepturi facilis fugit itaque magnam magni, odit officiis porro sint sit sunt velit voluptatibus. Aliquam, nobis.

          </p>

          <p class="py-8 pt-0 text-gray-500 text-s pb-9" >
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, animi, architecto asperiores culpa deleniti excepturi facilis fugit itaque magnam magni, odit officiis porro sint sit sunt velit voluptatibus. Aliquam, nobis.

          </p>
          <a href="/blog" class="uppercase bg-blue-500 text-gray-100
           text-sm font-extrabold py-3 px-8 rounded-3xl">
              Find Out More
          </a>

      </div>
  </div>
<div class="text-center p-15 bg-black text-white">
    <h2 class="text-2xl text-l" >
        I'm an expert in ...
    </h2>
    <span class="font-extrabold block text-4xl py-1" >
        Ux Design
    </span>

    <span class="font-extrabold block text-4xl py-1" >
       Project management
    </span>


    <span class="font-extrabold block text-4xl py-1" >
        backend development
    </span>

</div>


    <div class="text-center py-15">
        <span class="uppercase text-s text-gray-400">
            Blog
        </span>
        <h2 class="text-4xl font-bold py-10">
            Recent Posts
        </h2>

        <p class="m-auto w-4/5 text-gray-500">
            Lorem ipsum dolor sit amet, consectetur adipisicing
            elit. Ipsa ratione recusandae sapiente! Asperiores id illo itaque n
        </p>
    </div>
  <div class="sm:grid grid-cols-2 w-4/5 m-auto">
      <div class="flex bg-yellow-700 text-gray-100 pt-10">
          <div class="m-auto pt-4  pb-16 sm:m-auto w-4/5 block">
              <span class="uppercase text-xs">
                  PHP

              </span>
              <h3 class="text-xl font-bold py-10">
                  Lorem ipsum dolor sit amet, consectetur
                  adipisicing
                  elit. Ipsa ratione recusandae sapiente!
                  Asperiores id illo itaq
              </h3>

              <a href=""
              class="uppercase bg-transparent boder-2 border-gray-100 text-gray-100
               text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                 Find out more
              </a>
          </div>

      </div>
      <div>
          <img src="https://cdn.pixabay.com/photo/2016/11/19/15/32/laptop-1839876_960_720.jpg"
               width="700"  alt="coding image">

      </div>
  </div>

@endsection
