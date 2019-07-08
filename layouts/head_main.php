<!--NOTE: MAIN HTML -->
<!DOCTYPE HTML>
<html>
<head>
    <title>Free Adidas Website Template | Home :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="public/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="public/css/form.css" rel="stylesheet" type="text/css" media="all" />
    <link href="public/css/page_error.css" rel="stylesheet" type="text/css" media="all" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="public/js/jquery.min.js"></script>
    <script src="public/js/jquery.easydropdown.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $(".dropdown img.flag").addClass("flagvisibility");

        $(".dropdown dt a").click(function() {
            $(".dropdown dd ul").toggle();
        });

        $(".dropdown dd ul li a").click(function() {
            var text = $(this).html();
            $(".dropdown dt a span").html(text);
            $(".dropdown dd ul").hide();
            $("#result").html("Selected value is: " + getSelectedValue("sample"));
        });

        function getSelectedValue(id) {
            return $("#" + id).find("dt a span.value").html();
        }

        $(document).bind('click', function(e) {
            var $clicked = $(e.target);
            if (!$clicked.parents().hasClass("dropdown"))
                $(".dropdown dd ul").hide();
        });


        $("#flagSwitcher").click(function() {
            $(".dropdown img.flag").toggleClass("flagvisibility");
        });
    });
    </script>
    <!-- start menu -->
    <link href="public/css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="public/js/megamenu.js"></script>
    <script>
    $(document).ready(function() {
        $(".megamenu").megamenu();
    });
    </script>
    <!-- end menu -->
    <script type="text/javascript" src="public/js/jquery.jscrollpane.min.js"></script>
    <script type="text/javascript" id="sourcecode">
    $(function() {
        $('.scroll-pane').jScrollPane();
    });
    </script>
    <!-- Include the Etalage files -->
    <link rel="stylesheet" href="public/css/etalage.css">
    <script src="public/js/jquery.etalage.min.js"></script>
    <!-- Include the Etalage files -->
    <script>
    jQuery(document).ready(function($) {

        $('#etalage').etalage({
            thumb_image_width: 300,
            thumb_image_height: 400,

            show_hint: true,
            click_callback: function(image_anchor, instance_id) {
                alert('Callback example:\nYou clicked on an image with the anchor: "' +
                    image_anchor + '"\n(in Etalage instance: "' + instance_id + '")');
            }
        });
        // This is for the dropdown list example:
        $('.dropdownlist').change(function() {
            etalage_show($(this).find('option:selected').attr('class'));
        });

    });
    </script>
    <!----//details-product-slider--->
    <!-- top scrolling -->
    <script type="text/javascript" src="public/js/move-top.js"></script>
    <script type="text/javascript" src="public/js/easing.js"></script>
    <script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1200);
        });
    });
    </script>
</head>

<body>