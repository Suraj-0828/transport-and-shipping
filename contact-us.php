<!doctype html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Connect with HVS Shipping Pvt. Ltd.</title>
    <meta name="description" content="Reach out to us for reliable, efficient, and customized shipping solutions. We’re here to support your logistics needs.">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/banner/banner/feb-icon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/odometer.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/default.css">
    <link rel="stylesheet" href="assets/css/default-icons.css">
    <link rel="stylesheet" href="assets/css/main.css">



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
</head>

<body class="theme-red">

    <?php include('header.php') ?>

    <!-- main-area -->
    <main class="fix">

        <!-- breadcrumb-area -->
        <section class="breadcrumb__area breadcrumb__bg" data-background="assets/img/bg/breadcrumb_bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb__content">
                            <h1 class="title">Contact Us</h1>
                            <nav class="breadcrumb">
                                <span property="itemListElement" typeof="ListItem">
                                    <a href="index.html">Home</a>
                                </span>
                                <span class="breadcrumb-separator"><i class="flaticon-right-arrow"></i></span>
                                <span property="itemListElement" typeof="ListItem">Contact</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- contact-area -->
        <section class="contact__area ">
            <div class="container">

                <div class="quote-container">
                    <h4 class="nav-contact-1">Request a Quote</h4>

                    <!-- Tabs -->
                    <!-- <ul class="nav nav-tabs" id="quoteTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <div class="nav-link active fix-button-3" id="shipping-tab" data-bs-toggle="tab" data-bs-target="#shipping" type="button" role="tab"><i class="fa fa-shipping-fast"></i> &nbsp; Shipping</div>
                        </li>
                        <li class="nav-item" role="presentation">
                            <div class="nav-link fix-button-3" id="warehouse-tab" data-bs-toggle="tab" data-bs-target="#warehouse" type="button" role="tab"><i class="fa fa-warehouse"></i> &nbsp; Warehouse</button>
                        </li>
                    </ul> -->

                    <div class="tab-content mt-3" id="quoteTabContent">
                        <!-- Shipping Form -->
                        <div class="tab-pane fade show active" id="shipping" role="tabpanel">
                            <!-- <h5>Cargo Details</h5>
                    <div class="mb-3">
                        <label class="form-label form-label-1">Category</label>
                        <input type="text" class="form-control" placeholder="Select or search product from dropdown">
                    </div> -->
                            <form action="backend" method="POST">
                                <!-- <h5>Request Details</h5> -->
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label form-label-1">Transportation By</label>
                                        <select class="form-select" name="transportation">
                                            <option>Full container load</option>
                                            <option>Less container load</option>
                                            <option>Bulk</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label form-label-1">Container Type</label>
                                        <select class="form-select" name="container-type">
                                            <option>20' Standard</option>
                                            <option>40' Standard</option>
                                            <option>40' High Cube</option>
                                            <option>45' High Cube</option>
                                            <option>40' Refrigerated</option>
                                            <option>20' Open Top</option>
                                            <option>40' Open Top</option>
                                            <option>20' Flatrack</option>
                                            <option>40' Flatrack</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label form-label-1">* Container Quantity</label>
                                        <input type="number" class="form-control" name="quantity" value="1">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label form-label-1">* Weight</label>
                                        <input type="number" class="form-control" name="weight" value="0">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label form-label-1">* From</label>
                                        <input type="text" class="form-control" name="from" placeholder="Select city, port">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label form-label-1">* To</label>
                                        <input type="text" class="form-control" name="to" placeholder="City, terminal, zip code, etc.">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label form-label-1">Select 'From' and 'To'</label>
                                        <select class="form-select" name="from-to">
                                            <option name="from-to">Select</option>
                                            <option name="from-to">Free In / Free Out</option>
                                            <option name="from-to">Liner In / Free Out</option>
                                            <option name="from-to">Free In / Liner Out</option>
                                            <option name="from-to">Liner In / Liner Out</option>
                                            <option name="from-to">Container Yard / Free Out</option>
                                            <option name="from-to">Container Yard / Liner Out</option>
                                            <option name="from-to">Free In / Container Yard</option>
                                            <option name="from-to">Liner In / Container Yard</option>
                                            <option name="from-to">Container Yard / Container Yard</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label class="form-label form-label-1">* Ready To Load</label>
                                        <input type="date" class="form-control" name="date" placeholder="Select a date">
                                    </div>

                                    <h5 class="form-label-1 mb-3">Associated Services</h5>
                                    <div class="checkbox-group mb-3" name="service">
                                        <label name="service"><input type="checkbox" name="service"> Insurance</label>
                                        <label name="service"><input type="checkbox" name="service"> Customs Clearance</label>
                                        <label name="service"><input type="checkbox" name="service"> Certification</label>
                                        <label name="service"><input type="checkbox" name="service"> Inspection Services</label>
                                        <label name="service"><input type="checkbox" name="service"> Handling</label>
                                        <label name="service"><input type="checkbox" name="service"> Stuffing</label>
                                    </div>

                                    <h5 class="form-label-1 mb-3">Financing & payment deferral</h5>
                                    <div class="checkbox-group mb-3">
                                        <label name="check" class="label-1 form-label-2"><input name="check" type="checkbox"> I am interested in accessing Trade, Logistics or Inventory Finance.
                                            This solution provides access to finance for exporters, importers and logistics companies across the globe for receivables and payables.</label>
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <label class="form-label form-label-1">Additional information</label>
                                        <input type="text" name="information" class="form-control" placeholder="Anything else we need to know (target date, detailed commodity description, etc.)">
                                    </div>


                                    <div class="row contact-align pt-30">
                                        <div class="col-lg-12 col-md-6">
                                            <div class="contact__form-wrap">
                                                <h2 class="title">Send Us Message</h2>
                                                <div class="contact__form">
                                                    <div class="row gutter-20">
                                                        <div class="col-lg-4">
                                                            <div class="form-grp">
                                                                <input type="text" name="name" placeholder="name">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-grp">
                                                                <input type="email" name="email" placeholder="E-mail">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-grp">
                                                                <input type="tel" name="phone" placeholder="Phone">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-grp">
                                                        <input type="text" name="subject" placeholder="Subject">
                                                    </div>
                                                    <div class="form-grp">
                                                        <textarea name="message" placeholder="Comments"></textarea>
                                                    </div>
                                                    <button class="btn red-btn" type="submit">Send Me Message <img src="assets/img/icon/right_arrow.svg" alt="" class="injectable"></button>
                                                </div>
                                                <p class="ajax-response mb-0"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


                </div>
            </div>
        </section>
        <!-- contact-area-end -->


    </main>
    <!-- main-area-end -->

    <?php include('footer.php') ?>