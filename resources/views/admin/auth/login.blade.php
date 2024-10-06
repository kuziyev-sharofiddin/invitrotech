<!DOCTYPE html>
<html lang="en-GB">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Log In &lsaquo; NordicCell &#8212; WordPress</title>

    <style type="text/css">
        #login h1 {
            background: #fff;
        }
        #login h1 a {
            background-image: url(../wp-content/themes/nordiccell/assets/dist/img/NordicCell-Admin-Logo.png);
            background-size: 60%;
            background-position: center;
            width: 100%
            margin: 0;
        }
    </style>
    <meta name='robots' content='max-image-preview:large, noindex, noarchive'>
    <link rel='stylesheet' id='dashicons-css' href='../wp-includes/css/dashicons.min.css?ver=6.6' type='text/css' media='all'>
    <link rel='stylesheet' id='buttons-css' href='../wp-includes/css/buttons.min.css?ver=6.6' type='text/css' media='all'>
    <link rel='stylesheet' id='forms-css' href='../wp-admin/css/forms.min.css?ver=6.6' type='text/css' media='all'>
    <link rel='stylesheet' id='l10n-css' href='../wp-admin/css/l10n.min.css?ver=6.6' type='text/css' media='all'>
    <link rel='stylesheet' id='login-css' href='../wp-admin/css/login.min.css?ver=6.6' type='text/css' media='all'>
    <meta name='referrer' content='strict-origin-when-cross-origin'>
    <meta name="viewport" content="width=device-width">
    <link rel="icon" href="../wp-content/uploads/2021/10/cropped-android-chrome-512x512-2-32x32.png" sizes="32x32">
    <link rel="icon" href="../wp-content/uploads/2021/10/cropped-android-chrome-512x512-2-192x192.png" sizes="192x192">
    <link rel="apple-touch-icon" href="../wp-content/uploads/2021/10/cropped-android-chrome-512x512-2-180x180.png">
    <meta name="msapplication-TileImage" content="https://nordiccell.com/wp-content/uploads/2021/10/cropped-android-chrome-512x512-2-270x270.png">
</head>
<body class="login no-js login-action-login wp-core-ui  locale-en-gb">
<script type="text/javascript">
    /* <![CDATA[ */
    document.body.className = document.body.className.replace('no-js','js');
    /* ]]> */
</script>

<div id="login">
    <h1><a href="https://en-gb.wordpress.org/">Powered by WordPress</a></h1>

    <form action="{{route('admin.authenticate')}}" method="post">
        @csrf
        <p>
            <label for="user_login">Email Address</label>
            <input type="text" name="email" id="user_login" class="input" value="" size="20" autocapitalize="off" autocomplete="username" required="required">
        </p>

        <div class="user-pass-wrap">
            <label for="user_pass">Password</label>
            <div class="wp-pwd">
                <input type="password" name="password" id="user_pass" class="input password-input" value="" size="20" autocomplete="current-password" spellcheck="false" required="required">
                <button type="button" class="button button-secondary wp-hide-pw hide-if-no-js" data-toggle="0" aria-label="Show password">
                    <span class="dashicons dashicons-visibility" aria-hidden="true"></span>
                </button>
            </div>
        </div>
        <p class="submit">
            <input type="submit"  class="button button-primary button-large" value="Log In">
        </p>
    </form>
<script type="text/javascript">
    /* <![CDATA[ */
    function wp_attempt_focus() {setTimeout( function() {try {d = document.getElementById( "user_login" );d.focus(); d.select();} catch( er ) {}}, 200);}
    wp_attempt_focus();
    if ( typeof wpOnload === 'function' ) { wpOnload() }
    /* ]]> */
</script>
<script type="text/javascript" src="../wp-includes/js/jquery/jquery.min.js?ver=3.7.1" id="jquery-core-js"></script>
<script type="text/javascript" src="../wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1" id="jquery-migrate-js"></script>
<script type="text/javascript" id="zxcvbn-async-js-extra">
    /* <![CDATA[ */
    var _zxcvbnSettings = {"src":"https:\/\/nordiccell.com\/wp-includes\/js\/zxcvbn.min.js"};
    /* ]]> */
</script>
<script type="text/javascript" src="../wp-includes/js/zxcvbn-async.min.js?ver=1.0" id="zxcvbn-async-js"></script>
<script type="text/javascript" src="../wp-includes/js/dist/hooks.min.js?ver=2810c76e705dd1a53b18" id="wp-hooks-js"></script>
<script type="text/javascript" src="../wp-includes/js/dist/i18n.min.js?ver=5e580eb46a90c2b997e6" id="wp-i18n-js"></script>
<script type="text/javascript" id="wp-i18n-js-after">
    /* <![CDATA[ */
    wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'ltr' ] } );
    /* ]]> */
</script>
<script type="text/javascript" id="password-strength-meter-js-extra">
    /* <![CDATA[ */
    var pwsL10n = {"unknown":"Password strength unknown","short":"Very weak","bad":"Weak","good":"Medium","strong":"Strong","mismatch":"Mismatch"};
    /* ]]> */
</script>
<script type="text/javascript" id="password-strength-meter-js-translations">
    /* <![CDATA[ */
    ( function( domain, translations ) {
        var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
        localeData[""].domain = domain;
        wp.i18n.setLocaleData( localeData, domain );
    } )( "default", {"translation-revision-date":"2024-08-13 21:41:14+0000","generator":"GlotPress\/4.0.1","domain":"messages","locale_data":{"messages":{"":{"domain":"messages","plural-forms":"nplurals=2; plural=n != 1;","lang":"en_GB"},"%1$s is deprecated since version %2$s! Use %3$s instead. Please consider writing more inclusive code.":["%1$s is deprecated since version %2$s! Use %3$s instead. Please consider writing more inclusive code."]}},"comment":{"reference":"wp-admin\/js\/password-strength-meter.js"}} );
    /* ]]> */
</script>
<script type="text/javascript" src="../wp-admin/js/password-strength-meter.min.js?ver=6.6" id="password-strength-meter-js"></script>
<script type="text/javascript" src="../wp-includes/js/underscore.min.js?ver=1.13.4" id="underscore-js"></script>
<script type="text/javascript" id="wp-util-js-extra">
    /* <![CDATA[ */
    var _wpUtilSettings = {"ajax":{"url":"\/wp-admin\/admin-ajax.php"}};
    /* ]]> */
</script>
<script type="text/javascript" src="../wp-includes/js/wp-util.min.js?ver=6.6" id="wp-util-js"></script>
<script type="text/javascript" id="user-profile-js-extra">
    /* <![CDATA[ */
    var userProfileL10n = {"user_id":"0","nonce":"4e5600bfe5"};
    /* ]]> */
</script>
<script type="text/javascript" id="user-profile-js-translations">
    /* <![CDATA[ */
    ( function( domain, translations ) {
        var localeData = translations.locale_data[ domain ] || translations.locale_data.messages;
        localeData[""].domain = domain;
        wp.i18n.setLocaleData( localeData, domain );
    } )( "default", {"translation-revision-date":"2024-08-13 21:41:14+0000","generator":"GlotPress\/4.0.1","domain":"messages","locale_data":{"messages":{"":{"domain":"messages","plural-forms":"nplurals=2; plural=n != 1;","lang":"en_GB"},"Your new password has not been saved.":["Your new password has not been saved."],"Show":["Show"],"Confirm use of weak password":["Confirm use of weak password"],"Hide password":["Hide password"],"Show password":["Show password"],"Hide":["Hide"],"The changes you made will be lost if you navigate away from this page.":["The changes you made will be lost if you navigate away from this page."]}},"comment":{"reference":"wp-admin\/js\/user-profile.js"}} );
    /* ]]> */
</script>
<script type="text/javascript" src="../wp-admin/js/user-profile.min.js?ver=6.6" id="user-profile-js"></script>
</body>
</html>
