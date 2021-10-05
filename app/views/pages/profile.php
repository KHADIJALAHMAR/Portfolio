<?php include_once APPROOT . '/views/inc/header.php';
 ?>



<!-- add section  about    -->
<section class="about">
    <div class="flex items-center ">
        <div class="flex-1">
            <img   src="<?php echo URLROOT; ?>/assets/img/img-PRESENTATION.jpg" alt="" height="300" >
        </div>
        <div class="flex-1">
            <h1>About <span>As</span></h1>
            <h3>Hello ! I'm Lahmar Khadija</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem ullam, optio placeat accusamus illum cupiditate, quis ducimus iure deserunt nulla esse nesciunt, culpa in molestiae blanditiis eaque voluptatem eveniet facere.</p>
            <div class="social">
                    <a href="#"> <img src="<?php echo URLROOT ;?>/assets/icons/logo-instagram.png" alt=""></a>
                    <a href="#"><img src="<?php echo URLROOT ;?>/assets/icons/logo-facebook.png" alt=""></a>
                    <a href="#"> <img src="<?php echo URLROOT ;?>/assets/icons/logo-twitter.png" alt=""></a>
        </div>
        </div>
    </div>
</section>
<!-- add section Freelacer -->
<section class="freelancer">
    <h1>I Am Available for Freelancer</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
    <button class="btn btn-primary">Downloud CV</button>
</section>
<!-- add section Work -->
<section class="work">
    <div class="container  ">
            <h1 class="section-heading">Our <span>Works</span></h1>
            <p class="section-heading" >Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
    </div>
    <div class="card-wrapper flex ">

        <div class="card">
            <div class="overlay">
                <span>Category</span>
                <a href="#">web develepment</a>
            </div>
            <img src="<?php echo URLROOT; ?>/assets/img/pharma.webp" alt="" >
        </div>


        <div class="card">
        <div class="overlay">
                <span>Category</span>
                <a href="#">web develepment</a>
            </div>
            <img src="<?php echo URLROOT; ?>/assets/img/madlin.jpg" alt="">
        </div>

        <div class="card">

        <div class="overlay">
                <span>Category</span>
                <a href="#">web develepment</a>
            </div>
            <img src="<?php echo URLROOT; ?>/assets/img/cosmétique.webp" alt="">
        </div>
    </div>
</section>
<!-- add section competence -->
<section class="competence">
<div>
    <h1 class="mb-5 mt-5"> COMPETENCE</h1>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3 class="progress-title">HTML</h3>
            <div class="progress">
                <div class="progress-bar" style="width:65%; background:#97c513;">
                    <div class="progress-value">65%</div>
                </div>
            </div>
            <h3 class="progress-title">CSS</h3>
            <div class="progress">
                <div class="progress-bar" style="width:100%; background:#f2545b;">
                    <div class="progress-value">100%</div>
                </div>
            </div>
            <h3 class="progress-title">JAVASCRIPT</h3>
            <div class="progress">
                <div class="progress-bar" style="width:75%; background:#4286f4;">
                    <div class="progress-value">75%</div>
                </div>
            </div>
            <h3 class="progress-title">PHP</h3>
            <div class="progress">
                <div class="progress-bar" style="width:30%; background:#21ff63;">
                    <div class="progress-value">30%</div>
                </div>
            </div>
        </div>
    </div>  
</div>
</section>
<!-- add section Contact -->
<section class="contact">
    <div class="container">
        <h1> Contact<span> Us</span></h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
    </div>
    <div class="card-wrapper">
        <div class="card">
            <img src="<?php echo  URLROOT; ?>/assets/icons/cellphone.svg" alt="svg-phone">
            <h1>Call Us On</h1>
            <h6>+212 39 42 29 39</h6>
        </div>
        <div class="card">
            <img src="<?php echo  URLROOT; ?>/assets/icons/email.svg" alt="lsvg-email">
            <h1>Email Us At </h1>
            <h6>khadijalahmar8@gmail.com</h6>
        </div>
        <div class="card">
            <img src="<?php echo  URLROOT; ?>/assets/icons/map.svg" alt="svg-map">
            <h1>Visit Office </h1>
            <h6> Youssoufia QU Salam Rue Moulay ibrahim</h6>
        </div>
    </div>
        <form  action="">
        <div class="input-wrap">
            <input type="text" placeholder="Your Name *">
            <input type="email" placeholder="Your email *">
        </div>
        <div class="input-wrap2">
            <input type="text" placeholder="Your subject .....">
            <textarea name="" id="" cols="30" rows="10" placeholder="Your messag"></textarea>
        </div>
        <div class="btn-wrapper">
            <button class="btn btn-primary">SEND MESSAGE</button>
        </form>
</section>
<!-- add section footer  -->
<section class="footer">
    <img src="" alt="">
    <h1>LOGO</h1>
    <div class="social">
                    <a href="#"> <img src="<?php echo URLROOT ;?>/assets/icons/logo-instagram.png" alt=""></a>
                    <a href="#"><img src="<?php echo URLROOT ;?>/assets/icons/logo-facebook.png" alt=""></a>
                    <a href="#"> <img src="<?php echo URLROOT ;?>/assets/icons/logo-twitter.png" alt=""></a>
        </div>
        <div class="copyright">
        <p>copyright © 2020</p>
        </div>
        

</section>
</div>