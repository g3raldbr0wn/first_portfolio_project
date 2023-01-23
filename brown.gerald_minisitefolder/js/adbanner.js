window.onload = rotate;

var thisAd = 0;

function rotate()
{
    "use strict";
    var adImages = new Array("images/regluar/sideprofile.jpg", "images/regluar/sign.jpg", "images/regluar/attackdino.jpg", "images/regluar/camping.jpg", "images/regluar/displaydino.jpg", "images/regluar/landscape1.jpg", "images/regluar/raft.jpg");

    thisAd++;
    if (thisAd === adImages.length)
    {
        thisAd = 0;
    }
    document.getElementById("adBanner").src = adImages[thisAd];

    setTimeout(rotate, 4*1000);
}