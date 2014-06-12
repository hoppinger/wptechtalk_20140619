/**
 * ACF - FIELD SNITCH
 * ==================
 * Author:     Morten Skyt  <morten@stupid-studio.com>
 * Company:    Stupid A/S   <www.stupid-studio.com>
 * Plugin URL: http://wordpress.org/plugins/advanced-custom-fields-field-snitch/
 * License:    GPLv3
 */

jQuery(function($) {
	var prevInit = false;
	
	var initialize = function() {
		listenKeyboard();
	};
	
	var listenKeyboard = function() {
		
		var timesHit = 0;
		var timesTimer = null;
		
		$('body').on('keydown', function(ev) {
			// escape button
			if (ev.keyCode !== 27) return; 
			
			timesHit++;
			
			clearTimeout(timesTimer);
			timesTimer = window.setTimeout(function() {
				timesHit = 0;
			}, 250);
			
			if (timesHit === 2) {
				toggleSnitch();
				timesHit = 0;
			}
		});
	};
	
	var toggleSnitch = function() {
		$('body').toggleClass('acf-snitch-on');
		
		if (prevInit) return;
		
		addSnitchInfo();
		enableCopySnitchToClipboard();
		prevInit = true;
	};
	
	var addSnitchInfo = function() {
		// field keys and field names
		$('[data-field_name]').each(function() {
			var box = $('<div class="acf-snitch"></div>');
			
			if (!$(this).data('field_name').length) return;
			
			// field names
			var fieldName = $('<span class="field field_name">').text( $(this).data('field_name') );
			box.append( fieldName );
			
			box.append( $('<span>').text(' ') );
			
			// field keys
			var fieldKey = $('<span class="field field_key">').text($(this).data('field_key'));
			box.append( fieldKey );
			
			if ($(this).is('tr')) box.addClass('full-w').prependTo( $(this).children('td').last() );
			else if ($(this).hasClass('sub_field')) box.addClass('full-w').prependTo( $(this) );
			else box.prependTo($(this));
		});
		
		// row layouts (flexible content only)
		$('[data-layout]').each(function() {
			var box = $('<div class="acf-snitch"></div>');
			var field = $('<span class="field row_layout">').text( $(this).data('layout') );
			field.appendTo(box);
			box.prependTo($(this).find('.acf-fc-layout-handle'));			
		});
	};
	
	var enableCopySnitchToClipboard = function() {
		var client = new ZeroClipboard();
		
		client.on('complete', function () {
			$(this).animate({'opacity': 0.2}, 100).animate({'opacity': 1}, 100).animate({'opacity': 0.2}, 100).animate({'opacity': 1}, 100);
		});
		
		$('body').on('mouseover', '.acf-snitch .field', function() {
			var field = $(this);
			if (field.data('has-zeroclipboard')) return ZeroClipboard.activate(field[0]);
				
			field.attr('data-clipboard-text', $.trim(field.text()));			
			field.data('has-zeroclipboard', true);
			
			ZeroClipboard.activate(field[0]);
		});
	};
	
	initialize();
});