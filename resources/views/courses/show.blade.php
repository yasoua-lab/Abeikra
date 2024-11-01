@extends('layouts.app')

@section('content')
<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
    }

    .fixed-card {
        position: fixed;
        top: 100px; /* Adjust based on your navbar height */
        right: 30px; /* Adjust for desired spacing */
        width: 350px;
        z-index: 10;
    }

    .bg-black {
        background-color: #000;
        color: #fff;
    }

    .bg-white {
        background-color: #fff;
    }

    .video-card {
        border: 1px solid #ddd;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    /* Hide card on small devices */
    @media (max-width: 768px) {
        .fixed-card {
            position: static; /* Change to static positioning */
            width: 100%; /* Make it full width */
            margin-top: 20px; /* Add margin if needed */
        }
    }
</style>

<!-- First Row -->
<section class="bg-black py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <!-- Breadcrumb Navigation -->
                <nav >
                    <ul class="d-flex gap-2 list-unstyled">
                        <li class="">
                            <a href="#" class="text-white">Development</a>
                        </li>
                        <li class="">
                            <span class="text-white"> &gt; </span>
                        </li>
                        <li class="">
                            <a href="#" class="text-white">Programming Languages</a>
                        </li>
                        <li class="">
                            <span class="text-white"> &gt; </span>
                        </li>
                        <li class=" active text-white" aria-current="page">Python</li>
                    </ul>
                </nav>
            
                <h1 class="text-white">Course Title</h1>
                <p class="text-white">Description of the course goes here. It should provide insights into what students will learn.</p>
            
                <!-- Course Details Section -->
                <div class="course-details mt-3">
                    <div class="d-flex align-items-center">
                        <div class="rating-stars" style="color: gold; margin-right: 10px;">
                            ★★★★★ <!-- Replace with dynamic star rating logic if needed -->
                        </div>
                        <span class="text-white">27,563 students</span>
                    </div>
                    
                    <p class="text-white mt-2"><strong>Created by:</strong> [Instructor Name]</p>
            
                    <div class="d-flex align-items-center mt-2 gap-2">
                        <i class="material-icons me-1" style="font-size: 20px;">verified</i>
                        <p class="text-white mb-0"><strong>Last Updated:</strong> 9/2015</p>
                    
                        <i class="material-icons me-1" style="font-size: 20px;">language</i>
                        <p class="text-white mb-0">English</p>
                    
                        <i class="material-icons me-1" style="font-size: 20px;">payment</i>
                        <p class="text-white mb-0">Payment Options Available</p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="fixed-card bg-white">
                    <div class="video-card ">
                        {{-- <h5>Course Introduction</h5> --}}
                        <video width="100%" controls>
                            <source src="your-video-url.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        <div class="mt-2">
                            <h6>Features:</h6>
                            <ul>
                                <li>Feature 1</li>
                                <li>Feature 2</li>
                                <li>Feature 3</li>
                                <li>Feature 4</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Second Row -->
<section class="bg-white py-5">
    <div class="container">
        <div class="row col-md-8">
            <div class=" border p-3 mb-4">
                <h5 class="">What You'll Learn</h5>
                <ul class="list-unstyled d-flex flex-wrap">
                    <li class="col-6 mb-2">
                        <span class="">Create their own Python Programs</span>
                    </li>
                    <span class="">&gt;</span>
                    <li class="col-6 mb-2">
                        <span class="">Become an experienced Python Programmer</span>
                    </li>
                    <span class="">&gt;</span>
                    <li class="col-6 mb-2">
                        <span class="">Parse the Web and Create their own Games</span>
                    </li>
                </ul>
            </div>
            
        </div>
    </div>
</section><section class="bg-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2>Course Content</h2>
                <p>Details about the course content, modules, and what will be covered in each section.</p>
            </div>
            <div class="col-md-4">
                <!-- This column can be empty or can contain additional content -->
            </div>
        </div>
    </div>
</section><section class="bg-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2>Course Content</h2>
                <p>Details about the course content, modules, and what will be covered in each section.</p>
            </div>
            <div class="col-md-4">
                <!-- This column can be empty or can contain additional content -->
            </div>
        </div>
    </div>
</section><section class="bg-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2>Course Content</h2>
                <p>Details about the course content, modules, and what will be covered in each section.</p>
            </div>
            <div class="col-md-4">
                <!-- This column can be empty or can contain additional content -->
            </div>
        </div>
    </div>
</section><section class="bg-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2>Course Content</h2>
                <p>Details about the course content, modules, and what will be covered in each section.</p>
            </div>
            <div class="col-md-4">
                <!-- This column can be empty or can contain additional content -->
            </div>
        </div>
    </div>
</section><section class="bg-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2>Course Content</h2>
                <p>Details about the course content, modules, and what will be covered in each section.</p>
            </div>
            <div class="col-md-4">
                <!-- This column can be empty or can contain additional content -->
            </div>
        </div>
    </div>
</section><section class="bg-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2>Course Content</h2>
                <p>Details about the course content, modules, and what will be covered in each section.</p>
            </div>
            <div class="col-md-4">
                <!-- This column can be empty or can contain additional content -->
            </div>
        </div>
    </div>
</section>

@endsection
