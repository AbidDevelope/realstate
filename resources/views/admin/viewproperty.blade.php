<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin/include/headerlink')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-xxx" crossorigin="anonymous" />

    <title>Property </title>
    <style>
    input[type=text],
    select,
    textarea,
    input[type=file] {
        width: 100%;
        padding: 12px;
        margin: 8px 0;
        display: block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px;
        margin: 16px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    .abs {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }

    label {
        display: block;
        margin-bottom: 8px;
    }
</style>

</head>

<body>
    @include('admin/include/header')
    @include('admin/include/sidebar')
    <main id="main" class="main">
        <section class="section dashboard">
            <div class="row">
                <div class="container-fluid px-4">
                    <div class="card mb-4">
                        <div class="card-header">
                        <div class="container mt-4">
                            <h2>Property List</h2>

                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Type</th>
                                        <th>Status</th>
                                        <th>Price</th>
                                        <th>Area</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Address</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($properties as $property)
                                        <tr>
                                            <td>{{ $property->id }}</td>
                                            <td>{{ $property->property_title }}</td>
                                            <td>{{ $property->property_type }}</td>
                                            <td>{{ $property->status }}</td>
                                            <td>{{ $property->price }}</td>
                                            <td>{{ $property->property_area }}</td>
                                            <td>{{ $property->description }}</td>
                                            <td>{{ $property->address }}</td>
                                            <td>
                                                <img src="{{ asset('uploads/images/' . $property->image) }}" alt="Property Image" style="max-width: 100px;">
                                            </td>
                                            <td>
                                                    <a href="{{ url('edit-student/'.$property->id) }}" class="btn btn-primary btn-sm">
                                                        <i class="fas fa-edit"></i> Edit
                                                    </a>
                                                </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- ======= Footer ======= -->
    @include('admin/include/footer')
    <!-- ======= Footer ======= -->
</body>

</html>
<script>
    $(document).ready(function () {
        @if(session('success'))
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: '{{ session('success') }}',
        });
        @endif
    });
</script>
