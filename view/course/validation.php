<?php
// dd($datas);
$data = $datas['courseInfo'];
require(urlPath . 'mainBase/header.php');
?>
<div class="section">
<div class="validation">
                <div class="details">
                    <h1>Validation</h1>
                    <div class="presentation">
                        <h5><?=$data->get_title()?></h5>
                        <div class="price">
                            <?=$data->get_price()?> HTG
                        </div>
                    </div>
                    <div class="mode">
                        <h3>Kijan ou chwazi peye:</h1>
                        <div class="pay-box">
                            <div class="head-paiment">
                                <img src="../img/moncash_logo3.png" alt="" srcset="">     
                                <label for="monCash">monCash</label>
                                <input type="radio" value="" name="mode" id="monCash">
                            </div>
                            <div class="body-pay">
                                Wap redirije nan potay monCash lan pou finalize peman an
                            </div>
                        </div>
                        <div class="pay-box">
                            <div class="head-paiment">
                                <img src="../img/bank.png" alt="" srcset="">    
                                <label for="kat">Kat debi/Kredi</label>
                                <input type="radio" value="" name="mode" id="kat">
                            </div>
                            <div class="body-pay">
                                Peman pa kat bankè poko disponib sou sistem lan.
                            </div>
                        </div>
                        <div class="pay-box">
                            <div class="head-paiment">
                                <img src="../img/paypal.png" alt="" srcset="">    
                                <label for="kat">PayPal</label>
                                <input type="radio" value="" name="mode" id="payPal">
                            </div>
                            <div class="body-pay">
                                Peman pa pay poko disponib sou sistem lan.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="resume">
                    <div class="box">
                        <h3>Rezime</h3>
                        <div class="true in">
                            <div class="label">
                                Pri orijinal:
                            </div>
                            <div class="value">
                                    <?=$data->get_price_max()?>
                            </div>
                        </div>
                        <div class="reduce in">
                            <div class="label">
                                Rediksyon:
                            </div>
                            <div class="value">
                                <?=$data->get_reduce()?>
                            </div>
                        </div>
                        
                        <div class="total in">
                            <div class="label">
                                Total: 
                            </div>
                            <div class="value">
                            <?=$data->get_price()?>
                            </div>
                        </div>
                        <a href=""><Button>Peye</Button></a>
                        
                    </div>
                    <div class="code">
                            <label for="code">Kod pwomo:</label>
                            <input type="text" name="promo">
                    </div>
                </div>
               </div>
<?php
require(urlPath . 'mainBase/footer.php');
?>