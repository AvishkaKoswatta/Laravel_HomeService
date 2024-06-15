@extends('forms.applayout')

@section('content')
<div class="container">

        <div class="col-md-8">
           
            <button type="submit" class="btn btn-success">
                <a href="{{ route('form.create') }}" class="edit">Create a New Job</a>
            </button>
</br>
<p></p>
            <button type="submit" class="btn btn-success">
                <a href="{{ route('bookmark') }}" class="edit">Bookmarks</a>
            </button>
            </br>
<p></p>
            <button type="submit" class="btn btn-success">
                <a href="{{ route('form.create') }}" class="edit">My Reviews</a>
            </button>
            </br>
<p></p>
            <button type="submit" class="btn btn-success">
                <a href="{{ route('form.create') }}" class="edit">Messages</a>
            </button>
           
            
        </div>
        
        <div class="row">
        <div class="col-md-8-second">
            <ul class="list-group-second">
            <p class="name">My Jobs</p>
                @foreach($forms as $form)
                    <div class="list-group-item">
                       
                        <div class="details">
                            <div class="label">
                                <p><strong>Address</strong></p>
                                <p><strong>Mobile</strong></p>
                                <p><strong>Service Type</strong></p>
                                <p><strong>Description</strong></p>
                                <p><strong>Rate Per Hour</strong></p>
                            </div>
                            <div class="value">
                                <p>{{ $form->address }}</p>
                                <p>{{ $form->mobile }}</p>
                                <p>{{ $form->service_type }}</p>
                                <p>{{ $form->description }}</p>
                                <p>{{ $form->charge_per_hour }}</p>
                            </div>
                        </div>
                        <div class="action-buttons">
                            <button type="submit" class="btn btn-success">
                                <a href="{{ route('form.edit', $form) }}" class="edit">Edit</a>
                            </button>
                            <form action="{{ route('form.destroy', $form) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </ul>
        </div>
       
    </div>
</div>

<style>

header {
            background-color: #35424a;
            color: #ffffff;
            padding: 10px 0;
        }

        header .container1 {
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
            /* Remove underline */
            font-weight: bold;
            transition: color 0.3s;
            /* Smooth color transition */
        }

        header nav ul li a:hover {
            color: #f4c430;
            /* Change color on hover */
        }


    .myjobs {
    margin-left: -38px;
}

.container {
    display: flex;
    justify-content: center;
    align-items: flex-start;
    min-height: 100vh;
    background: #f8f9fa;
}

.row {
    display: flex;
    width: 100%;
}

.col-md-8, .col-md-8-second, .col-md-8-third {
    padding: 20px;
    display: flex;
    flex-direction: column;
    align-items: stretch;
}

.col-md-8 {
   
    border-radius: 8px;
   background-color: #fff;
   box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin-left: -200px;
    width: 300px;
    
}

.col-md-8-second {
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin-left: 46px;
    width: 500px;
}

.col-md-8-third {
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin-left: 40px;
    width: 300px;
    min-height: 200px; /* Minimum height */
}

.list-group-item {
    margin-bottom: 10px;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    display: flex;
    flex-direction: column;
}

.details {
    display: flex;
    justify-content: space-between;
    margin-bottom: 10px;
    background-color: #f9e197;
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
    padding-left: 10px;
}

.action-buttons {
    display: flex;
    justify-content: flex-start;
    gap: 10px;
}

.btn {
    text-decoration: none;
    color: #fff;
    padding: 10px 20px;
    border-radius: 4px;
    border: none;
    cursor: pointer;
}

.btn-success {
    background-color: #f4c430;
}

.btn-success:hover {
    background-color: #f8d979;
}

.btn-warning {
    background-color: #ffc107;
    color: #fff;
}

.btn-danger {
    background-color: #f4c430;
}

.btn-danger:hover {
    background-color: red;
}

.edit {
    text-decoration: none;
    color: white;
}

.name {
    margin-top: 10px;
    font-size: 45px;
    font-weight: bold;
}

    

</style>
@endsection
