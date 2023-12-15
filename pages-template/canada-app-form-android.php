<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1.0, minimum-scale=1, user-scalable=no">
    <meta charset="UTF-8">
    <title>Form</title>
    <meta name="robots" content="noindex, nofollow"/>
    <link rel="preload" as="font" href="/app-form-fonts/nunito-sans-v6-latin-regular.woff2">
    <link rel="preload" as="font" href="/app-form-fonts/nunito-v14-latin-600.woff2">
    <link rel="preload" as="font" href="/app-form-fonts/nunito-sans-v6-latin-800.woff2">
    <!-- Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5F9ML2L');</script>
    <!-- End Google Tag Manager -->
    <style>
        /* poppins-regular - latin */
        @font-face {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 400;
            src: url('/app-form-fonts/poppins-v13-latin-regular.eot'); /* IE9 Compat Modes */
            src: local('Poppins Regular'), local('Poppins-Regular'),
            url('/app-form-fonts/poppins-v13-latin-regular.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */ url('/app-form-fonts/poppins-v13-latin-regular.woff2') format('woff2'), /* Super Modern Browsers */ url('/app-form-fonts/poppins-v13-latin-regular.woff') format('woff'), /* Modern Browsers */ url('/app-form-fonts/poppins-v13-latin-regular.ttf') format('truetype'), /* Safari, Android, iOS */ url('/app-form-fonts/poppins-v13-latin-regular.svg#Poppins') format('svg'); /* Legacy iOS */
            font-display: swap;
        }

        /* poppins-600 - latin */
        @font-face {
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 600;
            src: url('/app-form-fonts/poppins-v13-latin-600.eot'); /* IE9 Compat Modes */
            src: local('Poppins SemiBold'), local('Poppins-SemiBold'),
            url('/app-form-fonts/poppins-v13-latin-600.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */ url('/app-form-fonts/poppins-v13-latin-600.woff2') format('woff2'), /* Super Modern Browsers */ url('/app-form-fonts/poppins-v13-latin-600.woff') format('woff'), /* Modern Browsers */ url('/app-form-fonts/poppins-v13-latin-600.ttf') format('truetype'), /* Safari, Android, iOS */ url('/app-form-fonts/poppins-v13-latin-600.svg#Poppins') format('svg'); /* Legacy iOS */
            font-display: swap;
        }

        /* nunito-sans-regular - latin */
        @font-face {
            font-family: 'Nunito Sans';
            font-style: normal;
            font-weight: 400;
            src: url('/app-form-fonts/nunito-sans-v6-latin-regular.eot'); /* IE9 Compat Modes */
            src: local('Nunito Sans Regular'), local('NunitoSans-Regular'),
            url('/app-form-fonts/nunito-sans-v6-latin-regular.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */ url('/app-form-fonts/nunito-sans-v6-latin-regular.woff2') format('woff2'), /* Super Modern Browsers */ url('/app-form-fonts/nunito-sans-v6-latin-regular.woff') format('woff'), /* Modern Browsers */ url('/app-form-fonts/nunito-sans-v6-latin-regular.ttf') format('truetype'), /* Safari, Android, iOS */ url('/app-form-fonts/nunito-sans-v6-latin-regular.svg#NunitoSans') format('svg'); /* Legacy iOS */
            font-display: swap;
        }

        /* nunito-sans-800 - latin */
        @font-face {
            font-family: 'Nunito Sans';
            font-style: normal;
            font-weight: 800;
            src: url('/app-form-fonts/nunito-sans-v6-latin-800.eot'); /* IE9 Compat Modes */
            src: local('Nunito Sans ExtraBold'), local('NunitoSans-ExtraBold'),
            url('/app-form-fonts/nunito-sans-v6-latin-800.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */ url('/app-form-fonts/nunito-sans-v6-latin-800.woff2') format('woff2'), /* Super Modern Browsers */ url('/app-form-fonts/nunito-sans-v6-latin-800.woff') format('woff'), /* Modern Browsers */ url('/app-form-fonts/nunito-sans-v6-latin-800.ttf') format('truetype'), /* Safari, Android, iOS */ url('/app-form-fonts/nunito-sans-v6-latin-800.svg#NunitoSans') format('svg'); /* Legacy iOS */
            font-display: swap;
        }

        /* nunito-regular - latin */
        @font-face {
            font-family: 'Nunito';
            font-style: normal;
            font-weight: 400;
            src: url('/app-form-fonts/nunito-v14-latin-regular.eot'); /* IE9 Compat Modes */
            src: local('Nunito Regular'), local('Nunito-Regular'),
            url('/app-form-fonts/nunito-v14-latin-regular.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */ url('/app-form-fonts/nunito-v14-latin-regular.woff2') format('woff2'), /* Super Modern Browsers */ url('/app-form-fonts/nunito-v14-latin-regular.woff') format('woff'), /* Modern Browsers */ url('/app-form-fonts/nunito-v14-latin-regular.ttf') format('truetype'), /* Safari, Android, iOS */ url('/app-form-fonts/nunito-v14-latin-regular.svg#Nunito') format('svg'); /* Legacy iOS */
            font-display: swap;
        }

        /* nunito-600 - latin */
        @font-face {
            font-family: 'Nunito';
            font-style: normal;
            font-weight: 600;
            src: url('/app-form-fonts/nunito-v14-latin-600.eot'); /* IE9 Compat Modes */
            src: local('Nunito SemiBold'), local('Nunito-SemiBold'),
            url('/app-form-fonts/nunito-v14-latin-600.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */ url('/app-form-fonts/nunito-v14-latin-600.woff2') format('woff2'), /* Super Modern Browsers */ url('/app-form-fonts/nunito-v14-latin-600.woff') format('woff'), /* Modern Browsers */ url('/app-form-fonts/nunito-v14-latin-600.ttf') format('truetype'), /* Safari, Android, iOS */ url('/app-form-fonts/nunito-v14-latin-600.svg#Nunito') format('svg'); /* Legacy iOS */
            font-display: swap;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: 'Nunito';
        }

        .header {
            background-image: url('/images/header_form.svg');
            background-size: 100%;
            background-repeat: no-repeat;
            max-width: 430px;
            height: 110px;
            display: flex;
            justify-content: center;
            padding-top: 40px;
            margin: 0 auto;
            margin-top: -20px;
        }

        .header img {
            width: 100%;
            max-width: 200px;
        }

        @media (max-width: 420px) {
            .header {
                height: 90px;
            }
        }

        @media (max-width: 376px) {
            .header {
                height: 85px;
            }
        }
    </style>
</head>
<body>

<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5F9ML2L"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
<!--<header class="header">-->
<!--    <img alt="PayDaySay" src="/images/paydaysay_only.svg" width="208" height="36">-->
<!--</header>-->

<script type="text/javascript">(function (d, w, u, o) {
        w[o] = {
            affiliate_id: '898',
            storekey: 'r0Vy4',
            steps: 'one_one_neutral',
            font_family: '',
            wrapper_id: 'storefrontloans_apply_form',
            domain: 'https://forms.storefrontloans.com',
            sub_id: '',
            sub_id2: '',
            sub_id3: '',
            sub_id4: '',
            sub_id5: '',
            e_consent_link: 'https://paydaysay.com/canada-e-consent.php',
            privacy_policy_link: 'https://paydaysay.com/canada-app-privacy.php',
            terms_conditions_link: 'https://paydaysay.com/canada-app-terms.php'
        };
        var f = d.getElementsByTagName('script')[0], s = d.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = u;
        f.parentNode.insertBefore(s, f);
        d['\x77\x72\x69\x74\x65']('\x3c\x64\x69\x76\x20\x69\x64\x3d\x22' + w[o]['\x77\x72\x61\x70\x70\x65\x72\x5f\x69\x64'] + '\x22\x20\x73\x74\x79\x6c\x65\x3d\x22\x6d\x69\x6e\x2d\x68\x65\x69\x67\x68\x74\x3a\x20' + '1600' + '\x70\x78\x22\x3e\x3c\x2f\x64\x69\x76\x3e');
    })(document, window, 'https://forms.storefrontloans.com/js/canada-script-form-loader.js?_v=360', 'storefrontloans');</script>
<style>
    #form-canada-one_one {
        font-family: 'Poppins';
    }

    #form-canada-one_one .block-form {
        margin: 0;
        background: #F6F6F6;
        border-radius: 0;
        -moz-border-radius: 0;
        -webkit-border-radius: 0;
        border: 0;
    }

    #form-canada-one_one .form-body {
        padding-top: 0;
    }

    #form-canada-one_one .contain h2 {
        font-family: 'Poppins';
        color: #fff;
        font-size: 24px;
        font-weight: 600;
        text-align: center;
        margin: 0 0 10px;
        /*background: linear-gradient(83.45deg, #3942FA 20.01%, #3F80F2 96.97%);*/
        background: #314BCE;
        padding: 40px;
    }

    #form-canada-one_one .control-label {
        font-family: 'Nunito';
        color: #4D4D4D;
    }

    #form-canada-one_one .contain div.valid input, #form-canada-one_one .contain div.valid select {
        border: 2px solid #c3c3c3;
        background-color: #fff;
    }

    #form-canada-one_one .contain input, #form-canada-one_one .contain select {
        color: #534c43;
        font-family: 'Poppins';
        background-color: #fff;
    }

    #form-canada-one_one .contain input.submit {
        /*background: #ff6a00;*/
        background: #FF897E;
        transition: all .1s linear;
        border-radius: 50px;
        /*border: 3px solid #ff6a00;*/
        border: 3px solid #FF897E;
        font-family: 'Nunito';
    }

    #form-canada-one_one .contain input.submit:hover {
        background: transparent;
        /*color: #ff6a00;*/
        color: #FF897E;
        
    }

    #form-canada-one_one .by-step a {
        color: #234EEAD8;
        font-family: 'Poppins';
    }

    #form-canada-one_one .confidence {
        color: #696969;
        background: #4149FF0D url('../images/form/lock.png') no-repeat 0 50%;
    }
</style>
</body>
</html>