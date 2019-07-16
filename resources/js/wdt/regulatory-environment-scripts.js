function passIndustry(val){
    window.location = window.location.origin+val+'?industry='+$('#industry-autocomplete').val()
    console.log(window.location.origin+val)
}

// industry autocomplete
let open = false;
var industryAutocomplete = new SlimSelect({
    select: '#industry-autocomplete',
    afterClose: function () {
        refreshIndustryFunctions();
        open = false;
    },
    afterOpen: function () {
        open = true;
    },
    onChange:(info)=>{

        if (!open){
            refreshIndustryFunctions()
        }

    },
    'placeholder': 'Select Industry',
    selectByGroup: true
})

function refreshIndustryFunctions(){
    loadArticles();
}


// Initialise left nav
$('#searchBarCollapse').on('click', function () {
    // show nav bar
    $('#searchBar').toggleClass('active');

    // Hide [open navigation] button
    $(this).hide();
});

// on [close navigation] button click
$("#close_search").on("click", function(){
    //Show [open navigation] button
    $("#searchBarCollapse").show();

    //collapse nav bar
    $('#searchBar').toggleClass('active');
});

// Get document height and pass to iframe
function getWindowHeight() {
    // Get height of the main element in the iframe document
    var documentHeight = document.getElementsByClassName('wrapper')[0].scrollHeight;

    // Add some unique identifier to the string being passed
    var message = 'documentHeight:'+documentHeight;

    // Pass message to (any*) parent document
    parent.postMessage(message,'*');
}

// initialise filters
function getSelectedOptions() {
    // Set select options array and variable
    var selected_options_dt = {};

    selected_options_dt['industry'] = $('#industry-autocomplete').val()

    return selected_options_dt;
}


// Get selected value and trigger pdf report generation
$('#export_pdf').on('click', function () {

    $.blockUI({ message: '<h3><img src="/images/ipq-busy.gif" /> Please wait... we are generating your report.</h3>' });

    // Get selected options
    var get_selection = getSelectedOptions();

    // Get main Table info
    var skill_shortage_table = $('#skill_shortage_table').DataTable();

    // Get ordering info
    var ipq_order = skill_shortage_table.order();

    // Build get data for url
    get_selection['report_type']     = "Skill Demand";
    // update select with main IPQ table details
    get_selection['ipq_start']     = skill_shortage_table.page.info().start;
    get_selection['ipq_length']    = skill_shortage_table.page.info().length;
    get_selection['ipq_sort_col']  = ipq_order[0][0];
    get_selection['ipq_sort_dir']  = ipq_order[0][1];
    get_selection['ipq_search']    = skill_shortage_table.search();

    // Get data from ajax
    $.ajax({
        type: "POST",
        url: "/wdt/report/pdf",
        data: { selected_options: JSON.stringify(get_selection)},
        success: function (file_data) {
            // once report has been generated
            // output file to be downloaded
            window.location.href = "/wdt/report/get_report?filename="+file_data['filename']+".pdf";
            $.unblockUI();
        },
        error: function (request) {
            if(request.status === '500'){
                alert("Something went wrong in the server, please try again!");
            }
            else{
                alert("Failed loading this page, this may caused by unstable internet connection.");
            }
            $.unblockUI();
        }
    });

});


// Get selected values and trigger exporting excel report
$('#export_excel').on('click', function (){
    $.blockUI({ message: '<h3><img src="/images/ipq-busy.gif" /> Please wait... we are generating your report.</h3>' });

    // Get selected options
    var get_selection = getSelectedOptions();

    // Get main Table info
    var skill_shortage_table = $('#skill_shortage_table').DataTable();
    get_selection['ipq_search']    = skill_shortage_table.search();

    // Get ordering info
    var ipq_order = skill_shortage_table.order();
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
        },
        error: function (request) {
            if(request.status === '500'){
                alert("Something went wrong in the server, please try again!");
            }
            else{
                alert("Failed loading this page, this may caused by unstable internet connection.");
            }
            $.unblockUI();
        }
    });
});

function getArticlesByAjax(title, type, industries, target){
    $.ajax({
        type: "POST",
        url: "/ajax/articles",
        data: JSON.stringify({'title' : title, "type": type, "industries": industries}),
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function (response) {
            var final_article = "";
            for(var article of response['data']){
                // add headings when industries are selected
                if(article.industry !== 'all'){
                    final_article += '<p><strong>'+article.industry+'</strong></p>';
                }
                final_article += article.content;
            }
            setting_title = response.data.title;
            $(target).html(final_article);
        }
    });
}

function loadArticles(){
    var industries = getSelectedOptions()['industry']
    if(industries.length === 0){
        industries.push('all');
    }
    getArticlesByAjax('Regulatory Environment', 'article', industries, '#article-regulatory-environment');
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

    // Initialise Main table
    $('#skill_shortage_table').DataTable({
        "orderClasses": false,
        "bFilter" : false,
        "stripeClasses": [ 'odd', 'even' ],
        "iDisplayLength": 10,
        "lengthMenu": [10, 25, 50, 100],
        "order": [[ 0, "asc" ]],
        "processing": true,
        "serverSide": true,
        "ajax": {
            url: "/ajax/skill-demand",
            data: function (d) {
                // Get javascript object and convert to JSON string
                d.skill_demand_options = JSON.stringify( getSelectedOptions() );
            }
        },
        "columns": [
            { "data": 0 },
            { "data": 1 },
            // { "data": 2 },
        ],
        language: {
            infoFiltered: ""
        },
        "drawCallback": function() {
            // Update iframe height
            getWindowHeight();
        },
    });

    // load articles for more-info, about this data ...etc
    loadArticles()
} );
