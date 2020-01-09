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

/* @MyTechnosBlog/Front/Search/search.html.twig */
class __TwigTemplate_8fb11216e73c78c60182266d05f9c81a632c962b52108a7302c0298b4af36f70 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@MyTechnosBlog/Front/layout.html.twig", "@MyTechnosBlog/Front/Search/search.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
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
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article", ["category" => twig_replace_filter($this->getAttribute($context["search"], "category", []), ["é" => "e"]), "id" => $this->getAttribute($context["search"], "id", []), "slug" => $this->getAttribute($context["search"], "slug", [])]), "html", null, true);
                    echo "\">
                                <article>
                                      <div class=\"imgContainer\">
                                          <img src=\"";
                    // line 24
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/" . $this->getAttribute($context["search"], "pathImg", []))), "html", null, true);
                    echo "\" alt=\"\">
                                      </div>
                                      <div class=\"contentContainer\">
                                          <span class=\"categoryArticle\">Catégorie - ";
                    // line 27
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["search"], "category", [])), "html", null, true);
                    echo "</span>
                                          <h2>";
                    // line 28
                    echo twig_escape_filter($this->env, $this->getAttribute($context["search"], "title", []), "html", null, true);
                    echo "</h2>
                                          <p>";
                    // line 29
                    echo strip_tags(twig_slice($this->env, twig_convert_encoding($this->getAttribute($context["search"], "content", []), "UTF-8", "HTML-ENTITIES"), 0, 150), "p");
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
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article", ["category" => twig_replace_filter($this->getAttribute($context["lastArticle"], "category", []), ["é" => "e"]), "id" => $this->getAttribute($context["lastArticle"], "id", []), "slug" => $this->getAttribute($context["lastArticle"], "slug", [])]), "html", null, true);
                echo "\">
                                      ";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["lastArticle"], "title", []), "html", null, true);
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category", ["category" => "javascript"]);
        echo "\">Javascript</a>
                      </li>
                      <li>
                          <a href=\"";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category", ["category" => "php"]);
        echo "\">PHP</a>
                      </li>
                      <li>
                          <a href=\"";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category", ["category" => "rubis"]);
        echo "\">Rubis</a>
                      </li>
                      <li>
                          <a href=\"";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category", ["category" => "tutoriel"]);
        echo "\">Tutoriels</a>
                      </li>
                      <li>
                          <a href=\"";
        // line 83
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
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./img/facebook.png"), "html", null, true);
        echo "\" alt=\"facebook\">
                      </a>
                  </div>
                  <div>
                      <a href=\"\">
                        <img src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./img/twitter.png"), "html", null, true);
        echo "\" alt=\"facebook\">
                      </a>
                  </div>
                  <div>
                      <a href=\"\">
                        <img src=\"";
        // line 102
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
        return "@MyTechnosBlog/Front/Search/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 102,  211 => 97,  203 => 92,  191 => 83,  185 => 80,  179 => 77,  173 => 74,  167 => 71,  159 => 65,  155 => 63,  144 => 58,  140 => 57,  136 => 55,  132 => 54,  129 => 53,  127 => 52,  117 => 44,  112 => 41,  106 => 37,  102 => 35,  90 => 29,  86 => 28,  82 => 27,  76 => 24,  70 => 21,  67 => 20,  63 => 19,  60 => 18,  58 => 17,  55 => 16,  53 => 15,  42 => 6,  39 => 5,  29 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@MyTechnosBlog/Front/Search/search.html.twig", "C:\\wamp64\\www\\mon-blog-technos\\src\\My\\TechnosBlogBundle\\Resources\\views\\Front\\Search\\search.html.twig");
    }
}
