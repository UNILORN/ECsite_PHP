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
          name: "MDR-1A"},
        { imageurl: "T12nd.jpg",
          name: "T 1 2nd Generation"}
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
          name: "MDR-XB90EX"},
        { imageurl: "W800BT.jpg",
          name: "W800BT"}
      ]
    }
  });

  $(".content-list-inner").hover(function(){
    $(this).parent().find(".inner-hidden").css("opacity","1");
  },function(){
    $(this).parent().find(".inner-hidden").css("opacity","0");
  });

  $(".prev").click(function(){
    var leftnum  = $(this).parent().find(".content-list").css("left");
    var widthnum = $(this).parent().find(".content-list").length * 200;
    var windownum= $(window).width();
    leftnum = Number(leftnum.replace("px",""));
    console.log(windownum);
    if (windownum - leftnum > windownum){ leftnum += windownum/3; }
    $(this).parent().find(".content-list").css("left",leftnum+"px");
  });

  $(".next").click(function(){
    var leftnum  = $(this).parent().find(".content-list").css("left");
    var widthnum = $(this).parent().find(".content-list").length * 200;
    var windownum= $(window).width();
    leftnum = Number(leftnum.replace("px",""));
    if (widthnum + leftnum > windownum ){ leftnum -= windownum/3; }
    $(this).parent().find(".content-list").css("left",leftnum+"px");
  });

});
