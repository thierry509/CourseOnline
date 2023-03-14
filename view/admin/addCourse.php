<?php
dd($datas);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/fonts.css">
    <link rel="stylesheet" href="../css/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/teacher.css">
    <link rel="stylesheet" href="../css/session.css">
    <link rel="stylesheet" href="../css/course_content.css">
    <link rel="stylesheet" href="../css/ManageCourse.css">
    <title>Ajoute Kou</title>
</head>
<body>
    <div class="main">
        <div class="header">
            <a href="#" class="back"><i class="ion-arrow-left-c"></i></a>
            <h1>Ajoute Kou</h1>
            <div class="right teach">
                <img src="../../img/5.jpg" alt="" srcset="">
                <em>Desir Thierry</em>
            </div>
            
        </div>
        
        <div class="section">
            
            <?php
                if(!empty($datas)):?>
                    <div class=<?=!empty($datas['error'])? 'error': 'succes'?>>
                    <?php foreach ($datas as $messsage){
                        if(!empty($datas['error'])){
                            foreach($messsage as $error){
                                echo $error;
                            }
                        }
                        else if(empty($datas['error'])){
                            echo($messsage);
                        }
                        
                     }?>
                    </div>
                <?php endif?>
            
            <form action="" method="POST" class="form-manage-course" enctype="multipart/form-data">
                <div class="input-box">
                    <label for="title">Tit kou an</label>
                    <input type="text" name="title">
                </div>
                <div class="input-box">
                     <label for="banner">Banner</label>
                    <div class = "file-box">
                        <input type = "file" name = "banner" id = "file" onchange="previouPicture(this)">
                        <img src="">
                        <i class ="ion-plus-circled"></i>
                    </div>
                </div>
                <div class="input-box">  
                    <label for="categories">Kategorie kou</label>
                    <input type = "text" multiple name = "category">
                </div>
                <div class="input-box">
                    <label for="description">Deskripsyon</label>
                    <textarea name="description" id="desc" cols="30" rows="5" aria-disabled=""></textarea>
                </div>
                <div class="input-box">
                    <label for="description">Introduction</label>
                    <textarea name="introduce" id="desc" cols="30" rows="5" aria-disabled=""></textarea>
                </div>
                <div class="buttons">
                    <button type="reset" class="r">Anile</button>
                    <button type="submit" class="s">konfime</button>
                </div>
            </form>
        </div>
            
    </div>
    <script>
        let button_input = document.querySelector('#file');
        let newButton = document.querySelector('.section .input-box .file-box');
        newButton.addEventListener('click', ()=>{
            button_input.click();
        });
        let image = document.querySelector('.section .input-box .file-box img');
        let previouPicture = (e)=>{
            const [picture] = e.files
            if(picture){
                image.classList.add('up');
                image.src = URL.createObjectURL(picture);
            }
        }
    </script>
</body>
</html>