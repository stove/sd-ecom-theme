<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="py-4 shadow-sm bg-pink-100 lg:bg-white">
    <div class="container flex items-center justify-between">

        <a href="<?php echo home_url(); ?>" class="block w-42">
	        <?php
	        // Construct the image URL
	        $image_url = content_url() . '/uploads/2024/07/sd-logo.png';
	        ?>
            <div class="pl-3">
                <img src='<?php echo esc_url($image_url); ?> 'class="w-1/2 h-1/2 object-contain" />
            </div>

        </a>

        <div class="w-full xl:max-w-xl lg:max-w-lg lg:flex relative hidden">
    <span class="absolute left-4 top-4 text-lg text-gray-400">
        <i class="fas fa-search"></i> <!-- Font Awesome Search Icon -->
    </span>
            <input type="text"
                   class="pl-12 w-full border border-r-0 border-primary py-3 px-3 rounded-l-md focus:ring-primary"
                   placeholder="Search"/>
            <button type="submit"
                    class="bg-primary border border-primary text-white px-8 font-medium rounded-r-md hover:bg-transparent hover:text-primary transition">
                Search
            </button>
        </div>


        <div class="space-x-6 flex items-center">
            <!-- Wishlist Link -->
            <a class="block text-center text-gray-700 hover:text-primary transition relative"
               href="<?php echo home_url( '/wishlist' ); ?>">
                <div class="text-2xl">
                    <i class="fas fa-list"></i> <!-- Assuming Font Awesome equivalent of RiFileListLine -->
                </div>
                <div class="text-sm font-semibold leading-3">Wish List</div>
            </a>

            <!-- Cart Link -->
            <a class="block text-center text-gray-700 hover:text-primary transition relative"
               href="<?php echo home_url( '/cart' ); ?>">
                <div class="text-2xl">
                    <i class="fas fa-shopping-cart"></i> <!-- Font Awesome Shopping Cart Icon -->
                </div>
                <div class="text-sm font-semibold leading-3">Cart</div>
            </a>

            <!-- Account Link -->
            <a class="block text-center text-gray-700 hover:text-primary transition relative"
               href="<?php echo home_url( '/account' ); ?>">
                <div class="text-2xl">
                    <i class="fas fa-user-circle"></i> <!-- Font Awesome Account Circle Icon -->
                </div>
                <div class="text-sm font-semibold leading-3">Återförsäljare</div>
            </a>
        </div>
    </div>
    <!-- ---- Start NavBar 1----- -->

    <!-- ---- End NavBar ----- -->

    <!-- ---- Mobile Menu Bar ----- -->



    <!-- ----End Mobile Menu Bar ----- -->

    <!-- ---- Mobile Side Bar ----- -->


    <!-- ---- End Mobile Side Bar ----- -->

    <!-- ---- Start NavBar 2 ----- -->
    <nav class="bg-gray-800 hidden lg:block">
        <div class="container ">
            <div class="flex">
                <!-- ---- All Category ----- -->
                <div class="px-8 py-4 bg-primary items-center cursor-pointer group relative">
                <span class="text-white">
                    <i class="fas fa-bars"></i>
                </span>
                    <span class="capitalize ml-2 text-white font-semibold">Kategorier</span>
                    <div class="absolute left-0 top-full w-full bg-white shadow-md py-3 invisible opacity-0 group-hover:opacity-100 group-hover:visible transition duration-300 z-50 divide-y divide-gray-300  ">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'category-menu',
						'walker'         => new Custom_Walker_Nav_Menu(),
						'container'      => false,
						'menu_class'     => 'flex flex-col text-white list-none',
						'items_wrap'     => '%3$s',
						'depth'          => 1,
						'fallback_cb'    => false
					) );
					?>
                    </div>
                </div>
                <!-- ---- All Category End ----- -->

                <!-- ---- Nav Menu ----- -->
                <nav class="flex items-center justify-between flex-grow pl-12">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'primary-menu',
						'container'      => 'nav',
						'menu_class'     => 'flex items-center space-x-6 text-base capitalize text-white list-none',
						'fallback_cb'    => false,
						'items_wrap'     => '<div id="%1$s" class="%2$s">%3$s</div>'
					) );
					?>
                    <a href="<?php echo wp_login_url(); ?>"
                       class="ml-auto text-gray-200 hover:text-white transition font-semibold">Login/Register</a>
                </nav>
                <!-- ---- Nav Menu End ----- -->
            </div>
        </div>
    </nav>
    <!-- ---- End NavBar 2----- -->
    <!-- ---- Mobile Menu Bar ----- -->

    <div class="fixed w-full border-t border-gray-200 shadow-sm bg-white py-3 bottom-0 left-0 flex justify-around items-start px-6 lg:hidden z-40  ">

        <a href="javascript:void(0)" class="block text-center text-gray-700 hover:text-primary transition relative ">
            <div class="text-2xl" id="menuBar">
                <i class="fas fa-bars"></i>
            </div>
            <div class="text-xs leading-3">Menu</div>
        </a>

        <a href="" class="block text-center text-gray-700 hover:text-primary transition relative ">
            <div class="text-2xl">
                <i class="fas fa-list-ul"></i>
            </div>
            <div class="text-xs leading-3">Category</div>
        </a>

        <a href="" class="block text-center text-gray-700 hover:text-primary transition relative ">
            <div class="text-2xl">
                <i class="fas fa-search"></i>
            </div>
            <div class="text-xs leading-3">Search</div>
        </a>

        <a href="" class="block text-center text-gray-700 hover:text-primary transition relative ">
          <span class="absolute -right-3 -top-1 w-5 h-5 rounded-full flex items-center justify-center bg-primary text-white text-xs ">5
          </span>
            <div class="text-2xl">
                <i class="fas fa-shopping-bag"></i>
            </div>
            <div class="text-xs leading-3">Cart</div>
        </a>

    </div>

    <!-- ----End Mobile Menu Bar ----- -->

    <!-- ---- Mobile Side Bar ----- -->

    <div class="fixed left-0 top-0 w-full h-full z-50 bg-black bg-opacity-30 shadow hidden " id="mobileMenu">
        <div class="absolute left-0 top-0 w-72 h-full z-50 bg-white shadow">
            <div id="closeMenu" class="text-gray-400 hover:text-primary text-lg absolute right-3 top-3 cursor-pointer ">
                <i class="fas fa-times"></i>
            </div>
            <h3 class="text-xl font-semibold text-white mb-2 font-roboto pl-4 pt-4 pb-4 bg-primary ">Menu</h3>
            <div>
                <a href="index.html" class="block px-4 py-4 font-medium transition hover:bg-gray-200 ">
                    Home
                </a>
                <a href="index.html" class="block px-4 py-4 font-medium transition hover:bg-gray-200 ">
                    Shop
                </a>

                <a href="index.html" class="block px-4 py-4 font-medium transition hover:bg-gray-200 ">
                    About Us
                </a>
                <a href="index.html" class="block px-4 py-4 font-medium transition hover:bg-gray-200 ">
                    Contact Us
                </a>
            </div>

        </div>

    </div>

    <!-- ---- End Mobile Side Bar ----- -->

</header>

