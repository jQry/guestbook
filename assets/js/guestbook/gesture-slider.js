$(function() {
	jssor_1_slider_init = function() {
        var jssor_1_options = {
          $AutoPlay: 1,
          $Idle: 0,
          $SlideDuration: 5000,
          $SlideEasing: $Jease$.$Linear,
          $PauseOnHover: 4,
          $SlideWidth: 140,
          $Cols: 7
        };

        var jssor_1_slider = new $JssorSlider$("gesture-slider", jssor_1_options);

        /*#region responsive code begin*/
        /*remove responsive code if you don't want the slider scales while window resizing*/
        function ScaleSlider() {
            var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
            if (refSize) {
                refSize = Math.min(refSize, 980);
                jssor_1_slider.$ScaleWidth(refSize);
            }
            else {
                window.setTimeout(ScaleSlider, 30);
            }
        }
        ScaleSlider();
        $Jssor$.$AddEvent(window, "load", ScaleSlider);
        $Jssor$.$AddEvent(window, "resize", ScaleSlider);
        $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
        /*#endregion responsive code end*/
    };

    jssor_1_slider_init();
});