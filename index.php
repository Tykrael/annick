<?php
require_once("lib/functions.php");
if(!empty($_POST))
    $success = saveAllDataToBase($_POST);

// /findCountry(); 
$countries = getAllCountries();

    if (isset($success)) {
    
        if ($success == 1) {
            $messageSuccess = "Thank you. Your subscription has been registered";
            $flashMessageClass = "flashMessage";
        }
        elseif ($success == 2) {
            $messageSuccess = "Field(s) limited to 38 characters";
            $flashMessageClass = "errorMessage";
        }
        elseif ($success == 3) {
            $messageSuccess = "Invalid e-mail format";
            $flashMessageClass = "errorMessage";
        }
        elseif ($success == 4) {
            $messageSuccess = "All fields are mandatory";
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
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
   
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
                <a href="http://www.annickgoutal.com/en/" class="institutional" target="_blank">Visit Annick Goutal website &gt;</a>
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
                                    <span class="street-address">397 Bleecker Street</span><br />
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
                            Invite your friends to join us !<br />
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
                    Copyright Annick Goutal 2014 - <a href="#" class="legalsLink">Legal Terms</a>
                </div>
            </div>
        </footer>


        <div class="popin invitationForm open">
            <div class="mask"></div>
            <div class="popinWrapper">
                <div id="form">
                    <div class="popinHeader">
                        <h2>
                            GET YOUR PERSONAL INVITATION<br />
                            FOR THE <span>GRAND OPENING EVENT!</span>
                        </h2>
                        <p>
                            <span class="intro">
                            A surprising journey in a modern, feminine setting…<br />
                            More than a store, it is a place unlike any other 
                            where nearly all senses collide to bring a true experience.<br /></span>
                            Sign up and have a chance to win your personal invitation 
                            to the opening reception.
                        </p>
                    </div>
                    <div class="<?php echo $flashMessageClass; ?>">
                        <?php 
                            if (isset($messageSuccess))
                                echo $messageSuccess; 
                        ?>
                    </div>
                    <form action="/" method="post">
                        <div class="row cf">               
                            <label>Title * :</label>
                            <div class="styled-select">
                                <select name="title">
                                        <option value="Mr">Mr</option>"
                                        <option value="Mrs">Mrs</option>"
                                        <option value="Ms">Ms</option>"
                                </select>
                            </div>                        
                            </div>
                        
                        <div class="row cf">
                            <label>First Name * :</label>
                            <input id="f-name" type="text" name="fname" value="<?php if(isset($_POST['fname'])) { echo $_POST['fname']; } ?>" />
                        </div>
                        
                        <div class="row cf">                   
                            <label>Last Name * :</label>
                            <input id="l-name" type="text" name="lname" value="<?php if(isset($_POST['lname'])) { echo $_POST['lname']; } ?>" />
                        </div>
                        
                        <div class="row cf">                   
                            <label>Date of birth * :</label>
                            
                            <div class="styled-select small2 fleft">
                                <select name="month-birth">
                                    <?php 
                                    for($i = 1; $i <= 12; $i++) {
                                        if(isset($_POST['month-birth']) && $_POST['month-birth'] == $i)
                                            $selected = "selected='selected'";
                                        else 
                                            $selected = "";
                                        echo '<option value="'.$i.'" '.$selected.'>'.$i.'</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="styled-select small2 fleft">
                                <select name="day-birth">
                                    <?php 
                                    for($i = 1; $i <= 31; $i++) {
                                        if(isset($_POST['day-birth']) && $_POST['day-birth'] == $i)
                                            $selected = "selected='selected'";
                                        else 
                                            $selected = "";
                                        echo '<option value="'.$i.'" '.$selected.'>'.$i.'</option>';
                                    }
                                    ?>
                                </select>

                            </div>
                            <div class="styled-select small4 fleft">
                                <select  name="year-birth">
                                    <?php 
                                    for($i = 1900; $i <= 2014; $i++) {
                                        if(isset($_POST['year-birth']) && $_POST['year-birth'] == $i)
                                            $selected = "selected='selected'";
                                        else 
                                            $selected = "";
                                        echo '<option value="'.$i.'" '.$selected.'>'.$i.'</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    
                        <div class="row cf">   
                                <label id="country">Country * :</label>   
                                <div class="styled-select">
                                    <select name="country">
                                        <?php 
                                            $selected = null;
                                            $s = 0;
                                            foreach ($countries as $key => $country) {
                                                if(isset($_POST['country']) && $_POST['country'] == $country->id_country){
                                                    $selected = "selected='selected'";
                                                    $s++;
                                                }else if ($key == 223 && $s == 0) 
                                                    $selected = 'selected="selected"';
                                                else
                                                    $selected = "";
                                            
                                                echo '<option value="'.$country->id_country.'" '.$selected.'>'.$country->libelle.'</option>';
                                            }
                                        ?>
                                    </select>
                                 </div>
                        </div>
                        
                        <div class="row cf">
                            <label>City * :</label>
                            <input id="city" type="text" name="city" value="<?php if(isset($_POST['city'])) { echo $_POST['city']; } ?>" />
                        </div>
                        
                        <div class="row cf">
                            <label>Email * :</label>
                            <input id="email" type="text" name="mail" value="<?php if(isset($_POST['mail'])) { echo $_POST['mail']; } ?>" />
                        </div>

                        <div class="row cf optin">
                         
                           <input id="news" type="checkbox" name="news" <?php if(isset($_POST['news']) && $_POST['news'] == 'on') { echo "checked='checked'"; } ?> />
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

        <div class="popin contest">
            <div class="mask"></div>
            <div class="popinWrapper">
                <div class="content">
                    <h2>
                        Annick Goutal<br />
                        "Grand Opening Event" Contest <br />
                        from February 21, 2014 to March 26, 2014<br />
                        Rules
                    </h2>
                    <h3>Article 1: Organizer </h3>
                    <p>
                        Annick Goutal, a simplified stock company with capital of €6,192,479, registered with the Commercial Register of Paris under number B331 293 159, represented by Rémi Cléro, Chairman, duly authorized for the present purposes, with its registered office located at 104 avenue des Champs Elysées, 75008 Paris, France, is organizing a free contest with no purchase obligation to take place from February 21, 2014 to midnight on March 26, 2014 (EST time). 

                        The contest is called "Grand Opening Event" and can be accessed at: www.annickgoutal.us.

                        These Legal Terms and the contractual relationship between Annick Goutal House and the Internet user are subject to French law. Any dispute arising from the application or interpretation of the Legal Terms is under the exclusive jurisdiction of the courts of Paris, the permanent location of Annick Goutal House. 
                    </p>
                    <h3>Article 2: Conditions for participation </h3>
                    <p>
                        2.1 This Contest is open to all individuals of legal age who have internet access, a personal, valid email address and reside in the United States, whether or not they are Annick Goutal customers, and who wish to register at no cost on the www.annickgoutal.us website page.

                        The company reserves the right to proceed with any and all verifications required related to the identity and postal and/or email address of participants. 

                        2.2 The following individuals may not participate in the present Contest or benefit from any prize, whether directly or indirectly: all personnel employed by the Company and the Partners, including their family and spouses (by marriage, "P.A.C.S." or official or unofficial common law spouses), as well as minors. 

                        2.3 Individuals who do not provide their full contact information and identity or who provide inaccurate or misleading information will be disqualified, as will be those who decline the collection, saving and use of their personal data that is required exclusively for the purposes of Contest management. 

                        2.4 Participation in the Contest requires the full acceptance without reservation by all participants of the present Rules. Non-compliance with said Rules will cause the automatic cancelation of participation and potential award of prizes. 
                    </p>
                    <h3>Article 3: Registration principle and methods</h3>
                    <p>
                        The Contest proceeds as follows: 
                        -   The contestant connects to www.annickgoutal.us
                        -   The contestant clicks on the "Get your invitation" tab.
                        1.  After reading the terms of participation, the Participant registers for the Contest by filling in the registration form and all the mandatory fields. 
                        2.  To validate his or her registration, the Participant must click on the "Subscribe" button.

                        During the Contest period, an individual defined by his or her name or email address may participate only once. In the event an individual participates more than once, only one of the instances of his or her participation will be considered. Any attempt to register to participate more than once may lead to the contestant being excluded by the Organizer.

                        The Contest may be accessed 24/7 on the internet at www.annickgoutal.us
                    </p>
                    <h3>Article 4: Selection of winners </h3>
                    <p>
                        The names of the five winners, who previously filled in the registration form, will be drawn by a bailiff the week that follows the end of the Contest (i.e. at midnight on March 26, EST time).

                        The winners will be announced once their eligibility for the intended prize has been verified. The Organizer will contact the winners by email. If the contestant does not respond within the week that follows the transmission of this email (seven days from receipt of the email), he or she will be considered to have waived the prize and the prize will remain the property of the Organizer. 

                        A single prize will be awarded per winner (same name or same email address).

                        By accepting the prize, the winner authorizes the Organizer to use his or her last name, first name and age in any promotional event, on the Organizer's website and on any related website or materials. Said use will in no way create a right or give rise to compensation other than the prize won. 

                        Contestants must comply with the Contest rules. If it appears that they do not meet the criteria of the present Rules, their prizes will not be awarded to them. The contestants agree to any and all verifications regarding their identity, age, postal address, and/or the accuracy and trustworthiness of their participation. 

                        In this regard, the Organizer reserves the right to ask for a copy of the winner's identification documents before sending the prize.

                        Any false declaration, identity information or address will cause the immediate elimination of the contestant and, if applicable, the reimbursement of the prizes already sent. 
                    </p>
                    <h3>Article 5: Prizes </h3>
                    <p>
                        The Contest is composed of the following prizes: 
                        Each winner receives a personal invitation to the inauguration day (valid for 1 person) for the Annick Goutal boutique at 397 Bleecker Street, New York.

                        The inauguration will take place within 10 days that follow the end of the contest.

                        The Organizer does not cover the travel expenses of winners to go to the inauguration day.
                    </p>
                    <h3>Article 6: Awarding of prizes</h3>
                    <p>
                        After they have participated and if they win as described herein, the winners will receive their personal invitation to the inauguration day by email within the week that follows the conclusion of the game.

                        The Organizer may not be held responsible for the transmission of the invitation to an email address that is incorrect due to the winner's negligence. If the prizes cannot be delivered to the addressee for any reason whatsoever beyond the Organizer's control (the winner having changed his or her email address, etc.), they will definitively remain the property of the Organizer. 

                        The prizes may not be exchanged for another object or any monetary value, and may not be partially or totally reimbursed. Contestants are hereby informed that the sale or exchange of prizes is strictly prohibited. 

                        The Organizer may not be held liable for any incident/accident that may occur when using the prizes. All product brands or names cited are the registered trademarks of their respective owners. 
                    </p>
                    <h3>Article 7: Contest with no obligation to purchase</h3>
                    <p>
                        Up to three minutes of internet connection used to participate in the Contest will be reimbursed, based on the cost of local communications in effect at the time the present rules are established.

                        Contestants who do not pay connection costs related to the volume of their communications ("unlimited" package subscribers, ADSL cable users, etc.) are not entitled to said reimbursement. 

                        Reimbursement may be requested by simple written letter sent to: 
                        Annick Goutal House – "Grand Opening Event" Contest – 397 Bleecker Street, New York.

                        Contestants must legibly indicate their last name, first name and complete address, and imperatively attach a "R.I.B." or "R.I.P." (statement of bank or postal account information) as well as the related invoice, with the connection dates and times clearly underlined. 

                        The reimbursement of the costs to claim the reimbursement may be requested by simple letter weighing less than 20 grams, stamped at the "slow mail" rate.
                    </p>
                    <h3>Article 8: Limitation of liability</h3>
                    <p>
                        Participation in the "Grand Opening Event" Contest implies having knowledge of and accepting the characteristics and limitations of the internet, in particular in relation to technical performance; response time to view, query or transfer information; interruption risks and, more generally, the risks inherent in any internet connection and transmission; the absence of protection for certain data from potential misuse, and the risks of contamination by potential viruses circulating on the internet. The Organizer therefore may in no event be held liable for the following, the present list not being exhaustive: 
                        1. Transmission and/or receipt of any data and/or information on the internet; 
                        2. Any malfunction of the internet that prevents the proper conduct/operation of the Contest; 
                        3. Any defect in any hardware receiving communications or communication lines; 
                        4. Loss of any paper or electronic correspondence and, more generally, any loss of data; 
                        5. Transmission problems; 
                        6. The operation of any software; 
                        7. The consequences of any virus, bug, anomaly or technical defect; 
                        8. Any damage caused to a Contestant's computer; 
                        9. Any technical, hardware and/or software defect of any kind that prevents or limits the ability to participate in the Contest or that damages a Contestant's system;  
                        10. Malfunction of the prizes distributed in the framework of the Contest, and the potential direct and/or indirect damage this may cause. 

                        It is to be noted that the Organizer may not be held liable for any direct or indirect damage resulting from an interruption or malfunction of any type and for any reason whatsoever, or for any direct damage resulting in any manner from the connection to the website developed for this Contest. It is incumbent on all Contestants to take all the appropriate measures to protect their own data and/or software stored on their hardware from any damage or intrusion. Any individual who connects to www.annickgoutal.us and the Contestants who participate in the Contest do so under their own responsibility.

                        The Organizer may cancel all or part of the "Grand Opening Event" Contest if it appears that fraud of any nature occurred, in particular through the use of information technology or in determining the winners. If this occurs, it reserves the right not to award the prizes to the individuals who committed fraud and/or to bring legal action against the individuals who committed this fraud before the competent courts. However, it may not be held liable vis-à-vis Contestants for fraud that may be potentially committed. In particular, fraud is considered to include a Contestant using one or more false names or names of one or more third parties, each Contestant being required to participate in the Contest under his or her own, unique name. Any fraudulent conduct will cause the elimination of the Contestant. 

                        All content is subject to moderation. The Organizer may at its full discretion accept, refuse or delete any content, including content already downloaded, and is not required to provide any justification for so doing. 
                         
                        The Organizer reserves the right to cancel, postpone, interrupt or extend the Contest or change all or part of the terms of the present Rules for any reason whatsoever, subject to compliance therewith. 
                         
                        If, further to an event outside of its control, it is forced to apply this provision, it may not be held liable in this regard. 
                         
                        The Organizer reserves the right to definitively exclude from the Contest any individual who, due to his or her fraudulent conduct, prejudices the proper conduct of the Contest. Furthermore, registering fictitious individuals will cause the immediate elimination of the Contestant. Similarly, any attempt to use the Contest without the unmodified interface in place on the website will be considered attempted fraud. Furthermore, the decompilation of the Contest and use of personal script or any other method intended to bypass the use of the Contest provided by the present Rules will also be considered attempted fraud and will cause the immediate, definitive elimination of the Contestant. 
                    </p>
                    <h3>Article 9: Registration of the Rules</h3>
                    <p>
                        The Rules are registered on www.reglement.net with SCP Level - Bornecque Winandy - Bru Nifosi, Associate Bailiffs, 15, Passage du Marquis de la Londe- 78000 - Versailles, France.

                        The Rules may be changed at any time by way of an amendment drafted by the Organizer, subject to the conditions indicated, and published by way of an online announcement on the website. The amendment is registered with SCP, Associate Bailiffs, the custodian of the Rules, prior to the publication thereof. They will take effect once they are placed online and all Contestants are deemed to have accepted them simply by participating in the Contest as of the effective date of the change. Any Contestant who refuses the change(s) made must cease participating in the Contest. 

                        The Rules are sent at no cost to any individual who so requests in writing by postal mail before the date the Contest ends at the following address: 
                        Annick Goutal
                        "Grand Opening Event" Contest 
                        397 Bleecker Street, New York.

                        The complete Rules may also be viewed online on the Contest website. Postal costs incurred to obtain the Rules will be reimbursed further to a simple request, based on the "slow mail" rate in effect. 
                    </p>
                    <h3>Article 10: Personal information</h3>
                    <p>
                        It is to be noted that, to participate in the Contest, Contestants are required to provide certain personal information (last name, first name, email address, etc.). This information is recorded and saved in a computer file and is required to record the participation of Contestants, determine the winners, and award and transmit the prizes. This information is intended for the Organizer and may be sent to its technical service providers and a provider responsible for the delivery of prizes. 
                        By participating in the Contest, the Contestant may also request a subscription to the Organizer's e-newsletter. Data thereby collected may be used to the extent allowed by law. 

                        Pursuant to French Law No. 78-17 of 6 January 1978 related to Data Processing and Civil Liberties Law, Contestants have a right to access, correct and delete their personal information. To exercise these rights, Contestants must send a letter to the following address: 
                        Annick Goutal House
                        "Grand Opening Event" Contest 
                        397 Bleecker Street, New York.
                        or an email to the following address: service.client@fr.amorepacific.com
                    </p>
                    <h3>Article 11: Disputes</h3>
                    <p>
                        To be considered, potential disputes must be sent in writing to the following address at the latest ninety (90) days after the deadline for participation in the Contest as indicated in the present Rules: 
                        Annick Goutal House - "Grand Opening Event" Contest - 397 Bleecker Street, New York.

                        In the event a dispute persists in relation to the application or interpretation of the present Rules, and in the absence of an amicable settlement, the dispute will be brought before the competent court who will have sole jurisdiction in this regard.
                    </p>

                </div>
                <div class="closePopin">Close</div>
            </div>
        </div>

        <div class="<?php echo $flashMessageClass; ?> popin">
            <div class="mask"></div>
            <div class="popinWrapper">
                <div class="content">
                    <?php 
                        if (isset($messageSuccess))
                            echo $messageSuccess; 
                    ?>
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
