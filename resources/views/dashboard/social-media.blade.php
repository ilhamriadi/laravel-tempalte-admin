@extends('layouts.master')

@section('content')
    <!-- Page-content -->
    <div class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
        <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">
            
            <div class="grid grid-cols-12 mt-5 gap-x-5">
                <div class="col-span-12 lg:col-span-5 xl:col-span-3 shrink-0 lg:block">
                    <div class="card">
                        <div class="card-body">
                            <div class="flex items-center gap-3 mb-5">
                                <div class="rounded-full bg-slate-100 shrink-0 dark:bg-zink-600">
                                    <img src="assets/images/avatar-1.png" alt="" class="rounded-full h-14">
                                </div>
                                <div class="grow">
                                    <h6 class="mb-1 text-15">StarCode Kh <i data-lucide="badge-check" class="inline-block size-4 text-sky-500 fill-sky-100 dark:fill-sky-500/20"></i></h6>
                                    <p class="text-slate-500 dark:text-zink-200">starcodekh</p>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 text-center divide-y sm:divide-y-0 sm:divide-x sm:grid-cols-3 divide-slate-200 dark:divide-zink-500 divide-dashed rtl:divide-x-reverse">
                                <div class="py-3 sm:py-0 sm:px-3">
                                    <h6>489</h6>
                                    <p class="text-slate-500 dark:text-zink-200">Posts</p>
                                </div>
                                <div class="py-3 sm:py-0 sm:px-3">
                                    <h6>4.6k</h6>
                                    <p class="text-slate-500 dark:text-zink-200">Follower</p>
                                </div>
                                <div class="py-3 sm:py-0 sm:px-3">
                                    <h6>159</h6>
                                    <p class="text-slate-500 dark:text-zink-200">Following</p>
                                </div>
                            </div>
                        </div>
                    </div><!--end card-->
                    <div class="card">
                        <div class="card-body">
                            <ul class="flex flex-col w-full gap-2 mb-4 text-sm font-medium shrink-0 nav-tabs">
                                <li class="group grow active">
                                    <a href="{{ route('social-media') }}" class="inline-block px-4 w-full py-2 text-base transition-all duration-300 ease-linear rounded-md text-slate-500 dark:text-zink-200 border border-transparent group-[.active]:bg-custom-500 dark:group-[.active]:bg-custom-500 group-[.active]:text-white dark:group-[.active]:text-white hover:text-custom-500 dark:hover:text-custom-500 active:text-custom-500 dark:active:text-custom-500 -mb-[1px]"><i data-lucide="home" class="inline-block align-middle size-4 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">Feed</span></a>
                                </li>
                                <li class="group grow">
                                    <a href="{{ route('social/friends') }}" class="inline-block px-4 w-full py-2 text-base transition-all duration-300 ease-linear rounded-md text-slate-500 dark:text-zink-200 border border-transparent group-[.active]:bg-custom-500 dark:group-[.active]:bg-custom-500 group-[.active]:text-white dark:group-[.active]:text-white hover:text-custom-500 dark:hover:text-custom-500 active:text-custom-500 dark:active:text-custom-500 -mb-[1px]"><i data-lucide="user-2" class="inline-block align-middle size-4 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">Friends</span></a>
                                </li>
                                <li class="group grow">
                                    <a href="{{ route('social/event') }}" class="inline-block px-4 w-full py-2 text-base transition-all duration-300 ease-linear rounded-md text-slate-500 dark:text-zink-200 border border-transparent group-[.active]:bg-custom-500 dark:group-[.active]:bg-custom-500 group-[.active]:text-white dark:group-[.active]:text-white hover:text-custom-500 dark:hover:text-custom-500 active:text-custom-500 dark:active:text-custom-500 -mb-[1px]"><i data-lucide="calendar-days" class="inline-block align-middle size-4 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">Event</span></a>
                                </li>
                                <li class="group grow">
                                    <a href="{{ route('social/video') }}" class="inline-block px-4 w-full py-2 text-base transition-all duration-300 ease-linear rounded-md text-slate-500 dark:text-zink-200 border border-transparent group-[.active]:bg-custom-500 dark:group-[.active]:bg-custom-500 group-[.active]:text-white dark:group-[.active]:text-white hover:text-custom-500 dark:hover:text-custom-500 active:text-custom-500 dark:active:text-custom-500 -mb-[1px]"><i data-lucide="clapperboard" class="inline-block align-middle size-4 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">Watch Video</span></a>
                                </li>
                                <li class="group grow">
                                    <a href="{{ route('social/marketplace') }}" class="inline-block px-4 w-full py-2 text-base transition-all duration-300 ease-linear rounded-md text-slate-500 dark:text-zink-200 border border-transparent group-[.active]:bg-custom-500 dark:group-[.active]:bg-custom-500 group-[.active]:text-white dark:group-[.active]:text-white hover:text-custom-500 dark:hover:text-custom-500 active:text-custom-500 dark:active:text-custom-500 -mb-[1px]"><i data-lucide="shopping-cart" class="inline-block align-middle size-4 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">Marketplace</span></a>
                                </li>
                                <li class="group grow">
                                    <a href="{{ route('page/account-settings') }}" class="inline-block px-4 w-full py-2 text-base transition-all duration-300 ease-linear rounded-md text-slate-500 dark:text-zink-200 border border-transparent group-[.active]:bg-custom-500 dark:group-[.active]:bg-custom-500 group-[.active]:text-white dark:group-[.active]:text-white hover:text-custom-500 dark:hover:text-custom-500 active:text-custom-500 dark:active:text-custom-500 -mb-[1px]"><i data-lucide="settings" class="inline-block align-middle size-4 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">Settings</span></a>
                                </li>
                            </ul>
                            <p class="mb-4 text-slate-500 dark:text-zink-200">Suggestion Pages</p>
                            <ul class="flex flex-col gap-4">
                                <li>
                                    <a href="#!" class="flex gap-3">
                                        <img src="{{ asset('assets/images/adwords.png') }}" alt="" class="h-5">
                                        <h6>Harmonious Team</h6>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!" class="flex gap-3">
                                        <img src="data:image/png;base64,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" alt="" class="h-5">
                                        <h6>Twitter</h6>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!" class="flex gap-3">
                                        <img src="assets/images/meta.png" alt="" class="h-5">
                                        <h6>Design Stack</h6>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!" class="flex gap-3">
                                        <img src="data:image/png;base64,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" alt="" class="h-5">
                                        <h6>UI / UX Community</h6>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div><!--end card-->
                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-4 text-15">Active Friends</h6>
                            <div class="flex flex-wrap items-center gap-3">
                                <a href="#!" class="relative">
                                    <img src="{{ asset('assets/images/avatar-2.png') }}" alt="" class="h-10 border rounded-full border-slate-200 dark:border-zink-500">
                                    <span class="top-0 ltr:right-0 rtl:left-0 absolute  size-2.5 bg-green-400 border-2 border-white dark:border-zink-700 rounded-full"></span>
                                </a>
                                <a href="#!" class="relative">
                                    <img src="{{ asset('assets/images/avatar-3.png') }}" alt="" class="h-10 border rounded-full border-slate-200 dark:border-zink-500">
                                    <span class="top-0 ltr:right-0 rtl:left-0 absolute  size-2.5 bg-green-400 border-2 border-white dark:border-zink-700 rounded-full"></span>
                                </a>
                                <a href="#!" class="relative">
                                    <img src="{{ asset('assets/images/avatar-4.png') }}" alt="" class="h-10 border rounded-full border-slate-200 dark:border-zink-500">
                                    <span class="top-0 ltr:right-0 rtl:left-0 absolute  size-2.5 bg-green-400 border-2 border-white dark:border-zink-700 rounded-full"></span>
                                </a>
                                <a href="#!" class="relative">
                                    <img src="{{ asset('assets/images/avatar-5.png') }}" alt="" class="h-10 border rounded-full border-slate-200 dark:border-zink-500">
                                    <span class="top-0 ltr:right-0 rtl:left-0 absolute  size-2.5 bg-green-400 border-2 border-white dark:border-zink-700 rounded-full"></span>
                                </a>
                                <a href="#!" class="relative">
                                    <img src="{{ asset('assets/images/avatar-6.png') }}" alt="" class="h-10 border rounded-full border-slate-200 dark:border-zink-500">
                                    <span class="top-0 ltr:right-0 rtl:left-0 absolute  size-2.5 bg-green-400 border-2 border-white dark:border-zink-700 rounded-full"></span>
                                </a>
                                <a href="#!" class="relative">
                                    <img src="{{ asset('assets/images/avatar-7.png') }}" alt="" class="h-10 border rounded-full border-slate-200 dark:border-zink-500">
                                    <span class="top-0 ltr:right-0 rtl:left-0 absolute  size-2.5 bg-green-400 border-2 border-white dark:border-zink-700 rounded-full"></span>
                                </a>
                                <a href="#!" class="relative">
                                    <img src="{{ asset('assets/images/avatar-8.png') }}" alt="" class="h-10 border rounded-full border-slate-200 dark:border-zink-500">
                                    <span class="top-0 ltr:right-0 rtl:left-0 absolute  size-2.5 bg-green-400 border-2 border-white dark:border-zink-700 rounded-full"></span>
                                </a>
                                <a href="#!" class="relative">
                                    <img src="{{ asset('assets/images/avatar-9.png') }}" alt="" class="h-10 border rounded-full border-slate-200 dark:border-zink-500">
                                    <span class="top-0 ltr:right-0 rtl:left-0 absolute  size-2.5 bg-green-400 border-2 border-white dark:border-zink-700 rounded-full"></span>
                                </a>
                                <a href="#!" class="relative">
                                    <img src="{{ asset('assets/images/avatar-10.png') }}" alt="" class="h-10 border rounded-full border-slate-200 dark:border-zink-500">
                                    <span class="top-0 ltr:right-0 rtl:left-0 absolute  size-2.5 bg-green-400 border-2 border-white dark:border-zink-700 rounded-full"></span>
                                </a>
                                <a href="#!" class="relative flex items-center justify-center rounded-full size-10 bg-custom-100 text-custom-500 dark:bg-custom-500/20">
                                    5+
                                </a>
                            </div>
                        </div>
                    </div><!--end card-->
                </div><!--end-->
                <div class="col-span-12 lg:col-span-7 xl:col-span-9 2xl:col-span-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="w-full" data-simplebar="">
                                <div class="flex gap-4">
                                    <a href="#inline-example" class="block w-20 px-1 py-2 group highlight-story active" data-glightbox="max-width: 28rem;">
                                        <div class="size-16 mx-auto rounded-full bg-pink-100 dark:bg-pink-500/20 outline-1 outline outline-slate-200 outline-offset-[3px] dark:outline-zink-500 group-[.active]:outline-custom-500 dark:group-[.active]:outline-custom-700 relative">
                                            <img src="{{ asset('assets/images/avatar-1.png') }}" alt="" class="rounded-full size-16">
                                            <div class="absolute flex items-center justify-center size-5 text-white rounded-full ltr:-right-0.5 rtl:-left-0.5 -bottom-0.5 bg-sky-500">
                                                <i data-lucide="plus" class="size-4"></i>
                                            </div>
                                        </div>
                                        <h6 class="mt-2 font-normal truncate">Your story</h6>
                                    </a>

                                    <a href="#inline-example" class="block w-20 px-1 py-2 group highlight-story active" data-glightbox="max-width: 28rem;">
                                        <div class="size-16 mx-auto rounded-full bg-sky-100 dark:bg-sky-500/20 outline-1 outline outline-slate-200 outline-offset-[3px] dark:outline-zink-500 group-[.active]:outline-custom-500 dark:group-[.active]:outline-custom-700 relative">
                                            <img src="{{ asset('assets/images/avatar-2.png') }}" alt="" class="rounded-full size-16">
                                        </div>
                                        <h6 class="mt-2 font-normal truncate"> @zaria_muller</h6>
                                    </a>

                                    <a href="#inline-example" class="block w-20 px-1 py-2 group highlight-story active" data-glightbox="max-width: 28rem;">
                                        <div class="size-16 mx-auto rounded-full bg-slate-100 dark:bg-zink-600 outline-1 outline outline-slate-200 outline-offset-[3px] dark:outline-zink-500 group-[.active]:outline-custom-500 dark:group-[.active]:outline-custom-700 relative">
                                            <img src="{{ asset('assets/images/avatar-3.png') }}" alt="" class="rounded-full size-16">
                                        </div>
                                        <h6 class="mt-2 font-normal truncate"> @christina</h6>
                                    </a>

                                    <a href="#inline-example" class="block w-20 px-1 py-2 group highlight-story active" data-glightbox="max-width: 28rem;">
                                        <div class="size-16 mx-auto rounded-full bg-yellow-100 dark:bg-yellow-500/20 outline-1 outline outline-slate-200 outline-offset-[3px] dark:outline-zink-500 group-[.active]:outline-custom-500 dark:group-[.active]:outline-custom-700 relative">
                                            <img src="{{ asset('assets/images/avatar-4.png') }}" alt="" class="rounded-full size-16">
                                        </div>
                                        <h6 class="mt-2 font-normal truncate"> @blaze_herzog</h6>
                                    </a>
                                    <a href="#inline-example" class="block w-20 px-1 py-2 group highlight-story active" data-glightbox="max-width: 28rem;">
                                        <div class="size-16 mx-auto rounded-full bg-emerald-100 dark:bg-emerald-500/20 outline-1 outline outline-slate-200 outline-offset-[3px] dark:outline-zink-500 group-[.active]:outline-custom-500 dark:group-[.active]:outline-custom-700 relative">
                                            <img src="{{ asset('assets/images/avatar-5.png') }}" alt="" class="rounded-full size-16">
                                        </div>
                                        <h6 class="mt-2 font-normal truncate">@keon_rippin</h6>
                                    </a>
                                    <a href="#inline-example" class="block w-20 px-1 py-2 group highlight-story active" data-glightbox="max-width: 28rem;">
                                        <div class="size-16 mx-auto rounded-full bg-purple-100 dark:bg-purple-500/20 outline-1 outline outline-slate-200 outline-offset-[3px] dark:outline-zink-500 group-[.active]:outline-custom-500 dark:group-[.active]:outline-custom-700 relative">
                                            <img src="{{ asset('assets/images/avatar-6.png') }}" alt="" class="rounded-full size-16">
                                        </div>
                                        <h6 class="mt-2 font-normal truncate">@niko_watsica</h6>
                                    </a>

                                    <a href="#inline-example" class="block w-20 px-1 py-2 group highlight-story" data-glightbox="max-width: 28rem;">
                                        <div class="size-16 mx-auto rounded-full bg-custom-100 dark:bg-custom-500/20 outline-1 outline outline-slate-200 outline-offset-[3px] dark:outline-zink-500 group-[.active]:outline-custom-500 dark:group-[.active]:outline-custom-700 relative">
                                            <img src="{{ asset('assets/images/avatar-7.png') }}" alt="" class="rounded-full size-16">
                                        </div>
                                        <h6 class="mt-2 font-normal truncate">@genesis</h6>
                                    </a>
                                    <a href="#inline-example" class="block w-20 px-1 py-2 group highlight-story" data-glightbox="max-width: 28rem;">
                                        <div class="size-16 mx-auto rounded-full bg-green-100 dark:bg-green-500/20 outline-1 outline outline-slate-200 outline-offset-[3px] dark:outline-zink-500 group-[.active]:outline-custom-500 dark:group-[.active]:outline-custom-700 relative">
                                            <img src="{{ asset('assets/images/avatar-8.png') }}" alt="" class="rounded-full size-16">
                                        </div>
                                        <h6 class="mt-2 font-normal truncate">@brayan_herman</h6>
                                    </a>
                                    <a href="#inline-example" class="block w-20 px-1 py-2 group highlight-story" data-glightbox="max-width: 28rem;">
                                        <div class="size-16 mx-auto rounded-full bg-purple-100 dark:bg-purple-500/20 outline-1 outline outline-slate-200 outline-offset-[3px] dark:outline-zink-500 group-[.active]:outline-custom-500 dark:group-[.active]:outline-custom-700 relative">
                                            <img src="{{ asset('assets/images/avatar-9.png') }}" alt="" class="rounded-full size-16">
                                        </div>
                                        <h6 class="mt-2 font-normal truncate">@logan</h6>
                                    </a>
                                    <a href="#inline-example" class="block w-20 px-1 py-2 group highlight-story" data-glightbox="max-width: 28rem;">
                                        <div class="size-16 mx-auto rounded-full bg-cyan-100 dark:bg-cyan-500/20 outline-1 outline outline-slate-200 outline-offset-[3px] dark:outline-zink-500 group-[.active]:outline-custom-500 dark:group-[.active]:outline-custom-700 relative">
                                            <img src="{{ asset('assets/images/avatar-10.png') }}" alt="" class="rounded-full size-16">
                                        </div>
                                        <h6 class="mt-2 font-normal truncate">@gerhold</h6>
                                    </a>
                                    <a href="#inline-example" class="block w-20 px-1 py-2 group highlight-story" data-glightbox="max-width: 28rem;">
                                        <div class="size-16 mx-auto rounded-full bg-sky-100 dark:bg-sky-500/20 outline-1 outline outline-slate-200 outline-offset-[3px] dark:outline-zink-500 group-[.active]:outline-custom-500 dark:group-[.active]:outline-custom-700 relative">
                                            <img src="{{ asset('assets/images/avatar-2.png') }}" alt="" class="rounded-full size-16">
                                        </div>
                                        <h6 class="mt-2 font-normal truncate">@fletcher</h6>
                                    </a>
                                    <a href="#inline-example" class="block w-20 px-1 py-2 group highlight-story" data-glightbox="max-width: 28rem;">
                                        <div class="size-16 mx-auto rounded-full bg-sky-100 dark:bg-sky-500/20 outline-1 outline outline-slate-200 outline-offset-[3px] dark:outline-zink-500 group-[.active]:outline-custom-500 dark:group-[.active]:outline-custom-700 relative">
                                            <img src="{{ asset('assets/images/avatar-2.png') }}" alt="" class="rounded-full size-16">
                                        </div>
                                        <h6 class="mt-2 font-normal truncate">@fletcher</h6>
                                    </a>
                                    <a href="#!" class="block w-20 px-1 py-2 group">
                                        <div class="size-16 mx-auto rounded-full bg-slate-100 dark:bg-zink-600 outline-1 outline outline-slate-200 outline-offset-[3px] dark:outline-zink-500 group-[.active]:outline-custom-500 dark:group-[.active]:outline-custom-700">
                                            <img src="{{ asset('assets/images/avatar-3.png') }}" alt="" class="rounded-full size-16">
                                        </div>
                                        <h6 class="mt-2 font-normal truncate">@christina</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div><!--end card-->
                    <div class="card">
                        <div class="card-body">
                            <div class="flex gap-3">
                                <ul class="flex gap-3 grow">
                                    <li>
                                        <a href="#!"><i data-lucide="video" class="inline-block text-red-500 size-4 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle text-slate-500 dark:text-zink-200">Live Video</span></a>
                                    </li>
                                    <li>
                                        <a href="#!" data-modal-target="imagesVideoPostModal"><i data-lucide="image" class="inline-block size-4 ltr:mr-1 text-custom-600 rtl:ml-1"></i> <span class="align-middle text-slate-500 dark:text-zink-200">Image/Video</span></a>
                                    </li>
                                    <li>
                                        <a href="#!" data-modal-target="eventModal"><i data-lucide="calendar-days" class="inline-block text-green-500 size-4 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle text-slate-500 dark:text-zink-200">Event</span></a>
                                    </li>
                                    <li>
                                        <a href="#!"><i data-lucide="at-sign" class="inline-block size-4 ltr:mr-1 text-sky-500 rtl:ml-1"></i> <span class="align-middle text-slate-500 dark:text-zink-200">Mention</span></a>
                                    </li>
                                </ul>
                                <div class="relative dropdown shrink-0">
                                    <button class="flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20" id="socialMediaCreate" data-bs-toggle="dropdown"><i data-lucide="more-horizontal" class="size-3"></i></button>
                                    <ul class="absolute z-50 hidden py-2 mt-1 text-left list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600" aria-labelledby="socialMediaCreate">
                                        <li>
                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200 text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500" href="#!"><i data-lucide="git-pull-request" class="inline-block mr-1 size-3"></i> <span class="align-middle">Create a poll</span></a>
                                        </li>
                                        <li>
                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200 text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500" href="#!"><i data-lucide="messages-square" class="inline-block mr-1 size-3"></i> <span class="align-middle">Ask a question</span></a>
                                        </li>
                                        <li>
                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200 text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500" href="#!"><i data-lucide="help-circle" class="inline-block mr-1 size-3"></i> <span class="align-middle">Help</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <form action="#!">
                                <div class="flex gap-3 mt-4">
                                    <div class="bg-pink-100 rounded-full size-9 shrink-0 dark:bg-pink-500/20">
                                        <img src="{{ asset('assets/images/avatar-1.png') }}" alt="" class="rounded-full size-9">
                                    </div>
                                    <div class="grow">
                                        <textarea class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" id="textArea" placeholder="Share your thoughts ..." rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="mt-4 text-right">
                                    <button type="submit" class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Share Post</button>
                                </div>
                            </form>
                        </div>
                    </div><!--end card-->
                    <div class="card">
                        <div class="card-body">
                            <div class="flex flex-wrap items-center gap-3 mb-5">
                                <div class="size-12 bg-green-100 rounded-full outline-1 outline outline-transparent outline-offset-[3px] [&.active]:outline-custom-500 shrink-0 dark:bg-green-500/20">
                                    <img src="{{ asset('assets/images/avatar-8.png') }}" alt="" class="rounded-full size-12">
                                </div>
                                <div class="grow">
                                    <h6 class="mb-1 text-15"><a href="#!" class="transition-all duration-200 ease-linear hover:text-custom-500 dark:hover:text-custom-500">Frances Zboncak</a> -<small class="ml-1 font-normal text-slate-500 dark:text-zink-200">25 min</small></h6>
                                    <p class="text-slate-500 dark:text-zink-200">Web Developer at <a href="#!" class="underline">StarCode Kh</a></p>
                                </div>
                                <div class="flex items-center gap-2 mt-4 shrink-0 md:mt-4">
                                    <button type="button" class="group/item toggle-button active px-2 py-1.5 text-xs bg-white border-dashed text-sky-500 btn border-sky-500 hover:text-sky-500 hover:bg-sky-50 hover:border-sky-600 focus:text-sky-600 focus:bg-sky-50 focus:border-sky-600 active:text-sky-600 active:bg-sky-50 active:border-sky-600 dark:bg-zink-700 dark:ring-sky-400/20 dark:hover:bg-sky-800/20 dark:focus:bg-sky-800/20 dark:active:bg-sky-800/20">
                                        <span class="group-[.active]/item:hidden block"><i data-lucide="plus" class="inline-block mr-1 size-3"></i> Follow</span>
                                        <span class="group-[.active]/item:block hidden"><i data-lucide="user-x-2" class="inline-block mr-1 size-3"></i> Unfollow</span>
                                    </button>
                                    <div class="relative dropdown">
                                        <button class="dropdown-toggle flex items-center justify-center size-[30px] p-0 bg-white text-sky-500 btn hover:text-sky-500 hover:bg-sky-100 focus:text-sky-500 focus:bg-sky-100 active:text-sky-500 active:bg-sky-100 dark:bg-zink-700 dark:hover:bg-sky-500/10 dark:focus:bg-sky-500/10 dark:active:bg-sky-500/10" id="socialPost1" data-bs-toggle="dropdown"><i data-lucide="more-horizontal" class="size-4"></i></button>
                                        <ul class="absolute z-50 hidden py-2 mt-1 text-left list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600" aria-labelledby="socialPost1">
                                            <li>
                                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200 text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500" href="#!"><i data-lucide="git-pull-request" class="inline-block mr-1 size-3"></i> <span class="align-middle">Create a poll</span></a>
                                            </li>
                                            <li>
                                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200 text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500" href="#!"><i data-lucide="messages-square" class="inline-block mr-1 size-3"></i> <span class="align-middle">Ask a question</span></a>
                                            </li>
                                            <li>
                                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200 text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500" href="#!"><i data-lucide="help-circle" class="inline-block mr-1 size-3"></i> <span class="align-middle">Help</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <p>Our newly established office serves as a clear representation of our unwavering commitment to nurturing a vibrant and dynamic work atmosphere, where innovation thrives and creativity knows no bounds.</p>
                        </div>
                        <div class="border-y border-slate-200 card-body dark:border-zink-500">
                            <ul class="flex items-center gap-4 mb-0">
                                <li>
                                    <a href="#!" class="text-slate-500 dark:text-zink-200"><i data-lucide="messages-square" class="inline-block size-4 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">48 Comments</span></a>
                                </li>
                                <li>
                                    <a href="#!" class="text-slate-500 dark:text-zink-200"><i data-lucide="heart" class="inline-block size-4 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">257 Likes</span></a>
                                </li>
                                <li>
                                    <a href="#!" class="text-slate-500 dark:text-zink-200"><i data-lucide="send" class="inline-block size-4 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">13 Share</span></a>
                                </li>
                                <li class="ltr:ml-auto rtl:mr-auto">
                                    <a href="#!" class="text-slate-500 dark:text-zink-200"><i data-lucide="bookmark" class="inline-block size-4 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">7</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <form action="#!">
                                <div class="flex gap-3">
                                    <div class="bg-pink-100 rounded-full size-9 shrink-0 dark:bg-pink-500/20">
                                        <img src="{{ asset('assets/images/avatar-1.png') }}" alt="" class="rounded-full size-9">
                                    </div>
                                    <div class="grow">
                                        <input type="text" id="commentInput" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Write your comment ...">
                                    </div>
                                    <div class="shrink-0">
                                        <button type="submit" class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Send</button>
                                    </div>
                                </div>
                            </form>

                            <div class="mt-5">
                                <div class="flex gap-3">
                                    <div class="bg-yellow-100 rounded-full size-9 shrink-0 dark:bg-yellow-500/20">
                                        <img src="{{ asset('assets/images/avatar-5.png') }}" alt="" class="rounded-full size-9">
                                    </div>
                                    <div class="grow">
                                        <div class="p-3 rounded-md bg-slate-100 dark:bg-zink-600">
                                            <h6 class="mb-3 text-15"><a href="#!">@bertha34</a> - <span class="text-sm font-normal text-slate-500 dark:text-zink-200">14 June, 2023</span></h6>
                                            <p>Do you have a date or timeline when do you release the Laravel + Vite + Jetstream + Pest + Vue (Full Stack) version of this item ?</p>
                                            <div class="flex items-center gap-2 mt-4">
                                                <a href="#!" class="px-2.5 py-0.5 text-xs font-medium rounded border bg-white border-slate-200 text-slate-500 transition hover:bg-slate-200 dark:text-zink-200 dark:bg-slate-700 dark:border-zink-500">Like (3)</a>
                                                <a href="#!" class="px-2.5 py-0.5 text-xs font-medium rounded border bg-white border-slate-200 text-slate-500 transition hover:bg-slate-200 dark:text-zink-200 dark:bg-slate-700 dark:border-zink-500">Reply</a>
                                            </div>
                                        </div>
                                        <div class="flex gap-3 mt-4">
                                            <div class="bg-green-100 rounded-full size-9 shrink-0 dark:bg-green-500/20">
                                                <img src="{{ asset('assets/images/avatar-8.png') }}" alt="" class="rounded-full size-9">
                                            </div>
                                            <div class="grow">
                                                <div class="p-3 rounded-md bg-slate-100 dark:bg-zink-600">
                                                    <h6 class="mb-3 text-15"><a href="#!">@frances_zboncak</a> - <span class="text-sm font-normal text-slate-500 dark:text-zink-200">14 June, 2023</span></h6>
                                                    <p class="mb-1">Sorry not at the moment. But Laravel + Interia + Vue will be ready next week hopefully. FYI: There will be no backend-related functionality with this template.</p>
                                                    <p>Thank you</p>
                                                    <div class="flex items-center gap-2 mt-4">
                                                        <a href="#!" class="px-2.5 py-0.5 text-xs font-medium rounded border bg-white border-slate-200 text-slate-500 transition hover:bg-slate-200 dark:text-zink-200 dark:bg-slate-700 dark:border-zink-500">Like (6)</a>
                                                        <a href="#!" class="px-2.5 py-0.5 text-xs font-medium rounded border bg-white border-slate-200 text-slate-500 transition hover:bg-slate-200 dark:text-zink-200 dark:bg-slate-700 dark:border-zink-500">Reply</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--end card-->
                    <div class="card">
                        <div class="card-body">
                            <div class="flex flex-wrap items-center gap-3 mb-5">
                                <div class="size-12 bg-green-100 rounded-full outline-1 outline outline-transparent outline-offset-[3px] [&.active]:outline-custom-500 shrink-0 dark:bg-green=500/20">
                                    <img src="{{ asset('assets/images/avatar-7.png') }}" alt="" class="rounded-full size-12">
                                </div>
                                <div class="grow">
                                    <h6 class="mb-1 text-15"><a href="#!" class="transition-all duration-200 ease-linear hover:text-custom-500 dark:hover:text-custom-500">Stephen Tillman</a> -<small class="ml-1 font-normal text-slate-500 dark:text-zink-200">25 min</small></h6>
                                    <p class="text-slate-500 dark:text-zink-200">React Developer at <a href="#!" class="underline">Webfox Info</a></p>
                                </div>
                                <div class="flex flex-wrap items-center mt-4 shrink-0 md:mt-4">
                                    <button type="button" class="group/item toggle-button active px-2 py-1.5 text-xs bg-white border-dashed text-sky-500 btn border-sky-500 hover:text-sky-500 hover:bg-sky-50 hover:border-sky-600 focus:text-sky-600 focus:bg-sky-50 focus:border-sky-600 active:text-sky-600 active:bg-sky-50 active:border-sky-600 dark:bg-zink-700 dark:ring-sky-400/20 dark:hover:bg-sky-800/20 dark:focus:bg-sky-800/20 dark:active:bg-sky-800/20">
                                        <span class="group-[.active]/item:hidden block"><i data-lucide="plus" class="inline-block mr-1 size-3"></i> Follow</span>
                                        <span class="group-[.active]/item:block hidden"><i data-lucide="user-x-2" class="inline-block mr-1 size-3"></i> Unfollow</span>
                                    </button>
                                    <div class="relative dropdown">
                                        <button class="dropdown-toggle flex items-center justify-center size-[30px] p-0 bg-white text-sky-500 btn hover:text-sky-500 hover:bg-sky-100 focus:text-sky-500 focus:bg-sky-100 active:text-sky-500 active:bg-sky-100 dark:bg-zink-700 dark:hover:bg-sky-500/10 dark:focus:bg-sky-500/10 dark:active:bg-sky-500/10" id="socialPost2" data-bs-toggle="dropdown"><i data-lucide="more-horizontal" class="size-4"></i></button>
                                        <ul class="absolute z-50 hidden py-2 mt-1 text-left list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600" aria-labelledby="socialPost2">
                                            <li>
                                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!"><i data-lucide="git-pull-request" class="inline-block mr-1 size-3"></i> <span class="align-middle">Create a poll</span></a>
                                            </li>
                                            <li>
                                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!"><i data-lucide="messages-square" class="inline-block mr-1 size-3"></i> <span class="align-middle">Ask a question</span></a>
                                            </li>
                                            <li>
                                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!"><i data-lucide="help-circle" class="inline-block mr-1 size-3"></i> <span class="align-middle">Help</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <p>Product design is the process of developing a usable product that meets customer's needs by defining the users' problems and finding creative solutions for these problems. The term is also used to refer to the result of this process, the design qualities of an existing product.</p>
                            <div class="grid gap-4 mt-4 md:grid-cols-3">
                                <a href="{{ asset('assets/images/small/img-6.jpg') }}" class="highlight-story">
                                    <img src="{{ asset('assets/images/img-6.jpg') }}" alt="" class="rounded-md">
                                </a>
                                <a href="{{ asset('assets/images/small/img-3.jpg') }}" class="highlight-story">
                                    <img src="{{ asset('assets/images/img-3.jpg') }}" alt="" class="rounded-md">
                                </a>
                                <a href="{{ asset('assets/images/small/img-3.jpg') }}" class="highlight-story">
                                    <img src="{{ asset('assets/images/img-5.jpg') }}" alt="" class="rounded-md">
                                </a>
                            </div>
                        </div>
                        <div class="border-y border-slate-200 card-body dark:border-zink-500">
                            <ul class="flex items-center gap-4 mb-0">
                                <li>
                                    <a href="#!" class="text-slate-500 dark:text-zink-200"><i data-lucide="messages-square" class="inline-block size-4 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">224 Comments</span></a>
                                </li>
                                <li>
                                    <a href="#!" class="text-slate-500 dark:text-zink-200"><i data-lucide="heart" class="inline-block size-4 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">746 Likes</span></a>
                                </li>
                                <li>
                                    <a href="#!" class="text-slate-500 dark:text-zink-200"><i data-lucide="send" class="inline-block size-4 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">47 Share</span></a>
                                </li>
                                <li class="ltr:ml-auto rtl:mr-auto">
                                    <a href="#!" class="text-slate-500 dark:text-zink-200"><i data-lucide="bookmark" class="inline-block size-4 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">139</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <form action="#!">
                                <div class="flex gap-3">
                                    <div class="bg-pink-100 rounded-full size-9 shrink-0 dark:bg-pink-500/20">
                                        <img src="{{ asset('assets/images/avatar-1.png') }}" alt="" class="rounded-full size-9">
                                    </div>
                                    <div class="grow">
                                        <input type="text" id="commentInput" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Write your comment ...">
                                    </div>
                                    <div class="shrink-0">
                                        <button type="submit" class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div><!--end card-->
                    <div class="card">
                        <div class="card-body">
                            <div class="flex flex-wrap items-center gap-3 mb-5">
                                <div class="size-12 bg-green-100 rounded-full outline-1 outline outline-transparent outline-offset-[3px] [&.active]:outline-custom-500 shrink-0 dark:bg-green-500/20">
                                    <img src="{{ asset('assets/images/avatar-7.png') }}" alt="" class="rounded-full size-12">
                                </div>
                                <div class="grow">
                                    <h6 class="mb-1 text-15"><a href="#!" class="transition-all duration-200 ease-linear hover:text-custom-500 dark:hover:text-custom-500">Stephen Tillman</a> -<small class="ml-1 font-normal text-slate-500 dark:text-zink-200">25 min</small></h6>
                                    <p class="text-slate-500 dark:text-zink-200">React Developer at <a href="#!" class="underline">Webfox Info</a></p>
                                </div>
                                <div class="flex items-center gap-2 mt-4 shrink-0 md:mt-4">
                                    <button type="button" class="group/item toggle-button active px-2 py-1.5 text-xs bg-white border-dashed text-sky-500 btn border-sky-500 hover:text-sky-500 hover:bg-sky-50 hover:border-sky-600 focus:text-sky-600 focus:bg-sky-50 focus:border-sky-600 active:text-sky-600 active:bg-sky-50 active:border-sky-600 dark:bg-zink-700 dark:ring-sky-400/20 dark:hover:bg-sky-800/20 dark:focus:bg-sky-800/20 dark:active:bg-sky-800/20">
                                        <span class="group-[.active]/item:hidden block"><i data-lucide="plus" class="inline-block mr-1 size-3"></i> Follow</span>
                                        <span class="group-[.active]/item:block hidden"><i data-lucide="user-x-2" class="inline-block mr-1 size-3"></i> Unfollow</span>
                                    </button>
                                    <div class="relative dropdown">
                                        <button class="dropdown-toggle flex items-center justify-center size-[30px] p-0 bg-white text-sky-500 btn hover:text-sky-500 hover:bg-sky-100 focus:text-sky-500 focus:bg-sky-100 active:text-sky-500 active:bg-sky-100 dark:bg-zink-700 dark:hover:bg-sky-500/10 dark:focus:bg-sky-500/10 dark:active:bg-sky-500/10" id="socialPost3" data-bs-toggle="dropdown"><i data-lucide="more-horizontal" class="size-4"></i></button>
                                        <ul class="absolute z-50 hidden py-2 mt-1 text-left list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600" aria-labelledby="socialPost3">
                                            <li>
                                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!"><i data-lucide="git-pull-request" class="inline-block mr-1 size-3"></i> <span class="align-middle">Create a poll</span></a>
                                            </li>
                                            <li>
                                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!"><i data-lucide="messages-square" class="inline-block mr-1 size-3"></i> <span class="align-middle">Ask a question</span></a>
                                            </li>
                                            <li>
                                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!"><i data-lucide="help-circle" class="inline-block mr-1 size-3"></i> <span class="align-middle">Help</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <p>Add a 'Different Languages' option to the poll.</p>
                            <ul class="inline-flex flex-col gap-3 p-4 mt-4 rounded-md w-80 bg-slate-100 max-w-7xl dark:bg-zink-600">
                                <li>
                                    <a href="#!" class="relative flex gap-4 group active">
                                        <div class="absolute top-1 ltr:right-1 rtl:left-1">
                                            <i data-lucide="check-circle" class="size-4 text-green-500 fill-green-200 dark:fill-green-500/20 group-[&.active]:block hidden"></i>
                                        </div>
                                        <h6 class="shrink-0">1.</h6>
                                        <div class="grow">
                                            <h6 href="#!">React Js</h6>
                                            <div class="w-full h-1.5 rounded-full bg-white dark:bg-zink-700 mt-2">
                                                <div class="h-1.5 rounded-full bg-custom-500" style="width: 75%"></div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!" class="relative flex gap-3 group">
                                        <div class="absolute top-1 ltr:right-1 rtl:left-1">
                                            <i data-lucide="check-circle" class="size-4 text-green-500 fill-green-200 group-[&.active]:block hidden"></i>
                                        </div>
                                        <h6 class="shrink-0">2.</h6>
                                        <div class="grow">
                                            <h6 href="#!">Laravel</h6>
                                            <div class="w-full h-1.5 rounded-full bg-white dark:bg-zink-700 mt-2">
                                                <div class="h-1.5 rounded-full bg-custom-500" style="width: 41%"></div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!" class="relative flex gap-3 group">
                                        <div class="absolute top-1 ltr:right-1 rtl:left-1">
                                            <i data-lucide="check-circle" class="size-4 text-green-500 fill-green-200 group-[&.active]:block hidden"></i>
                                        </div>
                                        <h6 class="shrink-0">3.</h6>
                                        <div class="grow">
                                            <h6 href="#!">ASP.Net / MVC.Net</h6>
                                            <div class="w-full h-1.5 rounded-full bg-white dark:bg-zink-700 mt-2">
                                                <div class="h-1.5 rounded-full bg-custom-500" style="width: 63%"></div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="border-y border-slate-200 card-body dark:border-zink-500">
                            <ul class="flex items-center gap-4 mb-0">
                                <li>
                                    <a href="#!" class="text-slate-500 dark:text-zink-200"><i data-lucide="messages-square" class="inline-block size-4 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">495 Comments</span></a>
                                </li>
                                <li>
                                    <a href="#!" class="text-slate-500 dark:text-zink-200"><i data-lucide="heart" class="inline-block size-4 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">1.3k Likes</span></a>
                                </li>
                                <li>
                                    <a href="#!" class="text-slate-500 dark:text-zink-200"><i data-lucide="send" class="inline-block size-4 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">203 Share</span></a>
                                </li>
                                <li class="ltr:ml-auto rtl:mr-auto">
                                    <a href="#!" class="text-slate-500 dark:text-zink-200"><i data-lucide="bookmark" class="inline-block size-4 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">159</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <form action="#!">
                                <div class="flex gap-3">
                                    <div class="bg-pink-100 rounded-full size-9 shrink-0 dark:bg-pink-500/20">
                                        <img src="{{ asset('assets/images/avatar-1.png') }}" alt="" class="rounded-full size-9">
                                    </div>
                                    <div class="grow">
                                        <input type="text" id="commentInput" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Write your comment ...">
                                    </div>
                                    <div class="shrink-0">
                                        <button type="submit" class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div><!--end card-->
                    <div class="flex justify-center mb-5">
                        <button type="button" class="flex items-center text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">
                            <svg class="size-4 ltr:mr-2 rtl:ml-2 animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewbox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                            Load More
                        </button>
                    </div>
                </div><!--end-->
                <div class="col-span-12 lg:hidden xl:col-span-3 2xl:block shrink-0">
                    <div class="card" id="messageList">
                        <div class="card-body">
                            <div class="flex items-center gap-3">
                                <h6 class="mb-0 grow text-15">Message <span class="inline-flex items-center justify-center w-6 h-6 text-xs font-medium border rounded rtl:mr-1 ltr:ml-1 bg-custom-100 border-custom-100 text-custom-500 dark:bg-custom-400/20 dark:border-transparent">15</span></h6>
                                <div class="shrink-0">
                                    <a href="#!" class="underline text-custom-500">Requests(2)</a>
                                </div>
                            </div>
                            <div class="relative mt-3">
                                <input type="text" class="ltr:pl-8 rtl:pr-8 search form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Search for ..." autocomplete="off">
                                <i data-lucide="search" class="inline-block size-4 absolute ltr:left-2.5 rtl:right-2.5 top-2.5 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-600"></i>
                            </div>
                            <div class="js-read-smore" data-read-smore-words="15">
                                <ul class="flex flex-col gap-3 mt-5 list">
                                    <li>
                                        <a href="#!" class="flex items-center gap-3 transition-all duration-150 ease-linear group/items">
                                            <div class="relative rounded-full w-7 h-7 bg-slate-100 dark:bg-zink-600">
                                                <img src="{{ asset('assets/images/avatar-3.png') }}" alt="" class="rounded-full h-7">
                                                <span class="bottom-0 ltr:right-0 rtl:left-0 absolute size-2.5 bg-green-400 border-2 border-white dark:border-zink-500 rounded-full"></span>
                                            </div>
                                            <h6 class="transition-all duration-150 ease-linear group-hover/items:text-custom-500 user-name">Louisa Howe</h6>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!" class="flex items-center gap-3 transition-all duration-150 ease-linear group/items">
                                            <div class="relative rounded-full w-7 h-7 bg-slate-100 dark:bg-zink-600">
                                                <img src="{{ asset('assets/images/avatar-4.png') }}" alt="" class="rounded-full h-7">
                                                <span class="bottom-0 ltr:right-0 rtl:left-0 absolute size-2.5 bg-green-400 border-2 border-white dark:border-zink-500 rounded-full"></span>
                                            </div>
                                            <h6 class="transition-all duration-150 ease-linear group-hover/items:text-custom-500 user-name">Everett Moore</h6>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!" class="flex items-center gap-3 transition-all duration-150 ease-linear group/items">
                                            <div class="relative rounded-full w-7 h-7 bg-slate-100 dark:bg-zink-600">
                                                <img src="{{ asset('assets/images/avatar-5.png') }}" alt="" class="rounded-full h-7">
                                                <span class="bottom-0 ltr:right-0 rtl:left-0 absolute size-2.5 bg-green-400 border-2 border-white dark:border-zink-500 rounded-full"></span>
                                            </div>
                                            <h6 class="transition-all duration-150 ease-linear group-hover/items:text-custom-500 user-name">Omari Welch</h6>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!" class="flex items-center gap-3 transition-all duration-150 ease-linear group/items">
                                            <div class="relative rounded-full w-7 h-7 bg-slate-100 dark:bg-zink-600">
                                                <img src="{{ asset('assets/images/avatar-6.png') }}" alt="" class="rounded-full h-7">
                                                <span class="bottom-0 ltr:right-0 rtl:left-0 absolute size-2.5 bg-green-400 border-2 border-white dark:border-zink-500 rounded-full"></span>
                                            </div>
                                            <h6 class="transition-all duration-150 ease-linear group-hover/items:text-custom-500 user-name">Paul Gerhold</h6>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!" class="flex items-center gap-3 transition-all duration-150 ease-linear group/items">
                                            <div class="relative rounded-full w-7 h-7 bg-slate-100 dark:bg-zink-600">
                                                <img src="{{ asset('assets/images/avatar-7.png') }}" alt="" class="rounded-full h-7">
                                                <span class="bottom-0 ltr:right-0 rtl:left-0 absolute size-2.5 bg-green-400 border-2 border-white dark:border-zink-500 rounded-full"></span>
                                            </div>
                                            <h6 class="transition-all duration-150 ease-linear group-hover/items:text-custom-500 user-name">Green Langworth</h6>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!" class="flex items-center gap-3 transition-all duration-150 ease-linear group/items">
                                            <div class="relative rounded-full w-7 h-7 bg-slate-100 dark:bg-zink-600">
                                                <img src="{{ asset('assets/images/avatar-8.png') }}" alt="" class="rounded-full h-7">
                                                <span class="bottom-0 ltr:right-0 rtl:left-0 absolute size-2.5 bg-red-400 border-2 border-white dark:border-zink-500 rounded-full"></span>
                                            </div>
                                            <h6 class="transition-all duration-150 ease-linear group-hover/items:text-custom-500 user-name">Lucie Beahan</h6>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!" class="flex items-center gap-3 transition-all duration-150 ease-linear group/items">
                                            <div class="relative rounded-full w-7 h-7 bg-slate-100 dark:bg-zink-600">
                                                <img src="{{ asset('assets/images/avatar-9.png') }}" alt="" class="rounded-full h-7">
                                                <span class="bottom-0 ltr:right-0 rtl:left-0 absolute size-2.5 bg-red-400 border-2 border-white dark:border-zink-500 rounded-full"></span>
                                            </div>
                                            <h6 class="transition-all duration-150 ease-linear group-hover/items:text-custom-500 user-name">Susana Dooley</h6>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div><!--end card-->
                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-4 text-15">Popular Events</h6>
                            <ul class="flex flex-col gap-4 mt-5">
                                <li>
                                    <a href="#!" class="flex items-center gap-3 transition-all duration-150 ease-linear group/items">
                                        <div>
                                            <img src="{{ asset('assets/images/app-store.png') }}" alt="" class="h-6 rounded-full">
                                        </div>
                                        <h6 class="transition-all duration-150 ease-linear group-hover/items:text-custom-500">Music Festivals</h6>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!" class="flex items-center gap-3 transition-all duration-150 ease-linear group/items">
                                        <div>
                                            <img src="data:image/png;base64,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" alt="" class="h-6 rounded-full">
                                        </div>
                                        <h6 class="transition-all duration-150 ease-linear group-hover/items:text-custom-500">Conferences and Seminars</h6>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!" class="flex items-center gap-3 transition-all duration-150 ease-linear group/items">
                                        <div>
                                            <img src="data:image/png;base64,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" alt="" class="h-6 rounded-full">
                                        </div>
                                        <h6 class="transition-all duration-150 ease-linear group-hover/items:text-custom-500">Business Networking Events</h6>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!" class="flex items-center gap-3 transition-all duration-150 ease-linear group/items">
                                        <div>
                                            <img src="{{ asset('assets/images/slack.png') }}" alt="" class="h-6 rounded-full">
                                        </div>
                                        <h6 class="transition-all duration-150 ease-linear group-hover/items:text-custom-500">Award Ceremonies</h6>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div><!--end card-->
                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-4 text-15">Upcoming Birthday</h6>
                            <ul class="flex flex-col gap-3 mt-5">
                                <li>
                                    <a href="#!" class="flex items-center gap-3 transition-all duration-150 ease-linear group/items">
                                        <div class="relative rounded-full size-9 bg-slate-100 dark:bg-zink-600">
                                            <img src="assets/images/avatar-3.png" alt="" class="rounded-full h-9">
                                            <span class="bottom-0 ltr:right-0 rtl:left-0 absolute size-2.5 bg-green-400 border-2 border-white dark:border-zink-500 rounded-full"></span>
                                        </div>
                                        <div class="grow">
                                            <h6 class="mb-1 transition-all duration-150 ease-linear group-hover/items:text-custom-500">Louisa Howe</h6>
                                            <p class="text-slate-500">Today</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!" class="flex items-center gap-3 transition-all duration-150 ease-linear group/items">
                                        <div class="relative rounded-full size-9 bg-slate-100 dark:bg-zink-600">
                                            <img src="{{ asset('assets/images/avatar-4.png') }}" alt="" class="rounded-full h-9">
                                            <span class="bottom-0 ltr:right-0 rtl:left-0 absolute size-2.5 bg-green-400 border-2 border-white dark:border-zink-500 rounded-full"></span>
                                        </div>
                                        <div class="grow">
                                            <h6 class="mb-1 transition-all duration-150 ease-linear group-hover/items:text-custom-500">Everett Moore</h6>
                                            <p class="text-slate-500">Tomorrow</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!" class="flex items-center gap-3 transition-all duration-150 ease-linear group/items">
                                        <div class="relative rounded-full size-9 bg-slate-100 dark:bg-zink-600">
                                            <img src="{{ asset('assets/images/avatar-5.png') }}" alt="" class="rounded-full h-9">
                                            <span class="bottom-0 ltr:right-0 rtl:left-0 absolute size-2.5 bg-green-400 border-2 border-white dark:border-zink-500 rounded-full"></span>
                                        </div>
                                        <div class="grow">
                                            <h6 class="mb-1 transition-all duration-150 ease-linear group-hover/items:text-custom-500">Omari Welch</h6>
                                            <p class="text-slate-500">13 Nov</p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!" class="flex items-center gap-3 transition-all duration-150 ease-linear group/items">
                                        <div class="relative rounded-full size-9 bg-slate-100 dark:bg-zink-600">
                                            <img src="{{ asset('assets/images/avatar-6.png') }}" alt="" class="rounded-full h-9">
                                            <span class="bottom-0 ltr:right-0 rtl:left-0 absolute size-2.5 bg-green-400 border-2 border-white dark:border-zink-500 rounded-full"></span>
                                        </div>
                                        <div class="grow">
                                            <h6 class="mb-1 transition-all duration-150 ease-linear group-hover/items:text-custom-500">Paul Gerhold</h6>
                                            <p class="text-slate-500">14 Nov</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div><!--end card-->
                </div><!--end-->
            </div><!--end-->

        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
@section('script')
    <script src="{{ asset('assets/js/pages/apps-dashboards-social.init.js') }}"></script>
@endsection
@endsection

