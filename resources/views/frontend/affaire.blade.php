@include('frontend.header')
@include('frontend.navbar')

<section class="section about-section gray-bg" id="about">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="about-text go-to">
                <div class="row">
                    <div class="col-md-9">
                        <h3 class="dark-color">Affaire</h3>
                    </div>
                    <div class="col-md-3">
                        <div class="button-group-area mt-40">
                            <a href="#" class="genric-btn success circle arrow">Offres<span class="lnr lnr-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
                <br />              
                <div class="row">
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css" integrity="sha256-3sPp8BkKUE7QyPSl6VfBByBroQbKxKG7tsusY2mhbVY=" crossorigin="anonymous" />

                    <div class="container">
                    <div class="row">
                    <style>
                        body{
                            background:#f5f5f5;
                            margin-top:20px;}

                        /* ===== Career ===== */
                        .career-form {
                        background-color: #4e63d7;
                        border-radius: 5px;
                        padding: 0 16px;
                        }

                        .career-form .form-control {
                        background-color: rgba(255, 255, 255, 0.2);
                        border: 0;
                        padding: 12px 15px;
                        color: #fff;
                        }

                        .career-form .form-control::-webkit-input-placeholder {
                        /* Chrome/Opera/Safari */
                        color: #fff;
                        }

                        .career-form .form-control::-moz-placeholder {
                        /* Firefox 19+ */
                        color: #fff;
                        }

                        .career-form .form-control:-ms-input-placeholder {
                        /* IE 10+ */
                        color: #fff;
                        }

                        .career-form .form-control:-moz-placeholder {
                        /* Firefox 18- */
                        color: #fff;
                        }

                        .career-form .custom-select {
                        background-color: rgba(255, 255, 255, 0.2);
                        border: 0;
                        padding: 12px 15px;
                        color: #fff;
                        width: 100%;
                        border-radius: 5px;
                        text-align: left;
                        height: auto;
                        background-image: none;
                        }

                        .career-form .custom-select:focus {
                        -webkit-box-shadow: none;
                                box-shadow: none;
                        }

                        .career-form .select-container {
                        position: relative;
                        }

                        .career-form .select-container:before {
                        position: absolute;
                        right: 15px;
                        top: calc(50% - 14px);
                        font-size: 18px;
                        color: #ffffff;
                        content: '\F2F9';
                        font-family: "Material-Design-Iconic-Font";
                        }

                        .filter-result .job-box {
                        -webkit-box-shadow: 0 0 35px 0 rgba(130, 130, 130, 0.2);
                                box-shadow: 0 0 35px 0 rgba(130, 130, 130, 0.2);
                        border-radius: 10px;
                        padding: 10px 35px;
                        }

                        ul {
                        list-style: none; 
                        }

                        .list-disk li {
                        list-style: none;
                        margin-bottom: 12px;
                        }

                        .list-disk li:last-child {
                        margin-bottom: 0;
                        }

                        .job-box .img-holder {
                        height: 65px;
                        width: 65px;
                        background-color: #4e63d7;
                        background-image: -webkit-gradient(linear, left top, right top, from(rgba(78, 99, 215, 0.9)), to(#5a85dd));
                        background-image: linear-gradient(to right, rgba(78, 99, 215, 0.9) 0%, #5a85dd 100%);
                        font-family: "Open Sans", sans-serif;
                        color: #fff;
                        font-size: 22px;
                        font-weight: 700;
                        display: -webkit-box;
                        display: -ms-flexbox;
                        display: flex;
                        -webkit-box-pack: center;
                            -ms-flex-pack: center;
                                justify-content: center;
                        -webkit-box-align: center;
                            -ms-flex-align: center;
                                align-items: center;
                        border-radius: 65px;
                        }

                        .career-title {
                        background-color: #4e63d7;
                        color: #fff;
                        padding: 15px;
                        text-align: center;
                        border-radius: 10px 10px 0 0;
                        background-image: -webkit-gradient(linear, left top, right top, from(rgba(78, 99, 215, 0.9)), to(#5a85dd));
                        background-image: linear-gradient(to right, rgba(78, 99, 215, 0.9) 0%, #5a85dd 100%);
                        }

                        .job-overview {
                        -webkit-box-shadow: 0 0 35px 0 rgba(130, 130, 130, 0.2);
                                box-shadow: 0 0 35px 0 rgba(130, 130, 130, 0.2);
                        border-radius: 10px;
                        }

                        @media (min-width: 992px) {
                        .job-overview {
                            position: -webkit-sticky;
                            position: sticky;
                            top: 70px;
                        }
                        }

                        .job-overview .job-detail ul {
                        margin-bottom: 28px;
                        }

                        .job-overview .job-detail ul li {
                        opacity: 0.75;
                        font-weight: 600;
                        margin-bottom: 15px;
                        }

                        .job-overview .job-detail ul li i {
                        font-size: 20px;
                        position: relative;
                        top: 1px;
                        }

                        .job-overview .overview-bottom,
                        .job-overview .overview-top {
                        padding: 35px;
                        }

                        .job-content ul li {
                        font-weight: 600;
                        opacity: 0.75;
                        border-bottom: 1px solid #ccc;
                        padding: 10px 5px;
                        }

                        @media (min-width: 768px) {
                        .job-content ul li {
                            border-bottom: 0;
                            padding: 0;
                        }
                        }

                        .job-content ul li i {
                        font-size: 20px;
                        position: relative;
                        top: 1px;
                        }
                        .mb-30 {
                            margin-bottom: 30px;
                        }
                    </style>
                    <div class="col-lg-10 mx-auto mb-4">
                        <div class="section-title text-center ">
                            <p>Lorem ipsum dolor sit detudzdae amet, rcquisc adipiscing elit. Aenean socada commodo
                                ligaui egets dolor. Nullam quis ante tiam sit ame orci eget erovtiu</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <div class="career-search mb-60">

                            <div class="filter-result">
                                <div class="job-box d-md-flex align-items-center justify-content-between mb-30">
                                    <div class="job-left my-4 d-md-flex align-items-center flex-wrap">
                                        <div class="img-holder mr-md-4 mb-md-0 mb-4 mx-auto mx-md-0 d-md-none d-lg-flex">
                                            FD
                                        </div>
                                        <div class="job-content">
                                            <h5 class="text-center text-md-left">Front End Developer</h5>
                                            <ul class="d-md-flex flex-wrap text-capitalize ff-open-sans">
                                                <li class="mr-md-4">
                                                    <i class="zmdi zmdi-pin mr-2"></i> Los Angeles..........................................
                                                </li>
                                                <li class="mr-md-4">
                                                    <i class="zmdi zmdi-money mr-2"></i> 2500-3500/pm.....................................................
                                                </li>
                                                <li class="mr-md-4">
                                                    <i class="zmdi zmdi-time mr-2"></i> Full Time...........................................................
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- START Pagination -->
                        <nav aria-label="Page navigation">
                            <ul class="pagination pagination-reset justify-content-center">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                        <i class="zmdi zmdi-long-arrow-left"></i>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item d-none d-md-inline-block"><a class="page-link" href="#">2</a></li>
                                <li class="page-item d-none d-md-inline-block"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">...</a></li>
                                <li class="page-item"><a class="page-link" href="#">8</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <i class="zmdi zmdi-long-arrow-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <!-- END Pagination -->
                    </div>
                </div>
            </div>                    
                </div>
            </div>
        </div>
    </div>
</section>

@include('frontend.footer')