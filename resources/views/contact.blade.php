@extends('templates.front.main')
@section('customcss')
<link rel="stylesheet" href="/assets/css/front/contact.css">
@endsection
@section('body')
<div class="container mt-5 mb-3">
    <div class="row">
        <div class="col-12">
            <p><a href="/" class="fs-5 text-dark">Home</a> <i class="fa-solid fa-chevron-right mx-1"></i><a
                    href="/about" class="fs-5 text-dark"> Contact Us</a></p>
        </div>
    </div>
</div>
<div class="container mb-5 py-5 px-5" style="background:#f9f9f9">
    <div class="row">
        <div class="col-12 col-md-6 contact-info">
            <h2 class="mb-4">Contact Us</h2>
            <div class="row iconbox">
                <div class="col-2">
                <img src="/assets/imgs/call-icon.svg" alt="call" width="100%">
                </div>
                <div class="col-10">
                <p>Phone Number</p>
                <a href="tel:919548161909">+91 95 4816 1909</a>
                </div>
            </div>
            <div class="row iconbox mt-5">
                <div class="col-2">
                <img src="/assets/imgs/call-icon.svg" alt="call" width="100%">
                </div>
                <div class="col-10">
                <p>Email</p>
                <a href="mailto:info@recruitment.com">info@recruitment.com</a>
                </div>
            </div>
            <div class="row iconbox mt-5 mb-5">
                <div class="col-2">
                <img src="/assets/imgs/call-icon.svg" alt="call" width="100%">
                </div>
                <div class="col-10">
                <p>Corporate Office</p>
                <a href="tel:919548161909">+91 95 4816 1909</a>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-12">
                    <p style="margin:0px" class="fs-5">Follow Us</p>
                    <div class="social-icons">
                        <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#"><i class="fa-brands fa-square-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-square-x-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6">
            <h2 class="mb-4">Get in Touch</h2>
            <form action="" method="post" id="contactform">
                @csrf
                <div class="mb-3">
                    <input type="text" class="form-control" name="name" placeholder="Name">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="phone" placeholder="Phone Number">
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control" name="email" placeholder="Email">
                </div>
                <div class="mb-3">
                    <select class="form-control" name="hear">
                        <option value="How did you hear about us?">How did you hear about us?</option>
                        <option value="Word of mouth">Word of mouth</option>
                        <option value="Google">Google</option>
                        <option value="LinkedIN/Other social media">LinkedIN/Other social media</option>
                        <option value="ABC Employee">ABC Employee</option>
                        <option value="Friends &amp; Family">Friends &amp; Family</option>
                        <option value="Website">Website</option>
                        <option value="Marketing">Marketing</option>
                        <option value="Press &amp; Media">Press &amp; Media</option>
                    </select>
                </div>
                <div class="mb-3">
                    <textarea name="textarea" id="" rows="5" class="form-control">Leave Us a Message</textarea>
                </div>
                <button type="submit" class="btn btn-dark">Submit</button>
            </form>
        </div>
    </div>
</div>
<div class="container mb-5">
    <div class="row">
        <div class="col-12">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3481.4305851304666!2d79.52632147497958!3d29.24029895622335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39a09b22b3d94e25%3A0x1540164bf111fa37!2sDQ%20Learnings%20(DQL)%20-%20Digital%20Skills%20Institute!5e0!3m2!1sen!2sin!4v1708344524451!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>
@endsection