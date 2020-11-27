<footer class="row card-footer bg-dark">
    <div id="footerID" style="color:white;" class="col-12 col-sm-12 col-md-6 col-lg-6 p-5">
        <?php
            if(is_active_sidebar('footerwidget')) : 
                dynamic_sidebar('footerwidget');
            endif;
        ?>
    </div>
    <div class="col-12 col-sm-12 col-md-6 col-lg-6 p-5" style="color:white">
        <h4>About Us:</h4>
        <hr style="background-color:white">
        <p>CR12-Bodenwinkler-traveler</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt ipsam sunt mollitia consequuntur dignissimos tempora neque tempore recusandae dolor modi excepturi rerum sequi!</p>
    </div>

</footer>


<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous">
    </script>
    <?php wp_footer() ?>

</body>

</html>