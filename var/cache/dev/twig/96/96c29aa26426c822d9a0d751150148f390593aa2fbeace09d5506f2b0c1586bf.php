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
class __TwigTemplate_9039900f428198116c59fd00fd5f02d78f64944dff70b78e5be83499b03a81a1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MyTechnosBlog/Front/Category/category.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MyTechnosBlog/Front/Category/category.html.twig"));

        $this->parent = $this->loadTemplate("@MyTechnosBlog/Front/layout.html.twig", "@MyTechnosBlog/Front/Category/category.html.twig", 2);
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

      <section class=\"categorySection\">

          <span class=\"categorySubTitle\">Article sur</span>
          <h1>";
        // line 13
        echo twig_escape_filter($this->env, ($context["category"] ?? $this->getContext($context, "category")), "html", null, true);
        echo "</h1>
          <div class=\"containerCatArticle\">

              ";
        // line 16
        if ( !twig_test_empty(($context["articlesCategory"] ?? $this->getContext($context, "articlesCategory")))) {
            // line 17
            echo "
                  ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["articlesCategory"] ?? $this->getContext($context, "articlesCategory")));
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
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, ($context["category"] ?? $this->getContext($context, "category"))), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable(($context["lastArticles"] ?? $this->getContext($context, "lastArticles")));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  230 => 97,  222 => 92,  214 => 87,  202 => 78,  196 => 75,  190 => 72,  184 => 69,  178 => 66,  170 => 60,  166 => 58,  155 => 53,  151 => 52,  147 => 50,  143 => 49,  140 => 48,  138 => 47,  129 => 40,  123 => 36,  119 => 34,  107 => 28,  103 => 27,  99 => 26,  93 => 23,  87 => 20,  84 => 19,  80 => 18,  77 => 17,  75 => 16,  69 => 13,  60 => 6,  51 => 5,  29 => 2,);
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

      <section class=\"categorySection\">

          <span class=\"categorySubTitle\">Article sur</span>
          <h1>{{ category }}</h1>
          <div class=\"containerCatArticle\">

              {% if articlesCategory is not empty %}

                  {% for articleCategory in articlesCategory %}

                      <a href=\"{{ path('article', {'category' : articleCategory.category|replace({ 'é' : 'e' }), 'id' : articleCategory.id , 'slug' : articleCategory.slug}) }}\">
                        <article>
                              <div class=\"imgContainer\">
                                  <img src=\"{{ asset('uploads/' ~ articleCategory.pathImg) }}\" alt=\"\">
                              </div>
                              <div class=\"contentContainer\">
                                  <span class=\"categoryArticle\">Catégorie - {{ category|capitalize }}</span>
                                  <h2>{{ articleCategory.title }}</h2>
                                  <p>{{ articleCategory.content|convert_encoding('UTF-8', 'HTML-ENTITIES')|slice(0,150)|striptags('p')|raw }}...</p>
                              </div>
                       </article>
                      </a>

                  {% endfor %}

              {% else %}

                  <h2>Il n'existe aucun article de cette catégorie</h2>

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



", "@MyTechnosBlog/Front/Category/category.html.twig", "C:\\wamp64\\www\\mon-blog-technos\\src\\My\\TechnosBlogBundle\\Resources\\views\\Front\\Category\\category.html.twig");
    }
}
