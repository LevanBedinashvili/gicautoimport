@extends('layouts.app')
@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">კალკულატორი</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">აირჩიეთ აუქციონი</label>
                                        <select id="auctionSelect" class="default-select form-control wide">
                                            <option value="#" >All Auctions</option>
                                            @foreach($auction as $item_auction)
                                            <option value="{{ $item_auction->id }}">{{ $item_auction->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">აირჩიეთ შტატი</label>
                                        <select  id="stateSelect" name="state" class="default-select form-control wide" >
                                        </select>
                                    </div>

                                    <div id="displayPrice" style="margin-top: 10px; color: red; display: none;">
                                        price: <span id="selectedPrice"></span>
                                    </div>
                                    <br>

                                    <button class="btn btn-info" style="background: #12487f; color: white; border: black;" type="button" onclick="calculatePrice()">გამოთვლა</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push("custom-javascript")
    <script>
        function calculatePrice() {
            // Get the selected state element
            var stateSelect = document.getElementById("stateSelect");

            // Get the selected option
            var selectedOption = stateSelect.options[stateSelect.selectedIndex];

            // Get the price attribute value
            var price = parseFloat(selectedOption.getAttribute("data-price"));
            var calculatorPrice = parseFloat({{ Auth::user()->calculator_price }});
            var totalPrice = price + calculatorPrice;

            var displayPriceDiv = document.getElementById("displayPrice");
            var selectedPriceSpan = document.getElementById("selectedPrice");

            selectedPriceSpan.innerHTML = totalPrice.toFixed(0) + "$"; // format to 2 decimal places
            displayPriceDiv.style.display = "block";
        }
    </script>
    <script>
        $(document).ready(function () {
            $('#auctionSelect').change(function () {
                var auctionId = $(this).val();

                if (auctionId !== '') {
                    $.ajax({
                        url: '{{ route("get-states", ":id") }}'.replace(':id', auctionId),
                        type: 'GET',
                        success: function (data) {
                            // Clear and populate the states select box
                            $('#stateSelect').html('');
                            if (data.length > 0) {
                                $.each(data, function (index, state) {
                                    $('#stateSelect').append('<option class="option" value="' + state.rate + '" data-price="' + state.rate + '">' + state.name + '</option>');
                                });
                                $('#stateSelect').show();
                            } else {
                                $('#stateSelect').hide();
                            }
                        },
                        error: function (xhr) {
                            console.log(xhr.responseText);
                        }
                    });
                } else {
                    $('#stateSelect').hide();
                }
            });
        });
    </script>
    @endpush
@endsection
