<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <title>E Medicine</title>
    @include('extra.css-link')


</head>

<body>
    @include('extra.nav')



    <!-- about_part start -->
    <div class="container about_part">
        <div class="row">
            <!-- common_heading start -->
            <div class=" col-lg-12 common_heading">
                <h2>Contact Us</h2>
                <img src="image/heading-img.png" alt="heading-img">
            </div>
            <!-- common_heading start -->
        </div>
    </div>
    <div class="container about_part">
        <div class="row">
            <div class="col-md-12 about_img">
                <b><p style="color:rgba(74, 176, 252, 0.9); font-size:20px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error quos, autem repudiandae voluptate doloribus, eligendi ut ad impedit explicabo veritatis.</p></b>
            </div>
        </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12 about_content">
                    <form id="contact" action="{{ route('contact.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <h3>Quick Contact</h3>
                        <h4>Contact us today, and get reply with in 24 hours!</h4>
                        <fieldset>
                            <input placeholder="Your name" type="text" tabindex="1" name="name" required autofocus>
                        </fieldset>
                        <fieldset>
                            <input placeholder="Your Email Address" type="email" tabindex="2" name="email" required>
                        </fieldset>
                        <fieldset>
                            <input placeholder="Your Phone Number" type="tel" tabindex="3" name="number" required>
                        </fieldset>
                        <fieldset>
                            <textarea placeholder="Type your Message Here...." tabindex="5" name="message" required></textarea>
                        </fieldset>
                        <fieldset>
                            <button><input name="submit" type="submit" id="contact-submit" value="Submit"></button>
                        </fieldset>
                    </form>

                </div>
            </div>
        </div>
    


    <!-- about_part end -->



    @include('extra.footer') @include('extra.js-link')

</body>




</html>