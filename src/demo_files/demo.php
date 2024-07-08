<?php
   /**
    * Template Name: HILTON q1 2024 BAU MCLP Ungated
    ***/
    include('config.php');
    
	if($page_url < 1 || $page_url > 52) {
        header('Location: ' . get_site_url() . '/hilton-404');
        exit();
    }
   /*excel reader*/
   require(get_template_directory() . '/hilton/reader/php-excel-reader/excel_reader2.php');
   require(get_template_directory() . '/hilton/reader/SpreadsheetReader.php');
   
   $Reader = new SpreadsheetReader(get_template_directory() . '/'.$currentCampaign.'/urls/'.$server.'hilton-cobrand_bau_mclp_q1.xlsx');
   $data = array();
      $i = 1;
   
   foreach ($Reader as $Row) {
       $data[$i] = $Row;
       $i++;
   }
   
   $baseApp = $data[$test_url][1] . $eidInject;
   $baseRate = $data[$test_url][2];
   $baseOffer = $data[$test_url][3];
   $baseBenefit = $data[$test_url][4];
   $surpassApp = $data[$test_url][5] . $eidInject;
   $surpassRate = $data[$test_url][6];
   $surpassOffer = $data[$test_url][7];
   $surpassBenefit = $data[$test_url][8];
   $aspireApp = $data[$test_url][9] . $eidInject;
   $aspireRate = $data[$test_url][10];
   $aspireOffer = $data[$test_url][11];
   $aspireBenefit = $data[$test_url][12];
   $businessApp = $data[$test_url][13] . $eidInject;
   $businessRate = $data[$test_url][14];
   $businessOffer = $data[$test_url][15];
   $businessBenefit = $data[$test_url][16];
   ?>
<!doctype html>
<html lang="en">
    <head>
        <?php include('headScripts.php'); ?>
    </head>
    <body>
        <nav class="navbar navbar-expand-md sticky-top">
            <div class="container">
                <a class="navbar-brand" href="#applyForCard" id="header-logo"> <img
                        src="<?php echo $d_path; ?>/images/hilton_logo.svg" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link stickyApply" id="applyForCard-menu" href="javascript:void(0)">Apply for a Card</a>
                        <a class="nav-item nav-link stickyCompare " href="javascript:void(0)" id="compareCards-menu">Compare all Cards</a>
                        <a class="nav-item nav-link stickyExplore" href="javascript:void(0)" id="exploreRewards-menu">Explore Hilton Honors</a>

                    </div>
                </div>
            </div>
        </nav>
        <header id="applyForCard">
            <div class="banner_top">
                <div class="container">
                    <h1 class="head-banner">Let Your Life Power Your Stay</h1>
                    <h1 class="" style="display: none;">viki</h1>
                    <p class="banner-subhead">Turn your everyday spend into more rewarding stays with the Hilton Honors
                        American
                        Express Cards
                    </p>

                    <ul class="card_Wrap">
                        <li id="banner_base" class="mySlides fade" data-slide="1" role="button"> <img
                                src="<?php echo $d_path; ?>/images/hilton_base_nb_690x435.svg"
                                alt="Hilton Honors American Express Card">

                            <div class="mobilebanner">
                                <h3 class="AnnualFee">No Annual Fee<sup>¤</sup></h3>
                                <a href="<?php echo $baseApp;?>" target="_blank" class="ApplyNow">Apply Now</a>
                                <div class="Terms">
                                    <a href="<?php echo $baseOffer;?>" target="_blank" class="offerTerms offerBaseMTC"
                                        aria-label="†Offer Terms"><sup>†</sup>Offer Terms</a> |
                                    <a href="<?php echo $baseRate;?>" target="_blank" class="ratesFees ratesBaseMTC"
                                        aria-label="¤Rates &amp; Fees"><sup>¤</sup>Rates &amp; Fees</a> |
                                    <a href="<?php echo $baseBenefit;?>" target="_blank" class="benefitTerms benefitsBaseMTC"
                                        aria-label="‡Benefit Terms"><sup>&#x2666;</sup><sup>‡</sup>Benefit Terms</a>
                                </div>
                            </div>
                        </li>
                        <li id="banner_surpass" class="mySlides fade" role="button" data-slide="2"><img
                                src="<?php echo $d_path; ?>/images/hilton_surpass_nb_690x435.svg"
                                alt="Hilton Honors American Express Surpass Card">
                            <div class="mobilebanner">
                                <h3 class="AnnualFee">$150 Annual Fee<sup>¤</sup></h3>
                                <a href="<?php echo $surpassApp;?>" target="_blank"  class="ApplyNow">Apply Now</a>
                                <div class="Terms">
                                    <a href="<?php echo $surpassOffer;?>" target="_blank" class="offerTerms offerBaseMTC"
                                        aria-label="†Offer Terms"><sup>†</sup>Offer Terms</a> |
                                    <a href="<?php echo $surpassRate;?>" target="_blank" class="ratesFees ratesBaseMTC"
                                        aria-label="¤Rates &amp; Fees"><sup>¤</sup>Rates &amp; Fees</a> |
                                    <a href="<?php echo $surpassBenefit;?>" target="_blank" class="benefitTerms benefitsBaseMTC"
                                        aria-label="‡Benefit Terms"><sup>&#x2666;</sup><sup>‡</sup>Benefit Terms</a>
                                </div>
                            </div>
                        </li>
                        <li id="banner_aspire" class="mySlides fade" role="button" data-slide="3"><img
                                src="<?php echo $d_path; ?>/images/hilton_aspire_nb_690x435.svg"
                                alt="Hilton Honors American Express aspire Card">
                            <div class="mobilebanner">
                                <h3 class="AnnualFee">$550 Annual Fee<sup>¤</sup></h3>
                                <a href="<?php echo $aspireApp;?>" target="_blank" class="ApplyNow">Apply Now</a>
                                <div class="Terms">
                                    <a href="<?php echo $aspireOffer;?>" target="_blank" class="offerTerms offerBaseMTC"
                                        aria-label="†Offer Terms"><sup>†</sup>Offer Terms</a> |
                                    <a href="<?php echo $aspireRate;?>" target="_blank" class="ratesFees ratesBaseMTC"
                                        aria-label="¤Rates &amp; Fees"><sup>¤</sup>Rates &amp; Fees</a> |
                                    <a href="<?php echo $aspireBenefit;?>" target="_blank" class="benefitTerms benefitsBaseMTC"
                                        aria-label="‡Benefit Terms"><sup>♦</sup><sup>‡</sup>Benefit Terms</a>
                                </div>
                            </div>
                        </li>
                        <li id="banner_business" class="mySlides fade" role="button" data-slide="4"><img
                                src="<?php echo $d_path; ?>/images/hilton_business_di_480x304.svg"
                                alt="Hilton Honors American Express business Card">
                            <div class="mobilebanner">
                                <h3 class="AnnualFee">$95 Annual Fee<sup>¤</sup></h3>
                                <a href="<?php echo $businessApp;?>" target="_blank" class="ApplyNow">Apply Now</a>
                                <div class="Terms">
                                    <a href="<?php echo $businessOffer;?>" target="_blank" class="offerTerms offerBaseMTC"
                                        aria-label="†Offer Terms"><sup>†</sup>Offer Terms</a> |
                                    <a href="<?php echo $businessRate;?>" target="_blank" class="ratesFees ratesBaseMTC"
                                        aria-label="¤Rates &amp; Fees"><sup>¤</sup>Rates &amp; Fees</a> |
                                    <a href="<?php echo $businessBenefit;?>" target="_blank" class="benefitTerms benefitsBaseMTC"
                                        aria-label="‡Benefit Terms"><sup>♦</sup><sup>‡</sup>Benefit Terms</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="nav_banner_slider">
                        <a href="javascript:void(0)" class="prev" aria-label="Previous Card" title="Previous Card">&#10094;</a>
                        <a href="javascript:void(0)" class="next" aria-label="Next Card" title="Next Card">&#10095;</a>
                        <div class="dot_wrap">
                            <span class="dot" data-slide="1"></span>
                            <span class="dot" data-slide="2"></span>
                            <span class="dot" data-slide="3"></span>
                            <span class="dot" data-slide="4"></span>
                        </div>
                    </div>
                </div>
            <div class="DivPlace">Conrad Bora Bora Nui</div>
    		</div>
            <div class="banner_bottom">
                <div class="container">
                    <div class="ApplyCardWrap wrap_1" data-slide="1">
                        <h2 class="card_name">Hilton Honors American Express Card </h2>
                        <div class="banner_row">
                            <div class="banner-col">
                                <h3 class="lto_time"> WELCOME OFFER</h3>
                                <h2 class="h2-offer">Earn <span>80,000</span> Hilton Honors Bonus Points</h2>

                                <p class="banner_running_text">after you spend $2,000 in purchases on the Card within the
                                    first
                                    6 months of Card Membership.<sup>†</sup></p>

                                <p class="p_banner_note d-none d-md-block">Apply with confidence. Know if you're approved
                                    with no impact to
                                    your
                                    credit score. If you're
                                    approved and accept this Card, your credit score may be impacted.</p>

                            </div>
                            <div class="banner-col">

                                <h3 class="AnnualFee d-none d-md-block">No Annual Fee<sup>¤</sup></h3>
                                <a href="<?php echo $baseApp;?>" target="_blank" class="ApplyNow">Apply Now</a>
                                <div class="Terms">
                                    <a href="<?php echo $baseOffer;?>" target="_blank" class="offerTerms offerBaseMTC"
                                        aria-label="†Offer Terms"><sup>†</sup>Offer Terms</a> |
                                    <a href="<?php echo $baseRate;?>" target="_blank" class="ratesFees ratesBaseMTC"
                                        aria-label="¤Rates &amp; Fees"><sup>¤</sup>Rates &amp; Fees</a> |
                                    <a href="<?php echo $baseBenefit;?>" target="_blank" class="benefitTerms benefitsBaseMTC"
                                        aria-label="‡Benefit Terms"><sup>♦</sup><sup>‡</sup>Benefit Terms</a>
                                </div>
                                <ul class="Reward_ponit_list">
                                    <li>
                                        <div class="earn_ponit">7x</div>
                                        <p>
                                        Points on purchases made directly with hotels and resorts within the Hilton portfolio<sup>‡</sup>
                                        </p>
                                    </li>

                                    <li>
                                        <div class="earn_ponit">5x</div>
                                        <p>Points at U.S. Restaurants, U.S. Supermarkets and U.S. Gas
                                            Stations<sup>‡</sup></p>
                                    </li>

                                    <li>
                                        <div class="earn_ponit">3x</div>
                                        <p>Points on all other eligible purchases<sup>‡</sup></p>
                                    </li>
                                </ul>
                                <p class="p_banner_note d-md-none">Apply with confidence. Know if you're approved with no
                                    impact to
                                    your
                                    credit score. If you're
                                    approved and accept this Card, your credit score may be impacted.</p>

                            </div>
                        </div>
                    </div>

                    <div class="ApplyCardWrap wrap_2" data-slide="2">
                        <h2 class="card_name">Hilton Honors American Express Surpass<sup>®</sup> Card</h2>
                        <div class="banner_row">
                            <div class="banner-col">
                                <h3 class="lto_time"> WELCOME OFFER</h3>
                                <h2 class="h2-offer">Earn <span>130,000</span> Hilton Honors Bonus Points</h2>

                                <p class="banner_running_text">after you spend $3,000 in purchases on the Card within the
                                    first
                                    6 months of Card Membership.<sup>†</sup></p>

                                <p class="p_banner_note d-none d-md-block">Apply with confidence. Know if you're approved
                                    with no impact to
                                    your
                                    credit score. If you're approved and accept this Card, your credit score may be
                                    impacted.
                                </p>

                            </div>
                            <div class="banner-col">
                                <h3 class="AnnualFee d-none d-md-block">$150 Annual Fee<sup>¤</sup></h3>
                                <a href="<?php echo $surpassApp;?>" target="_blank"  class="ApplyNow">Apply Now</a>
                                <div class="Terms">
                                    <a href="<?php echo $surpassOffer;?>" target="_blank" class="offerTerms offerBaseMTC"
                                        aria-label="†Offer Terms"><sup>†</sup>Offer Terms</a> |
                                    <a href="<?php echo $surpassRate;?>" target="_blank" class="ratesFees ratesBaseMTC"
                                        aria-label="¤Rates &amp; Fees"><sup>¤</sup>Rates &amp; Fees</a> |
                                    <a href="<?php echo $surpassBenefit;?>" target="_blank" class="benefitTerms benefitsBaseMTC"
                                        aria-label="‡Benefit Terms"><sup>♦</sup><sup>‡</sup>Benefit Terms</a>
                                </div>
                                <ul class="Reward_ponit_list">
                                    <li>
                                        <div class="earn_ponit">12x</div>
                                        <p>
                                        Points on purchases made directly with hotels and resorts within the Hilton portfolio<sup>‡</sup>
                                        </p>
                                    </li>

                                    <li>
                                        <div class="earn_ponit">6x</div>
                                        <p>Points at U.S. Restaurants, U.S. Supermarkets and U.S. Gas Stations<sup>‡</sup>
                                        </p>
                                    </li>

                                    <li>
                                        <div class="earn_ponit">4x</div>
                                        <p>Points on U.S. Online Retail purchases<sup>‡</sup></p>
                                    </li>
                                    <li>
                                        <div class="earn_ponit">3x</div>
                                        <p>Points on all other eligible purchases<sup>‡</sup></p>
                                    </li>
                                </ul>
                                <p class="p_banner_note  d-md-none">Apply with confidence. Know if you're approved with no impact to your credit score. If you're approved and accept this Card, your credit score may be impacted.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="ApplyCardWrap wrap_3" data-slide="3">
                        <h2 class="card_name">Hilton Honors American Express aspire Card </h2>
                        <div class="banner_row">
                            <div class="banner-col">
                                <h3 class="lto_time"> WELCOME OFFER</h3>
                                <h2 class="h2-offer">Earn <span>150,000</span> Hilton Honors Bonus Points</h2>

                                <p class="banner_running_text">after you spend $6,000 in purchases on the Card within the first 6 months of Card Membership.<sup>†</sup></p>
                                <p class="p_banner_note d-none d-md-block">
                                    Apply with confidence. Know if you're approved with no impact to your credit score. If you're approved and accept this Card, your credit score may be impacted.
                                </p>
                            </div>
                            <div class="banner-col">
                                <h3 class="AnnualFee d-none d-md-block">$550 Annual Fee<sup>¤</sup></h3>
                                <a href="<?php echo $aspireApp;?>" target="_blank" class="ApplyNow">Apply Now</a>
                                <div class="Terms">
                                    <a href="<?php echo $aspireOffer;?>" target="_blank" class="offerTerms offerBaseMTC"
                                        aria-label="†Offer Terms"><sup>†</sup>Offer Terms</a> |
                                    <a href="<?php echo $aspireRate;?>" target="_blank" class="ratesFees ratesBaseMTC"
                                        aria-label="¤Rates &amp; Fees"><sup>¤</sup>Rates &amp; Fees</a> |
                                    <a href="<?php echo $aspireBenefit;?>" target="_blank" class="benefitTerms benefitsBaseMTC"
                                        aria-label="‡Benefit Terms"><sup>♦</sup><sup>‡</sup>Benefit Terms</a>
                                </div>
                                <ul class="Reward_ponit_list">
                                    <li>
                                        <div class="earn_ponit">14x</div>
                                        <p>
                                        Points on purchases made directly with hotels and resorts within the Hilton portfolio<sup>‡</sup>
                                        </p>
                                    </li>

                                    <li>
                                        <div class="earn_ponit">7x</div>
                                        <p>Points on flights booked directly with airlines or Amex Travel, on car rentals
                                            booked
                                            directly from select car rental companies, and at U.S. restaurants<sup>‡</sup>
                                        </p>
                                    </li>

                                    <li>
                                        <div class="earn_ponit">3x</div>
                                        <p>Points on all other eligible purchases<sup>‡</sup></p>
                                    </li>
                                </ul>
                                <p class="p_banner_note d-md-none">Apply with confidence. Know if you're approved with no
                                    impact to
                                    your
                                    credit score. If you're approved and accept this Card, your credit score may be
                                    impacted.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="ApplyCardWrap wrap_4" data-slide="4">
                        <h2 class="card_name">Hilton Honors American Express business Card</h2>
                        <div class="banner_row">
                            <div class="banner-col">

                                <h2 class="h2-offer">Earn <span>130,000</span> Hilton Honors Bonus Points</h2>

                                <p class="banner_running_text">after you spend $3,000 in purchases on the Card within the
                                    first
                                    3 months of Membership.<sup>†</sup></p>

                            </div>
                            <div class="banner-col">
                                <h3 class="AnnualFee d-none d-md-block">$95 Annual Fee<sup>¤</sup></h3>
                                <a href="<?php echo $businessApp;?>" target="_blank" class="ApplyNow">Apply Now</a>
                                <div class="Terms">
                                    <a href="<?php echo $businessOffer;?>" target="_blank" class="offerTerms offerBaseMTC"
                                        aria-label="†Offer Terms"><sup>†</sup>Offer Terms</a> |
                                    <a href="<?php echo $businessRate;?>" target="_blank" class="ratesFees ratesBaseMTC"
                                        aria-label="¤Rates &amp; Fees"><sup>¤</sup>Rates &amp; Fees</a> |
                                    <a href="<?php echo $businessBenefit;?>" target="_blank" class="benefitTerms benefitsBaseMTC"
                                        aria-label="‡Benefit Terms"><sup>♦</sup><sup>‡</sup>Benefit Terms</a>
                                </div>
                                <ul class="Reward_ponit_list">
                                    <li>
                                        <div class="earn_ponit">12x</div>
                                        <p>Points on purchases made directly with hotels and resorts within the Hilton
                                            portfolio<sup>‡</sup>
                                        </p>
                                    </li>

                                    <li>
                                        <div class="earn_ponit">6x</div>
                                        <p>Points at U.S. gas stations, on U.S. purchases for shipping, on wireless
                                            telephone
                                            services purchased directly from U.S. service providers, on flights booked
                                            directly
                                            with airlines or Amex Travel, on car rentals booked directly from select car
                                            rental
                                            companies, and at U.S. restaurants<sup>‡</sup></p>
                                    </li>

                                    <li>
                                        <div class="earn_ponit">3x</div>
                                        <p>Points on all other eligible purchases<sup>‡</sup></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="DivPlace">Conrad Bora Bora Nui</div>
        </header>
        <section id="compareCards">
            <div class="container">
                <div class="head_name_filter">
                    <h2 class="sectionHead">Compare All Hilton Honors Cards</h2>
                    <button class="clearfilter">Clear All Filters</button>
                </div>


                <div class="filter_wrap">

                    <div class="filter_item">
                        <div class="filter_text">Personal or Business Card? </div>

                        <div class="filter_btn_wrap">
                            <div class="filter_btn"><input type="radio" id="personal" name="card_type" value="personal">
                                <label for="personal">Personal</label>
                            </div>
                            <div class="filter_btn"><input type="radio" id="business_card" name="card_type"
                                    value="business">
                                <label for="business_card">Business</label>
                            </div>
                        </div>
                    </div>
                    <div class="filter_item">
                        <div class="filter_text">Where do you spend most?</div>
                        <div class="filter_btn_wrap">
                            <div class="filter_btn">
                                <input type="radio" id="expenses" name="spend" value="expenses">
                                <label for="expenses">Everyday Expenses</label>
                            </div>
                            <div class="filter_btn">
                                <input type="radio" id="online" name="spend" value="online">
                                <label for="online">Online Retail</label>
                            </div>
                            <div class="filter_btn">
                                <input type="radio" id="travel" name="spend" value="travel">
                                <label for="travel">Travel</label>
                            </div>
                        </div>
                    </div>
                    <div class="filter_item">
                        <div class="filter_text">Whats most important to you?</div>
                        <div class="filter_btn_wrap">
                            <div class="filter_btn">
                                <input type="radio" id="no_fee" name="most_important" value="no_fee">
                                <label for="no_fee">No Annual Fee​</label>
                            </div>
                            <div class="filter_btn">
                                <input type="radio" id="luxury_travel" name="most_important" value="luxury_travel">
                                <label for="luxury_travel">Luxury Stays</label>
                            </div>
                            <div class="filter_btn">
                                <input type="radio" id="business_benefits" name="most_important" value="business_benefits">
                                <label for="business_benefits">Business Benefits​</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="compareWrap">
                    <div class="compare_col" id="hilton_honors">
                        <img src="<?php echo $d_path; ?>/images/hilton_base_nb_690x435.svg" class="card_img"
                            alt="Hilton Honors American Express Card">
                        <div class="compare_eq">
                            <h2 class="card_name_compare">Hilton Honors American Express Card</h2>
                            <h3 class="AnnualFee">No Annual Fee<sup>¤</sup></h3>
                            <a href="<?php echo $baseApp;?>" target="_blank" class="ApplyNow">Apply Now</a>
                            <div class="Terms">
                                <a href="<?php echo $baseOffer;?>" target="_blank" class="offerTerms offerBaseMTC"
                                    aria-label="†Offer Terms"><sup>†</sup>Offer Terms</a> |
                                <a href="<?php echo $baseRate;?>" target="_blank" class="ratesFees ratesBaseMTC"
                                    aria-label="¤Rates &amp; Fees"><sup>¤</sup>Rates &amp; Fees</a> |
                                <a href="<?php echo $baseBenefit;?>" target="_blank" class="benefitTerms benefitsBaseMTC"
                                    aria-label="‡Benefit Terms"><sup>♦</sup><sup>‡</sup>Benefit Terms</a>
                            </div>
                            <div class="padding_col">
                                <h2 class="h2-offer">Earn <span>80,000</span> Hilton Honors Bonus Points</h2>
                                <p class="col_running_text">after you spend $2,000 in purchases on the Hilton Honors
                                    American
                                    Express Card within your first 6 months of Card Membership.<sup>†</sup> </p>

                                <!-- <p class="col_running_text">Offer
                                    ends 1/17/2024.</p> -->
                            </div>
                            <ul class="Reward_ponit_list">
                                <li class="point_1">
                                    <div class="earn_ponit">7x</div>
                                    <p>
                                        Points on purchases made directly with hotels and resorts within the Hilton
                                        portfolio<sup>‡</sup>
                                    </p>
                                </li>

                                <li  class="point_2">
                                    <div class="earn_ponit">5x</div>
                                    <p>Points at U.S. Restaurants, U.S. Supermarkets and U.S. Gas
                                        Stations<sup>‡</sup></p>
                                </li>

                                <li>
                                    <div class="earn_ponit">3x</div>
                                    <p>Points on all other eligible purchases<sup>‡</sup></p>
                                </li>
                            </ul>
                        </div>
                        <div class="benefits">

                            <div class="benefits_btn">See More Benefits</div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="HonorsChecked">
                                <label class="form-check-label" for="HonorsChecked">
                                    Compare
                                </label>
                            </div>
                            <div class="benefit_details">
                                <div class="benefit_head">Benefits</div>

                                <ul class="Benefits_ul">
                                    <li class="tooltipwrap tooltipInline">Complimentary Hilton Honors<sup>™</sup> Silver
                                        Status<sup>‡</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="Enjoy complimentary Silver status with your Card. Silver status gives you a 20% Bonus on Base Points you earn on every stay, plus, you receive the fifth night free when you book a standard room stay with 100% Points.<sup>‡</sup>"
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>
                                    <li class="tooltipwrap tooltipInline">Earn Gold Status after $20K Spend<sup>‡</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="Spend $20,000 in eligible purchases on your Card in a calendar year and you can earn Hilton Honors Gold status through the end of the next calendar year. With Gold status, you can enjoy:<br/>- An 80% Bonus on Base Points you earn on every stay<br/>- Space-available room upgrades at select properties <br/>- A daily food & beverage credit at select brands in the U.S. and complimentary continental breakfast at select brands outside of the U.S.<br/>- Fifth night free when you book a standard room stay with 100% Points<sup>‡</sup>"
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>
                                    <li class="tooltipwrap tooltipInline">No Foreign Transaction Fees<sup>‡¤</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="Enjoy international travel without additional fees on purchases made abroad. <sup>‡¤</sup>"
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>
                                    <li class="tooltipwrap tooltipInline">Pay It Plan It<sup>®‡</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="Pay It<sup>®</sup>: Tap a purchase amount under $100 in the app to quickly make payments throughout the month. Plan It<sup>®</sup>: Select purchases of $100 or more and split them up into monthly payments with a fixed fee. Plus, you'll still earn rewards the way you usually do.<sup>‡</sup>"
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>
                                    <li class="tooltipwrap tooltipInline">Amex-Exclusive Benefits<sup>‡</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="Amex Offers<sup>‡</sup>  , Send & Split<sup>®‡</sup>  , ShopRunner<sup>‡</sup> (enrollment required), American Express Experiences<sup>‡</sup>"
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>
                                    <li class="tooltipwrap tooltipInline">Purchase Protection<sup>♦</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="When an American Express<sup>®</sup> Card Member charges a Covered Purchase with their Eligible Card, Purchase Protection<sup>♦︎</sup> can help protect their Covered Purchases for up to 90 days from the Covered Purchase date if it is stolen or accidentally damaged. The coverage is limited up to $1,000 per occurrence, up to $50,000 per Card Member account per calendar year. Please read important exclusions and restrictions."
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>
                                    <li class="tooltipwrap tooltipInline">Extended Warranty<sup>♦</sup> <span
                                            class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="With Extended Warranty<sup>♦︎</sup> you can shop with less worry knowing the terms of the Original Manufacturer’s Warranty can be extended up to one additional year. Applies to warranties of 5 years or less on Covered Purchases in the United States or its territories or possessions."
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>
                                    <li class="tooltipwrap tooltipInline">Car Rental Loss and Damage Insurance<sup>♦</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="Car Rental Loss and Damage Insurance<sup>♦</sup> can provide coverage for Damage to or Theft of a Rental Vehicle in a Covered Territory when You use your Eligible Card to reserve and pay for the Entire Rental and decline the collision damage waiver (CDW) at the Rental Company counter. Please read important exclusions and restrictions. This product provides secondary coverage and does not include liability coverage. Not all vehicle types or rentals are covered.  Coverage is not available in Australia, Italy, and New Zealand."
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>
                                    <li class="tooltipwrap tooltipInline">Global Assist<sup>®</sup> Hotline<sup>‡</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="Whenever you travel more than 100 miles from home, Global Assist<sup>®</sup> Hotline<sup>‡</sup> is available for 24/7 emergency assistance and coordination services, including medical and legal referrals, emergency cash wires, and missing luggage assistance. Card Members are responsible for the costs charged by third-party service providers. Other terms and conditions apply."
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>
                                </ul>
                            </div>

                        </div>

                    </div>
                    <div class="compare_col" id="surpass">
                        <img src="<?php echo $d_path; ?>/images/hilton_surpass_nb_690x435.svg" class="card_img"
                            alt="Hilton Honors American Express Surpass<sup>®</sup> Card">
                        <div class="compare_eq">
                            <h2 class="card_name_compare">Hilton Honors American Express Surpass<sup>®</sup> Card</h2>
                            <h3 class="AnnualFee">$150 Annual Fee<sup>¤</sup></h3>
                            <a href="<?php echo $surpassApp;?>" target="_blank"  class="ApplyNow">Apply Now</a>
                            <div class="Terms">
                                <a href="<?php echo $surpassOffer;?>" target="_blank" class="offerTerms offerBaseMTC"
                                    aria-label="†Offer Terms"><sup>†</sup>Offer Terms</a> |
                                <a href="<?php echo $surpassRate;?>" target="_blank" class="ratesFees ratesBaseMTC"
                                    aria-label="¤Rates &amp; Fees"><sup>¤</sup>Rates &amp; Fees</a> |
                                <a href="<?php echo $surpassBenefit;?>" target="_blank" class="benefitTerms benefitsBaseMTC"
                                    aria-label="‡Benefit Terms"><sup>♦</sup><sup>‡</sup>Benefit Terms</a>
                            </div>
                            <div class="padding_col">
                                <h2 class="h2-offer">Earn <span>130,000</span> Hilton Honors Bonus Points</h2>
                                <p class="col_running_text">after you spend $3,000 in purchases on the Hilton Honors
                                    American
                                    Express Surpass<sup>®</sup> Card within your first 6 months of Card Membership.<sup>†</sup>
                                </p>

                                <!-- <p class="col_running_text">Offer
                                    ends 1/17/2024.</p> -->
                            </div>
                            <ul class="Reward_ponit_list">
                                <li  class="point_1">
                                    <div class="earn_ponit">12X</div>
                                    <p>
                                        Points on purchases made directly with hotels and resorts within the Hilton
                                        portfolio<sup>‡</sup>
                                    </p>
                                </li>

                                <li  class="point_2">
                                    <div class="earn_ponit">6x</div>
                                    <p>Points at U.S. Restaurants, U.S. Supermarkets and U.S. Gas Stations<sup>‡</sup></p>
                                </li>

                                <li>
                                    <div class="earn_ponit">4x</div>
                                    <p>Points on U.S. Online Retail purchases<sup>‡</sup></p>
                                </li>

                                <li>
                                    <div class="earn_ponit">3X</div>
                                    <p>Points on all other eligible purchases<sup>‡</sup></p>
                                </li>
                            </ul>
                        </div>
                        <div class="benefits">

                            <div class="benefits_btn">See More Benefits</div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="SurpassChecked">
                                <label class="form-check-label" for="SurpassChecked">
                                    Compare
                                </label>
                            </div>
                            <div class="benefit_details">
                                <div class="benefit_head">Benefits</div>

                                <ul class="Benefits_ul">
                                    <li class="tooltipwrap tooltipInline">Complimentary Hilton Honors<sup>™</sup> Gold
                                        Status<sup>‡</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="Enjoy complimentary Gold status with your Card. Gold status gives you an 80% Bonus on Base Points you earn on every stay, space-available room upgrades at select properties, and more.<sup>‡</sup>"
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>
                                    <li class="tooltipwrap tooltipInline">$200 Hilton Statement Credit<sup>‡</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="Get up to $50 in statement credits each quarter for purchases made directly with a property in the Hilton portfolio on your Hilton Honors American Express Surpass<sup>®</sup> Card. That’s up to $200 in statement credits annually.<sup>‡</sup>"
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>
                                    <li class="tooltipwrap tooltipInline">Earn Free Night Reward after $15K
                                        Spend<sup>‡</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="Earn one Free Night Reward from Hilton Honors after spending $15,000 in purchases on your Card in a calendar year.<sup>‡</sup>"
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>
                                    <li class="tooltipwrap tooltipInline">Earn Diamond Status after $40K Spend<sup>‡</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="Spend $40,000 on eligible purchases on your Card in a calendar year and you can earn an upgrade to Hilton Honors Diamond status through the end of the next calendar year. With Hilton Honors Diamond status, enjoy benefits like:<br/>- A 100% Bonus on all Base Points you earn on every stay<br/>- Premium Wi-Fi at select properties<br/>- Daily food & beverage credit at select brands in the U.S. and complimentary continental breakfast at select brands outside of the U.S.<br/>- Space-available room upgrades at select properties <br/>- Executive lounge access<sup>‡</sup>"
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>
                                    <li class="tooltipwrap tooltipInline">Complimentary National Car Rental<sup>®</sup>
                                        Emerald Club Executive<sup>®</sup> Status<sup>‡</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="As a Hilton Honors Surpass Card Member, you can enroll to receive complimentary National Car Rental<sup>®</sup> Emerald Club Executive<sup>®</sup> status through the link on your American Express online account. After you’re enrolled, you can reserve a rental car by calling National Car Rental directly, using your travel service, or by booking online or through the National Car Rental mobile app. Terms apply.<sup>‡</sup>"
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>
                                    <li class="tooltipwrap tooltipInline">No Foreign Transaction Fees<sup>‡¤</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="Enjoy international travel without additional fees on purchases made abroad.<sup>‡¤</sup>"
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>
                                    <li class="tooltipwrap tooltipInline">Pay It Plan It<sup>®</sup><sup>‡</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="Pay It<sup>®</sup>: Tap a purchase amount under $100 in the app to quickly make payments throughout the month. Plan It<sup>®</sup>: Select purchases of $100 or more and split them up into monthly payments with a fixed fee. Plus, you'll still earn rewards the way you usually do.<sup>‡</sup>"
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>
                                    <li class="tooltipwrap tooltipInline">Amex-Exclusive Benefits<sup>‡</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="Amex Offers<sup>‡</sup> , Send & Split<sup>®‡</sup> , ShopRunner<sup>‡</sup> (enrollment required) , American Express Experiences<sup>‡</sup>  "
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>
                                    <li class="tooltipwrap tooltipInline">Purchase Protection<sup>♦</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="When an American Express<sup>®</sup> Card Member charges a Covered Purchase with their Eligible Card, Purchase Protection♦︎ can help protect their Covered Purchases for up to 90 days from the Covered Purchase date if it is stolen or accidentally damaged. The coverage is limited up to $1,000 per occurrence, up to $50,000 per Card Member account per calendar year. Please read important exclusions and restrictions."
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>
                                    <li class="tooltipwrap tooltipInline">Extended Warranty<sup>♦</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="With Extended Warranty♦︎ you can shop with less worry knowing the terms of the Original Manufacturer’s Warranty can be extended up to one additional year. Applies to warranties of 5 years or less on Covered Purchases in the United States or its territories or possessions."
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>
                                    <li class="tooltipwrap tooltipInline">Car Rental Loss and Damage Insurance<sup>♦</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="Car Rental Loss and Damage Insurance♦︎ can provide coverage for Damage to or Theft of a Rental Vehicle in a Covered Territory when You use your Eligible Card to reserve and pay for the Entire Rental and decline the collision damage waiver (CDW) at the Rental Company counter. Please read important exclusions and restrictions. This product provides secondary coverage and does not include liability coverage. Not all vehicle types or rentals are covered.  Coverage is not available in Australia, Italy, and New Zealand."
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>
                                    <li class="tooltipwrap tooltipInline">Global Assist<sup>®</sup> Hotline<sup>‡</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="Whenever you travel more than 100 miles from home, Global Assist<sup>®</sup> Hotline<sup>‡</sup>  is available for 24/7 emergency assistance and coordination services, including medical and legal referrals, emergency cash wires, and missing luggage assistance. Card Members are responsible for the costs charged by third-party service providers. Other terms and conditions apply."
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>
                                    <li class="tooltipwrap tooltipInline">Baggage Insurance Plan<sup>♦</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="Baggage Insurance Plan<sup>♦</sup> coverage can be in effect for Covered Persons for lost, damaged, or stolen Baggage during their travel on a Common Carrier Vehicle (e.g. plane, train, ship, or bus) when the Entire Fare for a ticket for the trip (one-way or round-trip) is charged to an Eligible Card. Coverage can be provided for up to $1,250 for carry-on Baggage and up to $500 for checked Baggage, in excess of coverage provided by the Common Carrier. For New York State residents, there is a $10,000 aggregate maximum limit for all Covered Persons per Covered Trip. Please read important exclusions and restrictions."
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>
                                </ul>
                            </div>

                        </div>

                    </div>
                    <div class="compare_col" id="aspire">
                        <img src="<?php echo $d_path; ?>/images/hilton_aspire_nb_690x435.svg" class="card_img"
                            alt="Hilton Honors American Express Aspire Card">
                        <div class="compare_eq">
                            <h2 class="card_name_compare">Hilton Honors American Express Aspire Card</h2>
                            <h3 class="AnnualFee">$550 Annual Fee<sup>¤</sup></h3>
                            <a href="<?php echo $aspireApp;?>" target="_blank" class="ApplyNow">Apply Now</a>
                            <div class="Terms">
                                <a href="<?php echo $aspireOffer;?>" target="_blank" class="offerTerms offerBaseMTC"
                                    aria-label="†Offer Terms"><sup>†</sup>Offer Terms</a> |
                                <a href="<?php echo $aspireRate;?>" target="_blank" class="ratesFees ratesBaseMTC"
                                    aria-label="¤Rates &amp; Fees"><sup>¤</sup>Rates &amp; Fees</a> |
                                <a href="<?php echo $aspireBenefit;?>" target="_blank" class="benefitTerms benefitsBaseMTC"
                                    aria-label="‡Benefit Terms"><sup>♦</sup><sup>‡</sup>Benefit Terms</a>
                            </div>
                            <div class="padding_col">
                                <h2 class="h2-offer">Earn <span>150,000</span> Hilton Honors Bonus Points</h2>
                                <p class="col_running_text">after you spend $6,000 in purchases on the Hilton Honors American
                                    Express Aspire Card within your first 6 months of Card Membership.<sup>†</sup> </p>

                                <!-- <p class="col_running_text">Offer
                                    ends 1/17/2024.</p> -->
                            </div>
                            <ul class="Reward_ponit_list">
                                <li class="point_1">
                                    <div class="earn_ponit">14X</div>
                                    <p>
                                        Points on purchases made directly with hotels and resorts within the Hilton
                                        portfolio<sup>‡</sup>
                                    </p>
                                </li>

                                <li class="point_2">
                                    <div class="earn_ponit">7x</div>
                                    <p>Points on flights booked directly with airlines or Amex Travel, on car rentals booked
                                        directly from select car rental companies, and at U.S. restaurants<sup>‡</sup></p>
                                </li>

                                <li>
                                    <div class="earn_ponit">3x</div>
                                    <p>Points on all other eligible purchases<sup>‡</sup></p>
                                </li>
                            </ul>
                        </div>
                        <div class="benefits">

                            <div class="benefits_btn">See More Benefits</div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="AspireChecked">
                                <label class="form-check-label" for="AspireChecked">
                                    Compare
                                </label>
                            </div>
                            <div class="benefit_details">
                                <div class="benefit_head">Benefits</div>

                                <ul class="Benefits_ul">
                                    <li class="tooltipwrap tooltipInline">Complimentary Hilton Honors<sup>™</sup> Diamond
                                        Status<sup>‡</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="Enjoy complimentary Diamond status with your Card. Diamond status gives you a 100% Bonus on Base Points you earn on every stay, Premium Wi-Fi and space-available room upgrades at select properties, executive lounge access, and more.<sup>‡</sup>"
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>
                                    <li class="tooltipwrap tooltipInline">Annual Free Night Reward<sup>‡</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="Enjoy an Annual Free Night Reward from Hilton Honors in your first year of Card Membership and every year upon Card renewal.<sup>‡</sup>"
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>
                                    <li class="tooltipwrap tooltipInline">$400 Hilton Resort Credit<sup>‡</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="Get up to $200 in statement credits semi-annually for eligible purchases made directly with participating Hilton Resorts on your Hilton Honors Aspire Card. That's up to $400 back annually.<sup>‡</sup>"
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>

                                    <li class="tooltipwrap tooltipInline">Earn Additional Free Night Rewards after $30k and
                                        $60k spent<sup>‡</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="Earn a Free Night Reward from Hilton after you spend $30,000 in purchases on your Card in a calendar year. Plus, you can earn an additional Free Night Reward from Hilton after you spend $60,000 in purchases.<sup>‡</sup>"
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>

                                    <li class="tooltipwrap tooltipInline">$200 Flight Credit<sup>‡</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="Get up to $50 in statement credits each quarter on flight purchases made directly with an airline or through amextravel.com using your Hilton Honors American Express Aspire Card.<sup>‡</sup>"
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>

                                    <li class="tooltipwrap tooltipInline">$189 CLEAR<sup>®</sup> Plus Credit<sup>‡</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="CLEAR<sup>®</sup> uses unique attributes, such as eyes or fingerprints, to digitally verify identity to help its members move faster through security at select airports nationwide. Receive up to $189 per calendar year in statement credits, when you pay for a CLEAR Plus Membership (subject to auto-renewal) with your Hilton Honors America Express Aspire Card.<sup>‡</sup>"
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>

                                    <li class="tooltipwrap tooltipInline">$100 Property Credit<sup>‡</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="With your Hilton Honors American Express Aspire Card, book a 2 night minimum stay at hiltonhonorsaspirecard.com and get up to $100 in hotel credits for qualifying charges at participating Waldorf Astoria<sup>®</sup> Hotels & Resorts and Conrad<sup>®</sup> Hotels & Resorts.<sup>‡</sup>"
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>

                                    <li class="tooltipwrap tooltipInline">Complimentary National Car Rental<sup>®</sup>
                                        Emerald Club Executive<sup>®</sup> Status<sup>‡</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="As a Hilton Honors Aspire Card Member, you can enroll to receive complimentary National Car Rental<sup>®</sup> Emerald Club Executive<sup>®</sup> status through the link on your American Express online account. After you’re enrolled, you can reserve a rental car by calling National Car Rental directly, using your travel service, or by booking online or through the National Car Rental mobile app. Terms apply.<sup>‡</sup>"
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>
                                    <li class="tooltipwrap tooltipInline">Amex-Exclusive Benefits<sup>‡</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="Amex Offers<sup>‡</sup>  , Send & Split<sup>®</sup><sup>‡</sup>  , ShopRunner<sup>‡</sup>  (enrollment required) , American Express Experiences<sup>‡</sup>  "
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>

                                    <li class="tooltipwrap tooltipInline">Purchase Protection<sup>♦</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="Sometimes your favorite new purchase gets stolen, accidentally damaged, or lost. But when you use your Eligible Card for Covered Purchases, your Membership can help protect them for up to 90 days from the Covered Purchase date. Please read important exclusions and restrictions.<sup>*</sup><br/><br/><sup>*</sup> Up to $10,000 per occurrence, $50,000 per calendar year."
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>
                                    <li class="tooltipwrap tooltipInline">Extended Warranty<sup>♦</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="With Extended Warranty♦︎ you can shop with less worry knowing the terms of the Original Manufacturer’s Warranty can be extended up to one additional year. Applies to warranties of 5 years or less on Covered Purchases in the United States or its territories or possessions."
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>
                                    <li class="tooltipwrap tooltipInline">Car Rental Loss and Damage Insurance<sup>♦</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="Car Rental Loss and Damage Insurance♦︎ can provide coverage for Damage to or Theft of a Rental Vehicle in a Covered Territory when You use your Eligible Card to reserve and pay for the Entire Rental and decline the collision damage waiver (CDW) at the Rental Company counter. Please read important exclusions and restrictions. This product provides secondary coverage and does not include liability coverage. Not all vehicle types or rentals are covered.  Coverage is not available in Australia, Italy, and New Zealand."
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>
                                    <li class="tooltipwrap tooltipInline">Premium Global Assist Hotline<sup>‡</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="You can rely on 24/7 medical, legal, financial, and other select emergency coordination and assistance services while traveling more than 100 miles from home. Premium Global Assist<sup>®</sup> Hotline<sup>‡</sup>  can direct you to medical and legal professionals and help with prescription replacement coordination, emergency hotel check-ins and cash wires, missing luggage, and more. Emergency medical transportation assistance may be provided at no cost only if approved and coordinated by Premium Global Assist Hotline. Card Members may be responsible for the costs charged by third-party service providers."
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>
                                    <li class="tooltipwrap tooltipInline">Baggage Insurance Plan<sup>♦</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="Baggage Insurance Plan♦ coverage can be in effect for Covered Persons for eligible lost, damaged, or stolen Baggage during their travel on a Common Carrier Vehicle (e.g. plane, train, ship, or bus) when the Entire Fare for a ticket for the trip (one-way or round-trip) is charged to an Eligible Card. Coverage can be provided for up to $2,000 for checked Baggage and up to a combined maximum of $3,000 for checked and carry-on Baggage, in excess of coverage provided by the Common Carrier. The coverage is also subject to a $3,000 aggregate limit per Covered Trip.  For New York State residents, there is a $2,000 per bag/suitcase limit for each Covered Person with a $10,000 aggregate maximum for all Covered Persons per Covered Trip. Please read important exclusions and restrictions."
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>
                                    <li class="tooltipwrap tooltipInline">Return Protection<sup>‡</sup>

                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="With Return Protection<sup>‡</sup>, you may return eligible purchases to American Express if the seller won't take them back up to 90 days from the date of purchase.<sup>*</sup><br/><br/><sup>*</sup>American Express may refund the full purchase price excluding shipping and handling, up to $300 per item, up to a maximum of $1,000 per calendar year per Card account, if you purchased it entirely with your eligible American Express<sup>®</sup> Card. Purchases must be made in the U.S. or its territories."
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>

                                    <li class="tooltipwrap tooltipInline">Trip Delay Insurance<sup>‡</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="If a round-trip is paid for entirely with your Eligible Card and a covered reason delays your trip more than 6 hours, Trip Delay Insurance <sup>‡</sup> can help reimburse certain additional expenses purchased on the same Eligible Card, up to $500 per trip, maximum 2 claims per Eligible Card per 12 consecutive month period. Terms, conditions and limitations apply.<sup>*</sup><br/><br/><sup>*</sup>Coverage is provided by New Hampshire Insurance Company, an AIG Company."
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>

                                    <li class="tooltipwrap tooltipInline">Trip Cancellation and Interruption
                                        Insurance<sup>‡</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="If a round-trip is paid for entirely with your Eligible Card and a covered reason cancels or interrupts your trip, Trip Cancellation and Interruption Insurance<sup>‡</sup> can help reimburse the non-refundable travel expenses purchased with the same Eligible Card, up to $10,000 per trip and up to $20,000 per Eligible Card per 12 consecutive month period. Terms, conditions and limitations apply.<sup>*</sup><br/><br/><sup>*</sup>Coverage is provided by New Hampshire Insurance Company, an AIG Company."
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>
                                    <li class="tooltipwrap tooltipInline">Cell Phone Protection<sup>‡</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="Fixing a cracked screen can be expensive. With Cell Phone Protection<sup>*</sup>, you can be reimbursed, the lesser of, your cost to repair or replace your damaged cell phone, including a cracked screen, for a maximum of $800 per claim with a limit of 2 approved claims per 12-month period when your cell phone line is listed on a wireless bill and the prior month's wireless bill was paid by an Eligible Card Account. A $50 deductible will apply to each approved claim. Additional terms and conditions apply.<sup>‡</sup><br/><br/><sup>*</sup>Coverage is provided by New Hampshire Insurance Company, an AIG Company."
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>

                                </ul>
                            </div>

                        </div>

                    </div>
                    <div class="compare_col" id="business">
                        <img src="<?php echo $d_path; ?>/images/hilton_business_di_480x304.svg" class="card_img"
                            alt="Hilton Honors American Express Business Card">
                        <div class="compare_eq">
                            <h2 class="card_name_compare">Hilton Honors American Express Business Card</h2>
                            <h3 class="AnnualFee">$95 Annual Fee<sup>¤</sup></h3>
                            <a href="<?php echo $businessApp;?>" target="_blank" class="ApplyNow">Apply Now</a>
                            <div class="Terms">
                                <a href="<?php echo $businessOffer;?>" target="_blank" class="offerTerms offerBaseMTC"
                                    aria-label="†Offer Terms"><sup>†</sup>Offer Terms</a> |
                                <a href="<?php echo $businessRate;?>" target="_blank" class="ratesFees ratesBaseMTC"
                                    aria-label="¤Rates &amp; Fees"><sup>¤</sup>Rates &amp; Fees</a> |
                                <a href="<?php echo $businessBenefit;?>" target="_blank" class="benefitTerms benefitsBaseMTC"
                                    aria-label="‡Benefit Terms"><sup>♦</sup><sup>‡</sup>Benefit Terms</a>
                            </div>
                            <div class="padding_col">
                                <h2 class="h2-offer">Earn <span>130,000</span> Hilton Honors Bonus Points</h2>
                                <p class="col_running_text">after you spend $3,000 in purchases on the Hilton Honors American
                                    Express Business Card within your first 3 months of Card Membership.<sup>†</sup> </p>
                            </div>
                            <ul class="Reward_ponit_list">
                                <li class="point_1">
                                    <div class="earn_ponit">12x</div>
                                    <p>
                                        Points on purchases made directly with hotels and resorts within the Hilton
                                        portfolio<sup>‡</sup>
                                    </p>
                                </li>

                                <li class="point_2">
                                    <div class="earn_ponit">6x</div>
                                    <p>Points at U.S. gas stations, on U.S. purchases for shipping, on wireless telephone
                                        services
                                        purchased directly from U.S. service providers, on flights booked directly with airlines or
                                        Amex
                                        travel, on car rentals booked directly from select car rental companies, and at U.S.
                                        restaurants<sup>‡</sup></p>
                                </li>

                                <li>
                                    <div class="earn_ponit">3x</div>
                                    <p>Points on all other eligible purchases<sup>‡</sup></p>
                                </li>
                            </ul>
                        </div>
                        <div class="benefits">

                            <div class="benefits_btn">See More Benefits</div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="BusinessChecked">
                                <label class="form-check-label" for="BusinessChecked">
                                    Compare
                                </label>
                            </div>
                            <div class="benefit_details">
                                <div class="benefit_head">Benefits</div>

                                <ul class="Benefits_ul">
                                    <li class="tooltipwrap tooltipInline">Complimentary Hilton Honors™ Gold
                                        Status<sup>‡</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="Enjoy complimentary Hilton Honors Gold status with your Card.<sup>‡</sup>"
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>
                                    <li class="tooltipwrap tooltipInline">Free Night Reward<sup>‡</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="Earn one Free Night Reward from Hilton Honors after spending $15,000 in purchases on your Card in a calendar year. Earn a second Free Night Reward after spending $60,000 in the same calendar year.<sup>‡</sup>"
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>
                                    <li class="tooltipwrap tooltipInline">Earn Diamond Status after $40K Spend<sup>‡</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="Spend $40,000 on eligible purchases on your Card in a calendar year and you can earn an upgrade to Hilton Honors Diamond status through the end of the next calendar year. With Hilton Honors Diamond status, enjoy benefits like:<br/>- A 100% Bonus on all Base Points you earn on every stay<br/>- Premium Wi-Fi at select properties<br/>- Daily food & beverage credit at select brands in the U.S. and complimentary continental breakfast at select brands outside of the U.S.<br/>- Space-available room upgrades at select properties - Executive lounge access<sup>‡</sup>"
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>

                                    <li class="tooltipwrap tooltipInline">Priority Pass™ Select — 10 Free Visits<sup>‡</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="Whether you just want to relax or get work done, you’ll have 10 free visits to a selection of over 1,200 airport lounges each year once enrolled in Priority Pass Select Membership.<sup>‡</sup>"
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>

                                    <li class="tooltipwrap tooltipInline">Vendor Pay by Bill.com<sup>‡</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="You can make the most out of paying your business bills. Enhance cash flow management and take advantage of earning the rewards of your Card when you use your Card to pay bills with Vendor Pay by Bill.com. Fees may apply and enrollment is required. Terms apply.<sup>‡</sup>"
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>
                                </ul>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="Compare_center">
                    <button href="#" class="ApplyNow" id="comparenow">Compare Now</button>
                </div>
            </div>
        </section>
        <section id="exploreRewards">
            <div class="container">
                <div class="slider_tablet">
                    <div class="slider_left range_4">
                        <h2 class="sectionHead">How far will Hilton Honors Points take you?</h2>

                        <p class="slider_running_text">See how many Points it takes to redeem free nights at 4,000 of the
                            over
                            7,000
                            hotels and resorts at Hilton
                            brands worldwide.</p>

                        <p class="notes">*Points values can change based on seasonality and demand; these are just examples
                            of
                            what
                            you may be able
                            to get. For hotel stays, the Points value includes the room rate only.</p>

                    </div>
                    <div class="slider_left range_3">
                        <h2 class="sectionHead">How far will Hilton Honors Points take you?</h2>

                        <p class="slider_running_text">See how many Points it takes to redeem free nights at 4,000 of the
                            over
                            7,000
                            hotels and resorts at Hilton
                            brands worldwide.</p>

                        <p class="notes">*Points values can change based on seasonality and demand; these are just examples
                            of
                            what
                            you may be able
                            to get. For hotel stays, the Points value includes the room rate only.</p>

                    </div>
                    <div class="slider_left range_2">
                        <h2 class="sectionHead">How far will Hilton Honors Points take you?</h2>

                        <p class="slider_running_text">See how many Points it takes to redeem free nights at 4,000 of the
                            over
                            7,000
                            hotels and resorts at Hilton
                            brands worldwide.</p>

                        <p class="notes">*Points values can change based on seasonality and demand; these are just examples
                            of
                            what
                            you may be able
                            to get. For hotel stays, the Points value includes the room rate only.</p>

                    </div>
                    <div class="slider_left range_1 ">
                        <h2 class="sectionHead">How far will Hilton Honors Points take you?</h2>

                        <p class="slider_running_text">See how many Points it takes to redeem free nights at 4,000 of the
                            over
                            7,000
                            hotels and resorts at Hilton
                            brands worldwide.</p>

                        <p class="notes">*Points values can change based on seasonality and demand; these are just examples
                            of
                            what
                            you may be able
                            to get. For hotel stays, the Points value includes the room rate only.</p>

                    </div>
                    <div class="slider_right">
                        <div class="rangeslider">

                            <div class="pointValues">
                                <span class="span1"> 4 NIGHTS</span>
                                <span class="span2">3 NIGHTS</span>
                                <span class="span3"> 2 NIGHTS</span>
                                <span class="span4 ">1 NIGHT</span>
                            </div>
                            <div class="rewardpoint">
                                <span class="reward_span1 range_4">170,000
                                    <span class="span_ponit">Points*</span>
                                </span>
                                <span class="reward_span2 range_3">130,000 <span class="span_ponit">Points*</span></span>
                                <span class="reward_span3 range_2">100,000 <span class="span_ponit">Points*</span></span>
                                <span class="reward_span4 range_1 ">50,000 <span class="span_ponit">Points*</span></span>
                            </div>
                            <div class="rangewrap">
                                <input type="range" min="50000" max="200000" value="150000" step="50000" class="myslider"
                                    id="sliderRange" list="tickmarks">
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <section class="tab_section">
            <div class="container">
                <div class="global_tab">
                    <h2 class="sectionHead">Make every stay better with Hilton Honors elite status.</h2>
                    <ul class="tab">
                        <li role="button" id="member">Member</li>
                        <li role="button" id="silver">Silver</li>
                        <li role="button" id="gold">Gold</li>
                        <li role="button" id="diamond">Diamond</li>
                    </ul>
                    <div class="tab_details member">
                        <h3 class="h3_tab">All Members enjoy these benefits.</h3>

                        <div class="row_tab">
                            <div class="tab_col_wrap">
                                <div class="tab_col">
                                    <h4 class="h4_tab">Guaranteed Hilton Honors Discount Rate</h4>
                                    <p class="">Get an exclusive rate as a Hilton Honors Member when you book on Hilton.com
                                        or
                                        our app.*
                                    </p>
                                </div>
                                <div class="tab_col">
                                    <h4 class="h4_tab">No Resort Fees on Reward Stays</h4>
                                    <p class="">You’ve earned your reward stay. Enjoy it with no hidden costs when you use
                                        100%
                                        Points.
                                    </p>
                                </div>
                                <div class="tab_col">
                                    <h4 class="h4_tab">Digital Check Out</h4>
                                    <p class="">Check out from anywhere with the Hilton Honors app.
                                    </p>
                                </div>
                                <div class="tab_col">
                                    <h4 class="h4_tab">Digital Key</h4>
                                    <p class="">Unlock doors with your device and the Hilton Honors app.
                                    </p>
                                </div>
    							   <div class="tab_col">
                                    <h4 class="h4_tab">Access to Exclusive Hilton Honors Experiences</h4>
                                    <p class="">Treat yourself to a once-in-a-lifetime experience. Bid on exclusive packages
                                        in
                                        auctions, or redeem your Points for something unbelievable.
                                    </p>
                                </div>
                            </div>


                            <div class="tab_col_wrap">
                                <div class="tab_col">
                                    <h4 class="h4_tab">Points Toward Free Nights, Travel Partners, and More</h4>
                                    <p class=""> Earn Points on every stay. Turn them into free nights, use them with our
                                        exclusive travel partners, experiences, and more.
                                    </p>
                                </div>
                                <div class="tab_col">
                                    <h4 class="h4_tab">Digital Check In</h4>
                                    <p class=""> Check in from anywhere with the Hilton Honors app.
                                    </p>
                                </div>
                                <div class="tab_col">
                                    <h4 class="h4_tab">Choose Your Room</h4>
                                    <p class="">Choose from available rooms up to 24 hours in advance.
                                    </p>
                                </div>
                                <div class="tab_col">
                                    <h4 class="h4_tab">Free WiFi<sup>*</sup></h4>
                                    <p class="">Take advantage of free WiFi throughout the hotel<sup>*</sup>.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tab_details silver">
                        <h3 class="h3_tab">Enjoy complimentary Silver status with the Hilton Honors Card.<sup>‡</sup></h3>
                        <div class="Terms">
                            <a href="<?php echo $baseBenefit;?>" target="_blank" class="benefitTerms benefitsBaseMTC"
                                aria-label="‡Benefit Terms"><sup>‡</sup>Benefit Terms</a>
                        </div>

                        <h4 class="h4_blue_tab">In addition to your Member perks, you’ll get:</h4>
                        <div class="row_tab">
                            <div class="tab_col_wrap">

                                <div class="tab_col">
                                    <h4 class="h4_tab">20% Points Earning Bonus on Stays</h4>
                                    <p class="">Earn free nights faster with 20% Bonus on Base Points you earn on every
                                        stay.
                                    </p>
                                </div>
                                <div class="tab_col">
                                    <h4 class="h4_tab">All-Inclusive Spa Discount</h4>
                                    <p class="">Indulge in 15% off at an all-inclusive spa within the Hilton portfolio of
                                        brands.
                                    </p>
                                </div>
                                <div class="tab_col">
                                    <h4 class="h4_tab">Elite Rollover Nights</h4>
                                    <p class="">Roll over extra nights for a head start on earning next year’s status.
                                    </p>
                                </div>

                            </div>

                            <div class="tab_col_wrap">
                                <div class="tab_col">
                                    <h4 class="h4_tab">Fifth Night Free on Reward Stays</h4>
                                    <p class=""> Your fifth night is free when you book a standard room stay with 100%
                                        Points.
                                    </p>
                                </div>
                                <div class="tab_col">
                                    <h4 class="h4_tab">Free Bottled Water</h4>
                                    <p class="">Get two free bottles of water when you arrive (at select hotels).
                                    </p>
                                </div>
                            </div>



                        </div>



                    </div>
                    <div class="tab_details gold">
                               <h3 class="h3_tab">Enjoy complimentary Gold status with the Hilton Honors Surpass Card.<sup>‡</sup>
                        </h3>
    					 <h3 class="h3_tab business_tab">Enjoy complimentary Gold status with the Hilton Honors Business Card.<sup>‡</sup>
                        </h3>
    	               <h3 class="h3_tab two_cards">Enjoy complimentary Gold status with the Hilton Honors Surpass Card<sup>‡</sup><span class="businesstext" > or the Hilton Honors
                                Business Card.<sup>‡‡</sup></span>
                        </h3>
                        <div class="Terms">
                         <a href="<?php echo $surpassBenefit;?>" id="surpass_ben" target="_blank" class="benefitTerms benefitsBaseMTC"
                                aria-label="‡Benefit Terms"><sup>‡</sup>Benefit Terms</a>
                            <a href="<?php echo $businessBenefit;?>" target="_blank" class="benefitTerms benefitsBaseMTC businessbenefits"
                                 aria-label="‡‡Benefit Terms"><sup class="single_dagger">‡</sup><sup>‡</sup>Benefit
                                Terms</a>
                        </div>

                        <h4 class="h4_blue_tab">In addition to your Member and Silver perks, you’ll get:
                        </h4>
                        <div class="row_tab">
                            <div class="tab_col_wrap">
                                <div class="tab_col">
                                    <h4 class="h4_tab">80% Points Earning Bonus on Stays</h4>
                                    <p class="">Get free nights even faster with 80% Bonus on Base Points you earn on every
                                        stay.
                                    </p>
                                </div>
                                <div class="tab_col">
                                    <h4 class="h4_tab">Space-Available Room Upgrades</h4>
                                    <p class="">If we have a better room available, it’s yours – up to Executive Floor room
                                        types.
                                    </p>
                                </div>
                                <div class="tab_col">
                                    <h4 class="h4_tab">Milestone Bonuses</h4>
                                    <p class=""> Earn 10,000 Bonus Points every 10 nights after you’ve stayed 40 nights in a
                                        calendar year.
                                    </p>
                                </div>
                            </div>

                            <div class="tab_col_wrap">
                                <div class="tab_col">
                                    <h4 class="h4_tab">Daily Food and Beverage Credit or Continental Breakfast (varies by
                                        brand
                                        and region)</h4>
                                    <p class=""> As part of your MyWay benefits, you’ll receive a Daily Food and Beverage
                                        Credit
                                        at select brands in the U.S., and Motto by Hilton globally, and complimentary
                                        Continental Breakfast at select brands outside the U.S. (excluding Motto by Hilton).
                                        Either the Credit or Continental Breakfast will be given to you and up to one
                                        additional
                                        guest registered to the same room each night of your stay.
                                    </p>
                                    <p class="note">Diamond and Gold members provided breakfast in the Executive Lounge will
                                        not
                                        receive the Daily F&B Credit. </p>
                                </div>

                            </div>



                        </div>




                    </div>
                    <div class="tab_details diamond">
                        <h3 class="h3_tab">Enjoy complimentary Diamond status with the Hilton Honors Aspire
                            Card.<sup>‡</sup></h3>
                        <div class="Terms">
                            <a href="<?php echo $aspireBenefit;?>" target="_blank" class="benefitTerms benefitsBaseMTC"
                                aria-label="‡Benefit Terms"><sup>‡</sup>Benefit Terms</a>
                        </div>

                        <h4 class="h4_blue_tab">In addition to your Member, Silver and Gold perks, you’ll get:
                        </h4>
                        <div class="row_tab">

                            <div class="tab_col_wrap">
                                <div class="tab_col">
                                    <h4 class="h4_tab">100% Points Earning Bonus on Stays</h4>
                                    <p class="">Get 100% Bonus on all Base Points you earn on every stay.
                                    </p>
                                </div>
                                <div class="tab_col">
                                    <h4 class="h4_tab">Executive Lounge Access</h4>
                                    <p class="">Focus or unwind – or both! – and enjoy exclusive amenities in our quiet
                                        retreat.
                                    </p>
                                </div>
                                <div class="tab_col">
                                    <h4 class="h4_tab">Premium WiFi</h4>
                                    <p class="">Upgrade your WiFi to the fastest in the hotel – at premium speeds.
                                    </p>
                                </div>
                                <div class="tab_col">
                                    <h4 class="h4_tab">Elite Status Gifting</h4>
                                    <p class="">If you hit 60 nights in the calendar year, you can gift Gold status to any
                                        member. If you hit 100 nights then that gift is upgraded to Diamond.
                                    </p>
                                </div>

                            </div>
                            <div class="tab_col_wrap">
                                <div class="tab_col">
                                    <h4 class="h4_tab">Space-Available Room Upgrades</h4>
                                    <p class=""> If we have a better room available, it’s yours – up to a one-bedroom suite.
                                    </p>
                                </div>
                                <div class="tab_col">
                                    <h4 class="h4_tab">Diamond Status Extension</h4>
                                    <p class=""> Enjoy an extra year of Diamond perks with a one-time extension. Available
                                        when
                                        you have been a Diamond Member for 3 years and stayed 250 lifetime nights or earned
                                        500,000 Base Points.
                                    </p>
                                </div>
                                <div class="tab_col">
                                    <h4 class="h4_tab">48-Hour Room Guarantee</h4>
                                    <p class="">Need that room on an important trip even if the hotel is filled? Rest
                                        assured
                                        you can book that room, if you reach out at least 48 hours before that stay – some
                                        restrictions apply.
                                    </p>
                                </div>
                            </div>

                        </div>



                    </div>
                </div>

            </div>
            <div class="ft_labl">Waldorf Astoria Los Cabos Pedregal</div>
        </section>
        <section class="popup">
            <div class="container">
                <div class="popup_head">
                    <h2 class="popuphead">Compare Credit Cards - Comparison Results</h2>

                    <button class="ReturnBtn">Return to Compare All Cards</button>
                </div>
                <div class="compareWrap">
                    <div class="compare_col" id="pop_hilton">
                        <img src="<?php echo $d_path; ?>/images/hilton_base_nb_690x435.svg" class="card_img"
                            alt="Hilton Honors American Express Card">
                        <button class="closebtn"></button>
                        <div class="compare_eq">
                            <h2 class="card_name_compare">Hilton Honors American Express Card</h2>
                            <h3 class="AnnualFee">No Annual Fee<sup>¤</sup></h3>
                            <a href="<?php echo $baseApp;?>" target="_blank" class="ApplyNow">Apply Now</a>
                            <div class="Terms">
                                <a href="<?php echo $baseOffer;?>" target="_blank" class="offerTerms offerBaseMTC"
                                    aria-label="†Offer Terms"><sup>†</sup>Offer Terms</a> |
                                <a href="<?php echo $baseRate;?>" target="_blank" class="ratesFees ratesBaseMTC"
                                    aria-label="¤Rates &amp; Fees"><sup>¤</sup>Rates &amp; Fees</a> |
                                <a href="<?php echo $baseBenefit;?>" target="_blank" class="benefitTerms benefitsBaseMTC"
                                    aria-label="‡Benefit Terms"><sup>♦</sup><sup>‡</sup>Benefit Terms</a>
                            </div>
                            <div class="padding_col">
                                <h2 class="h2-offer">Earn <span>80,000</span> Hilton Honors Bonus Points</h2>
                                <p class="col_running_text">after you spend $2,000 in purchases on the Hilton Honors
                                    American
                                    Express Card within your first 6 months of Card Membership.<sup>†</sup> </p>

                                <!-- <p class="col_running_text">Offer
                                    ends 1/17/2024.</p> -->
                            </div>
                            <ul class="Reward_ponit_list">
                                <li>
                                    <div class="earn_ponit">7x</div>
                                    <p>
                                        Points on purchases made directly with hotels and resorts within the Hilton
                                        portfolio<sup>‡</sup>
                                    </p>
                                </li>

                                <li>
                                    <div class="earn_ponit">5x</div>
                                    <p>Points at U.S. Restaurants, U.S. Supermarkets and U.S. Gas
                                        Stations<sup>‡</sup></p>
                                </li>

                                <li>
                                    <div class="earn_ponit">3x</div>
                                    <p>Points on all other eligible purchases<sup>‡</sup></p>
                                </li>
                            </ul>
                        </div>
                        <div class="benefits">

                            <div class="benefits_btn">See More Benefits</div>


                            <div class="benefit_details">
                                <div class="benefit_head">Benefits</div>

                                <ul class="Benefits_ul">
                                    <li class="tooltipwrap tooltipInline">Complimentary Hilton Honors™ Silver
                                        Status<sup>‡</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="Enjoy complimentary Silver status with your Card. Silver status gives you a 20% Bonus on Base Points you earn on every stay, plus, you receive the fifth night free when you book a standard room stay with 100% Points.<sup>‡</sup>"
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>
                                    <li class="tooltipwrap tooltipInline">Earn Gold Status after $20K Spend<sup>‡</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="Spend $20,000 in eligible purchases on your Card in a calendar year and you can earn Hilton Honors Gold status through the end of the next calendar year. With Gold status, you can enjoy:<br/>- An 80% Bonus on Base Points you earn on every stay<br/>- Space-available room upgrades at select properties <br/>- A daily food & beverage credit at select brands in the U.S. and complimentary continental breakfast at select brands outside of the U.S.<br/>- Fifth night free when you book a standard room stay with 100% Points<sup>‡</sup>"
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>
                                    <li class="tooltipwrap tooltipInline">No Foreign Transaction Fees<sup>‡¤</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="Enjoy international travel without additional fees on purchases made abroad. <sup>‡¤</sup>"
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>
                                    <li class="tooltipwrap tooltipInline">Pay It Plan It<sup>®‡</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="Pay It<sup>®</sup>: Tap a purchase amount under $100 in the app to quickly make payments throughout the month. Plan It<sup>®</sup>: Select purchases of $100 or more and split them up into monthly payments with a fixed fee. Plus, you'll still earn rewards the way you usually do.<sup>‡</sup>"
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>
                                    <li class="tooltipwrap tooltipInline">Amex-Exclusive Benefits<sup>‡</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="Amex Offers<sup>‡</sup>  , Send & Split<sup>®‡</sup>  , ShopRunner<sup>‡</sup> (enrollment required) , American Express Experiences<sup>‡</sup>"
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>
                                    <li class="tooltipwrap tooltipInline">Purchase Protection<sup>♦</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="When an American Express<sup>®</sup> Card Member charges a Covered Purchase with their Eligible Card, Purchase Protection<sup>♦︎</sup> can help protect their Covered Purchases for up to 90 days from the Covered Purchase date if it is stolen or accidentally damaged. The coverage is limited up to $1,000 per occurrence, up to $50,000 per Card Member account per calendar year. Please read important exclusions and restrictions."
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>
                                    <li class="tooltipwrap tooltipInline">Extended Warranty<sup>♦</sup> <span
                                            class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="With Extended Warranty<sup>♦︎</sup> you can shop with less worry knowing the terms of the Original Manufacturer’s Warranty can be extended up to one additional year. Applies to warranties of 5 years or less on Covered Purchases in the United States or its territories or possessions."
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>
                                    <li class="tooltipwrap tooltipInline">Car Rental Loss and Damage Insurance<sup>♦</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="Car Rental Loss and Damage Insurance<sup>♦</sup> can provide coverage for Damage to or Theft of a Rental Vehicle in a Covered Territory when You use your Eligible Card to reserve and pay for the Entire Rental and decline the collision damage waiver (CDW) at the Rental Company counter. Please read important exclusions and restrictions. This product provides secondary coverage and does not include liability coverage. Not all vehicle types or rentals are covered.  Coverage is not available in Australia, Italy, and New Zealand."
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>
                                    <li class="tooltipwrap tooltipInline">Global Assist<sup>®</sup> Hotline<sup>‡</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="Whenever you travel more than 100 miles from home, Global Assist<sup>®</sup> Hotline<sup>‡</sup> is available for 24/7 emergency assistance and coordination services, including medical and legal referrals, emergency cash wires, and missing luggage assistance. Card Members are responsible for the costs charged by third-party service providers. Other terms and conditions apply."
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>
                                </ul>
                            </div>

                        </div>

                    </div>
                    <div class="compare_col" id="pop_surpass">
                        <img src="<?php echo $d_path; ?>/images/hilton_surpass_nb_690x435.svg" class="card_img"
                            alt="Hilton Honors American Express Surpass® Card">
                        <button class="closebtn"></button>
                        <div class="compare_eq">
                            <h2 class="card_name_compare">Hilton Honors American Express Surpass<sup>®</sup> Card</h2>
                            <h3 class="AnnualFee">$150 Annual Fee<sup>¤</sup></h3>
                            <a href="<?php echo $surpassApp;?>" target="_blank"  class="ApplyNow">Apply Now</a>
                            <div class="Terms">
                                <a href="<?php echo $surpassOffer;?>" target="_blank" class="offerTerms offerBaseMTC"
                                    aria-label="†Offer Terms"><sup>†</sup>Offer Terms</a> |
                                <a href="<?php echo $surpassRate;?>" target="_blank" class="ratesFees ratesBaseMTC"
                                    aria-label="¤Rates &amp; Fees"><sup>¤</sup>Rates &amp; Fees</a> |
                                <a href="<?php echo $surpassBenefit;?>" target="_blank" class="benefitTerms benefitsBaseMTC"
                                    aria-label="‡Benefit Terms"><sup>♦</sup><sup>‡</sup>Benefit Terms</a>
                            </div>
                            <div class="padding_col">
                                <h2 class="h2-offer">Earn <span>130,000</span> Hilton Honors Bonus Points</h2>
                                <p class="col_running_text">after you spend $3,000 in purchases on the Hilton Honors
                                    American
                                    Express Surpass<sup>®</sup> Card within your first 6 months of Card Membership.<sup>†</sup>
                                </p>

                                <!-- <p class="col_running_text">Offer
                                    ends 1/17/2024.</p> -->
                            </div>
                            <ul class="Reward_ponit_list">
                                <li>
                                    <div class="earn_ponit">12X</div>
                                    <p>
                                        Points on purchases made directly with hotels and resorts within the Hilton
                                        portfolio<sup>‡</sup>
                                    </p>
                                </li>

                                <li>
                                    <div class="earn_ponit">6x</div>
                                    <p>Points at U.S. Restaurants, U.S. Supermarkets and U.S. Gas Stations<sup>‡</sup></p>
                                </li>

                                <li>
                                    <div class="earn_ponit">4x</div>
                                    <p>Points on U.S. Online Retail purchases<sup>‡</sup></p>
                                </li>

                                <li>
                                    <div class="earn_ponit">3X</div>
                                    <p>Points on all other eligible purchases<sup>‡</sup></p>
                                </li>
                            </ul>
                        </div>
                        <div class="benefits">

                            <div class="benefits_btn">See More Benefits</div>
                            <div class="benefit_details">
                                <div class="benefit_head">Benefits</div>

                                <ul class="Benefits_ul">
                                    <li class="tooltipwrap tooltipInline">Complimentary Hilton Honors™ Gold
                                        Status<sup>‡</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="Enjoy complimentary Gold status with your Card. Gold status gives you an 80% Bonus on Base Points you earn on every stay, space-available room upgrades at select properties, and more.<sup>‡</sup>"
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>
                                    <li class="tooltipwrap tooltipInline">$200 Hilton Statement Credit<sup>‡</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="Get up to $50 in statement credits each quarter for purchases made directly with a property in the Hilton portfolio on your Hilton Honors American Express Surpass<sup>®</sup> Card. That’s up to $200 in statement credits annually.<sup>‡</sup>"
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>
                                    <li class="tooltipwrap tooltipInline">Earn Free Night Reward after $15K
                                        Spend<sup>‡</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="Earn one Free Night Reward from Hilton Honors after spending $15,000 in purchases on your Card in a calendar year.<sup>‡</sup>"
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>
                                    <li class="tooltipwrap tooltipInline">Earn Diamond Status after $40K Spend<sup>‡</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="Spend $40,000 on eligible purchases on your Card in a calendar year and you can earn an upgrade to Hilton Honors Diamond status through the end of the next calendar year. With Hilton Honors Diamond status, enjoy benefits like:<br/>- A 100% Bonus on all Base Points you earn on every stay<br/>- Premium Wi-Fi at select properties<br/>- Daily food & beverage credit at select brands in the U.S. and complimentary continental breakfast at select brands outside of the U.S.<br/>- Space-available room upgrades at select properties <br/>- Executive lounge access<sup>‡</sup>"
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>
                                    <li class="tooltipwrap tooltipInline">Complimentary National Car Rental<sup>®</sup>
                                        Emerald Club Executive<sup>®</sup> Status<sup>‡</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="As a Hilton Honors Surpass Card Member, you can enroll to receive complimentary National Car Rental<sup>®</sup> Emerald Club Executive<sup>®</sup> status through the link on your American Express online account. After you’re enrolled, you can reserve a rental car by calling National Car Rental directly, using your travel service, or by booking online or through the National Car Rental mobile app. Terms apply.<sup>‡</sup>"
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>
                                    <li class="tooltipwrap tooltipInline">No Foreign Transaction Fees<sup>‡¤</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="Enjoy international travel without additional fees on purchases made abroad.<sup>‡¤</sup>"
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>
                                    <li class="tooltipwrap tooltipInline">Pay It Plan It<sup>®</sup><sup>‡</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="Pay It<sup>®</sup>: Tap a purchase amount under $100 in the app to quickly make payments throughout the month. Plan It<sup>®</sup>: Select purchases of $100 or more and split them up into monthly payments with a fixed fee. Plus, you'll still earn rewards the way you usually do.<sup>‡</sup>"
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>
                                    <li class="tooltipwrap tooltipInline">Amex-Exclusive Benefits<sup>‡</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="Amex Offers‡ , Send & Split<sup>®‡</sup> , ShopRunner<sup>‡</sup> (enrollment required) , American Express Experiences‡ "
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>
                                    <li class="tooltipwrap tooltipInline">Purchase Protection<sup>♦</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="When an American Express<sup>®</sup> Card Member charges a Covered Purchase with their Eligible Card, Purchase Protection♦︎ can help protect their Covered Purchases for up to 90 days from the Covered Purchase date if it is stolen or accidentally damaged. The coverage is limited up to $1,000 per occurrence, up to $50,000 per Card Member account per calendar year. Please read important exclusions and restrictions."
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>
                                    <li class="tooltipwrap tooltipInline">Extended Warranty<sup>♦</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="With Extended Warranty♦︎ you can shop with less worry knowing the terms of the Original Manufacturer’s Warranty can be extended up to one additional year. Applies to warranties of 5 years or less on Covered Purchases in the United States or its territories or possessions."
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>
                                    <li class="tooltipwrap tooltipInline">Car Rental Loss and Damage Insurance<sup>♦</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="Car Rental Loss and Damage Insurance♦︎ can provide coverage for Damage to or Theft of a Rental Vehicle in a Covered Territory when You use your Eligible Card to reserve and pay for the Entire Rental and decline the collision damage waiver (CDW) at the Rental Company counter. Please read important exclusions and restrictions. This product provides secondary coverage and does not include liability coverage. Not all vehicle types or rentals are covered.  Coverage is not available in Australia, Italy, and New Zealand."
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>
                                    <li class="tooltipwrap tooltipInline">Global Assist<sup>®</sup> Hotline<sup>‡</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="Whenever you travel more than 100 miles from home, Global Assist<sup>®</sup> Hotline<sup>‡</sup> is available for 24/7 emergency assistance and coordination services, including medical and legal referrals, emergency cash wires, and missing luggage assistance. Card Members are responsible for the costs charged by third-party service providers. Other terms and conditions apply."
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>
                                    <li class="tooltipwrap tooltipInline">Baggage Insurance Plan<sup>♦</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="Baggage Insurance Plan<sup>♦</sup> coverage can be in effect for Covered Persons for lost, damaged, or stolen Baggage during their travel on a Common Carrier Vehicle (e.g. plane, train, ship, or bus) when the Entire Fare for a ticket for the trip (one-way or round-trip) is charged to an Eligible Card. Coverage can be provided for up to $1,250 for carry-on Baggage and up to $500 for checked Baggage, in excess of coverage provided by the Common Carrier. For New York State residents, there is a $10,000 aggregate maximum limit for all Covered Persons per Covered Trip. Please read important exclusions and restrictions."
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>
                                </ul>
                            </div>

                        </div>

                    </div>
                    <div class="compare_col" id="pop_aspire">
                        <img src="<?php echo $d_path; ?>/images/hilton_aspire_nb_690x435.svg" class="card_img"
                            alt="Hilton Honors American Express Aspire Card">
                        <button class="closebtn"></button>
                        <div class="compare_eq">
                            <h2 class="card_name_compare">Hilton Honors American Express Aspire Card</h2>
                            <h3 class="AnnualFee">$550 Annual Fee<sup>¤</sup></h3>
                            <a href="<?php echo $aspireApp;?>" target="_blank" class="ApplyNow">Apply Now</a>
                            <div class="Terms">
                                <a href="<?php echo $aspireOffer;?>" target="_blank" class="offerTerms offerBaseMTC"
                                    aria-label="†Offer Terms"><sup>†</sup>Offer Terms</a> |
                                <a href="<?php echo $aspireRate;?>" target="_blank" class="ratesFees ratesBaseMTC"
                                    aria-label="¤Rates &amp; Fees"><sup>¤</sup>Rates &amp; Fees</a> |
                                <a href="<?php echo $aspireBenefit;?>" target="_blank" class="benefitTerms benefitsBaseMTC"
                                    aria-label="‡Benefit Terms"><sup>♦</sup><sup>‡</sup>Benefit Terms</a>
                            </div>
                            <div class="padding_col">
                                <h2 class="h2-offer">Earn <span>150,000</span> Hilton Honors Bonus Points</h2>
                                <p class="col_running_text">after you spend $6,000 in purchases on the Hilton Honors American
                                    Express Aspire Card within your first 6 months of Card Membership.<sup>†</sup> </p>

                                <!-- <p class="col_running_text">Offer
                                    ends 1/17/2024.</p> -->
                            </div>
                            <ul class="Reward_ponit_list">
                                <li>
                                    <div class="earn_ponit">14X</div>
                                    <p>Points on purchases made directly with hotels and resorts within the Hilton portfolio<sup>‡</sup>
                                    </p>
                                </li>

                                <li>
                                    <div class="earn_ponit">7x</div>
                                    <p>Points on flights booked directly with airlines or Amex Travel, on car rentals booked
                                        directly from select car rental companies, and at U.S. restaurants<sup>‡</sup></p>
                                </li>

                                <li>
                                    <div class="earn_ponit">3x</div>
                                    <p>Points on all other eligible purchases<sup>‡</sup></p>
                                </li>
                            </ul>
                        </div>
                        <div class="benefits">

                            <div class="benefits_btn">See More Benefits</div>


                            <div class="benefit_details">
                                <div class="benefit_head">Benefits</div>

                                <ul class="Benefits_ul">
                                    <li class="tooltipwrap tooltipInline">Complimentary Hilton Honors™ Diamond
                                        Status<sup>‡</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="Enjoy complimentary Diamond status with your Card. Diamond status gives you a 100% Bonus on Base Points you earn on every stay, Premium Wi-Fi and space-available room upgrades at select properties, executive lounge access, and more.<sup>‡</sup>"
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>
                                    <li class="tooltipwrap tooltipInline">Annual Free Night Reward<sup>‡</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="Enjoy an Annual Free Night Reward from Hilton Honors in your first year of Card Membership and every year upon Card renewal.<sup>‡</sup>"
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>
                                    <li class="tooltipwrap tooltipInline">$400 Hilton Resort Credit<sup>‡</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="Get up to $200 in statement credits semi-annually for eligible purchases made directly with participating Hilton Resorts on your Hilton Honors Aspire Card. That's up to $400 back annually.<sup>‡</sup>"
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>

                                    <li class="tooltipwrap tooltipInline">Earn Additional Free Night Rewards after $30k and
                                        $60k spent<sup>‡</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="Earn a Free Night Reward from Hilton after you spend $30,000 in purchases on your Card in a calendar year. Plus, you can earn an additional Free Night Reward from Hilton after you spend $60,000 in purchases.<sup>‡</sup>"
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>

                                    <li class="tooltipwrap tooltipInline">$200 Flight Credit<sup>‡</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="Get up to $50 in statement credits each quarter on flight purchases made directly with an airline or through amextravel.com using your Hilton Honors American Express Aspire Card.<sup>‡</sup>"
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>

                                    <li class="tooltipwrap tooltipInline">$189 CLEAR<sup>®</sup> Plus Credit<sup>‡</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="CLEAR<sup>®</sup> uses unique attributes, such as eyes or fingerprints, to digitally verify identity to help its members move faster through security at select airports nationwide. Receive up to $189 per calendar year in statement credits, when you pay for a CLEAR Plus Membership (subject to auto-renewal) with your Hilton Honors America Express Aspire Card.<sup>‡</sup>"
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>

                                    <li class="tooltipwrap tooltipInline">$100 Property Credit<sup>‡</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="With your Hilton Honors American Express Aspire Card, book a 2 night minimum stay at hiltonhonorsaspirecard.com and get up to $100 in hotel credits for qualifying charges at participating Waldorf Astoria<sup>®</sup> Hotels & Resorts and Conrad® Hotels & Resorts.<sup>‡</sup>"
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>

                                    <li class="tooltipwrap tooltipInline">Complimentary National Car Rental<sup>®</sup>
                                        Emerald Club Executive<sup>®</sup> Status<sup>‡</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="As a Hilton Honors Aspire Card Member, you can enroll to receive complimentary National Car Rental<sup>®</sup> Emerald Club Executive<sup>®</sup> status through the link on your American Express online account. After you’re enrolled, you can reserve a rental car by calling National Car Rental directly, using your travel service, or by booking online or through the National Car Rental mobile app. Terms apply.<sup>‡</sup>"
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>
                                    <li class="tooltipwrap tooltipInline">Amex-Exclusive Benefits<sup>‡</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="Amex Offers<sup>‡</sup> , Send & Split<sup>®‡</sup> , ShopRunner<sup>‡</sup>  (enrollment required) , American Express Experiences<sup>‡</sup> "
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>

                                    <li class="tooltipwrap tooltipInline">Purchase Protection<sup>♦</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="Sometimes your favorite new purchase gets stolen, accidentally damaged, or lost. But when you use your Eligible Card for Covered Purchases, your Membership can help protect them for up to 90 days from the Covered Purchase date. Please read important exclusions and restrictions.<sup>*</sup><br/><br/><sup>*</sup> Up to $10,000 per occurrence, $50,000 per calendar year."
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>
                                    <li class="tooltipwrap tooltipInline">Extended Warranty<sup>♦</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="With Extended Warranty♦︎ you can shop with less worry knowing the terms of the Original Manufacturer’s Warranty can be extended up to one additional year. Applies to warranties of 5 years or less on Covered Purchases in the United States or its territories or possessions."
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>
                                    <li class="tooltipwrap tooltipInline">Car Rental Loss and Damage Insurance<sup>♦</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="Car Rental Loss and Damage Insurance♦︎ can provide coverage for Damage to or Theft of a Rental Vehicle in a Covered Territory when You use your Eligible Card to reserve and pay for the Entire Rental and decline the collision damage waiver (CDW) at the Rental Company counter. Please read important exclusions and restrictions. This product provides secondary coverage and does not include liability coverage. Not all vehicle types or rentals are covered.  Coverage is not available in Australia, Italy, and New Zealand."
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>
                                    <li class="tooltipwrap tooltipInline">Premium Global Assist Hotline<sup>‡</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="You can rely on 24/7 medical, legal, financial, and other select emergency coordination and assistance services while traveling more than 100 miles from home. Premium Global Assist<sup>®</sup> Hotline‡ can direct you to medical and legal professionals and help with prescription replacement coordination, emergency hotel check-ins and cash wires, missing luggage, and more. Emergency medical transportation assistance may be provided at no cost only if approved and coordinated by Premium Global Assist Hotline. Card Members may be responsible for the costs charged by third-party service providers."
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>
                                    <li class="tooltipwrap tooltipInline">Baggage Insurance Plan<sup>♦</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="Baggage Insurance Plan♦ coverage can be in effect for Covered Persons for eligible lost, damaged, or stolen Baggage during their travel on a Common Carrier Vehicle (e.g. plane, train, ship, or bus) when the Entire Fare for a ticket for the trip (one-way or round-trip) is charged to an Eligible Card. Coverage can be provided for up to $2,000 for checked Baggage and up to a combined maximum of $3,000 for checked and carry-on Baggage, in excess of coverage provided by the Common Carrier. The coverage is also subject to a $3,000 aggregate limit per Covered Trip.  For New York State residents, there is a $2,000 per bag/suitcase limit for each Covered Person with a $10,000 aggregate maximum for all Covered Persons per Covered Trip. Please read important exclusions and restrictions."
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>
                                    <li class="tooltipwrap tooltipInline">Return Protection<sup>‡</sup>

                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="With Return Protection<sup>‡</sup>, you may return eligible purchases to American Express if the seller won't take them back up to 90 days from the date of purchase.<sup>*</sup><br/><br/><sup>*</sup>American Express may refund the full purchase price excluding shipping and handling, up to $300 per item, up to a maximum of $1,000 per calendar year per Card account, if you purchased it entirely with your eligible American Express<sup>®</sup> Card. Purchases must be made in the U.S. or its territories."
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>

                                    <li class="tooltipwrap tooltipInline">Trip Delay Insurance<sup>‡</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="If a round-trip is paid for entirely with your Eligible Card and a covered reason delays your trip more than 6 hours, Trip Delay Insurance <sup>‡</sup> can help reimburse certain additional expenses purchased on the same Eligible Card, up to $500 per trip, maximum 2 claims per Eligible Card per 12 consecutive month period. Terms, conditions and limitations apply.<sup>*</sup><br/><br/><sup>*</sup>Coverage is provided by New Hampshire Insurance Company, an AIG Company."
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>

                                    <li class="tooltipwrap tooltipInline">Trip Cancellation and Interruption
                                        Insurance<sup>‡</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="If a round-trip is paid for entirely with your Eligible Card and a covered reason cancels or interrupts your trip, Trip Cancellation and Interruption Insurance<sup>‡</sup> can help reimburse the non-refundable travel expenses purchased with the same Eligible Card, up to $10,000 per trip and up to $20,000 per Eligible Card per 12 consecutive month period. Terms, conditions and limitations apply.<sup>*</sup><br/><br/><sup>*</sup>Coverage is provided by New Hampshire Insurance Company, an AIG Company."
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>
                                    <li class="tooltipwrap tooltipInline">Cell Phone Protection<sup>‡</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="Fixing a cracked screen can be expensive. With Cell Phone Protection<sup>*</sup>, you can be reimbursed, the lesser of, your cost to repair or replace your damaged cell phone, including a cracked screen, for a maximum of $800 per claim with a limit of 2 approved claims per 12-month period when your cell phone line is listed on a wireless bill and the prior month's wireless bill was paid by an Eligible Card Account. A $50 deductible will apply to each approved claim. Additional terms and conditions apply.<sup>‡</sup><br/><br/><sup>*</sup>Coverage is provided by New Hampshire Insurance Company, an AIG Company."
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>

                                </ul>
                            </div>

                        </div>

                    </div>
                    <div class="compare_col" id="pop_business">
                        <img src="<?php echo $d_path; ?>/images/hilton_business_di_480x304.svg" class="card_img"
                            alt="Hilton Honors American Express Business Card">
                        <button class="closebtn"></button>
                        <div class="compare_eq">
                            <h2 class="card_name_compare">Hilton Honors American Express Business Card</h2>
                            <h3 class="AnnualFee">$95 Annual Fee<sup>¤</sup></h3>
                            <a href="<?php echo $businessApp;?>" target="_blank" class="ApplyNow">Apply Now</a>
                            <div class="Terms">
                                <a href="<?php echo $businessOffer;?>" target="_blank" class="offerTerms offerBaseMTC"
                                    aria-label="†Offer Terms"><sup>†</sup>Offer Terms</a> |
                                <a href="<?php echo $businessRate;?>" target="_blank" class="ratesFees ratesBaseMTC"
                                    aria-label="¤Rates &amp; Fees"><sup>¤</sup>Rates &amp; Fees</a> |
                                <a href="<?php echo $businessBenefit;?>" target="_blank" class="benefitTerms benefitsBaseMTC"
                                    aria-label="‡Benefit Terms"><sup>♦</sup><sup>‡</sup>Benefit Terms</a>
                            </div>
                            <div class="padding_col">
                                <h2 class="h2-offer">Earn <span>130,000</span> Hilton Honors Bonus Points</h2>
                                <p class="col_running_text">after you spend $3,000 in purchases on the Hilton Honors American
                                    Express Business Card within your first 3 months of Card Membership.<sup>†</sup> </p>
                            </div>
                            <ul class="Reward_ponit_list">
                                <li>
                                    <div class="earn_ponit">12x</div>
                                    <p>
                                        Points on purchases made directly with hotels and resorts within the Hilton
                                        portfolio<sup>‡</sup>
                                    </p>
                                </li>

                                <li>
                                    <div class="earn_ponit">6x</div>
                                    <p>Points at U.S. gas stations, on U.S. purchases for shipping, on wireless telephone
                                        services
                                        purchased directly from U.S. service providers, on flights booked directly with airlines or
                                        Amex
                                        travel, on car rentals booked directly from select car rental companies, and at U.S.
                                        restaurants<sup>‡</sup></p>
                                </li>

                                <li>
                                    <div class="earn_ponit">3x</div>
                                    <p>Points on all other eligible purchases<sup>‡</sup></p>
                                </li>
                            </ul>
                        </div>
                        <div class="benefits">

                            <div class="benefits_btn">See More Benefits</div>


                            <div class="benefit_details">
                                <div class="benefit_head">Benefits</div>

                                <ul class="Benefits_ul">
                                    <li class="tooltipwrap tooltipInline">Complimentary Hilton Honors™ Gold
                                        Status<sup>‡</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="Enjoy complimentary Hilton Honors Gold status with your Card.<sup>‡</sup>"
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>
                                    <li class="tooltipwrap tooltipInline">Free Night Reward<sup>‡</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="Earn one Free Night Reward from Hilton Honors after spending $15,000 in purchases on your Card in a calendar year. Earn a second Free Night Reward after spending $60,000 in the same calendar year.<sup>‡</sup>"
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>
                                    <li class="tooltipwrap tooltipInline">Earn Diamond Status after $40K Spend<sup>‡</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="Spend $40,000 on eligible purchases on your Card in a calendar year and you can earn an upgrade to Hilton Honors Diamond status through the end of the next calendar year. With Hilton Honors Diamond status, enjoy benefits like:<br/>- A 100% Bonus on all Base Points you earn on every stay<br/>- Premium Wi-Fi at select properties<br/>- Daily food & beverage credit at select brands in the U.S. and complimentary continental breakfast at select brands outside of the U.S.<br/>- Space-available room upgrades at select properties - Executive lounge access<sup>‡</sup>"
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>

                                    <li class="tooltipwrap tooltipInline">Priority Pass™ Select — 10 Free Visits<sup>‡</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="Whether you just want to relax or get work done, you’ll have 10 free visits to a selection of over 1,200 airport lounges each year once enrolled in Priority Pass Select Membership.<sup>‡</sup>"
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>

                                    <li class="tooltipwrap tooltipInline">Vendor Pay by Bill.com<sup>‡</sup>
                                        <span class="tooltipIconCompare">
                                            <a class="tooltipicon" data-toggle="tooltip" data-placement="bottom"
                                                data-html="true"
                                                title="You can make the most out of paying your business bills. Enhance cash flow management and take advantage of earning the rewards of your Card when you use your Card to pay bills with Vendor Pay by Bill.com. Fees may apply and enrollment is required. Terms apply.<sup>‡</sup>"
                                                data-original-title="Tooltip on bottom">
                                                <svg width="16px" height="16px" viewBox="0 0 16 16">
                                                    <g id="Style-/-Icons-&amp;-Glyphs-/-Glyphs-/-Info" stroke="none"
                                                        stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <path class="footer_tooltip"
                                                            d="M8,0 C12.4182956,0 16,3.58169 16,7.99996915 C16,12.4182483 12.4182956,16 8,16 C3.58170443,16 0,12.4182508 0,7.99997085 C0,3.5816909 3.58170443,0 8,0 Z M8,1 C4.1401772,1 1,4.14016425 1,7.99997005 C1,11.8597758 4.1401772,15 8,15 C11.8598228,15 15,11.8597758 15,7.99996985 C15,4.14016385 11.8598228,1 8,1 Z M8,6 C8.55228475,6 9,6.44771525 9,7 L9,12 C9,12.5522847 8.55228475,13 8,13 C7.44771525,13 7,12.5522847 7,12 L7,7 C7,6.44771525 7.44771525,6 8,6 Z M8,3 C8.55228475,3 9,3.44771525 9,4 C9,4.55228475 8.55228475,5 8,5 C7.44771525,5 7,4.55228475 7,4 C7,3.44771525 7.44771525,3 8,3 Z"
                                                            id="Info" fill="#104C97" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </a>
                                        </span>
                                    </li>
                                </ul>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </section>
        <?php 
            include('footer.php');
            include('scripts.php');
        ?>
        <script type="text/javascript">
            $(function(){
                const card = '<?php echo $card_info; ?>';
                document.getElementById('banner_'+card).classList.add('activeCard');
                if(card == "base")
                {
                    document.querySelector('.wrap_1').classList.add('banner_active');
                    document.getElementById('silver').classList.add('activetab');
                    document.querySelector('.silver').classList.add('activeDel');
                }
                else if(card == "surpass")
                {
                    document.querySelector('.wrap_2').classList.add('banner_active');
                    document.getElementById('gold').classList.add('activetab');
                    document.querySelector('.gold').classList.add('activeDel');
                }
                else if(card == "aspire")
                {
                    document.querySelector('.wrap_3').classList.add('banner_active');
                    document.getElementById('diamond').classList.add('activetab');
                    document.querySelector('.diamond').classList.add('activeDel');
                }
            })
        </script>
    </body>
</html>