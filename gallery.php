<?php
$page = "Impact Gallery";
include_once("includes/header-gallery.php")
?>

<?php
include_once("includes/breadcrumb.php")
?>

    <section class="gallery-section">

        <!-- Tabs -->
        <div class="tabs">
            <button class="tab-btn active" data-category="all">All</button>
            <button class="tab-btn" data-category="outreach"><i class="fa-regular fa-image"></i>Photo Stories</button>
            <button class="tab-btn" data-category="conference"><i class="fa-solid fa-video"></i>Video
                Spotlights</button>
        </div>

        <!-- Gallery Grid -->
        <div class="gallery-grid">

            <!-- 12 ITEMS (Creates 3–4 rows on desktop) -->

            <!-- Outreach -->
            <div class="gallery-item" data-category="outreach" data-type="image"
                data-src="https://picsum.photos/900/600?1">
                <img src="https://picsum.photos/600/400?1" alt="">
                <div class="gallery-overlay">View</div>
            </div>

            <div class="gallery-item" data-category="outreach" data-type="image"
                data-src="https://picsum.photos/900/600?2">
                <img src="https://picsum.photos/600/400?2" alt="">
                <div class="gallery-overlay">View</div>
            </div>

            <div class="gallery-item" data-category="outreach" data-type="image"
                data-src="https://picsum.photos/900/600?3">
                <img src="https://picsum.photos/600/400?3" alt="">
                <div class="gallery-overlay">View</div>
            </div>

            <!-- Conference -->
            <div class="gallery-item" data-category="conference" data-type="image"
                data-src="https://picsum.photos/900/600?4">
                <img src="https://picsum.photos/600/400?4" alt="">
                <div class="gallery-overlay">View</div>
            </div>

            <div class="gallery-item" data-category="conference" data-type="image"
                data-src="https://picsum.photos/900/600?5">
                <img src="https://picsum.photos/600/400?5" alt="">
                <div class="gallery-overlay">View</div>
            </div>

            <div class="gallery-item" data-category="conference" data-type="image"
                data-src="https://picsum.photos/900/600?6">
                <img src="https://picsum.photos/600/400?6" alt="">
                <div class="gallery-overlay">View</div>
            </div>

            <!-- Videos -->
            <div class="gallery-item" data-category="video" data-type="video"
                data-src="https://www.youtube.com/embed/dQw4w9WgXcQ">
                <img src="https://img.youtube.com/vi/dQw4w9WgXcQ/hqdefault.jpg" alt="">
                <div class="gallery-overlay">▶</div>
            </div>

            <div class="gallery-item" data-category="video" data-type="video"
                data-src="https://www.youtube.com/embed/ysz5S6PUM-U">
                <img src="https://img.youtube.com/vi/ysz5S6PUM-U/hqdefault.jpg" alt="">
                <div class="gallery-overlay">▶</div>
            </div>

            <div class="gallery-item" data-category="video" data-type="video"
                data-src="https://www.youtube.com/embed/tgbNymZ7vqY">
                <img src="https://img.youtube.com/vi/tgbNymZ7vqY/hqdefault.jpg" alt="">
                <div class="gallery-overlay">▶</div>
            </div>

            <!-- Extra Images -->
            <div class="gallery-item" data-category="outreach" data-type="image"
                data-src="https://picsum.photos/900/600?7">
                <img src="https://picsum.photos/600/400?7" alt="">
                <div class="gallery-overlay">View</div>
            </div>

            <div class="gallery-item" data-category="conference" data-type="image"
                data-src="https://picsum.photos/900/600?8">
                <img src="https://picsum.photos/600/400?8" alt="">
                <div class="gallery-overlay">View</div>
            </div>

            <div class="gallery-item" data-category="outreach" data-type="image"
                data-src="https://picsum.photos/900/600?9">
                <img src="https://picsum.photos/600/400?9" alt="">
                <div class="gallery-overlay">View</div>
            </div>

        </div>

    </section>

    <!-- Lightbox -->
    <div class="lightbox" id="lightbox">
        <div class="lightbox-content">
            <span class="close-btn">&times;</span>
            <div id="lightbox-media"></div>
        </div>
    </div>

    <section class="section-contact">
        <div class="container container-contact vpadding-medium">
            <a href="javascript:void" class="btn btn-transparent btn-rounded">
                <i class="fa fa-solid fa-message"></i>
                Get In touch
            </a>

            <h2 class="section-title">We'd Love to Hear From You</h2>
            <p class="section-description">
                Have questions about our programs? Want to partner with us? Or simply want to learn more? Reach out to
                our team.
            </p>

            <div class="contact-channels">
                <article class="contact-channel">
                    <a href="javascript:void">
                        <i class="fa fa-solid fa-envelope programs-fa"></i>
                    </a>
                    <h5>Email Us</h5>
                    <p>Send us your inquiries and we'll respond within 24 hours</p>
                    <h6>info@nwagodfoundation.org
                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                    </h6>
                </article>

                <article class="contact-channel">
                    <a href="javascript:void">
                        <i class="fa fa-solid fa-phone programs-fa"></i>
                    </a>
                    <h5>Call Us</h5>
                    <p>Speak directly with our team during business hours</p>
                    <h6> +234-09025040890 <br> +234-07074401398
                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                    </h6>
                </article>

                <article class="contact-channel">
                    <a href="javascript:void">
                        <i class="fa fa-solid fa-location-dot programs-fa"></i>
                    </a>
                    <h5>Visit Us</h5>
                    <p>Visit our office for in-person consultations</p>
                    <h6>Sp104 Silas Plaza, Klm 6 Orlu Road, Egbeada, Beside Imo International Market, Mbaitoli LGA, Imo
                        State
                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                    </h6>
                </article>

            </div>
        </div>
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