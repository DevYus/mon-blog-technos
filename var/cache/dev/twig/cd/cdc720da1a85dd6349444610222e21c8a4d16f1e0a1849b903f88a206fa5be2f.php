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
class __TwigTemplate_20f27af65fb3751cfa307d22cb4da659c46b7a8a2f71516a65afe5bf9d17bcc2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MyTechnosBlog/Front/Search/search.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MyTechnosBlog/Front/Search/search.html.twig"));

        $this->parent = $this->loadTemplate("@MyTechnosBlog/Front/layout.html.twig", "@MyTechnosBlog/Front/Search/search.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
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
        if (twig_test_iterable((isset($context["searchArticles"]) || array_key_exists("searchArticles", $context) ? $context["searchArticles"] : (function () { throw new RuntimeError('Variable "searchArticles" does not exist.', 15, $this->source); })()))) {
            // line 16
            echo "
                  ";
            // line 17
            if (((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 17, $this->source); })()) != 0)) {
                // line 18
                echo "
                      ";
                // line 19
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["searchArticles"]) || array_key_exists("searchArticles", $context) ? $context["searchArticles"] : (function () { throw new RuntimeError('Variable "searchArticles" does not exist.', 19, $this->source); })()));
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
            $context['_seq'] = twig_ensure_traversable((isset($context["lastArticles"]) || array_key_exists("lastArticles", $context) ? $context["lastArticles"] : (function () { throw new RuntimeError('Variable "lastArticles" does not exist.', 54, $this->source); })()));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  245 => 102,  237 => 97,  229 => 92,  217 => 83,  211 => 80,  205 => 77,  199 => 74,  193 => 71,  185 => 65,  181 => 63,  170 => 58,  166 => 57,  162 => 55,  158 => 54,  155 => 53,  153 => 52,  143 => 44,  138 => 41,  132 => 37,  128 => 35,  116 => 29,  112 => 28,  108 => 27,  102 => 24,  96 => 21,  93 => 20,  89 => 19,  86 => 18,  84 => 17,  81 => 16,  79 => 15,  68 => 6,  58 => 5,  35 => 2,);
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
                                          <p>{{ search.content|slice(0,150)|striptags('p')|raw }}...</p>
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



", "@MyTechnosBlog/Front/Search/search.html.twig", "C:\\wamp64\\www\\mon-blog-technos\\src\\My\\TechnosBlogBundle\\Resources\\views\\Front\\Search\\search.html.twig");
    }
}
