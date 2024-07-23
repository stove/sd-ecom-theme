<?php
/**
 * Template Name: Front Page
 * The template for displaying front page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sd-webshop
 */
get_header();
?>
    <div class="bg-cover bg-no-repeat bg-center py-36 relative"
         style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/banner-bg.jpg');">
        <div class="container mx-auto px-4">
            <h1 class="xl:text-6xl md:text-5xl text-4xl text-gray-800 font-semibold mb-4">
                Ergonomiska stolar <br class="hidden sm:block"/> för din arbetsplats
            </h1>
            <p class="text-base text-gray-600 leading-6">
                This is more than just a chair. It's your body's future, a reassurance
                <br class="hidden sm:block"/> that after a long day of work you still have energy and feel balanced.
                <br class="hidden sm:block"/> And because we focus on durability and quality, you can look forward to
                that
                feeling for years to come
                <br class="hidden sm:block"/> At Support Design, we have always based our chairs on ergonomics,
                <br class="hidden sm:block"/> allowing for movement and active sitting. We help you to naturally
                maintain a
                good posture that
                <br class="hidden sm:block"/> reduces strain on the back, neck and supports the lumbar spine.
                <br class="hidden sm:block"/> What's more, the design of the chairs is beautiful enough to be
                <br class="hidden sm:block"/> displayed in any room, at home, in the office or in the workplace.
            </p>
            <div class="mt-12">
                <a class="bg-primary border border-primary text-white px-8 py-3 font-medium rounded-md uppercase hover:bg-transparent hover:text-primary transition"
                   href="<?php echo get_site_url(); ?>/shop">
                    Shop Now
                </a>
            </div>
        </div>
    </div>
    <div class="container pt-16 pb-8">
        <div class="lg:w-10/12 grid md:grid-cols-3 lg:gap-6 mx-auto justify-center">
            <!-- Feature 1 -->
            <div class="border-primary border border-red-600 rounded-sm px-8 lg:px-3 lg:py-6 py-4 flex justify-center items-center gap-5 transition hover:border-slate-400 hover:bg-gray-200 duration-300">
                <img src="<?php echo get_template_directory_uri(); ?>/images/icons/delivery-van.svg" alt="Free Shipping"
                     width="48" height="48" class="object-contain"/>
                <div>
                    <h4 class="font-medium capitalize text-lg">Fri Frakt</h4>
                    <p class="text-gray-500 text-xs lg:text-sm">Order över 200&euro;</p>
                </div>
            </div>
            <!-- Feature 2 -->
            <div class="border-primary border border-red-600 rounded-sm px-8 lg:px-3 lg:py-6 py-4 flex justify-center items-center gap-5 transition hover:border-slate-400 hover:bg-gray-200 duration-300">
                <img src="<?php echo get_template_directory_uri(); ?>/images/icons/money-back.svg" alt="Money Returns"
                     width="48" height="48" class="object-contain"/>
                <div>
                    <h4 class="font-medium capitalize text-lg">Prova gratis</h4>
                    <p class="text-gray-500 text-xs lg:text-sm">Prova i 30 dagar</p>
                </div>
            </div>
            <!-- Feature 3 -->
            <div class="border-primary border border-red-600  rounded-sm px-8 lg:px-3 lg:py-6 py-4 flex justify-center items-center gap-5 transition hover:border-slate-400 hover:bg-gray-200 duration-300">
                <img src="<?php echo get_template_directory_uri(); ?>/images/icons/service-hours.svg" alt="24/7 Support"
                     width="48" height="48" class="object-contain"/>
                <div>
                    <h4 class="font-medium capitalize text-lg">Kvalitets Support</h4>
                    <p class="text-gray-500 text-xs lg:text-sm">Fri Kundsupport</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Start categories -->
    <div class="container pb-16">
        <!--    <h2 class="text-2xl md:text-3xl font-medium text-gray-800 uppercase mb-6">Produkter per kategori</h2>-->
        <!--
		  This example requires some changes to your config:

		  ```
		  // tailwind.config.js
		  module.exports = {
			// ...
			plugins: [
			  // ...
			  require('@tailwindcss/aspect-ratio'),
			],
		  }
		  ```
		-->
        <div class="bg-custom-gray">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto max-w-2xl py-10 sm:py-24 lg:max-w-none lg:pb-32 lg:pt-12">
                    <h2 class="text-2xl font-bold text-gray-900">Produktområden</h2>

                    <div class="mt-6 space-y-12 lg:grid lg:grid-cols-3 lg:gap-x-6 lg:space-y-0">
                        <div class="group relative">
                            <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">

								<?php
								// Construct the image URL
								$image_url = content_url() . '/uploads/2024/07/dental2.webp';
								?>

                                <img class="h-full w-full object-cover object-center"
                                     src="<?php echo esc_url( $image_url ); ?>" alt="Descriptive text for the image">

                            </div>
                            <h3 class="mt-6 text-sm text-gray-500">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    Dental och sjukvård
                                </a>
                            </h3>
                            <p class="text-base font-semibold text-gray-900">Work from home accessories</p>
                        </div>
                        <div class="group relative">
                            <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
								<?php
								// Construct the image URL
								$image_url = content_url() . '/uploads/2024/07/kontor_pro_500x500.webp';
								?>

                                <img class="h-full w-full object-cover object-center"
                                     src="<?php echo esc_url( $image_url ); ?>" alt="Descriptive text for the image">

                            </div>
                            <h3 class="mt-6 text-sm text-gray-500">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    Kontors- och andra arbetsstolar
                                </a>
                            </h3>
                            <p class="text-base font-semibold text-gray-900">Journals and note-taking</p>
                        </div>
                        <div class="group relative">
                            <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
								<?php
								// Construct the image URL
								$image_url = content_url() . '/uploads/2024/07/rebel_seat.webp';
								?>

                                <img class="h-full w-full object-cover object-center"
                                     src="<?php echo esc_url( $image_url ); ?>" alt="Descriptive text for the image">

                            </div>
                            <h3 class="mt-6 text-sm text-gray-500">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    Tillbehör
                                </a>
                            </h3>
                            <p class="text-base font-semibold text-gray-900">Daily commute essentials</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End categories -->
    <!--My own new custom topplista-->
    <div class="container pb-16">
        <div class="bg-custom-gray">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="mx-auto max-w-2xl py-10 sm:py-24 lg:max-w-none lg:pb-32 lg:pt-12">
                    <h2 class="text-2xl font-bold text-gray-900">Produktområden</h2>
                    <div class="mt-6 space-y-12 lg:grid lg:grid-cols-3 lg:gap-x-6 lg:space-y-0">
                        <!-- ---- Start Single Product  ----- -->
                        <div class="group rounded bg-white shadow overflow-hidden ">
                            <div class="relative ">
                                <img src="/images/products/product1.jpg" class="w-full"/>

                                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition ">
                                    <a href="view.html"
                                       class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex  items-center justify-center ">
                                        <i class="fas fa-search"></i>
                                    </a>
                                    <a href="#"
                                       class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex items-center justify-center ">
                                        <i class="fas fa-heart"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="pt-4 pb-3 px-4 ">
                                <a href="view.html">
                                    <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition ">
                                        Guyer Chair </h4>
                                </a>

                                <div class="flex items-baseline mb-1 space-x-2 ">
                                    <p class="text-xl text-primary font-roboto font-semibold "> $45.00 </p>
                                    <p class="text-sm text-gray-400 font-roboto  line-through "> $55.00 </p>
                                </div>
                                <div class="flex items-center ">
                                    <div class="flex gap-1 text-sm text-yellow-400 ">
                                        <span><i class="fas fa-star"></i> </span>
                                        <span><i class="fas fa-star"></i> </span>
                                        <span><i class="fas fa-star"></i> </span>
                                        <span><i class="fas fa-star"></i> </span>
                                        <span><i class="fas fa-star"></i> </span>
                                    </div>
                                    <div class="text-xs text-gray-500 ml-3 ">(120)</div>

                                </div>
                            </div>

                            <a href="#"
                               class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b font-medium hover:bg-transparent hover:text-primary transition ">
                                Add To Cart
                            </a>
                        </div>
                        <!-- ---- End Single Product  ----- -->
                        <!-- ---- Start Single Product  ----- -->
                        <div class="group rounded bg-white shadow overflow-hidden ">
                            <div class="relative ">
                                <img src="/images/products/product2.jpg" class="w-full"/>

                                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition ">
                                    <a href="view.html"
                                       class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex  items-center justify-center ">
                                        <i class="fas fa-search"></i>
                                    </a>
                                    <a href="#"
                                       class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex items-center justify-center ">
                                        <i class="fas fa-heart"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="pt-4 pb-3 px-4 ">
                                <a href="view.html">
                                    <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition ">
                                        Guyer Chair </h4>
                                </a>

                                <div class="flex items-baseline mb-1 space-x-2 ">
                                    <p class="text-xl text-primary font-roboto font-semibold "> $45.00 </p>
                                    <p class="text-sm text-gray-400 font-roboto  line-through "> $55.00 </p>
                                </div>
                                <div class="flex items-center ">
                                    <div class="flex gap-1 text-sm text-yellow-400 ">
                                        <span><i class="fas fa-star"></i> </span>
                                        <span><i class="fas fa-star"></i> </span>
                                        <span><i class="fas fa-star"></i> </span>
                                        <span><i class="fas fa-star"></i> </span>
                                        <span><i class="fas fa-star"></i> </span>
                                    </div>
                                    <div class="text-xs text-gray-500 ml-3 ">(120)</div>

                                </div>
                            </div>

                            <a href="#"
                               class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b font-medium hover:bg-transparent hover:text-primary transition ">
                                Add To Cart
                            </a>
                        </div>

                        <!-- ---- End Single Product  ----- -->
                        <!-- ---- Start Single Product  ----- -->
                        <div class="group rounded bg-white shadow overflow-hidden ">
                            <div class="relative ">
                                <img src="/images/products/product2.jpg" class="w-full"/>

                                <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition ">
                                    <a href="view.html"
                                       class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex  items-center justify-center ">
                                        <i class="fas fa-search"></i>
                                    </a>
                                    <a href="#"
                                       class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex items-center justify-center ">
                                        <i class="fas fa-heart"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="pt-4 pb-3 px-4 ">
                                <a href="view.html">
                                    <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition ">
                                        Guyer Chair </h4>
                                </a>

                                <div class="flex items-baseline mb-1 space-x-2 ">
                                    <p class="text-xl text-primary font-roboto font-semibold "> $45.00 </p>
                                    <p class="text-sm text-gray-400 font-roboto  line-through "> $55.00 </p>
                                </div>
                                <div class="flex items-center ">
                                    <div class="flex gap-1 text-sm text-yellow-400 ">
                                        <span><i class="fas fa-star"></i> </span>
                                        <span><i class="fas fa-star"></i> </span>
                                        <span><i class="fas fa-star"></i> </span>
                                        <span><i class="fas fa-star"></i> </span>
                                        <span><i class="fas fa-star"></i> </span>
                                    </div>
                                    <div class="text-xs text-gray-500 ml-3 ">(120)</div>

                                </div>
                            </div>

                            <a href="#"
                               class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b font-medium hover:bg-transparent hover:text-primary transition ">
                                Add To Cart
                            </a>
                        </div>

                        <!-- ---- End Single Product  ----- -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End my custom topplista -->


    <!-- ---- Start Top New Arrival  ----- -->

    <div class="container pb-16 ">
        <h2 class="text-2xl md:text-3xl font-medium text-gray-800 uppercase mb-6  ">Toplistan kontor </h2>
        <div class="grid lg:grid-cols-4 sm:grid-cols-2 gap-6 ">
            <!-- ---- Start Single Product  ----- -->
            <div class="group rounded bg-white shadow overflow-hidden ">
                <div class="relative ">
                    <img src="/images/products/product1.jpg" class="w-full"/>

                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition ">
                        <a href="view.html"
                           class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex  items-center justify-center ">
                            <i class="fas fa-search"></i>
                        </a>
                        <a href="#"
                           class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex items-center justify-center ">
                            <i class="fas fa-heart"></i>
                        </a>
                    </div>
                </div>

                <div class="pt-4 pb-3 px-4 ">
                    <a href="view.html">
                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition ">
                            Guyer Chair </h4>
                    </a>

                    <div class="flex items-baseline mb-1 space-x-2 ">
                        <p class="text-xl text-primary font-roboto font-semibold "> $45.00 </p>
                        <p class="text-sm text-gray-400 font-roboto  line-through "> $55.00 </p>
                    </div>
                    <div class="flex items-center ">
                        <div class="flex gap-1 text-sm text-yellow-400 ">
                            <span><i class="fas fa-star"></i> </span>
                            <span><i class="fas fa-star"></i> </span>
                            <span><i class="fas fa-star"></i> </span>
                            <span><i class="fas fa-star"></i> </span>
                            <span><i class="fas fa-star"></i> </span>
                        </div>
                        <div class="text-xs text-gray-500 ml-3 ">(120)</div>

                    </div>
                </div>

                <a href="#"
                   class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b font-medium hover:bg-transparent hover:text-primary transition ">
                    Add To Cart
                </a>
            </div>

            <!-- ---- End Single Product  ----- -->


            <!-- ---- Start Single Product  ----- -->
            <div class="group rounded bg-white shadow overflow-hidden ">
                <div class="relative ">
                    <img src="/images/products/product2.jpg" class="w-full"/>

                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition ">
                        <a href="view.html"
                           class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex  items-center justify-center ">
                            <i class="fas fa-search"></i>
                        </a>
                        <a href="#"
                           class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex items-center justify-center ">
                            <i class="fas fa-heart"></i>
                        </a>
                    </div>
                </div>

                <div class="pt-4 pb-3 px-4 ">
                    <a href="view.html">
                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition ">
                            Guyer Chair </h4>
                    </a>

                    <div class="flex items-baseline mb-1 space-x-2 ">
                        <p class="text-xl text-primary font-roboto font-semibold "> $45.00 </p>
                        <p class="text-sm text-gray-400 font-roboto  line-through "> $55.00 </p>
                    </div>
                    <div class="flex items-center ">
                        <div class="flex gap-1 text-sm text-yellow-400 ">
                            <span><i class="fas fa-star"></i> </span>
                            <span><i class="fas fa-star"></i> </span>
                            <span><i class="fas fa-star"></i> </span>
                            <span><i class="fas fa-star"></i> </span>
                            <span><i class="fas fa-star"></i> </span>
                        </div>
                        <div class="text-xs text-gray-500 ml-3 ">(120)</div>

                    </div>
                </div>

                <a href="#"
                   class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b font-medium hover:bg-transparent hover:text-primary transition ">
                    Add To Cart
                </a>
            </div>

            <!-- ---- End Single Product  ----- -->


            <!-- ---- Start Single Product  ----- -->
            <div class="group rounded bg-white shadow overflow-hidden ">
                <div class="relative ">
                    <img src="/images/products/product3.jpg" class="w-full"/>

                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition ">
                        <a href="view.html"
                           class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex  items-center justify-center ">
                            <i class="fas fa-search"></i>
                        </a>
                        <a href="#"
                           class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex items-center justify-center ">
                            <i class="fas fa-heart"></i>
                        </a>
                    </div>
                </div>

                <div class="pt-4 pb-3 px-4 ">
                    <a href="view.html">
                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition ">
                            Guyer Chair </h4>
                    </a>

                    <div class="flex items-baseline mb-1 space-x-2 ">
                        <p class="text-xl text-primary font-roboto font-semibold "> $45.00 </p>
                        <p class="text-sm text-gray-400 font-roboto  line-through "> $55.00 </p>
                    </div>
                    <div class="flex items-center ">
                        <div class="flex gap-1 text-sm text-yellow-400 ">
                            <span><i class="fas fa-star"></i> </span>
                            <span><i class="fas fa-star"></i> </span>
                            <span><i class="fas fa-star"></i> </span>
                            <span><i class="fas fa-star"></i> </span>
                            <span><i class="fas fa-star"></i> </span>
                        </div>
                        <div class="text-xs text-gray-500 ml-3 ">(120)</div>

                    </div>
                </div>

                <a href="#"
                   class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b font-medium hover:bg-transparent hover:text-primary transition ">
                    Add To Cart
                </a>
            </div>

            <!-- ---- End Single Product  ----- -->


            <!-- ---- Start Single Product  ----- -->
            <div class="group rounded bg-white shadow overflow-hidden ">
                <div class="relative ">
                    <img src="/images/products/product4.jpg" class="w-full"/>

                    <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center gap-2 opacity-0 group-hover:opacity-100 transition ">
                        <a href="view.html"
                           class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex  items-center justify-center ">
                            <i class="fas fa-search"></i>
                        </a>
                        <a href="#"
                           class="text-white text-lg w-9 h-9 rounded-full bg-primary hover:bg-gray-800 transition flex items-center justify-center ">
                            <i class="fas fa-heart"></i>
                        </a>
                    </div>
                </div>

                <div class="pt-4 pb-3 px-4 ">
                    <a href="view.html">
                        <h4 class="uppercase font-medium text-xl mb-2 text-gray-800 hover:text-primary transition ">
                            Guyer Chair </h4>
                    </a>

                    <div class="flex items-baseline mb-1 space-x-2 ">
                        <p class="text-xl text-primary font-roboto font-semibold "> $45.00 </p>
                        <p class="text-sm text-gray-400 font-roboto  line-through "> $55.00 </p>
                    </div>
                    <div class="flex items-center ">
                        <div class="flex gap-1 text-sm text-yellow-400 ">
                            <span><i class="fas fa-star"></i> </span>
                            <span><i class="fas fa-star"></i> </span>
                            <span><i class="fas fa-star"></i> </span>
                            <span><i class="fas fa-star"></i> </span>
                            <span><i class="fas fa-star"></i> </span>
                        </div>
                        <div class="text-xs text-gray-500 ml-3 ">(120)</div>

                    </div>
                </div>

                <a href="#"
                   class="block w-full py-1 text-center text-white bg-primary border border-primary rounded-b font-medium hover:bg-transparent hover:text-primary transition ">
                    Add To Cart
                </a>
            </div>

            <!-- ---- End Single Product  ----- -->


        </div>

    </div>

    <!-- ---- End Top New Arrival  ----- -->
    <!-- get footer -->
<?php get_footer(); ?>