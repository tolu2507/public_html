// $(document).ready(function() {
//     // Swiper: Slider
//         new Swiper('.swiper-container', {
//             loop: true,
//             nextButton: '.swiper-button-next',
//             prevButton: '.swiper-button-prev',
//             centeredSlides: true,
//             slidesPerView: 5,
//             paginationClickable: true,
//             spaceBetween: 20,
//             breakpoints: {

//               1920: {
//                     slidesPerView: 4,
//                     spaceBetween: 30
//                 },
//                 1028: {
//                     slidesPerView: 2,
//                     spaceBetween: 30
//                 },
//                 480: {
//                     slidesPerView: 1,
//                     spaceBetween: 30
//                 }
//             }
//         });
//     });

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
        tab.addEventListener('click', function (event) {
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
particlesJS('particles-js', {
    "particles": {
        "number": {
            "value": 70, // Number of particles
            "density": {
                "enable": true,
                "value_area": 800 // Density of particles in a given area
            }
        },
        "color": {
            "value": "#ffffff" // Color of the particles
        },
        "shape": {
            "type": "circle", // Shape of the particles
            "stroke": {
                "width": 0,
                "color": "#000000"
            },
        },
        "opacity": {
            "value": 0.5,
            "random": false
        },
        "size": {
            "value": 8, // Size of the particles
            "random": true
        },
        "line_linked": {
            "enable": true,
            "distance": 150, // Distance between connected particles
            "color": "#ffffff",
            "opacity": 0.4,
            "width": 1
        },
        "move": {
            "enable": true,
            "speed": 10, // Speed of particle movement
            "direction": "none",
            "random": false,
            "straight": false,
            "out_mode": "out",
            "bounce": false
        }
    },
    "interactivity": {
        "detect_on": "canvas",
        "events": {
            "onhover": {
                "enable": true,
                "mode": "grab" // Interaction mode when hovered
            },
            "onclick": {
                "enable": true,
                "mode": "push" // Interaction mode when clicked
            },
            "resize": true
        },
        "modes": {
            "grab": {
                "distance": 200,
                "line_linked": {
                    "opacity": 1
                }
            },
            "push": {
                "particles_nb": 4 // Number of particles added on click
            }
        }
    },
    "retina_detect": true
});



























// $(document).ready(function () {
//     var swiper = new Swiper('.swiper-container', {
//         loop: true,
//         slidesPerView: 5,
//         spaceBetween: 20,
//         speed: 800,
//         grabCursor: true,
//         autoplay: {
//             delay: 1000, // ✅ Auto-scroll every 1 sec
//             disableOnInteraction: false, // ✅ User hover par bhi stop nahi hoga
//         },
//         breakpoints: {
//             1920: { slidesPerView: 4, spaceBetween: 30, centeredSlides: true },
//             1028: { slidesPerView: 2, spaceBetween: 30, centeredSlides: true },
//             480: { slidesPerView: 1, spaceBetween: 30, centeredSlides: false }
//         }
//     });

//     let lastMouseX = 0, lastMouseY = 0;

//     // ✅ Function to check cursor under slide and highlight it
//     function updateHoverEffect() {
//         let slides = document.querySelectorAll(".swiper-slide");
//         let hoveredSlide = null;

//         slides.forEach(slide => {
//             let rect = slide.getBoundingClientRect();

//             // ✅ Exact cursor ke neeche wala slide detect karega
//             if (
//                 lastMouseX >= rect.left &&
//                 lastMouseX <= rect.right &&
//                 lastMouseY >= rect.top &&
//                 lastMouseY <= rect.bottom
//             ) {
//                 hoveredSlide = slide;
//             }
//         });

//         // 🔴 Remove hover effect from all slides
//         slides.forEach(slide => slide.classList.remove("hovered"));

//         // 🟢 Apply hover effect to the detected slide
//         if (hoveredSlide) {
//             hoveredSlide.classList.add("hovered");
//         }
//     }

//     // ✅ Mouse move event listener (update hover effect)
//     document.addEventListener("mousemove", function (event) {
//         lastMouseX = event.clientX;
//         lastMouseY = event.clientY;
//         updateHoverEffect();
//     });

//     // ✅ Jab slide auto-scroll ya manual slide ho, tab bhi hover update ho
//     swiper.on('slideChangeTransitionEnd', function () {
//         updateHoverEffect();
//     });

//     // ✅ Auto-scroll hone ke turant baad hover update kare
//     setInterval(() => {
//         updateHoverEffect();
//     }, 100); // ✅ Every 100ms check karega
// });








// $(document).ready(function () {
//     var swiper = new Swiper('.swiper-container', {
//         loop: true,
//         slidesPerView: 5,
//         spaceBetween: 20,
//         speed: 1200,
//         grabCursor: true,
//         autoplay: false,
//         breakpoints: {
//             1920: { slidesPerView: 4, spaceBetween: 30, centeredSlides: true },
//             1028: { slidesPerView: 2, spaceBetween: 30, centeredSlides: true },
//             480: { slidesPerView: 1, spaceBetween: 30, centeredSlides: false }
//         }
//     });

//     let autoScroll = null;
//     let lastMouseX = 0, lastMouseY = 0;

//     function updateHoverEffect() {
//         let slides = document.querySelectorAll(".swiper-slide");
//         let hoveredSlide = null;

//         slides.forEach(slide => {
//             let rect = slide.getBoundingClientRect();
//             if (
//                 lastMouseX >= rect.left &&
//                 lastMouseX <= rect.right &&
//                 lastMouseY >= rect.top &&
//                 lastMouseY <= rect.bottom
//             ) {
//                 hoveredSlide = slide;
//             }
//         });

//         slides.forEach(slide => {
//             slide.classList.remove("hovered");
//             slide.style.pointerEvents = "none";
//         });

//         if (hoveredSlide) {
//             hoveredSlide.classList.add("hovered");
//             hoveredSlide.style.pointerEvents = "auto";
//         }
//     }

//     document.addEventListener("mousemove", function (event) {
//         lastMouseX = event.clientX;
//         lastMouseY = event.clientY;
//         updateHoverEffect();
//     });

//     $(".hover-area.left").on("mouseenter", function () {
//         autoScroll = setInterval(function () {
//             swiper.slidePrev();
//             setTimeout(updateHoverEffect, 50);
//         }, 1500);
//     }).on("mouseleave", function () {
//         clearInterval(autoScroll);
//     });

//     $(".hover-area.right").on("mouseenter", function () {
//         autoScroll = setInterval(function () {
//             swiper.slideNext();
//             setTimeout(updateHoverEffect, 50);
//         }, 1500);
//     }).on("mouseleave", function () {
//         clearInterval(autoScroll);
//     });

//     swiper.on('slideChangeTransitionEnd', function () {
//         setTimeout(updateHoverEffect, 50);
//     });

//     $(".swiper-slide").removeClass("hovered");

//     function detectHoveredSlide() {
//         let slides = document.querySelectorAll(".swiper-slide");
//         let hoveredSlide = null;

//         slides.forEach(slide => {
//             let rect = slide.getBoundingClientRect();

//             if (
//                 lastMouseX >= rect.left &&
//                 lastMouseX <= rect.right &&
//                 lastMouseY >= rect.top &&
//                 lastMouseY <= rect.bottom
//             ) {
//                 hoveredSlide = slide;
//             }
//         });

//         slides.forEach(slide => slide.classList.remove("hovered"));

//         if (hoveredSlide) {
//             hoveredSlide.classList.add("hovered");
//         }

//         requestAnimationFrame(detectHoveredSlide);
//     }

//     requestAnimationFrame(detectHoveredSlide);
// });



// // document.querySelectorAll(".hover-area").forEach(area => {
// //     function updateHoverEffect(clientX, clientY) {
// //         let slides = document.querySelectorAll(".swiper-slide");
// //         let hoveredSlide = null;

// //         for (let slide of slides) {
// //             let slideRect = slide.getBoundingClientRect();

// //             if (
// //                 clientX >= slideRect.left &&
// //                 clientX <= slideRect.right &&
// //                 clientY >= slideRect.top &&
// //                 clientY <= slideRect.bottom
// //             ) {
// //                 hoveredSlide = slide;
// //                 break; // Stop as soon as one slide is found
// //             }
// //         }

// //         // Remove hover effect from all slides
// //         slides.forEach(slide => slide.classList.remove("hover-effect"));

// //         // Apply hover effect only to the detected slide
// //         if (hoveredSlide) {
// //             hoveredSlide.classList.add("hover-effect");
// //         }
// //     }

// //     area.addEventListener("mouseenter", (event) => updateHoverEffect(event.clientX, event.clientY));
// //     area.addEventListener("mousemove", (event) => updateHoverEffect(event.clientX, event.clientY));
// //     area.addEventListener("mouseleave", () => {
// //         document.querySelectorAll(".swiper-slide").forEach(slide => {
// //             slide.classList.remove("hover-effect");
// //         });
// //     });

// //     // ✅ TRIGGER FAKE MOVEMENT AFTER SLIDE CHANGE (Instant Update)
// //     let swiperWrapper = document.querySelector(".swiper-wrapper");

// //     let observer = new MutationObserver(() => {
// //         let rect = area.getBoundingClientRect();

// //         // Get current mouse position relative to hover-area
// //         let fakeEvent = new MouseEvent("mousemove", {
// //             clientX: rect.left + rect.width / 2,  // Center of hover-area
// //             clientY: rect.top + rect.height / 2   // Center of hover-area
// //         });

// //         area.dispatchEvent(fakeEvent);
// //     });

// //     observer.observe(swiperWrapper, { childList: true, subtree: true });
// // });







$(document).ready(function () {
    console.log("✅ DOM fully loaded!");

    var swiper = new Swiper('.swiper-container', {
        loop: true,
        slidesPerView: 5,
        spaceBetween: 20,
        speed: 1200,
        grabCursor: true,
        loopAdditionalSlides: 20,
        autoplay: false,
        breakpoints: {
            1920: { slidesPerView: 4, spaceBetween: 30, centeredSlides: true },
            1028: { slidesPerView: 2, spaceBetween: 30, centeredSlides: true },
            480: { slidesPerView: 1, spaceBetween: 30, centeredSlides: false }
        }
    });

    let autoScroll = null;
    let lastMouseX = 0, lastMouseY = 0;

    function updateHoverEffect() {
        let slides = document.querySelectorAll(".swiper-slide");
        let hoveredSlide = null;

        slides.forEach(slide => {
            let rect = slide.getBoundingClientRect();
            if (
                lastMouseX >= rect.left &&
                lastMouseX <= rect.right &&
                lastMouseY >= rect.top &&
                lastMouseY <= rect.bottom
            ) {
                hoveredSlide = slide;
            }
        });

        slides.forEach(slide => slide.classList.remove("hovered"));
        
        if (hoveredSlide) {
            hoveredSlide.classList.add("hovered");
        }
    }

    $(document).on("mousemove", function (event) {
        lastMouseX = event.clientX;
        lastMouseY = event.clientY;
        updateHoverEffect();
    });

    $(".hover-area.left").on("mouseenter", function () {
        autoScroll = setInterval(function () {
            swiper.slidePrev();
            setTimeout(updateHoverEffect, 50);
        }, 2000);
    }).on("mouseleave", function () {
        clearInterval(autoScroll);
    });

    $(".hover-area.right").on("mouseenter", function () {
        autoScroll = setInterval(function () {
            swiper.slideNext();
            setTimeout(updateHoverEffect, 50);
        }, 2000);
    }).on("mouseleave", function () {
        clearInterval(autoScroll);
    });

    swiper.on('slideChangeTransitionEnd', function () {
        setTimeout(updateHoverEffect, 50);
    });

    $(".swiper-slide").removeClass("hovered");

    function detectHoveredSlide() {
        let slides = document.querySelectorAll(".swiper-slide");
        let hoveredSlide = null;

        slides.forEach(slide => {
            let rect = slide.getBoundingClientRect();
            if (
                lastMouseX >= rect.left &&
                lastMouseX <= rect.right &&
                lastMouseY >= rect.top &&
                lastMouseY <= rect.bottom
            ) {
                hoveredSlide = slide;
            }
        });

        slides.forEach(slide => slide.classList.remove("hovered"));
        
        if (hoveredSlide) {
            hoveredSlide.classList.add("hovered");
        }

        requestAnimationFrame(detectHoveredSlide);
    }

    requestAnimationFrame(detectHoveredSlide);
});