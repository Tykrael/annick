
<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
require_once("lib/functions.php");
// /findCountry(); 
$countries = getAllCountries();

    if (isset($_GET['success'])) {
        
        $success = $_GET['success'];
    
        if ($success == 1) {
            $messageSuccess = "Thank you. Your subscription has been registered";
            $flashMessageClass = "flashMessage";
        }
        elseif ($success == 2) {
            $messageSuccess = "Field form are limited at 38 characters";
            $flashMessageClass = "errorMessage";
        }
        elseif ($success == 3) {
            $messageSuccess = "Invalid mail format";
            $flashMessageClass = "errorMessage";
        }
        elseif ($success == 4) {
            $messageSuccess = "Fields do not have to be empty";
            $flashMessageClass = "errorMessage";
        }            
        else 
            $messageSuccess="";
    }
    
?>
<!doctype html>
<!--[if IE 7]>         <html class="no-js ie7 lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js ie8 lt-ie10 lt-ie9 "> <![endif]-->
<!--[if IE 9]>         <html class="no-js ie9 lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Annick Goutal</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
   
        <!-- build:css(.tmp) css/main.css -->
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/main.css">
        <!-- endbuild -->

        <script src="js/modernizr/modernizr-2.6.2.min.js"></script>

    </head>

    <body class="cf">
        <header>
            <div class="wrapper">
                <h1>Annick Goutal Paris</h1>
                <h2>
                    New opening in <span class="bold">New-York</span>
                
                </h2>
                <a href="http://www.annickgoutal.com/" class="institutional" target="_blank">Visit Annick Goutal website &gt;</a>
            </div>
        </header>
        <section class="slider motif">
            <div class="wrapper">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <figure>
                                  <img src="./img/slide2.jpg" alt="Slide 1" />
                                <figcaption>
                                    <div class="title">ANNICK GOUTAL ‘S<br />FIRST NEW YORK STORE</div>
                                    <div class="text">
                                        <p>
                                            The Annick Goutal perfumery house will 
                                            open the doors of its first New York store, in the heart 
                                            of Greenwich Village.<br /><br />
                                            An exceptional olfactive experience in a modern, 
                                            feminine setting…
                                        </p>
                                        <a href="#" class="button">Get your invitation</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="swiper-slide" data-sliderClass="motif">
                            <figure>
                                <img src="./img/slide1.jpg" alt="Slide 1" />
                                <figcaption>
                                    <div class="title">THE Annick goutal house</div>
                                    <div class="text">
                                        <p>
                                            A perfumery house synonymous with Expertise, 
                                            Emotion, Excellence and French Art de Vivre.<br />
                                            The Annick Goutal house has been recognized 
                                            for its original and timeless creations, 
                                            and their unique olfactory signature.
                                        </p>
                                        <a href="#" class="button">Get your invitation</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <a class="arrow-left" href="#">prev</a>
                    <a class="arrow-right" href="#">next</a>
                    <div class="pagination"></div>
                </div>
            </div>
            <div class="swiper-footer"></div>
        </section>
        <section>
            <div class="wrapper cf">
                <div class="row cf content">
                    <section class="map">
                        <h2>Our Annick Goutal Boutique in New-York</h2>
                        <div class="mapWrapper cf">
                            <img src="./img/map-illus.jpg" alt="map" class="fleft" />
                            <div class="adrWrapper fleft">
                                <div class="adr">
                                    <span class="street-address">397 Bleeker Street</span><br />
                                    <span>Greenwich Village</span><br />
                                    <span class="locality">New York</span>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="invitation">
                        <h2>Get your invitation <br />for the grand opening</h2>
                        <figure><img src="./img/papillon.jpg" alt="papillon" /></figure>
                        <p>
                            A surprising journey in a modern, feminine setting…<br />
                            More than a store, it is a place unlike any other where 
                            nearly all senses collide to bring a true experience.
                        </p>
                        <a href="#" class="button">Get your invitation</a>

                    </section>
                    <section class="share cf">
                        <h2>Share with your friend</h2>
                        <p>
                            Invite your friends to join !<br />
                            Share this page with them.
                        </p>
                        <div class="addthis">
                            <!-- AddThis Button BEGIN -->
                            <div class="addthis_toolbox" addthis:url="http://example.com"
        addthis:title="ANNICK GOUTAL NEW OPENING IN NEW-YORK"
        addthis:description="An Example Description">
                                <a class="addthis_button_facebook">
                                    <img src="img/share-facebook.png" alt="share facebook" />
                                </a>
                                <a class="addthis_button_twitter">
                                    <img src="img/share-twitter.png" alt="share twitter" />
                                </a>
                            </div>
                            <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-529756457e62e52a"></script>
                            <!-- AddThis Button END -->

                        </div>
                    </section>
                </div>
            </div>
        </section>
        <footer>
            <div class="wrapper">
                <div class="row">
                    Copyright Annick Goutal 2014 - <a href="#" class="legalsLink">legal disclaimer</a>
                </div>
            </div>
        </footer>


        <div class="popin invitationForm">
            <div class="mask"></div>
            <div class="popinWrapper">
                <div class="<?php echo $flashMessageClass;?>">
                    <?php 
                        if (isset($messageSuccess))
                        echo $messageSuccess; 
                    ?>
                </div>
                <div id="form">
                    <div class="popinHeader">
                        <h2>
                            GET YOUR PERSONAL INVITATION<br />
                            FOR THE <span>GRAND OPENING EVENT!</span>
                        </h2>
                        <p>
                            A surprising journey in a modern, feminine setting…<br />
                            More than a store, it is a place unlike any other 
                            where nearly all senses collide to bring a true experience.<br />
                            Sign up and have a chance to win your personal invitation 
                            to the opening reception.
                        </p>
                    </div>
                    <form action="traitement.php" method="post">
                        <div class="row cf">               
                            <label>Title * :</label>
                            <select name="title">
                                    <option value="Mr">Mr</option>"
                                    <option value="Mrs">Mrs</option>"
                                    <option value="Ms">Ms</option>"
                            </select>
                        </div>
                        
                        <div class="row cf">
                            <label>First Name * :</label>
                            <input id="f-name" type="text" name="fname"/>
                        </div>
                        
                        <div class="row cf">                   
                            <label>Last Name * :</label>
                            <input id="l-name" type="text" name="lname"/>
                        </div>
                        
                        <div class="row cf">                   
                            <label>Date of birth * :</label>
                                <select class="small2" name="month-birth">
                                    <?php 
                                        for($i = 1; $i <= 12; $i++) {
                                            echo '<option value="'.$i.'">'.$i.'</option>';
                                        }
                                    ?>
                                </select>
                                <select class="small2" name="day-birth">
                                    <?php 
                                        for($i = 1; $i <= 31; $i++) {
                                            echo '<option value="'.$i.'">'.$i.'</option>';
                                        }
                                    ?>
                                </select>
                                <select class="small4" name="year-birth">
                                    <?php 
                                        for($i = 1950; $i <= 2014; $i++) {
                                            echo '<option value="'.$i.'">'.$i.'</option>';
                                        }
                                    ?>
                                </select>
                        </div>
                        <div class="row cf">   
                                <label id="country">Country * :</label>   
                                <select name="country">
                                    <?php 
                                        $selected = null;
                                        foreach ($countries as $key => $country) {
                                            //echo '<option value="'.$country['id_country'].'">"'.$country->libelle.'</option>';
                                            echo '<option value="'.$key.'">"'.$country->libelle.'</option>';
                                        }
                                    ?>
                                </select>
                        </div>
                        
                        <div class="row cf">
                            <label>City * :</label>
                            <input id="city" type="text" name="city"/>
                        </div>
                        
                        <div class="row cf">
                            <label>Email * :</label>
                            <input id="email" type="text" name="mail"/>
                        </div>

                        <div class="row cf optin">
                            <span class="alignR"><input id="news" type="checkbox" name="news"/></span>
                            <label for="news">
                                Subscribe to Annick Goutal newsletter to know our latest events, new product
                                launches and our prestige offers.
                            </label>
                        </div>
                        <div class="row cf">
                            <label>&nbsp;</label>
                            <input class="button" type="submit" value="Subscribe" />
                        </div>
                        
                        
                    </form>
                </div>
                <a href="#" class="rules">Contest rules</a>
                <div class="required">* Required fields</div>
                <div class="closePopin">Close</div>
            </div>
        </div>

        <div class="popin legals">
            <div class="mask"></div>
            <div class="popinWrapper">
                <div class="content">
                    <h2>LEGAL TERMS</h2>
                    <h3>ARTICLE 1: THE WEBSITE</h3>
                    <p>
                        The  www.annickgoutal.us  website is a website of Annick Goutal House, a simplified stock company with capital of  €6,192,479, registered with the Commercial Register of Paris under number B331 293 159, with its registered office located at 104, Avenue des Champs Elysées, 75008 Paris, France.
                        Telephone number: +33 (0)1.40.71.20.60 
                        Person in charge: Mr Rémi Cléro, Chaiman 
                        Hosting : xxxxx
                        CNIL registration n° 1433093

                        Website access and the use of its contents are subject to the usage stipulations provided hereinafter.  The act of accessing and browsing this Website implies that the Internet user fully and unreservedly accepts the following stipulations. Annick Goutal House reserves the right to update these Legal Terms at any time.
                    </p>
                    <h3>ARTICLE 2: INTELLECTUAL PROPERTY</h3>
                    <p>
                        The entirety of the Website, as well as its components (in particular text, structure, software, animated items, photographs, videos, illustrations, drawings, graphic representations, logos, etc.) are creative works protected by articles L.111-1 et seq. of the French Intellectual Property code. The Website and its components are the sole property of Annick Goutal; the latter is the sole party authorized to exercise intellectual property and related personality rights, particularly brands, models, creative works, software, databases, interpretations and image rights, as the originator or through a formal authorization or licence.

                        Use of all or part of the Website, particularly by means of downloading, reproduction, transmission, representation or circulation, for purposes other than personal and private use and with a non-commercial aim by the Internet user is strictly prohibited. The party liable for infringement of the above shall be liable to penalties stipulated in both the French Intellectual Property code with regard to copyright infringement (article L. 335-1 et seq.) and brand rights (article L. 716-1 et seq.) in particular, and the French Civil Code with regard to general legal liability (article 9, Sections 1382 et seq.).
                    </p>
                    <h3>ARTICLE 3: PERSONAL INFORMATION</h3>
                    <p>
                        The personal information (particularly the user name, name, surname, date of birth, email) that Internet users may disclose to Annick Goutal when subscribing to the Annick Goutal form, shall directly or indirectly make it possible for Annick Goutal to identify Internet users and send them its newsletter. When the Internet user discloses personal data, the Internet user shall answer questions asked during the subscription process and thus communicate precise information, which shall not prejudice the interests or rights of third parties.

                        Any personal information shall be collected without the personal consent of the Internet user concerned. If the Internet user does not wish or no longer wishes to receive the newsletter from Annick Goutal, the Internet user may inform Annick Goutal accordingly by sending an email to the following address:  service.client@fr.amorepacific.com. 
                        The Internet user shall also have the option of cancelling his or her subscription to the Annick Goutal newsletter by clicking a link included directly in each issue of the newsletter sent to the Internet user. 
                    </p>
                    <h3>ARTICLE 4: COOKIES</h3>
                    <p>
                        The Webite uses cookies. A cookie is an information file stored on the hard drive of the User’s computer. Its purpose is to report an earlier visit by the User to the Site. The cookies are solely used by Annick Goutal House to personalize the services offered to the User.
                    </p>
                    <h3>ARTICLE 5: LIABILITY</h3>
                    <p>
                        Annick Goutal House cannot be considered liable (i) for the loss, alteration or fraudulent access to the User’s personal data, (ii) for the accidental transmission of viruses or other harmful elements resulting from access to the Internet or by e-mail transmissions. Annick Goutal House does not warrant that the Site shall be available on a permanent basis, without temporary interruption, without suspension or without error. Annick Goutal House’s liability can only be held against it in case of proven fault solely attributable to it. In any event, it will be solely limited to direct damages. Annick Goutal House reserves the right to suspend the operation of the Site.
                    </p>
                    <h3>ARTICLE 6: APPLICABLE LAW – DISPUTES</h3>
                    <p>
                        These Legal Terms and the contractual relationship between Annick Goutal House and the Internet user are subject to French law. Any dispute arising from the application or interpretation of the Legal Terms is under the exclusive jurisdiction of the courts of Paris, the permanent location of Annick Goutal House. 
                    </p>
                </div>
                <div class="closePopin">Close</div>
            </div>
        </div>

        <div class="door">
            <div class="door-left"></div>
             <div class="door-right"></div>

        </div>
        <script src="js/jquery-1.11.0.min.js"></script>
     
        <!-- build:js({app,.tmp}) js/main.js -->
        <script src="js/libs.js"></script>
        <script src="js/main.js"></script>
        <!-- endbuild -->
</body>
</html>
