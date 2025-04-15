document.addEventListener('DOMContentLoaded', () => {
    // Menambahkan class 'active' pada navbar saat diklik
    const links = document.querySelectorAll('.nav-link');
    const sections = document.querySelectorAll('#home, #projects, #contact');

    function removeActiveClasses() {
        links.forEach(link => link.classList.remove('active'));
        sections.forEach(section => section.classList.remove('active'));
    }

    links.forEach(link => {
        link.addEventListener('click', (e) => {
            removeActiveClasses();
            link.classList.add('active');
            const targetSection = document.querySelector(link.getAttribute('href'));
            targetSection.classList.add('active');
        });
    });

    const allSections = document.querySelectorAll('section');
    const options = { threshold: 0.3 };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, options);

    allSections.forEach(section => {
        observer.observe(section);
    });

    const projectCards = document.querySelectorAll('.project-card');

    const projectObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            } else {
                entry.target.classList.remove('visible');
            }
        });
    }, options);

    projectCards.forEach(card => {
        projectObserver.observe(card);
    });

    const navbarLinks = document.querySelectorAll('#navbar a');

    navbarLinks.forEach(link => {
        link.addEventListener('click', event => {
            event.preventDefault();
            const targetId = link.getAttribute('href');
            const targetSection = document.querySelector(targetId);

            targetSection.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });

            targetSection.style.transition = 'background-color 0.5s ease-in-out';
            targetSection.style.backgroundColor = 'rgba(0, 123, 255, 0.1)';

            setTimeout(() => {
                targetSection.style.backgroundColor = '';
            }, 1000);

            targetSection.classList.add('visible');
        });
    });

    window.addEventListener("load", () => {
        const loader = document.querySelector(".loader");
        loader.classList.add("loader--hidden");

        loader.addEventListener("transitionend", () => {
            document.body.removeChild(loader);
        });
    });

    const awards = document.querySelectorAll(".award-item");
    const awardTitle = document.querySelector(".section-title");

    const awardsObserver = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add("show");
                } else {
                    entry.target.classList.remove("show"); // **Animasi di-reset saat keluar viewport**
                }
            });
        },
        { threshold: 0.2 }
    );

    awards.forEach((award) => awardsObserver.observe(award));
    awardsObserver.observe(awardTitle); // Tambahkan observer untuk judul



    
});

// Menambahkan smooth scroll untuk menu navbar
document.querySelectorAll('nav a').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

document.addEventListener("DOMContentLoaded", () => {
    const projectCards = document.querySelectorAll(".project-card");

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("show");
            } else {
                entry.target.classList.remove("show"); // **Animasi di-reset saat keluar viewport**
            }
        });
    }, { threshold: 0.2 });

    projectCards.forEach(card => observer.observe(card));
});
