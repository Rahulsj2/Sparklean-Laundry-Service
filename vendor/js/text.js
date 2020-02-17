$('.btnNext').click(function(){
    $('.nav-tabs > .active').next('li').find('a').trigger('click');
    // console.log("Clicked")
  });
  
    $('.btnPrevious').click(function(){
    $('.nav-tabs > .active').prev('li').find('a').trigger('click');
    // console.log("Clicked")
  });