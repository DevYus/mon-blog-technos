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
class __TwigTemplate_0e7a1f9c29e9adedbaa07acbea238839e06de687244fd00b3964ad40f1e05d43 extends \Twig\Template
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

    <!-- ne pas oublier de mettre les links entre stylesheet -->
    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "

</head>
<body>

  <header id=\"headerJs\">
      <div>
          <div class=\"containerHeader\">

              <div class=\"logoBlock\">
                  <a href=\"/\">
                      <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./img/Mon-blog-technos-white.png"), "html", null, true);
        echo "\" alt=\"MonBlogTechnos\">
                  </a>
              </div>

              <nav class=\"navHeader\">
                  <ul>
                      <li>
                          <a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">Home</a>
                      </li>
                      <li>
                          <a href=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["category" => "javascript"]);
        echo "\">Javascript</a>
                      </li>
                      <li>
                          <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["category" => "php"]);
        echo "\">PHP</a>
                      </li>
                      <li>
                          <a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["category" => "rubis"]);
        echo "\">Rubis</a>
                      </li>
                      <li>
                          <a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["category" => "tutoriel"]);
        echo "\">Tutoriels</a>
                      </li>
                      <li>
                          <a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["category" => "sondage"]);
        echo "\">Sondages</a>
                      </li>
                      <li class=\"jsBtnSearch\">
                          <img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./img/search.png"), "html", null, true);
        echo "\" alt=\"search\">
                      </li>
                  </ul>
              </nav>
          </div>
      </div>
  </header>


  ";
        // line 62
        $this->displayBlock('main', $context, $blocks);
        // line 66
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
            <li>Tout sur le php</li>
            <li>News javascript</li>
            <li>Html5-CSS3</li>
            <li>Autres langages</li>
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
        // line 101
        $this->displayBlock('javascripts', $context, $blocks);
        // line 127
        echo "

</html>


";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "
        <link href=\"https://fonts.googleapis.com/css?family=Open+Sans\" rel=\"stylesheet\">
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    ";
    }

    // line 62
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 63
        echo "

  ";
    }

    // line 101
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 102
        echo "
    <!-- jQuery library (served from Google) -->

      <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js\"></script>

      ";
        // line 107
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 107), "pathInfo", [], "any", false, false, false, 107) == "/admin/add-article") || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 107), "pathInfo", [], "any", false, false, false, 107) == "/admin/add-administrator?page=1"))) {
            // line 108
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
        // line 124
        echo "

  ";
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
        return array (  234 => 124,  216 => 108,  214 => 107,  207 => 102,  203 => 101,  197 => 63,  193 => 62,  186 => 14,  182 => 12,  178 => 11,  169 => 127,  167 => 101,  130 => 66,  128 => 62,  116 => 53,  110 => 50,  104 => 47,  98 => 44,  92 => 41,  86 => 38,  80 => 35,  70 => 28,  57 => 17,  55 => 11,  43 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MyTechnosBlog/Back/layout.html.twig", "C:\\wamp64\\www\\mon-blog-technos\\src\\My\\TechnosBlogBundle\\Resources\\views\\Back\\layout.html.twig");
    }
}
