<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Details - {{ ucfirst($service) }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: white;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {
            background-color: #35424a;
            color: #ffffff;
            padding: 10px 0;
        }

        header .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
        }

        header h1 {
            margin: 0;
        }

        header nav ul {
            list-style: none;
            margin-left: 10px;
            padding: 0;
            display: flex;
        }

        header nav ul li {
            margin-left: 20px;
        }

        header nav ul li a {
            color: #ffffff;
            text-decoration: none; 
            font-weight: bold;
            transition: color 0.3s; 
        }

        header nav ul li a:hover {
            color: #f4c430; 
        }

        .main-container {
            display: flex;
            flex: 1;
        }

        .sidebar {
            width: 25%;
            padding: 20px;
            background-color: white;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            position: relative;
            overflow: hidden;
        }

        .sidebar h2 {
            font-size: 24px;
            color: #35424a;
            margin-bottom: 20px;
        }

        .sidebar p {
            font-size: 16px;
            line-height: 1.5;
        }

        .highlight {
            font-weight: bold;
            color: #f9e197;
        }

        .register, .login {
            display: inline-block;
            background-color: transparent;
            border: none;
            color: blue;
            font-size: 16px;
            cursor: pointer;
        }

        .content {
            flex: 1;
            padding: 20px;
        }

        .content .container {
            max-width: 900px;
            margin: 0 auto;
        }

        footer {
            background-color: #35424a;
            color: #ffffff;
            text-align: center;
            padding: 10px 0;
            position: relative;
            bottom: 0;
            width: 100%;
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
        .joinus{
            width: 300px;
        height: 350px;
        }
    </style>
</head>
<body>
<header>
        <div class="container">
            <nav class="container-text1">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/registration">Job</a></li>
                    <li><a href="/contact">Contact</a></li>
                    <li><a href="/forms">Profile</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="main-container">
        <aside class="sidebar">
            <h2>Are You a <span class="highlight">Service Provider?</span></h2>
            <p>Register 
                 
                <button class="register">
                    <a href="{{ route('auth.registration') }}">Here</a>
                </button> 
                or
                <button type="submit" class="login">
                    <a href="{{ route('auth.login') }}">Log In</a>
                </button> 
                 To Continue.</p>
            <p>Join our community by registering as a service provider and showcase your skills to a wide audience.</p>
            <img src="{{ asset('images/joinus.png') }}" alt="Hero Image" class="joinus">
        </aside>

        <div class="content">
            <div class="container">
                <h1>{{ ucfirst($service) }}</h1>
                @if($forms->isEmpty())
                    <p>No people registered under this service type.</p>
                @else
                    @foreach($forms as $form)
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
                            <button class="message">Message</button>
                            <button class="message">Rate</button>
                            <button class="icon-button bookmark-btn" data-id="{{ $form->id }}">
            <i class="fa fa-bookmark"></i> {{ $form->isBookmarked() ? 'Bookmarked' : 'Bookmark' }}
        </button>
        <form id="bookmark-form-{{ $form->id }}" action="{{ route('bookmark.store', $form->id) }}" method="POST" style="display: none;">
    @csrf
</form>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>

    <footer>
        <p>Footer content here.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('.bookmark-btn').on('click', function() {
            var button = $(this);
            var formId = button.data('id');
            $.ajax({
                url: '/forms/' + formId + '/bookmark',
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    if (response.bookmarked) {
                        button.html('<i class="fa fa-bookmark"></i> Bookmarked');
                    } else {
                        button.html('<i class="fa fa-bookmark"></i> Bookmark');
                    }
                    alert(response.message);
                },
                error: function(xhr) {
                    alert('An error occurred while bookmarking the form.');
                }
            });
        });
    });
</script>

</body>
</html>
