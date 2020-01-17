<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @MyTechnosBlog/Front/layout.html.twig */
class __TwigTemplate_55962cbde72114264f4cb425d8f59088607e4f12cd3f05809a8753ad5961c2bd extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'main' => [$this, 'block_main'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 2), "locale", [], "any", false, false, false, 2), "html", null, true);
        echo "\">
<head>
    <title>Mon blog Technos</title>
    <meta charset=\"UTF-8\">
    <meta name=\"description\" content=\"Retrouvez les différentes infos sur les langages des programmations\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">

    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "
</head>

<body>
    <div id=\"coverSearch\">
        <form action=\"http://localhost/mon-blog-technos/web/app_dev.php/search\" method=\"get\">

            <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./img/cancel.png"), "html", null, true);
        echo "\" class=\"jsBtnSearch handleResponsive\" alt=\"crossBtn\">

            <label>Rechercher des articles :</label>
            <input type=\"text\" name=\"query\" id=\"search\">

        </form>
    </div>
    <div class=\"menuResponsive\" id=\"menuJsResponsive\">
        <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./img/cancel-white.png"), "html", null, true);
        echo "\" class=\"jsBtnCross\" alt=\"crossBtn\">
        <nav class=\"navHeaderResponsive\">
            <ul>
                <li>
                    <a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">Home</a>
                </li>
                <li>
                    <a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["category" => "javascript"]);
        echo "\">Javascript</a>
                </li>
                <li>
                    <a href=\"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["category" => "php"]);
        echo "\">PHP</a>
                </li>
                <li>
                    <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["category" => "rubis"]);
        echo "\">Rubis</a>
                </li>
                <li>
                    <a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["category" => "tutoriel"]);
        echo "\">Tutoriels</a>
                </li>
                <li>
                    <a href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["category" => "sondage"]);
        echo "\">Sondages</a>
                </li>
                <li>
                    <a href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\">Connexion</a>
                </li>
                <li>
                    <a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("registration");
        echo "\">S'inscrire</a>
                </li>
                <li class=\"jsBtnSearch\">
                    <img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./img/search.png"), "html", null, true);
        echo "\" alt=\"search\">
                </li>
                <li class=\"jsBtnSearchResponsive\">
                    <span>Rechercher</span>
                </li>
            </ul>
        </nav>
    </div>

  <header id=\"headerJs\">
      <div>
        <div class=\"containerHeader\">

            <div class=\"divLoginResgistration\">

                ";
        // line 75
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 76
            echo "
                    <span>Vous êtes connecté ";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 77), "username", [], "any", false, false, false, 77), "html", null, true);
            echo "</span>
                    <span><a href=\"";
            // line 78
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
            echo "\">Revenir au back-office</a></span>

                ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 81
            echo "
                    <span>Vous êtes connecté ";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 82), "username", [], "any", false, false, false, 82), "html", null, true);
            echo "</span>
                    <span><a href=\"";
            // line 83
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\">Deconnexion</a></span>

                ";
        } else {
            // line 86
            echo "
                <ul>
                    <li>
                        <a href=\"";
            // line 89
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\">
                            Connexion
                        </a>
                    </li>
                    <li>
                        <a href=\"";
            // line 94
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("registration");
            echo "\">
                            S'inscrire
                        </a>
                    </li>
                </ul>

                ";
        }
        // line 101
        echo "
            </div>

        <img src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./img/menu-button-of-three-horizontal-lines.png"), "html", null, true);
        echo "\" id=\"btn-menu\" class=\"jsBtnCross\" alt=\"responsive-logo-mon-techno-blog\">

        <div class=\"logoBlock\">
            <a href=\"/\">
                <img src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./img/Mon-blog-technos-white.png"), "html", null, true);
        echo "\" alt=\"MonBlogTechnos\">
            </a>
        </div>

          <nav class=\"navHeader\">
            <ul>
                <li>
                    <a href=\"";
        // line 115
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">Home</a>
                </li>
                <li>
                    <a href=\"";
        // line 118
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["category" => "javascript"]);
        echo "\">Javascript</a>
                </li>
                <li>
                    <a href=\"";
        // line 121
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["category" => "php"]);
        echo "\">PHP</a>
                </li>
                <li>
                    <a href=\"";
        // line 124
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["category" => "rubis"]);
        echo "\">Rubis</a>
                </li>
                <li>
                    <a href=\"";
        // line 127
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["category" => "tutoriel"]);
        echo "\">Tutoriels</a>
                </li>
                <li>
                    <a href=\"";
        // line 130
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["category" => "sondage"]);
        echo "\">Sondages</a>
                </li>
                <li class=\"jsBtnSearch\">
                  <img src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./img/search.png"), "html", null, true);
        echo "\" alt=\"search\">
                </li>
            </ul>
          </nav>
        </div>
      </div>
  </header>

  ";
        // line 141
        $this->displayBlock('main', $context, $blocks);
        // line 145
        echo "

<footer>
    <div class=\"footerWrapper\">
        <aside>
            <span>About me</span>
            Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte.
            Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié.
        </aside>
        <ul>
            <li>Browse</li>
            <li>Home</li>
            <li>
                <a href=\"";
        // line 158
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["category" => "php"]);
        echo "\">PHP</a>
            </li>
            <li>
                <a href=\"";
        // line 161
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["category" => "javascript"]);
        echo "\">Javascript
                </a>
            </li>
            <li>
                <a href=\"";
        // line 165
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["category" => "rubis"]);
        echo "\">Rubis</a>
            </li>
            <li>
                <a href=\"";
        // line 168
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["category" => "tutoriel"]);
        echo "\">Tutoriels</a>
            </li>
            <li>
                <a href=\"";
        // line 171
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["category" => "sondage"]);
        echo "\">Sondages</a>
            </li>
        </ul>
        <ul>
            <li>Connect</li>
            <li>Facebook</li>
            <li>Twitter</li>
            <li>Linkedin</li>
            <li>Instagram</li>
        </ul>
    </div>


  <details>
    <summary>Copyright O.Y</summary>
  </details>

</footer>


</body>


  ";
        // line 194
        $this->displayBlock('javascripts', $context, $blocks);
        // line 205
        echo "

</html>


";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "
        <link href=\"https://fonts.googleapis.com/css?family=Open+Sans\" rel=\"stylesheet\">
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css\">

    ";
    }

    // line 141
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 142
        echo "

  ";
    }

    // line 194
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 195
        echo "
      <!-- jQuery library (served from Google) -->
      <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js\"></script>
      <script src=\"https://code.jquery.com/ui/1.12.0/jquery-ui.min.js\" integrity=\"sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=\" crossorigin=\"anonymous\"></script>
      <script src=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js\"></script>
      <!-- bxSlider Javascript file -->
      <script src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/slider.js"), "html", null, true);
        echo "\" asyn></script>
      <script src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\" asyn></script>

  ";
    }

    public function getTemplateName()
    {
        return "@MyTechnosBlog/Front/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  390 => 202,  386 => 201,  378 => 195,  374 => 194,  368 => 142,  364 => 141,  356 => 13,  352 => 11,  348 => 10,  339 => 205,  337 => 194,  311 => 171,  305 => 168,  299 => 165,  292 => 161,  286 => 158,  271 => 145,  269 => 141,  258 => 133,  252 => 130,  246 => 127,  240 => 124,  234 => 121,  228 => 118,  222 => 115,  212 => 108,  205 => 104,  200 => 101,  190 => 94,  182 => 89,  177 => 86,  171 => 83,  167 => 82,  164 => 81,  158 => 78,  154 => 77,  151 => 76,  149 => 75,  131 => 60,  125 => 57,  119 => 54,  113 => 51,  107 => 48,  101 => 45,  95 => 42,  89 => 39,  83 => 36,  76 => 32,  65 => 24,  56 => 17,  54 => 10,  43 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MyTechnosBlog/Front/layout.html.twig", "C:\\wamp64\\www\\mon-blog-technos\\src\\My\\TechnosBlogBundle\\Resources\\views\\Front\\layout.html.twig");
    }
}
