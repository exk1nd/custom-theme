<?php
$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
parse_str($_SERVER['QUERY_STRING'], $CP);
$CUID = $CP['CUID'];
$tCUID = "CUID=" . $CUID;
$tPar = $CP['tPar']['paydaysay-ios'] = $CUID;
if ($_SERVER['QUERY_STRING'] == $tCUID) {
    // $_GET['tPar[paydaysay-ios]'] = $CUID;
    $location = "Location: https://paydaysay.com/app-form.php?" . $_SERVER['QUERY_STRING'] . "&tPar[paydaysay-ios]=" . $CUID;
    header($location);
    exit;
}
$text = "USER_AGENT ---" . $_SERVER['HTTP_USER_AGENT'] . "---\n";
$text .= $CUID . " - CUID \n";
$text .= $tPar . " - tPar\n";
$text .= "QUERY_STRING " . $_SERVER['QUERY_STRING'] . "\n";
$text .= "---IOS---\n";
$CUIDfile = fopen("CUID.txt", "a+") or die("Unable to open file!");
fwrite($CUIDfile, $text);
fclose($CUIDfile);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1.0, minimum-scale=1, user-scalable=no">
    <meta charset="UTF-8">
    <title>Form</title>
    <link rel="preload" as="font" href="/app-form-fonts/nunito-sans-v6-latin-regular.woff2">
    <link rel="preload" as="font" href="/app-form-fonts/nunito-v14-latin-600.woff2">
    <link rel="preload" as="font" href="/app-form-fonts/nunito-sans-v6-latin-800.woff2">

    <meta name="robots" content="noindex, nofollow"/>
    <script>
        !function (t, e, n, s, a, c, i, o, p) {
            t.AppsFlyerSdkObject = a, t.AF = t.AF || function () {
                (t.AF.q = t.AF.q || []).push([Date.now()].concat(Array.prototype.slice.call(arguments)))
            },
                t.AF.id = t.AF.id || i, t.AF.plugins = {}, o = e.createElement(n), p = e.getElementsByTagName(n)[0], o.async = 1,
                o.src = "https://websdk.appsflyer.com?" + (c.length > 0 ? "st=" + c.split(",").sort().join(",") + "&" : "") + (i.length > 0 ? "af_id=" + i : ""),
                p.parentNode.insertBefore(o, p)
        }(window, document, "script", 0, "AF", "pba", {pba: {webAppId: "58cd7713-7b67-46c7-b01a-fd5ddfb728d1"}})
    </script>
    <script>
        var paramss = new URLSearchParams(document.location.search.substring(1));
        var CUID = paramss.get("CUID");
        var tPar = paramss.get("tPar[paydaysay-ios]");
        console.log(CUID);
        console.log(tPar);

        window.onload = function () {
            document.querySelector("#omReApplyPage .omReApplyBttnLarge").addEventListener('click', function () {
                AF('pba', 'event', {
                    eventType: 'EVENT',
                    eventCategory: 'FORM EVENT',
                    eventName: 'SEND FORM',
                    eventRevenue: document.querySelector('#loanAmount').value,
                    eventValue: {'form': 'send', 'CUID': CUID}
                });

            });

            AF('pba', 'setCustomerUserId', CUID)
            AF('pba', 'event', {
                eventType: 'EVENT',
                eventCategory: 'FORM EVENT',
                eventName: 'OPEN FORM',
                eventValue: {'form': 'open', 'CUID': CUID}
            });
        }
    </script>
</head>
<body>

<style type="text/css">
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
        background: #F7F7F7;
    }

    #header {
        background: none;
    }

    .header-bg {
        background: transparent;
    }

    .top-hr {
        display: none;
    }

    .header-top {
        justify-content: center;
    }

    .top-menu {
        display: none;
    }

    .top-header-button {
        display: none;
    }

    .om_init_row {
        flex-direction: column !important;
        align-items: center !important;
    }

    /*.om_init_row .om_full_clmns{*/
    /*    max-width: 400px;*/
    /*    margin: 0 auto;*/
    /*}*/
    .om_init_row .om_full_clmns_wrap {
        max-width: 400px;
        margin: 0 auto;
    }


    #omForm .om_full_clmn label {
        font-family: Nunito;
        font-style: normal;
        font-weight: 600 !important;
        font-size: 14px !important;
        line-height: 19px;
        text-transform: uppercase !important;
        color: #808080 !important;
        width: 95% !important;
        margin: 0 5px !important;
        max-width: 500px;
    }

    #omForm .om_full_area select {
        background-color: #FFF !important;
        border: 1px solid #E1E9F3 !important;
        border-radius: 6px !important;
        background-image: url("/app-form-fonts/Path.svg") !important;
        padding-right: 20px !important;
        background-position-x: 95% !important;
        width: 95% !important;
        margin: 0 5px !important;
        max-width: 500px;
    }

    #omForm input {
        background: #FFFFFF !important;
        border: 1px solid #E1E9F3 !important;
        border-radius: 6px !important;
        width: 95% !important;
        margin: 0 5px !important;
        max-width: 500px;
    }

    #omForm .om_full_clmn_33 {
        display: flex !important;
        flex-direction: column !important;
        align-items: center !important;
    }

    #omForm .om_full_area button {
        background: #FF6600;
        border-radius: 50px !important;
        font-family: Nunito Sans;
        font-style: normal;
        font-weight: 800 !important;
        font-size: 20px !important;
        line-height: 27px !important;
        text-align: center;
        text-transform: uppercase;
        color: #FFFFFF !important;
        width: 297px !important;
        height: 66px !important;
        margin: 10px 0 !important;
    }

    #omForm .om_full_area button:hover {
        background: #FFFFFF !important;
        color: #FF6600 !important;
        border: 3px solid #f60;
    }

    #omForm .om_full_step_colored_bg {
        background-color: transparent !important;
        color: #808080 !important;
    }

    #omForm .om_full_step_colored_bg label, #omForm .om_full_step_colored_bg h4 {
        color: #808080 !important;
    }

    #omForm .om_full_step_colored_bg label a {
        color: #808080 !important;
        font-weight: bold !important;
    }

    #omForm {
        background-color: transparent !important;
    }

    #omForm .om_subhead {
        /*height: 210px !important;*/
        background: linear-gradient(236.51deg, #127CFFD8 -17.51%, #2460E8D8 14.05%, #234EEAD8 44.04%, #1721FBD8 63.63%) !important;
        padding: 40px 40px 30px 40px !important;
    }

    #omForm .om_full_step_body {
        background-color: transparent !important;
    }

    #omForm .om_full_step_row::after {
        display: none !important;
    }

    #omForm .om_full_mddl {
        max-width: 1110px !important;
    }

    #omForm .om_full_area h3 {
        display: none !important;
    }

    #omForm .om_full_step_label {
        padding: 0 !important;
        font-family: Poppins;
        font-style: normal !important;
        font-weight: 600 !important;
        font-size: 28px !important;
        line-height: 42px;
        text-align: center !important;
        color: #3B43F2 !important;
        margin: 0 auto;
        flex: 0 !important;
        margin-bottom: 20px !important;
    }

    #omForm .om_subhead h3 {
        font-family: Poppins;
        font-style: normal;
        font-weight: 600 !important;
        font-size: 28px !important;
        line-height: 42px;
        text-align: center;
        color: #FCFCFC !important;
    }

    #omForm .om_subhead h4 {
        font-family: Nunito Sans;
        font-style: normal !important;
        font-weight: normal !important;
        font-size: 14px !important;
        line-height: 22px;
        text-align: center;
        color: #FCFCFC !important;
        margin-top: 10px;
        margin: 10px auto;
        max-width: 250px;
    }

    #omForm .om_full_step_row .om_full_clmns {
        flex-direction: column !important;
    }

    #omForm .om_full_clmn_33 {
        width: 100% !important;
    }

    #omForm .om_full_step_row_line {
        border-bottom: 0 !important;
    }

    @media only screen and (max-width: 414px) {
        #omForm .om_full_step_label {
            display: none;
        }

        #omForm .om_full_area button {
            margin-top: 0px !important;
        }

        .om_init_row {
            padding-top: 10px !important
        }

        #omForm .om_subhead {
            padding: 40px 0 30px 0 !important;
        }
    }
</style>
<section class="form-main-content">
    <script src="https://cdn101.profitner.com/form/run.php?p=C23C5921E3B211EA85BA42010A5C50F4"></script>
</section>
<script> window.addEventListener("load", function () {
        var omFormDocLink = document.querySelectorAll(".doc_link");
        omFormDocLink.length && Array.prototype.forEach.call(omFormDocLink, function (t) {
            var e = document.location.origin + "/";
            t.classList.contains("privacy_link") ? (e += "privacy-policy.php") : t.classList.contains("terms_link") ? e += "terms-of-use.php" : '', t.setAttribute("target", "_blank"), t.setAttribute("href", e), t.setAttribute("onclick", "")
        });
        var n = document.querySelectorAll("script");
        Array.prototype.forEach.call(n, function (t) {
            /omFormDocLink/.test(t.innerText) && t.remove()
        })
    }); </script>
</body>