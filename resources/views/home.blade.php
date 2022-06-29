@extends('layouts.app')


@section('title', 'Home - Fabuglobal')

@section('content')




<!-- ============================================ -->
<!--                carousel start                -->
<!-- ============================================ -->
<div class="carousel relative bg-white">
    <div class="carousel-inner overflow-hidden ">
        <!-- ============================================ -->
        <!--                   Slide 1                    -->
        <!-- ============================================ -->
        <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
        <div class="carousel-item absolute opacity-0 max-h-fit mt-14">
            <div class="swiper-slide ">
                <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full   lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-2 mt-10">
                    <div class="flex flex-col justify-between lg:flex-row">
                        <div class="mb-12 lg:max-w-lg lg:pr-5 lg:mb-0 order-2 lg:order-1">
                            <!-- slide 1 text -->
                            <div class="max-w-xl mb-6">
                                <h1 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-gray-900  sm:leading-none">
                                We're offering training to help your business!
                                </h1>
                                <h2 class="text-base text-gray-700 md:text-lg">
                                Training in IT solutions, Printing and Procurement consulting services for small, medium and large sized companies.
                                </h2>
                            </div>
                            <!-- slide 1 button -->
                            <div class="flex flex-col">
                                <a href="/appointment" title="Book a Call" class="hover:text-white inline-flex items-center justify-center w-full h-12 px-6 font-semibold transition  duration-200 bg-white border border-blue-800 rounded md:w-auto hover:bg-indigo-800 focus:shadow-outline focus:outline-none dark:focus:ring-blue-800 ">
                                <span>
                                    Book a Call →
                                </span>
                                </a>
                            </div>
                        </div>
                        <!-- slide 1 image -->
                        <div class="px-5 pt-6 pb-5 text-center lg:w-2/5 order-1 lg:order-2">
                            <div class="flex items-center whitespace-nowrap justify-center">
                                <div class="flex items-center whitespace-nowrap justify-center">
                                    <img src="http://127.0.0.1:8000/images/guy on laptop.webp" class="md:mx-24 h-64 w-64 md:h-96 md:w-96" alt="Guy floating over a laptop while using a laptop">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slide 4 next and previouse slide buttons -->
        <label for="carousel-4" class="prev control-1 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
        <label for="carousel-2" class="next control-1 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>
        <!-- ============================================ -->
        <!--                 Slide 2                      -->
        <!-- ============================================ -->
        <input class="carousel-open my-48" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
        <div class="carousel-item absolute opacity-0 max-h-fit  ">
            <div class="swiper-slide flex flex-col justify-between lg:flex-row">
                <!-- slide 2 image  -->
                <div class="px-5 pt-6 pb-5 text-center lg:w-2/5">
                    <div class="flex items-center whitespace-nowrap justify-center">
                        <div class="flex items-center whitespace-nowrap justify-center">
                        <img src="http://127.0.0.1:8000/images/studentwithlaptop.webp" class="mx-auto h-64 w-64 md:h-96 md:w-96" alt="woman sitting on big books while using a laptop">
                        </div>
                    </div>
                </div>
                <!-- slide 2 text -->
                <div class="px-4 md:py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-2 mt-10">
                    <div class="flex flex-col justify-between lg:flex-row">
                        <div class="mb-12 lg:max-w-lg lg:pr-5 lg:mb-0">
                            <div class="max-w-xl mb-6">
                                <h1 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight sm:text-4xl sm:leading-none">
                                There's a great deal of courses that we offer to you!
                                </h1>
                                <h2 class="text-base  md:text-lg">
                                Cyber Security, IT Business Management, Public Sector Procurement Regulation; We have a range of business courses for you.
                                </h2>
                            </div>
                            <!-- slide 2 button -->
                            <div class="flex flex-col">
                                <a href="/courses" title="Book a Call" class="hover:text-white inline-flex items-center justify-center w-full h-12 px-6 font-semibold transition  duration-200 bg-white border border-blue-800 rounded md:w-auto hover:bg-indigo-800 focus:shadow-outline focus:outline-none dark:focus:ring-blue-800 ">
                                <span>
                                    Explore Our Courses →
                                </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slide 2 next and previouse slide buttons -->
        <label for="carousel-1" class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
        <label for="carousel-3" class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>
        <!-- ============================================ -->
        <!--                   Slide 3                    -->
        <!-- ============================================ -->
        <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="" checked="checked">
        <div class="carousel-item absolute opacity-0 max-h-fit mt-14">
            <div class="swiper-slide ">
                <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full   lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-2 mt-10">
                    <div class="flex flex-col justify-between lg:flex-row">
                        <div class="mb-12 lg:max-w-lg lg:pr-5 lg:mb-0 order-2 lg:order-1">
                            <!-- slide 3 text -->
                            <div class="max-w-xl mb-6">
                                <h1 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-gray-900  sm:leading-none">
                                We're offering training to help your business!
                                </h1>
                                <h2 class="text-base text-gray-700 md:text-lg">
                                Training in IT solutions, Printing and Procurement consulting services for small, medium and large sized companies.
                                </h2>
                            </div>
                            <!-- slide 3 button -->
                            <div class="flex flex-col">
                                <a href="/appointment" title="Book a Call" class="hover:text-white inline-flex items-center justify-center w-full h-12 px-6 font-semibold transition  duration-200 bg-white border border-blue-800 rounded md:w-auto hover:bg-indigo-800 focus:shadow-outline focus:outline-none dark:focus:ring-blue-800 ">
                                <span>
                                    Book a Call →
                                </span>
                                </a>
                            </div>
                        </div>
                        <!-- slide 3 image -->
                        <div class="px-5 pt-6 pb-5 text-center lg:w-2/5 order-1 lg:order-2">
                            <div class="flex items-center whitespace-nowrap justify-center">
                                <div class="flex items-center whitespace-nowrap justify-center">
                                    <img src="http://127.0.0.1:8000/images/guy on laptop.webp" class="md:mx-24 h-64 w-64 md:h-96 md:w-96" alt="Guy floating over a laptop while using a laptop">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slide 3 next and previouse slide buttons -->
        <label for="carousel-2" class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
        <label for="carousel-4" class="next control-3 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>        <!-- ============================================ -->
        <!-- ============================================ -->
        <!--                 Slide 4                      -->
        <!-- ============================================ -->
        <input class="carousel-open my-48" type="radio" id="carousel-4" name="carousel" aria-hidden="true" hidden="">
        <div class="carousel-item absolute opacity-0 max-h-fit  ">
            <div class="swiper-slide flex flex-col justify-between lg:flex-row">
                <!-- slide 4 image -->
                <div class="px-5 pt-6 pb-5 text-center lg:w-2/5">
                    <div class="flex items-center whitespace-nowrap justify-center">
                        <div class="flex items-center whitespace-nowrap justify-center">
                        <img src="http://127.0.0.1:8000/images/studentwithlaptop.webp" class="mx-auto h-64 w-64 md:h-96 md:w-96" alt="woman sitting on big books while using a laptop">
                        </div>
                    </div>
                </div>
                <!-- slide 4 text -->
                <div class="px-4 md:py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-2 mt-10">
                    <div class="flex flex-col justify-between lg:flex-row">
                        <div class="mb-12 lg:max-w-lg lg:pr-5 lg:mb-0">
                            <div class="max-w-xl mb-6">
                                <h1 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight sm:text-4xl sm:leading-none">
                                Test
                                </h1>
                                <h2 class="text-base  md:text-lg">
                                Cyber Security, IT Business Management, Public Sector Procurement Regulation; We have a range of business courses for you.
                                </h2>
                            </div>
                            <!-- slide 4 button -->
                            <div class="flex flex-col">
                                <a href="/courses" title="Book a Call" class="hover:text-white inline-flex items-center justify-center w-full h-12 px-6 font-semibold transition  duration-200 bg-white border border-blue-800 rounded md:w-auto hover:bg-indigo-800 focus:shadow-outline focus:outline-none dark:focus:ring-blue-800 ">
                                <span>
                                    Explore Our Courses →
                                </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slide 4 next and previouse slide buttons -->
        <label for="carousel-3" class="prev control-4 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
        <label for="carousel-1" class="next control-4 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hidden text-3xl font-bold text-black hover:text-white rounded-full bg-white hover:bg-blue-700 leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>
        <!-- Add additional indicators for each slide-->
        <ol class="carousel-indicators">
            <li class="inline-block mr-3">
                <label for="carousel-1" class="carousel-bullet cursor-pointer block text-4xl text-gray-200 hover:text-blue-700">•</label>
            </li>
            <li class="inline-block mr-3">
                <label for="carousel-2" class="carousel-bullet cursor-pointer block text-4xl text-gray-200 hover:text-blue-700">•</label>
            </li>
            <li class="inline-block mr-3">
                <label for="carousel-3" class="carousel-bullet cursor-pointer block text-4xl text-gray-200 hover:text-blue-700">•</label>
            </li>
            <li class="inline-block mr-3">
                <label for="carousel-4" class="carousel-bullet cursor-pointer block text-4xl text-gray-200 hover:text-blue-700">•</label>
            </li>
        </ol>
    </div>
</div>
{{-- end of carousel --}}

{{-- first layout victory --}}

<div class="h-full " >
    <div class="bg-indigo-900 flex flex-col items-center justify-center py-16 md:py-20 lg:py-40 px-4 md:px-0">
        <h2 class="text-2xl md:text-4xl lg:text-4xl font-extrabold  text-center text-white leading-tight lg:w-7/12 md:w-9/12 xl:w-5/12">We help individuals to learn new ideas and keep up with technology in order to grow and reach their potential</h2>
    </div>
    <div role="list" aria-label="Packages" class="bg-transparent grid grid-cols-1 lg:grid-cols-2 gap-[100px] container mx-auto -mt-10 md:-mt-16 lg:-mt-20 px-4 md:px-28 lg:px-0" >
        <!--services-->
        <div role="listitem" class="transition ease-out px-10 pt-10 pb-6 bg-gray-100 border-indigo-500 border-b-2 rounded hover:transition-all hover:bg-white text-black hover:drop-shadow-xl hover:border-gray-100">
            <h3 class="text-2xl font-medium leading-normal text-center">Services</h3>
            <img src="{{url('images/ServicesIcon_1.webp')}}" class="mx-auto h-32 w-32" alt="Guy with headphone on">
            <p class="text-base leading-normal mt-6">Fabuglobal offers innovative solutions that will help drive your future growth.
                Our engineers expertise allows us to provide superior services that
                match the customer's vision and keep up with current technologies.</p>
            <div class="mt-12 md:mt-15">
                <a href="/services"><button class="flex w-full items-center justify-center border rounded border-indigo-700 text-base font-medium text-indigo-700 py-4 mt-2 bg-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 hover:bg-indigo-700 hover:text-white  " >Find out more</button></a>
            </div>
        </div>
        <!--courses-->
        <div role="listitem" class="transition ease-out px-10 pt-10 pb-6 bg-gray-100 border-indigo-500 border-b-2 rounded hover:transition-all hover:bg-white text-black hover:drop-shadow-xl hover:border-gray-100">
            <h3 class="text-2xl font-medium leading-normal text-center">Courses</h3>
            <img src="{{url('images/CoursesIcon-1.webp')}}" class="mx-auto h-32 w-32" alt="Cartoon book with brain floating above it and lines coming from the brain">
            <p class="text-base leading-normal  mt-6">Working closely with our teams, we have courses that are suited to your specific
                needs and will ultmately improve your skills and business methodology.
            </p>
            <div class="mt-12 md:mt-15">
                <a href="/services"><button class="flex w-full items-center justify-center border rounded border-indigo-700 text-base font-medium text-indigo-700 py-4 mt-2 bg-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 hover:bg-indigo-700 hover:text-white  " >Find out more</button></a>
            </div>
        </div>
    </div>
</div>


<!-- "Create Beautiful" Title and 3 item list (Procurement, IT and Investment Services) -->
<section class="max-w-8xl  xl:mx-auto xl:container p-8">
    <div class="flex flex-col md:flex-row xl:space-x-44">
        <div role="contentinfo" class="flex flex-col justify-center w-full md:w-1/2 px-4 md:pr-12">
            <span tabindex="0" class="focus:outline-none uppercase text-lg text-gray-600 leading-normal">in few easy steps</span>
            <h2 tabindex="0" class="focus:outline-none text-4xl  font-extrabold leading-10 text-gray-800  pt-4">
                Create Beautiful
                <br>
                Landing Pages & Apps
            </h2>
            <p tabindex="0" class="focus:outline-none text-lg text-gray-600  leading-normal pt-4">We at Fabuglobal offer a range of training and other opportunities to ensure your business has the necessary support to improve and grow, we also maintain a good stranded of customer relation by ensure any problem that arises gets solved swiftly.</p>
        </div>
        <div class="bg-indigo-700 w-full md:w-1/2 lg:w-7/12 xl:w-6/12 2xl:w-5/12 px-6 lg:px-12 py-10 lg:py-12 mt-8 md:mt-0 rounded ">
            <div class="flex pb-10 lg:pb-12">
                <div tabindex="0" aria-label="drawer icon" role="img" class="w-6 h-6 flex flex-shrink-0 focus:outline-none mr-5 text-white">
                    <img class="w-6 h-6 flex flex-shrink-0" aria-hidden="true" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/2_column_with_indigo_bgSvg1.svg" alt="Procurement services">
                </div>
                <div class="lg:w-96 ">
                    <h3 tabindex="0" class="focus:outline-none text-lg font-bold leading-tight text-white" >Procurement</h3>
                    <p tabindex="0" class="focus:outline-none text-base text-white leading-normal pt-2">The first type of training we offer is our Procurement training, which will support your business with procurement challenges depending on the training you select, for example, if you select the procurement strategy, we will train you to procure goods or services in an effective manner.</p>
                </div>
            </div>
            <div class="flex pb-10 lg:pb-12">
                <div tabindex="0" aria-label="success icon" role="img" class="w-6 h-6 flex flex-shrink-0 focus:outline-none mr-5 text-white">
                    <img class="w-6 h-6 flex flex-shrink-0" aria-hidden="true" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/2_column_with_indigo_bgSvg2.svg" alt="High Quality">
                </div>
                <div class="lg:w-96 ">
                    <h3 tabindex="0" class="focus:outline-none text-lg font-bold leading-tight text-white">IT services</h3>
                    <p tabindex="0" class="focus:outline-none text-base text-white leading-normal pt-2">The second type of training we offer is our IT training, which will support your business with a range of skills which is depending on the training you select, for example, if you select the web development, our team will provide all the necessary martials for your team to gain an understanding of web development.  </p>
                </div>
            </div>
            <div class="flex pb-10 lg:pb-12">
                <div tabindex="0" aria-label="tag icon" role="img" class="w-6 h-6 flex flex-shrink-0 focus:outline-none mr-5 text-white">
                    <img class="w-6 h-6 flex flex-shrink-0" aria-hidden="true" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/2_column_with_indigo_bgSvg3.svg" alt="Coded by Developers">
                </div>
                <div class="lg:w-96 ">
                    <h3 tabindex="0" class="focus:outline-none text-lg font-bold leading-tight text-white">Investment service</h3>
                    <p tabindex="0" class="focus:outline-none text-base text-white leading-normal pt-2">The third type we offer is our investment service, where we are willing to invest in a clear business proposal or acquirer existing business with us already investing in Minuteman Press Nottingham, African Food Direct Limited, and, C&U Global Entertainment Limited.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- "Why you should get training from us" Section -->
<div class="h-full w-full pb-24">
    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl lg:py-20">
        <h2 class="font-bold text-2xl mb-12 text-center text-gray-800">Why you should get training from us:</h2>
        <div class="grid gap-4 row-gap-5 sm:grid-cols-2 lg:grid-cols-4">
            <div class="flex flex-col justify-between p-5 border rounded bg-blue-100 border-gray-100 drop-shadow-lg">
                <div>
                    <h3 class="mb-2 text-lg font-semibold leading-5">Boost your employability:</h3>
                    <p class="mb-3 text-lg text-gray-900">
                    our courses improve your employability by giving you more skills.
                    </p>
                </div>
            </div>
            <div class="flex flex-col justify-between p-5 border rounded bg-blue-100 border-gray-100 drop-shadow-lg">
                <div>
                    <h3 class="mb-2 font-semibold text-lg leading-5">Increase your progression opportunities:</h3>
                    <p class="mb-3 text-lg text-gray-900">Our training courses also provide an enhancement your current career path opportunity for progression.
                    </p>
                </div>
            </div>
            <div class="flex flex-col justify-between p-5 border rounded bg-blue-100 border-gray-100 drop-shadow-lg">
                <div class="m-1">
                    <h3 class="mb-2 text-lg font-semibold leading-5">Get a taste of something new:</h3>
                    <p class="mb-3 text-lg text-gray-900">If you're feeling unfulfilled in your current role, our training courses provide the perfect opportunity for you.
                    </p>
                </div>
            </div>
            <div class="flex flex-col justify-between p-5 border rounded bg-blue-100 border-gray-100 drop-shadow-lg">
                <div>
                    <h3 class="mb-2 font-semibold text-lg leading-5">Give your hobbies more weight:</h3>
                    <p class="mb-3 text-lg text-gray-900">including your hobbies can add a lot of value, so why not improve the quality of your hobby by taking our course in it?
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
 <!-- All the courses you need section -->
<section class="">
    <div class="container px-6 py-10 mx-auto">
        <div class="xl:flex xl:items-center xl:mx-4">
            <div class="xl:w-1/2 xl:mx-4 ">
                <h2 class="text-3xl font-semibold text-black capitalize lg:text-4xl hover:t-indigo-800">All the Courses you need</h2>
                <p class="max-w-2xl mt-4 text-blue-">
                With students at the centre, our mission is to empower even the busiest people to master a language and unlock their potential-Study anywhere, anytime with flexible online learning
                </p>
                <div class="flex flex-col mt-10 ">
                    <a href="/appointment" title="Book a Call" class="hover:text-white text-black inline-flex items-center justify-center w-full h-12 px-6 font-semibold transition  duration-200 bg-white border border-indigo-800 rounded md:w-auto hover:bg-indigo-800 focus:shadow-outline focus:outline-none dark:focus:ring-blue-800   ">
                        <span >
                        Book a Call →
                        </span>
                    </a>
                </div>
            </div>
            <div class="grid grid-cols-1 gap-4 mt-8 xl:mt-0 xl:mx-4 xl:w-1/2 md:grid-cols-2  ">
                <div class="  hover:shadow-xl transition duration-500 ease-in-out cursor-pointer bg-gray-100 shadow border rounded-md border-gray-200 " >
                    <a href="/">
                        <img src="{{url('images/ContractConstruction.jpg')}}" class="object-cover w-full h-64" alt="">
                    </a>
                    <div class="p-5 border border-t-0 ">
                        <a href="/" aria-label="Category" title="LCCM" class="inline-block mb-3 text-2xl font-bold leading-5 transition-colors duration-200 hover:text-deep-purple-accent-700"><h3>Legal Contract Construction and Management</h3></a>
                        <p class="mb-16 text-gray-700">
                        The Contract Management course will
                        give you the skills you need in order to start your career in Contract Management.
                        You will therefore build the competencies you need to become.
                        </p>
                        <div class="flex flex-col items-center justify-center w-full">
                            <a href="/courses" title="More Courses" class="hover:text-white inline-flex items-center justify-center w-full h-12 px-6 font-semibold transition  duration-200 bg-white border border-indigo-800 rounded md:w-auto hover:bg-indigo-800 focus:shadow-outline focus:outline-none dark:focus:ring-blue-800">
                                <span>
                                Learn More →
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class=" hover:shadow-xl transition duration-500 ease-in-out cursor-pointer bg-gray-100 shadow border rounded-md border-gray-200">
                    <a href="/">
                        <img src="{{ url('images/WebDeveloper.png')}}" class="object-cover w-full h-64" alt="">
                    </a>
                    <div class="p-5 border border-t-0">
                        <a href="/" aria-label="Category" title="Web Developer and Management" class="inline-block mb-3 text-2xl font-bold leading-5 transition-colors duration-200 hover:text-deep-purple-accent-700"><h3>Web Developer and Management</h3></a>
                        <p class="mb-3 text-gray-700">
                        You will be working for a range of clients to put your Web Developer skills to effective
                        use and on a day to day basis you will be involved with a diverse portfolio of campaigns.
                        This could include anything from; high tech startups to long-established blue-chip Companies.
                        </p>
                        <div class="flex flex-col items-center justify-center w-full">
                        <a href="/courses" title="More Courses" class="hover:text-white inline-flex items-center justify-center w-full h-12 px-6 font-semibold transition  duration-200 bg-white border border-indigo-800 rounded md:w-auto hover:bg-indigo-800 focus:shadow-outline focus:outline-none dark:focus:ring-blue-800">
                            <span>
                            Learn More →
                            </span>
                        </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div tabindex="0" aria-label="group of cards" class="focus:outline-none container ">
            <div class="ml-auto py-6 w-fit mr-auto lg:mr-28">
                <a href="/training"><button  class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 hover:text-white hover:bg-indigo-800  border-indigo-800 border md:text-2xl text-lg rounded f-m-m font-semibold text-black bg-white focus:outline-none md:px-12 px-6 py-3 md:py-6 xl:leading-4 w-48 md:w-96">More Courses</button></a>
            </div>
        </div>
    </div>
</section>

@endsection
