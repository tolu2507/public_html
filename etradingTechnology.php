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
        /* margin-top: -150px !important; */
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
        /* .tops {
            margin-top:50px
        } */
    }

    @media (max-width: 992px) {
        .services-second-main-content {
            margin-top: -5vh !important;
        }
        .hidden{
            display:none
        }

        /* .tops {
            margin-top:50px
        } */

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
        /* .tops {
            margin-top:100px
        } */
        .services-second-main-content {
            margin-top: -5vh !important;
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
            margin-top: -1vh !important;
        }
        /* .tops {
            margin-top:100px
        } */

        .bottom-gradient {
            height: 35% !important;
        }
    }
</style>


<section class="top-home-page m-0">
    <img class="top-section-logo-img" src="images/infinity-logo.png" alt="logo">
    <div id="particles-js"></div>
    <div class="position-relative">
        <div class="container home-container-height d-flex flex-wrap justify-content-between align-items-center">
            <div class="text-start col-lg-6 col-md-6 col-sm-12" style="z-index: 1;">
                <h1 class="text-light main-section-heading mb-2">E-Trading<br><span class="green-color w-100-span">Technology</span>
                </h1>
                <p class="text-light mt-3 text-under-main-heading" style="max-width: 360px
                        !important;">
                    Revolutionizing E-trading with Tailored Technology Solutions.
                </p>
            </div>
            <img src="images/svg/layer.png" class=" text-start col-lg-6 col-md-6 col-12">
        </div>
    </div>
</section>

<section class="services-second-main-content pt-5">
    <div class="bottom-gradient"></div>
    <div class="container services-border">
        <p class="trading-heading">E-Trading Technology</p>
        <p class="trading-heading-inner text-light mb-4">
            Revolutionizing E-trading with Tailored Technology Solutions.
        </p>
        <div class="row">
            <a href="#" class="col-lg-3 text-center col-md-4 col-sm-4 menu-item active text-light" data-target="tab1">Advanced Trading Platforms</a>
            <a href="#" class="col-lg-3 text-center col-md-4 col-sm-4 menu-item text-light" data-target="tab2">CRM Systems for E-trading</a>
            <a href="#" class="col-lg-3 text-center col-md-4 col-sm-4 menu-item text-light" data-target="tab3">Account Management Platforms</a>
            <a href="#" class="col-lg-3 text-center col-md-12 col-sm-12 menu-item text-light" data-target="tab4">AI-Powered Trading Bots</a>
        </div>
        <div class="row menu-bar">
            <a href="#" class="col-lg-3 col-md-6 col-sm-6 submenu-item text-center text-light" data-target="tab5">Affiliate Management Systems</a>
            <a href="#" class="col-lg-2 col-md-6 col-sm-6 submenu-item text-center text-light" data-target="tab6">Custom API Solutions</a>
            <a href="#" class="col-lg-4 col-md-6 col-sm-6 submenu-item text-center text-light" data-target="tab7">Automation Tools for Trading Operations</a>
            <a href="#" class="col-lg-3 col-md-6 col-sm-6 submenu-item text-center text-light" data-target="tab8">Data Analytics Tools</a>
        </div>
        <div class="row menu-bar">
            <a href="#" class="col-lg-4 col-md-6 col-sm-6  submenu-item text-center text-light" data-target="tab9">Market Research Tools</a>
            <a href="#" class="col-lg-4 col-md-6 col-sm-6  submenu-item text-center text-light" data-target="tab10">Liquidity Management Systems</a>
            <a href="#" class="col-lg-4 col-md-12 col-sm-12  submenu-item text-center text-light" data-target="tab11">Portfolio Management Software</a>
        </div>
        <div class="mt-5 row justify-content-between align-items-start tab-content my-3" id="tab1">
            <div class="col-lg-6 col-md-5 col-sm-12">
                <p class="text-light services-container-inner-content">Our advanced trading platforms provide a secure, user-friendly environment for executing trades in real-time with high-speed connectivity.</p>
                <ul>
                    <li class="text-light services-container-inner-content">Fast order execution for optimal trade timing.</li>
                    <li class="text-light services-container-inner-content">Customizable interface for a personalized user experience.</li>
                    <li class="text-light services-container-inner-content">Secure, encrypted data handling for safe transactions.</li>
                    <li class="text-light services-container-inner-content">Scalability to accommodate growing business needs.</li>
                </ul>

                <a href="contact.php" class="mt-3 tab-content-btn btn text-light">
                    LEARN MORE
                </a>
            </div>
            <img class="col-lg-5 col-md-5 col-12 tab-content-images my-3" style="height:243px; object-fit:cover;" src="images/smartphone-with-financial-graphs-screen.jpg">
        </div>
        <div class="mt-5 row justify-content-between align-items-start tab-content my-3" id="tab2">
            <div class="col-lg-6 col-md-5 col-sm-12">
                <p class="text-light services-container-inner-content">Enhance customer relationships with a CRM system designed specifically for the E-trading sector.</p>
                <ul>
                    <li class="text-light services-container-inner-content">Centralized customer data for personalized engagement.</li>
                    <li class="text-light services-container-inner-content">Advanced segmentation for targeted campaigns.</li>
                    <li class="text-light services-container-inner-content">Automated follow-ups and reminders to boost retention.</li>
                    <li class="text-light services-container-inner-content">Analytics to track customer behavior and improve service.</li>
                </ul>

                <a href="contact.php" class="mt-3 tab-content-btn btn text-light">
                    LEARN MORE
                </a>
            </div>
            <img class="col-lg-5 col-md-5 col-12 tab-content-images my-3" style="height:243px; object-fit:cover;" src="images/customer-relationship-management-concept.jpg">
        </div>

        <div class="mt-5 row justify-content-between align-items-start tab-content my-3" id="tab3">
            <div class="col-lg-6 col-md-5 col-sm-12">
                <p class="text-light services-container-inner-content">Our account management software offers secure, efficient control over multiple user accounts.</p>
                <ul>
                    <li class="text-light services-container-inner-content">Easy account registration, verification, and management.</li>
                    <li class="text-light services-container-inner-content">Real-time updates on account balances and activity.</li>
                    <li class="text-light services-container-inner-content">Secure authentication methods for user protection.</li>
                    <li class="text-light services-container-inner-content">Scalable features to handle growing account volumes.</li>
                </ul>

                <a href="contact.php" class="mt-3 tab-content-btn btn text-light">
                    LEARN MORE
                </a>
            </div>
            <img class="col-lg-5 col-md-5 col-12 tab-content-images my-3" style="height:243px; object-fit:cover;" src="images/man-looking-bill-energy-crisis.jpg">
        </div>

        <div class="mt-5 row justify-content-between align-items-start tab-content my-3" id="tab4">
            <div class="col-lg-6 col-md-5 col-sm-12">
                <p class="text-light services-container-inner-content">Leverage AI-powered bots to automate and optimize trading strategies based on real-time market data.
                </p>
                <ul>
                    <li class="text-light services-container-inner-content">Adaptive algorithms that evolve with market conditions.</li>
                    <li class="text-light services-container-inner-content">Round-the-clock trading without human intervention.</li>
                    <li class="text-light services-container-inner-content">Enhanced trading accuracy and efficiency.</li>
                    <li class="text-light services-container-inner-content">Customizable bot settings for tailored strategies.</li>
                </ul>

                <a href="contact.php" class="mt-3 tab-content-btn btn text-light">
                    LEARN MORE
                </a>
            </div>
            <img class="col-lg-5 col-md-5 col-12 tab-content-images my-3" style="height:243px; object-fit:cover;" src="images/digital-silhouette-human-head-with-world-map-stock-market-data-overlay-dark-blue-background-concept-global-finance-3d-rendering.jpg">
        </div>

        <div class="mt-5 row justify-content-between align-items-start tab-content my-3" id="tab5">
            <div class="col-lg-6 col-md-5 col-sm-12">
                <p class="text-light services-container-inner-content">Our affiliate management system helps businesses efficiently track and grow affiliate partnerships.</p>
                <ul>
                    <li class="text-light services-container-inner-content">Real-time tracking of affiliate performance.</li>
                    <li class="text-light services-container-inner-content">Automated commission calculations and payments.</li>
                    <li class="text-light services-container-inner-content">Integration with various marketing platforms.</li>
                    <li class="text-light services-container-inner-content">Customizable referral programs to maximize affiliate engagement.</li>
                </ul>

                <a href="contact.php" class="mt-3 tab-content-btn btn text-light">
                    LEARN MORE
                </a>
            </div>
            <img class="col-lg-5 col-md-5 col-12 tab-content-images my-3" style="height:243px; object-fit:cover;" src="images/picforweb.jpg">
        </div>

        <div class="mt-5 row justify-content-between align-items-start tab-content my-3" id="tab6">
            <div class="col-lg-6 col-md-5 col-sm-12">
                <p class="text-light services-container-inner-content">Integrate seamlessly with third-party services using tailor-made APIs designed for your specific needs.
                </p>
                <ul>
                    <li class="text-light services-container-inner-content">Effortless integration with external platforms and services. </li>
                    <li class="text-light services-container-inner-content">Scalable solutions to accommodate business growth.</li>
                    <li class="text-light services-container-inner-content">Unique link-building strategies with 20,000+ website connections.</li>
                    <li class="text-light services-container-inner-content">Enhanced data exchange and operational flexibility.</li>
                    <li class="text-light services-container-inner-content">Secure connections ensure data integrity.</li>
                </ul>

                <a href="contact.php" class="mt-3 tab-content-btn btn text-light">
                    LEARN MORE
                </a>
            </div>
            <img class="col-lg-5 col-md-5 col-12 tab-content-images my-3" style="height:243px; object-fit:cover;" src="images/25561273_7043725 edit.jpg">
        </div>

        <div class="mt-5 row justify-content-between align-items-start tab-content my-3" id="tab7">
            <div class="col-lg-6 col-md-5 col-sm-12">
                <p class="text-light services-container-inner-content">
                    Automate key trading processes to reduce manual effort and improve operational efficiency.
                </p>
                <ul>
                    <li class="text-light services-container-inner-content">Streamlined order execution, risk management, and compliance.</li>
                    <li class="text-light services-container-inner-content">Increased speed and accuracy in trading operations.</li>
                    <li class="text-light services-container-inner-content">Reduced human error and operational costs.</li>
                    <li class="text-light services-container-inner-content">Scalable automation for large-scale trading operations.</li>
                </ul>
                <a href="contact.php" class="mt-3 tab-content-btn btn text-light">
                    LEARN MORE
                </a>
            </div>
            <img class="col-lg-5 col-md-5 col-12 tab-content-images my-3" style="height:243px; object-fit:cover;" src="images/3d-rendering-industry-40-concept.jpg">
        </div>

        <div class="mt-5 row justify-content-between align-items-start tab-content my-3" id="tab8">
            <div class="col-lg-6 col-md-5 col-sm-12">
                <p class="text-light services-container-inner-content">Unlock valuable insights with real-time analytics tools to drive informed trading decisions.</p>
                <ul>
                    <li class="text-light services-container-inner-content">In-depth market analysis and performance tracking.</li>
                    <li class="text-light services-container-inner-content">Predictive analytics to forecast market trends.</li>
                    <li class="text-light services-container-inner-content">Real-time data processing for faster decision-making.</li>
                    <li class="text-light services-container-inner-content">Customizable dashboards for key performance metrics.</li>
                </ul>

                <a href="contact.php" class="mt-3 tab-content-btn btn text-light">
                    LEARN MORE
                </a>
            </div>
            <img class="col-lg-5 col-md-5 col-12 tab-content-images my-3" style="height:243px; object-fit:cover;" src="images/3d-rendering-computer-notebook-with-graphic-office.jpg">
        </div>

        <div class="mt-5 row justify-content-between align-items-start tab-content my-3" id="tab9">
            <div class="col-lg-6 col-md-5 col-sm-12">
                <p class="text-light services-container-inner-content">Utilize powerful market research tools to stay ahead of market trends and make data-driven decisions.</p>
                <ul>
                    <li class="text-light services-container-inner-content">Access to comprehensive market data and historical trends.</li>
                    <li class="text-light services-container-inner-content">Competitive analysis to inform trading strategies.</li>
                    <li class="text-light services-container-inner-content">Predictive tools to identify market shifts and opportunities.</li>
                    <li class="text-light services-container-inner-content">Data visualizations for better insights and decision-making.</li>
                </ul>

                <a href="contact.php" class="mt-3 tab-content-btn btn text-light">
                    LEARN MORE
                </a>
            </div>
            <img class="col-lg-5 col-md-5 col-12 tab-content-images my-3" style="height:243px; object-fit:cover;" src="images/big-data-technology-business-finance-conceptual.jpg">
        </div>

        <div class="mt-5 row justify-content-between align-items-start tab-content my-3" id="tab10">
            <div class="col-lg-6 col-md-5 col-sm-12">
                <p class="text-light services-container-inner-content">Ensure efficient trading operations with advanced liquidity management systems.</p>
                <ul>
                    <li class="text-light services-container-inner-content">Real-time liquidity monitoring for better asset management.</li>
                    <li class="text-light services-container-inner-content">Optimization of liquidity to meet market demand.</li>
                    <li class="text-light services-container-inner-content">Minimized slippage and transaction costs.</li>
                    <li class="text-light services-container-inner-content">Scalable solutions for high-volume trading environments.</li>
                </ul>

                <a href="contact.php" class="mt-3 tab-content-btn btn text-light">
                    LEARN MORE
                </a>
            </div>
            <img class="col-lg-5 col-md-5 col-12 tab-content-images my-3" style="height:243px; object-fit:cover;" src="images/graphic-symbolizing-concept-cost-control.jpg">
        </div>

        <div class="mt-5 row justify-content-between align-items-start tab-content my-3" id="tab11">
            <div class="col-lg-6 col-md-5 col-sm-12">
                <p class="text-light services-container-inner-content">Manage multiple trading accounts and assets with ease using our portfolio management software.</p>
                <ul>
                    <li class="text-light services-container-inner-content">Real-time tracking and performance analysis of assets.</li>
                    <li class="text-light services-container-inner-content">Diversified portfolio management for reduced risk.</li>
                    <li class="text-light services-container-inner-content">Customizable reporting and analytics for investors.</li>
                    <li class="text-light services-container-inner-content">Integration with trading platforms for seamless management.</li>
                </ul>

                <a href="contact.php" class="mt-3 tab-content-btn btn text-light">
                    LEARN MORE
                </a>
            </div>
            <img class="col-lg-5 col-md-5 col-12 tab-content-images my-3" style="height:243px; object-fit:cover;" src="images/representation-user-experience-interface-design.jpg">
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