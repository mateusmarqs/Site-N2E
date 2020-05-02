var intervalo = 5000

function image1() {
  document.getElementById('bt2').style.backgroundColor = 'initial';
  document.getElementById('bt3').style.backgroundColor = 'initial';
  document.getElementById('next').style.backgroundImage = 'url(img/slider1.jpg)';
  document.getElementById('bt1').style.backgroundColor = '#424242';
  setTimeout("image2()", intervalo);
}

function image2() {
  document.getElementById('bt1').style.backgroundColor = 'initial';
  document.getElementById('bt3').style.backgroundColor = 'initial';
  document.getElementById('next').style.backgroundImage = 'url(img/slider2.jpg)';
  document.getElementById('bt2').style.backgroundColor = '#424242';
  setTimeout("image3()", intervalo);
}

function image3() {
  document.getElementById('bt1').style.backgroundColor = 'initial';
  document.getElementById('bt2').style.backgroundColor = 'initial';
  document.getElementById('next').style.backgroundImage = 'url(img/slider3.jpg)';
  document.getElementById('bt3').style.backgroundColor = '#424242';
  setTimeout("image1()", intervalo);
}


