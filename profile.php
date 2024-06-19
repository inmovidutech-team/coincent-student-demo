<?php include 'components/navbar.php'; ?>
<?php include 'components/sidebar.php'; ?>

<div class="dashboard-main">
    <div class="top-head">
        <h4>Profile</h4>
    </div>
    <div class="row mt-2 dashboard-main1">
        <div class="col-md-12">
            <div class="alert alert-danger" role="alert">
                This is a demo dashboard. To get access for any project, kindly register on respective domain. <a
                    href="https://coincent.ai/microsoft-certification/internship/course.html" target="_blank">Explore
                    now</a>
            </div>
        </div>
    </div>
    <div class="row m-0 mt-3 dashboard-main1">
    <div class="row">
                    <div class="col-md-4">
                        <input type="file" class="form-control" required>
                        <div class="invalid-feedback">
                            Please upload profile picture.
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="wrapper-container">
                            <div class="wrapper">
                                <img src="images/contact.gif" class="img-responsive" alt="Dicom">
                            </div>
                        </div>
                        <div id="bar-wrap">
                            <div id="zoom-bar-cont">
                                <div id="slider">
                                    <div class="sl-top"></div>
                                    <div class="sl-bot"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div id="profile">
                            <div class="dashes"></div>
                            <label></label>
                        </div>
                    </div>
                </div>
        <div class="col-md-12">
            

            <form class="mt-3">
                <h3 class="my-4 font-weight-bold">Basic Info</h3>
                <div class="row m-0">
                    <div class="col-md-6">
                        <input class="form-control mb-2" placeholder="Name" name="studentName" type="text" required />
                    </div>
                    <div class="col-md-6">
                        <input class="form-control mb-2" placeholder="Gender" name="gender" type="text" />
                    </div>
                    <div class="col-md-6">
                        <input class="form-control mb-2" placeholder="Phone Number" name="phone" type="text" />
                    </div>
                    <div class="col-md-6">
                        <input class="form-control mb-2" placeholder="Whatsapp Number" name="whatsapp" type="text" />
                    </div>
                    <div class="col-md-6">
                        <input class="form-control mb-2" placeholder="Email Id" name="email" type="email" />
                    </div>
                </div>


                <h3 class="my-4 font-weight-bold">Info</h3>
                <div class="row m-0">
                    <div class="col-md-6">
                        <input class="form-control mb-2" placeholder="College" name="college" type="text" required />
                    </div>
                    <div class="col-md-6">
                        <input class="form-control mb-2" placeholder="College city" name="clgcity" type="text" required />
                    </div>
                    <div class="col-md-6">
                        <input class="form-control mb-2" placeholder="Department/Branch" name="branch" type="text" required />
                    </div>
                    <div class="col-md-6">
                        <input class="form-control mb-2" placeholder="Year Pursuing" name="yearPursuing" type="text" required />
                    </div>
                </div>
                <div class="d-flex text-center justify-content-center">
                    <button class="btn btn-success mt-3" type="submit">
                        Submit
                    </button>
                </div>


            </form>
        </div>
    </div>
</div>

<?php include 'components/footer.php'; ?>