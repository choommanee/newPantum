<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<footer class="footer">
    <div class="container-fluid">
        <div class="footer-top p-tb-50 clearfix">
            <div class="row">
                <div class="col-md-3">
                    

                    <div class="clearfix"></div>

                    <p class="footer-brief" style="border-bottom: 1px solid;
    font-size: 18px;
    font-weight: 800;
    color: #FFFFFF;">SERVICE CENTER</p>

                    <?php if(setting('store_phone') || setting('store_email') || setting('storefront_footer_address')): ?>
                        <div class="contact">
                            <ul class="list-inline">
                                <?php if(setting('store_phone')): ?>
                                    <li>
                                        <i class="fa fa-phone-square" aria-hidden="true"></i>
                                        <?php echo e(setting('store_phone')); ?></li>
                                <?php endif; ?>
                                <?php if($socialLinks['facebook-official']!=''): ?>
                                    <li><i class="fab fa-facebook" aria-hidden="true" ></i>
                                        <a href="<?php echo e($socialLinks['facebook-official']); ?>">PantumThailand</a></li>
                                <?php endif; ?>

                                <li><i class="fab fa-line" aria-hidden="true" ></i>
                                    <a href="https://line.me/R/ti/p/%40pantumthailand">line : @pantumthailand</a></li>
                                <?php if(setting('store_email')): ?>
                                    <li><i class="fas fa-envelope-square"  aria-hidden="true"></i><?php echo e(setting('store_email')); ?></li>
                                <?php endif; ?>

                               
                            </ul>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="col-md-3">


                    <div class="clearfix"></div>

                    <p class="footer-brief" style="border-bottom: 1px solid;
                            font-size: 18px;
                            font-weight: 800;
                            color: #FFFFFF;">MAP</p>


                    <div class="contact">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3874.6309264969336!2d100.48655581534734!3d13.801108599866028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29bcbbf35c491%3A0xa87da2733453001f!2zUGFudHVtIChUaGFpbGFuZCkgQ28uLEx0ZCDguJrguKPguLTguKnguLHguJcg4LmB4Lie4LiZ4LiX4Lix4LmI4LihKOC4m-C4o-C4sOC5gOC4l-C4qOC5hOC4l-C4oikg4LiI4Liz4LiB4Lix4LiU!5e0!3m2!1sen!2sth!4v1548215094942" width="100%" height="170" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>

                </div>
                <div class="col-md-3">


                    <div class="clearfix"></div>

                    <p class="footer-brief" style="border-bottom: 1px solid;
                            font-size: 18px;
                            font-weight: 800;
                            color: #FFFFFF;">ADDRESS</p>


                    <div class="contact">
                        <ul class="list-inline">
                            <li style="font-size: 20px;"><i class="fas fa-map-marked-alt" aria-hidden="true"></i>
                                Pantum Thailand co.,Ltd<br>

                            </li>
                        </ul>
                        <div class="footaddress" >104/3 M.9 Bangkruai - Sainoi Rd, Tambon Bangkruai Amphur Bangkruai Nonthaburi 11130</div>
                    </div>

                </div>
                <div class="col-md-3">


                    <div class="clearfix"></div>

                    <p class="footer-brief" style="border-bottom: 1px solid;
                            font-size: 18px;
                            font-weight: 800;
                            color: #FFFFFF;">CONTACT</p>


                    <div class="contact">
                        <ul class="list-inline">
                            <li>
                                <i class="fa fa-phone-square" aria-hidden="true"></i>02-101-3144
                                <i class="fas fa-fax"  aria-hidden="true" style="margin-left: 20px;"></i> 02-101-3143

                            </li>
                            <li >
                                <i class="fa fa-phone-square" aria-hidden="true"></i> Main +6695 923 9685
                            </li>
                            <li >
                                <i class="fas fa-envelope-square"  aria-hidden="true"></i>phu-it@pantum.co.th
                            </li>
                            <li >
                                <i class="fas fa-globe" aria-hidden="true"></i> www.pantum.com
                            </li>
                        </ul>
                    </div>

                </div>

                
            </div>
        </div>

        
    </div>

    <div class="footer-bottom bg-black-dark p-tb-20 clearfix">
        <div class="container">
            <div class="copyright text-center">
                <?php echo $copyrightText; ?>

            </div>
        </div>
    </div>
</footer>
