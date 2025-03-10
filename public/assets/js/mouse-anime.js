//obj Image Animation
var hoverLayer = $("body");

var objImgOne = $(".zl-main-hero__img-is");
var manageImg1 = $(".zl-manage-img-1")
var manageImg3 = $(".zl-manage-img-3")

//Animation Init
hoverLayer.mousemove(function(e) {
    var valueX = (e.pageX * -1) / 100;
    var valueY = (e.pageY * -1) / 80;
    if(objImgOne.length ||manageImg1.length||manageImg2.length) {
        objImgOne.css({
            transform: "translate3d(" + valueX + "px," + valueY + "px, 0)"
        });
        manageImg1.css({
            transform: "translate3d(" + valueX + "px," + valueY + "px, 0)"
        });
        manageImg3.css({
            transform: "translate3d(" + valueX + "px," + valueY + "px, 0)"
        });
    }
    
});