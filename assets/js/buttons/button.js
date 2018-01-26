(function () {
	tinymce.create('tinymce.plugins.Wptuts', {
		init: function (ed, url) {
			ed.addButton('dropcap', {
				title: 'DropCap',
				cmd: 'dropcap',
				image: 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/88/Exclamation_sign_font_awesome.svg/1000px-Exclamation_sign_font_awesome.svg.png'
			});

			ed.addButton('showrecent', {
				title: 'Add recent posts shortcode',
				cmd: 'showrecent',
				image: 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/88/Exclamation_sign_font_awesome.svg/1000px-Exclamation_sign_font_awesome.svg.png'
			});

			ed.addCommand('dropcap', function () {
				var selected_text = ed.selection.getContent();
				var return_text = '';
				return_text = '<span class="dropcap">' + selected_text + '</span>';
				ed.execCommand('mceInsertContent', 0, return_text);
			});

			ed.addCommand('showrecent', function () {
				var number = prompt("How many posts you want to show ? "),
					shortcode;
				if (number !== null) {
					number = parseInt(number);
					if (number > 0 && number <= 20) {
						shortcode = '[recent-post number="' + number + '"/]';
						ed.execCommand('mceInsertContent', 0, shortcode);
					}
					else {
						alert("The number value is invalid. It should be from 0 to 20.");
					}
				}
			});
		},
		// ... Hidden code
	});
	// Register plugin
	tinymce.PluginManager.add('wptuts', tinymce.plugins.Wptuts);
})();