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
            "value": "#008B8B" // Color of the particles
        },
        "shape": {
            "type": "circle", // Shape of the particles
            "stroke": {
                "width": 0,
                "color": "#000000"
            },
        },
        "opacity": {
            "value": 0.2, 
            "random": false
        },
        "size": {
            "value": 8, // Size of the particles
            "random": true
        },
        "line_linked": {
            "enable": true,
            "distance": 150, // Distance between connected particles
            "color": "#008B8B ",
            "opacity": 0.1,
            "width": 1
        },
        "move": {
            "enable": true,
            "speed": 0.01, // Speed of particle movement
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
                "enable": false,
                "mode": "grab" // Interaction mode when hovered
            },
            "onclick": {
                "enable": false,
                "mode": "push" // Interaction mode when clicked
            },
            "resize": true
        },
        "modes": {
            "grab": {
                "distance": 200,
                "line_linked": {
                    "opacity": 0.4
                }
            },
            "push": {
                "particles_nb": 4 // Number of particles added on click
            }
        }
    },
    "retina_detect": true
});