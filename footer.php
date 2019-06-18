<!-- Footer -->
  <footer class="secondFooter page-footer font-small">
    <div class="footer">
      <div class="container">
        <!-- Grid row-->
        <div class="row py-4 d-flex align-items-center">
          <!-- Grid column -->
          <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
            <h4 class="mb-0">Suivez les dernières tendances sur nos réseaux !</h6>
            </div>
            <!-- Grid column -->
            <div class="col-md-6 col-lg-7 text-center text-md-right">
              <!-- Facebook -->
              <a class="fb-ic">
                <i class="fab fa-facebook-f white-text mr-4"> </i>
              </a>
              <!-- Twitter -->
              <a class="tw-ic">
                <i class="fab fa-twitter white-text mr-4"> </i>
              </a>
              <!--Instagram-->
              <a class="ins-ic">
                <i class="fab fa-instagram white-text"> </i>
              </a>
            </div>
            <!-- Grid column -->
          </div>
          <!-- Grid row-->
        </div>
      </div>
      <!-- Footer Links -->
      <div class="container text-center text-md-left mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h4 class="text-uppercase font-weight-bold">Roye Aïkido Jeunes</h6>
              <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
            </div>
            <!-- Grid column -->
            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h4 class="text-uppercase font-weight-bold">Liens utiles</h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                  <a class="colorwhite" href="contact.php">Nous contacter</a>
                </p>
                <p>
                   <?php if (!empty($_SESSION)) {
               ?><a class="colorwhite" href="profil.php">Voir le profil</a>
               <?php } else {
               ?> 
               <a class="colorwhite" href="login.php">Devenir membre</a> 
            <?php } ?>
                </p>
                <p>
                  <a class="colorwhite" href="">Aide</a>
                </p>
              </div>
              <!-- Grid column -->
              <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                <!-- Links -->
                <h4 class="text-uppercase font-weight-bold">Contact</h6>
                  <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                  <p>
                    <i class="fas fa-home mr-3"></i>4 rue du moulinet , 80700 Roye</p>
                  <p>
                    <i class="fas fa-envelope mr-3"></i>royeaikidojeunes@free.fr</p>
                    <p>
                      <i class="fas fa-phone mr-3"></i>09 53 18 58 48 </p>
                    </div>
                    <!-- Grid column -->
                  </div>
                  <!-- Grid row -->
                </div>
                <!-- Footer Links -->
                <!-- Copyright -->
                <div class="footer-copyright text-center py-3">©Roye Aïkido Jeunes 2005-2019 | Tout droit réservés</div>
                <!-- Copyright -->
              </footer>
            <!-- Footer -->
    <script src="assets/js/jquery-3.3.1.js"></script>
    <script src="assets/js/script.js"></script>