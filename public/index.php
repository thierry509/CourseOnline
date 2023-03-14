<?php
require '../vendor/autoload.php';
define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', 'Haiti204');
define("DATABASE", 'course_online');

function getIp(){
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
      $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
      $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
      $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
  }
//   dd('L adresse IP de l utilisateur est : '.getIp());



use Thierry\Course\Controllers\CourseController\CourseController;
use Thierry\Course\Router\Router;
use Thierry\Course\Controllers\MainController;
use Thierry\Course\SetImage\SetImage;
define('banner_path', dirname(__DIR__) . '/public/img/banner/');
define('urlPath', dirname(__DIR__) . '/view/');
$router = new Router();
$controllerM = new MainController();
$controllerCourse = new CourseController();
$router->get('/', ['Thierry\Course\Controllers\MainController', 'home'], 'home');
$router->get('/courseList',['Thierry\Course\Controllers\CourseController\CourseController', 'listCourse'], 'listCourse');
$router->get('/presentation/[*:title]-[i:id]', ['Thierry\Course\Controllers\CourseController\CourseController', 'presentationCourse'], 'presentation');
$router->get('/session/[*:courceName]-[i:session]', ['Thierry\Course\Controllers\CourseController\CourseController'], 'session');
$router->get_post('/teacher/addCourse', ['Thierry\Course\Controllers\TeacherController\TeacherController', 'addCourse'], 'addCourse');
// $router->get('/teacher/addCourse', ['Thierry\course\controller\TeacherController\TeacherController', 'addingCourse'], 'addingCourse');
$router->get('/validation-pay/[*:title]-[i:id]', ['Thierry\course\Controllers\CourseController\CourseController', 'validation'], 'validation');
$router->get('/teacher/addCourse', ['Thierry\course\controller\TeacherController\TeacherController', 'manageCourse'], 'ManageCourse');
$router->run();
// 817