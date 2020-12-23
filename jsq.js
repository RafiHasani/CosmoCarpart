
$(document).ready(function(){
      
    function  get_filter($option)
    {
        $('.filer_data').html('<div id="loading" style=""></div>');
        var action='fetch_data';
        
        $.ajax({
            url:"fetch_data.php",
            method:"POST",
            data:{action:action,option:option},
            success:function(data)
            {
                $('data').html(data);
            }
        });
    }
});


$(function () 
{
    $('#cartclick').on('click', function ()
    {
      $('#cart_show').slideToggle("2000").float-left();
    })
});
