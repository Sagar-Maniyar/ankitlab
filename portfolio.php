<?php include 'layouts/header.php'; ?>
    <!--==============================
    Breadcumb
    ============================== -->
    <div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcrumb-bg.png">
        <!-- bg animated image/ -->   
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-8">
                    <div class="breadcumb-content mt-40">
                        <h1 class="breadcumb-title">Portfolios</h1>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcumb-menu text-md-end">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Case Studies</li>
                    </ul>
                </div>
            </div>
            
        </div>
    </div>

<!--==============================
    Portfolio Area  
    ==============================-->
    <section class="portfolio-page space mt-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="project-tab tab-menu1 filter-menu-active">
                        <button data-filter="*" class="filter-btn active">
                            Show All
                        </button>
                        <button data-filter=".cat1" class="filter-btn">
                            Announcement
                        </button>
                        <button data-filter=".cat2" class="filter-btn">
                            FILMS
                        </button>
                        <button data-filter=".cat3" class="filter-btn">
                            Planner
                        </button>
                        <button data-filter=".cat4" class="filter-btn">
                            Story
                        </button>
                        <button data-filter=".cat5" class="filter-btn">
                            Wedding
                        </button>
                    </div>
                </div>
            </div>
            <div class="row gy-4 filter-active mb-60">
                <div class="col-md-6 col-lg-4 filter-item cat4">
                    <div class="project-box title-anim">
                        <div class="project-img global-img">
                            <img src="assets/img/portfolio/portfolio7_1.png" alt="portfolio">
                        </div>
                        <div class="project-card-details">
                            <p class="subtitle">Miranda & Malena</p>
                            <h3 class="title"><a href="project-details.php">Best Weeding Of The Year</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 filter-item cat4 cat2 cat3">
                    <div class="project-box title-anim">
                        <div class="project-img global-img">
                            <img src="assets/img/portfolio/portfolio7_2.png" alt="portfolio">
                        </div>
                        <div class="project-card-details">
                            <p class="subtitle">Miranda & Malena</p>
                            <h3 class="title"><a href="project-details.php">Best Weeding Of The Year</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 filter-item cat1 cat3">
                    <div class="project-box title-anim">
                        <div class="project-img global-img">
                            <img src="assets/img/portfolio/portfolio7_3.png" alt="portfolio">
                        </div>
                        <div class="project-card-details">
                            <p class="subtitle">Miranda & Malena</p>
                            <h3 class="title"><a href="project-details.php">Best Weeding Of The Year</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 filter-item cat1 cat2 cat4">
                    <div class="project-box title-anim">
                        <div class="project-img global-img">
                            <img src="assets/img/portfolio/portfolio7_4.png" alt="portfolio">
                        </div>
                        <div class="project-card-details">
                            <p class="subtitle">Miranda & Malena</p>
                            <h3 class="title"><a href="project-details.php">Best Weeding Of The Year</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 filter-item cat5 cat3">
                    <div class="project-box title-anim">
                        <div class="project-img global-img">
                            <img src="assets/img/portfolio/portfolio7_5.png" alt="portfolio">
                        </div>
                        <div class="project-card-details">
                            <p class="subtitle">Miranda & Malena</p>
                            <h3 class="title"><a href="project-details.php">Best Weeding Of The Year</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 filter-item cat1 cat5 cat2">
                    <div class="project-box title-anim">
                        <div class="project-img global-img">
                            <img src="assets/img/portfolio/portfolio7_6.png" alt="portfolio">
                        </div>
                        <div class="project-card-details">
                            <p class="subtitle">Miranda & Malena</p>
                            <h3 class="title"><a href="project-details.php">Best Weeding Of The Year</a></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-wrap justify-content-center">
                <a class="btn">
                    LOAD MORE IMAGES 
                </a>
            </div>
        </div>
    </section>   

    <?php include 'layouts/footer.php'; ?>