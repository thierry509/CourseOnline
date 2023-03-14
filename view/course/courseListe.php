<?php
$title = "Lis Kou yo";
require(urlPath . 'mainBase/header.php');
?> 
   <div class="section">
        <div class="course courses">
            <h1>Lis kou yo</h1>
            <h3>kou sou logisyel biro swit birotik</h3>
            <div class="course-list">
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
                <?php endforeach ?>   
            </div>
        </div>
<?php
require(urlPath . 'mainBase/footer.php');
?>