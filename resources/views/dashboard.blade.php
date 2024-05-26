<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <div class="pagetitle">
                        <h1>Dashboard</h1>
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </nav>
                    </div><!-- End Page Title -->

                    <section class="section dashboard">
                        <div class="row">

                            <!-- Left side columns -->
                            <div class="col-lg-8">
                                <div class="row">

                                    <!-- Sales Card -->
                                    <div class="col-xxl-4 col-md-6">
                                        <div class="card info-card sales-card">
                                            <div class="card-body">
                                                <h5 class="card-title">Total Post</span></h5>

                                                <div class="d-flex align-items-center">
                                                    <div
                                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                        <i class="bi bi-file-text-fill"></i>
                                                    </div>
                                                    <div class="ps-3">
                                                        <h6>{{ $totalPosts }}</h6>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div><!-- End Sales Card -->

                                    <!-- Revenue Card -->
                                    <div class="col-xxl-4 col-md-6">
                                        <div class="card info-card revenue-card">
                                            <div class="card-body">
                                                <h5 class="card-title">Published Post</span></h5>

                                                <div class="d-flex align-items-center">
                                                    <div
                                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                        <i class="bi bi-file-check-fill"></i>
                                                    </div>
                                                    <div class="ps-3">
                                                        <h6>{{  $publishedPosts  }}</h6>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div><!-- End Revenue Card -->

                                    <!-- Customers Card -->
                                    <div class="col-xxl-4 col-xl-12">

                                        <div class="card info-card customers-card">
                                            <div class="card-body">
                                                <h5 class="card-title">Unpublished Post</span></h5>

                                                <div class="d-flex align-items-center">
                                                    <div
                                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                        <i class="bi bi-file-x-fill"></i>
                                                    </div>
                                                    <div class="ps-3">
                                                        <h6>{{ $unpublishedPosts }}</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- End Customers Card -->
                                </div>
                            </div>

                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>