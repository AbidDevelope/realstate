<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin/include/headerlink')
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
            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif
                <div class="container-fluid px-4">
                    <div class="card mb-4">
                        <div class="card-header">
                            <div class="abs">
                            <form action="{{url('insertproperty')}}" method="post" enctype="multipart/form-data">
                            @csrf
                                    <div class="row">
                                    <h2>Add Property </h2>
                                        <div class="col-md-6">
                                            <label for="fname">Property Title</label>
                                            <input type="text" id="fname" name="property_title" placeholder="Property Title" value="{{old('property_title')}}">
                                            @if($errors->has('property_title'))
                                             <span class="text-danger">{{ $errors->first('property_title') }}</span>
                                            @endif
                                            <label for="propertyType">Property Type</label>
                                            <select id="propertyType" name="property_type">
                                                <option value="apartment">Apartment</option>
                                                <option value="house">House</option>
                                                <option value="condo">Condo</option>
                                                <option value="townhouse">Townhouse</option>
                                                <!-- Add more options as needed -->
                                            </select>

                                            <label for="fname">Property Area</label>
                                            <input type="text" id="fname" name="property_area" placeholder="Enter Area in Square Feet" value="{{old('property_area')}}">
                                            @if($errors->has('property_area'))
                                             <span class="text-danger">{{ $errors->first('property_area') }}</span>
                                            @endif
                                            <label for="fname">Property price</label>
                                            <input type="text" id="fname" name="price" placeholder="price" value="{{old('price')}}">
                                            @if($errors->has('price'))
                                             <span class="text-danger">{{ $errors->first('price') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-md-6">
                                            

                                            <label for="status">Status:</label>
                                            <select id="status" name="status">
                                                <option value="active">Active</option>
                                                <option value="inactive">Inactive</option>
                                            </select>

                                            <label for="additionalInfo">Property address</label>
                                             <textarea id="additionalInfo" name="address" placeholder="Property Address">{{ old('address') }}</textarea>
                                             @if($errors->has('address'))
                                                <span class="text-danger">{{ $errors->first('address') }}</span>
                                             @endif


                                            <label for="fname">Property File</label>
                                            <input type="file" id="fname" name="image" placeholder="image"value="{{old('image')}}">
                                            @if($errors->has('image'))
                                             <span class="text-danger">{{ $errors->first('image') }}</span>
                                            @endif

                                            <label for="fname">Property description</label>
                                            <textarea id="additionalInfo" name="description" placeholder="Property description"></textarea>
                                            @if($errors->has('description'))
                                             <span class="text-danger">{{ $errors->first('description') }}</span>
                                            @endif
                                           
                                        </div>
                                    </div>
                                    <input type="submit" value="Submit">
                                </form>
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
