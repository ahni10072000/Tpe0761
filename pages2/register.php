 <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                        <span>Shopping cart</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6 class="coupon__link"><span class="icon_tag_alt"></span> <a href="#">Create new account?</a> Click
                    here</h6>
                </div>
            </div>
            <form action="aksi_reg.php" method="POST" class="checkout__form">
                <div class="row">
                    <div class="col-lg-8">
                        <h5>REGISTER</h5>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="checkout__form__input">
                                    <p>First Name <span>*</span></p>
                                    <input type="text" name="firts">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="checkout__form__input">
                                    <p>Last Name <span>*</span></p>
                                    <input type="text" name="last">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="checkout__form__input">
                                    <p>Email <span>*</span></p>
                                    <input type="text" name="email">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="checkout__form__input">
                                    <p>Address <span>*</span></p>
                                    <input type="text" name="alamat">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="checkout__form__input">
                                <p>Location <span>*</span></p>
                                  
                                <select class="form-control" multiple="" data-height="100%" name="lokasi">
                                     <?php $q=mysqli_query($koneksi,"SELECT* FROM tbl_biaya ");
                                    while($r=mysqli_fetch_array($q)){
                                            ?>
                                   <option value="<?php echo $r['id_biaya']; ?>"><?php echo $r['lokasi'];?></option>
                                     <?php } ?> 
                                   </select> 
                                    
                            </div>
                             </div>
                            <div class="col-lg-12">
                                <div class="checkout__form__input">
                                    <p>No Telephone <span>*</span></p>
                                    <input type="text" name="notelp">
                            </div>
                             </div>
                        
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="checkout__form__input">
                                    <p>Username <span>*</span></p>
                                    <input type="text" name="username">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="checkout__form__input">
                                    <p>Password <span>*</span></p>
                                    <input type="Password" name="pass">
                                </div>
                                </div>
                            <button type="submit" class="site-btn">Create Account</button>
                            </div>
                            </div>
                        </div>
                             
                        </div>
                    </div>
                </form>
            </div>
        </section>
     