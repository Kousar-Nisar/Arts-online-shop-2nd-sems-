@extends('layouts.app')

@section('content')
<main class="pt-90">
    <div class="mb-4 pb-4"></div>
    <section class="contact-us container">
        <div class="mw-930">
            <h2 class="page-title">About Us</h2>
        </div>

        <div class="about-us__content pb-5 mb-5">
            <p class="mb-5">
                <img loading="lazy" class="w-100 h-auto d-block" src="{{ asset('assets/images/about/55b08a0f-ced4-4c11-a984-67e15f39a09f.__CR0,0,970,300_PT0_SX970_V1___.jpg') }}" 
                width="1410" height="550" alt="" />
            </p>
            <div class="mw-930">
                <h3 class="mb-4">OUR STORY</h3>
                <p class="fs-6 fw-medium mb-4">
                    From humble beginnings to where we stand today, our journey is built on passion, purpose, and perseverance. We began with a simple idea: to create something meaningful that resonates with people and makes a difference. Over the years, we’ve grown, evolved, and thrived by staying true to our values and embracing change. Together, we’re shaping a brighter future, one step at a time.
                </p>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <h5 class="mb-3">Our Mission</h5>
                        <p class="mb-3">To provide innovative solutions that enhance lives and create value for our customers, partners, and communities. We are committed to excellence, sustainability, and fostering meaningful connections.</p>
                    </div>
                    <div class="col-md-6">
                        <h5 class="mb-3">Our Vision</h5>
                        <p class="mb-3">To be a trusted leader in our industry, driving positive change and inspiring others through innovation, integrity, and impact. Our vision is a world where possibilities are endless, and success is shared.

                        </p>
                    </div>
                </div>
            </div>
            <div class="mw-930 d-lg-flex align-items-lg-center">
                <div class="image-wrapper col-lg-6">
                    <img class="h-auto" loading="lazy" src="{{ asset('assets/images/about/DALL·E 2025-01-16 00.03.05 - A visually appealing display showcasing products from a stationary and gift shop, including greeting cards, gift articles, dolls, files, handbags, wal.webp') }}" width="450" 
                    height="500" alt="">
                </div>
                <div class="content-wrapper col-lg-6 px-lg-4">
                    <h5 class="mb-3">The Company</h5>
                    <p>
                        To be a trusted leader in our industry, driving positive change and inspiring others through innovation, integrity, and impact. Our vision is a world where possibilities are endless, and success is shared.
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
