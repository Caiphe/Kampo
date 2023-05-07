    <?php 
        include_once('header.php');
    ?>
    <link href="/assets/style/appointment.css" rel="stylesheet" />


    <!-- Internal header banner -->
    <div class="internal-header-banner" style="background-image: url('/assets/img/headers/internal-header.jpg');">
        <div class="internal-mini-header">Book Your seat </div>
        <h3 class="internal-header">Appointment</h3>
    </div>

    <div class="toast-error" id="toast-error"></div>

    <!-- Appointment container  -->
    <div class="cutom-centered-block book-appointment-container" id="main-appointment-container">
        <div class="each-appointment-container">
            <h4 class="book-appointment-heading">Book an appointment</h4>

            <form class="appointment-form" method="POST" id="appointment-form" data-netlify="true" name="appointment-form">
                <div class="field-container">
                    <input type="text" class="input-field" name="name" placeholder="Full name" />
                    <input type="text" class="input-field" name="phone" placeholder="Phone number" />
                </div>
                <div class="field-container">
                    <input type="date" class="input-field" name="date-field" placeholder="Date" />
                    <input type="time" class="input-field" name="time-field" placeholder="Time" />
                </div>
                <select class="department-select" name="department">
                    <option value="">Select Department</option>
                    <option value="consultation">Consultation</option>
                    <option value="laboratory">Laboratory</option>
                </select>

                <textarea class="your-message" name="message" placeholder="Your message here"></textarea>
                <button type="submit" class="form-btn">SUBMIT</button>

            </form>

            <img src="/assets/img/icons/doted-design.svg" class="doted-img" />

        </div>

        <div class="each-appointment-container appointment-details">
            <img src="/assets/img/icons/call-user.svg" alt="emergency-user" />
            <h5 class="emergency-heading">Call for an Emergency Service!</h5>
            <h4 class="emergency-contact">+27 53 831 1053</h4>

            <div class="bank-details-container">
                <img src="/assets/img/icons/card.svg" />
                <h5 class="emergency-heading">Our Banking details</h5>
                <div class="banking-block">
                    <ul class="bank-heading">
                        <li>Bank </li>
                        <li>Account Holder</li>
                        <li>Account No</li>
                        <li>Branch Code</li>
                    </ul>
                    <ul class="banking-details">
                        <li>: FNB</li>
                        <li>: Name kampo medical centre</li>
                        <li>: 63023084964</li>
                        <li>: 250655</li>
                    </ul>
                </div>
            </div>

            <div class="medical-aids-container">
                We Accept all Medical Aids
            </div>
        </div>


    </div>

    <!-- <div class="cutom-centered-block appointment-response">
        <img alt="" class="check-icon" src="/assets/img/icons/success.svg" />
        <h2 class="appointment-booked">Thanks for booking An appointment</h2>
        <div class="last-text">We will get in touch with you soon...</div>
    </div> -->


    <?php 
        include_once('footer.php');
    ?>
    <script src="/assets/js/appointment.js"></script>

</body>
