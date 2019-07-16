var setting_title = "";
var setting_type = "";
var setting_id = "";

// initialise filters
function getIndustry() {
	return $('#industry-autocomplete').val();
}

// Settings for data with text editor
$('#industry-autocomplete').on('change', function (){
	var options = {'title' : setting_title, "type": setting_type, "industry": getIndustry()};
	loadArticleData(options);
});

function convertType(type){
    if(type === 'moreinfo'){
        return ' (more info)';
    }
    else if(type === 'about'){
        return ' (about this data)';
    }
    else{
        return "";
    }
}

// get article data by AJAX
function loadArticleData(options){
	$.blockUI({ message: '<h3><img src="/images/ipq-busy.gif" /> loading...</h3>' });
	$.ajax({
		type: "POST",
		url: "/ajax/article",
		data: JSON.stringify(options),
		contentType: "application/json; charset=utf-8",
		dataType: "json",
		success: function (response) {
			setting_title = response.data.title;
			setting_id = response.data.id;
			setting_type = response.data.type;
			tinymce.get('editor-content').setContent(response.data.content);
			$('#editor-title').text(setting_title + convertType(setting_type));
			// Disable select industry if type is subheading
			if(setting_type === 'subheading'){
				$('#select-industry').hide();
			}
			else{
				$('#select-industry').show();
			}
			$.unblockUI();
		},
		error: function (request, status, error) {
			if(request.status === 500){
				alert("Something went wrong with the server, please try again!");
			}
			else{
				alert("Failed loading this page, please try again! (this may caused by unstable internet connection.)");
			}
			$.unblockUI();
		}
	});
}

// Settings for data with text editor
$('.editor-tab').on('click', function (){
	// console.log($('#industry-autocomplete').val());
	let tmpType = $(this).attr('id').split("-");
	var type = tmpType[tmpType.length - 1];
	setting_title = $(this).attr('data-title');
	setting_type = type;
	var options = {'title' : $(this).attr('data-title'), "type": type, "industry": getIndustry()};
	loadArticleData(options);
});

$(document).ready(function(){

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

	$(".editor-form").submit(function(e){
		$.blockUI({ message: '<h3><img src="/images/ipq-busy.gif" /> Please wait... we are updating your page.</h3>' });

        var target = e.target.getElementsByTagName("textarea")[0];
		var content = tinymce.get(target.id).getContent();

		// check for empty input
		if(!content){
			content = "<p></p>";
		}

		var article = {
			'id' : setting_id,
			'content' : content
		}

        e.preventDefault();

		// Get data from ajax
		$.ajax({
			type: "POST",
			url: "/ajax/update-article",
			data: JSON.stringify(article),
			contentType: "application/json; charset=utf-8",
			dataType: "json",
			success: function (file_data) {
				$.unblockUI();
			},
			error: function (request) {
				if(request.status === 500){
					alert("Something went wrong with the server, please try again!");
				}
				else{
					alert("Failed loading this page, please try again! (this may caused by unstable internet connection.)");
				}
				$.unblockUI();
			}
		});
		return false;
	});
});
