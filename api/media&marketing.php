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
        margin-top: -10vh !important;
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
    .v {
            position:relative; right:-180px
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
        .t {
            margin-top:70px
        }
    }

    @media (max-width: 1440px) {
        .services-second-main-content {
            /* margin-top: -65vh !important; */
        }
    }
    @media (max-width: 992px) {
        .services-second-main-content {
            /* margin-top: -5vh !important; */
        }

        .v {
            position:relative; right:-180px
        }

        .t {
            margin-top:70px
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
        .v {
            position:relative; right:0px
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

        .v {
            position:relative; right:0px
        }

        .services-second-main-content {
            /* margin-top: -10vh !important; */
        }

        .bottom-gradient {
            height: 35% !important;
        }
    }
</style>

<section class="top-home-page m-0 media-marketing-top-section" style="padding-top:130px; padding-bottom:130px">
    <img class="top-section-logo-img" src="images/infinity-logo.png" alt="logo">
    <div id="particles-js"></div>
    <div class="position-relative">
        <div class="container home-container-height d-flex ">
            <div class="row justify-content-between w-100 justify-content-small-center pt-2">
                <div class="text-start col-lg-6 col-md-6 col-sm-12" style="z-index: 1;">
                    <h1 class="text-light main-section-heading mb-2">Media and <br><span class="green-color w-100-span">Marketing </span>Solutions
                    </h1>
                    <p class="text-light m-0 p-0 text-size-adjustment" style="padding: 15px 20% 0px 0px !important;">Driving growth and engagement with innovative media strategies and comprehensive marketing solutions.</p>
                </div>
                <!-- <div class="flex-1"> -->
                <img src="images/svg/photo.png"
                    class="text-start col-lg-6 col-md-6 col-12 p-0 v">
                    </div>
            <!-- </div> -->
        </div>
    </div>
</section>

<section class="services-second-main-content py-5">
    <div class="bottom-gradient"></div>
    <div class="container services-border">
        <p class="trading-heading">Media and Marketing Solutions</p>
        <p class="trading-heading-inner text-light mb-4">
            Driving growth and engagement with innovative media strategies and comprehensive marketing solutions.
        </p>

        <div class="row">
            <a href="#" class="col-lg-3 text-center col-md-4 col-sm-4 menu-item active text-light" data-target="tab1">Account Setup & Management</a>
            <a href="#" class="col-lg-3 text-center col-md-4 col-sm-4 menu-item text-light" data-target="tab2">Social Media Management</a>
            <a href="#" class="col-lg-2 text-center col-md-4 col-sm-4 menu-item text-light" data-target="tab3">Digital Advertising</a>
            <a href="#" class="col-lg-4 text-center col-md-12 col-sm-12 menu-item text-light" data-target="tab4">Online Reputation Management (ORM)</a>
        </div>
        <div class="row menu-bar">
            <a href="#" class="col-lg-2 col-md-4 col-sm-6 submenu-item text-center text-light" data-target="tab5">Digital PR</a>
            <a href="#" class="col-lg-3 col-md-4 col-sm-6 submenu-item text-center text-light" data-target="tab6">Organic Traffic Optimization</a>
            <a href="#" class="col-lg-2 col-md-4 col-sm-6 submenu-item text-center text-light" data-target="tab7">Performance Marketing</a>
            <a href="#" class="col-lg-2 col-md-6 col-sm-6 submenu-item text-center text-light" data-target="tab8">Wikipedia Services</a>
            <a href="#" class="col-lg-3 col-md-6 col-sm-12  submenu-item text-center text-light" data-target="tab9">Generative AI Optimization</a>
        </div>

        <div class="mt-5 row justify-content-between align-items-start tab-content my-3" id="tab1">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <p class="text-light services-container-inner-content">Efficiently manage your online accounts with streamlined setup and ongoing management services to ensure optimal performance.</p>
                <ul>
                    <li class="text-light services-container-inner-content">Hassle-free account creation and verification.</li>
                    <li class="text-light services-container-inner-content">Ongoing monitoring and performance tracking.</li>
                    <li class="text-light services-container-inner-content">Secure management and protection of user data.</li>
                    <li class="text-light services-container-inner-content">Customizable settings to match business needs.</li>
                </ul>

                <a href="" class="mt-3 tab-content-btn btn text-light">
                    LEARN MORE
                </a>
            </div>
            <img class="col-lg-6 col-md-5 col-12 tab-content-images my-3" src="images/2448123_7 edit.jpg" style="height:243px; object-fit:fill;">
        </div>



        <div class="mt-5 row justify-content-between align-items-start tab-content my-3" id="tab2">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <p class="text-light services-container-inner-content">Maximize your brand's online presence with professional social media management that engages audiences and drives growth.</p>
                <ul>
                    <li class="text-light services-container-inner-content">Content creation and scheduling across multiple platforms.</li>
                    <li class="text-light services-container-inner-content">Engagement tracking and audience insights.</li>
                    <li class="text-light services-container-inner-content">Regular performance reporting and strategy adjustments.</li>
                    <li class="text-light services-container-inner-content">Consistent branding and message alignment.</li>
                </ul>

                <a href="" class="mt-3 tab-content-btn btn text-light">
                    LEARN MORE 
                </a>
            </div>
            <img class="col-lg-6 col-md-5 col-12 tab-content-images my-3" style="height:243px; object-fit:fill;" src="images/952158_4839.jpg">
        </div>


        <div class="mt-5 row justify-content-between align-items-start tab-content my-3" id="tab3">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <p class="text-light services-container-inner-content">Boost your visibility and reach with targeted digital advertising campaigns across multiple online platforms.</p>
                <ul>
                    <li class="text-light services-container-inner-content">PPC (pay-per-click) and display advertising for increased traffic</li>
                    <li class="text-light services-container-inner-content">Audience segmentation for precise targeting.</li>
                    <li class="text-light services-container-inner-content">Real-time performance tracking and optimization.</li>
                    <li class="text-light services-container-inner-content">A/B testing for maximizing ROI and ad effectiveness.</li>
                </ul>

                <a href="" class="mt-3 tab-content-btn btn text-light">
                    LEARN MORE
                </a>
            </div>
            <img class="col-lg-6 col-md-5 col-12 tab-content-images my-3" style="height:243px; object-fit:fill;" src="images/Group88.png">
        </div>


        <div class="mt-5 row justify-content-between align-items-start tab-content my-3" id="tab4">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <p class="text-light services-container-inner-content"><span class="green-color font-size-18">Online Reputation Management (ORM)</span> is the practice of shaping and maintaining a positive digital identity across online platforms. By addressing negative content, enhancing positive visibility, and managing reviews, ORM strategies help businesses and individuals establish credibility and trust. Effective ORM ensures that online reputation reflects accurately, supporting brand growth, customer loyalty, and long-term success in the digital landscape.
                    <br>
                    <br>
                    <span class="green-color font-size-18 mt-3">Corporate ORM:</span> Infin<img src="images/Vector (1).png">hub’s Corporate Online Reputation Management (ORM) service ensures a strong, positive digital presence for businesses. By leveraging advanced strategies, Infin<img src="images/Vector (1).png">hub enhances visibility, addresses negative content, and builds brand trust. Their solutions include content optimization, strategic outreach, and reputation recovery to safeguard the client’s online identity.
                </p>
                <ul>
                    <li class="text-light services-container-inner-content">Boosting brand credibility and trustworthiness.</li>
                    <li class="text-light services-container-inner-content">Highlighting positive reviews while minimizing the impact of negative ones.</li>
                    <li class="text-light services-container-inner-content">Optimizing digital assets and online visibility.</li>
                    <li class="text-light services-container-inner-content">Delivering strategic media and content campaigns.</li>
                    <li class="text-light services-container-inner-content">Strengthening search engine rankings and public perception.</li>
                </ul>

                <p class="text-light services-container-inner-content"><span class="green-color font-size-18"> Personal ORM: </span>Infin<img src="images/Vector (1).png">hub’s Personal Online Reputation Management (ORM) service helps individuals and public figures take control of their digital identity. By optimizing online assets, removing negative content, and securing positive visibility, Infin<img src="images/Vector (1).png">hub ensures clients project a trustworthy and authoritative presence.
                <ul>
                    <li class="text-light services-container-inner-content">Establishing and enhancing personal digital entities.</li>
                    <li class="text-light services-container-inner-content">Managing and optimizing online assets, including websites and social profiles.</li>
                    <li class="text-light services-container-inner-content">Securing positive media coverage and authoritative mentions.</li>
                    <li class="text-light services-container-inner-content">Promoting favorable search engine results and suppressing negative content.</li>
                    <li class="text-light services-container-inner-content">Continuous monitoring and strategic updates for long-term reputation management.</li>
                </ul>


                <p class="text-light services-container-inner-content"><span class="green-color font-size-18"> Financial brands: </span>Infin<img src="images/Vector (1).png">hub’s Online Reputation Management (ORM) service for financial brands supports businesses in the finance sector, such as forex, crypto, and banking, to build trust and authority. By mitigating negative content, boosting visibility, and enhancing brand sentiment, Infin<img src="images/Vector (1).png">hub helps financial brands establish a robust and credible digital presence.
                <ul>
                    <li class="text-light services-container-inner-content">Strengthening brand authority and trust.</li>
                    <li class="text-light services-container-inner-content">Managing negative search results and improving sentiment.</li>
                    <li class="text-light services-container-inner-content">Enhancing visibility to increase conversion rates.</li>
                    <li class="text-light services-container-inner-content">Comprehensive digital PR, SEO, and performance marketing solutions.</li>
                    <li class="text-light services-container-inner-content">Specialized ASO strategies for mobile trading apps.</li>
                </ul>

                <a href="" class="mt-3 tab-content-btn btn text-light">
                    LEARN MORE
                </a>
            </div>
            <img class="col-lg-6 col-md-5 col-12 tab-content-images my-3" style="height:243px; object-fit:fill;" src="images/22614232_16843.jpg">
        </div>


        <div class="mt-5 row justify-content-between align-items-start tab-content my-3" id="tab5">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <p class="text-light services-container-inner-content">Infin<img src="images/Vector (1).png">hub’s Digital PR service amplifies brand visibility and influence by securing top-tier media mentions, distributing press releases, and promoting content on global and industry-specific platforms. Their tailored campaigns ensure impactful coverage, connecting businesses with their target audience while maximizing digital reach and authority.</p>
                <ul>
                    <li class="text-light services-container-inner-content">Securing media mentions, executive quotes, and featured articles.</li>
                    <li class="text-light services-container-inner-content">Global and local press release distribution.</li>
                    <li class="text-light services-container-inner-content">Promotion through high-traffic, industry-specific websites.</li>
                    <li class="text-light services-container-inner-content">Strategic content marketing and social media integration.</li>
                    <li class="text-light services-container-inner-content">Comprehensive PR campaign planning and execution.</li>
                </ul>

                <a href="" class="mt-3 tab-content-btn btn text-light">
                    LEARN MORE
                </a>
            </div>
            <img class="col-lg-6 col-md-5 col-12 tab-content-images my-3" style="height:243px; object-fit:fill;" src="images/725036_news paper11.jpg">
        </div>

        <div class="mt-5 row justify-content-between align-items-start tab-content my-3" id="tab6">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <p class="text-light services-container-inner-content">
                    <span class="green-color font-size-18">Organic Traffic Optimization (OTO)</span> involves using SEO techniques to improve a website’s visibility and ranking on search engines without relying on paid ads. By optimizing content, technical elements, and online presence, businesses can increase organic traffic, enhance user engagement, and drive more qualified leads. Effective OTO strategies help businesses achieve long-term success and higher ROI by ensuring that their websites appear more prominently in search results.
                    <br><br>
                    <span class="green-color font-size-18">Search Engine Optimization (SEO) Services:</span> Infin<img src="images/Vector (1).png">hub’s SEO services deliver impactful, tailored strategies to maximize organic traffic and search engine rankings. By integrating technical SEO, content optimization, and strategic link-building, Infin<img src="images/Vector (1).png">hub ensures websites achieve prominence in search results, driving growth and visibility for businesses globally.
                </p>
                <ul>
                    <li class="text-light services-container-inner-content">Comprehensive keyword research across user journeys.</li>
                    <li class="text-light services-container-inner-content">Technical SEO audits and on-page optimization.</li>
                    <li class="text-light services-container-inner-content">Unique link-building strategies with 20,000+ website connections.</li>
                    <li class="text-light services-container-inner-content">Multilingual SEO solutions for global markets.</li>
                    <li class="text-light services-container-inner-content">Continuous rank monitoring and performance analysis.</li>
                </ul>
                <p class="text-light services-container-inner-content">
                    <span class="green-color font-size-18">App Store Optimization (ASO) Services:</span> Infin<img src="images/Vector (1).png">hub’s App Store Optimization (ASO) services maximize mobile app visibility and user acquisition on platforms like the Apple App Store and Google Play. By optimizing keywords, app listings, and graphic assets, coupled with strategic link-building and review management, Infin <img src="images/Vector (1).png">hub ensures improved rankings and conversions globally.
                </p>
                <ul>
                    <li class="text-light services-container-inner-content">Comprehensive keyword research focused on user journeys.</li>
                    <li class="text-light services-container-inner-content">Optimized app listings, descriptions, and visuals.</li>
                    <li class="text-light services-container-inner-content">Strategic link-building to enhance app discoverability.</li>
                    <li class="text-light services-container-inner-content">Review management to boost credibility and downloads.</li>
                    <li class="text-light services-container-inner-content">Multilingual support and geo-targeted ASO actions.</li>
                </ul>
                <a href="" class="mt-3 tab-content-btn btn text-light">
                    LEARN MORE
                </a>
            </div>
            <img class="col-lg-6 col-md-5 col-12 tab-content-images my-3" style="height:243px; object-fit:fill;" src="images/digital-seo-text-icons-magnifier-influencer-strategy-influencer-online-marketing-abstraction.jpg">
        </div>

        <div class="mt-5 row justify-content-between align-items-start tab-content my-3" id="tab7">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <p class="text-light services-container-inner-content">
                    <span class="green-color font-size-18">Performance Marketing Services:</span> Infin<img src="images/Vector (1).png">hub’s Performance Marketing services drive measurable results through data-driven campaigns on search engines, social media, and content platforms. By optimizing ad spend, creative assets, and targeting strategies, Infin <img src="images/Vector (1).png">hub transforms traffic into conversions, ensuring maximum ROI for businesses across various sectors.
                </p>
                <ul>
                    <li class="text-light services-container-inner-content">Advertising on platforms like Google Ads, Facebook Ads, LinkedIn, and TikTok.</li>
                    <li class="text-light services-container-inner-content">Specialized campaigns for mobile apps, e-commerce, SaaS, and trading platforms.</li>
                    <li class="text-light services-container-inner-content">Strategic social media, content, and search engine marketing.</li>
                    <li class="text-light services-container-inner-content">Creative design and tailored messaging for platform-specific engagement.</li>
                    <li class="text-light services-container-inner-content">Comprehensive campaign setup, optimization, and reporting.</li>
                </ul>
                <a href="" class="mt-3 tab-content-btn btn text-light">
                    LEARN MORE
                </a>
            </div>
            <img class="col-lg-6 col-md-5 col-12 tab-content-images my-3" style="height:243px; object-fit:fill;" src="images/Group 84.png">
        </div>

        <div class="mt-5 row justify-content-between align-items-start tab-content my-3" id="tab8">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <p class="text-light services-container-inner-content">Infin<img src="images/Vector (1).png">hub’s Wikipedia Services provide tailored solutions to establish, manage, and monitor Wikipedia pages for individuals and businesses. With expertise in Wikipedia’s guidelines, Infin <img src="images/Vector (1).png">hub ensures compliance, transparency, and credibility while creating new pages, editing existing content, and maintaining a neutral and authoritative presence.</p>
                <ul>
                    <li class="text-light services-container-inner-content">Creating Wikipedia pages that meet notability and sourcing requirements.</li>
                    <li class="text-light services-container-inner-content">Editing pages to align with community standards and resolve conflicts.</li>
                    <li class="text-light services-container-inner-content">Monitoring pages for updates or unauthorized changes.</li>
                    <li class="text-light services-container-inner-content">Transparent assessment of feasibility and success likelihood.</li>
                    <li class="text-light services-container-inner-content">Comprehensive guidance for long-term Wikipedia management.</li>
                </ul>

                <a href="" class="mt-3 tab-content-btn btn text-light">
                    LEARN MORE
                </a>
            </div>
            <img class="col-lg-6 col-md-5 col-12 tab-content-images my-3" style="height:243px; object-fit:cover;" src="images/attachment111.png">
        </div>


        <div class="mt-5 row justify-content-between align-items-start tab-content my-3" id="tab9">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <p class="text-light services-container-inner-content">Infin<img src="images/Vector (1).png">hub’s AI Services help businesses adapt to the rapidly evolving AI landscape by leveraging AI technologies to protect and enhance their online presence. With expertise in AI-driven search platforms like Bard, they provide comprehensive analysis and strategies to maintain a competitive edge in the dynamic world of AI-integrated reputation management.</p>
                <ul>
                    <li class="text-light services-container-inner-content">Analysis of digital footprint across AI platforms like Bard and ChatGPT.</li>
                    <li class="text-light services-container-inner-content">Strategies to protect and enhance online reputation in AI-driven search environments.</li>
                    <li class="text-light services-container-inner-content">Expertise in navigating AI's influence on search results and user behavior.</li>
                    <li class="text-light services-container-inner-content">Customized guidance for AI-related business challenges and opportunities.</li>
                </ul>

                <a href="" class="mt-3 tab-content-btn btn text-light">
                    LEARN MORE
                </a>
            </div>
            <img class="col-lg-6 col-md-5 col-12 tab-content-images my-3" style="height:243px; object-fit:fill;" src="images/ai-technology-microchip-background-futuristic-innovation-technology-remix.jpg">
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

    <div class="w-100">
        <?php include('footer.php');  ?>
    </div>


</section>