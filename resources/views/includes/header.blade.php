<body>
<header>
    <div data-test="header-bar" id="header" class="relative z-30 w-full border-b shadow bg-container-lighter border-container-lighter">
        <div class="container flex flex-wrap items-center justify-between w-full py-3 mx-auto mt-0">
            <!--Logo-->
            <div class="order-1 sm:order-2 lg:order-1 w-full pb-2 sm:w-auto sm:pb-0">
                <a class="flex items-center justify-center text-xl font-medium tracking-wide text-gray-800
        no-underline font-title exclude-hover" href="#" title="" aria-label="store logo">
                    <img
                        src="{{ asset("images/logo.svg") }}"
                        title="" alt="" width="24" height="40">
                        <p class="logo-name">pineapple.</p>
                </a>
            </div>

            <!--Main Navigation-->
            <div class="z-20 order-2 sm:order-1 lg:order-2 navigation lg:hidden">
                <!-- mobile -->
                <div class="bg-container-lighter" onclick="toggleMobileMenu(this)">
                    <div class="flex items-baseline justify-between menu-icon">
                        <div class="flex justify-end w-full">
                            <a class="flex items-center justify-center cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor" class="p-3 block" width="48" height="48"
                                >
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M4 6h16M4 12h16M4 18h16"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <ul class="mobile-menu">
                    <li><a class="" href="#">WHAT'S NEW</a></li>
                    <li><a href="#">WOMEN</a></li>
                    <li><a href="#">MEN</a></li>
                    <li><a href="#">GEAR</a></li>
                    <li><a href="#">TRAINING</a></li>
                    <li><a href="#">SALE</a></li>

                </ul>
                </div>
            </div>

            <div
                class="z-20 order-2 sm:order-1 lg:order-2 navigation hidden lg:flex">
                <!-- desktop -->
                <div class="hidden lg:block lg:relative lg:min-h-0 lg:px-8 lg:w-auto lg:pt-0 hover-head">
                    <nav class="w-full duration-150 ease-in-out transform flex justify-start w-auto relative min-h-0 transition-display">
                        <div class="relative mr-2 level-0">
                            <span class="flex items-center block p-3 text-md bg-opacity-95">
                                <a data-test="header-link" class="w-full py-3 text-base text-gray-700level-0"
                                   href="#" title="What's New">WHAT'S NEW</a>
                            </span>
                        </div>
                        <div class="relative mr-2 level-0">
                            <span class="flex items-center block p-3 text-md bg-opacity-95">
                                <a data-test="header-link" class="w-full py-3 text-base text-gray-700 level-0"
                                   href="#" title="Women">WOMEN</a>
                            </span>
                        </div>
                        <div class="relative mr-2 level-0">
                            <span class="flex items-center block p-3 text-md bg-opacity-95">
                                <a data-test="header-link" class="w-full py-3 text-base text-gray-700 level-0"
                                   href="#" title="Men">MEN</a>
                            </span>
                        </div>
                        <div class="relative mr-2 level-0">
                            <span class="flex items-center block p-3 text-md bg-opacity-95">
                                <a data-test="header-link" class="w-full py-3 text-base text-gray-700 level-0"
                                   href="#" title="Gear">GEAR</a>
                            </span>
                        </div>
                        <div class="relative mr-2 level-0">
                            <span class="flex items-center block p-3 text-md bg-opacity-95">
                                <a data-test="header-link" class="w-full py-3 text-base text-gray-700 level-0"
                                   href="#" title="Training">TRAINING</a>
                            </span>
                        </div>
                        <div class="relative mr-2 level-0">
                            <span class="flex items-center block p-3 text-md bg-opacity-95">
                                <a data-test="header-link" class="w-full py-3 text-base text-gray-700 level-0"
                                   href="#" title="Sale">SALE</a>
                            </span>
                        </div>
                    </nav>
                </div>
            </div>

            <div class="flex items-center order-3">
                <!--My Account Icon-->
                <div class="relative inline-block ml-1 sm:ml-3">
                    <a data-test="header-icon" href="#" id="customer-menu"
                       class="block hover:text-black icon-container" aria-label="My Account" aria-expanded="false">
                        <svg id="default-account-svg" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" class="md:h-6 md:w-6" width="32" height="32" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>

                        <svg id="hovered-account-svg" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 5C12 6.06087 11.5786 7.07828 10.8284 7.82843C10.0783 8.57857 9.06087 9 8 9C6.93913 9 5.92172 8.57857 5.17157 7.82843C4.42143 7.07828 4 6.06087 4 5C4 3.93913 4.42143 2.92172 5.17157 2.17157C5.92172 1.42143 6.93913 1 8 1C9.06087 1 10.0783 1.42143 10.8284 2.17157C11.5786 2.92172 12 3.93913 12 5ZM8 12C6.14349 12 4.36301 12.7375 3.05025 14.0503C1.7375 15.363 1 17.1435 1 19H15C15 17.1435 14.2625 15.363 12.9497 14.0503C11.637 12.7375 9.85652 12 8 12Z" stroke="#0F8352" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                        <svg id="pressed-account-svg" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 5C12 6.06087 11.5786 7.07828 10.8284 7.82843C10.0783 8.57857 9.06087 9 8 9C6.93913 9 5.92172 8.57857 5.17157 7.82843C4.42143 7.07828 4 6.06087 4 5C4 3.93913 4.42143 2.92172 5.17157 2.17157C5.92172 1.42143 6.93913 1 8 1C9.06087 1 10.0783 1.42143 10.8284 2.17157C11.5786 2.92172 12 3.93913 12 5ZM8 12C6.14349 12 4.36301 12.7375 3.05025 14.0503C1.7375 15.363 1 17.1435 1 19H15C15 17.1435 14.2625 15.363 12.9497 14.0503C11.637 12.7375 9.85652 12 8 12Z" stroke="#0A5737" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>

                <!--Cart Icon-->
                <a
                    data-test="header-icon"
                    id="menu-cart-icon"
                    class="relative inline-block ml-1 no-underline sm:ml-3 hover:text-black icon-container"
                    href="#"
                >
                    <span class="sr-only label">Cart</span>
                    <svg id="default-cart-svg" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                         class="w-8 h-8 md:h-6 md:w-6 hover:text-black" width="25" height="25">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>

                    <svg id="hovered-cart-svg" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1H3L3.4 3M3.4 3H19L15 11H5M3.4 3L5 11M5 11L2.707 13.293C2.077 13.923 2.523 15 3.414 15H15M15 15C14.4696 15 13.9609 15.2107 13.5858 15.5858C13.2107 15.9609 13 16.4696 13 17C13 17.5304 13.2107 18.0391 13.5858 18.4142C13.9609 18.7893 14.4696 19 15 19C15.5304 19 16.0391 18.7893 16.4142 18.4142C16.7893 18.0391 17 17.5304 17 17C17 16.4696 16.7893 15.9609 16.4142 15.5858C16.0391 15.2107 15.5304 15 15 15ZM7 17C7 17.5304 6.78929 18.0391 6.41421 18.4142C6.03914 18.7893 5.53043 19 5 19C4.46957 19 3.96086 18.7893 3.58579 18.4142C3.21071 18.0391 3 17.5304 3 17C3 16.4696 3.21071 15.9609 3.58579 15.5858C3.96086 15.2107 4.46957 15 5 15C5.53043 15 6.03914 15.2107 6.41421 15.5858C6.78929 15.9609 7 16.4696 7 17Z" stroke="#0F8352" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>

                    <svg id="pressed-cart-svg" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1H3L3.4 3M3.4 3H19L15 11H5M3.4 3L5 11M5 11L2.707 13.293C2.077 13.923 2.523 15 3.414 15H15M15 15C14.4696 15 13.9609 15.2107 13.5858 15.5858C13.2107 15.9609 13 16.4696 13 17C13 17.5304 13.2107 18.0391 13.5858 18.4142C13.9609 18.7893 14.4696 19 15 19C15.5304 19 16.0391 18.7893 16.4142 18.4142C16.7893 18.0391 17 17.5304 17 17C17 16.4696 16.7893 15.9609 16.4142 15.5858C16.0391 15.2107 15.5304 15 15 15ZM7 17C7 17.5304 6.78929 18.0391 6.41421 18.4142C6.03914 18.7893 5.53043 19 5 19C4.46957 19 3.96086 18.7893 3.58579 18.4142C3.21071 18.0391 3 17.5304 3 17C3 16.4696 3.21071 15.9609 3.58579 15.5858C3.96086 15.2107 4.46957 15 5 15C5.53043 15 6.03914 15.2107 6.41421 15.5858C6.78929 15.9609 7 16.4696 7 17Z" stroke="#0A5737" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</header>
<script>
    function toggleMobileMenu(menu) {
        menu.classList.toggle('open');
    }
</script>