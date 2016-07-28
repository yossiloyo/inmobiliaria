// JavaScript Document

	jQuery(document).ready(function ($) {
		var options = {
			$BulletNavigatorOptions: {               //[Optional] Options to specify and enable navigator or not
				$Class: $JssorBulletNavigator$,      //[Required] Class to create navigator instance
				$ChanceToShow: 2,                    //[Required] 0 Never, 1 Mouse Over, 2 Always
				$AutoCenter: 1,                      //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
				$Steps: 1,                           //[Optional] Steps to go for each navigation request, default value is 1
				$Lanes: 1,                           //[Optional] Specify lanes to arrange items, default value is 1
				$SpacingX: 10,                       //[Optional] Horizontal space between each item in pixel, default value is 0
				$SpacingY: 10,                       //[Optional] Vertical space between each item in pixel, default value is 0
				$Orientation: 1                      //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
			},
			$ArrowNavigatorOptions: {                       //[Optional] Options to specify and enable arrow navigator or not
				$Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
				$ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
				$AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
				$Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
			}
		};
		var jssor_slider1 = new $JssorSlider$('slider1_container', options);
		var jssor_slider2 = new $JssorSlider$('slider2_container', options);
		var jssor_slider3 = new $JssorSlider$('slider3_container', options);
		var jssor_slider4 = new $JssorSlider$('slider4_container', options);
		var jssor_slider5 = new $JssorSlider$('slider5_container', options);
		var jssor_slider6 = new $JssorSlider$('slider6_container', options);
		var jssor_slider7 = new $JssorSlider$('slider7_container', options);
		var jssor_slider8 = new $JssorSlider$('slider8_container', options);
		var jssor_slider9 = new $JssorSlider$('slider9_container', options);
		var jssor_slider10 = new $JssorSlider$('slider10_container', options);
		var jssor_slider11 = new $JssorSlider$('slider11_container', options);
		var jssor_slider12 = new $JssorSlider$('slider12_container', options);
		var jssor_slider13 = new $JssorSlider$('slider13_container', options);
		var jssor_slider14 = new $JssorSlider$('slider14_container', options);
		var jssor_slider15 = new $JssorSlider$('slider15_container', options);
		var jssor_slider16 = new $JssorSlider$('slider16_container', options);
		var jssor_slider17 = new $JssorSlider$('slider17_container', options);
		var jssor_slider18 = new $JssorSlider$('slider18_container', options);
		var jssor_slider19 = new $JssorSlider$('slider19_container', options);
		var jssor_slider20 = new $JssorSlider$('slider20_container', options);
	});
