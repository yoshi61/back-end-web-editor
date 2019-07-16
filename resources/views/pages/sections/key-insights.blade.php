<!-- Summary title -->
<div class="row border_line_grey">
    <h3 id="selected_industry"> Agriculture, Forestry and Fishing</h3>
    <h5>Summary of survey responses</h5>
</div>

<!-- Stats and summary row -->
<div class="row padding-md">

    <!-- Total -->
    <div class="col-md-4 border_line_right_grey">
        <div class="row">
            <div class="row padding-bottom-md">
                <h4 class="text-center">Total</h4>
            </div>
            <div class="col-md-5 col-xs-5">
                <img src="{{ asset('images/survey-reponses.png') }}" alt="Survey responses icon orange" class="img-responsive" >
            </div>
            <div class="col-md-7 col-xs-7">
                <h2 id="survey_reponses"></h2>
            </div>
        </div>
    </div>


    <!-- Employer size -->
    <div class="col-md-4 border_line_right_grey">
        <div class="row">
            <div class="row padding-bottom-md">
                <h4 class="text-center">Employer size</h4>
            </div>
            <div class="col-md-5 col-xs-5">
                <img src="{{ asset('images/employer-size.png') }}" alt="Employer size icon orange" class="img-responsive" >
            </div>
            <div class="col-md-7 col-xs-7 padding-top-lg">
                <div class="row">
                    <div class="col-md-6 col-xs-6 summary_heading"> Small </div> <div class="col-md-6 col-xs-6"><span id="respond_small"  class=" summary_data"></span></div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-xs-6 summary_heading"> Medium </div> <div class="col-md-6 col-xs-6"><span id="respond_medium"  class=" summary_data"></span></div>
                </div>
                <div class="row">
                    <div class="col-md-6  col-xs-6 summary_heading"> Large </div> <div class="col-md-6 col-xs-6"><span id="respond_large" class=" summary_data"></span></div>
                </div>
            </div>
        </div>
    </div>


    <!-- Organisation -->
    <div class="col-md-4">
        <div class="row">
            <div class="row padding-bottom-md">
                <h4 class="text-center">Organisation</h4>
            </div>
            <div class="col-md-11 col-md-offset-1 chart-container">
                <canvas id="responses_by_organisation"></canvas>
            </div>
        </div>
    </div>

</div>