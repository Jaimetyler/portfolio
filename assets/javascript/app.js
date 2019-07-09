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

$("#trivia-link").on("click", function() {
    
    $("#trivia-content").show();
    event.preventDefault();
    $("#gifApp-content").hide();
    $("#friendFinder-content").hide();
    $("#crystalCollector-content").hide();
    $("#train-content").hide();
})

$("#friendFinder-link").on("click", function() {
    $("#friendFinder-content").show();
    event.preventDefault();
    $("#trivia-content").hide();
    $("#gifApp-content").hide();
    $("#crystalCollector-content").hide();
    $("#train-content").hide();
})

$("#crystalCollector-link").on("click", function() {
    $("#crystalCollector-content").show();
    event.preventDefault();
    $("#trivia-content").hide();
    $("#gifApp-content").hide();
    $("#friendFinder-content").hide();
    $("#train-content").hide();
})

$("#train-link").on("click", function() {
    $("#train-content").show();
    event.preventDefault();
    $("#trivia-content").hide();
    $("#gifApp-content").hide();
    $("#friendFinder-content").hide();
    $("#crystalCollector-content").hide();
})

$("#gifApp-link").on("click", function() {
    $("#gifApp-content").show();
    event.preventDefault();
    $("#trivia-content").hide();
    $("#friendFinder-content").hide();
    $("#crystalCollector-content").hide();
    $("#train-content").hide();
})

$(window).on("load", function() {
    $("#trivia-content").hide();
    $("#gifApp-content").hide();
    $("#friendFinder-content").hide();
    $("#crystalCollector-content").hide();
    $("#train-content").hide();
})

function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
  }
  
  function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
  }