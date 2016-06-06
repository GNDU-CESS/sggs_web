<script src="../js/jquery.min.js"></script>
<script src="../js/smoothscroll.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jq.js"></script>
<script src="../js/jqueryUI.js"></script>

<script>
    $(document).ready(function () {
        $(".modal").addClass("right");
        $('p').css('font-align', 'left');
    })

    $(document).ready(function () {
        $("#open").click(function () {
            $(".sliden").show("slide", {
                direction: "left"
            }, 300);
        });

    })

    $(document).ready(function () {
        $("#close").click(function () {
            $(".sliden").hide("slide", {
                direction: "left"
            }, 300);
            $(".sliden").blur(function () {
                $(this).hide("slide", {
                    direction: "left"
                }, 300);
            });
        });

        $('section').click(function () {
            $(".sliden").hide("slide", {
                direction: "left"
            }, 300);
        })
    })
</script>