window.onload = function() {
    var canvas = document.getElementById("myCanvas");
    var ctx = canvas.getContext("2d");
    var face;
    happyface();
    canvas.addEventListener("mousedown",intersects, false);

}


function bDown(obj) {

    if (face == 'h') {
        sadface();
        obj.innerHTML="Make Me Happy";
    }

    else {
        happyface()
        obj.innerHTML="Make Me Sad";
    }
}

function happyface() {
    var canvas = document.getElementById("myCanvas");
    var ctx = canvas.getContext("2d");
    canvas.addEventListener("mousedown",intersects, false);

    ctx.beginPath();
    ctx.arc(250,250,150,0,2*Math.PI);
    ctx.fillStyle = "#fcd362";
    ctx.fill();
    ctx.lineWidth = 5;
    ctx.stroke();

    ctx.beginPath();
    ctx.arc(300,225,30,0,2*Math.PI);
    ctx.fillStyle = "#45d3d8";
    ctx.fill();
    ctx.lineWidth = 5;
    ctx.stroke();

    ctx.beginPath();
    ctx.arc(200,225,30,0,2*Math.PI);
    ctx.fillStyle = "#45d3d8";
    ctx.fill();
    ctx.lineWidth = 5;
    ctx.stroke();

    ctx.beginPath();
    ctx.arc(250,275,80,0,Math.PI);
    ctx.fillStyle = "#db4871";
    ctx.fill();
    ctx.lineWidth = 5;
    ctx.stroke();
    
    face ='h';
}

function sadface() {
    var canvas = document.getElementById("myCanvas");
    var ctx = canvas.getContext("2d");
    canvas.addEventListener("mousedown",intersects, false);

    ctx.beginPath();
    ctx.arc(250,250,150,0,2*Math.PI);
    ctx.fillStyle = "#fcd362";
    ctx.fill();
    ctx.lineWidth = 5;
    ctx.stroke();

    ctx.beginPath();
    ctx.arc(300,225,30,0,2*Math.PI);
    ctx.fillStyle = "#45d3d8";
    ctx.fill();
    ctx.lineWidth = 5;
    ctx.stroke();

    ctx.beginPath();
    ctx.arc(200,225,30,0,2*Math.PI);
    ctx.fillStyle = "#45d3d8";
    ctx.fill();
    ctx.lineWidth = 5;
    ctx.stroke();

    ctx.beginPath();
    ctx.arc(250,350,80,0,Math.PI, true);
    ctx.lineWidth = 5;
    ctx.stroke();

    face='s';
}

function intersects(event) {

    var x;
    var y;
    
    if (event.x != undefined && event.y != undefined)
    {
      x = event.x;
      y = event.y;
    }
    else // Firefox method to get the position
    {
      x = event.clientX + document.body.scrollLeft +
          document.documentElement.scrollLeft;
      y = event.clientY + document.body.scrollTop +
          document.documentElement.scrollTop;
    }

    var cx = 840;
    var cy = 560;
    var r = 150;

    if (Math.sqrt((x-cx) ** 2 + (y - cy) ** 2) < r) {
        if (face == 'h') {
            sadface();
            document.getElementById("button").innerHTML="Make Me Happy";
        }
        else {
            happyface();
            document.getElementById("button").innerHTML="Make Me Sad";            
        }
    }
}