<x-app-layout>

    <style>
        .messagePanel {
            width: 1000px;
            border: 1px solid red;
        }

        .seat {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 32px;
            width: 32px;
            margin: 4px;
            box-sizing: border-box;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            transition: opacity 0.1s ease-in-out;
            float: left;
        }

        .seatspace {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 32px;
            width: 32px;
            margin: 4px;
            box-sizing: border-box;
            float: left;
        }

        .clearfix {
            clear: both;
        }

        .available {
            background-color: #96c131;
        }

        .hovering {
            background-color: #ae59b3;
        }

        .selected {
            background-color: red;
        }
    </style>
    <div>
        {{ Breadcrumbs::render('movie', $movie) }}

        <section class="py-12 md:py-24 lg:py-16">
            <div class="container px-4 mx-auto">
                <div class="max-w-lg mx-auto lg:max-w-6xl overflow-x-scroll">
                    <div id="messagePanel" class="messagePanel"></div>
                </div>
            </div>
        </section>
    </div>


    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function () {
            createseating();
        });

        function createseating() {

            var seatingValue = [];
            const upperCaseAlp = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];

            for (var j = 0; j < 24; j++) {

                if (j % 8 === 0) {
                    var seatingStyle = "<div class='seatspace'></div>";
                } else {
                    var seatingStyle = "<div class='seat available'>" + upperCaseAlp[j] + j + "</div>";

                }
                seatingValue.push(seatingStyle);

                if (j === 23) {
                    seatingValue.push("<div class='clearfix'></div>");
                }
            }

            for (var i = 0; i < 20; i++) {

                for (var j = 0; j < 20; j++) {
                    var seatingStyle = "<div class='seat available'></div>";
                    seatingValue.push(seatingStyle);

                    if (j === 19) {
                        seatingValue.push("<div class='clearfix'></div>");
                    }
                }
            }

            $('#messagePanel').html(seatingValue);

            $(function () {
                $('.seat').on('click', function () {


                    if ($(this).hasClass("selected")) {
                        $(this).removeClass("selected");
                    } else {
                        $(this).addClass("selected");
                    }

                });

                $('.seat').mouseenter(function () {
                    $(this).addClass("hovering");

                    $('.seat').mouseleave(function () {
                        $(this).removeClass("hovering");

                    });
                });


            });

        };
    </script>

</x-app-layout>
