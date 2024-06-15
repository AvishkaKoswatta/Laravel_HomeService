@extends('forms.applayout')

@section('content')
<style>
    .container-fluid {
        margin-top: 8rem;
        margin-left: 100px;
        padding: 0;
        width: 100%;
    }
    .search-container {
        margin-bottom: 4rem;
        position: relative;
        text-align: center;
        width: 100%;
    }
    .search-container img {
        margin-top: -150px;
        margin-left:-240px ;
        align-items: left;
        width:1400px;
        height: 400px;
        object-fit: cover;
        opacity: 0.5;
    }
    .search-container form {
        display: flex;
        align-items: center;
        justify-content: center;
        position: absolute;
        width: 100%;
        top: 20%;
        transform: translateY(-50%);
    }
    .search-input {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 2rem;
}

.search-input input[type="text"] {
    height: 45px;
    width: 400px;
    margin-left: -100px;
    border-radius: 5px 0 0 5px;
    border: none;
    padding: 0 1rem;
}

.search-input .search-button {
    height: 47px;
    border-radius: 0 5px 5px 0;
    border: 1px solid #f4c430;
    background-color: #f4c430;
    color: #fff;
    cursor: pointer;
    padding: 0 1rem;
}

    .alert-warning {
        background-color: #fff3cd;
        color: #856404;
        padding: 1rem;
        border: 1px solid #ffeeba;
        border-radius: 5px;
        margin-bottom: 1rem;
    }
    .row {
        display: flex;
        flex-wrap: wrap;
    }
    .col-md-4 {
        flex: 1;
        max-width: 33.333%;
        box-sizing: border-box;
        padding: 0.5rem;
    }
    .card {
            background: #f9e197;
            padding: 20px;
            margin: 20px 0;
            border-radius: 4px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 500px;
            transition: transform 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card h3 {
            margin-top: 0;
        }

        .message {
            background-color: #f4c430;
            text-decoration: none;
            color: #fff;
            padding: 10px 20px;
            border-radius: 4px;
            border: none;
            cursor: pointer;
            margin-top: 10px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        .message:hover {
            background-color: #f8d979;
        }

        .detail {
    display: flex;
    margin-bottom: 10px;
}

.label {
    flex: 2;
    
}

.value {
    flex: 3;
    text-align: left;
    padding-left: 150px;
}

        .icon-button {
            background-color: #f4c430;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        .icon-button:hover {
            background-color: #f8d979;
        }

        .icon-button .fa {
            margin-right: 8px;
        }
</style>

<div class="container-fluid">

<div class="search-container">
    <img src="{{ asset('images/search1.jpg') }}" alt="Hero Image">
    <form action="{{ route('search') }}" method="GET">
        <div class="search-input">
            <input type="text" name="address" placeholder="Enter your location">
            <button type="submit" class="search-button">Search</button>
        </div>
    </form>
</div>


    @if($results->isEmpty())
        <div class="alert-warning">
            No Results.
        </div>
    @else
    <div class="row">
            @foreach($results as $result)
                <div class="card">
                    <h3 class="card-title">{{ $result->name }}</h3>
                    <div class="details">
                        <div class="detail">
                            <p class="label"><strong>Address</strong></p>
                            <p class="value">{{ $result->address }}</p>
                        </div>
                        <div class="detail">
                            <p class="label"><strong>Mobile</strong></p>
                            <p class="value">{{ $result->mobile }}</p>
                        </div>
                        <div class="detail">
                            <p class="label"><strong>Service Type</strong></p>
                            <p class="value">{{ $result->service_type }}</p>
                        </div>
                        <div class="detail">
                            <p class="label"><strong>Charge Per Hour</strong></p>
                            <p class="value">{{ $result->charge_per_hour }}</p>
                        </div>
                        <div class="detail">
                            <p class="label"><strong>Description:</strong></p>
                            <p class="value">{{ $result->description }}</p>
                        </div>
                    </div>
                    <button class="message">Message</button>
                    <button class="message">Rate</button>
                    <button class="icon-button">
                        <i class="fa fa-bookmark"></i> Bookmark
                    </button>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
