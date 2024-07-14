<x-app-layout>
    <div>
        {{ Breadcrumbs::render('seats', $movieHour) }}

        <section class="py-12 md:py-24 lg:py-16">
            <div class="container px-4 mx-auto">
                <div class="max-w-lg mx-auto lg:max-w-6xl overflow-x-scroll">
                    <div id="container" class="sc-main-container">
                        <div class="sc-map">
                            <div class="sc-indexer sc-indexer-rows">
                                @foreach($seatRows as $seatRow)
                                    @if($seatRow !== " ")
                                        <div class="sc-seat-indexer">{{ $seatRow }}</div>
                                    @else
                                        <div class="sc-spacer"></div>
                                    @endif
                                @endforeach
                            </div>
                            <div class="sc-map-inner-container">
                                <div class="sc-front">{{ __('Ecran') }}</div>
                                <div class="sc-indexer sc-indexer-columns">
                                    @foreach($seatColumns as $seatColumn)
                                        @if($seatColumn !== " ")
                                            <div class="sc-seat-indexer">{{ $seatColumn }}</div>
                                        @else
                                            <div class="sc-spacer"></div>
                                        @endif
                                    @endforeach
                                </div>
                                <div class="sc-seats-container">
                                    @foreach($seatRows as $seatRow)
                                        @if($seatRow !== " ")
                                            <div class="sc-seat-row">
                                                @foreach($seatColumns as $seatColumn)
                                                    @if($seatColumn !== " ")
                                                        @if(in_array($seatRow . $seatColumn, $reservedSeats))
                                                            <div
                                                                class="sc-seat sc-seat-reserved"
                                                                onclick="toggleSeat(this);">{{ $seatRow . $seatColumn }}</div>
                                                        @else
                                                            <div
                                                                class="sc-seat sc-seat-available"
                                                                onclick="toggleSeat(this);">{{ $seatRow . $seatColumn }}</div>
                                                        @endif
                                                    @else
                                                        <div class="sc-spacer"></div>
                                                    @endif
                                                @endforeach
                                            </div>
                                        @else
                                            <div class="sc-spacer"></div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container py-10 px-10 mx-0 min-w-full flex flex-col items-center">

                <form
                    action="{{ route('seats.store') }}" method="POST"
                    enctype="multipart/form-data" id="add-to-booking-form">
                    @csrf

                    <input type="hidden" name="price" value="{{ $price->value }}"/>
                    <input type="hidden" name="movie_hour_id" value="{{ $movieHour['id'] }}"/>

                    <button type="submit"
                            class="bg-purple-500 hover:bg-purple-600 text-white text-sm py-3 px-10 mt-3 rounded">
                        <i class="fa fa-ticket"></i> Rezerva
                    </button>
                </form>

            </div>
        </section>
    </div>

    <script>
        function toggleSeat(seat) {
            seat.classList.toggle('sc-seat-selected');

            if (seat.classList.contains('sc-seat-selected')) {
                var input = document.createElement("input");
                input.setAttribute("type", "hidden");
                input.setAttribute("name", "seats[]");
                input.setAttribute("value", seat.innerHTML);
                input.setAttribute("id", 'seat_' + seat.innerHTML);
                document.getElementById("add-to-booking-form").prepend(input);
            } else {
                if (document.getElementById('seat_' + seat.innerHTML)) {
                    var seat = document.getElementById('seat_' + seat.innerHTML);
                    var form = document.getElementById('add-to-booking-form');
                    form.removeChild(seat);
                }
            }
        }
    </script>
</x-app-layout>
