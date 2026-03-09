<?php require_once 'header.php'; ?>

<section class="contact-page">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="contact-title">GET IN TOUCH</h1>
            <p class="contact-subtitle">Please fill in the form below or send us an email at <a href="mailto:baran.yildiz@yahoo.com">baran.yildiz@yahoo.com</a></p>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                <form action="send_mail.php" method="POST" class="enquiry-form">
                    <h5 class="form-section-title">ENQUIRY FORM</h5>
                    
                    <div class="row g-4">
                        <div class="col-md-4">
                            <label class="form-label">Your name *</label>
                            <input type="text" name="name" class="form-control custom-input" required>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Instagram Handle *</label>
                            <input type="text" name="instagram" class="form-control custom-input" required>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">TikTok handle</label>
                            <input type="text" name="tiktok" class="form-control custom-input">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Email *</label>
                            <input type="email" name="email" class="form-control custom-input" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Phone *</label>
                            <input type="tel" name="phone" class="form-control custom-input" required>
                        </div>

                        <div class="col-12 mt-5">
                            <label class="form-label d-block mb-3">What are you inquiring about? *</label>
                            <div class="services-checkboxes">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="services[]" value="SMM" id="smm">
                                    <label class="form-check-label" for="smm">Social Media Management</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="services[]" value="Content" id="content">
                                    <label class="form-check-label" for="content">Content Memberships</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="services[]" value="PaidAds" id="ads">
                                    <label class="form-check-label" for="ads">Paid Ads</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="services[]" value="WebDesign" id="web">
                                    <label class="form-check-label" for="web">Web Design</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="services[]" value="Branding" id="branding">
                                    <label class="form-check-label" for="branding">Branding Kits</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="services[]" value="Event" id="event">
                                    <label class="form-check-label" for="event">Content Creation (Event)</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 mt-4">
                            <label class="form-label">Any additional information about your inquiry</label>
                            <textarea name="message" class="form-control custom-input" rows="1"></textarea>
                        </div>

                        <div class="col-12 mt-5">
                            <button type="submit" class="submit-btn">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php require_once 'footer.php'; ?>