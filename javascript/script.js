window.addEventListener("load", function () {
    var canvas = document.getElementById("canvas");
    var context = canvas.getContext("2d");


    var face = new Image();
    var time = new Date();
    var digiClock = document.getElementById("digiClock");

    var hours = time.getHours();
    var minutes = time.getMinutes();
    var seconds = time.getSeconds();

var hours_hand = new Image();
var minutes_hand = new Image();
var seconds_hand = new Image();

hours_hand.src = "img/hourHand.png";
minutes_hand.src = "img/minuteHand.png";

    face.src = "javascript/clockimages/clockface.png";

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
    context.clearRect(0,0,400,400);
    context.translate(0,0)
    context.rotate(0);
    context.drawImage(face, -0, -0);
   
    context.setTransform(1,0,0,1,0,0);
    context.translate(200,200);
    context.rotate(minutes/60*2*Math.PI)
    context.drawImage(minutes_hand,-21,-166);
   
    context.setTransform(1,0,0,1,0,0);
    context.translate(200,200);
    context.rotate((hours/12 +minutes/720)*2*Math.PI);
    context.drawImage(hours_hand,-34,-153);

    if (hours > 20) {
        console.log("hi");
    };
   
    }
});

function leadingZero(input) {
    var result = input;
    if (result < 10) result = "0" + result;
    return result;
}

