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

/* @MyTechnosBlog/Front/Article\article.html.twig */
class __TwigTemplate_1d36cadc424b77fef17f163932f3caef0ab009a55735c65a53c4fb82e8f0d187 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MyTechnosBlog/Front/Article\\article.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MyTechnosBlog/Front/Article\\article.html.twig"));

        $this->parent = $this->loadTemplate("@MyTechnosBlog/Front/layout.html.twig", "@MyTechnosBlog/Front/Article\\article.html.twig", 2);
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

    <section class=\"containerArticle\">

      <h1>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 13, $this->source); })()), "title", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>

      <article>
        <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 16, $this->source); })()), "pathImg", [], "any", false, false, false, 16))), "html", null, true);
        echo "\" alt=\"title-img\">
        <span class=\"asideInfosArticle\">Le ";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 17, $this->source); })()), "date", [], "any", false, false, false, 17), "d/m/Y"), "html", null, true);
        echo " par ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 17, $this->source); })()), "author", [], "any", false, false, false, 17), "html", null, true);
        echo "</span>
        <div class=\"contentArticle\">
          ";
        // line 19
        echo strip_tags(twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 19, $this->source); })()), "content", [], "any", false, false, false, 19), "<p><strong><br>");
        echo "
        </div>

      ";
        // line 22
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 23
            echo "
        <div class=\"commentsArticle\">
            ";
            // line 25
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article", ["category" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 25, $this->source); })()), "category", [], "any", false, false, false, 25), "slug" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 25, $this->source); })()), "slug", [], "any", false, false, false, 25), "id" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25)])]);
            echo "
                <div class=\"my-custom-class-for-errors\">
                    ";
            // line 27
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), 'errors');
            echo "
                </div>
                ";
            // line 29
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "content", [], "any", false, false, false, 29), 'label', ["label" => "Laisser un commentaire"]);
            echo "
                ";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "content", [], "any", false, false, false, 30), 'widget');
            echo "

                ";
            // line 32
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "submit", [], "any", false, false, false, 32), 'widget');
            echo "

            ";
            // line 34
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), 'form_end');
            echo "
        </div>

      ";
        } else {
            // line 38
            echo "
      ";
        }
        // line 40
        echo "
        <div class=\"listComments\">
          <span class=\"listCommentsTitle\">Espace commentaires</span>
          ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allComments"]) || array_key_exists("allComments", $context) ? $context["allComments"] : (function () { throw new RuntimeError('Variable "allComments" does not exist.', 43, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 44
            echo "              <p><strong> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "pseudo", [], "any", false, false, false, 44), "html", null, true);
            echo " </strong> le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "date", [], "any", false, false, false, 44), "d/m/Y"), "html", null, true);
            echo "</p>
              <span>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 45), "html", null, true);
            echo "</span>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        </div>
      </article>

      <div class=\"asideContainer\">
        <aside>
          <h3>Derniers articles</h3>
          <ul>
              ";
        // line 54
        if ((isset($context["lastArticles"]) || array_key_exists("lastArticles", $context))) {
            // line 55
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["lastArticles"]) || array_key_exists("lastArticles", $context) ? $context["lastArticles"] : (function () { throw new RuntimeError('Variable "lastArticles" does not exist.', 55, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["lastArticle"]) {
                // line 56
                echo "                    <li>
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
            // line 62
            echo "              ";
        }
        // line 63
        echo "          </ul>
        </aside>
        <aside>
          <h3>Catégories</h3>
          <ul>
            <li>
              <a href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["category" => "javascript"]);
        echo "\">Javascript</a>
            </li>
            <li>
              <a href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["category" => "php"]);
        echo "\">PHP</a>
            </li>
            <li>
              <a href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["category" => "rubis"]);
        echo "\">Rubis</a>
            </li>
            <li>
              <a href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category", ["category" => "tutoriel"]);
        echo "\">Tutoriels</a>
            </li>
            <li>
              <a href=\"";
        // line 81
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
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./img/facebook.png"), "html", null, true);
        echo "\" alt=\"facebook\">
            </a>
          </div>
          <div>
            <a href=\"\">
              <img src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./img/twitter.png"), "html", null, true);
        echo "\" alt=\"facebook\">
            </a>
          </div>
          <div>
            <a href=\"\">
              <img src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./img/google-plus.png"), "html", null, true);
        echo "\" alt=\"facebook\">
            </a>
          </div>
        </aside>

      </div>
    </section>

    <h2>Autres articles</h2>

    <section class=\"othersArticlesContainer\">

        ";
        // line 111
        if ((isset($context["lastArticles"]) || array_key_exists("lastArticles", $context))) {
            // line 112
            echo "
            ";
            // line 113
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["othersArticles"]) || array_key_exists("othersArticles", $context) ? $context["othersArticles"] : (function () { throw new RuntimeError('Variable "othersArticles" does not exist.', 113, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["otherArticle"]) {
                // line 114
                echo "
              <div class=\"othersArticle\">
                <a href=\"";
                // line 116
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article", ["category" => twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["otherArticle"], "category", [], "any", false, false, false, 116), ["é" => "e"]), "id" => twig_get_attribute($this->env, $this->source, $context["otherArticle"], "id", [], "any", false, false, false, 116), "slug" => twig_get_attribute($this->env, $this->source, $context["otherArticle"], "slug", [], "any", false, false, false, 116)]), "html", null, true);
                echo "\">
                  <figure>
                    <div class=\"truncateAsideWrapperImg\">
                      <img src=\"";
                // line 119
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["otherArticle"], "pathImg", [], "any", false, false, false, 119))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["otherArticle"], "title", [], "any", false, false, false, 119), "html", null, true);
                echo "\">
                    </div>
                    <figcaption>
                      <h3>";
                // line 122
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["otherArticle"], "title", [], "any", false, false, false, 122), "html", null, true);
                echo "</h3>
                    </figcaption>
                  </figure>
                </a>
              </div>

            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['otherArticle'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 129
            echo "
        ";
        }
        // line 131
        echo "
    </section>

  </main>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@MyTechnosBlog/Front/Article\\article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  319 => 131,  315 => 129,  302 => 122,  294 => 119,  288 => 116,  284 => 114,  280 => 113,  277 => 112,  275 => 111,  260 => 99,  252 => 94,  244 => 89,  233 => 81,  227 => 78,  221 => 75,  215 => 72,  209 => 69,  201 => 63,  198 => 62,  188 => 58,  184 => 57,  181 => 56,  176 => 55,  174 => 54,  165 => 47,  157 => 45,  150 => 44,  146 => 43,  141 => 40,  137 => 38,  130 => 34,  125 => 32,  120 => 30,  116 => 29,  111 => 27,  106 => 25,  102 => 23,  100 => 22,  94 => 19,  87 => 17,  83 => 16,  77 => 13,  68 => 6,  58 => 5,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends \"@MyTechnosBlog/Front/layout.html.twig\" %}


{% block main %}

<!-- Extension du layout au templates fils -->

  <main>

    <section class=\"containerArticle\">

      <h1>{{ article.title }}</h1>

      <article>
        <img src=\"{{ asset('uploads/' ~ article.pathImg) }}\" alt=\"title-img\">
        <span class=\"asideInfosArticle\">Le {{ article.date|date('d/m/Y') }} par {{ article.author }}</span>
        <div class=\"contentArticle\">
          {{ article.content|striptags('<p><strong><br>')|raw  }}
        </div>

      {% if is_granted('IS_AUTHENTICATED_FULLY') %}

        <div class=\"commentsArticle\">
            {{ form_start(form , { 'action': path('article',{ 'category': article.category , 'slug' : article.slug, 'id' : article.id }  ) }) }}
                <div class=\"my-custom-class-for-errors\">
                    {{ form_errors(form) }}
                </div>
                {{ form_label(form.content, 'Laisser un commentaire') }}
                {{ form_widget(form.content) }}

                {{ form_widget(form.submit) }}

            {{ form_end(form) }}
        </div>

      {% else %}

      {% endif %}

        <div class=\"listComments\">
          <span class=\"listCommentsTitle\">Espace commentaires</span>
          {% for comment in allComments %}
              <p><strong> {{ comment.pseudo }} </strong> le {{ comment.date|date('d/m/Y') }}</p>
              <span>{{ comment.content }}</span>
          {% endfor %}
        </div>
      </article>

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

    <h2>Autres articles</h2>

    <section class=\"othersArticlesContainer\">

        {% if lastArticles is defined %}

            {% for otherArticle in othersArticles %}

              <div class=\"othersArticle\">
                <a href=\"{{ path('article', {'category' : otherArticle.category|replace({ 'é' : 'e' }), 'id' : otherArticle.id , 'slug' : otherArticle.slug}) }}\">
                  <figure>
                    <div class=\"truncateAsideWrapperImg\">
                      <img src=\"{{ asset('uploads/' ~ otherArticle.pathImg) }}\" alt=\"{{ otherArticle.title }}\">
                    </div>
                    <figcaption>
                      <h3>{{ otherArticle.title }}</h3>
                    </figcaption>
                  </figure>
                </a>
              </div>

            {% endfor %}

        {% endif %}

    </section>

  </main>



{% endblock %}



", "@MyTechnosBlog/Front/Article\\article.html.twig", "C:\\wamp64\\www\\mon-blog-technos\\src\\My\\TechnosBlogBundle\\Resources\\views\\Front\\Article\\article.html.twig");
    }
}
