$(function(){
  var vm = new Vue({
    el: 'main',
    data: {
      headphone :[],
      earphone :[]
    }
  });

  $.ajax({
    type:'GET',
    url:'/api/items',
    success:function(response){
      response.forEach(function(value,index){
        var rat = {
          id:value["ITEM_ID"],
          name:value["name"],
          imageurl:value["imageurl"],
          price:value["price"]
        }
        if (value["type"] == "head"){ vm.$data.headphone.push(rat); }
        else{ vm.$data.earphone.push(rat); }
      });
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

  $(".search_button").click(function(){
    var text = $(".search_text").val();
    $.ajax({
      type:'GET',
      url:'/api/items/'+text,
      success:function(response){
        vm.$data.earphone = [];
        vm.$data.headphone = [];

        response.forEach(function(value,index){
          var rat = {
            id:value["ITEM_ID"],
            name:value["name"],
            imageurl:value["imageurl"],
            price:value["price"]
          }
          if (value["type"] == "head"){ vm.$data.headphone.push(rat); }
          else{ vm.$data.earphone.push(rat); }
        });
      }
    });
  });
});
