@extends('layouts.master')
@section('content')
    <!-- Page-content -->
    <div class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
        <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">
            <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
                <div class="grow">
                    <h5 class="text-16">Account Settings</h5>
                </div>
                <ul class="flex items-center gap-2 text-sm font-normal shrink-0">
                    <li class="relative before:content-['\ea54'] before:font-remix ltr:before:-right-1 rtl:before:-left-1  before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-slate-400 dark:text-zink-200">
                        <a href="#!" class="text-slate-400 dark:text-zink-200">Pages</a>
                    </li>
                    <li class="text-slate-700 dark:text-zink-100">
                        Account Settings
                    </li>
                </ul>
            </div>
            <div class="card">
                <div class="card-body">
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
                                            <a class="block px-4 py-1.5 text-base font-medium transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">Generate Bill</a>
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
                <div class="card-body !py-0">
                    <ul class="flex flex-wrap w-full text-sm font-medium text-center nav-tabs">
                        <li class="group active">
                            <a href="javascript:void(0);" data-tab-toggle="" data-target="personalTabs" class="inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-t-md text-slate-500 dark:text-zink-200 border-b border-transparent group-[.active]:text-custom-500 dark:group-[.active]:text-custom-500 group-[.active]:border-b-custom-500 hover:text-custom-500 dark:hover:text-custom-500 active:text-custom-500 dark:active:text-custom-500 -mb-[1px]">Personal Info</a>
                        </li>
                        <li class="group">
                            <a href="javascript:void(0);" data-tab-toggle="" data-target="integrationTabs" class="inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-t-md text-slate-500 dark:text-zink-200 border-b border-transparent group-[.active]:text-custom-500 dark:group-[.active]:text-custom-500 group-[.active]:border-b-custom-500 hover:text-custom-500 dark:hover:text-custom-500 active:text-custom-500 dark:active:text-custom-500 -mb-[1px]">Integration</a>
                        </li>
                        <li class="group">
                            <a href="javascript:void(0);" data-tab-toggle="" data-target="changePasswordTabs" class="inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-t-md text-slate-500 dark:text-zink-200 border-b border-transparent group-[.active]:text-custom-500 dark:group-[.active]:text-custom-500 group-[.active]:border-b-custom-500 hover:text-custom-500 dark:hover:text-custom-500 active:text-custom-500 dark:active:text-custom-500 -mb-[1px]">Change Password</a>
                        </li>
                        <li class="group">
                            <a href="javascript:void(0);" data-tab-toggle="" data-target="privacyPolicyTabs" class="inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-t-md text-slate-500 dark:text-zink-200 border-b border-transparent group-[.active]:text-custom-500 dark:group-[.active]:text-custom-500 group-[.active]:border-b-custom-500 hover:text-custom-500 dark:hover:text-custom-500 active:text-custom-500 dark:active:text-custom-500 -mb-[1px]">Privacy Policy</a>
                        </li>
                    </ul>
                </div>
            </div><!--end card-->

            <div class="tab-content">
                <div class="block tab-pane" id="personalTabs">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-1 text-15">Personal Information</h6>
                            <p class="mb-4 text-slate-500 dark:text-zink-200">Update your photo and personal details here easily.</p>
                            <form action="#!">
                                <div class="grid grid-cols-1 gap-5 xl:grid-cols-12">
                                    <div class="xl:col-span-6">
                                        <label for="inputValue" class="inline-block mb-2 text-base font-medium">First Name</label>
                                        <input type="text" id="inputValue" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Enter your value" value="Star">
                                    </div><!--end col-->
                                    <div class="xl:col-span-6">
                                        <label for="inputValue" class="inline-block mb-2 text-base font-medium">Last Name</label>
                                        <input type="text" id="inputValue" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Enter your value" value="Code">
                                    </div><!--end col-->
                                    <div class="xl:col-span-6">
                                        <label for="inputValue" class="inline-block mb-2 text-base font-medium">Phone Number</label>
                                        <input type="text" id="inputValue" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="+855 8456 5555 23" value="+855 8456 5555 23">
                                    </div><!--end col-->
                                    <div class="xl:col-span-6">
                                        <label for="inputValue" class="inline-block mb-2 text-base font-medium">Email Address</label>
                                        <input type="email" id="inputValue" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Enter your email address" value="starcode@starcode.com">
                                    </div><!--end col-->
                                    <div class="xl:col-span-6">
                                        <label for="joiningDateInput" class="inline-block mb-2 text-base font-medium">Birth of Date</label>
                                        <input type="text" id="joiningDateInput" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Select date" data-provider="flatpickr" data-date-format="d M, Y" data-default-date="24 Oct, 2023">
                                    </div><!--end col-->
                                    <div class="xl:col-span-6">
                                        <label for="joiningDateInput" class="inline-block mb-2 text-base font-medium">Joining Date</label>
                                        <input type="text" id="joiningDateInput" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Select date" data-provider="flatpickr" data-date-format="d M, Y" data-default-date="30 Nov, 2023">
                                    </div><!--end col-->
                                    <div class="xl:col-span-12">
                                        <label for="inputValue" class="inline-block mb-2 text-base font-medium">Skill</label>
                                        <select class="form-input border-slate-300 focus:outline-none focus:border-custom-500" id="choices-multiple-default" data-choices="" name="choices-multiple-default" multiple="">
                                            <option value="Choice 1" selected="">Choice 1</option>
                                            <option value="Choice 2">Choice 2</option>
                                            <option value="Choice 3">Choice 3</option>
                                            <option value="Choice 2">Choice 4</option>
                                            <option value="Choice 3">Choice 5 </option>
                                            <option value="Choice 4" disabled="">Choice 4</option>
                                        </select>
                                    </div><!--end col-->
                                    <div class="xl:col-span-6">
                                        <label for="inputValue" class="inline-block mb-2 text-base font-medium">Designation</label>
                                        <input type="text" id="inputValue" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Enter your value" value="Web Developer">
                                    </div><!--end col-->
                                    <div class="xl:col-span-6">
                                        <label for="inputValue" class="inline-block mb-2 text-base font-medium">Website</label>
                                        <input type="text" id="inputValue" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Enter your value" value="www.starcodekh.com">
                                    </div><!--end col-->
                                    <div class="xl:col-span-4">
                                        <label for="inputValue" class="inline-block mb-2 text-base font-medium">City</label>
                                        <select class="form-input border-slate-300 focus:outline-none focus:border-custom-500" id="choices-single-no-sorting" name="choices-single-no-sorting" data-choices="" data-choices-sorting-false="">
                                            <option value="Madrid">Madrid</option>
                                            <option value="Toronto">Toronto</option>
                                            <option value="Vancouver">Vancouver</option>
                                            <option value="London">London</option>
                                            <option value="Manchester">Manchester</option>
                                            <option value="Liverpool">Liverpool</option>
                                            <option value="Paris">Paris</option>
                                            <option value="Malaga">Malaga</option>
                                            <option value="Washington" disabled="">Washington</option>
                                            <option value="Lyon">Lyon</option>
                                            <option value="Marseille">Marseille</option>
                                            <option value="Hamburg">Hamburg</option>
                                            <option value="Munich">Munich</option>
                                            <option value="Barcelona">Barcelona</option>
                                            <option value="Berlin">Berlin</option>
                                            <option value="Montreal">Montreal</option>
                                            <option value="New York">New York</option>
                                            <option value="Michigan">Michigan</option>
                                        </select>
                                    </div><!--end col-->
                                    <div class="xl:col-span-4">
                                        <label for="inputValue" class="inline-block mb-2 text-base font-medium">Country</label>
                                        <select id="choices-single-no-sorting" name="choices-single-no-sorting" data-choices="" data-choices-sorting-false="">
                                            <option value="Madrid">USA</option>
                                            <option value="Toronto">Toronto</option>
                                            <option value="Vancouver">Vancouver</option>
                                            <option value="London">London</option>
                                            <option value="Manchester">Manchester</option>
                                            <option value="Liverpool">Liverpool</option>
                                            <option value="Paris">Paris</option>
                                            <option value="Malaga">Malaga</option>
                                            <option value="Washington" disabled="">Washington</option>
                                            <option value="Lyon">Lyon</option>
                                            <option value="Marseille">Marseille</option>
                                            <option value="Hamburg">Hamburg</option>
                                            <option value="Munich">Munich</option>
                                            <option value="Barcelona">Barcelona</option>
                                            <option value="Berlin">Berlin</option>
                                            <option value="Montreal">Montreal</option>
                                            <option value="New York">New York</option>
                                            <option value="Michigan">Michigan</option>
                                        </select>
                                    </div><!--end col-->
                                    <div class="xl:col-span-4">
                                        <label for="inputValue" class="inline-block mb-2 text-base font-medium">Zip Code</label>
                                        <select id="choices-single-no-sorting" name="choices-single-no-sorting" data-choices="" data-choices-sorting-false="">
                                            <option value="Madrid">00012</option>
                                            <option value="Toronto">00014</option>
                                            <option value="Vancouver">00016</option>
                                            <option value="London">88800</option>
                                            <option value="Manchester">00100</option>
                                            <option value="Liverpool">00001</option>
                                        </select>
                                    </div><!--end col-->
                                    <div class="xl:col-span-12">
                                        <label for="inputValue" class="block mb-2 text-base font-medium">Description</label>
                                        <textarea class="w-full form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" id="exampleFormControlTextarea" placeholder="Enter your description" rows="3">𝗦𝘁𝗮𝗿𝗖𝗼𝗱𝗲 𝗞𝗵 is our website that learns and reads, PHP, Framework Laravel, How to and download Admin template sample source code free.&amp; Design with designing team in the company to build perfect web designs.</textarea>
                                        
                                    </div><!--end col-->
                                </div><!--end grid-->
                                <div class="flex justify-end mt-6 gap-x-4">
                                    <button type="button" class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Updates</button>
                                    <button type="button" class="text-red-500 bg-red-100 btn hover:text-white hover:bg-red-600 focus:text-white focus:bg-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:ring active:ring-red-100 dark:bg-red-500/20 dark:text-red-500 dark:hover:bg-red-500 dark:hover:text-white dark:focus:bg-red-500 dark:focus:text-white dark:active:bg-red-500 dark:active:text-white dark:ring-red-400/20">Cancel</button>
                                </div>
                            </form><!--end form-->
                        </div>
                    </div>
                </div>
                <div class="hidden tab-pane" id="integrationTabs">
                    <h6 class="mb-4 text-15">Connected Apps</h6>
                    <div class="grid grid-cols-1 gap-x-5 sm:grid-cols-2 xl:grid-cols-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="flex gap-3 mb-5">
                                    <div class="grow">
                                        <img src="{{ asset('assets/images/meta.png') }}" alt="" class="h-8">
                                    </div>
                                    <div class="shrink-0">
                                        <button type="button" class="px-2 py-1.5 text-xs bg-white border-dashed text-custom-500 btn border-custom-500 hover:text-custom-500 hover:bg-custom-50 hover:border-custom-600 focus:text-custom-600 focus:bg-custom-50 focus:border-custom-600 active:text-custom-600 active:bg-custom-50 active:border-custom-600 dark:bg-zink-700 dark:ring-custom-400/20 dark:hover:bg-custom-800/20 dark:focus:bg-custom-800/20 dark:active:bg-custom-800/20"><i data-lucide="cable" class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> Connect</button>
                                    </div>
                                </div>

                                <h6 class="mb-2 text-16">Meta</h6>
                                <p class="text-slate-500 dark:text-zink-200">Meta Platforms Inc, which used to be called Facebook Inc.</p>
                            </div>
                        </div><!--end col-->
                        <div class="card">
                            <div class="card-body">
                                <div class="flex gap-3 mb-5">
                                    <div class="grow">
                                        <img src="data:image/png;base64,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" alt="" class="h-8">
                                    </div>
                                    <div class="shrink-0">
                                        <button type="button" class="px-2 py-1.5 text-xs bg-white border-dashed text-custom-500 btn border-custom-500 hover:text-custom-500 hover:bg-custom-50 hover:border-custom-600 focus:text-custom-600 focus:bg-custom-50 focus:border-custom-600 active:text-custom-600 active:bg-custom-50 active:border-custom-600 dark:bg-zink-700 dark:ring-custom-400/20 dark:hover:bg-custom-800/20 dark:focus:bg-custom-800/20 dark:active:bg-custom-800/20"><i data-lucide="cable" class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> Connect</button>
                                    </div>
                                </div>
                        
                                <h6 class="mb-2 text-16">Figma Tools</h6>
                                <p class="text-slate-500 dark:text-zink-200">Figma is a cloud-based design tool that is similar to Sketch in functionality and features.</p>
                            </div>
                        </div><!--end col-->
                        <div class="card">
                            <div class="card-body">
                                <div class="flex gap-3 mb-5">
                                    <div class="grow">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIAAAACACAYAAADDPmHLAAAACXBIWXMAAE69AABOvQFzamgUAAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAADJlJREFUeJztnXuQVNWdxz+/ywwwjpAwicbVBUHMGMB1fRAV0cQtrCg6A5PEIaLlFhJrtPC1VAR5VdIiIFtxETPAirJChQ0YR1HEDRqzC2UiVFAQrVKMiBofwS1FkWhkZvqe7/4xM4gsMLe7b3ffHs6n6hRF93n8pu/3/M77XPB4PB6Px+PxeDwej8fj8Xg8Ho/H4/F4PB6Px+PxeDwej8fTFbBiG+DJjnXrVPbOOxzfrRtWXs67Y8ZYmE0+XgAlxPLlOkWiBrgMOBeoaP9qF3Bfz57cMWaMfZ5Jnl4ACSaVUtC/P8PMGC1RB3yzkyRbJEZcc43tjlpGWW4meuJm6VL1NGMEUCcxSuJYKXLyM81oBK6OmsB7gASwaJH69OzJZRKjgUuAo3PIzgF9f/xj+0uUyN4DFIkHHlDfMGRkEFAr8T3n6B5T1oHEucCqKJG9AArI4sX6B6DOjNHpNGcCFmbVdz88ZhwVNa4XQB5JpRSccAJnOEct8CPgWwAZtOlZIbE9alwvgJhZulQ9P/+c882oBerTaf6u0DaUl0cXgO8ExsCSJapqaWEEUAvUAb2KaM7HEyZYVdTI3gNkyYIFOhG4GKjdu5eLgfIim9RB5NoPXgAZsWCBhgA1ErUS55FAD2rmBRAbDz2kbjt3MkyixozvhyHVxbYpAl4AuTBvniqAi8yoee89RgPfgPz33OMikxEAeAEAMG+eqiRqgoAaiZHA0aXywA/C65lEPmIFcPfd6h+GjAZqnOO7QHk+JmUKTRBkJoDEdWLyyV136az2+fbRwGnFtoe2efsgxvx2TZpkX88kQZf2AKmUyioq+C5tY/NRYUi/Ytu0H08DxwL/GGOer2WaoMsJ4Oc/V2U6zSVm1AGXSfQptk0H8LwZsyVuId6HD7At0wRdQgB33qk+wEUSta2tfJ9kduLeMWNWGLI2CFhD/A8fiVczTVOyApgzR8dIjJSod47vQWzLqXHzMfCvra3cU17OyWY8K9E3HwWZdXEPcMcdGgCMAurDkGG0d6ASWNsBWs1YGgTMmDbNPrj9do1wjkeAr+SrwDDsgh5g5kwNkainbbh2VrHtiYCAh4OAqTNm2A6AmTP1zxJLnMvrekHz4MG8mWmixAkglVIQBPvW0Mc6VxLTrx1sBG5NpWxDxwe3365bnONu8j/kfi2breGJEEB9vboNGcKw9va83rnCr6HnyKvAT2fOtKaOD+rr1W3wYBaEIdcXwoBs2n8oogAmTlRFr15c5Bz1ZowKw/y1jXnkQ4lZZWUsTKUs3fHhrbeqsqKCB52jplCGZDMCgAILIJVSVUsLNWbUAJeGIZWQ2E7c4fjMjAVlZcxJpWzP/l9MnaqvBQGPO8d5BbYpmQKYPl19gZFAbUtL28aJEnzgHTgzfiVx2+zZtvPAL2fM0EDnWCt1eoAjHySnCZgyRSdJ1JpRH4bJ3DiRBb8LAn4ye7a9dLAvp07VOek0a4BjCmwXgOvZM/NpYIhRALfdpiFm1EvUSG3DtRKu6fvzvBmT5s619YeKMHmy6pxjBV+c1Ss0f06l7G/ZJMxJAFOmqH8YcjPwQ+cStdASB29KTLvrLn4NdkgpT56sGyXukWJd1csIs+zaf8hSAA0NKu/dm5+l00wmOZsh4+IjYHZzMwsbG6350NFkkyYxyzmmFcyyQ1M4AUyYoKN79GCNc1yYbaEJpRlo7N6dOXPn2seHi5hKqWzPHhaHIeMLZFtnZNUBhCwE0L07v5K4sIu07wCSWGnG9Pnz7a3OIjc06Kjdu3mQtjMAiaBgTcDNN+sKiVHZFpZA1gUBk+fPt+ejRJ44UVXOsaZ9S3hiyGYRqIOMBOAc/2JdYUAHrwCTGxvtv6ImmDBBfdNpngQG58+srPiwsdE+yDZxZAFMnKiq1la+XeKuf6cZP3v/fR5oaoq+cHLTTRos8WS+1vFzIRf3DxkIoLmZgcS7gbGQfGbGgiBgTmPjl6duO+OGG3ROGPIEkNFmywKSdQcQMhCAc3QvQfefNuM/gNTChfZ+poknTFCtc/ya4k3wRKEwHiAIeLuU9s1LPF5WxpRFiyyrGnL99RofhiwmIUvmh8K53DxARnW6oUHbaL/kIME8Z8atixfbM9lm0NCgacAsSmANIwgYcO+9nQ9fD0VG6pZYJPGLbAvLM2+YMf3++w8/dXs4UikF773HPc5xY9zG5Ym/HX88b+eSQUYKr69X9969eY5knKrp4CNg1p49LGxqspZsM2n/235J21UuJYEZW5YssZz2SWbkAZqarGXcOF1uxjPAcbkUHBP/1tzM7BUrDj912xkNDTqqtZWHnWNkXIYVAim39h+y6OAsW2bbx43TdyQeAk7P1YBccI6mXB/+uHH6anMzTwDDYzKrkOQsgKzG9cuW2fYePTjbOa6VWCuxU2pb/y9kaD/+lTVjx+obzrFOYngx7M815DoCgBh7uePG6bh0mtMlhphRDVQDp0D+dvia8ery5TYom7RXXqkTg4Cn6fz+3cRixuDly7Mb5u7LIy5jDsX48eq1dy/VQUC1c1SbcTJwshkDpdy3TznHoJUrLaPJkKuv1iDn+C3w97mWX0RaKyupvO8+a80lk6KOc+vr9ZUgYGAQcDIwEPb9ezrRj1BNXbnS5kYtc+xYncYXR7NLmW0rV1rOC1NFneVqarJPgC3tYR9jx+paifsjZjMaiCSAK67QGRK/Jbnz+pmQc/sPyV3cecw50s5BhHDOD36gTl15fb3Oco7fOcfXI+ab9PBKHD90IgWwcqV9KLEhYm/YysoOfwJnzBgNB/5HoqrYPfcYQyweILELHWHIo2Z8J0pcM0YD9x7su8sv1wVhyG/I7Q7+xKEsj4IdSCI9QDuPSijieHhEXZ2+emAGdXXq7xyPSG03hnSh4Cor+VMcP3JiBbBqlf3ZObZEbA/LzbjkyznIgBXOcUwC2uu4w9vLl9tncfzOiW0CACQelaJdCqG2lyo92PH/UaP4kXMMy5txxSWW9h8S7AHaeTSqWwQuHTlSPToSSvwkAa46XyGWEQAkXACrV9srEn+K6BZ7mfFPAJdeqtOdY2gCXHVeQi7bwA8k0QIAcC4jL1AHYMaoBNTSfIYjpgnAOVZFrRkSdamUAuc4v9i1NJ+hpSU+D5D4PW8gu/hi3oJop4+DgGHO8TjFOadfCP73qacsts04iR4FtGGStFripiixneM6uu7DhxhHAFASAtg3KxhJAJTQnr4sOfIEUFXFM7t28QHRanaSD3HEQWxDQCiBTiBAU5OFEmvy0JuWREsCevWRg3PxdQChRDwAgNpmBeO8kEHt/YoNZjxGxE5msUmn4/UAJSOAigqe/vRT9gC9Y8hOEjf+4Q+2COCCC3SuGavU9tLlJLPn2Wf5f9fT5UJJNAEAa9das9qOaOfs9oEbOh4+wO9/bzsrK7lQ4hfFdvGdhFeyPfV0KErGA0DbrCAwJocsQuDaDRts2YFfrF1rzcAt552n54DFEP0N3AUk1hEAlJAHAOjenSck9mZZe0KJ8Qd7+PuzYYP9p8T5Em8moMYfGI5sAaxfb586x39nMX0aOsc1GzfaL6OUs3GjvRCGfNs5nir2tO8Bi0BHtgDaeSTDWpN2jqv++EdbnkkhmzbZrn79uExijiLuTMp3yIcASmAt4MsMH65ezc38hWh7/Folrtq8+Yt7/LNh6FCNMmOZivsGsr0DBnB0JncbRaHkBAAwdKgWSzR0Eq1V4ootW2xVHGWefbYGhCFNULTX1ry4ebPFfhi3FJsAJKaHIW8cpr1sCUPq43r4AJs22ZuffMJw5/j3IvUBYnf/UKIC2LzZPkynuVBi/cHGymHIRVu32uq4y339dWt+4QWbIHGVxKeFbP+d4+W4/x4o0SZgf047TafS7paDgBe3buXFuCdLDsapp2pQENAEDMl3We2MfOklezLuTEteAMVk2DBV/PWv3A1cl+eiWsvKOHbrVtsdd8ZeADEwaJDqgoAlwNfyVMRTL79sl3QeLXNKsg+QNLZts8fMOMM5nsnTBFCkCaxs8B4gVtRt0CCmSfyU+NZZ3jjuOE5Zv/6L19LFiRdAHqiu1tnACtouu8gFSdRu3x79VvNM8U1AHnjtNdvU0sJQ4KEch37z8vnwwXuAvHPSSbrSjAWQ0TSygDt37GBGvoe0XgAFoLpaJ6TTzAd+SOe/+WYzJu3YYesKYJoXQCE58USdacZ1tL1Jdf+XT3xsxm8kHn7rLVYXYiKrAy+AItGvn/oAfZxj97vv2kfFtsfj8Xg8Ho/H4/F4PB6Px+PxeDwej8fj8Xg8Ho/H4/F4PB6Px1PC/B8ry8l4H0WeiQAAAABJRU5ErkJggg==" alt="" class="h-8">
                                    </div>
                                    <div class="shrink-0">
                                        <button type="button" class="px-2 py-1.5 text-xs bg-white border-dashed text-custom-500 btn border-custom-500 hover:text-custom-500 hover:bg-custom-50 hover:border-custom-600 focus:text-custom-600 focus:bg-custom-50 focus:border-custom-600 active:text-custom-600 active:bg-custom-50 active:border-custom-600 dark:bg-zink-700 dark:ring-custom-400/20 dark:hover:bg-custom-800/20 dark:focus:bg-custom-800/20 dark:active:bg-custom-800/20"><i data-lucide="cable" class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> Connect</button>
                                    </div>
                                </div>
                        
                                <h6 class="mb-2 text-16">Telegram Channel</h6>
                                <p class="text-slate-500 dark:text-zink-200">Telegram Tools offers multiple useful tools for Telegram users.</p>
                            </div>
                        </div><!--end col-->
                    </div><!--end grid-->
                </div>
                <div class="hidden tab-pane" id="changePasswordTabs">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-4 text-15">Changes Password</h6>
                            <form action="#!">
                                <div class="grid grid-cols-1 gap-5 xl:grid-cols-12">
                                    <div class="xl:col-span-4">
                                        <label for="inputValue" class="inline-block mb-2 text-base font-medium">Old Password*</label>
                                        <div class="relative">
                                            <input type="password" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" id="oldpasswordInput" placeholder="Enter current password">
                                            <button class="absolute top-2 ltr:right-4 rtl:left-4 " type="button"><i class="align-middle ri-eye-fill text-slate-500 dark:text-zink-200"></i></button>
                                        </div>
                                    </div><!--end col-->
                                    <div class="xl:col-span-4">
                                        <label for="inputValue" class="inline-block mb-2 text-base font-medium">New Password*</label>
                                        <div class="relative">
                                            <input type="password" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" id="oldpasswordInput" placeholder="Enter new password">
                                            <button class="absolute top-2 ltr:right-4 rtl:left-4 " type="button"><i class="align-middle ri-eye-fill text-slate-500 dark:text-zink-200"></i></button>
                                        </div>
                                    </div><!--end col-->
                                    <div class="xl:col-span-4">
                                        <label for="inputValue" class="inline-block mb-2 text-base font-medium">Confirm Password*</label>
                                        <div class="relative">
                                            <input type="password" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" id="oldpasswordInput" placeholder="Confirm password">
                                            <button class="absolute top-2 ltr:right-4 rtl:left-4 " type="button"><i class="align-middle ri-eye-fill text-slate-500 dark:text-zink-200"></i></button>
                                        </div>
                                    </div><!--end col-->
                                    <div class="flex items-center xl:col-span-6">
                                        <a href="javascript:void(0);" class="underline text-custom-500 text-13">Forgot Password ?</a>
                                    </div>
                                    <div class="flex justify-end xl:col-span-6">
                                        <button type="button" class="text-white bg-green-500 border-green-500 btn hover:text-white hover:bg-green-600 hover:border-green-600 focus:text-white focus:bg-green-600 focus:border-green-600 focus:ring focus:ring-green-100 active:text-white active:bg-green-600 active:border-green-600 active:ring active:ring-green-100 dark:ring-green-400/10">Change Password</button>
                                    </div>
                                </div><!--end grid-->
                            </form>
                        </div>
                    </div>
                </div>
                <div class="hidden tab-pane" id="privacyPolicyTabs">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-4 text-15">Security & Privacy</h6>
                            <div class="space-y-6">
                                <div class="flex flex-col justify-between gap-2 md:flex-row">
                                    <div>
                                        <h4 class="text-15">Two-factor Authentication</h4>
                                        <p class="mt-1 text-slate-500 dark:text-zink-200">Two-factor authentication is an enhanced security. Once enabled, you'll be required to give two types of identification when you log into Google Authentication and SMS are Supported.</p>
                                    </div>
                                    <div class="shrink-0">
                                        <button type="button" class="py-1 text-xs px-1.5 text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Enable Two-factor Authentication</button>
                                    </div>
                                </div>
                                <div class="flex flex-col justify-between gap-2 md:flex-row">
                                    <div>
                                        <h4 class="text-15">Secondary Verification</h4>
                                        <p class="mt-1 text-slate-500 dark:text-zink-200">The first factor is a password and the second commonly includes a text with a code sent to your smartphone, or biometrics using your fingerprint, face, or retina.</p>
                                    </div>
                                    <div class="shrink-0">
                                        <button type="button" class="py-1 text-xs px-1.5 text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Set up secondary method</button>
                                    </div>
                                </div>
                                <div class="flex flex-col justify-between gap-2 md:flex-row">
                                    <div>
                                        <h4 class="text-15">Backup Codes</h4>
                                        <p class="mt-1 text-slate-500 dark:text-zink-200">A backup code is automatically generated for you when you turn on two-factor authentication through your iOS or Android Twitter app. You can also generate a backup code on twitter.com.</p>
                                    </div>
                                    <div class="shrink-0">
                                        <button type="button" class="py-1 text-xs px-1.5 text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Generate backup codes</button>
                                    </div>
                                </div>
                            </div>
                            <h6 class="inline-block mt-6 mb-4 underline text-15">Application Notifications:</h6>
                            <div class="space-y-6">
                                <div class="flex justify-between gap-2">
                                    <div>
                                        <h4 class="text-15">Direct messages</h4>
                                        <p class="mt-1 text-slate-500 dark:text-zink-200">Messages from people you follow</p>
                                    </div>
                                    <div class="shrink-0">
                                        <div class="relative inline-block w-10 align-middle transition duration-200 ease-in ltr:mr-2 rtl:ml-2">
                                            <input type="checkbox" name="directMessage" id="directMessage" class="absolute block transition duration-300 ease-linear border-2 rounded-full appearance-none cursor-pointer size-5 border-slate-200 dark:border-zink-600 bg-white/80 dark:bg-zink-400 peer/published checked:bg-custom-500 dark:checked:bg-custom-500 ltr:checked:right-0 rtl:checked:left-0 checked:border-custom-100 dark:checked:border-custom-900 arrow-none checked:bg-none" checked="">
                                            <label for="directMessage" class="block h-5 overflow-hidden duration-300 ease-linear border rounded-full cursor-pointer cursor-pointertransition border-slate-200 dark:border-zink-500 bg-slate-200 dark:bg-zink-600 peer-checked/published:bg-custom-100 dark:peer-checked/published:bg-custom-900 peer-checked/published:border-custom-100 dark:peer-checked/published:border-custom-900"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex justify-between gap-2">
                                    <div>
                                        <h4 class="text-15">Show email notifications</h4>
                                        <p class="mt-1 text-slate-500 dark:text-zink-200">Under Settings, choose Notifications. Under Select an account, choose the account to enable notifications for.</p>
                                    </div>
                                    <div class="shrink-0">
                                        <div class="relative inline-block w-10 align-middle transition duration-200 ease-in ltr:mr-2 rtl:ml-2">
                                            <input type="checkbox" name="emailNotification" id="emailNotification" class="absolute block transition duration-300 ease-linear border-2 rounded-full appearance-none cursor-pointer size-5 border-slate-200 dark:border-zink-600 bg-white/80 dark:bg-zink-400 peer/published checked:bg-custom-500 dark:checked:bg-custom-500 ltr:checked:right-0 rtl:checked:left-0 checked:border-custom-100 dark:checked:border-custom-900 arrow-none checked:bg-none" checked="">
                                            <label for="emailNotification" class="block h-5 overflow-hidden duration-300 ease-linear border rounded-full cursor-pointer cursor-pointertransition border-slate-200 dark:border-zink-500 bg-slate-200 dark:bg-zink-600 peer-checked/published:bg-custom-100 dark:peer-checked/published:bg-custom-900 peer-checked/published:border-custom-100 dark:peer-checked/published:border-custom-900"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex justify-between gap-2">
                                    <div>
                                        <h4 class="text-15">Show chat notifications</h4>
                                        <p class="mt-1 text-slate-500 dark:text-zink-200">Messages from people you follow</p>
                                    </div>
                                    <div class="shrink-0">
                                        <div class="relative inline-block w-10 align-middle transition duration-200 ease-in ltr:mr-2 rtl:ml-2">
                                            <input type="checkbox" name="chatNotification" id="chatNotification" class="absolute block transition duration-300 ease-linear border-2 rounded-full appearance-none cursor-pointer size-5 border-slate-200 dark:border-zink-600 bg-white/80 dark:bg-zink-400 peer/published checked:bg-custom-500 dark:checked:bg-custom-500 ltr:checked:right-0 rtl:checked:left-0 checked:border-custom-100 dark:checked:border-custom-900 arrow-none checked:bg-none" checked="">
                                            <label for="chatNotification" class="block h-5 overflow-hidden duration-300 ease-linear border rounded-full cursor-pointer cursor-pointertransition border-slate-200 dark:border-zink-500 bg-slate-200 dark:bg-zink-600 peer-checked/published:bg-custom-100 dark:peer-checked/published:bg-custom-900 peer-checked/published:border-custom-100 dark:peer-checked/published:border-custom-900"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex justify-between gap-2">
                                    <div>
                                        <h4 class="text-15">Show purchase notifications</h4>
                                        <p class="mt-1 text-slate-500 dark:text-zink-200">Get real-time purchase alerts to protect yourself from fraudulent charges.</p>
                                    </div>
                                    <div class="shrink-0">
                                        <div class="relative inline-block w-10 align-middle transition duration-200 ease-in ltr:mr-2 rtl:ml-2">
                                            <input type="checkbox" name="showPurchase" id="showPurchase" class="absolute block transition duration-300 ease-linear border-2 rounded-full appearance-none cursor-pointer size-5 border-slate-200 dark:border-zink-600 bg-white/80 dark:bg-zink-400 peer/published checked:bg-custom-500 dark:checked:bg-custom-500 ltr:checked:right-0 rtl:checked:left-0 checked:border-custom-100 dark:checked:border-custom-900 arrow-none checked:bg-none" checked="">
                                            <label for="customSoftSwitch" class="block h-5 overflow-hidden duration-300 ease-linear border rounded-full cursor-pointer cursor-pointertransition border-slate-200 dark:border-zink-500 bg-slate-200 dark:bg-zink-600 peer-checked/published:bg-custom-100 dark:peer-checked/published:bg-custom-900 peer-checked/published:border-custom-100 dark:peer-checked/published:border-custom-900"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h6 class="inline-block mt-6 mb-4 underline text-15">Delete This Account:</h6>
                            <p class="mt-1 text-slate-500 dark:text-zink-200">Go to the Data & Privacy section of your profile Account. Scroll to "Your data & privacy options." Delete your Profile Account. Follow the instructions to delete your account :</p>
                            <form action="">
                                <div class="max-w-xs mt-4">
                                    <div>
                                        <input type="password" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" id="oldpasswordInput" placeholder="Enter password">
                                    </div>
                                    <div class="flex mt-4 gap-x-2">
                                        <button type="button" class="text-red-500 bg-red-100 btn hover:text-white hover:bg-red-600 focus:text-white focus:bg-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:ring active:ring-red-100 dark:bg-red-500/20 dark:text-red-500 dark:hover:bg-red-500 dark:hover:text-white dark:focus:bg-red-500 dark:focus:text-white dark:active:bg-red-500 dark:active:text-white dark:ring-red-400/20">Close & delete this Account</button>
                                        <button type="button" class="text-slate-500 btn bg-slate-200 border-slate-200 hover:text-slate-600 hover:bg-slate-300 hover:border-slate-300 focus:text-slate-600 focus:bg-slate-300 focus:border-slate-300 focus:ring focus:ring-slate-100 active:text-slate-600 active:bg-slate-300 active:border-slate-300 active:ring active:ring-slate-100 dark:bg-zink-600 dark:hover:bg-zink-500 dark:border-zink-600 dark:hover:border-zink-500 dark:text-zink-200 dark:ring-zink-400/50">Cancel</button>
                                    </div>
                                </div><!--end col-->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
@section('script')
@endsection
@endsection