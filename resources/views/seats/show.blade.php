<x-app-layout>
    <div>
        {{ Breadcrumbs::render('seats', $movieSchedule) }}

        <section class="py-12 md:py-24 lg:py-16">
            <div class="container px-4 mx-auto">
                <div class="max-w-lg mx-auto lg:max-w-6xl overflow-x-scroll">
                    <div id="container" class="sc-main-container">
                        <div class="sc-map">
                            <div class="sc-indexer sc-indexer-rows">
                                @foreach($indexerRows as $indexerRow)
                                    @if($indexerRow !== " ")
                                        <div class="sc-seat-indexer">{{ $indexerRow }}</div>
                                    @else
                                        <div class="sc-spacer"></div>
                                    @endif
                                @endforeach
                            </div>
                            <div class="sc-map-inner-container">
                                <div class="sc-front">{{ __('Ecran') }}</div>
                                <div class="sc-indexer sc-indexer-columns">
                                    @foreach($indexerColumns as $indexerColumn)
                                        @if($indexerColumn !== " ")
                                            <div class="sc-seat-indexer">{{ $indexerColumn }}</div>
                                        @else
                                            <div class="sc-spacer"></div>
                                        @endif
                                    @endforeach
                                </div>
                                <div class="sc-seats-container">
                                    @foreach($indexerRows as $indexerRow)
                                        @if($indexerRow !== " ")
                                            <div class="sc-seat-row">
                                                @foreach($indexerColumns as $indexerColumn)
                                                    @if($indexerColumn !== " ")
                                                        <div
                                                            class="sc-seat sc-seat-available"
                                                            onclick="toggleSeat(this);">{{ $indexerRow }}{{ $indexerColumn }}</div>
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
                    action="{{ route('cart.add') }}" method="POST"
                    enctype="multipart/form-data" id="add-to-cart-form">
                    @csrf

                    <input type="hidden" name="price" value="{{ $price->value }}" />
                    <input type="hidden" name="movie_schedule_id" value="{{ $movieSchedule['id'] }}" />

                    <button type="submit"
                            class="bg-purple-500 hover:bg-purple-600 text-white text-sm py-2 px-4 mt-3 rounded" >
                        <i class="fa fa-shopping-cart"></i> Adauga in cos
                    </button>
                </form>

            </div>
        </section>
    </div>

    <script>
        function toggleSeat(seat)
        {
            seat.classList.toggle('sc-seat-selected');

            if(seat.classList.contains('sc-seat-selected')) {
                var input = document.createElement("input");
                input.setAttribute("type", "hidden");
                input.setAttribute("name", "seats[]");
                input.setAttribute("value", seat.innerHTML);
                input.setAttribute("id", 'seat_' + seat.innerHTML);
                document.getElementById("add-to-cart-form").prepend(input);
            } else {
                if (document.getElementById('seat_' + seat.innerHTML)){
                    var seat = document.getElementById('seat_' + seat.innerHTML);
                    var form = document.getElementById('add-to-cart-form');
                    form.removeChild(seat);
                }
            }
        }
    </script>
</x-app-layout>
