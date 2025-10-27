@extends('layouts.master')
@section('content')
    <!-- Page-content -->
    <div class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
        <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">

            <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
                <div class="grow">
                    <h5 class="text-16">Leave Manage (HR)</h5>
                </div>
                <ul class="flex items-center gap-2 text-sm font-normal shrink-0">
                    <li class="relative before:content-['\ea54'] before:font-remix ltr:before:-right-1 rtl:before:-left-1  before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-slate-400 dark:text-zink-200">
                        <a href="#!" class="text-slate-400 dark:text-zink-200">Leaves Manage</a>
                    </li>
                    <li class="text-slate-700 dark:text-zink-100">
                        Leave Manage (HR)
                    </li>
                </ul>
            </div>
            <div class="grid grid-cols-1 gap-x-5 md:grid-cols-2 xl:grid-cols-12">
                <div class="xl:col-span-3">
                    <div class="card">
                        <div class="flex items-center gap-3 card-body">
                            <div class="flex items-center justify-center rounded-md size-12 text-15 bg-custom-100 text-custom-500 dark:bg-custom-500/20 shrink-0"><i data-lucide="file-bar-chart-2"></i></div>
                            <div class="grow">
                                <h5 class="mb-1 text-16"><span class="counter-value" data-target="18">0</span>/<span class="counter-value" data-target="60">0</span></h5>
                                <p class="text-slate-500 dark:text-zink-200">Today/Presents Leave</p>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="xl:col-span-3">
                    <div class="card">
                        <div class="flex items-center gap-3 card-body">
                            <div class="flex items-center justify-center text-green-500 bg-green-100 rounded-md size-12 text-15 dark:bg-green-500/20 shrink-0"><i data-lucide="calendar-check"></i></div>
                            <div class="grow">
                                <h5 class="mb-1 text-16"><span class="counter-value" data-target="5">0</span></h5>
                                <p class="text-slate-500 dark:text-zink-200">Today Leaves</p>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="xl:col-span-3">
                    <div class="card">
                        <div class="flex items-center gap-3 card-body">
                            <div class="flex items-center justify-center text-purple-500 bg-purple-100 rounded-md size-12 text-15 dark:bg-purple-500/20 shrink-0"><i data-lucide="codepen"></i></div>
                            <div class="grow">
                                <h5 class="mb-1 text-16"><span class="counter-value" data-target="0">0</span></h5>
                                <p class="text-slate-500 dark:text-zink-200">Unplanned Leaves</p>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="xl:col-span-3">
                    <div class="card">
                        <div class="flex items-center gap-3 card-body">
                            <div class="flex items-center justify-center text-yellow-500 bg-yellow-100 rounded-md size-12 text-15 dark:bg-yellow-500/20 shrink-0"><i data-lucide="loader"></i></div>
                            <div class="grow">
                                <h5 class="mb-1 text-16"><span class="counter-value" data-target="6">0</span></h5>
                                <p class="text-slate-500 dark:text-zink-200">Pending Leaves</p>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end grid-->

            <div class="card" id="ordersTable">
                <div class="card-body">
                    <div class="grid grid-cols-1 gap-4 mb-5 lg:grid-cols-2 xl:grid-cols-12">
                        <div class="xl:col-span-3">
                            <div class="relative">
                                <input type="text" class="ltr:pl-8 rtl:pr-8 search form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Search for ..." autocomplete="off">
                                <i data-lucide="search" class="inline-block size-4 absolute ltr:left-2.5 rtl:right-2.5 top-2.5 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-600"></i>
                            </div>
                        </div><!--end col-->
                        <div class="xl:col-span-2 xl:col-start-11">
                            <div class="ltr:lg:text-right rtl:lg:float-left">
                                <a href="#!" data-modal-target="addLeaveModal" type="button" class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20"><i data-lucide="plus" class="inline-block size-4"></i> <span class="align-middle">Add Leave</span></a>
                            </div>
                        </div>
                    </div><!--col grid-->
                    <div class="overflow-x-auto">
                        <table class="w-full whitespace-nowrap">
                            <thead class="text-left bg-slate-100 text-slate-500 dark:bg-zink-600 dark:text-zink-200">
                                <tr>
                                    <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">#</th>
                                    <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">Employee Name</th>
                                    <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">Leave Type</th>
                                    <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">Reason</th>
                                    <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">No Of Days</th>
                                    <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">From</th>
                                    <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">to</th>
                                    <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">Status</th>
                                    <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">01</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Willie Torres</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Medical Leave</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Going to Hospital</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">02</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">11 Oct, 2023</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">12 Oct, 2023</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                                        <span class="px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-green-100 border-green-100 text-green-500 dark:bg-green-400/20 dark:border-transparent">Approved</span>
                                    </td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                                        <div class="flex gap-2">
                                            <a href="#!" class="flex items-center justify-center transition-all duration-200 ease-linear rounded-md size-8 text-slate-500 bg-slate-100 hover:text-white hover:bg-slate-500 dark:bg-zink-600 dark:text-zink-200 dark:hover:text-white dark:hover:bg-zink-500"><i data-lucide="pencil" class="size-4"></i></a>
                                            <a href="#!" class="flex items-center justify-center text-green-500 transition-all duration-200 ease-linear bg-green-100 rounded-md size-8 hover:text-white hover:bg-green-500 dark:bg-green-500/20 dark:hover:bg-green-500"><i data-lucide="check" class="size-4"></i></a>
                                            <a href="#!" data-modal-target="deleteModal" class="flex items-center justify-center text-red-500 transition-all duration-200 ease-linear bg-red-100 rounded-md size-8 hover:text-white hover:bg-red-500 dark:bg-red-500/20 dark:hover:bg-red-500"><i data-lucide="trash-2" class="size-4"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">02</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Patricia Garcia</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Casual Leave</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Going to Family Function</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">01</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">07 Sept, 2023</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">07 Sept, 2023</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                                        <span class="px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-yellow-100 border-yellow-100 text-yellow-500 dark:bg-yellow-400/20 dark:border-transparent">Pending</span>
                                    </td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                                        <div class="flex gap-2">
                                            <a href="#!" class="flex items-center justify-center transition-all duration-200 ease-linear rounded-md size-8 text-slate-500 bg-slate-100 hover:text-white hover:bg-slate-500 dark:bg-zink-600 dark:text-zink-200 dark:hover:text-white dark:hover:bg-zink-500"><i data-lucide="pencil" class="size-4"></i></a>
                                            <a href="#!" class="flex items-center justify-center text-green-500 transition-all duration-200 ease-linear bg-green-100 rounded-md size-8 hover:text-white hover:bg-green-500 dark:bg-green-500/20 dark:hover:bg-green-500"><i data-lucide="check" class="size-4"></i></a>
                                            <a href="#!" data-modal-target="deleteModal" class="flex items-center justify-center text-red-500 transition-all duration-200 ease-linear bg-red-100 rounded-md size-8 hover:text-white hover:bg-red-500 dark:bg-red-500/20 dark:hover:bg-red-500"><i data-lucide="trash-2" class="size-4"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">03</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Juliette Fecteau</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Casual Leave</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Going to Holiday</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">06</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">11 Jun, 2023</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">16 Jun, 2023</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                                        <span class="px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-purple-100 border-purple-100 text-purple-500 dark:bg-purple-400/20 dark:border-transparent">New</span>
                                    </td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                                        <div class="flex gap-2">
                                            <a href="#!" class="flex items-center justify-center transition-all duration-200 ease-linear rounded-md size-8 text-slate-500 bg-slate-100 hover:text-white hover:bg-slate-500 dark:bg-zink-600 dark:text-zink-200 dark:hover:text-white dark:hover:bg-zink-500"><i data-lucide="pencil" class="size-4"></i></a>
                                            <a href="#!" class="flex items-center justify-center text-green-500 transition-all duration-200 ease-linear bg-green-100 rounded-md size-8 hover:text-white hover:bg-green-500 dark:bg-green-500/20 dark:hover:bg-green-500"><i data-lucide="check" class="size-4"></i></a>
                                            <a href="#!" data-modal-target="deleteModal" class="flex items-center justify-center text-red-500 transition-all duration-200 ease-linear bg-red-100 rounded-md size-8 hover:text-white hover:bg-red-500 dark:bg-red-500/20 dark:hover:bg-red-500"><i data-lucide="trash-2" class="size-4"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">04</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Thomas Hatfield</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Sick Leave</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Attend Birthday party</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">01</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">15 July, 2023</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">15 July, 2023</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                                        <span class="px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-green-100 border-green-100 text-green-500 dark:bg-green-400/20 dark:border-transparent">Approved</span>
                                    </td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                                        <div class="flex gap-2">
                                            <a href="#!" class="flex items-center justify-center transition-all duration-200 ease-linear rounded-md size-8 text-slate-500 bg-slate-100 hover:text-white hover:bg-slate-500 dark:bg-zink-600 dark:text-zink-200 dark:hover:text-white dark:hover:bg-zink-500"><i data-lucide="pencil" class="size-4"></i></a>
                                            <a href="#!" class="flex items-center justify-center text-green-500 transition-all duration-200 ease-linear bg-green-100 rounded-md size-8 hover:text-white hover:bg-green-500 dark:bg-green-500/20 dark:hover:bg-green-500"><i data-lucide="check" class="size-4"></i></a>
                                            <a href="#!" data-modal-target="deleteModal" class="flex items-center justify-center text-red-500 transition-all duration-200 ease-linear bg-red-100 rounded-md size-8 hover:text-white hover:bg-red-500 dark:bg-red-500/20 dark:hover:bg-red-500"><i data-lucide="trash-2" class="size-4"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">05</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Willie Torres</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Sick Leave</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Personal</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">02</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">19 Aug, 2023</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">20 Aug, 2023</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                                        <span class="px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-red-100 border-red-100 text-red-500 dark:bg-red-400/20 dark:border-transparent">Declined</span>
                                    </td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                                        <div class="flex gap-2">
                                            <a href="#!" class="flex items-center justify-center transition-all duration-200 ease-linear rounded-md size-8 text-slate-500 bg-slate-100 hover:text-white hover:bg-slate-500 dark:bg-zink-600 dark:text-zink-200 dark:hover:text-white dark:hover:bg-zink-500"><i data-lucide="pencil" class="size-4"></i></a>
                                            <a href="#!" class="flex items-center justify-center text-green-500 transition-all duration-200 ease-linear bg-green-100 rounded-md size-8 hover:text-white hover:bg-green-500 dark:bg-green-500/20 dark:hover:bg-green-500"><i data-lucide="check" class="size-4"></i></a>
                                            <a href="#!" data-modal-target="deleteModal" class="flex items-center justify-center text-red-500 transition-all duration-200 ease-linear bg-red-100 rounded-md size-8 hover:text-white hover:bg-red-500 dark:bg-red-500/20 dark:hover:bg-red-500"><i data-lucide="trash-2" class="size-4"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">06</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Juliette Fecteau</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Casual Leave</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Going to Family Function</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">01</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">14 Feb, 2022</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">14 Feb, 2022</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                                        <span class="px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-green-100 border-green-100 text-green-500 dark:bg-green-400/20 dark:border-transparent">Approved</span>
                                    </td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                                        <div class="flex gap-2">
                                            <a href="#!" class="flex items-center justify-center transition-all duration-200 ease-linear rounded-md size-8 text-slate-500 bg-slate-100 hover:text-white hover:bg-slate-500 dark:bg-zink-600 dark:text-zink-200 dark:hover:text-white dark:hover:bg-zink-500"><i data-lucide="pencil" class="size-4"></i></a>
                                            <a href="#!" class="flex items-center justify-center text-green-500 transition-all duration-200 ease-linear bg-green-100 rounded-md size-8 hover:text-white hover:bg-green-500 dark:bg-green-500/20 dark:hover:bg-green-500"><i data-lucide="check" class="size-4"></i></a>
                                            <a href="#!" data-modal-target="deleteModal" class="flex items-center justify-center text-red-500 transition-all duration-200 ease-linear bg-red-100 rounded-md size-8 hover:text-white hover:bg-red-500 dark:bg-red-500/20 dark:hover:bg-red-500"><i data-lucide="trash-2" class="size-4"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">07</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Nancy Reynolds</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Medical Leave</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Medical Emergency</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">04</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">23 Jan, 2023</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">26 Jan, 2023</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                                        <span class="px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-yellow-100 border-yellow-100 text-yellow-500 dark:bg-yellow-400/20 dark:border-transparent">Pending</span>
                                    </td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                                        <div class="flex gap-2">
                                            <a href="#!" class="flex items-center justify-center transition-all duration-200 ease-linear rounded-md size-8 text-slate-500 bg-slate-100 hover:text-white hover:bg-slate-500 dark:bg-zink-600 dark:text-zink-200 dark:hover:text-white dark:hover:bg-zink-500"><i data-lucide="pencil" class="size-4"></i></a>
                                            <a href="#!" class="flex items-center justify-center text-green-500 transition-all duration-200 ease-linear bg-green-100 rounded-md size-8 hover:text-white hover:bg-green-500 dark:bg-green-500/20 dark:hover:bg-green-500"><i data-lucide="check" class="size-4"></i></a>
                                            <a href="#!" data-modal-target="deleteModal" class="flex items-center justify-center text-red-500 transition-all duration-200 ease-linear bg-red-100 rounded-md size-8 hover:text-white hover:bg-red-500 dark:bg-red-500/20 dark:hover:bg-red-500"><i data-lucide="trash-2" class="size-4"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">08</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Holly Kavanaugh</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Casual Leave</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Personal</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">02</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">16 Dec, 2023</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">17 Dec, 2023</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                                        <span class="px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-purple-100 border-purple-100 text-purple-500 dark:bg-purple-400/20 dark:border-transparent">New</span>
                                    </td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                                        <div class="flex gap-2">
                                            <a href="#!" class="flex items-center justify-center transition-all duration-200 ease-linear rounded-md size-8 text-slate-500 bg-slate-100 hover:text-white hover:bg-slate-500 dark:bg-zink-600 dark:text-zink-200 dark:hover:text-white dark:hover:bg-zink-500"><i data-lucide="pencil" class="size-4"></i></a>
                                            <a href="#!" class="flex items-center justify-center text-green-500 transition-all duration-200 ease-linear bg-green-100 rounded-md size-8 hover:text-white hover:bg-green-500 dark:bg-green-500/20 dark:hover:bg-green-500"><i data-lucide="check" class="size-4"></i></a>
                                            <a href="#!" data-modal-target="deleteModal" class="flex items-center justify-center text-red-500 transition-all duration-200 ease-linear bg-red-100 rounded-md size-8 hover:text-white hover:bg-red-500 dark:bg-red-500/20 dark:hover:bg-red-500"><i data-lucide="trash-2" class="size-4"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">09</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Jonas Frederiksen</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Casual Leave</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Going to Holiday</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">05</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">29 Nov, 2023</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">03 Dec, 2023</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                                        <span class="px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-green-100 border-green-100 text-green-500 dark:bg-green-400/20 dark:border-transparent">Approved</span>
                                    </td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                                        <div class="flex gap-2">
                                            <a href="#!" class="flex items-center justify-center transition-all duration-200 ease-linear rounded-md size-8 text-slate-500 bg-slate-100 hover:text-white hover:bg-slate-500 dark:bg-zink-600 dark:text-zink-200 dark:hover:text-white dark:hover:bg-zink-500"><i data-lucide="pencil" class="size-4"></i></a>
                                            <a href="#!" class="flex items-center justify-center text-green-500 transition-all duration-200 ease-linear bg-green-100 rounded-md size-8 hover:text-white hover:bg-green-500 dark:bg-green-500/20 dark:hover:bg-green-500"><i data-lucide="check" class="size-4"></i></a>
                                            <a href="#!" data-modal-target="deleteModal" class="flex items-center justify-center text-red-500 transition-all duration-200 ease-linear bg-red-100 rounded-md size-8 hover:text-white hover:bg-red-500 dark:bg-red-500/20 dark:hover:bg-red-500"><i data-lucide="trash-2" class="size-4"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">10</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Nancy Reynolds</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Sick Leave</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Going to Hospital</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">01</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">15 Oct, 2023</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">15 Oct, 2023</td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                                        <span class="px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-green-100 border-green-100 text-green-500 dark:bg-green-400/20 dark:border-transparent">Approved</span>
                                    </td>
                                    <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">
                                        <div class="flex gap-2">
                                            <a href="#!" class="flex items-center justify-center transition-all duration-200 ease-linear rounded-md size-8 text-slate-500 bg-slate-100 hover:text-white hover:bg-slate-500 dark:bg-zink-600 dark:text-zink-200 dark:hover:text-white dark:hover:bg-zink-500"><i data-lucide="pencil" class="size-4"></i></a>
                                            <a href="#!" class="flex items-center justify-center text-green-500 transition-all duration-200 ease-linear bg-green-100 rounded-md size-8 hover:text-white hover:bg-green-500 dark:bg-green-500/20 dark:hover:bg-green-500"><i data-lucide="check" class="size-4"></i></a>
                                            <a href="#!" data-modal-target="deleteModal" class="flex items-center justify-center text-red-500 transition-all duration-200 ease-linear bg-red-100 rounded-md size-8 hover:text-white hover:bg-red-500 dark:bg-red-500/20 dark:hover:bg-red-500"><i data-lucide="trash-2" class="size-4"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="flex flex-col items-center mt-5 md:flex-row">
                        <div class="mb-4 grow md:mb-0">
                            <p class="text-slate-500 dark:text-zink-200">Showing <b>10</b> of <b>17</b> Results</p>
                        </div>
                        <ul class="flex flex-wrap items-center gap-2 shrink-0">
                            <li>
                                <a href="#!" class="inline-flex items-center justify-center bg-white dark:bg-zink-700 h-8 px-3 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-500 dark:[&.active]:text-custom-500 [&.active]:bg-custom-50 dark:[&.active]:bg-custom-500/10 [&.active]:border-custom-50 dark:[&.active]:border-custom-500/10 [&.active]:hover:text-custom-700 dark:[&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto"><i class="mr-1 size-4 rtl:rotate-180" data-lucide="chevron-left"></i> Prev</a>
                            </li>
                            <li>
                                <a href="#!" class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-500 dark:[&.active]:text-custom-500 [&.active]:bg-custom-50 dark:[&.active]:bg-custom-500/10 [&.active]:border-custom-50 dark:[&.active]:border-custom-500/10 [&.active]:hover:text-custom-700 dark:[&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto">1</a>
                            </li>
                            <li>
                                <a href="#!" class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-500 dark:[&.active]:text-custom-500 [&.active]:bg-custom-50 dark:[&.active]:bg-custom-500/10 [&.active]:border-custom-50 dark:[&.active]:border-custom-500/10 [&.active]:hover:text-custom-700 dark:[&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto active">2</a>
                            </li>
                            <li>
                                <a href="#!" class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-500 dark:[&.active]:text-custom-500 [&.active]:bg-custom-50 dark:[&.active]:bg-custom-500/10 [&.active]:border-custom-50 dark:[&.active]:border-custom-500/10 [&.active]:hover:text-custom-700 dark:[&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto">3</a>
                            </li>
                            <li>
                                <a href="#!" class="inline-flex items-center justify-center bg-white dark:bg-zink-700 h-8 px-3 transition-all duration-150 ease-linear border rounded border-slate-200 dark:border-zink-500 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-500 dark:[&.active]:text-custom-500 [&.active]:bg-custom-50 dark:[&.active]:bg-custom-500/10 [&.active]:border-custom-50 dark:[&.active]:border-custom-500/10 [&.active]:hover:text-custom-700 dark:[&.active]:hover:text-custom-700 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto">Next <i class="ml-1 size-4 rtl:rotate-180" data-lucide="chevron-right"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <div id="deleteModal" modal-center="" class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show">
        <div class="w-screen md:w-[25rem] bg-white shadow rounded-md dark:bg-zink-600">
            <div class="max-h-[calc(theme('height.screen')_-_180px)] overflow-y-auto px-6 py-8">
                <div class="float-right">
                    <button data-modal-close="deleteModal" class="transition-all duration-200 ease-linear text-slate-500 hover:text-red-500"><i data-lucide="x" class="w-5 h-5"></i></button>
                </div>
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIAAAACACAMAAAD04JH5AAAC8VBMVEUAAAD/6u7/cZD/3uL/5+r/T4T9O4T/4ub9RIX/ooz/7/D/noz+PoT/3uP9TYf/XoX/m4z/oY39Tob/oYz/oo39O4T9TYb/po3/n4z/4Ob/3+X/nIz+fon/4eb/nI39Xoj9fIn/8fP9SoX9coj/noz/XYb/6e38R4b/XIf/cIn/ZYj/Rof/6+//cIr/oYz/a4P/7/L+X4f+bYn+QoX/pIz/7vH/noz/8PH/7O7/4ub/oIz/moz/oY3/O4X/cYn/RYX+aIj/5+r9QYX+XYf+cYn+Z4j+i5j9PoT/po3/8vT/ucD/09f+hYr/8vT8R4X8UYb/3uH+ZIn+W4f+cIn/7O/+hIr+VYf+b4j+ZYj+VYb/6Ov9RYX9UIb9bYn9O4T/oIz9Y4f9WIb/gov/bIj/dYr/gYr/pY3/7e//dYr9PoX/pY3/8vL/PID/7/L+hor+hor/8fP/8fP/o43/o43/7O//n4v/n47/nI7/8PL/6+7/6ez/5+v9QIX/7fD9SoX9SIX9RYX9Q4X+YIf/6u7/7/H+g4r+gYr+gIr+for+fYr+cYn9O4T+e4n+a4j+ZYj+VYb9T4b9PYT+eIn9TYb/8vT+dYn+c4n+don+cIj+Zoj+bYj+aIj+XYf+Yof+W4f/xs/+Wof9U4b+V4b/0Nf/ur3+hor+hYr/1Nv/oY39TIb+eon/1t3/3eL/3+T/0dn/y9P/m4z+aoj9Uob+WYf9UYb/ydL/yNH/2+H/ztb/xM7/197/2uD/0tr/zNT/2d//zdX/noz/w83/4eb/oIz/2N//o43/pI3/nYz/uMX/qr7/u8f/pY3/vcn/p7v/wcv/tMP/ssL/r8H/rb//usf/wMv/tcP+kKL+h5f/sr7/o7f/oLT/k6/+mav+kKr+lKH+fqH+bZf+dJb+hJH9X5H+e4z/v8n+iKX+h6H/rL//rbr/mrP/mbD+dp3+fpz+jJv+fpf9ZJT+e5D+aZD/qbf+oa/+hp3+bpD+co/+ZI/+Xoz9Vos1azWoAAAAeHRSTlMAvwe8iBv3u3BtPR61ZUcx9/Xy7ebf3dHPt7Gtqqebm5aMh4V3cXBcW1pGMSUaEgX729qtqqmll3VlRT84Ny8g/vr48fDw7u7t5tzVz8vIx8bGxsW/u7KwsLCmnZybko6Ghn1wb2hkX0Q+KhMT+eTjx8bDwa1NSEgfarKCAAAHAElEQVR42uzTv2qDQBwH8F/cjEtEQUEQBOkUrIMxRX2AZMiWPVsCCYX+rxacmkfIQzjeIwRK28GXKvQ0talytvg7MvRz2/c47ntwP/i7tehpkzyfaJ64Bu4EUcsrNFEArpbq2xF1CfxIN681biXgJFSyWkoEXARy1kAOgINIzhrJEaBz1Jcvur9Y+HolUB3AZuxLii3RSLKVQ+gBsvt9yaw81jEP8QPg0t8LInwjlrkOqB5JwYYjNikEgMkglNG85QMiYUA+DST4QSr3zgFPSCgTapiECqEDfWs2jXediaczq/+b669iBNetK1zQA7sOF2VBK+MYzbjd+xGdAdPwMkbkDoFltEU1AoaNu0XlbhgFVimyFWsEUmSsUbxLkLE+wTxJUsSVJHNGgV6CrHfyBZ6RnX6BJ2T/BT5orWOXBOIogOMPCoTg/gBFQQiCoAiaagmCaKiGlpbGKGiqP8C51HA60MYGqyF/56ig4CAOIuIk3g1yg5yDiyD6B+Tdc/i9Gn734Odn/HLv8bjppzrgNrVmt6rXWGrNtkDh6DS1RqdhXiQ7m0uf2vlbd/YgrKcvzZ6B5+pbsyvguXnR7AZ44i+axYEn+apZEnjuXjW7A56HtGYPENZxIhKJXF+kNbu4Xq5NHINStBmoZDSr4N4oKBhNVMxoVmwi1T9IWKiU1axkoVjIA0RWMxHyAMNaGeW0GlkrBihELWTntLItFAUlI7axdHn+89fIHf1r3nTqhfrw/NLfGjMgtLhJeR0hhJOj0S0LUXZp8xwhRMczqThwJU2qI3wT0uya32o2iRPh65hUEri23wlbBBqeHB2MjtzMWtCqNp3fBq57usAVaCrHHrae3KYCuXT+Hrh288SgigZy7GHrKT707QLXY56wq2ioOmBYRTadfwSukwIxq6OFHPvY+nJb1NGMzp8A136ByLdw71x1wBxbK0/n94HroPBGFBsBR25jbGO5OdiKdLpwAGxndEUFF7dVB7SxfdDpM+A7pCvGrUBfbl1sXbn1aVs5BL7fVsjktYkwDOMvAwk5hAQEey1USmuLiHp2QRFvigouuKB4EvwTxO2ouOHFfT2ICAaXiBFFvNWQybSJFZI0JKGQaFtpLbiexHm/+eZ7AlXnnfnd5sf7PN+TbL8MjL90yZquwK5guiy7cUxvp+DsxIpPXPzoXwMesfuE6Z0UnH1XgepD5rThCqwKhjqtzqqY3kfBWYIVE6r5i+HyrPKG+qLOJjC9hIJz6CzwQTXPGs4bYKhZdfYB04coOEux4ut9pmMOYGUO6Kizr5heSsEZwopZ1Wz+tDKrsvlHqbNZTA9RcNKPge+qecJw3gBDTaiz75heQ8FZdg14/Iqbq4YbYTViqCqrV48xvYyCY63DjswrF9scwMocYLPKYHadRQI2XgHec/WYobwBhhpj9R6zG0nCCiwZeeQy8ndVRqVYSRK2ngNKXP3WUN4AQ71lVcLsVpKwC0sqXJ0x1DircUNlWFUwu4sk9GLJ9D3mijGAjTHgijqaxmwvSThwA6ir7m++8gb45ps6qmP2AEnox5KO6m75ymHj+KaljjqY7ScJg6eAz6r7s6+8AQsdaQZJwhCWtF4wHV+Nshn1TVsdtTA7RBLSWDKvuut/G1BXR/OYTZOE2Cnk9RuXaWMAG2PANJvXXdEYSbCuIzkur/jGG+CbCptcV9QiERuwpfzaxfbNGJsx37xjU8bkBpKx4iagnhs1DQ/wzSgaxQqSsQ1r7IxL3hjAxnguz8bG5DaSseM2MMXlOd+U2JR8k2MzhcndJKMXa2pcnr2+8IDrWTY1TPaSjINPgXaW+aFNiUVJix/qpI3JgySj/y7QUO1NbbwBWjTVSQOT/SRjEGtaz5kZbT6y+KjFjDppYXKQZKTOA/OqvaGNN0CLhjqZx2SKZKSx5uctpq3NOxbvtGirk5+YTJOM2HlEtdcXHlBXJ13BGMmw7iAFbp/SwhugxRSLQlfQIiGLsMfh+srCAyosHMwtIik9TwDvvQDCpYekbHkGVHMujhY2C1sLh0UVc1tIyo4LQI3ry1p4A7Qos6hhbjdJ2YtFjbcutr+IRc1fxKKBub0kpQ+LfjlufVOLycKf78KkFk33wPmFuT6SkriETNrFYn7GEE2nWHSahpjJF4v2ZFcsQVIG3DxMmHsC3xfm5vDgyZz7PDBAUlIPIiFFUoaPRcIwSVkbzYAYSbGiGWCRmEXHI2ARyemJYkAPydkcxYDNJCd5IgJWkZw9UQzYQ3L6ohjQR3ISJyMgQXIGohgwQHKGoxgwTHKs9UdDs345hWBV+AGrKAyp8AMOUyiSYd9PUjjWbroYik1rKSSr42Hejx+m0KxefEbM4tUUAUf2x2XPx/cfoWiIJZKLA46IL04mYvQf/AaSGokYCo6ekAAAAABJRU5ErkJggg==" alt="" class="block h-12 mx-auto">
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
    
@endsection
@endsection