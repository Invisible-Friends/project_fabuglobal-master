@extends('layouts.app')


@section('title', 'Courses - Fabuglobal')

@section('content')


<div class="mx-auto container  dark:bg-gray-800">
 <div class="flex flex-col lg:flex-row p-4 lg:p-8 justify-between items-start lg:items-stretch w-full">
 <div id="test" class="w-full overflow-x-scroll xl:overflow-x-hidden">





        <!-- tale -->

   <section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-20">
      <h1 class="text-4xl font-extrabold title-font mb-4 text-gray-900">COURSES</h1>
      <p class="lg:w-2/3 font-semibold text-gray- mx-auto leading-relaxed text-base">Our IT Courses are design to improve your IT skill sets and to learn a new IT skills for the evolving environment. </p>
    </div>
    <div class="flex flex-wrap -m-4">


      {{-- @foreach ($courses as $course) --}}
      <div class="p-4 lg:w-1/4 md:w-1/2">
        <div class="h-full flex flex-col items-center text-center">

            <div class="overflow-hidden transition-shadow duration-300 bg-white rounded shadow-sm">
                <a href="/">
                  {{-- image --}}
                <img src="{{ asset($course->image_link)}}" class="object-cover w-full h-64" alt="">
            </a>
                <div class="p-5 border border-t-0">
                  <a href="/" aria-label="Category" title="Effective Category Management" class="inline-block mb-3 text-2xl font-bold leading-5 transition-colors duration-200 hover:text-deep-purple-accent-700">{{ $course->title }}</a>

                  <p class="mb-2 text-gray-700 h-[140px] overflow-ellipsis">{{ $course->short_description}}</p>
                  <div class="flex flex-col items-center justify-center w-full">
                    <a href="/services" title="More Courses" class="hover:text-white inline-flex items-center justify-center w-full h-12 px-6 font-semibold transition  duration-200 bg-white border border-gray-300 rounded md:w-auto hover:bg-indigo-800 focus:shadow-outline focus:outline-none dark:focus:ring-blue-800">
                        <span>
                        Learn More →
                        </span>
                      </a>
                </div>
                </div>
              </div>

        </div>
      </div>
      {{-- @endforeach --}}
  </div>
  </div>
</section>

@endsection
