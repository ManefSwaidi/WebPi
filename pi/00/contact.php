<?php
?>
<form  method="POST" action="email.php">
                                <div class="checkout__content--step section__shipping--address">
                                    <div class="section__header mb-25">
                                        <h2 class="section__header--title h3">Billing Details</h2>
                                    </div>
                                    <div class="section__shipping--address__content">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 mb-20">
                                                <div class="checkout__input--list ">
                                                    <label class="checkout__input--label mb-5" for="input1">Nom <span class="checkout__input--label__star">*</span></label>
                                                    <input class="checkout__input--field border-radius-5" placeholder="Nom" id="nom" name="nom"  type="text">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 mb-20">
                                                <div class="checkout__input--list">
                                                    <label class="checkout__input--label mb-5" for="input2">Prenom <span class="checkout__input--label__star">*</span></label>
                                                    <input class="checkout__input--field border-radius-5" placeholder="Prenom" id="prenom" name="prenom"  type="text">
                                                </div>
                                            </div>
                                            <div class="col-12 mb-20">
                                                <div class="checkout__input--list">
                                                    <label class="checkout__input--label mb-5" for="input3">Num tel <span class="checkout__input--label__star">*</span></label>
                                                    <input class="checkout__input--field border-radius-5" name="num_tel" placeholder="Num tel" id="num_tel" type="number"  pattern="\d{8}">
                                                </div>
                                            </div>
                                            <div class="col-12 mb-20">
                                                <div class="checkout__input--list">
                                                    <label class="checkout__input--label mb-5" for="input3">Email <span class="checkout__input--label__star">*</span></label>
                                                    <input class="checkout__input--field border-radius-5" name="email" placeholder="Email" id="email" type="email" >
                                                </div>
                                            </div>
                                            <div class="col-lg-6 mb-20">
                                                <div class="checkout__input--list">
                                                    <label class="checkout__input--label mb-5" for="input6">Id Client <span class="checkout__input--label__star">*</span></label>
                                                    <input class="checkout__input--field border-radius-5" placeholder="Id Client" id="id_client" name="id_client" type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                    
                                </div>
                                <div class="checkout__content--step__footer d-flex align-items-center">
<button class="continue__shipping--btn primary__btn border-radius-5"> Reserver</button>                                    <a class="previous__link--content" href="shop-list.php">Retour</a>
                                </div>
                            </form>