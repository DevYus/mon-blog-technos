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

/* @MyTechnosBlog/Front/Category/category.html.twig */
class __TwigTemplate_f17fb8b3be2e1ecb013d841949b86b7de4944e87d08c3a77b12b964502327a49 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

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
        $this->parent = $this->loadTemplate("@MyTechnosBlog/Front/layout.html.twig", "@MyTechnosBlog/Front/Category/category.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
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
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article", ["category" => twig_replace_filter($this->getAttribute($context["articleCategory"], "category", []), ["é" => "e"]), "id" => $this->getAttribute($context["articleCategory"], "id", []), "slug" => $this->getAttribute($context["articleCategory"], "slug", [])]), "html", null, true);
                echo "\">
                        <article>
                              <div class=\"imgContainer\">
                                  <img src=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/" . $this->getAttribute($context["articleCategory"], "pathImg", []))), "html", null, true);
                echo "\" alt=\"\">
                              </div>
                              <div class=\"contentContainer\">
                                  <span class=\"categoryArticle\">Catégorie - ";
                // line 26
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, ($context["category"] ?? null)), "html", null, true);
                echo "</span>
                                  <h2>";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["articleCategory"], "title", []), "html", null, true);
                echo "</h2>
                                  <p>";
                // line 28
                echo strip_tags(twig_slice($this->env, twig_convert_encoding($this->getAttribute($context["articleCategory"], "content", []), "UTF-8", "HTML-ENTITIES"), 0, 150), "p");
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
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article", ["category" => twig_replace_filter($this->getAttribute($context["lastArticle"], "category", []), ["é" => "e"]), "id" => $this->getAttribute($context["lastArticle"], "id", []), "slug" => $this->getAttribute($context["lastArticle"], "slug", [])]), "html", null, true);
                echo "\">
                                      ";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["lastArticle"], "title", []), "html", null, true);
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category", ["category" => "javascript"]);
        echo "\">Javascript</a>
                      </li>
                      <li>
                          <a href=\"";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category", ["category" => "php"]);
        echo "\">PHP</a>
                      </li>
                      <li>
                          <a href=\"";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category", ["category" => "rubis"]);
        echo "\">Rubis</a>
                      </li>
                      <li>
                          <a href=\"";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category", ["category" => "tutoriel"]);
        echo "\">Tutoriels</a>
                      </li>
                      <li>
                          <a href=\"";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category", ["category" => "sondage"]);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./img/facebook.png"), "html", null, true);
        echo "\" alt=\"facebook\">
                      </a>
                  </div>
                  <div>
                      <a href=\"\">
                        <img src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./img/twitter.png"), "html", null, true);
        echo "\" alt=\"facebook\">
                      </a>
                  </div>
                  <div>
                      <a href=\"\">
                        <img src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./img/google-plus.png"), "html", null, true);
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
        return array (  212 => 97,  204 => 92,  196 => 87,  184 => 78,  178 => 75,  172 => 72,  166 => 69,  160 => 66,  152 => 60,  148 => 58,  137 => 53,  133 => 52,  129 => 50,  125 => 49,  122 => 48,  120 => 47,  111 => 40,  105 => 36,  101 => 34,  89 => 28,  85 => 27,  81 => 26,  75 => 23,  69 => 20,  66 => 19,  62 => 18,  59 => 17,  57 => 16,  51 => 13,  42 => 6,  39 => 5,  29 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@MyTechnosBlog/Front/Category/category.html.twig", "C:\\wamp64\\www\\mon-blog-technos\\src\\My\\TechnosBlogBundle\\Resources\\views\\Front\\Category\\category.html.twig");
    }
}
