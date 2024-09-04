function closeAllDropdowns(exceptId) {
    const dropdownMenus = ["dropdownMenu", "dropdownEngMenu", "dropdownUsdMenu"];
    dropdownMenus.forEach(id => {
        if (id !== exceptId) {
            document.getElementById(id).classList.add("hidden");
        }
    });
}

document.getElementById("dropdownButton").addEventListener("click", function(event) {
    event.preventDefault();
    const dropdownMenu = document.getElementById("dropdownMenu");
    const isHidden = dropdownMenu.classList.contains("hidden");

    closeAllDropdowns("dropdownMenu");

    if (isHidden) {
        dropdownMenu.classList.toggle("hidden");
    }
});

document.getElementById("dropdownEngButton").addEventListener("click", function(event) {
    event.preventDefault();
    const dropdownMenu = document.getElementById("dropdownEngMenu");
    const isHidden = dropdownMenu.classList.contains("hidden");

    closeAllDropdowns("dropdownEngMenu");

    if (isHidden) {
        dropdownMenu.classList.toggle("hidden");
    }
});

document.getElementById("dropdownUsdButton").addEventListener("click", function(event) {
    event.preventDefault();
    const dropdownMenu = document.getElementById("dropdownUsdMenu");
    const isHidden = dropdownMenu.classList.contains("hidden");

    closeAllDropdowns("dropdownUsdMenu");

    if (isHidden) {
        dropdownMenu.classList.toggle("hidden");
    }
});

document.addEventListener('DOMContentLoaded', function() {
    const slides = document.querySelectorAll('.slide');
    const nextButtons = document.querySelectorAll('.next');
    const prevButtons = document.querySelectorAll('.prev');

    let currentSlide = 0;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.classList.remove('active');
            if (i === index) {
                slide.classList.add('active');
            }
        });
    }

    nextButtons.forEach(button => {
        button.addEventListener('click', function() {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        });
    });

    prevButtons.forEach(button => {
        button.addEventListener('click', function() {
            currentSlide = (currentSlide - 1 + slides.length) % slides.length;
            showSlide(currentSlide);
        });
    });

    showSlide(currentSlide);
});


let currentSlide = 0;
const totalSlides = document.querySelectorAll('#slider > div').length;

function moveToSlide(index) {
    if (index >= 0 && index < totalSlides) {
        const slider = document.getElementById('slider');
        const slideWidth = slider.clientWidth;
        slider.style.transform = `translateX(-${index * slideWidth}px)`;
        currentSlide = index;
    }
}

document.addEventListener('DOMContentLoaded', () => {
    const dropdowns = document.querySelectorAll('.group');
    
    dropdowns.forEach(group => {
        const dropdownMenu = group.querySelector('ul');

        group.addEventListener('mouseover', () => {
            dropdownMenu.classList.remove('hidden');
        });

        group.addEventListener('mouseleave', () => {
            // Kullanıcı fareyi menüden çıkardığında menüyü kapat
            setTimeout(() => {
                if (!group.matches(':hover')) {
                    dropdownMenu.classList.add('hidden');
                }
            }, 300); // Gecikme süresi menüyü kapatma için (ms)
        });

        // Menü üzerinde tutma
        dropdownMenu.addEventListener('mouseover', () => {
            dropdownMenu.classList.remove('hidden');
        });

        // Menüden çıkış
        dropdownMenu.addEventListener('mouseleave', () => {
            dropdownMenu.classList.add('hidden');
        });
    });
});
