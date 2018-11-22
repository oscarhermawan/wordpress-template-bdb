var check_tour_btn = document.getElementById("check-tour-btn");
// var var_news_view = document.getElementsByClassName("news_view");
var var_news_view = document.getElementById("tour-packages");
var data;

check_tour_btn.addEventListener("click", function(){
  var xttp = new XMLHttpRequest();
  xttp.open('GET', 'http://bdb.helloangga.com/api/packages');
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
  console.log('dataNYAA', data)
  var ourString = ''
  for(i = 0; i < data.length; i++){
    ourString +=
    '<div class="col-md-6">' +
      '<div class="box-for-padding">' +
        '<img src="http://wallpaperlepi.com/wp-content/uploads/2014/09/KTM-RC8-Motor-Sport-Wallpaper.jpg" alt="1/2 Day Tabanan Jungle" width="100%"> <br/>' +
          '<div class="box-packages">' +
            '<i> Level : ' + data[i].level +'</i>'+
            '<p>'+ data[i].name + '<p>'+
                '<div class="description-on-tour">' + data[i].description  + '</div>' +
            '<button type="button" class="btn btn-light">SEE DETAILS</button> &nbsp; <button type="button" class="btn btn-danger">BOOK NOW</button>' +
          '</div>' +
      '</div>' +
    '</div>'
  }
  console.log('hasil = ', ourString)
  var_news_view.innerHTML = ourString;
}

function tourPackages(data){

}
