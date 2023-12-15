<?php
/* Template Name: sms
Template Post Type: post, page, cinema
*/
get_header();

?>
<style type="text/css">
    #header {
        background: linear-gradient(236.51deg, #127CFFD8 -17.51%, #2460E8D8 14.05%, #234EEAD8 44.04%, #1721FBD8 63.63%) !important;
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

    #omForm {
        background-color: #fff !important;
    }

    #omForm .om_subhead {
        /*height: 210px !important;*/
        padding-top: 100px !important;
        margin-top: -100px !important;
        background: linear-gradient(236.51deg, #127CFFD8 -17.51%, #2460E8D8 14.05%, #234EEAD8 44.04%, #1721FBD8 63.63%) !important;
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

    #omForm .om_full_area button {
        border-radius: 50px !important;
    }

    #omForm .om_subhead h3 {
        font-weight: 600 !important;
        font-size: 45px !important;
        line-height: 65px !important;
        margin: 1em !important;
        margin-bottom: 20px !important;
    }

    #omForm .om_full_step_label {
        display: none;
    }

    #omForm .om_full_step_row .om_full_clmns {
        flex-direction: column !important;
    }

    #omForm .om_full_clmn_33 {
        margin: 10px auto !important;
        text-align: center;
    }

    #omForm .om_full_step_row .om_full_clmns .om_full_clmns {
        flex-direction: row !important;
    }

    #omForm .om_full_area button {
        max-width: 200px !important;
        margin: 15px auto !important;
    }

    #omForm .om_full_step_row_line {
        padding-top: 5px !important;
    }

    #omForm .om_full_area button.btn.omLookupStart {
        padding: 6px 30px !important;
        width: 100% !important;
        height: 45px !important;
        border: 4px solid #ff6a00 !important;
    }

    #omForm .om_full_area button.btn.omLookupStart:hover {
        background-color: transparent !important;
        color: #ff6a00 !important;
    }

    #omForm .om_full_area input:not([type="checkbox"]):not([type="radio"]), #omForm .om_full_area select {
        border-color: rgb(69, 116, 236) !important;
    }

    #omForm .om_full_step_colored_bg label, #omForm .om_full_step_colored_bg h4 {
        color: #2c4b5d !important;
    }

    #omForm .om_full_step_colored_bg {
        background-color: transparent !important;
    }

    #omForm .om_full_area .om_full_step_colored_bg button {
        border: 4px solid #ff6a00 !important;
        padding-top: 15px !important;
        padding-bottom: 15px !important;
    }

    #omForm .om_full_area .om_full_step_colored_bg button:hover {
        background-color: transparent !important;
        color: #ff6a00 !important;
    }

    #omForm .om_full_step_colored_bg label a {
        color: #2c4b5d !important;
    }
    #omForm .om-progress-bar {
    	margin-bottom: 0 !important;
    }
    .omForm-wrapper {
	padding: 0 8px 0 !important;
    }
    #omForm-root {
    	margin: 0px auto 10px !important;
    }
    .header__inner h1 {
    	font-weight: 600;
    	font-size: 30px;
    	line-height: 40px;
    	letter-spacing: -1px;
    	text-align: center;
    	margin: 10px 0;
    }
</style>
<header>
    <div class="header__inner">
        <h1>Need Cash Urgently?<br>Apply here</h1>
    </div>
</header>
<section class="form-main-content">
    <script src="https://cdn101.profitner.com/form/run.php?p=8411035F020E4070AC4A9C907FE57799"></script>
</section>

<script>
    window.onscroll = function () {
        null
    };
</script>
<script> window.addEventListener("load", function () {
        var omFormDocLink = document.querySelectorAll(".doc_link");
        omFormDocLink.length && Array.prototype.forEach.call(omFormDocLink, function (t) {
            var e = document.location.origin + "/";
            t.classList.contains("privacy_link") ? (e += "your-privacy-rights.php") : t.classList.contains("terms_link") ? e += "terms-and-conditions.php" : '', t.setAttribute("target", "_blank"), t.setAttribute("href", e), t.setAttribute("onclick", "")
        });
        var n = document.querySelectorAll("script");
        Array.prototype.forEach.call(n, function (t) {
            /omFormDocLink/.test(t.innerText) && t.remove()
        })
    }); </script>


<?php get_footer(); ?>
