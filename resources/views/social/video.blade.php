@extends('layouts.master')
@section('content')
    <!-- Page-content -->
    <div class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
        <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">
            <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
                <div class="grow">
                    <h5 class="text-16">Watch Video</h5>
                </div>
                <ul class="flex items-center gap-2 text-sm font-normal shrink-0">
                    <li class="relative before:content-['\ea54'] before:font-remix ltr:before:-right-1 rtl:before:-left-1  before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-slate-400 dark:text-zink-200">
                        <a href="#!" class="text-slate-400 dark:text-zink-200">Social Media</a>
                    </li>
                    <li class="text-slate-700 dark:text-zink-100">
                        Watch Video
                    </li>
                </ul>
            </div>
            <div class="grid grid-cols-1 xl:grid-cols-12 gap-x-5">
                <div class="xl:col-span-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="flex items-center gap-3 mb-5">
                                <div class="rounded-full bg-slate-100 dark:bg-zink-600 shrink-0">
                                    <img src="{{ asset('assets/images/avatar-1.png') }}" alt="" class="rounded-full h-14">
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
                                <li class="group grow">
                                    <a href="{{ route('social-media') }}" class="inline-block px-4 w-full py-2 text-base transition-all duration-300 ease-linear rounded-md text-slate-500 dark:text-zink-200 border border-transparent group-[.active]:bg-custom-500 dark:group-[.active]:bg-custom-500 group-[.active]:text-white dark:group-[.active]:text-white hover:text-custom-500 dark:hover:text-custom-500 active:text-custom-500 dark:active:text-custom-500 -mb-[1px]"><i data-lucide="home" class="inline-block align-middle size-4 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">Feed</span></a>
                                </li>
                                <li class="group grow">
                                    <a href="{{ route('social/friends') }}" class="inline-block px-4 w-full py-2 text-base transition-all duration-300 ease-linear rounded-md text-slate-500 dark:text-zink-200 border border-transparent group-[.active]:bg-custom-500 dark:group-[.active]:bg-custom-500 group-[.active]:text-white dark:group-[.active]:text-white hover:text-custom-500 dark:hover:text-custom-500 active:text-custom-500 dark:active:text-custom-500 -mb-[1px]"><i data-lucide="user-2" class="inline-block align-middle size-4 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">Friends</span></a>
                                </li>
                                <li class="group grow">
                                    <a href="{{ route('social/event') }}" class="inline-block px-4 w-full py-2 text-base transition-all duration-300 ease-linear rounded-md text-slate-500 dark:text-zink-200 border border-transparent group-[.active]:bg-custom-500 dark:group-[.active]:bg-custom-500 group-[.active]:text-white dark:group-[.active]:text-white hover:text-custom-500 dark:hover:text-custom-500 active:text-custom-500 dark:active:text-custom-500 -mb-[1px]"><i data-lucide="calendar-days" class="inline-block align-middle size-4 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">Event</span></a>
                                </li>
                                <li class="group grow active">
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
                                        <img src="{{ asset('assets/images/meta.png') }}" alt="" class="h-5">
                                        <h6>Design Stack</h6>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!" class="flex gap-3">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIAAAACACAYAAADDPmHLAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAADsQAAA7EB9YPtSQAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAv1SURBVHic7Z15cFXlGcZ/7703gbAkLCIVZRGtUlA2tSpUMELYkaoEQcERHLFTW0dBabWFXqlOpwwKWp2OVi1qBQEXFBtRlhQFxoUmWmWw4EKpikvZwUS457z9I+DQKiHLeb9zbu79/Q3P8809T872fd9zhIihwws6E4sXAucDXYDOQFMg38Sw04AUuc0SAav6ILtBdwKbEdmAz2p8/xWZO29XwF71QsIeAIAObZVPDhNRvQqkt1PzTgMht6krtwMoL4I8Qn6HFySZ9F0ZH41QA6CD2jal8cFbUG4AWoYyCLcBOJINqN4ud89bHIb5YUILgF7ccjgq9wMdwxoDEGYADrMciV8nsx/6KAzzmGtDnUyOXtzqLlSWEvbBjwZFqFemU6++NAxzpwHQke2asK3VEpQpROT+IyK0AHlKp06c5trYWQC0+KQ8pHIZMMyVZ5ohwO91yqTpLk2dBECLiVNZsQjlAhd+aY3oTJ06abIrOzdngMpWvwEd4cSrQaD36ZSJfVw4mQdAh7e8APiVtU8DIwfhCb15gvnjiWkA9EISxOQ+a58GSif8HPP7AdsDk9/yWqC7qUdDRvQmnXqN6aOyWQB0MjmoOH+saWDkgneLpYHdGeCz1iOBTmb6mYLKRJ02qbmVvF0A1J9gpp1JCE3w1OwtoUkAdCiNQAZbaGckyigraZszQM5xfYA8E+1MRCjU4uK4hbTRJcA7x0Y3Y2lB+7xTLIRtAuDL6Sa6mUwsZvKb2gRAOMlEN5PxYx0sZK2eAsweWzKWmJqsiTQKgDay0c1kxOQ3NboEyH4T3UzG130WsjYBUInU0ucGgWDym1pdAj6w0c1gfDZbyFo9BWw00c1k/Ph7FrJWAVhjopuxyCa556HPLZRtAvDcjo3ApybamYjoSitpkwAIKLDIQjsj8VhoJW03Hez5j5ppZxT6EQUdX7VSNwuAlOx6C1hupZ9BzLbcRGq7JlD0dqouB1nqgrKV5jxiaWEaAHl+51qQJyw9GjSiN0lyXqWlhf1y7URiKvCZuU/D4xm5a94z1ibmAZBnP/8C5ErAs/ZqOOhHeHqNCycnGzZk6fZVCD914dUA2I6XGO6qSsbZjh15fseDiP6C7E1hNchOVEfI3IecvUp3umVLnt85C7gWOOjSN034NyL95O55r7k0db5nT5bueBikLxBKJUo0kZWk4ufI7Iffde0cyqZNWbr9TRprL+BeMvvmcAfojTTvMMhqsudYhF7ToqNadUXlNlTHAiZr36slnJKoHcA9eHpv2L2BoQfgMDqi9YngX4HIaOAsXIXBXQD2AqXAk/j7lsicxRUuTI9FZAJwJFrcsoBKObdCOvTYE+vWKyUFLXxp1DaHPWeifk5gPuTsad3OW52bp/V+27Y30ShvTzyv6UGJJw7EEjEVdn8tOdubpSrKO+/fsZaC9mWSTKaCGHeQRCoAy4u1IJXDJaoMBPoB7a091ef04QtlU63/4wo9DbgMKATOo/ql8HuAdSirEJ5moHxYp8EaEIkAvDhOuytMAy7F8Z7CWgUgqTH6MhrhRqq6jOtkCaxBmMOrPEdSQq2LDTUAL43V9p4wh6oDH8pYahyA5TqYGHNRugRo/w4+P2eQrA5Qs1aE1t3z17H6E69q8ehlRORM9J2UaD4r9QmEZQEffIAziVHKCn2YlzSUvtqga9KPyaJizWuW4BFgrGvvWrNKu+GxBOVUQxcBJhHnPEp1FIXyvqHXt3B6BlherAXNEiwjHQ7+Cj0fn1cQ04N/JF3xWMsqPcuRH+AwAIuKNe9AgqVU3d1HmxXaHSgBWjl2Ph6flazSHq4M3VTFotI8zgIhDapil2sHqtYytghpBAX4vMAKbevCzEkAlo3jZhW7npvAKNUEMB84PuSRnAQsYJGavw01D0DJldpV4Q5rn0DwmIbQN+xhHKKQVlxvbWJ/BvC5H8g196kvpdqJ6HUaz6RUv2dpYBqAkst1EHChpUdgePwaaBL2MP6PAnxM21Ztl4XH+KWlfmCs1BOBaBZbKtdRqsdZyZsFYNl4PVXT5a8fria6l6kmeFxhJW4WAM9nPFF+xXskavcDB8R4K2G7vYHKECvtIFl2GicAXcMexzE42+oyYBKA0mJtRtWqnsjz946cG/YYaoCQor+FsEkAvs6hKyFMNNWFPY04Lewx1JAzLURt2sI1bX5UKhOcHPYYaoSQPlWxfvivUmuMF3c+4VM3hDYWslYVMc0sdC1QIdQPB9cYtanfzX7NK8OxuQcAk1pTC0RJj1pbYa+FrEkAYvCFha4FcY8dYY+hRvg2v6nRByP4p4muAY1TabJJNWbzm5oEoLHPRiByu2C+i4IDaRJWn3csZE0CULhY9qGst9AOmt5beCPsMdQAnwSvWAjbzQXAMivtIBmyiW3AhrDHUS3KmxTKfyyk7T4dq/yF9KmDiXqVndn4zAIwbKF8QNV26OgjPAZ8HfYwjsJ+EiywEjd9ERQTfmepHxgD5JNDIYgiD1id/sE4AEPmywpglaVHYPjcAZF7KbQLmGVpYP4qOA7XAwesfepNkWxFI7Z8XZjOQDHtDjIPwOAF8h5wm7VPICSYDZH52kkp2/mjtYmTyaChC7hbFfPe23pTKCnijCP8buOteIxljJg3qLmpikV0v8d4BbMPHwRGoXyMMghsPtNWA7ajDGGwOJlPcTYdPGaxVOSmGAn8zZVnnSmSd1CGAtsdO3+OUkSRNMyq2KLFsjuvEUOJ/osXKJLXUC4AR3MFwrsIfSmScid+h3C+IKRwnlQOWyDjUSYT9XUDRbKRxpyD8rihiwIPkscPGSDOP7gZ2oqgYU/Kn7wUXRAWAqE2ZVXLj2QvRXIVPgMJfs6gHKUfA+U6+kgoxZGhLgkbuVg+GTZfxvo+PYDHgEi0Z34ng2Qla+iOMhpYR93nORRhNTFGMYCzKJJQHzsjtXWr5ErNV49RsRhFqvQDOlp71rkoslRPxeNS4CKqiiILqvnXu1DWIawiztMUypa6jTZ4IhWAb1g/OYdY27Pb7G3Vu/OXx5+dX9G0TaNUTsu9jSt6+eIHViQZ86UylajsuXbMhPrf6C3TE8jhZKpWRBcAu1H24vGBq0e6uhCd3Ttv39wUbXYJquNA+oM2/TJ/F1/mmz6ON0YkmCnrIbIN2BaIlkPCD8Drt7YmJ/dGfH4GeqiYKV2WEaQ/4QVAEcqTExC9CzArQMhSPeEEoOzWNpQ3ehzRwaH4Z/kG9wEom94Dib8IeoJz7yzfwm0AypN9gBLQ6h6ZsjjE3Yugt5NnAC9kD360cBOA129tjUcJaEsnfllqjJtLQG7uPFDzz79kqT32Z4CyGeOAEeY+WeqEbQDWJ5sgMtvUI0u9sA1A3L8WaGfqkaVe2AVAkzGQKWb6WQLBLgDlXAR0MNPPEgh2ARDGmGlnCQzLe4CBhtpZAsImAGXJdqDpUcCY4RidAfwf2OhmCRqbAMRip5joZgkcmwBoaJ9cy1JLrG4Co/btnaOjqYxef2YVgOj3ARxGE1ErhXCK0SXAN6k1NaHJV+kzVgNsAiBsNdENnl10mZUNQOB4sfRo3xTeC3sIYWMTgA83bAbZaaIdLOnQEmqKTQDGLPZAo98GopIePYaGGE4GyXNm2oEg+8llRdijCBu7AFTyFPCVmX690Wfplox2QYUD7AJwXnIPyKNm+vVGzCvY0gHrRaGzQA4ae9SFl+mVXBf2IKKAbQB6JbcAc009ak8K9U0/yZ5O2C8Lz2UmsMXcp8bIHHr/9u2wRxEV7APQLbkPkcuJxvzAepptnx72IKKEm61hPZNvIHqDE6+jItvQ1Gi+/4eofhcgFNxtDu058wFUZzjz+x9kJ+oNpfed/wrHP7q4L4kqS96A6BychU+2AcPolXzLjV96EU5LWHnyx6B/BvOVQ2uQ1Fh63vmJsU/aEk5RZK/kEmJeb+BlGwOpQHUGu6Qwe/CrJ/yewLIZlyGSBM6ov5h4oAuJy3S6Jz+sv17DJ/wAQFVj2D9mjMCPTQQdDuTWUuFTYD54D9Lrjs0GI2ywRCMAR/JaMp88vz8a6w/aDZVTqKqRy6fqXcI+4GOUTQhlKKt4f0N51RR0ltryXwgaOlCPaywuAAAAAElFTkSuQmCC" alt="" class="h-5">
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
                <div class="xl:col-span-9">
                    <div class="grid items-center grid-cols-1 gap-4 mb-4 xl:grid-cols-12">
                        <div class="xl:col-span-3">
                            <h6 class="mb-0 text-15">Watch Video</h6>
                        </div>
                        <div class="flex gap-2 xl:col-span-4 xl:col-start-9">
                            <div class="relative grow">
                                <input type="text" class="ltr:pl-8 rtl:pr-8 search form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Search for ..." autocomplete="off">
                                <i data-lucide="search" class="inline-block size-4 absolute ltr:left-2.5 rtl:right-2.5 top-2.5 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-600"></i>
                            </div>
                            <button type="button" class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20"><i data-lucide="plus" class="inline-block size-4"></i> <span class="align-middle">Add Video</span></button>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 gap-5 mb-5 md:grid-cols-12">
                        <div class="md:col-span-12 xl:row-span-6 xl:col-span-8">
                            <div class="relative h-full bg-white rounded-md dark:bg-zink-600">
                                <h3 class="absolute inset-0 flex items-center justify-center">Welcome to <span class="text-sky-500">Starcode</span> 🤩</h3>
                                <iframe name="iframe_a" class="relative w-full h-full rounded-md aspect-video" src="https://www.youtube.com/embed/Rt4bAWcZjqs?si=1jC7h5AVyy-gaDu8"  title="Iframe Example"></iframe>
                            </div>
                        </div>
                        <div class="md:col-span-6 xl:row-span-3 xl:col-span-4">
                            <a href="https://www.youtube.com/embed/Sz6fbweWYwY?si=a6IMHQ3ECawSVYz_" target="iframe_a" class="block !mb-0 card relative">
                                <div class="card-body">
                                    <div class="absolute flex items-center justify-center -translate-x-1/2 rounded-full size-12 bg-white/70 top-1/2 left-1/2">
                                        <i data-lucide="play-square" class="text-red-500"></i>
                                    </div>
                                    <h6 class="mb-3 truncate text-15">Sample Project</h6>
                                    <iframe name="iframe_a" class="relative w-full h-full rounded-md aspect-video" src="https:///www.youtube.com/embed/d_lRtbQ5UjA?si=a71mFOQz07jyt_aW"  title="Iframe Example"></iframe>
                                </div>
                            </a>
                        </div>
                        <div class="md:col-span-6 xl:row-span-3 xl:col-span-4">
                            <a href="https://www.youtube.com/embed/Sz6fbweWYwY?si=a6IMHQ3ECawSVYz_" target="iframe_a" class="block !mb-0 card relative">
                                <div class="card-body">
                                    <div class="absolute flex items-center justify-center -translate-x-1/2 rounded-full size-12 bg-white/70 top-1/2 left-1/2">
                                        <i data-lucide="play-square" class="text-red-500"></i>
                                    </div>
                                    <h6 class="mb-3 truncate text-15">Sample Project</h6>
                                    <iframe name="iframe_a" class="relative w-full h-full rounded-md aspect-video" src="https://www.youtube.com/embed/LoVRbeSMIaM?si=grskxPWtw72SUO4t"  title="Iframe Example"></iframe>
                                </div>
                            </a>
                        </div>
                        <div class="md:col-span-6 xl:col-span-4">
                            <a href="https://www.youtube.com/embed/Sz6fbweWYwY?si=a6IMHQ3ECawSVYz_" target="iframe_a" class="block !mb-0 card relative">
                                <div class="card-body">
                                    <div class="absolute flex items-center justify-center -translate-x-1/2 rounded-full size-12 bg-white/70 top-1/2 left-1/2">
                                        <i data-lucide="play-square" class="text-red-500"></i>
                                    </div>
                                    <h6 class="mb-3 truncate text-15">Dashboard</h6>
                                    <iframe name="iframe_a" class="relative w-full h-full rounded-md aspect-video" src="https://www.youtube.com/embed/TzuxuC4pYl0?si=wYurq63_XqpirbeO"  title="Iframe Example"></iframe>
                                </div>
                            </a>
                        </div>
                        <div class="md:col-span-6 xl:col-span-4">
                            <a href="https://www.youtube.com/embed/Sz6fbweWYwY?si=a6IMHQ3ECawSVYz_" target="iframe_a" class="block !mb-0 card relative">
                                <div class="card-body">
                                    <div class="absolute flex items-center justify-center -translate-x-1/2 rounded-full size-12 bg-white/70 top-1/2 left-1/2">
                                        <i data-lucide="play-square" class="text-red-500"></i>
                                    </div>
                                    <h6 class="mb-3 truncate text-15">Clone Project Sample</h6>
                                    <iframe name="iframe_a" class="relative w-full h-full rounded-md aspect-video" src="https://www.youtube.com/embed/srN2TLmEgxk?si=YWV5H7yxrjGxFGUw"  title="Iframe Example"></iframe>
                                </div>
                            </a>
                        </div>
                        <div class="md:col-span-6 xl:col-span-4">
                            <a href="https://www.youtube.com/embed/Sz6fbweWYwY?si=a6IMHQ3ECawSVYz_" target="iframe_a" class="block !mb-0 card relative">
                                <div class="card-body">
                                    <div class="absolute flex items-center justify-center -translate-x-1/2 rounded-full size-12 bg-white/70 top-1/2 left-1/2">
                                        <i data-lucide="play-square" class="text-red-500"></i>
                                    </div>
                                    <h6 class="mb-3 truncate text-15">Admin Template</h6>
                                    <iframe name="iframe_a" class="relative w-full h-full rounded-md aspect-video" src="https://www.youtube.com/embed/rbT1BS_sHDw?si=EcXF1ZZfIOy1ATZG"  title="Iframe Example"></iframe>
                                </div>
                            </a>
                        </div>
                    </div>
                </div><!--end-->
            </div><!--end-->
        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
@section('script')
@endsection
@endsection