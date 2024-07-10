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

   $demo_rock_test = '';

   $test_rock = '';

   $sample_rock = 'demo test dfvdfvdsrgdr dfkgdfjkgd';

   $sample_test = 'ewferferfer';

   $rock_demo = 'fdsdfsdfsd';

   $aws_keys = 'fdkjfdjkfjsdfjksdkjnf';
   $aws_secrete = "sdfkldklfdfklfdsklmf";