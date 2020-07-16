$(document).ready(function() {

        $("#datepicker").datepicker({ dateFormat: "dd-mm-yy" }).val();
    $("#datepicker").datepicker();
  });



	$(function () {

			//Calculator
	var sum = 3000000,
		time = 15,
		percent = 2,
		revenue = 0,
		result_outptut = jQuery(".revenue span");

	function recount() {
		revenue = Math.floor(sum*((time*30)*percent/365/100));
		result_outptut.html(revenue + ' &#8381;');
	};

	
  
   $('input[type="text"]').on('input', function() {
    var obj = $(this),
        max = obj.data('max'),
        min = obj.data('min');

    if (obj.val() >= max)
      obj.val(max);
    else if (obj.val() <= min)
      obj.val(min);

    })

   $(".slider-range-min")
  
  .slider({
		range: "min",
		step: 1000,
		value: 1000,
		min: 1000,
		max: 3000000,
		slide: function (event, ui) {
			$('.amount').val(ui.value).trigger("change");
		}
	});
	$(".amount").val($(".slider-range-min").slider("value"));

	$(".slider-range-min2").slider({
		range: "min",
		value: 1000,
		min: 1000,
		max: 3000000,
		slide: function (event, ui) {
			$(".amount2").val(ui.value).trigger("change");
		}
	});
	$(".amount2").val($(".slider-range-min2").slider("value"));



});

$(document).ready(function() {
    $('input[type="text"]:nth-child(1)').keydown(function(event){
        // Разрешаем нажатие клавиш backspace, Del, Tab и Esc
        if ( event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 27 ||
             // Разрешаем выделение: Ctrl+A
            (event.keyCode == 65 && event.ctrlKey === true) ||
             // Разрешаем клавиши навигации: Home, End, Left, Right
            (event.keyCode >= 35 && event.keyCode <= 39)) {
                 return;
        }
        else {
            // Запрещаем всё, кроме клавиш цифр на основной клавиатуре, а также Num-клавиатуре
            if ((event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105 )) {
                event.preventDefault();
            }  
        }
    });

    $('input[type="text"]:nth-child(3)').keydown(function(event){
        // Разрешаем нажатие клавиш backspace, Del, Tab и Esc
        if ( event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 27 ||
             // Разрешаем выделение: Ctrl+A
            (event.keyCode == 65 && event.ctrlKey === true) ||
             // Разрешаем клавиши навигации: Home, End, Left, Right
            (event.keyCode >= 35 && event.keyCode <= 39)) {
                 return;
        }
        else {
            // Запрещаем всё, кроме клавиш цифр на основной клавиатуре, а также Num-клавиатуре
            if ((event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105 )) {
                event.preventDefault();
            }  
        }
    });
});


 $(function() {
               $("#start_datepicker").datepicker({ dateFormat: "yy-mm-dd" }).val()
       });
