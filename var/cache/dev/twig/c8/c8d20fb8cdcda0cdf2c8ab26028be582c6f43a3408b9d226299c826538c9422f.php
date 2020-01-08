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

/* @MyTechnosBlog/Front/Article\article.html.twig */
class __TwigTemplate_5dafde4cedb7a8ff934332f12ff62f6fba1985131b2aecf708ff6b0344c2057e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MyTechnosBlog/Front/Article\\article.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MyTechnosBlog/Front/Article\\article.html.twig"));

        $this->parent = $this->loadTemplate("@MyTechnosBlog/Front/layout.html.twig", "@MyTechnosBlog/Front/Article\\article.html.twig", 2);
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

    <section class=\"containerArticle\">

      <h1>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "title", []), "html", null, true);
        echo "</h1>

      <article>
        <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/" . $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "pathImg", []))), "html", null, true);
        echo "\" alt=\"title-img\">
        <span class=\"asideInfosArticle\">Le ";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "date", []), "d/m/Y"), "html", null, true);
        echo " par ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "author", []), "html", null, true);
        echo "</span>
        <div class=\"contentArticle\">
          ";
        // line 19
        echo strip_tags(twig_convert_encoding($this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "content", []), "UTF-8", "HTML-ENTITIES"), "<p><strong><br>");
        echo "
        </div>

      ";
        // line 22
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 23
            echo "
        <div class=\"commentsArticle\">
            ";
            // line 25
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article", ["category" => $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "category", []), "slug" => $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "slug", []), "id" => $this->getAttribute(($context["article"] ?? $this->getContext($context, "article")), "id", [])])]);
            echo "
                <div class=\"my-custom-class-for-errors\">
                    ";
            // line 27
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
                </div>
                ";
            // line 29
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "content", []), 'label', ["label" => "Laisser un commentaire"]);
            echo "
                ";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "content", []), 'widget');
            echo "

                ";
            // line 32
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "submit", []), 'widget');
            echo "

            ";
            // line 34
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
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
        $context['_seq'] = twig_ensure_traversable(($context["allComments"] ?? $this->getContext($context, "allComments")));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 44
            echo "              <p><strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "pseudo", []), "html", null, true);
            echo " </strong> le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "date", []), "d/m/Y"), "html", null, true);
            echo "</p>
              <span>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "content", []), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable(($context["lastArticles"] ?? $this->getContext($context, "lastArticles")));
            foreach ($context['_seq'] as $context["_key"] => $context["lastArticle"]) {
                // line 56
                echo "                    <li>
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category", ["category" => "javascript"]);
        echo "\">Javascript</a>
            </li>
            <li>
              <a href=\"";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category", ["category" => "php"]);
        echo "\">PHP</a>
            </li>
            <li>
              <a href=\"";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category", ["category" => "rubis"]);
        echo "\">Rubis</a>
            </li>
            <li>
              <a href=\"";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("category", ["category" => "tutoriel"]);
        echo "\">Tutoriels</a>
            </li>
            <li>
              <a href=\"";
        // line 81
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
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./img/facebook.png"), "html", null, true);
        echo "\" alt=\"facebook\">
            </a>
          </div>
          <div>
            <a href=\"\">
              <img src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./img/twitter.png"), "html", null, true);
        echo "\" alt=\"facebook\">
            </a>
          </div>
          <div>
            <a href=\"\">
              <img src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./img/google-plus.png"), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable(($context["othersArticles"] ?? $this->getContext($context, "othersArticles")));
            foreach ($context['_seq'] as $context["_key"] => $context["otherArticle"]) {
                // line 114
                echo "
              <div class=\"othersArticle\">
                <a href=\"";
                // line 116
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article", ["category" => twig_replace_filter($this->getAttribute($context["otherArticle"], "category", []), ["é" => "e"]), "id" => $this->getAttribute($context["otherArticle"], "id", []), "slug" => $this->getAttribute($context["otherArticle"], "slug", [])]), "html", null, true);
                echo "\">
                  <figure>
                    <div class=\"truncateAsideWrapperImg\">
                      <img src=\"";
                // line 119
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/" . $this->getAttribute($context["otherArticle"], "pathImg", []))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["otherArticle"], "title", []), "html", null, true);
                echo "\">
                    </div>
                    <figcaption>
                      <h3>";
                // line 122
                echo twig_escape_filter($this->env, $this->getAttribute($context["otherArticle"], "title", []), "html", null, true);
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
        return array (  311 => 131,  307 => 129,  294 => 122,  286 => 119,  280 => 116,  276 => 114,  272 => 113,  269 => 112,  267 => 111,  252 => 99,  244 => 94,  236 => 89,  225 => 81,  219 => 78,  213 => 75,  207 => 72,  201 => 69,  193 => 63,  190 => 62,  180 => 58,  176 => 57,  173 => 56,  168 => 55,  166 => 54,  157 => 47,  149 => 45,  142 => 44,  138 => 43,  133 => 40,  129 => 38,  122 => 34,  117 => 32,  112 => 30,  108 => 29,  103 => 27,  98 => 25,  94 => 23,  92 => 22,  86 => 19,  79 => 17,  75 => 16,  69 => 13,  60 => 6,  51 => 5,  29 => 2,);
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

    <section class=\"containerArticle\">

      <h1>{{ article.title }}</h1>

      <article>
        <img src=\"{{ asset('uploads/' ~ article.pathImg) }}\" alt=\"title-img\">
        <span class=\"asideInfosArticle\">Le {{ article.date|date('d/m/Y') }} par {{ article.author }}</span>
        <div class=\"contentArticle\">
          {{ article.content|convert_encoding('UTF-8', 'HTML-ENTITIES')|striptags('<p><strong><br>')|raw  }}
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
