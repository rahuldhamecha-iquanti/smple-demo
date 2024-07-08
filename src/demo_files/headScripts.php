<meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name='robots' content='noindex, nofollow' />
        
        <!-- Google Tag Manager -->
        <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NRTR5RB');
        </script>
        <!-- End Google Tag Manager -->
        <script src="https://www.americanexpress.com/adobedtm-acq"></script>
        <script>
        var digitalData = {
            "version": "2.4",
            "page": {
                "pageInfo": {
                    "country": "US",
                    "language": "en",
                    "pageName": "LandingPage|Hilton|Q4 LTO 23|MCLP|URL <?php echo $page_url?>"
                },
                "category": {
                    "businessUnit": "Acq",
                }
            }
        }
        </script>
        
        <!-- Start VWO Async SmartCode -->
        <script type='text/javascript'>
        window._vwo_code = window._vwo_code || (function() {
            var account_id = 407476,
                settings_tolerance = 5000,
                library_tolerance = 5000,
                use_existing_jquery = false,
                is_spa = 1,
                hide_element = 'body',

                /* DO NOT EDIT BELOW THIS LINE */
                f = false,
                d = document,
                code = {
                    use_existing_jquery: function() {
                        return use_existing_jquery;
                    },
                    library_tolerance: function() {
                        return library_tolerance;
                    },
                    finish: function() {
                        if (!f) {
                            f = true;
                            var a = d.getElementById('_vis_opt_path_hides');
                            if (a) a.parentNode.removeChild(a);
                        }
                    },
                    finished: function() {
                        return f;
                    },
                    load: function(a) {
                        var b = d.createElement('script');
                        b.src = a;
                        b.type = 'text/javascript';
                        b.innerText;
                        b.onerror = function() {
                            _vwo_code.finish();
                        };
                        d.getElementsByTagName('head')[0].appendChild(b);
                    },
                    init: function() {
                        window.settings_timer = setTimeout('_vwo_code.finish()', settings_tolerance);
                        var a = d.createElement('style'),
                            b = hide_element ? hide_element +
                            '{opacity:0 !important;filter:alpha(opacity=0) !important;background:none !important;}' :
                            '',
                            h = d.getElementsByTagName('head')[0];
                        a.setAttribute('id', '_vis_opt_path_hides');
                        a.setAttribute('type', 'text/css');
                        if (a.styleSheet) a.styleSheet.cssText = b;
                        else a.appendChild(d.createTextNode(b));
                        h.appendChild(a);
                        this.load('https://dev.visualwebsiteoptimizer.com/j.php?a=' + account_id + '&u=' +
                            encodeURIComponent(d.URL) + '&f=' + (+is_spa) + '&r=' + Math.random());
                        return settings_timer;
                    }
                };
            window._vwo_settings_timer = code.init();
            return code;
        }());
        </script>
        <!-- End VWO Async SmartCode -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo $d_path; ?>/css/hilton-lto-style.css?ver=2.2">
        <link rel="icon" href="<?php echo $d_path; ?>/images/favicon.ico">
        <title>Hilton Honors American Express Cards</title>