@extends('ipq.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-2 sidebar active" id="searchBar">
                <ul class="nav nav-sidebar" role="tablist">
{{--                    Upload Excel--}}
                    <li role="presentation" class="active border_line border_line_top"><a href="#upload-excel" aria-controls="upload-excel" role="tab" data-toggle="tab">Upload Excel</a></li>
{{--                    Skill Shortages--}}
                    <li role="presentation" class="dropdown  border_line">
                        <a href="#" class="dropdown-toggle" id="myTabDrop1" data-toggle="dropdown" aria-controls="myTabDrop1-contents">Skill Shortages<span class="caret"></span></a>
                        <ul class="dropdown-menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
                            <li class=""><a href="#basic-editor-panel" class="editor-tab" id="skill-shortage-moreinfo" data-title="Skill Shortage" role="tab" data-toggle="tab">More Info</a></li>
                            <li class=""><a href="#basic-editor-panel" class="editor-tab" id="skill-shortage-about" data-title="Skill Shortage" role="tab" data-toggle="tab">about this data</a></li>
                        </ul>
                    </li>
{{--                    Skill Demand--}}
                    <li role="presentation" class="dropdown  border_line">
                        <a href="#" class="dropdown-toggle" id="myTabDrop1" data-toggle="dropdown" aria-controls="myTabDrop1-contents">Skill Demand<span class="caret"></span></a>
                        <ul class="dropdown-menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
                            <li class=""><a href="#basic-editor-panel" class="editor-tab" id="skill-demand-subheading" data-title="Skill Demand" role="tab" data-toggle="tab">Subheading</a></li>
                            <li class=""><a href="#basic-editor-panel" class="editor-tab" id="skill-demand-moreinfo" data-title="Skill Demand" role="tab" data-toggle="tab">More Info</a></li>
                            <li class=""><a href="#basic-editor-panel" class="editor-tab" id="skill-demand-about" data-title="Skill Demand" role="tab" data-toggle="tab">about this data</a></li>
                        </ul>
                    </li>
{{--                    Industry Outlook--}}
                    <li role="presentation" class=" border_line"><a href="#basic-editor-panel" class="editor-tab" id="industry-outlook-article" data-title="Industry Outlook" role="tab" data-toggle="tab">Industry Outlook</a></li>
{{--                    Recruitment--}}
                    <li role="presentation" class="dropdown border_line">
                        <a href="#" class="dropdown-toggle" id="myTabDrop1" data-toggle="dropdown" aria-controls="myTabDrop1-contents">Recruitment<span class="caret"></span></a>
                        <ul class="dropdown-menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
                            <li class=""><a href="#basic-editor-panel" class="editor-tab" id="recruitment-subheading" data-title="Recruitment" role="tab" data-toggle="tab">Subheading</a></li>
                            <li class=""><a href="#basic-editor-panel" class="editor-tab" id="recruitment-moreinfo" data-title="Recruitment" role="tab" data-toggle="tab">More Info</a></li>
                            <li class=""><a href="#basic-editor-panel" class="editor-tab" id="recruitment-about" data-title="Recruitment" role="tab" data-toggle="tab">about this data</a></li>
                        </ul>
                    </li>
{{--                    Retention--}}
                    <li role="presentation" class="dropdown border_line">
                        <a href="#" class="dropdown-toggle" id="myTabDrop1" data-toggle="dropdown" aria-controls="myTabDrop1-contents">Retention<span class="caret"></span></a>
                        <ul class="dropdown-menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
                            <li class=""><a href="#basic-editor-panel" class="editor-tab" id="retention-subheading" data-title="Retention" role="tab" data-toggle="tab">Subheading</a></li>
                            <li class=""><a href="#basic-editor-panel" class="editor-tab" id="retention-moreinfo" data-title="Retention" role="tab" data-toggle="tab">More Info</a></li>
                            <li class=""><a href="#basic-editor-panel" class="editor-tab" id="retention-about" data-title="Retention" role="tab" data-toggle="tab">about this data</a></li>
                        </ul>
                    </li>
{{--                    Skilled Migration--}}
                    <li role="presentation" class="dropdown border_line">
                        <a href="#" class="dropdown-toggle" id="myTabDrop1" data-toggle="dropdown" aria-controls="myTabDrop1-contents">Skilled Migration<span class="caret"></span></a>
                        <ul class="dropdown-menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
                            <li class=""><a href="#basic-editor-panel" class="editor-tab" id="skilled-migration-subheading" data-title="Skilled Migration" role="tab" data-toggle="tab">Subheading</a></li>
                            <li class=""><a href="#basic-editor-panel" class="editor-tab" id="skilled-migration-moreinfo" data-title="Skilled Migration" role="tab" data-toggle="tab">More Info</a></li>
                            <li class=""><a href="#basic-editor-panel" class="editor-tab" id="skilled-migration-about" data-title="Skilled Migration" role="tab" data-toggle="tab">about this data</a></li>
                        </ul>
                    </li>
{{--                    Plans & Major Projects--}}
                    <li role="presentation" class=" border_line"><a href="#basic-editor-panel" class="editor-tab" id="palns-and-projects-moreinfo" data-title="Plans & Projects" role="tab" data-toggle="tab">Plans & Major Projects</a></li>
{{--                    Regulatory Environment--}}
                    <li role="presentation" class=" border_line"><a href="#basic-editor-panel" class="editor-tab" id="regulatory-environment-article" data-title="Regulatory Environment" role="tab" data-toggle="tab">Regulatory Environment</a></li>
{{--                    Skilling SA--}}
                    <li role="presentation" class="dropdown border_line">
                        <a href="#" class="dropdown-toggle" id="myTabDrop1" data-toggle="dropdown" aria-controls="myTabDrop1-contents">Skilling SA<span class="caret"></span></a>
                        <ul class="dropdown-menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
                            <li class=""><a href="#basic-editor-panel" role="tab" class="editor-tab" id="skilling-sa-subheading" data-title="Skilling SA" data-toggle="tab">Subheading</a></li>
                            <li class=""><a href="#basic-editor-panel" role="tab" class="editor-tab" id="skilling-sa-moreinfo" data-title="Skilling SA" data-toggle="tab">More Info</a></li>
                            <li class=""><a href="#basic-editor-panel" role="tab" class="editor-tab" id="skilling-sa-about" data-title="Skilling SA" data-toggle="tab">about this data</a></li>
                        </ul>
                    </li>
{{--                    Actions & Strategies--}}
                    <li role="presentation" class=" border_line"><a href="#basic-editor-panel" class="editor-tab" id="actions-and-strategies-moreinfo" data-title="Actions & Strategies" role="tab" data-toggle="tab">Actions & Strategies</a></li>
{{--                    Training Activity--}}
                    <li role="presentation" class="dropdown border_line">
                        <a href="#" class="dropdown-toggle" id="myTabDrop1" data-toggle="dropdown" aria-controls="myTabDrop1-contents">Training Activity<span class="caret"></span></a>
                        <ul class="dropdown-menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
                            <li class=""><a href="#basic-editor-panel" role="tab" class="editor-tab" id="training-activity-moreinfo" data-title="Training Activity" data-toggle="tab">More Info</a></li>
                            <li class=""><a href="#basic-editor-panel" role="tab" class="editor-tab" id="training-activity-about" data-title="Training Activity" data-toggle="tab">about this data</a></li>
                        </ul>
                    </li>
                </ul>

                <button type="button" id="close_search" class="btn btn-tasc-src btn-tasc btn-block">
                    <i class="glyphicon glyphicon-remove"></i> <span>Close Navigation</span>
                </button>
            </div>

            <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" id="main-content">
                @include('pages.sections.navigation-toggle')
                @if (session('message'))
                    <div class="row">
                        {!! session('message') !!}
                    </div>
                @endif
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane in active" id="upload-excel">
                        <div class="panel panel-default">
                            <div class="panel-heading"><h3>Upload new data set to WDT</h3></div>
                            <div class="panel-body">
                                <div class="alert alert-info" role="alert">
                                    <strong>Notice: </strong> Please use ".xlsx, .xls" files only.
                                </div>
                                {!! Form::open(['url' => '/wdt/upload/data_set', 'files' => true]) !!}

                                <div class="form-group">
                                    {!! Form::file('data_set', ['class'=>'file']) !!}
                                    <div class="input-group col-xs-12">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
                                        <input type="text" class="form-control input" disabled placeholder="Upload data set">
                                        <span class="input-group-btn">
                                        <button class="browse btn btn-tasc input" type="button"><i class="glyphicon glyphicon-search"></i> Browse</button>
                                    </span>
                                    </div>
                                </div>
                                <div class="input-group col-xs-12">
                                <span class="input-group-btn">
                                        <button class="btn btn-primary btn-lg input pull-right" type="submit"><i class="glyphicon glyphicon-upload"></i> Upload</button>
                                    </span>
                                </div>
                                {!! Form::hidden('user_id', Auth::user()->id) !!}
                                {!! Form::close() !!}


                                <h3>Uploaded data set</h3>
                                <hr>
                                {!! $wdt_excel_table !!}

                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="basic-editor-panel">
                        <div class="panel panel-default">
                            <div class="panel-heading"><h3 id="editor-title">Update More Info (Skill Shortage)</h3></div>
                            <!-- Search  -->
                            @include('pages.sections.single-search')
                            <div class="panel-body">
                                <form class="editor-form">
                                    <textarea class="tinymce" id="editor-content">
                                        
                                    </textarea>
                                    <button class="btn btn-primary btn-lg input pull-right btn-save-text" type="submit">Save</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="js/wdt/wdt-settings.js"></script>
    <script type="text/javascript" src="plugin/tinymce/tinymce.min.js"></script>
    <script type="text/javascript" src="plugin/tinymce/init-tinymce.js"></script>
@endsection
