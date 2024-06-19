<?php include 'components/navbar.php'; ?>
<?php include 'components/sidebar.php'; ?>

<div class="dashboard-main">
    <div class="top-head">
        <h4>Dashboard</h4>
    </div>
    <div class="dashboard-main1">
        <div class="row mt-2">
            <div class="col-md-12">
                <div class="alert alert-danger" role="alert">
                    This is a demo dashboard. To get access for any project, kindly register on respective domain. <a
                        href="https://coincent.ai/microsoft-certification/internship/course.html"
                        target="_blank">Explore now</a>
                </div>
            </div>
        </div>
        <div class="alert text-danger alert-dismissible fade show row" id="notifi" role="alert" style="display: none;">
            <div class="col-md-12 card mb-0 p-2">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel"
                    data-bs-interval="3000">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="d-flex align-items-center">
                                <div class="me-2">
                                    <img src="images/notify.png" width="40px" alt="icon">
                                </div>
                                <div class="text-center"><b>Machine Learning :</b>You should check in on some of those
                                    fields
                                    below.</div>
                                <div>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="d-flex align-items-center">
                                <div class="me-2">
                                    <img src="images/notify.png" width="40px" alt="icon">
                                </div>
                                <div class="text-center"><b>Web Development :</b>You should check in on some of those
                                    fields
                                    below.</div>
                                <div>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row m-0 mt-3 dashboard-main1">
        <div class="col-md-7 m-0 p-0">
            <div class="row m-0 p-0">
                <div class="col-md-12 mb-3">
                    <div class="card">
                        <div class="card-head">Domains</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="d-flex flex-row align-items-center">
                                        <img src="images/ml.png" width="100" alt="icon" />
                                        <div class="col-md-9">
                                            <div>
                                                <h4>Machine Learning</h4>
                                            </div>

                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 25%;"
                                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 tele-pic d-flex justify-content-end">

                                    <a href="">
                                        <img src="images/redPlay.png" width="30" alt="telegram">
                                    </a>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-10">
                                    <div class="d-flex flex-row align-items-center">
                                        <img src="images/ml.png" width="100" alt="icon" />
                                        <div class="col-md-9">
                                            <div>
                                                <h4>Artificial Intelligence</h4>
                                            </div>

                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 25%;"
                                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2 tele-pic d-flex justify-content-end">

                                    <a href="">
                                        <img src="images/redPlay.png" width="30" alt="telegram">
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 mb-3">
                    <div class="card">
                        <div class="card-head">My Calendar</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <select class="form-control" name="" id="input5">
                                        <option value="">-- Select Domain --</option>
                                        <option value="Machine Learning Project-101">Machine Learning
                                        </option>
                                        <option value="Artificial Intelligence">Artificial Intelligence</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="input1" class="form-label"><a href="images/ml-curriculum.pdf"
                                            target="_blank">Curriculum <i class="fa-solid fa-download"></i>
                                        </a></label>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <div class="table-responsive myCalender">
                                        <table class="table">
                                            <thead class="table-primary">
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Date & Time</th>
                                                    <th scope="col">Username</th>
                                                    <th scope="col">Password</th>
                                                    <th scope="col" width="120">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>24/05/2024 6:00 PM</td>
                                                    <td>megha.singh</td>
                                                    <td>678956</td>
                                                    <td>
                                                        <a class="grey-txt">Join</a>
                                                        <a data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Please clear the outstanding amount to get access to the Live session"><i
                                                                class="fa-solid fa-circle-info blue-txt"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>24/05/2024 6:00 PM</td>
                                                    <td>megha.singh</td>
                                                    <td>678956</td>
                                                    <td>
                                                        <a href="">Join</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>24/05/2024 6:00 PM</td>
                                                    <td>megha.singh</td>
                                                    <td>678956</td>
                                                    <td>
                                                        <a href="">Join</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">4</th>
                                                    <td>24/05/2024 6:00 PM</td>
                                                    <td>megha.singh</td>
                                                    <td>678956</td>
                                                    <td>
                                                        <a href="">Join</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">5</th>
                                                    <td>24/05/2024 6:00 PM</td>
                                                    <td>megha.singh</td>
                                                    <td>678956</td>
                                                    <td>
                                                        <a href="">Join</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">6</th>
                                                    <td>24/05/2024 6:00 PM</td>
                                                    <td>megha.singh</td>
                                                    <td>678956</td>
                                                    <td>
                                                        <a href="">Join</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">7</th>
                                                    <td>24/05/2024 6:00 PM</td>
                                                    <td>megha.singh</td>
                                                    <td>678956</td>
                                                    <td>
                                                        <a href="">Join</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="row m-0 p-0">
                <div class="col-md-12 mb-3">
                    <div class="card">
                        <div class="card-head">User Guide</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <iframe src="https://youtube.com/embed/4Pnl1uPvqYI" width="100%" height="300px"
                                        frameborder="0"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="card">
                        <div class="card-head">Internship Offer Letter</div>
                        <div class="card-body">
                            <p>We are delighted to extend to you an opportunity for a project-based internship and have
                                attached a digital copy of your offer letter for your perusal. Kindly download the
                                letter to review the pertinent details.</p>
                            <div class="row mt-3">
                                <div class="col-12 text-center">
                                    <a href="images/Offer-Letter-559361718449026_Sample.pdf" target="_blank"
                                        class="btn btn-warning">Download</a>
                                    <p class="card flex-row mt-3 p-2 text-danger"> <span><i
                                                class="fa-solid fa-triangle-exclamation mt-1 me-2"></i>To download the
                                            offer
                                            letter, kindly register for any program.</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--OB form popup-->
<!-- <div id="login_div" class="modal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">On-Boarding Form</h5>
                <button type="button" class="btn-close"
                    onclick="document.getElementById('login_div').style.display='none';"></button>
            </div>
            <div class="modal-body">
                <form action="index.html" method="post">
                    <div class="imgcontainer text-center">
                        <img src="images/user.png" alt="img_login" class="img_login">
                    </div>

                    <div class="container text-center">
                        <center>
                            <label class="">You have made payment of Rs.1000/- as pre-enrollment amount on 12th
                                Nov 2020.<br>
                                Please select your course and batch to complete the enrollment process.
                            </label><br><br>
                            <label for="name"><b>Course</b></label><br>
                            <select name="course" class="form-control" required>
                                <option></option>
                                <option>Machine Learning with Python</option>
                                <option>Cyber security and Ethical Hacking</option>
                                <option>Web Development</option>
                                <option>Data Structure</option>
                                <option>Artificial Intelligence</option>
                                <option>Internet of Things</option>
                                <option>Robotics</option>
                                <option>Hybrid Electric Vehicle</option>
                                <option>Digital Marketing</option>
                                <option>AutoCAD</option>
                                <option>Construction Planning</option>
                            </select><br>

                            <label for="pass"><b>Batch</b></label><br>
                            <select name="batch" class="form-control" required>
                                <option></option>
                                <option>06-Nov-2020 To 06-Dec-2020{38 filled/100 seats}</option>
                                <option>06-Dec-2020 To 06-Jan-2021{66 filled/100 seats}</option>
                                <option>06-Jan-2021 To 06-Feb-2021{53 filled/100 seats}</option>
                                <option>06-Feb-2021 To 06-Mar-2021{31 filled/100 seats}</option>
                                <option>06-Mar-2021 To 06-Apr-2021{27 filled/100 seats}</option>
                                <option>06-Apr-2021 To 06-May-2021{42 filled/100 seats}</option>
                                <option>06-May-2021 To 06-Jun-2021{21 filled/100 seats}</option>
                            </select><br>
                            <button type="submit" class="btn btn-primary mt-2" data-bs-toggle="modal"
                                data-bs-target="#tele_grp_modal"
                                onclick="document.getElementById('login_div').style.display='none';"><b>Submit</b></button>
                        </center>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> -->

<!-- Telegram Group modal -->
<!-- <div class="modal" tabindex="-1" id="tele_grp_modal" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-lg  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Telegram Group</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="p-3 modal-body text-center">
                <p><b>Please join to get the further updates regarding your Industrial Training, Live Project's &
                        Internship on Telegram Group</b></p>
                <p><b>Web Development-IBM</b> by IBM <br><a href="">Click Here</a> to join the Telegram Group</p>

                <button class="btn btn-primary" type="button" data-bs-dismiss="modal" aria-label="Close">Close</button>
                <p>In case if you have opted for 2 domains then join both the telegram group before you click on the
                    close tab.</p>
            </div>
        </div>
    </div>
</div> -->


<?php include 'components/footer.php'; ?>