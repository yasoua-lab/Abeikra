@extends('layouts.app')

@section('content')
<div class="row mt-4">
    <div class="col-lg-4 col-md-6 mt-4 mb-4">
        <div class="card z-index-2">
            <a href="" class="text-decoration-none"> <!-- Link to the course page -->
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                        <img src="{{ asset('path/to/your/course-image1.jpg') }}" class="img-fluid" alt="Course Image 1">
                    </div>
                </div>
                <div class="card-body">
                    <h6 class="mb-0">Course Title 1</h6>
                    <p class="text-sm">Brief description of Course 1.</p>
                    <p class="text-sm">Videos: 10 | Users: 25</p> <!-- Number of videos and users -->
                    <hr class="dark horizontal">
                    <div class="d-flex">
                        <i class="material-icons text-sm my-auto me-1">schedule</i>
                        <p class="mb-0 text-sm">Last updated: 2 days ago</p>
                    </div>
                </div>
            </a>
            <div class="card-footer d-flex justify-content-between">
                <a href="" class="text-primary"> <!-- Edit icon -->
                    <i class="material-icons">edit</i>
                </a>
                <a href="" class="text-danger" onclick="event.preventDefault(); document.getElementById('delete-form-1').submit();"> <!-- Delete icon -->
                    <i class="material-icons">delete</i>
                </a>
                <form id="delete-form-1" action="" method="POST" style="display: none;">
                    @csrf
                    @method('DELETE')
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 mt-4 mb-4">
        <div class="card z-index-2">
            <a href="" class="text-decoration-none">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                    <div class="bg-gradient-success shadow-success border-radius-lg py-3 pe-1">
                        <img src="{{ asset('path/to/your/course-image2.jpg') }}" class="img-fluid" alt="Course Image 2">
                    </div>
                </div>
                <div class="card-body">
                    <h6 class="mb-0">Course Title 2</h6>
                    <p class="text-sm">Brief description of Course 2.</p>
                    <p class="text-sm">Videos: 5 | Users: 15</p>
                    <hr class="dark horizontal">
                    <div class="d-flex">
                        <i class="material-icons text-sm my-auto me-1">schedule</i>
                        <p class="mb-0 text-sm">Last updated: 4 minutes ago</p>
                    </div>
                </div>
            </a>
            <div class="card-footer d-flex justify-content-between">
                <a href="{" class="text-primary">
                    <i class="material-icons">edit</i>
                </a>
                <a href="" class="text-danger" onclick="event.preventDefault(); document.getElementById('delete-form-2').submit();">
                    <i class="material-icons">delete</i>
                </a>
                <form id="delete-form-2" action="" method="POST" style="display: none;">
                    @csrf
                    @method('DELETE')
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-4 mt-4 mb-3">
        <div class="card z-index-2">
            <a href="" class="text-decoration-none">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                    <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1">
                        <img src="{{ asset('path/to/your/course-image3.jpg') }}" class="img-fluid" alt="Course Image 3">
                    </div>
                </div>
                <div class="card-body">
                    <h6 class="mb-0">Course Title 3</h6>
                    <p class="text-sm">Brief description of Course 3.</p>
                    <p class="text-sm">Videos: 8 | Users: 20</p>
                    <hr class="dark horizontal">
                    <div class="d-flex">
                        <i class="material-icons text-sm my-auto me-1">schedule</i>
                        <p class="mb-0 text-sm">Just updated</p>
                    </div>
                </div>
            </a>
            <div class="card-footer d-flex justify-content-between">
                <a href="" class="text-primary">
                    <i class="material-icons">edit</i>
                </a>
                <a href="" class="text-danger" onclick="event.preventDefault(); document.getElementById('delete-form-3').submit();">
                    <i class="material-icons">delete</i>
                </a>
                <form id="delete-form-3" action="" method="POST" style="display: none;">
                    @csrf
                    @method('DELETE')
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
