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

/* @MyTechnosBlog/Back/layout.html.twig */
class __TwigTemplate_987f488f39e421e0e257504db270c019b80fb89e13620ef558265163f2a72eff extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MyTechnosBlog/Back/layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MyTechnosBlog/Back/layout.html.twig"));

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
        // line 16
        echo "

</head>
<body>

    <header id=\"headerJs\">
        <div>
            <div class=\"containerHeader\">

                <div class=\"logoBlock\">
                    <a href=\"/\">
                        <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./img/Mon-blog-technos-white.png"), "html", null, true);
        echo "\" alt=\"MonBlogTechnos\">
                    </a>
                </div>

                <nav class=\"navHeader\">
                    <ul>
                        <li>
                            <a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">Home</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["category" => "javascript"]);
        echo "\">Javascript</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["category" => "php"]);
        echo "\">PHP</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["category" => "rubis"]);
        echo "\">Rubis</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["category" => "tutoriel"]);
        echo "\">Tutoriels</a>
                        </li>
                        <li>
                            <a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["category" => "sondage"]);
        echo "\">Sondages</a>
                        </li>                                                                         
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    ";
        // line 57
        $this->displayBlock('main', $context, $blocks);
        // line 61
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
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">Home</a>
                </li>
                <li>
                    <a href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["category" => "php"]);
        echo "\">PHP</a>
                </li>
                <li>
                    <a href=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["category" => "javascript"]);
        echo "\">Javascript
                    </a>
                </li>
                <li>
                    <a href=\"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["category" => "rubis"]);
        echo "\">Rubis</a>
                </li>
                <li>
                    <a href=\"";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["category" => "tutoriel"]);
        echo "\">Tutoriels</a>
                </li>
                <li>
                    <a href=\"";
        // line 91
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
        // line 119
        $this->displayBlock('javascripts', $context, $blocks);
        // line 145
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

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 57
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 58
        echo "

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 119
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 120
        echo "
    <!-- jQuery library (served from Google) -->

      <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js\"></script>

      ";
        // line 125
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 125, $this->source); })()), "request", [], "any", false, false, false, 125), "pathInfo", [], "any", false, false, false, 125) == "/admin/add-article") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 125, $this->source); })()), "request", [], "any", false, false, false, 125), "pathInfo", [], "any", false, false, false, 125) == "/admin/add-administrator?page=1"))) {
            // line 126
            echo "
          <script src=\"//cdn.ckeditor.com/4.10.1/full/ckeditor.js\"></script>
          <script type=\"text/javascript\">

              \$(function(){

                  CKEDITOR.replace('content', {
                      height:500

                  });

              });

          </script>

      ";
        }
        // line 142
        echo "

  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@MyTechnosBlog/Back/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  309 => 142,  291 => 126,  289 => 125,  282 => 120,  272 => 119,  260 => 58,  250 => 57,  237 => 13,  233 => 11,  223 => 10,  208 => 145,  206 => 119,  175 => 91,  169 => 88,  163 => 85,  156 => 81,  150 => 78,  144 => 75,  128 => 61,  126 => 57,  115 => 49,  109 => 46,  103 => 43,  97 => 40,  91 => 37,  85 => 34,  75 => 27,  62 => 16,  60 => 10,  49 => 2,  46 => 1,);
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

    {% endblock %}


</head>
<body>

    <header id=\"headerJs\">
        <div>
            <div class=\"containerHeader\">

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

      {% if(app.request.pathInfo == '/admin/add-article' or app.request.pathInfo == '/admin/add-administrator?page=1') %}

          <script src=\"//cdn.ckeditor.com/4.10.1/full/ckeditor.js\"></script>
          <script type=\"text/javascript\">

              \$(function(){

                  CKEDITOR.replace('content', {
                      height:500

                  });

              });

          </script>

      {% endif %}


  {% endblock %}


</html>


", "@MyTechnosBlog/Back/layout.html.twig", "C:\\wamp64\\www\\mon-blog-technos\\src\\My\\TechnosBlogBundle\\Resources\\views\\Back\\layout.html.twig");
    }
}
