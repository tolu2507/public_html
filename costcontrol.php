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
        margin-top: -1vh !important;
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


<section class="top-home-page m-0" style="padding-bottom:90px;padding-top:90px">
    <img class="top-section-logo-img" src="images/infinity-logo.png" alt="logo">
    <div id="particles-js"></div>
    <div class="position-relative">
        <div class="container home-container-height d-flex flex-wrap justify-content-between">

            <div class="text-start text-under-main-heading-changing  col-lg-6 col-md-6 col-sm-12" style="z-index: 1; top:50px; position:relative;">

                <h1 class="text-light margin-top-cost mb-0 main-section-heading " style="z-index: 1;">Cost Control &<br><span class="green-color w-100-span">Risk Management</span>
                </h1>
                <p class="text-light mt-3 text-under-main-heading">Maximizing efficiency while minimizing risk with tailored cost control and comprehensive risk management solutions.
                </p>
            </div>

            <img src="images/hand.png" class="text-start col-lg-6 col-md-6 col-12" >
        </div>
    </div>
</section>

<section class="services-second-main-content pt-5">
<div class="bottom-gradient"></div>
    <div class="container services-border">
        <p class="trading-heading">Cost Control & Risk Management</p>
        <p class="trading-heading-inner text-light mb-4">
            Maximizing efficiency while minimizing risk with tailored cost control and comprehensive risk management solutions.
        </p>

        <div class="row">
            <a href="#" class="col-lg-3 text-center col-md-4 col-sm-4 menu-item active text-light" data-target="tab1">Real-Time Risk Assessment</a>
            <a href="#" class="col-lg-3 text-center col-md-4 col-sm-4 menu-item text-light" data-target="tab2">Cost Optimization Strategies</a>
            <a href="#" class="col-lg-3 text-center col-md-4 col-sm-4 menu-item text-light" data-target="tab3"> Predictive Analytics</a>
            <a href="#" class="col-lg-3 text-center col-md-6 col-sm-12 menu-item text-light" data-target="tab4">Risk Management Platforms</a>
            <a href="#" class="col-lg-12 col-md-6 col-sm-12 submenu-item text-center text-light" data-target="tab5">Compliance Monitoring Systems</a>
        </div>

        <div class="mt-5 row justify-content-between align-items-start tab-content my-3" id="tab1">
            <div class="col-lg-5 col-md-5 col-sm-12" >
                <p class="text-light services-container-inner-content">Our Real-Time Risk Assessment tool helps you instantly identify and manage risks, enabling better decision-making in dynamic markets.</p>
                <ul>
                    <li class="text-light services-container-inner-content">Immediate risk identification and evaluation.</li>
                    <li class="text-light services-container-inner-content">Real-time data analysis for faster decision-making.</li>
                    <li class="text-light services-container-inner-content">Integration with trading systems for automated alerts.</li>
                    <li class="text-light services-container-inner-content">Enhanced risk mitigation strategies to protect investments.</li>
                </ul>

                <a href="contact.php" class="mt-3 tab-content-btn btn text-light">
                    LEARN MORE
                </a>
            </div>
            <img class="col-lg-6 col-md-5 col-12 tab-content-images my-3" style="height:243px; object-fit:cover;" src="images/risk-management-businessman-touching-virtual-risk-level-indicator-from-low-high-financial-business-analysis-financial-risk-assessment-project-risk-mitigation-investment-strategy edit.jpg">
        </div>

        <div class="mt-5 row justify-content-between align-items-start tab-content my-3" id="tab2">
            <div class="col-lg-5 col-md-5 col-sm-12" >
                <p class="text-light services-container-inner-content">Our Cost Optimization Strategies focus on minimizing operational expenses while maximizing trading efficiency and profitability.</p>
                <ul>
                    <li class="text-light services-container-inner-content">Tailored strategies to reduce operational and trading costs.</li>
                    <li class="text-light services-container-inner-content">Performance-driven cost reduction initiatives.</li>
                    <li class="text-light services-container-inner-content">Analytics to identify cost-saving opportunities.</li>
                    <li class="text-light services-container-inner-content">Scalable solutions to accommodate business growth.</li>
                </ul>

                <a href="contact.php" class="mt-3 tab-content-btn btn text-light">
                    LEARN MORE
                </a>
            </div>
            <img class="col-lg-6 col-md-5 col-12 tab-content-images my-3" style="height:243px; object-fit:cover;" src="images/marketer-using-pen-pointing-graph-showing-seo-concept-optimization-analysis-tools-search-engi.jpg">
        </div>

        <div class="mt-5 row justify-content-between align-items-start tab-content my-3" id="tab3">
            <div class="col-lg-5 col-md-5 col-12" >
                <p class="text-light services-container-inner-content">Predictive Analytics uses historical data and advanced algorithms to forecast market trends and enhance trading strategies.</p>
                <ul>
                    <li class="text-light services-container-inner-content">Anticipate market movements with data-driven insights.</li>
                    <li class="text-light services-container-inner-content">Improve decision-making with predictive modeling.</li>
                    <li class="text-light services-container-inner-content">Real-time trend analysis to stay ahead of the market.</li>
                    <li class="text-light services-container-inner-content">Tailored predictions based on specific trading needs.</li>
                </ul>

                <a href="contact.php" class="mt-3 tab-content-btn btn text-light">
                    LEARN MORE
                </a>
            </div>
            <img class="col-lg-6 col-md-5 col-12 tab-content-images my-3" style="height:243px; object-fit:cover;" src="images/creative-glowing-dark-digital-business-interface-with-various-icons-background-diagnistics-activation-tech-data-anlysis-concept-3d-rendering.jpg">
        </div>

        <div class="mt-5 row justify-content-between align-items-start tab-content my-3" id="tab4">
            <div class="col-lg-5 col-md-5 col-sm-12" >
                <p class="text-light services-container-inner-content">Our Risk Management Platforms empower your trading business to detect, assess, and mitigate risks in real time, ensuring secure and effective trading operations.
                </p>
                <ul>
                    <li class="text-light services-container-inner-content">Real-time risk identification and monitoring.</li>
                    <li class="text-light services-container-inner-content">Automated alerts to prevent potential threats.</li>
                    <li class="text-light services-container-inner-content">Scalable solutions for businesses of all sizes.</li>
                    <li class="text-light services-container-inner-content">In-depth analytics to evaluate risk exposure and protect investments.</li>
                </ul>

                <a href="contact.php" class="mt-3 tab-content-btn btn text-light">
                    LEARN MORE
                </a>
            </div>
            <img class="col-lg-6 col-md-5 col-12 tab-content-images my-3" style="height:243px; object-fit:cover;" src="images/high-risk-business-decision-making-risk-analysis-measuring-level-bar-virtual-risky-business-risk-management-control-strategy.jpg">
        </div>

        <div class="mt-5 row justify-content-between align-items-start tab-content my-3" id="tab5">
            <div class="col-lg-5 col-md-5 col-sm-12" >
                <p class="text-light services-container-inner-content">Our Compliance Monitoring Systems ensure that your trading business consistently meets regulatory requirements, mitigating legal risks and enhancing trust.</p>
                <ul>
                    <li class="text-light services-container-inner-content">Continuous monitoring of regulatory standards and policies.</li>
                    <li class="text-light services-container-inner-content">Automated reporting to ensure compliance.</li>
                    <li class="text-light services-container-inner-content">Alerts for potential compliance breaches.</li>
                    <li class="text-light services-container-inner-content">Integration with trading platforms for seamless compliance management.</li>
                </ul>

                <a href="contact.php" class="mt-3 tab-content-btn btn text-light">
                    LEARN MORE
                </a>
            </div>
            <img class="col-lg-6 col-md-5 col-12 tab-content-images my-3" style="height:243px; object-fit:cover;" src="images/78597371_HUD-Circle-8p_Back-hand-Reg-Tech.jpg">
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