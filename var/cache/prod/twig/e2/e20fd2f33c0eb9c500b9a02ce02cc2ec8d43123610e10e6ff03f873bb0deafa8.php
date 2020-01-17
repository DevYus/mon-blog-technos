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

/* @MyTechnosBlog/Front/Search/search.html.twig */
class __TwigTemplate_b77a822469a8f169e765b6b600f8a2f095e28b6f1078440dd6e7a20700bca25d extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@MyTechnosBlog/Front/layout.html.twig", "@MyTechnosBlog/Front/Search/search.html.twig", 2);
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
      <section class=\"searchSection\">
          <span class=\"searchSubTitle\">Resultat(s)</span>
          <h1></h1>
          <div class=\"containerCatArticle\">

              ";
        // line 15
        if (twig_test_iterable(($context["searchArticles"] ?? null))) {
            // line 16
            echo "
                  ";
            // line 17
            if ((($context["count"] ?? null) != 0)) {
                // line 18
                echo "
                      ";
                // line 19
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["searchArticles"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["search"]) {
                    // line 20
                    echo "
                          <a href=\"";
                    // line 21
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article", ["category" => twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["search"], "category", [], "any", false, false, false, 21), ["é" => "e"]), "id" => twig_get_attribute($this->env, $this->source, $context["search"], "id", [], "any", false, false, false, 21), "slug" => twig_get_attribute($this->env, $this->source, $context["search"], "slug", [], "any", false, false, false, 21)]), "html", null, true);
                    echo "\">
                                <article>
                                      <div class=\"imgContainer\">
                                          <img src=\"";
                    // line 24
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["search"], "pathImg", [], "any", false, false, false, 24))), "html", null, true);
                    echo "\" alt=\"\">
                                      </div>
                                      <div class=\"contentContainer\">
                                          <span class=\"categoryArticle\">Catégorie - ";
                    // line 27
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["search"], "category", [], "any", false, false, false, 27)), "html", null, true);
                    echo "</span>
                                          <h2>";
                    // line 28
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["search"], "title", [], "any", false, false, false, 28), "html", null, true);
                    echo "</h2>
                                          <p>";
                    // line 29
                    echo strip_tags(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["search"], "content", [], "any", false, false, false, 29), 0, 150), "p");
                    echo "...</p>
                                      </div>
                               </article>
                          </a>

                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['search'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 35
                echo "
                  ";
            } else {
                // line 37
                echo "
                      <p>Aucun resultat(s) n'a été trouvé</p>

                  ";
            }
            // line 41
            echo "

              ";
        }
        // line 44
        echo "

          </div>

          <div class=\"asideContainer\">
              <aside>
                  <h3>Derniers articles</h3>
                  <ul>
                      ";
        // line 52
        if ((isset($context["lastArticles"]) || array_key_exists("lastArticles", $context))) {
            // line 53
            echo "
                          ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["lastArticles"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["lastArticle"]) {
                // line 55
                echo "
                              <li>
                                  <a href=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article", ["category" => twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["lastArticle"], "category", [], "any", false, false, false, 57), ["é" => "e"]), "id" => twig_get_attribute($this->env, $this->source, $context["lastArticle"], "id", [], "any", false, false, false, 57), "slug" => twig_get_attribute($this->env, $this->source, $context["lastArticle"], "slug", [], "any", false, false, false, 57)]), "html", null, true);
                echo "\">
                                      ";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lastArticle"], "title", [], "any", false, false, false, 58), "html", null, true);
                echo "
                                  </a>
                              </li>

                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lastArticle'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "
                      ";
        }
        // line 65
        echo "                  </ul>
              </aside>
              <aside>
                  <h3>Catégories</h3>
                  <ul>
                      <li>
                          <a href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["category" => "javascript"]);
        echo "\">Javascript</a>
                      </li>
                      <li>
                          <a href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["category" => "php"]);
        echo "\">PHP</a>
                      </li>
                      <li>
                          <a href=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["category" => "rubis"]);
        echo "\">Rubis</a>
                      </li>
                      <li>
                          <a href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["category" => "tutoriel"]);
        echo "\">Tutoriels</a>
                      </li>
                      <li>
                          <a href=\"";
        // line 83
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
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./img/facebook.png"), "html", null, true);
        echo "\" alt=\"facebook\">
                      </a>
                  </div>
                  <div>
                      <a href=\"\">
                        <img src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./img/twitter.png"), "html", null, true);
        echo "\" alt=\"facebook\">
                      </a>
                  </div>
                  <div>
                      <a href=\"\">
                        <img src=\"";
        // line 102
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
        return "@MyTechnosBlog/Front/Search/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 102,  219 => 97,  211 => 92,  199 => 83,  193 => 80,  187 => 77,  181 => 74,  175 => 71,  167 => 65,  163 => 63,  152 => 58,  148 => 57,  144 => 55,  140 => 54,  137 => 53,  135 => 52,  125 => 44,  120 => 41,  114 => 37,  110 => 35,  98 => 29,  94 => 28,  90 => 27,  84 => 24,  78 => 21,  75 => 20,  71 => 19,  68 => 18,  66 => 17,  63 => 16,  61 => 15,  50 => 6,  46 => 5,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MyTechnosBlog/Front/Search/search.html.twig", "C:\\wamp64\\www\\mon-blog-technos\\src\\My\\TechnosBlogBundle\\Resources\\views\\Front\\Search\\search.html.twig");
    }
}
