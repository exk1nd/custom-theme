<?php
?>
<div class="row">
    <?php
    $rows = get_field('table');
    if( $rows ) {
        foreach( $rows as $row ) { ?>
    <div class="new-table-block">
                <div class="new-table-top">
                    <div class="col-50">
                        <span class="top-marker">Best choise</span>
                        <div class="new-table-img"><a href="https://djnl.decisionnowlive.com/?kw=299726_147150_22796_UA_D"><img loading="lazy" src="https://paydaysay.com/wp-content/themes/paydaysay/assets/img/opploans.svg" alt="2000.00 personal loan" width="280" height="60"></a></div>
                        <a class="new-table-green-button" href="https://djnl.decisionnowlive.com/?kw=299726_147150_22796_UA_D" rel="nofollow" target="_blank">VISIT
                            SITE<span class="visit-lock"></span></a>
                    </div>
                    <div class="col-50">
                        <span class="green-best-marker">Best for Fair Credit</span>
                        <p class="new-table-title" style=""><?php echo $row['name'] ?></p>
                        <div class="new-table-rating">5.0
                            <div class="new-table-rating-star">
                                <div class=" ntr-star5"></div>
                            </div>
                            <div class="new-table-info"></div>
                            <p class="wwe">this rating is our subjective opinion</p>
                        </div>
                        <hr class="hr">
                        <div class="new-table-r-descr">
                            <div>
                                <p>Minimum Credit Score</p>
                                <p>680</p>
                            </div>
                            <div>
                                <p>APR Range</p>
                                <p>59% - 199%<span>with autopay</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="new-table-bottom">
                    <input id="table-view-1" class="table-view" type="checkbox">
                    <table class="new-table-middle">
                        <tbody>
                        <tr>
                            <td>Loan Amounts</td>
                            <td>Up to $100 per day</td>
                        </tr>
                        <tr>
                            <td>Fixed APR</td>
                            <td>Does not charge interest</td>
                        </tr>
                        <tr>
                            <td>Loan Terms</td>
                            <td>Until your scheduled payday</td>
                        </tr>
                        <tr>
                            <td>Frees</td>
                            <td>No late fees ororigination fees</td>
                        </tr>
                        <tr>
                            <td>Time to Recive Funds</td>
                            <td>Same day funding avalible</td>
                        </tr>
                        <tr>
                            <td>Recommended Credit Score</td>
                            <td>No credit check required</td>
                        </tr>
                        <tr>
                            <td>Read the full review:</td>
                            <td>Earning Personal Loans</td>
                        </tr>
                        </tbody>
                    </table>
                    <label for="table-view-1" class="new-table-view">View Details<span class="new-arrow"></span></label>
                    <label for="table-view-1" class="new-table-view view-close">Hide Details<span class="new-arrow"></span></label>
                </div>
            </div>
    <?php
    }
    }?>
</div>