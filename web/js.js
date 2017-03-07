function cl(str) {
    console.log(str);
}

$(function(){

    $("#task1_button").click(function(){
        var text = $("#task1_source").val();
        $.post("/index.php?action=task_1", {text:text}, function (data) {
            $("#task1_result").html(data);
        })
    });

    $("#task2_button").click(function(){
        var text = $("#task2_source").val();
        $.post("/index.php?action=task_2", {text:text}, function (data) {
            $("#task2_result").html(data);
        })
    });

    $("#task4_button").click(function(){
        $.get("/index.php?action=task_4", function (data) {
            $("#task4_result").html(data);
        })
    });


    $("#task5_button").click(function(){
        $.get("/index.php?action=task_5", function (data) {
            $("#task5_result").html(data);
        })
    });

    $("#task6_button").click(function(){
        $.get("/index.php?action=task_6", function (data) {
            $("#task6_result").html(data);
        })
    });

    $("#task7_button").click(function(){
        $.get("/index.php?action=task_7", function (data) {
            $("#task7_result").html(data);
        })
    });

});