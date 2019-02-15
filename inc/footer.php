    <section id="footer">
          <div class="container">
              <div class="row">
                  <div class="col-md-3">
                      <img src="img/logo-menu.jpg" class="img-responsive img-meliponario centralizado">
                  </div>
                  <div class="col-md-5">
                      <div class="texto-rodape centralizado">Localização<br>
                        IFSULDEMINAS - Campus Poços de Caldas<br>
                        Avenida Dirce Pereira Rosa, 300, Jardim Esperança
                      </div>
                  </div>
                  <div class="col-md-4">
                      <div class="fb-page centralizado" data-height="200" data-width="400" data-href="https://www.facebook.com/aldeiajunior/" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/aldeiajunior/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/aldeiajunior/">Aldeia Consultoria Júnior</a></blockquote></div>
                  </div>
              </div>
          </div>
    </section>

    <script>

      function initMap() {
        var myLatLng = {lat: -21.8370104, lng: -46.5592002};
        // Create a map object and specify the DOM element
        // for display.
        var map = new google.maps.Map(document.getElementById('map'), {
          center: myLatLng,
          zoom: 16
        });
        // Create a marker and set its position.
        var marker = new google.maps.Marker({
          map: map,
          position: myLatLng,
          title: 'Meliponário'
        });
      }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAuS4_wzopvcGexhzA0d7qzc30l8hSjVOA&callback=initMap" async defer></script>


    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Js Base -->
    <script src="js/base.js"></script>

</body>
</html>
