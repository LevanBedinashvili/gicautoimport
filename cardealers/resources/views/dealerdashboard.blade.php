@extends('layouts.app')
@section('content')
@if($last_news)
<style>
    /* Popup container */
    .popup {
        position: fixed;
        z-index: 9;
        padding-top: 100px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0,0,0);
        background-color: rgba(0,0,0,0.4);
    }

    /* Popup content */
    .popup-content {
        background-color: #fefefe;
        padding: 20px;
        border: 1px solid #888;
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
        width: 60%;
        margin-left: 30%;
    }


    @media (max-width: 425px) {
        .popup-content {
            background-color: #fefefe;
            padding: 20px;
            border: 1px solid #888;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
            width: 100%;
            margin-left: 0;
        }
    }

    .popup-content h2 {
        text-align: center;
    }

    .popup-content label {
        display: block;
        margin-top: 20px;
    }

    .popup-content button {
        margin-top: 20px;
        padding: 10px 20px;
        background-color: #4CAF50;
        color: white;
        border: none;
        cursor: pointer;
        float: right;
    }

    .popup-content button:disabled {
        background-color: #ccc;
        cursor: not-allowed;
    }
    #navbarheader {
        pointer-events: none;
    }
    #vertical {
        pointer-events: none;
    }
</style>
@yield('content')

<!-- Popup HTML -->
<div id="popup" class="popup">
    <div class="popup-content">
        <h2>ყურადღება!</h2>
        <br>
        <h6>[{{ $last_news->create_date }}]</h6>
        <p>{{ $last_news->title }}</p>
        <p>{!! $last_news->description !!}</p>
        <label>
            <input type="checkbox" id="agreeCheckbox"> ვეთანხმები
        </label>
        <button id="continueButton" disabled>გაგრძელება</button>
    </div>
    <br><br><br><br>
</div>

<script>
    // Show the popup on page load
    window.onload = function() {
        document.getElementById('popup').style.display = 'block';
    }

    // Enable the button when checkbox is checked
    document.getElementById('agreeCheckbox').addEventListener('change', function() {
        document.getElementById('continueButton').disabled = !this.checked;
    });

    // Close the popup and proceed when the button is clicked
    document.getElementById('continueButton').addEventListener('click', function() {
        document.getElementById('popup').style.display = 'none';
        document.getElementById('navbarheader').style.pointerEvents = 'auto';
        document.getElementById('vertical').style.pointerEvents = 'auto';
    });
</script>
@endif
@if(Auth::user()->role_id == 2)
<div class="text-container">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="alert alert-secondary text-center">
                    <br><br><br><br>
                    <h4>სიახლეების ზოლი</h4>
                </div>
                @foreach($news as $new_item)
                <div class="alert alert-secondary">
                    <h6>{{ $loop->iteration }}. [{{ $new_item->create_date }}]</h6>
                    <p>{{ $new_item->title }}</p>
                    <p>{!! $new_item->description !!}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endif
<br><br><br><br>
@endsection
