<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/User.php";
    require_once __DIR__."/../src/Project.php";

    $app = new Silex\Application();
    $server = 'mysql:host=localhost;dbname=songlab';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    $app['debug']=true;

    use Symfony\Component\HttpFoundation\Request;
    Request::enableHttpMethodParameterOverride();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('index.html.twig');
    });

    $app->post("/user", function() use ($app) {
        $id = null;
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = null; //null - editable in profile
        $username = $_POST['username'];
        $bio = $_POST['bio'];
        $photo = null; //null - upload on profile edit
        $password = $_POST['password1'];
        $user = new User($id, $first_name, $last_name, $email, $username, $bio, $photo, $password);
        $user->save();
        $user_projects = $user->getProjects();
        return $app['twig']->render('profile.html.twig', array('user' => $user, 'projects' => $user_projects));
    });

    $app->post("/user/{id}", function($id) use ($app) {
        $user = User::find($id);
        $user_projects = $user->getProjects();
        return $app['twig']->render('profile.html.twig', array('user' => $user, 'projects' => $user_projects));
    });

    $app->get("/user/{id}/edit_profile", function($id) use ($app){
        $user = User::find($id);
        return $app['twig']->render('edit_profile.html.twig', array('user' => $user));
    });

    $app->patch("/user/{id}/edit_profile", function($id) use ($app){
        $user = User::find($id);
        $new_first_name = $_POST['new_first_name'];
        $new_last_name = $_POST['new_last_name'];
        $new_email = $_POST['new_email'];
        $new_username = $_POST['new_username'];
        $new_bio = $_POST['new_bio'];
        $new_photo = $_POST['new_photo'];
        $user->update($new_first_name, $new_last_name, $new_email, $new_username, $new_bio, $new_photo);
        return $app['twig']->render('profile.html.twig', array('user' => $user, 'projects' => $user_projects));
    });

    $app->get("/user/{id}/edit_project", function($id) use ($app){
        $user = User::find($id);
        $project = $user->getProjects($user->getId());
        return $app['twig']->render('edit_project.html.twig', array('user' => $user));
    });

    $app->patch("/user/{id}/edit_project", function($id) use ($app){
        $user = User::find($id);
        $new_title = $_POST['new_title'];
        $new_description = $_POST['new_description'];
        $new_genre = $_POST['new_genre'];
        $new_resources = $_POST['new_resources'];
        $new_lyrics = $_POST['new_lyrics'];
        $new_type = $_POST['new_type'];
        $user->update($new_title, $new_description, $new_genre, $new_resources, $new_lyrics, $new_type);
        return $app['twig']->render('profile.html.twig', array('user' => $user, 'projects' => $user_projects));
    });

    return $app;
?>
