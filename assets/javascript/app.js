console.log("yo im working!")

$("#submit").on("click", function(){
    console.log("button clicked");
})

$("#port-button").on("click", function(){
    console.log("port-button working")
    $(".sidebar").show();
    $("#port-button").hide();
})

$(".exit-sidebar").on("click", function(){
    console.log("exit-sidebar working")
    $(".sidebar").hide();
    $("#port-button").show();
    $("#exit-sidebar").hide();
})