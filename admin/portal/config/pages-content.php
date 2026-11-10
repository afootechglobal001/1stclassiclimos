<?php if ($page == 'editPagesForm') { ?>
    <div class="pages-creation-panel" data-aos="fade-left" data-aos-duration="900">
        <div class="pages-content-div">
            <div class="title-div">
                <ul>
                    <?php if ($pageCategory == 'FLEET') { ?>
                        <li class="active-li" title="PAGE CONTENT" id="pageContent" onclick="_getActivePagesTab({divid: 'pageContent', page: 'pageContent', pageCategory: 'FLEET', url: portalMiddleWareUrl});">PAGE CONTENT</li>
                        <li title="UPLOAD PICTURE" id="picturePage" onclick="_getActivePagesTab({divid:'picturePage', page: 'picturePage', pageCategory: 'FLEET', url: portalMiddleWareUrl});">UPLOAD PICTURE</li>
                        <li title="Page Frequently Asked Questions" id="fleetFaqPage" onclick="_getActivePagesTab({divid:'fleetFaqPage', page: 'fleetFaqPage', pageCategory: 'FLEET', url: portalMiddleWareUrl});">FAQ</li>
                    <?php } ?>

                    <?php if ($pageCategory == 'WINE_TOUR') { ?>
                        <li class="active-li" title="PAGE CONTENT" id="pageContent" onclick="_getActivePagesTab({divid: 'pageContent', page: 'pageContent', pageCategory: 'WINE_TOUR', url: portalMiddleWareUrl});">PAGE CONTENT</li>
                        <li title="HOURLY RATE" id="houlyRatePage" onclick="_getActivePagesTab({divid:'houlyRatePage', page: 'houlyRatePage', pageCategory: 'WINE_TOUR', url: portalMiddleWareUrl});">HOURLY RATE</li>   
                        <li title="ADD RESORT" id="resortPage" onclick="_getActivePagesTab({divid:'resortPage', page: 'resortPage', pageCategory: 'WINE_TOUR', url: portalMiddleWareUrl});">ADD RESORT</li>  
                        <li title="UPLOAD PICTURE" id="picturePage" onclick="_getActivePagesTab({divid:'picturePage', page: 'picturePage', pageCategory: 'WINE_TOUR', url: portalMiddleWareUrl});">UPLOAD PICTURE</li>   
                    <?php } ?>

                    <?php if ($pageCategory == 'PACKAGE_DEAL') { ?>
                        <li class="active-li" title="PAGE CONTENT" id="pageContent" onclick="_getActivePagesTab({divid: 'pageContent', page: 'pageContent', pageCategory: 'PACKAGE_DEAL', url: portalMiddleWareUrl});">PAGE CONTENT</li> 
                        <li title="HOURLY RATE" id="houlyRatePage" onclick="_getActivePagesTab({divid:'houlyRatePage', page: 'houlyRatePage', pageCategory: 'PACKAGE_DEAL', url: portalMiddleWareUrl});">HOURLY RATE</li>   
                        <li title="ADD RESORT" id="resortPage" onclick="_getActivePagesTab({divid:'resortPage', page: 'resortPage', pageCategory: 'PACKAGE_DEAL', url: portalMiddleWareUrl});">ADD RESORT</li>  
                        <li title="UPLOAD PICTURE" id="picturePage" onclick="_getActivePagesTab({divid:'picturePage', page: 'picturePage', pageCategory: 'PACKAGE_DEAL', url: portalMiddleWareUrl});">UPLOAD PICTURE</li>   
                    <?php } ?>

                    <?php if ($pageCategory == 'BLOG') { ?>
                        <li class="active-li" title="PAGE CONTENT" id="pageContent" onclick="_getActivePagesTab({divid: 'pageContent', page: 'pageContent', pageCategory: 'BLOG', url: portalMiddleWareUrl});">PAGE CONTENT</li> 
                        <li title="UPLOAD PICTURE" id="picturePage" onclick="_getActivePagesTab({divid:'picturePage', page: 'picturePage', pageCategory: 'BLOG', url: portalMiddleWareUrl});">UPLOAD PICTURE</li>
                    <?php } ?>
                </ul>

                <div class="btn-div">
                    <button class="btn" title="Close" onclick="_alertClose(<?php echo $modalLayer ?>);">
                        <i class="bi bi-x-lg"></i> Close
                    </button>
                </div>
            </div>

            <div class="pages-back-div">
                <div id="getPagesDetails">
                    <?php
                        $page = 'pageContent';
                        include 'page-details.php';
                    ?>
                </div>
            </div>
        </div>
    </div>
<?php } ?>