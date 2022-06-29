@extends('layouts.app')


@section('title', 'Services - Fabuglobal')

@section('content')




<div class="flex md:hidden justify-center bg-white ">
    <div class="md:p-5 md:m-9 md:w-11/12 ">
        <div class="m-9">
            <!-- heading for the boxes -->
            <h1 class='text-left text-2xl'>The Services we provide</h2>
            <h2>Below are examples of services we provide; hover you mouse over the box blow for more information.</h2>

        </div>
        <div class="flex md:flex-row p-7 ">
            <!-- type of service -->
            <div class=" border-2 hover:border-r-2 text-left  border-gray-400 rounded-l-lg bg-gray-100 divide-y-2 divide-gray-300 peer order-1  w-1/3 h-78">
                <h3 class="text-lg text-left pl-2">Our sevices</h3>
                <hr>
                <div class="text-sm container">
                    <button type="button" onclick="webdev()" class="border-b-2 w-full h-11 md:h-9 focus:border-gray-600 focus:border-2 hover:bg-indigo-600 hover:text-white focus:text-white focus:bg-indigo-400 hover:border-0 text-left pl-2">Web development</p>
                    <button type="button" onclick="ecom()" class="border-b-2 w-full h-11 md:h-9 focus:border-gray-600 focus:border-2 hover:bg-indigo-600 hover:text-white focus:text-white focus:bg-indigo-400 hover:border-0 text-left pl-2">Ecommerce</p>
                    <button type="button" onclick="besweb()" class="border-b-2 w-full h-11 md:h-9 focus:border-gray-600 focus:border-2 hover:bg-indigo-600 hover:text-white focus:text-white focus:bg-indigo-400 hover:border-0 text-left pl-2">Bespoke website</p>
                    <button type="button" onclick="mobapp()" class="border-b-2 w-full h-11 md:h-9 focus:border-gray-600 focus:border-2 hover:bg-indigo-600 hover:text-white focus:text-white focus:bg-indigo-400 hover:border-0 text-left pl-2">Mobile App development</p>
                    <button type="button" onclick="webh()" class="border-b-2 w-full h-11 md:h-9 focus:border-gray-600 focus:border-2 hover:bg-indigo-600 hover:text-white focus:text-white focus:bg-indigo-400 hover:border-0 text-left pl-2">Web hosting</p>
                    <button type="button" onclick="mobh()" class="border-b-2 w-full h-11 md:h-9 focus:border-gray-600 focus:border-2 hover:bg-indigo-600 hover:text-white focus:text-white focus:bg-indigo-400 hover:border-0 text-left pl-2">Mobile hosting</p>
                    <button type="button" onclick="tecsol()" class="border-b-2 w-full h-11 md:h-9 focus:border-gray-600 focus:border-2 hover:bg-indigo-600 hover:text-white focus:text-white focus:bg-indigo-400 hover:border-0 text-left pl-2">Technology solutions</p>
                </div>
            </div>
            <!-- information box -->
            <div class="border-2 border-l-0 w-2/3  h-78 order-2 border-gray-400 rounded-r-lg bg-gray-100">
                <div class="order-2 relative " id="">
                    <div id="webdevel" style="display: block;">
                        <div class="container h-64 w-full absolute top-1 left-1">
                            <h3 class="sm:text-lg md:text-2xl font-semibold">Web development</h3>
                            <p class="w-11/12 h-9 sm:text-base md:text-lg" >Our web development service where our team will create a web site for you businesses or modify an already existing one to match your vision.</p>
                        </div>
                    </div>
                    <div id="ecommerce" style="display: none;">
                        <div class="container h-64 w-full absolute top-1 left-1">
                            <h3 class="sm:text-lg md:text-2xl font-semibold">Ecommerce</h3>
                            <p class="w-11/12 h-9 sm:text-base md:text-lg" >Our Ecommerce service is where our team will create a working online shop for your business.</p>
                        </div>
                    </div>
                    <div id="bespokeweb" style="display: none;">
                        <div class="container h-64 w-full absolute top-1 left-1">
                            <h3 class="sm:text-lg md:text-2xl font-semibold">Bespoke website</h3>
                            <p class=" w-11/12 h-9 sm:text-base md:text-lg">Our Bespoke website service is where our team will design a bespoke website for your business to match your specifications.</p>
                        </div>
                    </div>
                    
                    <div id="mobileapp" style="display: none;">
                        <div  class="container h-64 w-full absolute top-1 left-1">
                            <h3 class="sm:text-lg md:text-2xl font-semibold">Mobile App development</h3>
                            <p class="w-11/12 h-9 sm:text-base md:text-lg" >Our mobile App development service is where our team will create a mobile app for you or modify an alredy existing app. </p>
                        </div>
                    </div>
                    <div id="webhosting" style="display: none;">
                        <div class="container h-64 w-full absolute top-1 left-1">
                            <h3 class="sm:text-lg md:text-2xl font-semibold">Web hosting</h3>
                            <p class="w-11/12 h-9 sm:text-base md:text-lg" >Our web hosting service is where we will host your website on our server so it can work 24/7.</p>
                        </div>
                    </div>
                    <div id="mobhosting" style="display: none;">
                        <div class="container h-64 w-full absolute top-1 left-1">
                            <h3 class="sm:text-lg md:text-2xl font-semibold">Mobile hosting</h3>
                            <p class="w-11/12 h-9 sm:text-base md:text-lg">Our mobile hosting service is where we will host your mobile app so it will be avalible 24/7.</p>
                        </div>
                    </div>
                    <div id="tecsolution" style="display: none;">
                        <div class="container h-64 w-full absolute top-1 left-1">
                            <h3 class="sm:text-lg md:text-2xl font-semibold">Technology solutions</h3>
                            <p class="w-11/12 h-9 sm:text-base md:text-lg">Our technology solutions service is where we will help you to fix any problems that arise with you technology.</p>
                        </div>
                    </div>
                </div>
                <div class="md:mt-64 mt-80">
                    <a href="/contact"><button type="button" class="hover:text-white w-full h-12 font-semibold transition  duration-200 bg-white border-2 border-blue-800 rounded-lg hover:bg-indigo-800 focus:shadow-outline focus:outline-none">Contact us</button></a>
                </div>
            </div>
        </div>
    </div>
</div>




<!-- script to make to service information sript work -->
<script>
    var x = document.getElementById('webhosting');
    var c = document.getElementById('mobhosting');
    var z = document.getElementById('tecsolution');
    var a = document.getElementById('mobileapp');
    var s = document.getElementById('bespokeweb');
    var d = document.getElementById('ecommerce');
    var f = document.getElementById('webdevel');
    var k = document.getElementById('info');

    function webh() {
        if (x.style.display === 'none'){
        x.style.display = 'block';
        d.style.display = 'none';
        s.style.display = 'none';
        a.style.display = 'none';
        z.style.display = 'none';
        f.style.display = 'none';
        c.style.display = 'none';
    }
    }
    function mobh() {
        c.style.display = 'block'
        f.style.display = 'none';
        d.style.display = 'none';
        x.style.display = 'none';
        s.style.display = 'none';
        a.style.display = 'none';
        z.style.display = 'none';
    } 

    function tecsol() {
        z.style.display = 'block';
        d.style.display = 'none';
        x.style.display = 'none';
        s.style.display = 'none';
        a.style.display = 'none';
        f.style.display = 'none';
        c.style.display = 'none';
    } 

    function mobapp() {
        a.style.display = 'block';
        d.style.display = 'none';
        x.style.display = 'none';
        s.style.display = 'none';
        z.style.display = 'none';
        f.style.display = 'none';
        c.style.display = 'none';
    }

    function besweb() {
        s.style.display = 'block';
        d.style.display = 'none';
        x.style.display = 'none';
        a.style.display = 'none';
        z.style.display = 'none';
        f.style.display = 'none';
        c.style.display = 'none';
    } 

    function ecom() {
        d.style.display = 'block';
        x.style.display = 'none';
        s.style.display = 'none';
        a.style.display = 'none';
        z.style.display = 'none';
        f.style.display = 'none';
        c.style.display = 'none';
    }
    
    function webdev() {
        f.style.display = 'block';
        d.style.display = 'none';
        x.style.display = 'none';
        s.style.display = 'none';
        a.style.display = 'none';
        z.style.display = 'none';
        c.style.display = 'none';
    }
</script>


{{--  --}}
<div class="md:flex hidden items-center justify-between" id="info">
    <div class="lg:w-1/2 w-10/12 m-9 place-self-start  ">
        <h2 class="text-base leading-4 text-gray-600">Choose your plan</h2>
        <h1 role="heading" class="md:text-5xl text-3xl font-bold leading-10 mt-3 text-gray-800 ">Our sevices</h1>
        <h2 role="contentinfo" class="text-base leading-5 mt-5 text-gray-600  ">Our team at fabuglobal is ready to help you with your IT complications, we offer a range of services like web development where we will create your business a website or modify an already existing site, or web hosting where we will host your web site so I can be seen 24/7.
        </h2>
        <div>
            <a href="/contact"><button type="button" class="hover:text-white lg:w-72 w-24 h-12 m-3 font-semibold transition  duration-200 bg-white border-2 border-blue-800 rounded hover:bg-indigo-800 focus:shadow-outline focus:outline-none">Contact us</button></a>
        </div>
    </div>
    <div class="xl:w-1/2 lg:w-7/12 relative w-full lg:mt-0 mt-12 md:px-8" role="list">
        <img src="https://i.ibb.co/0n6DSS3/bgimg.png" class="absolute w-full -ml-12 mt-24" alt="background circle images" />

        {{-- Web Development --}}
        <div role="listitem" class="bg-white shadow rounded-lg p-8 mt-9 relative z-30 hover:shadow-lg">
            <div class="md:flex items-center justify-between">
                <h3 class="text-2xl font-semibold leading-6 text-gray-800 ">Web Development</h3>
            </div>
            <p class="md:w-80 text-base leading-6 mt-4 text-gray-600">With our web development service, our team will create a web site for you busissnes or modify an already existing one.</p>
        </div>

        <!-- Ecommerce -->
        <div role="listitem" class="bg-white shadow rounded-lg mt-3 flex relative z-30 hover:shadow-lg">
            <div class="w-full p-8">
                <div class="md:flex items-center justify-between">
                    <h3 class="text-2xl font-semibold leading-6 text-gray-800">Ecommerce </h3>
                </div>
                <p class="md:w-96 text-base leading-6 mt-4 text-gray-600">With our Ecommerce service our team will create a working online shop for you.</p>
            </div>
        </div>

         {{-- Mobile App Development --}}
        <div role="listitem" class="bg-white shadow rounded-lg mt-3 flex relative z-30 hover:shadow-lg">
            <div class="w-full p-8">
                <div class="md:flex items-center justify-between">
                    <h3 class="text-2xl font-semibold leading-6 text-gray-800">Mobile App Development  </h3>
                </div>
                <p class="md:w-96 text-base leading-6 mt-4 text-gray-600">With our mobile App demelopment service our team will create a mobile app for you or modify an alredy existing app.</p>
            </div>
        </div>

         {{-- Web Hosting --}}
        <div role="listitem" class="bg-white shadow rounded-lg mt-3 flex relative z-30 hover:shadow-lg">
            <div class="w-full p-8">
                <div class="md:flex items-center justify-between">
                    <h3 class="text-2xl font-semibold leading-6 text-gray-800 ">Web Hosting  </h3>
                </div>
                <p class="md:w-96 text-base leading-6 mt-4 text-gray-600">With our web hosting service we will host your website so it will be avalible 24/7.</p>
            </div>
        </div>

         {{-- Mobile Hosting --}}
        <div role="listitem" class="bg-white shadow rounded-lg mt-3 flex relative z-30 hover:shadow-lg">
            <div class="w-full p-8">
                <div class="md:flex items-center justify-between">
                    <h3 class="text-2xl font-semibold leading-6 text-gray-800">Mobile Hosting </h3>
                </div>
                <p class="md:w-96 text-base leading-6 mt-4 text-gray-600 ">With our mobile hosting service we will host your mobile app on our server so it can work 24/7.</p>
            </div>
        </div>

        {{-- Technology Solutions --}}
        <div role="listitem" class="bg-white shadow rounded-lg mt-3 flex relative z-30 hover:shadow-lg">
            <div class="w-full p-8">
                <div class="md:flex items-center justify-between">
                    <h3 class="text-2xl font-semibold leading-6 text-gray-800">Technology Solutions </h3>
                </div>
                <p class="md:w-96 text-base leading-6 mt-4 text-gray-600">With our technology solutions service we will help you to fix any problems that arise with you technology.</p>
            </div>
        </div>

        {{-- Bespoke website --}}
        <div role="listitem" class="bg-white shadow rounded-lg p-8 relative z-30 mt-7 hover:shadow-lg">
            <div class="md:flex items-center justify-between">
                <h3 class="text-2xl font-semibold leading-6 text-gray-800">Bespoke Website</h3>
            </div>
            <p class="md:w-96 text-base leading-6 mt-4 text-gray-600">With our bespoke website service our team will design a bespoke website for you.</p>
        </div>
    </div>
</div>
@endsection