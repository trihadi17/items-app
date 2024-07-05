<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Sistem Informasi Pencatatan Barang</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App css -->
        @include('style.css')

    </head>

    <body>

        <div class="account-pages"></div>
        <div class="clearfix"></div>
        <div class="wrapper-page">
            <div class="text-center">
                <a href="index.html" class="logo"><span>PT Global Prima<span> Utama</span></span></a>
                <h5 class="text-muted mt-0 font-600">Sistem Informasi Pencatatan Barang</h5>
            </div>
        	<div class="m-t-40 card-box">
                <div class="text-center">
                    <h4 class="text-uppercase font-bold mb-0">Sign In</h4>
                </div>
                <div class="p-20">
                    <form class="form-horizontal m-t-20" action="index.html">
                        @csrf
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" required="" placeholder="Username">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" required="" placeholder="Password">
                            </div>
                        </div>

                       

                        <div class="form-group text-center m-t-30">
                            <div class="col-xs-12">
                                <button class="btn btn-custom btn-bordred btn-block waves-effect waves-light" type="submit">Log In</button>
                            </div>
                        </div>

                      
                    </form>

                </div>
            </div>
            <!-- end card-box-->

          
            
        </div>
        <!-- end wrapper page -->


        <!-- App js -->
        @include('style.script')
	
	</body>
</html>