<x-app-layout>
    <div>
        {{ Breadcrumbs::render('movie', $movie) }}

        <section class="py-12 md:py-24 lg:py-16">
            <div class="container px-4 mx-auto">
                <div class="max-w-lg mx-auto lg:max-w-6xl">
                    <div class="flex flex-wrap mb-8 -mx-4">
                        <div class="w-full lg:w-1/2 p-4">
                            <div class="lg:max-w-md">
                                <img class="block w-full rounded-xl mb-4" src="http://image.tmdb.org/t/p/original/{{ $movie['poster_path'] }}" alt="">
                                <div class="flex -mx-2">
                                    <div class="w-1/4 px-2">
                                        <button class="block w-full">
                                            <img class="block w-full rounded-xl" src="coleos-assets/product-details/product-small.png" alt="">
                                        </button>
                                    </div>
                                    <div class="w-1/4 px-2">
                                        <button class="block w-full">
                                            <img class="block w-full rounded-xl" src="coleos-assets/product-details/product-small2.png" alt="">
                                        </button>
                                    </div>
                                    <div class="w-1/4 px-2">
                                        <button class="block w-full">
                                            <img class="block w-full rounded-xl" src="coleos-assets/product-details/product-small3.png" alt="">
                                        </button>
                                    </div>
                                    <div class="w-1/4 px-2">
                                        <button class="block w-full">
                                            <img class="block w-full rounded-xl" src="coleos-assets/product-details/product-small4.png" alt="">
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full lg:w-1/2 p-4">
                            <div class="max-w-lg lg:ml-auto">
                                <h1 class="text-rhino-700 font-semibold text-4xl mb-2 font-heading">{{ $movie['title'] }}</h1>
                                <p class="text-sm text-rhino-400 font-medium mb-6">Nike Sport</p>
                                <div class="flex gap-4 mb-6">
                                    <div class="flex gap-3">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 20 20" fill="none">
                                                <path d="M19.9479 7.24277C19.8169 6.83779 19.4577 6.55016 19.0328 6.51186L13.2602 5.9877L10.9776 0.645006C10.8093 0.253455 10.426 0 10.0001 0C9.57422 0 9.19091 0.253455 9.0226 0.645921L6.73998 5.9877L0.966514 6.51186C0.542309 6.55107 0.184023 6.83779 0.0523365 7.24277C-0.0793503 7.64775 0.0422654 8.09194 0.363166 8.37195L4.72653 12.1986L3.43987 17.8664C3.34573 18.2831 3.50747 18.7139 3.85325 18.9638C4.0391 19.0981 4.25655 19.1664 4.47582 19.1664C4.66488 19.1664 4.85242 19.1155 5.02073 19.0148L10.0001 16.0388L14.9776 19.0148C15.3419 19.2339 15.801 19.2139 16.146 18.9638C16.492 18.7131 16.6536 18.2822 16.5594 17.8664L15.2728 12.1986L19.6361 8.37271C19.957 8.09194 20.0796 7.64851 19.9479 7.24277Z" fill="#FC8964"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 20 20" fill="none">
                                                <path d="M19.9479 7.24277C19.8169 6.83779 19.4577 6.55016 19.0328 6.51186L13.2602 5.9877L10.9776 0.645006C10.8093 0.253455 10.426 0 10.0001 0C9.57422 0 9.19091 0.253455 9.0226 0.645921L6.73998 5.9877L0.966514 6.51186C0.542309 6.55107 0.184023 6.83779 0.0523365 7.24277C-0.0793503 7.64775 0.0422654 8.09194 0.363166 8.37195L4.72653 12.1986L3.43987 17.8664C3.34573 18.2831 3.50747 18.7139 3.85325 18.9638C4.0391 19.0981 4.25655 19.1664 4.47582 19.1664C4.66488 19.1664 4.85242 19.1155 5.02073 19.0148L10.0001 16.0388L14.9776 19.0148C15.3419 19.2339 15.801 19.2139 16.146 18.9638C16.492 18.7131 16.6536 18.2822 16.5594 17.8664L15.2728 12.1986L19.6361 8.37271C19.957 8.09194 20.0796 7.64851 19.9479 7.24277Z" fill="#FC8964"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 20 20" fill="none">
                                                <path d="M19.9479 7.24277C19.8169 6.83779 19.4577 6.55016 19.0328 6.51186L13.2602 5.9877L10.9776 0.645006C10.8093 0.253455 10.426 0 10.0001 0C9.57422 0 9.19091 0.253455 9.0226 0.645921L6.73998 5.9877L0.966514 6.51186C0.542309 6.55107 0.184023 6.83779 0.0523365 7.24277C-0.0793503 7.64775 0.0422654 8.09194 0.363166 8.37195L4.72653 12.1986L3.43987 17.8664C3.34573 18.2831 3.50747 18.7139 3.85325 18.9638C4.0391 19.0981 4.25655 19.1664 4.47582 19.1664C4.66488 19.1664 4.85242 19.1155 5.02073 19.0148L10.0001 16.0388L14.9776 19.0148C15.3419 19.2339 15.801 19.2139 16.146 18.9638C16.492 18.7131 16.6536 18.2822 16.5594 17.8664L15.2728 12.1986L19.6361 8.37271C19.957 8.09194 20.0796 7.64851 19.9479 7.24277Z" fill="#FC8964"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 20 20" fill="none">
                                                <path d="M19.9479 7.24277C19.8169 6.83779 19.4577 6.55016 19.0328 6.51186L13.2602 5.9877L10.9776 0.645006C10.8093 0.253455 10.426 0 10.0001 0C9.57422 0 9.19091 0.253455 9.0226 0.645921L6.73998 5.9877L0.966514 6.51186C0.542309 6.55107 0.184023 6.83779 0.0523365 7.24277C-0.0793503 7.64775 0.0422654 8.09194 0.363166 8.37195L4.72653 12.1986L3.43987 17.8664C3.34573 18.2831 3.50747 18.7139 3.85325 18.9638C4.0391 19.0981 4.25655 19.1664 4.47582 19.1664C4.66488 19.1664 4.85242 19.1155 5.02073 19.0148L10.0001 16.0388L14.9776 19.0148C15.3419 19.2339 15.801 19.2139 16.146 18.9638C16.492 18.7131 16.6536 18.2822 16.5594 17.8664L15.2728 12.1986L19.6361 8.37271C19.957 8.09194 20.0796 7.64851 19.9479 7.24277Z" fill="#FC8964"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewbox="0 0 20 20" fill="none">
                                                <path d="M19.9481 7.24277C19.8172 6.83779 19.458 6.55016 19.033 6.51186L13.2605 5.9877L10.9778 0.645006C10.8095 0.253455 10.4262 0 10.0003 0C9.57446 0 9.19115 0.253455 9.02284 0.645921L6.74022 5.9877L0.966758 6.51186C0.542553 6.55107 0.184267 6.83779 0.0525806 7.24277C-0.0791061 7.64775 0.0425095 8.09194 0.36341 8.37195L4.72677 12.1986L3.44012 17.8664C3.34597 18.2831 3.50772 18.7139 3.85349 18.9638C4.03935 19.0981 4.25679 19.1664 4.47606 19.1664C4.66513 19.1664 4.85266 19.1155 5.02097 19.0148L10.0003 16.0388L14.9779 19.0148C15.3421 19.2339 15.8013 19.2139 16.1463 18.9638C16.4922 18.7131 16.6538 18.2822 16.5597 17.8664L15.273 12.1986L19.6364 8.37271C19.9573 8.09194 20.0798 7.64851 19.9481 7.24277Z" fill="#FED5C8"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <p class="text-xs uppercase text-rhino-400 font-bold">bazat pe {{ $movie['vote_count'] }} voturi</p>
                                </div>
                                <p class="text-sm text-rhino-500 mb-6 leading-7">{{ $movie['overview'] }}</p>
                                <div class="mb-10 border border-coolGray-200 rounded-sm">
                                    <div class="py-3 px-6 border-b border-coolGray-200 flex items-center flex-wrap justify-between gap-4">
                                        <p class="uppercase text-rhino-500 font-bold text-xs tracking-widest">Specification</p>
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewbox="0 0 24 25" fill="none">
                                                <path d="M12.2725 16.1666C12.1769 16.1667 12.0822 16.1479 11.9939 16.1113C11.9055 16.0747 11.8253 16.021 11.7578 15.9533L6.21332 10.4092C6.07681 10.2727 6.00012 10.0876 6.00012 9.89454C6.00012 9.70149 6.07681 9.51635 6.21332 9.37984C6.34983 9.24333 6.53497 9.16665 6.72802 9.16665C6.92107 9.16665 7.10621 9.24334 7.24271 9.37984L12.2725 14.4092L17.3023 9.37982C17.4388 9.24332 17.6239 9.16663 17.817 9.16663C18.01 9.16663 18.1952 9.24331 18.3317 9.37982C18.4682 9.51632 18.5449 9.70147 18.5449 9.89452C18.5449 10.0876 18.4682 10.2727 18.3317 10.4092L12.7872 15.9534C12.7197 16.0211 12.6394 16.0748 12.5511 16.1114C12.4628 16.148 12.3681 16.1667 12.2725 16.1666Z" fill="#A0A5B8"></path>
                                            </svg>
                                        </a>
                                    </div>
                                    <div class="py-3 px-6 flex items-center flex-wrap justify-between gap-4">
                                        <p class="uppercase text-rhino-500 font-bold text-xs tracking-widest">Info</p>
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewbox="0 0 24 25" fill="none">
                                                <path d="M12.2725 16.1666C12.1769 16.1667 12.0822 16.1479 11.9939 16.1113C11.9055 16.0747 11.8253 16.021 11.7578 15.9533L6.21332 10.4092C6.07681 10.2727 6.00012 10.0876 6.00012 9.89454C6.00012 9.70149 6.07681 9.51635 6.21332 9.37984C6.34983 9.24333 6.53497 9.16665 6.72802 9.16665C6.92107 9.16665 7.10621 9.24334 7.24271 9.37984L12.2725 14.4092L17.3023 9.37982C17.4388 9.24332 17.6239 9.16663 17.817 9.16663C18.01 9.16663 18.1952 9.24331 18.3317 9.37982C18.4682 9.51632 18.5449 9.70147 18.5449 9.89452C18.5449 10.0876 18.4682 10.2727 18.3317 10.4092L12.7872 15.9534C12.7197 16.0211 12.6394 16.0748 12.5511 16.1114C12.4628 16.148 12.3681 16.1667 12.2725 16.1666Z" fill="#A0A5B8"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="flex gap-4 mb-6">
                                    <h2 class="text-4xl font-semibold text-rhino-700">19.90 Lei</h2>
                                    <p class="text-rhino-300 font-extrabold text-sm">24.90 Lei</p>
                                </div>
                                <div class="flex -mx-2 flex-wrap mb-10">
                                    <div class="w-full xs:w-5/12 md:w-7/12 px-2 mb-4 xs:mb-0"><a class="block w-full px-3 py-4 rounded-sm text-center text-white text-sm font-medium bg-purple-500 hover:bg-purple-600 transition duration-200" href="#">{{ __('Cumpara bilete') }}</a></div>
                                    <div class="w-full xs:w-3/12 md:w-2/12 px-2">
                                        <a class="border border-purple-600 rounded-sm text-purple-500 py-4 px-6 xs:px-1 inline-flex h-full xs:w-full items-center justify-center hover:bg-purple-500 hover:text-white transition duration-200" href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewbox="0 0 16 17" fill="none">
                                                <g clip-path="url(#clip0_1925_4216)">
                                                    <path d="M14.1942 3.24105C13.8537 2.90039 13.4494 2.63015 13.0045 2.44578C12.5595 2.2614 12.0826 2.1665 11.6009 2.1665C11.1192 2.1665 10.6423 2.2614 10.1973 2.44578C9.75236 2.63015 9.34807 2.90039 9.00757 3.24105L8.3009 3.94772L7.59423 3.24105C6.90644 2.55326 5.97359 2.16686 5.0009 2.16686C4.02821 2.16686 3.09536 2.55326 2.40757 3.24105C1.71977 3.92885 1.33337 4.8617 1.33337 5.83439C1.33337 6.80708 1.71977 7.73993 2.40757 8.42772L3.11423 9.13439L8.3009 14.3211L13.4876 9.13439L14.1942 8.42772C14.5349 8.08722 14.8051 7.68293 14.9895 7.23796C15.1739 6.79298 15.2688 6.31605 15.2688 5.83439C15.2688 5.35273 15.1739 4.87579 14.9895 4.43082C14.8051 3.98584 14.5349 3.58156 14.1942 3.24105V3.24105Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                </g>
                                                <defs><clippath id="clip0_1925_4216"><rect width="16" height="16" fill="white" transform="translate(0 0.166504)"></rect></clippath></defs>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>

</x-app-layout>
