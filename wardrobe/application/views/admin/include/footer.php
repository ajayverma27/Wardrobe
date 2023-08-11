<!-- Coupon_edit Modal -->
<div class="modal fade" id="delete_coupon" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-lg shadow border-0">
            <div class="modal-body py-5">
                <div class="text-center">
                    <div class="icon d-flex align-items-center justify-content-center flex-column delete_coupon">
                        <h4 class="mb-0 fw-bolder">Naozaj chcete vymazať tento kupón?</h4>
                        <img src="assets/images/product_image.png" class="img-fluid mt-2 product_image d-block m-auto" alt="product_image">
                    </div>
                    <div class="mt-3 d-flex align-items-center justify-content-center">
                        <a href="#" class="btn btn-danger bg-transparent border-danger text-danger text-uppercase">ODSTRÁNIť</a>
                        <a href="#" class="btn btn-danger text-uppercase ms-2">zrušiť</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Coupon_edit Modal End -->

<!-- Administrator Modal Start -->
<div class="modal fade" id="adminstrator_coupon" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content admin_modal_border shadow border-0">
            <div class="modal-body">
                <h4 class="text-start fw-bolder">Nový účet</h4>
                <div class="row mt-3">
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="meno" class="fw-bolder control-label">Meno</label>
                            <input type="text" name="meno" class="form-control" placeholder="" id="meno">
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="priezvisko" class="fw-bolder control-label">Priezvisko</label>
                            <input type="text" name="priezvisko" class="form-control" placeholder="" id="priezvisko">
                        </div>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-md-3 col-sm-12"></div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="email" class="fw-bolder control-label">Email</label>
                            <input type="text" name="email" class="form-control" placeholder="" id="email">
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12"></div>
                </div>

                <div class="row mt-2">
                    <div class="col-md-3 col-sm-12"></div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label for="heslo" class="fw-bolder control-label">Heslo</label>
                            <div class="d-flex align-items-center">
                                <input type="text" name="heslo" class="form-control me-2" placeholder="" id="heslo">
                                <a href="#"> <i class="fas fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12"></div>
                </div>

                <div class="row">
                    <div class="col-md-12 col-sm-12 d-flex justify-content-center mt-5">
                        <button type="button" class="btn btn-primary modal_btn_menu">Vytvoriť</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Administrator Modal END -->



</main>
<!--End page-content" -->
</div>
<!-- page-wrapper -->

<!-- Offcanvas Start -->
<div class="offcanvas offcanvas-end shadow" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header p-4 border-bottom">
        <h5 id="offcanvasLeftLabel" class="mb-0">
            <img src="assets/images/logo-dark.png" height="24" class="light-version" alt="">
            <img src="assets/images/logo-light.png" height="24" class="dark-version" alt="">
        </h5>
        <button type="button" class="btn-close d-flex align-items-center text-dark" data-bs-dismiss="offcanvas" aria-label="Close"><i class="uil uil-times fs-4"></i></button>
    </div>
    <div class="offcanvas-body p-4">
        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <h6 class="fw-bold">Theme Options</h6>

                    <ul class="text-center style-switcher list-unstyled mt-4">
                        <li class="d-grid"><a href="javascript:void(0)" class="rtl-version t-rtl-light" onclick="setTheme('style-rtl')"><img src="assets/images/demos/rtl.png" class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 270px;" alt=""><span class="text-dark fw-medium mt-3 d-block">RTL Version</span></a></li>
                        <li class="d-grid"><a href="javascript:void(0)" class="ltr-version t-ltr-light" onclick="setTheme('style')"><img src="assets/images/demos/ltr.png" class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 270px;" alt=""><span class="text-dark fw-medium mt-3 d-block">LTR Version</span></a></li>
                        <li class="d-grid"><a href="javascript:void(0)" class="dark-rtl-version t-rtl-dark" onclick="setTheme('style-dark-rtl')"><img src="assets/images/demos/dark-rtl.png" class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 270px;" alt=""><span class="text-dark fw-medium mt-3 d-block">RTL Version</span></a></li>
                        <li class="d-grid"><a href="javascript:void(0)" class="dark-ltr-version t-ltr-dark" onclick="setTheme('style-dark')"><img src="assets/images/demos/dark.png" class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 270px;" alt=""><span class="text-dark fw-medium mt-3 d-block">LTR Version</span></a></li>
                        <li class="d-grid"><a href="javascript:void(0)" class="dark-version t-dark mt-4" onclick="setTheme('style-dark')"><img src="assets/images/demos/dark.png" class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 270px;" alt=""><span class="text-dark fw-medium mt-3 d-block">Dark Version</span></a></li>
                        <li class="d-grid"><a href="javascript:void(0)" class="light-version t-light mt-4" onclick="setTheme('style')"><img src="assets/images/demos/ltr.png" class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 270px;" alt=""><span class="text-dark fw-medium mt-3 d-block">Light Version</span></a></li>
                        <li class="d-grid"><a href="https://shreethemes.in/landrick/landing/index.html" target="_blank" class="mt-4"><img src="assets/images/demos/landing.png" class="img-fluid rounded-md shadow-md d-block mx-auto" style="width: 270px;" alt=""><span class="text-dark fw-medium mt-3 d-block">Landing</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="offcanvas-footer p-4 border-top text-center">
        <ul class="list-unstyled social-icon social mb-0">
            <li class="list-inline-item mb-0"><a href="https://1.envato.market/landrick" target="_blank" class="rounded"><i class="uil uil-shopping-cart align-middle" title="Buy Now"></i></a></li>
            <li class="list-inline-item mb-0"><a href="https://dribbble.com/shreethemes" target="_blank" class="rounded"><i class="uil uil-dribbble align-middle" title="dribbble"></i></a></li>
            <li class="list-inline-item mb-0"><a href="https://www.behance.net/shreethemes" target="_blank" class="rounded"><i class="uil uil-behance align-middle" title="behance"></i></a></li>
            <li class="list-inline-item mb-0"><a href="https://www.facebook.com/shreethemes" target="_blank" class="rounded"><i class="uil uil-facebook-f align-middle" title="facebook"></i></a></li>
            <li class="list-inline-item mb-0"><a href="https://www.instagram.com/shreethemes/" target="_blank" class="rounded"><i class="uil uil-instagram align-middle" title="instagram"></i></a></li>
            <li class="list-inline-item mb-0"><a href="https://twitter.com/shreethemes" target="_blank" class="rounded"><i class="uil uil-twitter align-middle" title="twitter"></i></a></li>
            <li class="list-inline-item mb-0"><a href="mailto:support@shreethemes.in" class="rounded"><i class="uil uil-envelope align-middle" title="email"></i></a></li>
            <li class="list-inline-item mb-0"><a href="https://shreethemes.in/" target="_blank" class="rounded"><i class="uil uil-globe align-middle" title="website"></i></a></li>
        </ul>
        <!--end icon-->
    </div>
</div>
<!-- Offcanvas End -->

<!-- javascript -->
<!-- JAVASCRIPT -->
<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/feather-icons/feather.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/apexcharts/apexcharts.min.js"></script>
<!-- Main Js -->
<script src="assets/js/plugins.init.js"></script>
<script src="assets/js/app.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.16.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-date-range-picker/0.14.2/jquery.daterangepicker.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    $('#date_get').dateRangePicker({
        inline: true,
        format: 'MM-DD-YYYY',
        container: '#ccc',
        alwaysOpen: true,
        singleMonth: true,
        showTopbar: false
    });
</script>

<script>
    var swiper = new Swiper('.swiper-container', {
        // init: false,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        slidesPerView: '1.7',
        loop: true,
        spaceBetween: 25,
        breakpoints: {
            500: {
                slidesPerView: 1
            },
            700: {
                slidesPerView: 1.5
            },
            1024: {
                slidesPerView: 1.5
            },
            1200: {
                slidesPerView: 1.5
            }
        }
    });
</script>
<script>
    $("#FileInput").on('change', function(e) {
        var labelVal = $(".title").text();
        var oldfileName = $(this).val();
        fileName = e.target.value.split('\\').pop();

        if (oldfileName == fileName) {
            return false;
        }
        var extension = fileName.split('.').pop();

        if ($.inArray(extension, ['jpg', 'jpeg', 'png']) >= 0) {
            $(".filelabel i").removeClass().addClass('fa fa-file-image-o');
            $(".filelabel i, .filelabel .title").css({
                'color': '#208440'
            });
            $(".filelabel").css({
                'border': ' 2px solid #208440'
            });
        } else if (extension == 'pdf') {
            $(".filelabel i").removeClass().addClass('fa fa-file-pdf-o');
            $(".filelabel i, .filelabel .title").css({
                'color': 'red'
            });
            $(".filelabel").css({
                'border': ' 2px solid red'
            });

        } else if (extension == 'doc' || extension == 'docx') {
            $(".filelabel i").removeClass().addClass('fa fa-file-word-o');
            $(".filelabel i, .filelabel .title").css({
                'color': '#2388df'
            });
            $(".filelabel").css({
                'border': ' 2px solid #2388df'
            });
        } else {
            $(".filelabel i").removeClass().addClass('fa fa-file-o');
            $(".filelabel i, .filelabel .title").css({
                'color': 'black'
            });
            $(".filelabel").css({
                'border': ' 2px solid black'
            });
        }

        if (fileName) {
            if (fileName.length > 10) {
                $(".filelabel .title").text(fileName.slice(0, 4) + '...' + extension);
            } else {
                $(".filelabel .title").text(fileName);
            }
        } else {
            $(".filelabel .title").text(labelVal);
        }
    });
</script>

<script>
    $(document).ready(function() {

        $('#adminstrator_table').DataTable();
        $('#zaka_table').DataTable();
        $('#Individuálna_table').DataTable();

        $('.menu').on('click', function(e) {
            var currentID = $(this).attr("id");
            console.log(currentID + " = stored to localStorage");
            localStorage.setItem('activeTab', currentID);

        });

        var activeTab = localStorage.getItem('activeTab');
        if (activeTab != "") {
            console.log(activeTab + " = retrieved form localStorage");
            $("#" + activeTab).addClass(' activeness');
        }

    });


    $('.tabs li').click(function() {
        $('.tabs li').removeClass('activeness');
        $(this).addClass('activeness');
    })
</script>
<script>function ekUpload(){
  function Init() {

    console.log("Upload Initialised");

    var fileSelect    = document.getElementById('file-upload'),
        fileDrag      = document.getElementById('file-drag'),
        submitButton  = document.getElementById('submit-button');

    fileSelect.addEventListener('change', fileSelectHandler, false);

    // Is XHR2 available?
    var xhr = new XMLHttpRequest();
    if (xhr.upload) {
      // File Drop
      fileDrag.addEventListener('dragover', fileDragHover, false);
      fileDrag.addEventListener('dragleave', fileDragHover, false);
      fileDrag.addEventListener('drop', fileSelectHandler, false);
    }
  }

  function fileDragHover(e) {
    var fileDrag = document.getElementById('file-drag');

    e.stopPropagation();
    e.preventDefault();

    fileDrag.className = (e.type === 'dragover' ? 'hover' : 'modal-body file-upload');
  }

  function fileSelectHandler(e) {
    // Fetch FileList object
    var files = e.target.files || e.dataTransfer.files;

    // Cancel event and hover styling
    fileDragHover(e);

    // Process all File objects
    for (var i = 0, f; f = files[i]; i++) {
      parseFile(f);
      uploadFile(f);
    }
  }

  // Output
  function output(msg) {
    // Response
    var m = document.getElementById('messages');
    m.innerHTML = msg;
  }

  function parseFile(file) {

    console.log(file.name);
    output(
      '<strong>' + encodeURI(file.name) + '</strong>'
    );
    
    // var fileType = file.type;
    // console.log(fileType);
    var imageName = file.name;

    var isGood = (/\.(?=gif|jpg|png|jpeg)/gi).test(imageName);
    if (isGood) {
      document.getElementById('start').classList.add("hidden");
      document.getElementById('response').classList.remove("hidden");
      document.getElementById('notimage').classList.add("hidden");
      // Thumbnail Preview
      document.getElementById('file-image').classList.remove("hidden");
      document.getElementById('file-image').src = URL.createObjectURL(file);
    }
    else {
      document.getElementById('file-image').classList.add("hidden");
      document.getElementById('notimage').classList.remove("hidden");
      document.getElementById('start').classList.remove("hidden");
      document.getElementById('response').classList.add("hidden");
      document.getElementById("file-upload-form").reset();
    }
  }

  function setProgressMaxValue(e) {
    var pBar = document.getElementById('file-progress');

    if (e.lengthComputable) {
      pBar.max = e.total;
    }
  }

  function updateFileProgress(e) {
    var pBar = document.getElementById('file-progress');

    if (e.lengthComputable) {
      pBar.value = e.loaded;
    }
  }

  function uploadFile(file) {

    var xhr = new XMLHttpRequest(),
      fileInput = document.getElementById('class-roster-file'),
      pBar = document.getElementById('file-progress'),
      fileSizeLimit = 1024; // In MB
    if (xhr.upload) {
      // Check if file is less than x MB
      if (file.size <= fileSizeLimit * 1024 * 1024) {
        // Progress bar
        pBar.style.display = 'inline';
        xhr.upload.addEventListener('loadstart', setProgressMaxValue, false);
        xhr.upload.addEventListener('progress', updateFileProgress, false);

        // File received / failed
        xhr.onreadystatechange = function(e) {
          if (xhr.readyState == 4) {
            // Everything is good!

            // progress.className = (xhr.status == 200 ? "success" : "failure");
            // document.location.reload(true);
          }
        };

        // Start upload
        xhr.open('POST', document.getElementById('file-upload-form').action, true);
        xhr.setRequestHeader('X-File-Name', file.name);
        xhr.setRequestHeader('X-File-Size', file.size);
        xhr.setRequestHeader('Content-Type', 'multipart/form-data');
        xhr.send(file);
      } else {
        output('Please upload a smaller file (< ' + fileSizeLimit + ' MB).');
      }
    }
  }

  // Check for the various File API support.
  if (window.File && window.FileList && window.FileReader) {
    Init();
  } else {
    document.getElementById('file-drag').style.display = 'none';
  }
}
ekUpload();</script>
</body>

</html>