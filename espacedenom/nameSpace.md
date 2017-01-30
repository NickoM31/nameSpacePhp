* Si ce n'est pas déjà fait, installez composer
* Créez un nouveau dossier espacedenom et rendez vous dans ce dossier
* Effectuez un composer init
* Créez un dossier src, qui contiendra deux dossiers Foo et Bar
* Chacun de ces dossiers contiendra une classe Client dans un fichier Client.php
* Chacune de ces classes contient une méthode publique render qui returourne sous forme de chaîne de caractère le nom du dossier qui le contient
* Dans le fichier composer.json ajouter un objet autoload qui contiendra un objet psr-4, dance ce dernier vous ajouterez une propriété que vous nommerez de votre nom d'utilisateur github, deux antislashs puis App, et enfin deux autres antislashs sous la forme "Maximepawlakfr\\App\\" : "src/" et comme valeur le nom du dossier qui contient vos sources src/ (/!\ attention à la syntaxe, c'est un fichier json, double guillemet, virgules à la fin des propriétés, et pas de virgule à la dernière propriété)
* Ajoutez à chacune de vos classes dans src le namespace adéquat (ex: namespace Maximepawlakfr\App\Foo)
* Dans un terminal tapez composer dumpautoload
* Créez à la racine du votre miniapp un fichier index.php qui inclue le fichier autoload.php qui se situe dans le dossier vendor
* Et essayez d'afficher la méthode render de vos deux classes
