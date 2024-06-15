<!-- resources/views/bookmarks/index.blade.php -->
@extends('forms.applayout')

@section('content')

<style>
     .details {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .label, .value {
            flex: 1;
        }

        .label p {
            text-align: left;
            padding-left: 10px;
        }

        .value p {
            text-align: left;
            padding-left: -50px;
        }
        .card {
            background: #f9e197;
            padding: 20px;
            margin: 20px 0;
            border-radius: 4px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 500px;
            transition: transform 0.3s;
            flex: 1 1 calc(50% - 20px); /* Adjust to fit two cards per row */
    box-sizing: border-box;
    margin-bottom: 20px; 
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card h3 {
            margin-top: 0;
        }
        .card-container {
    display: flex;
    flex-wrap: wrap;
    gap: 40px; /* Adjust the gap between cards as needed */
}


</style>

<div class="container">
    <h1>Bookmarks</h1>
    @if ($bookmarks->isEmpty())
        <p>You have no bookmarks yet.</p>
    @else
    <div class="card-container">
            @foreach ($bookmarks as $form)
                <div class="card">
                    <h3>{{ $form->name }}</h3>
                    <div class="details">
                        <div class="label">
                            <p><strong>Address</strong></p>
                            <p><strong>Mobile</strong></p>
                            <p><strong>Service Type</strong></p>
                            <p><strong>Charge Per Hour</strong></p>
                            <p><strong>Description</strong></p>
                        </div>
                        <div class="value">
                            <p>{{ $form->address }}</p>
                            <p>{{ $form->mobile }}</p>
                            <p>{{ $form->service_type }}</p>
                            <p>{{ $form->charge_per_hour }}</p>
                            <p>{{ $form->description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
