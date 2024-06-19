<?php include 'components/navbar.php'; ?>
<?php include 'components/sidebar.php'; ?>

<div class="dashboard-main">
    <div class="top-head">
        <h4>Queries</h4>
    </div>
    <div class="row m-0 mt-3 dashboard-main1">
        <div class="col-md-12">
            <form action="">
                <div class="float-start mt-1 mb-3">
                    <select class="form-control" name="" id="input5">
                        <option value="null">-- Select Domain --</option>
                        <option value="Machine Learning Project-101">Machine Learning Project-101
                        </option>
                        <option value="Artificial Intelligence Project-101">Artificial Intelligence
                            Project-101</option>
                        <option value="Data Science Project-101">Data Science Project-101</option>
                        <option value="Web Development Project-101">Web Development Project-101</option>
                    </select>
                </div>
                <div class="float-start ms-3 mt-1 mb-3">
                    <select class="form-control" name="" id="input5">
                        <option value="null">-- Select Project --</option>
                        <option value="Language Modeling in ASR">Language Modeling in ASR-1
                        </option>
                        <option value="Language Modeling in ASR">Language Modeling in ASR-2</option>
                        <option value="Language Modeling in ASR">Language Modeling in ASR-3</option>
                        <option value="Language Modeling in ASR">Language Modeling in ASR-4</option>
                    </select>
                </div>
                <div class="float-start ms-3 mt-1 mb-3">
                    <input type="text" class="form-control" placeholder="Mentor" value="" readonly>
                </div>
                <div class="mb-3">
                    <textarea name="" class="form-control card" id="exampleInput1" placeholder="Type your query"
                        cols="30" rows="3"></textarea>
                </div>
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-warning">Ask Mentor</button>
                </div>

            </form>
        </div>
    </div>
    <hr>
    <div class="row m-0 mt-3 dashboard-main1">
        <h4 style="color: #2E80B6;">Queries</h4>
        <div class="col-md-12">
            <form action="">
                <div class="float-start mt-1 mb-3">
                    <select class="form-control" name="" id="input5">
                        <option value="null">-- Select Domain --</option>
                        <option value="Machine Learning Project-101">Machine Learning Project-101
                        </option>
                        <option value="Artificial Intelligence Project-101">Artificial Intelligence
                            Project-101</option>
                        <option value="Data Science Project-101">Data Science Project-101</option>
                        <option value="Web Development Project-101">Web Development Project-101</option>
                    </select>
                </div>
                <div class="float-start ms-3 mt-1 mb-3">
                    <select class="form-control" name="" id="input5">
                        <option value="null">-- Select Project --</option>
                        <option value="Language Modeling in ASR">Language Modeling in ASR-1
                        </option>
                        <option value="Language Modeling in ASR">Language Modeling in ASR-2</option>
                        <option value="Language Modeling in ASR">Language Modeling in ASR-3</option>
                        <option value="Language Modeling in ASR">Language Modeling in ASR-4</option>
                    </select>
                </div>
                <div class="float-start ms-3 mt-1">
                    <button type="submit" class="btn btn-success">Filter</button>
                </div>
                <div class="float-start ms-3 mt-1">
                    <button type="reset" class="btn btn-info">Refresh</button>
                </div>

            </form>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button card" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Accordion Item #1
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the first item's accordion body.</strong> It is
                                    shown by default, until the collapse plugin adds the appropriate
                                    classes that we use to style each element. These classes control the
                                    overall appearance, as well as the showing and hiding via CSS
                                    transitions. You can modify any of this with custom CSS or
                                    overriding our default variables. It's also worth noting that just
                                    about any HTML can go within the <code>.accordion-body</code>,
                                    though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed card" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Accordion Item #2
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the second item's accordion body.</strong> It is
                                    hidden by default, until the collapse plugin adds the appropriate
                                    classes that we use to style each element. These classes control the
                                    overall appearance, as well as the showing and hiding via CSS
                                    transitions. You can modify any of this with custom CSS or
                                    overriding our default variables. It's also worth noting that just
                                    about any HTML can go within the <code>.accordion-body</code>,
                                    though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed card" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Accordion Item #3
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the third item's accordion body.</strong> It is
                                    hidden by default, until the collapse plugin adds the appropriate
                                    classes that we use to style each element. These classes control the
                                    overall appearance, as well as the showing and hiding via CSS
                                    transitions. You can modify any of this with custom CSS or
                                    overriding our default variables. It's also worth noting that just
                                    about any HTML can go within the <code>.accordion-body</code>,
                                    though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='card-footer'>
					<div class="row">
						<div class="col-sm-6">
							<ul class="pagination">
                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <span aria-hidden="true">&laquo;</span>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                    <span aria-hidden="true">&raquo;</span>
                                                </a>
                                            </li>
							</ul>
						</div>
						<div class="col-sm-3">
							<div class="text-right" style="margin-top: 2.5%">Showing 1 to 7 of 7 records</div>
						</div>
						<div class="col-sm-3 patingSelect">
                            <div class="row">
							<div class="col-sm-7 text-right" style="margin-top: 2.5%">Records Per Page:</div>
							<div class="col-sm-4">
								<select class="form-control" id="js_record_per_page" name="record_per_page">
									<option value="10">10</option>
									<option value="20" selected="selected">20</option>
									<option value="30">30</option>
									<option value="50">50</option>
									<option value="100">100</option>
								</select>
							</div>
                            </div>
						</div>
					</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'components/footer.php'; ?>