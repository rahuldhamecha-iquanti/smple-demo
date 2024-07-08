<script type="text/javascript"> var base_url = '<?php echo site_url();?>'</script>
        <script type="text/javascript" src="<?php echo $d_path; ?>/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo $d_path; ?>/js/jquery.mobile-events.min.js"> </script>
        <script type="text/javascript" src="<?php echo $d_path; ?>/js/adobe-tags.js"></script>
        <script type="text/javascript" src="<?php echo $d_path; ?>/js/popper.min.js"></script>
        <script type="text/javascript" src="<?php echo $d_path; ?>/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo $d_path; ?>/js/hilton.js?ver=1.2"></script>
        // <script type="text/javascript" src="<?php echo $d_path; ?>/js/custom.js?ver=1.2"></script>
        <script> 
           window.scriptSupplierPageLocale = 'en-US'; 
           window.scriptSupplierPreset = [ 
             { 
               name: 'ensighten', 
               version: '^1.0.0', 
               async: true, 
               config: { 
                 market: 'en-US', 
                 source: 'N/A', 
                 businessUnit: 'applicationBusinessUnit', 
               } 
             } 
           ]
        </script> 
        <?php 
         if ($findURL === true) { ?> 
             <script src="https://www.aexp-static.com/cdaas/one/axp-script-supplier/5.1.5/script-supplier.js" integrity="sha256-dxZuIDPMl35fg5fmS8A5j/QyN7q1XUyAcUgYT7qfpLE=" crossorigin="anonymous" async></script> 
         <?php } else { ?> 
             <script src="https://qwww.aexp-static.com/cdaas/one/axp-script-supplier/5.1.5/script-supplier.js" integrity="sha256-fHdorqq5gTAttNWOP3+qTdRi0uG0+HZ6Vjuc5ZqIWmM=" crossorigin="anonymous" async></script> 
         <?php } 
        ?>