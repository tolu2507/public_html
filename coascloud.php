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
        margin-top: -37vh !important;
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
            margin-top: -25vh !important;
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
            margin-top: -15vh !important;
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
            margin-top: -10vh !important;
        }

        .bottom-gradient {
            height: 35% !important;
        }
    }
</style>

<section class="top-home-page m-0">
    <img class="top-section-logo-img" src="images/infinity-logo.png" alt="logo">
    <div id="particles-js"></div>
    <div class="position-relative">
        <div class="container home-container-height d-flex make-it-flex-wrap-on-mobile align-items-center justify-content-between">
            <div class="text-start text-under-main-heading-changing  col-lg-7 col-md-6 col-sm-12" style="z-index: 1;">
                <h1 class="text-light margin-top-cost mb-0 main-section-heading " style="z-index: 1;">CoasCloud Services<br><span class="green-color w-100-span">& Data Center
                </h1>
                <p class="text-light mt-3 text-under-main-heading">Powering your business with secure, scalable cloud solutions and reliable data center infrastructure.
                </p>
            </div>
            <img src="images/cloud.png" class="cost-image-absolute text-start col-lg-6 col-md-6 col-sm-12">
        </div>
    </div>
</section>

<section class="services-second-main-content pt-5">
    <div class="bottom-gradient"></div>
    <div class="container services-border">
        <p class="trading-heading">CoasCloud Services & Data Center</p>
        <p class="trading-heading-inner text-light mb-4">
            Powering your business with secure, scalable cloud solutions and reliable data center infrastructure.
        </p>

        <div class="row">
            <a href="#" class="col-lg-3 text-center col-md-6 col-sm-12 menu-item active text-light" data-target="tab1">Scalable Cloud Infrastructure</a>
            <a href="#" class="col-lg-3 text-center col-md-6 col-sm-12 menu-item text-light" data-target="tab2">High-Level Data Security</a>
            <a href="#" class="col-lg-3 text-center col-md-6 col-sm-12 menu-item text-light" data-target="tab3">Disaster Recovery</a>
            <a href="#" class="col-lg-3 text-center col-md-6 col-sm-12  menu-item text-light" data-target="tab4">24/7 Support</a>
        </div>

        <div class="mt-5 row justify-content-between align-items-start tab-content my-3" id="tab1">
            <div class="col-lg-7 col-md-7 col-sm-12" style="width:600px;">
                <p class="text-light services-container-inner-content">Easily scale your infrastructure to meet changing business demands with secure, flexible, and cost-effective cloud solutions.</p>
                <ul>
                    <li class="text-light services-container-inner-content">On-demand scalability to handle traffic spikes.</li>
                    <li class="text-light services-container-inner-content">Cost-efficient with pay-as-you-go pricing models.</li>
                    <li class="text-light services-container-inner-content">Secure cloud environment with advanced encryption.</li>
                    <li class="text-light services-container-inner-content">Seamless integration with existing IT systems.</li>
                </ul>

                <a href="" class="mt-3 tab-content-btn btn text-light">
                    LEARN MORE
                </a>
            </div>
            <img class="col-lg-4 col-md-5 col-sm-12 tab-content-images my-3" style="height:243px;" src="images/cloud-computing-technology-online-data-storage-business-network-concept.jpg">
        </div>

        <div class="mt-5 row justify-content-between align-items-start tab-content my-3" id="tab2">
            <div class="col-lg-7 col-md-7 col-sm-12" style="width:600px;">
                <p class="text-light services-container-inner-content">Protect your sensitive data with advanced security measures to ensure privacy and compliance across all platforms.</p>
                <ul>
                    <li class="text-light services-container-inner-content">Encryption and secure access controls.</li>
                    <li class="text-light services-container-inner-content">Multi-layered defense against data breaches.</li>
                    <li class="text-light services-container-inner-content">Compliance with industry standards and regulations.</li>
                    <li class="text-light services-container-inner-content">Regular security audits to ensure data integrity.</li>
                </ul>

                <a href="" class="mt-3 tab-content-btn btn text-light">
                    LEARN MORE
                </a>
            </div>
            <img class="col-lg-4 col-md-5 col-sm-12 tab-content-images my-3" style="height:243px;" src="images/cyber-security-concept-digital-art edit.jpg">
        </div>

        <div class="mt-5 row justify-content-between align-items-start tab-content my-3" id="tab3">
            <div class="col-lg-7 col-md-7 col-sm-12" style="width:600px;">
                <p class="text-light services-container-inner-content">Ensure business continuity with reliable disaster recovery solutions that protect your data from unforeseen events.</p>
                <ul>
                    <li class="text-light services-container-inner-content">Quick data restoration after disruptions.</li>
                    <li class="text-light services-container-inner-content">Secure backup and redundancy for critical systems.</li>
                    <li class="text-light services-container-inner-content">Seamless failover to minimize downtime.</li>
                    <li class="text-light services-container-inner-content">Customizable recovery plans based on your business needs.</li>
                </ul>

                <a href="" class="mt-3 tab-content-btn btn text-light">
                    LEARN MORE
                </a>
            </div>
            <img class="col-lg-4 col-md-5 col-sm-12 tab-content-images my-3" style="height:243px;" src="images/disaster-recovery-backup-your-business-project-2020.jpg">
        </div>

        <div class="mt-5 row justify-content-between align-items-start tab-content my-3" id="tab4">
            <div class="col-lg-7 col-md-7 col-sm-12" style="width:600px;">
                <p class="text-light services-container-inner-content">Access around-the-clock expert support to resolve issues and ensure smooth operations for your business.
                </p>
                <ul>
                    <li class="text-light services-container-inner-content">24/7 monitoring and immediate troubleshooting.</li>
                    <li class="text-light services-container-inner-content">Fast response times to minimize disruptions.</li>
                    <li class="text-light services-container-inner-content">Access to a dedicated support team for personalized assistance.</li>
                    <li class="text-light services-container-inner-content">Proactive issue resolution to prevent future downtime.</li>
                </ul>

                <a href="" class="mt-3 tab-content-btn btn text-light">
                    LEARN MORE
                </a>
            </div>
            <img class="col-lg-4 col-md-5 col-sm-12 tab-content-images my-3" style="height:243px;" src="images/174524403_67115f3a-33bc-44d6-9f9b-13c32bb4c737.jpg">
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