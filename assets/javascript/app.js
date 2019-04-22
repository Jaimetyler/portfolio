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

function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
  }
  
  function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
  }