<?php
$page = "Contact Us";
include_once("includes/header.php")
?>

<?php
include_once("includes/breadcrumb.php")
?>

    <section class="section-contact-hero">
        <div class="container container-contact-hero vpadding-xtra-small">
            <h1>Get in Touch With Us</h1>
            <p>Have questions about our programs, want to volunteer, or need support? We're here to help. Reach out to
                us through any of the methods below</p>
        </div>
    </section>

    <section>
        <div class="container container-contact-form">
            <h2>Send us a Message</h2>
            <p>Fill out the form below and we'll get back to you as soon as possible</p>

            <form>

                <div class="form-set form-set-enquiry-type">
                    <h3 class="text-light-dark">What is your inquiry about?</h3>
                    <div class="form-group">
                        <input type="radio" id="email" name="contact" value="email" checked>
                        <label for="email">General Enquiry</label>
                    </div>

                    <div class="form-group">
                        <input type="radio" id="phone" name="contact" value="phone">
                        <label for="phone">Volunteering</label>
                    </div>

                    <div class="form-group">
                        <input type="radio" id="mail" name="contact" value="mail">
                        <label for="mail">Partnership / Sponsorship</label>
                    </div>

                    <div class="form-group">
                        <input type="radio" id="mail" name="contact" value="mail">
                        <label for="mail">Seeking Support</label>
                    </div>

                    <div class="form-group">
                        <input type="radio" id="mail" name="contact" value="mail">
                        <label for="mail">Other</label>
                    </div>

                </div>

                <div class="form-set form-set-inputs">
                    <!-- <h3 class="text-light-dark">What is your inquiry about?</h3> -->
                    <div class="form-group">
                        <label for="fullName" class="text-light-dark">Full Name</label>
                        <input class="text-light-dark" type="text" id="fullName" name="fullName" value="Your full name">
                    </div>

                    <div class="form-group">
                        <label for="fullName" class="text-light-dark">Email Address</label>
                        <input class="text-light-dark" type="email" id="email" name="email"
                            value="your.email@example.com">
                    </div>

                    <div class="form-group">
                        <label for="fullName" class="text-light-dark">Phone Number</label>
                        <input class="text-light-dark" type="number" id="phoneNumber" name="phoneNumber"
                            value="Phone Number Here">
                    </div>

                    <div class="form-group">
                        <label for="fullName" class="text-light-dark">Subject</label>
                        <input class="text-light-dark" type="text" id="subject" name="subject"
                            value="Brief subject of your message">
                    </div>

                    <div class="form-group">
                        <label for="fullName" class="text-light-dark">Message</label>
                        <textarea class="text-light-dark" id="message" name="message"></textarea>
                    </div>

                </div>
            </form>
        </div>
    </section>

    <section class="section-contact-meta">
        <div class="container container-contact-meta vpadding-small">
            <div class="contacts">
                <div class="contact">
                    <h3> <i class="fa fa-solid fa-location-dot text-color-green"></i> Main Office</h3>
                    <p class="text-light-dark">Address</p>
                    <h4>Sp104 Silas Plaza, Klm 6 Orlu Road, Egbeada, Beside Imo International Market, Mbaitoli LGA, Imo
                        State</h4>
                </div>

                <div class="contact">
                    <p class="text-light-dark">Phone</p>
                    <h4 class="text-color-green"> <i class="fa fa-solid fa-phone"></i> +234-09025040890</h4>
                    <h4 class="text-color-green"> <i class="fa fa-solid fa-phone"></i> +234-07074401398</h4>
                </div>


                <div class="contact">
                    <p class="text-light-dark">Email</p>
                    <h4 class="text-color-green"> <i class="fa fa-regular fa-envelope"></i> info@nwagodfoundation.org</h4>
                </div>
            </div>

            <div class="business-hours">
                <h3> <i class="fa fa-regular fa-clock text-color-green"></i> Business Hours</h3>
                <p class="biz-details"><span>Monday - Friday:</span> <span class="text-bold">9:00AM - 5:00PM</span></p>
                <p class="biz-details"><span>Saturday:</span> <span class="text-bold">10:00AM - 2:00PM</span></p>
                <p class="biz-details"><span>Sunday:</span> <span class="text-bold">Closed</span></p>
            </div>

        </div>
    </section>

    
    <section class="section-ctas">
        <div class="container container-ctas vpadding-medium">
            <h2 class="section-title">Ready to Make a difference?</h2>
            <p class="section-description">
               Whether you want to support our cause, volunteer your time, or learn more about our programs, we're excited to connect with you
            </p>

            <p>
                <a href="#" class="btn btn-primary"><i class="fa fa-regular fa-heart"></i>Donate Now</a>
                <a href="#" class="btn btn-transparent">Explore Programs -></a>
            </p>
        </div>
        <span class="horizontal-rule"></span>
        <!-- <hr> -->
    </section>


    <section class="section-socials">
        <div class="container container-socials vpadding-medium">
            <h3 class="text-light-dark text-center">Follow us on social media for updates and impact stories</h3>
            <ul class="ul-socials">
                <li><i class="fa fa-brands fa-facebook-f"></i></li>
                <li><i class="fa fa-brands fa-x-twitter"></i></li>
                <li><i class="fa fa-brands fa-instagram"></i></li>
                <li><i class="fa fa-brands fa-whatsapp"></i></li>
            </ul>
        </div>
    </section>


<?php
include_once("includes/footer.php")
?>