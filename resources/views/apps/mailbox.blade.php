@extends('layouts.master')

@section('content')
    <!-- Page-content -->
    <div class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
        <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto relative">

            <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
                <div class="grow">
                    <h5 class="text-16">Mailbox</h5>
                </div>
                <ul class="flex items-center gap-2 text-sm font-normal shrink-0">
                    <li class="relative before:content-['\ea54'] before:font-remix ltr:before:-right-1 rtl:before:-left-1  before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-slate-400 dark:text-zink-200">
                        <a href="#!" class="text-slate-400 dark:text-zink-200">Apps</a>
                    </li>
                    <li class="text-slate-700 dark:text-zink-100">
                        Mailbox
                    </li>
                </ul>
            </div>
            <div class="grid grid-cols-12 xl:flex-row gap-x-5">
                <div class="col-span-12 lg:col-span-3 2xl:col-span-2 shrink-0 card">
                    <div class="card-body">
                        <button type="button" data-modal-target="addEmailModal" class="w-full text-white bg-red-500 border-red-500 btn hover:text-white hover:bg-red-600 hover:border-red-600 focus:text-white focus:bg-red-600 focus:border-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:border-red-600 active:ring active:ring-red-100 dark:ring-custom-400/20"><i data-lucide="plus" class="inline-block mr-1 size-4"></i> <span class="align-middle">Compose Email</span></button>
                        <ul class="mt-4">
                            <li>
                                <a href="#!" class="transition-all duration-300 ease-linear text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 inline-block py-2 [&.active]:text-custom-500 dark:[&.active]:text-custom-500"><i data-lucide="inbox" class="inline-block align-middle size-4 rtl:ml-2 ltr:mr-2"></i> <span class="align-middle">Inbox</span></a>
                            </li>
                            <li>
                                <a href="#!" class="transition-all duration-300 ease-linear text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 inline-block py-2 [&.active]:text-custom-500 dark:[&.active]:text-custom-500"><i data-lucide="star" class="inline-block align-middle size-4 rtl:ml-2 ltr:mr-2"></i> <span class="align-middle">Starred</span></a>
                            </li>
                            <li>
                                <a href="#!" class="transition-all duration-300 ease-linear text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 inline-block py-2 [&.active]:text-custom-500 dark:[&.active]:text-custom-500"><i data-lucide="pen-square" class="inline-block align-middle size-4 rtl:ml-2 ltr:mr-2"></i> <span class="align-middle">Draft</span></a>
                            </li>
                            <li>
                                <a href="#!" class="transition-all duration-300 ease-linear text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 inline-block py-2 [&.active]:text-custom-500 dark:[&.active]:text-custom-500"><i data-lucide="step-forward" class="inline-block align-middle size-4 rtl:ml-2 ltr:mr-2"></i> <span class="align-middle">Important</span></a>
                            </li>
                            <li>
                                <a href="#!" class="transition-all duration-300 ease-linear text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 inline-block py-2 [&.active]:text-custom-500 dark:[&.active]:text-custom-500"><i data-lucide="alert-octagon" class="inline-block align-middle size-4 rtl:ml-2 ltr:mr-2"></i> <span class="align-middle">Spam</span></a>
                            </li>
                            <li>
                                <a href="#!" class="transition-all duration-300 ease-linear text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 inline-block py-2 [&.active]:text-custom-500 dark:[&.active]:text-custom-500"><i data-lucide="user-circle" class="inline-block align-middle size-4 rtl:ml-2 ltr:mr-2"></i> <span class="align-middle">Contacts</span></a>
                            </li>
                            <li>
                                <a href="#!" class="transition-all duration-300 ease-linear text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 inline-block py-2 [&.active]:text-custom-500 dark:[&.active]:text-custom-500"><i data-lucide="trash-2" class="inline-block align-middle size-4 rtl:ml-2 ltr:mr-2"></i> <span class="align-middle">Trash</span></a>
                            </li>
                            <li class="py-3">
                                <p class="text-sm uppercase">Category</p>
                            </li>
                            <li>
                                <a href="#!" class="transition-all duration-300 ease-linear text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 inline-block py-2 [&.active]:text-custom-500 dark:[&.active]:text-custom-500"><i data-lucide="radio-tower" class="inline-block align-middle size-4 rtl:ml-2 ltr:mr-2"></i> <span class="align-middle">Social</span></a>
                            </li>
                            <li>
                                <a href="#!" class="transition-all duration-300 ease-linear text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 inline-block py-2 [&.active]:text-custom-500 dark:[&.active]:text-custom-500"><i data-lucide="squirrel" class="inline-block align-middle size-4 rtl:ml-2 ltr:mr-2"></i> <span class="align-middle">Updates</span></a>
                            </li>
                            <li>
                                <a href="#!" class="transition-all duration-300 ease-linear text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 inline-block py-2 [&.active]:text-custom-500 dark:[&.active]:text-custom-500"><i data-lucide="file-text" class="inline-block align-middle size-4 rtl:ml-2 ltr:mr-2"></i> <span class="align-middle">Forums</span></a>
                            </li>
                            <li>
                                <a href="#!" class="transition-all duration-300 ease-linear text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 inline-block py-2 [&.active]:text-custom-500 dark:[&.active]:text-custom-500"><i data-lucide="tag" class="inline-block align-middle size-4 rtl:ml-2 ltr:mr-2"></i> <span class="align-middle">Promotions</span></a>
                            </li>
                            <li class="py-3">
                                <p class="text-sm uppercase">Label</p>
                            </li>
                            <li>
                                <a href="#!" class="transition-all duration-300 ease-linear text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 inline-block py-2 [&.active]:text-custom-500 dark:[&.active]:text-custom-500"><i data-lucide="circle-dot" class="inline-block text-red-500 align-middle size-4 rtl:ml-2 ltr:mr-2"></i> <span class="align-middle">Support</span></a>
                            </li>
                            <li>
                                <a href="#!" class="transition-all duration-300 ease-linear text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 inline-block py-2 [&.active]:text-custom-500 dark:[&.active]:text-custom-500"><i data-lucide="circle-dot" class="inline-block text-purple-500 align-middle size-4 rtl:ml-2 ltr:mr-2"></i> <span class="align-middle">Freelance</span></a>
                            </li>
                            <li>
                                <a href="#!" class="transition-all duration-300 ease-linear text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500 inline-block py-2 [&.active]:text-custom-500 dark:[&.active]:text-custom-500"><i data-lucide="circle-dot" class="inline-block align-middle size-4 rtl:ml-2 ltr:mr-2 text-sky-500"></i> <span class="align-middle">Personal</span></a>
                            </li>
                        </ul>
                    </div>
                </div><!--end-->
                <div class="col-span-12 lg:col-span-9 2xl:col-span-10 grow card">
                    <div id="emailList" class="block">
                        <div class="card-body">
                            <div class="grid items-center grid-cols-1 gap-4 2xl:grid-cols-12">
                                <div class="2xl:col-span-5">
                                    <div class="flex flex-wrap items-center gap-3 divide-x rtl:divide-x-reverse divide-slate-200 dark:divide-zink-500">
                                        <div class="flex items-center gap-3">
                                            <div class="flex items-center gap-2" id="email-topbar-actions">
                                                <input id="checkboxAll" class="form-check-input size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800" type="checkbox">
                                            </div>
                                            <a href="#!" class="flex items-center justify-center transition-all duration-200 ease-linear size-6 text-slate-500 dark:text-zink-200 hover:text-slate-600 dark:hover:text-zink-50"><i data-lucide="refresh-cw" class="size-4"></i></a>
                                        </div>
                                        <div class="flex items-center gap-3 ltr:pl-2 rtl:pr-2">
                                            <a href="#!" class="flex items-center justify-center transition-all duration-200 ease-linear size-6 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500"><i data-lucide="archive-restore" class="size-4"></i></a>
                                            <a href="#!" class="flex items-center justify-center transition-all duration-200 ease-linear size-6 text-slate-500 dark:text-zink-200 hover:text-orange-500 dark:hover:text-orange-500"><i data-lucide="alert-octagon" class="size-4"></i></a>
                                            <a href="#!" class="flex items-center justify-center transition-all duration-200 ease-linear size-6 text-slate-500 dark:text-zink-200 hover:text-red-500 dark:hover:text-red-500" data-modal-target="deleteModal"><i data-lucide="trash-2" class="size-4"></i></a>
                                        </div>
                                        <div class="flex items-center gap-3 ltr:pl-2 rtl:pr-2">
                                            <a href="#!" class="flex items-center justify-center transition-all duration-200 ease-linear size-6 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500" id="mark-all-read"><i data-lucide="mail" class="size-4"></i></a>
                                            <a href="#!" class="flex items-center justify-center transition-all duration-200 ease-linear size-6 text-slate-500 dark:text-zink-200 hover:text-green-500 dark:hover:text-green-500"><i data-lucide="tag" class="size-4"></i></a>
                                            <a href="#!" class="flex items-center justify-center transition-all duration-200 ease-linear size-6 text-slate-500 dark:text-zink-200 hover:text-sky-500 dark:hover:text-sky-500"><i data-lucide="clock" class="size-4"></i></a>
                                        </div>
                                        <div class="hidden px-4 py-3 text-sm text-yellow-500 border border-transparent rounded-md unreadConversations-alert bg-yellow-50 dark:bg-yellow-400/20" id="unreadConversations">
                                            <span class="font-bold">No Unread Conversations</span>
                                        </div>
                                    </div>
                                </div><!--end col-->
                                <div class="flex items-center gap-2 2xl:col-span-4 2xl:col-start-9">
                                    <div class="relative grow">
                                        <input type="text" id="searchResultList" value="" class="ltr:pl-8 rtl:pr-8 search form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Search for ..." autocomplete="off">
                                        <i data-lucide="search" class="inline-block size-4 absolute ltr:left-2.5 rtl:right-2.5 top-2.5 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-600"></i>
                                    </div>
                                    <div class="relative dropdown shrink-0">
                                        <button id="emailMainAction" data-bs-toggle="dropdown" class="flex items-center justify-center w-[39px] h-[39px] dropdown-toggle p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"><i data-lucide="more-horizontal" class="size-5"></i></button>
                                        <ul class="absolute z-50 hidden py-2 mt-1 text-left list-none bg-white rounded-md shadow-md dropdown-menu min-w-max dark:bg-zink-600" aria-labelledby="emailMainAction">
                                            <li>
                                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">Show more message</a>
                                            </li>
                                            <li>
                                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">Important & Unread</a>
                                            </li>
                                            <li>
                                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">Hide section when empty</a>
                                            </li>
                                            <li>
                                                <a data-modal-target="deleteModal" class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">All Delete</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!--end col-->
                            </div><!--end grid-->
                        </div>
                        <div class="xl:max-h-[calc(100vh_-_300px)]" data-simplebar="">
                            <div class="!pt-0 card-body">
                                <div class="overflow-x-auto">
                                    <table class="w-full whitespace-nowrap">
                                        <tbody class="elmLoader" id="mail-list">
                                            <tr>
                                                <td colspan="3">
                                                    <p class="mb-2 text-slate-500 dark:text-zink-200">Today</p>
                                                </td>
                                            </tr>
                                            <tr class="relative before:absolute ltr:before:left-0 rtl:before:right-0 before:border [&.checked]:before:border-custom-500 before:inset-y-0 before:border-transparent unread group/mail">
                                                <td class="px-3.5 py-2.5 border-y border-transparent first:pl-0 last:pr-0 w-20">
                                                    <div class="flex items-center gap-3 ltr:pl-2 rtl:pr-2 checkbox-wrapper-mail">
                                                        <input id="checkbox" class="itemCheckbox size-4 cursor-pointer bg-white border border-slate-200 checked:bg-none dark:bg-zink-700 dark:border-zink-500 rounded-sm appearance-none arrow-none relative after:absolute after:content-['\eb7b'] after:top-0 after:left-0 after:font-remix after:leading-none after:opacity-0 checked:after:opacity-100 after:text-custom-500 checked:border-custom-500 dark:after:text-custom-500 dark:checked:border-custom-800" type="checkbox">
                                                        <a href="#!" class="transition-all duration-200 ease-linear text-slate-500 hover:text-yellow-500 dark:text-zink-200 dark:hover:text-yellow-500"><i data-lucide="star" class="size-4"></i></a>
                                                        <a href="#!" class="transition-all duration-200 ease-linear text-slate-500 hover:text-yellow-500 dark:text-zink-200 dark:hover:text-yellow-500"><i data-lucide="step-forward" class="size-4"></i></a>
                                                    </div>
                                                </td>
                                                <td class="px-3.5 py-2.5 border-y border-transparent  mailBox first:pl-0 last:pr-0 text-slate-500 group-[.unread]/mail:text-slate-800 dark:text-zink-200 dark:group-[.unread]/mail:text-zink-50">
                                                    <div class="grid items-center grid-cols-12 gap-3 ">
                                                        <div class="col-span-4 lg:col-span-2">
                                                            <a href="#!" class="block truncate before:inset-0 before:absolute">Patricia Garcia</a>
                                                        </div>
                                                        <div class="col-span-8 lg:col-span-10">
                                                            <p class="truncate">List all mail-enabled users who have specific permissions on the selected mailboxes, in other words their delegates.</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-3.5 py-2.5 border-y border-transparent first:pl-0 last:pr-0 text-end w-20 text-slate-500 group-[.unread]/mail:text-slate-800 dark:text-zink-200 dark:group-[.unread]/mail:text-zink-50">01:20 AM</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="emailOverview" class="hidden">
                        <div class="card-body">
                            <div class="flex gap-2">
                                <div class="grow">
                                    <button id="closeChatRightSidebar" class="inline-flex items-center justify-center h-8 transition-all duration-200 ease-linear rounded-md shrink-0 text-slate-500 hover:text-custom-500"><i data-lucide="chevrons-left" class="mx-auto size-4"></i></button>
                                    <h6 class="mb-1 text-16">How Custom Software Can Solve Your Business Challenges</h6>
                                    <p class="text-slate-500 dark:text-zink-200"><a href="#!">infrateach@starcode.com</a> (Aug 6, 2023, 9:04 PM)</p>
                                </div>
                                <div class="flex gap-3 shrink-0">
                                    <a href="#!" class="flex items-center justify-center transition-all duration-200 ease-linear size-6 text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500"><i data-lucide="archive-restore" class="size-4"></i></a>
                                    <a href="#!" class="flex items-center justify-center transition-all duration-200 ease-linear size-6 text-slate-500 dark:text-zink-200 hover:text-sky-500 dark:hover:text-sky-500"><i data-lucide="printer" class="size-4"></i></a>
                                    <a href="#!" class="flex items-center justify-center transition-all duration-200 ease-linear size-6 text-slate-500 dark:text-zink-200 hover:text-yellow-500 dark:hover:text-yellow-500"><i data-lucide="star" class="size-4"></i></a>
                                    <a href="#!" class="flex items-center justify-center transition-all duration-200 ease-linear size-6 text-slate-500 dark:text-zink-200 hover:text-red-500 dark:hover:text-red-500"><i data-lucide="trash-2" class="size-4"></i></a>
                                </div>
                            </div>

                        </div>
                        <div class="xl:max-h-[calc(100vh_-_385px)]" data-simplebar="">
                            <div class="card-body !pt-0">
                                <div class="flex gap-3 mt-3 first:mt-0">
                                    <div class="relative flex items-center justify-center font-semibold rounded-full text-slate-500 size-9 bg-slate-100 shrink-0 dark:text-zink-200 dark:bg-zink-600">
                                        <img src="assets/images/avatar-5.png" alt="" class="rounded-full h-9">
                                    </div>
                                    <div class="grow">
                                        <div class="flex items-center">
                                            <div class="grow">
                                                <h6>Infra Teach</h6>
                                                <p class="text-slate-500 dark:text-zink-200"><a href="#!">infrateach@starcode.com</a>
                                            </p></div>
                                            <div class="shrink-0">
                                                Aug 6, 2023, 9:04 PM
                                            </div>
                                        </div>
                                        <div class="p-4 mt-3 rounded-md bg-slate-100 dark:bg-zink-600">
                                            <p class="mb-2 last:mb-0">Hi,</p>
                                            <p class="mb-2 last:mb-0">Custom software solutions are tailor-made software applications designed to meet the unique needs of a specific business or organization. Unlike off-the-shelf software, which offers a standardized solution for a broad range of users, custom software is precisely crafted to align with the workflows, processes, and objectives of a particular business.</p>
                                            <p class="mb-2 last:mb-0">The key advantage of custom software lies in its ability to be scalable and flexible. It can evolve alongside the business, accommodating changing requirements and supporting expansion. By adapting to the specific needs of the organization, custom software empowers businesses to gain a competitive edge, differentiate themselves in the market, and deliver enhanced experiences to their customers.</p>
                                            <p class="mb-2 last:mb-0">Thank You</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex gap-3 mt-3 first:mt-0">
                                    <div class="relative flex items-center justify-center font-semibold bg-pink-100 rounded-full text-slate-500 size-9 shrink-0 dark:bg-pink-500/20 dark:text-zink-200">
                                        <img src="assets/images/avatar-1.png" alt="" class="rounded-full h-9">
                                    </div>
                                    <div class="grow">
                                        <div class="flex items-center">
                                            <div class="grow">
                                                <h6>Me</h6>
                                                <p class="text-slate-500 dark:text-zink-200"><a href="#!">paulakeenan@starcode.com</a>
                                            </p></div>
                                            <div class="shrink-0">
                                                07 Nov, 2023, 10:14 PM
                                            </div>
                                        </div>
                                        <div class="p-4 mt-3 rounded-md bg-slate-100 dark:bg-zink-600">
                                            <p class="mb-2 last:mb-0">Hi,</p>
                                            <p class="mb-2 last:mb-0">I hope this email finds you well. Let me start by saying that I am a big fan of your work and it has inspired me to push myself beyond what I thought were my limits!</p>
                                            <p class="mb-2 last:mb-0">After taking a good look at [target company] I realize that you could improve in [improvement area]. I have helped many others improve in the same area and I‘d be more than happy to talk with you about it!</p>
                                            <p class="mb-2 last:mb-0">Would you be available for a quick call to discuss how our [product/service] could help you?</p>
                                            <p class="mb-2 last:mb-0">Regards,</p>
                                            <p class="mb-2 last:mb-0">StarCode Kh</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex gap-3 mt-3 first:mt-0">
                                    <div class="relative flex items-center justify-center font-semibold rounded-full text-slate-500 size-9 bg-slate-100 shrink-0 dark:text-zink-200 dark:bg-zink-600">
                                        <img src="assets/images/avatar-5.png" alt="" class="rounded-full h-9">
                                    </div>
                                    <div class="grow">
                                        <div class="flex items-center">
                                            <div class="grow">
                                                <h6>Infra Teach</h6>
                                                <p class="text-slate-500 dark:text-zink-200"><a href="#!">infrateach@starcode.com</a>
                                            </p></div>
                                            <div class="shrink-0">
                                                07 Nov, 2023, 10:42 PM
                                            </div>
                                        </div>
                                        <div class="p-4 mt-3 rounded-md bg-slate-100 dark:bg-zink-600">
                                            <p class="mb-2 last:mb-0">Hello, StarCode Kh</p>
                                            <p class="mb-2 last:mb-0">You are probably very busy, I totally understand that!</p>
                                            <p class="mb-2 last:mb-0">It would be great to hear back from you. So, please let me know when you find some time.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="flex items-center gap-2">
                                <div class="grow">
                                    <input type="text" id="inputText" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Enter Message" required="" autocomplete="off">
                                </div>
                                <div class="flex gap-2 shrink-0">
                                    <button type="button" class="flex items-center justify-center size-[37.5px] transition-all duration-200 ease-linear p-0 text-slate-500 btn bg-transparent border-transparent hover:text-slate-700 focus:text-slate-700 active:text-slate-700 dark:text-zink-200 dark:hover:text-zink-50 dark:focus:text-zink-50 dark:active:text-zink-50"><i data-lucide="mic" class="size-4"></i></button>
                                    <button type="button" class="flex items-center justify-center size-[37.5px] transition-all duration-200 ease-linear p-0 text-slate-500 btn bg-transparent border-transparent hover:text-slate-700 focus:text-slate-700 active:text-slate-700 dark:text-zink-200 dark:hover:text-zink-50 dark:focus:text-zink-50 dark:active:text-zink-50"><i data-lucide="image" class="size-4"></i></button>
                                    <button type="button" class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20"><i data-lucide="send" class="inline-block mr-1 align-middle size-4"></i> <span class="align-middle">Send</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--end-->
            </div>

        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <div id="addEmailModal" modal-center="" class="fixed flex flex-col hidden transition-all duration-300 ease-in-out left-2/4 z-drawer -translate-x-2/4 -translate-y-2/4 show ">
        <div class="w-screen lg:w-[55rem] bg-white shadow rounded-md dark:bg-zink-600">
            <div class="flex items-center justify-between p-5 border-b dark:border-zink-500">
                <h5 class="text-16">New Message</h5>
                <button data-modal-close="addEmailModal" class="transition-all duration-200 ease-linear text-slate-500 hover:text-red-500"><i data-lucide="x" class="size-5"></i></button>
            </div>
            <div class="max-h-[calc(theme('height.screen')_-_180px)] p-5 overflow-y-auto">
                <form action="#!">
                    <div class="grid grid-cols-1 gap-5 xl:grid-cols-12">
                        <div class="xl:col-span-12">
                            <div class="flex items-center gap-3 mb-2">
                                <label for="emailTo" class="inline-block text-base font-medium grow">To</label>
                                <div>
                                    <a href="#!" class="mr-1 inlin-block">Cc</a>
                                    <a href="#!">Bcc</a>
                                </div>
                            </div>
                            <input class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" id="emailTo" data-choices="" data-choices-limit="3" data-choices-removeitem="" type="text" value="starcode@StarCode Kh.com">
                        </div>
                        <div class="xl:col-span-12">
                            <div>
                                <label for="subjectInput" class="inline-block mb-2 text-base font-medium">Subject</label>
                                <input class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" id="subjectInput" value="Subject">
                            </div>
                        </div>
                        <div class="xl:col-span-12">
                            <div>
                                <label for="textArea" class="inline-block mb-2 text-base font-medium">Example Textarea</label>
                                <textarea class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" id="textArea" rows="3"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-end gap-2 mt-4">
                        <button type="reset" data-modal-close="addEmailModal" class="text-red-500 bg-white btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-600 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10">Cancel</button>
                        <button type="submit" class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--end add user-->

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
    <script src="{{ URL::to('assets/js/pages/apps-email.init.js') }}"></script>
@endsection
@endsection