window.addEventListener("load", function () {
    var canvas = document.getElementById("canvas");
    var context = canvas.getContext("2d");


    var face = new Image();
    var faceNull = new Image();
    var faceOne = new Image();
    var faceTwo = new Image();
    var faceThree = new Image();
    var faceFour = new Image();
    var faceFive = new Image();
    var faceSix = new Image();
    var faceSeven = new Image();

    var time = new Date();
    var digiClock = document.getElementById("digiClock");

    var hours = time.getHours();
    var minutes = time.getMinutes();
    var seconds = time.getSeconds();

var hours_hand = new Image();
var minutes_hand = new Image();

hours_hand.src = "javascript/clockimages/hourHand.png";
minutes_hand.src = "javascript/clockimages/minuteHand.png";

    face.src = "javascript/clockimages/clockt0.png";
    faceNull.src = "javascript/clockimages/clockt1.png";
    faceOne.src = "javascript/clockimages/clockt2.png";
    faceTwo.src = "javascript/clockimages/clockt3.PNG";
    faceThree.src = "javascript/clockimages/clockt3.png";
    faceFour.src = "javascript/clockimages/clockt3.png";
    faceFive.src = "javascript/clockimages/clockt3.png";
    faceSix.src = "javascript/clockimages/clockt3.png";
    faceSeven.src = "javascript/clockimages/clockt3.png";

    face.addEventListener("load", function () {
        setInterval(loop, 100);
    });

    function loop() {
        time = new Date();
        hours = time.getHours();
        minutes = time.getMinutes();
        seconds = time.getSeconds();
        digiClock.innerHTML = leadingZero(hours) + ":" + leadingZero(minutes) + ":" + leadingZero(seconds);
   
    context.setTransform(1,0,0,1,0,0);
    context.clearRect(0,0,500,500);
    context.translate(0,0)
    context.rotate(0);
    if (hours <= 8 && minutes <= 30) {
        context.drawImage(face,0,0);
    }    
    else if (hours <= 9 && minutes <= 30) {
        context.drawImage(faceNull,0,0);
    }
    else if (hours <= 10) {
        context.drawImage(faceOne,0,0);
    }
    else if (hours <= 12 || minutes <= 25){
        context.drawImage(faceTwo,0,0);
    }
    else{
        context.drawImage(face,0,0);
    }
   
   
    context.setTransform(1,0,0,1,0,0);
    context.translate(250,250);
    context.rotate(minutes/60*2*Math.PI);
    context.drawImage(minutes_hand,-21,-166);
   
    context.setTransform(1,0,0,1,0,0);
    context.translate(250,250);
    context.rotate((hours/12 +minutes/720)*2*Math.PI);
    context.drawImage(hours_hand,-34,-153);

    }
});

function leadingZero(input) {
    var result = input;
    if (result < 10) result = "0" + result;
    return result;
}

