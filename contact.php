    <?php 
        include_once('header.php');
    ?>
    <link href="/assets/style/contact.css" rel="stylesheet" />

    <!-- Internal header banner -->
    <div class="internal-header-banner" style="background-image: url('/assets/img/headers/internal-header.jpg');">
        <div class="internal-mini-header">Get in touch with us</div>
        <h3 class="internal-header">Contact Us</h3>
    </div>

    <div class="toast-error" id="toast-error"></div>

    <!-- Contact us detials -->
    <div class="cutom-centered-block contact-details-container">
        <div class="contact-card">
            <img class="details-icon" alt="contact-icon" src="/assets/img/icons/support.svg" />
            <h5 class="contact-heading">Call Us</h5>
            <a class="contact-number" href="tel:+27 53 831 1053">+27 53 831 1053</a>
        </div>
        <div class="contact-card">
            <img class="details-icon" alt="contact-icon" src="/assets/img/icons/email.svg" />
            <h5 class="contact-heading">Email Us</h5>
            <a class="contact-number" href="mailto:kampomedic@outlook.com">kampomedic@outlook.com</a>
        </div>
        <div class="contact-card">
            <img class="details-icon" alt="contact-icon" src="/assets/img/icons/location-pin.svg" />
            <h5 class="contact-heading">Location</h5>
            <div class="contact-number">86 Phakamile Mabija Street Kimberley</div>
        </div>
    </div>

    <!-- Contact us form -->
    <div class="cutom-centered-block contact-form-container">
        <h4 class="form-heading">Fill in the form bellow!</h4>
        <form class="contact-us-form contact-form" id="contact-form" name="contact-form" data-netlify="true" method="POST">
            <div class="form-block-container">
                <input type="text" placeholder="Full name" name="full-name" class="input-field" />
                <input type="email" placeholder="Email address" name="email" class="input-field" />
            </div>
            <div class="form-block-container">
                <input type="text" placeholder="Query or Topic" name="query" class="input-field" />
                <input type="text" placeholder="Phone number" name="phone-number" class="input-field" />
            </div>
            <textarea class="your-message" name="message" placeholder="Your message here"></textarea>
            <button type="submit" class="form-btn">SUBMIT</button>
        </form>
    </div>

    <div class="maps-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3498.9205540767075!2d24.715832775852885!3d-28.72192017121694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e9b1aa1bf9614df%3A0x8c6e0604d7608ad0!2s86%20Phakamile%20Mabija%20St%2C%20Bunn%2C%20Kimberley%2C%208345!5e0!3m2!1sen!2sza!4v1683227201759!5m2!1sen!2sza" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <a class="whatsapp-button" href="https://wa.me/+27615835469" target="_blank"><img src="/assets/img/icons/whats-app.svg" /></a>


    <?php 
        include_once('footer.php');
    ?>
    <script src="/assets/js/contact.js"></script>

</body>
