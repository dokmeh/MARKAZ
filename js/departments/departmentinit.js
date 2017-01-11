function changeSize() {
    var width = parseInt($("#Width").val());
    var height = parseInt($("#Height").val());

    $(".department").width(width).height(height);

    // update scrollbars
    $('.department').perfectScrollbar('update');
}

$(function() {
  if(is_mobile() == false){
      $('.department').perfectScrollbar({
        suppressScrollX : true
      });
  }else{
    $('.department').perfectScrollbar('destroy');
  }
});

function is_mobile(){
  if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
     return true;
  }else {
    return false;
  }
}
