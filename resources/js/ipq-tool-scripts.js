// Initialise left search menu
$('#searchBarCollapse').on('click', function () {
    $('#searchBar').toggleClass('active');
});

// Highlight Search option on click for visual feedback
$("nav a").on("click", function() {

    // Ignore if clicked to toggle options only
    // reduce ajax pull
    if( $(this).attr('data-toggle') !== "collapse")
    {
        // Make Industry selectable only once or one option at a time
        // Remove class only for Industry
        if ( get_data_selected() === "industry" )
        {
            // Escape option if non-industry options are clicked
            if( $(this).parent().attr('class') === "ind_select")
            {
                // Find any previously selected option and remove class
                $(".ind_select.active").removeClass("active");
            }
        }

        /*
        // Make Employer size selectable only once
        if( $(this).parent().attr('class') === "emp_siz_select")
        {
            // Find any previously selected option and remove class
            $(".emp_siz_select.active").removeClass("active");
        }
        */


        // Toggle active class to show that option is selected or de-selected
        $(this).parent().toggleClass("active");

        // Check if Industry group still selected
        if ( get_data_selected() === "industry" )
        {
            // Fix Selection issue on de-select
            showIndustryOptionsAndSelectDefaultIfRequired();

            // Do not trigger if Industry dropdown toggle title is selected
            if( $(this).attr('id') !== "src_industries_href" )
            {

                // JUST INDUSTRY HAS BEEN SELECTED
                // Reload skills priority data table
                $('#skill_priority').DataTable().ajax.reload();

                // Refresh summary data
                summaryData();
            }
        }

        // Reload data table
        $('#ipq_table').DataTable().ajax.reload();
    }
});

// Check data group selected and show/hide appropriate options
// This checks what has already been selected
function check_group_status_current_status()
{
    /*if( get_data_selected() === "state" )
    {
        // State selected
        // Hide Industry
        $('#src_industries').hide();
    }
    else{*/
        // Industry selected
        // show Industry
        showIndustryOptionsAndSelectDefaultIfRequired();
    //}
}


// Determine which data is selected
// grabs which toggle has been selected
function get_data_selected()
{
    /*if( $('#data_set_group').prop("checked"))
    {
        // Industry selected
        return "industry";
    }

    // false set to state
    // State selected
    return "state";*/

    return "industry";

}

/*
// Toggle option on select
$('.data_sector').on('click', function ()
{

    // Hide or show
    // The state is in future as DOM element is not change until code is executed
    if( get_data_selected() === 'state' )
    {
        // Select first option
        showIndustryOptionsAndSelectDefaultIfRequired();
    }
    else // if industry
    {
        // Assuming STATE data
        // Hide Industry option
        $('#src_industries').hide();
    }

    // Make selected active
   $('.data_sector').toggleClass("active");

    // Reload data table
    $('#ipq_table').DataTable().ajax.reload();
    $('#skill_priority').DataTable().ajax.reload();

    // Refresh summary data
    summaryData();
});*/



// Check show industry options
function showIndustryOptionsAndSelectDefaultIfRequired()
{
    // Check and select first options
    selectFirstOptionInIndustry();
    // Show options
    $('#src_industries').show();
}


// Select first option
function selectFirstOptionInIndustry()
{
    // check if industry has any value selected
    if( !$(".ind_select").hasClass('active') )
    {
        $('.ind_select').first().addClass('active');
    }
}


// initialise search for datatable
function getSelectedOptions()
{
    // Select options object
    var selected_options_dt = {};

    // Get selected options
    $('nav a').parent().find('.active').each(function() {

        // Get id name
        var cat_id = $(this).parent().attr('id');

        // Check for state and industry
        // assign id because not set in html
        if( cat_id == null )
        {
            cat_id = "data_set";
        }

        // Get option name
        var selected_option = ($(this).text());

        // IF VALUE IS SET
        // get id and get value
        var selected_option_id = $(this).children("a").attr("id");
        if( selected_option_id != null )
        {
            // If value is numeric ignore
            if( !$.isNumeric(selected_option_id) )
            {
                // Else change selected option value
                selected_option = selected_option_id;
            }
        }

        // Check if object is empty
        if (selected_options_dt.hasOwnProperty(cat_id)) {
            // Object is not empty and key exists
            // append value to existing value in object
            selected_options_dt[cat_id] = selected_options_dt[cat_id]+","+selected_option;
        }
        else
        {
            // Object empty
            // add value for the first time
            selected_options_dt[cat_id] = selected_option;
        }

    });
    return selected_options_dt;
}


// initialise search for skill priority bottom datatable
function getSelectedOptionsForSkillPriority()
{

    // Set select options object and variable
    var selected_options_dt = {};
    //var selected_sector = '';

    // Get selected data set sector
     //$('span .data_sector').each(function() {

        /* // Grab active toggle
        if( $(this).hasClass('active') )
        {*/
            // Get selected sector toggle option text
            //selected_sector = $(this).text();

            // Add selected to object
            selected_options_dt['data_sector'] =  "Industry";

            /*// Check sector and look for more selection if 'Industry' is selected
            if( selected_sector === 'Industry')
            {*/
                // Loop through each option under industry and get selected
                $('li .ind_select').each(function () {
                    // Get selected / active
                    if( $(this).hasClass('active') )
                    {
                        // Add selected option to object
                        selected_options_dt['selected_ind'] =  $(this).text();
                    }
                });
            //}
        //}
    //});

    return selected_options_dt;
}


// Get selected value and trigger pdf report generation
$('#export_pdf').on('click', function () {

    $.blockUI({ message: '<h3><img src="/images/ipq-busy.gif" /> Please wait... we are generating your report.</h3>' });

    // Get selected options
    var get_selection = getSelectedOptions();

    // Get main Table info
    var ipq_table = $('#ipq_table').DataTable();

    // Get ordering info
    var ipq_order = ipq_table.order();

    // Build get data for url
    // update select with main IPQ table details
    get_selection['ipq_start']     = ipq_table.page.info().start;
    get_selection['ipq_length']    = ipq_table.page.info().length;
    get_selection['ipq_sort_col']  = ipq_order[0][0];
    get_selection['ipq_sort_dir']  = ipq_order[0][1];
    get_selection['ipq_search']    = ipq_table.search();

    // Get data from ajax
    $.ajax({
        type: "POST",
        url: "/report/pdf",
        data: { selected_options: JSON.stringify(get_selection)},
        success: function (file_data) {
            // once report has been generated
            // output file to be downloaded
            window.location.href = "/report/get_report?filename="+file_data['filename']+".pdf";
            $.unblockUI();
        }
    });

});


// Get selected values and trigger exporting excel report
$('#export_excel').on('click', function ()
{
    $.blockUI({ message: '<h3><img src="/images/ipq-busy.gif" /> Please wait... we are generating your report.</h3>' });

    // Get selected options
    var get_selection = getSelectedOptions();

    // Get main Table info
    var ipq_table = $('#ipq_table').DataTable();
    get_selection['ipq_search']    = ipq_table.search();

    // Get ordering info
    var ipq_order = ipq_table.order();
    get_selection['ipq_sort_col']  = ipq_order[0][0];
    get_selection['ipq_sort_dir']  = ipq_order[0][1];


    // Get data from ajax
    $.ajax({
        type: "POST",
        url: "/report/excel",
        data: { selected_options: JSON.stringify(get_selection)},
        success: function (file_data) {
            // once report has been generated
            // output file to be downloaded
            window.location.href = "/report/get_excel_report?filename="+file_data['filename']+".xls";
            $.unblockUI();
        }
    });
});

// Initialise and refresh chart
function summaryData()
{
    // Get data from ajax
    $.ajax({
        url: "/ajax/ipq-summary-chart-data",
        method: "GET",
        aysn: false,
        cache: false,
        data: { ipq_summary_options: JSON.stringify( getSelectedOptionsForSkillPriority() ) },
        success: function (s_data) {
            /* ==============
             * Draw charts
             * ==============
             */
            Charts.setOptions(s_data['chart_data']);
            Charts.refresh();

            // Update Survey reponse
            $('#survey_reponses').text( s_data['survey_response'] );

            // Update responses by employer size
            $('#respond_small').text( s_data['employee_respond']['small'] );
            $('#respond_medium').text( s_data['employee_respond']['medium'] );
            $('#respond_large').text( s_data['employee_respond']['large'] );

            /*// Update selected industry
            // Only display title for Industry data
            if( $(".data_sector.active").text() === "Industry")
            {*/
                if( $('.ind_select').hasClass('active') )
                {
                    // Update when toggling between state and industry
                    $('#selected_industry').text( $('.ind_select.active').text() );
                }
                else
                {
                    // Set a default one
                    $('#selected_industry').text( "Agriculture, Forestry and Fishing" );

                }
            /*}
            else
            {
                // set to default for Agriculture, Forestry and Fishing
                $('#selected_industry').text( "Agriculture, Forestry and Fishing" );
            }*/
        },
        complete:  function() {
            // Update window Height
            getWindowHeight();
        }
    });
}

// Get document height and pass to iframe
function getWindowHeight()
{
    // Get height of the main element in the iframe document
    var documentHeight = document.getElementsByClassName('wrapper')[0].scrollHeight;

    // Add some unique identifier to the string being passed
    var message = 'documentHeight:'+documentHeight;

    // Pass message to (any*) parent document
    parent.postMessage(message,'*');
}

// On refine search click
$("#searchBarCollapse").on("click", function() {
    // Hide button
    $(this).hide();
});

// on close search button click
$("#close_search").on("click", function(){
   //Show refine search button
   $("#searchBarCollapse").show();

   //colaspe search bar
   $('#searchBar').toggleClass('active');
});

// Clear search
// resets all options selected and set to defaults
$(".btn-tasc-clear-search").on("click", function() {

    // Loop through each selected options and de-select selected ones
    $('nav a').parent().find('.active').each(function() {

        // Escape data sector
        if( !$(this).hasClass('data_sector'))
        {
            $(this).removeClass('active');
        }
    });

    // Toggle data to default
    toggleDataToDefault();

    // Update data
        // Reload data table
        $('#ipq_table').DataTable().ajax.reload();
        $('#skill_priority').DataTable().ajax.reload();

        // Refresh summary data
        summaryData();
});

// Toggle data set select to default
function toggleDataToDefault()
{
    /*// Toggle data to state data if industry is selected
    if( $('#industry_data_sec').hasClass('active') )
    {
        // Toggle class name safer method
        //$('.data_sector').toggleClass('active');

        // Move toogle to industry default
        //$('#data_set_group').prop( "checked", true );

        // Hide Industry options
        //$('#src_industries').hide();
    }*/


    // Check and select first options
    selectFirstOptionInIndustry();
}

// ONLOAD
// Datatable JS
$(document).ready(function() {
    // Required when making POST requests through AJAX
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // Move toogle to industry default
    //$('#data_set_group').prop( "checked", true );

    // Initialise Chart
     Charts.init();

    // Check data group selected and show/hide appropriate options
    check_group_status_current_status();

    // Initialise Main table
    $('#ipq_table').DataTable({
        "orderClasses": false,
        "stripeClasses": [ 'odd', 'even' ],
        "iDisplayLength": 10,
        "lengthMenu": [10, 25, 50, 100],
        "order": [[ 2, "asc" ]],
        "processing": true,
        "serverSide": true,
        "ajax": {
            url: "/ajax/ipq-main-data",
            data: function (d) {
                // Get javascript object and convert to JSON string
                d.ipq_options = JSON.stringify( getSelectedOptions() );
            }
        },
        "columns": [
            { "data": 0 },
            { "data": 1 },
            { "data": 2 },
        ],
        language: {
            searchPlaceholder: "code, title or priority",
            sSearch: "Search by:",
            infoFiltered: ""
        },
        "drawCallback": function() {
            // Update iframe height
            getWindowHeight();
        }
    });

    // Initialise skills priorities table
    $('#skill_priority').DataTable( {
        async:false,
        "paging":   false,
        "ordering": false,
        "info":     false,
        "searching": false,
        "orderClasses": false,
        "stripeClasses": [ 'odd', 'even' ],
        "processing": true,
        "serverSide": true,
        "ajax": {
            url: "/ajax/ipq-priority-skills",
            data: function (d) {
                // Get javascript object and convert to JSON string
                d.ipq_skills_options = JSON.stringify( getSelectedOptionsForSkillPriority() );
            }
        },
        "columns": [
            { "data": 0 },
            { "data": 1 },
        ],
        "fnInitComplete": function() {
            // Get or update summary data
            summaryData();
        }
    } );

} );
