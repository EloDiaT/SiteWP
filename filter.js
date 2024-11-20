
jQuery( function( $ ){


	$('.cat-list_item').on('click', function(){
		$(this).toggleClass('active');
		collectFilter();
		getFilterLabels();
	})


	function collectFilter() {
		var search = new Object();
		$('.filter_item').each(function(ind){
			var type = $(this).attr('data-type');
			var parent = $(this);
			search[type] = [];
			parent.find('.cat-list_item.active').each(function(index){
				value = $(this).attr('data-id');
				search[type].push(value);
			})
		})

		var url = new URL(document.location.href);
		var search_params = url.searchParams;
		var searchString = '';
		var sep1 = '';

		for (var type in search) {
			console.log(type)
			$('.filter_label_block').css('display', 'none');
			if (search.hasOwnProperty(type) && search[type].length > 0) {

				var key = type;
				var value = '';

				$('.filter_label_block.'+type).css('display', 'flex');				

				for (var k = 0; k < search[type].length; k++) {
					var sep = '+';
					if(k == 0) { sep = ''; }

					value = value + sep + search[type][k];
				}
				value = key + '=' + value;

				searchString = searchString + sep1 + value;
				sep1 = '&';
			}
		}

		url.search = searchString;
		var new_url = url.toString();
		history.pushState({},'',new_url);

		if(searchString == '') {
			$('.clear_filter').css('display', 'none');
			$('.filter_label_block').css('display', 'none');
			$('.filter_labels').removeClass('active');
		} else {
			$('.filter_labels').addClass('active');
		}

		getPosts(searchString);
	}

	function restoreFilter() {
		var url = new URL(document.location.href);
		var search = url.search;

		if(search != '') {

			search = search.split('?')[1];
			var blocks = search.split('&');

			for (var i = 0; i < blocks.length; i++) {
				var type = blocks[i].split('=')[0];
				var values = blocks[i].split('=')[1].split('+');
				for (var k = 0; k < values.length; k++) {

					$('.cat-list_item').each(function(){
						if(($(this).attr('data-type') == type) && ($(this).attr('data-id') == values[k])) {
							$(this).addClass('active');
						}
					})

				}

			}

			getPosts(search);

		}

	}
	restoreFilter();

	function getFilterLabels() {
		var clear_filter = $('.clear_filter');
		clear_filter.css('display', 'none');

		$('.filter_label_block').each(function(){
			var parent = $(this);
			var type = parent.attr('data-type');
			parent.find('.filter_label_inner').html('');

			$('.cat-list_item.active').each(function(){
				if(type == $(this).attr('data-type')) {
					var label = '<p class="text_size_m filter_label_item" data-type="'+ type +'" data-id="'+ $(this).attr('data-id') +'">'+ $(this).text() +'<svg><use href="#form_cross"></use></svg></p>';
					clear_filter.css('display', 'flex');
					parent.css('display', 'flex');
					$('.filter_labels').addClass('active');
					parent.find('.filter_label_inner').append(label);
				}
			})
		})
	}
	getFilterLabels();

	$('body').on('click','.filter_label_item',function(){
		var type = $(this).attr('data-type');
		var value = $(this).attr('data-id');
		var parent = $(this).parents('.filter_label_block');
		var count = parent.find('.filter_label_inner').children().length;

		if(count == 1) {
			parent.css('display', 'none');
		}

		$('.cat-list_item').each(function(){
			if(($(this).attr('data-type') == type) && ($(this).attr('data-id') == value)) {
				$(this).removeClass('active');
			}
		});

		$(this).remove();
		collectFilter();
	});

	$('.clear_filter').on('click', function(){
		$('.cat-list_item').each(function(){
			$(this).removeClass('active');
		});
		$('.filter_label_block').css('display', 'none');
		$(this).css('display', 'none');
		collectFilter();
	})


	function getPosts(string) {
		if(string.length>1) {
			var search = string+'&action=myfilter';
		} else {
			var search = 'action=myfilter';
		}
		$.ajax({
			url : true_obj.ajaxurl, // обработчик
			data : search, // данные
			type : 'POST', // тип запроса
			beforeSend : function( xhr ){
				// filter.find( 'button' ).text( 'Загружаю...' ); // изменяем текст кнопки
				$( '#response' ).html('')
				$( '#response' ).text('Загрузка');
			},
			success : function( data ){
				// filter.find( 'button' ).text( 'Применить фильтр' ); // возвращаеи текст кнопки
				$( '#response' ).html(data);
			}
		});
	}






	$('.filter_item_head').on('click', function(e){
		e.preventDefault();
		var parent = $(this).parents('.filter_item');

		parent.toggleClass('expanded');
	})

});
