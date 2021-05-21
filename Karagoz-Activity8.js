var clickNumber=0;

function changePosition()
{
    var randLeft = Math.random()*500;
    document.getElementById("Button").style.marginLeft = randLeft + "px";
    var randTop = Math.random()*500;
    document.getElementById("Button").style.marginTop = randTop + "px";
}

function startTimer()
{
    if(clickNumber <= 3)
        setTimeout(changePosition,500);
    else if(clickNumber > 3 && clickNumber <= 6)
        setTimeout(changePosition,400);
    else if(clickNumber > 6 && clickNumber <= 9)
        setTimeout(changePosition,300);
    else if(clickNumber > 9 && clickNumber <= 12)
        setTimeout(changePosition,200);
    else if(clickNumber > 12 )
        setTimeout(changePosition,100);
}

function increaseClickNumber()
{
    clickNumber++;
    document.getElementById("text").innerHTML = clickNumber;
}


window.onload = function()
{
    document.getElementById("Button").onmouseover = startTimer;
    document.getElementById("Button").onclick = changePosition;
    document.getElementById("Button").onclick = increaseClickNumber;
    clickNumber=0;
}
