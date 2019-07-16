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
                <div class="col-12"><h3 class="padding-bottom-md">Industry Outlook</h3></div>
            </div>

            <div class="line"></div>

            <div class="row mt-3">
                <div class="col-12" id="article-industry-outlook">
                    <!-- Contents here -->
                </div>
            </div>
            <div class="line"></div>
        <!-- Download data -->
        @include('pages.sections.export-buttons')
        </div>
    </div>

    <!-- BOTTOM SCRIPTS -->
    @include('layouts.scripts.industry-outlook')

@endsection