{{-- Import default layout --}}
@extends('layouts.basic')

{{-- Add content to layout--}}
@section('content')
    <div class="wrapper">
        <!-- Navigation Bar Holder -->
    @include('pages.sections.navigation')

    <!-- Page Content Holder -->
        <div id="content">
        @include('pages.sections.navigation-toggle')

        <!-- Search  -->
            <div class="row mt-3 mb-4">
                <div class="col-12"><h3 class="padding-bottom-md">Regulatory Environment</h3></div>
            </div>

            <div class="line"></div>

            <div class="row mt-3">
                <div class="col-12" id="article-regulatory-environment">
                    <!-- Contents article-regulatory-environment here -->
                </div>
            </div>
        </div>
    </div>

    <!-- BOTTOM SCRIPTS -->
    @include('layouts.basic-bottom-scripts')

    <!-- page related script -->
    <script src="{{ asset('js/wdt/regulatory-environment-scripts.js') }}"></script>

@endsection