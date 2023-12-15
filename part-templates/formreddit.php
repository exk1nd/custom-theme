<?php
/* Template Name: Form Reddit
Template Post Type: post, page, cinema
*/
get_header();

?>
    <style type="text/css">
        #main-menu {
            display: none;
        }

        #omForm, .omFormBox {
            background-color: transparent !important;
        }

        #omForm .om_subhead {
            background: linear-gradient(236.51deg, #127CFFD8 -17.51%, #2460E8D8 14.05%, #234EEAD8 44.04%, #1721FBD8 63.63%) !important;
        }

        #omForm .om_full_step_row::after {
            display: none !important;
        }

        #omForm .om_full_area h3 {
            display: none !important;
        }

        #omForm .om_full_area button {
            border-radius: 50px !important;
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
            height: 40px !important;
        }

        #omForm #loanAmount-button.ui-selectmenu-button {
            width: 300px !important;
        }

        #omForm .bttn {
            background: #FF6600 !important;
            color: #FFFFFF;
            text-transform: uppercase;
            border: 3px solid #F60 !important;
        }

        #omForm .bttn:hover {
            background: transparent !important;
            color: #F60 !important;
        }

        #omForm .bttn.back {
            background-color: transparent !important;
            border: none !important;
        }

        #omForm .big_screen {
            margin-bottom: 20px;
        }
    </style>
    <main>
        <section class="form-main-content">
            <script src="https://cdn101.profitner.com/form/run.php?p=0EF71591B73F11E8A0B842010A800486"></script>
        </section>
    </main>

<?php get_footer(); ?>