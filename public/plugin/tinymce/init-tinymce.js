tinymce.init({
	/* replace textarea having class .tinymce with tinymce editor */
	selector: "textarea.tinymce",
	
	/* theme of the editor */
	theme: "modern",
	skin: "lightgray",
	
	/* width and height of the editor */
	width: "100%",
	height: 500,
	
	/* display statusbar */
	statubar: true,
	
	/* plugin */
	plugins: [
		"advlist autolink link image lists charmap print preview hr anchor pagebreak",
		"searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
		"save table contextmenu directionality emoticons template paste textcolor"
	],

	/* toolbar */
	toolbar: "insertfile undo redo | styleselect | fontselect | bold italic |  fontsizeselect | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons",
	
	/* style */
	style_formats: [
		{title: "Headers", items: [
			{title: "Header 1", format: "h1"},
			{title: "Header 2", format: "h2"},
			{title: "Header 3", format: "h3"},
			{title: "Header 4", format: "h4"},
			{title: "Header 5", format: "h5"},
			{title: "Header 6", format: "h6"}
		]},
		{title: "Inline", items: [
			{title: "Bold", icon: "bold", format: "bold"},
			{title: "Italic", icon: "italic", format: "italic"},
			{title: "Underline", icon: "underline", format: "underline"},
			{title: "Strikethrough", icon: "strikethrough", format: "strikethrough"},
			{title: "Superscript", icon: "superscript", format: "superscript"},
			{title: "Subscript", icon: "subscript", format: "subscript"},
			{title: "Code", icon: "code", format: "code"}
		]},
		{title: "Blocks", items: [
			{title: "Paragraph", format: "p"},
			{title: "Blockquote", format: "blockquote"},
			{title: "Div", format: "div"},
			{title: "Pre", format: "pre"}
		]},
		{
			title: 'Image Left',
			selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img',
			styles: {
				'float': 'left',
				'margin': '0 10px 0 10px'
			}
		},
		{
			title: 'Image Right',
			selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img',
			styles: {
				'float': 'right',
				'margin': '0 0 10px 10px'
			}
		}
	]
});