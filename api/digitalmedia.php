<?php include('header.php');  ?>
<style>
    body {
        background: radial-gradient(circle at 33% 19%, #000606 0%, #001e1d 0%, #000000 43%, #000000 0%) !important;
        background-attachment: scroll !important;
        background-size: cover !important;
        background-repeat: no-repeat !important;
    }

    .top-home-page {
        background: transparent !important;
    }

    .services-second-main-content {
        background: transparent !important;
        position: relative !important;
        /* margin-top: -52vh !important; */
    }

    .bottom-gradient {
        background: linear-gradient(0deg, #003131 0%, #000000 94%, #000000 0%) !important;
        position: absolute !important;
        bottom: 0 !important;
        width: 100% !important;
        height: 65% !important;
        z-index: -1 !important;
    }

    .services-border {
        margin-bottom: 12vh !important;
    }

    .top-section-logo-img {
        position: absolute;
        left: -13%;
        top: -38%;
        height: 568px;
        opacity: .05;
    }

    /* ✅ Responsive Adjustments */
    @media (max-width: 1200px) {
        .top-section-logo-img {
            left: -10%;
            top: -30%;
            height: 480px;
        }
    }

    @media (max-width: 992px) {
        .services-second-main-content {
            /* margin-top: -25vh !important; */
        }

        .top-section-logo-img {
            left: -8%;
            top: -28%;
            height: 420px;
        }

        .bottom-gradient {
            height: 50% !important;
        }
    }

    @media (max-width: 768px) {
        .top-section-logo-img {
            left: -5%;
            top: -20%;
            height: 360px;
        }

        .services-second-main-content {
            /* margin-top: -15vh !important; */
        }

        .bottom-gradient {
            height: 40% !important;
        }
    }

    @media (max-width: 576px) {
        .top-section-logo-img {
            left: -3%;
            top: -15%;
            height: 280px;
        }

        .services-second-main-content {
            /* margin-top: -10vh !important; */
        }

        .bottom-gradient {
            height: 35% !important;
        }
    }
</style>


<section class="top-home-page m-0" style="padding-top:130px; padding-bottom:130px">
    <img class="top-section-logo-img" src="images/infinity-logo.png" alt="logo">
    <div id="particles-js"></div>
    <div class="position-relative">
        <div class="container home-container-height d-flex flex-wrap align-items-center justify-content-between">
            <div class="text-start col-lg-6 col-md-6 col-sm-12" style="z-index: 1;">
                <h1 class="text-light main-section-heading mb-2">Digital Media &<br><span class="green-color w-100-span">Content Creation</span>
                </h1>
                <p class="text-light mt-3 text-under-main-heading">
                    Bringing your brand to life with captivating content and powerful digital media strategies.
                </p>
            </div>
            <img src="images/Illustrations for website-05 2.png" class=" text-start col-lg-6 col-md-6 col-12">
        </div>
    </div>
</section>

<section class="services-second-main-content pt-5">
    <div class="bottom-gradient"></div>
    <div class="container services-border">
        <p class="trading-heading">Digital Media & Content Creation</p>
        <p class="trading-heading-inner text-light mb-4">
            Bringing your brand to life with captivating content and powerful digital media strategies.
        </p>

        <div class="row">
            <a href="#" class="col-lg-2 text-center col-md-4 col-sm-4 menu-item active text-light" data-target="tab1">Video Production</a>
            <a href="#" class="col-lg-2 text-center col-md-4 col-sm-4 menu-item text-light" data-target="tab2"> Graphic Design</a>
            <a href="#" class="col-lg-3 text-center col-md-4 col-sm-4 menu-item text-light" data-target="tab3">Custom Web & App Design</a>
            <a href="#" class="col-lg-3 text-center col-md-6 col-sm-12 menu-item text-light" data-target="tab4">Multimedia Production</a>
            <a href="#" class="col-lg-2 col-md-6 col-sm-12 menu-item text-center text-light" data-target="tab5">Content Strategy</a>
        </div>

        <div class="mt-5 row justify-content-between align-items-start tab-content my-3" id="tab1">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <p class="text-light services-container-inner-content">Create impactful video content to engage your audience, enhance your brand's story, and drive conversions.</p>
                <ul>
                    <li class="text-light services-container-inner-content">High-quality videos for marketing, tutorials, and product showcases.</li>
                    <li class="text-light services-container-inner-content">Increased engagement through visually compelling storytelling.</li>
                    <li class="text-light services-container-inner-content">Tailored content for different platforms (social media, websites, etc.).</li>
                    <li class="text-light services-container-inner-content">Full production cycle from concept to editing.</li>
                </ul>

                <!-- <a href="" class="mt-3 tab-content-btn btn text-light">
                    LEARN MORE
                </a> -->
            </div>
            <img class="col-lg-6 col-md-5 col-12 tab-content-images my-3" style="height:243px" src="images/video-editing-photoshop-full-hd.jpg">
        </div>

        <div class="mt-5 row justify-content-between align-items-start tab-content my-3" id="tab2">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <p class="text-light services-container-inner-content">Develop stunning visuals that capture attention and communicate your brand's message effectively.</p>
                <ul>
                    <li class="text-light services-container-inner-content">Custom designs for logos, banners, and promotional material.</li>
                    <li class="text-light services-container-inner-content">Consistent branding across all visual content.</li>
                    <li class="text-light services-container-inner-content">Creative, on-brand solutions tailored to your business needs.</li>
                    <li class="text-light services-container-inner-content">High-quality graphics for digital and print media.</li>
                </ul>

                <!-- <a href="" class="mt-3 tab-content-btn btn text-light">
                    LEARN MORE
                </a> -->
            </div>
            <img class="col-lg-6 col-md-5 col-12 tab-content-images my-3" style="height:243px" src="images/contemporary-room-workplace-office-supplies-concept.jpg">
        </div>

        <div class="mt-5 row justify-content-between align-items-start tab-content my-3" id="tab3">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <p class="text-light services-container-inner-content">Build unique and user-friendly websites and mobile apps that offer seamless experiences.</p>
                <ul>
                    <li class="text-light services-container-inner-content">Fully customized designs tailored to user needs and brand identity.</li>
                    <li class="text-light services-container-inner-content">Mobile-responsive design for cross-platform accessibility.</li>
                    <li class="text-light services-container-inner-content">Intuitive navigation and user experience (UX) optimization.</li>
                    <li class="text-light services-container-inner-content">Fast-loading, SEO-optimized pages.</li>
                </ul>

                <!-- <a href="" class="mt-3 tab-content-btn btn text-light">
                    LEARN MORE
                </a> -->
            </div>
            <img class="col-lg-6 col-md-5 col-12 tab-content-images my-3" style="height:243px" src="images/representations-user-experience-interface-design.jpg">
        </div>

        <div class="mt-5 row justify-content-between align-items-start tab-content my-3" id="tab4">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <p class="text-light services-container-inner-content">Create dynamic multimedia content that combines text, audio, and visuals for maximum impact.
                </p>
                <ul>
                    <li class="text-light services-container-inner-content">Integration of video, audio, and animation for engaging content.</li>
                    <li class="text-light services-container-inner-content">Suitable for e-learning, product demonstrations, and interactive marketing.</li>
                    <li class="text-light services-container-inner-content">Versatile content for websites, social media, and presentations.</li>
                    <li class="text-light services-container-inner-content">Enhanced audience interaction through varied media types.</li>
                </ul>

                <!-- <a href="" class="mt-3 tab-content-btn btn text-light">
                    LEARN MORE
                </a> -->
            </div>
            <img class="col-lg-6 col-md-5 col-12 tab-content-images my-3" style="height:243px" src="images/close-up-information-sign.jpg">
        </div>

        <div class="mt-5 row justify-content-between align-items-start tab-content my-3" id="tab5">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <p class="text-light services-container-inner-content">Develop a cohesive content plan that aligns with your business objectives and drives measurable results.</p>
                <ul>
                    <li class="text-light services-container-inner-content">Data-driven approach to content creation and distribution.</li>
                    <li class="text-light services-container-inner-content">Targeted strategies to engage your audience and boost brand awareness.</li>
                    <li class="text-light services-container-inner-content">Content calendars to streamline production and posting.</li>
                    <li class="text-light services-container-inner-content">Consistent and valuable messaging to build trust and authority.</li>
                </ul>

                <!-- <a href="" class="mt-3 tab-content-btn btn text-light">
                    LEARN MORE
                </a> -->
            </div>
            <img class="col-lg-6 col-md-5 col-12 tab-content-images my-3" style="height:243px" src="images/1346113525.jpg">
        </div>
    </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const tabs = document.querySelectorAll('.menu-item, .submenu-item');
            const contents = document.querySelectorAll('.tab-content');

            // Initial setup: Show the first tab content and hide others
            const activeTab = document.querySelector('.menu-item.active, .submenu-item.active');
            if (activeTab) {
                const targetId = activeTab.getAttribute('data-target');
                document.getElementById(targetId).classList.add('active');
            }

            tabs.forEach(tab => {
                tab.addEventListener('click', function(event) {
                    event.preventDefault();

                    // Remove active class from all tabs and contents
                    tabs.forEach(t => t.classList.remove('active'));
                    contents.forEach(content => content.classList.remove('active'));

                    // Add active class to the clicked tab
                    this.classList.add('active');

                    // Show the corresponding content
                    const target = document.getElementById(this.getAttribute('data-target'));
                    if (target) {
                        target.classList.add('active');
                    }
                });
            });
        });
    </script>

    <div class="w-100 mt-5">
        <?php include('footer.php');  ?>
    </div>

</section>