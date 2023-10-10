var i=0;
var image=document.getElementById("image");
var imgs=new Array('https://static.onlinetrade.ru/img/categories2/protsessory_342_1622023386.jpg', 'https://static.onlinetrade.ru/img/categories2/ssd_diski_294_1693999884.jpg', 'https://images.prom.ua/4949266811_w200_h200_zhyostkij-disk-vnutrennij.jpg'); 
var j=imgs.length;
function imgsrc(){
    if (i!=(j-1))
        {i++;}

image.src=imgs[i];
}


function click1() {
    let f1 = document.getElementsByName("field1");
    let f2 = document.getElementsByName("field2");
    let r = document.getElementById("result");
    r.innerHTML = f1[0].value * f2[0].value;
    let s = document.getElementsByName("select1");
    console.log(s[0].value);
    return false;
  }