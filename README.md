# Templates_site_PHP_SCSS_JS_SQL
English:

This is a template created in controller view model, which uses php object oriented.
To create your pages, you need:

- Go to the controllers file and add a file with the name of your page followed by Controller(HomeController.php)

- You can copy paste the contents of the pages already created and change the name of the class, in the function construct the name of the path and in dollars router create your route which leads to your page.
Example: home page ($router->"/home",[$this,"index"],"home.index")
if you have multiple pages for a domain create other routes and change the word index to the name of your file related to the page.
Example: homepage admin($router->"/home-Admin",[$this,"admin"],"home.admin")

- Then, the following functions create the pages, function index creates the index page, you can define the title of the page or other variable in it, to create the page you must reuse the render function
By replacing 'home.index' with your $name.
And add in compact or not your variables.

- If your page uses sql functions add in the brackets of the construct function after $router (, $authDB)
and in the contruct function ($this->authDB = $authDB;), then you can add your variables with what they do in your page function.
Example $image = $this->authDB->readAllImage();
and add $image in compact to have an image array usable in the page.

- All js functions can be separated into different files and sorted to better find themselves in the js file

- In the model file you have all the functions and classes that run this model vue controller, you don't need to touch unless you need to use sql and in that you can complete the autDB class which is already connected.

- In the src file you can put all your photos and PDFs.

- In the style file you can create your scss.

- In the views part all the html or php part, but without the big functions or variables which are in the controller.

- In the bdd file you create the connection instance to your database.

- In the route page, you have to create a new controller for each file you add in the controllers folder.
Example, I have a HomeController file in my controllers folder so I add.
$controllerHome = new HomeController($router);
in route.php and if I need a database and sql functions I add $authDB after the $router

Francais:

Ceci est un template cr???? en mod??le vue contr??leur, qui utilise l'orient?? objet de php.
Pour cr??er vos pages, il faut :

- Allez dans le fichier controllers et ajouter un fichier avec le nom de votre page suivie de Controller(HomeController.php)

- Vous pouvez y copier coller le contenu des pages d??j?? cr????es et changer le nom de la classe ,dans la fonction construct le nom du path et dans dollars router cr??er vos route qui m??ne ?? votre page.
Exemple: page d'accueil ($router->"/home",[$this,"index"],"home.index")
si vous avez plusieurs pages pour un domaine cr???? d'autres routes et changer le mot index par le nom de votre fichier li?? ?? la page.
Exemple: page d'accueil admin($router->"/home-Admin",[$this,"admin"],"home.admin")

- Ensuite, les fonctions qui suivent cr??ent les pages , function index cr????s la page index , vous pouvez d??finir le titre de la page ou d'autre variable dans celle-ci, pour cr??er la page vous devez r??utiliser la fonction rendre
En rempla??ant 'home.index' par votre $name.
Et ajouter dans compact ou non vos variables.

- Si votre page utilise des fonctions sql ajouter dans les parenth??ses de la fonction construct apr??s $router (,$authDB)
et dans la fonction contruct ($this->authDB = $authDB;), vous pourrez ensuite ajouter vos variables avec ce qu'elles font dans la fonction de votre page.
Exemple $image = $this->authDB->readAllImage();
et ?? ajouter $image dans compact pour avoir un tableau d'image utilisable dans la page.

- Toute les fonction js peuvent ??tre s??par??s dans diff??rents fichiers et trier pour mieux se retrouver dans le fichier js

- Dans le fichier mod??le, vous avez toutes les fonctions et classes qui font tourner se model vue controller, vous n'avez pas besoin dit toucher sauf si vous avez besoin d'utiliser sql et dans ce qu'?? vous pouvez compl??ter la class autDB qui est d??j?? reli??.

- Dans le fichier src vous pouvez d??poser toutes vos photos et PDF.

- Dans le fichier style, vous pouvez cr??er votre scss.

- Dans la partie views toute la partie html ou php, mais sans les grosses fonctions ou variables qui sont dans le controlleur.

- Dans le fichier bdd vous cr??ez l'instance de connexion ?? votre base de donn??es.

- Dans la page route, il faut cr??er un nouveau contr??leur ?? chaque fichier que vous ajoutez dans le dossier controllers.
Exemple, j'ai un fichier HomeController dans mon dossier controllers donc je rajoute.
$controllerHome = new HomeController($router);
dans route.php et si j'ai besoin d'une base de donner et des fonction sql je rajoute $authDB apr??s le $router
