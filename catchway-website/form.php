<!--form action="#" method="post" class="wow animate__ animate__fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
    <div class="form-box">
        <div class="row form-box">
            <div class="col-sm-6">
                <input type="email" name="subscribe" id="subscribe" required="required" placeholder="Your Name">
            </div>
            <div class="col-sm-6">
                <input type="email" name="subscribe" id="subscribe" required="required" placeholder="Mobile">
            </div>
            <div class="col-sm-12">
                <input type="email" name="subscribe" id="subscribe" required="required" placeholder="Email">
            </div>
            <div class="col-sm-12">
                <textarea type="email" name="message" id="subscribe" required="required" placeholder="Message"></textarea>
            </div>
            <div class="col-sm-12">
                 <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                <button type="submit" class="btn btn-primary"><i class="fa-solid fa-paper-plane"></i> Submit</button>
            </div>
        </div>
    </div>
</form-->



<div class="address_wrapper">
    <div class="sub-title" style="margin: 0px auto 20px;">
        <h2 class="wow fadeInUp text-left" data-wow-duration="2s" data-wow-delay=".2s" style="visibility: visible; animation-duration: 2s; animation-delay: 0.2s; animation-name: fadeInUp;">Get in touch with us</h2>
    </div> 
</div>
<div class="contact_form form-input">
    <form action="Javascript:showHint();" method="post"   enctype="multipart/form-data">
        <div class="row form-box">
            <div class="col-12 col-sm-6  form-group  wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s" style="visibility: visible; animation-duration: 2s; animation-delay: 0.2s; animation-name: fadeInUp;">
                <input type="text" class="form-control" id="fname" name="fname" required  placeholder="Your Name"><br>
            </div>
            <div class="col-12 col-sm-6  form-group  wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s" style="visibility: visible; animation-duration: 2s; animation-delay: 0.2s; animation-name: fadeInUp;">
                <input type="text" class="form-control" id="mnumber" required name="phone"placeholder="Mobile"><br>
            </div>
            <div class="col-12 col-sm-12  form-group  wow fadeInUp" data-wow-duration="2s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 2s; animation-delay: 0.3s; animation-name: fadeInUp;">
                <input type="email" class="form-control person-email" id="email" required name="email" placeholder="E-mail Address"><br>
            </div>
            <!--div class="col-12 col-sm-12 form-group  wow fadeInUp" data-wow-duration="2s" data-wow-delay=".4s" style="visibility: visible; animation-duration: 2s; animation-delay: 0.4s; animation-name: fadeInUp;">
                <textarea class="form-control" rows="5" id="comment" name="message" placeholder="Message"></textarea>
            </div-->     
            <input type="hidden" id="chatid" value="-1001565596882">
            <input type="hidden" id="token" value="334202346:AAGANdbkRgH9hbKzg83BnzBkHBQ8oumRQl0">  
                                                
            <div class="col-12 col-sm-12 form-group">
                <div class="submit-btn  wow fadeInUp" data-wow-duration="2s" data-wow-delay=".5s" style="visibility: visible; animation-duration: 2s; animation-delay: 0.5s; animation-name: fadeInUp;">
                     <button type="submit" name="submit" value="Submitt" class="btn btn-primary col-sm-12" style="pointer-events: all; cursor: pointer;">
                                                    Submit
                                                    <span></span>
                                                </button>
                                                <p class="register_success_box" id="register_success_box" style="display:none;">We received your message and you'll hear from us soon. Thank You!</p>
                            <div id="success" class="registers"></div>
                </div>
            </div>
        </div>
    </form>   
</div>