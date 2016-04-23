{{ HTML::script('https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js')}}
{{ HTML::script('js/bootstrap.min.js') }}
<script type="text/javascript">

    $("#mainCarousel").carousel();
    $(window).scroll(function() {
        $(".slideanim").each(function () {
            var pos = $(this).offset().top;

            var winTop = $(document).scrollTop();
            if (pos < winTop +600) {
                $(this).addClass("slider");
            }
        });
    });
    $(".main_search_btn").click(function(event){



    });



</script>