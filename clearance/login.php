<?php include("header2.php"); ?>

 <div class="section contact"  data-animate="bounceIn">
            <div class="container">
                <div class="col-md-12" style="padding: 3em;">


                    <h2 class="title">Log In Below</h2>

                    <div class="row">

                        <div class="col-md-8 col-md-offset-2">
                            <form  method="post" action="contact.php">

                                <div class="messages">

                                </div>

                                <div class="controls">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" name="email" class="form-control" placeholder="Your email *" required="required">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="surname" class="form-control" placeholder="Your password *" required="required">
                                        </div>
                                      
                                        <div class="col-md-12 text-center">
                                            <input type="submit" class="btn btn-primary btn-lg" value="log in" onclick="guide();">
                                        </div>
                                    </div>
                                </div>

                            </form>
                            
                        </div>

                    </div><a href="">forgot password?</a>

                </div>
                <!-- /.12 -->
            </div>
            <!-- /.container -->
        </div>

<script type="text/javascript">
    function guide(){
        alert("Click on an option in menubar above to view demo");r
    }
</script>
          <?php include("footer.php"); ?>