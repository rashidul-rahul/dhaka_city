<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="widget clearfix">
                    <div class="widget-title">
                        <h3>Complain Box</h3>
                    </div>
                   <div class="">
                       <form action="{{ route('complain.store') }}" method="POST">
                           @csrf
                           <div class="form-group">
                               @guest()
                                   <label for="name">Name</label>
                                   <input type="text" name="name" id="name" class="form-control" placeholder="Type Your Name">
                               @endguest
                           </div>
                           <div class="form-group">
                               @guest()
                                   <label for="email">Email</label>
                                   <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                               @endguest
                           </div>
                           <div class="form-group">
                               <textarea name="complain" id="" class="form-control" placeholder="Explain your complain"></textarea>
                           </div>
                           <button type="submit" class="btn btn-circle btn-info" value="">Submit</button>
                       </form>
                   </div>
                </div><!-- end clearfix -->
            </div><!-- end col -->

            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="widget clearfix">
                    <div class="widget-title">
                        <h3>Pages</h3>
                    </div>

                    <ul class="footer-links hov">
                        <li><a href="#">Home <span class="icon icon-arrow-right2"></span></a></li>
                        <li><a href="#">Blog <span class="icon icon-arrow-right2"></span></a></li>
                        <li><a href="#">Pricing <span class="icon icon-arrow-right2"></span></a></li>
                        <li><a href="#">About <span class="icon icon-arrow-right2"></span></a></li>
                        <li><a href="#">Faq <span class="icon icon-arrow-right2"></span></a></li>
                        <li><a href="#">Contact <span class="icon icon-arrow-right2"></span></a></li>
                    </ul><!-- end links -->
                </div><!-- end clearfix -->
            </div><!-- end col -->

            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="footer-distributed widget clearfix">
                    <div class="widget-title">
                        <h3>Subscribe</h3>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which one know this tricks.</p>
                    </div>

                    <div class="footer-right">
                        <form method="get" action="#">
                            <input placeholder="Subscribe our newsletter.." name="search">
                            <i class="fa fa-envelope-o"></i>
                        </form>
                    </div>
                </div><!-- end clearfix -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</footer><!-- end footer -->

<div class="copyrights">
    <div class="container">
        <div class="footer-distributed">
            <div class="footer-left">
                <p class="footer-company-name">All Rights Reserved. &copy; 2019 Design and Developed by Atikur Rahman & Riad : Daffodil International University Final Project
            </div>
        </div>
    </div><!-- end container -->
</div><!-- end copyrights -->
