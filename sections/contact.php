<div class="content__inner">
    <div class="section full-height over-y-scroll" id="boxscroll-5">
        <div class="section" id="boxscroll-in-5">
            <!-- Page start -->
            <div class="section padding-top-big">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="content__title">stay informed</h2>
                        </div>
                        <div class="col-lg-4 mt-3">
                            <h3 class="content__subtitle">The rapid handle injects into the bashful lift.</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section padding-top padding-bottom-big">
                <div class="container">
                    <div class="row">
                        <div class="offset-md-3 col-md-9">
                            <h4>get in touch</h4>
                            <div class="title-page-line mt-4 mb-5"></div>
                        </div>
                        <div class="col-lg-3">
                            <h6>drop a line</h6>
                        </div>
                        <div class="col-lg-9 mt-4 mt-lg-0">
                            <form name="ajax-form" id="ajax-form" action="mail-it.php" method="post">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="name">
                                            <span class="error" id="err-name">please enter name</span>
                                        </label>
                                        <input name="name" id="name" type="text"   placeholder="Your Name: *"/>
                                    </div>
                                    <div class="col-lg-6 mt-4 mt-lg-0">
                                        <label for="email">
                                            <span class="error" id="err-email">please enter e-mail</span>
                                            <span class="error" id="err-emailvld">e-mail is not a valid format</span>
                                        </label>
                                        <input name="email" id="email" type="text"  placeholder="E-Mail: *"/>
                                    </div>
                                    <div class="col-lg-12 mt-4">
                                        <label for="message"></label>
                                        <textarea name="message" id="message" placeholder="Tell Us Everything"></textarea>
                                    </div>
                                    <div class="col-lg-12 mt-4">
                                        <div id="button-con"><button class="send_message" id="send" data-lang="en"><span>submit</span></button></div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="error" id="err-form"><span>There was a problem validating the form please check!</span></div>
                                        <div class="error" id="err-timedout">The connection to the server timed out!</div>
                                        <div class="error" id="err-state"></div>
                                        <div id="ajaxsuccess">Successfully sent!!</div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-3 mt-5">
                            <h6>contacts</h6>
                        </div>
                        <div class="col-lg-3 mt-4 mt-lg-5">
                            <p>office@aoide.com</p>
                            <p>support@aoide.com</p>
                        </div>
                        <div class="col-lg-3 mt-4 mt-lg-5">
                            <p>+1 325 2532</p>
                            <p>+1 325 3456</p>
                        </div>
                        <div class="col-lg-3 mt-4 mt-lg-5">
                            <p>kralja milutina 325</p>
                            <p>11000 belgrade, serbia</p>
                        </div>
                        <div class="col-lg-3 mt-5">
                            <h6>subscribe</h6>
                        </div>
                        <div class="col-lg-9 mt-4 mt-lg-5">
                            <div class="subscribe">
                                <input type="text" placeholder="subscribe"/>
                                <button data-lang="en"><span class="fa-long-arrow-right"></span></button>
                            </div>
                            <div class="subscribe-text">
                                <p>* we promise that we won´t spam you, never.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include 'templates/footer.php' ?>
            <!-- Page end -->
        </div>
    </div>
</div>