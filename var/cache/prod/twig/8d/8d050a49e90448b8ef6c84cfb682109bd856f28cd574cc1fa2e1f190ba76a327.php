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

/* @MyTechnosBlog/Front/Category/category.html.twig */
class __TwigTemplate_758108af8d7f165527c6763c36ea299c86e0699759b2eda158b50094abe70175 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "@MyTechnosBlog/Front/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@MyTechnosBlog/Front/layout.html.twig", "@MyTechnosBlog/Front/Category/category.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
<!-- Extension du layout au templates fils -->
  <main>

      <section class=\"categorySection\">

          <span class=\"categorySubTitle\">Article sur</span>
          <h1>";
        // line 13
        echo twig_escape_filter($this->env, ($context["category"] ?? null), "html", null, true);
        echo "</h1>
          <div class=\"containerCatArticle\">

              ";
        // line 16
        if ( !twig_test_empty(($context["articlesCategory"] ?? null))) {
            // line 17
            echo "
                  ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["articlesCategory"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["articleCategory"]) {
                // line 19
                echo "
                      <a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article", ["category" => twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["articleCategory"], "category", [], "any", false, false, false, 20), ["é" => "e"]), "id" => twig_get_attribute($this->env, $this->source, $context["articleCategory"], "id", [], "any", false, false, false, 20), "slug" => twig_get_attribute($this->env, $this->source, $context["articleCategory"], "slug", [], "any", false, false, false, 20)]), "html", null, true);
                echo "\">
                        <article>
                              <div class=\"imgContainer\">
                                  <img src=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["articleCategory"], "pathImg", [], "any", false, false, false, 23))), "html", null, true);
                echo "\" alt=\"\">
                              </div>
                              <div class=\"contentContainer\">
                                  <span class=\"categoryArticle\">Catégorie - ";
                // line 26
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, ($context["category"] ?? null)), "html", null, true);
                echo "</span>
                                  <h2>";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["articleCategory"], "title", [], "any", false, false, false, 27), "html", null, true);
                echo "</h2>
                                  <p>";
                // line 28
                echo strip_tags(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["articleCategory"], "content", [], "any", false, false, false, 28), 0, 150), "p");
                echo "...</p>
                              </div>
                       </article>
                      </a>

                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['articleCategory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "
              ";
        } else {
            // line 36
            echo "
                  <h2>Il n'existe aucun article de cette catégorie</h2>

              ";
        }
        // line 40
        echo "
          </div>

          <div class=\"asideContainer\">
              <aside>
                  <h3>Derniers articles</h3>
                  <ul>
                      ";
        // line 47
        if ((isset($context["lastArticles"]) || array_key_exists("lastArticles", $context))) {
            // line 48
            echo "
                          ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["lastArticles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["lastArticle"]) {
                // line 50
                echo "
                              <li>
                                  <a href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article", ["category" => twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["lastArticle"], "category", [], "any", false, false, false, 52), ["é" => "e"]), "id" => twig_get_attribute($this->env, $this->source, $context["lastArticle"], "id", [], "any", false, false, false, 52), "slug" => twig_get_attribute($this->env, $this->source, $context["lastArticle"], "slug", [], "any", false, false, false, 52)]), "html", null, true);
                echo "\">
                                      ";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lastArticle"], "title", [], "any", false, false, false, 53), "html", null, true);
                echo "
                                  </a>
                              </li>

                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lastArticle'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "
                      ";
        }
        // line 60
        echo "                  </ul>
              </aside>
              <aside>
                  <h3>Catégories</h3>
                  <ul>
                      <li>
                          <a href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["category" => "javascript"]);
        echo "\">Javascript</a>
                      </li>
                      <li>
                          <a href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["category" => "php"]);
        echo "\">PHP</a>
                      </li>
                      <li>
                          <a href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["category" => "rubis"]);
        echo "\">Rubis</a>
                      </li>
                      <li>
                          <a href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["category" => "tutoriel"]);
        echo "\">Tutoriels</a>
                      </li>
                      <li>
                          <a href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["category" => "sondage"]);
        echo "\">Sondages</a>
                      </li>
                  </ul>
              </aside>

              <aside class=\"asidebarSocialNetwork\">
                  <h2>Suivez-nous</h2>
                  <div>
                      <a href=\"\">
                        <img src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./img/facebook.png"), "html", null, true);
        echo "\" alt=\"facebook\">
                      </a>
                  </div>
                  <div>
                      <a href=\"\">
                        <img src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./img/twitter.png"), "html", null, true);
        echo "\" alt=\"facebook\">
                      </a>
                  </div>
                  <div>
                      <a href=\"\">
                        <img src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./img/google-plus.png"), "html", null, true);
        echo "\" alt=\"facebook\">
                      </a>
                  </div>
              </aside>
          </div>
      </section>


  </main>


";
    }

    public function getTemplateName()
    {
        return "@MyTechnosBlog/Front/Category/category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 97,  212 => 92,  204 => 87,  192 => 78,  186 => 75,  180 => 72,  174 => 69,  168 => 66,  160 => 60,  156 => 58,  145 => 53,  141 => 52,  137 => 50,  133 => 49,  130 => 48,  128 => 47,  119 => 40,  113 => 36,  109 => 34,  97 => 28,  93 => 27,  89 => 26,  83 => 23,  77 => 20,  74 => 19,  70 => 18,  67 => 17,  65 => 16,  59 => 13,  50 => 6,  46 => 5,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MyTechnosBlog/Front/Category/category.html.twig", "C:\\wamp64\\www\\mon-blog-technos\\src\\My\\TechnosBlogBundle\\Resources\\views\\Front\\Category\\category.html.twig");
    }
}
