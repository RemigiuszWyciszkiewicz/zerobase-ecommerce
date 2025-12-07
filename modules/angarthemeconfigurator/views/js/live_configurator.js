/*
* @author      Krzysztof Pecak
* @copyright   2025 Krzysztof Pecak
* @license     Commercial license valid for 1 shop
*/

$(document).ready(function(){


	// Theme layout edit start
	$('#theme_customization_icon').click(function() {
  
    if($(this).css("margin-left") == "320px")
    {
        $('#theme_customization').animate({"margin-left": '-=320'});
        $('#theme_customization_icon').animate({"margin-left": '-=320'});
    }
    else
    {
        $('#theme_customization').animate({"margin-left": '+=320'});
        $('#theme_customization_icon').animate({"margin-left": '+=320'});
    }

	});

	
	$('.bg_select').on('click',function(){
	   $('.bg_select').removeClass('bg_current');
		$(this).addClass('bg_current');
	});
	// Theme layout edit end
	

	// Theme color edit start
	$('#theme_color_icon').click(function() {
  
    if($(this).css("margin-left") == "320px")
    {
        $('#theme_color').animate({"margin-left": '-=320'});
        $('#theme_color_icon').animate({"margin-left": '-=320'});
    }
    else
    {
        $('#theme_color').animate({"margin-left": '+=320'});
        $('#theme_color_icon').animate({"margin-left": '+=320'});
    }

	});
	// Theme color edit end




	// Live edit start









	// *** GOOGLE FONT ***

	// Font
	var removeMainFont = 'mainfont_Poppins mainfont_Open_Sans mainfont_Roboto mainfont_Lato mainfont_Raleway mainfont_Montserrat mainfont_Bitter mainfont_Oswald mainfont_Dosis mainfont_Nunito mainfont_Muli mainfont_Gothic_A1 mainfont_Fira_Sans mainfont_Ubuntu mainfont_Lora mainfont_Work_Sans mainfont_Merriweather mainfont_Playfair_Display mainfont_Playfair_Display_SC mainfont_Noto_Sans mainfont_Noto_Serif mainfont_Roboto_Slab mainfont_Arimo mainfont_Cabin mainfont_Titillium_Web mainfont_Source_Sans_Pro mainfont_PT_Sans mainfont_Oxygen mainfont_Quicksand mainfont_Karla';

	$('#theme_customization .mainfont_Poppins').on('click', function(){ $('body').removeClass(removeMainFont); $('body').addClass('mainfont_Poppins'); });
	$('#theme_customization .mainfont_Open_Sans').on('click', function(){ $('body').removeClass(removeMainFont); $('body').addClass('mainfont_Open_Sans'); });
	$('#theme_customization .mainfont_Roboto').on('click', function(){ $('body').removeClass(removeMainFont); $('body').addClass('mainfont_Roboto'); });
	$('#theme_customization .mainfont_Lato').on('click', function(){ $('body').removeClass(removeMainFont); $('body').addClass('mainfont_Lato'); });
	$('#theme_customization .mainfont_Raleway').on('click', function(){ $('body').removeClass(removeMainFont); $('body').addClass('mainfont_Raleway'); });
	$('#theme_customization .mainfont_Montserrat').on('click', function(){ $('body').removeClass(removeMainFont); $('body').addClass('mainfont_Montserrat'); });
	$('#theme_customization .mainfont_Bitter').on('click', function(){ $('body').removeClass(removeMainFont); $('body').addClass('mainfont_Bitter'); });
	$('#theme_customization .mainfont_Oswald').on('click', function(){ $('body').removeClass(removeMainFont); $('body').addClass('mainfont_Oswald'); });
	$('#theme_customization .mainfont_Dosis').on('click', function(){ $('body').removeClass(removeMainFont); $('body').addClass('mainfont_Dosis'); });
	$('#theme_customization .mainfont_Nunito').on('click', function(){ $('body').removeClass(removeMainFont); $('body').addClass('mainfont_Nunito'); });
	$('#theme_customization .mainfont_Muli').on('click', function(){ $('body').removeClass(removeMainFont); $('body').addClass('mainfont_Muli'); });
	$('#theme_customization .mainfont_Gothic_A1').on('click', function(){ $('body').removeClass(removeMainFont); $('body').addClass('mainfont_Gothic_A1'); });
	$('#theme_customization .mainfont_Fira_Sans').on('click', function(){ $('body').removeClass(removeMainFont); $('body').addClass('mainfont_Fira_Sans'); });
	$('#theme_customization .mainfont_Ubuntu').on('click', function(){ $('body').removeClass(removeMainFont); $('body').addClass('mainfont_Ubuntu'); });
	$('#theme_customization .mainfont_Lora').on('click', function(){ $('body').removeClass(removeMainFont); $('body').addClass('mainfont_Lora'); });
	$('#theme_customization .mainfont_Work_Sans').on('click', function(){ $('body').removeClass(removeMainFont); $('body').addClass('mainfont_Work_Sans'); });
	$('#theme_customization .mainfont_Merriweather').on('click', function(){ $('body').removeClass(removeMainFont); $('body').addClass('mainfont_Merriweather'); });
	$('#theme_customization .mainfont_Playfair_Display').on('click', function(){ $('body').removeClass(removeMainFont); $('body').addClass('mainfont_Playfair_Display'); });
	$('#theme_customization .mainfont_Playfair_Display_SC').on('click', function(){ $('body').removeClass(removeMainFont); $('body').addClass('mainfont_Playfair_Display_SC'); });
	$('#theme_customization .mainfont_Noto_Sans').on('click', function(){ $('body').removeClass(removeMainFont); $('body').addClass('mainfont_Noto_Sans'); });
	$('#theme_customization .mainfont_Noto_Serif').on('click', function(){ $('body').removeClass(removeMainFont); $('body').addClass('mainfont_Noto_Serif'); });
	$('#theme_customization .mainfont_Roboto_Slab').on('click', function(){ $('body').removeClass(removeMainFont); $('body').addClass('mainfont_Roboto_Slab'); });
	$('#theme_customization .mainfont_Arimo').on('click', function(){ $('body').removeClass(removeMainFont); $('body').addClass('mainfont_Arimo'); });
	$('#theme_customization .mainfont_Cabin').on('click', function(){ $('body').removeClass(removeMainFont); $('body').addClass('mainfont_Cabin'); });
	$('#theme_customization .mainfont_Titillium_Web').on('click', function(){ $('body').removeClass(removeMainFont); $('body').addClass('mainfont_Titillium_Web'); });
	$('#theme_customization .mainfont_Source_Sans_Pro').on('click', function(){ $('body').removeClass(removeMainFont); $('body').addClass('mainfont_Source_Sans_Pro'); });
	$('#theme_customization .mainfont_PT_Sans').on('click', function(){ $('body').removeClass(removeMainFont); $('body').addClass('mainfont_PT_Sans'); });
	$('#theme_customization .mainfont_Oxygen').on('click', function(){ $('body').removeClass(removeMainFont); $('body').addClass('mainfont_Oxygen'); });
	$('#theme_customization .mainfont_Quicksand').on('click', function(){ $('body').removeClass(removeMainFont); $('body').addClass('mainfont_Quicksand'); });
	$('#theme_customization .mainfont_Karla').on('click', function(){ $('body').removeClass(removeMainFont); $('body').addClass('mainfont_Karla'); });
	// Font


	// Font change

	// List of fonts that should use "400,600"
	const fontWithWeights400600 = ['Poppins', 'Open_Sans', 'Oswald', 'Dosis', 'Raleway', 'Montserrat', 'Nunito', 'Fira_Sans', 'Titillium_Web'];

	// Get all radio input elements
	const radioButtons = document.querySelectorAll('input[name="angarconfig_input59"]');

	// Add event listener to each radio button
	radioButtons.forEach(function(radio) {
		radio.addEventListener('change', function() {
			let selectedFont = this.value;

			// Replace "_" with "+" in the font name
			selectedFont = selectedFont.replace(/_/g, '+');

			// Check if the font is in the list with 400,600 weights
			const fontWeights = fontWithWeights400600.includes(selectedFont) ? '400,600' : '400,700';

			// Check if the font is already loaded
			if (!document.querySelector(`link[href*='${selectedFont}']`)) {
				const link = document.createElement('link');
				link.rel = 'stylesheet';
				link.as = 'style';
				link.href = `https://fonts.googleapis.com/css?family=${selectedFont}:${fontWeights}&subset=latin,latin-ext&display=block`;
				link.type = 'text/css';
				link.media = 'all';
				document.head.appendChild(link);
			}

			// Change the font to the selected one
			document.body.style.fontFamily = `'${selectedFont.replace(/\+/g, ' ')}', sans-serif`;
		});
	});

	// Font change










	// *** BACKGROUND ***

	// BG color
	$('#background_color').minicolors({
		change: function(hex, rgb) {         
			$('body').css('backgroundColor', hex);
			$('#background_color').attr('value', hex);
		}
	});
	// BG color end

	// Bg select
	var removeBg = 'custom_pattern color_only no_bg    bg1 bg2 bg3 bg4 bg5 bg6 bg7 bg8 bg9 bg10 bg11 bg12 bg13 bg14 bg15 bg16 bg17 bg18 bg19 bg20 bg21 bg22 bg23 bg24 bg25 bg26 bg27 bg28 bg29 bg30 bg31 bg32 bg33 bg34 bg35 bg36 bg37 bg38 bg39 bg40 bg41 bg42 bg43 bg44 bg45     custom_texture texture01 texture02 texture03 texture04 texture05 texture06 texture07 texture08 texture09 texture10 texture11 texture12 texture13 texture14 texture15 texture16 texture17 texture18 texture19 texture20 texture21 texture22 texture23';
	
	$('#theme_customization .custom_pattern').on('click',function(){ $('body').removeClass(removeBg); $('body').addClass('custom_pattern'); });
	$('#theme_customization .color_only').on('click',function(){ $('body').removeClass(removeBg); $('body').addClass('color_only'); });
	$('#theme_customization .no_bg').on('click',function(){ $('body').removeClass(removeBg); $('body').addClass('no_bg'); });


	$('#theme_customization .bg1').on('click',function(){ $('body').removeClass(removeBg); $('body').addClass('bg1'); });
	$('#theme_customization .bg2').on('click',function(){ $('body').removeClass(removeBg); $('body').addClass('bg2'); });
	$('#theme_customization .bg3').on('click',function(){ $('body').removeClass(removeBg); $('body').addClass('bg3'); });
	$('#theme_customization .bg4').on('click',function(){ $('body').removeClass(removeBg); $('body').addClass('bg4'); });
	$('#theme_customization .bg5').on('click',function(){ $('body').removeClass(removeBg); $('body').addClass('bg5'); });
	$('#theme_customization .bg6').on('click',function(){ $('body').removeClass(removeBg); $('body').addClass('bg6'); });
	$('#theme_customization .bg7').on('click',function(){ $('body').removeClass(removeBg); $('body').addClass('bg7'); });
	$('#theme_customization .bg8').on('click',function(){ $('body').removeClass(removeBg); $('body').addClass('bg8'); });
	$('#theme_customization .bg9').on('click',function(){ $('body').removeClass(removeBg); $('body').addClass('bg9'); });
	$('#theme_customization .bg10').on('click',function(){ $('body').removeClass(removeBg); $('body').addClass('bg10'); });
	$('#theme_customization .bg11').on('click',function(){ $('body').removeClass(removeBg); $('body').addClass('bg11'); });
	$('#theme_customization .bg12').on('click',function(){ $('body').removeClass(removeBg); $('body').addClass('bg12'); });
	$('#theme_customization .bg13').on('click',function(){ $('body').removeClass(removeBg); $('body').addClass('bg13'); });
	$('#theme_customization .bg14').on('click',function(){ $('body').removeClass(removeBg); $('body').addClass('bg14'); });
	$('#theme_customization .bg15').on('click',function(){ $('body').removeClass(removeBg); $('body').addClass('bg15'); });
	$('#theme_customization .bg16').on('click',function(){ $('body').removeClass(removeBg); $('body').addClass('bg16'); });
	$('#theme_customization .bg17').on('click',function(){ $('body').removeClass(removeBg); $('body').addClass('bg17'); });
	$('#theme_customization .bg18').on('click',function(){ $('body').removeClass(removeBg); $('body').addClass('bg18'); });
	$('#theme_customization .bg19').on('click',function(){ $('body').removeClass(removeBg); $('body').addClass('bg19'); });
	$('#theme_customization .bg20').on('click',function(){ $('body').removeClass(removeBg); $('body').addClass('bg20'); });
	$('#theme_customization .bg21').on('click',function(){ $('body').removeClass(removeBg); $('body').addClass('bg21'); });
	$('#theme_customization .bg22').on('click',function(){ $('body').removeClass(removeBg); $('body').addClass('bg22'); });
	$('#theme_customization .bg23').on('click',function(){ $('body').removeClass(removeBg); $('body').addClass('bg23'); });
	$('#theme_customization .bg24').on('click',function(){ $('body').removeClass(removeBg); $('body').addClass('bg24'); });
	$('#theme_customization .bg25').on('click',function(){ $('body').removeClass(removeBg); $('body').addClass('bg25'); });
	$('#theme_customization .bg26').on('click',function(){ $('body').removeClass(removeBg); $('body').addClass('bg26'); });
	$('#theme_customization .bg27').on('click',function(){ $('body').removeClass(removeBg); $('body').addClass('bg27'); });
	$('#theme_customization .bg28').on('click',function(){ $('body').removeClass(removeBg); $('body').addClass('bg28'); });
	$('#theme_customization .bg29').on('click',function(){ $('body').removeClass(removeBg); $('body').addClass('bg29'); });
	$('#theme_customization .bg30').on('click',function(){ $('body').removeClass(removeBg); $('body').addClass('bg30'); });
	$('#theme_customization .bg31').on('click',function(){ $('body').removeClass(removeBg); $('body').addClass('bg31'); });
	$('#theme_customization .bg32').on('click',function(){ $('body').removeClass(removeBg); $('body').addClass('bg32'); });
	$('#theme_customization .bg33').on('click',function(){ $('body').removeClass(removeBg); $('body').addClass('bg33'); });
	$('#theme_customization .bg34').on('click',function(){ $('body').removeClass(removeBg); $('body').addClass('bg34'); });
	$('#theme_customization .bg35').on('click',function(){ $('body').removeClass(removeBg); $('body').addClass('bg35'); });
	$('#theme_customization .bg36').on('click',function(){ $('body').removeClass(removeBg); $('body').addClass('bg36'); });
	$('#theme_customization .bg37').on('click',function(){ $('body').removeClass(removeBg); $('body').addClass('bg37'); });
	$('#theme_customization .bg38').on('click',function(){ $('body').removeClass(removeBg); $('body').addClass('bg38'); });
	$('#theme_customization .bg39').on('click',function(){ $('body').removeClass(removeBg); $('body').addClass('bg39'); });
	$('#theme_customization .bg40').on('click',function(){ $('body').removeClass(removeBg); $('body').addClass('bg40'); });


	$('#theme_customization .custom_texture').on('click',function(){ $('body').removeClass(removeBg); $('body').addClass('custom_texture'); });
	$('#theme_customization .texture01').on('click',function(){ $('body').removeClass(removeBg); $('body').addClass('texture01'); });
	$('#theme_customization .texture02').on('click',function(){ $('body').removeClass(removeBg); $('body').addClass('texture02'); });
	$('#theme_customization .texture03').on('click',function(){ $('body').removeClass(removeBg); $('body').addClass('texture03'); });
	$('#theme_customization .texture04').on('click',function(){ $('body').removeClass(removeBg); $('body').addClass('texture04'); });
	$('#theme_customization .texture05').on('click',function(){ $('body').removeClass(removeBg); $('body').addClass('texture05'); });
	$('#theme_customization .texture06').on('click',function(){ $('body').removeClass(removeBg); $('body').addClass('texture06'); });
	$('#theme_customization .texture07').on('click',function(){ $('body').removeClass(removeBg); $('body').addClass('texture07'); });
	$('#theme_customization .texture08').on('click',function(){ $('body').removeClass(removeBg); $('body').addClass('texture08'); });
	$('#theme_customization .texture09').on('click',function(){ $('body').removeClass(removeBg); $('body').addClass('texture09'); });
	$('#theme_customization .texture10').on('click',function(){ $('body').removeClass(removeBg); $('body').addClass('texture10'); });
	$('#theme_customization .texture11').on('click',function(){ $('body').removeClass(removeBg); $('body').addClass('texture11'); });
	$('#theme_customization .texture12').on('click',function(){ $('body').removeClass(removeBg); $('body').addClass('texture12'); });
	$('#theme_customization .texture13').on('click',function(){ $('body').removeClass(removeBg); $('body').addClass('texture13'); });
	$('#theme_customization .texture14').on('click',function(){ $('body').removeClass(removeBg); $('body').addClass('texture14'); });
	$('#theme_customization .texture15').on('click',function(){ $('body').removeClass(removeBg); $('body').addClass('texture15'); });
	$('#theme_customization .texture16').on('click',function(){ $('body').removeClass(removeBg); $('body').addClass('texture16'); });
	$('#theme_customization .texture17').on('click',function(){ $('body').removeClass(removeBg); $('body').addClass('texture17'); });
	$('#theme_customization .texture18').on('click',function(){ $('body').removeClass(removeBg); $('body').addClass('texture18'); });
	$('#theme_customization .texture19').on('click',function(){ $('body').removeClass(removeBg); $('body').addClass('texture19'); });
	$('#theme_customization .texture20').on('click',function(){ $('body').removeClass(removeBg); $('body').addClass('texture20'); });
	$('#theme_customization .texture21').on('click',function(){ $('body').removeClass(removeBg); $('body').addClass('texture21'); });
	$('#theme_customization .texture22').on('click',function(){ $('body').removeClass(removeBg); $('body').addClass('texture22'); });
	$('#theme_customization .texture23').on('click',function(){ $('body').removeClass(removeBg); $('body').addClass('texture23'); });

	// Bg select end

	// Background position
	var removeBgPosition = 'bg_position_tl bg_position_tc bg_position_tr bg_position_cl bg_position_cc bg_position_cr bg_position_bl bg_position_bc bg_position_br';
	$('#theme_customization .bg_position_tl').on('click',function(){ $('body').removeClass(removeBgPosition); $('body').addClass('bg_position_tl'); });
	$('#theme_customization .bg_position_tc').on('click',function(){ $('body').removeClass(removeBgPosition); $('body').addClass('bg_position_tc'); });
	$('#theme_customization .bg_position_tr').on('click',function(){ $('body').removeClass(removeBgPosition); $('body').addClass('bg_position_tr'); });
	$('#theme_customization .bg_position_cl').on('click',function(){ $('body').removeClass(removeBgPosition); $('body').addClass('bg_position_cl'); });
	$('#theme_customization .bg_position_cc').on('click',function(){ $('body').removeClass(removeBgPosition); $('body').addClass('bg_position_cc'); });
	$('#theme_customization .bg_position_cr').on('click',function(){ $('body').removeClass(removeBgPosition); $('body').addClass('bg_position_cr'); });
	$('#theme_customization .bg_position_bl').on('click',function(){ $('body').removeClass(removeBgPosition); $('body').addClass('bg_position_bl'); });
	$('#theme_customization .bg_position_bc').on('click',function(){ $('body').removeClass(removeBgPosition); $('body').addClass('bg_position_bc'); });
	$('#theme_customization .bg_position_br').on('click',function(){ $('body').removeClass(removeBgPosition); $('body').addClass('bg_position_br'); });
	// Background position end

	// Background attachment
	var removeBgAttachment = 'bg_attatchment_normal bg_attatchment_fixed';
	$('#theme_customization .bg_attatchment_normal').on('click',function(){ $('body').removeClass(removeBgAttachment); $('body').addClass('bg_attatchment_normal'); });
	$('#theme_customization .bg_attatchment_fixed').on('click',function(){ $('body').removeClass(removeBgAttachment); $('body').addClass('bg_attatchment_fixed'); });
	// Background attachment end

	// Background repeat
	var removeBgRepeat = 'bg_repeat_no bg_repeat_x bg_repeat_y bg_repeat_xy';
	$('#theme_customization .bg_repeat_no').on('click',function(){ $('body').removeClass(removeBgRepeat); $('body').addClass('bg_repeat_no'); });
	$('#theme_customization .bg_repeat_x').on('click',function(){ $('body').removeClass(removeBgRepeat); $('body').addClass('bg_repeat_x'); });
	$('#theme_customization .bg_repeat_y').on('click',function(){ $('body').removeClass(removeBgRepeat); $('body').addClass('bg_repeat_y'); });
	$('#theme_customization .bg_repeat_xy').on('click',function(){ $('body').removeClass(removeBgRepeat); $('body').addClass('bg_repeat_xy'); });
	// Background repeat end

	// Background size
	var removeBgSize = 'bg_size_initial bg_size_cover';
	$('#theme_customization .bg_size_initial').on('click',function(){ $('body').removeClass(removeBgSize); $('body').addClass('bg_size_initial'); });
	$('#theme_customization .bg_size_cover').on('click',function(){ $('body').removeClass(removeBgSize); $('body').addClass('bg_size_cover'); });
	// Background size end










	// *** TOP ***

	// Header separators
	var removeHeaderSep = 'header_sep0 header_sep1 header_sep2';
	$('#theme_customization .header_sep0').on('click',function(){ $('body').removeClass(removeHeaderSep); $('body').addClass('header_sep0'); });
	$('#theme_customization .header_sep1').on('click',function(){ $('body').removeClass(removeHeaderSep); $('body').addClass('header_sep1'); });
	$('#theme_customization .header_sep2').on('click',function(){ $('body').removeClass(removeHeaderSep); $('body').addClass('header_sep2'); });
	// Header separators








	// *** HEADER ***

	// Header style
	var removeHeaderStyle = 'header_style_1 header_style_2 header_style_3';
	$('#theme_customization .header_style_1').on('click',function(){ $('body').removeClass(removeHeaderStyle); $('body').addClass('header_style_1'); });
	$('#theme_customization .header_style_2').on('click',function(){ $('body').removeClass(removeHeaderStyle); $('body').addClass('header_style_2'); });
	$('#theme_customization .header_style_3').on('click',function(){ $('body').removeClass(removeHeaderStyle); $('body').addClass('header_style_3'); });
	// Header style







	// *** CART ***

	// Sticky cart
	var removeStickyCart = 'stickycart_yes stickycart_no';
	$('#theme_customization .stickycart_yes').on('click',function(){ $('body').removeClass(removeStickyCart); $('body').addClass('stickycart_yes'); });
	$('#theme_customization .stickycart_no').on('click',function(){ $('body').removeClass(removeStickyCart); $('body').addClass('stickycart_no'); });
	// Sticky cart end








	// *** MENU ***

	// Menu separators
	var removeMenuSep = 'menu_sep0 menu_sep1 menu_sep2 menu_sep3 menu_sep4 menu_sep5 menu_sep6';
	$('#theme_customization .menu_sep0').on('click',function(){ $('body').removeClass(removeMenuSep); $('body').addClass('menu_sep0'); });
	$('#theme_customization .menu_sep1').on('click',function(){ $('body').removeClass(removeMenuSep); $('body').addClass('menu_sep1'); });
	$('#theme_customization .menu_sep2').on('click',function(){ $('body').removeClass(removeMenuSep); $('body').addClass('menu_sep2'); });
	$('#theme_customization .menu_sep3').on('click',function(){ $('body').removeClass(removeMenuSep); $('body').addClass('menu_sep3'); });
	$('#theme_customization .menu_sep4').on('click',function(){ $('body').removeClass(removeMenuSep); $('body').addClass('menu_sep4'); });
	$('#theme_customization .menu_sep5').on('click',function(){ $('body').removeClass(removeMenuSep); $('body').addClass('menu_sep5'); });
	$('#theme_customization .menu_sep6').on('click',function(){ $('body').removeClass(removeMenuSep); $('body').addClass('menu_sep6'); });
	// Menu separators

	// Submenu
	var removeSubmenuType = 'submenu1 submenu2 submenu3';
	$('#theme_customization .submenu1').on('click',function(){ $('body').removeClass(removeSubmenuType); $('body').addClass('submenu1'); });
	$('#theme_customization .submenu2').on('click',function(){ $('body').removeClass(removeSubmenuType); $('body').addClass('submenu2'); });
	$('#theme_customization .submenu3').on('click',function(){ $('body').removeClass(removeSubmenuType); $('body').addClass('submenu3'); });
	// Submenu end

	// Sticky menu
	var removeStickyMenu = 'stickymenu_yes stickymenu_no';
	$('#theme_customization .stickymenu_yes').on('click',function(){ $('body').removeClass(removeStickyMenu); $('body').addClass('stickymenu_yes'); });
	$('#theme_customization .stickymenu_no').on('click',function(){ $('body').removeClass(removeStickyMenu); $('body').addClass('stickymenu_no'); });
	// Sticky menu end

	// Menu home icon
	var removeHomeIcon = 'homeicon_yes homeicon_no';
	$('#theme_customization .homeicon_yes').on('click',function(){ $('body').removeClass(removeHomeIcon); $('body').addClass('homeicon_yes'); });
	$('#theme_customization .homeicon_no').on('click',function(){ $('body').removeClass(removeHomeIcon); $('body').addClass('homeicon_no'); });
	// Menu home icon end








	// *** SLIDER ***

	// Slider boxed
	var removeSliderBoxed = 'slider_boxed slider_full_width';
	$('#theme_customization .slider_boxed').on('click',function(){ $('body').removeClass(removeSliderBoxed); $('body').addClass('slider_boxed'); });
	$('#theme_customization .slider_full_width').on('click',function(){ $('body').removeClass(removeSliderBoxed); $('body').addClass('slider_full_width'); });
	// Slider boxed end

	// Slider position
	var removeSliderPossition = 'slider_position_top slider_position_column';
	$('#theme_customization .slider_position_top').on('click',function(){ $('body').removeClass(removeSliderPossition); $('body').addClass('slider_position_top'); });
	$('#theme_customization .slider_position_column').on('click',function(){ $('body').removeClass(removeSliderPossition); $('body').addClass('slider_position_column'); });
	// Slider position end

	// Slider controls color
	var removeSliderControls = 'slider_controls_white slider_controls_black';
	$('#theme_customization .slider_controls_white').on('click',function(){ $('body').removeClass(removeSliderControls); $('body').addClass('slider_controls_white'); });
	$('#theme_customization .slider_controls_black').on('click',function(){ $('body').removeClass(removeSliderControls); $('body').addClass('slider_controls_black'); });
	// Slider controls color end










	
	// *** BANNERS TOP ***
	
	// Banners top computers number
	var removeBanners_top = 'banners_top1 banners_top2 banners_top3 banners_top4 banners_top5';
	$('#theme_customization .banners_top1').on('click',function(){ $('body').removeClass(removeBanners_top); $('body').addClass('banners_top1'); });
	$('#theme_customization .banners_top2').on('click',function(){ $('body').removeClass(removeBanners_top); $('body').addClass('banners_top2'); });
	$('#theme_customization .banners_top3').on('click',function(){ $('body').removeClass(removeBanners_top); $('body').addClass('banners_top3'); });
	$('#theme_customization .banners_top4').on('click',function(){ $('body').removeClass(removeBanners_top); $('body').addClass('banners_top4'); });
	$('#theme_customization .banners_top5').on('click',function(){ $('body').removeClass(removeBanners_top); $('body').addClass('banners_top5'); });
	//  Banners top computers number end	

	// Banners top tablets number
	var removeBanners_top_tablets = 'banners_top_tablets0 banners_top_tablets1 banners_top_tablets2 banners_top_tablets3 banners_top_tablets4 banners_top_tablets5';
	$('#theme_customization .banners_top_tablets0').on('click',function(){ $('body').removeClass(removeBanners_top_tablets); $('body').addClass('banners_top_tablets0'); });
	$('#theme_customization .banners_top_tablets1').on('click',function(){ $('body').removeClass(removeBanners_top_tablets); $('body').addClass('banners_top_tablets1'); });
	$('#theme_customization .banners_top_tablets2').on('click',function(){ $('body').removeClass(removeBanners_top_tablets); $('body').addClass('banners_top_tablets2'); });
	$('#theme_customization .banners_top_tablets3').on('click',function(){ $('body').removeClass(removeBanners_top_tablets); $('body').addClass('banners_top_tablets3'); });
	$('#theme_customization .banners_top_tablets4').on('click',function(){ $('body').removeClass(removeBanners_top_tablets); $('body').addClass('banners_top_tablets4'); });
	$('#theme_customization .banners_top_tablets5').on('click',function(){ $('body').removeClass(removeBanners_top_tablets); $('body').addClass('banners_top_tablets5'); });
	//  Banners top tablets number end

	// Banners top phones number
	var removeBanners_top_phones = 'banners_top_phones0 banners_top_phones1 banners_top_phones2 banners_top_phones3 banners_top_phones4 banners_top_phones5';
	$('#theme_customization .banners_top_phones0').on('click',function(){ $('body').removeClass(removeBanners_top_phones); $('body').addClass('banners_top_phones0'); });
	$('#theme_customization .banners_top_phones1').on('click',function(){ $('body').removeClass(removeBanners_top_phones); $('body').addClass('banners_top_phones1'); });
	$('#theme_customization .banners_top_phones2').on('click',function(){ $('body').removeClass(removeBanners_top_phones); $('body').addClass('banners_top_phones2'); });
	$('#theme_customization .banners_top_phones3').on('click',function(){ $('body').removeClass(removeBanners_top_phones); $('body').addClass('banners_top_phones3'); });
	$('#theme_customization .banners_top_phones4').on('click',function(){ $('body').removeClass(removeBanners_top_phones); $('body').addClass('banners_top_phones4'); });
	$('#theme_customization .banners_top_phones5').on('click',function(){ $('body').removeClass(removeBanners_top_phones); $('body').addClass('banners_top_phones5'); });
	//  Banners top phones number end










	// *** BANNERS BOTTOM ***

	// Banners bottom computers number
	var removeBanners_bottom = 'banners_bottom1 banners_bottom2 banners_bottom3 banners_bottom4 banners_bottom5';
	$('#theme_customization .banners_bottom1').on('click',function(){ $('body').removeClass(removeBanners_bottom); $('body').addClass('banners_bottom1'); });
	$('#theme_customization .banners_bottom2').on('click',function(){ $('body').removeClass(removeBanners_bottom); $('body').addClass('banners_bottom2'); });
	$('#theme_customization .banners_bottom3').on('click',function(){ $('body').removeClass(removeBanners_bottom); $('body').addClass('banners_bottom3'); });
	$('#theme_customization .banners_bottom4').on('click',function(){ $('body').removeClass(removeBanners_bottom); $('body').addClass('banners_bottom4'); });
	$('#theme_customization .banners_bottom5').on('click',function(){ $('body').removeClass(removeBanners_bottom); $('body').addClass('banners_bottom5'); });
	//  Banners bottom computers number end

	// Banners bottom tablets number
	var removeBanners_bottom_tablets = 'banners_bottom_tablets0 banners_bottom_tablets1 banners_bottom_tablets2 banners_bottom_tablets3 banners_bottom_tablets4 banners_bottom_tablets5';
	$('#theme_customization .banners_bottom_tablets0').on('click',function(){ $('body').removeClass(removeBanners_bottom_tablets); $('body').addClass('banners_bottom_tablets0'); });
	$('#theme_customization .banners_bottom_tablets1').on('click',function(){ $('body').removeClass(removeBanners_bottom_tablets); $('body').addClass('banners_bottom_tablets1'); });
	$('#theme_customization .banners_bottom_tablets2').on('click',function(){ $('body').removeClass(removeBanners_bottom_tablets); $('body').addClass('banners_bottom_tablets2'); });
	$('#theme_customization .banners_bottom_tablets3').on('click',function(){ $('body').removeClass(removeBanners_bottom_tablets); $('body').addClass('banners_bottom_tablets3'); });
	$('#theme_customization .banners_bottom_tablets4').on('click',function(){ $('body').removeClass(removeBanners_bottom_tablets); $('body').addClass('banners_bottom_tablets4'); });
	$('#theme_customization .banners_bottom_tablets5').on('click',function(){ $('body').removeClass(removeBanners_bottom_tablets); $('body').addClass('banners_bottom_tablets5'); });
	//  Banners bottom tablets number end

	// Banners bottom phones number
	var removeBanners_bottom_phones = 'banners_bottom_phones0 banners_bottom_phones1 banners_bottom_phones2 banners_bottom_phones3 banners_bottom_phones4 banners_bottom_phones5';
	$('#theme_customization .banners_bottom_phones0').on('click',function(){ $('body').removeClass(removeBanners_bottom_phones); $('body').addClass('banners_bottom_phones0'); });
	$('#theme_customization .banners_bottom_phones1').on('click',function(){ $('body').removeClass(removeBanners_bottom_phones); $('body').addClass('banners_bottom_phones1'); });
	$('#theme_customization .banners_bottom_phones2').on('click',function(){ $('body').removeClass(removeBanners_bottom_phones); $('body').addClass('banners_bottom_phones2'); });
	$('#theme_customization .banners_bottom_phones3').on('click',function(){ $('body').removeClass(removeBanners_bottom_phones); $('body').addClass('banners_bottom_phones3'); });
	$('#theme_customization .banners_bottom_phones4').on('click',function(){ $('body').removeClass(removeBanners_bottom_phones); $('body').addClass('banners_bottom_phones4'); });
	$('#theme_customization .banners_bottom_phones5').on('click',function(){ $('body').removeClass(removeBanners_bottom_phones); $('body').addClass('banners_bottom_phones5'); });
	//  Banners bottom phones number end









	// *** FEATURED CATEGORIES ***

	// Featured categories styles
	var removeFeat_cat_style = 'feat_cat_style1 feat_cat_style2 feat_cat_style3 feat_cat_style4 feat_cat_style5';
	$('#theme_customization .feat_cat_style1').on('click',function(){ $('body').removeClass(removeFeat_cat_style); $('body').addClass('feat_cat_style1'); });
	$('#theme_customization .feat_cat_style2').on('click',function(){ $('body').removeClass(removeFeat_cat_style); $('body').addClass('feat_cat_style2'); });
	$('#theme_customization .feat_cat_style3').on('click',function(){ $('body').removeClass(removeFeat_cat_style); $('body').addClass('feat_cat_style3'); });
	$('#theme_customization .feat_cat_style4').on('click',function(){ $('body').removeClass(removeFeat_cat_style); $('body').addClass('feat_cat_style4'); });
	//  Featured categories styles end

	// Featured categories computers number
	var removeFeat_cat = 'feat_cat2 feat_cat3 feat_cat4 feat_cat5 feat_cat6';
	$('#theme_customization .feat_cat2').on('click',function(){ $('body').removeClass(removeFeat_cat); $('body').addClass('feat_cat2'); });
	$('#theme_customization .feat_cat3').on('click',function(){ $('body').removeClass(removeFeat_cat); $('body').addClass('feat_cat3'); });
	$('#theme_customization .feat_cat4').on('click',function(){ $('body').removeClass(removeFeat_cat); $('body').addClass('feat_cat4'); });
	$('#theme_customization .feat_cat5').on('click',function(){ $('body').removeClass(removeFeat_cat); $('body').addClass('feat_cat5'); });
	$('#theme_customization .feat_cat6').on('click',function(){ $('body').removeClass(removeFeat_cat); $('body').addClass('feat_cat6'); });
	//  Featured categories computers number end

	// Featured categories bigtablets number
	var removeFeat_cat_bigtablets = 'feat_cat_bigtablets0 feat_cat_bigtablets1 feat_cat_bigtablets2 feat_cat_bigtablets3 feat_cat_bigtablets4';
	$('#theme_customization .feat_cat_bigtablets0').on('click',function(){ $('body').removeClass(removeFeat_cat_bigtablets); $('body').addClass('feat_cat_bigtablets0'); });
	$('#theme_customization .feat_cat_bigtablets1').on('click',function(){ $('body').removeClass(removeFeat_cat_bigtablets); $('body').addClass('feat_cat_bigtablets1'); });
	$('#theme_customization .feat_cat_bigtablets2').on('click',function(){ $('body').removeClass(removeFeat_cat_bigtablets); $('body').addClass('feat_cat_bigtablets2'); });
	$('#theme_customization .feat_cat_bigtablets3').on('click',function(){ $('body').removeClass(removeFeat_cat_bigtablets); $('body').addClass('feat_cat_bigtablets3'); });
	$('#theme_customization .feat_cat_bigtablets4').on('click',function(){ $('body').removeClass(removeFeat_cat_bigtablets); $('body').addClass('feat_cat_bigtablets4'); });
	//  Featured categories bigtablets number end

	// Featured categories tablets number
	var removeFeat_cat_tablets = 'feat_cat_tablets0 feat_cat_tablets1 feat_cat_tablets2 feat_cat_tablets3 feat_cat_tablets4';
	$('#theme_customization .feat_cat_tablets0').on('click',function(){ $('body').removeClass(removeFeat_cat_tablets); $('body').addClass('feat_cat_tablets0'); });
	$('#theme_customization .feat_cat_tablets1').on('click',function(){ $('body').removeClass(removeFeat_cat_tablets); $('body').addClass('feat_cat_tablets1'); });
	$('#theme_customization .feat_cat_tablets2').on('click',function(){ $('body').removeClass(removeFeat_cat_tablets); $('body').addClass('feat_cat_tablets2'); });
	$('#theme_customization .feat_cat_tablets3').on('click',function(){ $('body').removeClass(removeFeat_cat_tablets); $('body').addClass('feat_cat_tablets3'); });
	$('#theme_customization .feat_cat_tablets4').on('click',function(){ $('body').removeClass(removeFeat_cat_tablets); $('body').addClass('feat_cat_tablets4'); });
	//  Featured categories tablets number end

	// Featured categories phones number
	var removeFeat_cat_phones = 'feat_cat_phones0 feat_cat_phones1 feat_cat_phones2 feat_cat_phones3';
	$('#theme_customization .feat_cat_phones0').on('click',function(){ $('body').removeClass(removeFeat_cat_phones); $('body').addClass('feat_cat_phones0'); });
	$('#theme_customization .feat_cat_phones1').on('click',function(){ $('body').removeClass(removeFeat_cat_phones); $('body').addClass('feat_cat_phones1'); });
	$('#theme_customization .feat_cat_phones2').on('click',function(){ $('body').removeClass(removeFeat_cat_phones); $('body').addClass('feat_cat_phones2'); });
	$('#theme_customization .feat_cat_phones3').on('click',function(){ $('body').removeClass(removeFeat_cat_phones); $('body').addClass('feat_cat_phones3'); });
	//  Featured categories phones number end










	// *** PRODUCT-LIST QTY ***

	// Product-list product per row 1 column
	var removePL1col_qty = 'pl_1col_qty_2 pl_1col_qty_3 pl_1col_qty_4 pl_1col_qty_5 pl_1col_qty_6';
	$('#theme_customization .pl_1col_qty_2').on('click',function(){ $('body').removeClass(removePL1col_qty); $('body').addClass('pl_1col_qty_2'); });
	$('#theme_customization .pl_1col_qty_3').on('click',function(){ $('body').removeClass(removePL1col_qty); $('body').addClass('pl_1col_qty_3'); });
	$('#theme_customization .pl_1col_qty_4').on('click',function(){ $('body').removeClass(removePL1col_qty); $('body').addClass('pl_1col_qty_4'); });
	$('#theme_customization .pl_1col_qty_5').on('click',function(){ $('body').removeClass(removePL1col_qty); $('body').addClass('pl_1col_qty_5'); });
	$('#theme_customization .pl_1col_qty_6').on('click',function(){ $('body').removeClass(removePL1col_qty); $('body').addClass('pl_1col_qty_6'); });
	// Product-list product per row 1 column end

	// Product-list product per row 2 column
	var removePL2col_qty = 'pl_2col_qty_2 pl_2col_qty_3 pl_2col_qty_4 pl_2col_qty_5 pl_2col_qty_6';
	$('#theme_customization .pl_2col_qty_2').on('click',function(){ $('body').removeClass(removePL2col_qty); $('body').addClass('pl_2col_qty_2'); });
	$('#theme_customization .pl_2col_qty_3').on('click',function(){ $('body').removeClass(removePL2col_qty); $('body').addClass('pl_2col_qty_3'); });
	$('#theme_customization .pl_2col_qty_4').on('click',function(){ $('body').removeClass(removePL2col_qty); $('body').addClass('pl_2col_qty_4'); });
	$('#theme_customization .pl_2col_qty_5').on('click',function(){ $('body').removeClass(removePL2col_qty); $('body').addClass('pl_2col_qty_5'); });
	$('#theme_customization .pl_2col_qty_6').on('click',function(){ $('body').removeClass(removePL2col_qty); $('body').addClass('pl_2col_qty_6'); });
	// Product-list product per row 2 column end

	// Product-list product per row 3 column
	var removePL3col_qty = 'pl_3col_qty_2 pl_3col_qty_3 pl_3col_qty_4 pl_3col_qty_5 pl_3col_qty_6';
	$('#theme_customization .pl_3col_qty_2').on('click',function(){ $('body').removeClass(removePL3col_qty); $('body').addClass('pl_3col_qty_2'); });
	$('#theme_customization .pl_3col_qty_3').on('click',function(){ $('body').removeClass(removePL3col_qty); $('body').addClass('pl_3col_qty_3'); });
	$('#theme_customization .pl_3col_qty_4').on('click',function(){ $('body').removeClass(removePL3col_qty); $('body').addClass('pl_3col_qty_4'); });
	$('#theme_customization .pl_3col_qty_5').on('click',function(){ $('body').removeClass(removePL3col_qty); $('body').addClass('pl_3col_qty_5'); });
	$('#theme_customization .pl_3col_qty_6').on('click',function(){ $('body').removeClass(removePL3col_qty); $('body').addClass('pl_3col_qty_6'); });
	// Product-list product per row 3 column end


	// Product-list product per row 1 column big tablets
	var removePL1col_qty_bigtablets = 'pl_1col_qty_bigtablets_2 pl_1col_qty_bigtablets_3 pl_1col_qty_bigtablets_4 pl_1col_qty_bigtablets_5 pl_1col_qty_bigtablets_6';
	$('#theme_customization .pl_1col_qty_bigtablets_2').on('click',function(){ $('body').removeClass(removePL1col_qty_bigtablets); $('body').addClass('pl_1col_qty_bigtablets_2'); });
	$('#theme_customization .pl_1col_qty_bigtablets_3').on('click',function(){ $('body').removeClass(removePL1col_qty_bigtablets); $('body').addClass('pl_1col_qty_bigtablets_3'); });
	$('#theme_customization .pl_1col_qty_bigtablets_4').on('click',function(){ $('body').removeClass(removePL1col_qty_bigtablets); $('body').addClass('pl_1col_qty_bigtablets_4'); });
	$('#theme_customization .pl_1col_qty_bigtablets_5').on('click',function(){ $('body').removeClass(removePL1col_qty_bigtablets); $('body').addClass('pl_1col_qty_bigtablets_5'); });
	$('#theme_customization .pl_1col_qty_bigtablets_6').on('click',function(){ $('body').removeClass(removePL1col_qty_bigtablets); $('body').addClass('pl_1col_qty_bigtablets_6'); });
	// Product-list product per row 1 column big tablets end

	// Product-list product per row 2 column tablets
	var removePL2col_qty_bigtablets = 'pl_2col_qty_bigtablets_2 pl_2col_qty_bigtablets_3 pl_2col_qty_bigtablets_4 pl_2col_qty_bigtablets_5 pl_2col_qty_bigtablets_6';
	$('#theme_customization .pl_2col_qty_bigtablets_2').on('click',function(){ $('body').removeClass(removePL2col_qty_bigtablets); $('body').addClass('pl_2col_qty_bigtablets_2'); });
	$('#theme_customization .pl_2col_qty_bigtablets_3').on('click',function(){ $('body').removeClass(removePL2col_qty_bigtablets); $('body').addClass('pl_2col_qty_bigtablets_3'); });
	$('#theme_customization .pl_2col_qty_bigtablets_4').on('click',function(){ $('body').removeClass(removePL2col_qty_bigtablets); $('body').addClass('pl_2col_qty_bigtablets_4'); });
	$('#theme_customization .pl_2col_qty_bigtablets_5').on('click',function(){ $('body').removeClass(removePL2col_qty_bigtablets); $('body').addClass('pl_2col_qty_bigtablets_5'); });
	$('#theme_customization .pl_2col_qty_bigtablets_6').on('click',function(){ $('body').removeClass(removePL2col_qty_bigtablets); $('body').addClass('pl_2col_qty_bigtablets_6'); });
	// Product-list product per row 2 column tablets end

	// Product-list product per row 3 column tablets
	var removePL3col_qty_bigtablets = 'pl_3col_qty_bigtablets_2 pl_3col_qty_bigtablets_3 pl_3col_qty_bigtablets_4 pl_3col_qty_bigtablets_5 pl_3col_qty_bigtablets_6';
	$('#theme_customization .pl_3col_qty_bigtablets_2').on('click',function(){ $('body').removeClass(removePL3col_qty_bigtablets); $('body').addClass('pl_3col_qty_bigtablets_2'); });
	$('#theme_customization .pl_3col_qty_bigtablets_3').on('click',function(){ $('body').removeClass(removePL3col_qty_bigtablets); $('body').addClass('pl_3col_qty_bigtablets_3'); });
	$('#theme_customization .pl_3col_qty_bigtablets_4').on('click',function(){ $('body').removeClass(removePL3col_qty_bigtablets); $('body').addClass('pl_3col_qty_bigtablets_4'); });
	$('#theme_customization .pl_3col_qty_bigtablets_5').on('click',function(){ $('body').removeClass(removePL3col_qty_bigtablets); $('body').addClass('pl_3col_qty_bigtablets_5'); });
	$('#theme_customization .pl_3col_qty_bigtablets_6').on('click',function(){ $('body').removeClass(removePL3col_qty_bigtablets); $('body').addClass('pl_3col_qty_bigtablets_6'); });
	// Product-list product per row 3 column tablets end


	// Product-list product per row 1 column tablets
	var removePL1col_qty_tablets = 'pl_1col_qty_tablets_2 pl_1col_qty_tablets_3 pl_1col_qty_tablets_4 pl_1col_qty_tablets_5 pl_1col_qty_tablets_6';
	$('#theme_customization .pl_1col_qty_tablets_2').on('click',function(){ $('body').removeClass(removePL1col_qty_tablets); $('body').addClass('pl_1col_qty_tablets_2'); });
	$('#theme_customization .pl_1col_qty_tablets_3').on('click',function(){ $('body').removeClass(removePL1col_qty_tablets); $('body').addClass('pl_1col_qty_tablets_3'); });
	$('#theme_customization .pl_1col_qty_tablets_4').on('click',function(){ $('body').removeClass(removePL1col_qty_tablets); $('body').addClass('pl_1col_qty_tablets_4'); });
	$('#theme_customization .pl_1col_qty_tablets_5').on('click',function(){ $('body').removeClass(removePL1col_qty_tablets); $('body').addClass('pl_1col_qty_tablets_5'); });
	$('#theme_customization .pl_1col_qty_tablets_6').on('click',function(){ $('body').removeClass(removePL1col_qty_tablets); $('body').addClass('pl_1col_qty_tablets_6'); });
	// Product-list product per row 1 column tablets end

	// Product-list product per row 1 column phones
	var removePL1col_qty_phones = 'pl_1col_qty_phones_1 pl_1col_qty_phones_2 pl_1col_qty_phones_3 pl_1col_qty_phones_4 pl_1col_qty_phones_5 pl_1col_qty_phones_6';
	$('#theme_customization .pl_1col_qty_phones_1').on('click',function(){ $('body').removeClass(removePL1col_qty_phones); $('body').addClass('pl_1col_qty_phones_1'); });
	$('#theme_customization .pl_1col_qty_phones_2').on('click',function(){ $('body').removeClass(removePL1col_qty_phones); $('body').addClass('pl_1col_qty_phones_2'); });
	$('#theme_customization .pl_1col_qty_phones_3').on('click',function(){ $('body').removeClass(removePL1col_qty_phones); $('body').addClass('pl_1col_qty_phones_3'); });
	$('#theme_customization .pl_1col_qty_phones_4').on('click',function(){ $('body').removeClass(removePL1col_qty_phones); $('body').addClass('pl_1col_qty_phones_4'); });
	$('#theme_customization .pl_1col_qty_phones_5').on('click',function(){ $('body').removeClass(removePL1col_qty_phones); $('body').addClass('pl_1col_qty_phones_5'); });
	$('#theme_customization .pl_1col_qty_phones_6').on('click',function(){ $('body').removeClass(removePL1col_qty_phones); $('body').addClass('pl_1col_qty_phones_6'); });
	// Product-list product per row 1 column phones end










	// *** HOME TABS ***
	var removeHomeTabs = 'home_tabs1 home_tabs2';
	$('#theme_customization .home_tabs1').on('click',function(){ $('body').removeClass(removeHomeTabs); $('body').addClass('home_tabs1'); });
	$('#theme_customization .home_tabs2').on('click',function(){ $('body').removeClass(removeHomeTabs); $('body').addClass('home_tabs2'); });

	// All products link
	var removeAllproducts = 'all_products_yes all_products_no';
	$('#theme_customization .all_products_yes').on('click',function(){ $('body').removeClass(removeAllproducts); $('body').addClass('all_products_yes'); });
	$('#theme_customization .all_products_no').on('click',function(){ $('body').removeClass(removeAllproducts); $('body').addClass('all_products_no'); });
	// All products link end








	// *** PRODUCT-LIST STYLES ***

	// Product-list border type
	var removePLBorderType = 'pl_border_type1 pl_border_type2 pl_border_type3';
	$('#theme_customization .pl_border_type1').on('click',function(){ $('body').removeClass(removePLBorderType); $('body').addClass('pl_border_type1'); });
	$('#theme_customization .pl_border_type2').on('click',function(){ $('body').removeClass(removePLBorderType); $('body').addClass('pl_border_type2'); });
	$('#theme_customization .pl_border_type3').on('click',function(){ $('body').removeClass(removePLBorderType); $('body').addClass('pl_border_type3'); });
	// Product-list border type end

	// Product-list button type
	var removePLButtonType = 'pl_button_type1 pl_button_type2';
	$('#theme_customization .pl_button_type1').on('click',function(){ $('body').removeClass(removePLButtonType); $('body').addClass('pl_button_type1'); });
	$('#theme_customization .pl_button_type2').on('click',function(){ $('body').removeClass(removePLButtonType); $('body').addClass('pl_button_type2'); });
	// Product-list button type end

	// Product-list button qty
	var removePLButtonQty = 'pl_button_qty1 pl_button_qty2 pl_button_qty3 pl_button_qty4';
	$('#theme_customization .pl_button_qty1').on('click',function(){ $('body').removeClass(removePLButtonQty); $('body').addClass('pl_button_qty1'); });
	$('#theme_customization .pl_button_qty2').on('click',function(){ $('body').removeClass(removePLButtonQty); $('body').addClass('pl_button_qty2'); });
	$('#theme_customization .pl_button_qty3').on('click',function(){ $('body').removeClass(removePLButtonQty); $('body').addClass('pl_button_qty3'); });
	$('#theme_customization .pl_button_qty4').on('click',function(){ $('body').removeClass(removePLButtonQty); $('body').addClass('pl_button_qty4'); });
	// Product-list button qty end

	// Product-list reviews
	var removePLReviews = 'pl_reviews_yes pl_reviews_hide_text pl_reviews_no';
	$('#theme_customization .pl_reviews_yes').on('click',function(){ $('body').removeClass(removePLReviews); $('body').addClass('pl_reviews_yes'); });
	$('#theme_customization .pl_reviews_hide_text').on('click',function(){ $('body').removeClass(removePLReviews); $('body').addClass('pl_reviews_hide_text'); });
	$('#theme_customization .pl_reviews_no').on('click',function(){ $('body').removeClass(removePLReviews); $('body').addClass('pl_reviews_no'); });
	// Product-list reviews end

	// Product-list availability
	var removePLAvailability = 'pl_availability_yes pl_availability_no';
	$('#theme_customization .pl_availability_yes').on('click',function(){ $('body').removeClass(removePLAvailability); $('body').addClass('pl_availability_yes'); });
	$('#theme_customization .pl_availability_no').on('click',function(){ $('body').removeClass(removePLAvailability); $('body').addClass('pl_availability_no'); });
	// Product-list availability end

	// Product-list color variants
	var removePLColors = 'pl_colors_yes pl_colors_no';
	$('#theme_customization .pl_colors_yes').on('click',function(){ $('body').removeClass(removePLColors); $('body').addClass('pl_colors_yes'); });
	$('#theme_customization .pl_colors_no').on('click',function(){ $('body').removeClass(removePLColors); $('body').addClass('pl_colors_no'); });
	// Product-list color variants end

	// Product-list ref
	var removePLRef = 'pl_ref_yes pl_ref_no pl_ref_empty_line';
	$('#theme_customization .pl_ref_yes').on('click',function(){ $('body').removeClass(removePLRef); $('body').addClass('pl_ref_yes'); });
	$('#theme_customization .pl_ref_no').on('click',function(){ $('body').removeClass(removePLRef); $('body').addClass('pl_ref_no'); });
	$('#theme_customization .pl_ref_empty_line').on('click',function(){ $('body').removeClass(removePLRef); $('body').addClass('pl_ref_empty_line'); });
	// Product-list ref end

	// Product-list man
	var removePLMan = 'pl_man_yes pl_man_no pl_man_empty_line';
	$('#theme_customization .pl_man_yes').on('click',function(){ $('body').removeClass(removePLMan); $('body').addClass('pl_man_yes'); });
	$('#theme_customization .pl_man_no').on('click',function(){ $('body').removeClass(removePLMan); $('body').addClass('pl_man_no'); });
	$('#theme_customization .pl_man_empty_line').on('click',function(){ $('body').removeClass(removePLMan); $('body').addClass('pl_man_empty_line'); });
	// Product-list man end

	// Product-list desc
	var removePLDesc = 'pl_desc_yes pl_desc_no';
	$('#theme_customization .pl_desc_yes').on('click',function(){ $('body').removeClass(removePLDesc); $('body').addClass('pl_desc_yes'); });
	$('#theme_customization .pl_desc_no').on('click',function(){ $('body').removeClass(removePLDesc); $('body').addClass('pl_desc_no'); });
	// Product-list desc end

	// Product-list button icon
	var removePLButtonIcon = 'pl_button_icon_yes pl_button_icon_no';
	$('#theme_customization .pl_button_icon_yes').on('click',function(){ $('body').removeClass(removePLButtonIcon); $('body').addClass('pl_button_icon_yes'); });
	$('#theme_customization .pl_button_icon_no').on('click',function(){ $('body').removeClass(removePLButtonIcon); $('body').addClass('pl_button_icon_no'); });
	// Product-list button icon end

	// Product-list grayout out of stock products
	var removePLGrayout = 'pl_grayout_yes pl_grayout_no';
	$('#theme_customization .pl_grayout_yes').on('click',function(){ $('body').removeClass(removePLGrayout); $('body').addClass('pl_grayout_yes'); });
	$('#theme_customization .pl_grayout_no').on('click',function(){ $('body').removeClass(removePLGrayout); $('body').addClass('pl_grayout_no'); });
	// Product-list grayout out of stock products end

	// Product-list gallery type
	var removePLGalleryType = 'pl_gallery_type_1 pl_gallery_type_2 pl_gallery_type_3';
	$('#theme_customization .pl_gallery_type_1').on('click',function(){ $('body').removeClass(removePLGalleryType); $('body').addClass('pl_gallery_type_1'); });
	$('#theme_customization .pl_gallery_type_2').on('click',function(){ $('body').removeClass(removePLGalleryType); $('body').addClass('pl_gallery_type_2'); });
	$('#theme_customization .pl_gallery_type_3').on('click',function(){ $('body').removeClass(removePLGalleryType); $('body').addClass('pl_gallery_type_3'); });
	// Product-list gallery type end










	// *** FOOTER ***
	// Newsletter hide info
	var removeNewsletter = 'newsletter_info_yes newsletter_info_no';
	$('#theme_customization .newsletter_info_yes').on('click',function(){ $('body').removeClass(removeNewsletter); $('body').addClass('newsletter_info_yes'); });
	$('#theme_customization .newsletter_info_no').on('click',function(){ $('body').removeClass(removeNewsletter); $('body').addClass('newsletter_info_no'); });
	// Newsletter hide info end










	// *** PRODUCT PAGE ***

	// Product layout type
	var removeProductLayout = 'product_layout1 product_layout2';
	$('#theme_customization .product_layout1').on('click',function(){ $('body').removeClass(removeProductLayout); $('body').addClass('product_layout1'); });
	$('#theme_customization .product_layout2').on('click',function(){ $('body').removeClass(removeProductLayout); $('body').addClass('product_layout2'); });
	// Product layout type end

	// Product hide reference
	var removeProductHideReference = 'hide_reference_yes hide_reference_no';
	$('#theme_customization .hide_reference_yes').on('click',function(){ $('body').removeClass(removeProductHideReference); $('body').addClass('hide_reference_yes'); });
	$('#theme_customization .hide_reference_no').on('click',function(){ $('body').removeClass(removeProductHideReference); $('body').addClass('hide_reference_no'); });
	// Product hide reference end

	// Product hide manufacturer
	var removeProductHideMan = 'product_hide_man_yes product_hide_man_no';
	$('#theme_customization .product_hide_man_yes').on('click',function(){ $('body').removeClass(removeProductHideMan); $('body').addClass('product_hide_man_yes'); });
	$('#theme_customization .product_hide_man_no').on('click',function(){ $('body').removeClass(removeProductHideMan); $('body').addClass('product_hide_man_no'); });
	// Product hide manufacturer end

	// Product hide reassurance
	var removeProductHideReassurance = 'hide_reassurance_yes hide_reassurance_no';
	$('#theme_customization .hide_reassurance_yes').on('click',function(){ $('body').removeClass(removeProductHideReassurance); $('body').addClass('hide_reassurance_yes'); });
	$('#theme_customization .hide_reassurance_no').on('click',function(){ $('body').removeClass(removeProductHideReassurance); $('body').addClass('hide_reassurance_no'); });
	// Product hide reassurance end

	// Product tabs
	var removeProductTabs = 'product_tabs1 product_tabs2';
	$('#theme_customization .product_tabs1').on('click',function(){ $('body').removeClass(removeProductTabs); $('body').addClass('product_tabs1'); });
	$('#theme_customization .product_tabs2').on('click',function(){ $('body').removeClass(removeProductTabs); $('body').addClass('product_tabs2'); });
	// Product tabs end










	// *** ORDER AND AUTHETICATION PAGE ***
	
	// Order hide gender
	var removeGender = 'order_gender_hide order_gender_show';
	$('#theme_customization .order_gender_hide').on('click',function(){ $('body').removeClass(removeGender); $('body').addClass('order_gender_hide'); });
	$('#theme_customization .order_gender_show').on('click',function(){ $('body').removeClass(removeGender); $('body').addClass('order_gender_show'); });
	// Order hide gender end

	// Order hide birthday
	var removeBirthday = 'order_birthday_hide order_birthday_show';
	$('#theme_customization .order_birthday_hide').on('click',function(){ $('body').removeClass(removeBirthday); $('body').addClass('order_birthday_hide'); });
	$('#theme_customization .order_birthday_show').on('click',function(){ $('body').removeClass(removeBirthday); $('body').addClass('order_birthday_show'); });
	// Order hide birthday end









	// *** RANGE ***

	// Logo Range
	$('#logo_top_comp input').mousemove( function () {
		var v = $(this).val();
		$('#_desktop_logo').css('padding-top', v + 'px')
		$('#logo_top_comp span.value').html(v);
	});

	$('#logo_bottom_comp input').mousemove( function () {
		var v = $(this).val();
		$('#_desktop_logo').css('padding-bottom', v + 'px')
		$('#logo_bottom_comp span.value').html(v);
	});

	// Featured categories Range
	$('#featcat_height input').mousemove( function () {
		var v = $(this).val();
		$('#home_categories ul li .cat-container').css('min-height', v + 'px')
		$('#featcat_height span.value').html(v);
	});

	// Product-list Range
	$('#pl_name_height input').mousemove( function () {
		var v = $(this).val();
		$('.products .product-miniature .product-title').css('height', v + 'px')
		$('#pl_name_height span.value').html(v);
	});

	$('#pl_name_fs input').mousemove( function () {
		var v = $(this).val();
		$('.products .product-miniature .product-title a').css('font-size', v + 'px')
		$('#pl_name_fs span.value').html(v);
	});

	$('#pl_name_lh input').mousemove( function () {
		var v = $(this).val();
		$('.products .product-miniature .product-title a').css('line-height', v + 'px')
		$('#pl_name_lh span.value').html(v);
	});

	$('#pl_desc_height input').mousemove( function () {
		var v = $(this).val();
		$('#content-wrapper .products .product-miniature .product-desc').css('height', v + 'px')
		$('#pl_desc_height span.value').html(v);
	});

	// *** COLORS - Theme color editor ***


	// Background black
	var removeBgInner = 'bg_white bg_black';
	$('#theme_color .bg_white').on('click',function(){ $('body').removeClass(removeBgInner); $('body').addClass('bg_white'); });
	$('#theme_color .bg_black').on('click',function(){ $('body').removeClass(removeBgInner); $('body').addClass('bg_black'); });

	// Background black end


	// Top

	$('#nav_background').minicolors({
		change: function(hex, rgb) {
			$('nav.header-nav').css('background', hex);
			$('#nav_background').attr('value', hex);
		}
	});

	$('#nav_border').minicolors({
		change: function(hex, rgb) {
			$('nav.header-nav').css('border-color', hex);
			$('#contact-link span.shop-phone').css('border-color', hex);
			$('.lang_currency_top').css('border-color', hex);
			$('#_desktop_user_info').css('border-color', hex);
			$('#nav_border').attr('value', hex);
		}
	});

	$('#top_font_color').minicolors({
		change: function(hex, rgb) {
			$('#contact-link').css('color', hex);
			$('#contact-link a').css('color', hex);
			$('.lang_currency_top span.lang_currency_text').css('color', hex);
			$('.lang_currency_top .dropdown i.expand-more').css('color', hex);
			$('nav.header-nav .user-info span').css('color', hex);
			$('nav.header-nav .user-info a.logout').css('color', hex);
			$('#top_font_color').attr('value', hex);
		}
	});

	$('#top_font_color2').minicolors({
		change: function(hex, rgb) {
			$('#contact-link span.shop-phone strong').css('color', hex);
			$('#contact-link span.shop-phone strong a').css('color', hex);
			$('.lang_currency_top span.expand-more').css('color', hex);
			$('nav.header-nav .user-info a.account').css('color', hex);
			$('#top_font_color2').attr('value', hex);
		}
	});

	$('#top_icons').minicolors({
		change: function(hex, rgb) {
			$('#contact-link span.shop-phone i').css('color', hex);
			$('#top_icons').attr('value', hex);
		}
	});

	$('#header_background').minicolors({
		change: function(hex, rgb) {
			$('.header-top').css('background', hex);
			$('#header_background').attr('value', hex);
		}
	});

	$('#search_button').minicolors({
		change: function(hex, rgb) {
			searchButton = hex;
			$('.search_style_1 div#search_widget form button[type=submit]').css('background', hex);
			$('#search_button').attr('value', hex);
		}
	});

	$('#search_button_hover').minicolors({
		change: function(hex, rgb) {
			searchButtonHover = hex;
			$(".search_style_1 div#search_widget form button[type=submit]").mouseover(function() {
			  $(this).css('background', hex);
			})
			.mouseout(function() {
				$(this).css('background', searchButton);
			});

			$('#search_button_hover').attr('value', hex);
		}
	});

	$('#search_button_color').minicolors({
		change: function(hex, rgb) {
			searchButtonColor = hex;
			$('.search_style_1 div#search_widget form button[type=submit]').css('color', hex);
			$('#search_button_color').attr('value', hex);
		}
	});

	$('#search_button_color_hover').minicolors({
		change: function(hex, rgb) {
			searchButtonColorHover = hex;
			$(".search_style_1 div#search_widget form button[type=submit]").mouseover(function() {
			  $(this).css('color', hex);
			})
			.mouseout(function() {
				$(this).css('color', searchButtonColor);
			});

			$('#search_button_color_hover').attr('value', hex);
		}
	});

	// Search button 2
	$('#search_button_color2').minicolors({
		change: function(hex, rgb) {
			searchButtonColor2 = hex;
			$('.search_style_2 div#search_widget form button[type=submit]').css('color', hex);
			$('#search_button_color2').attr('value', hex);
		}
	});

	$('#search_button_color_hover2').minicolors({
		change: function(hex, rgb) {
			searchButtonColorHover2 = hex;
			$(".search_style_2 div#search_widget form button[type=submit]").mouseover(function() {
			  $(this).css('color', hex);
			})
			.mouseout(function() {
				$(this).css('color', searchButtonColor2);
			});

			$('.search_style_2 #search_button_color_hover2').attr('value', hex);
		}
	});

	$('#cart_background').minicolors({
		change: function(hex, rgb) {
			$('.cart_style_1 #header div#_desktop_cart .blockcart .header').css('background', hex);
			$('#cart_background').attr('value', hex);
		}
	});

	$('#cart_color').minicolors({
		change: function(hex, rgb) {
			$('.cart_style_1 #header div#_desktop_cart .blockcart .header a.cart_link').css('color', hex);
			$('#cart_color').attr('value', hex);
		}
	});

	// Cart bg 2

	$('#cart_color2').minicolors({
		change: function(hex, rgb) {
			$('.cart_style_2 #header div#_desktop_cart .blockcart .header a.cart_link').css('color', hex);
			$('.cart_style_3 #header div#_desktop_cart .blockcart .header a.cart_link').css('color', hex);
			$('.cart_style_4 #header div#_desktop_cart .blockcart .header a.cart_link').css('color', hex);
			$('.cart_style_5 #header div#_desktop_cart .blockcart .header a.cart_link').css('color', hex);
			$('#cart_icons a').css('color', hex);
			$('#cart_color2').attr('value', hex);
		}
	});

	$('#cart_background2').minicolors({
		change: function(hex, rgb) {
			$('.cart_style_3 #header span.cart_qty').css('background', hex);
			$('.cart_style_5 #header span.cart_qty').css('background', hex);
			$('#cart_background2').attr('value', hex);
		}
	});

	$('#sticky_cart_bg1').minicolors({
		change: function(hex, rgb) {
			$('.stickycart_yes.sticky_cart #header div#_desktop_cart .blockcart .header .cart_index_title').css('background', hex);
			$('#sticky_cart_bg1').attr('value', hex);
		}
	});

	$('#sticky_cart_bg2').minicolors({
		change: function(hex, rgb) {
			$('.stickycart_yes.sticky_cart #header div#_desktop_cart .blockcart .header a.cart_link span.cart-products-count span.cart_qty span').css('background', hex);
			$('#sticky_cart_bg2').attr('value', hex);
		}
	});

	$('#sticky_cart_color').minicolors({
		change: function(hex, rgb) {
			$('.stickycart_yes.sticky_cart #header div#_desktop_cart .blockcart .header a.cart_link i.shopping-cart').css('color', hex);
			$('#sticky_cart_color').attr('value', hex);
		}
	});

	$('#account_background').minicolors({
		change: function(hex, rgb) {
			$('a.account_cart_rwd').css('background', hex);
			$('#account_background').attr('value', hex);
		}
	});

	$('#slider_dot').minicolors({
		change: function(hex, rgb) {         
			$('#homepage-slider .bx-wrapper .bx-pager.bx-default-pager a.active').css('background-color', hex);
			$('#slider_dot').attr('value', hex);
		}
	});


	// Menu
	$('#menu_bg').minicolors({
		change: function(hex, rgb) {    
			$('#_desktop_top_menu').css('background', hex);

			$('#rwd_menu').css('background', hex);

			$('#menu_bg').attr('value', hex);
		}
	});

	$('#menu_border_color').minicolors({
		change: function(hex, rgb) {         
			$('#_desktop_top_menu').css('border-color', hex);
			$('#_desktop_top_menu > ul > li').css('border-color', hex);

			$('div#rwd_menu').css('border-color', hex);
			$('div#rwd_menu .rwd_menu_item').css('border-color', hex);
			$('div#rwd_menu .rwd_menu_item:first-child').css('border-color', hex);

			$('#menu_border_color').attr('value', hex);
		}
	});

	$('#menu_font_color').minicolors({
		change: function(hex, rgb) {    
			fontColorMenu = hex;
			$('#_desktop_top_menu > ul > li > a').css('color', hex);

			$('div#rwd_menu .rwd_menu_item').css('color', hex);
			$('div#rwd_menu').css('color', hex);
			$('div#rwd_menu a').css('color', hex);

			$('#menu_font_color').attr('value', hex);
		}
	});

	$('#menu_font_color_hover').minicolors({
		change: function(hex, rgb) {
			fontColorMenuHover = hex;
			$("#_desktop_top_menu > ul > li > a, div#rwd_menu .rwd_menu_item").mouseover(function() {
			  $(this).css('color', hex);
			})
			.mouseout(function() {
				$(this).css('color', fontColorMenu);
			});


			$('#menu_font_color_hover').attr('value', hex);
		}
	});

	$('#menu_li_hover').minicolors({
		change: function(hex, rgb) {
			$("#_desktop_top_menu > ul > li > a, div#rwd_menu .rwd_menu_item, div#rwd_menu .rwd_menu_item a, a.cart_link").mouseover(function() {
			  $(this).css('background', hex);
			})
			.mouseout(function() {
				$(this).css({'background' : 'transparent'});
			});

			$('#menu_li_hover').attr('value', hex);
		}
	});

	$('#submenu_background').minicolors({
		change: function(hex, rgb) {
			$(".submenu1 #_desktop_top_menu .popover.sub-menu ul.top-menu li a, .submenu3 #_desktop_top_menu .popover.sub-menu ul.top-menu li a, #mobile_top_menu_wrapper2 .top-menu li a, .rwd_menu_open ul.user_info li a, ul.user_info li a").mouseover(function() {
			  $(this).css('background', hex);
			})
			.mouseout(function() {
				$(this).css({'background' : 'transparent'});
			});

			$('#submenu_background').attr('value', hex);
		}
	});

	$('#submenu_color').minicolors({
		change: function(hex, rgb) {         

			$(".submenu1 #_desktop_top_menu .popover.sub-menu ul.top-menu li a, .submenu3 #_desktop_top_menu .popover.sub-menu ul.top-menu li a, #mobile_top_menu_wrapper2 .top-menu li a, .rwd_menu_open ul.user_info li a, ul.user_info li a").mouseover(function() {
			  $(this).css('color', hex);
			})
			.mouseout(function() {
				$(this).css({'color' : ''});
			});

			$('#submenu_color').attr('value', hex);
		}
	});


	// Featured categories
	$('#feat_title').minicolors({
		change: function(hex, rgb) {
			$('#home_categories .homecat_title span').css('borderColor', hex);
			$('#feat_title').attr('value', hex);
		}
	});

	$('#feat_cat_title').minicolors({
		change: function(hex, rgb) {
			$('#home_categories ul li .homecat_name span').css('background', hex);
			$('#feat_cat_title').attr('value', hex);
		}
	});

	// Featured categories subcategory button
	$('#feat_button_bg').minicolors({
		change: function(hex, rgb) {
			GreenButtonBG = hex;

			$('#home_categories ul li a.view_more').css('background', hex);
			$('#feat_button_bg').attr('value', hex);
		}
	});

	$('#feat_button_bg_hover').minicolors({
		change: function(hex, rgb) {
			$("#home_categories ul li a.view_more").mouseover(function() {
				$(this).css('background', hex);
			})
			.mouseout(function() {
				$(this).css('background', GreenButtonBG);
			});

			$('#feat_button_bg_hover').attr('value', hex);
		}
	});

	$('#feat_button_color').minicolors({
		change: function(hex, rgb) {       
			GreenButtonColor = hex;

			$('#home_categories ul li a.view_more').css('color', hex);	
			$('#feat_button_color').attr('value', hex);
		}
	});

	$('#feat_button_color_hover').minicolors({
		change: function(hex, rgb) {
			$("#home_categories ul li a.view_more").mouseover(function() {
				$(this).css('color', hex);
			})
			.mouseout(function() {
				$(this).css('color', GreenButtonColor);
			});

			$('#feat_button_color_hover').attr('value', hex);
		}
	});

	$('#feat_button_border_color').minicolors({
		change: function(hex, rgb) {
			GreenButtonBorder = hex;

			$('#home_categories ul li a.view_more').css('borderColor', hex);
			$('#feat_button_border_color').attr('value', hex);
		}
	});

	$('#feat_button_border_color_hover').minicolors({
		change: function(hex, rgb) {         
			PLButtonBorder2 = hex;

			$("#home_categories ul li a.view_more").mouseover(function() {
			  $(this).css('borderColor', hex);
			})
			.mouseout(function() {
				$(this).css('borderColor', GreenButtonBorder);
			});

			$('#feat_button_border_color_hover').attr('value', hex);
		}
	});


	// Columns
	$('#title_block1').minicolors({
		change: function(hex, rgb) {       
			$('.columns .text-uppercase span').css('borderColor', hex);
			$('.columns .text-uppercase a').css('borderColor', hex);
			$('.columns div#_desktop_cart .cart_index_title a').css('borderColor', hex);
			$('#home_man_product .catprod_title a span').css('borderColor', hex);
			$('#title_block1').attr('value', hex);
		}
	});

	$('#title_block2').minicolors({
		change: function(hex, rgb) {       
			gradientTitleBlock2 = hex;

			$('#columns .block .title_block').css({'background' : 'linear-gradient(to bottom, ' + gradientTitleBlock1 + ' 0%, ' + gradientTitleBlock2 + ' 100%)'});
			$('#title_block2').attr('value', gradientTitleBlock2);
		}
	});
 
	$('#price_column_color').minicolors({
		change: function(hex, rgb) {         
			$('.columns .product-price-and-shipping .price').css('color', hex);
			$('#price_column_color').attr('value', hex);
		}
	});


	// Tabs or blocks
	$('#index_title1').minicolors({
		change: function(hex, rgb) {       
			$('.index_title a').css('borderColor', hex);
			$('.index_title span').css('borderColor', hex);
			$('.tabs ul.nav-tabs li.nav-item a.active').css('borderColor', hex);
			$('#index_title1').attr('value', hex);
		}
	});

	$('#index_title2').minicolors({
		change: function(hex, rgb) {       
			gradientIndexTitle2 = hex;

			$('.index_title').css({'background' : 'linear-gradient(to bottom, ' + gradientIndexTitle1 + ' 0%, ' + gradientIndexTitle2 + ' 100%)'});
			$('#home-page-tabs > li.active a').css({'background' : 'linear-gradient(to bottom, ' + gradientIndexTitle1 + ' 0%, ' + gradientIndexTitle2 + ' 100%)'});
			$('#home-page-tabs > li').css('color', hex);
			$('#index_title2').attr('value', gradientIndexTitle2);
		}
	});


	// Product-list
	$('#pl_cart_bg').minicolors({
		change: function(hex, rgb) {
			CartButtonBG = hex;

			$('.button-container .add-to-cart').css('background', hex);
			$('#subcart .cart-buttons .viewcart').css('background', hex);
			$('.wishlist-product-bottom .btn-primary').css('background', hex);
			$('#pl_cart_bg').attr('value', hex);
		}
	});

	$('#pl_cart_bg_hover').minicolors({
		change: function(hex, rgb) {
			$(".button-container .add-to-cart, #subcart .cart-buttons .viewcart, .wishlist-product-bottom .btn-primary").mouseover(function() {
				$(this).css('background', hex);
			})
			.mouseout(function() {
				$(this).css('background', CartButtonBG);
			});

			$('#pl_cart_bg_hover').attr('value', hex);
		}
	});

	$('#pl_cart_color').minicolors({
		change: function(hex, rgb) {       
			CartButtonColor = hex;

			$('.button-container .add-to-cart').css('color', hex);
			$('#subcart .cart-buttons .viewcart').css('color', hex);
			$('.wishlist-product-bottom .btn-primary').css('color', hex);
			$('#pl_cart_color').attr('value', hex);
		}
	});

	$('#pl_cart_color_hover').minicolors({
		change: function(hex, rgb) {
			$(".button-container .add-to-cart, #subcart .cart-buttons .viewcart, .wishlist-product-bottom .btn-primary").mouseover(function() {
				$(this).css('color', hex);
			})
			.mouseout(function() {
				$(this).css('color', CartButtonColor);
			});

			$('#pl_cart_color_hover').attr('value', hex);
		}
	});

	$('#pl_cart_button_border_color').minicolors({
		change: function(hex, rgb) {
			CartButtonBorder = hex;

			$('.button-container .add-to-cart').css('borderColor', hex);
			$('#subcart .cart-buttons .viewcart').css('borderColor', hex);
			$('.wishlist-product-bottom .btn-primary').css('borderColor', hex);
			$('#pl_cart_button_border_color').attr('value', hex);
		}
	});

	$('#pl_cart_button_border_color_hover').minicolors({
		change: function(hex, rgb) {         
			PLButtonBorder2 = hex;

			$(".button-container .add-to-cart, #subcart .cart-buttons .viewcart, .wishlist-product-bottom .btn-primary").mouseover(function() {
			  $(this).css('borderColor', hex);
			})
			.mouseout(function() {
				$(this).css('borderColor', CartButtonBorder);
			});

			$('#pl_cart_button_border_color_hover').attr('value', hex);
		}
	});

	$('#price_color_index').minicolors({
		change: function(hex, rgb) {         
			$('.products .product-miniature span.price').css('color', hex);
			$('#home_cat_product ul li .product-price-and-shipping .price').css('color', hex);
			$('body#view #main .wishlist-product-price').css('color', hex);
			$('#price_color_index').attr('value', hex);
		}
	});

	$('#product_name_color').minicolors({
		change: function(hex, rgb) {         
			$('.products .product-miniature .product-title a').css('color', hex);
			$('#home_cat_product ul li .right-block .name_block a').css('color', hex);
			$('#product_name_color').attr('value', hex);
		}
	});

	$('#new_label').minicolors({
		change: function(hex, rgb) {         
			$('a.product-flags-plist span.product-flag.new').css('background', hex);
			$('#home_cat_product a.product-flags-plist span.product-flag.new').css('background', hex);
			$('#product #content .product-flags .product-flag.new').css('background', hex);
			$('a.product-flags-plist span.product-flag.pack').css('background', hex);
			$('#new_label').attr('value', hex);
		}
	});


	$('#discount_label').minicolors({
		change: function(hex, rgb) {         
			$('a.product-flags-plist span.product-flag.discount-percentage').css('background', hex);
			$('a.product-flags-plist span.product-flag.discount').css('background', hex);
			$('a.product-flags-plist span.product-flag.out_of_stock').css('background', hex);
			$('.product-prices span.discount').css('background', hex);
			$('#product #content .product-flags .product-flag.discount').css('background', hex);
			$('#product #content .product-flags .product-flag.out_of_stock').css('background', hex);

			$('#discount_label').attr('value', hex);
		}
	});

	// Products from category
	$('#catprod_title').minicolors({
		change: function(hex, rgb) {       
			$('#home_cat_product .catprod_title span').css('borderColor', hex);
			$('#catprod_title').attr('value', hex);
		}
	});


	// Featured manufacturers
	$('#featman_title').minicolors({
		change: function(hex, rgb) {       
			$('#home_man .man_title span').css('borderColor', hex);
			$('#featman_title').attr('value', hex);
		}
	});


	// Footer
	$('#footer_cms_icons').minicolors({
		change: function(hex, rgb) {         
			$('#angarinfo_block .icon_cms').css('color', hex);
			$('#footer_cms_icons').attr('value', hex);
		}
	});

	$('#footer_background').minicolors({
		change: function(hex, rgb) {       
			$('.footer-container').css('background', hex);
			$('#footer_background').attr('value', hex);
		}
	});

	$('#footer_border').minicolors({
		change: function(hex, rgb) {       
			$('.footer-container').css('borderColor', hex);
			$('.footer-container .h3').css('borderColor', hex);
			$('.row.social_footer').css('borderColor', hex);
			$('#footer_border').attr('value', hex);
		}
	});

	$('#footer_border_header').minicolors({
		change: function(hex, rgb) {       
			$('.footer-container .h3 span').css('borderColor', hex);
			$('.footer-container .h3 a').css('borderColor', hex);
			$('.footer-container .links .title span.h3').css('borderColor', hex);
			$('.footer-container .links .title a.h3').css('borderColor', hex);
			$('#footer_border_header').attr('value', hex);
		}
	});

	$('#footer_font_color').minicolors({
		change: function(hex, rgb) {
			$('.footer-container').css('color', hex);
			$('.footer-container .h3').css('color', hex);
			$('.footer-container a:not(#scroll_top)').css('color', hex);
			$('.footer-container li a').css('color', hex);
			$('#footer_font_color').attr('value', hex);
		}
	});

	$('#newsletter_button').minicolors({
		change: function(hex, rgb) {
			newsletterButton = hex;
			$('.block_newsletter .btn-newsletter').css('background', hex);
			$('#newsletter_button').attr('value', hex);
		}
	});

	$('#newsletter_button_hover').minicolors({
		change: function(hex, rgb) {
			newsletterButtonHover = hex;
			$(".block_newsletter .btn-newsletter").mouseover(function() {
				$(this).css('background', hex);
			})
			.mouseout(function() {
				$(this).css('background', newsletterButton);
			});

			$('#newsletter_button_hover').attr('value', hex);
		}
	});

	$('#newsletter_color').minicolors({
		change: function(hex, rgb) {
			newsletterColor = hex;
			$('.block_newsletter .btn-newsletter').css('color', hex);
			$('#newsletter_color').attr('value', hex);
		}
	});

	$('#newsletter_color_hover').minicolors({
		change: function(hex, rgb) {
			newsletterColorHover = hex;
			$(".block_newsletter .btn-newsletter").mouseover(function() {
				$(this).css('color', hex);
			})
			.mouseout(function() {
				$(this).css('color', newsletterColor);
			});

			$('#newsletter_color_hover').attr('value', hex);
		}
	});

	$('#footer2_background').minicolors({
		change: function(hex, rgb) {       
			$('.footer-container .bottom-footer').css('background', hex);
			$('#footer2_background').attr('value', hex);
		}
	});

	$('#footer2_border').minicolors({
		change: function(hex, rgb) {       
			$('.footer-container .bottom-footer').css('borderColor', hex);
			$('#footer2_border').attr('value', hex);
		}
	});

	$('#footer2_font_color').minicolors({
		change: function(hex, rgb) {
			$('.footer-container .bottom-footer').css('color', hex);
			$('#footer2_font_color').attr('value', hex);
		}
	});


	// Product page
	$('#price_color_product').minicolors({
		change: function(hex, rgb) {         
			$('.product-prices .current-price span.price').css('color', hex);
			$('#price_color_product').attr('value', hex);
		}
	});




	$('#product_cart_button_bg').minicolors({
		change: function(hex, rgb) {       
			ProductButtonBG = hex;
			$('.product-add-to-cart button.btn.add-to-cart').css('background', hex);
			$('#product_cart_button_bg').attr('value', hex);
		}
	});

	$('#product_cart_button_bg_hover').minicolors({
		change: function(hex, rgb) {
			$(".product-add-to-cart button.btn.add-to-cart").mouseover(function() {
				$(this).css('background', hex);
			})
			.mouseout(function() {
				$(this).css('background', ProductButtonBG);
			});

			$('#product_cart_button_bg_hover').attr('value', hex);
		}
	});


	$('#product_cart_button_color').minicolors({
		change: function(hex, rgb) {
			ProductButtonColor = hex;

			$('.product-add-to-cart button.btn.add-to-cart').css('color', hex);	
			$('#product_cart_button_color').attr('value', hex);
		}
	});

	$('#product_cart_button_color_hover').minicolors({
		change: function(hex, rgb) {
			$(".product-add-to-cart button.btn.add-to-cart").mouseover(function() {
				$(this).css('color', hex);
			})
			.mouseout(function() {
				$(this).css('color', ProductButtonColor);
			});

			$('#product_cart_button_color_hover').attr('value', hex);
		}
	});


	$('#product_cart_button_border_color').minicolors({
		change: function(hex, rgb) {
			ProductButtonBorder = hex;

			$('.product-add-to-cart button.btn.add-to-cart').css('borderColor', hex);
			$('#product_cart_button_border_color').attr('value', hex);
		}
	});

	$('#product_cart_button_border_color_hover').minicolors({
		change: function(hex, rgb) {         
			$(".product-add-to-cart button.btn.add-to-cart").mouseover(function() {
			  $(this).css('borderColor', hex);
			})
			.mouseout(function() {
				$(this).css('borderColor', ProductButtonBorder);
			});

			$('#product_cart_button_border_color_hover').attr('value', hex);
		}
	});




	$('#product_selected_tab').minicolors({
		change: function(hex, rgb) {         
			$('#product .tabs ul.nav-tabs li.nav-item a.active').css('borderColor', hex);
			$('#product .index_title span').css('borderColor', hex);
			$('.page-product-heading span').css('borderColor', hex);
			$('#product_selected_tab').attr('value', hex);
		}
	});

// Delete below
	$('#product_tab').minicolors({
		change: function(hex, rgb) {         
			$('.product_tabs2 ul#more_info_tabs li a').css('background', hex);
			$('#product_tab').attr('value', hex);
		}
	});

	$('#product_tab_block_background').minicolors({
		change: function(hex, rgb) {         
			$('.product_tabs2 div#more_info_sheets').css('background', hex);
			$('#product_tab_block_background').attr('value', hex);
		}
	});


	// Other buttons

	$('#green_button_bg').minicolors({
		change: function(hex, rgb) {
			GreenButtonBG = hex;

			$('.btn-primary').css('background', hex);
			$('#green_button_bg').attr('value', hex);
		}
	});

	$('#green_button_bg_hover').minicolors({
		change: function(hex, rgb) {
			$(".btn-primary").mouseover(function() {
				$(this).css('background', hex);
			})
			.mouseout(function() {
				$(this).css('background', GreenButtonBG);
			});

			$('#green_button_bg_hover').attr('value', hex);
		}
	});


	$('#green_button_color').minicolors({
		change: function(hex, rgb) {       
			GreenButtonColor = hex;

			$('.btn-primary').css('color', hex);	
			$('#green_button_color').attr('value', hex);
		}
	});

	$('#green_button_color_hover').minicolors({
		change: function(hex, rgb) {
			$(".btn-primary").mouseover(function() {
				$(this).css('color', hex);
			})
			.mouseout(function() {
				$(this).css('color', GreenButtonColor);
			});

			$('#green_button_color_hover').attr('value', hex);
		}
	});


	$('#green_button_border_color').minicolors({
		change: function(hex, rgb) {
			GreenButtonBorder = hex;

			$('.btn-primary').css('borderColor', hex);
			$('#green_button_border_color').attr('value', hex);
		}
	});

	$('#green_button_border_color_hover').minicolors({
		change: function(hex, rgb) {         
			PLButtonBorder2 = hex;

			$(".btn-primary").mouseover(function() {
			  $(this).css('borderColor', hex);
			})
			.mouseout(function() {
				$(this).css('borderColor', GreenButtonBorder);
			});

			$('#green_button_border_color_hover').attr('value', hex);
		}
	});







	$('#grey_button_bg').minicolors({
		change: function(hex, rgb) {
			GreyButtonBG = hex;

			$('.btn-secondary').css('background', hex);
			$('#grey_button_bg').attr('value', hex);
		}
	});

	$('#grey_button_bg_hover').minicolors({
		change: function(hex, rgb) {
			$(".btn-secondary").mouseover(function() {
				$(this).css('background', hex);
			})
			.mouseout(function() {
				$(this).css('background', GreyButtonBG);
			});

			$('#grey_button_bg_hover').attr('value', hex);
		}
	});


	$('#grey_button_color').minicolors({
		change: function(hex, rgb) {       
			GreyButtonColor = hex;

			$('.btn-secondary').css('color', hex);	
			$('#grey_button_color').attr('value', hex);
		}
	});

	$('#grey_button_color_hover').minicolors({
		change: function(hex, rgb) {
			$(".btn-secondary").mouseover(function() {
				$(this).css('color', hex);
			})
			.mouseout(function() {
				$(this).css('color', GreyButtonColor);
			});

			$('#grey_button_color_hover').attr('value', hex);
		}
	});


	$('#grey_button_border_color').minicolors({
		change: function(hex, rgb) {
			GreyButtonBorder = hex;

			$('.btn-secondary').css('borderColor', hex);
			$('#grey_button_border_color').attr('value', hex);
		}
	});

	$('#grey_button_border_color_hover').minicolors({
		change: function(hex, rgb) {         
			PLButtonBorder2 = hex;

			$(".btn-secondary").mouseover(function() {
			  $(this).css('borderColor', hex);
			})
			.mouseout(function() {
				$(this).css('borderColor', GreyButtonBorder);
			});

			$('#grey_button_border_color_hover').attr('value', hex);
		}
	});






	$('#inputs_outline').minicolors({
		change: function(hex, rgb) {
			$('.input-group.focus').css('outline-color', hex);
			$('#inputs_outline').attr('value', hex);
		}
	});

	$('#pagination_color').minicolors({
		change: function(hex, rgb) {
			$('.pagination .page-list .current a').css('color', hex);
			$('#pagination_color').attr('value', hex);
		}
	});

	$('#account_icon_color').minicolors({
		change: function(hex, rgb) {
			$('#account_icon_color').attr('value', hex);
		}
	});






	$('#scroll_button_bg').minicolors({
		change: function(hex, rgb) {
			ScrollButtonBG = hex;

			$('#scroll_top').css('background', hex);
			$('#scroll_button_bg').attr('value', hex);
		}
	});

	$('#scroll_button_bg_hover').minicolors({
		change: function(hex, rgb) {
			$("#scroll_top").mouseover(function() {
				$(this).css('background', hex);
			})
			.mouseout(function() {
				$(this).css('background', ScrollButtonBG);
			});

			$('#scroll_button_bg_hover').attr('value', hex);
		}
	});

	$('#scroll_button_color').minicolors({
		change: function(hex, rgb) {
			ScrollButtonColor = hex;

			$('#scroll_top').css('color', hex);
			$('#scroll_button_color').attr('value', hex);
		}
	});

	$('#scroll_button_color_hover').minicolors({
		change: function(hex, rgb) {
			$("#scroll_top").mouseover(function() {
				$(this).css('color', hex);
			})
			.mouseout(function() {
				$(this).css('color', ScrollButtonColor);
			});

			$('#scroll_button_color_hover').attr('value', hex);
		}
	});







	// *** NEW OPTIONS ***

	// Footer style
	var removeFooterLinksStyle = 'footer_links_style_1 footer_links_style_2 footer_links_style_3';
	$('#theme_customization .footer_links_style_1').on('click',function(){ $('body').removeClass(removeFooterLinksStyle); $('body').addClass('footer_links_style_1'); });
	$('#theme_customization .footer_links_style_2').on('click',function(){ $('body').removeClass(removeFooterLinksStyle); $('body').addClass('footer_links_style_2'); });
	$('#theme_customization .footer_links_style_3').on('click',function(){ $('body').removeClass(removeFooterLinksStyle); $('body').addClass('footer_links_style_3'); });
	// Footer style

	// Footer style
	var removeFooterLinksColumn = 'footer_links_column_1 footer_links_column_2 footer_links_column_3 footer_links_column_4 footer_links_column_5';
	$('#theme_customization .footer_links_column_1').on('click',function(){ $('body').removeClass(removeFooterLinksColumn); $('body').addClass('footer_links_column_1'); });
	$('#theme_customization .footer_links_column_2').on('click',function(){ $('body').removeClass(removeFooterLinksColumn); $('body').addClass('footer_links_column_2'); });
	$('#theme_customization .footer_links_column_3').on('click',function(){ $('body').removeClass(removeFooterLinksColumn); $('body').addClass('footer_links_column_3'); });
	$('#theme_customization .footer_links_column_4').on('click',function(){ $('body').removeClass(removeFooterLinksColumn); $('body').addClass('footer_links_column_4'); });
	$('#theme_customization .footer_links_column_5').on('click',function(){ $('body').removeClass(removeFooterLinksColumn); $('body').addClass('footer_links_column_5'); });
	// Footer style

	// Footer style
	var removeFooterSocial = 'footer_social_yes footer_social_no';
	$('#theme_customization .footer_social_yes').on('click',function(){ $('body').removeClass(removeFooterSocial); $('body').addClass('footer_social_yes'); });
	$('#theme_customization .footer_social_no').on('click',function(){ $('body').removeClass(removeFooterSocial); $('body').addClass('footer_social_no'); });
	// Footer style








	// Page width
	var removePageWidth = 'page_width_1900 page_width_1800 page_width_1700 page_width_1600 page_width_1500 page_width_1400 page_width_1300 page_width_1200 ';

	$('#theme_customization .page_width_1900').on('click',function(){ $('body').removeClass(removePageWidth); $('body').addClass('page_width_1900'); });
	$('#theme_customization .page_width_1800').on('click',function(){ $('body').removeClass(removePageWidth); $('body').addClass('page_width_1800'); });
	$('#theme_customization .page_width_1700').on('click',function(){ $('body').removeClass(removePageWidth); $('body').addClass('page_width_1700'); });
	$('#theme_customization .page_width_1600').on('click',function(){ $('body').removeClass(removePageWidth); $('body').addClass('page_width_1600'); });
	$('#theme_customization .page_width_1500').on('click',function(){ $('body').removeClass(removePageWidth); $('body').addClass('page_width_1500'); });
	$('#theme_customization .page_width_1400').on('click',function(){ $('body').removeClass(removePageWidth); $('body').addClass('page_width_1400'); });
	$('#theme_customization .page_width_1300').on('click',function(){ $('body').removeClass(removePageWidth); $('body').addClass('page_width_1300'); });
	$('#theme_customization .page_width_1200').on('click',function(){ $('body').removeClass(removePageWidth); $('body').addClass('page_width_1200'); });
	// Page width








	// PL dual price
	var removePLDualPrices = 'pl_price_default pl_price_incl_excl pl_price_excl_incl pl_price_incl_tax_excl pl_price_excl_tax_incl';
	$('#theme_customization .pl_price_default').on('click',function(){ $('body').removeClass(removePLDualPrices); $('body').addClass('pl_price_default'); });
	$('#theme_customization .pl_price_incl_excl').on('click',function(){ $('body').removeClass(removePLDualPrices); $('body').addClass('pl_price_incl_excl'); });
	$('#theme_customization .pl_price_excl_incl').on('click',function(){ $('body').removeClass(removePLDualPrices); $('body').addClass('pl_price_excl_incl'); });
	$('#theme_customization .pl_price_incl_tax_excl').on('click',function(){ $('body').removeClass(removePLDualPrices); $('body').addClass('pl_price_incl_tax_excl'); });
	$('#theme_customization .pl_price_excl_tax_incl').on('click',function(){ $('body').removeClass(removePLDualPrices); $('body').addClass('pl_price_excl_tax_incl'); });
	// PL dual price








	// Product dual price
	var removeProductDualPrices = 'product_price_default product_price_incl_excl product_price_excl_incl product_price_incl_tax_excl product_price_excl_tax_incl';
	$('#theme_customization .product_price_default').on('click',function(){ $('body').removeClass(removeProductDualPrices); $('body').addClass('product_price_default'); });
	$('#theme_customization .product_price_incl_excl').on('click',function(){ $('body').removeClass(removeProductDualPrices); $('body').addClass('product_price_incl_excl'); });
	$('#theme_customization .product_price_excl_incl').on('click',function(){ $('body').removeClass(removeProductDualPrices); $('body').addClass('product_price_excl_incl'); });
	$('#theme_customization .product_price_incl_tax_excl').on('click',function(){ $('body').removeClass(removeProductDualPrices); $('body').addClass('product_price_incl_tax_excl'); });
	$('#theme_customization .product_price_excl_tax_incl').on('click',function(){ $('body').removeClass(removeProductDualPrices); $('body').addClass('product_price_excl_tax_incl'); });
	// Product dual price








	// Product-list stock
	var removePLStock = 'pl_stock_yes pl_stock_no';
	$('#theme_customization .pl_stock_yes').on('click',function(){ $('body').removeClass(removePLStock); $('body').addClass('pl_stock_yes'); });
	$('#theme_customization .pl_stock_no').on('click',function(){ $('body').removeClass(removePLStock); $('body').addClass('pl_stock_no'); });
	// Product-list stock end








	// Product page stock
	var removeProductStock = 'product_stock_yes product_stock_no';
	$('#theme_customization .product_stock_yes').on('click',function(){ $('body').removeClass(removeProductStock); $('body').addClass('product_stock_yes'); });
	$('#theme_customization .product_stock_no').on('click',function(){ $('body').removeClass(removeProductStock); $('body').addClass('product_stock_no'); });
	// Product-list stock end









	// Product-list qty
	var removePLqty = 'pl_qty_yes pl_qty_no';
	$('#theme_customization .pl_qty_yes').on('click',function(){ $('body').removeClass(removePLqty); $('body').addClass('pl_qty_yes'); });
	$('#theme_customization .pl_qty_no').on('click',function(){ $('body').removeClass(removePLqty); $('body').addClass('pl_qty_no'); });
	// Product-list stock end








	// Category main image
	var removeCategoryImage = 'cat_image_yes cat_image_no';
	$('#theme_customization .cat_image_yes').on('click',function(){ $('body').removeClass(removeCategoryImage); $('body').addClass('cat_image_yes'); });
	$('#theme_customization .cat_image_no').on('click',function(){ $('body').removeClass(removeCategoryImage); $('body').addClass('cat_image_no'); });
	// Category main image end







	// Category desc mobile
	var removeCategoryDescMobile = 'cat_desc_mobile_yes cat_desc_mobile_no';
	$('#theme_customization .cat_desc_mobile_yes').on('click',function(){ $('body').removeClass(removeCategoryDescMobile); $('body').addClass('cat_desc_mobile_yes'); });
	$('#theme_customization .cat_desc_mobile_no').on('click',function(){ $('body').removeClass(removeCategoryDescMobile); $('body').addClass('cat_desc_mobile_no'); });
	// Category desc mobile end








	// Subcategory image
	var removeSubcategoryImage = 'subcat_image_yes subcat_image_no';
	$('#theme_customization .subcat_image_yes').on('click',function(){ $('body').removeClass(removeSubcategoryImage); $('body').addClass('subcat_image_yes'); });
	$('#theme_customization .subcat_image_no').on('click',function(){ $('body').removeClass(removeSubcategoryImage); $('body').addClass('subcat_image_no'); });
	// Subcategory image end







	// Subcategory style
	var removeSubcategoryStyle = 'subcat_style_0 subcat_style_1 subcat_style_2 subcat_style_3';
	$('#theme_customization .subcat_style_0').on('click',function(){ $('body').removeClass(removeSubcategoryStyle); $('body').addClass('subcat_style_0'); });
	$('#theme_customization .subcat_style_1').on('click',function(){ $('body').removeClass(removeSubcategoryStyle); $('body').addClass('subcat_style_1'); });
	$('#theme_customization .subcat_style_2').on('click',function(){ $('body').removeClass(removeSubcategoryStyle); $('body').addClass('subcat_style_2'); });
	$('#theme_customization .subcat_style_3').on('click',function(){ $('body').removeClass(removeSubcategoryStyle); $('body').addClass('subcat_style_3'); });
	// Subcategory style end






	// Subcategories per row
	var removeSubcategoryQty = 'subcat_qty_0 subcat_qty_2 subcat_qty_3 subcat_qty_4 subcat_qty_5 subcat_qty_6';
	$('#theme_customization .subcat_qty_0').on('click',function(){ $('body').removeClass(removeSubcategoryQty); $('body').addClass('subcat_qty_0'); });
	$('#theme_customization .subcat_qty_2').on('click',function(){ $('body').removeClass(removeSubcategoryQty); $('body').addClass('subcat_qty_2'); });
	$('#theme_customization .subcat_qty_3').on('click',function(){ $('body').removeClass(removeSubcategoryQty); $('body').addClass('subcat_qty_3'); });
	$('#theme_customization .subcat_qty_4').on('click',function(){ $('body').removeClass(removeSubcategoryQty); $('body').addClass('subcat_qty_4'); });
	$('#theme_customization .subcat_qty_5').on('click',function(){ $('body').removeClass(removeSubcategoryQty); $('body').addClass('subcat_qty_5'); });
	$('#theme_customization .subcat_qty_6').on('click',function(){ $('body').removeClass(removeSubcategoryQty); $('body').addClass('subcat_qty_6'); });

	// Subcategories per row end







	// *** NEW OPTIONS 2 - version 2.7.0 ***

	// Capitalize text in the top bar
	var removeNavUppercase = 'nav_uppercase_yes nav_uppercase_no';
	$('#theme_customization .nav_uppercase_yes').on('click',function(){ $('body').removeClass(removeNavUppercase); $('body').addClass('nav_uppercase_yes'); });
	$('#theme_customization .nav_uppercase_no').on('click',function(){ $('body').removeClass(removeNavUppercase); $('body').addClass('nav_uppercase_no'); });


	// Center logo
	var removeLogoCenter = 'logo_center_yes logo_center_no';
	$('#theme_customization .logo_center_yes').on('click',function(){ $('body').removeClass(removeLogoCenter); $('body').addClass('logo_center_yes'); });
	$('#theme_customization .logo_center_no').on('click',function(){ $('body').removeClass(removeLogoCenter); $('body').addClass('logo_center_no'); });


	// Center links in the menu
	var removeMenuCenter = 'menu_center_yes menu_center_no';
	$('#theme_customization .menu_center_yes').on('click',function(){ $('body').removeClass(removeMenuCenter); $('body').addClass('menu_center_yes'); });
	$('#theme_customization .menu_center_no').on('click',function(){ $('body').removeClass(removeMenuCenter); $('body').addClass('menu_center_no'); });


	// Capitalize text in the menu
	var removeMenuUppercase = 'menu_uppercase_yes menu_uppercase_no';
	$('#theme_customization .menu_uppercase_yes').on('click',function(){ $('body').removeClass(removeMenuUppercase); $('body').addClass('menu_uppercase_yes'); });
	$('#theme_customization .menu_uppercase_no').on('click',function(){ $('body').removeClass(removeMenuUppercase); $('body').addClass('menu_uppercase_no'); });


	// Capitalize text in the submenu
	var removeSubMenuUppercase = 'submenu_uppercase_yes submenu_uppercase_no';
	$('#theme_customization .submenu_uppercase_yes').on('click',function(){ $('body').removeClass(removeSubMenuUppercase); $('body').addClass('submenu_uppercase_yes'); });
	$('#theme_customization .submenu_uppercase_no').on('click',function(){ $('body').removeClass(removeSubMenuUppercase); $('body').addClass('submenu_uppercase_no'); });


	// Search style
	var removeSearchStyle = 'search_style_1 search_style_2 search_style_3 search_style_4 search_style_5 search_style_6 search_style_7 search_style_8 search_style_9 search_style_10';
	$('#theme_customization .search_style_1').on('click',function(){ $('body').removeClass(removeSearchStyle); $('body').addClass('search_style_1'); });
	$('#theme_customization .search_style_2').on('click',function(){ $('body').removeClass(removeSearchStyle); $('body').addClass('search_style_2'); });
	$('#theme_customization .search_style_3').on('click',function(){ $('body').removeClass(removeSearchStyle); $('body').addClass('search_style_3'); });
	$('#theme_customization .search_style_4').on('click',function(){ $('body').removeClass(removeSearchStyle); $('body').addClass('search_style_4'); });
	$('#theme_customization .search_style_5').on('click',function(){ $('body').removeClass(removeSearchStyle); $('body').addClass('search_style_5'); });
	$('#theme_customization .search_style_6').on('click',function(){ $('body').removeClass(removeSearchStyle); $('body').addClass('search_style_6'); });
	$('#theme_customization .search_style_7').on('click',function(){ $('body').removeClass(removeSearchStyle); $('body').addClass('search_style_7'); });
	$('#theme_customization .search_style_8').on('click',function(){ $('body').removeClass(removeSearchStyle); $('body').addClass('search_style_8'); });
	$('#theme_customization .search_style_9').on('click',function(){ $('body').removeClass(removeSearchStyle); $('body').addClass('search_style_9'); });
	$('#theme_customization .search_style_10').on('click',function(){ $('body').removeClass(removeSearchStyle); $('body').addClass('search_style_10'); });


	// Search border - range
	$('#search_border_radius input').mousemove( function () {
		var v = $(this).val();
		$('div#search_widget form input[type=text], div#search_widget form button').css('border-radius', v + 'px')
		$('#search_border_radius span.value').html(v);
	});


	// Cart style
	var removeCartStyle = 'cart_style_1 cart_style_2 cart_style_3 cart_style_4 cart_style_5 cart_style_6 cart_style_7 cart_style_8 cart_style_9 cart_style_10';
	$('#theme_customization .cart_style_1').on('click',function(){ $('body').removeClass(removeCartStyle); $('body').addClass('cart_style_1'); });
	$('#theme_customization .cart_style_2').on('click',function(){ $('body').removeClass(removeCartStyle); $('body').addClass('cart_style_2'); });
	$('#theme_customization .cart_style_3').on('click',function(){ $('body').removeClass(removeCartStyle); $('body').addClass('cart_style_3'); });
	$('#theme_customization .cart_style_4').on('click',function(){ $('body').removeClass(removeCartStyle); $('body').addClass('cart_style_4'); });
	$('#theme_customization .cart_style_5').on('click',function(){ $('body').removeClass(removeCartStyle); $('body').addClass('cart_style_5'); });
	$('#theme_customization .cart_style_6').on('click',function(){ $('body').removeClass(removeCartStyle); $('body').addClass('cart_style_6'); });
	$('#theme_customization .cart_style_7').on('click',function(){ $('body').removeClass(removeCartStyle); $('body').addClass('cart_style_7'); });
	$('#theme_customization .cart_style_8').on('click',function(){ $('body').removeClass(removeCartStyle); $('body').addClass('cart_style_8'); });
	$('#theme_customization .cart_style_9').on('click',function(){ $('body').removeClass(removeCartStyle); $('body').addClass('cart_style_9'); });
	$('#theme_customization .cart_style_10').on('click',function(){ $('body').removeClass(removeCartStyle); $('body').addClass('cart_style_10'); });
	// Cart style


	// Cart border - range
	$('#cart_border_radius input').mousemove( function () {
		var v = $(this).val();
		$('.cart_style_1 #header div#_desktop_cart .blockcart .header').css('border-radius', v + 'px')
		$('#cart_border_radius span.value').html(v);
	});




	// LEFT COLUMN

	// Left column index hide
	var removeLeftColumnIndex = 'lc_index_hide_yes lc_index_hide_no';

	$('#theme_customization .lc_index_hide_yes').on('click', function() {
		$('body').removeClass(removeLeftColumnIndex).addClass('lc_index_hide_yes');
		$('#index #content-wrapper').removeClass('col-md-9').addClass('col-md-12');
	});

	$('#theme_customization .lc_index_hide_no').on('click', function() {
		$('body').removeClass(removeLeftColumnIndex).addClass('lc_index_hide_no');
		$('#index #content-wrapper').removeClass('col-md-12').addClass('col-md-9');
	});

	// Left column category hide
	var removeLeftColumnCategory = 'lc_category_hide_yes lc_category_hide_no';

	$('#theme_customization .lc_category_hide_yes').on('click', function() {
		$('body').removeClass(removeLeftColumnCategory).addClass('lc_category_hide_yes');
		$('#category #content-wrapper').removeClass('col-md-9').addClass('col-md-12');
	});

	$('#theme_customization .lc_category_hide_no').on('click', function() {
		$('body').removeClass(removeLeftColumnCategory).addClass('lc_category_hide_no');
		$('#category #content-wrapper').removeClass('col-md-12').addClass('col-md-9');
	});

	// Left column product hide
	var removeLeftColumnProduct = 'lc_product_hide_yes lc_product_hide_no';

	$('#theme_customization .lc_product_hide_yes').on('click', function() {
		$('body').removeClass(removeLeftColumnProduct).addClass('lc_product_hide_yes');
		$('#product #content-wrapper').removeClass('col-md-9').addClass('col-md-12');
	});

	$('#theme_customization .lc_product_hide_no').on('click', function() {
		$('body').removeClass(removeLeftColumnProduct).addClass('lc_product_hide_no');
		$('#product #content-wrapper').removeClass('col-md-12').addClass('col-md-9');
	});

	// Left column cms hide
	var removeLeftColumnCms = 'lc_cms_hide_yes lc_cms_hide_no';

	$('#theme_customization .lc_cms_hide_yes').on('click', function() {
		$('body').removeClass(removeLeftColumnCms).addClass('lc_cms_hide_yes');
		$('#cms #content-wrapper').removeClass('col-md-9').addClass('col-md-12');
	});

	$('#theme_customization .lc_cms_hide_no').on('click', function() {
		$('body').removeClass(removeLeftColumnCms).addClass('lc_cms_hide_no');
		$('#cms #content-wrapper').removeClass('col-md-12').addClass('col-md-9');
	});

	// Left column width
	var removeLeftWidth = 'lc_width_25 lc_width_22 lc_width_20 lc_width_18 lc_width_15';
	$('#theme_customization .lc_width_25').on('click',function(){ $('body').removeClass(removeLeftWidth); $('body').addClass('lc_width_25'); });
	$('#theme_customization .lc_width_22').on('click',function(){ $('body').removeClass(removeLeftWidth); $('body').addClass('lc_width_22'); });
	$('#theme_customization .lc_width_20').on('click',function(){ $('body').removeClass(removeLeftWidth); $('body').addClass('lc_width_20'); });
	$('#theme_customization .lc_width_18').on('click',function(){ $('body').removeClass(removeLeftWidth); $('body').addClass('lc_width_18'); });
	$('#theme_customization .lc_width_15').on('click',function(){ $('body').removeClass(removeLeftWidth); $('body').addClass('lc_width_15'); });

	// Left column category tree style
	var removeLeftColumnCategoryStyle = 'lc_category_style_1 lc_category_style_2 lc_category_style_3 lc_category_style_4 lc_category_style_5';
	$('#theme_customization .lc_category_style_1').on('click',function(){ $('body').removeClass(removeLeftColumnCategoryStyle); $('body').addClass('lc_category_style_1'); });
	$('#theme_customization .lc_category_style_2').on('click',function(){ $('body').removeClass(removeLeftColumnCategoryStyle); $('body').addClass('lc_category_style_2'); });
	$('#theme_customization .lc_category_style_3').on('click',function(){ $('body').removeClass(removeLeftColumnCategoryStyle); $('body').addClass('lc_category_style_3'); });
	$('#theme_customization .lc_category_style_4').on('click',function(){ $('body').removeClass(removeLeftColumnCategoryStyle); $('body').addClass('lc_category_style_4'); });
	$('#theme_customization .lc_category_style_5').on('click',function(){ $('body').removeClass(removeLeftColumnCategoryStyle); $('body').addClass('lc_category_style_5'); });

	// Left column banner mobile hide
	var removeLeftColumnBanner = 'lc_banner_hide_yes lc_banner_hide_no';
	$('#theme_customization .lc_banner_hide_yes').on('click',function(){ $('body').removeClass(removeLeftColumnBanner); $('body').addClass('lc_banner_hide_yes'); });
	$('#theme_customization .lc_banner_hide_no').on('click',function(){ $('body').removeClass(removeLeftColumnBanner); $('body').addClass('lc_banner_hide_no'); });




	// PRODUCT-LIST

	// Product-list - align
	var removePLAlign = 'pl_align_left pl_align_center';
	$('#theme_customization .pl_align_left').on('click', function(){ $('body').removeClass(removePLAlign).addClass('pl_align_left'); });
	$('#theme_customization .pl_align_center').on('click', function(){ $('body').removeClass(removePLAlign).addClass('pl_align_center'); });

	// Product-list - name uppercase
	var removePLNameUppercase = 'pl_name_uppercase_yes pl_name_uppercase_no';
	$('#theme_customization .pl_name_uppercase_yes').on('click', function(){ $('body').removeClass(removePLNameUppercase).addClass('pl_name_uppercase_yes'); });
	$('#theme_customization .pl_name_uppercase_no').on('click', function(){ $('body').removeClass(removePLNameUppercase).addClass('pl_name_uppercase_no'); });

	// Product-list quick view style
	var removePLQuickViewStyle = 'pl_qv_style_0 pl_qv_style_1 pl_qv_style_2 pl_qv_style_3 pl_qv_style_4';
	$('#theme_customization .pl_qv_style_0').on('click', function(){ $('body').removeClass(removePLQuickViewStyle).addClass('pl_qv_style_0'); });
	$('#theme_customization .pl_qv_style_1').on('click', function(){ $('body').removeClass(removePLQuickViewStyle).addClass('pl_qv_style_1'); });
	$('#theme_customization .pl_qv_style_2').on('click', function(){ $('body').removeClass(removePLQuickViewStyle).addClass('pl_qv_style_2'); });
	$('#theme_customization .pl_qv_style_3').on('click', function(){ $('body').removeClass(removePLQuickViewStyle).addClass('pl_qv_style_3'); });
	$('#theme_customization .pl_qv_style_4').on('click', function(){ $('body').removeClass(removePLQuickViewStyle).addClass('pl_qv_style_4'); });





	// PRODUCT PAGE

	// Product page arrows
	var removeProductArrows = 'prod_arrows_yes prod_arrows_no';
	$('#theme_customization .prod_arrows_yes').on('click',function(){ $('body').removeClass(removeProductArrows); $('body').addClass('prod_arrows_yes'); });
	$('#theme_customization .prod_arrows_no').on('click',function(){ $('body').removeClass(removeProductArrows); $('body').addClass('prod_arrows_no'); });
	// Product-list arrows end

	// Product page thumbnails
	var removeProductThumbnails = 'prod_thumb_style_1 prod_thumb_style_2';
	$('#theme_customization .prod_thumb_style_1').on('click',function(){ $('body').removeClass(removeProductThumbnails); $('body').addClass('prod_thumb_style_1'); });
	$('#theme_customization .prod_thumb_style_2').on('click',function(){ $('body').removeClass(removeProductThumbnails); $('body').addClass('prod_thumb_style_2'); });
	// Product-list thumbnails end

	// Product page popup thumbnails
	var removePopupThumbnails = 'popup_thumb_style_1 popup_thumb_style_2';
	$('#theme_customization .popup_thumb_style_1').on('click',function(){ $('body').removeClass(removePopupThumbnails); $('body').addClass('popup_thumb_style_1'); });
	$('#theme_customization .popup_thumb_style_2').on('click',function(){ $('body').removeClass(removePopupThumbnails); $('body').addClass('popup_thumb_style_2'); });
	// Product-list popup thumbnails end






	// COLOR SCHEMES BODY CLASS
	var removeColorSchemes = 'color_scheme_at01 color_scheme_at02 color_scheme_at03 color_scheme_at04 color_scheme_at05 color_scheme_at06 color_scheme_at07 color_scheme_at08 color_scheme_at09 color_scheme_at10 color_scheme_at11 color_scheme_at12 color_scheme_at13 color_scheme_at14 color_scheme_at15 color_scheme_at16 color_scheme_at17 color_scheme_at18 color_scheme_at19 color_scheme_at20 color_scheme_at21';
	$('#theme_color .color_scheme_at01').on('click',function(){ $('body').removeClass(removeColorSchemes); $('body').addClass('color_scheme_at01'); });
	$('#theme_color .color_scheme_at02').on('click',function(){ $('body').removeClass(removeColorSchemes); $('body').addClass('color_scheme_at02'); });
	$('#theme_color .color_scheme_at03').on('click',function(){ $('body').removeClass(removeColorSchemes); $('body').addClass('color_scheme_at03'); });
	$('#theme_color .color_scheme_at04').on('click',function(){ $('body').removeClass(removeColorSchemes); $('body').addClass('color_scheme_at04'); });
	$('#theme_color .color_scheme_at05').on('click',function(){ $('body').removeClass(removeColorSchemes); $('body').addClass('color_scheme_at05'); });
	$('#theme_color .color_scheme_at06').on('click',function(){ $('body').removeClass(removeColorSchemes); $('body').addClass('color_scheme_at06'); });
	$('#theme_color .color_scheme_at07').on('click',function(){ $('body').removeClass(removeColorSchemes); $('body').addClass('color_scheme_at07'); });
	$('#theme_color .color_scheme_at08').on('click',function(){ $('body').removeClass(removeColorSchemes); $('body').addClass('color_scheme_at08'); });
	$('#theme_color .color_scheme_at09').on('click',function(){ $('body').removeClass(removeColorSchemes); $('body').addClass('color_scheme_at09'); });
	$('#theme_color .color_scheme_at10').on('click',function(){ $('body').removeClass(removeColorSchemes); $('body').addClass('color_scheme_at10'); });
	$('#theme_color .color_scheme_at11').on('click',function(){ $('body').removeClass(removeColorSchemes); $('body').addClass('color_scheme_at11'); });
	$('#theme_color .color_scheme_at12').on('click',function(){ $('body').removeClass(removeColorSchemes); $('body').addClass('color_scheme_at12'); });
	$('#theme_color .color_scheme_at13').on('click',function(){ $('body').removeClass(removeColorSchemes); $('body').addClass('color_scheme_at13'); });
	$('#theme_color .color_scheme_at14').on('click',function(){ $('body').removeClass(removeColorSchemes); $('body').addClass('color_scheme_at14'); });
	$('#theme_color .color_scheme_at15').on('click',function(){ $('body').removeClass(removeColorSchemes); $('body').addClass('color_scheme_at15'); });
	$('#theme_color .color_scheme_at16').on('click',function(){ $('body').removeClass(removeColorSchemes); $('body').addClass('color_scheme_at16'); });
	$('#theme_color .color_scheme_at17').on('click',function(){ $('body').removeClass(removeColorSchemes); $('body').addClass('color_scheme_at17'); });
	$('#theme_color .color_scheme_at18').on('click',function(){ $('body').removeClass(removeColorSchemes); $('body').addClass('color_scheme_at18'); });
	$('#theme_color .color_scheme_at19').on('click',function(){ $('body').removeClass(removeColorSchemes); $('body').addClass('color_scheme_at19'); });
	$('#theme_color .color_scheme_at20').on('click',function(){ $('body').removeClass(removeColorSchemes); $('body').addClass('color_scheme_at20'); });
	$('#theme_color .color_scheme_at21').on('click',function(){ $('body').removeClass(removeColorSchemes); $('body').addClass('color_scheme_at21'); });

	// Live edit end

});




// Color schemes

document.addEventListener('DOMContentLoaded', () => {

    // Green buttons
    const otherButtons = {
		'green_button_bg': '#43b754',
		'green_button_color': '#ffffff',
		'green_button_border_color': '#399a49',
		'green_button_bg_hover': '#3aa04c',
		'green_button_color_hover': '#ffffff',
		'green_button_border_color_hover': '#196f28',
		'grey_button_bg': '#f6f6f6',
		'grey_button_color': '#000000',
		'grey_button_border_color': '#d8d8d8',
		'grey_button_bg_hover': '#eeeeee',
		'grey_button_color_hover': '#000000',
		'grey_button_border_color_hover': '#d8d8d8',
		'inputs_outline': '#dbdbdb',
    };

    // Color schemes
    const colorMap = {

        'color_scheme_at01': {

			...otherButtons,

			'nav_background': '#000000',
			'nav_border': '#383838',
			'top_font_color': '#ffffff',
			'top_font_color2': '#7fd41d',
			'top_icons': '#7fd41d',
			'header_background': '#1b1a1b',
			'search_button': '#7fd41d',
			'search_button_color': '#ffffff',
			'search_button_hover': '#7fd41d',
			'search_button_color_hover': '#ffffff',
			'search_button_color2': '#000000',
			'search_button_color_hover2': '#000000',
			'cart_background': '#7fd41d',
			'cart_color': '#ffffff',
			'cart_background2': '#7fd41d',
			'cart_color2': '#ffffff',
			'sticky_cart_bg1': '#7fd41d',
			'sticky_cart_bg2': '#f8653d',
			'sticky_cart_color': '#ffffff',
			'menu_bg': '#ffffff',
			'menu_border_color': '#e6e6e6',
			'menu_font_color': '#000000',
			'menu_font_color_hover': '#ffffff',
			'menu_li_hover': '#7fd41d',
			'submenu_color': '#ffffff',
			'submenu_background': '#7fd41d',
			'slider_dot': '#7fd41d',
			'feat_title': '#7fd41d',
			'feat_cat_title': '#7fd41d',
			'feat_button_bg': '#1b1a1b',
			'feat_button_color': '#ffffff',
			'feat_button_border_color': '#1b1a1b',
			'feat_button_bg_hover': '#7fd41d',
			'feat_button_color_hover': '#ffffff',
			'feat_button_border_color_hover': '#7fd41d',
			'title_block1': '#7fd41d',
			'index_title1': '#7fd41d',
			'new_label': '#00b0ff',
			'discount_label': '#ff0000',
			'product_name_color': '#000000',
			'price_color_index': '#7fd41d',
			'pl_cart_bg': '#1b1a1b',
			'pl_cart_color': '#ffffff',
			'pl_cart_button_border_color': '#1b1a1b',
			'pl_cart_bg_hover': '#7fd41d',
			'pl_cart_color_hover': '#ffffff',
			'pl_cart_button_border_color_hover': '#7fd41d',
			'catprod_title': '#7fd41d',
			'featman_title': '#7fd41d',
			'footer_cms_icons': '#7fd41d',
			'footer_background': '#1b1a1b',
			'footer_border': '#383838',
			'footer_border_header': '#7fd41d',
			'footer_font_color': '#ffffff',
			'footer2_background': '#000000',
			'footer2_border': '#383838',
			'footer2_font_color': '#ffffff',
			'newsletter_button': '#7fd41d',
			'newsletter_color': '#ffffff',
			'newsletter_button_hover': '#7fd41d',
			'newsletter_color_hover': '#ffffff',
			'price_color_product': '#7fd41d',
			'product_cart_button_bg': '#1b1a1b',
			'product_cart_button_color': '#ffffff',
			'product_cart_button_border_color': '#1b1a1b',
			'product_cart_button_bg_hover': '#7fd41d',
			'product_cart_button_color_hover': '#ffffff',
			'product_cart_button_border_color_hover': '#7fd41d',
			'product_selected_tab': '#7fd41d',

			'pagination_color': '#7fd41d',
			'account_icon_color': '#7fd41d',
			'scroll_button_bg': '#7fd41d',
			'scroll_button_color': '#ffffff',
			'scroll_button_bg_hover': '#75c11e',
			'scroll_button_color_hover': '#ffffff',

        },


        'color_scheme_at02': {

			...otherButtons,

			'nav_background': '#ffffff',
			'nav_border': '#d6d4d4',
			'top_font_color': '#000000',
			'top_font_color2': '#f8653d',
			'top_icons': '#f8653d',
			'header_background': '#ffffff',
			'search_button': '#f8653d',
			'search_button_color': '#ffffff',
			'search_button_hover': '#f8653d',
			'search_button_color_hover': '#ffffff',
			'search_button_color2': '#000000',
			'search_button_color_hover2': '#000000',
			'cart_background': '#f8653d',
			'cart_color': '#ffffff',
			'cart_background2': '#f8653d',
			'cart_color2': '#000000',
			'sticky_cart_bg1': '#f8653d',
			'sticky_cart_bg2': '#282828',
			'sticky_cart_color': '#ffffff',
			'menu_bg': '#282828',
			'menu_border_color': '#3e3e3e',
			'menu_font_color': '#ffffff',
			'menu_font_color_hover': '#ffffff',
			'menu_li_hover': '#f8653d',
			'submenu_color': '#ffffff',
			'submenu_background': '#f8653d',
			'slider_dot': '#f8653d',
			'feat_title': '#f8653d',
			'feat_cat_title': '#f8653d',
			'feat_button_bg': '#282828',
			'feat_button_color': '#ffffff',
			'feat_button_border_color': '#282828',
			'feat_button_bg_hover': '#f8653d',
			'feat_button_color_hover': '#ffffff',
			'feat_button_border_color_hover': '#f8653d',
			'title_block1': '#f8653d',
			'index_title1': '#f8653d',
			'new_label': '#00b0ff',
			'discount_label': '#ff0000',
			'product_name_color': '#000000',
			'price_color_index': '#f8653d',
			'pl_cart_bg': '#282828',
			'pl_cart_color': '#ffffff',
			'pl_cart_button_border_color': '#282828',
			'pl_cart_bg_hover': '#f8653d',
			'pl_cart_color_hover': '#ffffff',
			'pl_cart_button_border_color_hover': '#f8653d',
			'catprod_title': '#f8653d',
			'featman_title': '#f8653d',
			'footer_cms_icons': '#f8653d',
			'footer_background': '#282828',
			'footer_border': '#3e3e3e',
			'footer_border_header': '#f8653d',
			'footer_font_color': '#ffffff',
			'footer2_background': '#282828',
			'footer2_border': '#3e3e3e',
			'footer2_font_color': '#ffffff',
			'newsletter_button': '#f8653d',
			'newsletter_color': '#ffffff',
			'newsletter_button_hover': '#f8653d',
			'newsletter_color_hover': '#ffffff',
			'price_color_product': '#f8653d',
			'product_cart_button_bg': '#282828',
			'product_cart_button_color': '#ffffff',
			'product_cart_button_border_color': '#282828',
			'product_cart_button_bg_hover': '#f8653d',
			'product_cart_button_color_hover': '#ffffff',
			'product_cart_button_border_color_hover': '#f8653d',
			'product_selected_tab': '#f8653d',

			'pagination_color': '#f8653d',
			'account_icon_color': '#f8653d',
			'scroll_button_bg': '#f8653d',
			'scroll_button_color': '#ffffff',
			'scroll_button_bg_hover': '#282828',
			'scroll_button_color_hover': '#ffffff',

        },


        'color_scheme_at03': {

			...otherButtons,

			'nav_background': '#f9f9f9',
			'nav_border': '#d6d4d4',
			'top_font_color': '#000000',
			'top_font_color2': '#009ad0',
			'top_icons': '#009ad0',
			'header_background': '#ffffff',
			'search_button': '#009ad0',
			'search_button_color': '#ffffff',
			'search_button_hover': '#009ad0',
			'search_button_color_hover': '#ffffff',
			'search_button_color2': '#000000',
			'search_button_color_hover2': '#000000',
			'cart_background': '#009ad0',
			'cart_color': '#ffffff',
			'cart_background2': '#009ad0',
			'cart_color2': '#000000',
			'sticky_cart_bg1': '#009ad0',
			'sticky_cart_bg2': '#f8653d',
			'sticky_cart_color': '#ffffff',
			'menu_bg': '#009ad0',
			'menu_border_color': '#008bbb',
			'menu_font_color': '#ffffff',
			'menu_font_color_hover': '#ffffff',
			'menu_li_hover': '#008bbb',
			'submenu_color': '#ffffff',
			'submenu_background': '#009ad0',
			'slider_dot': '#009ad0',
			'feat_title': '#009ad0',
			'feat_cat_title': '#009ad0',
			'feat_button_bg': '#009ad0',
			'feat_button_color': '#ffffff',
			'feat_button_border_color': '#009ad0',
			'feat_button_bg_hover': '#282828',
			'feat_button_color_hover': '#ffffff',
			'feat_button_border_color_hover': '#282828',
			'title_block1': '#009ad0',
			'index_title1': '#009ad0',
			'new_label': '#00b0ff',
			'discount_label': '#ff0000',
			'product_name_color': '#292929',
			'price_color_index': '#009ad0',
			'pl_cart_bg': '#009ad0',
			'pl_cart_color': '#ffffff',
			'pl_cart_button_border_color': '#009ad0',
			'pl_cart_bg_hover': '#282828',
			'pl_cart_color_hover': '#ffffff',
			'pl_cart_button_border_color_hover': '#282828',
			'catprod_title': '#009ad0',
			'featman_title': '#009ad0',
			'footer_cms_icons': '#009ad0',
			'footer_background': '#f9f9f9',
			'footer_border': '#dadada',
			'footer_border_header': '#009ad0',
			'footer_font_color': '#282828',
			'footer2_background': '#f9f9f9',
			'footer2_border': '#dadada',
			'footer2_font_color': '#282828',
			'newsletter_button': '#009ad0',
			'newsletter_color': '#ffffff',
			'newsletter_button_hover': '#f9f9f9',
			'newsletter_color_hover': '#ffffff',
			'price_color_product': '#009ad0',
			'product_cart_button_bg': '#009ad0',
			'product_cart_button_color': '#ffffff',
			'product_cart_button_border_color': '#009ad0',
			'product_cart_button_bg_hover': '#282828',
			'product_cart_button_color_hover': '#ffffff',
			'product_cart_button_border_color_hover': '#282828',
			'product_selected_tab': '#009ad0',

			'pagination_color': '#009ad0',
			'account_icon_color': '#009ad0',
			'scroll_button_bg': '#009ad0',
			'scroll_button_color': '#ffffff',
			'scroll_button_bg_hover': '#1b1a1b',
			'scroll_button_color_hover': '#ffffff',

        },


        'color_scheme_at04': {

			...otherButtons,

			'nav_background': '#000000',
			'nav_border': '#383838',
			'top_font_color': '#ffffff',
			'top_font_color2': '#e31d27',
			'top_icons': '#e31d27',
			'header_background': '#1b1a1b',
			'search_button': '#e31d27',
			'search_button_color': '#ffffff',
			'search_button_hover': '#e31d27',
			'search_button_color_hover': '#ffffff',
			'search_button_color2': '#000000',
			'search_button_color_hover2': '#000000',
			'cart_background': '#e31d27',
			'cart_color': '#ffffff',
			'cart_background2': '#e31d27',
			'cart_color2': '#ffffff',
			'sticky_cart_bg1': '#e31d27',
			'sticky_cart_bg2': '#f8653d',
			'sticky_cart_color': '#ffffff',
			'menu_bg': '#ffffff',
			'menu_border_color': '#e6e6e6',
			'menu_font_color': '#000000',
			'menu_font_color_hover': '#ffffff',
			'menu_li_hover': '#e31d27',
			'submenu_color': '#ffffff',
			'submenu_background': '#e31d27',
			'slider_dot': '#e31d27',
			'feat_title': '#e31d27',
			'feat_cat_title': '#e31d27',
			'feat_button_bg': '#141414',
			'feat_button_color': '#ffffff',
			'feat_button_border_color': '#141414',
			'feat_button_bg_hover': '#e31d27',
			'feat_button_color_hover': '#ffffff',
			'feat_button_border_color_hover': '#e31d27',
			'title_block1': '#e31d27',
			'index_title1': '#e31d27',
			'new_label': '#1b1a1b',
			'discount_label': '#ff0000',
			'product_name_color': '#292929',
			'price_color_index': '#e31d27',
			'pl_cart_bg': '#1b1a1b',
			'pl_cart_color': '#ffffff',
			'pl_cart_button_border_color': '#1b1a1b',
			'pl_cart_bg_hover': '#e31d27',
			'pl_cart_color_hover': '#ffffff',
			'pl_cart_button_border_color_hover': '#e31d27',
			'catprod_title': '#e31d27',
			'featman_title': '#e31d27',
			'footer_cms_icons': '#e31d27',
			'footer_background': '#1b1a1b',
			'footer_border': '#383838',
			'footer_border_header': '#e31d27',
			'footer_font_color': '#ffffff',
			'footer2_background': '#000000',
			'footer2_border': '#383838',
			'footer2_font_color': '#ffffff',
			'newsletter_button': '#e31d27',
			'newsletter_color': '#ffffff',
			'newsletter_button_hover': '#e31d27',
			'newsletter_color_hover': '#ffffff',
			'price_color_product': '#e31d27',
			'product_cart_button_bg': '#000000',
			'product_cart_button_color': '#ffffff',
			'product_cart_button_border_color': '#000000',
			'product_cart_button_bg_hover': '#e31d27',
			'product_cart_button_color_hover': '#ffffff',
			'product_cart_button_border_color_hover': '#e31d27',
			'product_selected_tab': '#e31d27',

			'pagination_color': '#e31d27',
			'account_icon_color': '#e31d27',
			'scroll_button_bg': '#e31d27',
			'scroll_button_color': '#ffffff',
			'scroll_button_bg_hover': '#1b1a1b',
			'scroll_button_color_hover': '#ffffff',

        },


        'color_scheme_at05': {

			...otherButtons,

			'nav_background': '#f7f7f7',
			'nav_border': '#ebebeb',
			'top_font_color': '#000000',
			'top_font_color2': '#79cb67',
			'top_icons': '#79cb67',
			'header_background': '#ffffff',
			'search_button': '#79cb67',
			'search_button_color': '#ffffff',
			'search_button_hover': '#79cb67',
			'search_button_color_hover': '#ffffff',
			'search_button_color2': '#000000',
			'search_button_color_hover2': '#000000',
			'cart_background': '#79cb67',
			'cart_color': '#ffffff',
			'cart_background2': '#79cb67',
			'cart_color2': '#000000',
			'sticky_cart_bg1': '#79cb67',
			'sticky_cart_bg2': '#f8653d',
			'sticky_cart_color': '#ffffff',
			'menu_bg': '#1b1a1b',
			'menu_border_color': '#282329',
			'menu_font_color': '#ffffff',
			'menu_font_color_hover': '#ffffff',
			'menu_li_hover': '#79cb67',
			'submenu_color': '#ffffff',
			'submenu_background': '#79cb67',
			'slider_dot': '#79cb67',
			'feat_title': '#79cb67',
			'feat_cat_title': '#79cb67',
			'feat_button_bg': '#79cb67',
			'feat_button_color': '#ffffff',
			'feat_button_border_color': '#79cb67',
			'feat_button_bg_hover': '#1b1a1b',
			'feat_button_color_hover': '#ffffff',
			'feat_button_border_color_hover': '#1b1a1b',
			'title_block1': '#79cb67',
			'index_title1': '#79cb67',
			'new_label': '#79cb67',
			'discount_label': '#ff0000',
			'product_name_color': '#000000',
			'price_color_index': '#79cb67',
			'pl_cart_bg': '#ffffff',
			'pl_cart_color': '#000000',
			'pl_cart_button_border_color': '#cbcbcb',
			'pl_cart_bg_hover': '#79cb67',
			'pl_cart_color_hover': '#ffffff',
			'pl_cart_button_border_color_hover': '#79cb67',
			'catprod_title': '#79cb67',
			'featman_title': '#79cb67',
			'footer_cms_icons': '#79cb67',
			'footer_background': '#1b1a1b',
			'footer_border': '#282329',
			'footer_border_header': '#79cb67',
			'footer_font_color': '#ffffff',
			'footer2_background': '#000000',
			'footer2_border': '#282329',
			'footer2_font_color': '#ffffff',
			'newsletter_button': '#79cb67',
			'newsletter_color': '#ffffff',
			'newsletter_button_hover': '#79cb67',
			'newsletter_color_hover': '#ffffff',
			'price_color_product': '#79cb67',
			'product_cart_button_bg': '#1b1a1b',
			'product_cart_button_color': '#ffffff',
			'product_cart_button_border_color': '#1b1a1b',
			'product_cart_button_bg_hover': '#79cb67',
			'product_cart_button_color_hover': '#ffffff',
			'product_cart_button_border_color_hover': '#79cb67',
			'product_selected_tab': '#79cb67',

			'pagination_color': '#79cb67',
			'account_icon_color': '#79cb67',
			'scroll_button_bg': '#79cb67',
			'scroll_button_color': '#ffffff',
			'scroll_button_bg_hover': '#1b1a1b',
			'scroll_button_color_hover': '#ffffff',

        },


        'color_scheme_at06': {

			...otherButtons,

			'nav_background': '#ffffff',
			'nav_border': '#dedede',
			'top_font_color': '#030303',
			'top_font_color2': '#d50073',
			'top_icons': '#d50073',
			'header_background': '#ffffff',
			'search_button': '#d50073',
			'search_button_color': '#ffffff',
			'search_button_hover': '#d50073',
			'search_button_color_hover': '#ffffff',
			'search_button_color2': '#000000',
			'search_button_color_hover2': '#000000',
			'cart_background': '#d50073',
			'cart_color': '#ffffff',
			'cart_background2': '#d50073',
			'cart_color2': '#000000',
			'sticky_cart_bg1': '#d50073',
			'sticky_cart_bg2': '#f8653d',
			'sticky_cart_color': '#ffffff',
			'menu_bg': '#1b1a1b',
			'menu_border_color': '#313131',
			'menu_font_color': '#ffffff',
			'menu_font_color_hover': '#ffffff',
			'menu_li_hover': '#d50073',
			'submenu_color': '#ffffff',
			'submenu_background': '#d50073',
			'slider_dot': '#d50073',
			'feat_title': '#d50073',
			'feat_cat_title': '#d50073',
			'feat_button_bg': '#d50073',
			'feat_button_color': '#ffffff',
			'feat_button_border_color': '#d50073',
			'feat_button_bg_hover': '#1b1a1b',
			'feat_button_color_hover': '#ffffff',
			'feat_button_border_color_hover': '#1b1a1b',
			'title_block1': '#d50073',
			'index_title1': '#d50073',
			'new_label': '#d50073',
			'discount_label': '#ff0000',
			'product_name_color': '#000000',
			'price_color_index': '#d50073',
			'pl_cart_bg': '#ffffff',
			'pl_cart_color': '#000000',
			'pl_cart_button_border_color': '#d4d4d4',
			'pl_cart_bg_hover': '#d50073',
			'pl_cart_color_hover': '#ffffff',
			'pl_cart_button_border_color_hover': '#d50073',
			'catprod_title': '#d50073',
			'featman_title': '#d50073',
			'footer_cms_icons': '#d50073',
			'footer_background': '#f5f5f5',
			'footer_border': '#dedede',
			'footer_border_header': '#d50073',
			'footer_font_color': '#000000',
			'footer2_background': '#ffffff',
			'footer2_border': '#dedede',
			'footer2_font_color': '#000000',
			'newsletter_button': '#d50073',
			'newsletter_color': '#ffffff',
			'newsletter_button_hover': '#1b1a1b',
			'newsletter_color_hover': '#ffffff',
			'price_color_product': '#d50073',
			'product_cart_button_bg': '#1b1a1b',
			'product_cart_button_color': '#ffffff',
			'product_cart_button_border_color': '#1b1a1b',
			'product_cart_button_bg_hover': '#d50073',
			'product_cart_button_color_hover': '#ffffff',
			'product_cart_button_border_color_hover': '#d50073',
			'product_selected_tab': '#d50073',

			'pagination_color': '#d50073',
			'account_icon_color': '#d50073',
			'scroll_button_bg': '#d50073',
			'scroll_button_color': '#ffffff',
			'scroll_button_bg_hover': '#1b1a1b',
			'scroll_button_color_hover': '#ffffff',

        },


        'color_scheme_at07': {

			...otherButtons,

			'nav_background': '#000000',
			'nav_border': '#383838',
			'top_font_color': '#ffffff',
			'top_font_color2': '#7fd41d',
			'top_icons': '#7fd41d',
			'header_background': '#1b1a1b',
			'search_button': '#7fd41d',
			'search_button_color': '#ffffff',
			'search_button_hover': '#7fd41d',
			'search_button_color_hover': '#ffffff',
			'search_button_color2': '#000000',
			'search_button_color_hover2': '#000000',
			'cart_background': '#7fd41d',
			'cart_color': '#ffffff',
			'cart_background2': '#7fd41d',
			'cart_color2': '#ffffff',
			'sticky_cart_bg1': '#7fd41d',
			'sticky_cart_bg2': '#f8653d',
			'sticky_cart_color': '#ffffff',
			'menu_bg': '#ffffff',
			'menu_border_color': '#e6e6e6',
			'menu_font_color': '#000000',
			'menu_font_color_hover': '#ffffff',
			'menu_li_hover': '#7fd41d',
			'submenu_color': '#ffffff',
			'submenu_background': '#7fd41d',
			'slider_dot': '#7fd41d',
			'feat_title': '#7fd41d',
			'feat_cat_title': '#7fd41d',
			'feat_button_bg': '#1b1a1b',
			'feat_button_color': '#ffffff',
			'feat_button_border_color': '#1b1a1b',
			'feat_button_bg_hover': '#7fd41d',
			'feat_button_color_hover': '#ffffff',
			'feat_button_border_color_hover': '#7fd41d',
			'title_block1': '#7fd41d',
			'index_title1': '#7fd41d',
			'new_label': '#00b0ff',
			'discount_label': '#ff0000',
			'product_name_color': '#000000',
			'price_color_index': '#7fd41d',
			'pl_cart_bg': '#1b1a1b',
			'pl_cart_color': '#ffffff',
			'pl_cart_button_border_color': '#1b1a1b',
			'pl_cart_bg_hover': '#7fd41d',
			'pl_cart_color_hover': '#ffffff',
			'pl_cart_button_border_color_hover': '#7fd41d',
			'catprod_title': '#7fd41d',
			'featman_title': '#7fd41d',
			'footer_cms_icons': '#7fd41d',
			'footer_background': '#1b1a1b',
			'footer_border': '#383838',
			'footer_border_header': '#7fd41d',
			'footer_font_color': '#ffffff',
			'footer2_background': '#000000',
			'footer2_border': '#383838',
			'footer2_font_color': '#ffffff',
			'newsletter_button': '#7fd41d',
			'newsletter_color': '#ffffff',
			'newsletter_button_hover': '#7fd41d',
			'newsletter_color_hover': '#ffffff',
			'price_color_product': '#7fd41d',
			'product_cart_button_bg': '#1b1a1b',
			'product_cart_button_color': '#ffffff',
			'product_cart_button_border_color': '#1b1a1b',
			'product_cart_button_bg_hover': '#7fd41d',
			'product_cart_button_color_hover': '#ffffff',
			'product_cart_button_border_color_hover': '#7fd41d',
			'product_selected_tab': '#7fd41d',

			'pagination_color': '#7fd41d',
			'account_icon_color': '#7fd41d',
			'scroll_button_bg': '#7fd41d',
			'scroll_button_color': '#ffffff',
			'scroll_button_bg_hover': '#75c11e',
			'scroll_button_color_hover': '#ffffff',

        },


        'color_scheme_at08': {

			...otherButtons,

			'nav_background': '#ffffff',
			'nav_border': '#dedede',
			'top_font_color': '#000000',
			'top_font_color2': '#ec008c',
			'top_icons': '#ec008c',
			'header_background': '#ffffff',
			'search_button': '#ec008c',
			'search_button_color': '#ffffff',
			'search_button_hover': '#ec008c',
			'search_button_color_hover': '#ffffff',
			'search_button_color2': '#000000',
			'search_button_color_hover2': '#000000',
			'cart_background': '#ec008c',
			'cart_color': '#ffffff',
			'cart_background2': '#ec008c',
			'cart_color2': '#000000',
			'sticky_cart_bg1': '#ec008c',
			'sticky_cart_bg2': '#f8653d',
			'sticky_cart_color': '#ffffff',
			'menu_bg': '#1b1a1b',
			'menu_border_color': '#383838',
			'menu_font_color': '#ffffff',
			'menu_font_color_hover': '#ffffff',
			'menu_li_hover': '#ec008c',
			'submenu_color': '#ffffff',
			'submenu_background': '#ec008c',
			'slider_dot': '#ec008c',
			'feat_title': '#ec008c',
			'feat_cat_title': '#ec008c',
			'feat_button_bg': '#1b1a1b',
			'feat_button_color': '#ffffff',
			'feat_button_border_color': '#1b1a1b',
			'feat_button_bg_hover': '#ec008c',
			'feat_button_color_hover': '#ffffff',
			'feat_button_border_color_hover': '#ec008c',
			'title_block1': '#ec008c',
			'index_title1': '#ec008c',
			'new_label': '#00b0ff',
			'discount_label': '#ff0000',
			'product_name_color': '#000000',
			'price_color_index': '#ec008c',
			'pl_cart_bg': '#1b1a1b',
			'pl_cart_color': '#ffffff',
			'pl_cart_button_border_color': '#1b1a1b',
			'pl_cart_bg_hover': '#ec008c',
			'pl_cart_color_hover': '#ffffff',
			'pl_cart_button_border_color_hover': '#ec008c',
			'catprod_title': '#ec008c',
			'featman_title': '#ec008c',
			'footer_cms_icons': '#ec008c',
			'footer_background': '#1b1a1b',
			'footer_border': '#383838',
			'footer_border_header': '#ec008c',
			'footer_font_color': '#ffffff',
			'footer2_background': '#000000',
			'footer2_border': '#383838',
			'footer2_font_color': '#ffffff',
			'newsletter_button': '#ec008c',
			'newsletter_color': '#ffffff',
			'newsletter_button_hover': '#ec008c',
			'newsletter_color_hover': '#ffffff',
			'price_color_product': '#ec008c',
			'product_cart_button_bg': '#1b1a1b',
			'product_cart_button_color': '#ffffff',
			'product_cart_button_border_color': '#1b1a1b',
			'product_cart_button_bg_hover': '#ec008c',
			'product_cart_button_color_hover': '#ffffff',
			'product_cart_button_border_color_hover': '#ec008c',
			'product_selected_tab': '#ec008c',

			'pagination_color': '#ec008c',
			'account_icon_color': '#ec008c',
			'scroll_button_bg': '#ec008c',
			'scroll_button_color': '#ffffff',
			'scroll_button_bg_hover': '#1b1a1b',
			'scroll_button_color_hover': '#ffffff',

        },


        'color_scheme_at09': {

			...otherButtons,

			'nav_background': '#f6f6f6',
			'nav_border': '#d6d4d4',
			'top_font_color': '#000000',
			'top_font_color2': '#1b82d6',
			'top_icons': '#1b82d6',
			'header_background': '#ffffff',
			'search_button': '#1b82d6',
			'search_button_color': '#ffffff',
			'search_button_hover': '#1b82d6',
			'search_button_color_hover': '#ffffff',
			'search_button_color2': '#000000',
			'search_button_color_hover2': '#000000',
			'cart_background': '#1b82d6',
			'cart_color': '#ffffff',
			'cart_background2': '#1b82d6',
			'cart_color2': '#000000',
			'sticky_cart_bg1': '#1b82d6',
			'sticky_cart_bg2': '#f8653d',
			'sticky_cart_color': '#ffffff',
			'menu_bg': '#1b82d6',
			'menu_border_color': '#1276c7',
			'menu_font_color': '#ffffff',
			'menu_font_color_hover': '#ffffff',
			'menu_li_hover': '#1b1a1b',
			'submenu_color': '#ffffff',
			'submenu_background': '#1b1a1b',
			'slider_dot': '#1b82d6',
			'feat_title': '#1b82d6',
			'feat_cat_title': '#1b82d6',
			'feat_button_bg': '#1b82d6',
			'feat_button_color': '#ffffff',
			'feat_button_border_color': '#1b82d6',
			'feat_button_bg_hover': '#1b1a1b',
			'feat_button_color_hover': '#ffffff',
			'feat_button_border_color_hover': '#1b1a1b',
			'title_block1': '#1b82d6',
			'index_title1': '#1b82d6',
			'new_label': '#1b82d6',
			'discount_label': '#ff0000',
			'product_name_color': '#282828',
			'price_color_index': '#ff5722',
			'pl_cart_bg': '#1b82d6',
			'pl_cart_color': '#ffffff',
			'pl_cart_button_border_color': '#1b82d6',
			'pl_cart_bg_hover': '#1b1a1b',
			'pl_cart_color_hover': '#ffffff',
			'pl_cart_button_border_color_hover': '#1b1a1b',
			'catprod_title': '#1b82d6',
			'featman_title': '#1b82d6',
			'footer_cms_icons': '#1b82d6',
			'footer_background': '#f6f6f6',
			'footer_border': '#dddddd',
			'footer_border_header': '#1b82d6',
			'footer_font_color': '#000000',
			'footer2_background': '#f6f6f6',
			'footer2_border': '#dddddd',
			'footer2_font_color': '#000000',
			'newsletter_button': '#1b82d6',
			'newsletter_color': '#ffffff',
			'newsletter_button_hover': '#1b1a1b',
			'newsletter_color_hover': '#ffffff',
			'price_color_product': '#1b82d6',
			'product_cart_button_bg': '#1b1a1b',
			'product_cart_button_color': '#ffffff',
			'product_cart_button_border_color': '#1b1a1b',
			'product_cart_button_bg_hover': '#1b82d6',
			'product_cart_button_color_hover': '#ffffff',
			'product_cart_button_border_color_hover': '#1b82d6',
			'product_selected_tab': '#1b82d6',

			'pagination_color': '#1b82d6',
			'account_icon_color': '#1b82d6',
			'scroll_button_bg': '#1b82d6',
			'scroll_button_color': '#ffffff',
			'scroll_button_bg_hover': '#1b1a1b',
			'scroll_button_color_hover': '#ffffff',

        },


        'color_scheme_at10': {

			...otherButtons,

			'nav_background': '#ffffff',
			'nav_border': '#d6d4d4',
			'top_font_color': '#000000',
			'top_font_color2': '#ff544d',
			'top_icons': '#ff544d',
			'header_background': '#ffffff',
			'search_button': '#ff544d',
			'search_button_color': '#ffffff',
			'search_button_hover': '#ff544d',
			'search_button_color_hover': '#ffffff',
			'search_button_color2': '#000000',
			'search_button_color_hover2': '#000000',
			'cart_background': '#ff544d',
			'cart_color': '#ffffff',
			'cart_background2': '#ff544d',
			'cart_color2': '#000000',
			'sticky_cart_bg1': '#ff544d',
			'sticky_cart_bg2': '#f8653d',
			'sticky_cart_color': '#ffffff',
			'menu_bg': '#1b1a1b',
			'menu_border_color': '#363636',
			'menu_font_color': '#ffffff',
			'menu_font_color_hover': '#ffffff',
			'menu_li_hover': '#ff544d',
			'submenu_color': '#ffffff',
			'submenu_background': '#ff544d',
			'slider_dot': '#ff544d',
			'feat_title': '#ff544d',
			'feat_cat_title': '#ff544d',
			'feat_button_bg': '#181818',
			'feat_button_color': '#ffffff',
			'feat_button_border_color': '#181818',
			'feat_button_bg_hover': '#ff544d',
			'feat_button_color_hover': '#ffffff',
			'feat_button_border_color_hover': '#ff544d',
			'title_block1': '#ff544d',
			'index_title1': '#ff544d',
			'new_label': '#00b0ff',
			'discount_label': '#ff0000',
			'product_name_color': '#282828',
			'price_color_index': '#ff544d',
			'pl_cart_bg': '#181818',
			'pl_cart_color': '#ffffff',
			'pl_cart_button_border_color': '#181818',
			'pl_cart_bg_hover': '#ff544d',
			'pl_cart_color_hover': '#ffffff',
			'pl_cart_button_border_color_hover': '#ff544d',
			'catprod_title': '#ff544d',
			'featman_title': '#ff544d',
			'footer_cms_icons': '#ff544d',
			'footer_background': '#f6f6f6',
			'footer_border': '#dddddd',
			'footer_border_header': '#ff544d',
			'footer_font_color': '#000000',
			'footer2_background': '#f6f6f6',
			'footer2_border': '#dddddd',
			'footer2_font_color': '#000000',
			'newsletter_button': '#ff544d',
			'newsletter_color': '#ffffff',
			'newsletter_button_hover': '#181818',
			'newsletter_color_hover': '#ffffff',
			'price_color_product': '#ff544d',
			'product_cart_button_bg': '#181818',
			'product_cart_button_color': '#ffffff',
			'product_cart_button_border_color': '#181818',
			'product_cart_button_bg_hover': '#ff544d',
			'product_cart_button_color_hover': '#ffffff',
			'product_cart_button_border_color_hover': '#ff544d',
			'product_selected_tab': '#ff544d',

			'pagination_color': '#ff544d',
			'account_icon_color': '#ff544d',
			'scroll_button_bg': '#ff544d',
			'scroll_button_color': '#ffffff',
			'scroll_button_bg_hover': '#1b1a1b',
			'scroll_button_color_hover': '#ffffff',

        },


        'color_scheme_at11': {

			...otherButtons,

			'nav_background': '#ffffff',
			'nav_border': '#d6d4d4',
			'top_font_color': '#000000',
			'top_font_color2': '#e31d27',
			'top_icons': '#e31d27',
			'header_background': '#ffffff',
			'search_button': '#e31d27',
			'search_button_color': '#ffffff',
			'search_button_hover': '#e31d27',
			'search_button_color_hover': '#ffffff',
			'search_button_color2': '#000000',
			'search_button_color_hover2': '#000000',
			'cart_background': '#e31d27',
			'cart_color': '#ffffff',
			'cart_background2': '#e31d27',
			'cart_color2': '#000000',
			'sticky_cart_bg1': '#e31d27',
			'sticky_cart_bg2': '#f8653d',
			'sticky_cart_color': '#ffffff',
			'menu_bg': '#141414',
			'menu_border_color': '#2b292b',
			'menu_font_color': '#ffffff',
			'menu_font_color_hover': '#ffffff',
			'menu_li_hover': '#e31d27',
			'submenu_color': '#ffffff',
			'submenu_background': '#e31d27',
			'slider_dot': '#e31d27',
			'feat_title': '#e31d27',
			'feat_cat_title': '#e31d27',
			'feat_button_bg': '#141414',
			'feat_button_color': '#ffffff',
			'feat_button_border_color': '#141414',
			'feat_button_bg_hover': '#e31d27',
			'feat_button_color_hover': '#ffffff',
			'feat_button_border_color_hover': '#e31d27',
			'title_block1': '#e31d27',
			'index_title1': '#e31d27',
			'new_label': '#141414',
			'discount_label': '#ff0000',
			'product_name_color': '#282828',
			'price_color_index': '#e31d27',
			'pl_cart_bg': '#141414',
			'pl_cart_color': '#ffffff',
			'pl_cart_button_border_color': '#141414',
			'pl_cart_bg_hover': '#e31d27',
			'pl_cart_color_hover': '#ffffff',
			'pl_cart_button_border_color_hover': '#e31d27',
			'catprod_title': '#e31d27',
			'featman_title': '#e31d27',
			'footer_cms_icons': '#e31d27',
			'footer_background': '#141414',
			'footer_border': '#292929',
			'footer_border_header': '#e31d27',
			'footer_font_color': '#ffffff',
			'footer2_background': '#000000',
			'footer2_border': '#222222',
			'footer2_font_color': '#ffffff',
			'newsletter_button': '#e31d27',
			'newsletter_color': '#ffffff',
			'newsletter_button_hover': '#e31d27',
			'newsletter_color_hover': '#ffffff',
			'price_color_product': '#e31d27',
			'product_cart_button_bg': '#e31d27',
			'product_cart_button_color': '#ffffff',
			'product_cart_button_border_color': '#e31d27',
			'product_cart_button_bg_hover': '#141414',
			'product_cart_button_color_hover': '#ffffff',
			'product_cart_button_border_color_hover': '#141414',
			'product_selected_tab': '#e31d27',

			'pagination_color': '#e31d27',
			'account_icon_color': '#e31d27',
			'scroll_button_bg': '#e31d27',
			'scroll_button_color': '#ffffff',
			'scroll_button_bg_hover': '#1b1a1b',
			'scroll_button_color_hover': '#ffffff',

        },


        'color_scheme_at12': {

			...otherButtons,

			'nav_background': '#f6f6f6',
			'nav_border': '#d6d4d4',
			'top_font_color': '#000000',
			'top_font_color2': '#222222',
			'top_icons': '#222222',
			'header_background': '#ffffff',
			'search_button': '#ffcf00',
			'search_button_color': '#222222',
			'search_button_hover': '#ffcf00',
			'search_button_color_hover': '#222222',
			'search_button_color2': '#222222',
			'search_button_color_hover2': '#222222',
			'cart_background': '#ffcf00',
			'cart_color': '#222222',
			'cart_background2': '#ffcf00',
			'cart_color2': '#000000',
			'sticky_cart_bg1': '#ffcf00',
			'sticky_cart_bg2': '#f8653d',
			'sticky_cart_color': '#ffffff',
			'menu_bg': '#222222',
			'menu_border_color': '#363636',
			'menu_font_color': '#ffffff',
			'menu_font_color_hover': '#222222',
			'menu_li_hover': '#ffcf00',
			'submenu_color': '#222222',
			'submenu_background': '#ffcf00',
			'slider_dot': '#ffcf00',
			'feat_title': '#222222',
			'feat_cat_title': '#222222',
			'feat_button_bg': '#ffcf00',
			'feat_button_color': '#222222',
			'feat_button_border_color': '#ffcf00',
			'feat_button_bg_hover': '#222222',
			'feat_button_color_hover': '#ffffff',
			'feat_button_border_color_hover': '#222222',
			'title_block1': '#222222',
			'index_title1': '#222222',
			'new_label': '#ffcf00',
			'discount_label': '#ff0000',
			'product_name_color': '#282828',
			'price_color_index': '#ee0000',
			'pl_cart_bg': '#ffcf00',
			'pl_cart_color': '#000000',
			'pl_cart_button_border_color': '#ffcf00',
			'pl_cart_bg_hover': '#222222',
			'pl_cart_color_hover': '#ffffff',
			'pl_cart_button_border_color_hover': '#222222',
			'catprod_title': '#222222',
			'featman_title': '#222222',
			'footer_cms_icons': '#ffcf00',
			'footer_background': '#222222',
			'footer_border': '#363636',
			'footer_border_header': '#ffcf00',
			'footer_font_color': '#ffffff',
			'footer2_background': '#222222',
			'footer2_border': '#363636',
			'footer2_font_color': '#ffffff',
			'newsletter_button': '#ffcf00',
			'newsletter_color': '#222222',
			'newsletter_button_hover': '#ffcf00',
			'newsletter_color_hover': '#222222',
			'price_color_product': '#ee0000',
			'product_cart_button_bg': '#222222',
			'product_cart_button_color': '#ffffff',
			'product_cart_button_border_color': '#222222',
			'product_cart_button_bg_hover': '#282828',
			'product_cart_button_color_hover': '#ffffff',
			'product_cart_button_border_color_hover': '#282828',
			'product_selected_tab': '#222222',

			'pagination_color': '#ffcf00',
			'account_icon_color': '#222222',
			'scroll_button_bg': '#ffcf00',
			'scroll_button_color': '#222222',
			'scroll_button_bg_hover': '#222222',
			'scroll_button_color_hover': '#ffffff',

        },


        'color_scheme_at13': {

			...otherButtons,

			'nav_background': '#ffffff',
			'nav_border': '#d6d4d4',
			'top_font_color': '#000000',
			'top_font_color2': '#1bbc9b',
			'top_icons': '#1bbc9b',
			'header_background': '#ffffff',
			'search_button': '#1bbc9b',
			'search_button_color': '#ffffff',
			'search_button_hover': '#1bbc9b',
			'search_button_color_hover': '#ffffff',
			'search_button_color2': '#000000',
			'search_button_color_hover2': '#000000',
			'cart_background': '#1bbc9b',
			'cart_color': '#ffffff',
			'cart_background2': '#1bbc9b',
			'cart_color2': '#000000',
			'sticky_cart_bg1': '#1bbc9b',
			'sticky_cart_bg2': '#f8653d',
			'sticky_cart_color': '#ffffff',
			'menu_bg': '#1b1a1b',
			'menu_border_color': '#363636',
			'menu_font_color': '#ffffff',
			'menu_font_color_hover': '#ffffff',
			'menu_li_hover': '#1bbc9b',
			'submenu_color': '#ffffff',
			'submenu_background': '#1bbc9b',
			'slider_dot': '#1bbc9b',
			'feat_title': '#1bbc9b',
			'feat_cat_title': '#1bbc9b',
			'feat_button_bg': '#1bbc9b',
			'feat_button_color': '#ffffff',
			'feat_button_border_color': '#1bbc9b',
			'feat_button_bg_hover': '#1b1a1b',
			'feat_button_color_hover': '#ffffff',
			'feat_button_border_color_hover': '#1b1a1b',
			'title_block1': '#1bbc9b',
			'index_title1': '#1bbc9b',
			'new_label': '#1bbc9b',
			'discount_label': '#ff0000',
			'product_name_color': '#282828',
			'price_color_index': '#ff5722',
			'pl_cart_bg': '#1bbc9b',
			'pl_cart_color': '#ffffff',
			'pl_cart_button_border_color': '#1bbc9b',
			'pl_cart_bg_hover': '#1b1a1b',
			'pl_cart_color_hover': '#ffffff',
			'pl_cart_button_border_color_hover': '#1b1a1b',
			'catprod_title': '#1bbc9b',
			'featman_title': '#1bbc9b',
			'footer_cms_icons': '#1bbc9b',
			'footer_background': '#f6f6f6',
			'footer_border': '#dddddd',
			'footer_border_header': '#1bbc9b',
			'footer_font_color': '#000000',
			'footer2_background': '#f6f6f6',
			'footer2_border': '#dddddd',
			'footer2_font_color': '#000000',
			'newsletter_button': '#1bbc9b',
			'newsletter_color': '#ffffff',
			'newsletter_button_hover': '#1b1a1b',
			'newsletter_color_hover': '#ffffff',
			'price_color_product': '#ff5722',
			'product_cart_button_bg': '#282828',
			'product_cart_button_color': '#ffffff',
			'product_cart_button_border_color': '#282828',
			'product_cart_button_bg_hover': '#1bbc9b',
			'product_cart_button_color_hover': '#ffffff',
			'product_cart_button_border_color_hover': '#1bbc9b',
			'product_selected_tab': '#1bbc9b',

			'pagination_color': '#1bbc9b',
			'account_icon_color': '#1bbc9b',
			'scroll_button_bg': '#1bbc9b',
			'scroll_button_color': '#ffffff',
			'scroll_button_bg_hover': '#1b1a1b',
			'scroll_button_color_hover': '#ffffff',

        },


        'color_scheme_at14': {

			...otherButtons,

			'nav_background': '#ffffff',
			'nav_border': '#d6d4d4',
			'top_font_color': '#000000',
			'top_font_color2': '#83c127',
			'top_icons': '#83c127',
			'header_background': '#ffffff',
			'search_button': '#83c127',
			'search_button_color': '#ffffff',
			'search_button_hover': '#83c127',
			'search_button_color_hover': '#ffffff',
			'search_button_color2': '#000000',
			'search_button_color_hover2': '#000000',
			'cart_background': '#83c127',
			'cart_color': '#ffffff',
			'cart_background2': '#83c127',
			'cart_color2': '#000000',
			'sticky_cart_bg1': '#83c127',
			'sticky_cart_bg2': '#f8653d',
			'sticky_cart_color': '#ffffff',
			'menu_bg': '#1b1a1b',
			'menu_border_color': '#363636',
			'menu_font_color': '#ffffff',
			'menu_font_color_hover': '#ffffff',
			'menu_li_hover': '#83c127',
			'submenu_color': '#ffffff',
			'submenu_background': '#83c127',
			'slider_dot': '#83c127',
			'feat_title': '#83c127',
			'feat_cat_title': '#83c127',
			'feat_button_bg': '#83c127',
			'feat_button_color': '#ffffff',
			'feat_button_border_color': '#83c127',
			'feat_button_bg_hover': '#1b1a1b',
			'feat_button_color_hover': '#ffffff',
			'feat_button_border_color_hover': '#1b1a1b',
			'title_block1': '#83c127',
			'index_title1': '#83c127',
			'new_label': '#83c127',
			'discount_label': '#ff0000',
			'product_name_color': '#282828',
			'price_color_index': '#ff5722',
			'pl_cart_bg': '#ffffff',
			'pl_cart_color': '#1b1b1b',
			'pl_cart_button_border_color': '#d6d4d4',
			'pl_cart_bg_hover': '#83c127',
			'pl_cart_color_hover': '#ffffff',
			'pl_cart_button_border_color_hover': '#83c127',
			'catprod_title': '#83c127',
			'featman_title': '#83c127',
			'footer_cms_icons': '#83c127',
			'footer_background': '#1b1a1b',
			'footer_border': '#363636',
			'footer_border_header': '#83c127',
			'footer_font_color': '#ffffff',
			'footer2_background': '#1b1a1b',
			'footer2_border': '#363636',
			'footer2_font_color': '#ffffff',
			'newsletter_button': '#83c127',
			'newsletter_color': '#ffffff',
			'newsletter_button_hover': '#83c127',
			'newsletter_color_hover': '#ffffff',
			'price_color_product': '#ff5722',
			'product_cart_button_bg': '#83c127',
			'product_cart_button_color': '#ffffff',
			'product_cart_button_border_color': '#83c127',
			'product_cart_button_bg_hover': '#282828',
			'product_cart_button_color_hover': '#ffffff',
			'product_cart_button_border_color_hover': '#282828',
			'product_selected_tab': '#83c127',

			'pagination_color': '#83c127',
			'account_icon_color': '#83c127',
			'scroll_button_bg': '#83c127',
			'scroll_button_color': '#ffffff',
			'scroll_button_bg_hover': '#1b1a1b',
			'scroll_button_color_hover': '#ffffff',

        },


        'color_scheme_at15': {

			...otherButtons,

			'nav_background': '#ffffff',
			'nav_border': '#d6d4d4',
			'top_font_color': '#000000',
			'top_font_color2': '#1b82d6',
			'top_icons': '#1b82d6',
			'header_background': '#ffffff',
			'search_button': '#1b82d6',
			'search_button_color': '#ffffff',
			'search_button_hover': '#1b82d6',
			'search_button_color_hover': '#ffffff',
			'search_button_color2': '#000000',
			'search_button_color_hover2': '#000000',
			'cart_background': '#1b82d6',
			'cart_color': '#ffffff',
			'cart_background2': '#1b82d6',
			'cart_color2': '#000000',
			'sticky_cart_bg1': '#1b82d6',
			'sticky_cart_bg2': '#f8653d',
			'sticky_cart_color': '#ffffff',
			'menu_bg': '#1b1a1b',
			'menu_border_color': '#363636',
			'menu_font_color': '#ffffff',
			'menu_font_color_hover': '#ffffff',
			'menu_li_hover': '#1b82d6',
			'submenu_color': '#ffffff',
			'submenu_background': '#1b82d6',
			'slider_dot': '#1b82d6',
			'feat_title': '#1b82d6',
			'feat_cat_title': '#1b82d6',
			'feat_button_bg': '#1b82d6',
			'feat_button_color': '#ffffff',
			'feat_button_border_color': '#1b82d6',
			'feat_button_bg_hover': '#1b1a1b',
			'feat_button_color_hover': '#ffffff',
			'feat_button_border_color_hover': '#1b1a1b',
			'title_block1': '#1b82d6',
			'index_title1': '#1b82d6',
			'new_label': '#1b82d6',
			'discount_label': '#ff0000',
			'product_name_color': '#000000',
			'price_color_index': '#ff5722',
			'pl_cart_bg': '#1b82d6',
			'pl_cart_color': '#ffffff',
			'pl_cart_button_border_color': '#1b82d6',
			'pl_cart_bg_hover': '#282828',
			'pl_cart_color_hover': '#ffffff',
			'pl_cart_button_border_color_hover': '#282828',
			'catprod_title': '#1b82d6',
			'featman_title': '#1b82d6',
			'footer_cms_icons': '#1b82d6',
			'footer_background': '#1b1a1b',
			'footer_border': '#363636',
			'footer_border_header': '#1b82d6',
			'footer_font_color': '#ffffff',
			'footer2_background': '#1b1a1b',
			'footer2_border': '#363636',
			'footer2_font_color': '#ffffff',
			'newsletter_button': '#1b82d6',
			'newsletter_color': '#ffffff',
			'newsletter_button_hover': '#1b82d6',
			'newsletter_color_hover': '#ffffff',
			'price_color_product': '#ff5722',
			'product_cart_button_bg': '#1b82d6',
			'product_cart_button_color': '#ffffff',
			'product_cart_button_border_color': '#1b82d6',
			'product_cart_button_bg_hover': '#282828',
			'product_cart_button_color_hover': '#ffffff',
			'product_cart_button_border_color_hover': '#282828',
			'product_selected_tab': '#1b82d6',

			'pagination_color': '#1b82d6',
			'account_icon_color': '#1b82d6',
			'scroll_button_bg': '#1b82d6',
			'scroll_button_color': '#ffffff',
			'scroll_button_bg_hover': '#1b1a1b',
			'scroll_button_color_hover': '#ffffff',

        },


        'color_scheme_at16': {

			...otherButtons,

			'nav_background': '#ffffff',
			'nav_border': '#d6d4d4',
			'top_font_color': '#000000',
			'top_font_color2': '#ff4773',
			'top_icons': '#ff4773',
			'header_background': '#ffffff',
			'search_button': '#ff4773',
			'search_button_color': '#ffffff',
			'search_button_hover': '#ff4773',
			'search_button_color_hover': '#ffffff',
			'search_button_color2': '#000000',
			'search_button_color_hover2': '#ff4773',
			'cart_background': '#ff4773',
			'cart_color': '#ffffff',
			'cart_background2': '#ff4773',
			'cart_color2': '#000000',
			'sticky_cart_bg1': '#ff4773',
			'sticky_cart_bg2': '#f8653d',
			'sticky_cart_color': '#ffffff',
			'menu_bg': '#1b1a1b',
			'menu_border_color': '#363636',
			'menu_font_color': '#ffffff',
			'menu_font_color_hover': '#ffffff',
			'menu_li_hover': '#ff4773',
			'submenu_color': '#ffffff',
			'submenu_background': '#ff4773',
			'slider_dot': '#ff4773',
			'feat_title': '#ff4773',
			'feat_cat_title': '#ff4773',
			'feat_button_bg': '#ffffff',
			'feat_button_color': '#1b1b1b',
			'feat_button_border_color': '#d6d4d4',
			'feat_button_bg_hover': '#ff4773',
			'feat_button_color_hover': '#ffffff',
			'feat_button_border_color_hover': '#ff4773',
			'title_block1': '#ff4773',
			'index_title1': '#ff4773',
			'new_label': '#8cb427',
			'discount_label': '#ff0000',
			'product_name_color': '#282828',
			'price_color_index': '#ff4773',
			'pl_cart_bg': '#ffffff',
			'pl_cart_color': '#1b1b1b',
			'pl_cart_button_border_color': '#d6d4d4',
			'pl_cart_bg_hover': '#ff4773',
			'pl_cart_color_hover': '#ffffff',
			'pl_cart_button_border_color_hover': '#ff4773',
			'catprod_title': '#ff4773',
			'featman_title': '#ff4773',
			'footer_cms_icons': '#ff4773',
			'footer_background': '#1b1a1b',
			'footer_border': '#363636',
			'footer_border_header': '#ff4773',
			'footer_font_color': '#ffffff',
			'footer2_background': '#1b1a1b',
			'footer2_border': '#363636',
			'footer2_font_color': '#ffffff',
			'newsletter_button': '#ff4773',
			'newsletter_color': '#ffffff',
			'newsletter_button_hover': '#ff4773',
			'newsletter_color_hover': '#ffffff',
			'price_color_product': '#ff4773',
			'product_cart_button_bg': '#ff4773',
			'product_cart_button_color': '#ffffff',
			'product_cart_button_border_color': '#ff4773',
			'product_cart_button_bg_hover': '#282828',
			'product_cart_button_color_hover': '#ffffff',
			'product_cart_button_border_color_hover': '#282828',
			'product_selected_tab': '#ff4773',

			'pagination_color': '#ff4773',
			'account_icon_color': '#ff4773',
			'scroll_button_bg': '#ff4773',
			'scroll_button_color': '#ffffff',
			'scroll_button_bg_hover': '#1b1a1b',
			'scroll_button_color_hover': '#ffffff',

        },


        'color_scheme_at17': {

			...otherButtons,

			'nav_background': '#ffffff',
			'nav_border': '#d6d4d4',
			'top_font_color': '#000000',
			'top_font_color2': '#cda85c',
			'top_icons': '#cda85c',
			'header_background': '#ffffff',
			'search_button': '#cda85c',
			'search_button_color': '#ffffff',
			'search_button_hover': '#cda85c',
			'search_button_color_hover': '#ffffff',
			'search_button_color2': '#000000',
			'search_button_color_hover2': '#000000',
			'cart_background': '#cda85c',
			'cart_color': '#ffffff',
			'cart_background2': '#cda85c',
			'cart_color2': '#000000',
			'sticky_cart_bg1': '#cda85c',
			'sticky_cart_bg2': '#f8653d',
			'sticky_cart_color': '#ffffff',
			'menu_bg': '#1b1a1b',
			'menu_border_color': '#363636',
			'menu_font_color': '#ffffff',
			'menu_font_color_hover': '#ffffff',
			'menu_li_hover': '#cda85c',
			'submenu_color': '#ffffff',
			'submenu_background': '#cda85c',
			'slider_dot': '#cda85c',
			'feat_title': '#cda85c',
			'feat_cat_title': '#cda85c',
			'feat_button_bg': '#ffffff',
			'feat_button_color': '#1b1b1b',
			'feat_button_border_color': '#d6d4d4',
			'feat_button_bg_hover': '#cda85c',
			'feat_button_color_hover': '#ffffff',
			'feat_button_border_color_hover': '#cda85c',
			'title_block1': '#cda85c',
			'index_title1': '#cda85c',
			'new_label': '#000000',
			'discount_label': '#ff0000',
			'product_name_color': '#282828',
			'price_color_index': '#cda85c',
			'pl_cart_bg': '#ffffff',
			'pl_cart_color': '#1b1b1b',
			'pl_cart_button_border_color': '#d6d4d4',
			'pl_cart_bg_hover': '#cda85c',
			'pl_cart_color_hover': '#ffffff',
			'pl_cart_button_border_color_hover': '#cda85c',
			'catprod_title': '#cda85c',
			'featman_title': '#cda85c',
			'footer_cms_icons': '#cda85c',
			'footer_background': '#1b1a1b',
			'footer_border': '#363636',
			'footer_border_header': '#cda85c',
			'footer_font_color': '#ffffff',
			'footer2_background': '#1b1a1b',
			'footer2_border': '#363636',
			'footer2_font_color': '#ffffff',
			'newsletter_button': '#cda85c',
			'newsletter_color': '#ffffff',
			'newsletter_button_hover': '#cda85c',
			'newsletter_color_hover': '#ffffff',
			'price_color_product': '#cda85c',
			'product_cart_button_bg': '#cda85c',
			'product_cart_button_color': '#ffffff',
			'product_cart_button_border_color': '#cda85c',
			'product_cart_button_bg_hover': '#282828',
			'product_cart_button_color_hover': '#ffffff',
			'product_cart_button_border_color_hover': '#282828',
			'product_selected_tab': '#cda85c',

			'pagination_color': '#cda85c',
			'account_icon_color': '#cda85c',
			'scroll_button_bg': '#cda85c',
			'scroll_button_color': '#ffffff',
			'scroll_button_bg_hover': '#1b1a1b',
			'scroll_button_color_hover': '#ffffff',

        },


        'color_scheme_at18': {

			'green_button_bg': '#43b754',
			'green_button_color': '#ffffff',
			'green_button_border_color': '#399a49',
			'green_button_bg_hover': '#3aa04c',
			'green_button_color_hover': '#ffffff',
			'green_button_border_color_hover': '#196f28',
			'grey_button_bg': '#383331',
			'grey_button_color': '#ffffff',
			'grey_button_border_color': '#4c4745',
			'grey_button_bg_hover': '#caa462',
			'grey_button_color_hover': '#111111',
			'grey_button_border_color_hover': '#caa462',
			'inputs_outline': '#dbdbdb',

			'nav_background': '#111111',
			'nav_border': '#2d2d2d',
			'top_font_color': '#ffffff',
			'top_font_color2': '#caa462',
			'top_icons': '#caa462',
			'header_background': '#111111',
			'search_button': '#caa462',
			'search_button_color': '#111111',
			'search_button_hover': '#caa462',
			'search_button_color_hover': '#111111',
			'search_button_color2': '#ffffff',
			'search_button_color_hover2': '#ffffff',
			'cart_background': '#caa462',
			'cart_color': '#111111',
			'cart_background2': '#caa462',
			'cart_color2': '#ffffff',
			'sticky_cart_bg1': '#caa462',
			'sticky_cart_bg2': '#f8653d',
			'sticky_cart_color': '#ffffff',
			'menu_bg': '#000000',
			'menu_border_color': '#2d2d2d',
			'menu_font_color': '#ffffff',
			'menu_font_color_hover': '#111111',
			'menu_li_hover': '#caa462',
			'submenu_color': '#111111',
			'submenu_background': '#caa462',
			'slider_dot': '#caa462',
			'feat_title': '#caa462',
			'feat_cat_title': '#caa462',
			'feat_button_bg': '#caa462',
			'feat_button_color': '#111111',
			'feat_button_border_color': '#caa462',
			'feat_button_bg_hover': '#383331',
			'feat_button_color_hover': '#ffffff',
			'feat_button_border_color_hover': '#4c4745',
			'title_block1': '#caa462',
			'index_title1': '#caa462',
			'new_label': '#383838',
			'discount_label': '#ff0000',
			'product_name_color': '#000000',
			'price_color_index': '#caa462',
			'pl_cart_bg': '#caa462',
			'pl_cart_color': '#111111',
			'pl_cart_button_border_color': '#caa462',
			'pl_cart_bg_hover': '#383331',
			'pl_cart_color_hover': '#ffffff',
			'pl_cart_button_border_color_hover': '#4c4745',
			'catprod_title': '#caa462',
			'featman_title': '#caa462',
			'footer_cms_icons': '#caa462',
			'footer_background': '#000000',
			'footer_border': '#2d2d2d',
			'footer_border_header': '#caa462',
			'footer_font_color': '#ffffff',
			'footer2_background': '#000000',
			'footer2_border': '#2d2d2d',
			'footer2_font_color': '#ffffff',
			'newsletter_button': '#caa462',
			'newsletter_color': '#111111',
			'newsletter_button_hover': '#383331',
			'newsletter_color_hover': '#ffffff',
			'price_color_product': '#caa462',
			'product_cart_button_bg': '#caa462',
			'product_cart_button_color': '#111111',
			'product_cart_button_border_color': '#caa462',
			'product_cart_button_bg_hover': '#383331',
			'product_cart_button_color_hover': '#ffffff',
			'product_cart_button_border_color_hover': '#4c4745',
			'product_selected_tab': '#caa462',

			'pagination_color': '#caa462',
			'account_icon_color': '#caa462',
			'scroll_button_bg': '#caa462',
			'scroll_button_color': '#111111',
			'scroll_button_bg_hover': '#383331',
			'scroll_button_color_hover': '#ffffff',

        },


        'color_scheme_at19': {

			'green_button_bg': '#43b754',
			'green_button_color': '#ffffff',
			'green_button_border_color': '#399a49',
			'green_button_bg_hover': '#3aa04c',
			'green_button_color_hover': '#ffffff',
			'green_button_border_color_hover': '#196f28',
			'grey_button_bg': '#383331',
			'grey_button_color': '#ffffff',
			'grey_button_border_color': '#4c4745',
			'grey_button_bg_hover': '#e31d27',
			'grey_button_color_hover': '#ffffff',
			'grey_button_border_color_hover': '#e31d27',
			'inputs_outline': '#dbdbdb',

			'nav_background': '#111111',
			'nav_border': '#2d2d2d',
			'top_font_color': '#ffffff',
			'top_font_color2': '#e31d27',
			'top_icons': '#e31d27',
			'header_background': '#111111',
			'search_button': '#e31d27',
			'search_button_color': '#ffffff',
			'search_button_hover': '#e31d27',
			'search_button_color_hover': '#ffffff',
			'search_button_color2': '#ffffff',
			'search_button_color_hover2': '#ffffff',
			'cart_background': '#e31d27',
			'cart_color': '#ffffff',
			'cart_background2': '#e31d27',
			'cart_color2': '#ffffff',
			'sticky_cart_bg1': '#e31d27',
			'sticky_cart_bg2': '#f8653d',
			'sticky_cart_color': '#ffffff',
			'menu_bg': '#000000',
			'menu_border_color': '#2d2d2d',
			'menu_font_color': '#ffffff',
			'menu_font_color_hover': '#ffffff',
			'menu_li_hover': '#e31d27',
			'submenu_color': '#ffffff',
			'submenu_background': '#e31d27',
			'slider_dot': '#e31d27',
			'feat_title': '#e31d27',
			'feat_cat_title': '#e31d27',
			'feat_button_bg': '#e31d27',
			'feat_button_color': '#ffffff',
			'feat_button_border_color': '#e31d27',
			'feat_button_bg_hover': '#383331',
			'feat_button_color_hover': '#ffffff',
			'feat_button_border_color_hover': '#4c4745',
			'title_block1': '#e31d27',
			'index_title1': '#e31d27',
			'new_label': '#383838',
			'discount_label': '#ff0000',
			'product_name_color': '#000000',
			'price_color_index': '#e31d27',
			'pl_cart_bg': '#e31d27',
			'pl_cart_color': '#ffffff',
			'pl_cart_button_border_color': '#e31d27',
			'pl_cart_bg_hover': '#383331',
			'pl_cart_color_hover': '#ffffff',
			'pl_cart_button_border_color_hover': '#4c4745',
			'catprod_title': '#e31d27',
			'featman_title': '#e31d27',
			'footer_cms_icons': '#e31d27',
			'footer_background': '#000000',
			'footer_border': '#2d2d2d',
			'footer_border_header': '#e31d27',
			'footer_font_color': '#ffffff',
			'footer2_background': '#000000',
			'footer2_border': '#2d2d2d',
			'footer2_font_color': '#ffffff',
			'newsletter_button': '#e31d27',
			'newsletter_color': '#ffffff',
			'newsletter_button_hover': '#383331',
			'newsletter_color_hover': '#ffffff',
			'price_color_product': '#e31d27',
			'product_cart_button_bg': '#e31d27',
			'product_cart_button_color': '#ffffff',
			'product_cart_button_border_color': '#e31d27',
			'product_cart_button_bg_hover': '#383331',
			'product_cart_button_color_hover': '#ffffff',
			'product_cart_button_border_color_hover': '#4c4745',
			'product_selected_tab': '#e31d27',

			'pagination_color': '#e31d27',
			'account_icon_color': '#e31d27',
			'scroll_button_bg': '#e31d27',
			'scroll_button_color': '#ffffff',
			'scroll_button_bg_hover': '#ffffff',
			'scroll_button_color_hover': '#111111',

        },


        'color_scheme_at20': {

			...otherButtons,

			'nav_background': '#ffffff',
			'nav_border': '#d6d4d4',
			'top_font_color': '#000000',
			'top_font_color2': '#2fb5d2',
			'top_icons': '#2fb5d2',
			'header_background': '#ffffff',
			'search_button': '#2fb5d2',
			'search_button_color': '#ffffff',
			'search_button_hover': '#2fb5d2',
			'search_button_color_hover': '#ffffff',
			'search_button_color2': '#000000',
			'search_button_color_hover2': '#000000',
			'cart_background': '#2fb5d2',
			'cart_color': '#ffffff',
			'cart_background2': '#2fb5d2',
			'cart_color2': '#000000',
			'sticky_cart_bg1': '#2fb5d2',
			'sticky_cart_bg2': '#f8653d',
			'sticky_cart_color': '#ffffff',
			'menu_bg': '#1b1a1b',
			'menu_border_color': '#363636',
			'menu_font_color': '#ffffff',
			'menu_font_color_hover': '#ffffff',
			'menu_li_hover': '#2fb5d2',
			'submenu_color': '#ffffff',
			'submenu_background': '#2fb5d2',
			'slider_dot': '#2fb5d2',
			'feat_title': '#2fb5d2',
			'feat_cat_title': '#e11887',
			'feat_button_bg': '#2fb5d2',
			'feat_button_color': '#ffffff',
			'feat_button_border_color': '#2fb5d2',
			'feat_button_bg_hover': '#e11887',
			'feat_button_color_hover': '#ffffff',
			'feat_button_border_color_hover': '#e11887',
			'title_block1': '#2fb5d2',
			'index_title1': '#2fb5d2',
			'new_label': '#e11887',
			'discount_label': '#ff0000',
			'product_name_color': '#282828',
			'price_color_index': '#e11887',
			'pl_cart_bg': '#2fb5d2',
			'pl_cart_color': '#ffffff',
			'pl_cart_button_border_color': '#2fb5d2',
			'pl_cart_bg_hover': '#e11887',
			'pl_cart_color_hover': '#ffffff',
			'pl_cart_button_border_color_hover': '#e11887',
			'catprod_title': '#2fb5d2',
			'featman_title': '#2fb5d2',
			'footer_cms_icons': '#2fb5d2',
			'footer_background': '#1b1a1b',
			'footer_border': '#2d2d2d',
			'footer_border_header': '#2fb5d2',
			'footer_font_color': '#ffffff',
			'footer2_background': '#1b1a1b',
			'footer2_border': '#2d2d2d',
			'footer2_font_color': '#ffffff',
			'newsletter_button': '#2fb5d2',
			'newsletter_color': '#ffffff',
			'newsletter_button_hover': '#e11887',
			'newsletter_color_hover': '#ffffff',
			'price_color_product': '#2fb5d2',
			'product_cart_button_bg': '#2fb5d2',
			'product_cart_button_color': '#ffffff',
			'product_cart_button_border_color': '#2fb5d2',
			'product_cart_button_bg_hover': '#e11887',
			'product_cart_button_color_hover': '#ffffff',
			'product_cart_button_border_color_hover': '#e11887',
			'product_selected_tab': '#2fb5d2',

			'pagination_color': '#2fb5d2',
			'account_icon_color': '#2fb5d2',
			'scroll_button_bg': '#2fb5d2',
			'scroll_button_color': '#ffffff',
			'scroll_button_bg_hover': '#e11887',
			'scroll_button_color_hover': '#ffffff',

        },


        'color_scheme_at21': {

			...otherButtons,

			'nav_background': '#ffffff',
			'nav_border': '#d6d4d4',
			'top_font_color': '#000000',
			'top_font_color2': '#000000',
			'top_icons': '#000000',
			'header_background': '#ffffff',
			'search_button': '#000000',
			'search_button_color': '#ffffff',
			'search_button_hover': '#000000',
			'search_button_color_hover': '#ffffff',
			'search_button_color2': '#000000',
			'search_button_color_hover2': '#000000',
			'cart_background': '#000000',
			'cart_color': '#ffffff',
			'cart_background2': '#000000',
			'cart_color2': '#000000',
			'sticky_cart_bg1': '#000000',
			'sticky_cart_bg2': '#f8653d',
			'sticky_cart_color': '#ffffff',
			'menu_bg': '#000000',
			'menu_border_color': '#363636',
			'menu_font_color': '#ffffff',
			'menu_font_color_hover': '#000000',
			'menu_li_hover': '#ffffff',
			'submenu_color': '#ffffff',
			'submenu_background': '#000000',
			'slider_dot': '#000000',
			'feat_title': '#000000',
			'feat_cat_title': '#000000',
			'feat_button_bg': '#ffffff',
			'feat_button_color': '#000000',
			'feat_button_border_color': '#000000',
			'feat_button_bg_hover': '#000000',
			'feat_button_color_hover': '#ffffff',
			'feat_button_border_color_hover': '#000000',
			'title_block1': '#000000',
			'index_title1': '#000000',
			'new_label': '#000000',
			'discount_label': '#ff0000',
			'product_name_color': '#000000',
			'price_color_index': '#000000',
			'pl_cart_bg': '#ffffff',
			'pl_cart_color': '#000000',
			'pl_cart_button_border_color': '#000000',
			'pl_cart_bg_hover': '#000000',
			'pl_cart_color_hover': '#ffffff',
			'pl_cart_button_border_color_hover': '#000000',
			'catprod_title': '#000000',
			'featman_title': '#000000',
			'footer_cms_icons': '#000000',
			'footer_background': '#ffffff',
			'footer_border': '#d6d4d4',
			'footer_border_header': '#000000',
			'footer_font_color': '#000000',
			'footer2_background': '#ffffff',
			'footer2_border': '#d6d4d4',
			'footer2_font_color': '#000000',
			'newsletter_button': '#000000',
			'newsletter_color': '#ffffff',
			'newsletter_button_hover': '#282828',
			'newsletter_color_hover': '#ffffff',
			'price_color_product': '#000000',
			'product_cart_button_bg': '#000000',
			'product_cart_button_color': '#ffffff',
			'product_cart_button_border_color': '#000000',
			'product_cart_button_bg_hover': '#282828',
			'product_cart_button_color_hover': '#ffffff',
			'product_cart_button_border_color_hover': '#282828',
			'product_selected_tab': '#000000',

			'pagination_color': '#000000',
			'account_icon_color': '#000000',
			'scroll_button_bg': '#000000',
			'scroll_button_color': '#ffffff',
			'scroll_button_bg_hover': '#282828',
			'scroll_button_color_hover': '#ffffff',

        },


    };

    // Function for marking inputs and input refresh
    function selectInput(name, value) {
        const input = document.querySelector(`input[name="${name}"][value="${value}"]`);
        if (input) {
            input.checked = true;
            // Trigger change event to ensure any event listeners are fired
            input.dispatchEvent(new Event('change'));
            // Simulate a click on the input to refresh the color
            input.click();
        }
    }

    // Listener for changing input values
    document.querySelectorAll('input[name="angarcolor_input89"]').forEach(input => {
        input.addEventListener('change', function() {
            if (this.checked) {
                const colors = colorMap[this.value];
                if (colors) {
                    // Iterate through the elements and assign colors
                    for (const [elementId, color] of Object.entries(colors)) {
                        const element = document.getElementById(elementId);
                        if (element) {
                            element.value = color;
                            // Trigger minicolors plugin to update the color
                            $('#' + elementId).minicolors('value', color);
                            // Simulate a click on the input to refresh the color
                            element.click();
                        }
                    }
                }

                // Inner background select
                if (['color_scheme_at18', 'color_scheme_at19'].includes(this.value)) {
                    selectInput('angarcolor_input75', 'bg_black');
                } else {
                    selectInput('angarcolor_input75', 'bg_white');
                }

                // Background image select
					if (this.value === 'color_scheme_at01') {
						selectInput('angarconfig_input1', 'texture11');
					} else if (this.value === 'color_scheme_at03') {
						selectInput('angarconfig_input1', 'texture04');
					} else if (this.value === 'color_scheme_at04') {
						selectInput('angarconfig_input1', 'texture13');
					} else if (this.value === 'color_scheme_at05') {
						selectInput('angarconfig_input1', 'texture02');
					} else if (this.value === 'color_scheme_at07') {
						selectInput('angarconfig_input1', 'bg38');
					} else if (this.value === 'color_scheme_at08') {
						selectInput('angarconfig_input1', 'texture06');
					} else if (this.value === 'color_scheme_at10') {
						selectInput('angarconfig_input1', 'texture19');
					} else if (this.value === 'color_scheme_at11') {
						selectInput('angarconfig_input1', 'bg21');
					} else if (this.value === 'color_scheme_at14') {
						selectInput('angarconfig_input1', 'texture20');
					} else if (this.value === 'color_scheme_at19') {
						selectInput('angarconfig_input1', 'texture13');
					} else {
						selectInput('angarconfig_input1', 'no_bg');
					}

            }
        });
    });
});


// SEARCH STYLE - colors update
$(document).ready(function () {

    function updateSearchStyle(style) {
        // Getting color values ​​from appropriate inputs
        const searchButtonBg = $('#search_button').val();
        const searchButtonBgHover = $('#search_button_hover').val();
        const searchButtonColor = $('#search_button_color').val();
        const searchButtonColorHover = $('#search_button_color_hover').val();
        const searchButtonColor2 = $('#search_button_color2').val();
        const searchButtonColorHover2 = $('#search_button_color_hover2').val();

        // Resetting search button styles
        $('#search_widget form button[type=submit]').attr('style', '');
        $(".search_style_1 div#search_widget form button[type=submit]").unbind('mouseover mouseout');
        $(".search_style_2 div#search_widget form button[type=submit]").unbind('mouseover mouseout');

        // Assign styles depending on the selected style
        if (style === 'search_style_1') {
            // Style for search_style_1
            $('.search_style_1 div#search_widget form button[type=submit]').css('color', searchButtonColor);
            $('.search_style_1 div#search_widget form button[type=submit]').css('background', searchButtonBg);

            $(".search_style_1 div#search_widget form button[type=submit]").mouseover(function() {
                $(this).css('color', searchButtonColorHover);
                $(this).css('background', searchButtonBgHover);
            }).mouseout(function() {
                $(this).css('color', searchButtonColor);
                $(this).css('background', searchButtonBg);
            });

        } else if (style === 'search_style_2') {
            // Style for search_style_2
            $('.search_style_2 div#search_widget form button[type=submit]').css('color', searchButtonColor2);

            $(".search_style_2 div#search_widget form button[type=submit]").mouseover(function() {
                $(this).css('color', searchButtonColorHover2);
            }).mouseout(function() {
                $(this).css('color', searchButtonColor2);
            });
        }
    }

    // Handling the change event on radio buttons
    $('input[name="angarconfig_input82"]').on('change', function () {
        const selectedStyle = $(this).val(); // Get selected style
        updateSearchStyle(selectedStyle); // Update search style
    });
});


// CART STYLE - colors update
$(document).ready(function () {

    function updateCartStyle(style) {
        // Getting color values
        const cartBackground = $('#cart_background').val();
        const cartColor = $('#cart_color').val();
        const cartBackground2 = $('#cart_background2').val();
        const cartColor2 = $('#cart_color2').val();

        // Resetting styles
        $('#header div#_desktop_cart .blockcart .header').attr('style', '');
        $('#header div#_desktop_cart .blockcart .header a.cart_link').attr('style', '');
        $('#cart_icons a').attr('style', '');
        $('#header span.cart_qty').attr('style', '');

        // Assign styles depending on the selected style
        if (style === 'cart_style_1') {
            $('.cart_style_1 #header div#_desktop_cart .blockcart .header').css('background', cartBackground);
            $('.cart_style_1 #header div#_desktop_cart .blockcart .header a.cart_link').css('color', cartColor);
        } else if (style === 'cart_style_2') {
            $('.cart_style_2 #header div#_desktop_cart .blockcart .header a.cart_link').css('color', cartColor2);
            $('#cart_icons a').css('color', cartColor2);
        } else if (style === 'cart_style_3') {
            $('.cart_style_3 #header div#_desktop_cart .blockcart .header a.cart_link').css('color', cartColor2);
            $('.cart_style_3 #header span.cart_qty').css('background', cartBackground2);
            $('#cart_icons a').css('color', cartColor2);
        } else if (style === 'cart_style_4') {
            $('.cart_style_4 #header div#_desktop_cart .blockcart .header a.cart_link').css('color', cartColor2);
        } else if (style === 'cart_style_5') {
            $('.cart_style_5 #header div#_desktop_cart .blockcart .header a.cart_link').css('color', cartColor2);
            $('.cart_style_5 #header span.cart_qty').css('background', cartBackground2);
            $('#cart_icons a').css('color', cartColor2);
        }
    }

    // Handling the change event on radio buttons
    $('input[name="angarconfig_input62"]').on('change', function () {
        const selectedStyle = $(this).val(); // Get selected style
        updateCartStyle(selectedStyle); // Update cart style
    });
});


// STYCKY CART STYLE - colors update
$(document).ready(function () {
    // Function to update cart styles
    function updateCartStyle() {
        // Getting color values
        const stickCartBg1 = $('#sticky_cart_bg1').val();
        const stickCartBg2 = $('#sticky_cart_bg2').val();
        const stickCartColor = $('#sticky_cart_color').val();

        // Checking for the presence of the "sticky_cart" class in the body
        if ($('body').hasClass('sticky_cart')) {
            // If class is present, add styles
            $('#header div#_desktop_cart .blockcart .header .cart_index_title').css('background', stickCartBg1);
            $('#header div#_desktop_cart .blockcart .header a.cart_link span.cart-products-count span.cart_qty span').css('background', stickCartBg2);
            $('#header div#_desktop_cart .blockcart .header a.cart_link i.shopping-cart').css('color', stickCartColor);
        } else {
			$('#header div#_desktop_cart .blockcart .header .cart_index_title').attr('style', '');
			$('#header div#_desktop_cart .blockcart .header a.cart_link span.cart-products-count span.cart_qty span').attr('style', '');
			$('#header div#_desktop_cart .blockcart .header a.cart_link i.shopping-cart').attr('style', '');
        }
    }

    // Listening to scroll for adding/changing styles
    $(window).scroll(function () {
        if ($(this).scrollTop() > 140) {
            $('body').addClass('sticky_cart');
        } else {
            $('body').removeClass('sticky_cart');
        }
        updateCartStyle(); // Updating styles when changing class
    });

    // Calling the function at startup
    updateCartStyle();
});
