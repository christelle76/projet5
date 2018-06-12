<?php
require_once('Controller\loginController.php');
require_once('Controller\visitorController.php');
require_once('Controller\memberController.php');
require_once('Controller\postController.php');

$loginController = new LoginController();
$visitorController = new VisitorController();
$memberController = new MemberController();
$postController = new PostController();

$loginController->isConnected();
$postController->testDisconnect();

if($loginController->isConnected()) {
    $postController->testAddPost();
    if (isset($_GET['page'])){
        switch ($_GET['page']) {
            case "accueil":
                echo "accueil";
                $memberController->accueil();
                break;
            case "adherents":
                $memberController->adherents();
                break;
            case "evenements":
                $memberController->evenements();
                break;
            case "contact":
                $postController->testFormContact();
                $memberController->contact();
                break;
            case "forum":
                if(isset($_GET['categorie'])){
                    if(!empty($postController->testCategorieExist($_GET['categorie']))){
                        $memberController->forum_topics($_GET['categorie']);
                    } else {
                        $memberController->error();
                    }
                } else if (isset($_GET['topic'])){
                    if(!empty($postController->testTopicExist($_GET['topic']))){
                        $memberController->forum_posts_member($_GET['topic']);
                    } else {
                        $memberController->error();
                    }
                } else {
                    $memberController->forum_categories();
                }
                break;
            case "":
                $memberController->error();
            default:
                $memberController->error();
        }
    } else {
        $memberController->accueil();
    } 
} else {
    $postController->connexionTest();
    if (isset($_GET['page'])){
        switch ($_GET['page']) {
            case "accueil":
                $visitorController->accueil();
                break;
            case "adherents":
                $visitorController->adherents();
                break;
            case "evenements":
                $visitorController->evenements();
                break;
            case "contact":
                $visitorController->contact();
                break;
            case "forum":
                if(isset($_GET['categorie'])){
                    $visitorController->forum_topics($_GET['categorie']);
                } else if (isset($_GET['topic'])){
                    $visitorController->forum_posts_visitor($_GET['topic']);
                } else {
                    $visitorController->forum_categories();
                }
                break;
            case "":
                $visitorController->error();
            default:
                $visitorController->error();
        }
    } else {
        $visitorController->accueil();
    }
}
