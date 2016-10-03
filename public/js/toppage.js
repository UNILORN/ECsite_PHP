$(function(){
  new Vue({
    el: 'main',
    data: {
      headphone :[
        { imageurl: "MDR-1A_B.jpg",
          name: "MDR-1A"},
        { imageurl: "MDR-Z1000.jpg",
          name: "MDR-Z1000"},
        { imageurl: "MDR-Z1R.jpg",
          name: "MDR-Z1R"},
        { imageurl: "JVC1.jpg",
          name: "MDR-1A"}
      ],
      earphone :[
        { imageurl: "XBA-Z5.jpg",
          name: "XBA-Z5"},
        { imageurl: "XBA-A3.jpg",
          name: "XBA-A3"},
        { imageurl: "XBA-A2.jpg",
          name: "XBA-A2"},
        { imageurl: "XBA-300.jpg",
          name: "XBA-300"},
        { imageurl: "MDR-EX1000.jpg",
          name: "MDR-EX1000"},
        { imageurl: "MDR-XB90EX.jpg",
          name: "MDR-XB90EX"}
      ]
    }
  });

  $(".content-list-inner").hover(function(){
    $(this).parent().find(".inner-hidden").css("opacity","0.7");
  },function(){
    $(this).parent().find(".inner-hidden").css("opacity","0");
  });

  $(".prev").click(function(){
    var leftnum = $(".content-list").css("left");
    leftnum = leftnum.replace("px","");
    leftnum = Number(leftnum) + 200;
    $(".content-list").css("left",leftnum+"px");
  });

  $(".next").click(function(){
    var leftnum = $(".content-list").css("left");
    leftnum = leftnum.replace("px","");
    leftnum = Number(leftnum) - 200;
    $(".content-list").css("left",leftnum+"px");
  });

  $(".prev-e").click(function(){
    var leftnum = $(".content-list-e").css("left");
    leftnum = leftnum.replace("px","");
    leftnum = Number(leftnum) + 200;
    $(".content-list-e").css("left",leftnum+"px");
  });

  $(".next-e").click(function(){
    var leftnum = $(".content-list-e").css("left");
    leftnum = leftnum.replace("px","");
    leftnum = Number(leftnum) - 200;
    $(".content-list-e").css("left",leftnum+"px");
  });


});
