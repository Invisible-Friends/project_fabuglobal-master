<!doctype html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <link rel="icon" type="image/x-icon" href="/{{ $allhome->favicon }}">


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    @yield('links')

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- font-awesome --}}
    <script src="https://kit.fontawesome.com/c6b703c269.js" crossorigin="anonymous"></script>
    <link rel="stylesheet preconnect" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
    <link  href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Mukta:wght@500&display=swap" rel="stylesheet">

    {{-- Categories Dropdown --}}
    <script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</head>

<body class="{{ Request::routeIs('blog.index') ? 'bg-gray-300' : 'bg-white' }} ">




    <header>
        <div class="hidden py-1 text-base text-center text-white bg-black md:block">
            <p class="inline-block"><a href="tel:07847583948"><i
                        class="mx-2 fa-solid fa-phone"></i>{{ $footer->contact_info }}</a></p>
            <p class="inline-block"><a href="mailto:$allcontact->email "><i
                        class="mx-2 fa-solid fa-envelope"></i>{{ $footer->email }}</a></p>
        </div>
    </header>


    <!-- ========================================= -->
    <!--              Navbar goes here             -->
    <!-- ========================================= -->
    <nav class="sticky top-0 z-50 bg-white shadow-lg">
        <div class="px-2 mx-auto lg:px-4">
            <div class="flex justify-between h-[65px] max-h-[65px]">
                <div class="flex items-center space-x-9 lg:ml-7">
                    <div>
                        <!-- ============================================ -->
                        <!--                 Website Logo                 -->
                        <!-- ============================================ -->
                        <a href="/" class="flex" aria-label="fabuglobal logo">
                            <img src="/{{ $allhome->logo }}"
                                class=" lg:w-[12.0449rem] md:w-[6.02245rem] w-[192.719px] lg:h-[4.0625rem] md:h-[2.03125rem] h-[4.0625rem] max-w-[13rem] object-cover" alt="fabuglobal logo"
                                aria-label="fabuglobal logo">
                            {{-- <img src="{{ asset('storage/'.$home->logo) }}" class="w-20 h-12 mr-2 sm:h-20 sm:w-32" alt="fabuglobal logo" aria-label="fabuglobal logo" > --}}
                        </a>
                    </div>
                    <!-- ============================================ -->
                    <!--             Primary Navbar Items             -->
                    <!-- ============================================ -->

                </div>
                <!-- ============================================ -->
                <!--            Secondary Navbar Items            -->
                <!-- ============================================ -->
                {{-- Dividers --}}
                {{-- Main Content --}}
                <div class="items-center hidden float-right space-x-1 md:flex">
                    {{-- Desktop Menu --}}
                    <div class="items-center hidden space-x-1 md:flex md:sticky">

                            {{-- Industries --}}
                        <a href="{{ route('industries.index') }}"
                        class="px-2 py-4 text-base font-semibold text-gray-500 transition duration-300 md:text-sm lg:text-lg hover:text-blue-500"
                        id="industries" aria-label="industries">Industries</a>
                        {{-- Blog --}}
                        <div class="">
                            <div x-data="{ open: false }" @mouseleave="open = false" class="relative">
                                <!-- Dropdown toggle button -->
                                <button @mouseover="open = true"
                                    class="px-2 py-4 text-base font-semibold text-gray-500 transition duration-300 md:text-sm lg:text-lg hover:text-blue-500">
                                    <a href="{{route('services')}}" class="services">Services</a>
                                </button>

                                <!-- Dropdown menu -->
                                <div x-show="open"
                                    class="absolute right-0 w-48 py-2 mt-2 bg-gray-100 rounded-md shadow-xl left-2 top-12">
                                    {{-- @foreach ($navbar_services as $service) --}}
                                        <a href="{{-- route('categories.show', $category) --}}"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-400 hover:text-white">{{-- \Str::limit ($service->name, 18) --}}</a>
                                    {{-- @endforeach --}}
                                </div>
                            </div>
                        </div>
                        {{-- Categories --}}
                        <div class="">
                            <div x-data="{ open: false }" @mouseleave="open = false" class="relative">
                                <!-- Dropdown toggle button -->
                                <button @mouseover="open = true"
                                    class="px-2 py-4 text-base font-semibold text-gray-500 transition duration-300 md:text-sm lg:text-lg hover:text-blue-500">
                                    <a href="{{-- route('categories.index') --}}" class="Course">Course</a>
                                </button>

                                <!-- Dropdown menu -->
                                <div x-show="open"
                                    class="absolute right-0 w-48 py-2 mt-2 bg-gray-100 rounded-md shadow-xl left-2 top-12">
                                    {{-- @foreach ($navbar_categories as $category) --}}
                                        <a href="{{-- route('categories.show', $category) --}}"
                                            class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-400 hover:text-white">{{-- \Str::limit ($category->name, 18) --}}</a>
                                    {{-- @endforeach --}}
                                </div>
                            </div>
                        </div>
                        {{-- Company --}}
                        <div class="">
                            <div x-data="{ open: false }" @mouseleave="open = false" class="relative">
                                <!-- Dropdown toggle button -->
                                <button @mouseover="open = true"
                                    class="px-2 py-4 text-base font-semibold text-gray-500 transition duration-300 md:text-sm lg:text-lg hover:text-blue-500">
                                    <a href="{{-- route('') --}}" class="Course">Company</a>
                                </button>

                                <!-- Dropdown menu -->
                                <div x-show="open"
                                    class="absolute right-0 w-48 py-2 mt-2 bg-gray-100 rounded-md shadow-xl left-2 top-12">
                                        <a href="{{ route('about') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-400 hover:text-white">About</a>
                                        <a href="{{ route('services') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-400 hover:text-white">Careers</a>
                                        <a href="" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-400 hover:text-white">Testimonials</a>
                                </div>
                            </div>
                        </div>
                        {{-- Contact Us --}}
                        <a href="{{ route('contact.create') }}"
                            class="px-2 py-4 text-base font-semibold text-gray-500 transition duration-300 md:text-sm lg:text-lg hover:text-indigo-500"
                            id="contacthl" aria-label="contact">Contact Us</a>
                        <script>
                            function drpdwnFunction() {
                                var element = document.getElementById("blogdrpdwnmenu");
                                element.classList.toggle("hidden");
                            }
                        </script>

        @php

        $showAdmin = false;
        $showallpost = false;
        $showcreateposts = false;
        $showcreateposts = false;
        $showallcategories = false;
        $show_categories_index = false;
        $show_categories_create = false;
        $showcomments = false;
        $showcomments_index = false;
        $show_comments_create = false;
        $show_users_index = false;
        $show_users_create = false;
        $show_roles_index = false;
        $show_roles_create = false;
        $showcontacts = false;
        $show_setting_edit = false;
        $show_home_edit  = false;
        $show_footer_edit  = false;

        if (Auth::check()) {
            $roles = auth()
                ->user()
                ->role->permissions->toArray();

            foreach ($roles as $role) {
                if ($role['name'] == 'admin.index') {
                    $showAdmin = true;
                 }
                 else if ($role['name'] == 'admin.posts.index') {
                    $showallpost   = true;
                }

                else if ($role['name'] == 'admin.posts.create') {
                    $showcreateposts   = true;
                }

                else if ($role['name'] == 'admin.categories.index') {
                    $showallcategories   = true;
                }

                else if ($role['name'] == 'admin.categories.create') {
                    $show_categories_create   = true;
                }

                  else if ($role['name'] == 'admin.comments') {
                    $showcomments = true;
                }

                else if ($role['name'] == 'admin.comments.index') {
                    $showcomments_index = true;
                }

                else if ($role['name'] == 'admin.comments.create') {
                    $show_comments_create = true;
                }

                else if ($role['name'] == 'admin.users.index') {
                    $show_users_index = true;
                }

                else if ($role['name'] == 'admin.users.create') {
                    $show_users_create = true;
                }

                else if ($role['name'] == 'admin.roles.index') {
                    $show_roles_index = true;
                }

                else if ($role['name'] == 'admin.roles.create') {
                    $show_roles_create = true;
                }

                 else if ($role['name'] == 'admin.contacts') {
                    $showcontacts = true;
                }



                else if ($role['name'] == 'admin.setting.edit') {
                    $show_setting_edit = true;
                }



                 else if ($role['name'] == 'admin.home.edit') {
                    $show_home_edit   = true;
                }

                else if ($role['name'] == 'admin.footer.edit') {
                    $show_footer_edit   = true;
                }




            }

            }
        @endphp

                        @if (Auth::check() && $showAdmin)
                            <a href="{{ route('admin.index') }}"><button type="button"
                                    class="px-2 py-4 text-base font-semibold text-gray-500 transition duration-300 md:text-sm lg:text-lg hover:text-indigo-500"
                                    id="bloghl" aria-label="Blog">Admin</button></a>
                        @endif


                    </div>

                    {{-- new lgoin and logout --}}
                    @guest
                        <a href="{{ route('login') }}"><button type="button"
                                class="px-2 py-4 text-base font-semibold text-gray-500 transition duration-300 md:text-sm lg:text-lg hover:text-indigo-500"
                                aria-label="Login" id="loginhl">Sign In</button></a>
                    @endguest

                    @auth
                        <div class="relative flex flex-row text-left flex-nowrap">
                            <div>
                                <button type="button"
                                    class="inline-flex justify-center w-full px-4 py-2 text-sm font-medium text-gray-700 bg-white rounded-md shadow-sm hover:bg-gray-50"
                                    id="menu-button" aria-expanded="true" aria-haspopup="true"
                                    onclick="openDropdown(event,'dropdown-id')" type="button">
                                    {{ \Str::limit(Auth::user()->name, 15) }}
                                    <!-- Heroicon name: solid/chevron-down -->
                                    <svg class="w-5 h-5 ml-2 -mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>

                            <!--
              Dropdown menu, show/hide based on menu state.

              Entering: "transition ease-out duration-100"
                From: "transform opacity-0 scale-95"
                To: "transform opacity-100 scale-100"
              Leaving: "transition ease-in duration-75"
                From: "transform opacity-100 scale-100"
                To: "transform opacity-0 scale-95"
            -->
                            <div class="absolute right-0 hidden w-56 mt-2 origin-top-right bg-white divide-y divide-gray-100 rounded-md shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                                role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1"
                                id="dropdown-id">

                                <div class="py-1" role="none">
                              {{-- Contacts --}}
   @if (Auth::check() && $showcontacts)
   <a href="{{ route('admin.contacts') }}" class="block px-4 py-1 text-sm text-gray-700" role="menuitem" tabindex="-1"
id="menu-item-5">Contacts</a>
@endif
{{-- Contacts --}}



   {{-- setting --}}
   @if (Auth::check() && $show_setting_edit)
   <a href="{{ route('admin.setting.edit') }}" class="block px-4 py-1 text-sm text-gray-700" role="menuitem" tabindex="-1"
id="menu-item-5">About</a>
@endif
{{-- setting --}}



  {{-- Home --}}
  @if (Auth::check() && $show_home_edit)
  <a href="{{ route('admin.home.edit') }}" class="block px-4 py-1 text-sm text-gray-700" role="menuitem" tabindex="-1"
id="menu-item-5">Home</a>
@endif
{{-- Home --}}

 {{-- Footer --}}
 @if (Auth::check() && $show_footer_edit)
 <a href="{{ route('admin.footer.edit') }}" class="block px-4 py-1 text-sm text-gray-700" role="menuitem" tabindex="-1"
id="menu-item-5">Footer</a>
@endif



<div class="py-1" role="none">
    {{-- All Comments --}}
@if (Auth::check() && $showcomments_index)
    <a href="{{ route('admin.comments.index') }}" class="block px-4 py-1 text-sm text-gray-700" role="menuitem" tabindex="-1"
        id="menu-item-4">All Comments</a>
@endif
{{-- All Comments ends--}}

{{-- Add New Comment --}}
@if (Auth::check() && $show_comments_create)

    <a href="{{ route('admin.comments.create') }}" class="block px-4 py-1 text-sm text-gray-700" role="menuitem" tabindex="-1"
        id="menu-item-5">Add New Comments</a>
@endif
{{-- Add New Comment ends --}}



 {{-- post --}}
 @if (Auth::check() && $showallpost)
 <a href="{{ route('admin.posts.index') }}" class="block px-4 py-1 text-sm text-gray-700" role="menuitem" tabindex="-1"
     id="menu-item-5">All Posts</a>
@endif


@if (Auth::check() && $showcreateposts)
     <a href="{{ route('admin.posts.create') }}" class="block px-4 py-1 text-sm text-gray-700" role="menuitem" tabindex="-1"
     id="menu-item-5">Add New Post</a>
@endif
 {{-- post --}}


                                    {{-- All Roles --}}
                        @if (Auth::check() && $show_roles_index)
                                    <a href="{{ route('admin.roles.index') }}" class="block px-4 py-1 text-sm text-gray-700" role="menuitem" tabindex="-1"
                                        id="menu-item-4">All Roles</a>
                @endif
                {{-- All Roles ends--}}

                {{-- Create New Roles --}}
                @if (Auth::check() && $show_roles_create)
                                    <a href="{{ route('admin.roles.create') }}" class="block px-4 py-1 text-sm text-gray-700" role="menuitem" tabindex="-1"
                                        id="menu-item-5">Add New Role</a>
                        @endif
                        {{-- Create New Role ends --}}
                        {{-- Role ends --}}

{{-- Categories --}}
                        @if (Auth::check() && $showallcategories)
                        <a href="{{ route('admin.categories.index') }}" class="block px-4 py-1 text-sm text-gray-700" role="menuitem" tabindex="-1"
                            id="menu-item-5">All Categories</a>
                            @endif


                            @if (Auth::check() && $show_categories_create)
                            <a href="{{ route('admin.categories.create') }}" class="block px-4 py-1 text-sm text-gray-700" role="menuitem" tabindex="-1"
                            id="menu-item-5">Add New Categories</a>
            @endif
{{-- Categories --}}


{{-- user --}}
            @if (Auth::check() && $show_users_index)
            <a href="{{ route('admin.users.index') }}" class="block px-4 py-1 text-sm text-gray-700" role="menuitem" tabindex="-1"
            id="menu-item-5">All Users</a>
            @endif


            @if (Auth::check() && $show_users_create)
            <a href="{{ route('admin.users.create') }}" class="block px-4 py-1 text-sm text-gray-700" role="menuitem" tabindex="-1"
            id="menu-item-5">Add New Users</a>
            @endif
            {{-- user --}}

                                </div>


                                {{-- post --}}
                                {{-- <div class="py-1" role="none"> --}}
                    {{-- @if (Auth::check() && $showallpost)
                                    <a href="{{ route('admin.posts.index') }}" class="block px-4 py-1 text-sm text-gray-700" role="menuitem" tabindex="-1"
                                        id="menu-item-5">All Posts</a>
                        @endif


                    @if (Auth::check() && $showcreateposts)
                                        <a href="{{ route('admin.posts.create') }}" class="block px-4 py-1 text-sm text-gray-700" role="menuitem" tabindex="-1"
                                        id="menu-item-5">Add New Post</a>
                        @endif --}}

                                {{-- </div> --}}
                                {{-- post --}}



                                 {{-- Categories --}}
                                 {{-- <div class="py-1" role="none"> --}}
                    {{-- @if (Auth::check() && $showallcategories)
                                    <a href="{{ route('admin.categories.index') }}" class="block px-4 py-1 text-sm text-gray-700" role="menuitem" tabindex="-1"
                                        id="menu-item-5">All Categories</a>
                                        @endif


                                        @if (Auth::check() && $show_categories_create)
                                        <a href="{{ route('admin.categories.create') }}" class="block px-4 py-1 text-sm text-gray-700" role="menuitem" tabindex="-1"
                                        id="menu-item-5">Add New Categories</a>
                        @endif --}}

                                {{-- </div> --}}
                                {{-- Categories --}}







                    {{-- user --}}
 {{-- <div class="py-1" role="none"> --}}
    {{-- @if (Auth::check() && $show_users_index)
<a href="{{ route('admin.users.index') }}" class="block px-4 py-1 text-sm text-gray-700" role="menuitem" tabindex="-1"
id="menu-item-5">All Users</a>
@endif


@if (Auth::check() && $show_users_create)
<a href="{{ route('admin.users.create') }}" class="block px-4 py-1 text-sm text-gray-700" role="menuitem" tabindex="-1"
id="menu-item-5">Add New Users</a>
@endif --}}

{{-- </div> --}}
{{-- User --}}


    {{-- Contacts --}}
    {{-- <div class="py-1" role="none">
        @if (Auth::check() && $showcontacts)
        <a href="{{ route('admin.contacts') }}" class="block px-4 py-1 text-sm text-gray-700" role="menuitem" tabindex="-1"
    id="menu-item-5">Contacts</a>
    @endif
    </div> --}}
    {{-- Contacts --}}






     {{-- setting --}}
     {{-- <div class="py-1" role="none">
        @if (Auth::check() && $show_setting_edit)
        <a href="{{ route('admin.setting.edit') }}" class="block px-4 py-1 text-sm text-gray-700" role="menuitem" tabindex="-1"
    id="menu-item-5">About</a>
    @endif
    </div> --}}
    {{-- setting --}}




     {{-- Home --}}
     {{-- <div class="py-1" role="none">
        @if (Auth::check() && $show_home_edit)
        <a href="{{ route('admin.home.edit') }}" class="block px-4 py-1 text-sm text-gray-700" role="menuitem" tabindex="-1"
    id="menu-item-5">Home</a>
    @endif
    </div> --}}
    {{-- Home --}}



    {{-- Footer --}}
    {{-- <div class="py-1" role="none">
        @if (Auth::check() && $show_footer_edit)
        <a href="{{ route('admin.footer.edit') }}" class="block px-4 py-1 text-sm text-gray-700" role="menuitem" tabindex="-1"
    id="menu-item-5">Footer</a>
    @endif
    </div> --}}
    {{-- Footer --}}



                                <div class="py-1" role="none">
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                                        id="menu-item-6" onclick="event.preventDefault();
                                    document.getElementById('nav-logout-form').submit()">logout</a>
                                    <form id="nav-logout-form" action="{{ route('logout') }}" method="POST">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endauth
                    <script src="https://unpkg.com/@popperjs/core@2.9.1/dist/umd/popper.min.js" charset="utf-8"></script>
                    <script>
                        function openDropdown(event, dropdownID) {
                            let element = event.target;
                            while (element.nodeName !== "BUTTON") {
                                element = element.parentNode;
                            }
                            var popper = Popper.createPopper(element, document.getElementById(dropdownID), {
                                placement: 'bottom-start'
                            });
                            document.getElementById(dropdownID).classList.toggle("hidden");
                            document.getElementById(dropdownID).classList.toggle("block");
                        }
                    </script>
                    {{-- new logout end --}}


                    {{-- old login and logout --}}
                    {{-- }} @guest
                 @if (Route::has('login'))
                 <a  href="{{ route('login') }}" class="px-2 py-4 text-base font-semibold text-gray-500 transition duration-300 lg:pl-4 md:text-sm lg:text-base hover:text-blue-500" id="loginhl" aria-label="Log In">{{ __('Login') }}</a>

                 @endif


                 @if (Route::has('register'))
                 <a class="py-4 text-base font-semibold text-gray-500 transition duration-300 lg:px-4 md:text-sm lg:text-base hover:text-blue-500" id="registerhl" aria-label="Sign Up" href="{{ route('register') }}">{{ __('Register') }}</a>
                     @endif

                 @else



                 <a class="px-1 py-4 text-base font-semibold text-gray-500 transition duration-300 border-blue-500 md:text-sm lg:text-base hover:text-blue-500" id="registerhl" aria-label="Log Out" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                 {{ __('Logout') }}
                 </a>

                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                     @csrf
                 </form>

                 @endguest --}}

                    <div class="relative inline-block text-left">

                        {{-- book a call --}}
                        <a href="{{ route('appointment') }}"
                            class="inline-flex items-center justify-center w-full h-12 text-base font-semibold text-white transition duration-200 bg-blue-400 border-2 border-blue-400 rounded md:px-1 lg:px-6 hover:border-blue-500 md:w-auto hover:bg-blue-500 focus:shadow-outline focus:outline-none dark:focus:ring-blue-500 md:text-sm lg:text-base"
                            aria-label="book a call">
                            Book a call
                        </a>
                    </div>
                </div>
                        <!-- ============================================ -->
                    <!--               Mobile Menu Button             -->
                    <!-- ============================================ -->
                    <div class="flex items-center md:hidden">
                        @guest
                            @if (Route::has('login'))
                                {{-- login icon --}}
                                    <a class="m-2" href="{{ route('login') }}" aria-label="login button"
                                        alt="login button" title="login"><i class="fa-solid fa-user"></i></a>
                                @endif
                            @else
                                <a aria-label="Logout" href="{{ route('logout') }}"
                                    class="px-2 inline-flex items-center justify-center w-[3.75rem] h-7 m-2 text-base font-semibold text-white transition duration-200 bg-indigo-800 border-2 border-indigo-800 rounded-full hover:border-indigo-500 md:w-auto hover:bg-indigo-500 focus:shadow-outline focus:outline-none dark:focus:ring-indigo-500"
                                    aria-label="Logout" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                @csrf
                            </form>

                        @endguest
                        <button class="outline-none mobile-menu-button" aria-label="Toggle Button">
                            <svg class="w-6 h-6 m-1 text-gray-500 hover:text-indigo-500" alt="Toggle Button"
                                x-show="!showMenu" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <!-- ============================================ -->
            <!--                  Mobile Menu                 -->
            <!-- ============================================ -->
        <div class="hidden mobile-menu">
            <ul class="pl-3">
                {{-- Services --}}
                <li>
                <button onclick="showServices()" class="block px-2 py-4 text-sm transition duration-300 w-full text-left"
                aria-label="Services">Services</button>
                    {{-- Services Dropdown --}}
                    <div class="hidden" id="servicedrpdwn">
                        <p class="text-gray-900 my-5 ml-5 font-bold"><a href="{{ route('services') }}">All Services</p></a>
                        <p class="text-gray-900 my-5 ml-5 font-bold"><a href="">Ideation & Strategy</p></a>
                        <p class="my-5"><a href="" class="ml-10">Product Strategy</a></p>
                        <p class="my-5"><a href="" class="ml-10">Digital Transformation</a></p>
                        <p class="my-5"><a href="" class="ml-10">Legacy app modernisation</a></p>
                        <p class="my-5"><a href="" class="ml-10">Research & Development</a></p>
                        <p class="text-gray-900 my-5 ml-5 font-bold"><a href="">Product Design</p></a>
                        <p class="my-5"><a href="" class="ml-10">UX Design</a></p>
                        <p class="my-5"><a href="" class="ml-10">UI Design</a></p>
                        <p class="my-5"><a href="" class="ml-10">Product Bootcamp</a></p>
                        <p class="my-5"><a href="" class="ml-10">Workshops</a></p>
                        <p class="text-gray-900 my-5 ml-5 font-bold"><a href="">Web and Mobile</p></a>
                        <p class="my-5"><a href="" class="ml-10">Custom App</a></p>
                        <p class="text-gray-900 my-5 ml-5 font-bold"><a href="">Cloud Services</p></a>
                    </div>
                </li>
                {{-- Industries --}}
                <li>
                    <button onclick="showIndustries()" class="block px-2 py-4 text-sm transition duration-300 w-full text-left"
                    aria-label="Industries">Industries</button>
                        {{-- Industries Dropdown --}}
                        <div class="hidden" id="industriesdrpdwn">
                            <p class="text-gray-900 my-5 ml-5 font-bold"><a href="{{ route('industries.index') }}">All industries</p></a>
                            <p class="text-gray-900 my-5 ml-5 font-bold"><a href="">Healthcare</p></a>
                            <p class="text-gray-900 my-5 ml-5 font-bold"><a href="">eCommerce</p></a>
                            <p class="text-gray-900 my-5 ml-5 font-bold"><a href="">Fintech</p></a>
                            <p class="my-5"><a href="" class="ml-10">Banking</a></p>
                            <p class="my-5"><a href="" class="ml-10">Insurance</a></p>
                            <p class="text-gray-900 my-5 ml-5 font-bold"><a href="">Entertainment</p></a>
                            <p class="my-5"><a href="" class="ml-10">Music</a></p>
                            <p class="my-5"><a href="" class="ml-10">Travel</a></p>
                            <p class="text-gray-900 my-5 ml-5 font-bold"><a href="">Other</p></a>
                            <p class="my-5"><a href="" class="ml-10">Education</a></p>
                            <p class="my-5"><a href="" class="ml-10">Food delivery</a></p>
                        </div>
                    </li>
                {{-- Company --}}
                <li>
                    <button onclick="showCompany()" class="block px-2 py-4 text-sm transition duration-300 w-full text-left"
                    aria-label="Company">Company</button>
                        {{-- Company Dropdown --}}
                        <div class="hidden" id="companydrpdwn">
                            <p class="text-gray-900 my-5 ml-5 font-bold"><a href="{{route('about')}}">About Us</p></a>
                            <p class="text-gray-900 my-5 ml-5 font-bold"><a href="">Careers</p></a>
                        </div>
                    </li>
                {{-- About --}}
                <li><a href="{{ route('about') }}"
                        class="block px-2 py-4 text-sm transition duration-300 border-blue-500 hover:text-indigo-500"
                        aria-label="About" id="abouthlm">About</a></li>
                {{-- Contact us --}}
                <li><a href="{{ route('contact.create') }}"
                        class="block px-2 py-4 text-sm transition duration-300 border-blue-500 hover:text-indigo-500"
                        aria-label="Contact" id="contacthlm">Contact us</a></li>
               
                {{-- Categories --}}
                <li><a href="{{ route('categories.index') }}"
                        class="block px-2 py-4 text-sm transition duration-300 border-blue-500 hover:text-indigo-500"
                        aria-label="Categories" id="categorieshlm">Course</a></li>

                {{-- Blog --}}

                    {{-- admin index --}}
                        @if (Auth::check() && $showAdmin)
                            <a href="{{ route('admin.index') }}"><button type="button"
                                    class="block px-2 py-4 text-sm transition duration-300 border-blue-500 hover:text-indigo-500"
                                    id="bloghl" aria-label="Admin">Admin</button></a>
                        @endif
                    {{-- admin index end--}}

                {{-- Services Dropdown Script --}}
                <script>
                    function showServices(){
                        document.getElementById('servicedrpdwn').classList.toggle('hidden')
                        document.getElementById('industriesdrpdwn').classList.add('hidden')
                        document.getElementById('companydrpdwn').classList.add('hidden')
                    }
                    function showIndustries(){
                        document.getElementById('industriesdrpdwn').classList.toggle('hidden')
                        document.getElementById('servicedrpdwn').classList.add('hidden')
                        document.getElementById('companydrpdwn').classList.add('hidden')
                    }
                    function showCompany(){
                        document.getElementById('companydrpdwn').classList.toggle('hidden')
                        document.getElementById('servicedrpdwn').classList.add('hidden')
                        document.getElementById('industriesdrpdwn').classList.add('hidden')
                    }add
                </script>

            </ul>
        </div>
        <script>
            //<!-- ============================================ -->
            //<!--                  nav mobile                  -->
            //<!-- ============================================ -->
            const btn = document.querySelector("button.mobile-menu-button");
            const menu = document.querySelector(".mobile-menu");

            btn.addEventListener("click", () => {
                menu.classList.toggle("hidden");
            });

            var sPath = window.location.pathname;
            var sPage = sPath.substring(sPath.lastIndexOf('/'));
            console.log(sPage);
            //homepage highlight script
            if (sPage == "/") {
                document.getElementById("homehl").classListNaNpxove('text-gray-500');
                document.getElementById("homehl").classList.add('text-blue-500');
                document.getElementById("homehlm").classList.add('border-b-4', 'text-slate-700', 'semi-bold');
            }
            //about page highlight script
            if (sPage == "/about") {
                document.getElementById("abouthl").classListNaNpxove('text-gray-500');
                document.getElementById("abouthl").classList.add('text-blue-500');
                document.getElementById("abouthlm").classList.add('border-b-4', 'text-slate-700', 'semi-bold');
            }
            //categories page highlight script
            if (sPage == "/categories") {
                document.getElementById("categorieshl").classListNaNpxove('text-gray-500');
                document.getElementById("categorieshl").classList.add('text-blue-500');
                document.getElementById("categorieshlm").classList.add('border-b-4', 'text-slate-700', 'semi-bold');
            }

            //blog page highlight script
            if (sPage == "/blog") {
                document.getElementById("bloghl").classListNaNpxove('text-gray-500');
                document.getElementById("bloghl").classList.add('text-blue-500');
                document.getElementById("bloghlm").classList.add('border-b-4', 'text-slate-700', 'semi-bold');
            }
            //contact page highlight script
            if (sPage == "/contact") {
                document.getElementById("contacthl").classListNaNpxove('text-gray-500');
                document.getElementById("contacthl").classList.add('text-blue-500');
                document.getElementById("contacthlm").classList.add('border-b-4', 'text-slate-700', 'semi-bold');
            }


            //login page highlight script
            if (sPage == "/login") {
                document.getElementById("loginhl").classListNaNpxove('text-gray-500');
                document.getElementById("loginhl").classList.add('text-blue-500');
            }
            //register page highlight script
            if (sPage == "/register") {
                document.getElementById("registerhl").classListNaNpxove('text-gray-500');
                document.getElementById("registerhl").classList.add('text-blue-500');
            }
        </script>
    </nav>

    {{-- kyle ed --}}

    <script src="{{ asset('js/functions.js') }}"></script>


    <main>
        @yield('content')
    </main>


    <div class="flex justify-start w-full md:justify-center md:items-end bg-slate-800 md:p-8">
        {{-- <img class="absolute z-0 w-full h-full dark:hidden top-10 xl:mt-10" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/footer_5_marketing_background.png" alt="background">    <div class="relative z-10 flex flex-col items-start justify-start px-4 pt-36 md:pt-32 lg:pt-40 xl:pt-96 md:px-6 xl:px-20 md:justify-center md:items-center"> --}}
        <div class="flex flex-col justify-center w-full p-2">

            <div class="grid justify-center w-full grid-cols-2 mt-12 xl:mt-0 sm:grid-cols-5 gap-y-12 sm:gap-y-0 md:w-auto sm:gap-x-20 xl:gap-8 ">
                <div class="order-1">
                    <div class="mb-8 cursor-pointer ">
                        <a href="/">
                            <img class="w-[10.1875rem] h-[3.4375rem]" loading="lazy"
                                src="/{{ $allhome->logo }}" alt="fabuglobal logo">
                        </a>
                    </div>
                    <div class="text-sm text-white whitespace-pre-line md:text-base ">
                        {!! $footer->title !!}
                    </div>
                </div>
                <div class="flex flex-col items-start justify-start order-3 space-y-6 sm:w-40 md:w-auto xl:w-72">
                    <h2 class="text-base font-bold leading-4 text-white xl:text-xl xl:font-semibold xl:leading-5">
                        COMMUNITY</h2>

                    <button class="text-base leading-none text-left text-gray-100 hover:text-gray-400 w-[160px]">
                        {!! $footer->community_section !!}
                    </button>
                </div>

                {{-- ROLE 2 --}}
                <div class="flex flex-col items-start justify-start order-4 space-y-6 sm:w-40 md:w-auto xl:w-72">
                    <h2 class="text-base font-bold leading-4 text-white xl:text-xl xl:font-semibold xl:leading-5">BLOG
                    </h2>
                    <button class="text-base leading-none text-left text-gray-100 hover:text-gray-400">
                        {!! $footer->blog_section !!}
                    </button>

                </div>
                <div class="order-2 md:hidden">

                </div>


                <div class="flex flex-col items-start justify-start order-5 space-y-6 xl:w-72">
                    <h2 class="text-base font-bold leading-4 text-white xl:text-xl xl:font-semibold xl:leading-5">
                        CONTACT US</h2>
                    <button class="text-base leading-none text-left text-gray-100 hover:text-gray-400">
                        {!! $footer->contact_us_section !!}
                    </button>
                </div>

                <div class="flex flex-col items-start justify-start order-5 space-y-6 xl:w-72">
                    <h2 class="text-base font-bold leading-4 text-white xl:text-xl xl:font-semibold xl:leading-5">
                        section4</h2>
                    <button class="text-base leading-none text-left text-gray-100 hover:text-gray-400">
                        {!! $footer->section4 !!}
                    </button>
                </div>
            </div>


            <div class="flex flex-col-reverse justify-center w-full mt-16 xl:flex-row xl:items-start ">
                <div class="flex flex-col items-start justify-start w-full mt-10 space-y-4 md:mt-12 xl:mt-0 md:flex-row md:justify-center md:w-auto md:space-y-0 md:items-center md:space-x-4 xl:space-x-6 mr-7">
                    <button class="text-sm leading-none text-white md:text-base hover:text-gray-300">
                        <a href="tel:{{ $footer->contact_info }}">
                            <p class="inline-block"><i class="mx-2 fa-solid fa-phone"></i>
                                {{ $footer->contact_info }}
                            </p>
                        </a>
                    </button>
                    <button class="text-sm leading-none text-white md:text-base hover:text-gray-300">
                        <a href="mailto: $allfooter->email ">
                            <p class="inline-block whitespace-nowrap"><i class="mx-2 fa-solid fa-envelope"></i> {{ $footer->email }}
                            </p>
                        </a>
                    </button>
                </div>

                <div class="flex items-start justify-start w-full space-x-6 md:justify-end md:w-auto md:items-center ">
                    <!-- twitter -->
                    <a href=" {{ $footer->twitter }} "><button class="w-6 text-white hover:text-gray-200" aria-label="link to twitter" alt="link to twitter">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg" aria-label="link to twitter">
                                <path
                                    d="M23.25 5.13282C22.406 5.49955 21.513 5.74116 20.5992 5.85001C21.5595 5.28769 22.2817 4.39434 22.6303 3.33751C21.7224 3.86841 20.7307 4.24092 19.6978 4.43907C19.2629 3.98322 18.7397 3.62059 18.1603 3.3732C17.5808 3.12581 16.9571 2.99884 16.327 3.00001C13.7761 3.00001 11.7117 5.03438 11.7117 7.5422C11.7099 7.89102 11.7499 8.23881 11.8308 8.57813C10.0016 8.49238 8.2104 8.02575 6.57187 7.2081C4.93333 6.39044 3.48351 5.23977 2.31516 3.8297C1.90527 4.52069 1.6885 5.30909 1.6875 6.11251C1.6875 7.68751 2.50922 9.0797 3.75 9.89532C3.01487 9.87787 2.29481 9.68331 1.65094 9.32813V9.38438C1.65094 11.5875 3.24469 13.4203 5.35406 13.8375C4.9574 13.9433 4.54864 13.9968 4.13812 13.9969C3.84683 13.9974 3.5562 13.9691 3.27047 13.9125C3.85687 15.7172 5.56359 17.0297 7.58531 17.0672C5.94252 18.3333 3.9256 19.0175 1.85156 19.0125C1.48341 19.012 1.11561 18.99 0.75 18.9469C2.85993 20.2942 5.31255 21.0068 7.81594 21C16.3172 21 20.9616 14.0766 20.9616 8.07188C20.9616 7.87501 20.9564 7.67813 20.947 7.48595C21.8485 6.84472 22.6283 6.04787 23.25 5.13282V5.13282Z"
                                    fill="currentColor" />
                            </svg>
                        </button></a>
                    <!-- facebook -->
                    <a href=" {{ $footer->facebook }} "><button class="w-6 text-white hover:text-gray-200" aria-label="link to facebook" alt="link to facebook">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg" aria-label="link to facebook">
                                <path class="fill-white" clip-rule="evenodd"
                                    d="M22.5 12.0645C22.5 6.26602 17.7984 1.56445 12 1.56445C6.20156 1.56445 1.5 6.26602 1.5 12.0645C1.5 17.3051 5.33906 21.649 10.3594 22.4374V15.1005H7.69266V12.0645H10.3594V9.75117C10.3594 7.12008 11.9273 5.66555 14.3255 5.66555C15.4744 5.66555 16.6763 5.87086 16.6763 5.87086V8.45508H15.3516C14.048 8.45508 13.6402 9.26414 13.6402 10.0957V12.0645H16.552L16.087 15.1005H13.6406V22.4384C18.6609 21.6504 22.5 17.3065 22.5 12.0645Z"
                                    fill="currentColor" />
                            </svg>
                        </button></a>
                    <!-- youtube -->
                    <a href=" {{ $footer->youtube }} "><button class="w-6 text-white hover:text-gray-200" aria-label="link to youtube" alt="link to youtube">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                <path class="fill-white"
                                    d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z" />
                            </svg>
                        </button></a>
                    <!-- instagram -->
                    <a href=" {{ $footer->instagram }} "><button class="w-6 text-white hover:text-gray-200" aria-label="link to instagram" alt="link to instagram">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="w-[1.3125rem]">
                                <path class="fill-white"
                                    d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                            </svg>
                        </button></a>
                </div>
            </div>
            <div class="flex flex-col-reverse justify-center w-full mt-16 lg:flex-row">
                <p class="mt-10 text-sm leading-none text-white md:mt-12 "> &copy; <?php echo date('Y'); ?>
                    {{ config('app.name', 'Fabuglobal') }}. All Rights Reserved</p>
            </div>
        </div>

    </div>


    <script src="{{ asset('js/functions.js') }}"></script>
    @yield('custom_js')
</body>

</html>
