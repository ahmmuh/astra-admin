// const bgColor = document.getElementById('bgcolor');
const image = document.querySelector('.bgImage').src;
const backgroundImage = document.getElementById("backgroundImage");

if(image){
    image.style.width = 100%;
   backgroundImage.style.backgroundImage = "url('" + image + "')";
}



