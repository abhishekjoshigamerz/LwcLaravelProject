@include('frontendview/include/header2')

<div class="page-wrap container contact-wrap">
    <div class="container">
        <div class="space50"></div>
        <h3>Build in public</h3>
        <div class="space30"></div>
        <div class="col-md-12 no-padding">
            <p>Want to become a volunteer, Please fill the form below and our team will reach out to you.</p>
            <div class="space20"></div>
        </div>
        <div class="col-md-12 no-padding columns">
            <div class="row">
                <div class="col-md-12">
                    <h4>Get in Touch</h4>
                    <div class="space30"></div>
                    <form class="contact-form" id="contactForm" action="php/contact.php" method="post">
                        <div class="row">
                            <div class="col-md-12">
                                <input type="text" name="senderName" id="senderName" placeholder="Name*" required="required" />
                                <input type="email" name="senderEmail" id="senderEmail" placeholder="Email Address*" required="required" />
                                <input type="text" name="subject" id="subject" placeholder="Subject*" required="required" />
                            </div>
                           
                        </div>
                        <textarea name="message" id="message" rows="7" placeholder="Message" required="required"></textarea>
                        <button type="submit" id="sendMessage" name="sendMessage" class="btn btn-primary btn-sm btn-orange uppercase pull-right" >Send Message</button><br>
                    </form>
                    <div id="successMessage" class="successmessage"><p><span class="success-ico"></span> Thanks for sending your message! We'll get back to you shortly.</p></div>
                    <div id="failureMessage" class="errormessage"><p><span class="error-ico"></span> There was a problem sending your message. Please try again.</p></div>
                    <div id="incompleteMessage" class="statusMessage"><p>Please complete all the fields in the form before sending.</p></div>
                </div>
               
            </div>
        </div>
    </div>
</div>



@include('frontendview/include/footer')







