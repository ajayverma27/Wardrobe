$(document).ready(function () {
  $("#Built_in").click(function () {
    $(".three_ctg").hide();
    $(".four_opt").show();
    $(".parameter_1").hide();
  });
  $("#plan_type_A").click(function () {
    $(".three_ctg").hide();
    $(".four_opt").hide();
    $(".parameter_1").show();
  });

  // ============= TAB 2 JS ==============================
  // var setLeftHeight = $('.vyskaleft1, .vyskaleft2').keyup(function() {
  // 	setLeftHeight.not(this).val(this.value);
  // });

  // var setLeftSirka = $('.sirka1, .sirka2').keyup(function() {
  // 	setLeftSirka.not(this).val(this.value);
  // });

  // var setLeftHibka = $('.hibka1, .hibka2').keyup(function() {
  // 	setLeftHibka.not(this).val(this.value);
  // });

  var setLeftHeight = $(".vyskaleft1, .vyskaleft2").keyup(function () {
    setLeftHeight.not(this).val(this.value);
    check_length();

    if ($(this).val() < 600) {
      $(this).css("border-color", "red");
      $("#err-left").css("display", "block");
    } else {
      $(this).css("border-color", "gray");
      $("#err-left").css("display", "none");
    }
  });

  var setDepthh = $(".hlbka1, .hlbka2").keyup(function () {
    setDepthh.not(this).val(this.value);
    check_length();
    if ($(this).val() < 300) {
      $(this).css("border-color", "red");
      $("#err-hlbka").css("display", "block");
    } else {
      $(this).css("border-color", "gray");
      $("#err-hlbka").css("display", "none");
    }
  });

  var setWidthh = $(".sirka1, .sirka2").keyup(function () {
    setWidthh.not(this).val(this.value);
    check_length();
    if ($(this).val() < 800) {
      $(this).css("border-color", "red");
      $("#err-sirka").css("display", "block");
    } else {
      $(this).css("border-color", "gray");
      $("#err-sirka").css("display", "none");
    }
  });

  // var setRightHeight = $('.vyskaRight1, .vyskaRight2').keyup(function () {
  //     setRightHeight.not(this).val(this.value);
  //     check_length()
  //     if ($(this).val() < 600) {
  //         $(this).css('border-color', 'red')
  //         $("#err-right").css('display', 'block')
  //     } else {
  //         $(this).css('border-color', 'gray')
  //         $("#err-right").css('display', 'none')
  //     }
  // });

  var check_0 = 0;
  var check_1 = 0;
  var check_2 = 0;
  // var check_3 = 0;
  function check_length() {
    var arr2 = [600, 300, 800];
    for (var i = 0; i < 3; i++) {
      var val = $("#length_check_" + i).val();

      if (i == 0) {
        if (val >= arr2[i]) {
          check_0 = 1;
        } else {
          check_0 = 0;
        }
      }
      if (i == 1) {
        if (val >= arr2[i]) {
          check_1 = 1;
        } else {
          check_1 = 0;
        }
      }

      if (i == 2) {
        if (val >= arr2[i]) {
          check_2 = 1;
        } else {
          check_2 = 0;
        }
      }

      // if (i == 3) {
      //     if (val >= arr2[i]) {

      //         check_2 = 1;
      //     } else {
      //         check_2 = 0;
      //     }
      // }
    }

    if (check_0 == 1 && check_1 == 1 && check_2 == 1) {
      $("#btn_second").prop("disabled", false);
    } else {
      $("#btn_second").prop("disabled", true);
    }
  }

  // ============= TAB 3 JS ==============================

  // $('input[name="radio_img"]:radio').click(function() {
  // 	switch ($(this).val()) {
  // 		case "imge_1":
  // 			$("#change_img").attr("src", "assets/img_web/tab3_img1.png");
  // 			break;
  // 		case "imge_2":
  // 			$("#change_img").attr("src", "assets/img_web/tab3_img2.png");
  // 			break;
  // 		case "imge_3":
  // 			$("#change_img").attr("src", "assets/img_web/tab3_img3.png");
  // 			break;
  // 		case "imge_4":
  // 			$("#change_img").attr("src", "assets/img_web/tab3_img4.png");
  // 			break;
  // 	}
  // });
  $('input[name="radio_img"]:radio').click(function () {
    var getVal = $("#length_check_2").val();
    switch ($(this).val()) {
      case "imge_1":
        $("#table_1").show();
        $("#table_2").hide();
        $("#table_3").hide();
        $("#table_4").hide();
        var display_val = parseInt(getVal / 1 - 10);
        $(".added_sirka_value").html(display_val);
        break;

      case "imge_2":
        $("#table_1").hide();
        $("#table_2").show();
        $("#table_3").hide();
        $("#table_4").hide();
        var display_val = parseInt(getVal / 2 - 10);
        $(".added_sirka_value").html(display_val);
        break;

      case "imge_3":
        $("#table_1").hide();
        $("#table_2").hide();
        $("#table_3").show();
        $("#table_4").hide();
        var display_val = parseInt(getVal / 3 - 10);
        $(".added_sirka_value").html(display_val);
        break;

      case "imge_4":
        $("#table_1").hide();
        $("#table_2").hide();
        $("#table_3").hide();
        $("#table_4").show();
        var display_val = parseInt(getVal / 4 - 10);
        $(".added_sirka_value").html(display_val);
        break;
    }
  });
});

initMultiStepForm();

function initMultiStepForm() {
  const progressNumber = document.querySelectorAll(".step").length;
  const slidePage = document.querySelector(".slide-page");
  const submitBtn = document.querySelector(".submit");
  const progressText = document.querySelectorAll(".step");
  const progressCheck = document.querySelectorAll(".step .check");
  const bullet = document.querySelectorAll(".step .bullet");
  const pages = document.querySelectorAll(".page");
  const nextButtons = document.querySelectorAll(".next");
  const prevButtons = document.querySelectorAll(".prev");
  const stepsNumber = pages.length;

  // if (progressNumber !== stepsNumber) {
  // 	console.warn(
  // 		"Error, number of steps in progress bar do not match number of pages"
  // 	);
  // }

  document.documentElement.style.setProperty("--stepNumber", stepsNumber);

  let current = 1;

  for (let i = 0; i < nextButtons.length; i++) {
    nextButtons[i].addEventListener("click", function (event) {
      event.preventDefault();

      inputsValid = validateInputs(this);
      // inputsValid = true;

      if (inputsValid) {
        slidePage.style.marginLeft = `-${(100 / stepsNumber) * current}%`;
        bullet[current - 1].classList.add("active");
        // progressCheck[current - 1].classList.add("active");
        progressText[current - 1].classList.add("active");
        current += 1;
      }
    });
  }

  for (let i = 0; i < prevButtons.length; i++) {
    prevButtons[i].addEventListener("click", function (event) {
      event.preventDefault();
      slidePage.style.marginLeft = `-${(100 / stepsNumber) * (current - 2)}%`;
      bullet[current - 1].classList.remove("active");
      // progressCheck[current - 2].classList.remove("active");
      progressText[current - 2].classList.remove("active");
      current -= 1;
    });
  }
  // submitBtn.addEventListener("click", function() {
  // 	bullet[current - 1].classList.add("active");
  // 	progressCheck[current - 1].classList.add("active");
  // 	progressText[current - 1].classList.add("active");
  // 	current += 1;
  // 	setTimeout(function() {
  // 		alert("Your Form Successfully Signed up");
  // 		location.reload();
  // 	}, 800);
  // });

  function validateInputs(ths) {
    let inputsValid = true;

    const inputs = ths.parentElement.parentElement.querySelectorAll("input");
    for (let i = 0; i < inputs.length; i++) {
      const valid = inputs[i].checkValidity();
      if (!valid) {
        inputsValid = false;
        inputs[i].classList.add("invalid-input");
      } else {
        inputs[i].classList.remove("invalid-input");
      }
    }
    return inputsValid;
  }
}

function parameter_width() {
  let val_width = document.getElementById("para_width");
  val_width.addEventListener("change", function () {
    alert("you enterd:" + this.value);
  });
}

$(".cust_width").click(function () {
  $(".cust_width").removeClass("box_select");
  $(this).addClass("box_select");
});
$(".select_imgs").click(function () {
  var img = $(this).attr("src");
  $(".box_select").html('<img src="' + img + '">');
});

$(".inside_clr").click(function () {
  var img = $(this).attr("src");
  // alert(img);
  $(".bg_image_ch").css("background-image", "url(" + img + ")");
});

$(".inside_clr2").click(function () {
  var img = $(this).attr("src");
  $(".bg_image_ch2").css("background-image", "url(" + img + ")");
});

$(document).ready(function () {
  // Swiper: Slider
  new Swiper(".swiper-container", {
    loop: true,
    nextButton: ".swiper-button-next",
    prevButton: ".swiper-button-prev",
    slidesPerView: 3,
    paginationClickable: true,
    spaceBetween: 20,
    breakpoints: {
      1920: {
        slidesPerView: 6,
        spaceBetween: 10,
      },
      1028: {
        slidesPerView: 2,
        spaceBetween: 30,
      },
      480: {
        slidesPerView: 1,
        spaceBetween: 10,
      },
    },
  });
});

//=============== tab 6  Image Change Code ==============

$(".folding_inside_img").click(function () {
  var getImgSrc = $(this).attr("src");
  // alert(getImgSrc);
});

$("#btn_tab_6").one("click", function () {
  // alert('working')
  $(".create_table")
    .clone(true)
    .appendTo("#gt_tb")
    .find(".active_t6")
    .removeClass("active_t6");
});

//////////

$(".cust_width").click(function () {
  $(".cust_width").removeClass("box_select");
  $(this).addClass("box_select");
});

$(".table_6_click").on("click", function () {
  $(".table_6_click").removeClass("active_t6");
  $(this).addClass("active_t6");
});

$(".select_imgs").click(function () {
  var img = $(this).attr("src");
  $(".box_select").html('<img src="' + img + '">');
});
$(".inside_clr").click(function () {
  var img = $(this).attr("src");
  // alert(img);
  $(".bg_image_ch").css("background-image", "url(" + img + ")");
});

$(".inside_clr2").click(function () {
  var img = $(this).attr("src");
  $(".bg_image_ch2").css("background-image", "url(" + img + ")");
});

//================ tab 5 img ================
$(".select_imgs_tab5").click(function () {
  var img = $(this).attr("src");
  $(".box_select").css({
    "background-image": "url(" + img + ")",
    "background-size": "auto 100%",
  });
});

$(".radioOption-Item").on("click", function () {
  var getImgSrc = $(this).find("img").attr("src");
  $("#floorpln").attr("src", getImgSrc);
});

function getDom(tid) {
  var dom = $("a #" + tid).html();
  $(".active_t6").html(dom);
}



// td


$('.tab-8-table').on('click', '.framer_selections', function () {
    $('.framer_selections').removeClass('active_t6');
    $(this).addClass('active_t6');
});

$('.tab_8_img').on('click', function () {
    var $showImgPath = $(this).attr('src');
    $('.tab-8-table').find('.framer_selections.active_t6').css({"background-image": "url(./" + $showImgPath + ")", 'background-size':'auto 100%'});
    $('.tab-8-table').find('.framer_selections.active_t6').removeClass('.framer_selections.active_t6')
});



///// CLONE

// $('.folding_inside_img').click(function () {
//     var getImgSrc = $(this).attr('src');
//     // alert(getImgSrc);
// })

$('#btn_tab_5').one('click', function () {
    // alert('working')
    $('#table_tab_5').clone(true).appendTo('#gt_tb').find('.active_t6').removeClass('active_t6');
});