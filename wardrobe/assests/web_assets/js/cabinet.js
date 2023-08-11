// ================ Heading Text ========================
var baseurl = $('#base-url').val();
$(document).ready(function () {
  $("input[name=floor_plan]").on("click", function () {
    $(".cabinet_headingText").html("Zadajte rozmery skrinky");
    $("#tooltip_id").show();
  });

  $("#btn_second").on("click", function () {
    var w = $('#length_check_2').val();
    var html = '';
    var cast = 'časť';

    let cc = $('#radio-img-count').val();
    var check = '';
    for (var i = 1; i <= 4; i++) {
      if (i >= 2) {
        cast = 'časti';
      }
      if(cc > 1){
          check = i == cc ? 'checked' : '';
      }else{
          check = i == 1 ? 'checked' : '';
      }
      
      var p = w / i;
      html += '<input type="radio" name="radio_img" id="radio-img-' + i + '" value="imge_' + i + '" ' + check + '>\
        <label for="radio-img-'+ i + '" class="col lbl_sides font-weight-bolder mb-0 px-2">\
        '+ i + ' ' + cast + ' &nbsp;<small class="font14">' + p.toFixed(2) + ' mm</small></label>';
    }
    $('#table_1').find('.added_sirka_value').text(w);
    $('.pocet-priestorov').html(html);
    $(".cabinet_headingText").html("Rozdeľte vstavanú skrinku na priestory");

    
  });

  $("#tab_btn_3").on("click", function () {
    $(".cabinet_headingText").html("Vyskladajte vnútro skrinky");
  });

  $("#tab_btn_4_4").on("click", function () {
    $('#table_tab_5').html('<tr class="tab4-clone-data">' + $('#tab-4-tr').html() + '</tr>');

    $('#table_tab_4final').html('<tr class="tab4-clone-data">' + $('#tab-4-tr').html() + '</tr>');
    $('#table_tab_4final').find('.cab_table_input').prop('readonly',false);
   
    $('#table_tab_5').find('.framer_selections').addClass('drawer_add');
    $('#table_tab_5').find('.table_6_click').removeClass('red_remove_drawer');
    $(".cabinet_headingText").html("Zvoľte dvierka");
    $('#tab-4-tr').find('.red_remove_drawer').removeClass('active_t6');
    $('.t4-btn').find('img').show();
    //$('.t4_add-img').attr('hidden');
    push_system_td();
    calculate_shelf_height();
    
    //26-04
    $('#table_tab_4final').find('.inside_table_tr').each(function(i){
        let main = parseInt(i)+1; 
        $(this).attr('data-mainsec',main)
        $(this).find('.set_inside_framer').each(function(j){
           let sub = parseInt(j)+1; 
           $(this).attr('data-subsec',sub)
        });
    });


     $('#table_tab_4final #single-door-input').prop('readonly',true);
  });

  $(document).on('click', '#tab4-prev', function(){
    // alert('asc')
    //$('.t4-btn').find('img').find('.t4_add-img').attr('hidden');
    $('.t4-btn').find('img').hide();
  })

  $(document).on('click', '#t4next-btn', function(){
    $('.t4-btn').find('img').hide();
  })


  // tab 4 final js Add Drawer
  $(document).on('click', '.t4_add-img', function () {
    //$(this).parent().html('');
    let dw = $(this).siblings('.cab_table_input').val();
    let did = $(this).siblings('.cab_table_input').attr('data-id')
    let cnt = $(this).siblings('.cab_table_input').attr('data-cnt')
    // alert($(this).parents('.inside_table_tr').find('.set_inside_framer').index(this))
    
    
    $(this).parent().parent().html(`<div class="d-flex-center-relative t4_bdr flex-column"><img src=${baseurl + 'assests/web_assets/img_web/cross-white.png' } data-idd="${did}" data-cntt="${cnt}" class="cross_t4_remove-img "><span class="t4-drawer-height " style="display:none">${dw}</span><img src=${ baseurl + 'assests/web_assets/img_web/drawer4.png'} alt="" class=""></div>`);
 
    if($('#table_tab_4final .tab4-input-'+did).not('.addRefreshBtn').length <= 1){
        $('#table_tab_4final .tab4-input-'+did).not('.addRefreshBtn').prop('readonly',true)
    }
  });


  // tab 4 final js Add Drawer
  $(document).on('click', '.t4_add_green', function () {
    //$(this).parent().html('');
    let dw = $(this).siblings('.cab_table_input').val();
    let did = $(this).siblings('.cab_table_input').attr('data-id')
    let cnt = $(this).siblings('.cab_table_input').attr('data-cnt')
    // alert($(this).parents('.inside_table_tr').find('.set_inside_framer').index(this))
    
    
    $(this).parent().parents('.part2_section_new').html(`<span class="t4-btn"><div class="d-flex-center-relative t4_bdr_green flex-column table-inner-section cabinet_first_section1 "><img src=${baseurl + 'assests/web_assets/img_web/cross-white.png' } data-idd="${did}" data-cntt="${cnt}" class="cross_t4_remove-img img_invert"><span class="t4-drawer-height " style="display:none">${dw}</span></div></span>`);
    
    $(this).parent().parent().html(`<div class="d-flex-center-relative t4_bdr_green flex-column table-inner-section"><img src=${baseurl + 'assests/web_assets/img_web/cross-white.png' } data-idd="${did}" data-cntt="${cnt}" class="cross_t4_remove-img img_invert"><span class="t4-drawer-height " style="display:none">${dw}</span></div>`);
 
    if($('#table_tab_4final .tab4-input-'+did).not('.addRefreshBtn').length <= 1){
        $('#table_tab_4final .tab4-input-'+did).not('.addRefreshBtn').prop('readonly',true)
    }
  });


  $(document).on('click','.cross_t4_remove-img',function(){
    let inval = $(this).siblings('.t4-drawer-height').text();
    let did = $(this).attr('data-idd');
    let cnt = $(this).attr('data-cntt');
    $(this).parent().parent().html(`<div class="d-flex-center-relative rmv_t4_bdr"><img src=${baseurl + 'assests/web_assets/img_web/add_icon.png'} alt="" class="t4_add-img "><img src=${baseurl + 'assests/web_assets/img_web/plus_green.png'} alt="" class="t4_add_green"><input readonly type="text" class="cab_table_input tab4-input-${did}" data-id="${did}" data-cnt="${cnt}" value="${inval}">&nbsp;mm</div>`);
  
    if($('#table_tab_4final .tab4-input-'+did).not('.addRefreshBtn').length > 1){
        $('#table_tab_4final .tab4-input-'+did).not('.addRefreshBtn').prop('readonly',false)
    }

    $('#table_tab_4final').find('#single-door-input').prop('readonly',true);
  });


  $("#tab_btn_5_5").on("click", function () {
    $(".cabinet_headingText").html("");
    $("#tooltip_id").hide();
  });
});

$("#inner_img_remove").on("click", function () {
  $(".framer_selections").removeClass("table-inner-section")
  $(".framer_selections").removeClass("cabinet_first_section1")
});



function tab4_tables(h) {
  //$('.tab4-tbls-list').hide()
  let countShow = 0;
  if (h >= 600 && h <= 799) {
    countShow = 2;
  } else if (h > 799 && h <= 999) {
    countShow = 3;
  } else if (h > 999 && h <= 1199) {
    countShow = 4;
  } else if (h >= 1200) {
    countShow = 5;
  }

  for (let i = 1; i <= 5; i++) {
    if (countShow >= i) {
      $('#tab4-table-' + i).show()
    } else {
      $('#tab4-table-' + i).hide()
    }
  }
}

// var minw = { 1: '420px', 2: '211px', 3: '141px', 4: '106px' };
var minw = { 1: '420px', 2: '211px', 3: '141px', 4: '-webkit-fill-available' };


$(document).on('click', '.tab-3-next', function () {
  var w = $('#length_check_2').val();
  var c = $('#radio-img-count').val();
  var h = $('#length_check_0').val()

  $('#tab5-btn-valid').val(0);
  $('#tab4-btn-valid').val(0);
  // $("#tab_btn_5_5").prop("disabled", true);
  $("#tab_btn_4_4").prop("disabled", true);

  tab4_tables(h);

  var avg = w / c;
  avg = avg.toFixed(0);
  var html = '';
  for (var i = 0; i < c; i++) {
    html += `<td>
        <div class="table_6_click cab_tab_4 find-tbl-radio grid_center">
          <div class="text-center f10">
            <label>Kliknutím upravíte</label>
          </div>
        </div>
        <div class="text-center">
          <label>${avg} mm</label>
        </div>
      </td>`;
  }

  $('#tab-4-tr').html(html);
  $('.set-length-cls').text($('#length_check_0').val() + ' mm')
  $('.set-width-cls').text(w + ' mm')

  $('#tab-4-tr').find('.cab_tab_4').css({ 'min-width': minw[c], 'position': 'relative' })

  tab4_tables(h);
});


$(document).on('click', 'input[name="radio_img"]:radio', function () {
  var getVal = $('#length_check_2').val();
  var ri = $(this).val();
  ri = ri.split('_');
  $('#radio-img-count').val(ri[1])
   
  let count = $('#radio-img-count').val();
  let html = '';
   for(let i=1;i<=count;i++){
     html += `<div class="col-md-3 handles_append_show_${i}">
        <div class="handles_append_show"> </div>
    </div>`
   }

   $('.handles_append_show_append').html(html);

  //$('.handles_append_show').addClass('grid_col'+count)
  

  switch ($(this).val()) {
    case "imge_1":
      $("#table_1").show();
      $("#table_2").hide();
      $("#table_3").hide();
      $("#table_4").hide();
      var display_val = parseInt(((getVal / 1) - 0));
      $('.added_sirka_value').html(display_val);
      break;

    case "imge_2":
      $("#table_1").hide();
      $("#table_2").show();
      $("#table_3").hide();
      $("#table_4").hide();
      var display_val = parseInt(((getVal / 2) - 0));
      $('.added_sirka_value').html(display_val);
      break;

    case "imge_3":
      $("#table_1").hide();
      $("#table_2").hide();
      $("#table_3").show();
      $("#table_4").hide();
      var display_val = parseInt(((getVal / 3) - 0));
      $('.added_sirka_value').html(display_val);
      break;

    case "imge_4":
      $("#table_1").hide();
      $("#table_2").hide();
      $("#table_3").hide();
      $("#table_4").show();
      var display_val = parseInt(((getVal / 4) - 0));
      $('.added_sirka_value').html(display_val);
      break;

  }
});

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
  //    setLeftHeight.not(this).val(this.value);
  // });

  // var setLeftSirka = $('.sirka1, .sirka2').keyup(function() {
  //    setLeftSirka.not(this).val(this.value);
  // });

  // var setLeftHibka = $('.hibka1, .hibka2').keyup(function() {
  //    setLeftHibka.not(this).val(this.value);
  // });

  var setLeftHeight = $(".vyskaleft1, .vyskaleft2").keyup(function () {
    // setLeftHeight.not(this).val(this.value);
    // check_length();

    // if ($(this).val() < 600) {
    //   $(this).css("border-color", "red");
    //   $("#err-left").css("display", "block");
    // } else {
    //   $(this).css("border-color", "gray");
    //   $("#err-left").css("display", "none");
    // }


    var nn = $(this).val();
    if (/\D/g.test(nn)) {
      nn = nn.replace(/\D/g, '');
      $(this).val(nn);
    }
    $('.absheight').text('(' + nn + ' mm)')
    var h = $('#max-height').val();
    if (nn > parseInt(h)) {


      nn = nn.substring(0, nn.length - 1);
      $(this).val(nn);
      $("#err-left").text('(Maximum: ' + h + 'mm)')

      $(this).css('border-color', 'red');
      $("#err-left").css('display', 'block')
    } else {
      $(this).css('border-color', 'gray')
      $("#err-left").css('display', 'none')
    }
    setLeftHeight.not(this).val(nn);
    check_length();


  });

  var setDepthh = $(".hlbka1, .hlbka2").keyup(function () {
    var nn = $(this).val();
    if (/\D/g.test(nn)) {
      nn = nn.replace(/\D/g, '');
      $(this).val(nn);
    }
    $('.abswidth').text('(' + nn + ' mm)')
    var d = $('#max-depth').val();
    if (nn > parseInt(d)) {

      nn = nn.substring(0, nn.length - 1);
      $(this).val(nn);
      $("#err-hlbka").text('Hĺbka(Maximum: ' + d + 'mm)')

      $(this).css('border-color', 'red')
      $("#err-hlbka").css('display', 'block')
    } else {
      $(this).css('border-color', 'gray')
      $("#err-hlbka").css('display', 'none')
    }
    setDepthh.not(this).val(nn);
    check_length()
  });

  var setWidthh = $(".sirka1, .sirka2").keyup(function () {
    var nn = $(this).val();
    if (/\D/g.test(nn)) {
      nn = nn.replace(/\D/g, '');
      $(this).val(nn);
    }
    var w = $('#max-width').val();
    if (nn > parseInt(w)) {

      nn = nn.substring(0, nn.length - 1);
      $(this).val(nn);
      $("#err-sirka").text('(Maximum: ' + w + 'mm)')

      $(this).css('border-color', 'red')
      $("#err-sirka").css('display', 'block')
    } else {
      $(this).css('border-color', 'gray')
      $("#err-sirka").css('display', 'none')
    }
    setWidthh.not(this).val(nn);
    check_length()
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

  // var check_0 = 0;
  // var check_1 = 0;
  // var check_2 = 0;
  // // var check_3 = 0;
  // function check_length() {
  //   var arr2 = [600, 300, 800];
  //   for (var i = 0; i < 3; i++) {
  //     var val = $("#length_check_" + i).val();

  //     if (i == 0) {
  //       if (val >= arr2[i]) {
  //         check_0 = 1;
  //       } else {
  //         check_0 = 0;
  //       }
  //     }
  //     if (i == 1) {
  //       if (val >= arr2[i]) {
  //         check_1 = 1;
  //       } else {
  //         check_1 = 0;
  //       }
  //     }

  //     if (i == 2) {
  //       if (val >= arr2[i]) {
  //         check_2 = 1;
  //       } else {
  //         check_2 = 0;
  //       }
  //     }

  //     // if (i == 3) {
  //     //     if (val >= arr2[i]) {

  //     //         check_2 = 1;
  //     //     } else {
  //     //         check_2 = 0;
  //     //     }
  //     // }
  //   }

  //   if (check_0 == 1 && check_1 == 1 && check_2 == 1) {
  //     $("#btn_second").prop("disabled", false);
  //   } else {
  //     $("#btn_second").prop("disabled", true);
  //   }
  // }


  var check_0 = 0;
  var check_1 = 0;
  var check_2 = 0;

  function check_length() {
    var check = 1;
    var h = $('#max-height').val();
    var w = $('#max-width').val();
    var d = $('#max-depth').val();
    var arr2 = [h, d, w];
    for (var i = 0; i < 4; i++) {
      var val = $('#length_check_' + i).val();

      if (i == 0) {
        if (val && isNaN(val) == false) {
          check_0 = 1;
        } else {
          check_0 = 0;
        }
      }
      if (i == 1) {
        if (val && isNaN(val) == false) {
          check_1 = 1;
        } else {
          check_1 = 0;
        }
      }
      if (i == 2) {
        if (val && isNaN(val) == false) {
          check_2 = 1;
        } else {
          check_2 = 0;
        }
      }

    }

    if (check_0 == 1 && check_1 == 1 && check_2 == 1) {
      $("#btn_second").prop('disabled', false);
    } else {
      $("#btn_second").prop('disabled', true);
    }
  }

  // ============= TAB 3 JS ==============================

  // $('input[name="radio_img"]:radio').click(function() {
  //    switch ($(this).val()) {
  //        case "imge_1":
  //            $("#change_img").attr("src", "assets/img_web/tab3_img1.png");
  //            break;
  //        case "imge_2":
  //            $("#change_img").attr("src", "assets/img_web/tab3_img2.png");
  //            break;
  //        case "imge_3":
  //            $("#change_img").attr("src", "assets/img_web/tab3_img3.png");
  //            break;
  //        case "imge_4":
  //            $("#change_img").attr("src", "assets/img_web/tab3_img4.png");
  //            break;
  //    }
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


var current = 1;
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
  //    console.warn(
  //        "Error, number of steps in progress bar do not match number of pages"
  //    );
  // }

  document.documentElement.style.setProperty("--stepNumber", stepsNumber);
  for (let i = 0; i < nextButtons.length; i++) {
    nextButtons[i].addEventListener("click", function (event) {
      event.preventDefault();

      // inputsValid = validateInputs(this);
      inputsValid = true;

      if (inputsValid) {
        slidePage.style.marginLeft = `-${(100 / stepsNumber) * current}%`;
        bullet[current - 1].classList.add("active");
        // progressCheck[current - 1].classList.add("active");
        progressText[current - 1].classList.add("active");
        current += 1;
      }

      //alert(stepsNumber)
    });
  }

  for (let i = 0; i < prevButtons.length; i++) {
    prevButtons[i].addEventListener("click", function (event) {
      event.preventDefault();
      slidePage.style.marginLeft = `-${(100 / stepsNumber) * (current - 2)}%`;
      bullet[current - 2].classList.remove("active");
      // progressCheck[current - 2].classList.remove("active");
      progressText[current - 2].classList.remove("active");
      current -= 1;

      if(i == 7){
            $('.selection_all_woodImgs input[type="checkbox"]').prop('checked',false);
            $('#btn_tab_66').prop('disabled',true);
            $('.door-filler-imgs').html('')
        }

    
    });
  }
  // submitBtn.addEventListener("click", function() {
  //    bullet[current - 1].classList.add("active");
  //    progressCheck[current - 1].classList.add("active");
  //    progressText[current - 1].classList.add("active");
  //    current += 1;
  //    setTimeout(function() {
  //        alert("Your Form Successfully Signed up");
  //        location.reload();
  //    }, 800);
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

// $(".cust_width").click(function () {
//   $(".cust_width").removeClass("box_select");
//   $(this).addClass("box_select");
// });
// $(".select_imgs").click(function () {
//   var img = $(this).attr("src");
//   $(".box_select").html('<img src="' + img + '">');
// });

// $(".inside_clr").click(function () {
//   var img = $(this).attr("src");
//   // alert(img);
//   $(".bg_image_ch").css("background-image", "url(" + img + ")");
// });

// $(".inside_clr2").click(function () {
//   var img = $(this).attr("src");
//   $(".bg_image_ch2").css("background-image", "url(" + img + ")");
// });

$(document).ready(function () {
  // Swiper: Slider
  new Swiper(".swiper-container", {
    loop: false,
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
    }


  });
});

//=============== tab 6  Image Change Code ==============

// $(".folding_inside_img").click(function () {
//   var getImgSrc = $(this).attr("src");
//   // alert(getImgSrc);
// });

// $("#btn_tab_6").one("click", function () {
//   // alert('working')
//   $(".create_table")
//     .clone(true)
//     .appendTo("#gt_tb")
//     .find(".active_t6")
//     .removeClass("active_t6");
// });

//////////

$(".cust_width").click(function () {
  $(".cust_width").removeClass("box_select");
  $(this).addClass("box_select");
});

$(document).on("click", ".table_6_click", function () {
  $(".table_6_click").removeClass("active_t6");
  $(".table_6_click").find(".drawer_add").removeClass("red_add_drawer");
  $(this)
    .addClass("active_t6 red_remove_drawer")
    .find(".drawer_add")
    .addClass("red_add_drawer");
});


// $(document).on('click', '.selection_all_woodImgs', function(){
//     $('#gt_tb').find('.set_inside_framer .t4-btn').each(function(ind){
//       $(this).parent().addClass('active_t8')
//       $(this).find('div:eq(0)').addClass('active_t8')
//     })
//     $('#gt_tb').find('.new-td-parents').each(function(ind){
//       $(this).parent().addClass('active_t8')
//     })
// })


//active_t8 image



// $(document).on('click','#gt_tb .new-tr-parent',function(){
//   if($(this).('set_inside_framer'))
//     $('#gt_tb').find('.active_t8').css('border','2px solid black');
//     $('#gt_tb').find('.active_t8').removeClass('active_t8');
//     $(this).addClass('active_t8')
// });

$(document).on('click','#gt_tb .new-tr-parent',function(){
  if($(this).find('tr').hasClass('set_inside_framer') == false){
    $('#gt_tb').find('.active_t8').removeClass('active_t8');
    $(this).addClass('active_t8')
    $('.active_t8').find('td.part5_section').css({'outline':'none','z-index':'1','position':'inherit'});
    $('.active_t8').find('td.part5_section').css({'outline':'2px solid red','z-index':'9','position':'relative'});
    
  }
}); 


$(document).on('click','#gt_tb .bg-white',function(){
  $('.set_inside_framer').find('.manage-handle-cls').css('border','1px solid black')
    $('#gt_tb .active_t8').removeClass('active_t8');
    $(this).parents('.set_inside_framer').addClass('active_t8');
});

$(document).on('click','#gt_tb .manage-handle-cls',function(){
    
    $('.set_inside_framer').find('.manage-handle-cls').each(function(){
        $(this).css('border','1px solid black');
    })

    $('#gt_tb').find('.active_t8').removeClass('active_t8');
    if($(this).parents('tr').hasClass('set_inside_framer') == true){
       $(this).parents('.set_inside_framer').addClass('active_t8')
       $(this).css('border','1px solid red');
     
    }
});

// $(document).on('click','#gt_tb .set_inside_framer',function(){
    
//     $('#gt_tb').find('.active_t8').removeClass('active_t8');
//     $(this).addClass('active_t8');
// });


$('.selection_all_woodImgs input[type="checkbox"]').click(function(){
   var ischeck = $('.selection_all_woodImgs input[type="checkbox"]').is(':checked');
   if(ischeck == true){
        $('#gt_tb').find('.set_inside_framer .t4-btn').each(function(ind){
          $(this).parent().addClass('active_t8')
          $(this).find('div:eq(0)').addClass('active_t8')
        })
        $('#gt_tb').find('.new-td-parents').each(function(ind){
          $(this).parent().addClass('active_t8')
        })
   }else{
      $('#gt_tb').find('.set_inside_framer .t4-btn').each(function(ind){
          $(this).parent().removeClass('active_t8')
          $(this).find('div:eq(0)').removeClass('active_t8')
        })
        $('#gt_tb').find('.new-td-parents').each(function(ind){
          $(this).parent().removeClass('active_t8')
        })
   }
})

$(".select_imgs").click(function () {
    var img = $(this).attr("src");
    $(".active_t8").find(".t4_bdr_black").css("background-image", "url(" + img + ")");
    $(".active_t8 .bg-white").css("background-image", "url(" + img + ")");

    $(".active_t8.bg-white-green").parents('td.active_t8').css({"background-image":"url(" + img + ")","background-color":"transparent"});
    $(".active_t8.bg-white-green").css({"background-color":"transparent"});

    let backimage = $('.newly-added-tab .img-responsive').attr('src');
    $(".bg-white-green").closest('td').css({"background-image" : "url("+backimage+")"});

    //$('.selection_all_woodImgs #lk').trigger('click')
   // $('.active_t8').removeClass('active_t8');
      
    $('.door-filler-imgs').html("");
    let arr = [];
    $('.tab6-inside-div').find('.t4_bdr_black').each(function (i) {
        var bg = $(this).css('background-image');
        bg = bg.replace('url(','').replace(')','').replace(/\"/gi, "");
    
        if ( $.inArray(bg, arr) == -1 && bg != 'none'){
            var imgattr = `<div class="card p-1 mx-2 card-shadow">
                <img  src="${bg}" class="Dub_img lazy d-block m-auto">
            <div>`;
          arr.push(bg);  
         $('.door-filler-imgs').append(imgattr);
        }
    });

     $('.tab6-inside-div').find('.bg-white').each(function (i) {
        var bg = $(this).css('background-image');
        bg = bg.replace('url(','').replace(')','').replace(/\"/gi, "");
    
        if ( $.inArray(bg, arr) == -1 && bg != 'none'){
            var imgattr = `<div class="card p-1 mx-2 card-shadow">
                <img  src="${bg}" class="Dub_img lazy d-block m-auto">
            <div>`;
          arr.push(bg);  
         $('.door-filler-imgs').append(imgattr);
        }
    });

    //  if ( $.inArray(backimage, arr) == -1){
    //         var imgattr = `<div class="card p-1 mx-2 card-shadow">
    //             <img  src="${backimage}" class="Dub_img lazy d-block m-auto">
    //         <div>`;
    //     arr.push(backimage);  
    //    $('.door-filler-imgs').append(imgattr);
    //   }

});



function remove_drawer() {
  $("#cb__4").prop("checked", false);
  $(".drawer_unclick").removeClass("add_z_drawer");
  $(".select_div_2").addClass("add_z_drawer");
  $(".drawer_add").removeClass("active_t6");
}

// drawer

$("#cb__4").change(function () {
  if ($(this).is(":checked")) {
    $(".drawer_unclick").addClass("add_z_drawer");
    $(".select_div_2").removeClass("add_z_drawer");
    $(".red_remove_drawer").removeClass("active_t6");
    $(".red_add_drawer").addClass("active_t6");
  } else {
    $(".drawer_unclick").removeClass("add_z_drawer");
    // $('.red_remove_drawer').addClass('active_t6');
    $(".red_add_drawer").removeClass("active_t6");
  }
});

$("#cb__1").change(function () {
  if ($(this).is(":checked")) {
    $(".push_off_1").find(".plusoo").addClass("pl_al_none");
    // $(".push_off_1")
    //   .find(".part_selection_door1")
    //   .addClass("push_unselect_cls");
    $(".push_off_1").find(".cross_card").addClass("cross_h_s")
  } else {
    $(".push_off_1").find(".plusoo").removeClass("pl_al_none");
    // $(".push_off_1")
    //   .find(".part_selection_door1")
    //   .removeClass("push_unselect_cls");
    $(".push_off_1").find(".cross_card").removeClass("cross_h_s")
  }
});

$("#cb__2").change(function () {
  if ($(this).is(":checked")) {
    $(".push_off_2").find(".plusoo").addClass("pl_al_none");
    // $(".push_off_2")
    //   .find(".part_selection_door1")
    //   .addClass("push_unselect_cls");
    $(".push_off_2").find(".cross_card").addClass("cross_h_s")
  } else {
    $(".push_off_2").find(".plusoo").removeClass("pl_al_none");
    // $(".push_off_2")
    //   .find(".part_selection_door1")
    //   .removeClass("push_unselect_cls");
    $(".push_off_2").find(".cross_card").removeClass("cross_h_s")
  }
});

$("#cb__3").change(function () {
  if ($(this).is(":checked")) {
    $(".push_off_3").find(".plusoo").addClass("pl_al_none");
    // $(".push_off_3")
    //   .find(".part_selection_door1")
    //   .addClass("push_unselect_cls");
    // $(".push_off_3")
    //   .find(".part_selection_door2")
    //   .addClass("push_unselect_cls");
    // $(".push_off_3")
    //   .find(".drawer_add")
    //   .addClass("push_unselect_cls");
    $(".push_off_3").find(".cross_card").addClass("cross_h_s")
  } else {
    $(".push_off_3").find(".plusoo").removeClass("pl_al_none");
    // $(".push_off_3")
    //   .find(".part_selection_door2")
    //   .removeClass("push_unselect_cls");
    // $(".push_off_3")
    //   .find(".part_selection_door1")
    //   .removeClass("push_unselect_cls");
    // $(".push_off_3")
    //   .find(".drawer_add")
    //   .removeClass("push_unselect_cls");
    $(".push_off_3").find(".cross_card").removeClass("cross_h_s")
  }
});

// drawer

// $(".select_imgs").click(function () {
//   $(".tab_8_img").removeClass("tab5imgBorderRed");
//   $(this).addClass("tab5imgBorderRed");
//   var img = $(this).attr("src");
//   var dataid = $(this).attr("data-id");
//   $(".box_select").html('<img src="' + img + '">');
//   //var checkexist = $('.tab6-inside-div').find('.door-filler-imgs img');
//   var checkexist = 1;
//   if (dataid > 0) {
//     $('.tab6-inside-div').find('.door-filler-imgs img').each(function () {
//       var check = $(this).attr('data-id');
//       if (check == dataid) {
//         checkexist = 0;
//         return false;
//       }
//     });
//     if (checkexist == 1) {
//       var imgattr = `<div class="card p-1 mx-2 card-shadow">
//             <img data-id="${dataid}" src="${img}" class="Dub_img lazy d-block m-auto">
//         <div>`;
//       $('.door-filler-imgs').append(imgattr);
//     }
//   }
// });





// $(".select_imgss").click(function () {
//     var img = $(this).attr("src");
//     $(".active_t8").find(".t4_bdr_black").css("background-image", "url(" + img + ")");
//     $(".active_t8.bg-white").css("background-image", "url(" + img + ")");
// });





$(".inside_clr").click(function () {
  var img = $(this).attr("src");
  // alert(img);
  var getDataAttribute = $(this).parent().data('clr-name');
  $('.decor_in_ext_text').html(getDataAttribute);
  $(".bg_image_ch").css("background-image", "url(" + img + ")");
  $('.interir-card-right').addClass('rd-brder');
  document.documentElement.style.setProperty("--cuboidBg", `url(${img})`);
  document.documentElement.style.setProperty("--cuboidBg-1", `url(${img})`);
});

$('.nitzz').click(function () {
  $('.abss_right_card').addClass('rd-brder')
})

$('.abs-inside-clr').click(function () {
  var img = $(this).attr("src");
  // $('.abs_imggg').attr('src', img);
  var nameData = $(this).parent().data('abs-clr');
  $('.abs_decor_texxt').html(nameData);
})

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
  var c = $('#radio-img-count').val();
  var split = tid.split('_');
  if (parseInt(split[1]) < 7) {
    var h = $('#length_check_0').val();
    var onesec = h/split[1];
    $(".active_t6").html(dom);
    $(".active_t6").find('.cab_table_input').each(function(){
        $(this).val(onesec.toFixed(0))
    });
    //$('#tab-4-tr').find('.red_remove_drawer .inside_table_tr').css({'min-width':minw[c],'position':'relative'});

    //new add(22-05-2023)
    // let domsss = $('.cab_tab_4.active_t6').parents('td').next('td').children('.cab_tab_4');
    // $('.cab_tab_4.active_t6').removeClass('active_t6')
    // domsss.addClass('active_t6');
    //end new

    if ($(window).width() > 767) {
      $('#tab-4-tr').find('.red_remove_drawer .inside_table_tr').css({ 'min-width': minw[c], 'position': 'relative' });
    }
    var btn4 = $('#tab4-btn-valid').val();
    $('#tab4-btn-valid').val(parseInt(btn4) + 1)
  } else {
    if (parseInt(split[1]) == 10) {
      $('#table_tab_5').find(".red_add_drawer").html(dom);
      var l = $('#table_tab_5').find('.red_add_drawer').length;
      var lnth = { 2: '118px', 3: '77px', 4: '57px', 5: '45px', 6: '37px' };
      $('#table_tab_5').find(".red_add_drawer").find('.drawer_handle').css('height', lnth[l]);
      if ($('#table_tab_5 .framer_selections').hasClass('red_add_drawer')) {
        var btn5 = $('#tab5-btn-valid').val();
        $('#tab5-btn-valid').val(parseInt(btn5) + 1)
      }
    } else {
      $(".active_t6").html(dom);
      if ($('#table_tab_5 .red_remove_drawer').hasClass('active_t6')) {
        var btn5 = $('#tab5-btn-valid').val();
        $('#tab5-btn-valid').val(parseInt(btn5) + 1)
      }
    }
    //$('#table_tab_5').find('.red_remove_drawer .inside_table_tr').css({'min-width':minw[c],'position':'relative'})
    if ($(window).width() > 767) {
      $('#table_tab_5').find('.red_remove_drawer .inside_table_tr').css({ 'min-width': minw[c], 'position': 'relative' })
    }
  }
  table_4_btn();
  table_5_btn();

  $('.cab_tab_4.active_t6').parents('td').next('td').children('.cab_tab_4').trigger('click');
}


function table_5_btn() {
  var count = $('#radio-img-count').val()
  var count1 = $('#tab5-btn-valid').val()
  if (count1 >= count) {
    // $("#tab_btn_5_5").prop("disabled", false);
  } else {
    // $("#tab_btn_5_5").prop("disabled", true);
  }
}

// function table_4_btn() {
//   var count = $('#radio-img-count').val()
//   var count1 = $('#tab4-btn-valid').val()

//   if (count1 >= count) {
//     $("#tab_btn_4_4").prop("disabled", false);
//   } else {
//     $("#tab_btn_4_4").prop("disabled", true);
//   }
// }

// tab 4
$("#tab_btn_4_4").prop("disabled", true);
function table_4_btn() {
  var count = $('#radio-img-count').val()
  var incre = 0;
  $("#tab-4-tr").find('.red_remove_drawer').each(function (index) {
    incre++;
  });
  if (incre == count) {
    $("#tab_btn_4_4").prop("disabled", false);
  } else {
    $("#tab_btn_4_4").prop("disabled", true);
  }
}

// tab 5
//$("#tab_btn_5_5").prop("disabled", true);
// function table_5_btn() {
//   var incre_1 = 0;
//   var count = $('#radio-img-count').val()
//   $(".find-tbl-radio_1").each(function () {
//     var check_1 = $(this).find("#check-radio-tbl-5").html();
//     if (check_1) {
//       return incre_1++;
//     }
//   });

//   if (incre_1 == count) {
//     $("#tab_btn_5_5").prop("disabled", false);
//   } else {
//     $("#tab_btn_5_5").prop("disabled", true);
//   }
// }
// td
// $('.tab-8-table').on('click', '.framer_selections', function () {
//   $('.framer_selections').removeClass('active_t6');
//   $(this).addClass('active_t6');
// });

$(".final_table").on("click", ".framer_selections", function () {
  $(".framer_selections").removeClass("active_t6");
  $(this).addClass("active_t6");
  // $(".tab-7-table").find(".active_t6").addClass("color_red_ico");
  // var iddd = $(this).parent().attr("id");
  // window.sessionStorage.setItem("this-framer-id", iddd);
  // alert(iddd)
  // $(".framer_selections").find(".img_bord").addClass("fin_img_add")
});



$(".tab_8_img").on("click", function () {
  var $showImgPath = $(this).attr("src");
  $(".active_t6").addClass("addWoodImg");

  $(".active_t6")
    .find(".framer_selections.active_t6")
    .css({
      "background-image": "url(" + $showImgPath + ")",
      "background-size": "auto 100%",
    });

  $(".final_table")
    .find(".framer_selections.active_t6")
    .removeClass(".framer_selections.active_t6");
    Tab6_Images();
 
});



$(document).on("click", "#tab_btn_5_5", function () {
  var html = $('#table_tab_5').html();
  $('#gt_tb').html('<table class="grid_center cuboid-rt2 cuboid2 tab5-clone-data" >' + html + '</table>')
  $('#gt_tb').addClass('active_t6_next');

  $('#gt_tb').find('.edit-right').each(function(){
     let psh = $(this).find('.edit_t4_add-img2').attr('data-push')
     let chk = $(this).find('.edit_t4_add-img2').attr('data-check')
     let lgth = $(this).find('.edit_t4_add-img2').attr('data-length')
     let st = `<span data-push="${psh}" data-check="${chk}" data-length="${lgth}" class="edit_t4_add-img2"></span>`;
     $(this).html(st)
  })

  $('#gt_tb').find('.edit-left').each(function(){
     let psh = $(this).find('.edit_t4_add-img2').attr('data-push')
     let chk = $(this).find('.edit_t4_add-img2').attr('data-check')
     let lgth = $(this).find('.edit_t4_add-img2').attr('data-length')
     let st = `<span data-push="${psh}" data-check="${chk}" data-length="${lgth}" class="edit_t4_add-img2"></span>`;
     $(this).html(st)
  })

  $('#gt_tb').find('.table_6_click ').removeClass('table_6_click');
  

  //imp comment
  $('#gt_tb').find('.table-inner-section').removeClass('table-inner-section');
  $('#gt_tb').find('.framer_selections').removeClass('framer_selections');
// 10-06-2023
//   $('#gt_tb .bg-white-green').parents('.cabinet_first_section1').css('background-image','none')

  $('#gt_tb .bg-white-green').css('background-image','url('+baseurl+'assests/web_assets/img_web/cabinet_section_interior.png)')
  $('#gt_tb .bg-white-green.cabinet_first_section1').css('background-image','url("'+baseurl+'assests/web_assets/img_web/cabinet_first_section1.png")')
//   16/06/2023
 // $('#gt_tb .cabinet_first_section1').removeAttr('style');

  $('#gt_tb').find('.cab_tab_4').each(function(index){
    $(this).find('.new-tr-parent').each(function(ind){
       if($(this).find('.new-tbl-parents').is(':visible') == false){
            $(this).find('.new-tbl-parents').remove();
       }
    })
})



  // new border remove add
// 2
$("#gt_tb").find(".part2_section").css({"border":"none","background":"#fff"});
$("#gt_tb").find(".part2_section .bg-white").css("border","2px solid #000");
// 3
$("#gt_tb").find(".part1_section").css({"border":"none","background":"#fff"});
$("#gt_tb").find(".part1_section .bg-white").css("border","2px solid #000");
// 4
$("#gt_tb").find(".part3_section").css({"border":"none","background":"#fff"});
$("#gt_tb").find(".part3_section .bg-white").css("border","2px solid #000");
// 5
$("#gt_tb").find(".part5_section").css({"border":"none","background":"#fff"});
$("#gt_tb").find(".part5_section .bg-white").css("border","2px solid #000");
// 6
$("#gt_tb").find(".part6_section").css({"border":"none","background":"#fff"});
$("#gt_tb").find(".part6_section .bg-white").css("border","2px solid #000");

// 16/06/2023
$('img.drawer_modal_img').hide();
Tab6_Images()
let backimage = $('.newly-added-tab .img-responsive').attr('src');
    $(".bg-white-green").closest('td').css({"background-image" : "url("+backimage+")"});

});

$(document).on("click", "#tab_6", function () {
  $('img.drawer_modal_img').show();
});

// $('.create_table .table_6_click').on('click', function () {
//   $('.create_table .table_6_click').removeClass('active_t7');
//   $(this).addClass('active_t7');
// });

$("#btn_tab_66").on("click", function () {
  var html0 = $(".active_t6_next").html();
  $(".tab-7-table").html(html0);
  $(".tab-7-table").find('.cab_tab_4').each(function(ind){
     ind++;
     $(this).attr('data-iid',ind);
     
  })
  $(".tab-7-table").addClass('active_t7_next')
  $('.final_table').remove('active_t6')

  $(".tab-7-table").find(".td_under_border").css('background', 'transparent');
  $(".tab-7-table").find(".right_door h5").css('display', 'none')
  $(".tab-7-table").find(".right_door h4").css('display', 'none')
  $(".tab-7-table").find(".plusoo").show();
  $(".tab-7-table").find(".arr_door").show();
  $(".100_mm_hide").hide();
  $(".tab-7-table").find(".cab_tab_4").removeClass("active_t6");
  $(".tab-7-table").find(".table_6_click").removeClass("table_6_click");
  $(".tab-7-table").find(".framer_selections").removeClass("framer_selections");
  $(".tab-7-table").find(".framer_selections").removeClass("active_t6");

  $('.active_t6_next').find('.red_add_drawer').removeClass("active_t6");
  $('.active_t6_next').find('.addWoodImg').removeClass("active_t6");

  // $(".tab-7-table").removeClass('active_t6_next')
  //$(".tab-7-table").find(".cross_h_s").show();

  $('.handles_append_show').html('')

  var count = $('#radio-img-count').val();
  if (count == 4) {
    $(".tab-7-table").find('.plus_ico1__2_door').addClass('cabinet_handel')
    $(".tab-7-table").find('.plus_ico2__2_door').addClass('cabinet_handel')
    $(".tab-7-table").find('.plus_ico3__2_door').addClass('cabinet_handel')

    $(".tab-7-table").find('.plus_ico6_2_door').addClass('cabinet_handel')
    $(".tab-7-table").find('.plus_ico7_2_door').addClass('cabinet_handel')
    $(".tab-7-table").find('.plus_ico8_2_door').addClass('cabinet_handel')

    $(".tab-7-table").find('.plus_ico').addClass('cabinet_handel')
    $(".tab-7-table").find('.plus_ico1').addClass('cabinet_handel')
    $(".tab-7-table").find('.plus_ico2').addClass('cabinet_handel')
    $(".tab-7-table").find('.plus_ico3').addClass('cabinet_handel')
    $(".tab-7-table").find('.plus_ico4').addClass('cabinet_handel')

    $(".tab-7-table").find('.plus_ico5').addClass('cabinet_handel')
    $(".tab-7-table").find('.plus_ico6').addClass('cabinet_handel')
    $(".tab-7-table").find('.plus_ico7').addClass('cabinet_handel')
    $(".tab-7-table").find('.plus_ico8').addClass('cabinet_handel')
    $(".tab-7-table").find('.plus_ico9').addClass('cabinet_handel')

    $(".tab-7-table").find('.plus_ico_drawer').addClass('cabinet_handel')
    $(".tab-7-table").find('.plus_ico_drawer_1').addClass('cabinet_handel')
    $(".tab-7-table").find('.plus_ico_drawer_2').addClass('cabinet_handel')

  } else if (count == 4) {
    $(".tab-7-table").find('.plus_ico1__2_door').addClass('cabinet_handel2')
    $(".tab-7-table").find('.plus_ico2__2_door').addClass('cabinet_handel2')
    $(".tab-7-table").find('.plus_ico3__2_door').addClass('cabinet_handel2')

    $(".tab-7-table").find('.plus_ico6_2_door').addClass('cabinet_handel2')
    $(".tab-7-table").find('.plus_ico7_2_door').addClass('cabinet_handel2')
    $(".tab-7-table").find('.plus_ico8_2_door').addClass('cabinet_handel2')

    $(".tab-7-table").find('.plus_ico').addClass('cabinet_handel2')
    $(".tab-7-table").find('.plus_ico1').addClass('cabinet_handel2')
    $(".tab-7-table").find('.plus_ico2').addClass('cabinet_handel2')
    $(".tab-7-table").find('.plus_ico3').addClass('cabinet_handel2')
    $(".tab-7-table").find('.plus_ico4').addClass('cabinet_handel2')

    $(".tab-7-table").find('.plus_ico5').addClass('cabinet_handel2')
    $(".tab-7-table").find('.plus_ico6').addClass('cabinet_handel2')
    $(".tab-7-table").find('.plus_ico7').addClass('cabinet_handel2')
    $(".tab-7-table").find('.plus_ico8').addClass('cabinet_handel2')
    $(".tab-7-table").find('.plus_ico9').addClass('cabinet_handel2')

    $(".tab-7-table").find('.plus_ico_drawer').addClass('cabinet_handel2')
    $(".tab-7-table").find('.plus_ico_drawer_1').addClass('cabinet_handel2')
    $(".tab-7-table").find('.plus_ico_drawer_2').addClass('cabinet_handel2')
  }


  // var addc = 1;
  // $(".tab-7-table .plusoo").each(function () {
  //   $(this).attr("id", "set-plusoo-tr-" + addc);
  //   addc++;
  // });

  // $(this).find('.active_t6').remove('active_t6')

  $('.active_t7_next').find('.red_remove_drawer').each(function (index) {
    let i = parseInt(index) + 1;
    if ($('#cb__' + i).is(':checked') == true) {
      $(this).find('.click_plus').hide()
    }
  });

   
   manage_handle_image();
   $('.tab-7-table').find('.active_t8').removeClass('active_t8');

   let btnseven = $('.active_t7_next').find('.part5_section .click_plus').length
   if(btnseven == 0){
     $('#btn_tab_77').prop('disabled',false);
   }
   else{
     $('#btn_tab_77').prop('disabled',true);
   }

  // $('.tab-7-table').find('span.t4-drawer-height').remove('img')

  let idsss = 1000;
  $('.tab-7-table').find('.bg-white.drawer-handle').each(function (index) {
      $(this).find('img').remove();
      $(this).attr('id','this-framer-id-'+idsss);
      let addhtml= `<span class=" click_plus rotet_only" onclick="get_ses_id(this)">
        <img src="${baseurl}assests/web_assets/img_web/plus3.png" data-id="${idsss}"  class="img_bord" onclick="click_add_cls(this)">
      </span>`;
     $(this).append(addhtml);
     idsss++;
  });

});

function push_system_td() {
  //push-sys-1
  var count = $('#radio-img-count').val();

  for (let i = 1; i <= 4; i++) {
    if (count >= i) {
      $('#push-sys-' + i).show()
    } else {
      $('#push-sys-' + i).hide()
    }
  }
}


function tab7_btn_valid(){
     
    let numchecks = $(document).find(".tab-7-table").find('.img_bord_2').length;
    let numdoorhandle = 0;
     $(".tab-7-table").find('.t4_bdr_black_1').each(function(ind){
         let html = $(this).html();
         if(html != '')
         {
            numdoorhandle++;
         }    
      })

      $(".tab-7-table").find('.bg-white.drawer-handle').each(function(ind){
          numdoorhandle++;
      })


    if(numdoorhandle == numchecks){
        $('#btn_tab_77').prop('disabled',false)
    }else{
        $('#btn_tab_77').prop('disabled',true)
    }
    
}

$("#btn_tab_77").on("click", function () {
  // $(".tab-7-table").clone(true).appendTo(".tab-end-table");
  
  let tab7 = $(".active_t7_next").html();
  $(".tab-end-table").html(tab7);
  $(".mobile-img-final").html(tab7);
  $(".tab-end-table").find('.delet,.rotate_images').remove();
  $(".mobile-img-final").find('.delet,.rotate_images').remove();
  // alert('adding to tab 8')
  $(".tab-end-table").find(".ico").css("color", "transparent");
  var getHtmL = $(".getHtmlStrct").html();
  $(".append_tab_5_table_final").html(getHtmL);

  $('.append_tab_5_table_final').find('.edit_t4_add-img2').remove();
  calculateMaterial();
});

function final_remove() {
  $(".plusoo").find(".rotet_111").html("");
  $(".plusoo").find(".delet").html("");
}

// $(".tab10_btn").on("click", function () {
//   window.sessionStorage.removeItem("this-framer-id");
//   window.sessionStorage.clear();
// });

$(document).on('click', '.cal-btn', function () {
  calculateMaterial();
})

$(document).on('keyup', '.woodColorSearch', function () {
  var search = $(this).val()
  search = search.toLowerCase();
  $('.woodColorCls').each(function () {
    var cls = $(this).attr('data-clr');
    cls = cls.toLowerCase();
    if (cls.includes(search)) {
      $(this).css('display', 'block')
    } else {
      $(this).css('display', 'none')
    }
  })
});

$(document).on('keyup', '.absColorSearch', function () {
  var search = $(this).val()
  search = search.toLowerCase();
  $('.absColorCls').each(function () {
    var cls = $(this).attr('data-clr');
    cls = cls.toLowerCase();
    if (cls.includes(search)) {
      $(this).css('display', 'block')
    } else {
      $(this).css('display', 'none')
    }
  })
});

//calculate material
$(document).on('click', '.setBoxImag', function () {
  var idc = $(this).attr('data-id');
  var id = idc.split('-');
  if (id[0] == 'f') {
    $('#front-setboximg').val(idc)
  } else if (id[0] == 'tb') {
    $('#topbottom-setboximg').val(idc)
  } else if (id[0] == 'b') {
    $('#back-setboximg').val(idc)
  }

//   calculateMaterial();
  tab4btn_validate();
});

  $(document).on('keyup',function(){
     var email = $('.Vas_e_mail').val()
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    var check =  emailReg.test(email);
    if(check == true && email != ''){
      //  $('.ttl_price').css('display','block')
         //$('.ttl_price_vat').css('display','block')
    }else{
        $('.ttl_price').css('display','none')
        $('.ttl_price_vat').css('display','none')
    }

  })

  $('.price-offer-btn-show').on('click',function(){
    var email = $('.Vas_e_mail').val()
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    var check =  emailReg.test(email);
    if(check == true && email != ''){
        $('.ttl_price').css('display','block')
        $('.ttl_price_vat').css('display','block')
    }else{
        $('.ttl_price').css('display','none')
        $('.ttl_price_vat').css('display','none')
    }
});



//calculation()
//1510-2434
function calculateMaterial() {
  
  var gtotal = 0;

  var f = $('#front-setboximg').val();
  var tb = $('#topbottom-setboximg').val();
  var b = $('#back-setboximg').val();
  if (f == '' || tb == '' || b == '') {
    return false;
  }
  var h = $('#length_check_0').val();
  var d = $('#length_check_1').val();
  var w = $('#length_check_2').val();
  var c = $('#radio-img-count').val();

  

  var topmaterial = 0;
  var bottommaterial = 0;
  var cabinetsidematerial = 0;
  var cabinetbackmaterial = 0;
  var doormaterial = 0;
  var dividingwallwidth = 0;
  var dividingwallwidth1 = 0;
  var dividingwallheight = 0;


  
  var shelfwidth = parseFloat(d);
  var shelflength = parseFloat(d);

  var shelflengthnew = parseFloat(w/c);

//   var thickness = 18;
//   var backthickness = 18;
//   var topthickness = 18;
//   var bottomthickness = 18;
//   var doorthickness = 18;

  var thickness = 10;
  var backthickness = 10;
  var topthickness = 10;
  var bottomthickness = 10;
  var doorthickness = 10;

  var tdtmaterialcost = 13.68; //previous 8
  var absmaterialcost = 1.2; //previous 5

  var tbody = '';

  var displaydepth = d;
  topmaterial = (w * d);
  if (f == 'f-1' && (tb == 'tb-1' || tb == 'tb-3') && (b == 'b-2' || b == 'b-3')) {
    topmaterial = (w * d);
   
  } 
  else if (f == 'f-1' && (tb == 'tb-2' || tb == 'tb-4') && (b == 'b-2' || b == 'b-4')) {
    topmaterial = ((w - (2 * thickness)) * d);
   
  } 
  else if (f == 'f-1' && (tb == 'tb-1' || tb == 'tb-2' || tb == 'tb-3' || tb == 'tb-4') && b == 'b-1') {
    topmaterial = (w * (d - 3));
     displaydepth = d-3;
  } 
  else if ((f == 'f-2' || f == 'f-4') && (tb == 'tb-1' || tb == 'tb-2' || tb == 'tb-3' || tb == 'tb-4') && (b == 'b-2' || b == 'b-3' || b == 'b-4')) {
    topmaterial = (w * (d - 20));
   displaydepth = d-20;
  } 
  else if ((f == 'f-2' || f == 'f-4') && (tb == 'tb-1' || tb == 'tb-2' || tb == 'tb-3' || tb == 'tb-4') && b == 'b-1') {
    topmaterial = (w * (d - 23));
    displaydepth = d-23;
  } 
  else if ((f == 'f-3') && (tb == 'tb-2' || tb == 'tb-4') && (b == 'b-2' || b == 'b-3' || b == 'b-4')) {
    topmaterial = ((w - (2 * thickness)) * d);
  } 
  else if ((f == 'f-3') && (tb == 'tb-1' || tb == 'tb-2' || tb == 'tb-3' || tb == 'tb-4') && b == 'b-1') {
    topmaterial = (w * (d - 3));
    displaydepth = d-3;
  }
  
  let topmaterialcost = (topmaterial / 1000000) * tdtmaterialcost;
  tbody += `<tr>
           <th>
                Výpočet vrchnej časti skrinky
                <div class="align-items-center d-flex gap11">
                    <span class="small_grey_box_bottom mt-3"></span>
                    <span class="ml-2 mt-3">${displaydepth}mm</span>
                </div>
                <span class="">${w}mm</span>
            </th>
        <td>
            <span class="calc_panel">Vrchný materiál skrinky : </span>
            <span class="calc_panel">${topmaterial.toFixed(2)}mm2</span>
            <span class="calc_panel">${(topmaterial / 1000000).toFixed(2)}m2</span><br><br>
            <span class="calc_panel">Náklady na vrchný materiál skrinky : </span>
            <span class="calc_panel">${topmaterialcost.toFixed(2)}€</span>
        </td>
    </tr>`;

    gtotal = parseFloat(gtotal)+parseFloat(topmaterialcost);

  if (f == 'f-1' && (tb == 'tb-1' || tb == 'tb-3') && (b == 'b-2' || b == 'b-3')) {
    bottommaterial = (w * d);
  } 
  else if (f == 'f-1' && (tb == 'tb-2' || tb == 'tb-4') && (b == 'b-2' || b == 'b-4')) {
    bottommaterial = ((w - (2 * thickness)) * d);
  }
   else if (f == 'f-1' && (tb == 'tb-1' || tb == 'tb-2' || tb == 'tb-3' || tb == 'tb-4') && b == 'b-1') {
    bottommaterial = (w * (d - 3));
  }
   else if ((f == 'f-2' || f == 'f-3' || f == 'f-4') && (tb == 'tb-1' || tb == 'tb-2' || tb == 'tb-3' || tb == 'tb-4') && (b == 'b-2' || b == 'b-3' || b == 'b-4')) {
    bottommaterial = (w * (d - 20));
  } 
  else if ((f == 'f-2' || f == 'f-3' || f == 'f-4') && (tb == 'tb-1' || tb == 'tb-2' || tb == 'tb-3' || tb == 'tb-4') && b == 'b-1') {
    bottommaterial = (w * (d - 23));
  } 
  else if ((f == 'f-3') && (tb == 'tb-1' || tb == 'tb-2' || tb == 'tb-3' || tb == 'tb-4') && (b == 'b-2' || b == 'b-3' || b == 'b-4')) {
    bottommaterial = (w * (d - 20));
  } 
  else if ((f == 'f-3') && (tb == 'tb-1' || tb == 'tb-2' || tb == 'tb-3' || tb == 'tb-4') && b == 'b-1') {
    bottommaterial = (w * (d - 23));
  }

  let bottommaterialcost = (bottommaterial / 1000000) * tdtmaterialcost;
  gtotal = parseFloat(gtotal)+parseFloat(bottommaterialcost);

  tbody += `<tr>
        <th>
          Výpočet dna skrinky : 
          <div class="align-items-center d-flex gap11">
                    <span class="small_grey_box_bottom mt-3"></span>
                    <span class="ml-2 mt-3">${displaydepth}mm</span>
            </div>
            <span class="">${w}mm</span>
        </th>
        <td>
            <span class="calc_panel">Materiál dna skrinky : </span> 
            <span class="calc_panel">${bottommaterial.toFixed(2)}mm2</span> 
            <span class="calc_panel">${(bottommaterial / 1000000).toFixed(2)}m2</span><br><br>

            <span class="calc_panel">Náklady na materiál spodnej časti skrinky : </span> 
            <span class="calc_panel">${bottommaterialcost.toFixed(2)}€</span>
            
        </td>
    </tr>`;

   


  if (tb == 'tb-3' || tb == 'tb-2') {
    cabinetsidematerial = ((h - (2 * thickness)) * d) * 2;
  } else if (tb == 'tb-4' && b == 'b-1') {
    cabinetsidematerial = ((h * d) - 3) * 2;
  } else if (tb == 'tb-4' && b == 'b-4') {
    cabinetsidematerial = h * d * 2;
  } else if (tb == 'tb-4' && (b == 'b-2' || b == 'b-3')) {
    cabinetsidematerial = h * (d - (backthickness / 2)) * 2;
  } else if (tb == 'tb-1' || tb == 'tb-2') {
    cabinetsidematerial = (h - topthickness) * d * 2;
  }
  
  let cabinetsidematerialcost = (cabinetsidematerial / 1000000) * tdtmaterialcost;
  gtotal = parseFloat(gtotal)+parseFloat(cabinetsidematerialcost);
  tbody += `<tr>
        <th>
            Výpočet strany skrinky
            <div class="align-items-center d-flex gap11">
                <span class="small_grey_box_side mt-3"></span>
                <span class="ml-2 mt-3">${h}mm</span>
                <span class="calc_panel">X2</span>
            </div>
            <span class="">${displaydepth}mm</span>
        </th>
        <td>

            <span class="calc_panel">Materiál bočnej strany skrinky : </span>
            <span class="calc_panel">${cabinetsidematerial.toFixed(2)}mm2</span>
            <span class="calc_panel">${(cabinetsidematerial / 1000000).toFixed(2)}m2</span><br><br>

            <span class="calc_panel">Náklady na materiál bočnej skrinky : </span>
            <span class="calc_panel">${cabinetsidematerialcost.toFixed(2)}€</span>
        </td>
    </tr>`;


  dividingwallwidth = d;

  if (f == 'f-1') {
    doormaterial = (w - (2 * thickness) - (2 * 2)) * (h - (2 * thickness) - (2 * 2));
    dividingwallwidth = d - doorthickness;
    shelfwidth = d - doorthickness;

  } else if (f == 'f-2') {
    doormaterial = (w - (2 * 2) - (2 * 2)) * (h - (2 * thickness) - (2 * 2));
  } else if (f == 'f-3') {
    doormaterial = (w - (2 * 2) - (2 * 2)) * (h - (2 * thickness) - (2 * 2));
  } else if (f == 'f-4') {
    doormaterial = (w - (2 * 2) - (2 * 2)) * (h - (2 * 2) - (2 * 2));
  }


//hide on client req 11-07-23
//   let doormaterialcost = ((doormaterial / 1000000) * tdtmaterialcost);
//   gtotal = parseFloat(gtotal)+parseFloat(doormaterialcost);

//   tbody += `<tr>
//         <th>
//            Výpočet dverí skrinky
//            <div class="align-items-center d-flex gap11 pb-2">
//                 <span class="small_grey_door mt-3"></span>
//                 <span class="ml-2 mt-3">${h}mm</span>
//             </div>
//             <span class="">${shelflengthnew.toFixed(0)}mm</span>
//         </th>
//         <td>
//             <span class="calc_panel">Materiál dverí skrinky : </span>
//             <span class="calc_panel">${doormaterial.toFixed(2)}mm2</span>
//             <span class="calc_panel">${(doormaterial / 1000000).toFixed(2)}m</span><br><br>

//             <span class="calc_panel">Materiál dvierok skrinky: </span>
//             <span class="calc_panel">${doormaterialcost.toFixed(2)}€</span>
            
//         </td>
//     </tr>`;

  if (tb == 'tb-1') {
    dividingwallheight = h - bottomthickness;
  } else if (tb == 'tb-2') {
    dividingwallheight = h - topthickness;
  } else if (tb == 'tb-3') {
    dividingwallheight = h - bottomthickness - bottomthickness;
  } else if (tb == 'tb-4') {
    dividingwallheight = h - (2 * bottomthickness) - (2 * bottomthickness);
  }


  if (b == 'b-1') {
    cabinetbackmaterial = (w - 3) * (h - 3);
    dividingwallwidth1 = d - 3;
    //shelflength = d - (3 / 2);
  } else if (b == 'b-2') {
    cabinetbackmaterial = (w - 11) * (h - 11);
    dividingwallwidth1 = d - (3 / 100 * 50);
    shelflength = d - (3 / 2);
  } else if (b == 'b-3') {
    cabinetbackmaterial = (w - 11) * (h - 11);
    dividingwallwidth1 = d - (10 / 100 * 50);
    shelflength = d - (10 / 2);
  } else if (b == 'b-4') {
    cabinetbackmaterial = (w - (2 * thickness)) * (h - (2 * thickness));
    dividingwallwidth1 = d - backthickness;
    shelflength = d - backthickness;
  }

  let cabinetbackmaterialcost = ((cabinetbackmaterial / 1000000) * tdtmaterialcost);
  gtotal = parseFloat(gtotal)+parseFloat(cabinetbackmaterialcost);

  tbody += `<tr>
        <th>
           Výpočet zadnej strany skrinky
           <div class="align-items-center d-flex gap11 pb-2">
                <span class="small_grey_box_wide mt-3"></span>
                <span class="ml-2 mt-3">${h} mm</span>
            </div>
            <span class="">${w} mm</span>
        </th>
        <td>
            <span class="calc_panel">Materiál zadnej strany skrinky : </span>
            <span class="calc_panel">${cabinetbackmaterial.toFixed(2)}mm2</span>
            <span class="calc_panel">${(cabinetbackmaterial / 1000000).toFixed(2)}m2</span><br><br>

             <span class="calc_panel">Náklady na materiál zadnej strany skrinky :</span>
            <span class="calc_panel">${cabinetbackmaterialcost.toFixed(2)}€</span>
        </td>
    </tr>`;


  // let dividingwallmaterial = dividingwallwidth * dividingwallheight;
  // let dividingwallmaterialcost = ((dividingwallmaterial / 1000000) * tdtmaterialcost);
  // gtotal = parseFloat(gtotal)+parseFloat(dividingwallmaterialcost);
  // tbody += `<tr>
  //       <th>Výpočet deliacej steny skrinky(1)</th>
  //       <td>
  //           <span class="calc_panel">Materiál deliacej steny skrinky(1) : </span>
  //           <span class="calc_panel">${dividingwallmaterial.toFixed(2)}mm2</span>
  //           <span class="calc_panel">${(dividingwallmaterial / 1000000).toFixed(2)}m2</span><br><br>
  //           <span class="calc_panel">Náklady na materiál deliacej steny skrinky(1) : </span>
  //           <span class="calc_panel">${dividingwallmaterialcost.toFixed(2)}€</span>
            
  //       </td>
  //   </tr>`;

  let dividingwallmaterial1 = dividingwallwidth1 * dividingwallheight;

  let dividingwallmaterial1cost = ((dividingwallmaterial1 / 1000000) * tdtmaterialcost);
  let noofdwall = c-1;
  dividingwallmaterial1cost = dividingwallmaterial1cost*noofdwall;
  gtotal = parseFloat(gtotal)+parseFloat(dividingwallmaterial1cost);
  tbody += `<tr>
        <th>
            Výpočet deliacej steny skrinky
            <div class="align-items-center d-flex gap11">
                <span class="small_grey_box mt-3"></span>
                <span class="ml-2 mt-3">${dividingwallheight} mm</span>
                <span class="calc_panel">X${noofdwall}</span>
            </div>
            <span class=""></span>
        </th>
        <td>
            <span class="calc_panel">Materiál deliacej steny skrinky : </span>
            <span class="calc_panel">${dividingwallmaterial1.toFixed(2)}mm2</span>
            <span class="calc_panel">${(dividingwallmaterial1 / 1000000).toFixed(2)}m2</span><br><br>

            <span class="calc_panel">Materiál deliacej steny skrinky : </span>
            <span class="calc_panel">${dividingwallmaterial1cost.toFixed(2)}€</span>
            
        </td>
    </tr>`;



    //  let noshelves = 0;
    //  let noofrooms = 0;
    //  $('#table_tab_4final').find('.cab_tab_4').each(function(ind){
    //    let nos =  $(this).find('.set_inside_framer .cab_table_input').length;
    //    if(nos > 1){
    //       noshelves = parseInt(noshelves) + parseInt(nos-1)
    //    }
    //    noofrooms++; 
    // })

    // let noofrooms = $('#table_tab_4final').find('.cab_tab_4 .set_inside_framer').length
    // let noshelves = noofrooms-1; 


    let noshelves = 0;
    $('#table_tab_4final').find('.inside_table_tr').each(function(){
            let top = 0;
            let bottom = 0;
            let middle = 0
            var mArr = [];
            let lngth = $(this).find('.set_inside_framer').length;    
         if(lngth > 0){
         
            $(this).find('.set_inside_framer').each(function(j){
                if(j ==0 ){
                    if( $(this).find('div').hasClass('t4_bdr') ){
                       top = 1;
                    }
                }else if((parseInt(lngth)-1) == j){
                    if( $(this).find('div').hasClass('t4_bdr') ){
                       bottom = 1;
                    }
                }else{
                     if( $(this).find('div').hasClass('t4_bdr') ){
                        mArr.push($(this).attr('data-subsec'));
                    }
                }
                
            });

            let con = 0;
            let noncon = 0; 
            let check = 0; 
             let ex=0;
            if(mArr.length > 0){
                for(let i=0; i< mArr.length; i++){
                    if((parseInt(mArr[i])+parseInt(1)) == mArr[i+1]){
                       check =   mArr[i+1];
                       con++;
                    }else{
                        if(check !=  mArr[i]){
                            noncon++;
                        } 
                        
                    }
                    if(i==0){
                        if(top == 1 && mArr[i]==2){
                            ex++;
                        }
                    }
                    if((parseInt(i)+parseInt(1)) == mArr.length){
                        if(bottom == 1 && mArr[i] == parseInt(lngth-1) ){
                            ex++;
                        }
                    }
                }
            
             }
             conn=0;
             if(con > 0){
                 conn = parseInt(2*con) + parseInt(1);
             }
             let noshelf = ((lngth-1)+ex-top-bottom-(2*noncon)-conn);
             noshelves = parseInt(noshelves) + parseInt(noshelf);
         }  
    });

if(parseInt(noshelves) > 0){
    let smaterial = shelflength * shelflengthnew;  // here shelflength is shelfwidth
    let allsmaterial = smaterial * noshelves;
    let allsmaterialM = allsmaterial / 1000000;
    let allsmaterialMcost = (allsmaterialM * tdtmaterialcost);



    gtotal = parseFloat(gtotal)+parseFloat(allsmaterialMcost);
    //Cabinet shelf cost and material expenditure calculation
     tbody += `<tr>
        <th>
          Výpočet nákladov na policu a materiálu
            <div class="align-items-center d-flex gap11 pb-2">
                <span class="small_grey_box_wide mt-3"></span>
                <span class="ml-2 mt-3">${displaydepth}mm</span>
                <span class="calc_panel">X${noshelves}</span>
            </div>
            <span class="">${shelflength.toFixed(2)}mm</span><br>
        </th>
        <td>
            
            <span class="calc_panel">Materiál skrinky pre všetky police (x${noshelves})</span>
            <span class="calc_panel">${allsmaterial.toFixed(2)}mm2</span>
            <span class="calc_panel">${allsmaterialM.toFixed(2)}m2</span>
            <br><br>
            <span class="calc_panel">Náklady na materiál skrinky pre všetky police (x${noshelves})</span>
            <span class="calc_panel">${allsmaterialMcost.toFixed(2)}€</span>
        </td>
    </tr>`;
  // })
}



  // tbody += `<tr>
  //       <th>Shelves calculation</th>
  //       <td>
  //           <span class="calc_panel">Number of shelves : ${noshelves}</span><br><br>
  //           <span class="calc_panel">Shelve Length(Chrbát) : ${shelflength.toFixed(2)}mm</span><br><br>
  //           <span class="calc_panel">Shelf Width : ${shelfwidth.toFixed(0)}mm</span><br><br>
  //           <span class="calc_panel">shelf calculation : ${(d - backthickness).toFixed(2)}mm</span>
  //       </td>
  //   </tr>`;



    // Drawer calculation
     // let roomwidth = shelfwidth;

     let roomwidth = w/c;
     let alldrawerheight = 0;
     let nodrawer = 0;

      // tbody += `<tr> <th>Výpočty zásuviek</th><td>`;     

       //important note
       $('#table_tab_4final').find('.cab_tab_4 .set_inside_framer .t4_bdr .t4-drawer-height').each(function(ind){

            let lng = $(this).parents('tbody').find('.set_inside_framer').length;
            let sn = $(this).parents('.set_inside_framer').attr('data-subsec');
            
             let drawerh = $(this).text();
             if(f=='f-1'){
                roomwidth = roomwidth-(2*18);
             }else if(f=='f-3'){
                if(sn == 1){ //'top'
                   drawerh = parseInt(drawerh)+parseInt(8);
                }else if(sn == lng){  //'bottom'
                   drawerh = parseInt(drawerh)+parseInt(8);
                }else{ //'middle' 
                     drawerh = parseInt(drawerh)+parseInt(18);
                }
                
             }else if(f=='f-4'){
                if(sn == 1){ //'top'
                   drawerh = parseInt(drawerh)+parseInt(26);
                }else if(sn == lng){  //'bottom'
                   drawerh = parseInt(drawerh)+parseInt(16);
                }else{ //'middle' 
                     drawerh = parseInt(drawerh)+parseInt(26);
                }
             }

             // let drawerh = h;  //new change 20-0

              alldrawerheight = parseFloat(alldrawerheight)+parseFloat(drawerh);
             
             //drawer front & back  
             let fronbackmaterial = ((drawerh-50)*(roomwidth - 99));
             let fronbackmaterialm = fronbackmaterial/1000000;
             let fronbackmaterialcost = fronbackmaterialm*tdtmaterialcost;



               gtotal = parseFloat(gtotal)+parseFloat(fronbackmaterialcost);
                if(ind > 0){
                    tbody +=`<hr>`;
                }

//                      <div class="align-items-center d-flex gap11 pb-2">
//                             <span class="small_grey_door mt-3"></span>
//                             <span class="ml-2 mt-3">${drawerh-50} mm</span>
//                         </div>
//                     <span class="">${roomwidth-27-36} mm</span>

                let frontbackwidth = (w/c)-27-36;
                let bottomwidth = (w/c)-27-36-3;
                let sideswidth = (w/c)-50;

                tbody += `<tr>
                <th>
                    Výpočty zásuviek
                    <div class="align-items-center d-flex gap11 pb-2">
                            <span class="small_grey_box_wide mt-3"></span>
                            <span class="ml-2 mt-3">${drawerh}mm</span>
                    </div>
                    <span class="">${frontbackwidth.toFixed(2)}mm</span><br>

                    <div class="align-items-center d-flex gap11 pb-2">
                            <span class="small_grey_box_side mt-3"></span>
                            <span class="ml-2 mt-3">${drawerh}mm</span>
                        </div>
                    <span class="">${displaydepth}mm</span>

                    <div class="align-items-center d-flex gap11 pb-2">
                            <span class="small_grey_box_wide mt-3"></span>
                            <span class="ml-2 mt-3">${displaydepth}mm</span>
                        </div>
                    <span class="">${bottomwidth.toFixed(2)}mm</span>
                </th>
               <td> <h4>Zásuvka (${(ind+1)}) kalkulácia</h4>
                    <span class="calc_panel">Výpočet čielka zásuvky</span>
                    <span class="calc_panel">${fronbackmaterial.toFixed(2)}mm2</span>
                    <span class="calc_panel">${fronbackmaterialm.toFixed(2)}m2</span>
                    <br><br>
                    <span class="calc_panel">Cena Výpočet čielka zásuvky</span>
                    <span class="calc_panel">${(fronbackmaterialcost).toFixed(2)}€</span><br><br>
                `;


              //drawer sides
              let drawersidematerial = (d-100-50)*(drawerh-50);
              let drawersidematerialm = drawersidematerial/1000000;
              let drawersidematerialcost = drawersidematerialm*tdtmaterialcost;
              gtotal = parseFloat(gtotal)+parseFloat(drawersidematerialcost*2);
                tbody += `
                    <span class="calc_panel">Bočné strany zásuviek</span>
                    <span class="calc_panel">${drawersidematerial.toFixed(2)}mm2</span>
                    <span class="calc_panel">${drawersidematerialm.toFixed(2)}m2</span>
                    <br><br>
                    <span class="calc_panel">Cena Bočné strany zásuviek</span>
                    <span class="calc_panel">${(drawersidematerialcost * 2).toFixed(2)}€</span><br><br>
                `;

              //Drawer bottom ABS
              let drawerbottomterial = d-153;
              let drawerbottomterialm = drawerbottomterial/1000;
              let drawerbottomterialcost = drawerbottomterialm*absmaterialcost;
              gtotal = parseFloat(gtotal)+parseFloat(drawerbottomterialcost*2);
                tbody += `
                    <span class="calc_panel">ABS na spodnej časti zásuvky</span>
                    <span class="calc_panel">${drawerbottomterial.toFixed(2)}mm</span>
                    <span class="calc_panel">${drawerbottomterialm.toFixed(2)}m</span>
                    <br><br>
                    <span class="calc_panel">Cena ABS na spodnej časti zásuvky</span>
                    <span class="calc_panel">${(drawerbottomterialcost * 2).toFixed(2)}€</span><br><br>
                `;


 //hide on 12-07-23 (client told)
            //   //Drawer container top and bottom
            //   let drawertopbottommaterial = roomwidth*(d-100);
            //   let drawertopbottommaterialm = drawertopbottommaterial/1000000;
            //   let drawertopbottommaterialcost = drawertopbottommaterialm*tdtmaterialcost;
            //   gtotal = parseFloat(gtotal)+parseFloat(drawertopbottommaterialcost*2);
            //     tbody += `
            //         <span class="calc_panel">Vrchná a spodná časť zásuvkového kontajnera</span>
            //         <span class="calc_panel">${drawertopbottommaterial.toFixed(2)}mm2</span>
            //         <span class="calc_panel">${drawertopbottommaterialm.toFixed(2)}m2</span>
            //         <br><br>
            //         <span class="calc_panel">Cena Vrchná a spodná časť zásuvkového kontajnera</span>
            //         <span class="calc_panel">${(drawertopbottommaterialcost * 2).toFixed(2)}€</span><br><br>
            //     `;


            //  //Drawer container front and back ABS
            //   let fronbackabsmaterial = roomwidth;
            //   let fronbackabsmaterialm = fronbackabsmaterial/1000;
            //   let fronbackabsmaterialcost = fronbackabsmaterialm*absmaterialcost;
            //   gtotal = parseFloat(gtotal)+parseFloat(fronbackabsmaterialcost*2);
            //     tbody += `
            //         <span class="calc_panel">ABS vpredu a vzadu zásuvkového kontajnera</span>
            //         <span class="calc_panel">${fronbackabsmaterial.toFixed(2)}mm</span>
            //         <span class="calc_panel">${fronbackabsmaterialm.toFixed(2)}m</span>
            //         <br><br>
            //         <span class="calc_panel">Cena ABS vpredu a vzadu zásuvkového kontajnera</span>
            //         <span class="calc_panel">${(fronbackabsmaterialcost * 2).toFixed(2)}€</span></td>
            //     `;

                nodrawer++;
   
       });


    //04-05 

    //hide on 12-07-23 (client told)
    // if($('#table_tab_4final').find('.cab_tab_4 .set_inside_framer .t4-drawer-height').length > 0){

    //       //Drawer container side
    //       let alldrawersidematerial = (alldrawerheight-36)*(d-100);
    //       let alldrawersidematerialm = alldrawersidematerial/1000000;
    //       let alldrawersidematerialcost = alldrawersidematerialm*tdtmaterialcost;
    //       gtotal = parseFloat(gtotal)+parseFloat(alldrawersidematerialcost*2);
    //         tbody += `<tr> <th>Výpočty zásuviek</th><td><h4 class="pb-5">Výpočet zásuvkového kontajnera</h4>
    //             <span class="calc_panel">Boky zásuvkového kontajnera</span>
    //             <span class="calc_panel">${alldrawersidematerial.toFixed(2)}mm2</span>
    //             <span class="calc_panel">${alldrawersidematerialm.toFixed(2)}m2</span>
    //             <br><br>
    //             <span class="calc_panel">Cena Boky zásuvkového kontajnera</span>
    //             <span class="calc_panel">${(alldrawersidematerialcost * 2).toFixed(2)}€</span><br><br>
    //         `;  

    //         //Drawer container sides ABS
    //       let alldrawersideabsmaterial = (alldrawerheight-36)*2;
    //       let alldrawersideabsmaterialm = alldrawersideabsmaterial/1000;
    //       let alldrawersideabsmaterialcost = alldrawersideabsmaterialm*absmaterialcost;
    //       gtotal = parseFloat(gtotal)+parseFloat(alldrawersideabsmaterialcost*2);
    //         tbody += `
    //             <span class="calc_panel">ABS na bokoch zásuvkového kontajnera</span>
    //             <span class="calc_panel">${alldrawersideabsmaterial.toFixed(2)}mm</span>
    //             <span class="calc_panel">${alldrawersideabsmaterialm.toFixed(2)}m</span>
    //             <br><br>
    //             <span class="calc_panel">Cena ABS na bokoch zásuvkového kontajnera</span>
    //             <span class="calc_panel">${(alldrawersideabsmaterialcost * 2).toFixed(2)}€</span><br><br>
    //         `;  


    //         //Drawer container back
    //          let alldrawerbacksmaterial = (alldrawerheight-36)*2;
    //       let alldrawerbacksmaterialm = alldrawerbacksmaterial/1000;
    //       let alldrawerbacksmaterialcost = alldrawerbacksmaterialm*absmaterialcost;
    //       gtotal = parseFloat(gtotal)+parseFloat(alldrawerbacksmaterialcost);
    //         tbody += `
    //             <span class="calc_panel">Zadná časť zásuvkového kontajnera</span>
    //             <span class="calc_panel">${alldrawerbacksmaterial.toFixed(2)}mm2</span>
    //             <span class="calc_panel">${alldrawerbacksmaterialm.toFixed(2)}m2</span>
    //             <br><br>
    //             <span class="calc_panel">Cena Zadná časť zásuvkového kontajnera</span>
    //             <span class="calc_panel">${(alldrawerbacksmaterialcost).toFixed(2)}€</span></td>
    //         `;
    //     }

        let pushsystemcost = 6;   //15
        let nopushsystemdoor = 0;
        let withoutpushsystemdoor = 0;
        $('.tab-7-table').find('.cab_tab_4 .new-tr-parent .edit_t4_add-img2').each(function(index){
             if($(this).attr('data-push') == 'true'){
                 nopushsystemdoor++;
             }else{
                withoutpushsystemdoor++;
             }
        })       
        
        if(parseInt(nopushsystemdoor) > 0){
            let pushsystemcosttotal = nopushsystemdoor * pushsystemcost
            gtotal = parseFloat(gtotal)+parseFloat(pushsystemcosttotal);
            //Push system
            tbody += `<tr>
                <th>Výpočet tlačného systému</th>
                <td>
                    
                    <span class="calc_panel">Počet dverí systému push</span>
                    <span class="calc_panel">${nopushsystemdoor}</span>
                    <br><br>
                    <span class="calc_panel">Náklady na dvere systému push</span>
                    <span class="calc_panel">${pushsystemcosttotal.toFixed(2)}€</span>
                </td>
            </tr>`;
        }

        //let totalhanles = parseInt(withoutpushsystemdoor)+parseInt(nodrawer);
        if(parseInt(withoutpushsystemdoor) > 0){
            let doohandlecost = 6;  //9
            let totaldoorhandlecost = doohandlecost * withoutpushsystemdoor;
            gtotal = parseFloat(gtotal)+parseFloat(totaldoorhandlecost);
            tbody += `<tr>
                <th>
                Kľučky dverí
                <br>
                <img src="${baseurl}assests/web_assets/img_web/handle-img.png" >
                </th>
                <td>
                    
                    <span class="calc_panel">Počet kľučiek dverí</span>
                    <span class="calc_panel">${withoutpushsystemdoor}</span>
                    <br><br>
                    <span class="calc_panel">Náklady na kľučky dverí</span>
                    <span class="calc_panel">${totaldoorhandlecost.toFixed(2)}€</span>
                </td>
            </tr>`;
        }

        let nodrawerhndle = 0
        $(".tab-7-table").find('.bg-white.drawer-handle').each(function(ind){
          nodrawerhndle++;
        })
       
        if(nodrawerhndle > 0){
          let drawerhandlecost = 40;  //9
          let totaldoorhandlecost1 = drawerhandlecost * nodrawerhndle;
          gtotal = parseFloat(gtotal)+parseFloat(totaldoorhandlecost1);
          tbody += `<tr>
              <th>
              Rukoväte zásuviek
              <br>
              <img src="${baseurl}assests/web_assets/img_web/handle-img.png" >
              </th>
              <td>
                  
                  <span class="calc_panel">Počet rukovätí zásuviek</span>
                  <span class="calc_panel">${nodrawerhndle}</span>
                  <br><br>
                  <span class="calc_panel">Náklady na rukoväte zásuviek</span>
                  <span class="calc_panel">${totaldoorhandlecost1.toFixed(2)}€</span>
              </td>
          </tr>`;
      }

        
        let totaldoorheight = 0;
        $('#table_tab_4final .cab_table_input').each(function(){
            totaldoorheight = parseFloat(totaldoorheight) + parseFloat($(this).val());
        });


        // $('#table_tab_5').find('.part_frame .new-td-parents').each(function(ind){
        //     let doorlength = 0
        //     $(this).find('.new-tbl-parents .set_inside_framer').each(function(){
        //         let l = $(this).attr('data-val');
        //         doorlength = parseFloat(doorlength)+parseFloat(l);
        //     });

        // })


//Door section calcualtion
let doorinc = 1;        
let roomwidthfinal = w/c;
// tbody += `<tr> <th>Konečná kalkulácia materiálových nákladov a výdavkov</th> <td>`;

$('#table_tab_5').find('.part_frame .new-td-parents').each(function(ind){
    let doorlength = 0
    let lngth = $(this).find('.new-tbl-parents .set_inside_framer').length;  
    let door = $(this).attr('data-nosection');
    let doorsec = $(this).attr('data-nosection-1');
    $(this).find('.new-tbl-parents .set_inside_framer').each(function(index){
        let extra1=0;
        let ln = $(this).attr('data-val');
        let checkn1 = $(this).next('.set_inside_framer').length;
        if(checkn1 == 0){
              checkn1 = $(this).parents('.new-tr-parent').next('tr').length;
        }
       let checkp1 = $(this).prev('.set_inside_framer').length;
       if(checkp1 == 0){
            checkp1 = $(this).parents('.new-tr-parent').prev('tr').length;
       } 
      
       let tt1 = parseFloat(checkn1)+parseFloat(checkp1)
        if(door == 1){
             doorlength = parseFloat(doorlength)+parseFloat(ln);
            
        }else{
            if(f=='f-3'){
              extra1 = 8*tt1
            }
            else if(f=='f-4'){
                if(checkp1 == 0){
                    extra1 = parseInt(18)+parseInt(8*tt1)
                }else{
                   extra1 = 8*tt1
                }
               
            }
            
             let doorlength1 = parseFloat(ln)+parseFloat(extra1);
             let totaldoormaterial = doorlength1*roomwidthfinal;
             let totaldoormaterialm = totaldoormaterial/1000000;

             let totaldoormaterialmcost = totaldoormaterialm * tdtmaterialcost;
            
            gtotal = parseFloat(gtotal)+parseFloat(totaldoormaterialmcost);
             
            tbody +=  `<tr><th>
           Dverí - ${doorinc}
           <div class="align-items-center d-flex gap11 pb-2">
                <span class="small_grey_door mt-3"></span>
                <span class="ml-2 mt-3">${doorlength1} mm</span>
            </div>
            <span class="">${roomwidthfinal.toFixed(0)} mm</span>
        </th>
           <td> <span class="calc_panel">Počet dverí (${doorinc})</span>
            <br><br>
            <span class="calc_panel">Materiál dverí</span>
            <span class="calc_panel">${(totaldoormaterial).toFixed(2)}mm2</span>
            <span class="calc_panel">${(totaldoormaterialm).toFixed(2)}mm2</span>
            <br><br>
            <span class="calc_panel">Cena dverí</span>
            <span class="calc_panel">${totaldoormaterialmcost.toFixed(0)}€</span></td></tr>`;

            
             doorinc++;
        }
       
    });

   if(doorlength > 0 && door == 1){

    // let checkn = $(this).parents('.new-tr-parent').next('tr.set_inside_framer').length;
    // let checkp = $(this).parents('.new-tr-parent').prev('tr.set_inside_framer').length;

       let checkn = $(this).parents('.new-tr-parent').next('tr').length;
       let checkp = $(this).parents('.new-tr-parent').prev('tr').length;
       let tt = parseFloat(checkn)+parseFloat(checkp)
       let extra = 0;
       if(f=='f-1' || f=='f-2'){
          roomwidthfinal = parseFloat(roomwidthfinal)+parseFloat(2*thickness)
       }
       
       if(f=='f-3'){
           if(checkp == 0){
            
               extra = ((parseInt(doorsec))*18)-(10*tt);
           }else{
               
               extra = ((parseInt(doorsec)+parseInt(1))*18)-(10*tt);
           }
           
        }
        else if(f=='f-4'){
           extra = ((parseInt(doorsec)+parseInt(1))*18)-(10*tt);
        }
       
        doorlength = parseFloat(doorlength)+parseFloat(extra);

         let totaldoormaterial = doorlength*roomwidthfinal;
         let totaldoormaterialm = totaldoormaterial/1000000;
         let totaldoormaterialmcost1 = totaldoormaterialm * tdtmaterialcost;
        tbody += `<tr><th>
           Dverí - ${doorinc}
           <div class="align-items-center d-flex gap11 pb-2">
                <span class="small_grey_door mt-3"></span>
                <span class="ml-2 mt-3">${doorlength} mm</span>
            </div>
            <span class="">${roomwidthfinal.toFixed(0)} mm</span>
        </th>
        <td><span class="calc_panel">Počet dverí (${doorinc})</span>
        <br><br>
        <span class="calc_panel">Materiál dverí</span>
        <span class="calc_panel">${(totaldoormaterial).toFixed(2)}mm2</span>
        <span class="calc_panel">${(totaldoormaterialm).toFixed(2)}mm2</span>
        <br><br>
        <span class="calc_panel">Cena dverí</span>
        <span class="calc_panel">${totaldoormaterialmcost1.toFixed(2)}€</span></td></tr>`;
  
        doorinc++;

        gtotal = parseFloat(gtotal)+parseFloat(totaldoormaterialmcost1);
   }

})

//tbody += `</td></tr>`;


        //  let totaldoormaterial = shelfwidth*totaldoorheight;
        //  let totaldoormaterialm = totaldoormaterial/1000000;

        //  gtotal = parseFloat(gtotal)+parseFloat(totaldoormaterialm*tdtmaterialcost);

        //  let noofdoor = $('.tab-7-table').find('.cab_tab_4 .new-tr-parent .edit_t4_add-img2').length;

        // tbody += `<tr>
        //     <th>Konečná kalkulácia materiálových nákladov a výdavkov</th>
        //     <td>
                
        //         <span class="calc_panel">Počet dverí</span>
        //         <span class="calc_panel">${noofdoor}</span>
        //         <br><br>
        //         <span class="calc_panel">Materiál dverí</span>
        //         <span class="calc_panel">${(totaldoormaterial).toFixed(2)}mm2</span>
        //         <span class="calc_panel">${(totaldoormaterialm).toFixed(2)}mm2</span>
        //         <br><br>
        //         <span class="calc_panel">Cena dverí</span>
        //         <span class="calc_panel">${(totaldoormaterialm * tdtmaterialcost).toFixed(2)}€</span>
        //     </td>
        // </tr>`;

        let countShow = 0;
        $('#table_tab_5 .new-tr-parent .new-td-parents').each(function(ind){
            let checkl = $(this).find('.edit_t4_add-img2').length;
            let h=0
            if(checkl > 1){
                
                $(this).find('.set_inside_framer').each(function(i){
                    h = parseFloat(h)+parseFloat($(this).attr("data-val"))
                });

            }else{
            
                $(this).find('.set_inside_framer').each(function(i){
                    h = parseFloat(h)+parseFloat($(this).attr("data-val"))
                })
            }
            let hinges = 0;
            if (h < 600) {
                hinges = 2;
            } else if (h >= 600 && h < 1200) {
                hinges = 3;
            } else if (h >= 1200 && h < 1800) {
                hinges = 4;
            } else if (h >= 1800 && h <= 2750) {
                hinges = 5;
            }

            countShow = parseInt(countShow)+parseInt(hinges);

        })

    let hingescount = c*countShow;
    if(parseInt(hingescount) > 0){   
        let hingescost = hingescount*1.64;

        tbody += `<tr>
            <th> Pánty na dverách</th>
            <td>

                <span class="calc_panel">počet pántov dverí</span>
                <span class="calc_panel">${hingescount}</span>
                <br><br>
                <span class="calc_panel">cena pántov dverí</span>
                <span class="calc_panel">${hingescost.toFixed(2)}€</span>
            </td>
        </tr>`;
        gtotal = parseFloat(gtotal)+parseFloat(hingescost);
}
        

       
        tbody += `</td></tr>`;

        
      let gtotal_vat = gtotal*1.2;  
      $('.ttl_price_vat').text(gtotal_vat.toFixed(2) +' €') 
      $('.ttl_price').text(gtotal.toFixed(2) +' €') 
      $('#calc-tbl').html(tbody);


    }
//end calculation


    // function get_id(t_id) {
    //   // var dom = $("span #" + t_id).html();
    //   return $("#" + t_id).html();

    // }

    $(".ico").on("click", function () {
      $(".tab-7-table").find(".cab_tab_4").removeClass("active_t6");
    });

    // $(".ico").on("click", function () {
    //   alert("vgfhkj")
    //   // $(".ico").addClass("active_t6");
    //   // $(this).addClass("active_t66");
    // });

    // $('.tab_btn_3').on('click', function () {
    //   if ($('.table_6_click')==$(".select_div").is(':empty')) {
    //     alert('is empty');
    //   }
    //   else {
    //     alert('not empty');
    //   }
    // });

    // validation





    // tab 6
    // $("#btn_tab_66").prop("disabled", true);
    function Tab6_Images() {
      // var incre_2 = 3;
      // $(".addWoodImg").each(function () {
      //   var getLength = $(".addWoodImg").length;
      //   if (getLength > 3) {
      //     $("#btn_tab_66").prop("disabled", false);
      //   } else {
      //     $("#btn_tab_66").prop("disabled", true);
      //   }
      // });

    let check = 1;
    $('#gt_tb').find('.t4_bdr_black').each(function(ind){
         if($(this).css('background-image') == 'none'){
             check = 0
             return false;
         }
    });
    
    if(check == 1){
        $('#gt_tb').find('.bg-white').each(function(ind){
             if($(this).css('background-image') == 'none'){
                 check = 0
                 return false;
             }
        });
    }
    if(check == 1){
        $("#btn_tab_66").prop("disabled", false);
    }else{
        $("#btn_tab_66").prop("disabled", true);
    }


    }





// $('.selection_all_woodImgs input[type="checkbox"]').click(function(){
//    var ischeck = $('.selection_all_woodImgs input[type="checkbox"]').is(':checked');
//    if(ischeck == true){
//       $('.tab-8-table').find('.framer_selections').addClass('active_t6')
//    }else{
//      $('.tab-8-table').find('.framer_selections').removeClass('active_t6')
//    }
// })

// $(document).on('click','.selection_all_woodImgs#lk',function(){
   
// })

//============== Tooltip =============
$(function () {
  $('[data-toggle="tooltip"]').tooltip();
});

// push system

$(".push_btn").on("click", function () {
  if ($("#pushing_tab5").hasClass("active_t6")) {
    $(".frame1slide").toggleClass("menu-item-toggle");
  } else {
    //alert('fjds')
    $(".frame1slide").toggleClass("menu-item-toggle");
  }
});

// =================== NEWLY TAB JS ===================
$('input[name="box_cabinets"]:radio').on("click", function () {
  var getValue = $(this).val();
  var getText = $(this).find(".cus_text").text();

  switch (getValue) {
    case "Vložené":
      // $('#chelkaBx_1').clone(false).appendTo($('append_radioBx_1'));
      var getDom = $(".chelkaBx_1").html();
      $(".append_radioBx_1").html(getDom);
      $(".chelka_seltn").text(getValue);
      break;
    case "Naložené-1":
      var getValLength = getValue.slice(0, -2);
      var getDom = $(".chelkaBx_2").html();
      $(".append_radioBx_1").html(getDom);
      $(".chelka_seltn").text(getValLength);
      break;
    case "Naložené-2":
      var getValLength = getValue.slice(0, -2);
      var getDom = $(".chelkaBx_3").html();
      $(".append_radioBx_1").html(getDom);
      $(".chelka_seltn").text(getValLength);
      break;
    case "Naložené-3":
      var getValLength = getValue.slice(0, -2);
      var getDom = $(".chelkaBx_4").html();
      $(".append_radioBx_1").html(getDom);
      $(".chelka_seltn").text(getValLength);
      break;
    default:
      $(".chelka_seltn").html("");
  }
});

$('input[name="box_cabinets_1"]:radio').on("click", function () {
  var getValue = $(this).val();
  var getVrchVal = $(this).data("vrch");
  var getDnoVal = $(this).data("dno");

  switch (getValue) {
    case "val-1":
      var getDom = $(".topBttmBx_1").html();
      $(".append_radioBx_2").html(getDom);
      $(".vrench_seltn").text(getVrchVal);
      $(".back_seltn").text(getDnoVal);
      break;
    case "val-2":
      var getDom = $(".topBttmBx_2").html();
      $(".append_radioBx_2").html(getDom);
      $(".vrench_seltn").text(getVrchVal);
      $(".back_seltn").text(getDnoVal);
      break;
    case "val-3":
      var getDom = $(".topBttmBx_3").html();
      $(".append_radioBx_2").html(getDom);
      $(".vrench_seltn").text(getVrchVal);
      $(".back_seltn").text(getDnoVal);
      break;
    case "val-4":
      var getDom = $(".topBttmBx_4").html();
      $(".append_radioBx_2").html(getDom);
      $(".vrench_seltn").text(getVrchVal);
      $(".back_seltn").text(getDnoVal);
      break;
    default:
      $(".vrench_seltn").html("");
      $(".back_seltn").html("");
  }
});

$('input[name="box_cabinets_2"]:radio').on("click", function () {
  var getValue = $(this).val();
  var getBackVal = $(this).data("back");
  var getDiaVal = $(this).data("diameter");

  switch (getValue) {
    case "chrbat-1":
      var getDom = $(".backBx_1").html();
      $(".append_radioBx_3").html(getDom);
      $(".topBtm_seltn").text(getBackVal + " " + getDiaVal);
      break;
    case "chrbat-2":
      var getDom = $(".backBx_1").html();
      $(".append_radioBx_3").html(getDom);
      $(".topBtm_seltn").text(getBackVal + " " + getDiaVal);
      break;
    case "chrbat-3":
      var getDom = $(".backBx_1").html();
      $(".append_radioBx_3").html(getDom);
      $(".topBtm_seltn").text(getBackVal + " " + getDiaVal);
      break;
    case "chrbat-4":
      var getDom = $(".backBx_1").html();
      $(".append_radioBx_3").html(getDom);
      $(".topBtm_seltn").text(getBackVal + " " + getDiaVal);
      break;
    default:
      $(".topBtm_seltn").text("");
  }
});

// deepak append

// deepak append

// $(".handles-img").on("click", function () {
//   var getAttrb = $(this).attr("src");
//   $(".appending_cabinetHandles").html(
//     '<div class="card p-1 card-shadow handles_card"><div class="card-body p-0"><img src="' +
//       getAttrb +
//       '" alt="Handle_img" class="Dub_img lazy"></div></div>'
//   );
// });

function tab4btn_validate(){

    let check = 1;
    if($('.newly-added-tab .cuss_img').attr('src') == ''){
        $('#t4next-btn').prop('disabled',true);
        check = 0;
    }
    else if($('.newly-added-tab .abs_imggg').attr('src') == ''){
        $('#t4next-btn').prop('disabled',true);
        check = 0;
    }
    else if($('.newly-added-tab .spoja_img_f').attr('src') == ''){
        $('#t4next-btn').prop('disabled',true);
        check = 0;  
    }
    else if($('.newly-added-tab .appended_text-view').text() == ''){
        $('#t4next-btn').prop('disabled',true);
        check = 0;
    }

    else if($('.newly-added-tab .chelka_seltn').text() == ''){
        $('#t4next-btn').prop('disabled',true);
        check = 0;
    }

    else if($('.newly-added-tab .topBtm_seltn').text() == ''){
        $('#t4next-btn').prop('disabled',true);
        check = 0;   
    }

    else if($('.newly-added-tab .vrench_seltn').text() == ''){
        $('#t4next-btn').prop('disabled',true);
        check = 0;
       
    }
     if(check == 1){
        $('#t4next-btn').prop('disabled',false);
     }
     
}

$(".color_fill_ins").on("click", function () {
  var getAttrb = $(this).find("img").attr("src");
  var getTitle = $(this).find(".cab_interior_title").text();

  $(".cuss_img").attr("src", getAttrb);
  $(".cab_intrior").html(
    '<div class="card p-1 card-shadow"><img src="' +
    getAttrb +
    '" alt="Modal_Cabinet_interior" class="cab_int_img lazy"><h6 class="f9 font-weight-bolder my-1">' +
    getTitle +
    "</h6></div>"
  );

  //   $('.decor_in_ext_text').html('');
  tab4btn_validate();
});

$(".color_fill_abs").on("click", function () {
  var getAttrb = $(this).find("img").attr("src");
  var getTitle = $(this).find(".abs_intr_title").text();

  $(".abs_imggg").attr("src", getAttrb);
  $(".abs_intrior").html(
    '<div class="card p-1 card-shadow"><img src="' +
    getAttrb +
    '" alt="Modal_Cabinet_interior" class="cab_int_img lazy"><h6 class="f9 font-weight-bolder my-1">' +
    getTitle +
    "</h6></div>"
  );

  tab4btn_validate();
});

// deepak

$(".spoje_card").on("click", function () {
  let get_spoImg = $(this).find("img").attr("src");
  let get_spoTitle = $(this).find("img").data('img-details');
  $(".spoja_img_f").addClass('cus_img_increase');
  $(".spoja_img_f").attr("src", get_spoImg);
  $('.spoje-text').html(get_spoTitle);

  $(".append_radioBx_4").html(
    '<div class="card card-shadow small_card box_design_final_page mt-20"><div class="card-body p-1"><div class="center-content p-0"><img class="img-responsive img-fluid finalize_imged" src="' +
    get_spoImg +
    '" alt="fssad"></h3><h4 class="font-weight-bold text-center px-2 mt-1 spoje-text">' + get_spoTitle + '</h4></div></div></div>'
  );

  $('.cab_conne-text').html(get_spoTitle);
  $('.spo_card-right').addClass('rd-brder');

  tab4btn_validate();
});



//old 
$(".skrinky_card").on("click", function () {
  let get_mtText = $(this).find(".skrinky_mtarial").text();
  $(this).parent().addClass('rd-brder');
  // var textt = $(this).find("img").data('img-details-view');
  // $('.hideaftrappend').hide();
  // $('.hideviewtextaftrapppend').hide();
  $(this).toggleClass('rd-brder');

  // if ($(this).hasClass("rd-brder")) {
  //   $('.appended_text-view').append(textt + ', ');
  // } else {
  //   $('.appended_text-view').append('');
  // }
  $('.shrink-right-card').addClass('rd-brder');
  
});

$(".hotovo__btn").on("click", function () {
     $('.hideaftrappend').hide();
     $('.hideviewtextaftrapppend').hide();
     $('.appended_text-view').text('');
     let data = '';
     $('.skrinky_card.rd-brder').each(function(index){
        let txt = $(this).find('.cabSide_view_text').text()
        data = index==0?txt:data+', '+txt
     })
     $('.appended_text-view').text(data);
   
     tab4btn_validate();
});


// new code //
var currentcabid = 0;
function get_ses_id(objectRef) {
  $(".click_plus").removeClass("span_click");
  $(objectRef).addClass("span_click");

  var iddd = $(objectRef).parent().attr("id");

  currentcabid = $(objectRef).parents('.cab_tab_4').attr("data-iid")

  window.sessionStorage.setItem("this-framer-id", iddd);

  // alert(iddd);
}

function click_add_cls(objectRef) {
  // alert("dgd");

  $('.fin_img_add').attr('src',baseurl+'assests/web_assets/img_web/plus3.png');
  $(".img_bord").removeClass("fin_img_add");
  $(objectRef).addClass("fin_img_add");
  $('.fin_img_add').attr('src',baseurl+'assests/web_assets/img_web/plus4.png');
}

// $('.bg-transparent').click(function(){
//   $(this).addClass("fin_img_add")
// })

// $(".color_red_ico").on("click" ,function() {
// alert("ghsfhjf")
//   $(".click_plus").hasClass("img_bord").addClass("fin_img_add")
// })

// handles


//
            


//add new 26-05-2023
// function manage_handle_image(){
//      let ind1 = 100;
//      let ind2 = 200;
//      let ind3 = 300;
//      $('.tab-7-table').find('.cab_tab_4 .t4_bdr_black_1').removeClass('handle-left')
//      $('.tab-7-table').find('.cab_tab_4 .t4_bdr_black_1').removeClass('handle-right')
//      $('.tab-7-table').find('.cab_tab_4').each(function(index){
       
//         $(this).find('.new-tr-parent').each(function(ind){

//          let ht = `<div id="this-framer-id-${ind1}">
//             <span class="lft-hendle-top click_plus rotet_only" onclick="get_ses_id(this)">
//                 <img src="${baseurl}assests/web_assets/img_web/plus3.png" data-id="${ind1}" class="img_bord" onclick="click_add_cls(this)">
//             </span>

//             <span class="lft-hendle-bottom click_plus rotet_only" onclick="get_ses_id(this)">
//                 <img src="${baseurl}assests/web_assets/img_web/plus3.png" data-id="${ind1}"  class="img_bord" onclick="click_add_cls(this)">
//             </span>
//         </div>`;


//         let ht1 = `<div id="this-framer-id-${ind3}" >
//             <span class="open-dr-top-mid  bg-transparent click_plus rotet_only" onclick="get_ses_id(this)">
//                 <img src="${baseurl}assests/web_assets/img_web/plus3.png" data-id="${ind3}" class="img_bord" onclick="click_add_cls(this)">
//             </span>
//             <span class="open-dr-l-top  bg-transparent click_plus rotet_only" onclick="get_ses_id(this)">
//                 <img src="${baseurl}assests/web_assets/img_web/plus3.png" data-id="${ind3}" class="img_bord" onclick="click_add_cls(this)">
//             </span>
//             <span class="open-dr-l-mid  bg-transparent click_plus rotet_only" onclick="get_ses_id(this)">
//                 <img src="${baseurl}assests/web_assets/img_web/plus3.png" alt=""data-id="${ind3}" class="img_bord" onclick="click_add_cls(this)">
//             </span>
//             <span class="open-dr-bt-left  bg-transparent click_plus rotet_only" onclick="get_ses_id(this)">
//                 <img src="${baseurl}assests/web_assets/img_web/plus3.png" data-id="${ind3}" class="img_bord" onclick="click_add_cls(this)">
//             </span>
//             <span class="open-dr-bt-mid  bg-transparent click_plus rotet_only" onclick="get_ses_id(this)">
//                 <img src="${baseurl}assests/web_assets/img_web/plus3.png" data-id="${ind3}" class="img_bord" onclick="click_add_cls(this)">
//             </span>
//         </div>`

//             if($(this).find('.new-td-parents').attr('data-nosection') == 1 && $(this).find('.new-td-parents').attr('data-nosection-1') == 1){
//                 if($(this).find('.edit_t4_add-img2').attr('data-push') == 'false'){
//                      $(this).find('.t4_bdr_black_1').html(ht)
//                      ind1++;
//                 }
             
//             }else if($(this).find('.new-tbl-parents').length > 0){
//                $(this).find('.t4_bdr_black').each(function(){
                   
//                    if($(this).find('.edit_t4_add-img2').attr('data-push') == 'false'){

//                     let ht2 = `<div id="this-framer-id-${ind2}">
//                         <span class="lft-hendle-top click_plus rotet_only" onclick="get_ses_id(this)">
//                             <img src="${baseurl}assests/web_assets/img_web/plus3.png" data-id="${ind2}" class="img_bord" onclick="click_add_cls(this)">
//                         </span>
                        
//                         <span class="lft-hendle-bottom click_plus rotet_only" onclick="get_ses_id(this)">
//                             <img src="${baseurl}assests/web_assets/img_web/plus3.png" data-id="${ind2}"  class="img_bord" onclick="click_add_cls(this)">
//                         </span>
//                     </div>`;
//                      $(this).find('.t4_bdr_black_1').html(ht2);
//                      ind2++;
//                    }
                   
//                })
//             }else{
//                 if($(this).find('.edit_t4_add-img2').attr('data-push') == 'false'){

//                     $(this).find('.t4_bdr_black_1').html(ht1)
//                     ind3++;
//                 }
              
//             }
//         })
//     })
// }

function manage_handle_image(){
    var ind1 = 100;
    var ind3 = 300;
    $('.tab-7-table').find('.cab_tab_4 .t4_bdr_black_1').removeClass('handle-left')
    $('.tab-7-table').find('.cab_tab_4 .t4_bdr_black_1').removeClass('handle-right')
    $('.tab-7-table').find('.cab_tab_4').each(function(index){
        // let s = $(this).find('.manage-handle-cls').length
        let w = $(this).find('.bg-white').length
        let g = $(this).find('.bg-white-green').length 
        let tsec = parseInt(w)+parseInt(g) 
        
        $(this).find('.manage-handle-cls').each(function(ind){
            let cc = $(this).attr('data-scount'); 
            tsec = parseInt(tsec)+parseInt(cc)
        })
        let spanstyle = '';
        let spanstyle1 = '';
        let imgstyle = '';
        if(tsec == 6){
              spanstyle = 'top: -4px !important';
              spanstyle1 = 'bottom: 0px !important';
              imgstyle = 'height: 17px !important;';
        }

        $(this).find('.manage-handle-cls').each(function(ind){
            if($(this).find('.edit_t4_add-img2').attr('data-push') == 'false'){
            let cc1 = $(this).attr('data-scount'); 
            var ht = `<div id="this-framer-id-${ind1}">
            <span class="lft-hendle-top click_plus rotet_only" onclick="get_ses_id(this)" style="${spanstyle}">
                <img src="${baseurl}assests/web_assets/img_web/plus3.png" data-id="${ind1}" class="img_bord" onclick="click_add_cls(this)" style="${imgstyle}">
            </span>

            <span class="lft-hendle-bottom click_plus rotet_only" onclick="get_ses_id(this)" style="${spanstyle1}">
                <img src="${baseurl}assests/web_assets/img_web/plus3.png" data-id="${ind1}"  class="img_bord" onclick="click_add_cls(this)" style="${imgstyle}">
            </span>
        </div>`;


        var ht1 = `<div id="this-framer-id-${ind3}" >
            <span class="open-dr-top-mid  bg-transparent click_plus rotet_only" onclick="get_ses_id(this)">
                <img src="${baseurl}assests/web_assets/img_web/plus3.png" data-id="${ind3}" class="img_bord" onclick="click_add_cls(this)">
            </span>
            <span class="open-dr-l-top  bg-transparent click_plus rotet_only" onclick="get_ses_id(this)">
                <img src="${baseurl}assests/web_assets/img_web/plus3.png" data-id="${ind3}" class="img_bord" onclick="click_add_cls(this)">
            </span>
            <span class="open-dr-l-mid  bg-transparent click_plus rotet_only" onclick="get_ses_id(this)">
                <img src="${baseurl}assests/web_assets/img_web/plus3.png" alt=""data-id="${ind3}" class="img_bord" onclick="click_add_cls(this)">
            </span>
            <span class="open-dr-bt-left  bg-transparent click_plus rotet_only" onclick="get_ses_id(this)">
                <img src="${baseurl}assests/web_assets/img_web/plus3.png" data-id="${ind3}" class="img_bord" onclick="click_add_cls(this)">
            </span>
            <span class="open-dr-bt-mid  bg-transparent click_plus rotet_only" onclick="get_ses_id(this)">
                <img src="${baseurl}assests/web_assets/img_web/plus3.png" data-id="${ind3}" class="img_bord" onclick="click_add_cls(this)">
            </span>
        </div>`;


            if(cc1 == 1 && tsec < 4){
                $(this).find('.t4_bdr_black_1').html(ht1);
            }else if(cc1 > 1){
                $(this).find('.t4_bdr_black_1').html(ht1);
            }else{
                $(this).find('.t4_bdr_black_1').html(ht);
            }

            ind1++;
            ind3++;
            }
            
        });
        
    })

}




function calculate_shelf_height(){
    let lngth = $('#length_check_0').val();
    $('#table_tab_4final').find('.cab_tab_4').each(function(ind){
        let sec = $(this).find('.set_inside_framer').length;
        let oneheight = parseInt(lngth)/parseInt(sec)
        $(this).find('.set_inside_framer').each(function(ind2){
            $(this).find('.cab_table_input').val(oneheight.toFixed(0));

            $(this).find('.cab_table_input').addClass('tab4-input-'+ind);
            $(this).find('.cab_table_input').attr('data-cnt',sec);
            $(this).find('.cab_table_input').attr('data-id',ind);
        })
    })
}

 $(document).on('focusout',"#table_tab_4final .cab_table_input",function(){
    if($(this).val() < 200){
        $(this).val(200);
        $(this).trigger('keyup');
    }else{
        let did = $(this).attr('data-id');
        let checkl = $('#table_tab_4final .tab4-input-'+did).not('.addRefreshBtn').length;
    }
    

  });


//t4 keyup
$(document).on('keyup','#table_tab_4final .cab_table_input',function(){
    let lngth = $('#length_check_0').val();
    let id = $(this).attr('data-id');
    let cnt = $(this).attr('data-cnt');
    let val = $(this).val();

    if($(this).siblings('.refreshbtn-img').length <= 0){
        let addbtn = `<img src="${baseurl}assests/web_assets/img_web/rotet_img_1.png"  class="refreshbtn-img">`;
        $(this).before(addbtn);
        $(this).addClass('addRefreshBtn');
    }
    
    
    let changeval = 0;
    let nonchangeval = 0;
    let drawerval = 0;
    let inc = 0;
    $(this).parents('tbody').find('.set_inside_framer').each(function(){
        
        if($(this).find('.t4-drawer-height').length > 0){
            let thisval = $(this).find('.t4-drawer-height').text();
            drawerval = parseInt(drawerval)+parseInt(thisval);
        }else{
            let thisval = $(this).find('.cab_table_input').val()
            if($(this).find('.cab_table_input').hasClass('addRefreshBtn')){
                changeval = parseInt(changeval)+parseInt(thisval);
            }else{
                nonchangeval = parseInt(nonchangeval)+parseInt(thisval);
                inc++;
            }
            
        }
       
    })

    let onesec = (parseFloat(lngth)-parseFloat(changeval)-parseFloat(drawerval))/inc;

    if(onesec < 200 ){
        alert('Každá sekcia musí mať výšku min. 200 mm')
        let val = $(this).val();
        val = val.substring(0,val.length - 1);
        $(this).val(val);

    }else{
        if(inc <= 1){
            $('#table_tab_4final .tab4-input-'+id).not('.addRefreshBtn').prop('readonly',true)
        }
        $('#table_tab_4final .tab4-input-'+id).not('.addRefreshBtn').val(onesec.toFixed(0))
    }
    
    

})

$(document).on('click','.refreshbtn-img',function(){
   $(this).siblings('.cab_table_input').removeClass('addRefreshBtn');
   let id = $(this).siblings('input.cab_table_input').attr('data-id');
   $('#table_tab_4final .tab4-input-'+id).not('.addRefreshBtn').prop('readonly',false)
   $(this).remove();
});


$(".handles_add").on("click", function () {

   


  let get_handle_img = $(this).find("img").attr("src");
  let get_hndl_h = $(this).find(".hndle_1_xt").text();
  let get_hndl_t = $(this).find(".hndle_pp").text();
  var get_handle_img1 = baseurl + 'assests/web_assets/img_web/handle-img.png'

  var fid = window.sessionStorage.getItem("this-framer-id");

  //   $(".tab-7-table").find(".rotate").show()
  var ddd = fid.split("-");

  if ($(".span_click").hasClass("rotet_only") == true) {
    $("#" + fid)
      .find(".span_click")
      .append(
        '<a onclick="rotate_imagess(' +
        ddd[3] +
        ')" data-id="' +
        fid +
        '" class="rot rotate_images rotet_111"><img src="' + baseurl + 'assests/web_assets/img_web/rotet_img_1.png" alt="" style="height: 22px;"></a><a class="rot delet" onclick="delet_handle(' +
        ddd[3] +
        ')" data-id="' +
        fid +
        '"><img src="' + baseurl + 'assests/web_assets/img_web/delete_img_1.png" alt="" style="height: 22px;"></a>'
      );
  } else {
    $("#" + fid)
      .find(".span_click")
      .append(
        '<a class="rot delet" onclick="delet_handle(' +
        ddd[3] +
        ')" data-id="' +
        fid +
        '"><img src="' + baseurl + 'assests/web_assets/img_web/delete_img_1.png" alt="" style="height: 22px;"></a>'
      );
  }

  // ($(".click_plus").hasClass("span_click") == true)
  if ($(".click_plus").hasClass("span_click") == true) {
    $("#" + fid)
      .find(".img_bord")
      .hide();
    // $(".rotate_img").find(".fin_img_add").attr("src", get_handle_img)
    $(".fin_img_add").replaceWith(
      '<img src="' +
      get_handle_img1 +
      '" class="ico font21 img_bord_2 rotate_img">'
    );
    $(".img_bord").removeClass("fin_img_add");




    // $(".handles_append_show").append(`<div class="card" id="key-${fid}">
    //   <div class="card-body text-center p-2">
    //     <img src="${get_handle_img}" alt="fdgf" class="" style="height: 40px;">
    //     <div>
    //       <h5 class="font-weight-bolder mb-0">${get_hndl_h}</h5>
    //       <p>${get_hndl_t}</p>
    //     </div>
    //   </div>
    // </div>`);


    $(".handles_append_show_"+currentcabid+" .handles_append_show").append(`<div id="key-${fid}">
      <ul>

      <li class="card mb-1">
      <div class="card-body text-center p-2">
        <img src="${get_handle_img}" alt="fdgf" class="" style="height: 40px;">
        <div>
          <h6 class="font-weight-bolder mb-0">${get_hndl_h}</h6>
          <h6>${get_hndl_t}</h6>
        </div>
      </div>
      </li>

      </ul>
    </div>`);




     let numchecks = $(document).find(".tab-7-table").find('.img_bord_2').length;
     $(".appending_cabinetHandles").html(
      `<div class="handles_card"><p class="card-body p-0 text-dark">X${numchecks}</p></div>`
    );
    // $(".appending_cabinetHandles").html(
    //   '<div class="card p-1 card-shadow handles_card"><div class="card-body p-0"><img src="' +
    //   get_handle_img +
    //   '" alt="Handle_img" class="Dub_img lazy"></div></div>'
    // );
  } else {
    alert("Prosím vyberte umiestnenie");
  }

  $(".click_plus").removeClass("span_click");

   tab7_btn_valid();
});

// rotation function

var incr_1 = 1;
var incr_2 = 1;
var incr_3 = 1;

function rotate_imagess(dd) {
  if (incr_1 == 1) {
    $("#this-framer-id-" + dd)    //replce here set-plusoo-tr-
      .find(".img_bord_2")
      // .css({ transform: "rotate(130deg)" })
      .toggleClass("rotate_img");
  } else {
    $("#this-framer-id-" + dd)
      .find(".img_bord_2")
      .removeClass("rotate_img");
      // .css({ transform: "rotate(40deg)" });
  }
 
}





// function delet_handle(dd) {
//   if (incr_1 == 1) {
//     $("#set-plusoo-tr-" + dd)
//       .find(".img_bord_2")
//       .replaceWith(
//         '<img src="' + baseurl + 'assests/web_assets/img_web/plus_img_1.png" class="ico font21 img_bord" alt="" onclick="click_add_cls(this)">'
//       );

//     $("#set-plusoo-tr-" + dd).find(".img_bord").show();

//     $("#set-plusoo-tr-" + dd)
//       .find(".rotet_111")
//       .remove();
//     $("#set-plusoo-tr-" + dd)
//       .find(".delet")
//       .remove();

//     $("#key-set-plusoo-tr-" + dd).remove()

//     $(".handles_card").remove();
//   } else {
//     return false;
//   }
// }



function delet_handle(dd) {
  if (incr_1 == 1) {
    $("#this-framer-id-" + dd)
      .find(".img_bord_2")
      .replaceWith(
        '<img src="' + baseurl + 'assests/web_assets/img_web/plus3.png" class="ico font21 img_bord" alt="" onclick="click_add_cls(this)">'
      );

    $("#this-framer-id-" + dd).find(".img_bord").show();
    
    $("#this-framer-id-" + dd)
      .find(".rotet_111")
      .remove();
    $("#this-framer-id-" + dd)
      .find(".delet")
      .remove();

    // $("#key-set-plusoo-tr-" + dd).remove()
    $("#key-this-framer-id-" + dd).remove()

    $(".handles_card").remove();
  } else {
    return false;
  }
}




$(document).ready(function () {
  $(".radioOption-Item").click(function () {
    $(".v_hide").removeClass("V_hidden");
    $(".bullet_first ").removeClass("V_hidden");
  });

});


// jQuery(document).ready(function($) {
//   if (window.history && window.history.pushState) {
//     window.history.pushState('forward', null, './#forward');
//     $(window).on('popstate', function() {
//       alert('Back button was pressed.');
//     });
//   }
// });

// window.onload = function () {
//     if (window.history && history.pushState) {
//         if (history.state == null) {
//             history.pushState({'status': 'ongoing'}, null, null);
//         }
//         window.onpopstate = function(event) {
//             const endProgress = confirm("Are you sure you want to go back?");
//             if (endProgress) {
//                 window.onpopstate = null;
//                 history.back();
//             } else {
//                 history.pushState(null, null, null);
//             }
//         };  
//     }
// };

window.onbeforeunload = function () {
  return 'Are you sure? Your work will be lost.';
};

  // new 15-03-2023
  $('#tab_btn_4_5').click(function () {

      var html = $('#table_tab_4final').find('.tab4-clone-data').clone()
      $('#table_tab_5').html(html);

      $('#table_tab_5').find('.cab_table_input').prop('readonly',true);

      $(".part2_section_new").addClass("cabinet_first_section1")
      $("#table_tab_5 .part2_section_new").css('background-color','#fff');
      
      $(".part2_section").addClass("table-inner-section");
      $(".part1_section").addClass("table-inner-section");
      $(".part3_section").addClass("table-inner-section");
      $(".part4_section").addClass("table-inner-section");
      $(".part5_section").addClass("table-inner-section");
      $(".part6_section").addClass("table-inner-section");
     
      $('#table_tab_5').find('.t4_bdr').each(function(){
        $(this).find('.cross_t4_remove-img').remove();
      })

      $('#table_tab_5').find('.t4_bdr_green').each(function(){
        $(this).find('.cross_t4_remove-img').remove();
      })

     //$('#pushing_tab5').find('img').parent().html(`<img src=${ baseurl + 'assests/web_assets/img_web/add_icon2.png'} alt="" class="t4_add-img">`)
     $('#pushing_tab5').find('.t4_add-img').attr('src',baseurl+'assests/web_assets/img_web/add_icon2.png');
     $('#pushing_tab5 .t4_add-img').removeClass('t4_add-img').addClass('t4_add-img2');
     $('#pushing_tab5 .t4_bdr').removeClass('t4_bdr').addClass('bg-white');

      $('#pushing_tab5 .t4_add_green').remove();
      $('#pushing_tab5 .t4_bdr_green').removeClass('t4_bdr_green').addClass('bg-white-green');
     //$('#table_tab_5').find('.addRefreshBtn').removeClass('addRefreshBtn');
     $('#table_tab_5').find('.refreshbtn-img').remove();
     manage_borders();

    $("#table_tab_5").find(".part2_section").css("border","none");
    $("#table_tab_5").find(".part2_section .bg-white").css("border","2px solid #000");
    // 3
    $("#table_tab_5").find(".part1_section").css("border","none");
    $("#table_tab_5").find(".part1_section .bg-white").css("border","2px solid #000");
    // 4
    $("#table_tab_5").find(".part3_section").css("border","none");
    $("#table_tab_5").find(".part3_section .bg-white").css("border","2px solid #000");
    // 5
    $("#table_tab_5").find(".part5_section").css("border","none");
    $("#table_tab_5").find(".part5_section .bg-white").css("border","2px solid #000");
    // 6
    $("#table_tab_5").find(".part6_section").css("border","none");
    $("#table_tab_5").find(".part6_section .bg-white").css("border","2px solid #000");




    $("#table_tab_5").find(".part2_section").css("border","none");
    $("#table_tab_5").find(".part2_section .bg-white-green").css("border","2px solid #000");

    $("#table_tab_5").find(".part1_section").css("border","none");
    $("#table_tab_5").find(".part1_section .bg-white-green").css("border","2px solid #000");
    
    $("#table_tab_5").find(".part3_section").css("border","none");
    $("#table_tab_5").find(".part3_section .bg-white-green").css("border","2px solid #000");

    $("#table_tab_5").find(".part5_section").css("border","none");
    $("#table_tab_5").find(".part5_section .bg-white-green").css("border","2px solid #000");

    $("#table_tab_5").find(".part6_section").css("border","none");
    $("#table_tab_5").find(".part6_section .bg-white-green").css("border","2px solid #000");


    let cl = $('#table_tab_5').find('.t4_add-img2').length
    let cl1 = $('#table_tab_5').find('.bg-white').length;
    cl = parseInt(cl)+parseInt(cl1);
    if(cl == 0){
        $('#tab_btn_5_5').prop('disabled',false);
        $('#btn_tab_77').prop('disabled',false);
    }else{
        $('#tab_btn_5_5').prop('disabled',true);
        $('#btn_tab_77').prop('disabled',true);
    }



     $('#table_tab_5').find('.bg-white-green').each(function(){
         let thish = $(this).css('height') 
         let thisw = $(this).css('width') 

         thish = parseFloat(thish) + parseFloat(1)
         thisw = parseFloat(thisw) + parseFloat(2)
         $(this).css({'background-size': ' '+thisw+'px '+thish+'px '})
    })

     $('#table_tab_5').find('span.t4-btn').addClass('position-relative');
     $('#table_tab_5').find('div.bg-white').after(`<img src="${baseurl}assests/web_assets/img_web/add_icon2.png" alt="" class="drawer_modal_img" style="">`)

     $(".appending_cabinetHandles").html(`<div class="handles_card"><p class="card-body p-0 text-dark">X0</p></div>`);
     $('.appended_push').text('X0');
});

$(document).on('click', '.drawer_modal_img', function(){
  $('#wrawer_ps').prop('checked',false);
  $('#wrawer_handle').prop('checked',false);

  $('.bg-white').removeClass('bgw-active');
  $(this).siblings('.bg-white').addClass('bgw-active');
  $('#editdrawerModal').modal('show');

  if($('.bgw-active').hasClass('drawer-handle')){
    $('#wrawer_handle').prop('checked',true)
    
  }
  if($('.bgw-active').hasClass('drawer-push')){
    $('#wrawer_ps').prop('checked',true)
  }


})

$(document).on('click', '.drawer-btn-confirm', function(){
   $('.bgw-active').removeClass('drawer-handle');
   $('.bgw-active').removeClass('drawer-push');
   
   let check = 0;
   if($('#wrawer_handle').is(':checked')){
      $('.bgw-active').addClass('drawer-handle');
      check = 1;
   }

   if($('#wrawer_ps').is(':checked')){
      $('.bgw-active').addClass('drawer-push');
      check = 1;
   }

    $('.bgw-active').siblings('.drawer_modal_img').attr('src',baseurl+'assests/web_assets/img_web/edit-pencil.png');
    $('.bgw-active').siblings('.drawer_modal_img').addClass('drawer_modal_img_edit')
     if(check == 0){
        alert('Zvoľte jednu možnosť');
        return false;
     }else{
       $('#editdrawerModal').modal('hide');
     }
     if($('.bgw-active').hasClass('drawer-push')){
        $('.bgw-active img').hide()
    }else{
       $('.bgw-active img').show() 
    }
    let doorbtncount = 0;
    let checkcount = $('#pushing_tab5').find('.new-tr-parent').length;
    let checkcount1 = $('#pushing_tab5').find('.bg-white').length;
    checkcount = parseInt(checkcount)+parseInt(checkcount1)
    $('#pushing_tab5').find('.new-tr-parent').each(function(){
        if($(this).find('.edit_t4_add-img2').length > 0){
            doorbtncount++;
        }
    })
    $('#pushing_tab5').find('.bg-white').each(function(){
        if($(this).siblings('.drawer_modal_img_edit').length > 0){
            doorbtncount++;
        }
    })
    if(doorbtncount >= checkcount){
        $('#tab_btn_5_5').prop('disabled',false)
    }
    push_system_count();
})


$(document).on('click', '#wrawer_handle', function(){
   if($('#wrawer_handle').is(':checked')){
      $('#wrawer_ps').prop('checked',false)
   }
})

$(document).on('click', '#wrawer_ps', function(){
   if($('#wrawer_ps').is(':checked')){
      $('#wrawer_handle').prop('checked',false)
   }
})


$(document).on('click', '.arrow-btn', function(){
    $('.arrow-btn').removeClass('btn-orange');
    $(this).addClass('btn-orange');
})


$(document).on('click','#table_tab_5 .t4_add-img2',function(){



      $('#editDoorModal').modal('show');

      $('#door-section-count').val('')

      $('.check-right').prop('checked',false)
      $('.arrow-btn').removeClass('btn-orange');
      $('.new-td-parents').removeClass('active_section')
      $('.new-tbl-parents').removeClass('hide_section')


    $(this).parents('.new-td-parents').addClass('active_section')
    $(this).parents('.new-tbl-parents').addClass('hide_section')
    let length = $(this).parents('.new-tbl-parents').find('.set_inside_framer').length;
   
    $('.door-section-cls-main').hide();

    let checkl = length;
    if(length == 1){
        length = 2;
    }


    $('#door-section-cls-'+length).show();
    $('#door-section-cls-'+length).find('img').css('filter','brightness(0.5)');

    // let sec = checkl;
    // if(sec > 1){
    //      $('#door-section-cls-'+sec).find('img').css('filter','none');
    // }else{
    //      sec = $('#editDoorModal .door-section-cls').parents('div').siblings('div.right-bdr').find('img').attr('data-section');
    //      $('#door-section-cls-'+sec).find('img').css('filter','none');
    // }

    $('#door-section-cls-'+length).find('.right-bdr').show()
    if(checkl != length){
        $('#door-section-cls-'+length).find('.right-bdr').hide()
    }

    // $('#door-section-cls-'+length).find('.door-section-cls:eq(0)').show()
    // if(checkl != length){
    //     $('#door-section-cls-'+length).find('.door-section-cls:eq(0)').hide()
    // }
})

$(document).on('click','#table_tab_5 .edit_t4_add-img2',function(){
    $('#table_tab_5').find('.active_section').removeClass('active_section');
     $('#table_tab_5').find('.edit_active_section').removeClass('edit_active_section');

    $('#editDoorModal').modal('show');
    $('.left-arrow-btn').removeClass('btn-orange');
    $('.right-arrow-btn').removeClass('btn-orange');


    $(this).parents('.new-td-parents').addClass('active_section edit_active_section');
    let length = $(this).attr('data-length');

    let checkl = $(this).parents('.t4_bdr_black').siblings('.new-tbl-parents').find('.set_inside_framer').length;
    if(checkl == 0){
        checkl = $(this).parents('.new-tbl-parents').find('.set_inside_framer').length;
    }
   
    if(length == 1){
        length = 2;
    }
    $('.door-section-cls-main').hide();
    //let sec = checkl;
    let sec = $(this).attr('data-slength');
    $('#door-section-count').val(sec);
    if(sec > 1){
        $('#door-section-cls-'+length).find('.right-bdr img').css('filter','none');
        $('#door-section-cls-'+length).not('.right-bdr').find('img:eq(1)').css('filter','brightness(0.5)');
    }else{
         //sec = $('#editDoorModal .door-section-cls').parents('div').siblings('div.right-bdr').find('img').attr('data-section');
         $('#door-section-cls-'+length).not('.right-bdr').find('img:eq(1)').css('filter','none');
         $('#door-section-cls-'+length).find('.right-bdr img').css('filter','brightness(0.5)');
    }


    $('#door-section-cls-'+length).show();

    $('#door-section-cls-'+length).find('.right-bdr').show();

    if(checkl != length){
        $('#door-section-cls-'+length).find('.right-bdr').hide()
    }

    // $('#door-section-cls-'+length).find('.door-section-cls:eq(0)').show()
    // if(checkl != length){
    //     $('#door-section-cls-'+length).find('.door-section-cls:eq(0)').hide()
    // }

    let push = $(this).attr('data-push');
    let check = $(this).attr('data-check');

    push = push=='true'?true:false;

    $('#door-section-cls-'+length).find('.check-right').prop('checked',push);
    $('#door-section-cls-'+length).find('.'+check+'-arrow-btn').addClass('btn-orange');
  
})

// $(document).on('click','.door-section-cls',function(){
//     let sec = $(this).attr('data-section');
//     $('#door-section-count').val(sec);
// });


function push_system_count(){
    let nopushsystemdoor = 0;
    $('#table_tab_5').find('.cab_tab_4 .new-tr-parent .edit_t4_add-img2').each(function(index){
         if($(this).attr('data-push') == 'true'){
             nopushsystemdoor++;
         }
    }) 

    //let dpush = $('.bg-white.drawer-push').length;
    let dpush = $('#table_tab_5').find('.bg-white.drawer-push').length;
    nopushsystemdoor = parseInt(nopushsystemdoor)+parseInt(dpush);

    $('.appended_push').text('X'+nopushsystemdoor);
}


$('#editDoorModal .door-section-cls').click(function(){
    let sec = $(this).attr('data-section');
    $('#door-section-count').val(sec);
    if(sec > 1){
       
        $('#door-section-cls-'+sec).find('.right-bdr img').css('filter','none');
        $('#door-section-cls-'+sec).not('.right-bdr').find('img:eq(1)').css('filter','brightness(0.5)');
    }else{
         sec = $(this).parents('div').siblings('div.right-bdr').find('img').attr('data-section');
         $('#door-section-cls-'+sec).not('.right-bdr').find('img:eq(1)').css('filter','none');
         $('#door-section-cls-'+sec).find('.right-bdr img').css('filter','brightness(0.5)');
    }
        
})

$('#editDoorModal .card-shadow').click(function(){
  if($(this).find('.check-right').is(':checked')){
     $(this).find('.check-right').prop('checked',false)
  }else{
     $(this).find('.check-right').prop('checked',true)
  }

})

$('#editDoorModal .card-shadow').find('.check-right').click(function(){
  if($(this).is(':checked')){
     $(this).prop('checked',false)
  }else{
     $(this).prop('checked',true)
  }

})



$(document).on('click','.door-section-confirm',function(){
    let doorbtncount = 0;
    let length = $('#table_tab_5').find('.active_section .new-tbl-parents').find('.set_inside_framer').length;
    let push = false;
    let check = '';
    let checkl = length;
    
    
    if(length == 1){
        length = 2;
    }
    
    let slength = $('#door-section-count').val();
    
    if($('#door-section-count').val() == '' || $('#door-section-count').val() == 0){
        alert('Prosím vyberte typ dverí') //door select
        return false;
    }

    if($('#door-section-cls-'+length).find('.arrow-btn').hasClass('btn-orange') == false){
        alert('Prosím zvoľte smer otvárania dverí')
        return false;
    }

    if($('#door-section-cls-'+length).find('.check-right').is(':checked')){
        push = true;

        // let numpush = $('.tab5_html').find('.appended_push').text();
        // if(! $.isNumeric(numpush)){
        //     numpush = 0;
        // }
        // numpush = parseInt(checkl)+parseInt(numpush);
        
    }



    // push =  $('#door-section-cls-'+length).find('.check-right').val();
    check = $('#door-section-cls-'+length).find('.btn-orange').attr('data-check');

    if($('#table_tab_5').find('.active_section').hasClass('edit_active_section')){
        $('#table_tab_5').find('.active_section .new-tbl-parents').show();
        $('#table_tab_5').find('.active_section .new-tbl-parents').addClass('hide_section');
        $('#table_tab_5').find('.active_section .t4_bdr_black').remove(); 
    }
    // let sec = $(this).attr('data-section');
    let sec = $('#door-section-count').val();
    
    $('#table_tab_5').find('.active_section').attr('data-nosection',sec);
    $('#table_tab_5').find('.active_section').attr('data-nosection-1',checkl);
    
    let door = '';
    let ssl = 1;
    if(slength != checkl){
       ssl = checkl;
    }
    if(check == 'right'){  //left
         door = `<div class="manage-handle-cls align-items-start d-flex-center-relative flex-column t4_bdr_black handle-min-height-left" data-scount="${ssl}">
            <span class="handle-left t4_bdr_black_1"></span>
            <span class="edit-right">
                <img data-push="${push}" data-check="${check}" data-slength="${slength}" data-length="${length}" class="edit_t4_add-img2" src=${ baseurl + 'assests/web_assets/img_web/edit-pencil.png'}>
            </span>
        </div>`;
    }else{
        door =  `<div class="manage-handle-cls align-items-end d-flex-center-relative flex-column t4_bdr_black handle-min-height-right" data-scount="${ssl}">
            <span class="handle-left t4_bdr_black_1"></span>
            <span class="edit-left">
              <img data-push="${push}" data-check="${check}" data-slength="${slength}" data-length="${length}" class="edit_t4_add-img2" src=${ baseurl + 'assests/web_assets/img_web/edit-pencil.png'}>
            </span>
        </div>`;
    }
   
   let h = $('#table_tab_5').find('.active_section').height();
   if(sec == 1){
      $('#table_tab_5').find('.active_section .hide_section').after(door)
      $('#table_tab_5').find('.active_section').css('height',h)
      $('#table_tab_5').find('.hide_section').hide();
   }else{
      $('#table_tab_5').find('.active_section .table-inner-section').html(door);
      $('#table_tab_5').find('.active_section .set_inside_framer').css({"border-left":"none","border-right":"none","border-top":"none","border-bottom":"none"}) 
   }

   $('#table_tab_5').find('.new-td-parents').removeClass('active_section');
   $('#table_tab_5').find('.new-tbl-parents').removeClass('hide_section');



   $('#editDoorModal').modal('hide');

    let checkcount = $('#pushing_tab5').find('.new-tr-parent').length;
    let checkcount1 = $('#pushing_tab5').find('.bg-white').length;
    checkcount = parseInt(checkcount)+parseInt(checkcount1)
    $('#pushing_tab5').find('.new-tr-parent').each(function(){
        if($(this).find('.edit_t4_add-img2').length > 0){
            doorbtncount++;
        }
    })
    $('#pushing_tab5').find('.bg-white').each(function(){
        if($(this).siblings('.drawer_modal_img_edit').length > 0){
            doorbtncount++;
        }
    })
    
    if(doorbtncount >= checkcount){
        $('#tab_btn_5_5').prop('disabled',false)
    }

    push_system_count();
})
  //
  function manage_borders(){
  $('#pushing_tab5').find('.part_frame').each(function(index){
      let inc = 0;
      var foo = [];
      var check = 0;
      $(this).find('.set_inside_framer').each(function(ind){
          if($(this).find('.t4-btn div').hasClass('bg-white') == false && $(this).find('.t4-btn div').hasClass('bg-white-green') == false ){
              $(this).addClass('clss-'+inc);
              $(this).attr('data-inc',inc);
              let inn = $(this).find('.cab_table_input').val()
              $(this).attr('data-val',inn)
              if ($.inArray('clss-'+inc, foo) == -1) 
              {
                  foo.push('clss-'+inc);
                  check++;
              }
          }else{
              inc++;
          }   
      })
      for(let n=0;n<6;n++){
          var total = $(this).find(".clss-"+n).length;
          $(this).find(".clss-"+n).wrapAll('<tr class="new-tr-parent"><td class="new-td-parents"><table class="new-tbl-parents widthHeight100"></table></td></tr>');
          $(this).find(".clss-"+n).each(function(indd){
              $(this).css({"border-left":"3px solid red","border-right":"3px solid red"}) 
              if(indd === 0){
                  $(this).css({"border-top":"3px solid red"});
              }
              if(indd === total - 1) {
                  $(this).css({"border-bottom":"3px solid red"}) 
              }
          })
      }

  })

  }

// PUSH SYSTEM CHECKBOXES ONCLICK (NITIN) - 31/03/2023

// $('.check-right').change(function () {
//   if ($(this).prop('checked')) {
//     $('.push_system_data').html('bez push systému');
//   }
//   else {
//     $('.push_system_data').html('');
//   }
// });

$('#Nakupujem_na_firmu_1').on('click', function () {
  var ulica = $('.address').val()
  var mesto = $('.city-name').val()
  var psc = $('.zip-code').val()
  if ($("#Nakupujem_na_firmu_1").prop('checked') == true) {
    $('.address-1').val(ulica)
    $('.city-name-1').val(mesto)
    $('.zip-code-1').val(psc)
  } else {
    $('.address-1').val('')
    $('.city-name-1').val('')
    $('.zip-code-1').val('')
  }
   $('.padding_tab_10 .tab_10_input').trigger('keyup');
});

$('#Nakupujem_na_firmu').change(function () {
  if (this.checked) {
    $('#check_hide_show_edge').show();
  } else {
    $('#check_hide_show_edge').hide();
  }
   $('.padding_tab_10 .tab_10_input').trigger('keyup');
})


$(document).on('keyup','.padding_tab_10 .tab_10_input',function(){
    let check = 1;
    $('.padding_tab_10').find('.tab_10_input').not('#check_hide_show_edge .tab_10_input').each(function(ind){
        if($(this).val() == ''){
            check = 0;
            return false;
        }
    });

    if($('#Nakupujem_na_firmu').is(':checked') == true && check == 1){
        $('#check_hide_show_edge').find('.tab_10_input').each(function(ind){
            if($(this).val() == ''){
                check = 0;
                return false;
            }
        });
    }


    if(check == 1){
        $('.tab10-btn-1').prop('disabled',false)
    }else{
      $('.tab10-btn-1').prop('disabled',true)   
    }

})