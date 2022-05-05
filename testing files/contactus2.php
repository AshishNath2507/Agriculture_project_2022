<section class="contact">
        <div class="container grid">
            <div class="contact-text grid-item-1">
                <h1>Contact Us</h1>
                <p>Feel free to contact us and we'll get back to you as soon as we can</p>
            </div>

            <div class="icons-grid grid-item-2">
                <div class="icons-flex">
                    <div class="icons-items">
                        <div class="icons-images">
                            <img class="icons-images" src="./images/icons/2x/addr-large.png" alt="">    
                        </div>                  
                        <p class="icons-text">Agriculture Road, Jorhat, Assam</p>                       
                    </div>
                    <div class="icons-items">
                        <div class="icons-images">
                            <img src="./images/icons/2x/ph.png" alt="Phone_No.">
                        </div>
                        <p class="icons-text">+9876543210</p>
                    </div>
                    <div class="icons-items">
                        <div class="icons-images">
                            <img src="./images/icons/2x/mail.png" alt="email_image">
                        </div>
                        <p class="icons-text">aau@gmail.com</p>
                    </div>
                    <div class="icons-items">
                        <div class="icons-images">
                            <img src="./images/icons/2x/website.png" alt="website_image">
                        </div>
                        <p class="icons-text">aau.ac.in</p>
                    </div>
                </div>
            </div>

            <div class="contact-form card grid-item-3">
                <h2>Mention Your Query</h2>
                <form action="" method="post">
                    <!-- <div class="form-content"> -->
                    <div class="form-control">
                        <!-- <label for="name">Name</label> -->
                        <input type="text" name="name" id="" placeholder="Name" required>
                    </div>
                    <div class="form-control">
                        <!-- <label for="name">E-mail</label> -->
                        <input type="email" name="email" id="" placeholder="Email" required>

                    </div>
                    <div class="form-control">
                        <!-- <label for="name">Phone</label> -->
                        <input type="tel" name="phno" id="" placeholder="Phone" required>

                    </div>
                    <div class="form-control">
                        <!-- <label for="name">Address</label> -->
                        <input type="text" name="addr" id="" placeholder="Address" required>
                    </div>
                    <div class="form-control">
                        <!-- <label for="name">Message</label> -->
                        <textarea name="message" id="message" cols="17" rows="5" placeholder="Your message"
                            required></textarea>
                    </div>
                    <div class="form-control">
                        <input type="submit" value="Send" class="btn btn-primary">
                    </div>
                    <!-- </div> -->
                </form>
            </div>

            <div class="map-container grid-item-3" id="map">
                <!-- Google Map API works in this div -->
            </div>

        </div>
    </section>

<?php
    include "mapscript.php";
?>