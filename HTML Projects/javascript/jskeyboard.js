window.onload=function(){
        var x=10;
        var y=10;
        var key
        var pressed=1;
        var canvas=document.getElementById("myCanvas");
        var ctx=canvas.getContext("2d");
        var img=new Image();

        img.onload=function() {
                ctx.drawImage(img,x,y);
        }

        img.src="../images/pig.png";
        
        document.onkeydown=function(e){
                pressed=0;
                key=e.keyCode;
        }

        document.onkeyup=function(e){
                pressed=1;
        }

        setInterval(function() {
                if(pressed==1) {
                        return;
                }

                if(key==37 && (x-2 >=0)){
                        x-=2;
                }

                if(key==38 && (y-2 >= 0)){
                        y-=2;
                }

                if(key==39 && (x+2 < 600)){
                        x+=2;
                }

                if(key==40 && (y+1 < 600)){
                        y+=2;
                }

                canvas.width=canvas.width;
                ctx.drawImage(img,x,y);
        },5);
}
