<style>
    .tab-content {
        padding: 0px;
    }

    .nav-tabs {
        border-bottom: 0px;
    }
</style>
<!-- chat -->
<div class="fixed-bottom">
    <div class="chat-icon float-end" onclick="chat();">
        <i class="fa-solid fa-message" aria-hidden="true" data-bs-toggle="tooltip" data-bs-placement="left"
            title="Ask Us!"></i>
    </div>
</div>
<div class="row fixed-end" id="chat-box" style="display: none;">
    <div class="col-md-4 float-end">
        <div class="card bg-white p-0 chat-box">
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade show active" id="home">
                    <div class="bg-blue-2">
                        <div class="logo d-flex justify-content-between align-items-center">
                            <img src="./images/Coincent_png_White.png" width="150px" alt="">
                            <i class="fa-solid fa-xmark fa-lg text-light p-1" aria-hidden="true"
                                onclick="chatClose();"></i>
                        </div>
                        <h2 class="text-orange mt-5 mb-0"><b>Hello! &#128075;</b></h2>
                        <h2 class="mt-0"><b>How can we help you?</b></h2>
                    </div>
                    <div class="p-2 nav nav-tabs">
                        <div class="card p-1">
                            <div class="">
                                <a href="#help" aria-controls="help" role="tab" data-bs-toggle="tab"
                                    class="text-purple d-flex justify-content-between">
                                    <span><b>Search for help</b></span>
                                    <i color="linkColor" size="16" class="">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="7.5" cy="7.5" r="4.625" stroke="#fcae16" stroke-width="1.75">
                                            </circle>
                                            <path
                                                d="M13.3813 14.6187C13.723 14.9604 14.277 14.9604 14.6187 14.6187C14.9604 14.277 14.9604 13.723 14.6187 13.3813L13.3813 14.6187ZM10.3813 11.6187L13.3813 14.6187L14.6187 13.3813L11.6187 10.3813L10.3813 11.6187Z"
                                                fill="#fcae16">
                                            </path>
                                        </svg>
                                    </i>
                                </a>
                            </div>
                        </div>

                        <div class="card p-1">
                            <div class="">
                                <a href="#messages" aria-controls="messages" role="tab" data-bs-toggle="tab"
                                    class="text-purple d-flex justify-content-between">
                                    <span><b>Send us a message</b></span>
                                    <i color="linkColor" size="16" class="intercom-a0yhes e1fransm0">
                                        <svg width="17" height="16" fill="none" xmlns="http://www.w3.org/2000/svg"
                                            color="linkColor">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M4.563 14.605l9.356-5.402c1-.577 1-2.02 0-2.598L4.563 1.203a1.5 1.5 0 00-2.25 1.3v10.803a1.5 1.5 0 002.25 1.3zM6.51 8.387L2.313 9.512V6.297L6.51 7.42c.494.133.494.834 0 .966z"
                                                fill="#fcae16"></path>
                                        </svg>
                                    </i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="messages">
                    <div class="bg-blue-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class=" mt-0"><b>Message</b></h4>
                            <i class="fa fa-times fa-lg text-light p-1" aria-hidden="true" onclick="chatClose();"></i>
                        </div>

                    </div>
                    <div class="p-2">
                        <form>
                            <div class="card">
                                <div class="form-group d-flex" style="width:100%;">
                                    <textarea name="" cols="30" rows="1" class="form-control"
                                        placeholder="Your message..." style="width: 90%;"></textarea>
                                    <div class="form-group ms-1" style="width: 10%;">
                                        <div class="image-upload">
                                            <label for="file-input">
                                                <i class="fa-solid fa-image fa-2x" aria-hidden="true"></i>
                                            </label>

                                            <input id="file-input" type="file" />
                                        </div>
                                    </div>
                                    <div>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#speakModal"><i
                                                class="fa-solid fa-microphone text-grey fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn-blue">Send</button>
                        </form>
                    </div>
                    <!-- messsage box -->
                    <hr>
                    <div class="p-2 card-scroll">
                        <div class="card-right">
                            <p class="text-p card bg-blue">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Accusamus ut officiis nobis
                                minus deserunt nisi dicta qui ad! Architecto voluptate.
                                <br>
                                <span class="text-grey text-end">06/06/2023 5:20pm</span>
                            </p>

                        </div>
                        <div class="card-left">
                            <p class="text-pl card bg-grey">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Accusamus ut officiis nobis
                                minus deserunt nisi dicta qui ad! Architecto voluptate.
                                <br>
                                <span class="text-grey text-end">06/06/2023 5:20pm</span>
                            </p>
                        </div>
                        <div class="card-right">
                            <p class="text-p card bg-blue">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                <br>
                                <span class="text-grey text-end">06/06/2023 5:20pm</span>
                            </p>
                        </div>
                        <div class="card-right">
                            <p class="text-p card bg-blue"><a href="assets/img/img-quest.png" target="_blank"
                                    class="card bg-white p-1"><i class="fa fa-picture-o mr-1" aria-hidden="true"></i>
                                    img3456.jpg</a>
                                <br>
                                <span class="text-grey text-end">06/06/2023 5:20pm</span>
                            </p>
                        </div>
                        <div class="card-left">
                            <p class="text-pl card bg-grey"><a href="assets/img/img-quest.png" target="_blank"
                                    class="card bg-white p-1"><i class="fa fa-picture-o mr-1" aria-hidden="true"></i>
                                    img3456.jpg</a>
                                <br>
                                <span class="text-grey text-end">06/06/2023 5:20pm</span>
                            </p>
                        </div>
                        <div class="card-right">
                            <p class="text-p card bg-blue">
                                <audio src="" controls></audio>
                                <br>
                                <span class="text-grey text-end">06/06/2023 5:20pm</span>
                            </p>
                        </div>
                        <div class="card-left">
                            <p class="text-pl card bg-grey">
                                <audio src="" controls></audio>
                                <br>
                                <span class="text-grey text-end">06/06/2023 5:20pm</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="help">
                    <div class="bg-blue-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class=" mt-0"><b>Help</b></h4>
                            <i class="fa fa-times fa-lg text-light p-1" aria-hidden="true" onclick="chatClose();"></i>
                        </div>
                        <form class="form-inline row">
                            <div class="form-group col-md-10">
                                <input type="text" class="form-control" id="exampleInput2"
                                    placeholder="Search Question..." style="width: 100%;">
                            </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn-blue"><i class="fa fa-search fa-lg"
                                        aria-hidden="true"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="p-2">
                        <h6><b>12 Collections</b></h6>
                        <ul class="p-0">
                            <li onclick="chat_desc()">
                                <div class="help-list d-flex justify-content-between pt-1 pb-1">
                                    <div>
                                        <p class="mb-0"><b>Getting Started</b></p>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem quisquam
                                            recusandae sequi at pariatur repellendus odit a perspiciatis delectus.
                                        </p>
                                    </div>
                                    <div class="d-flex align-items-center p-1">
                                        <i color="linkColor" size="16" class="intercom-a0yhes e1fransm0"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 16 16" fill="none">
                                                <path
                                                    d="M5.42773 4.70898C5.46387 4.85254 5.53809 4.98828 5.65039 5.10059L8.54932 8L5.64893 10.9004C5.31689 11.2324 5.31689 11.7705 5.64893 12.1025C5.98096 12.4336 6.51904 12.4336 6.85107 12.1025L10.3516 8.60059C10.5591 8.39355 10.6367 8.10449 10.585 7.83691C10.5537 7.67578 10.4761 7.52246 10.3516 7.39844L6.85254 3.89941C6.52051 3.56738 5.98242 3.56738 5.65039 3.89941C5.43066 4.11816 5.35645 4.42871 5.42773 4.70898Z"
                                                    fill="#000000"></path>
                                            </svg>
                                        </i>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="help-list d-flex justify-content-between pt-1 pb-1">
                                    <div>
                                        <p class="mb-0"><b>Getting Started</b></p>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem quisquam
                                            recusandae sequi at pariatur repellendus odit a perspiciatis delectus.
                                        </p>
                                    </div>
                                    <div class="d-flex align-items-center p-1">
                                        <i color="linkColor" size="16" class="intercom-a0yhes e1fransm0"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 16 16" fill="none">
                                                <path
                                                    d="M5.42773 4.70898C5.46387 4.85254 5.53809 4.98828 5.65039 5.10059L8.54932 8L5.64893 10.9004C5.31689 11.2324 5.31689 11.7705 5.64893 12.1025C5.98096 12.4336 6.51904 12.4336 6.85107 12.1025L10.3516 8.60059C10.5591 8.39355 10.6367 8.10449 10.585 7.83691C10.5537 7.67578 10.4761 7.52246 10.3516 7.39844L6.85254 3.89941C6.52051 3.56738 5.98242 3.56738 5.65039 3.89941C5.43066 4.11816 5.35645 4.42871 5.42773 4.70898Z"
                                                    fill="#000000"></path>
                                            </svg>
                                        </i>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="help-list d-flex justify-content-between pt-1 pb-1">
                                    <div>
                                        <p class="mb-0"><b>Getting Started</b></p>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem quisquam
                                            recusandae sequi at pariatur repellendus odit a perspiciatis delectus.
                                        </p>
                                    </div>
                                    <div class="d-flex align-items-center p-1">
                                        <i color="linkColor" size="16" class="intercom-a0yhes e1fransm0"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 16 16" fill="none">
                                                <path
                                                    d="M5.42773 4.70898C5.46387 4.85254 5.53809 4.98828 5.65039 5.10059L8.54932 8L5.64893 10.9004C5.31689 11.2324 5.31689 11.7705 5.64893 12.1025C5.98096 12.4336 6.51904 12.4336 6.85107 12.1025L10.3516 8.60059C10.5591 8.39355 10.6367 8.10449 10.585 7.83691C10.5537 7.67578 10.4761 7.52246 10.3516 7.39844L6.85254 3.89941C6.52051 3.56738 5.98242 3.56738 5.65039 3.89941C5.43066 4.11816 5.35645 4.42871 5.42773 4.70898Z"
                                                    fill="#000000"></path>
                                            </svg>
                                        </i>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="help-list d-flex justify-content-between pt-1 pb-1">
                                    <div>
                                        <p class="mb-0"><b>Getting Started</b></p>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem quisquam
                                            recusandae sequi at pariatur repellendus odit a perspiciatis delectus.
                                        </p>
                                    </div>
                                    <div class="d-flex align-items-center p-1">
                                        <i color="linkColor" size="16" class="intercom-a0yhes e1fransm0"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 16 16" fill="none">
                                                <path
                                                    d="M5.42773 4.70898C5.46387 4.85254 5.53809 4.98828 5.65039 5.10059L8.54932 8L5.64893 10.9004C5.31689 11.2324 5.31689 11.7705 5.64893 12.1025C5.98096 12.4336 6.51904 12.4336 6.85107 12.1025L10.3516 8.60059C10.5591 8.39355 10.6367 8.10449 10.585 7.83691C10.5537 7.67578 10.4761 7.52246 10.3516 7.39844L6.85254 3.89941C6.52051 3.56738 5.98242 3.56738 5.65039 3.89941C5.43066 4.11816 5.35645 4.42871 5.42773 4.70898Z"
                                                    fill="#000000"></path>
                                            </svg>
                                        </i>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="help-list d-flex justify-content-between pt-1 pb-1">
                                    <div>
                                        <p class="mb-0"><b>Getting Started</b></p>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem quisquam
                                            recusandae sequi at pariatur repellendus odit a perspiciatis delectus.
                                        </p>
                                    </div>
                                    <div class="d-flex align-items-center p-1">
                                        <i color="linkColor" size="16" class="intercom-a0yhes e1fransm0"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 16 16" fill="none">
                                                <path
                                                    d="M5.42773 4.70898C5.46387 4.85254 5.53809 4.98828 5.65039 5.10059L8.54932 8L5.64893 10.9004C5.31689 11.2324 5.31689 11.7705 5.64893 12.1025C5.98096 12.4336 6.51904 12.4336 6.85107 12.1025L10.3516 8.60059C10.5591 8.39355 10.6367 8.10449 10.585 7.83691C10.5537 7.67578 10.4761 7.52246 10.3516 7.39844L6.85254 3.89941C6.52051 3.56738 5.98242 3.56738 5.65039 3.89941C5.43066 4.11816 5.35645 4.42871 5.42773 4.70898Z"
                                                    fill="#000000"></path>
                                            </svg>
                                        </i>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card-footer p-1 fixed-bottom-footer">
                        <div class="nav nav-tabs d-flex justify-content-around" role="tablist">
                            <a href="#home" class="active" aria-controls="home" role="tab" data-bs-toggle="tab">
                                <div class="text-center text-purple">
                                    <i class="fa fa-home fa-lg" aria-hidden="true"></i>
                                    <p>Home</p>
                                </div>
                            </a>
                            <a href="#messages" aria-controls="messages" role="tab" data-bs-toggle="tab">
                                <div class="text-center text-purple">
                                    <i class="fa fa-comment fa-lg" aria-hidden="true"></i>
                                    <p>Message</p>
                                </div>
                            </a>
                            <a href="#help" aria-controls="help" role="tab" data-bs-toggle="tab">
                                <div class="text-center text-purple">
                                    <i class="fa fa-question-circle fa-lg" aria-hidden="true"></i>
                                    <p>Help</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Help description -->
<div class="row fixed-end" id="chat-box-1" style="display: none;">
    <div class="col-md-4 float-end">
        <div class="card bg-white p-0 chat-box">
            <div class="bg-blue d-flex justify-content-between align-items-center">
                <i class="fa fa-angle-left fa-lg text-light p-1" aria-hidden="true" onclick="chatClose1()"></i>
                <h4><b>Get Started</b></h4>
                <div>
                    <i class="fa fa-expand fa-lg text-light p-1" aria-hidden="true" onclick="chatExpand();"></i>
                    <i class="fa fa-times fa-lg text-light p-1" aria-hidden="true" onclick="chatClose();"></i>
                </div>
            </div>
            <div class="p-2">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea necessitatibus assumenda excepturi,
                    eaque laboriosam voluptatibus, exercitationem labore at, quos reprehenderit beatae asperiores?
                    Pariatur omnis illo suscipit voluptatum, enim at officiis.</p>
                <img src="assets/img/refers.png" width="100%" alt="">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea necessitatibus assumenda excepturi,
                    eaque laboriosam voluptatibus, exercitationem labore at, quos reprehenderit beatae asperiores?
                    Pariatur omnis illo suscipit voluptatum, enim at officiis.</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea necessitatibus assumenda excepturi,
                    eaque laboriosam voluptatibus, exercitationem labore at, quos reprehenderit beatae asperiores?
                    Pariatur omnis illo suscipit voluptatum, enim at officiis.</p>
            </div>
            <!-- video file -->
            <div class="p-2">
                <video src="assets/img/course_video.mp4" controls width="100%"></video>
            </div>
        </div>
    </div>
</div>

<!-- Help description expanded-->
<div class="row fixed-end" id="chat-box-2" style="display: none;">
    <div class="col-md-6 float-end">
        <div class="card bg-white p-0 chat-box">
            <div class="bg-blue d-flex justify-content-between align-items-center">
                <i class="fa fa-angle-left fa-lg text-light p-1" aria-hidden="true" onclick="chatClose1()"></i>
                <h4><b>Get Started</b></h4>
                <div>
                    <i class="fa fa-compress fa-lg text-light p-1" aria-hidden="true" onclick="chatCollapse();"></i>
                    <i class="fa fa-times fa-lg text-light p-1" aria-hidden="true" onclick="chatClose();"></i>
                </div>
            </div>
            <div class="p-2">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea necessitatibus assumenda excepturi,
                    eaque laboriosam voluptatibus, exercitationem labore at, quos reprehenderit beatae asperiores?
                    Pariatur omnis illo suscipit voluptatum, enim at officiis.</p>
                <img src="assets/img/refers.png" width="100%" alt="">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea necessitatibus assumenda excepturi,
                    eaque laboriosam voluptatibus, exercitationem labore at, quos reprehenderit beatae asperiores?
                    Pariatur omnis illo suscipit voluptatum, enim at officiis.</p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea necessitatibus assumenda excepturi,
                    eaque laboriosam voluptatibus, exercitationem labore at, quos reprehenderit beatae asperiores?
                    Pariatur omnis illo suscipit voluptatum, enim at officiis.</p>
            </div>
            <!-- video file -->
            <div class="p-2">
                <video src="assets/img/course_video.mp4" controls width="100%"></video>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="speakModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <form action="">
                    <input type="button" value="Start Speaking" class="btn btn-primary">
                    <div class="text-center mt-3">
                        <div class="spinner-border" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                    <button class="btn-blue mt-3" type="submit">Send</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    function chat() {
        document.getElementById('chat-box').style.display = 'block';
    }

    function chatClose() {
        document.getElementById('chat-box').style.display = 'none';
        document.getElementById('chat-box-1').style.display = 'none';
        document.getElementById('chat-box-2').style.display = 'none';
    }

    function chat_desc() {
        document.getElementById('chat-box-1').style.display = 'block';
        document.getElementById('chat-box').style.display = 'none';
    }

    function chatClose1() {
        document.getElementById('chat-box-1').style.display = 'none';
        document.getElementById('chat-box-2').style.display = 'none';
        document.getElementById('chat-box').style.display = 'block';
    }

    function chatExpand() {
        document.getElementById('chat-box-2').style.display = "block";
        document.getElementById('chat-box-1').style.display = "none";
    }

    function chatCollapse() {
        document.getElementById('chat-box-1').style.display = "block";
        document.getElementById('chat-box-2').style.display = "none";
    }
</script>