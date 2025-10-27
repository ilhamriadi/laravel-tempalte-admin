@extends('layouts.master')
@section('content')
    <!-- Page-content -->
    <div class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
        <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">
            <div class="mt-1 -ml-3 -mr-3 rounded-none card">
                <div class="card-body !px-2.5">
                    <div class="grid grid-cols-1 gap-5 lg:grid-cols-12 2xl:grid-cols-12">
                        <div class="lg:col-span-2 2xl:col-span-1">
                            <div class="relative inline-block rounded-full shadow-md size-20 bg-slate-100 profile-user xl:size-28">
                                <img src="{{ asset('assets/images/avatar-1.png') }}" alt="" class="object-cover border-0 rounded-full img-thumbnail user-profile-image">
                                <div class="absolute bottom-0 flex items-center justify-center rounded-full size-8 ltr:right-0 rtl:left-0 profile-photo-edit">
                                    <input id="profile-img-file-input" type="file" class="hidden profile-img-file-input">
                                    <label for="profile-img-file-input" class="flex items-center justify-center bg-white rounded-full shadow-lg cursor-pointer size-8 dark:bg-zink-600 profile-photo-edit">
                                        <i data-lucide="image-plus" class="size-4 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-500"></i>
                                    </label>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="lg:col-span-10 2xl:col-span-9">
                            <h5 class="mb-1">StarCode Kh <i data-lucide="badge-check" class="inline-block size-4 text-sky-500 fill-sky-100 dark:fill-custom-500/20"></i></h5>
                            <div class="flex gap-3 mb-4">
                                <p class="text-slate-500 dark:text-zink-200"><i data-lucide="user-circle" class="inline-block size-4 ltr:mr-1 rtl:ml-1 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-500"></i> Web Developer</p>
                                <p class="text-slate-500 dark:text-zink-200"><i data-lucide="map-pin" class="inline-block size-4 ltr:mr-1 rtl:ml-1 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-500"></i> Phnom Penh, Cambodia</p>
                            </div>
                            <ul class="flex flex-wrap gap-3 mt-4 text-center divide-x divide-slate-200 dark:divide-zink-500 rtl:divide-x-reverse">
                                <li class="px-5">
                                    <h5>1542</h5>
                                    <p class="text-slate-500 dark:text-zink-200">Following</p>
                                </li>
                                <li class="px-5">
                                    <h5>10.65k</h5>
                                    <p class="text-slate-500 dark:text-zink-200">Followers</p>
                                </li>
                                <li class="px-5">
                                    <h5>115+</h5>
                                    <p class="text-slate-500 dark:text-zink-200">Products</p>
                                </li>
                            </ul>
                            <p class="mt-4 text-slate-500 dark:text-zink-200">Strong leader and negotiator adept at driving collaboration and innovation. Highly accomplished Web Developer with 10+ years of experience creating, launching and leading successful business ventures. Proven ability to build relationships, drive customer loyalty and increase profitability.</p>
                            <div class="flex gap-2 mt-4">
                                <a href="#!" class="flex items-center justify-center transition-all duration-200 ease-linear rounded size-9 text-sky-500 bg-sky-100 hover:bg-sky-200 dark:bg-sky-500/20 dark:hover:bg-sky-500/30">
                                    <i data-lucide="facebook" class="size-4"></i>
                                </a>
                                <a href="#!" class="flex items-center justify-center text-pink-500 transition-all duration-200 ease-linear bg-pink-100 rounded size-9 hover:bg-pink-200 dark:bg-pink-500/20 dark:hover:bg-pink-500/30">
                                    <i data-lucide="instagram" class="size-4"></i>
                                </a>
                                <a href="#!" class="flex items-center justify-center text-red-500 transition-all duration-200 ease-linear bg-red-100 rounded size-9 hover:bg-red-200 dark:bg-red-500/20 dark:hover:bg-red-500/30">
                                    <i data-lucide="globe" class="size-4"></i>
                                </a>
                                <a href="#!" class="flex items-center justify-center transition-all duration-200 ease-linear rounded text-custom-500 bg-custom-100 size-9 hover:bg-custom-200 dark:bg-custom-500/20 dark:hover:bg-custom-500/30">
                                    <i data-lucide="linkedin" class="size-4"></i>
                                </a>
                                <a href="#!" class="flex items-center justify-center text-pink-500 transition-all duration-200 ease-linear bg-pink-100 rounded size-9 hover:bg-pink-200 dark:bg-pink-500/20 dark:hover:bg-pink-500/30">
                                    <i data-lucide="dribbble" class="size-4"></i>
                                </a>
                                <a href="#!" class="flex items-center justify-center transition-all duration-200 ease-linear rounded size-9 text-slate-500 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500">
                                    <i data-lucide="github" class="size-4"></i>
                                </a>
                            </div>
                        </div>
                        <div class="lg:col-span-12 2xl:col-span-2">
                            <div class="flex gap-2 2xl:justify-end">
                                <a href="mailto:StarCode Kh@gmail.com" class="flex items-center justify-center size-[37.5px] p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"><i data-lucide="mail" class="size-4"></i></a>
                                <button type="button" class="text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Hire Us</button>
                    
                                <div class="relative dropdown">
                                    <button class="flex items-center justify-center size-[37.5px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20" id="accountSettings" data-bs-toggle="dropdown"><i data-lucide="more-horizontal" class="size-4"></i></button>
                                    <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white dark:bg-zink-600 rounded-md shadow-md dropdown-menu min-w-[10rem]" aria-labelledby="accountSettings">
                                        <li class="px-3 mb-2 text-sm text-slate-500">
                                            Payments
                                        </li>
                                        <li>
                                            <a class="block px-4 py-1.5 text-base font-medium transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">Create Invoice</a>
                                        </li>
                                        <li>
                                            <a class="block px-4 py-1.5 text-base font-medium transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">Pending Billing</a>
                                        </li>
                                        <li>
                                            <a class="block px-4 py-1.5 text-base font-medium transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">Genarate Bill</a>
                                        </li>
                                        <li>
                                            <a class="block px-4 py-1.5 text-base font-medium transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">Subscription</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div><!--end grid-->
                </div>
                <div class="card-body !px-2.5 !py-0">
                    <ul class="flex flex-wrap w-full text-sm font-medium text-center nav-tabs">
                        <li class="group active">
                            <a href="javascript:void(0);" data-tab-toggle="" data-target="overviewTabs" class="inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-t-md text-slate-500 dark:text-zink-200 border-b border-transparent group-[.active]:text-custom-500 dark:group-[.active]:text-custom-500 group-[.active]:border-b-custom-500 dark:group-[.active]:border-b-custom-500 hover:text-custom-500 dark:hover:text-custom-500 active:text-custom-500 dark:active:text-custom-500 -mb-[1px]">Overview</a>
                        </li>
                        <li class="group">
                            <a href="javascript:void(0);" data-tab-toggle="" data-target="documentsTabs" class="inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-t-md text-slate-500 dark:text-zink-200 border-b border-transparent group-[.active]:text-custom-500 dark:group-[.active]:text-custom-500 group-[.active]:border-b-custom-500 dark:group-[.active]:border-b-custom-500 hover:text-custom-500 dark:hover:text-custom-500 active:text-custom-500 dark:active:text-custom-500 -mb-[1px]">Documents</a>
                        </li>
                        <li class="group">
                            <a href="javascript:void(0);" data-tab-toggle="" data-target="projectsTabs" class="inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-t-md text-slate-500 dark:text-zink-200 border-b border-transparent group-[.active]:text-custom-500 dark:group-[.active]:text-custom-500 group-[.active]:border-b-custom-500 dark:group-[.active]:border-b-custom-500 hover:text-custom-500 dark:hover:text-custom-500 active:text-custom-500 dark:active:text-custom-500 -mb-[1px]">Projects</a>
                        </li>
                        <li class="group">
                            <a href="javascript:void(0);" data-tab-toggle="" data-target="followersTabs" class="inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-t-md text-slate-500 dark:text-zink-200 border-b border-transparent group-[.active]:text-custom-500 dark:group-[.active]:text-custom-500 group-[.active]:border-b-custom-500 dark:group-[.active]:border-b-custom-500 hover:text-custom-500 dark:hover:text-custom-500 active:text-custom-500 dark:active:text-custom-500 -mb-[1px]">Followers</a>
                        </li>
                    </ul>
                </div>
            </div><!--end card-->

            <div class="tab-content">
                <div class="block tab-pane" id="overviewTabs">
                    <div class="grid grid-cols-1 gap-x-5 2xl:grid-cols-12">
                        <div class="2xl:col-span-9">
                            <div class="grid grid-cols-1 gap-x-5 xl:grid-cols-12">
                                <div class="xl:col-span-9">
                                    <div class="card">
                                        <div class="card-body">
                                            <h6 class="mb-3 text-15">Recent Statistics</h6>
                                            <div id="recentStatistics" class="apex-charts" data-chart-colors='["bg-custom-500", "bg-purple-500"]' dir="ltr"></div>
                                        </div>
                                    </div>
                                </div><!--end col-->
                                <div class="text-center card bg-custom-500 xl:col-span-3">
                                    <div class="flex flex-col h-full card-body">
                                        <img src="{{ asset('assets/images/medal.png') }}" alt="" class="w-2/6 mx-auto">
                                        <div class="mt-5 mb-auto">
                                            <h5 class="mb-1 text-white">Congratulation Paula</h5>
                                            <p class="text-custom-200">on your outstanding achievement! Your hard work and dedication have truly paid off.</p>
                                        </div>
                                        <div class="p-3 mt-5 rounded-md bg-custom-600">
                                            <h2 class="mb-1 text-white">1054</h2>
                                            <p class="text-custom-200">It's very easy to convert your points to cash now.</p>
                                        </div>
                                    </div>
                                </div><!--end col-->
                            </div><!--end grid-->
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="mb-3 text-15">Overview</h6>
                                    <p class="mb-2 text-slate-500 dark:text-zink-200">A Web Developer creates and designs different websites for clients. They are responsible for their aesthetic as well as their function. Professionals in this field may also need to be able to ensure sites are compatible with multiple types of media. Web Developers need to have a firm understanding of programming and graphical design. Having a strong resume that emphasizes these attributes makes it significantly easier to get hired as a Web Developer.</p>
                                    <p class="text-slate-500 dark:text-zink-200">As a web designer, my objective is to make a positive impact on clients, co-workers, and the Internet using my skills and experience to design compelling and attractive websites. Solving code problems. Editing & Design with designing team in the company to build perfect web designs.</p>
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="2xl:col-span-3">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="mb-4 text-15">Personal Information</h6>
                                    <div class="overflow-x-auto">
                                        <table class="w-full ltr:text-left rtl:ext-right">
                                            <tbody>
                                                <tr>
                                                    <th class="py-2 font-semibold ps-0" scope="row">Designation</th>
                                                    <td class="py-2 text-right text-slate-500 dark:text-zink-200">Web Developer</td>
                                                </tr>
                                                <tr>
                                                    <th class="py-2 font-semibold ps-0" scope="row">Phone No</th>
                                                    <td class="py-2 text-right text-slate-500 dark:text-zink-200">617 219 6245</td>
                                                </tr>p
                                                <tr>
                                                    <th class="py-2 font-semibold ps-0" scope="row">Birth of Date</th>
                                                    <td class="py-2 text-right text-slate-500 dark:text-zink-200">15 Dec, 1998</td>
                                                </tr>
                                                <tr>
                                                    <th class="py-2 font-semibold ps-0" scope="row">Website</th>
                                                    <td class="py-2 text-right text-slate-500 dark:text-zink-200"><a href="http://StarCode Kh.in/" target="_blank" class="text-custom-500">www.starcodekh.com</a></td>
                                                </tr>
                                                <tr>
                                                    <th class="py-2 font-semibold ps-0" scope="row">Email</th>
                                                    <td class="py-2 text-right text-slate-500 dark:text-zink-200">paula@StarCode Kh.com</td>
                                                </tr>
                                                <tr>
                                                    <th class="py-2 font-semibold ps-0" scope="row">Location</th>
                                                    <td class="py-2 text-right text-slate-500 dark:text-zink-200">Phnom Penh, Cambodia</td>
                                                </tr>
                                                <tr>
                                                    <th class="pt-2 font-semibold ps-0" scope="row">Joining Date</th>
                                                    <td class="pt-2 text-right text-slate-500 dark:text-zink-200">01 July 2023</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div><!--end card-->
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="mb-4 text-15">Earning Reports</h6>

                                    <div class="divide-y divide-slate-200 dark:divide-zink-500">
                                        <div class="flex items-center gap-3 pb-3">
                                            <div class="flex items-center justify-center rounded-full size-12 bg-slate-100 dark:bg-zink-600">
                                                <i data-lucide="wallet" class="size-5 text-slate-500 dark:text-zink-200"></i>
                                            </div>
                                            <div>
                                                <h6 class="text-lg">$245.98</h6>
                                                <p class="text-slate-500 dark:text-zink-200">Total Earning</p>
                                            </div>
                                        </div>
                                        <div class="flex items-center gap-3 py-3">
                                            <div class="flex items-center justify-center rounded-full size-12 bg-slate-100 dark:bg-zink-600">
                                                <i data-lucide="goal" class="size-5 text-slate-500 dark:text-zink-200"></i>
                                            </div>
                                            <div>
                                                <h6 class="text-lg">$125.23</h6>
                                                <p class="text-slate-500 dark:text-zink-200">Items Earning</p>
                                            </div>
                                        </div>
                                        <div class="flex items-center gap-3 pt-3">
                                            <div class="flex items-center justify-center rounded-full size-12 bg-slate-100 dark:bg-zink-600">
                                                <i data-lucide="package" class="size-5 text-slate-500 dark:text-zink-200"></i>
                                            </div>
                                            <div>
                                                <h6 class="text-lg">$21.49</h6>
                                                <p class="text-slate-500 dark:text-zink-200">Contributor Bonus</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!--end card-->
                        </div><!--end col-->
                    </div><!--end grid-->

                    <div class="grid grid-cols-1 gap-x-5 lg:grid-cols-2 2xl:grid-cols-3">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="mb-3 text-15">Payment History</h6>
                                <div class="overflow-x-auto">
                                    <table class="w-full whitespace-nowrap">
                                        <thead class="ltr:text-left rtl:text-right">
                                            <tr>
                                                <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">Date</th>
                                                <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">Amount</th>
                                                <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">Status</th>
                                                <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">Description</th>
                                                <th class="px-3.5 py-2.5 font-semibold border-b border-slate-200 dark:border-zink-500">PDF</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">2 April, 2023</td>
                                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">$321.00</td>
                                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 text-green-500">Paid</td>
                                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Subscription</td>
                                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!" class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600"><i class="ri-download-2-line"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">8 June, 2023</td>
                                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">$184.00</td>
                                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 text-yellow-500">Pending</td>
                                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">April Autofile</td>
                                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!" class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600"><i class="ri-download-2-line"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">15 July, 2023</td>
                                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">$325.00</td>
                                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 text-yellow-500">Pending</td>
                                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Subscription</td>
                                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!" class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600"><i class="ri-download-2-line"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">29 July, 2023</td>
                                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">$321.00</td>
                                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 text-green-500">Paid</td>
                                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Prepaid Bill</td>
                                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!" class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600"><i class="ri-download-2-line"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">12 Aug, 2023</td>
                                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">$189.99</td>
                                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500 text-green-500">Paid</td>
                                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500">Subscription</td>
                                                <td class="px-3.5 py-2.5 border-y border-slate-200 dark:border-zink-500"><a href="#!" class="transition-all duration-150 ease-linear text-custom-500 hover:text-custom-600"><i class="ri-download-2-line"></i></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!--end card-->
                        <div class="card">
                            <div class="card-body">
                                <h6 class="mb-3 text-15">Card Overview</h6>

                                <div class="flex flex-col gap-3">
                                    <a href="#!" class="flex items-center gap-3 p-2 border rounded-md border-slate-200 dark:border-zink-500">
                                        <div class="flex items-center justify-center rounded-md size-12 shrink-0">
                                            <img src="{{ asset('assets/images/img-013.png') }}" alt="" class="h-10">
                                        </div>
                                        <div class="grow">
                                            <h5 class="mb-1 text-15">Mastercard</h5>
                                            <p class="text-sm text-slate-500 dark:text-zink-200">XXXX XXXX XXXX 1501</p>
                                        </div>
                                        <div>
                                            <span class="px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-sky-100 border-transparent text-sky-500 dark:bg-sky-500/20 dark:border-transparent">Primary</span>
                                        </div>
                                    </a>
                                    <a href="#!" class="flex items-center gap-3 p-2 border rounded-md border-slate-200 dark:border-zink-500">
                                        <div class="flex items-center justify-center rounded-md size-12 shrink-0">
                                            <img src="{{ asset('assets/images/img-022.png') }}" alt="" class="h-10">
                                        </div>
                                        <div class="grow">
                                            <h5 class="mb-1 text-15">Visa Card</h5>
                                            <p class="text-sm text-slate-500 dark:text-zink-200">XXXX XXXX XXXX 9871</p>
                                        </div>
                                    </a>
                                    <a href="#!" class="flex items-center gap-3 p-2 border rounded-md border-slate-200 dark:border-zink-500">
                                        <div class="flex items-center justify-center rounded-md size-12 shrink-0">
                                            <img src="{{ asset('assets/images/img-032.png') }}" alt="" class="h-10">
                                        </div>
                                        <div class="grow">
                                            <h5 class="mb-1 text-15">Discover Network</h5>
                                            <p class="text-sm text-slate-500 dark:text-zink-200">XXXX XXXX XXXX 7435</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="mt-3 text-center">
                                    <a href="#!" class="inline-block underline text-custom-500">Add New Card <i data-lucide="move-right" class="inline-block ml-2 size-4 rtl:-rotate-180"></i></a>
                                </div>
                            </div>
                        </div><!--end card-->
                        <div class="card">
                            <div class="card-body">
                                <div class="flex items-center mb-3">
                                    <h6 class="grow text-15">Plan Details</h6>
                                    <a href="#!" class="underline text-custom-500">Change Plan</a>
                                </div>
                                <div class="grid grid-cols-1 gap-5 mb-3 md:grid-cols-3">
                                    <div>
                                        <p class="mb-1 text-slate-500 dark:text-zink-200">Plan Type</p>
                                        <h6>Regular Plan</h6>
                                    </div><!--end col-->
                                    <div>
                                        <p class="mb-1 text-slate-500 dark:text-zink-200">Monthly Limit</p>
                                        <h6>2 Download</h6>
                                    </div><!--end col-->
                                    <div>
                                        <p class="mb-1 text-slate-500 dark:text-zink-200">Cost</p>
                                        <h6>$26/Monthly</h6>
                                    </div><!--end col-->
                                </div><!--end grid-->
                                <div class="px-4 py-3 mb-2 text-sm rounded-md text-slate-500 dark:text-zink-200 bg-slate-50 dark:bg-zink-600">
                                    <h6 class="mb-1">Our discounted pricing is available until August 16, 2023.</h6>
                                    <p>After this date, our pricing will transition to $22. For more details, click <a href="#!" class="font-semibold text-slate-700 dark:text-zink-50">Learn More</a></p>
                                </div>
                                <p class="mb-2 text-slate-500 dark:text-zink-200">Plan Benefits</p>
                                <ul class="flex flex-col gap-1 list-disc list-inside">
                                    <li>Build with TailwindCSS & Vite</li>
                                    <li>Multiple Layouts</li>
                                    <li>Easy to Customize</li>
                                </ul>
                            </div>
                        </div><!--end card-->
                    </div><!--end grid-->
                </div><!--end tab pane-->
                <div class="hidden tab-pane" id="documentsTabs">
                    <div class="flex items-center gap-3 mb-4">
                        <h5 class="underline grow">Documents</h5>
                        <div class="shrink-0">
                            <button data-modal-target="addDocuments" type="button" class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Add Document</button>
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full align-middle border-separate whitespace-nowrap border-spacing-y-1">
                            <thead class="text-left bg-white dark:bg-zink-700">
                                <tr>
                                    <th class="px-3.5 py-2.5 font-semibold border-b border-transparent">
                                        <div class="flex items-center h-full">
                                            <input id="Checkbox1" class="size-4 bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800" type="checkbox" value="">
                                        </div>
                                    </th>
                                    <th class="px-3.5 py-2.5 font-semibold border-b border-transparent">Documents Type</th>
                                    <th class="px-3.5 py-2.5 font-semibold border-b border-transparent">Documents Name</th>
                                    <th class="px-3.5 py-2.5 font-semibold border-b border-transparent">File Size</th>
                                    <th class="px-3.5 py-2.5 font-semibold border-b border-transparent">Modify Date</th>
                                    <th class="px-3.5 py-2.5 font-semibold border-b border-transparent">Uploaded</th>
                                    <th class="px-3.5 py-2.5 font-semibold border-b border-transparent">Status</th>
                                    <th class="px-3.5 py-2.5 font-semibold border-b border-transparent text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white dark:bg-zink-700">
                                    <td class="px-3.5 py-2.5 border-y border-transparent">
                                        <div class="flex items-center h-full">
                                            <input id="Checkbox2" class="size-4 bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td class="px-3.5 py-2.5 border-y border-transparent">
                                        <span class="px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-slate-100 border-transparent text-slate-500 dark:bg-slate-500/20 dark:text-zink-200 dark:border-transparent">Docs</span>
                                    </td>
                                    <td class="px-3.5 py-2.5 border-y border-transparent">starcode Docs File</td>
                                    <td class="px-3.5 py-2.5 border-y border-transparent">2.5MB</td>
                                    <td class="px-3.5 py-2.5 border-y border-transparent">15 Feb, 2023</td>
                                    <td class="px-3.5 py-2.5 border-y border-transparent">Admin</td>
                                    <td class="px-3.5 py-2.5 border-y border-transparent"><span class="ppx-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-green-100 border-transparent text-green-500 dark:bg-green-500/20 dark:border-transparent">Successful</span></td>
                                    <td class="px-3.5 py-2.5 border-y border-transparent">
                                        <div class="flex items-center justify-end gap-2">
                                            <a href="#!" class="flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><i data-lucide="eye" class="size-3"></i></a>
                                            <a href="#!" class="flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><i data-lucide="file-edit" class="size-3"></i></a>
                                            <a href="#!" class="flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><i data-lucide="arrow-down-to-line" class="size-3"></i></a>
                                            <a href="#!" class="flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><i data-lucide="trash-2" class="size-3"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="bg-white dark:bg-zink-700">
                                    <td class="px-3.5 py-2.5 border-y border-transparent">
                                        <div class="flex items-center h-full">
                                            <input id="Checkbox2" class="size-4 bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td class="px-3.5 py-2.5 border-y border-transparent">
                                        <span class="px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-slate-100 border-transparent text-slate-500 dark:bg-slate-500/20 dark:text-zink-200 dark:border-transparent">PSD</span>
                                    </td>
                                    <td class="px-3.5 py-2.5 border-y border-transparent">starcode Design Kit.psd</td>
                                    <td class="px-3.5 py-2.5 border-y border-transparent">234.87 MB</td>
                                    <td class="px-3.5 py-2.5 border-y border-transparent">29 Jan, 2023</td>
                                    <td class="px-3.5 py-2.5 border-y border-transparent">StarCode Kh</td>
                                    <td class="px-3.5 py-2.5 border-y border-transparent"><span class="ppx-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-green-100 border-transparent text-green-500 dark:bg-green-500/20 dark:border-transparent">Successful</span></td>
                                    <td class="px-3.5 py-2.5 border-y border-transparent">
                                        <div class="flex items-center justify-end gap-2">
                                            <a href="#!" class="flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><i data-lucide="eye" class="size-3"></i></a>
                                            <a href="#!" class="flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><i data-lucide="file-edit" class="size-3"></i></a>
                                            <a href="#!" class="flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><i data-lucide="arrow-down-to-line" class="size-3"></i></a>
                                            <a href="#!" class="flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><i data-lucide="trash-2" class="size-3"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="bg-white dark:bg-zink-700">
                                    <td class="px-3.5 py-2.5 border-y border-transparent">
                                        <div class="flex items-center h-full">
                                            <input id="Checkbox2" class="size-4 bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td class="px-3.5 py-2.5 border-y border-transparent">
                                        <span class="px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-slate-100 border-transparent text-slate-500 dark:bg-slate-500/20 dark:text-zink-200 dark:border-transparent">SVG</span>
                                    </td>
                                    <td class="px-3.5 py-2.5 border-y border-transparent">home Pattern Wave.svg</td>
                                    <td class="px-3.5 py-2.5 border-y border-transparent">3.87 MB</td>
                                    <td class="px-3.5 py-2.5 border-y border-transparent">24 Sept, 2023</td>
                                    <td class="px-3.5 py-2.5 border-y border-transparent">Admin</td>
                                    <td class="px-3.5 py-2.5 border-y border-transparent"><span class="px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-red-100 border-transparent text-red-500 dark:bg-red-500/20 dark:border-transparent">Error</span></td>
                                    <td class="px-3.5 py-2.5 border-y border-transparent">
                                        <div class="flex items-center justify-end gap-2">
                                            <a href="#!" class="flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><i data-lucide="eye" class="size-3"></i></a>
                                            <a href="#!" class="flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><i data-lucide="file-edit" class="size-3"></i></a>
                                            <a href="#!" class="flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><i data-lucide="arrow-down-to-line" class="size-3"></i></a>
                                            <a href="#!" class="flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><i data-lucide="trash-2" class="size-3"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="bg-white dark:bg-zink-700">
                                    <td class="px-3.5 py-2.5 border-y border-transparent">
                                        <div class="flex items-center h-full">
                                            <input id="Checkbox2" class="size-4 bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td class="px-3.5 py-2.5 border-y border-transparent">
                                        <span class="px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-slate-100 border-transparent text-slate-500 dark:bg-slate-500/20 dark:text-zink-200 dark:border-transparent">SCSS</span>
                                    </td>
                                    <td class="px-3.5 py-2.5 border-y border-transparent">tailwind.scss</td>
                                    <td class="px-3.5 py-2.5 border-y border-transparent">0.100 KB</td>
                                    <td class="px-3.5 py-2.5 border-y border-transparent">03 April, 2023</td>
                                    <td class="px-3.5 py-2.5 border-y border-transparent">Paula</td>
                                    <td class="px-3.5 py-2.5 border-y border-transparent"><span class="ppx-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-green-100 border-transparent text-green-500 dark:bg-green-500/20 dark:border-transparent">Successful</span></td>
                                    <td class="px-3.5 py-2.5 border-y border-transparent">
                                        <div class="flex items-center justify-end gap-2">
                                            <a href="#!" class="flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><i data-lucide="eye" class="size-3"></i></a>
                                            <a href="#!" class="flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><i data-lucide="file-edit" class="size-3"></i></a>
                                            <a href="#!" class="flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><i data-lucide="arrow-down-to-line" class="size-3"></i></a>
                                            <a href="#!" class="flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><i data-lucide="trash-2" class="size-3"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="bg-white dark:bg-zink-700">
                                    <td class="px-3.5 py-2.5 border-y border-transparent">
                                        <div class="flex items-center h-full">
                                            <input id="Checkbox2" class="size-4 bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800" type="checkbox" value="">
                                        </div>
                                    </td>
                                    <td class="px-3.5 py-2.5 border-y border-transparent">
                                        <span class="px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-slate-100 border-transparent text-slate-500 dark:bg-slate-500/20 dark:text-zink-200 dark:border-transparent">MP4</span>
                                    </td>
                                    <td class="px-3.5 py-2.5 border-y border-transparent">starcode Guide Video.mp4</td>
                                    <td class="px-3.5 py-2.5 border-y border-transparent">149.33 MB</td>
                                    <td class="px-3.5 py-2.5 border-y border-transparent">12 Nov, 2023</td>
                                    <td class="px-3.5 py-2.5 border-y border-transparent">StarCode Kh</td>
                                    <td class="px-3.5 py-2.5 border-y border-transparent"><span class="px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-yellow-100 border-transparent text-yellow-500 dark:bg-yellow-500/20 dark:border-transparent">Pending</span></td>
                                    <td class="px-3.5 py-2.5 border-y border-transparent">
                                        <div class="flex items-center justify-end gap-2">
                                            <a href="#!" class="flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><i data-lucide="eye" class="size-3"></i></a>
                                            <a href="#!" class="flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><i data-lucide="file-edit" class="size-3"></i></a>
                                            <a href="#!" class="flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><i data-lucide="arrow-down-to-line" class="size-3"></i></a>
                                            <a href="#!" class="flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><i data-lucide="trash-2" class="size-3"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="flex flex-col items-center gap-4 mt-4 mb-4 md:flex-row">
                        <div class="grow">
                            <p class="text-slate-500 dark:text-zink-200">Showing <b>6</b> of <b>18</b> Results</p>
                        </div>
                        <ul class="flex flex-wrap items-center gap-2 shrink-0">
                            <li>
                                <a href="#!" class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-50 dark:[&.active]:text-custom-50 [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto"><i class="size-4 rtl:rotate-180" data-lucide="chevron-left"></i></a>
                            </li>
                            <li>
                                <a href="#!" class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-50 dark:[&.active]:text-custom-50 [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto">1</a>
                            </li>
                            <li>
                                <a href="#!" class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-50 dark:[&.active]:text-custom-50 [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto">2</a>
                            </li>
                            <li>
                                <a href="#!" class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-50 dark:[&.active]:text-custom-50 [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto active">3</a>
                            </li>
                            <li>
                                <a href="#!" class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-50 dark:[&.active]:text-custom-50 [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto">4</a>
                            </li>
                            <li>
                                <a href="#!" class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-50 dark:[&.active]:text-custom-50 [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto">5</a>
                            </li>
                            <li>
                                <a href="#!" class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-50 dark:[&.active]:text-custom-50 [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto">6</a>
                            </li>
                            <li>
                                <a href="#!" class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-50 dark:[&.active]:text-custom-50 [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto"><i class="size-4 rtl:rotate-180" data-lucide="chevron-right"></i></a>
                            </li>
                        </ul>
                    </div>
                </div><!--end tab pane-->
                <div class="hidden tab-pane" id="projectsTabs">
                    <div class="flex items-center gap-3 mb-4">
                        <h5 class="underline grow">Projects</h5>
                        <div class="shrink-0">
                            <button type="button" class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Add Project</button>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 gap-x-5 md:grid-cols-2 2xl:grid-cols-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="flex">
                                    <div class="grow">
                                        <img src="{{ asset('assets/images/adwords.png') }}" alt="" class="h-11">
                                    </div>
                                    <div class="shrink-0">
                                        <div class="relative dropdown">
                                            <button class="flex items-center justify-center size-[37.5px] dropdown-toggle p-0 text-slate-500 btn bg-slate-200 border-slate-200 hover:text-slate-600 hover:bg-slate-300 hover:border-slate-300 focus:text-slate-600 focus:bg-slate-300 focus:border-slate-300 focus:ring focus:ring-slate-100 active:text-slate-600 active:bg-slate-300 active:border-slate-300 active:ring active:ring-slate-100 dark:bg-zink-600 dark:hover:bg-zink-500 dark:border-zink-600 dark:hover:border-zink-500 dark:text-zink-200 dark:ring-zink-400/50" id="projectDropdownmenu1" data-bs-toggle="dropdown"><i data-lucide="more-horizontal" class="size-4"></i></button>
                                            <ul class="absolute z-50 hidden py-2 mt-1 text-left list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem]" aria-labelledby="projectDropdownmenu1">
                                                <li>
                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear bg-white text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500" href="#!"><i data-lucide="eye" class="inline-block mr-1 size-3"></i> Overview</a>
                                                </li>
                                                <li>
                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear bg-white text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500" href="#!"><i data-lucide="file-edit" class="inline-block mr-1 size-3"></i> Edit</a>
                                                </li>
                                                <li>
                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear bg-white text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500" href="#!"><i data-lucide="trash-2" class="inline-block mr-1 size-3"></i> Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <h6 class="mb-1 text-16"><a href="#!">Chat App</a></h6>
                                    <p class="text-slate-500 dark:text-zink-200">Allows you to communicate with your customers in web chat rooms.</p>
                                </div>
                                <div class="flex w-full gap-3 mt-6 text-center divide-x divide-slate-200 dark:divide-zink-500 rtl:divide-x-reverse">
                                    <div class="px-3 grow">
                                        <h6 class="mb-1">16 July, 2023</h6>
                                        <p class="text-slate-500 dark:text-zink-200">Due Date</p>
                                    </div>
                                    <div class="px-3 grow">
                                        <h6 class="mb-1">$8,740.00</h6>
                                        <p class="text-slate-500 dark:text-zink-200">Budget</p>
                                    </div>
                                </div>
                                <div class="w-full h-1.5 mt-6 rounded-full bg-slate-100 dark:bg-zink-600">
                                    <div class="h-1.5 rounded-full bg-custom-500" style="width: 25%"></div>
                                </div>
                            </div>
                        </div><!--end card & col-->
                        <div class="card">
                            <div class="card-body">
                                <div class="flex">
                                    <div class="grow">
                                        <img src="{{ asset('assets/images/app-store.png') }}" alt="" class="h-11">
                                    </div>
                                    <div class="shrink-0">
                                        <div class="relative dropdown">
                                            <button class="flex items-center justify-center size-[37.5px] dropdown-toggle p-0 text-slate-500 btn bg-slate-200 border-slate-200 hover:text-slate-600 hover:bg-slate-300 hover:border-slate-300 focus:text-slate-600 focus:bg-slate-300 focus:border-slate-300 focus:ring focus:ring-slate-100 active:text-slate-600 active:bg-slate-300 active:border-slate-300 active:ring active:ring-slate-100 dark:bg-zink-600 dark:hover:bg-zink-500 dark:border-zink-600 dark:hover:border-zink-500 dark:text-zink-200 dark:ring-zink-400/50" id="projectDropdownmenu2" data-bs-toggle="dropdown"><i data-lucide="more-horizontal" class="size-4"></i></button>
                                            <ul class="absolute z-50 hidden py-2 mt-1 text-left list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem]" aria-labelledby="projectDropdownmenu2">
                                                <li>
                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear bg-white text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500" href="#!"><i data-lucide="eye" class="inline-block mr-1 size-3"></i> Overview</a>
                                                </li>
                                                <li>
                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear bg-white text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500" href="#!"><i data-lucide="file-edit" class="inline-block mr-1 size-3"></i> Edit</a>
                                                </li>
                                                <li>
                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear bg-white text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500" href="#!"><i data-lucide="trash-2" class="inline-block mr-1 size-3"></i> Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <h6 class="mb-1 text-16"><a href="#!">Business Template - UI/UX design</a></h6>
                                    <p class="text-slate-500 dark:text-zink-200">UX design process is iterative and non-linear, includes a lot of research.</p>
                                </div>
                                <div class="flex w-full gap-3 mt-6 text-center divide-x divide-slate-200 dark:divide-zink-500 rtl:divide-x-reverse">
                                    <div class="px-3 grow">
                                        <h6 class="mb-1">28 Nov, 2023</h6>
                                        <p class="text-slate-500 dark:text-zink-200">Due Date</p>
                                    </div>
                                    <div class="px-3 grow">
                                        <h6 class="mb-1">$10,254.00</h6>
                                        <p class="text-slate-500 dark:text-zink-200">Budget</p>
                                    </div>
                                </div>
                                <div class="w-full h-1.5 mt-6 rounded-full bg-slate-100 dark:bg-zink-600">
                                    <div class="h-1.5 rounded-full bg-sky-500" style="width: 61%"></div>
                                </div>
                            </div>
                        </div><!--end card & col-->
                        <div class="card">
                            <div class="card-body">
                                <div class="flex">
                                    <div class="grow">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIAAAACACAYAAADDPmHLAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAADsQAAA7EB9YPtSQAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAsGSURBVHic7Z19cBTlHce/v+fuIEQRmBZB25nWF2KxLWItKNpWZWidkHvZOznEsdVqa//p6OBb34emOnY6U4syxXG0dmR0Omgi2XsLCLYFxw7B6hQtoxCi+G6N4AgqIeTunl//SEoTvcvt7iV5dnmez3/ZfZ5nv7vPJ3e7e/s8S/ApLR3J64j4VgBhIr4vn8jeAwKrzuUIBsWyiVvAdDMDIWK6N5+07/BjflIdoBItmcQSYnpyxELiewuJ7A1+PIgjYFAsY61h4Ibhiwm4Op/MPKIqVjWE6gCVICD2qYVMP45mE38E+1NaAFU7f3AVvq0iUi18KQCkeKvicj9LMErnD7FvQvM4xJcCTCmF7wPQXXGlHyWo3fk95clHV09oJof45yB+gng2fqqUYiuApipF1haszI1OzgmaNzZPpoFJTQI4i4AvMtM0Ak5k4hMAgJgOM/AxER8C06uSqVs29PdsWrrpaM2gDjof4dKlhVjh7ZptKcC3AgDeJYjlY5+VxfClJORiMF0K4EwAIZebL4O4B8A2AH+LSLHVTtnvjygR8M4HfC4AcEyCbQDmVCmytmBlbky3p0/ojxSXgelaJv4Gxv7rTQJ4moB1DcXI4+3p9sNB73wgAAIAQDQf/RxK4a2oLsF2APMAnDhBkT4G8G8AF1ZZH4jOBwIiAADEs/FZQ18Hc1VnqUFgOh/w6VVAJXKJXK8sRhYD2K06yygEqvOBAAkAABwpngCg9pm5Og6XS+EG1SHcEBgBYh3JRAh4FsB81VlGYX4I+Fc0k7hCdRCnBEKAqG21MnEGwAzVWRxwEpjWR23r16qDOMH3J4FR27oDwK9U5/AE8e8LVvYnqmOMhq8FiNnWXQzcojpHXfhcAt8K0NKRvIaI16nOMRYQ8fV5K/ug6hyV8KUAsQ2pC1jIbQAmq84yFhBQBNPifMr+h+osn8R3Ali2Nb0EvAjgVNVZxpi3+ouRr/x1efsh1UGG47urgCJwJ46/zgeAz0+JFO9QHeKT+OoTYGk2/nUhxQ64/+UuKEhJfOFGK/uM6iD/I6w6wHCEFGvgofMXzlqA+TPnobdvP554fTOOlsfnZmFDqAGXfeE7mNU4Ezv3v4Bne59z24QQTHcB+OY4xPOEbz4Blmbj3xJSPOW2XuL0OK6Z+91jf3d/sBe/7FoFyXJM84UohDsX3Y6mGf//QXLd7oeR21dw3RYTX9RpZbePZT6v+OYcQEhxm5d68dNbRvx91owmNE2v9quxd5pmzBnR+QAQOy3qqS1i8rSv44EvBGi2rTMAtNQsWAGu9EDYOHyuUYVGyft24rFc7LR68owVvhBAEC+Dx27b/MaWEX+/cmgfej54eSxijWDvwb149cNXRyx74rUtVUrXRMhyKFV3qDHAFyeBBFhe6z7e04Hevl7Mn3kOevveQ35fJ8pcHst4AICSLGPVjt8geloLZjWejJ3vvYCn3/F+X2don/8wdgk951DL0rb0bBEpvg2ffBpNIDLCdIqdst9TGUL5QQ+FS+f7IYcCxADTAuUhVAcAcI7qAMoIlZXvu3oBiJUfBGUwKd935QIwcIbqDKqgwQErSvGDANNUZ1DIdNUBlAtAwEmqMyhEufzKBQBxo+oIyhganKoS9QIw7VEdQRlML6mOoFwAYlpJgK+ekpkgDkohb1IdQvmdQGBwODeXxSKWIlCjarxCQvZTSHblY/kDqrMYDAaDwWDQk7pPAps3Nk8OH5ny5TLxyWGmj4rl0N5Ny9v3u2ljSVt62pRI8XzJpPzGyEQgiA8dKUaecTtGINmRPLnMNKdEPDUcKvcWI8WXHE1kNQqeBWi2rTNCTKtAnAQwddgqCWAHiH9XsLL5Wu20ZBIXElMOwGe8ZgkoB8AUL6TsrloFW7LxOEnxUwAXYOSl+0cEdEgZur3z8g2e5iH0JMDQuL37UWvoFvGjUwYmXde+vP1ItSJR23oOwHlecgQdBp7rTGaqPhMQy8caZSn0EAHLR22IuJ+YfuRlKlrXN4KimcTVQ4M2a4/bY1pxJFK0023pqs/60+DkTloiRnkWorW1VXAp9FjNzgcApgYGHo7Z1g88ZHBOPBs/E0wPuNzGZf2TBqre8eLjdxRQTUbb92fn77wNgKvnzpl4rdunjV0JIKVYBQ8jdpnpF+m29ERN4RZ44tn4VGL6meuKTA0oh1zNTOJYgOaNzZPh/endGX3hUrPHutpRLoda4PFZAQYuv+Sh7zu+pe5YACpGvoqRZ/uuIOILvNbVkIV11D1x6kkfnu20sGMBQuXQbG95BmHglHrqawVxXccaxI6H1zsWQAKTvKUZhOqsrxP1His3faX8eQCDWowAmmME0BwjgOYYATTHCKA5RgDNMQJojhFAc4wAmmME0BwjgOYYATTHCKA5RgDNMQJojhFAc4wAmmME0BwjgOYYATTHCKA5RgDNMQJojhFAc4wAmmME0BwjgOYYATTHCKA5RgDNMQJojhFAc4wAmmME0BwjgOY4nyUM+KiuLTF9WGXN4braDTYfV1pIVZY7hYgdz0LuWACW4k1vcYbqC1mxPgFK356tmN4qy9+op1HJ5LivHAuQX7ZhDwOveUo0yOZKC+tsM9BU23dJ/GQdzb6+MWXvdVrY1TkAAX92nwcgYNeC58/dUXEd01YvbR4PCKa/V1reODBpO5he9Njs/a4yuCk80Nh3NwGvuMuDMphWtra2ykorKVTe6LK94wYGNlVa3r68vSyAmzD48g039FC4vMZNBVcCbLlsy2GEygkA7zuswgzcmk/ZFU0HgFwitxPA025yHCdsK6TsF6qtzKXsJ8F0GwB22N4BZkrkY/k+NyFcXwbm4/kXWYYWAvhnrUAErOhMZu6p1aZk+q3bHEFHONjnQspeTcBVqPUPR7wjDCzoTNm73ebw/tIoBkWzCYtAVzJjEQGzGDjIxHtJimx/KfyAm5ciRW3rYQDf85wnQDCwrjOZudZpecu2ppeYrmchE8TURMB0Bt5loEsA6/NWJgty/EkxAl+8OhYY2kniLjB9SXWWcWZ3fzGyyO0bw8YL39wJzCQzBwXxJQC6VWcZR14WQi7xS+cDPhIAAHKJXK8Q8mIG6rkO9iubI0wX5RK5d1QHGY7vXtjU/Wj34avmrvjL27PffZ+IzwUo0O8aIuA/YPp5IZlZuefsPb677e2bc4BKpNvSU/onDVzNTCkAF8PDC6sUcRTANgY6GouRR0Z7b6JqfC3AcGK2tZyBxzw3QLyDpVjtqKiQN4PJ8zuOCLgin8y0ea0/kYRVB3AKE0uwd18J9GYhZbc7KRvLWGkefE2rJ5jY7R08ZfjqJNAw8RgBNMcIoDlGAM0xAmiOEUBzjACaYwTQHCOA5hgBNMcIoDlGAM0xAmiOEUBzjACaYwTQHCOA5gRGAK5zfgLJqDY/wae3xfVtS0jhm8e+axEYASBFXWPmBZOb+vXNhVDnXAoTSWAE6Ezae1BPxzBtcVpUSFHPuIQ38pdvCMzglsAIAAIz8CePtZ8/b9e8WoNZj/G1XfO6CNjlZUPE9IDXcXoqCI4AAIqNfau9zE9Ao8xPUInW1lYJppUAyi631YNI6W6XdZQSKAGGzU9wwGEVBrAyn7KfcrutoTkNboHz8fn7vYzPV02gBACOzU9wPgHP1Ci6n4B0IZlZ63VbhWRmDQErUFu4rjCw0Mv4fNUEZmTQp2BQLGMlJHAlDQ7imA3gA2LqZiBbbuh/cNPSTY4v/UZjSVt62uRI8YcEJAA0AZgB4F0AXcS0Pp+0c0H63h/OfwHHcpAIFm7F2AAAAABJRU5ErkJggg==" alt="" class="h-11">
                                    </div>
                                    <div class="shrink-0">
                                        <div class="relative dropdown">
                                            <button class="flex items-center justify-center size-[37.5px] dropdown-toggle p-0 text-slate-500 btn bg-slate-200 border-slate-200 hover:text-slate-600 hover:bg-slate-300 hover:border-slate-300 focus:text-slate-600 focus:bg-slate-300 focus:border-slate-300 focus:ring focus:ring-slate-100 active:text-slate-600 active:bg-slate-300 active:border-slate-300 active:ring active:ring-slate-100 dark:bg-zink-600 dark:hover:bg-zink-500 dark:border-zink-600 dark:hover:border-zink-500 dark:text-zink-200 dark:ring-zink-400/50" id="projectDropdownmenu3" data-bs-toggle="dropdown"><i data-lucide="more-horizontal" class="size-4"></i></button>
                                            <ul class="absolute z-50 hidden py-2 mt-1 text-left list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem]" aria-labelledby="projectDropdownmenu3">
                                                <li>
                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear bg-white text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500" href="#!"><i data-lucide="eye" class="inline-block mr-1 size-3"></i> Overview</a>
                                                </li>
                                                <li>
                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear bg-white text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500" href="#!"><i data-lucide="file-edit" class="inline-block mr-1 size-3"></i> Edit</a>
                                                </li>
                                                <li>
                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear bg-white text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500" href="#!"><i data-lucide="trash-2" class="inline-block mr-1 size-3"></i> Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <h6 class="mb-1 text-16"><a href="#!">ABC Project Customization</a></h6>
                                    <p class="text-slate-500 dark:text-zink-200">The process of tailoring the overall project delivery process to meet the requirements.</p>
                                </div>
                                <div class="flex w-full gap-3 mt-6 text-center divide-x divide-slate-200 dark:divide-zink-500 rtl:divide-x-reverse">
                                    <div class="px-3 grow">
                                        <h6 class="mb-1">20 Oct, 2023</h6>
                                        <p class="text-slate-500 dark:text-zink-200">Due Date</p>
                                    </div>
                                    <div class="px-3 grow">
                                        <h6 class="mb-1">$9,832.00</h6>
                                        <p class="text-slate-500 dark:text-zink-200">Budget</p>
                                    </div>
                                </div>
                                <div class="w-full h-1.5 mt-6 rounded-full bg-slate-100 dark:bg-zink-600">
                                    <div class="h-1.5 rounded-full bg-green-500" style="width: 87%"></div>
                                </div>
                            </div>
                        </div><!--end card & col-->
                        <div class="card">
                            <div class="card-body">
                                <div class="flex">
                                    <div class="grow">
                                        <img src="data:image/png;base64,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" alt="" class="h-11">
                                    </div>
                                    <div class="shrink-0">
                                        <div class="relative dropdown">
                                            <button class="flex items-center justify-center size-[37.5px] dropdown-toggle p-0 text-slate-500 btn bg-slate-200 border-slate-200 hover:text-slate-600 hover:bg-slate-300 hover:border-slate-300 focus:text-slate-600 focus:bg-slate-300 focus:border-slate-300 focus:ring focus:ring-slate-100 active:text-slate-600 active:bg-slate-300 active:border-slate-300 active:ring active:ring-slate-100 dark:bg-zink-600 dark:hover:bg-zink-500 dark:border-zink-600 dark:hover:border-zink-500 dark:text-zink-200 dark:ring-zink-400/50" id="projectDropdownmenu4" data-bs-toggle="dropdown"><i data-lucide="more-horizontal" class="size-4"></i></button>
                                            <ul class="absolute z-50 hidden py-2 mt-1 text-left list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem]" aria-labelledby="projectDropdownmenu4">
                                                <li>
                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear bg-white text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500" href="#!"><i data-lucide="eye" class="inline-block mr-1 size-3"></i> Overview</a>
                                                </li>
                                                <li>
                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear bg-white text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500" href="#!"><i data-lucide="file-edit" class="inline-block mr-1 size-3"></i> Edit</a>
                                                </li>
                                                <li>
                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear bg-white text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500" href="#!"><i data-lucide="trash-2" class="inline-block mr-1 size-3"></i> Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <h6 class="mb-1 text-16"><a href="#!">starcode Design</a></h6>
                                    <p class="text-slate-500 dark:text-zink-200">Drawing created with Microsoft Expression Design, a drawing and design program for Windows.</p>
                                </div>
                                <div class="flex w-full gap-3 mt-6 text-center divide-x divide-slate-200 dark:divide-zink-500 rtl:divide-x-reverse">
                                    <div class="px-3 grow">
                                        <h6 class="mb-1">07 Dec, 2023</h6>
                                        <p class="text-slate-500 dark:text-zink-200">Due Date</p>
                                    </div>
                                    <div class="px-3 grow">
                                        <h6 class="mb-1">$11,971.00</h6>
                                        <p class="text-slate-500 dark:text-zink-200">Budget</p>
                                    </div>
                                </div>
                                <div class="w-full h-1.5 mt-6 rounded-full bg-slate-100 dark:bg-zink-600">
                                    <div class="h-1.5 bg-purple-500 rounded-full" style="width: 65%"></div>
                                </div>
                            </div>
                        </div><!--end card & col-->
                        <div class="card">
                            <div class="card-body">
                                <div class="flex">
                                    <div class="grow">
                                        <img src="data:image/png;base64,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" alt="" class="h-11">
                                    </div>
                                    <div class="shrink-0">
                                        <div class="relative dropdown">
                                            <button class="flex items-center justify-center size-[37.5px] dropdown-toggle p-0 text-slate-500 btn bg-slate-200 border-slate-200 hover:text-slate-600 hover:bg-slate-300 hover:border-slate-300 focus:text-slate-600 focus:bg-slate-300 focus:border-slate-300 focus:ring focus:ring-slate-100 active:text-slate-600 active:bg-slate-300 active:border-slate-300 active:ring active:ring-slate-100 dark:bg-zink-600 dark:hover:bg-zink-500 dark:border-zink-600 dark:hover:border-zink-500 dark:text-zink-200 dark:ring-zink-400/50" id="projectDropdownmenu5" data-bs-toggle="dropdown"><i data-lucide="more-horizontal" class="size-4"></i></button>
                                            <ul class="absolute z-50 hidden py-2 mt-1 text-left list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem]" aria-labelledby="projectDropdownmenu5">
                                                <li>
                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear bg-white text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500" href="#!"><i data-lucide="eye" class="inline-block mr-1 size-3"></i> Overview</a>
                                                </li>
                                                <li>
                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear bg-white text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500" href="#!"><i data-lucide="file-edit" class="inline-block mr-1 size-3"></i> Edit</a>
                                                </li>
                                                <li>
                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear bg-white text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500" href="#!"><i data-lucide="trash-2" class="inline-block mr-1 size-3"></i> Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <h6 class="mb-1 text-16"><a href="#!">HR Management</a></h6>
                                    <p class="text-slate-500 dark:text-zink-200">The strategic approach to nurturing and supporting employees and ensuring a positive.</p>
                                </div>
                                <div class="flex w-full gap-3 mt-6 text-center divide-x divide-slate-200 dark:divide-zink-500 rtl:divide-x-reverse">
                                    <div class="px-3 grow">
                                        <h6 class="mb-1">02 Jan, 2024</h6>
                                        <p class="text-slate-500 dark:text-zink-200">Due Date</p>
                                    </div>
                                    <div class="px-3 grow">
                                        <h6 class="mb-1">$7,546.00</h6>
                                        <p class="text-slate-500 dark:text-zink-200">Budget</p>
                                    </div>
                                </div>
                                <div class="w-full h-1.5 mt-6 rounded-full bg-slate-100 dark:bg-zink-600">
                                    <div class="h-1.5 bg-purple-500 rounded-full" style="width: 65%"></div>
                                </div>
                            </div>
                        </div><!--end card & col-->
                        <div class="card">
                            <div class="card-body">
                                <div class="flex">
                                    <div class="grow">
                                        <img src="{{ asset('assets/images/meta.png') }}" alt="" class="h-11">
                                    </div>
                                    <div class="shrink-0">
                                        <div class="relative dropdown">
                                            <button class="flex items-center justify-center size-[37.5px] dropdown-toggle p-0 text-slate-500 btn bg-slate-200 border-slate-200 hover:text-slate-600 hover:bg-slate-300 hover:border-slate-300 focus:text-slate-600 focus:bg-slate-300 focus:border-slate-300 focus:ring focus:ring-slate-100 active:text-slate-600 active:bg-slate-300 active:border-slate-300 active:ring active:ring-slate-100 dark:bg-zink-600 dark:hover:bg-zink-500 dark:border-zink-600 dark:hover:border-zink-500 dark:text-zink-200 dark:ring-zink-400/50" id="projectDropdownmenu6" data-bs-toggle="dropdown"><i data-lucide="more-horizontal" class="size-4"></i></button>
                                            <ul class="absolute z-50 hidden py-2 mt-1 text-left list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem]" aria-labelledby="projectDropdownmenu6">
                                                <li>
                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear bg-white text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500" href="#!"><i data-lucide="eye" class="inline-block mr-1 size-3"></i> Overview</a>
                                                </li>
                                                <li>
                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear bg-white text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500" href="#!"><i data-lucide="file-edit" class="inline-block mr-1 size-3"></i> Edit</a>
                                                </li>
                                                <li>
                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear bg-white text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500" href="#!"><i data-lucide="trash-2" class="inline-block mr-1 size-3"></i> Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <h6 class="mb-1 text-16"><a href="#!">Finance Apps</a></h6>
                                    <p class="text-slate-500 dark:text-zink-200">A personal budget app is a technology solution that is connected.</p>
                                </div>
                                <div class="flex w-full gap-3 mt-6 text-center divide-x divide-slate-200 dark:divide-zink-500 rtl:divide-x-reverse">
                                    <div class="px-3 grow">
                                        <h6 class="mb-1">10 Feb, 2024</h6>
                                        <p class="text-slate-500 dark:text-zink-200">Due Date</p>
                                    </div>
                                    <div class="px-3 grow">
                                        <h6 class="mb-1">$13,745.00</h6>
                                        <p class="text-slate-500 dark:text-zink-200">Budget</p>
                                    </div>
                                </div>
                                <div class="w-full h-1.5 mt-6 rounded-full bg-slate-100 dark:bg-zink-600">
                                    <div class="h-1.5 bg-purple-500 rounded-full" style="width: 65%"></div>
                                </div>
                            </div>
                        </div><!--end card & col-->
                        <div class="card">
                            <div class="card-body">
                                <div class="flex">
                                    <div class="grow">
                                        <img src="{{ asset('assets/images/search.png') }}" alt="" class="h-11">
                                    </div>
                                    <div class="shrink-0">
                                        <div class="relative dropdown">
                                            <button class="flex items-center justify-center size-[37.5px] dropdown-toggle p-0 text-slate-500 btn bg-slate-200 border-slate-200 hover:text-slate-600 hover:bg-slate-300 hover:border-slate-300 focus:text-slate-600 focus:bg-slate-300 focus:border-slate-300 focus:ring focus:ring-slate-100 active:text-slate-600 active:bg-slate-300 active:border-slate-300 active:ring active:ring-slate-100 dark:bg-zink-600 dark:hover:bg-zink-500 dark:border-zink-600 dark:hover:border-zink-500 dark:text-zink-200 dark:ring-zink-400/50" id="projectDropdownmenu7" data-bs-toggle="dropdown"><i data-lucide="more-horizontal" class="size-4"></i></button>
                                            <ul class="absolute z-50 hidden py-2 mt-1 text-left list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem]" aria-labelledby="projectDropdownmenu7">
                                                <li>
                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear bg-white text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500" href="#!"><i data-lucide="eye" class="inline-block mr-1 size-3"></i> Overview</a>
                                                </li>
                                                <li>
                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear bg-white text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500" href="#!"><i data-lucide="file-edit" class="inline-block mr-1 size-3"></i> Edit</a>
                                                </li>
                                                <li>
                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear bg-white text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500" href="#!"><i data-lucide="trash-2" class="inline-block mr-1 size-3"></i> Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <h6 class="mb-1 text-16"><a href="#!">Mailbox Design</a></h6>
                                    <p class="text-slate-500 dark:text-zink-200">An email template is an HTML preformatted email that you can use to create your own.</p>
                                </div>
                                <div class="flex w-full gap-3 mt-6 text-center divide-x divide-slate-200 dark:divide-zink-500 rtl:divide-x-reverse">
                                    <div class="px-3 grow">
                                        <h6 class="mb-1">19 Feb, 2024</h6>
                                        <p class="text-slate-500 dark:text-zink-200">Due Date</p>
                                    </div>
                                    <div class="px-3 grow">
                                        <h6 class="mb-1">$9,120.00</h6>
                                        <p class="text-slate-500 dark:text-zink-200">Budget</p>
                                    </div>
                                </div>
                                <div class="w-full h-1.5 mt-6 rounded-full bg-slate-100 dark:bg-zink-600">
                                    <div class="h-1.5 bg-purple-500 rounded-full" style="width: 65%"></div>
                                </div>
                            </div>
                        </div><!--end card & col-->
                        <div class="card">
                            <div class="card-body">
                                <div class="flex">
                                    <div class="grow">
                                        <img src="data:image/png;base64,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" alt="" class="h-11">
                                    </div>
                                    <div class="shrink-0">
                                        <div class="relative dropdown">
                                            <button class="flex items-center justify-center size-[37.5px] dropdown-toggle p-0 text-slate-500 btn bg-slate-200 border-slate-200 hover:text-slate-600 hover:bg-slate-300 hover:border-slate-300 focus:text-slate-600 focus:bg-slate-300 focus:border-slate-300 focus:ring focus:ring-slate-100 active:text-slate-600 active:bg-slate-300 active:border-slate-300 active:ring active:ring-slate-100 dark:bg-zink-600 dark:hover:bg-zink-500 dark:border-zink-600 dark:hover:border-zink-500 dark:text-zink-200 dark:ring-zink-400/50" id="projectDropdownmenu8" data-bs-toggle="dropdown"><i data-lucide="more-horizontal" class="size-4"></i></button>
                                            <ul class="absolute z-50 hidden py-2 mt-1 text-left list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem]" aria-labelledby="projectDropdownmenu8">
                                                <li>
                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear bg-white text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500" href="#!"><i data-lucide="eye" class="inline-block mr-1 size-3"></i> Overview</a>
                                                </li>
                                                <li>
                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear bg-white text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500" href="#!"><i data-lucide="file-edit" class="inline-block mr-1 size-3"></i> Edit</a>
                                                </li>
                                                <li>
                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear bg-white text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500" href="#!"><i data-lucide="trash-2" class="inline-block mr-1 size-3"></i> Delete</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <h6 class="mb-1 text-16"><a href="#!">Banking Management</a></h6>
                                    <p class="text-slate-500 dark:text-zink-200">Bank management refers to the process of managing the Bank's statutory activity.</p>
                                </div>
                                <div class="flex w-full gap-3 mt-6 text-center divide-x divide-slate-200 dark:divide-zink-500 rtl:divide-x-reverse">
                                    <div class="px-3 grow">
                                        <h6 class="mb-1">01 March, 2024</h6>
                                        <p class="text-slate-500 dark:text-zink-200">Due Date</p>
                                    </div>
                                    <div class="px-3 grow">
                                        <h6 class="mb-1">$24,863.00</h6>
                                        <p class="text-slate-500 dark:text-zink-200">Budget</p>
                                    </div>
                                </div>
                                <div class="w-full h-1.5 mt-6 rounded-full bg-slate-100 dark:bg-zink-600">
                                    <div class="h-1.5 bg-purple-500 rounded-full" style="width: 65%"></div>
                                </div>
                            </div>
                        </div><!--end card & col-->
                    </div><!--end grid-->
                    <div class="flex flex-col items-center gap-4 mt-2 mb-4 md:flex-row">
                        <div class="grow">
                            <p class="text-slate-500 dark:text-zink-200">Showing <b>8</b> of <b>30</b> Results</p>
                        </div>
                        <ul class="flex flex-wrap items-center gap-2 shrink-0">
                            <li>
                                <a href="#!" class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-50 dark:[&.active]:text-custom-50 [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto"><i class="size-4 rtl:rotate-180" data-lucide="chevrons-left"></i></a>
                            </li>
                            <li>
                                <a href="#!" class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-50 dark:[&.active]:text-custom-50 [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto"><i class="size-4 rtl:rotate-180" data-lucide="chevron-left"></i></a>
                            </li>
                            <li>
                                <a href="#!" class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-50 dark:[&.active]:text-custom-50 [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto">1</a>
                            </li>
                            <li>
                                <a href="#!" class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-50 dark:[&.active]:text-custom-50 [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto">2</a>
                            </li>
                            <li>
                                <a href="#!" class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-50 dark:[&.active]:text-custom-50 [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto active">3</a>
                            </li>
                            <li>
                                <a href="#!" class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-50 dark:[&.active]:text-custom-50 [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto">4</a>
                            </li>
                            <li>
                                <a href="#!" class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-50 dark:[&.active]:text-custom-50 [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto">5</a>
                            </li>
                            <li>
                                <a href="#!" class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-50 dark:[&.active]:text-custom-50 [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto">6</a>
                            </li>
                            <li>
                                <a href="#!" class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-50 dark:[&.active]:text-custom-50 [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto"><i class="size-4 rtl:rotate-180" data-lucide="chevron-right"></i></a>
                            </li>
                            <li>
                                <a href="#!" class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-50 dark:[&.active]:text-custom-50 [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto"><i class="size-4 rtl:rotate-180" data-lucide="chevrons-right"></i></a>
                            </li>
                        </ul>
                    </div>
                </div><!--end tab pane-->
                <div class="hidden tab-pane" id="followersTabs">
                    <h5 class="mb-4 underline">Followers</h5>

                    <div class="grid grid-cols-1 md:grid-cols-2 2xl:grid-cols-4 gap-x-5">
                        <div class="relative card">
                            <div class="card-body">
                                <p class="absolute inline-block px-5 py-1 text-xs ltr:left-0 rtl:right-0 text-custom-600 bg-custom-100 dark:bg-custom-500/20 top-5 ltr:rounded-e rtl:rounded-l">Executive Operations</p>
                                <div class="flex items-center justify-end">
                                    <p class="text-slate-500 dark:text-zink-200">Doj : 15 Jan, 2023</p>
                                </div>
                                <div class="mt-4 text-center">
                                    <div class="flex justify-center">
                                        <div class="overflow-hidden rounded-full size-20 bg-slate-100">
                                            <img src="{{ asset('assets/images/avatar-3.png') }}" alt="" class="">
                                        </div>
                                    </div>
                                    <a href="#!"><h4 class="mt-4 mb-2 font-semibold text-16">Ralaphe Flores </h4></a>
                                    <div class="text-slate-500 dark:text-zink-200">
                                        <p class="mb-1">floral12@starcode.com</p>
                                        <p>+213 617 219 6245</p>
                                        <p class="inline-block px-3 py-1 my-4 font-semibold rounded-md text-slate-600 bg-slate-100 dark:bg-zink-600 dark:text-zink-200">Exp. : 1.5 years</p>
                                        <h4 class="text-15 text-custom-500">Salary : $463.42 <span class="text-xs font-normal text-slate-500 dark:text-zink-200">/ Month<span></span></span></h4>
                                    </div>
                                </div>
                            </div>
                        </div><!--end card-->
                        <div class="relative card">
                            <div class="card-body">
                                <p class="absolute inline-block px-5 py-1 text-xs text-green-600 bg-green-100 ltr:left-0 rtl:right-0 dark:bg-green-500/20 top-5 ltr:rounded-e rtl:rounded-l">Project Manager</p>
                                <div class="flex items-center justify-end">
                                    <p class="text-slate-500 dark:text-zink-200">Doj : 29 Feb, 2023</p>
                                </div>
                                <div class="mt-4 text-center">
                                    <div class="flex justify-center">
                                        <div class="overflow-hidden rounded-full size-20 bg-slate-100">
                                            <img src="{{ asset('assets/images/avatar-2.png') }}" alt="" class="">
                                        </div>
                                    </div>
                                    <a href="#!">
                                        <h4 class="mt-4 mb-2 font-semibold text-16">James Lash </h4>
                                    </a>
                                    <div class="text-slate-500 dark:text-zink-200">
                                        <p class="mb-1">jameslash@starcode.com</p>
                                        <p>+210 85 383 2388</p>
                                        <p class="inline-block px-3 py-1 my-4 font-semibold rounded-md text-slate-600 bg-slate-100 dark:bg-zink-600 dark:text-zink-200">Exp. : 0.5 years</p>
                                        <h4 class="text-15 text-custom-500">Salary : $701.77 <span class="text-xs font-normal text-slate-500 dark:text-zink-200">/ Month<span></span></span></h4>
                                    </div>
                                </div>
                            </div>
                        </div><!--end card-->
                        <div class="relative card">
                            <div class="card-body">
                                <p class="absolute inline-block px-5 py-1 text-xs ltr:left-0 rtl:right-0 text-sky-600 bg-sky-100 dark:bg-sky-500/20 top-5 ltr:rounded-e rtl:rounded-l">React Developer</p>
                                <div class="flex items-center justify-end">
                                    <p class="text-slate-500 dark:text-zink-200">Doj : 04 March, 2023</p>
                                </div>
                                <div class="mt-4 text-center">
                                    <div class="flex justify-center">
                                        <div class="overflow-hidden rounded-full size-20 bg-slate-100">
                                            <img src="{{ asset('assets/images/avatar-4.png') }}" alt="" class="">
                                        </div>
                                    </div>
                                    <a href="#!">
                                        <h4 class="mt-4 mb-2 font-semibold text-16">Angus Garnsey</h4>
                                    </a>
                                    <div class="text-slate-500 dark:text-zink-200">
                                        <p class="mb-1">angusgarnsey@starcode.com</p>
                                        <p>+210 41521 1325</p>
                                        <p class="inline-block px-3 py-1 my-4 font-semibold rounded-md text-slate-600 bg-slate-100 dark:bg-zink-600 dark:text-zink-200">Exp. : 0.7 years</p>
                                        <h4 class="text-15 text-custom-500">Salary : $478.32 <span class="text-xs font-normal text-slate-500 dark:text-zink-200">/ Month<span></span></span></h4>
                                    </div>
                                </div>
                            </div>
                        </div><!--end card-->
                        <div class="relative card">
                            <div class="card-body">
                                <p class="absolute inline-block px-5 py-1 text-xs text-yellow-600 bg-yellow-100 ltr:left-0 rtl:right-0 dark:bg-yellow-500/20 top-5 ltr:rounded-e rtl:rounded-l">Shopify Developer</p>
                                <div class="flex items-center justify-end">
                                    <p class="text-slate-500 dark:text-zink-200">Doj : 11 March, 2023</p>
                                </div>
                                <div class="mt-4 text-center">
                                    <div class="flex justify-center">
                                        <div class="overflow-hidden rounded-full size-20 bg-slate-100">
                                            <img src="{{ asset('assets/images/avatar-5.png') }}" alt="" class="">
                                        </div>
                                    </div>
                                    <a href="#!">
                                        <h4 class="mt-4 mb-2 font-semibold text-16">Matilda Marston</h4>
                                    </a>
                                    <div class="text-slate-500 dark:text-zink-200">
                                        <p class="mb-1">matildamarston@starcode.com</p>
                                        <p>+210 082 288 1065</p>
                                        <p class="inline-block px-3 py-1 my-4 font-semibold rounded-md text-slate-600 bg-slate-100 dark:bg-zink-600 dark:text-zink-200">Exp. : 1 years</p>
                                        <h4 class="text-15 text-custom-500">Salary : $120.37 <span class="text-xs font-normal text-slate-500 dark:text-zink-200">/ Month<span></span></span></h4>
                                    </div>
                                </div>
                            </div>
                        </div><!--end card-->
                        <div class="relative card">
                            <div class="card-body">
                                <p class="absolute inline-block px-5 py-1 text-xs text-red-600 bg-red-100 ltr:left-0 rtl:right-0 dark:bg-red-500/20 top-5 ltr:rounded-e rtl:rounded-l">Angular Developer</p>
                                <div class="flex items-center justify-end">
                                    <p class="text-slate-500 dark:text-zink-200">Doj : 22 March, 2023</p>
                                </div>
                                <div class="mt-4 text-center">
                                    <div class="flex justify-center">
                                        <div class="overflow-hidden rounded-full size-20 bg-slate-100">
                                            <img src="{{ asset('assets/images/avatar-6.png') }}" alt="" class="">
                                        </div>
                                    </div>
                                    <a href="#!">
                                        <h4 class="mt-4 mb-2 font-semibold text-16">Zachary Benjamin</h4>
                                    </a>
                                    <div class="text-slate-500 dark:text-zink-200">
                                        <p class="mb-1">zacharybenjamin@starcode.com</p>
                                        <p>+120 348 9730 237</p>
                                        <p class="inline-block px-3 py-1 my-4 font-semibold rounded-md text-slate-600 bg-slate-100 dark:bg-zink-600 dark:text-zink-200">Exp. : 0 years</p>
                                        <h4 class="text-15 text-custom-500">Salary : $89.99 <span class="text-xs font-normal text-slate-500 dark:text-zink-200">/ Month<span></span></span></h4>
                                    </div>
                                </div>
                            </div>
                        </div><!--end card-->
                        <div class="relative card">
                            <div class="card-body">
                                <p class="absolute inline-block px-5 py-1 text-xs text-purple-600 bg-purple-100 ltr:left-0 rtl:right-0 dark:bg-purple-500/20 top-5 ltr:rounded-e rtl:rounded-l">Graphic Designer</p>
                                <div class="flex items-center justify-end">
                                    <p class="text-slate-500 dark:text-zink-200">Doj : 09 June, 2023</p>
                                </div>
                                <div class="mt-4 text-center">
                                    <div class="flex justify-center">
                                        <div class="overflow-hidden rounded-full size-20 bg-slate-100">
                                            <img src="{{ asset('assets/images/avatar-7.png') }}" alt="" class="">
                                        </div>
                                    </div>
                                    <a href="#!">
                                        <h4 class="mt-4 mb-2 font-semibold text-16">Ruby Chomley</h4>
                                    </a>
                                    <div class="text-slate-500 dark:text-zink-200">
                                        <p class="mb-1">rubychomley@starcode.com</p>
                                        <p>+120 1234 56789</p>
                                        <p class="inline-block px-3 py-1 my-4 font-semibold rounded-md text-slate-600 bg-slate-100 dark:bg-zink-600 dark:text-zink-200">Exp. : 0.2 years</p>
                                        <h4 class="text-15 text-custom-500">Salary : $214.82 <span class="text-xs font-normal text-slate-500 dark:text-zink-200">/ Month<span></span></span></h4>
                                    </div>
                                </div>
                            </div>
                        </div><!--end card-->
                        <div class="relative card">
                            <div class="card-body">
                                <p class="absolute inline-block px-5 py-1 text-xs text-yellow-600 bg-yellow-100 ltr:left-0 rtl:right-0 dark:bg-yellow-500/20 top-5 ltr:rounded-e rtl:rounded-l">Shopify Developer</p>
                                <div class="flex items-center justify-end">
                                    <p class="text-slate-500 dark:text-zink-200">Doj : 27 June, 2023</p>
                                </div>
                                <div class="mt-4 text-center">
                                    <div class="flex justify-center">
                                        <div class="overflow-hidden rounded-full size-20 bg-slate-100">
                                            <img src="{{ asset('assets/images/avatar-8.png') }}" alt="" class="">
                                        </div>
                                    </div>
                                    <a href="#!">
                                        <h4 class="mt-4 mb-2 font-semibold text-16">Jesse Edouardy</h4>
                                    </a>
                                    <div class="text-slate-500 dark:text-zink-200">
                                        <p class="mb-1">jessedouard@starcode.com</p>
                                        <p>+87 044 017 3869</p>
                                        <p class="inline-block px-3 py-1 my-4 font-semibold rounded-md text-slate-600 bg-slate-100 dark:bg-zink-600 dark:text-zink-200">Exp. : 1.7 years</p>
                                        <h4 class="text-15 text-custom-500">Salary : $278.96 <span class="text-xs font-normal text-slate-500 dark:text-zink-200">/ Month<span></span></span></h4>
                                    </div>
                                </div>
                            </div>
                        </div><!--end card-->
                        <div class="relative card">
                            <div class="card-body">
                                <p class="absolute inline-block px-5 py-1 text-xs text-orange-600 bg-orange-100 ltr:left-0 rtl:right-0 dark:bg-orange-500/20 top-5 ltr:rounded-e rtl:rounded-l">Team Leader</p>
                                <div class="flex items-center justify-end">
                                    <p class="text-slate-500 dark:text-zink-200">Doj : 15 July, 2023</p>
                                </div>
                                <div class="mt-4 text-center">
                                    <div class="flex justify-center">
                                        <div class="overflow-hidden rounded-full size-20 bg-slate-100">
                                            <img src="{{ asset('assets/images/avatar-9.png') }}" alt="" class="">
                                        </div>
                                    </div>
                                    <a href="#!">
                                        <h4 class="mt-4 mb-2 font-semibold text-16">Xavier Bower</h4>
                                    </a>
                                    <div class="text-slate-500 dark:text-zink-200">
                                        <p class="mb-1">xavierbower@starcode.com</p>
                                        <p>+159 98765 32451</p>
                                        <p class="inline-block px-3 py-1 my-4 font-semibold rounded-md text-slate-600 bg-slate-100 dark:bg-zink-600 dark:text-zink-200">Exp. : 6.7 years</p>
                                        <h4 class="text-15 text-custom-500">Salary : $901.94 <span class="text-xs font-normal text-slate-500 dark:text-zink-200">/ Month<span></span></span></h4>
                                    </div>
                                </div>
                            </div>
                        </div><!--end card-->
                    </div><!--end grid-->
                    <div class="flex flex-col items-center gap-4 mb-4 md:flex-row">
                        <div class="grow">
                            <p class="text-slate-500 dark:text-zink-200">Showing <b>8</b> of <b>18</b> Results</p>
                        </div>
                        <ul class="flex flex-wrap items-center gap-2">
                            <li>
                                <a href="#!" class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-50 dark:[&.active]:text-custom-50 [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto"><i class="size-4 rtl:rotate-180" data-lucide="chevron-left"></i></a>
                            </li>
                            <li>
                                <a href="#!" class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-50 dark:[&.active]:text-custom-50 [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto">1</a>
                            </li>
                            <li>
                                <a href="#!" class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-50 dark:[&.active]:text-custom-50 [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto">2</a>
                            </li>
                            <li>
                                <a href="#!" class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-50 dark:[&.active]:text-custom-50 [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto active">3</a>
                            </li>
                            <li>
                                <a href="#!" class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-50 dark:[&.active]:text-custom-50 [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto">4</a>
                            </li>
                            <li>
                                <a href="#!" class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-50 dark:[&.active]:text-custom-50 [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto">5</a>
                            </li>
                            <li>
                                <a href="#!" class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-50 dark:[&.active]:text-custom-50 [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto">6</a>
                            </li>
                            <li>
                                <a href="#!" class="inline-flex items-center justify-center bg-white dark:bg-zink-700 size-8 transition-all duration-150 ease-linear border border-slate-200 dark:border-zink-500 rounded text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 hover:bg-custom-50 dark:hover:bg-custom-500/10 focus:bg-custom-50 dark:focus:bg-custom-500/10 focus:text-custom-500 dark:focus:text-custom-500 [&.active]:text-custom-50 dark:[&.active]:text-custom-50 [&.active]:bg-custom-500 dark:[&.active]:bg-custom-500 [&.active]:border-custom-500 dark:[&.active]:border-custom-500 [&.disabled]:text-slate-400 dark:[&.disabled]:text-zink-300 [&.disabled]:cursor-auto"><i class="size-4 rtl:rotate-180" data-lucide="chevron-right"></i></a>
                            </li>
                        </ul>
                    </div>
                </div><!--end tab pane-->
            </div><!--end tab content-->
        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <!--Add Documents Modal-->
    <div id="addDocuments" modal-center="" class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show">
        <div class="w-screen md:w-[30rem] bg-white shadow rounded-md dark:bg-zink-600 flex flex-col h-full">
            <div class="flex items-center justify-between p-4 border-b border-slate-200 dark:border-zink-500">
                <h5 class="text-16">Add Document</h5>
                <button data-modal-close="addDocuments" class="transition-all duration-200 ease-linear text-slate-500 hover:text-red-500 dark:text-zink-200 dark:hover:text-red-500"><i data-lucide="x" class="size-5"></i></button>
            </div>
            <div class="max-h-[calc(theme('height.screen')_-_180px)] p-4 overflow-y-auto">
                <form action="#!">
                    <div class="mb-3">
                        <label for="documentsName" class="inline-block mb-2 text-base font-medium">Documents Name</label>
                        <input type="text" id="documentsName" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Name" required="">
                    </div>
                    <div class="mb-3">
                        <label for="documentsType" class="inline-block mb-2 text-base font-medium">Type</label>
                        <select class="form-input border-slate-300 focus:outline-none focus:border-custom-500" data-choices="" name="documentsType" id="documentsType">
                            <option value="">Documents Type</option>
                            <option value="Docs">Docs</option>
                            <option value="SCSS">SCSS</option>
                            <option value="Javascript">Javascript</option>
                            <option value="SVG">SVG</option>
                            <option value="MP4">MP4</option>
                            <option value="PNG">PNG</option>
                            <option value="HTML">HTML</option>
                        </select>
                    </div>
                    <div>
                        <label class="inline-block mb-2 text-base font-medium">Upload File</label>
                        <div class="flex items-center justify-center border rounded-md cursor-pointer dropzone border-slate-200 dark:border-zink-500">
                            <div class="fallback">
                                <input name="file" type="file" multiple="multiple">
                            </div>
                            <div class="w-full py-5 text-lg text-center dz-message needsclick">
                                <div class="mb-3">
                                    <i data-lucide="upload-cloud" class="block mx-auto size-12 text-slate-500 fill-slate-200 dark:text-zink-200 dark:fill-zink-500"></i>
                                </div>

                                <h5 class="mb-0 font-normal text-slate-500 dark:text-zink-200 text-15">Drag and drop your files or <a href="#!">browse</a> your files</h5>
                            </div>
                        </div>

                        <ul class="mb-0" id="dropzone-preview">
                            <li class="mt-2" id="dropzone-preview-list">
                                <!-- This is used as the file preview template -->
                                <div class="border rounded">
                                    <div class="flex p-2">
                                        <div class="shrink-0 me-3">
                                            <div class="p-2 rounded-md size-14 bg-slate-100 dark:bg-zink-600">
                                                <img data-dz-thumbnail="" class="block w-full h-full rounded-md" src="data:image/png;base64,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" alt="Dropzone-Image">
                                            </div>
                                        </div>
                                        <div class="grow">
                                            <div class="pt-1">
                                                <h5 class="mb-1 text-15" data-dz-name="">&nbsp;</h5>
                                                <p class="mb-0 text-slate-500 dark:text-zink-200" data-dz-size=""></p>
                                                <strong class="error text-danger" data-dz-errormessage=""></strong>
                                            </div>
                                        </div>
                                        <div class="shrink-0 ms-3">
                                            <button data-dz-remove="" class="px-2 py-1.5 text-xs text-white bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-custom-400/20">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="flex justify-end gap-2 mt-4">
                        <button type="reset" data-modal-close="addDocuments" class="text-red-500 bg-red-100 btn hover:text-white hover:bg-red-600 focus:text-white focus:bg-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:ring active:ring-red-100 dark:bg-red-500/20 dark:text-red-500 dark:hover:bg-red-500 dark:hover:text-white dark:focus:bg-red-500 dark:focus:text-white dark:active:bg-red-500 dark:active:text-white dark:ring-red-400/20">Cancel</button>
                        <button type="submit" class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Add Document</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@section('script')
    <!-- pages-account init js-->
    <script src="{{ URL::to('assets/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ URL::to('assets/libs/dropzone/dropzone-min.js') }}"></script>
    <script src="{{ URL::to('assets/js/pages/pages-account.init.js') }}"></script>
@endsection
@endsection