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

/* @MyTechnosBlog/Front/Search\search.html.twig */
class __TwigTemplate_48f8d3e394cc35439720fc323aa69cbe2184bc0ae223682f6fb914fc6fe9cec7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MyTechnosBlog/Front/Search\\search.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MyTechnosBlog/Front/Search\\search.html.twig"));

        $this->parent = $this->loadTemplate("@MyTechnosBlog/Front/layout.html.twig", "@MyTechnosBlog/Front/Search\\search.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

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
        if (twig_test_iterable(($context["searchArticles"] ?? $this->getContext($context, "searchArticles")))) {
            // line 16
            echo "
                  ";
            // line 17
            if ((($context["count"] ?? $this->getContext($context, "count")) != 0)) {
                // line 18
                echo "
                      ";
                // line 19
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["searchArticles"] ?? $this->getContext($context, "searchArticles")));
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
            $context['_seq'] = twig_ensure_traversable(($context["lastArticles"] ?? $this->getContext($context, "lastArticles")));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@MyTechnosBlog/Front/Search\\search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 102,  229 => 97,  221 => 92,  209 => 83,  203 => 80,  197 => 77,  191 => 74,  185 => 71,  177 => 65,  173 => 63,  162 => 58,  158 => 57,  154 => 55,  150 => 54,  147 => 53,  145 => 52,  135 => 44,  130 => 41,  124 => 37,  120 => 35,  108 => 29,  104 => 28,  100 => 27,  94 => 24,  88 => 21,  85 => 20,  81 => 19,  78 => 18,  76 => 17,  73 => 16,  71 => 15,  60 => 6,  51 => 5,  29 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("
{% extends \"@MyTechnosBlog/Front/layout.html.twig\" %}


{% block main %}

<!-- Extension du layout au templates fils -->

  <main>
      <section class=\"searchSection\">
          <span class=\"searchSubTitle\">Resultat(s)</span>
          <h1></h1>
          <div class=\"containerCatArticle\">

              {% if searchArticles is iterable %}

                  {% if count != 0 %}

                      {% for search in searchArticles %}

                          <a href=\"{{ path('article', {'category' : search.category|replace({ 'é' : 'e' }), 'id' : search.id , 'slug' : search.slug}) }}\">
                                <article>
                                      <div class=\"imgContainer\">
                                          <img src=\"{{ asset('uploads/' ~ search.pathImg) }}\" alt=\"\">
                                      </div>
                                      <div class=\"contentContainer\">
                                          <span class=\"categoryArticle\">Catégorie - {{ search.category|capitalize }}</span>
                                          <h2>{{ search.title }}</h2>
                                          <p>{{ search.content|convert_encoding('UTF-8', 'HTML-ENTITIES')|slice(0,150)|striptags('p')|raw }}...</p>
                                      </div>
                               </article>
                          </a>

                      {% endfor %}

                  {% else %}

                      <p>Aucun resultat(s) n'a été trouvé</p>

                  {% endif %}


              {% endif %}


          </div>

          <div class=\"asideContainer\">
              <aside>
                  <h3>Derniers articles</h3>
                  <ul>
                      {% if lastArticles is defined %}

                          {% for lastArticle in lastArticles %}

                              <li>
                                  <a href=\"{{ path('article', {'category' : lastArticle.category|replace({ 'é' : 'e' }), 'id' : lastArticle.id , 'slug' : lastArticle.slug}) }}\">
                                      {{ lastArticle.title }}
                                  </a>
                              </li>

                          {% endfor %}

                      {% endif %}
                  </ul>
              </aside>
              <aside>
                  <h3>Catégories</h3>
                  <ul>
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
              </aside>

              <aside class=\"asidebarSocialNetwork\">
                  <h2>Suivez-nous</h2>
                  <div>
                      <a href=\"\">
                        <img src=\"{{ asset('./img/facebook.png') }}\" alt=\"facebook\">
                      </a>
                  </div>
                  <div>
                      <a href=\"\">
                        <img src=\"{{ asset('./img/twitter.png') }}\" alt=\"facebook\">
                      </a>
                  </div>
                  <div>
                      <a href=\"\">
                        <img src=\"{{ asset('./img/google-plus.png') }}\" alt=\"facebook\">
                      </a>
                  </div>
              </aside>
          </div>
      </section>


  </main>


{% endblock %}



", "@MyTechnosBlog/Front/Search\\search.html.twig", "C:\\wamp64\\www\\mon-blog-technos\\src\\My\\TechnosBlogBundle\\Resources\\views\\Front\\Search\\search.html.twig");
    }
}
