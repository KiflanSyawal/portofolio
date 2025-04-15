<!DOCTYPE html>
<html lang="id">

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiflan</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <div class="loader"></div>


    <!-- Navbar -->
    <nav id="navbar">
        <ul>
            <li><a href="#home">About Me</a></li>
            <li><a href="#projects">Experience</a></li>
            <li><a href="#awards">awards</a></li>
            <li><a href="#contact">CONTACT</a></li>
        </ul>
    </nav>

    <!-- Halaman Utama -->
    <section id="home">
        <div class="home-content">
            <div class="home-text">
                <h1>Hello, I'm Kiflan Anugerah Syawal !</h1>
                <p>I am a Fresh Graduate student at Yogyakarta State University, a bachelor's degree in Education
                    Informatic Engineering. I possess a versatile disposition and excel in both collaborative teamwork
                    and effective communication. Expertise in robotic technology, including programming and design
                    experience with OP3 robots in particular, in addition to programming, analysis, and software
                    development profciencies, are among the competencies I possess.</p>

                <!-- Ikon Sosial Media -->
                <div class="social-icons">
                    <div class="social-icon-box">
                        <a href="https://www.instagram.com/kflnsyawal/" target="_blank"><i
                                class="fab fa-instagram"></i><span>Instagram</span></a>
                    </div>
                    <div class="social-icon-box">
                        <a href="https://github.com/username" target="_blank"><i
                                class="fab fa-github"></i><span>GitHub</span></a>
                    </div>
                    <div class="social-icon-box">
                        <a href="https://www.linkedin.com/in/kiflan-anugerah-syawal-0b3905254/" target="_blank"><i
                                class="fab fa-linkedin"></i><span>LinkedIn</span></a>
                    </div>
                    <div class="social-icon-box">
                        <a href="https://wa.me/+6282112275218" target="_blank"><i
                                class="fab fa-whatsapp"></i><span>WhatsApp</span></a>
                    </div>
                    <div class="social-icon-box">
                        <a href="mailto:kiflan.as@gmail.com" target="_blank">
                            <i class="fa fa-envelope"></i><span>email</span>
                        </a>
                    </div>

                </div>

            </div>
            <div class="home-image">
                <img src="assets/foto.jpeg" alt="Foto Saya">
            </div>
        </div>
    </section>




    {{-- experience --}}
    <section id="projects" class="hidden">
        <div class="projects-header">
            <h2 class="project-title">Experience</h2>
        </div>
        <div class="projects-container">
            <div class="project-card">
                <img src="assets/marriott.png" alt="Proyek 1">
                <div class="project-description">
                    <p>I'm doing my Internship at marriott executive appartments as IT System Analyst.I study
                        IT support and network management on servers.</p>
                </div>
            </div>
            <div class="project-card">
                <img src="assets/uny.png" alt="Proyek 2">
                <div class="project-description">
                    <p>I am a programmer for the Darwin OP3 humanoid robot, specializing in C++ and ROS, and have won
                        two regional and national competitions in 2023 and 2024.</p>
                </div>
            </div>
            <div class="project-card">
                <img src="assets/hello.jpg" alt="Proyek 3">
                <div class="project-description">
                    <p>I participated in a training program by Hello Motion Academy, where I learned the basics of 3D
                        design and animation.</p>
                </div>
            </div>
            <div class="project-card">
                <img src="assets/gointerling.jpeg" alt="Proyek 4">
                <div class="project-description">
                    <p>I participated in the PKM (Student Creativity Program) with an entrepreneurship scheme,
                        developing the "Gointerling" website using Laravel, Vue.js, Tailwind CSS, and Supabase</p>
                </div>
            </div>
        </div>
    </section>


    


    {{-- award section --}}
    <section id="awards" class="awards-section">
        <h2 class="section-title">Awards</h2>
        <div class="awards-container">

            <!-- Penghargaan 2 -->
            <div class="award-item">
                <img src="assets/regional.jpg" alt="Penghargaan 2" class="award-image">
                <div class="award-details">
                    <h3 class="award-title">1st Place - Regional Indonesian Robot Contest 2023</h3>
                    
                </div>
            </div>

            <!-- Penghargaan 2 -->
            <div class="award-item">
                <img src="assets/lomba.jpeg" alt="Penghargaan 2" class="award-image">
                <div class="award-details">
                    <h3 class="award-title">3rd Place - National Indonesian Robot Contest 2023</h3>
                    
                </div>
            </div>

            <!-- Penghargaan 3 -->
            <div class="award-item">
                <img src="assets/nasional.jpg" alt="Penghargaan 3" class="award-image">
                <div class="award-details">
                    <h3 class="award-title">2nd Place - National Indonesian Robot Contest 2024</h3>
                    
                </div>
            </div>

             <!-- Penghargaan 3 -->
             <div class="award-item">
                <img src="assets/champion.png" alt="Penghargaan 3" class="award-image">
                <div class="award-details">
                    <h3 class="award-title">1st Place - Regional Indonesian Robot Contest 2024</h3>
                    
                </div>
            </div>

             <!-- Penghargaan 3 -->
             <div class="award-item">
                <img src="assets/pkm.jpeg" alt="Penghargaan 3" class="award-image">
                <div class="award-details">
                    <h3 class="award-title">Successfully Secured Funding for the Student Creativity Program (PKM)</h3>
                    
                </div>
            </div>

            

        </div>
    </section>







    {{-- contact section --}}
    <section id="contact">
        <div class="contact-header">
            <h2>Contact me</h2> <!-- Menambahkan nama untuk bagian kontak -->
        </div>
        <form class="contact-form" action="https://api.web3forms.com/submit" method="POST">
            <input type="hidden" name="access_key" value="6284e2fe-3704-4908-b7af-e6fe76e7f791">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Enter name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" placeholder="Enter Message" required></textarea>
            </div>
            <div class="form-group">
                <button type="submit">Send</button>
            </div>
        </form>
    </section>



    <footer class="sticky-footer">
        <div class="footer-logos">
            <div class="logo-item">
                <i class="fab fa-laravel"></i>
            </div>
            <div class="logo-item">
                <i class="fab fa-js"></i>
            </div>
            <div class="logo-item">
                <i class="fab fa-php"></i>
            </div>
            <div class="logo-item">
                <i class="fab fa-vuejs"></i>
            </div>
            <div class="logo-item">
                <i class="fab fa-html5"></i>
            </div>
            <div class="logo-item">
                <i class="fab fa-css3-alt"></i>
            </div>
        </div>
        <p>&copy; 2025 Kiflan Anugerah Syawal. All Rights Reserved.</p>
    </footer>



    <script src="js/script.js"></script>
</body>

</html>
