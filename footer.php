<!-- ---- Start Footer  ----- -->
<Footer class="bg-white pt-16 pb-12 border-t border-gray-100 " >
    <div class="container">
        <div class="xl:grid xl:grid-cols-3 xl:gap-8 ">
            <div class="space-y-8 xl:col-span-1 ">
                <?php
                // Construct the image URL
                $image_url = content_url() . '/uploads/2024/07/sd-logo.png';
                ?>
                <div class="pl-3">
                    <img src='<?php echo esc_url($image_url); ?> 'class="w-1/3 h-1/3 object-contain" />
                </div>

                <p class="pl-3 -mt-4 text-gray-500 text-base font-roboto " >
                    HANDLA TRYGGT OCH SÄKERT
                </p>
                <?php
                // Construct the image URL
                $klarna_url = content_url() . '/uploads/2024/07/klarna-logo.png';
                $image_url = content_url() . '/uploads/2024/07/aaa.png';
                ?>
                <div class="pl-3 -mt-4">
                    <img src='<?php echo esc_url($image_url); ?> 'class=" w-12 h-8 object-contain" />
                    <img src='<?php echo esc_url($klarna_url); ?> 'class="w-14 h-10 object-contain" />
                </div>

                <div class="flex space-x-5">
                    <a href="#" class="text-gray-400 hover:text-gray-500" >
                        <i class="fab fa-facebook-f"></i>
                    </a>

                    <a href="#" class="text-gray-400 hover:text-gray-500" >
                        <i class="fab fa-twitter"></i>
                    </a>

                    <a href="#" class="text-gray-400 hover:text-gray-500" >
                        <i class="fab fa-instagram"></i>
                    </a>

                    <a href="#" class="text-gray-400 hover:text-gray-500" >
                        <i class="fab fa-linkedin-in"></i>
                    </a>

                </div>
            </div>

            <!-- ---- Footer link   ----- -->

            <div class="mt-12 grid grid-cols-2 gap-8 xl:mt-0 xl:col-span-2">
                <div class="md:grid md:grid-cols-2 md:gap-8 ">
                    <div>
                        <h3 class="text-sm font-semibold text-gray-400 tracking-wide uppercase " > KUNDSERVICE </h3>
                        <div class="mt-4 space-y-4 ">
                            <a href="#" class="text-base text-gray-500 hover:text-gray-900 block font-semibold " >
                                Kontakta oss
                            </a>
                            <a href="#" class="text-base text-gray-500 hover:text-gray-900 block font-semibold " >
                                Skötselråd
                            </a>
                            <a href="#" class="text-base text-gray-500 hover:text-gray-900 block font-semibold " >
                                Material
                            </a>
                            <a href="#" class="text-base text-gray-500 hover:text-gray-900 block font-semibold " >
                                Garanti
                            </a>  <a href="#" class="text-base text-gray-500 hover:text-gray-900 block font-semibold " >
                                Köpvillkor
                            </a>  <a href="#" class="text-base text-gray-500 hover:text-gray-900 block font-semibold " >
                                Returrätt
                            </a>  <a href="#" class="text-base text-gray-500 hover:text-gray-900 block font-semibold " >
                                30-dagars öppet köp
                            </a>
                        </div>
                    </div>



                    <div class="mt-12 md:mt-0">
                        <h3 class="text-sm font-semibold text-gray-400 tracking-wide uppercase " > INFORMATION</h3>
                        <div class="mt-4 space-y-4 ">
                            <a href="#" class="text-base text-gray-500 hover:text-gray-900 block font-semibold " >
                                Om oss
                            </a>
                            <a href="#" class="text-base text-gray-500 hover:text-gray-900 block font-semibold " >
                               Press
                            </a>
                            <a href="#" class="text-base text-gray-500 hover:text-gray-900 block font-semibold " >
                                Cookiepolicy
                            </a>
                            <a href="#" class="text-base text-gray-500 hover:text-gray-900 block font-semibold " >
                                Integritetspolicy
                            </a>
                        </div>
                    </div>


                </div>


                <div class="md:grid md:grid-cols-2 md:gap-8 ">
                    <div>
                        <h3 class="text-sm font-semibold text-gray-400 tracking-wide uppercase " > Kontakt</h3>
                        <div class="mt-4 space-y-4 ">
                            <a href="#" class="text-base text-gray-500 hover:text-gray-900 block font-semibold " >
                                support@supportdesign.se
                            </a>
                            <a href="#" class="text-base text-gray-500 hover:text-gray-900 block font-semibold " >
                                +46 (0) 565 122 80
                            </a>
                            <a href="#" class="text-base text-gray-500 hover:text-gray-900 block font-semibold " >
                                Brårudsallen 6
                            </a>
                            <a href="#" class="text-base text-gray-500 hover:text-gray-900 block font-semibold " >
                                686 33 Sunne
                            </a>
                        </div>
                    </div>



<!--                    <div class="mt-12 md:mt-0">-->
<!--                        <h3 class="text-sm font-semibold text-gray-400 tracking-wide uppercase " > Legal </h3>-->
<!--                        <div class="mt-4 space-y-4 ">-->
<!--                            <a href="#" class="text-base text-gray-500 hover:text-gray-900 block font-semibold " >-->
<!--                                Claim-->
<!--                            </a>-->
<!--                            <a href="#" class="text-base text-gray-500 hover:text-gray-900 block font-semibold " >-->
<!--                                Privacy-->
<!--                            </a>-->
<!--                            <a href="#" class="text-base text-gray-500 hover:text-gray-900 block font-semibold " >-->
<!--                                Policy-->
<!--                            </a>-->
<!--                            <a href="#" class="text-base text-gray-500 hover:text-gray-900 block font-semibold " >-->
<!--                                Terms-->
<!--                            </a>-->
<!--                        </div>-->
<!--                    </div>-->


                </div>
            </div>
            <!-- ----End Footer link   ----- -->

        </div>

    </div>

</Footer>
<!-- ---- End Footer   ----- -->
<!-- ---- Copyright  ----- -->
<div class="bg-gray-800 py-4 ">
    <div class="container flex items-center justify-between ">
        <p class="text-white font-semibold " >© Supportdesign 2022</p>
        <?php
        // Construct the image URL
        $image_url = content_url() . '/uploads/2024/07/pmethods.png';
        ?>
        <div>
            <img src='<?php echo esc_url($image_url); ?>'class="h-5" />
        </div>

    </div>
</div>
<!-- ---- End Copyright   ----- -->

<script>
    let menuBar = document.querySelector('#menuBar')
    let mobileMenu = document.querySelector('#mobileMenu')
    let closeMenu = document.querySelector('#closeMenu')

    menuBar.addEventListener('click', function(){
        mobileMenu.classList.remove('hidden')
    })

    closeMenu.addEventListener('click', function(){
        mobileMenu.classList.add('hidden')
    })

</script>
</body>
</html>