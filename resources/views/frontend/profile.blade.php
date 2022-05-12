@include('frontend.header')
@include('frontend.navbar')

<style>
    body{
    color: #6F8BA4;
    margin-top:20px;
}
.section {
    padding: 100px 0;
    position: relative;
}
.gray-bg {
    background-color: #f5f5f5;
}
img {
    max-width: 100%;
}
img {
    vertical-align: middle;
    border-style: none;
}
/* About Me 
---------------------*/
.about-text h3 {
  font-size: 45px;
  font-weight: 700;
  margin: 0 0 6px;
}
@media (max-width: 767px) {
  .about-text h3 {
    font-size: 35px;
  }
}
.about-text h6 {
  font-weight: 600;
  margin-bottom: 15px;
}
@media (max-width: 767px) {
  .about-text h6 {
    font-size: 18px;
  }
}
.about-text p {
  font-size: 18px;
  max-width: 450px;
}
.about-text p mark {
  font-weight: 600;
  color: #20247b;
}

.about-list {
  padding-top: 10px;
}
.about-list .media {
  padding: 5px 0;
}
.about-list label {
  color: #20247b;
  font-weight: 600;
  width: 88px;
  margin: 0;
  position: relative;
}
.about-list label:after {
  content: "";
  position: absolute;
  top: 0;
  bottom: 0;
  right: 11px;
  width: 1px;
  height: 12px;
  background: #20247b;
  -moz-transform: rotate(15deg);
  -o-transform: rotate(15deg);
  -ms-transform: rotate(15deg);
  -webkit-transform: rotate(15deg);
  transform: rotate(15deg);
  margin: auto;
  opacity: 0.5;
}
.about-list p {
  margin: 0;
  font-size: 15px;
}

@media (max-width: 991px) {
  .about-avatar {
    margin-top: 30px;
  }
}

.about-section .counter {
  padding: 22px 20px;
  background: #ffffff;
  border-radius: 10px;
  box-shadow: 0 0 30px rgba(31, 45, 61, 0.125);
}
.about-section .counter .count-data {
  margin-top: 10px;
  margin-bottom: 10px;
}
.about-section .counter .count {
  font-weight: 700;
  color: #20247b;
  margin: 0 0 5px;
}
.about-section .counter p {
  font-weight: 600;
  margin: 0;
}
mark {
    background-image: linear-gradient(rgba(252, 83, 86, 0.6), rgba(252, 83, 86, 0.6));
    background-size: 100% 3px;
    background-repeat: no-repeat;
    background-position: 0 bottom;
    background-color: transparent;
    padding: 0;
    color: currentColor;
}
.theme-color {
    color: #fc5356;
}
.dark-color {
    color: #20247b;
}

</style>
<section class="section about-section gray-bg" id="about">
    <div class="row">
        <div class="col-md-6">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-lg-6">
                        <div class="about-text go-to">
                            <h3 class="dark-color">About Me</h3>
                            <h6 class="theme-color lead">A Lead UX &amp; UI designer based in Canada</h6>
                            <p>I <mark>design and develop</mark> services for customers of all sizes, specializing in creating stylish, modern websites, web services and online stores. My passion is to design digital user experiences through the bold interface and meaningful interactions.</p>
                            <div class="row about-list">
                                <div class="col-md-8">
                                    <div class="media">
                                        <label>Birthday</label>
                                        <p>4th april 1998</p>
                                    </div>
                                    <div class="media">
                                        <label>Age</label>
                                        <p>22 Yr</p>
                                    </div>
                                    <div class="media">
                                        <label>Residence</label>
                                        <p>Canada</p>
                                    </div>
                                    <div class="media">
                                        <label>Address</label>
                                        <p>California, USA</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    
                                    <button type="button" class="btn btn-primary"> Mon CV</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-avatar">
                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" title="" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <hr />
        </div>
        
        <div class="col-md-6">
            <div class="about-text go-to">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="dark-color">Epmloi</h3>
                    </div>
                    <div class="col-md-6">
                        <div class="button-group-area mt-40">
                            <a href="#" class="genric-btn success circle arrow">Offres<span class="lnr lnr-arrow-right"></span></a>
                            <a href="#" class="genric-btn success-border circle arrow">Demandes<span class="lnr lnr-arrow-right"></span></a>
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
                                                    <i class="zmdi zmdi-pin mr-2"></i> Los Angeles
                                                </li>
                                                <li class="mr-md-4">
                                                    <i class="zmdi zmdi-money mr-2"></i> 2500-3500/pm
                                                </li>
                                                <li class="mr-md-4">
                                                    <i class="zmdi zmdi-time mr-2"></i> Full Time
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="job-right my-4 flex-shrink-0">
                                        <a href="#" class="btn d-block w-100 d-sm-inline-block btn-light">Apply now</a>
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