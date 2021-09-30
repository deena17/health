<?php include_once('header.php'); ?>
    <section id="main-container" class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <h3 class="border-title mar-t0">Feedback</h3>
                    <div class="page-content">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="">
                                    <div class="form-group">
                                        <label for="name">Your Name</label>
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Your E-Mail</label>
                                        <input type="text" class="form-control" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="subject">Subject</label>
                                        <input type="text" class="form-control" name="subject">
                                    </div>
                                    <div class="form-group">
                                        <label for="message">Message</label>
                                       <textarea name="message" id="message" cols="30" rows="3" class="form-control"></textarea>
                                    </div>
                                    <div>
                                        <input type="submit" class="btn btn-success" value="Submit Your Feedback">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                
        </div>   
    </section>
<?php include_once('footer.php'); ?>         