$(document).ready(function(){
    
    // Adding List by input
        $("#btn2").click(function(){
        var cont = $("input").val();
          if (cont != ""){
            $("ol").append("<li>" + "<div class='outer-cls'>" + "</div>" + "<p>" + cont + "</p>" + "<div class='detail'>" + "</div>" + "<div class='inner-cls'>" +"</div>" + "</li>");
            $('input').val('');
          }
          else {
            alert('Inputan tidak boleh kosong');
          }
        });
        
    // Deleting li by clicking its X
      $(document).on('click', '.inner-cls', function(){
          $(this).parent('li').remove();
          if ($('li').hasClass('clicked')){
            $('.clicked').remove();
          }
          else {
            alert('List berhasil dihapus');
          }
      });
    
    // Reset function
      $(document).on('click', '#reset', function(){
       if($('ol').has('li')){
            $('ol').empty();
          }
      });
    
    // Selecting li
      $(document).on('click', '.outer-cls', function(){
          $(this).parent('li').toggleClass('clicked');
      });
    
    // 
    $(document).on('click', '.detail', function(){
      $(this).parent().children('p').clone().appendTo('.inner-pop');
      $('.pop-up').show();
    });
      
    //fungsi tampilan
      $(document).on('click', '#dlsltd', function(){
          if ($('li').hasClass('clicked')){
            $('.clicked').remove();
          }
          else {
            alert('Tidak Ada List Yang dipilih');
          }
      });
    
    //menutup jendela pop-up
      $(document).on('click', '.cncl', function(){
        $('.pop-up').hide();
        $('.inner-pop').children().remove();
      });
    
    
      $('.outer-cls').click(function(e){
         event.stopPropagation();
      });
    
    });