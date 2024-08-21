
$(document).on('click', '.dropdown-select', function () {
    $(this).parent().find('.dropdown-list').toggleClass('active');
})
  
  
$('.dropdown-list').click(function (e) {
    if (e.target !== e.currentTarget) {
        $(this).removeClass('active');
    }
})

$('.select-start').click(function(){
    var selected = $(this).text();
  
    $('.selected-start').text(selected);
  
  })