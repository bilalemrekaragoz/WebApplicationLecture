$(document).ready(function() {

    $(".chua").on("click",function(){
      $("#try h2").replaceWith('<h2>October<br>Jeffrey Toobin</h2>')
      
    });

    $(".sorkin").on("click",function(){
      $("#try h2").replaceWith('<h2>Novermber<br>Andrew Ross Sorkin</h2>')
    });

    $(".chua").on("click",function(){
        $("#try h2").replaceWith('<h2>Jabuary<br>Amy Chua</h2>')
        $("#try h1").replaceWith($.getJSON("json_files/chua.json", function(data){
          data.title; 
      }))
    });

    $(".sampson").on("click",function(){
      $("#try h2").replaceWith('<h2>February<br>Scott Sampson</h2>')
    });
}); // end ready


var btn=document.getElementsByClassName("sorkin");
var animalContainer=document.getElementById("try");
btn.addEventListener("click",function(){

 var ourRequest= new XMLHttpRequest();
 ourRequest.open('GET',"json_files/sorkin.json");

  ourRequest.onload=function(){
  var ourData=JSON.parse(ourRequest.responseText);
  renderHTML(ourData);
};

ourRequest.send();
});

function renderHTML(data){
var htmlString="";
for(i=0;i<data.length;i++){
htmlString+="<p>" + data[i].month + "is a " +data[i].text + "</p>";
  }

animalContainer.insertAdjacentHTML('beforeend',htmlString);

}