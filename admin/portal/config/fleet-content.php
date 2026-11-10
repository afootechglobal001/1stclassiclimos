<?php if ($page == 'fleetPage') { ?>
<div class="page-title-div" data-aos="fade-in" data-aos-duration="1500">
    <div class="title-div">
        <div>
            <div class="icon-div"><i class="bi bi-car-front-fill"></i></div>
        </div>
        <div class="text-div">
            <h3>Fleets</h3>
            <p>Manage your chauffeur vehicles, fleet details, and availability for customer bookings.</p>
        </div>
    </div>

    <div class="btn-div">
        <div class="search-div">
            <input type="text" onkeyup="_filtersFleet(this.value);" placeholder="Search Fleets Here...">
            <i class="bi bi-search"></i>
        </div>
        <button class="btn" title="ADD NEW FLEET"
            onclick="sessionStorage.removeItem('useEachPageSession'); _getForm({page: 'editPagesForm', pageCategory: 'FLEET', url: portalMiddleWareUrl});">
            <i class="bi-plus-square"></i> ADD NEW FLEET
        </button>
    </div>
</div>

<div class="main-content-div" data-aos="fade-in" data-aos-duration="1500">
    <div class="tables-content-div">
        <div class="content-title">
            <div class="title">
                <i class="bi bi-car-front-fill"></i>
                <p>Fleets</p>
            </div>
        </div>

        <div class="inner-table-content">
            <div class="fleet-wrapper" id="fleetPageContent">
                <script>_fetchFleetData();</script> 

                <div class="content-loading-div">
                    <img src="<?php echo $websiteUrl ?>/all-images/images/spinner.gif" alt="Loading" />
                </div>
            </div>
            <!-- Pagination -->
            <div id="fleetContentPaginationControls" class="pagination-div"></div>
        </div>
    </div>
</div>
<?php } ?>