@extends('layouts.app')

@section('title', 'About')

@section('content')
   
<!-- ============================================ -->
<!--             start of login page              -->
<!-- ============================================ -->
<section class="mx-auto container bg-[url('http://127.0.0.1:8000/images/websitecodeimage.webp')] pt-16 pb-6 md:pb-8 bg-cover">
    <div class="px-4 lg:px-0">

        <!-- ============================================ -->
        <!--                why choose us                 -->
        <!-- ============================================ -->
        <div role="contentinfo" class="flex items-center flex-col px-4">
            <h1 tabindex="0" class="focus:outline-none uppercase text-sm text-center text-slate-200 leading-none outline-4 outline-black">why choose us</h1>

            <h2 tabindex="0" class="text-2xl lg:text-4xl pt-4 font-extrabold text-center leading-tight text-slate-200 lg:w-7/12 md:w-9/12 xl:w-5/12 mb-4"> {!! $allabout->about_text !!}</h2>
            <div class="flex justify-center flex-wrap">
                <!-- ============================================ -->
                <!--                 book a call                  -->
                <!-- ============================================ -->
                <div class="m-3 sm:m-6">
                    <a aria-label="book a call button" href="/appointment">
                    <button aria-label="book a call button" role="button" class="text-white inline-flex items-center justify-center w-full h-12 px-6 font-semibold transition  duration-200 hover:bg-white md:w-auto bg-indigo-800 focus:shadow-outline focus:outline-none dark:focus:ring-blue-800 hover:text-black rounded">Book a Call</button>
                    </a>
                </div>
                <!-- ============================================ -->
                <!--                Courses button                -->
                <!-- ============================================ -->
                <div class="m-3 sm:m-6 ">
                    <a aria-label="courses button" href="/training">
                    <button aria-label="courses button" role="button" class="hover:text-black text-white inline-flex items-center justify-center w-full h-12 px-6 font-semibold transition  duration-200 hover:bg-white rounded md:w-auto bg-indigo-800 focus:shadow-outline focus:outline-none dark:focus:ring-blue-800">Courses</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

</section>
<section class="bg-indigo-900 py-10">
    <div tabindex="0" aria-label="group of cards" class="focus:outline-none px-4 lg:px-0">
        <div class="mx-auto container flex flex-wrap px-2 lg:px-24">         
            <!-- ============================================ -->
            <!--           ready to use components            -->
            <!-- ============================================ -->
            <div tabindex="0" aria-label="card 1" class="focus:outline-none flex sm:w-full md:w-1/2 lg:border-r md:border-r sm:border-r-0 border-blue-400 pb-10 lg:pt-10">
                <div class=" flex flex-shrink-0 mr-5 text-white">
                    <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/indigo_bg_with_divider-svg1.svg" aria-hidden="true" alt="drawer">
                </div>
                <div class="md:w-9/12 lg:w-9/12">
                    {!! $allabout->about_first !!}
                </div>
            </div>
            <!-- ============================================ -->
            <!--      Neccessary Procurement Training         -->
            <!-- ============================================ -->
            {{--  --}}
            <div tabindex="0" aria-label="card 2" class="focus:outline-none flex sm:w-full md:w-1/2 lg:pb-10 lg:pt-10">
                <div class=" flex flex-shrink-0 sm:ml-0 md:ml-10 lg:ml-10 mr-5 text-white">
                   <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/indigo_bg_with_divider-svg2.svg" aria-hidden="true" alt="check">
                </div>
                <div class="md:w-9/12 lg:w-9/12 ">
                    {!! $allabout->about_second !!}
                </div>
            </div>
            <!-- ============================================ -->
            <!--           It Services and Training           -->
            <!-- ============================================ -->            
            <div tabindex="0" aria-label="card 3" class="focus:outline-none flex sm:w-full md:w-1/2 lg:border-t md:border-t sm:border-t-0 lg:border-r md:border-r sm:border-r-0 border-blue-400 pt-10 lg:pb-20">
                <div class=" flex flex-shrink-0 mr-5 text-white">
                  <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/indigo_bg_with_divider-svg3.svg" aria-hidden="true" alt="html-tag">
                </div>
                <div class="md:w-9/12 lg:w-9/12 ">
                    {!! $allabout->about_third !!}
                </div>
            </div>
            <!-- =========================================== -->
            <!--      Bringing the best to your business     -->
            <!-- =========================================== --> 
            <div tabindex="0" aria-label="card 4" class="focus:outline-none flex sm:w-full md:w-1/2 lg:border-t md:border-t sm:border-t-0 border-blue-400 pt-10 lg:pb-20">
                <div class=" flex flex-shrink-0 sm:ml-0 md:ml-10 lg:ml-10 mr-5 text-white">
                   <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/indigo_bg_with_divider-svg4.svg" aria-hidden="true" alt="display">
                </div>
                <div class="md:w-9/12 lg:w-9/12 ">
                    {!! $allabout->about_fourth !!}
                </div>
            </div>

        </div>
    </div>
</section>
<!-- ============================================ -->
<!--              end of about page               -->
<!-- ============================================ -->
@endsection

