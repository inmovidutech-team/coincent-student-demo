<?php include 'components/navbar.php'; ?>
<?php include 'components/sidebar.php'; ?>

<div class="dashboard-main">
    <div class="top-head">
        <h4>Change Password</h4>
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
        <div class="col-md-12">
            <form>
                <div class="row m-0">
                    <div class="col-md-12">
                        <input class="form-control mb-2" placeholder="Old Password" name="old" type="text" required />
                    </div>
                    <div class="col-md-12">
                        <input class="form-control mb-2" placeholder="New Password" name="new" type="text" required />
                    </div>
                    <div class="col-md-12">
                        <input class="form-control mb-2" placeholder="Confirm Password" name="confirm" type="password" required />
                    </div>

                </div>
                <div class="d-flex text-center justify-content-center">
                    <button class="btn btn-success mt-3" type="submit">
                        Change Password
                    </button>
                </div>


            </form>
        </div>
    </div>
</div>

<?php include 'components/footer.php'; ?>