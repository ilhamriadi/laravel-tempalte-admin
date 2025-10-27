@extends('layouts.master')

@section('content')
    <!-- Page-content -->
    <div class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
        <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">
            
            <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
                <div class="grow">
                    <h5 class="text-16">Sellers</h5>
                </div>
                <ul class="flex items-center gap-2 text-sm font-normal shrink-0">
                    <li class="relative before:content-['\ea54'] before:font-remix ltr:before:-right-1 rtl:before:-left-1  before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-slate-400 dark:text-zink-200">
                        <a href="#!" class="text-slate-400 dark:text-zink-200">Ecommerce</a>
                    </li>
                    <li class="text-slate-700 dark:text-zink-100">
                        Sellers
                    </li>
                </ul>
            </div>
            <form action="#!" class="mb-5">
                <div class="grid grid-cols-1 gap-5 lg:grid-cols-12">
                    <div class="relative lg:col-span-3">
                        <input type="text" class="ltr:pl-8 rtl:pr-8 search form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Search for ..." autocomplete="off">
                        <i data-lucide="search" class="inline-block size-4 absolute ltr:left-2.5 rtl:right-2.5 top-2.5 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-600"></i>
                    </div><!--end col-->
                    <div class="ltr:lg:text-right rtl:lg:text-left lg:col-span-3 lg:col-start-10">
                        <button data-modal-target="addSellerModal" type="button" class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20"><i data-lucide="plus" class="inline-block size-4"></i> <span class="align-middle">Add Seller</span></button>
                    </div><!--end col-->
                </div><!--end grid-->
            </form>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-12 gap-x-5">
                <div class="2xl:col-span-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="flex items-center gap-2 mb-4">
                                <div class="grow">
                                    <a href="#!" class="group/item toggle-button"><i data-lucide="heart" class="size-5 text-slate-500 dark:text-zink-200 fill-slate-200 dark:fill-zink-500 transition-all duration-150 ease-linear group-[.active]/item:text-yellow-500 dark:group-[.active]/item:text-yellow-500 group-[.active]/item:fill-yellow-200 dark:group-[.active]/item:fill-yellow-500/20 group-hover/item:text-yellow-500 dark:group-hover/item:text-yellow-500 group-hover/item:fill-yellow-200 dark:group-hover/item:fill-yellow-500/20"></i></a>
                                </div>
                                <div class="relative dropdown shrink-0">
                                    <button id="sellersAction1" data-bs-toggle="dropdown" class="flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"><i data-lucide="more-horizontal" class="size-3"></i></button>
                                    <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600" aria-labelledby="sellersAction1">
                                        <li>
                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!"><i data-lucide="eye" class="inline-block mr-1 size-3"></i> <span class="align-middle">Overview</span></a>
                                        </li>
                                        <li>
                                            <a data-modal-target="addSellerModal" class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!"><i data-lucide="file-edit" class="inline-block mr-1 size-3"></i> <span class="align-middle">Edit</span></a>
                                        </li>
                                        <li>
                                            <a data-modal-target="deleteModal" class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!"><i data-lucide="trash-2" class="inline-block mr-1 size-3"></i> <span class="align-middle">Delete</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="flex items-center justify-center mx-auto rounded-full size-16 bg-slate-100 outline outline-slate-100 outline-offset-1 dark:bg-zink-600 dark:outline-zink-600">
                                <img src="{{ asset('assets/images/adwords.png') }}" alt="" class="h-10 rounded-full">
                            </div>

                            <div class="mt-4 mb-6 text-center">
                                <h6 class="text-16"><a href="#!">StarCode Kh</a></h6>
                                <p class="text-slate-500 dark:text-zink-200">StarCode Kh</p>
                            </div>
                            <div class="grid grid-cols-1 gap-5 text-center divide-y md:divide-y-0 md:divide-x sm:grid-cols-3 2xl:grid-cols-12 divide-slate-200 divide-dashed dark:divide-zink-500 rtl:divide-x-reverse">
                                <div class="p-2 2xl:col-span-4">
                                    <h6 class="mb-1">4.5k</h6>
                                    <p class="text-slate-500 dark:text-zink-200">Sales</p>
                                </div><!--end col-->
                                <div class="p-2 2xl:col-span-4">
                                    <h6 class="mb-1">310</h6>
                                    <p class="text-slate-500 dark:text-zink-200">Product</p>
                                </div><!--end col-->
                                <div class="p-2 2xl:col-span-4">
                                    <h6 class="mb-1">$235.3k</h6>
                                    <p class="text-slate-500 dark:text-zink-200">Revenue</p>
                                </div><!--end col-->
                            </div><!--end grid-->
                        </div>
                    </div><!--end card-->
                </div><!--end col-->
                <div class="2xl:col-span-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="flex items-center gap-2 mb-4">
                                <div class="grow">
                                    <a href="#!" class="group/item toggle-button active"><i data-lucide="heart" class="size-5 text-slate-500 dark:text-zink-200 fill-slate-200 dark:fill-zink-500 transition-all duration-150 ease-linear group-[.active]/item:text-yellow-500 dark:group-[.active]/item:text-yellow-500 group-[.active]/item:fill-yellow-200 dark:group-[.active]/item:fill-yellow-500/20 group-hover/item:text-yellow-500 dark:group-hover/item:text-yellow-500 group-hover/item:fill-yellow-200 dark:group-hover/item:fill-yellow-500/20"></i></a>
                                </div>
                                <div class="relative dropdown shrink-0">
                                    <button id="sellersAction2" data-bs-toggle="dropdown" class="flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"><i data-lucide="more-horizontal" class="size-3"></i></button>
                                    <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600" aria-labelledby="sellersAction2">
                                        <li>
                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!"><i data-lucide="eye" class="inline-block mr-1 size-3"></i> <span class="align-middle">Overview</span></a>
                                        </li>
                                        <li>
                                            <a data-modal-target="addSellerModal" class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!"><i data-lucide="file-edit" class="inline-block mr-1 size-3"></i> <span class="align-middle">Edit</span></a>
                                        </li>
                                        <li>
                                            <a data-modal-target="deleteModal" class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!"><i data-lucide="trash-2" class="inline-block mr-1 size-3"></i> <span class="align-middle">Delete</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="flex items-center justify-center mx-auto rounded-full size-16 bg-slate-100 outline outline-slate-100 outline-offset-1 dark:bg-zink-600 dark:outline-zink-600">
                                <img src="{{ asset('assets/images/app-store.png') }}" alt="" class="h-10 rounded-full">
                            </div>

                            <div class="mt-4 mb-6 text-center">
                                <h6 class="text-16"><a href="#!">Nazox Fashion</a></h6>
                                <p class="text-slate-500 dark:text-zink-200">Kara Miller</p>
                            </div>
                            <div class="grid grid-cols-1 gap-5 text-center divide-y md:divide-y-0 md:divide-x sm:grid-cols-3 2xl:grid-cols-12 divide-slate-200 divide-dashed dark:divide-zink-500 rtl:divide-x-reverse">
                                <div class="p-2 2xl:col-span-4">
                                    <h6 class="mb-1">2.3k</h6>
                                    <p class="text-slate-500 dark:text-zink-200">Sales</p>
                                </div><!--end col-->
                                <div class="p-2 2xl:col-span-4">
                                    <h6 class="mb-1">67</h6>
                                    <p class="text-slate-500 dark:text-zink-200">Product</p>
                                </div><!--end col-->
                                <div class="p-2 2xl:col-span-4">
                                    <h6 class="mb-1">$152.8k</h6>
                                    <p class="text-slate-500 dark:text-zink-200">Revenue</p>
                                </div><!--end col-->
                            </div><!--end grid-->
                        </div>
                    </div><!--end card-->
                </div><!--end col-->
                <div class="2xl:col-span-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="flex items-center gap-2 mb-4">
                                <div class="grow">
                                    <a href="#!" class="group/item toggle-button"><i data-lucide="heart" class="size-5 text-slate-500 dark:text-zink-200 fill-slate-200 dark:fill-zink-500 transition-all duration-150 ease-linear group-[.active]/item:text-yellow-500 dark:group-[.active]/item:text-yellow-500 group-[.active]/item:fill-yellow-200 dark:group-[.active]/item:fill-yellow-500/20 group-hover/item:text-yellow-500 dark:group-hover/item:text-yellow-500 group-hover/item:fill-yellow-200 dark:group-hover/item:fill-yellow-500/20"></i></a>
                                </div>
                                <div class="relative dropdown shrink-0">
                                    <button id="sellersAction3" data-bs-toggle="dropdown" class="flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"><i data-lucide="more-horizontal" class="size-3"></i></button>
                                    <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600" aria-labelledby="sellersAction3">
                                        <li>
                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!"><i data-lucide="eye" class="inline-block mr-1 size-3"></i> <span class="align-middle">Overview</span></a>
                                        </li>
                                        <li>
                                            <a data-modal-target="addSellerModal" class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!"><i data-lucide="file-edit" class="inline-block mr-1 size-3"></i> <span class="align-middle">Edit</span></a>
                                        </li>
                                        <li>
                                            <a data-modal-target="deleteModal" class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!"><i data-lucide="trash-2" class="inline-block mr-1 size-3"></i> <span class="align-middle">Delete</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="flex items-center justify-center mx-auto rounded-full size-16 bg-slate-100 outline outline-slate-100 outline-offset-1 dark:bg-zink-600 dark:outline-zink-600">
                                <img src="data:image/png;base64,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" alt="" class="h-10 rounded-full">
                            </div>

                            <div class="mt-4 mb-6 text-center">
                                <h6 class="text-16"><a href="#!">4xM Infotech</a></h6>
                                <p class="text-slate-500 dark:text-zink-200">Daniel Miller</p>
                            </div>
                            <div class="grid grid-cols-1 gap-5 text-center divide-y md:divide-y-0 md:divide-x sm:grid-cols-3 2xl:grid-cols-12 divide-slate-200 divide-dashed dark:divide-zink-500 rtl:divide-x-reverse">
                                <div class="p-2 2xl:col-span-4">
                                    <h6 class="mb-1">7.1k</h6>
                                    <p class="text-slate-500 dark:text-zink-200">Sales</p>
                                </div><!--end col-->
                                <div class="p-2 2xl:col-span-4">
                                    <h6 class="mb-1">138</h6>
                                    <p class="text-slate-500 dark:text-zink-200">Product</p>
                                </div><!--end col-->
                                <div class="p-2 2xl:col-span-4">
                                    <h6 class="mb-1">$465.9k</h6>
                                    <p class="text-slate-500 dark:text-zink-200">Revenue</p>
                                </div><!--end col-->
                            </div><!--end grid-->
                        </div>
                    </div><!--end card-->
                </div><!--end col-->
                <div class="2xl:col-span-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="flex items-center gap-2 mb-4">
                                <div class="grow">
                                    <a href="#!" class="group/item toggle-button active"><i data-lucide="heart" class="size-5 text-slate-500 dark:text-zink-200 fill-slate-200 dark:fill-zink-500 transition-all duration-150 ease-linear group-[.active]/item:text-yellow-500 dark:group-[.active]/item:text-yellow-500 group-[.active]/item:fill-yellow-200 dark:group-[.active]/item:fill-yellow-500/20 group-hover/item:text-yellow-500 dark:group-hover/item:text-yellow-500 group-hover/item:fill-yellow-200 dark:group-hover/item:fill-yellow-500/20"></i></a>
                                </div>
                                <div class="relative dropdown shrink-0">
                                    <button id="sellersAction4" data-bs-toggle="dropdown" class="flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"><i data-lucide="more-horizontal" class="size-3"></i></button>
                                    <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600" aria-labelledby="sellersAction4">
                                        <li>
                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!"><i data-lucide="eye" class="inline-block mr-1 size-3"></i> <span class="align-middle">Overview</span></a>
                                        </li>
                                        <li>
                                            <a data-modal-target="addSellerModal" class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!"><i data-lucide="file-edit" class="inline-block mr-1 size-3"></i> <span class="align-middle">Edit</span></a>
                                        </li>
                                        <li>
                                            <a data-modal-target="deleteModal" class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!"><i data-lucide="trash-2" class="inline-block mr-1 size-3"></i> <span class="align-middle">Delete</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="flex items-center justify-center mx-auto rounded-full size-16 bg-slate-100 outline outline-slate-100 outline-offset-1 dark:bg-zink-600 dark:outline-zink-600">
                                <img src="data:image/png;base64,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" alt="" class="h-10 rounded-full">
                            </div>

                            <div class="mt-4 mb-6 text-center">
                                <h6 class="text-16"><a href="#!">Extra Fashion</a></h6>
                                <p class="text-slate-500 dark:text-zink-200">Mark Walton</p>
                            </div>
                            <div class="grid grid-cols-1 gap-5 text-center divide-y md:divide-y-0 md:divide-x sm:grid-cols-3 2xl:grid-cols-12 divide-slate-200 divide-dashed dark:divide-zink-500 rtl:divide-x-reverse">
                                <div class="p-2 2xl:col-span-4">
                                    <h6 class="mb-1">1.9k</h6>
                                    <p class="text-slate-500 dark:text-zink-200">Sales</p>
                                </div><!--end col-->
                                <div class="p-2 2xl:col-span-4">
                                    <h6 class="mb-1">49</h6>
                                    <p class="text-slate-500 dark:text-zink-200">Product</p>
                                </div><!--end col-->
                                <div class="p-2 2xl:col-span-4">
                                    <h6 class="mb-1">$198.3k</h6>
                                    <p class="text-slate-500 dark:text-zink-200">Revenue</p>
                                </div><!--end col-->
                            </div><!--end grid-->
                        </div>
                    </div><!--end card-->
                </div><!--end col-->
                <div class="2xl:col-span-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="flex items-center gap-2 mb-4">
                                <div class="grow">
                                    <a href="#!" class="group/item toggle-button active"><i data-lucide="heart" class="size-5 text-slate-500 dark:text-zink-200 fill-slate-200 dark:fill-zink-500 transition-all duration-150 ease-linear group-[.active]/item:text-yellow-500 dark:group-[.active]/item:text-yellow-500 group-[.active]/item:fill-yellow-200 dark:group-[.active]/item:fill-yellow-500/20 group-hover/item:text-yellow-500 dark:group-hover/item:text-yellow-500 group-hover/item:fill-yellow-200 dark:group-hover/item:fill-yellow-500/20"></i></a>
                                </div>
                                <div class="relative dropdown shrink-0">
                                    <button id="sellersAction5" data-bs-toggle="dropdown" class="flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"><i data-lucide="more-horizontal" class="size-3"></i></button>
                                    <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600" aria-labelledby="sellersAction5">
                                        <li>
                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!"><i data-lucide="eye" class="inline-block mr-1 size-3"></i> <span class="align-middle">Overview</span></a>
                                        </li>
                                        <li>
                                            <a data-modal-target="addSellerModal" class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!"><i data-lucide="file-edit" class="inline-block mr-1 size-3"></i> <span class="align-middle">Edit</span></a>
                                        </li>
                                        <li>
                                            <a data-modal-target="deleteModal" class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!"><i data-lucide="trash-2" class="inline-block mr-1 size-3"></i> <span class="align-middle">Delete</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="flex items-center justify-center mx-auto rounded-full size-16 bg-slate-100 outline outline-slate-100 outline-offset-1 dark:bg-zink-600 dark:outline-zink-600">
                                <img src="data:image/png;base64,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" alt="" class="h-10 rounded-full">
                            </div>

                            <div class="mt-4 mb-6 text-center">
                                <h6 class="text-16"><a href="#!">Nesta Technologies</a></h6>
                                <p class="text-slate-500 dark:text-zink-200">William Heineman</p>
                            </div>
                            <div class="grid grid-cols-1 gap-5 text-center divide-y md:divide-y-0 md:divide-x sm:grid-cols-3 2xl:grid-cols-12 divide-slate-200 divide-dashed dark:divide-zink-500 rtl:divide-x-reverse">
                                <div class="p-2 2xl:col-span-4">
                                    <h6 class="mb-1">4.8k</h6>
                                    <p class="text-slate-500 dark:text-zink-200">Sales</p>
                                </div><!--end col-->
                                <div class="p-2 2xl:col-span-4">
                                    <h6 class="mb-1">172</h6>
                                    <p class="text-slate-500 dark:text-zink-200">Product</p>
                                </div><!--end col-->
                                <div class="p-2 2xl:col-span-4">
                                    <h6 class="mb-1">$746.1k</h6>
                                    <p class="text-slate-500 dark:text-zink-200">Revenue</p>
                                </div><!--end col-->
                            </div><!--end grid-->
                        </div>
                    </div><!--end card-->
                </div><!--end col-->
                <div class="2xl:col-span-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="flex items-center gap-2 mb-4">
                                <div class="grow">
                                    <a href="#!" class="group/item toggle-button"><i data-lucide="heart" class="size-5 text-slate-500 dark:text-zink-200 fill-slate-200 dark:fill-zink-500 transition-all duration-150 ease-linear group-[.active]/item:text-yellow-500 dark:group-[.active]/item:text-yellow-500 group-[.active]/item:fill-yellow-200 dark:group-[.active]/item:fill-yellow-500/20 group-hover/item:text-yellow-500 dark:group-hover/item:text-yellow-500 group-hover/item:fill-yellow-200 dark:group-hover/item:fill-yellow-500/20"></i></a>
                                </div>
                                <div class="relative dropdown shrink-0">
                                    <button id="sellersAction6" data-bs-toggle="dropdown" class="flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"><i data-lucide="more-horizontal" class="size-3"></i></button>
                                    <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600" aria-labelledby="sellersAction6">
                                        <li>
                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!"><i data-lucide="eye" class="inline-block mr-1 size-3"></i> <span class="align-middle">Overview</span></a>
                                        </li>
                                        <li>
                                            <a data-modal-target="addSellerModal" class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!"><i data-lucide="file-edit" class="inline-block mr-1 size-3"></i> <span class="align-middle">Edit</span></a>
                                        </li>
                                        <li>
                                            <a data-modal-target="deleteModal" class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!"><i data-lucide="trash-2" class="inline-block mr-1 size-3"></i> <span class="align-middle">Delete</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="flex items-center justify-center mx-auto rounded-full size-16 bg-slate-100 outline outline-slate-100 outline-offset-1 dark:bg-zink-600 dark:outline-zink-600">
                                <img src="{{ asset('assets/images/meta.png') }}" alt="" class="h-10 rounded-full">
                            </div>

                            <div class="mt-4 mb-6 text-center">
                                <h6 class="text-16"><a href="#!">Digitech Galaxy</a></h6>
                                <p class="text-slate-500 dark:text-zink-200">David Biggs</p>
                            </div>
                            <div class="grid grid-cols-1 gap-5 text-center divide-y md:divide-y-0 md:divide-x sm:grid-cols-3 2xl:grid-cols-12 divide-slate-200 divide-dashed dark:divide-zink-500 rtl:divide-x-reverse">
                                <div class="p-2 2xl:col-span-4">
                                    <h6 class="mb-1">9.2k</h6>
                                    <p class="text-slate-500 dark:text-zink-200">Sales</p>
                                </div><!--end col-->
                                <div class="p-2 2xl:col-span-4">
                                    <h6 class="mb-1">674</h6>
                                    <p class="text-slate-500 dark:text-zink-200">Product</p>
                                </div><!--end col-->
                                <div class="p-2 2xl:col-span-4">
                                    <h6 class="mb-1">$14.4m</h6>
                                    <p class="text-slate-500 dark:text-zink-200">Revenue</p>
                                </div><!--end col-->
                            </div><!--end grid-->
                        </div>
                    </div><!--end card-->
                </div><!--end col-->
                <div class="2xl:col-span-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="flex items-center gap-2 mb-4">
                                <div class="grow">
                                    <a href="#!" class="group/item toggle-button"><i data-lucide="heart" class="size-5 text-slate-500 dark:text-zink-200 fill-slate-200 dark:fill-zink-500 transition-all duration-150 ease-linear group-[.active]/item:text-yellow-500 dark:group-[.active]/item:text-yellow-500 group-[.active]/item:fill-yellow-200 dark:group-[.active]/item:fill-yellow-500/20 group-hover/item:text-yellow-500 dark:group-hover/item:text-yellow-500 group-hover/item:fill-yellow-200 dark:group-hover/item:fill-yellow-500/20"></i></a>
                                </div>
                                <div class="relative dropdown shrink-0">
                                    <button id="sellersAction7" data-bs-toggle="dropdown" class="flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"><i data-lucide="more-horizontal" class="size-3"></i></button>
                                    <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600" aria-labelledby="sellersAction7">
                                        <li>
                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!"><i data-lucide="eye" class="inline-block mr-1 size-3"></i> <span class="align-middle">Overview</span></a>
                                        </li>
                                        <li>
                                            <a data-modal-target="addSellerModal" class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!"><i data-lucide="file-edit" class="inline-block mr-1 size-3"></i> <span class="align-middle">Edit</span></a>
                                        </li>
                                        <li>
                                            <a data-modal-target="deleteModal" class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!"><i data-lucide="trash-2" class="inline-block mr-1 size-3"></i> <span class="align-middle">Delete</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="flex items-center justify-center mx-auto rounded-full size-16 bg-slate-100 outline outline-slate-100 outline-offset-1 dark:bg-zink-600 dark:outline-zink-600">
                                <img src="{{ asset('assets/images/search.png') }}" alt="" class="h-10 rounded-full">
                            </div>

                            <div class="mt-4 mb-6 text-center">
                                <h6 class="text-16"><a href="#!">Zoetic Fashion</a></h6>
                                <p class="text-slate-500 dark:text-zink-200">Jaqueline Hammes</p>
                            </div>
                            <div class="grid grid-cols-1 gap-5 text-center divide-y md:divide-y-0 md:divide-x sm:grid-cols-3 2xl:grid-cols-12 divide-slate-200 divide-dashed dark:divide-zink-500 rtl:divide-x-reverse">
                                <div class="p-2 2xl:col-span-4">
                                    <h6 class="mb-1">1.8k</h6>
                                    <p class="text-slate-500 dark:text-zink-200">Sales</p>
                                </div><!--end col-->
                                <div class="p-2 2xl:col-span-4">
                                    <h6 class="mb-1">112</h6>
                                    <p class="text-slate-500 dark:text-zink-200">Product</p>
                                </div><!--end col-->
                                <div class="p-2 2xl:col-span-4">
                                    <h6 class="mb-1">$132.4k</h6>
                                    <p class="text-slate-500 dark:text-zink-200">Revenue</p>
                                </div><!--end col-->
                            </div><!--end grid-->
                        </div>
                    </div><!--end card-->
                </div><!--end col-->
                <div class="2xl:col-span-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="flex items-center gap-2 mb-4">
                                <div class="grow">
                                    <a href="#!" class="group/item toggle-button"><i data-lucide="heart" class="size-5 text-slate-500 dark:text-zink-200 fill-slate-200 dark:fill-zink-500 transition-all duration-150 ease-linear group-[.active]/item:text-yellow-500 dark:group-[.active]/item:text-yellow-500 group-[.active]/item:fill-yellow-200 dark:group-[.active]/item:fill-yellow-500/20 group-hover/item:text-yellow-500 dark:group-hover/item:text-yellow-500 group-hover/item:fill-yellow-200 dark:group-hover/item:fill-yellow-500/20"></i></a>
                                </div>
                                <div class="relative dropdown shrink-0">
                                    <button id="sellersAction8" data-bs-toggle="dropdown" class="flex items-center justify-center size-[30px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"><i data-lucide="more-horizontal" class="size-3"></i></button>
                                    <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600" aria-labelledby="sellersAction8">
                                        <li>
                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!"><i data-lucide="eye" class="inline-block mr-1 size-3"></i> <span class="align-middle">Overview</span></a>
                                        </li>
                                        <li>
                                            <a data-modal-target="addSellerModal" class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!"><i data-lucide="file-edit" class="inline-block mr-1 size-3"></i> <span class="align-middle">Edit</span></a>
                                        </li>
                                        <li>
                                            <a data-modal-target="deleteModal" class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!"><i data-lucide="trash-2" class="inline-block mr-1 size-3"></i> <span class="align-middle">Delete</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="flex items-center justify-center mx-auto rounded-full size-16 bg-slate-100 outline outline-slate-100 outline-offset-1 dark:bg-zink-600 dark:outline-zink-600">
                                <img src="data:image/png;base64,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" alt="" class="h-10 rounded-full">
                            </div>

                            <div class="mt-4 mb-6 text-center">
                                <h6 class="text-16"><a href="#!">Force Medicines</a></h6>
                                <p class="text-slate-500 dark:text-zink-200">Ashley Uilson</p>
                            </div>
                            <div class="grid grid-cols-1 gap-5 text-center divide-y md:divide-y-0 md:divide-x sm:grid-cols-3 2xl:grid-cols-12 divide-slate-200 divide-dashed dark:divide-zink-500 rtl:divide-x-reverse">
                                <div class="p-2 2xl:col-span-4">
                                    <h6 class="mb-1">4.1k</h6>
                                    <p class="text-slate-500 dark:text-zink-200">Sales</p>
                                </div><!--end col-->
                                <div class="p-2 2xl:col-span-4">
                                    <h6 class="mb-1">243</h6>
                                    <p class="text-slate-500 dark:text-zink-200">Product</p>
                                </div><!--end col-->
                                <div class="p-2 2xl:col-span-4">
                                    <h6 class="mb-1">$861.7k</h6>
                                    <p class="text-slate-500 dark:text-zink-200">Revenue</p>
                                </div><!--end col-->
                            </div><!--end grid-->
                        </div>
                    </div><!--end card-->
                </div><!--end col-->
            </div><!--end grid-->

            <div class="flex flex-col items-center mb-5 md:flex-row">
                <div class="mb-4 grow md:mb-0">
                    <p class="text-slate-500 dark:text-zink-200">Showing <b>12</b> of <b>44</b> Results</p>
                </div>
                <ul class="flex flex-wrap items-center gap-2 shrink-0">
                    <li>
                        <a href="#!" class="inline-flex items-center justify-center bg-white dark:bg-zink-700 h-8 px-3 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-100 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-white dark:[&.active]:text-white [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.active]:hover:text-custom-700 dark:[&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto"><i class="mr-1 size-4 rtl:rotate-180" data-lucide="chevron-left"></i> Prev</a>
                    </li>
                    <li>
                        <a href="#!" class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-100 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-white dark:[&.active]:text-white [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.active]:hover:text-custom-700 dark:[&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto">1</a>
                    </li>
                    <li>
                        <a href="#!" class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-100 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-white dark:[&.active]:text-white [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.active]:hover:text-custom-700 dark:[&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto active">2</a>
                    </li>
                    <li>
                        <a href="#!" class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-100 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-white dark:[&.active]:text-white [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.active]:hover:text-custom-700 dark:[&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto">3</a>
                    </li>
                    <li>
                        <a href="#!" class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-100 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-white dark:[&.active]:text-white [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.active]:hover:text-custom-700 dark:[&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto">4</a>
                    </li>
                    <li>
                        <a href="#!" class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-100 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-white dark:[&.active]:text-white [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.active]:hover:text-custom-700 dark:[&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto">5</a>
                    </li>
                    <li>
                        <a href="#!" class="inline-flex items-center justify-center bg-white dark:bg-zink-700 h-8 px-3 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-100 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-white dark:[&.active]:text-white [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.active]:hover:text-custom-700 dark:[&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto">Next <i class="ml-1 size-4 rtl:rotate-180" data-lucide="chevron-right"></i></a>
                    </li>
                </ul>
            </div>

        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <div id="addSellerModal" modal-center="" class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show ">
        <div class="w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600">
            <div class="flex items-center justify-between p-4 border-b dark:border-zink-500">
                <h5 class="text-16">Add Seller</h5>
                <button data-modal-close="addSellerModal" class="transition-all duration-200 ease-linear text-slate-400 hover:text-red-500"><i data-lucide="x" class="size-5"></i></button>
            </div>
            <div class="max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto">
                <form action="#!">
                    <div class="mb-3">
                        <label for="companyLogo" class="inline-block mb-2 text-base font-medium">Company Logo</label>
                        <div class="flex items-center justify-center bg-white border border-dashed rounded-md cursor-pointer dropzone border-slate-200 dropzone2 dark:bg-zink-600 dark:border-zink-500">
                            <div class="fallback">
                                <input name="file" type="file" multiple="multiple">
                            </div>
                            <div class="w-full py-5 text-lg text-center dz-message needsclick">
                                <div class="mb-3">
                                    <i data-lucide="upload-cloud" class="block mx-auto size-12 text-slate-500 fill-slate-200 dark:text-zink-200 dark:fill-zink-500"></i>
                                </div>

                                <h5 class="mb-0 font-normal text-slate-500 dark:text-zink-200 text-15">Drag and drop your logo or <a href="#!">browse</a> your logo</h5>
                            </div>
                        </div>

                        <ul class="flex flex-wrap mb-0 gap-x-5" id="dropzone-preview2">
                            <li class="mt-5" id="dropzone-preview-list2">
                                <!-- This is used as the file preview template -->
                                <div class="border rounded border-slate-200 dark:border-zink-500">
                                    <div class="p-2 text-center">
                                        <div>
                                            <div class="p-2 mx-auto rounded-md size-14 bg-slate-100 dark:bg-zink-500">
                                                <img data-dz-thumbnail="" class="block w-full h-full rounded-md" src="data:image/png;base64,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" alt="Dropzone-Image">
                                            </div>
                                        </div>
                                        <div class="pt-3">
                                            <h5 class="mb-1 text-15" data-dz-name="">&nbsp;</h5>
                                            <p class="mb-0 text-slate-500 dark:text-zink-200" data-dz-size=""></p>
                                            <strong class="error text-danger" data-dz-errormessage=""></strong>
                                        </div>
                                        <div class="mt-2">
                                            <button data-dz-remove="" class="px-2 py-1.5 text-xs text-white bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-custom-400/20">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="mb-3">
                        <label for="companyNameInput" class="inline-block mb-2 text-base font-medium">Company Name</label>
                        <input type="text" id="companyNameInput" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Seller name" required="">
                    </div>
                    <div class="mb-3">
                        <label for="ownerName" class="inline-block mb-2 text-base font-medium">Owner Name</label>
                        <input type="text" id="ownerName" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Owner name" required="">
                    </div>
                    <div class="flex justify-end gap-2 mt-4">
                        <button type="reset" data-modal-close="addSellerModal" class="text-red-500 bg-white btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-600 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10">Cancel</button>
                        <button type="submit" class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Add Seller</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--end add Seller-->

    <div id="deleteModal" modal-center="" class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show">
        <div class="w-screen md:w-[25rem] bg-white shadow rounded-md dark:bg-zink-600">
            <div class="max-h-[calc(theme('height.screen')_-_180px)] overflow-y-auto px-6 py-8">
                <div class="float-right">
                    <button data-modal-close="deleteModal" class="transition-all duration-200 ease-linear text-slate-500 hover:text-red-500"><i data-lucide="x" class="size-5"></i></button>
                </div>
                <img src="data:image/png;base64,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" alt="" class="block h-12 mx-auto">
                <div class="mt-5 text-center">
                    <h5 class="mb-1">Are you sure?</h5>
                    <p class="text-slate-500 dark:text-zink-200">Are you certain you want to delete this record?</p>
                    <div class="flex justify-center gap-2 mt-6">
                        <button type="reset" data-modal-close="deleteModal" class="bg-white text-slate-500 btn hover:text-slate-500 hover:bg-slate-100 focus:text-slate-500 focus:bg-slate-100 active:text-slate-500 active:bg-slate-100 dark:bg-zink-600 dark:hover:bg-slate-500/10 dark:focus:bg-slate-500/10 dark:active:bg-slate-500/10">Cancel</button>
                        <button type="submit" class="text-white bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-custom-400/20">Yes, Delete It!</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end delete modal-->

@section('script')
    <!-- dropzone -->
    <script src="{{ URL::to('assets/libs/dropzone/dropzone-min.js') }}"></script>
    <script src="{{ URL::to('assets/js/pages/apps-ecommerce-sellers.init.js') }}"></script>
@endsection
@endsection