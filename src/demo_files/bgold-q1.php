<?php

/**Template Name: GCS CONSUMER XSELL Business Gold Q1 2024 */
$url = $_SERVER['REQUEST_URI'];
parse_str(parse_url($url, PHP_URL_QUERY), $params);

function sanitizeString($input) {
    // Use a regular expression to match non-alphanumeric characters
    $regex = '/[^a-zA-Z0-9]/';
    
    // Remove non-alphanumeric characters from the input string
    $sanitizedString = preg_replace($regex, '', $input);
    
    return $sanitizedString;
}


$rsvpCode = sanitizeString($params['rsvpCode']);
$rsvpC = strtoupper(substr($params['rsvpCode'], 0, 4));
$zipC = sanitizeString($params['zipCode']);
$urlPath = array_filter(explode("/", parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH)));
$page_url = intval(end($urlPath));
$applynow = $_SERVER['HTTP_HOST'] === "apply.americanexpress.com" ? "https://www.americanexpress.com/us/credit-cards/card-application/apply/dtw-cm-email/businessgold-card/"."?rsvpCode=".$rsvpCode."&zipCode=".$zipC : "https://qwww.americanexpress.com/us/credit-cards/card-application/apply/dtw-cm-email/businessgold-card/"."?rsvpCode=".$rsvpCode."&zipCode=".$zipC;
$d_path = get_template_directory_uri() . '/bgold-q1-24';

$findURL = $_SERVER['HTTP_HOST'] === "apply.americanexpress.com" ? true : false ; 

if (is_int($page_url)) {
   $page_url = $page_url == 0 ? 2 : $page_url;
} else {
   header('Location: ' . get_site_url() . '/' . '404.php');
   exit();
}
if ($page_url > 1) {
   header('Location: ' . get_site_url() . '/' . '404.php');
   exit();
} 
  

$page = $offer[$rsvpC];
$Offer = $page['offer'] ?? '';
$Rate = $_SERVER['HTTP_HOST'] === "apply.americanexpress.com" ? "https://www.americanexpress.com/us/credit-cards/card-application/apply/rsvp/terms/businessgold-card?showBenefitTerms=true" : "https://qwww.americanexpress.com/us/credit-cards/card-application/apply/rsvp/terms/businessgold-card?showBenefitTerms=true";
$offer_end = "Apply by 3/31/2024";

$pageName = "Q1 2024|Consumer|B-gold|EM";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name='robots' content='noindex, nofollow' />
    <?php
        include(realpath(get_template_directory() . '/global_tags/header.php'));
        ?>
    <script>
    var pageName = "<?php echo $pageName;?>"
    </script>
    <script>
    var digitalData = {
        "version": "2.4",
        "page": {
            "pageInfo": {
                "country": "US",
                "language": "en",
                "pageName": "LandingPage|GCS|<?php echo $pageName; ?>"
            },
            "category": {
                "businessUnit": "Acq",
            }
        }
    }
    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>American Express - Consumer Business Gold</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo $d_path ?>/css/style-em.css">
   
</head>

<body>
    <div class="inav_header">
        <?php
        include(realpath(get_template_directory() . '/global_inav/AMEX_Global_Header.html'));
        ?>
    </div>
    <section>
        <header class="topBannerdiv">
            <div class="containerBannerdiv">
                <div class="col-6 banner_textdiv">
                    <h1 automation-id="1_text">
                        <strong>THE SMARTER REWARDS CARD</strong>
                        BUILT FOR THE WAY YOU DO BUSINESS.
                    </h1>
                    <div class="banner_textdiv-right bannerdisplay-on ">
                        <h2 automation-id="2_text">
                            Enhanced 
                            Business Gold Card
                        </h2>
                       
                        <div class="card_main_wrap">
                            <div class="card_one"><img src="<?php echo $d_path ?>/images/bgold.png"></div>
                            <div class="card_two"><img src="<?php echo $d_path ?>/images/bgold_rosegold.png"><div class="newcolor" automation-id="3_text">NEW Color</div> </div>
                        </div>
                        <p automation-id="4_text">Apply by 3/31/2024</p>
                        <a href="<?php echo $applynow;?>" target="_blank" data-tag="1" class="Apply_btn" data-tagdesc="Top Banner Continue button" automation-id="5_url">Continue</a>
                        <a href="<?php echo $Rate;?>" target="_blank" data-tag="1" data-tagdesc="Top Banner Rates &amp; Fees and Offer terms" class="rates-link" automation-id="6_url">
                            <p class="link" automation-id="7_text"><sup>‡</sup>Benefit Terms</p>
                        </a>
                    </div>
                </div>
            
            </div>
        </header>
        <div class="banner_textdiv-right bannerdisplay-off col-5">
            <h2 automation-id="8_text">
                <strong>Enhanced </strong><br>
                Business Gold Card
            </h2>
            <img src="<?php echo $d_path ?>/images/cardimg-mob.svg">
            <p automation-id="9_text">Apply by 3/31/2024</p>
            <a href="<?php echo $applynow;?>" target="_blank" data-tag="1" data-tagdesc="Middle Banner Continue button" class="Apply_btn" automation-id="10_url">Continue</a>
            <a href="<?php echo $Rate;?>" target="_blank" data-tag="1" data-tagdesc="Middle Banner Rates &amp; Fees and Offer Terms" class="rates-link" automation-id="11_url">
                <p class="link" automation-id="12_text"><sup>‡</sup>Benefit Terms</p>
            </a>
        </div>
    </section>
    <section>
        <div class="brownbox">
            <div class="brownbox-padding">
            <div class="EB-flag" automation-id="13_text">Enhanced Benefit</div>
                <div class="fourxbox">
                    <div class="fourxbox-img">
                        <img class="fourxbox-image" src="<?php echo $d_path ?>/images/4x-img.svg">
                    </div>
                    <div class="fourxbox-content">
                        <h4 class="new" automation-id="14_text"> <span> Membership Rewards points </span> on the 2 categories where your business spends the
                            most each billing cycle from 6 categories:​ </h4>
                    </div>
                </div>
                <div class="fourx-smallboxs">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="smallbox-imgtext">
                                <img src="<?php echo $d_path ?>/images/electro.svg">
                                <p automation-id="15_text"> <span class="new-flag">NEW</span> U.S. purchases made
                                    from <strong> electronic goods </strong> retailers and software &amp; cloud system
                                    providers</p>
                            </div>
                            <div class="smallbox-imgtext">
                                <img src="<?php echo $d_path ?>/images/train.svg">
                                <p automation-id="16_text"> <span class="new-flag">NEW</span>
                                    <strong>Transit</strong> purchases, including trains, taxicabs, rideshare services,
                                    ferries, tolls, parking, buses, and subways
                                </p>
                            </div>
                            <div class="smallbox-imgtext">
                                <img src="<?php echo $d_path ?>/images/phone.svg">
                                <p automation-id="17_text"> <span class="new-flag">NEW</span> Monthly
                                    <strong>wireless telephone</strong> service charges made directly from a wireless
                                    telephone service provider in the U.S.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="smallbox-imgtext">
                                <img src="<?php echo $d_path ?>/images/tv.svg">
                                <p automation-id="18_text"> Purchases at U.S. media providers for <strong>advertising</strong> in select media
                                    (online, TV, radio) </p>
                            </div>
                            <div class="smallbox-imgtext">
                                <img src="<?php echo $d_path ?>/images/gas.svg">
                                <p automation-id="19_text"> U.S. purchases at <strong>gas stations</strong> </p>
                            </div>
                            <div class="smallbox-imgtext">
                                <img src="<?php echo $d_path ?>/images/food.svg">
                                <p automation-id="20_text"> U.S. purchases at <strong>restaurants</strong>, including takeout and delivery </p>
                            </div>
                        </div>
                    </div>
                </div>
                <span class="endtext" automation-id="21_text">
                    While your top 2 categories may change each billing cycle based on where your business spent the
                    most, you will earn 4X points on the first $150,000 in combined purchases from these categories each
                    calendar year (then 1X thereafter). Only the top 2 categories from this list each billing cycle will
                    count towards the $150,000 cap.<sup>‡</sup>
   </span>
            </div>
        </div>
    </section>
    <section>
        <div class="brownbox">
            <div class="brownbox-head">
                <h3 automation-id="22_text"><span class="new">NEW!</span> Up to $395 in Annual Statement Credits </h3>
            </div>
            <div class="annualbrownbox-padding">
                <div class="row">
                    <div class="col-md-6 col-12 statementbox">
                        <div class="statementbox-inner">
                            <div class="statementbox-inner-img">
                                <img src="<?php echo $d_path ?>/images/fedex.svg">
                                <img src="<?php echo $d_path ?>/images/grubhub.svg">
                                <img src="<?php echo $d_path ?>/images/officesupply.svg">
                            </div>
                            <div class="">
                                <h5 automation-id="23_text">$240 FLEXIBLE BUSINESS CREDIT</h5>
                                <p automation-id="24_text">Get more for your business purchases. Earn up to $20 in statement credits each month
                                    after you use the Business Gold Card for eligible U.S. purchases at FedEx, Grubhub,
                                    and Office Supply Stores. Enrollment required.<sup>‡</sup></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12 statementbox">
                        <div class="statementbox-inner">
                            <div class="statementbox-inner-img walmartlogo">
                                <img src="<?php echo $d_path ?>/images/walmart.svg">
                            </div>
                            <div class="">
                                <h5 automation-id="25_text">$155 WALMART+ MEMBERSHIP CREDIT</h5>
                                <p automation-id="26_text">Walmart+ members enjoy shopping perks – both online and in-store – at Walmart. Use
                                    your Business Gold Card to pay for a monthly Walmart+ membership (subject to
                                    auto-renewal) and receive a statement credit that covers the full cost* each
                                    month.<sup>‡</sup></p>
                                <p class="p-text" automation-id="27_text"><br><sup>*</sup>$12.95 plus applicable taxes. Plus Up
                                    Benefits not eligible.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="brownbox">
            <div class="brownbox-head">
                <h3 automation-id="28_text"> <span class="new">NEW!</span> 3X Points on Amex Travel </h3>
            </div>
            <div class="travel-sectiondiv">
                <div class="col-12 row">
                    <div class="smallbox-imgtext">
                        <img src="<?php echo $d_path ?>/images/flight.svg">
                        <p automation-id="29_text"> Earn 3X Membership Rewards<sup>®</sup> points on eligible travel purchases made through prepaid bookings
                            on <a href="https://www.americanexpress.com/en-us/travel" target="_blank" data-tag="1" data-tagdesc="NEW! 3X section Amex Travel" automation-id="30_url">AmexTravel.com</a>.<sup>‡</sup> </p>
                    </div>
                </div>
            </div>
            <img src="<?php echo $d_path ?>/images/travelimg.png" class="travelsection-image">
        </div>
    </section>
    <section>
        <div class="brownbox">
            <div class="brownbox-head">
                <h3 automation-id="31_text"> <span class="new">NEW!</span> Cell Phone Protection </h3>
            </div>
            <div class="phoneprotection-sectiondiv">
                <div class="col-12">
                    <div class="phoneprotection-imgtext">
                        <div>
                            <img src="<?php echo $d_path ?>/images/phoneprotection.svg">
                        </div>
                        <div class="phoneprotection-content">
                            <p automation-id="32_text"> Cell Phone Protection* is an embedded benefit of your Card Membership. With Cell Phone
                                Protection, you can be reimbursed, the lesser of, your repair or replacement costs
                                following damage or theft up to $800 per claim with a limit of 2 approved claims per
                                12-month period when your cell phone line is listed on a wireless bill and the prior
                                month’s wireless bill was paid by an Eligible Card Account. A $50 deductible will apply
                                to each approved claim. Additional terms and conditions apply.<sup>‡</sup>
                            </p>
                            <span class="p-text" automation-id="33_text">
                                <sup>*</sup>Coverage is provided by New Hampshire Insurance Company, an AIG Company.
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="benefits-accordion container">
            <div class="benefits-accordion-desktop">
                <ul class="accordion-list">
                    <li class="accordion-item open">
                        <button class="accordion-button" data-tag="1" data-tagdesc="Accordion Section|Additional Card Features and Benefits">
                            <div class="accordion-label card-benifits-div-head">
                                <h2 automation-id="34_text">Additional Card Features and Benefits</h2>
                            </div>
                        </button>
                        <div class="accordion-body">
                            <div class="card-benifits-div">
                                <div class="card-benifits-div-content">
                                    <h3 automation-id="35_text">PAY OVER TIME</h3>
                                    <p automation-id="36_text"> The Pay Over Time option on the Card lets you carry a balance with
                                        interest on purchases.<sup>*‡</sup></p>
                                    <p automation-id="37_text">How it works:</p>
                                    <ul>
                                        <li automation-id="38_text">Eligible purchases can be paid over time, up to the amount of your
                                            Pay Over Time Limit on your account.</li>
                                        <li automation-id="39_text">You can choose to pay for these purchases over time with interest,
                                            or you can pay your full balance each month, whichever is best for
                                            your business.</li>
                                    </ul>
                                    <p class="endbenifits-p p-text" automation-id="40_text"><sup>*</sup>Card Members
                                        must pay in full all charges not included in a Pay Over Time balance.
                                    </p>
                                    <h3 automation-id="41_text">NO PRESET SPENDING LIMIT</h3>
                                    <p automation-id="42_text">No Preset Spending Limit means your spending limit is flexible. Unlike a
                                        traditional card with a set limit, the amount you can spend adapts based
                                        on factors such as your purchase, payment, and credit
                                        history.<sup>‡</sup></p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section>
        <div class="smartbuis-card-div ">
            <div class="smartbuis-card-img">
                <img src="<?php echo $d_path ?>/images/smartcard.png">
            </div>
            <div class="smartbuis-card-text">
                <h2 style="font-family:'Bentonsans';"><b>Better business rewards start with a smarter business card.</b>
                </h2>
                <h3 automation-id="43_text">Grow your business with generous Membership Rewards, statement credits, and more. It only takes a
                    few minutes to apply, so get started today!</h3>
                <p automation-id="44_text">Apply by 3/31/2024</p>
                <a href="<?php echo $applynow;?>" target="_blank" data-tag="1" data-tagdesc="Bottom Banner Continue button" automation-id="45_url"><button automation-id="46_text"> Continue </button></a>
                <a href="<?php echo $Rate;?>" target="_blank" data-tag="1" data-tagdesc="Bottom Banner Rates &amp; fees and Offer terms" class="rates-link" automation-id="47_url">
                    <p class="link" automation-id="48_text"><sup>‡</sup>Benefit Terms</p>
                </a>
            </div>
        </div>
    </section>
    <section class="stkcky" id="stkcky">
        <div class="containerBanner ">
            <img src="<?php echo $d_path ?>/images/left-logo.svg" alt="">
            <div class="card_btn_wrap">
                <a href="<?php echo $applynow;?>" target="_blank" class="apply_cta" data-tag="1" data-tagdesc="Sticky Section Continue button" aria-label="Continue Button" automation-id="49_url">Continue</a>
              <a style="color:#000 !important;" href="<?php echo $Rate;?>" class="offer-bottom rates-link" target="_blank" data-tag="1" data-tagdesc="Bottom Banner Rates &amp; fees and Offer terms" automation-id="50_url">
                   <p class="link" automation-id="51_text"><sup>‡</sup>Benefit Terms</p>
             </a>
            </div>
        </div>
    </section>
    <script>
    stkckyID = document.getElementById("stkcky");

    var myScrollFunc = function() {
        var y = window.scrollY;
        if (y >= 400 && y <= 3500) {
            stkckyID.className = "stkcky show"
        } else {
            stkckyID.className = "stkcky hide"
        }
    };

    window.addEventListener("scroll", myScrollFunc);
    </script>
    <div class="ifooter">
        <?php
        include(realpath(get_template_directory() . '/global_inav/AMEX_Global_Footer.html'));
        ?>
    </div>
    <script src="<?= $d_path ?>/js/tagging.js"></script>
    <script src="<?= $d_path ?>/js/bootstrap.js"></script>
    <script src="<?= $d_path ?>/js/accordion.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>