<!-- Popup Overlay -->
<div id="popupOverlay" class="popupOverlay" style="display: none;">
    <div class="popupContent">
        <button id="closePopupBtn" class="closeBtn">&times;</button>
        <div class="mainForm">
            <form id="popUpForm">
                <input type="hidden" name="formType" value="popUpForm">
                <div class="formRow">
                    <div class="formGroup">
                        <label for="name">What's your name?</label>
                        <input class="required" name="name" type="text" placeholder="Type your full name"/>
                    </div>
                    <div class="formGroup">
                        <label for="email">What's your email address?</label>
                        <input name="email" type="email" placeholder="example@gmail.com" />
                    </div>
                </div>
                <div class="formRow">
                    <div class="formGroup">
                        <label for="company">What's your Company name?</label>
                        <input name="company" type="text" placeholder="enter your company name" />
                    </div>
                    <div class="formGroup">
                        <label for="website">Share your company Website</label>
                        <input name="website" type="text" placeholder="enter company website link here" />
                    </div>
                </div>
                <div class="formRow full">
                    <div class="formGroup">
                        <label for="message">Any message for us?</label>
                        <input class="required"  name="message" type="text" placeholder="Write your message here" />
                    </div>
                </div>
                <button type="submit" class="themeBtn submitBtn">Get in Touch</button>
            </form>
            <p class="success-msg text-black" style="display:none">
                Thank you for submitting your details. Our team will get in touch with you shortly.
            </p>
        </div>
    </div>
</div>