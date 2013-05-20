<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Media Buying
 * Date: 21/05/13
 * Time: 12:42 AM
 * To change this template use File | Settings | File Templates.
 */
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.css"/>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script>

<script type="text/javascript">
    function scale( width, height, padding, border ) {
        var scrWidth = $( window ).width() - 30,
            scrHeight = $( window ).height() - 30,
            ifrPadding = 2 * padding,
            ifrBorder = 2 * border,
            ifrWidth = width + ifrPadding + ifrBorder,
            ifrHeight = height + ifrPadding + ifrBorder,
            h, w;

        if ( ifrWidth < scrWidth && ifrHeight < scrHeight ) {
            w = ifrWidth;
            h = ifrHeight;
        } else if ( ( ifrWidth / scrWidth ) > ( ifrHeight / scrHeight ) ) {
            w = scrWidth;
            h = ( scrWidth / ifrWidth ) * ifrHeight;
        } else {
            h = scrHeight;
            w = ( scrHeight / ifrHeight ) * ifrWidth;
        }

        return {
            'width': w - ( ifrPadding + ifrBorder ),
            'height': h - ( ifrPadding + ifrBorder )
        };
    };
    $(document).on("pageinit", function () {
        $("#popupMap iframe")
            .attr("width", 0)
            .attr("height", 0);

        $("#popupMap iframe").contents().find("#map_canvas")
            .css({ "width": 0, "height": 0 });

        $("#popupMap").on({
            popupbeforeposition: function () {
                var size = scale(480, 320, 0, 1),
                    w = size.width,
                    h = size.height;

                $("#popupMap iframe")
                    .attr("width", w)
                    .attr("height", h);

                $("#popupMap iframe").contents().find("#map_canvas")
                    .css({ "width": w, "height": h });
            },
            popupafterclose: function () {
                $("#popupMap iframe")
                    .attr("width", 0)
                    .attr("height", 0);

                $("#popupMap iframe").contents().find("#map_canvas")
                    .css({ "width": 0, "height": 0 });
            }
        });
    });
</script>
<head>

    <title></title>
</head>
<body>
<div data-role="page" id="page1" data-add-back-btn="true">
    <div data-role="panel" id="mypanel" data-position="left" data-display="push">
        <!-- panel content goes here -->
        <a href="#my-header" data-rel="close" data-role="button">Close panel</a>
    </div>
    <div data-role="header">
        <h1>Page header (optional): Example page</h1>
        <a href="#mypanel" data-role="button" data-shadow="true" data-corners="true" data-icon="bars">Panel</a>
    </div>

    <div data-role="content">
        <h2>Page content</h2>

        <p>Page content goes here.</p>

        <p><a href="#page2" data-role="button" data-shadow="true" data-corners="true">Page 2</a></p>


    </div>
    <div data-role="footer" data-id="pfooter" data-position="fixed" id="footer">
        <h1>Page footer (optional)</h1>
    </div>
</div>

<div data-role="page" id="page2" data-add-back-btn="true" data-theme="b">
    <div data-role="header">
        <h1>Page header (optional): Example page</h1>
    </div>
    <div data-role="content">
        <h2>Page content</h2>

        <p>Page content goes here.</p>
        <a href="#page3" data-role="button" data-inline="true">Map Page</a>

    </div>
    <div data-role="footer" data-id="pfooter" data-position="fixed" id="footer">
        <h1>Page footer (optional)</h1>
    </div>
</div>


<div data-role="page" id="page3" style="max-height:390px; min-height:390px;" data-add-back-btn="true" data-theme="b">
    <div data-role="header">
        <h1>Page header (optional): Example page</h1>
    </div>
    <div data-role="content">
        <a href="#popupMap" data-rel="popup" data-position-to="window" data-role="button" data-theme="b"
           data-inline="true">Open Map</a>

        <div data-role="popup" id="popupMap" data-overlay-theme="a" data-theme="a" data-corners="false"
             data-tolerance="30, 15, 30, 15" data-position-to="window">
            <a href="#" data-rel="back" data-role="button" data-theme="a" data-icon="delete" data-iconpos="notext"
               class="ui-btn-right">Close</a>
            <iframe src="map.html" width="480" height="320" seamless></iframe>
        </div>
    </div>
    <div data-role="footer" data-id="pfooter" data-position="fixed" id="footer">
        <h1>Page footer (optional)</h1>
    </div>
</div>


</body>
</html>
