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
class __TwigTemplate_6ab87900ffaa0bac637205c458a5579ae1c30f7f7ba9e1d1234f3e1101d49412 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MyTechnosBlog/Front/layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MyTechnosBlog/Front/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "request", [], "any", false, false, false, 2), "locale", [], "any", false, false, false, 2), "html", null, true);
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
        <form action=\"https://monblogtechnos.fr/search\" method=\"get\">

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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "user", [], "any", false, false, false, 77), "username", [], "any", false, false, false, 77), "html", null, true);
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 82, $this->source); })()), "user", [], "any", false, false, false, 82), "username", [], "any", false, false, false, 82), "html", null, true);
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
            <span>À propos</span>
           La programmation web est la programmation informatique qui permet d'éditer des sites web. Elle permet la mise en place d'applications constituées de pages pouvant prendre différentes formes, notamment :

           Un ensemble de pages « statiques », c'est-à-dire dont le contenu n'est pas influencé par l'internaute qui la demande, et qui n'évolue pas sans une intervention manuelle sur le code.
           Un ensemble de pages « dynamiques », c'est-à-dire dont le contenu évolue sans que le code du site web ne soit modifié, soit via l'interaction des utilisateurs, soit par du calcul. C'est le cas de la très large majorité des sites web depuis le début des années 2000.

        </aside>
        <ul>
            <li>Naviger</li>
            <li>
                <a href=\"";
        // line 159
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">Home</a>
            </li>
            <li>
                <a href=\"";
        // line 162
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["category" => "php"]);
        echo "\">PHP</a>
            </li>
            <li>
                <a href=\"";
        // line 165
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["category" => "javascript"]);
        echo "\">Javascript
                </a>
            </li>
            <li>
                <a href=\"";
        // line 169
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["category" => "rubis"]);
        echo "\">Rubis</a>
            </li>
            <li>
                <a href=\"";
        // line 172
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["category" => "tutoriel"]);
        echo "\">Tutoriels</a>
            </li>
            <li>
                <a href=\"";
        // line 175
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["category" => "sondage"]);
        echo "\">Sondages</a>
            </li>
        </ul>
        <ul>
            <li>Connect</li>
            <li>           
                <a href=\"https://www.facebook.com/\">Facebook</a>
            </li>
            <li>
                <a href=\"https://twitter.com/login?lang=fr\">Twitter</a>
            </li>
            <li>
                <a href=\"https://www.instagram.com/?hl=fr\">Instagram</a>
            </li>
            <li>
                <a href=\"https://fr.linkedin.com/\">Linkedin</a>
            </li>
        </ul>
    </div>

  <details>
    <summary>Copyright O.Y</summary>
  </details>

</footer>


</body>

  ";
        // line 204
        $this->displayBlock('javascripts', $context, $blocks);
        // line 217
        echo "

</html>


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "
        <link href=\"https://fonts.googleapis.com/css?family=Open+Sans\" rel=\"stylesheet\">
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css\">

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 141
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 142
        echo "

  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 204
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 205
        echo "
      <!-- jQuery library (served from Google) -->
      <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js\"></script>
      <script src=\"https://code.jquery.com/ui/1.12.0/jquery-ui.min.js\" integrity=\"sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=\" crossorigin=\"anonymous\"></script>
      <script src=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js\"></script>
      <script type=\"text/javascript\" src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
      
      ";
        // line 212
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 212, $this->source); })()), "request", [], "any", false, false, false, 212), "requestUri", [], "any", false, false, false, 212) == "/")) {
            // line 213
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["scriptPath"]) || array_key_exists("scriptPath", $context) ? $context["scriptPath"] : (function () { throw new RuntimeError('Variable "scriptPath" does not exist.', 213, $this->source); })())), "html", null, true);
            echo "\"></script>
      ";
        }
        // line 215
        echo "      
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  453 => 215,  447 => 213,  445 => 212,  440 => 210,  433 => 205,  423 => 204,  411 => 142,  401 => 141,  387 => 13,  383 => 11,  373 => 10,  358 => 217,  356 => 204,  324 => 175,  318 => 172,  312 => 169,  305 => 165,  299 => 162,  293 => 159,  277 => 145,  275 => 141,  264 => 133,  258 => 130,  252 => 127,  246 => 124,  240 => 121,  234 => 118,  228 => 115,  218 => 108,  211 => 104,  206 => 101,  196 => 94,  188 => 89,  183 => 86,  177 => 83,  173 => 82,  170 => 81,  164 => 78,  160 => 77,  157 => 76,  155 => 75,  137 => 60,  131 => 57,  125 => 54,  119 => 51,  113 => 48,  107 => 45,  101 => 42,  95 => 39,  89 => 36,  82 => 32,  71 => 24,  62 => 17,  60 => 10,  49 => 2,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"{{ app.request.locale }}\">
<head>
    <title>Mon blog Technos</title>
    <meta charset=\"UTF-8\">
    <meta name=\"description\" content=\"Retrouvez les différentes infos sur les langages des programmations\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">

    {% block stylesheets %}

        <link href=\"https://fonts.googleapis.com/css?family=Open+Sans\" rel=\"stylesheet\">
        <link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css\">

    {% endblock %}

</head>

<body>
    <div id=\"coverSearch\">
        <form action=\"https://monblogtechnos.fr/search\" method=\"get\">

            <img src=\"{{ asset('./img/cancel.png') }}\" class=\"jsBtnSearch handleResponsive\" alt=\"crossBtn\">

            <label>Rechercher des articles :</label>
            <input type=\"text\" name=\"query\" id=\"search\">

        </form>
    </div>
    <div class=\"menuResponsive\" id=\"menuJsResponsive\">
        <img src=\"{{ asset('./img/cancel-white.png') }}\" class=\"jsBtnCross\" alt=\"crossBtn\">
        <nav class=\"navHeaderResponsive\">
            <ul>
                <li>
                    <a href=\"{{ path('homepage') }}\">Home</a>
                </li>
                <li>
                    <a href=\"{{ path('category', { 'category' : 'javascript' }) }}\">Javascript</a>
                </li>
                <li>
                    <a href=\"{{ path('category', { 'category' : 'php' }) }}\">PHP</a>
                </li>
                <li>
                    <a href=\"{{ path('category', { 'category' : 'rubis' }) }}\">Rubis</a>
                </li>
                <li>
                    <a href=\"{{ path('category', { 'category' : 'tutoriel' }) }}\">Tutoriels</a>
                </li>
                <li>
                    <a href=\"{{ path('category', { 'category' : 'sondage' }) }}\">Sondages</a>
                </li>
                <li>
                    <a href=\"{{ path('login') }}\">Connexion</a>
                </li>
                <li>
                    <a href=\"{{ path('registration') }}\">S'inscrire</a>
                </li>
                <li class=\"jsBtnSearch\">
                    <img src=\"{{ asset('./img/search.png') }}\" alt=\"search\">
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

                {% if is_granted('ROLE_ADMIN') %}

                    <span>Vous êtes connecté {{ app.user.username }}</span>
                    <span><a href=\"{{ path('admin') }}\">Revenir au back-office</a></span>

                {% elseif is_granted('ROLE_USER') %}

                    <span>Vous êtes connecté {{ app.user.username }}</span>
                    <span><a href=\"{{ path('logout') }}\">Deconnexion</a></span>

                {% else %}

                <ul>
                    <li>
                        <a href=\"{{ path('login') }}\">
                            Connexion
                        </a>
                    </li>
                    <li>
                        <a href=\"{{ path('registration') }}\">
                            S'inscrire
                        </a>
                    </li>
                </ul>

                {% endif %}

            </div>

        <img src=\"{{ asset('./img/menu-button-of-three-horizontal-lines.png') }}\" id=\"btn-menu\" class=\"jsBtnCross\" alt=\"responsive-logo-mon-techno-blog\">

        <div class=\"logoBlock\">
            <a href=\"/\">
                <img src=\"{{ asset('./img/Mon-blog-technos-white.png') }}\" alt=\"MonBlogTechnos\">
            </a>
        </div>

          <nav class=\"navHeader\">
            <ul>
                <li>
                    <a href=\"{{ path('homepage') }}\">Home</a>
                </li>
                <li>
                    <a href=\"{{ path('category', { 'category' : 'javascript' }) }}\">Javascript</a>
                </li>
                <li>
                    <a href=\"{{ path('category', { 'category' : 'php' }) }}\">PHP</a>
                </li>
                <li>
                    <a href=\"{{ path('category', { 'category' : 'rubis' }) }}\">Rubis</a>
                </li>
                <li>
                    <a href=\"{{ path('category', { 'category' : 'tutoriel' }) }}\">Tutoriels</a>
                </li>
                <li>
                    <a href=\"{{ path('category', { 'category' : 'sondage' }) }}\">Sondages</a>
                </li>
                <li class=\"jsBtnSearch\">
                  <img src=\"{{ asset('./img/search.png') }}\" alt=\"search\">
                </li>
            </ul>
          </nav>
        </div>
      </div>
  </header>
                          
  {% block main %}


  {% endblock %}

<footer>
    <div class=\"footerWrapper\">
        <aside>
            <span>À propos</span>
           La programmation web est la programmation informatique qui permet d'éditer des sites web. Elle permet la mise en place d'applications constituées de pages pouvant prendre différentes formes, notamment :

           Un ensemble de pages « statiques », c'est-à-dire dont le contenu n'est pas influencé par l'internaute qui la demande, et qui n'évolue pas sans une intervention manuelle sur le code.
           Un ensemble de pages « dynamiques », c'est-à-dire dont le contenu évolue sans que le code du site web ne soit modifié, soit via l'interaction des utilisateurs, soit par du calcul. C'est le cas de la très large majorité des sites web depuis le début des années 2000.

        </aside>
        <ul>
            <li>Naviger</li>
            <li>
                <a href=\"{{ path('homepage') }}\">Home</a>
            </li>
            <li>
                <a href=\"{{ path('category', { 'category' : 'php' }) }}\">PHP</a>
            </li>
            <li>
                <a href=\"{{ path('category', { 'category' : 'javascript' }) }}\">Javascript
                </a>
            </li>
            <li>
                <a href=\"{{ path('category', { 'category' : 'rubis' }) }}\">Rubis</a>
            </li>
            <li>
                <a href=\"{{ path('category', { 'category' : 'tutoriel' }) }}\">Tutoriels</a>
            </li>
            <li>
                <a href=\"{{ path('category', { 'category' : 'sondage' }) }}\">Sondages</a>
            </li>
        </ul>
        <ul>
            <li>Connect</li>
            <li>           
                <a href=\"https://www.facebook.com/\">Facebook</a>
            </li>
            <li>
                <a href=\"https://twitter.com/login?lang=fr\">Twitter</a>
            </li>
            <li>
                <a href=\"https://www.instagram.com/?hl=fr\">Instagram</a>
            </li>
            <li>
                <a href=\"https://fr.linkedin.com/\">Linkedin</a>
            </li>
        </ul>
    </div>

  <details>
    <summary>Copyright O.Y</summary>
  </details>

</footer>


</body>

  {% block javascripts %}

      <!-- jQuery library (served from Google) -->
      <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js\"></script>
      <script src=\"https://code.jquery.com/ui/1.12.0/jquery-ui.min.js\" integrity=\"sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=\" crossorigin=\"anonymous\"></script>
      <script src=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js\"></script>
      <script type=\"text/javascript\" src=\"{{ asset('js/main.js') }}\"></script>
      
      {% if app.request.requestUri == '/' %}
        <script type=\"text/javascript\" src=\"{{ asset(scriptPath) }}\"></script>
      {% endif %}
      
  {% endblock %}


</html>


", "@MyTechnosBlog/Front/layout.html.twig", "C:\\wamp64\\www\\mon-blog-technos\\src\\My\\TechnosBlogBundle\\Resources\\views\\Front\\layout.html.twig");
    }
}
