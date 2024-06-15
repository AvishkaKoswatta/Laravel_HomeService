<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Form</title>
    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 95vh;
            background: #fff;
        }

        .content-wrapper {
            margin-top: 80px;
            display: flex;
            align-items: flex-start;
        }

        .form-container {
            width: 500px;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-right: 20px;
        }

        .service-provider {
            position: relative;
            background-color: #f4c430;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            height: 550px;
            width: 500px;
            overflow: hidden;
            margin-left: 20px;
            margin-top: -35px;
        }

        .service-provider::before, .service-provider::after {
            content: '';
            position: absolute;
            background: rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            z-index: 0;
        }

        .service-provider::before {
            width: 150px;
            height: 150px;
            top: 20px;
            left: -50px;
        }

        .service-provider::after {
            width: 200px;
            height: 200px;
            bottom: -50px;
            right: -50px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-control {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: transparent;
        }

        .btn-success {
            background-color: #f4c430;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn-success:hover {
            background-color: #f8d979;
        }

        img.profile {
            height: 200px;
            width: 200px;
            margin-top: -200px;
            margin-left: 90px;
        }

        .service-provider-txt {
            font-size: 30px;
            color: white;
            font-weight: bold;
            z-index: 1;
            margin-top: 150px;
            margin-left: -250px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="content-wrapper">
            <div class="form-container">
                <form method="post" action="{{ route('form.update', ['form' => $form]) }}">
                    @csrf 
                    @method('put')
                    <div class="form-group">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ $form->name }}">
                    </div>
                    <div class="form-group">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" name="address" id="address" class="form-control" value="{{ $form->address }}">
                    </div>
                    <div class="form-group">
                        <label for="mobile" class="form-label">Mobile</label>
                        <input type="text" name="mobile" id="mobile" class="form-control" value="{{ $form->mobile }}">
                    </div>
                    <div class="form-group">
                        <label for="service_type" class="form-label">Service Type</label>
                        <select name="service_type" id="service_type" class="form-control">
                            <option value="cleaning" {{ $form->service_type == 'cleaning' ? 'selected' : '' }}>Cleaning</option>
                            <option value="plumbing" {{ $form->service_type == 'plumbing' ? 'selected' : '' }}>Plumbing</option>
                            <option value="mason" {{ $form->service_type == 'mason' ? 'selected' : '' }}>Mason</option>
                            <option value="gardening" {{ $form->service_type == 'gardening' ? 'selected' : '' }}>Gardening</option>
                            <option value="automobile" {{ $form->service_type == 'automobile' ? 'selected' : '' }}>Automobile</option>
                            <option value="beauty" {{ $form->service_type == 'beauty' ? 'selected' : '' }}>Beauty</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" name="description" id="description" class="form-control" value="{{ $form->description }}">
                    </div>
                    <div class="form-group">
                        <label for="charge_per_hour" class="form-label">Rate Per Hour</label>
                        <input type="text" name="charge_per_hour" id="charge_per_hour" class="form-control" value="{{ $form->charge_per_hour }}">
                    </div>
                    <button type="submit" class="btn btn-success">Update</button>
                </form>
            </div>

            <div class="service-provider">
                <img src="{{ asset('images/profile.png') }}" alt="Hero Image" class="profile">
                <div class="service-provider-txt">
                    <p>Tell Others What You Do</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
