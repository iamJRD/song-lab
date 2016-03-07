<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/User.php";
    require_once __DIR__."/../src/Project .php";

    $app = new Silex\Application();
    $server = 'mysql:host=localhost;dbname=songlab';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    use Symfony\Component\HttpFoundation\Request;
    Request::enableHttpMethodParameterOverride();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('index.html.twig');
    });

    $app->post("/sign_up", function() use ($app) {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $bio = $_POST['bio'];
        $photo = $_POST['photo'];
        $user = new User($first_name, $last_name, $email, $username, $bio, $photo);
        $user->save();
        $user_projects = $user->getProjects();

        return $app['twig']->render('profile.html.twig', array('user' => $user, 'projects' => $user_projects));
    });

    $app->post("/user/{id}", function($id) use ($app) {
        $user = User::find($id);
        $user_projects = $user->getProjects();
        return $app['twig']->render('profile.html.twig', array('user' => $user, 'projects' => $user_projects));
    });

    return $app;
?>
