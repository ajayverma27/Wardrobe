// $('form').keydown(function(objEvent) {
//     if (objEvent.keyCode == 9 || objEvent.keyCode == 13 || objEvent.keyCode == 32) {  
//         objEvent.preventDefault(); 
//     }
// })

// $(document).ready(function () {
//     $("#Built_in").click(function () {
//         $(".three_ctg").hide();
//         $(".four_opt").show();
//         $(".parameter_1").hide();
//     });
//     $("#plan_type_A").click(function () {
//         $(".three_ctg").hide();
//         $(".four_opt").hide();
//         $(".parameter_1").show();
//     });
// });

var baseurl = $('#base-url').val();

// =============== MULTISTEP FORM =============================
initMultiStepForm();
var incg = 1000;
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
    //  console.warn(
    //      "Error, number of steps in progress bar do not match number of pages"
    //  );
    // }

    document.documentElement.style.setProperty("--stepNumber", stepsNumber);

    let current = 1;

    for (let i = 0; i < nextButtons.length; i++) {
        nextButtons[i].addEventListener("click", function (event) {
            event.preventDefault();

            inputsValid = validateInputs(this);
            // inputsValid = true;

            if (inputsValid) {
                slidePage.style.marginLeft = `-${(100 / stepsNumber) * current
                    }%`;
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
            slidePage.style.marginLeft = `-${(100 / stepsNumber) * (current - 2)
                }%`;
            bullet[current - 1].classList.remove("active");
            // progressCheck[current - 2].classList.remove("active");
            progressText[current - 2].classList.remove("active");
            current -= 1;
        });
    }
    // submitBtn.addEventListener("click", function() {
    //  bullet[current - 1].classList.add("active");
    //  progressCheck[current - 1].classList.add("active");
    //  progressText[current - 1].classList.add("active");
    //  current += 1;
    //  setTimeout(function() {
    //      alert("Your Form Successfully Signed up");
    //      location.reload();
    //  }, 800);
    // });

    function validateInputs(ths) {
        let inputsValid = true;

        const inputs =
            ths.parentElement.parentElement.querySelectorAll("input");
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

$(document).on('click','.cust_width',function () {
    $('.cust_width').removeClass('box_select');
    $(this).addClass('box_select');
    var setval = $(this).attr('data-id');
    $("#for-inside-td").val(setval);
    
});

$(document).on('click','.table_6_click', function () {
    $('.table_6_click').removeClass('active_t6');
    $(this).addClass('active_t6');
});

$('.select_imgs').click(function () {
     var img = $(this).attr('src');
     var setval =  $("#for-inside-td").val();
    if($('#check-div-'+setval).is(":checked")){
        //alert('1')
        $('.box_select_inside_1').css({"background-image": "url(" + img + ")", "background-size": "100% 100%"})
    }else{
        //alert('2')
        $('.box_select').html('<img class="newImageAdds" src="' + img + '">');
    }
    //alert('3')
    countnewImage();
})



function countnewImage() {
    $('.newImageAdds').each(function () {
        getClassLength = $('.newImageAdds').length;
        if (getClassLength >= 4) {
            $('#tab_id_btn4').prop('disabled', false);
        }
        else {
            $('#tab_id_btn4').prop('disabled', false);
        }
    });
}

$('.inside_clr').click(function () {
    var img = $(this).attr('src');
    // alert(img);
    $('.bg_image_ch').css("background-image", "url(" + img + ")");
})

$('.inside_clr2').click(function () {
    var img = $(this).attr('src');
    $('.bg_image_ch2').css("background-image", "url(" + img + ")");
})


// ================== Changing Head text on btn click JS ================
$('#btn_second').click(function(){
    var w = $('#length_check_2').val();
   
    var html = '';
    for(var i=1;i<=5;i++){
        var check = i==1?'checked':'';
        var p = w/i;
       html += '<input type="radio" name="radio_img" id="radio-img-'+i+'" value="imge_'+i+'" '+check+'>\
        <label for="radio-img-'+i+'" class="col lbl_sides font-weight-bolder mb-0">\
        '+i+' časť &nbsp;<small class="font14">'+p.toFixed(2)+' mm</small></label>';
    }
    $('#table_1').find('.added_sirka_value').text(w);
    
    $('.pocet-priestorov').html(html)
    $('.wizard-form-text').html('Rozdeľte vstavanú skriňu na priestory <i class="fas fa-question-circle ml-1 red-tooltip" data-toggle="tooltip" data-placement="top" title="V prvom kroku si vyberte pôdorys vstavanej skrine podľa toho, kde a ako bude umiestnená."></i>');
})

$('#tab_btn_3').click(function(){
   
  var l = $('#length_check_3').val();
  var w = $('#length_check_2').val();
  $('.vertical_arrow span').text(l+' mm');

  var count = $('#radio-img-count').val();
  var ht = '';
  var ins = '';
  var p = w/count;
  p=p.toFixed(0);
  for(var i=0;i<count;i++){
        var left = i==0?'border-left':'';
        var cc = i+1;
        var cls = i==0?" box_select":'';
        ht += '<td><div class="cust_width'+cls+'" id="divider'+cc+'" data-id="'+cc+'"></div><div class="form-check fs_reduce"><input type="checkbox" class="form-check-input added_table_1" data-id="divider'+cc+'" id="check-div-'+cc+'"><label class="form-check-label" for="divider'+cc+'">Delen</label></div></td>';
        ins +=`<td>
            <div class="tab_4_arrow_table ${left} border-right">
                 <span>${p}mm</span> <br>
                 <span> <---------> </span>
            </div>
         </td>`;
  }
    $('#tab_4_top_table_tr').html(ins)
    $('#tab4-inside-tr').html(ht)
     
    $('.wizard-form-text').html('Vyskladajte vnútro skrine <i class="fas fa-question-circle ml-1 red-tooltip" data-toggle="tooltip" data-placement="top" title="V prvom kroku si vyberte pôdorys vstavanej skrine podľa toho, kde a ako bude umiestnená."></i>');
})


// $('#tab_btn_3').on('click', function () {
  
//   var count = $('#count-priestorov').val();
//   var ht = '';
//   for(var i=0;i<count;i++){
//         var cc = i+1;
//         var cls = i==0?" box_select":'';
//         ht += '<td><div class="cust_width'+cls+'" id="divider'+cc+'" data-id="'+cc+'"></div><div class="form-check fs_reduce"><input type="checkbox" class="form-check-input added_table_1" data-id="divider'+cc+'" id="check-div-'+cc+'"><label class="form-check-label" for="divider'+cc+'">Delen</label></div></td>';
//   }
//   $('#tab4-inside-tr').html(ht)
  
// });



// $('#tab_id_btn4').click(function(){
//       var count = $('#radio-img-count').val();
//       var ins = ''
//       for(var i=0;i<count;i++){
//           ins +=`<td>
//                 <div class="cust_width cust_border_0 tab5 bg_image100 box_select">
//                     <img src="${baseurl}assests/web_assets/img_web/interior_img_1.png" class="img-fluid lazy" alt="">
//                 </div>
//             </td>`;
//       }
//       $('#table_num5_tr').html(ins);
//     $('.wizard-form-text').html('Zvoľte dekor pre interiér skrine <i class="fas fa-question-circle ml-1 red-tooltip" data-toggle="tooltip" data-placement="top" title="V prvom kroku si vyberte pôdorys vstavanej skrine podľa toho, kde a ako bude umiestnená."></i>');
// })

$('#tab_5_btn').click(function(){
     
      $('.get_table5Dom').find('.cust_width').removeClass('box_select'); 
      var count = $('#radio-img-count').val();
      var ins = ''
      for(var i=0;i<count;i++){
          var cls = i==0?'active_t6':'';
          ins +=`<td>
                    <div class="table_6_click ${cls}"> </div>
                </td>`;
      }
      $('#table_tab_6_tr').html(ins);
      $('.wizard-form-text').html('Zvoľte dvere pre jednotlivé časti <i class="fas fa-question-circle ml-1 red-tooltip" data-toggle="tooltip" data-placement="top" title="V prvom kroku si vyberte pôdorys vstavanej skrine podľa toho, kde a ako bude umiestnená."></i>');
 
    var getDOm = $('.get_table5Dom').html();
    $('.get_table5Dom').clone(true).appendTo('.dom_table6').find('.box_select').removeClass('box_select')
    $('.final_image_col_table_5').html(getDOm).find('.box_select').removeClass('box_select');
    

})

// $('#tab_5_btn').on('click', function () {
//     var getDOm = $('.get_table5Dom').html();
    
//     $('.get_table5Dom').clone(true).appendTo('.dom_table6').find('.box_select').removeClass('box_select')
//     $('.final_image_col_table_5').html(getDOm).find('.box_select').removeClass('box_select');
// })

$('#btn_tab_6').click(function(){
    $('.wizard-form-text').html('Zvoľte profil <i class="fas fa-question-circle ml-1 red-tooltip" data-toggle="tooltip" data-placement="top" title="V prvom kroku si vyberte pôdorys vstavanej skrine podľa toho, kde a ako bude umiestnená."></i>');
})

$('#btn_tab_7').click(function(){
    $('.wizard-form-text').html('Zvoľte výplň jednotlivých častí dvier <i class="fas fa-question-circle ml-1 red-tooltip" data-toggle="tooltip" data-placement="top" title="V prvom kroku si vyberte pôdorys vstavanej skrine podľa toho, kde a ako bude umiestnená."></i>');
})

// $('#tab-btn-8').click(function(){
//     $('.wizard-form-text').html('Cenová ponuka vstavanej skrine <i class="fas fa-question-circle ml-1 red-tooltip" data-toggle="tooltip" data-placement="top" title="V prvom kroku si vyberte pôdorys vstavanej skrine podľa toho, kde a ako bude umiestnená."></i>');
// })

$('#tab-btn-9').click(function(){
    $('.wizard-form-text').html('Vyplňte údaje a odošlite objednávku <i class="fas fa-question-circle ml-1 red-tooltip" data-toggle="tooltip" data-placement="top" title="V prvom kroku si vyberte pôdorys vstavanej skrine podľa toho, kde a ako bude umiestnená."></i>');
})


$('#tab-btn-8').on('click', function () {
    $('.selection_all_woodImgs input[type="checkbox"]').trigger('click')
    $('#tab9_img_final').html('');
    $('#last-clone-app').html('');
    var html = $('.tab-8-table').clone();
    $('#tab9_img_final').html(html);
    $('#tab9_img_final').removeClass('active_t6');
    //$('.tab-8-table').clone().appendTo('#tab9_img_final').find('.framer_selections').siblings().removeClass('active_t6');
   
});


$('.tab-8-table').on('click', '.framer_selections', function () {
    $('.framer_selections').removeClass('active_t6');
    $(this).addClass('active_t6');
});


$('.selection_all_woodImgs input[type="checkbox"]').click(function(){
   var ischeck = $('.selection_all_woodImgs input[type="checkbox"]').is(':checked');
   if(ischeck == true){
      $('.tab-8-table').find('.framer_selections').addClass('active_t6')
   }else{
     $('.tab-8-table').find('.framer_selections').removeClass('active_t6')
   }
})


$('.tab_9_btn_9').on('click',function(){
    var html = $('#tab9_img_final').clone();
    $('#last-clone-app').html(html);
    $('#last-clone-app').find('#tab9_img_final').attr('id','')
});

// ================== tab 4 JS ==========
    $('#tab_id_btn4').click(function(){
         $('.get_table4Dom').find('.cust_width').removeClass('box_select'); 
        // var getDom = $('.getResponse').html()
        var getDom = $('.get_table4Dom').html();
        $('.table_num5').html(getDom);
        $('.final_image_tab4').html(getDom);
        //$(getDom).clone(true).appendTo('.final_image_tab4').find('.box_select').removeClass('box_select');
        // deepak
        $('.table_num5').find('.fs_reduce').remove()
        $('.table_num5').find('#tab4-inside-tr').attr('id','')
        // $('.table_num5').find('.box_select').remove()
       
        $(".final_image_tab4").find(".tab_4_top_table").css("display","none");
         $(".final_image_tab4").find(".grid_end").addClass("justify-content-center")
    });

//================ tab 5 img ================
$('.select_imgs_tab5').click(function () {
    var img = $(this).attr('src');
    var color = $(this).attr('data-color');
    $('.reduce_box').removeClass('tab5imgBorderRed');
    $(this).addClass('tab5imgBorderRed');
    $('.interiér-skrine-color').text(color);
    $('.interiér-skrine-img').attr('src',img);
    //$('.tab5').addClass('addWoodImg');
    $('.box_select').addClass('addWoodImg');
    $('.box_select').css({ "background-image": "url(" + img + ")", "background-size": "100% 100% !important" });
    //$('.inside_td').css({ "background-image": "url(" + img + ")", "background-size": "100% 100% !important" });
    countTabImages();
})

function countTabImages(){
    $('.addWoodImg').each(function () {
        var getLength = $('.addWoodImg').length;
        if(getLength >= 4){
            $('#tab_5_btn').prop('disabled', false);
        }
        else{
            $('#tab_5_btn').prop('disabled', false);
        }
    })
}


$('.radioOption-Item').on('click', function () {
    var getImgSrc = $(this).find('img').attr('src');
    $('#floorpln').attr('src', getImgSrc);
});


function getDom(tid) {
    var dom = $("a #" + tid).html();
    $('.active_t6').html(dom)
}




// tab 4 dom new
function tab4Dom(tid) {
    var dom = $("a #" + tid).html();

    incg = incg-1;
    if($("#inside-"+incg).hasClass("box_select_inside_1")){
        $('.box_select_inside_1').html(dom);
    }else{
        $('.active_t4').html(dom);
    }
    var inc=0;
    for(var i=1;i<5;i++){
       var check=$('#divider'+i).children('tbody');
        if (check.length == 1) {
            inc++;
        }
    }
   if(inc == 4){
       $('#tab_id_btn4').prop('disabled', false);
   }
    
    
   
    // $('.box_select_inside_1').html(dom);
}




$('.tabtab_4').on('click', function () {
    $('.tabtab_4').removeClass('active_t4');
    $(this).addClass('active_t4');
});


// ============= SWIPER  JS ==============================

$(document).ready(function () {
    // Swiper: Slider
    new Swiper('.swiper-container', {
        loop: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        slidesPerView: 3,
        paginationClickable: true,
        spaceBetween: 20,
        breakpoints: {
            1920: {
                slidesPerView: 6,
                spaceBetween: 10
            },
            1028: {
                slidesPerView: 2,
                spaceBetween: 30
            },
            480: {
                slidesPerView: 1,
                spaceBetween: 10
            }
        }
    });
    
    
    // Swiper: Slider on tab 4
    new Swiper('.slid_4', {
        loop: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        slidesPerView: 3,
        paginationClickable: true,
        spaceBetween: 20,
        breakpoints: {
            1920: {
                slidesPerView: 5,
                spaceBetween: 10
            },
            1028: {
                slidesPerView: 2,
                spaceBetween: 30
            },
            480: {
                slidesPerView: 1,
                spaceBetween: 10
            }
        }
    });



    // ============= TAB 3 JS ==============================

    $(document).on('click','input[name="radio_img"]:radio',function (){
        var getVal = $('#length_check_2').val();
        var ri = $(this).val();
        ri = ri.split('_');
        $('#radio-img-count').val(ri[1])
        switch ($(this).val()) {
            case "imge_1":
                $("#table_1").show();
                $("#table_2").hide();
                $("#table_3").hide();
                $("#table_4").hide();
                $("#table_5").hide();
                var display_val = parseInt(((getVal / 1) - 0));
                $('.added_sirka_value').html(display_val);
                break;

            case "imge_2":
                $("#table_1").hide();
                $("#table_2").show();
                $("#table_3").hide();
                $("#table_4").hide();
                $("#table_5").hide();
                var display_val = parseInt(((getVal / 2) - 0));
                $('.added_sirka_value').html(display_val);
                break;

            case "imge_3":
                $("#table_1").hide();
                $("#table_2").hide();
                $("#table_3").show();
                $("#table_4").hide();
                $("#table_5").hide();
                var display_val = parseInt(((getVal / 3) - 0));
                $('.added_sirka_value').html(display_val);
                break;

            case "imge_4":
                $("#table_1").hide();
                $("#table_2").hide();
                $("#table_3").hide();
                $("#table_4").show();
                $("#table_5").hide();
                var display_val = parseInt(((getVal / 4) - 0));
                $('.added_sirka_value').html(display_val);
                break;
                
            case "imge_5":
                $("#table_1").hide();
                $("#table_2").hide();
                $("#table_3").hide();
                $("#table_4").hide();
                $("#table_5").show();
                var display_val = parseInt(((getVal / 5) - 0));
                $('.added_sirka_value').html(display_val);
                break;
        }
    });


    // ============= TAB 2 JS ==============================
    
    var setLeftHeight = $('.vyskaleft1, .vyskaleft2').keyup(function () {
        var nn = $(this).val();
        var h = $('#max-height').val();
        if ($(this).val() > parseInt(h)) {
            
            var sd = $(this).val();
            nn = sd.substring(0,sd.length - 1);
            $(this).val(nn);
            $("#err-left").text('(Maximum: '+h+'mm)')

            $(this).css('border-color', 'red');
            $("#err-left").css('display', 'block')
        } else {
            $(this).css('border-color', 'gray')
            $("#err-left").css('display', 'none')
        }
        setLeftHeight.not(this).val(nn);
        check_length();
    });

    var setDepthh = $('.hlbka1, .hlbka2').keyup(function () {
        var nn = $(this).val();
        var d = $('#max-depth').val();
        if ($(this).val() > parseInt(d)) {
            var sd = $(this).val();
            nn = sd.substring(0,sd.length - 1);
            $(this).val(nn);
            $("#err-hlbka").text('Hĺbka(Maximum: '+d+'mm)')

            $(this).css('border-color', 'red')
            $("#err-hlbka").css('display', 'block')
        } else {
            $(this).css('border-color', 'gray')
            $("#err-hlbka").css('display', 'none')
        }
        setDepthh.not(this).val(this.value);
        check_length()

    });

    var setWidthh = $('.sirka1, .sirka2').keyup(function () {
        
         var nn = $(this).val();
        var w = $('#max-width').val();
        if ($(this).val() > parseInt(w)) {
            var sd = $(this).val();
            nn = sd.substring(0,sd.length - 1);
            $(this).val(nn);
            $("#err-sirka").text('(Maximum: '+w+'mm)')

            $(this).css('border-color', 'red')
            $("#err-sirka").css('display', 'block')
        } else {
            $(this).css('border-color', 'gray')
            $("#err-sirka").css('display', 'none')
        }
        setWidthh.not(this).val(nn);
        check_length()
    });

    var setRightHeight = $('.vyskaRight1, .vyskaRight2').keyup(function () {
        
        var h = $('#max-height').val();
        var nn = $(this).val();
        if ($(this).val() > parseInt(h)) {
            var sd = $(this).val();
            nn = sd.substring(0,sd.length - 1);
            $(this).val(nn);
            $("#err-right").text('(Maximum: '+h+'mm)') 

            $(this).css('border-color', 'red')
            $("#err-right").css('display', 'block')
        } else {
            $(this).css('border-color', 'gray')
            $("#err-right").css('display', 'none')
        }
        setRightHeight.not(this).val(nn);
        check_length()
    });

   
    var check_0 = 0;
    var check_1 = 0;
    var check_2 = 0;
    var check_3 = 0;
    function check_length(){
        var check = 1;
        var h = $('#max-height').val();
        var w = $('#max-width').val();
        var d = $('#max-depth').val();
        var arr2 = [h, d, w, h];
        for (var i = 0; i < 4; i++) {
            var val = $('#length_check_' + i).val();

            if (i == 0) {
                if (val && isNaN(val)==false) {
                    check_0 = 1;
                } else {
                    check_0 = 0;
                }
            }
            if (i == 1) {
                if (val && isNaN(val)==false) {
                    check_1 = 1;
                } else {
                    check_1 = 0;
                }
            }
            if (i == 2) {
                if (val && isNaN(val)==false) {
                    check_3 = 1;
                } else {
                    check_3 = 0;
                }
            }
            if (i == 3) {
                if (val && isNaN(val)==false) {
                    check_2 = 1;
                } else {
                    check_2 = 0;
                }
            }
        }
       
        if (check_0 == 1 && check_1 == 1 && check_2 == 1 && check_3 == 1) {
            $("#btn_second").prop('disabled', false);
        } else {
            $("#btn_second").prop('disabled', true);
        }
    }

    // ============= TAB 5 JS ============================

 

    $('.calculate-hwd').on('click',function(){
       var d = $(this).attr('data-dimension');
       d = d.split('-');
       $('#max-height').val(d[0])
       $('#max-width').val(d[1])
       $('#max-depth').val(d[2])
    })


    //=============== tab 6  Image Change Code ==============

    $('.folding_inside_img').click(function () {
        var getImgSrc = $(this).attr('src');
        // alert(getImgSrc);
    })


    $('#btn_tab_6').on('click', function () {
        var count = 'table_tab_7';
        $('.dom_table6').find('.get_table5Dom').hide();
        $('.tab7_tableDom').html('');
        $('.dom_table6').clone(true).appendTo('.tab7_tableDom').find('table').attr('id', count);
        //console.log($('.dom_table6').clone(true))
        
        
        //var getDOm = $('.dom_table6').html();
       // alert(getDOm)
        // $('.get_table5Dom').clone(true).appendTo('.dom_table6').find('.box_select').removeClass('box_select')
        // $('.final_image_col_table_5').html(getDOm).find('.box_select').removeClass('box_select');
    
    });
    
    // $('#closet_open').on('mousedown', function() {
    //      $('.dom_table6').find('.get_table5Dom').css({'z-index': '1', 'opacity': '1'}).on('mouseup mouseleave', function() {
    //         $('.dom_table6').find('.get_table5Dom').css({'z-index' : '-1', 'opacity':'0.2'})
    //         });
    // })
    
    $('#closet_open').on('mousedown', function() {
            $(this).toggleClass('addBgRed')
         $('.dom_table6').find('.get_table5Dom').toggleClass('closetToggle');
         $('.dom_table6').find('#table_tab_6').toggleClass('door_back');
    });


    // ============= TAB 7 JS ============================

    $('.create_table .table_6_click').on('click', function () {
        $('.create_table .table_6_click').removeClass('active_t7');
        $(this).addClass('active_t7');
    });

    $('.tab7zoom').on('click', function () {
        $('.tab7zoom').removeClass('tab5imgBorderRed')
        $(this).addClass('tab5imgBorderRed')
        var $showColorCode = $(this).attr('data-color');
        var img = $(this).attr('src');
        $('.tab7_tableDom').find('.set_frame_color').css('background', $showColorCode);

        $('.výplne-dvier-color').text($showColorCode);
        $('.výplne-dvier-img').attr('src',img);
    });

    $('#btn_tab_7').on('click', function () {
        var changeID = 'table_tab_8'
        // $('.tab-8-table').html(getTAB7DOM).find('table').attr('id', changeID)
        $('.selection_all_woodImgs input[type="checkbox"]').prop('checked', false);
        $('.tab-8-table').html('');
        $('.tab7_tableDom').clone(true).appendTo('.tab-8-table').find('table').attr('id', changeID);
        
        $('.tab-8-table').find('tr').removeClass('td.framer_selections.active_t6')
        // alert('adding to tab 8')
    });

    // ============== TAB 8 JS ============================

   

    $(document).on('click', '.tab_8_img',function () {
        $('.reduce_box').removeClass('tab8imgBorderRed');
        $(this).addClass('tab8imgBorderRed');
        var $showImgPath = $(this).attr('src');
        var color = $(this).attr('data-color');
        $('.abs-img-cls').attr('src',$showImgPath);
        $('.abs-color-cls').text(color);

        $('.tab-8-table').find('.framer_selections.active_t6').css({ "background-image": "url(" + $showImgPath + ")", 'background-size': 'auto 100%' });
        $('.tab-8-table').find('.framer_selections.active_t6').removeClass('.framer_selections.active_t6')
    });



    // ================PREV BTN JS =============================
    $('#prev-btn9').on('click', function () {
        $(".final_image_col table").remove();
        alert('going back...')
    })

    $('#prev-btn8').on('click', function () {
        $(".tab-8-table table").remove();
        alert('going back...')
    })



    $('#prev-btn7').on('click', function () {
        $(".final_table table").remove();
        alert('going back...')
    })


});

function showLargeImage(cls) {
    // alert($(this).attr('src'));
    $('.' + cls).html('<img src="'+baseurl+'assests/web_assets/img_web/tab_4_ladyImgg.png" alt="abc" class="showing_zoomed_images"/>');
}

function showLargeImageOut(cls) {
    $('.' + cls).html('');
}

// $("input:radio[name='floor_plan']").on('click', function() {
//  $('#btn_first').prop('disabled', false);
// });

$("input:radio[name='radio_img']").on('click', function () {
    $('#tab_btn_3').prop('disabled', false);
    $('#count-priestorov').val($(this).attr('data-val'));
});




//============== Tooltip =============
$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})

$(document).on('click','.added_table_1',function() {
    var id = $(this).attr("data-id");
    if($(this).is(":checked")) {
        $('.cust_width').removeClass('box_select');
        $("#" + id).html('<table class="table div_added_table h242" ><tr><td class="inside_td" id="inside-'+incg+'"></td><td class="inside_td" id="insidee-'+incg+'"></td></tr></table>')
    } else {
        $("#"+id).html('')
    }
    incg++;
});

// var interval = setInterval(function() {
//      $('.cust_width').click(function () {   // $('#tab4-inside-tr .cust_width').click(function () { 
//         $('.cust_width').removeClass('box_select');
//         $(this).addClass('box_select');
//         var setval = $(this).attr('data-id');
//         $("#for-inside-td").val(setval);
//     });
    
//     var incg = 100;
//     $(".added_table_1").click(function() { //$("#tab4-inside-tr .added_table_1").click(function() {
//         var id = $(this).attr("data-id");
//         if($(this).is(":checked")) {
//             $('.cust_width').removeClass('box_select');
//             $("#" + id).html('<table class="table div_added_table" ><tr><td class="inside_td" id="inside-'+incg+'"></td><td class="inside_td" id="insidee-'+incg+'"></td></tr></table>')
//         } else {
//             $("#"+id).html('')
//         }
//         incg++;
//     });
//  }, 1000);

    $(document).on('click','.inside_td',function(e) {

        $('.box_select').css('outline', '1px solid transparent !important');
        $('.inside_td').removeClass('box_select_inside_1');
        $(this).addClass("box_select_inside_1");

    });

//-------- Door division info box ---------
$(document).ready(function(){
  $("#door_d3").click(function(){
    $("#door_d2").fadeOut();
  });
  $("#door_d1").click(function(){
    $("#door_d2").fadeIn();
  });
});

// tab split js
// tab 2
document.body.addEventListener( 'mouseover', function( event ) {
    if( event.target.classList.contains( 'hov1' ) ) {
        [].forEach.call(document.getElementsByClassName( 'hov1' ), function( elem ) {
            elem.classList.add( 'hover' );
        });
    }
});

document.body.addEventListener( 'mouseout', function( event ) {
    if( event.target.classList.contains( 'hov1' ) ) {
        [].forEach.call(document.getElementsByClassName( 'hov1' ), function( elem ) {
            elem.classList.remove( 'hover' );
        });
    }
});
// tab 3
document.body.addEventListener( 'mouseover', function( event ) {
    if( event.target.classList.contains( 'hov3' ) ) {
        [].forEach.call(document.getElementsByClassName( 'hov3' ), function( elem ) {
            elem.classList.add( 'hover' );
        });
    }
});

document.body.addEventListener( 'mouseout', function( event ) {
    if( event.target.classList.contains( 'hov3' ) ) {
        [].forEach.call(document.getElementsByClassName( 'hov3' ), function( elem ) {
            elem.classList.remove( 'hover' );
        });
    }
});
// tab 4
document.body.addEventListener( 'mouseover', function( event ) {
    if( event.target.classList.contains( 'hov4' ) ) {
        [].forEach.call(document.getElementsByClassName( 'hov4' ), function( elem ) {
            elem.classList.add( 'hover' );
        });
    }
});

document.body.addEventListener( 'mouseout', function( event ) {
    if( event.target.classList.contains( 'hov4' ) ) {
        [].forEach.call(document.getElementsByClassName( 'hov4' ), function( elem ) {
            elem.classList.remove( 'hover' );
        });
    }
});
// tab 6
document.body.addEventListener( 'mouseover', function( event ) {
    if( event.target.classList.contains( 'hov6' ) ) {
        [].forEach.call(document.getElementsByClassName( 'hov6' ), function( elem ) {
            elem.classList.add( 'hover' );
        });
    }
});

document.body.addEventListener( 'mouseout', function( event ) {
    if( event.target.classList.contains( 'hov6' ) ) {
        [].forEach.call(document.getElementsByClassName( 'hov6' ), function( elem ) {
            elem.classList.remove( 'hover' );
        });
    }
});
