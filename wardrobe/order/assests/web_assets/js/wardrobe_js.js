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
$(document).ready(function () {
  $(".radioOption-Item").click(function () {
    $(".v_hide").removeClass("V_hidden");
    $(".bullet_first ").removeClass("V_hidden");
  });
});

var baseurl = $('#base-url').val();

window.onbeforeunload = function () {
    return 'Are you sure? Your work will be lost.';
};

// =============== MULTISTEP FORM =============================
var current = 1;
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

            if(i == 5){
                $('.dom_table6').find('.get_table5Dom').show();
            }
            if(i == 4){
                if($('#closet_open').hasClass('addBgRed')){
                   $('#closet_open').trigger('click')
                }
            }
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

    $('.table_num5 .cust_width').each(function(){
         $(this).addClass('box_select');
    });
    $(this).addClass('box_select');
    var setval = $(this).attr('data-id');
    $("#for-inside-td").val(setval);
    
});

$(document).on('click','.table_6_click', function () {
    $('.table_6_click').removeClass('active_t6');
    $(this).addClass('active_t6');
    //calculate_door_section();
});


  $('#Nakupujem_na_firmu_1').on('click', function() {
        var ulica = $('#address').val()
        var mesto = $('#city-name').val()
        var psc = $('#zip-code').val()
        if ($("#Nakupujem_na_firmu_1").prop('checked') == true) {
            $('#address-1').val(ulica)
            $('#city-name-1').val(mesto)
            $('#zip-code-1').val(psc)
        } else {
            $('#address-1').val('')
            $('#city-name-1').val('')
            $('#zip-code-1').val('')
        }

        $('.padding_tab_10 .tab_10_input').trigger('keyup');

    });

    $('#Nakupujem_na_firmu').change(function() {
        if (this.checked) {
            $('#check_hide_show_edge').show();
        } else {
            $('#check_hide_show_edge').hide();
        }

        $('.padding_tab_10 .tab_10_input').trigger('keyup');
    })

$('.select_imgs').click(function () {
    var getInteriorName = $(this).data('interior-img');
    var ch = $('#top-height_inpField').val();
    
    if(ch == ''){
        $('.err-top-height').text('zadajte výšku skrinky');
        $('#tab_id_btn4').prop('disabled', true);
        return false;
    }else{
        if(parseFloat(ch) >= 1800 &&  parseFloat(ch) <= 2100){
            $('.err-top-height').text('');
            $('#tab_id_btn4').prop('disabled', false);
        }else{
             $('.err-top-height').text('Výška vrchnej police musí byť medzi 1800 - 2100');
            $('#tab_id_btn4').prop('disabled', true);
            return false;
             
        }
        
    }


     var h = $('#length_check_3').val(); 
    
     var img = $(this).attr('src');
     var imgnum = $(this).attr('data-imgg');
     var setval =  $("#for-inside-td").val();

    var tsh = h-ch;
    var html = '';
    var dataid = $('.get_table4Dom').find('.box_select').attr('data-id');

     if($('#check-div-'+setval).is(":checked")){
        src = img.split("img_web");
        src1 = src[1].split("/");
        img = src[0]+'img_web/'+'half_'+src1[1];
        
       if(imgnum == 1){
            var rh = ch - 600;
            var html =  `<span class="opt1_a interior-cls" style="left: 1px;" data-drawers="0" drawers-total="0" shelves-total="600" data-shelves="2" data-hanger="1" >${tsh}mm</span>
            <span class="opt1_b" style="left: -8px;">${ch}mm</span>
            <span class="opt1_c" style="right: -6px;">${rh}mm</span>
            <span class="opt1_d" style="left: 1px;">600mm</span>`;
        }
        else if(imgnum == 2){
            var rh = ch - 400;
            var html =  `<span class="opt1_a interior-cls" style="left: 1px;" data-drawers="2" drawers-total="400" shelves-total="0" data-shelves="0" data-hanger="1" >${tsh}mm</span>
            <span class="opt1_b" style="left: -8px;">${ch}mm</span>
            <span class="opt1_c" style="right: -6px;">${rh}mm</span>
            <span class="opt1_d" style="left: 1px;">400mm</span>`;
        }
        else if(imgnum == 3){
            var drh = ch/2;
            var html =  `<span class="opt3_a interior-cls" style="left: 1px;" data-drawers="0" data-shelves="0" drawers-total="0" shelves-total="0" data-hanger="2" >${tsh}mm</span>
                <span class="opt3_b">${drh.toFixed(0)}mm</span>
                <span class="opt3_c">${drh.toFixed(0)}mm</span>`;
               
        }
        else if(imgnum == 4){
              var dd = ch-900;
              var html =  `<span class="opt4_a interior-cls" style="left: 1px;" data-drawers="0" data-shelves="3" drawers-total="0" shelves-total="945" data-hanger="1">${tsh}mm</span>
                <span class="opt4_b">${dd}mm</span>
                <span class="opt4_c" style="right: 1px;">300mm</span>
                <span class="opt4_d" style="right: 1px;">300mm</span>
                <span class="opt4_e" style="right: 1px;">300mm</span>`;
                
        }
        else if(imgnum == 5){
             var dd = ch-1000;
             var html =  `<span class="opt5_a interior-cls" style="left: 1px;" data-drawers="0" data-shelves="3" drawers-total="0" shelves-total="1000" data-hanger="1">${tsh}mm</span>
                <span class="opt5_b">1000mm</span>
                <span class="opt5_c">${dd}mm</span>`;
        }
        else if(imgnum == 6){
              var dd = ch-1000;
              var html =  `<span class="opt6_a interior-cls" style="left: 1px;" data-drawers="4" drawers-total="1000" shelves-total="0" data-shelves="0" data-hanger="1">${tsh}mm</span>
                <span class="opt6_b">${dd}mm</span>
                <span class="opt6_c" style="right: 1px;">1000mm</span>`;
        }
           $('.box_select_inside_1').html('<div clss="divide4_interior">'+html+'</div>');
           $('.box_select_inside_1').css({"background-image": "url(" + img + ")", "background-size": "100% 100%"});
     

     }else{
   
  
        //  if($(document).find('.get_table4Dom #check-div-'+dataid).is(":checked")){
        //     let src = img.split("img_web");
        //     img = src[0]+'img_web/wardrobe-interior-img-2part'+src[1];
        // }
        

        if(imgnum == 1){
            var rh = ch - 600;
            var html =  `<span class="opt1_a interior-cls"  data-drawers="0" drawers-total="0" shelves-total="600" data-shelves="2" data-hanger="1" >${tsh}mm</span>
            <span class="opt1_b" >${ch}mm</span>
            <span class="opt1_c" >${rh}mm</span>
            <span class="opt1_d">600mm</span>
            <img class="newImageAdds img-no-${dataid}" src="${img}" data-imgid="${dataid}">`;
        }
        else if(imgnum == 2){
            var rh = ch - 400;
            var html =  `<span class="opt1_a interior-cls"  data-drawers="2" drawers-total="400" shelves-total="0" data-shelves="0" data-hanger="1" >${tsh}mm</span>
            <span class="opt1_b" >${ch}mm</span>
            <span class="opt1_c" >${rh}mm</span>
            <span class="opt1_d">400mm</span>
            <img class="newImageAdds img-no-${dataid}" src="${img}" data-imgid="${dataid}">`;
        }
        else if(imgnum == 3){
            var drh = ch/2;
            var html =  `<span class="opt3_a interior-cls" data-drawers="0" data-shelves="0" drawers-total="0" shelves-total="0" data-hanger="2" >${tsh}mm</span>
                <span class="opt3_b">${drh.toFixed(0)}mm</span>
                <span class="opt3_c">${drh.toFixed(0)}mm</span>
                <img class="newImageAdds img-no-${dataid}" src="${img}" data-imgid="${dataid}">`;
               
        }
        else if(imgnum == 4){
              var dd = ch-900;
              var html =  `<span class="opt4_a interior-cls" data-drawers="0" data-shelves="3" drawers-total="0" shelves-total="945" data-hanger="1">${tsh}mm</span>
                <span class="opt4_b">${dd}mm</span>
                <span class="opt4_c">300mm</span>
                <span class="opt4_d">300mm</span>
                <span class="opt4_e">300mm</span>
                <img class="newImageAdds img-no-${dataid}" src="${img}" data-imgid="${dataid}">`;
                
        }
        else if(imgnum == 5){
             var dd = ch-1000;
             var html =  `<span class="opt5_a interior-cls" data-drawers="0" data-shelves="3" drawers-total="0" shelves-total="1000" data-hanger="1">${tsh}mm</span>
                <span class="opt5_b">1000mm</span>
                <span class="opt5_c">${dd}mm</span>
               <img class="newImageAdds img-no-${dataid}" src="${img}" data-imgid="${dataid}">`;
        }
        else if(imgnum == 6){
              var dd = ch-1000;
              var html =  `<span class="opt6_a interior-cls" data-drawers="4" drawers-total="1000" shelves-total="0" data-shelves="0" data-hanger="1">${tsh}mm</span>
                <span class="opt6_b">${dd}mm</span>
                <span class="opt6_c">1000mm</span>
                <img class="newImageAdds img-no-${dataid}" src="${img}" data-imgid="${dataid}">`;
        }
         $('.box_select').html(html);
    }

        var count = $('#radio-img-count').val();
        let addc = parseInt(dataid)+parseInt(1)
        if(parseInt(count) == parseInt(dataid)){
            addc = 1;
        }
        $(document).find('.get_table4Dom #divider'+dataid).removeClass("box_select")
        $(document).find('.get_table4Dom #divider'+addc).addClass("box_select")
    
    countnewImage();

    // Code for not copying duplicate Interior Names
    // var onlyUniqueInterior = $('#interior-names-collection').text();
    // if(getInteriorName.indexOf(onlyUniqueInterior) === -1){
    //     $('#interior-names-collection').append(getInteriorName);
    // }
    // else{
    //     $('#interior-names-collection').append('')
    // }
})


//valid
function countnewImage() {
    var count = $('#radio-img-count').val()
    var getClassLength = $('#tab4-inside-tr').find('.newImageAdds').length;
    var checkin = 0;
    var checkimg = 0;
    $('#tab4-inside-tr').find('.form-check-input').each(function(){
        if($(this).prop('checked') == true){
           checkin++;
        }
    })
 
    $('.err-top-height').text('');
    $('#tab4-inside-tr').find('.inside_td').each(function(index){
        if($(this).css('background-image') != 'none'){
            checkimg++;
        }
    })
    var lngth = parseInt(count-checkin) + parseInt(2*checkin);
    var check = parseInt(checkimg)+parseInt(getClassLength);
    if(lngth == check){
        $('#tab_id_btn4').prop('disabled', false);
    }else{
        $('#tab_id_btn4').prop('disabled', true);
    }
}



$('.inside_clr').click(function () {
    var img = $(this).attr('src');
    // alert(img);
    $('.bg_image_ch').css({"background-image": "url(" + img + ")", "background-size": "cover"});
})

$('.inside_clr2').click(function () {
    var img = $(this).attr('src');
    $('.bg_image_ch2').css({"background-image": "url(" + img + ")","background-size": "cover"});
})

function upper_shelf(){
  
  var d = $('#length_check_1').val(); 
  var w = $('#length_check_2').val(); 

  var wtype=$('#wardrobe-type-id').val();
  var count = $('#radio-img-count').val()
  var upper_d = 0;
//   if(wtype == 'wtype-A'){
//      upper_d = ((parseFloat(d)-100)*parseFloat(w))/parseInt(count);
//   }else if(wtype == 'wtype-B' || wtype == 'wtype-C'){
//      upper_d = (((parseFloat(d)-100)*parseFloat(w))-18)/parseInt(count);
//   }else if(wtype == 'wtype-D'){
//      upper_d = (((parseFloat(d)-100)*parseFloat(w))-36)/parseInt(count);
//   }

  upper_d = w/count;
  return upper_d;

}

// ================== Changing Head text on btn click JS ================
$('#btn_second').click(function(){
    var w = $('#length_check_2').val();
   
    var html = '';
    var cast = 'časť';
    for(var i=1;i<=5;i++){
        if(i >= 2 && i < 5){
           cast = 'časti';
        }else if(i == 5){
            cast = 'častí';
        }
        var check = i==1?'checked':'';
        var p = w/i;
       html += '<input type="radio" name="radio_img" id="radio-img-'+i+'" value="imge_'+i+'" '+check+'>\
        <label for="radio-img-'+i+'" class="col lbl_sides font-weight-bolder mb-0 px-1">\
        '+i+' '+cast+' &nbsp;<small class="font14">'+p.toFixed(2)+' mm</small></label>';
    }
    $('#table_1').find('.added_sirka_value').text(w);
    
    $('.pocet-priestorov').html(html)
    $('.wizard-form-text').html('Rozdeľte vstavanú skriňu na priestory <i class="fas fa-question-circle ml-1 red-tooltip" data-toggle="tooltip" data-placement="top" title="V prvom kroku si vyberte pôdorys vstavanej skrine podľa toho, kde a ako bude umiestnená."></i>');

    // readDisable
    $(".readDisable").attr('readonly', true);

    var getSourceLeft = $('.findImg').find('img').attr('src');
    $('#left-h-imgs img').attr('src', getSourceLeft);
    $('#right-h-img img').attr('src', getSourceLeft);   
    $('#depth-h-img img').attr('src', getSourceLeft);   
    $('#width-h-img img').attr('src', getSourceLeft);   

    let cc = $('#radio-img-count').val();
    let eq = 0;
    if(cc){
        eq = parseInt(cc)-1;
    }

    $('input[name="radio_img"]:radio').eq(eq).trigger('click')
    
})
// disableNone
$('#disableNone').click(function(){
    $(".readDisable").attr('readonly', false);
});

$('#tab_btn_3').click(function(){
   
  var l = $('#length_check_3').val();
  var w = $('#length_check_2').val();
  $('.vertical_arrow span').text(l+' mm');

  var count = $('#radio-img-count').val();
  var ht = '';
  var ins = '';
  // var p = w/count;
  var p = upper_shelf();
  p=p.toFixed(0);
  for(var i=0;i<count;i++){
        var left = i==0?'border-left':'';
        var cc = i+1;
        var cls = i==0?" box_select":'';
        ht += '<td><div class="cust_width '+cls+' opt1" id="divider'+cc+'" data-id="'+cc+'"></div><div class="form-check fs_reduce"><input type="checkbox" class="form-check-input added_table_1" data-id="divider'+cc+'" id="check-div-'+cc+'" data-iid="'+cc+'"><label class="form-check-label" for="divider'+cc+'">Delená</label></div></td>';
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
       $('#btn_tab_6').prop('disabled',true);
      $('.get_table5Dom').find('.cust_width').removeClass('box_select'); 
      var count = $('#radio-img-count').val();

      $('#top-image-tab5').attr('src',baseurl+'assests/web_assets/img_web/View_from_above'+count+'.png')
      var ins = ''
      for(var i=0;i<count;i++){
          var cls = i==0?'active_t6':'';
          ins +=`<td class="tab6-td">
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

// $('#btn_tab_7').click(function(){
//     $('.wizard-form-text').html('Zvoľte výplň jednotlivých častí dvier <i class="fas fa-question-circle ml-1 red-tooltip" data-toggle="tooltip" data-placement="top" title="V prvom kroku si vyberte pôdorys vstavanej skrine podľa toho, kde a ako bude umiestnená."></i>');
// })

// $('#tab-btn-8').click(function(){
//     $('.wizard-form-text').html('Cenová ponuka vstavanej skrine <i class="fas fa-question-circle ml-1 red-tooltip" data-toggle="tooltip" data-placement="top" title="V prvom kroku si vyberte pôdorys vstavanej skrine podľa toho, kde a ako bude umiestnená."></i>');
// })

$('#tab-btn-9').click(function(){
    $('.wizard-form-text').html('Vyplňte údaje a odošlite objednávku <i class="fas fa-question-circle ml-1 red-tooltip" data-toggle="tooltip" data-placement="top" title="V prvom kroku si vyberte pôdorys vstavanej skrine podľa toho, kde a ako bude umiestnená."></i>');
})


 $('#tab-btn-8').prop('disabled', true);
function enabletab8(){
    let check = 1;
    $('.tab-8-table').find('.framer_selections').each(function(i){
        if($(this).css("background-image") == 'none'){
            check=0;
            return false;
        }
    })

    if(check == 1){
         $('#tab-btn-8').prop('disabled', false);
    }
}


$('#tab-btn-8').on('click', function () {
    $('.selection_all_woodImgs input[type="checkbox"]').trigger('click')
    $('#last-clone-app-two').html('');
    $('#tab9_img_final').html('');
    $('#last-clone-app').html('');
    var html = $('.tab-8-table').clone();
    $('#tab9_img_final').html(html);
    $('#tab9_img_final').removeClass('active_t6');
    //$('.tab-8-table').clone().appendTo('#tab9_img_final').find('.framer_selections').siblings().removeClass('active_t6');
    //$('.input-heights').css('color','#fff');
     cost_calculation();
});



$('.tab-8-table').on('click', '.framer_selections', function () {
    $('.framer_selections').removeClass('active_t6');
    $(this).addClass('active_t6');
   
});

function create_table_body(){
    `<tr>
        <th>Side Panel Cost<div class="small_green_box mt-3"></div> <span class="calc_panel"> X1</span></th>
        <td> <span class="calc_panel" id="side-panel-cost">0</span> </td>
    </tr>`;
}
// $(document).on('keyup','.section-tab6 .tab6-td .setInpWidth',function(){
//     calculate_door_section();
// });

function btn_tab6_access(){
    var count = $('#radio-img-count').val();
    var inc = 0;
    $('.section-tab6').find('.dom_table6 .tab6-td').each(function(){
        if($(this).find('.table_6_click table').html()){
             inc++;
        }
    });
    if(parseInt(inc) >= parseInt(count)){
      
         $('#btn_tab_6').prop('disabled',false);
    }else{
    
         $('#btn_tab_6').prop('disabled',true);
    }
}

$(document).on('keyup','.section-tab6 .tab6-td .setInpWidth',function(){
    if($(this).val() != ''){
          $('#btn_tab_6').prop('disabled',false);
         calculate_door_section();
    }else{
        $('#btn_tab_6').prop('disabled',true);
    }
});
function calculate_door_section(){

    var l = $('#length_check_0').val();
    l = l - 45;
    var topprofile = 15;
    var bottomprofile = 47;
    var lpprofile = 22;
    var rpprofile = 22;
   
    //var doorfillheight = ( (l - 45) - topprofile - bottomprofile);
    $('.section-tab6').find('.dom_table6 .tab6-td').each(function(){
        var thisl = $(this).find('.framer_selections').length;
        var noin = $(this).find('.framer_selections .setInpWidth').length;

        // var hprofile = parseInt(thisl)+parseInt(noin)-parseInt(1);
        // l = parseFloat(doorfillheight)-parseFloat(hprofile*2);
        var intotal = 0;
        $(this).find('.framer_selections .setInpWidth').each(function(){
            let vv = $(this).val();
            if(vv == ''){
                vv = 0;
                noin--;
            }
            intotal = parseFloat(intotal)+parseFloat(vv)
        })
        let tt = (l-intotal)/(thisl-noin);
        if(tt < 200){
           
            let val = $(this).val();
            val = val.substring(0,val.length - 1);
            $(this).val(val);
            alert('Každá sekcia musí mať výšku min. 200 mm');
            return false;
        }else{
             $(this).find('.framer_selections').each(function(){
            if($(this).find('.setInpWidth').hasClass('para_width2') == false){
                $(this).text(tt.toFixed(0))
            }else{
                if($(this).find('.setInpWidth').val() == ''){
                    $(this).find('.setInpWidth').val(tt.toFixed(0))
                }
            }
            })
        }
       
    })
}


function cost_calculation(){
    var d = $('#length_check_1').val(); //$('#max-depth').val();
    var w = $('#length_check_2').val(); //$('#max-width').val();
    var h = $('#length_check_0').val(); //$('#max-height').val();

    d=parseFloat(d);
    w=parseFloat(w);
    h=parseFloat(h);

    var wardrobe_tcost=0;

    var wtype=$('#wardrobe-type-id').val(); 
    var count = $('#radio-img-count').val();

    var  tilltopshefheight = $('#top-height_inpField').val()

    var topshelfheight = h-tilltopshefheight;

    var dtdm = 13.68; //DTD material cost //8
    var absm = 1.20; //ABS materail cost  //4
    var profilecal = 15;

    var wallcount = count-1;
    //side-panel calculation
    var sidepanel = 0;
    var sidepanelabs = 0;

    var sidewall = 0;
    var sidewallabs = 0;

    var topshelf = 0;
    var topshelfabs = 0;

    var dividerwall = 0;
    var dividerwallabs = 0;

    var doorheighcal = 0;
    var doorwidthcal = 0;

    var dooroverlapwidth = 22 // or width = 22

    var closedprofile = 0;
    
    var hprofilecost = 0;
    var doorsection = 0;
    var body = '';

    var sp_mat_dtd = 0;
    var sp_mat_abs= 0;
    var sp_mat_dtdm = 0;
    var sp_mat_absm = 0;

    var sw_mat_dtd = 0;
    var sw_mat_abs= 0;
    var sw_mat_dtdm = 0;
    var sw_mat_absm = 0;

    var spdtdcount = 0;
    var spabscount = 0;  

    var swdtdcount = 0;
    var swabscount = 0;  

    var topshelflength = 0;
    var topshelfwidth=d-100;
    var topshelfcal = 0;

    var topthickness = 18;
    var bottomthickness = 18;
    var profilethickness = 18;
    var sidewallthickness = 18;

    var totaldtdmaterial=0;
     
      if(wtype == 'wtype-A'){

          totaldtdmaterial = 0;
          topshelflength=w;
           
          spdtdcount = 2;
          spabscount = 2;  //4

          tsdtdcount = 0;
          tsabscount = 0;  

          sp_mat_dtd = 1*((100*h));
          sp_mat_abs= 1*((h*2))/2;

          let h1 = $('#length_check_3').val(); 
          let sp_mat_dtd1 = 1*((100*h1));
          let sp_mat_abs1 = 1*((h1*2))/2;

         

         // sp_mat_dtd = parseFloat(sp_mat_dtd)+parseFloat(sp_mat_dtd1)
          //sp_mat_abs = parseFloat(sp_mat_abs)+parseFloat(sp_mat_abs1)

          sp_mat_dtdm = sp_mat_dtd/1000000;
          sp_mat_absm = sp_mat_abs/1000;

          sidepanel = sp_mat_dtdm*dtdm;
          sidepanelabs = sp_mat_absm*absm;
      
      }
      else if(wtype == 'wtype-B'){
          totaldtdmaterial = 2*sidewallthickness;
          topshelflength=w-18;
          spdtdcount = 1;
          spabscount = 3; //2
          swdtdcount = 1;
          swabscount = 2;  

          sp_mat_dtd = 1*((100*h));
          sp_mat_abs= 1*((h*2))/2;

          sp_mat_dtdm = sp_mat_dtd/1000000;
          sp_mat_absm = sp_mat_abs/1000;

          sidepanel = sp_mat_dtdm*dtdm;
          sidepanelabs = sp_mat_absm*absm;
          
           let h1 = $('#length_check_3').val();
          
           sw_mat_dtd = d*h1;
           sw_mat_abs= h1;
           sw_mat_dtdm = sw_mat_dtd/1000000;
           sw_mat_absm = sw_mat_abs/1000;

          sidewall = sw_mat_dtdm*dtdm;
          sidewallabs = sw_mat_absm*absm;
 
      }else if(wtype == 'wtype-C'){
           totaldtdmaterial = 2*sidewallthickness;
          topshelflength=w-18;
          let h1 = $('#length_check_3').val(); 
          spdtdcount = 1;
          spabscount = 3;  //2
          swdtdcount = 1;
          swabscount = 2;  

          sp_mat_dtd = 1*((100*h1));
          sp_mat_abs= 1*((h1*2))/2;

          sp_mat_dtdm = sp_mat_dtd/1000000;
          sp_mat_absm = sp_mat_abs/1000;

          sidepanel = sp_mat_dtdm*dtdm;
          sidepanelabs = sp_mat_absm*absm;
          
           //h = $('#length_check_0').val();
           sw_mat_dtd = d*h;
           sw_mat_abs= h;
           sw_mat_dtdm = sw_mat_dtd/1000000;
           sw_mat_absm = sw_mat_abs/1000;

          sidewall = sw_mat_dtdm*dtdm;
          sidewallabs = sw_mat_absm*absm;

        
      }else if(wtype == 'wtype-D'){
             totaldtdmaterial = 4*sidewallthickness;
            topshelflength=w-(18*2);
          
            swdtdcount = 2;
            swabscount = 4; 
 spabscount = 4;  //new 16-05
           sw_mat_dtd = 1*d*h;
           sw_mat_abs= 1*h;

          let h1 = $('#length_check_3').val(); 
          let sw_mat_dtd1 = 1*d*h1;
          let sw_mat_abs1 = 1*h1;

          sw_mat_dtd = parseFloat(sw_mat_dtd)+parseFloat(sw_mat_dtd1)
          sw_mat_abs = parseFloat(sw_mat_abs)+parseFloat(sw_mat_abs1)

           sw_mat_dtdm = sw_mat_dtd/1000000;
           sw_mat_absm = sw_mat_abs/1000;

          sidewall = sw_mat_dtdm*dtdm;
          sidewallabs = sw_mat_absm*absm;

         
      } 
        
        let firstboard = 0;
        let secondboard =0;
        if(w > 2780){
            let wardroberoomwidth = (topshelflength-(wallcount*18))/count;
            let ii = 1;
            var pending = 0;
            for(var i=0 ;i<=3; i++){
               
               if(i == 0){
                  pending = topshelflength-wardroberoomwidth-9;
               }else{
                   pending = pending-wardroberoomwidth-18;
               }
               if(pending <= 2780){
                  
                   if(i==0){
                       firstboard = pending;
                       secondboard = (parseFloat(wardroberoomwidth)+parseFloat(9));
                   }else{
                       firstboard = pending;
                       secondboard = ((ii*wardroberoomwidth)+parseFloat(9)+parseFloat(18));
                   }
                    topshelfcal=parseFloat(firstboard)+parseFloat(secondboard);
                    break;
               }
               ii++;
            }
        }else{
            topshelfcal = topshelflength;
        }


       if(sidepanel > 0){
           //<span class="calc_panel"> x${spdtdcount}</span>
          body +=`<tr>
            <th>
                Náklady na bočnú stenu
                <div class="align-items-center d-flex gap11">
                    <span class="small_green_box mt-3"></span>
                    <span class="">${h}mm</span>
                </div>
                <span class="">100mm</span>
            </th>
            <td>
                <span class="calc_panel">DTD Materiál (x${spdtdcount})</span> 
                <span class="calc_panel">${sp_mat_dtd.toFixed(2)} mm2</span> 
                <span class="calc_panel">${sp_mat_dtdm.toFixed(4)}m2</span> <br><br>

                <span class="calc_panel">Cena DTD (x${spdtdcount})</span> 
                <span class="calc_panel">=</span> 
                <span class="calc_panel">${sidepanel.toFixed(2)} €</span> <hr>

                <span class="calc_panel">Materiál ABS (x${spabscount})</span> 
                <span class="calc_panel">${sp_mat_abs.toFixed(2)} mm</span> 
                <span class="calc_panel">${sp_mat_absm.toFixed(4)}m</span> <br><br>

                <span class="calc_panel">Cena ABS (x${spabscount})</span> 
                <span class="calc_panel">=</span> 
                <span class="calc_panel">${sidepanelabs.toFixed(2)} €</span>
            </td>
            </tr>`; 

            wardrobe_tcost = parseFloat(wardrobe_tcost)+parseFloat(sidepanel)+parseFloat(sidepanelabs);
       }

       if(sidewall > 0){
           // <span class="calc_panel"> x${swdtdcount}</span>
           body +=`<tr>
            <th>
                Náklady na bočnú stenu
                <div class="align-items-center d-flex gap11">
                    <span class="green_box mt-3"></span>
                    <span class=""> ${h}mm</span>
                </div>
                <span class=""> ${w}mm</span>
            </th>
            <td>
                <span class="calc_panel">DTD Materiál (x${swdtdcount})</span> 
                <span class="calc_panel">${sw_mat_dtd.toFixed(2)} mm2</span> 
                <span class="calc_panel">${sw_mat_dtdm.toFixed(4)}m2</span> <br><br>

                <span class="calc_panel">Cena DTD (x${swdtdcount})</span> 
                <span class="calc_panel">=</span> 
                <span class="calc_panel">${sidewall.toFixed(2)} €</span> <hr>

                <span class="calc_panel">Materiál ABS (x${swabscount})</span> 
                <span class="calc_panel">${sw_mat_abs} mm</span> 
                <span class="calc_panel">${sw_mat_absm.toFixed(4)}m</span> <br><br>

                <span class="calc_panel">Cena ABS (x${swabscount})</span> 
                <span class="calc_panel">=</span> 
                <span class="calc_panel">${sidewallabs.toFixed(2)} €</span>
            </td>
            </tr>`; 

            wardrobe_tcost =parseFloat(wardrobe_tcost)+parseFloat(sidewall)+parseFloat(sidewallabs);
       }

        var ttc = 1;
        let topshelfcalcost = [topshelfcal];
        if(w > 2780){
            ttc=2;
            topshelfcalcost = [firstboard,secondboard];
        }
        
        body +=`<tr>
                <th>
                    Cena vrchnej police
                    <div class="align-items-center d-flex gap11">
                        <span class="green_box mt-3"></span>
                        <span class="calc_panel"> x${ttc}</span>
                    </div>
                </th>
                <td>`;
       for(let n=0;n<ttc;n++){
            var tp_mat_dtd = topshelfcalcost[n]*topshelfwidth;  //new
            var tp_mat_dtdm = tp_mat_dtd/1000000;
            var tp_mat_absm = topshelflength/1000;
            topshelf = tp_mat_dtdm*dtdm;   //*count new add
            topshelfabs = tp_mat_absm*absm;
     
            body +=`<span class="calc_panel">DTD Materiál</span> 
            <span class="calc_panel">${tp_mat_dtd.toFixed(2)} mm2</span> 
            <span class="calc_panel">${tp_mat_dtdm.toFixed(4)}m2</span> <br><br>

            <span class="calc_panel">Cena DTD</span> 
            <span class="calc_panel">=</span> 
            <span class="calc_panel">${topshelf.toFixed(2)} €</span> <hr>

            <span class="calc_panel">ABS Materiál</span> 
            <span class="calc_panel">${topshelflength.toFixed(2)} mm</span> 
            <span class="calc_panel">${tp_mat_absm.toFixed(4)}m</span> <br><hr>`
           wardrobe_tcost =parseFloat(wardrobe_tcost)+parseFloat(topshelf);
        if(ttc == (parseInt(n)+parseInt(1)))
            body += `<span class="calc_panel">Cena ABS</span> 
            <span class="calc_panel">=</span> 
            <span class="calc_panel">${topshelfabs.toFixed(2)} €</span>`  
             wardrobe_tcost =parseFloat(wardrobe_tcost)+parseFloat(topshelfabs);
        }
        body +=`</td></tr>`; 
            
        var dw_mat_dtd = ((d-105)*tilltopshefheight);
        var dw_mat_abs = (tilltopshefheight);
        var dw_mat_dtdm = dw_mat_dtd/1000000;
        var dw_mat_absm = dw_mat_abs/1000;
        dividerwall = dw_mat_dtdm*dtdm*wallcount;
        dividerwallabs = dw_mat_absm*absm*wallcount;    
        //<span class="calc_panel"> x${wallcount}</span>
        body +=`<tr>
            <th>
                Náklady na deliacu stenu
                <div class="align-items-center d-flex gap11">
                    <span class="green_box mt-3"></span>
                    <span class=""> </span>
                    <span class="calc_panel"> x${wallcount}</span>
                </div>
                 <span class=""> </span>
            </th>
            <td>
                <span class="calc_panel">DTD Materiál</span> 
                <span class="calc_panel">${dw_mat_dtd.toFixed(2)} mm</span> 
                <span class="calc_panel">${dw_mat_dtdm.toFixed(4)}m</span> <br><br>

                <span class="calc_panel">Cena DTD </span> 
                <span class="calc_panel">=</span> 
                <span class="calc_panel">${dividerwall.toFixed(2)} €</span> <hr>

                <span class="calc_panel">ABS Materiál </span> 
                <span class="calc_panel">${dw_mat_abs} mm</span> 
                <span class="calc_panel">${dw_mat_absm.toFixed(4)}m</span> <br><br>

                <span class="calc_panel">Cena ABS</span> 
                <span class="calc_panel">=</span> 
                <span class="calc_panel">${dividerwallabs.toFixed(2)} €</span>
            </td>
            </tr>`; 
 wardrobe_tcost =parseFloat(wardrobe_tcost)+parseFloat(dividerwall)+parseFloat(dividerwallabs);
         //profile calculation
         doorheighcal = h-45; 
         doorwidthcal = (parseFloat((w-totaldtdmaterial))+parseFloat(((count-1)*dooroverlapwidth)))/count;

        var topprofile =15;
        var bottomprofile = 47;
        var lpprofile = 22;
        var rpprofile = 22;
       
        // var doorfillheight = (doorheighcal - topprofile - bottomprofile);
        var doorfillheight = (doorheighcal - topprofile - bottomprofile);
        var doorfillwidth = (doorwidthcal - lpprofile - rpprofile);

         //closedprofile = (count*(2+2))*2.5;   //09-05 changes
          closedprofile = ((count*2)*4.3);
         // closedprofile = (parseFloat(parseFloat(count*2)+parseFloat(2)) + parseFloat(parseFloat(count*2)+parseFloat(2.3)))
         
         //here 2.5 => cost and (2+2) => top & bottom wheel count

        //openprofile = 10 + (count*(2+2))*2.5; 
         let fordoor = 1;
         if(doorheighcal > 1300){
            fordoor = 2;
         } 

         
         // var vprofilematerial = fordoor*doorheighcal*count;
         // var vprofilematerialm = vprofilematerial/1000;
         // var vprofilematerialcost = vprofilematerialm*4.5;
        
         // var hprofilematerial = doorwidthcal*(parseFloat(fordoor)+parseFloat(count)-1);
         // var hprofilematerialm = hprofilematerial/1000;
         // var hprofilematerialcost = hprofilematerialm*4.5;


         var vprofilematerial = fordoor*1*count;
         
          //new 15-05-23
          let toppprice = 12;  
          let bottompprice = 12;  
          let hpprice = 12; 
          let vpprice = 25.80; 

         var misssingvericalprofile = 0;
         if(doorheighcal > 2600){
            misssingvericalprofile = ((doorheighcal-2700)*2*count)/2700;
         }
         vprofilematerial = parseFloat(vprofilematerial)+parseFloat(misssingvericalprofile);
         vprofilematerial = Math.ceil(vprofilematerial);
         var vprofilematerialcost = vprofilematerial*vpprice;

         //top profile
        //  let topprofilestripes = (doorwidthcal/2600)*count; //old
        let topprofilestripes = count; //new
         topprofilestripes = Math.ceil(topprofilestripes);
         let topprofilestripescost = topprofilestripes*toppprice;

         //botton profile
        //  let bottomprofilestripes = (doorwidthcal/2600)*count; //old
         let bottomprofilestripes = count; //new
         bottomprofilestripes = Math.ceil(bottomprofilestripes);
         let bottomprofilestripescost = topprofilestripes*bottompprice;
        
         //h-profile 
         let nohprofile = 0
         $('.section-tab6').find('.dom_table6 .tab6-td').each(function(){
            $(this).find('.set_inside_framer').each(function(){
                nohprofile++;
            });
         });
         
         //new
         let hprofileneeded = nohprofile-count; 
         let hprofileneededcost = hprofileneeded*hpprice;

        //old
        //  let noofvertiacalsection = count;
        //  let hprofilematerial = doorfillwidth*(noofvertiacalsection-1); //material
        //  let hprofileneeded = (nohprofile*doorfillwidth)/2600;  //stripe
        //  hprofileneeded = Math.ceil(hprofileneeded);
        //  let hprofileneededcost = hprofileneeded*hpprice;
        
         // var hprofilematerial = doorwidthcal*(parseFloat(fordoor)+parseFloat(count)-1);
         // var hprofilematerialm = hprofilematerial/1000;
         // var hprofilematerialcost = hprofilematerialm*4.5;
        // var hprofilematerial = fordoor*doorwidthcal*count;



         body +=`<tr>
            <th>
                Cena za profily
                <div class="align-items-center d-flex gap11">
                    <span class="green_box mt-3"></span>
                    <span class="calc_panel"> x${count}</span>
                </div>
            </th>
            <td>
                <span class="calc_panel">Materiál vertikálneho profilu </span> 
                <span class="calc_panel">${vprofilematerial}</span><br><br>
                <span class="calc_panel">Cena vertikálneho profilu</span> 
                <span class="calc_panel">=</span> 
                <span class="calc_panel">${vprofilematerialcost.toFixed(2)} €</span><hr>

                <span class="calc_panel">Materiál vrchného profilu </span> 
                <span class="calc_panel">${topprofilestripes}</span><br><br>
                <span class="calc_panel">Cena horizontálneho profilu</span> 
                <span class="calc_panel">=</span> 
                <span class="calc_panel">${topprofilestripescost.toFixed(2)} €</span><hr>

                <span class="calc_panel">Materiál spodného profilu </span> 
                <span class="calc_panel">${bottomprofilestripes}</span><br><br>
                <span class="calc_panel">Cena horizontálneho profilu</span> 
                <span class="calc_panel">=</span> 
                <span class="calc_panel">${bottomprofilestripescost.toFixed(2)} €</span><hr>


                <span class="calc_panel">Materiál H-profilu </span> 
                <span class="calc_panel">${hprofileneeded}</span><br><br>
                <span class="calc_panel">Cena H-profilu</span> 
                <span class="calc_panel">=</span> 
                <span class="calc_panel">${hprofileneededcost.toFixed(2)} €</span><hr>

            </td>
            </tr>`; 

 wardrobe_tcost =parseFloat(wardrobe_tcost)+parseFloat(vprofilematerialcost)+parseFloat(topprofilestripescost)+parseFloat(bottomprofilestripescost)+parseFloat(hprofileneededcost);
            body +=`<tr>
            <th>
                Kolesá dverí
            </th>
            <td>
                <span class="calc_panel">Vrchné symetrické kolieska  </span> 
                <span class="calc_panel">${2*count}</span> <br><br>

                 <span class="calc_panel">Spodné normálne kolieska  </span> 
                <span class="calc_panel">${2*count}</span> <br><hr>

                <span class="calc_panel">Počet koliesok pre dvere</span> 
                <span class="calc_panel">${count*4}</span> <br><br>

                <span class="calc_panel">Cena koliesok pre dvere </span> 
                <span class="calc_panel">=</span> 
                <span class="calc_panel">${closedprofile.toFixed(2)} €</span> <hr>

            </td>
            </tr>`; 

    wardrobe_tcost =parseFloat(wardrobe_tcost)+parseFloat(closedprofile);
            
$('.section-tab6').find('.dom_table6 .tab6-td').each(function(){
    
    var i=0;
    var tinputh = 0;
    var tabletr = '';
    var noinput = 0;
    $(this).find('.set_inside_framer').each(function(){
        tabletr += `<tr><td style="height:50px; width:50px"></td></tr>`;
        if($(this).find('input').length){
            var thisval = $(this).find('input').val();
            tinputh = parseFloat(tinputh)+parseFloat(thisval);
            noinput++;
        }
        i++;
    });

    var hprofile = i-1;
    let table_span = '';


   if(i==1){
        var doorsectionheight = ((doorheighcal-(hprofile*2))/i)-topprofile-bottomprofile;
        var topsecmaterial = doorsectionheight*doorfillwidth;
        var topsecmaterialm = topsecmaterial/1000000;
        body +=`<tr>
        <th>
            Cena sekcie dverí
            <div class="align-items-center d-flex gap11">
                <span >
                    <table class="tabtab" style="height:50px; width:50px">
                        <tr><td style="height:50px; width:50px"></td></tr>
                    </table>
                </span>
                
            </div>
        </th>
        <td>

            <span class="calc_panel">Materiál dverí </span> 
            <span class="calc_panel">${topsecmaterial.toFixed(2)} mm2</span> 
            <span class="calc_panel">${topsecmaterialm.toFixed(4)}m2</span> <br><hr>

            <span class="calc_panel">Cena materiálu dverí</span> 
            <span class="calc_panel">${(topsecmaterialm*dtdm).toFixed(2)}€</span> <br><br>
        </td>
        </tr>`;  
            wardrobe_tcost =parseFloat(wardrobe_tcost)+parseFloat(topsecmaterialm*dtdm);
    }else if(i >= 2){
       if(noinput >= 1){
        var input1 = $(this).find('.input-1').val();
        if(noinput > 1){
            var input2 = $(this).find('.input-2').val();
        }else{
            var input2 = 0;
        }
        
        let automaticcalculatesection = i-noinput;
        let automaticalycalheight = doorfillheight-(parseFloat(input1)+parseFloat(input2));
         let editedsectionfillheigth2 = 0;   
        if(noinput > 1){
            editedsectionfillheigth2 = doorfillheight  - (parseFloat(automaticalycalheight)+parseFloat(input1))-(hprofile*2);
        }

        let editedsectionfillheigth1 = doorfillheight  - (parseFloat(automaticalycalheight)+parseFloat(input2))-(hprofile*2);
        let editedautomaticalyheight = doorfillheight - editedsectionfillheigth1 - editedsectionfillheigth2;
        
        //material calculation each section
        let editedsectiontotalmaterial1 = editedsectionfillheigth1*doorfillwidth;
        let editedsectiontotalmaterial2 = editedsectionfillheigth2*doorfillwidth;
        let editedsectiontotalmaterialauto = editedautomaticalyheight*doorfillwidth*automaticcalculatesection;

        //total material calculation
        let totalmaterialcalculation = (parseFloat(editedsectiontotalmaterial1)+parseFloat(editedsectiontotalmaterial2)+parseFloat(editedsectiontotalmaterialauto))/1000000

         var  totaldoorsectionmaterial = parseFloat(editedsectiontotalmaterial1)+parseFloat(editedsectiontotalmaterial2)+parseFloat(editedsectiontotalmaterialauto);
         var totaldoorsectionmaterialM = totalmaterialcalculation;

         
           for(let m=0 ;m<i;m++){
              doorsectionmaterial=0;
              if(m==0){
                doorsectionmaterial = editedsectiontotalmaterial1;
              }else{
                if(input2 > 0){
                    doorsectionmaterial = editedsectiontotalmaterial2;
                }else{
                    doorsectionmaterial = editedautomaticalyheight*doorfillwidth;
                }
              }
               table_span +=  `<span class="calc_panel">Sekcia ${m+1} Materiál</span> 
                <span class="calc_panel">${(doorsectionmaterial).toFixed(2)}mm2</span>    
                <span class="calc_panel">${(doorsectionmaterial/1000000).toFixed(4)}m2</span>     
                <hr>`;
            }


    }else{
           
           //one door section height
           var dooronesectionheight = ((doorfillheight-(hprofile*2))/i);   
           var  doorsectionmaterial = dooronesectionheight*doorfillwidth;
           var  totaldoorsectionmaterial = doorsectionmaterial*i;
           var totaldoorsectionmaterialM = totaldoorsectionmaterial/1000000;
            for(let m=0 ;m<i;m++){
               table_span +=  `<span class="calc_panel">Sekcia ${m+1} Materiál</span> 
                <span class="calc_panel">${(doorsectionmaterial).toFixed(2)}mm2</span>    
                <span class="calc_panel">${(doorsectionmaterial/1000000).toFixed(4)}m2</span>     
                <hr>`;
            }

        }
        let table_tr = '';
        for(let m=0 ;m<i;m++){
           table_tr +=  `<tr><td style="height:50px; width:50px"></td></tr>`;
        }
        
        body +=`<tr>
        <th>
            Sekcie dverí
            <div class="align-items-center d-flex gap11">
                <span >
                    <table class="tabtab" style="height:50px; width:50px">
                         ${table_tr}   
                    </table>
                </span>
                
            </div>
        </th>
        <td>
            ${table_span}    
            <span class="calc_panel">Materiál dverí </span> 
            <span class="calc_panel">${totaldoorsectionmaterial.toFixed(2)} mm2</span> 
            <span class="calc_panel">${totaldoorsectionmaterialM.toFixed(4)}m2</span> <hr>

            <span class="calc_panel">Cena materiálu dverí</span> 
            <span class="calc_panel">${(totaldoorsectionmaterialM*dtdm).toFixed(2)}€</span> <hr>


        </td>
        </tr>`; 

         wardrobe_tcost =parseFloat(wardrobe_tcost)+parseFloat(totaldoorsectionmaterialM*dtdm);
        
    }
});


       //interior calculation
       let divingwallwidth = d-105;
       let shelfwidth = divingwallwidth-5;
       let roomwidth = (w-((count-1)*2)-(swdtdcount*18))/count;
       let shelflength = roomwidth;


//imp
//  $('.get_table4Dom').find('.interior-cls').each(function(i){
//            let no_drawer = $(this).attr('data-drawers')
//            let total_drawer = $(this).attr('drawers-total')
//            let no_shelves = $(this).attr('data-shelves')
//            let total_shelves = $(this).attr('shelves-total')
//            let no_hanger = $(this).attr('data-hanger');

//            let did = $(this).parents('div.cust_width').attr('data-id');
//            let sub = 0;
//            let div = 1;
//       alert(did)
     
//            if($('.get_table4Dom').find('#check-div-'+did).is(':checked')){
//                $('.get_table4Dom .inside_td ').find('.interior-cls').each(function(i){
//                   // alert($(this).attr('data-drawers'))
//                });
//                 div = 2;
//                 sub = 18;
              
//            }
//   });


       //note 
    let totalnodrawer = 0
    $('.get_table4Dom').find('.cust_width').each(function(i){
           let noloops = 1;
           let splitingthicknes = 0;
           let section = 1;

           let no_drawer = 0
           let total_drawer = 0
           let no_shelves = 0
           let total_shelves = 0
           let no_hanger = 0

           let did = $(this).attr('data-id');
           var interiorArr = [];
           if($('.get_table4Dom').find('#check-div-'+did).is(':checked')){
                for(let z=0;z<2;z++) {
                    let inss='inside';
                    if(z==1){
                        inss='insidee';
                    }    
                    no_drawer = $('.get_table4Dom #'+inss+'-'+did).find('.interior-cls').attr('data-drawers')
                    total_drawer = $('.get_table4Dom #'+inss+'-'+did).find('.interior-cls').attr('drawers-total')
                    no_shelves = $('.get_table4Dom #'+inss+'-'+did).find('.interior-cls').attr('data-shelves')
                    total_shelves = $('.get_table4Dom #'+inss+'-'+did).find('.interior-cls').attr('shelves-total')
                    no_hanger = $('.get_table4Dom #'+inss+'-'+did).find('.interior-cls').attr('data-hanger');
                    
                        let assocArr = [];
                        
                        assocArr['no_drawer'] = no_drawer;
                        assocArr['total_drawer']= total_drawer;
                        assocArr['no_shelves']=no_shelves;
                        assocArr['total_shelves'] = total_shelves;
                        assocArr['no_hanger']= no_hanger;
                            
                    
                   

                    interiorArr.push(assocArr);
                } 
                 noloops = 2;
                 splitingthicknes = 18;
                 section = 2;
              
           }else{
                no_drawer = $(this).find('.interior-cls').attr('data-drawers')
                total_drawer = $(this).find('.interior-cls').attr('drawers-total')
                no_shelves = $(this).find('.interior-cls').attr('data-shelves')
                total_shelves = $(this).find('.interior-cls').attr('shelves-total')
                no_hanger = $(this).find('.interior-cls').attr('data-hanger');

               let assocArr = [];
                        
                assocArr['no_drawer'] = no_drawer;
                assocArr['total_drawer']= total_drawer;
                assocArr['no_shelves']=no_shelves;
                assocArr['total_shelves'] = total_shelves;
                assocArr['no_hanger']= no_hanger;
                            
                interiorArr.push(assocArr);
                noloops = 1;
           }

           
           var shelfwidth = d-105-5;
            
           for(let x=0;x<noloops;x++){

totalnodrawer = parseFloat(totalnodrawer)+parseFloat(no_drawer);

                no_drawer = interiorArr[x]['no_drawer'];
                total_drawer = interiorArr[x]['total_drawer'];
                no_shelves = interiorArr[x]['no_shelves'];
                total_shelves = interiorArr[x]['total_shelves'];
                no_hanger = interiorArr[x]['no_hanger'];

        if(no_shelves > 0){
              
               //ROOM width = R
               let shelvesM =    ((d*shelflength*no_shelves)-splitingthicknes)/section;
               let shelvesabsM =  (shelflength*no_shelves-splitingthicknes)/section;
               let hangerM = (shelflength-splitingthicknes)/section;

                let shelveprice = ((shelfwidth*shelflength*no_shelves)*dtdm/1000000)/section;
                let shelveabsprice = (shelflength*no_shelves*absm/1000)/section;
                let coathangerprice = (shelflength*absm/1000)/section;

                body +=`<tr>
                <th>
                    <div class="align-items-center d-flex gap11">
                        <span >
                            <table class="tabtab" style="height:50px; width:50px">
                                <tr><td> Možnosť interiéru ${i+1} </td></tr>
                            </table>
                        </span>
                        
                    </div>
                </th>
                <td>
                    <span class="calc_panel">${no_shelves} police</span> 
                    <span class="calc_panel">${(shelvesM/1000000).toFixed(2)} m2</span><br><br>
                    <span class="calc_panel">Cena políc</span> 
                    <span class="calc_panel">${shelveprice.toFixed(2)} €</span>
                     <hr>

                    <span class="calc_panel">ABS hrana ${no_shelves} políc</span> 
                    <span class="calc_panel">${(shelvesabsM/1000).toFixed(2)} m</span><br><br>
                     <span class="calc_panel">Cena ABS políc</span> 
                    <span class="calc_panel">${shelveabsprice.toFixed(2)} €</span>
                     <hr>

                    <span class="calc_panel">${no_hanger} vešiaková tyč</span> 
                    <span class="calc_panel">${(hangerM/1000).toFixed(2)} m</span><br><br>
                    <span class="calc_panel">vešiaková tyč</span> 
                    <span class="calc_panel">${coathangerprice.toFixed(2)} €</span>

                </td>
                </tr>`;  
                 wardrobe_tcost =parseFloat(wardrobe_tcost)+parseFloat(shelveprice)+parseFloat(shelveabsprice)+parseFloat(coathangerprice);

           }else if(no_drawer > 0){
               let drawerheight = 200;
               
               //Drawer front and back
               let drawerfb = (((((drawerheight-50)*(shelflength-99)) - splitingthicknes)*no_drawer)/1000000);
               drawerfb = drawerfb/section;
               let cabinetdrawercost = drawerfb*dtdm; //8
               let cabinetdrawercosttotal = cabinetdrawercost*2*no_drawer;
               let cabinetmaterialtotal = drawerfb*2*no_drawer;

               //Drawer sides
               let drawerside = ((((d-100-50)*(drawerheight-50))*no_drawer - splitingthicknes ))/1000000;
               drawerside = drawerside/section;
               let cabinetsidecost = drawerside*dtdm; //8
               let cabinetsidecosttotal = cabinetsidecost*2*no_drawer;
               let cabinetsidematerialtotal = drawerside*2*no_drawer;

               //Drawer bottom--
               let drawerbottom = (((shelflength-62)*(d-153)- splitingthicknes ))/1000000;
               drawerbottom = drawerbottom/section;
               let drawerbottomcost = drawerbottom*6.5*no_drawer


               //Drawer bottom ABS 
               let drawerbottomabs = ((d-153)- splitingthicknes )/1000;
               drawerbottomabs = drawerbottomabs/section;
               let drawerbottomabscost = drawerbottomabs*absm;
               let drawerbottomabscosttotal = drawerbottomabscost*2*no_drawer;
               let drawerbottomabsmaterialtotal = drawerbottomabs*2*no_drawer;


               //Drawer container top and bottom
               let drawercontainertb= ((shelflength*(d-100))- splitingthicknes )/1000000;
               drawercontainertb = drawercontainertb/section;
               let drawercontainermaterialtotal = drawercontainertb*2*no_drawer;
              // let drawercontainercost = drawercontainermaterialtotal*8;
               let drawercontainercosttotal = drawercontainermaterialtotal*dtdm;
              

              
               //Drawer container front and back ABS (remaining)
               let drawercontainerfb = (((w/count)-splitingthicknes)/1000);
               let drawercontainerfbcost = ((drawercontainerfb*absm)/section); 

             

               //Drawer container sides
               let containersides = (((drawerheight-36)*(d-100))-splitingthicknes)/1000000;
               containersides = containersides/section;
               let containersidescost = containersides*dtdm;
               let containersidescosttotal = containersidescost*2*no_drawer;
               let containersidesmaterialtotal = containersides*2*no_drawer;

               //Drawer container sides ABS
               let containersidesabs = ((2*(drawerheight-36))-splitingthicknes)/1000;
               containersidesabs = containersidesabs/section;
               let containersidesabscost = containersidesabs*absm;
               let containersidesabscosttoatal = containersidesabscost*2*no_drawer;
               let containersidesabsmaterialtoatal = containersidesabs*2*no_drawer;
               
               //Drawer container back
               let containerback = (((shelflength - 11)*(drawerheight-11))-splitingthicknes)/1000000;
               containerback = containerback/section;
               let containerbackcost = containerback*dtdm;
               let containerbackcosttotal = containerbackcost*2*no_drawer
               let containerbackmaterialtotal = containerback*2*no_drawer


             body +=`<tr>
                <th>
                    <div class="align-items-center d-flex gap11">
                        <span >
                            <table class="tabtab" style="height:50px; width:50px">
                                <tr><td> Možnosť interiéru ${i+1} </td></tr>
                            </table>
                        </span>
                        
                    </div>
                </th>
                <td>
                    <span class="calc_panel">Predná a zadná zásuvka</span> 
                    <span class="calc_panel">${cabinetmaterialtotal.toFixed(2)} m2</span><br><br>
                    <span class="calc_panel">Predná a zadná zásuvka</span> 
                    <span class="calc_panel">${cabinetdrawercosttotal.toFixed(2)} €</span>
                    <hr>

                    <span class="calc_panel">Strany zásuvky</span> 
                    <span class="calc_panel">${cabinetsidematerialtotal.toFixed(2)} m2</span><br><br>
                    <span class="calc_panel">Strany zásuvky Cena </span> 
                    <span class="calc_panel">${cabinetsidecosttotal.toFixed(2)} €</span>

                     <hr>
                    
                    <span class="calc_panel">Dna zásuvky Materiál</span> 
                    <span class="calc_panel">${drawerbottom.toFixed(2)} m2</span><br><br>
                    <span class="calc_panel">Cena Dna zásuvky</span> 
                    <span class="calc_panel">${drawerbottomcost.toFixed(2)} €</span>

                     <hr>
                   
                    <span class="calc_panel">ABS dna zásuvky (x1)</span> 
                    <span class="calc_panel">${drawerbottomabsmaterialtotal.toFixed(2)} m</span> <br><br>
                    <span class="calc_panel">Celková ABS dna zásuvky (x${no_drawer})</span> 
                    <span class="calc_panel">Cena ${drawerbottomabscosttotal.toFixed(2)} €</span> 

                    <hr>     
                    
                    <span class="calc_panel">Horný a dolný zásuvkový kontajner materiálu</span> 
                    <span class="calc_panel">${drawercontainermaterialtotal.toFixed(2)} m2</span> <br><br>
                     <span class="calc_panel">Horný a dolný zásuvkový kontajner cena</span>
                    <span class="calc_panel">${drawercontainercosttotal.toFixed(2)} €</span> 
                    <hr>     
                   
                    <span class="calc_panel">ABS na predný a zadný zásuvkový kontajner</span> 
                    <span class="calc_panel">${drawercontainerfb.toFixed(2)} m</span> <br><br>
                    <span class="calc_panel">Cena ABS na predný a zadný zásuvkový kontajner</span> 
                    <span class="calc_panel">${drawercontainerfbcost.toFixed(2)} €</span> 
                    <hr>  

                    <span class="calc_panel">Boky zásuvkového kontajnera</span> 
                    <span class="calc_panel">${containersidesmaterialtotal.toFixed(2)} m2</span> <br><br>
                     <span class="calc_panel">Cena boky zásuvkového kontajnera</span> 
                    <span class="calc_panel">${containersidescosttotal.toFixed(2)} €</span> 

                    <hr>     
                   
                    <span class="calc_panel">ABS na bokoch zásuvkového kontajnera</span> 
                    <span class="calc_panel">${containersidesabsmaterialtoatal.toFixed(2)} m</span><br><br>
                    <span class="calc_panel">Cena ABS na bokoch zásuvkového kontajnera</span> 
                    <span class="calc_panel">${containersidesabscosttoatal.toFixed(2)} €</span>
                     <hr> 

                    <span class="calc_panel">Chrbát zásuvkového kontajnera</span> 
                    <span class="calc_panel">${containerbackmaterialtotal.toFixed(2)} m2</span><br><br>
                    <span class="calc_panel">Cena chrbát zásuvkového kontajnera </span> 
                    <span class="calc_panel">${containerbackcosttotal.toFixed(2)} €</span>

                </td>
                </tr>`; 

                wardrobe_tcost =parseFloat(wardrobe_tcost)+parseFloat(cabinetdrawercosttotal)+parseFloat(cabinetsidecosttotal)+parseFloat(drawerbottomcost)+parseFloat(drawerbottomabscosttotal)+parseFloat(drawercontainercosttotal)+parseFloat(drawercontainerfbcost)+parseFloat(containersidescosttotal)+parseFloat(containersidesabscosttoatal)+parseFloat(containerbackcosttotal)


           }else if(no_hanger > 1){
               let coathangerprice = 3.90;
               let hangerM = ((shelflength)-splitingthicknes)/section;
               let hangerMcost = (hangerM/1000)*coathangerprice;

               body +=`<tr>
                <th>
                    <div class="align-items-center d-flex gap11">
                        <span >
                            <table class="tabtab" style="height:50px; width:50px">
                                <tr><td> Možnosť interiéru ${i+1} </td></tr>
                            </table>
                        </span>
                        
                    </div>
                </th>
                <td>
                    <span class="calc_panel">${no_hanger} vešiaková tyč</span> 
                    <span class="calc_panel">${hangerM.toFixed(2)} mm</span><hr>

                    <span class="calc_panel"> cena vešiakovej tyče</span> 
                    <span class="calc_panel">${hangerMcost.toFixed(2)} €</span><hr>
                </td>
                </tr>`;  

               wardrobe_tcost =parseFloat(wardrobe_tcost)+parseFloat(hangerMcost) 
           }
            }
       });
          
  
           let toprailcost = 20;
           let bootmrailcost = 10;

let railwidthm = h/1000;

           let totaltoprailcost = railwidthm*toprailcost;
           let totalbootomprailcost = railwidthm*bootmrailcost;
           let totalrailcost = parseFloat(totaltoprailcost)+parseFloat(totalbootomprailcost);

            wardrobe_tcost =parseFloat(wardrobe_tcost)+parseFloat(totalrailcost); 
            body +=`<tr>
            <th>
               Výpočet koľajnice
            </th>
            <td>
                <span class="calc_panel">Vrchná koľajnica</span> 
                <span class="calc_panel">${railwidthm} m</span><br><br>
                <span class="calc_panel">Cena vrchnej koľajnice = ${totaltoprailcost.toFixed(2)} €</span> <br><br>

                <span class="calc_panel">Spodná koľajnica </span> 
                <span class="calc_panel">${railwidthm} m</span><br><br>
                <span class="calc_panel">Cena spodnej koľajnice = ${totalbootomprailcost.toFixed(2)} €</span> <br><br>
                
                <span class="calc_panel">Celková cena koľajníc</span> 
                <span class="calc_panel">=</span> 
                <span class="calc_panel">${totalrailcost.toFixed(2)} €</span> <hr>

            </td>
            </tr>`;

            let drawerrailcost = totalnodrawer*40;
            wardrobe_tcost =parseFloat(wardrobe_tcost)+parseFloat(drawerrailcost); 
             body +=`<tr>
            <th>
               Výpočet zásuvkovej koľajnice
            </th>
            <td>
                <span class="calc_panel">Výpočet zásuvkovej koľajnice</span> <br><br>
                <span class="calc_panel">Celkový počet šuflíkov = ${totalnodrawer} </span> <br><br>
                <span class="calc_panel">Cena zásuvkových koľajníc</span> 
                <span class="calc_panel"> ${drawerrailcost.toFixed(2)} €</span> <br><br>
            </td>
            </tr>`;
       $('#calc-body').html(body);


    // topshelf=(((d-100)*(w-18))*dtdm)/1000000;
    // topshelfabs=((w-18)*absm)/1000;
    // dividerwall = ((d-100)*tilltopshefheight*dtdm*wallcount)/1000000;
    // dividerwallabs = (tilltopshefheight*absm*wallcount)/1000;
    
    // let sidecost = parseFloat(sidepanel)+parseFloat(sidepanelabs);
    // let sidewcost = parseFloat(sidewall)+parseFloat(sidewallabs);
    // let topscost = parseFloat(topshelf)+parseFloat(topshelfabs);
    // let dividingcost = parseFloat(dividerwall)+parseFloat(dividerwallabs);

    // $('#side-panel-cost').text(sidecost.toFixed(2)+' €');
    // $('#side-wall-cost').text(sidewcost.toFixed(2)+' €');
    // $('#top-shelf-cost').text(topscost.toFixed(2)+' €');
    // $('#dividing-wall-cost').text(dividingcost.toFixed(2)+' €');
    
var gt = parseFloat(sidepanel) + parseFloat(sidepanelabs) + parseFloat(sidewall) + parseFloat(sidewallabs)  +  parseFloat(topshelf)  + parseFloat(topshelfabs) + parseFloat(dividerwall) +  parseFloat(dividerwallabs) + parseFloat(profilecal);
    
     $('.wardrobe-tcost').text(wardrobe_tcost.toFixed(2)+' €');
      
}

//end calculation


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
    $('#last-clone-app').find('#tab9_img_final').attr('id','');

    var html = $('#last-clone-app').clone();
    $('#last-clone-app-two').html(html);
    $('#last-clone-app-two').find('#last-clone-app').attr('id','')
    
    var count = $('#radio-img-count').val();
    if(count == 5){
        $('.tab-10-page').find('.tab10-col-9').removeClass('col-md-9').addClass('col-md-7')
        $('.tab-10-page').find('.tab10-col-3').removeClass('col-md-3').addClass('col-md-5')
    }else if(count == 4){
        $('.tab-10-page').find('.tab10-col-9').removeClass('col-md-9').addClass('col-md-8')
        $('.tab-10-page').find('.tab10-col-3').removeClass('col-md-3').addClass('col-md-4')
       
    }
});

// ================== tab 4 JS ==========
    $(document).on('click','#tab_id_btn4',function(){
            $('.err-top-height').text('')
            $('.get_table4Dom').find('.cust_width').removeClass('box_select'); 
            var getDom = $('.get_table4Dom').html();
            $('.table_num5').html(getDom);

            //new 08-05
            $('.final_image_tab4').html(getDom);
            $('.table_num5').find('.fs_reduce').remove()
            $('.table_num5').find('#tab4-inside-tr').attr('id','')
            $(".final_image_tab4").find(".tab_4_top_table").css("display","none");
            $(".final_image_tab4").find(".grid_end").addClass("justify-content-center");
            
            $('#tab4-inside-tr').removeClass('box_select_inside_1');

            $('.table_num5 .cust_width').each(function(){
              $(this).addClass('box_select');
            });
        
    });




//================ tab 5 img ================
$('.select_imgs_tab5').click(function () {
    var img = $(this).attr('src');
    var color = $(this).attr('data-color');
    var dataSrc = $(this).attr('data-namesrc');
    $('.reduce_box').removeClass('tab5imgBorderRed');
    $(this).addClass('tab5imgBorderRed');
    $('.interiér-skrine-color').text(color);
    
    $('.interiér-skrine-img').attr('src',img);
    $('.abs-img-cls').attr('src',img);
    $('.abs-color-cls').text(color);

    $('.stena-img').attr('src',img);
    $('.stena-color-cls').text(color);
    
    //$('.tab5').addClass('addWoodImg');
    $('.box_select').addClass('addWoodImg');
    $('.box_select').css({ "background-image": "url(" + img + ")", "background-size": "100% 100% !important" });
    //$('.inside_td').css({ "background-image": "url(" + img + ")", "background-size": "100% 100% !important" });
    countTabImages();

    //$(this).closest('.overlay-text').css('display','block');
        
        $('.dekor-text-cls').css('display','none')
        var key = $(this).attr("data-nameid");
        $('span#tab5-mname-'+key).css('display','block');
        // $('#interior-color').html(color.substr(0, 1).toUpperCase() + color.substr(1).toLowerCase());
        $('#interior-color').html(`<img src=${dataSrc} class="img-fluid" style="width:150px;"><br><span>${color.substr(0, 1).toUpperCase() + color.substr(1).toLowerCase()}</span>`);
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
    $('.active_t6').html(dom);

    //add new (22-05-2023)
    let doms = $('.section-tab6 .active_t6').parents('.tab6-td').next('.tab6-td').children('.table_6_click');
    $('.section-tab6 .active_t6').removeClass('active_t6')
    doms.addClass('active_t6')
    //end new

    calculate_door_section();
    btn_tab6_access();
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
        loop: false,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        slidesPerView: 'auto',
        paginationClickable: true,
        spaceBetween: 20,
        breakpoints: {
            1920: {
                slidesPerView: 10,
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
        loop: false,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        slidesPerView: "auto",
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
        var selectedValue = $('input[name=radio_img]:checked').next('label').text().trim();
        var firstValuePosition = selectedValue.charAt(0);
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
                $('#add-premises').html(firstValuePosition + ' časť');
                break;

            case "imge_2":
                $("#table_1").hide();
                $("#table_2").show();
                $("#table_3").hide();
                $("#table_4").hide();
                $("#table_5").hide();
                var display_val = parseInt(((getVal / 2) - 0));
                $('.added_sirka_value').html(display_val);
                $('#add-premises').html(firstValuePosition + ' časť');
                break;

            case "imge_3":
                $("#table_1").hide();
                $("#table_2").hide();
                $("#table_3").show();
                $("#table_4").hide();
                $("#table_5").hide();
                var display_val = parseInt(((getVal / 3) - 0));
                $('.added_sirka_value').html(display_val);
                $('#add-premises').html(firstValuePosition + ' časť');
                break;

            case "imge_4":
                $("#table_1").hide();
                $("#table_2").hide();
                $("#table_3").hide();
                $("#table_4").show();
                $("#table_5").hide();
                var display_val = parseInt(((getVal / 4) - 0));
                $('.added_sirka_value').html(display_val);
                $('#add-premises').html(firstValuePosition + ' časť');
                break;
                
            case "imge_5":
                $("#table_1").hide();
                $("#table_2").hide();
                $("#table_3").hide();
                $("#table_4").hide();
                $("#table_5").show();
                var display_val = parseInt(((getVal / 5) - 0));
                $('.added_sirka_value').html(display_val);
                $('#add-premises').html(firstValuePosition + ' časť');
                break;
        }
    });


    // ============= TAB 2 JS ==============================
    $(document).on('keyup','#top-height_inpField',function(){
         var h = $('#length_check_0').val();
         var ch = $('#top-height_inpField').val();
        //      var th = h-ch;
        //      $('.vertical_arrow span').text(ch+'mm');
        //     // $('.small_vertical_arrow span').text(th+'mm');
      
        if(parseFloat(h) < parseFloat(ch)){
            var sl = ch.slice(0, -1);
            $('#top-height_inpField').val(sl);
            $('.err-top-height').text('Višina ne sme presegati višine zadka');
        }
        countnewImage();
    });

    function check_difference(){
        //var h3 = $('#length_check_3').val();
        //var h0 = $('#length_check_0').val();

        var checktype = $('#wardrobe-type-id').val()

        // if(checktype == 'wtype-A'){

        // }else if(checktype == 'wtype-B'){
            
        // }else if(checktype == 'wtype-C'){
            
        // }else if(checktype == 'wtype-D'){
            
        // }
        var h = [];
        $('.'+checktype+'-cls').find('.each-height').each(function(){
            let tv = $(this).val();
            h.push(tv);
        });
        
        var h3 = Math.max.apply(Math,h); // 3
        var h0 = Math.min.apply(Math,h); // 1

       // h3 = parseFloat(h3);
       // h0 = parseFloat(h0);
        let diff = 0;
        if(h0 && h3){
            if(h0 >= h3){
              diff = h0-h3;
            }else{
              diff = h3-h0; 
            }
            if(parseFloat(diff) > parseFloat(50)){
                $(".err-left").text('Ľavý a pravý výškový rozdiel nesmie byť viac ako 50 mm')
                $('.vyskaRight1').css('border-color', 'red');
                $('.vyskaleft1').css('border-color', 'red');

                $('.vyskaRight2').css('border-color', 'red');
                $('.vyskaleft2').css('border-color', 'red');

                $('.vyskaRight3').css('border-color', 'red');
                $('.vyskaleft3').css('border-color', 'red');

                $(".err-left").css('display', 'block');
                $('#btn_second').attr('disabled',true)
                return false;
            }else{
                $('.vyskaRight1').css('border-color', '#e3e8ee');
                $('.vyskaleft1').css('border-color', '#e3e8ee');

                $('.vyskaRight2').css('border-color', '#e3e8ee');
                $('.vyskaleft2').css('border-color', '#e3e8ee');

                $('.vyskaRight3').css('border-color', '#e3e8ee');
                $('.vyskaleft3').css('border-color', '#e3e8ee');

                $(".err-left").css('display', 'none');
                $('#btn_second').attr('disabled',false)
                return true;
            }
        }
    }



    var setRightHeight3 = $('.vyskaRight3').keyup(function () {
        var h = $('#max-height').val();
        var nn = $(this).val();
        if (/\D/g.test(nn))
        {
            nn = nn.replace(/\D/g, '');
            $(this).val(nn);
        }
        if ($(this).val() > parseInt(h)) {
          
            nn = nn.substring(0,nn.length - 1);
            $(this).val(nn);
            $(".err-right-1").text('(Maximum: '+h+'mm)') 

            $(this).css('border-color', 'red')
            $(".err-right-1").css('display', 'block');
        } else {
            $(this).css('border-color', 'gray')
            $(".err-right-1").css('display', 'none')
        }
        $('#h-add-frontRight').html(nn);
        setRightHeight3.not(this).val(nn);
        let checkdiff = check_difference();
        if(checkdiff == true){
            check_length(); 
        }
    });

     

      var setLeftHeight3 = $('.vyskaleft3').keyup(function () {
        var nn = $(this).val();
        if (/\D/g.test(nn))
        {
            nn = nn.replace(/\D/g, '');
            $(this).val(nn);
        }
        $('#left-h-img').html(nn);
        var h = $('#max-height').val();
        if (nn > parseInt(h)) {
            nn = nn.substring(0,nn.length - 1);
            $(this).val(nn);
            $(".err-left-1").text('(Maximum: '+h+'mm)')
            $(this).css('border-color', 'red');
            $(".err-left-1").css('display', 'block');
        } else {
            $(this).css('border-color', 'gray')
            $(".err-left-1").css('display', 'none')
        }
        setLeftHeight3.not(this).val(nn);
        $('#h-add-left').html(nn);

        let checkdiff = check_difference();
        if(checkdiff == true){
            check_length(); 
        }
    });
    
    var setLeftHeight = $('.vyskaleft1, .vyskaleft2').keyup(function () {
        var nn = $(this).val();
        if (/\D/g.test(nn))
        {
            nn = nn.replace(/\D/g, '');
            $(this).val(nn);
        }
        $('#left-h-img').html(nn);
        var h = $('#max-height').val();
        if (nn > parseInt(h)) {
            nn = nn.substring(0,nn.length - 1);
            $(this).val(nn);
            $(".err-left").text('(Maximum: '+h+'mm)')
            $(this).css('border-color', 'red');
            $(".err-left").css('display', 'block')
        } else {
            $(this).css('border-color', 'gray')
            $(".err-left").css('display', 'none')
        }
        setLeftHeight.not(this).val(nn);
        $('#h-add-left').html(nn);

        let checkdiff = check_difference();
        if(checkdiff == true){
            check_length(); 
        }
    });

    var setDepthh = $('.hlbka1, .hlbka2').keyup(function () {
        var nn = $(this).val();
        if (/\D/g.test(nn))
        {
            nn = nn.replace(/\D/g, '');
            $(this).val(nn);
        }
        var d = $('#max-depth').val();
        if ($(this).val() > parseInt(d)) {
            nn = nn.substring(0,nn.length - 1);
            $(this).val(nn);
            $(".err-hlbka").text('Hĺbka(Maximum: '+d+'mm)')

            $(this).css('border-color', 'red')
            $(".err-hlbka").css('display', 'block')
        } else {
            $(this).css('border-color', 'gray')
            $(".err-hlbka").css('display', 'none')
        }
        $('#h-add-depth').html(nn);
        setDepthh.not(this).val(nn);
       // check_length()
        let checkdiff = check_difference();
        if(checkdiff == true){
            check_length(); 
        }

    });

    var setWidthh = $('.sirka1, .sirka2').keyup(function () {
        
         var nn = $(this).val();
         if (/\D/g.test(nn))
        {
            nn = nn.replace(/\D/g, '');
            $(this).val(nn);
        }
        var w = $('#max-width').val();
        if ($(this).val() > parseInt(w)) {
            
            nn = nn.substring(0,nn.length - 1);
            $(this).val(nn);
            $(".err-sirka").text('(Maximum: '+w+'mm)')

            $(this).css('border-color', 'red')
            $(".err-sirka").css('display', 'block')
        } else {
            $(this).css('border-color', 'gray')
            $(".err-sirka").css('display', 'none')
        }
        $('#h-add-width').html(nn);
        setWidthh.not(this).val(nn);
        //check_length()
        let checkdiff = check_difference();
        if(checkdiff == true){
            check_length(); 
        }
    });

    var setRightHeight = $('.vyskaRight1, .vyskaRight2').keyup(function () {
        var h = $('#max-height').val();
        var nn = $(this).val();
        if (/\D/g.test(nn))
        {
            nn = nn.replace(/\D/g, '');
            $(this).val(nn);
        }
        if ($(this).val() > parseInt(h)) {
          
            nn = nn.substring(0,nn.length - 1);
            $(this).val(nn);
            $(".err-right").text('(Maximum: '+h+'mm)') 

            $(this).css('border-color', 'red')
            $(".err-right").css('display', 'block');
        } else {
            $(this).css('border-color', 'gray')
            $(".err-right").css('display', 'none')
        }
        $('#h-add-frontRight').html(nn);
        setRightHeight.not(this).val(nn);
        let checkdiff = check_difference();
        if(checkdiff == true){
            check_length(); 
        }
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
        for (var i = 0; i < 6; i++) {
            var val = $('#length_check_' + i).val();

            if (i == 0) {
                if (val && isNaN(val) == false) {
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
    
  $(document).on('keyup',function(){
        let email = $('.Vas_e_mail').val()
        let emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        let check =  emailReg.test(email);
        if(check == false || email == ''){
           $('.ttl_price').css('display','none')
        }

  })

    $('.email-check-btn').on('click',function(){
        var email = $('.Vas_e_mail').val()
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        var check =  emailReg.test(email);
        if(check == true && email != ''){
            $('.ttl_price').css('display','block')
        }else{
            $('.ttl_price').css('display','none')
        }
    });
 

    $('.calculate-hwd').on('click',function(){
        $('.type-abcd-sidebar').css('display','none')
       var d = $(this).attr('data-dimension');
       var type = $(this).attr('data-wtype');
       $('#wardrobe-type-id').val(type)
       var cls = $(this).attr('data-wcls');
     
       $('.'+cls).css('display','flex')
     
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
        if($('#closet_open').hasClass('addBgRed')){
           $('#closet_open').trigger('click')
        }
        var count = 'table_tab_7';
        $('.dom_table6').find('.get_table5Dom').hide();
        $('.tab7_tableDom').html('');
        $('.dom_table6').clone(true).appendTo('.tab7_tableDom').find('table').attr('id', count);
        $('.tab7_tableDom').find('.table_6_click').removeClass('active_t6');
        
        // 05/06/2023
        $('.tab7_tableDom').find('input').each(function() {
          $(this).replaceWith("<span class='input-heights'>" + this.value + "</span>");
        });
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
    
    $('#closet_open').on('click', function() {
         $('.dom_table6').find('.get_table5Dom').show();
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
        let dataFrameSrc = $(this).attr('data-frame-color');
        $('.tab7_tableDom').find('.set_frame_color').css('background', $showColorCode);

        $('.výplne-dvier-color').text($showColorCode);
        $('.výplne-dvier-img').attr('src',img);
        $('#frame_name1').html($showColorCode);
        $('#door-frames').html(`<img src=${dataFrameSrc} class="img-fluid" style="width:150px;">`);
        
        var profiletype = $(this).attr('data-type');
        $('#profile-type-1').val(profiletype);

        $('#btn_tab_7').prop('disabled',false)
    });

    $('#btn_tab_7').on('click', function () {
         $('#tab-btn-8').prop('disabled',true)
        var changeID = 'table_tab_8'
        // $('.tab-8-table').html(getTAB7DOM).find('table').attr('id', changeID)
        $('.door-filler-imgs').html('')
        $('.selection_all_woodImgs input[type="checkbox"]').prop('checked', false);
        $('.tab-8-table').html('');
        $('.tab7_tableDom').clone(true).appendTo('.tab-8-table').find('table').attr('id', changeID);
        
        // $('.tab7_tableDom').find('input').each(function() {
        //   $(this).replaceWith("<span class='input-heights'>" + this.value + "</span>");
        // }); 

        $('.tab-8-table').find('tr').removeClass('td.framer_selections.active_t6')
        // alert('adding to tab 8')

        let  ptype = $('#profile-type-1').val();
        if(ptype == 'open'){
            $('#thick_two').attr('disabled',false);
        }else{
            $('#thick_one').attr('checked',true);
            $('#thick_two').attr('disabled',true);
        }

    });

    // ============== TAB 8 JS ============================

   

    // $(document).on('click', '.tab_8_img',function () {
    //     $('.reduce_box').removeClass('tab8imgBorderRed');
    //     $(this).addClass('tab8imgBorderRed');
    //     var $showImgPath = $(this).attr('src');
    //     var color = $(this).attr('data-color');
    //     //$('.abs-img-cls').attr('src',$showImgPath);
    //     //$('.abs-color-cls').text(color);

    //     var html = `<div class="col-md-4 col-4">
    //         <div class="card p-1">
    //             <img src="${$showImgPath}" alt="" class="Dub_img lazy ">
    //         </div>
    //     </div>`;

    //     $('.door-filler-imgs').append(html)

    //     $('.tab-8-table').find('.framer_selections.active_t6').css({ "background-image": "url(" + $showImgPath + ")", 'background-size': 'auto 100%' });
    //     $('.tab-8-table').find('.framer_selections.active_t6').removeClass('.framer_selections.active_t6')
    // });


    $(document).on('click', '.tab_8_img',function () {
        $('.reduce_box').removeClass('tab8imgBorderRed');
        $(this).addClass('tab8imgBorderRed');
        var $showImgPath = $(this).attr('src');
        var color = $(this).attr('data-color');
        var imgid = $(this).attr('data-id');
        
        
        $('.tab-8-table').find('.framer_selections.active_t6').css({ "background-image": "url(" + $showImgPath + ")", 'background-size': 'auto 100%' });
        $('.tab-8-table').find('.framer_selections.active_t6').attr('data-id',imgid)
        $('.tab-8-table').find('.framer_selections.active_t6').removeClass('.framer_selections.active_t6')
         var imgarr = [];
         var html = '';
         $('.tab-8-table').find('.framer_selections').each(function() {
            var thisid = $(this).attr('data-id');
            var thisimg = $(this).css("background-image");
            if(imgarr.includes(thisid) == false && thisimg != 'none'){
              imgarr.push(thisid);
              thisimg = /^url\((['"]?)(.*)\1\)$/.exec(thisimg);
              thisimg = thisimg ? thisimg[2] : "";

              html += `<div class="col-md-4 col-4">
                <div class="card p-1">
                    <img data-id="${thisid}" src="${thisimg}" alt="" class="Dub_img lazy ">
                </div>
              </div>`;
            }
         });

        $('.door-filler-imgs').html(html)

        var arr = [];
        if($.inArray(color, arr) === -1){
            var op = arr.push(color);
            $.each(arr, (i, val) =>{
                // console.log(val);
                $('#door-fillerzz').append(val+ ", ");
            })
        }
        // var getColorValues = arr.push(color);
        // console.log("COLOR VALUES:-"+ "  " + getColorValues)
        // var getUniqueValuesOfColor = new Set(getColorValues);
        // console.log("SET VALUES:-"+ "  " + getColorValues)
        // var output = getUniqueValuesOfColor.toString();
        // console.log("STRING VALUES:-"+ "  " + getColorValues)

        enabletab8();
        
    });



    // ================PREV BTN JS =============================
    $('#prev-btn9').on('click', function () {
        $(".final_image_col table").remove();
        // alert('going back...')
    })

    $('#prev-btn8').on('click', function () {
        $(".tab-8-table table").remove();
        // alert('going back...')
    })



    $('#prev-btn7').on('click', function () {
        $(".final_table table").remove();
        // alert('going back...')
     });

});

// function showLargeImage(cls) {
//     // alert($(this).attr('src'));
//     $('.' + cls).html('<img src="'+baseurl+'assests/web_assets/img_web/tab_4_ladyImgg.png" alt="abc" class="showing_zoomed_images"/>');
// }

function showLargeImageOut(cls) {
    $('.' + cls).html('');
}

// $(document).on('mouseenter','.interiorr_imgg',function(){
//     var getDataAttr = $(this).data('imgg');
//     if(getDataAttr == '1'){
//         $('.container_imgs').html('<img src="'+baseurl+'assests/web_assets/img_web/int_sideImg_1.jpg" alt="abc" class="showing_zoomed_images"/>');
//     }
//     else{
//         $('.container_imgs'+getDataAttr).html('<img src="'+baseurl+'assests/web_assets/img_web/int_sideImg_2.jpg" alt="abc" class="showing_zoomed_images"/>');
//     }
    
// });

// $("input:radio[name='floor_plan']").on('click', function() {
//  $('#btn_first').prop('disabled', false);
// });
$("input[name=floor_plan]").on("click", function () {
   var imgSrc = $(this).data('img-src');
   $('#ward-img').html(`<img src=${imgSrc} alt="final_images" style="width: 150px;"/>`)
});


$("input:radio[name='radio_img']").on('click', function () {
    $('#tab_btn_3').prop('disabled', false);
    $('#count-priestorov').val($(this).attr('data-val'));
});




//============== Tooltip =============
$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})

$(document).on('click','.added_table_1',function() {
    var id = $(this).attr("data-iid");
    if($(this).is(":checked")) {
        $('.cust_width').removeClass('box_select');
        var htm = `<table class="table div_added_table h242" >
             <tr>
               <td class="inside_td" id="inside-${id}"></td>
               <td class="inside_td" id="insidee-${id}"></td>
             </tr>
        </table>`;
        $("#divider"+id).html(htm);
    } else {
        $("#divider"+id).html('');
    }

    // incg++;
    countnewImage();
});



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


// 2 tab remove classs
$(document).on('click','#parameter_tab_two', function () {
    $('.bullet').removeClass('active');
    $('.prev').removeClass('active');
    $(".v_hide").addClass("V_hidden");
});

// jQuery(document).ready(function($) {
//   if (window.history && window.history.pushState) {
//     window.history.pushState('forward', null, './#forward');
//     $(window).on('popstate', function() {
//       alert('Back button was pressed.');
//     });
//   }
// });

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


