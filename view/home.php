<?php

use Symfony\Component\VarDumper\Cloner\Data;
require(urlPath . 'mainBase/header.php');
?>
<div class="section">
            <div class="head">
                <div class="welcome">
                    <h1>Byenvini sou meyè platfom kou anliy nan peyi a</h1>
                </div>
            </div>
            <div class="course">
                <h1>Lis kou yo</h1>
                <h3>kou sou logisyel biro swit birotik</h3>
                <div class="course-list">
                    <!-- <div class="course-box">
                        <img src="../img/course.jpg" alt="course banner">
                        <div class="meter-box">
                            <meter id="meter" value="70" min="0" max="100" ></meter> 
                            <span>64%</span> 
                        </div>
                        
                        <div class="foot">
                            <button class="chap">10 Chapit</button>
                            <button class="enter">Antre</button>
                        </div>
                    </div> -->
                    
                    <?php foreach($datas as $course):?>
                        <a href="/presentation/<?= $course->get_slug() . "-" . $course->get_id()?>">
                            <div class="course-box">
                                <img src="../../img/course.jpg" alt="course banner">
                                <div class="right">
                                    <h4><?= $course->get_title();?></h4>
                                    <div class="desc"><?=$course->get_description()?></div>
                                    <div class="foot">
                                        <div class="author">kreye pa: <span><?=$course->get_teacher()?></span></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    <?php endforeach?>
                </div>
            </div>   
<?php
require(urlPath . 'mainBase/footer.php');
?>