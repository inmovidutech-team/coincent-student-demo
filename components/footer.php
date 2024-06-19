       <div class="row ps-3">
       <div class="col-md-12 text-center">
        <hr>
          <span class="text-highlight heading-xxs letter-spacing-xl">
            For any support inquiries, please contact us at support@coincent.ai
          </span>
          <span>|</span>
          <span class="">&copy; 2024 Coincent</span>
        </div>
      </div>
    </div>
    </div>
    
    <!-- jQuery CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
      integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
      crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script>
      // Initialize tooltips
      var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
      var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
      })
    </script>
    <script>
      function side_open() {
        document.getElementById("main").style.marginLeft = "150px";
        document.getElementById("mySidebar").style.width = "200px";
        document.getElementById("mySidebar").style.display = "block";
        document.getElementById("openNav").style.display = 'none';
        document.getElementById("sidebar-sm").style.display = "none";
      }

      function side_close() {
        document.getElementById("main").style.marginLeft = "0%";
        document.getElementById("mySidebar").style.display = "none";
        document.getElementById("openNav").style.display = "inline-block";
        document.getElementById("sidebar-sm").style.display = "block";
      }

      function handleMousePos(event) {
        var mouseClickWidth = event.clientX;
        if (mouseClickWidth >= 200) {
          document.getElementById("mySidebar").style.display = 'none';
          document.getElementById("main").style.marginLeft = "0%";
          document.getElementById("openNav").style.display = "inline-block";
          document.getElementById("sidebar-sm").style.display = "block";
        }
      }
      document.addEventListener("click", handleMousePos);
    </script>
    <script>
      // ----- On render -----
      $(function () {
        $('#profile').addClass('dragging').removeClass('dragging');
      });

      $('#profile').on('dragover', function () {
        $('#profile').addClass('dragging')
      }).on('dragleave', function () {
        $('#profile').removeClass('dragging')
      }).on('drop', function (e) {
        $('#profile').removeClass('dragging hasImage');

        if (e.originalEvent) {
          var file = e.originalEvent.dataTransfer.files[0];
          console.log(file);

          var reader = new FileReader();

          //attach event handlers here...

          reader.readAsDataURL(file);
          reader.onload = function (e) {
            console.log(reader.result);
            $('#profile').css('background-image', 'url(' + reader.result + ')').addClass('hasImage');

          }

        }
      })
      $('#profile').on('click', function (e) {
        console.log('clicked')
        $('#mediaFile').click();
      });
      window.addEventListener("dragover", function (e) {
        e = e || event;
        e.preventDefault();
      }, false);
      window.addEventListener("drop", function (e) {
        e = e || event;
        e.preventDefault();
      }, false);
      $('#mediaFile').change(function (e) {

        var input = e.target;
        if (input.files && input.files[0]) {
          var file = input.files[0];

          var reader = new FileReader();

          reader.readAsDataURL(file);
          reader.onload = function (e) {
            console.log(reader.result);
            $('#profile').css('background-image', 'url(' + reader.result + ')').addClass('hasImage');
          }
        }
      })
    </script>
    <script>
      function myFunction() {
        var copyText = document.getElementById("myInput");
        copyText.select();
        copyText.setSelectionRange(0, 99999);
        navigator.clipboard.writeText(copyText.value);

        var tooltip = document.getElementById("myTooltip");
        tooltip.innerHTML = "Copied";
      }

      function outFunc() {
        var tooltip = document.getElementById("myTooltip");
        tooltip.innerHTML = "Copy to clipboard";
      }
    </script>
    <script>
         var a;

         function notify() {
           document.getElementById('notifi').style.display = 'block';
           return a = false;
         }
       </script>

<!-- profile photo -->
<script>
         let slider = document.querySelector("#slider"),
           bar = document.querySelector("#zoom-bar-cont"),
           img = document.querySelector(".wrapper img");

         //Min-max function to set up slider boundaries
         function valBetween(v, min, max) {
           return Math.min(max, Math.max(min, v));
         }
         //function to define zoom bottom half and top half ranges
         let setZoomVal = function (val, percent, botVal = true) {
           return botVal ?
             valBetween(percent * (1 - val) / 0.5, 0, 1 - val) + val :
             valBetween(percent * (val * 2 - 2), val - 1, val * 2 - 2) - (val - 2);
         };

         function sliderInit(e) {
           e.preventDefault();
           document.addEventListener("mousemove", sliderDrag);
           document.addEventListener("mouseup", e => {
             document.removeEventListener("mousemove", sliderDrag);
           });
         }

         function sliderDrag(e) {
           //Variables aren't set as global to account for possible window resize
           let x0 = bar.getBoundingClientRect().left;
           let width = bar.offsetWidth;
           let dX = e.clientX - x0;
           let dPercent = dX / width;
           let sliderOff = slider.offsetLeft;

           slider.style.left = valBetween(dX / width * 100, 0, 100) + "%";

           img.style.transform =
             "translate3d(0,0,0) scale(" +
             (sliderOff / width < 0.5 ?
               setZoomVal(0.4, dPercent) :
               setZoomVal(3, dPercent, false)); +
           ")";
         }

         slider.addEventListener("mousedown", sliderInit);
         bar.addEventListener("mousedown", sliderInit);
       </script>

    </body>

    </html>