<?php include 'components/navbar.php'; ?>
<?php include 'components/sidebar.php'; ?>
<style>
    .tooltip {
        position: relative !important;
        opacity: 1 !important;
    }

    .tooltip .tooltiptext {
        visibility: hidden;
        width: 140px;
        background-color: #555;
        color: #fff;
        text-align: center;
        border-radius: 6px;
        padding: 5px;
        position: absolute;
        z-index: 1;
        bottom: 150%;
        left: 50%;
        margin-left: -75px;
        opacity: 0;
        transition: opacity 0.3s;
    }

    .tooltip .tooltiptext::after {
        content: "";
        position: absolute;
        top: 100%;
        left: 50%;
        margin-left: -5px;
        border-width: 5px;
        border-style: solid;
        border-color: #555 transparent transparent transparent;
    }

    .tooltip:hover .tooltiptext {
        visibility: visible;
        opacity: 1;
    }

    .tooltip i {
        color: #0d4dff;
        padding-top: 5px;
        font-size: 25px;
    }
</style>

<div class="dashboard-main">
    <div class="top-head">
        <h4>Refferal</h4>
    </div>
    <div class="row m-0 mt-3 dashboard-main1">
        <div class="col-md-6">
            <div class="card">
                <div class="card-head">Steps to Earn</div>
                <div class="card-body">
                    <h5><b>Earn up to Rs. 500 on each referral</b></h5>
                    <p>1. Earn the 100 % of amount, once referee registers for a course.</p>
                    <p>2. Copy your unique referral link by clicking below and Start Referring the course to your
                        friends.</p>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Start Referring
                    </button>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <img src="https://t4.ftcdn.net/jpg/03/49/36/15/360_F_349361510_wUt7viG2Y31FIlHejLYqyVWKn2rjSW3E.jpg" alt="">
        </div>

    </div>
    <div class="row m-0 mt-3 dashboard-main1">
        <div class="col-md-12">
            <div class="card">
                <div class="card-head">Payment Status (Benefits) and Referred Students details</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="head-certi">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Txn Date</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Batch</th>
                                    <th scope="col">Incentive Earned (in INR)</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>11 Apr,2024 12:11</td>
                                    <td>Anshika</td>
                                    <td>ML_FOX TRTADING BATCH 4</td>
                                    <td>Rs 1414.82/-</td>
                                    <td>
                                        <span class="text-success">Paid</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>11 Apr,2024 12:11</td>
                                    <td>Anshika</td>
                                    <td>ML_FOX TRTADING BATCH 4</td>
                                    <td>Rs 1414.82/-</td>
                                    <td>
                                        <span class="text-warning">Pending</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>11 Apr,2024 12:11</td>
                                    <td>Anshika</td>
                                    <td>ML_FOX TRTADING BATCH 4</td>
                                    <td>Rs 1414.82/-</td>
                                    <td>
                                        <span class="text-warning">Pending</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>11 Apr,2024 12:11</td>
                                    <td>Anshika</td>
                                    <td>ML_FOX TRTADING BATCH 4</td>
                                    <td>Rs 1414.82/-</td>
                                    <td>
                                        <span class="text-success">Paid</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>11 Apr,2024 12:11</td>
                                    <td>Anshika</td>
                                    <td>ML_FOX TRTADING BATCH 4</td>
                                    <td>Rs 1414.82/-</td>
                                    <td>
                                        <span class="text-success">Paid</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>11 Apr,2024 12:11</td>
                                    <td>Anshika</td>
                                    <td>ML_FOX TRTADING BATCH 4</td>
                                    <td>Rs 1414.82/-</td>
                                    <td>
                                        <span class="text-warning">Pending</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-head">Frequently Asked Questions</div>
                <div class="card-body">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item card">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed head-certi p-2 text-light" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne">

                                    How can we share the referral link to the friends?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse card-body"
                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    In the "refer and earn" section, you can access the referral link by clicking on
                                    "start
                                    referring." This unique link can be used to refer the course to your friends.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item card">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed head-certi p-2 text-light" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    What is the duration for receiving the cashback amount?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse card-body"
                                aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Once our team verifies your referral you will recieve your cashback amount within
                                    10-15
                                    working days.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item card">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed head-certi p-2 text-light type=" button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    How can we track our cashback benefits?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse card-body"
                                aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    In Refer and earn Menu, there is option of Referred candidate details, from there
                                    you can
                                    check whether your cashback is verified or pending.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Referral Link</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 d-flex justify-content-between">
                        <div style="width: 80%;">
                            <input type="text" class="form-control" value="https://forms.gle/zbjAccMJMQydmf2CA"
                                id="myInput" readonly>
                        </div>
                        <!-- The button used to copy the text -->
                        <div class="tooltip">
                            <a onclick="myFunction()" onmouseout="outFunc()">
                                <span class="tooltiptext" id="myTooltip">Copy to clipboard</span>
                                <i class="fa-regular fa-copy"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class='d-flex justify-content-between p-4'>
                            <a href="https://instagram.com/_u/{USERNAME}/" target="_blank"><img src="images/insta.png"
                                    width="25" alt="instagram"></a>
                            <a href="https://www.linkedin.com/" target="_blank"><img src="images/linkedin.png"
                                    width="25" alt="linkedin"></a>
                            <a href="https://twitter.com/i/flow/login" target="_blank"><img src="images/twitter.webp"
                                    width="25" alt="twitter"></a>
                            <a href="https://m.facebook.com/" target="_blank"><img src="images/facebook.png" width="25"
                                    alt="facebook"></a>
                            <a href="https://wa.me/" target="_blank"><img src="images/whatsapp.webp" width="30"
                                    alt="whatsapp"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<?php include 'components/footer.php'; ?>