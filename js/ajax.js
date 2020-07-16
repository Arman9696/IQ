
$( document ).ready(function() {
    $("#btn").click(
        function(){
            sendAjaxForm('result_form', 'ajax_form', 'calc.php');
            return false; 
        }
    );
});
 
function sendAjaxForm(result_form, ajax_form, url) {
    $.ajax({
        url:     url, //url страницы (action_ajax_form.php)
        type:     "POST", //метод отправки
        dataType: "html", //формат данных
        data: $("#"+ajax_form).serialize(),  // Сеарилизуем объект
        success: function(response) { //Данные отправлены успешно
            result = $.parseJSON(response);
            $('#result_form').html(result.name);
             $('#result').html(result.title);
        },
        error: function(response) { // Данные не отправлены
            $('#result_form').html('Ошибка. Данные не отправлены.');
        }
    });
}

$( document ).ready(function() {
    $("#btn").click(
        function(){
            var input = document.getElementsByTagName("input")[0];
            if(input.value===""||input.value ==="дд.мм.гггг"){
            $('#result_form').html('Выберите пожалуйста дату')
        }
        }
    );
});
