
<div id="mapModal" class="modal fade" role="dialog">
    <div class="modal-dialog padding-all-15">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header padding-all-15">
                <button type="button" class="close" data-dismiss="modal" title="Close Modal">&times;</button>
                <h4 class="modal-title">View Location</h4>
            </div>
            <div class="modal-body padding-all-15">
                <div id="gmap_canvas" style="width: 100%; height: 400px"></div>
            </div>
            <div class="modal-footer padding-all-15">
                <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>

<script>
    function init_map() {
                var myOptions = {zoom: 10, center: new google.maps.LatLng(7.2087984, 79.83802160000005), mapTypeId: google.maps.MapTypeId.ROADMAP};
                map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
                marker = new google.maps.Marker({map: map, position: new google.maps.LatLng(7.2087984, 79.83802160000005)});
                infowindow = new google.maps.InfoWindow({content: '<strong>Sky Wing tours</strong><br>Negombo, Sri Lanka<br>'});
                google.maps.event.addListener(marker, 'click', function() {
                    infowindow.open(map, marker);
                });
                infowindow.open(map, marker);
            }
            google.maps.event.addDomListener(window, 'load', init_map);
</script>
