<?php
if($datas != 'false'):
$title = "Lis Kou yo";
$data = $datas['courseInfo'];
$objective = $datas['objective'];
$prerequisiste = $datas['prerequisite'];
// dd($data);

// dd($prerequisiste);
require(urlPath . 'mainBase/header.php');
?> 
<div class="section">
                <div class="presentation">
                    <div class="header-pres">
                    <div class="banner">
                            <img src="../img/course.jpg" alt="" srcset="">
                        </div>
                        <div class="heading">
                            <h1><?=$data->get_title()?></h1>
                            <div class="desc">
                                <?=$data->get_description()?>
                            </div>
                            <div class="teacher">
                                <img src="../img/5.jpg" alt="" srcset="">
                                <?=$data->get_teacher()?>
                            </div>
                            <div class="price">
                                <div class="reduced"><?=$data->get_price()?> HTG</div>
                                <div class="true"><?=$data->get_price_max()?> HTG</div>
                            </div>
                            <div class="label">
                                <i class=" ion-clock"></i> Ou rete 48h pou benefisye de redikson sila a
                            </div>
                            <a href="/validation-pay/<?=$data->get_slug()?>-<?=$data->get_id()?>" class = "button">
                                <button>Enskri nan kou an</button>
                            </a>
                            <div class="foot">
                                <div class="lang"> <i class="ion-earth"></i> Kreyol Ayisyen</div>
                            </div>
                        </div>
                        
                    </div>     
                    <div class="section-pres">
                        <div class="obj">
                            <h3>Saw gen pou aprann nan kou an (prereki)</h3>
                            <ul>
                                <?php foreach ($objective as $obj): ?>
                                <li>
                                    <i class=" ion-checkmark-circled"></i>
                                    <span><?= $obj['content'] ?></span>
                                </li>
                                <?php endforeach?>
                            </ul>
                        </div>

                        <div class="obj">
                            <h3>Saw dwe gentan metrize pou swiv kou sa</h3>
                            <ul>
                                <?php foreach($prerequisiste as $pre)?>
                                <li>
                                    <i class=" ion-checkmark-circled"></i>
                                    <span><?= $pre['content']?></span>
                                </li>
                            </ul>
                        </div>
                        <div class="intro">
                            <h2>Introduction</h2>
                            <p>
                                <?=$data->get_introduce()?>
                            </p>
                        </div>
                        <div class="foot">
                        <a href ="/validation-pay/<?=$data->get_slug()?>-<?=$data->get_id()?>">
                            <button>Enskri nan kou an</button>
                        </a>    
                         
                        </div>
                    </div>
                    <div class="fixed">
                        <!-- <div class="banner">
                            <img src="img/course.jpg" alt="" srcset="">
                        </div>
                        <div class="price">
                            <div class="reduced">700 HTG</div>
                            <div class="true">1000 HTG</div>
                        </div>
                        <div class="label">
                            Ou rete 48h pou benefisye de redikson sila a
                        </div>
                        <div class = "button">
                            <button>Enskri nan kou an</button>
                        </div>-->
                        
                    </div>
                </div>
                <?php
require(urlPath . 'mainBase/footer.php');
    else:{
    header('not founr', false, 404);
    echo "not found";
}

endif;

?>