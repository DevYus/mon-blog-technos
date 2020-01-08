<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @MyTechnosBlog/Front/layout.html.twig */
class __TwigTemplate_1d6ef0e2a1ee883e622bfbc7a0b3db5a5a3f5f2d65f52f6f2885818f67a8e90f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'main' => [$this, 'block_main'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MyTechnosBlog/Front/layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MyTechnosBlog/Front/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", []), "locale", []), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./img/cancel.png"), "html", null, true);
        echo "\" class=\"jsBtnSearch handleResponsive\" alt=\"crossBtn\">

            <label>Rechercher des articles :</label>
            <input type=\"text\" name=\"query\" id=\"search\">

        </form>
    </div>
    <div class=\"menuResponsive\" id=\"menuJsResponsive\">
        <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./img/cancel-white.png"), "html", null, true);
        echo "\" class=\"jsBtnCross\" alt=\"crossBtn\">
        <nav class=\"navHeaderResponsive\">
            <ul>
                <li>
                    <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Home</a>
                </li>
                <li>
                    <a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category", ["category" => "javascript"]);
        echo "\">Javascript</a>
                </li>
                <li>
                    <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category", ["category" => "php"]);
        echo "\">PHP</a>
                </li>
                <li>
                    <a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category", ["category" => "rubis"]);
        echo "\">Rubis</a>
                </li>
                <li>
                    <a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category", ["category" => "tutoriel"]);
        echo "\">Tutoriels</a>
                </li>
                <li>
                    <a href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category", ["category" => "sondage"]);
        echo "\">Sondages</a>
                </li>
                <li>
                    <a href=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\">Connexion</a>
                </li>
                <li>
                    <a href=\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registration");
        echo "\">S'inscrire</a>
                </li>
                <li class=\"jsBtnSearch\">
                    <img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./img/search.png"), "html", null, true);
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
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 76
            echo "
                    <span>Vous êtes connecté ";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "username", []), "html", null, true);
            echo "</span>
                    <span><a href=\"";
            // line 78
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin");
            echo "\">Revenir au back-office</a></span>

                ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 81
            echo "
                    <span>Vous êtes connecté ";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", []), "username", []), "html", null, true);
            echo "</span>
                    <span><a href=\"";
            // line 83
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">Deconnexion</a></span>

                ";
        } else {
            // line 86
            echo "
                <ul>
                    <li>
                        <a href=\"";
            // line 89
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\">
                            Connexion
                        </a>
                    </li>
                    <li>
                        <a href=\"";
            // line 94
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registration");
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./img/menu-button-of-three-horizontal-lines.png"), "html", null, true);
        echo "\" id=\"btn-menu\" class=\"jsBtnCross\" alt=\"responsive-logo-mon-techno-blog\">

        <div class=\"logoBlock\">
            <a href=\"/\">
                <img src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./img/Mon-blog-technos-white.png"), "html", null, true);
        echo "\" alt=\"MonBlogTechnos\">
            </a>
        </div>

          <nav class=\"navHeader\">
            <ul>
                <li>
                    <a href=\"";
        // line 115
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Home</a>
                </li>
                <li>
                    <a href=\"";
        // line 118
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category", ["category" => "javascript"]);
        echo "\">Javascript</a>
                </li>
                <li>
                    <a href=\"";
        // line 121
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category", ["category" => "php"]);
        echo "\">PHP</a>
                </li>
                <li>
                    <a href=\"";
        // line 124
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category", ["category" => "rubis"]);
        echo "\">Rubis</a>
                </li>
                <li>
                    <a href=\"";
        // line 127
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category", ["category" => "tutoriel"]);
        echo "\">Tutoriels</a>
                </li>
                <li>
                    <a href=\"";
        // line 130
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category", ["category" => "sondage"]);
        echo "\">Sondages</a>
                </li>
                <li class=\"jsBtnSearch\">
                  <img src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./img/search.png"), "html", null, true);
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category", ["category" => "php"]);
        echo "\">PHP</a>
            </li>
            <li>
                <a href=\"";
        // line 161
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category", ["category" => "javascript"]);
        echo "\">Javascript
                </a>
            </li>
            <li>
                <a href=\"";
        // line 165
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category", ["category" => "rubis"]);
        echo "\">Rubis</a>
            </li>
            <li>
                <a href=\"";
        // line 168
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category", ["category" => "tutoriel"]);
        echo "\">Tutoriels</a>
            </li>
            <li>
                <a href=\"";
        // line 171
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category", ["category" => "sondage"]);
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "
        <link href=\"https://fonts.googleapis.com/css?family=Open+Sans\" rel=\"stylesheet\">
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css\">

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 141
    public function block_main($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 142
        echo "

  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 194
    public function block_javascripts($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 195
        echo "
      <!-- jQuery library (served from Google) -->
      <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js\"></script>
      <script src=\"https://code.jquery.com/ui/1.12.0/jquery-ui.min.js\" integrity=\"sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=\" crossorigin=\"anonymous\"></script>
      <script src=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js\"></script>
      <!-- bxSlider Javascript file -->
      <script src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/slider.js"), "html", null, true);
        echo "\" asyn></script>
      <script src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\" asyn></script>

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
        return array (  422 => 202,  418 => 201,  410 => 195,  401 => 194,  389 => 142,  380 => 141,  366 => 13,  362 => 11,  353 => 10,  338 => 205,  336 => 194,  310 => 171,  304 => 168,  298 => 165,  291 => 161,  285 => 158,  270 => 145,  268 => 141,  257 => 133,  251 => 130,  245 => 127,  239 => 124,  233 => 121,  227 => 118,  221 => 115,  211 => 108,  204 => 104,  199 => 101,  189 => 94,  181 => 89,  176 => 86,  170 => 83,  166 => 82,  163 => 81,  157 => 78,  153 => 77,  150 => 76,  148 => 75,  130 => 60,  124 => 57,  118 => 54,  112 => 51,  106 => 48,  100 => 45,  94 => 42,  88 => 39,  82 => 36,  75 => 32,  64 => 24,  55 => 17,  53 => 10,  42 => 2,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
        <form action=\"http://localhost/mon-blog-technos/web/app_dev.php/search\" method=\"get\">

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
            <span>About me</span>
            Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte.
            Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié.
        </aside>
        <ul>
            <li>Browse</li>
            <li>Home</li>
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


  {% block javascripts %}

      <!-- jQuery library (served from Google) -->
      <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js\"></script>
      <script src=\"https://code.jquery.com/ui/1.12.0/jquery-ui.min.js\" integrity=\"sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=\" crossorigin=\"anonymous\"></script>
      <script src=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js\"></script>
      <!-- bxSlider Javascript file -->
      <script src=\"{{ asset('js/slider.js') }}\" asyn></script>
      <script src=\"{{ asset('js/main.js') }}\" asyn></script>

  {% endblock %}


</html>


", "@MyTechnosBlog/Front/layout.html.twig", "C:\\wamp64\\www\\mon-blog-technos\\src\\My\\TechnosBlogBundle\\Resources\\views\\Front\\layout.html.twig");
    }
}
