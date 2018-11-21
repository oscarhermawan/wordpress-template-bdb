var check_tour_btn = document.getElementById("check-tour-btn");
var var_news_view = document.getElementsByClassName("news_view");
var data;

check_tour_btn.addEventListener("click", function(){
  var xttp = new XMLHttpRequest();
  xttp.open('GET', 'http://localhost:8080/wordpress/wp-json/wp/v2/posts');
  xttp.onload = function(){
    if(xttp.status >= 200 && xttp.status < 400){
      data = JSON.parse(xttp.responseText);
      motorView(data)
    } else {
      console.log('ga masuk')
    }
  };

  xttp.oneerror = function(){
    console.log("Connection Error")
  }

  xttp.send();
})

function motorView(data){
  // console.log('dataNYAA', data[0])
  // var_news_view[0].innerHTML = 'oke adad adad ada dadad'
}
