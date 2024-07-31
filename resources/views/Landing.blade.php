

@extends('layout')

@section('title', 'Technical Support')

@section('content')

<style>
    button[type="submit"] {
        background-color: #a0527a;
        color: #fff;
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    button[type="submit"]:hover {
        background-color: #8d3d5e;
    }

    .alert-message {
        background-color: #a0527a;
        color: #fff;
        padding: 10px;
        margin-top: 10px;
        text-align: center;
        display: none; /* Initially hide the alert message */
    }
</style>
    <!-- ======= Radeef Section ======= -->
    <section id="hero">
        <div class="hero-container" data-aos="fade-in">
            <h1>Welcome To Radeef</h1>
            <h2>Radeef in arabic means a follower, someone who follows you and comes behind you.</h2>
            <img src="assets\img\logo-radeef.png" alt="Radeeef" data-aos="zoom-out" style="width: 789px;"
                data-aos-delay="80">
        </div>
    </section><!-- End Radeef Section -->

    <main id="main">

        <!-- ======= why Radeef section ======= -->
        <section id="features" class="padd-section text-center">

            <div class="container" data-aos="fade-up">
                <div class="section-title text-center">
                    <h2>Why Radeef?</h2>
                    <p class="separator">Our goals.</p>
                </div>

                <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">

                    <div class="col-md-6 col-lg-3">
                        <div class="feature-block">
                            <img src="assets\img\Secured.png" alt="img">
                            <h4>Secured</h4>
                            <p>Discover the value of mental health support tailored to your unique needs</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="feature-block">
                            <img src="assets\img\All in one.png" alt="img">
                            <h4>All In One</h4>
                            <p>Find out how we can help you improve your mental health and wellbeing</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="feature-block">
                            <img src="assets\img\easy-to-use (1).png" alt="img">
                            <h4>Easy To Use</h4>
                            <p>Experience the benefits of personalized mental health support in clear, simple language
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End why Radeef section -->

        <!-- ======= Services Section ======= -->
        <section id="Services" class="padd-section text-center">
            @auth
            <div class="container" data-aos="fade-up">
                <div class="section-title text-center">
                    <h2>Services </h2>
                </div>
            </div>

            <div class="container">
                <div class="row">

                    <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="100">
                        <div class="feature-block">

                            <img src="assets\img\todo.jpg" alt="img" style="max-width: 15%; height: auto;">
                            <h4>To-Do list</h4>
                            <p>A tool for organizing activities and tasks that helps you arrange your priorities and
                                complete your
                                tasks effectively.</p>
                            <a href="/todos/create"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                                </svg></a>
                        </div>
                    </div>


                    <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
                        <div class="feature-block">

                            <img src="assets\img\progress.jpg" alt="img" style="max-width: 15%; height: auto;">
                            <h4>Task Progress</h4>
                            <p>Tracking the implementation of work and activities. It helps you know the level of
                                achievement and plan
                                the next steps.</p>
                            <a href="/taskprogress"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                                </svg></a>

                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200">
                        <div class="feature-block">
                            <img src="assets\img\note.jpg" alt="img" style="max-width: 15%; height: auto;">
                            <h4>Notes</h4>
                            <p>A tool for recording important ideas and information. They help you remember details and
                                organize your
                                thoughts better.</p>
                            <a href="/note"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8" />
                                </svg></a>

                        </div>
                    </div>


                </div>
            </div>
            @endauth
        </section><!-- End Services Section -->

        <!-- ======= About us Section ======= -->
        <section id="screenshots" class="padd-section text-center">

            <div class="container" data-aos="fade-up">
                <div class="section-title text-center">
                    <h2>About Us</h2>
                </div>
                <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">

                    <div class="col-md-10 col-lg-10">
                        <div class="feature-block box-shadow">
                            <p>
                                We are a group of passionate students from Umm Al-Qura University, including Jood
                                Al-Bogami, Dana Al Ramadani, and Wasan Al-Matrafi, who collaborated during their
                                training period at Wadi Makkah Knowledge Company to create Radeef. This innovative
                                project addresses challenges in information systems by enhancing efficiency in
                                information management, analysis, and retrieval. Radeef is the result of extensive
                                research, rigorous testing, and a deep understanding of industry needs. The team aims to
                                make a positive impact by providing efficient solutions and believes that Radeef has the
                                potential to revolutionize information handling, empowering businesses and individuals
                                to make informed decisions.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About us Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="padd-section text-center">

            <div class="container" data-aos="fade-up">
                <div class="section-title text-center">

                    <h2>Team Member</h2>
                </div>

                <div class="row justify-content-center">

                    <div class="col-md-6 col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="100">
                        <div class="team-block bottom">
                            <img src="assets\img\danah.jpg" class="img-responsive" alt="img">
                            <div class="team-content">
                                <ul class="list-unstyled">
                                    <li><a href="https://x.com/d__a31?s=21"><i class="bi bi-twitter"></i></a></li>
                                    <li><a 
                                            href="https://www.linkedin.com/in/danah-alramadani-58b435295?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app"><i
                                                class="bi bi-linkedin"></i></a></li>
                                </ul>
                                <span>Developer</span>
                                <h4>Danah Al ramadani</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="200">
                        <div class="team-block bottom">
                            <img src="assets\img\jood.jpg" class="img-responsive" alt="img">
                            <div class="team-content">
                                <ul class="list-unstyled">
                                    <li><a
                                            href="https://www.linkedin.com/in/jood-albogami-6454772b3?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app"><i
                                                class="bi bi-linkedin"></i></a></li>
                                </ul>
                                <span>Developer</span>
                                <h4>Jood AL Bogami</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-md-4 col-lg-3" data-aos="zoom-in" data-aos-delay="300">
                        <div class="team-block bottom">
                            <img src="assets\img\wasan.jpg" class="img-responsive" alt="img">
                            <div class="team-content">
                                <ul class="list-unstyled">
                                    <li><a href="https://www.linkedin.com/in/wasan-mohamd?trk=contact-info"><i
                                                class="bi bi-linkedin"></i></a></li>
                                </ul>
                                <span>Developer</span>
                                <h4>Wasan Al matrafi</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Team Section -->

        <!-- ======= Support Section ======= -->
        <section id="contact" class="padd-section">

            <div class="container" data-aos="fade-up">
                <div class="section-title text-center">
                    <h2>Technical Support</h2>
                </div>
                <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">

                    <div class="col-lg-3 col-md-4">

                        <div class="info">

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <p>Radeef000@gmail.com</p>
                            </div>

                            <div>
                                <i class="bi bi-phone"></i>
                                <p>+966 560000000</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-8">
                        <div class="form">
                            <form action="/inquiry-submit" method="post"  class="inquiry-form">

                            @csrf
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" name="subject" id="subject"
                                        placeholder="Subject" required>
                                </div>
                                <div class="form-group mt-3">
                                    <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                        required></textarea>
                                </div>
                                <div class="my-3">
    <div class="loading"></div>
    <div class="error-message"></div>
    <div class="sent-message"></div>
    <div class="alert-message"></div> <!-- Add this line for the alert message -->
</div>
                                <div  class="text-center"><button type="submit">Send Message</button>
                               </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Support Section -->

    </main><!-- End #main -->
    <script>
    // Get the form element
    const form = document.querySelector('/inquiry-form');

    form.addEventListener('submit', async (e) => {
        e.preventDefault();

        // You can add AJAX request here to submit the form data

        // Simulating form submission
        // Assuming the form submission is successful
        // Show the alert message
        const alertMessage = document.querySelector('.alert-message');
        alertMessage.innerText = 'Your message has been sent. Thank you!';
        alertMessage.style.display = 'block';

        // Reset the form after submission
        form.reset();
    });
</script>
    @endsection