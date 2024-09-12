document.addEventListener('DOMContentLoaded', () => {
    // Function to add fade-in and slide-in animations to elements
    const addAnimationClasses = () => {
        const elementsToAnimate = document.querySelectorAll('.animate-fade, .animate-slide');
        
        elementsToAnimate.forEach(element => {
            // Check if the element is in the viewport
            if (window.scrollY + window.innerHeight > element.offsetTop) {
                element.classList.add('animate-fade');
                // For slide-in, you can add 'animate-slide' as well if needed 
                if (element.classList.contains('animate-slide')) {
                    element.classList.add('animate-slide');
                }
            }
        });
    };

    // Add animations on page load
    addAnimationClasses();
    
    // Add animations on scroll
    window.addEventListener('scroll', addAnimationClasses);
});

/* Animation for image home */

document.addEventListener('DOMContentLoaded', () => {
    // Slideshow logic
    let slideIndex = 0;
    const slides = document.querySelectorAll('.slide');

    const showSlides = () => {
        // Hide all slides
        slides.forEach(slide => {
            slide.style.display = 'none';
        });

        // Increment slide index
        slideIndex++;
        if (slideIndex > slides.length) { slideIndex = 1; }

        // Show the current slide
        slides[slideIndex - 1].style.display = 'block';

        // Change slide every 4 seconds
        setTimeout(showSlides, 4000);
    };

    // Initialize slideshow
    showSlides();

    // Existing animation functions (from the previous code)
    const addAnimationClasses = () => {
        const elementsToAnimate = document.querySelectorAll('.animate-fade, .animate-slide');
        
        elementsToAnimate.forEach(element => {
            if (window.scrollY + window.innerHeight > element.offsetTop) {
                element.classList.add('animate-fade');
                if (element.classList.contains('animate-slide')) {
                    element.classList.add('animate-slide');
                }
            }
        });
    };

    addAnimationClasses();
    window.addEventListener('scroll', addAnimationClasses);
});


/*  image animaton */










/* menu bar desining */

function openCategory(evt, categoryName) {
    var i, tabcontent, tablinks;

    // Hide all tab content
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Remove the active class from all tab links
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab content, and add an "active" class to the clicked tab
    document.getElementById(categoryName).style.display = "flex";
    evt.currentTarget.className += " active";
}

           
document.addEventListener('DOMContentLoaded', () => {
    // Sign In form validation
    const signInForm = document.getElementById('signInForm');
    if (signInForm) {
        signInForm.addEventListener('submit', function(event) {
            let isValid = true;

            // Validate email
            const email = document.getElementById('email');
            if (!validateEmail(email.value)) {
                isValid = false;
                alert('Please enter a valid email address.');
            }

            // Validate password
            const password = document.getElementById('password');
            if (password.value.trim() === '') {
                isValid = false;
                alert('Please enter your password.');
            }

            if (!isValid) {
                event.preventDefault(); // Prevent form submission if validation fails
            }
        });
    }

    // Register form validation
    const registerForm = document.getElementById('registerForm');
    if (registerForm) {
        registerForm.addEventListener('submit', function(event) {
            let isValid = true;

            // Validate name
            const name = document.getElementById('name');
            if (name.value.trim() === '') {
                isValid = false;
                alert('Please enter your name.');
            }

            // Validate email
            const email = document.getElementById('email');
            if (!validateEmail(email.value)) {
                isValid = false;
                alert('Please enter a valid email address.');
            }

            // Validate phone number
            const phone = document.getElementById('phone');
            if (!validatePhone(phone.value)) {
                isValid = false;
                alert('Please enter a valid phone number.');
            }

            // Validate password
            const password = document.getElementById('password');
            if (password.value.trim().length < 6) {
                isValid = false;
                alert('Password must be at least 6 characters long.');
            }

            if (!isValid) {
                event.preventDefault(); // Prevent form submission if validation fails
            }
        });
    }

    // Email validation function
    function validateEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }

    // Phone number validation function (Example: US phone number format)
    function validatePhone(phone) {
        const phoneRegex = /^\d{10}$/;
        return phoneRegex.test(phone);
    }
});


// 2 Section index 
document.querySelectorAll('.service-card').forEach(card => {
    card.addEventListener('mouseenter', () => {
        card.querySelector('.service-image').style.opacity = '0.8';
    });

    card.addEventListener('mouseleave', () => {
        card.querySelector('.service-image').style.opacity = '1';
    });
});

/* about us image stylling */
document.addEventListener('DOMContentLoaded', function() {
    const aboutImages = document.querySelectorAll('.about-image img');

    aboutImages.forEach(image => {
        // Fade-in effect on load
        image.style.opacity = 0;
        image.style.transition = 'opacity 1s ease-in-out';
        image.onload = () => {
            image.style.opacity = 1;
        };

        // Scale effect on hover (already handled in CSS, but can be enhanced here)
        image.addEventListener('mouseover', function() {
            image.style.transform = 'scale(1.1)';
        });

        image.addEventListener('mouseout', function() {
            image.style.transform = 'scale(1.05)';
        });
    });
});


// JavaScript code to manage cart functionality

let cart = [];

function openCategory(evt, categoryName) {
    let i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(categoryName).style.display = "block";
    evt.currentTarget.className += " active";
}

function updateCart() {
    const cartItems = document.getElementById("cart-items");
    const cartTotal = document.getElementById("cart-total");
    cartItems.innerHTML = "";
    let total = 0;

    cart.forEach((item, index) => {
        total += item.price;
        const li = document.createElement("li");
        li.innerHTML = `${item.name} - Rs. ${item.price} <button onclick="removeFromCart(${index})">Remove</button>`;
        cartItems.appendChild(li);
    });

    cartTotal.textContent = total;
}

function addToCart(name, price) {
    cart.push({ name, price });
    updateCart();
}

function removeFromCart(index) {
    cart.splice(index, 1);
    updateCart();
}

document.addEventListener("DOMContentLoaded", () => {
    const addToCartButtons = document.querySelectorAll(".add-to-cart");

    addToCartButtons.forEach(button => {
        button.addEventListener("click", () => {
            const name = button.getAttribute("data-name");
            const price = parseInt(button.getAttribute("data-price"));
            addToCart(name, price);
        });
    });
});
