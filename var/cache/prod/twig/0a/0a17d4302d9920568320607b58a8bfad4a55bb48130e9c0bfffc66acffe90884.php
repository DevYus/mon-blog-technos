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

/* @MyTechnosBlog/Front/Article/article.html.twig */
class __TwigTemplate_86ff59f59ad80bbbd385a3c2ba08ce3ef8d1fe09e76e4a95fff7206eb6757c6a extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@MyTechnosBlog/Front/layout.html.twig", "@MyTechnosBlog/Front/Article/article.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        // line 6
        echo "
<!-- Extension du layout au templates fils -->

  <main>

    <section class=\"containerArticle\">

      <h1>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? null), "title", []), "html", null, true);
        echo "</h1>

      <article>
        <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/" . $this->getAttribute(($context["article"] ?? null), "pathImg", []))), "html", null, true);
        echo "\" alt=\"title-img\">
        <span class=\"asideInfosArticle\">Le ";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["article"] ?? null), "date", []), "d/m/Y"), "html", null, true);
        echo " par ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? null), "author", []), "html", null, true);
        echo "</span>
        <div class=\"contentArticle\">
          ";
        // line 19
        echo strip_tags(twig_convert_encoding($this->getAttribute(($context["article"] ?? null), "content", []), "UTF-8", "HTML-ENTITIES"), "<p><strong><br>");
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
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article", ["category" => $this->getAttribute(($context["article"] ?? null), "category", []), "slug" => $this->getAttribute(($context["article"] ?? null), "slug", []), "id" => $this->getAttribute(($context["article"] ?? null), "id", [])])]);
            echo "
                <div class=\"my-custom-class-for-errors\">
                    ";
            // line 27
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            echo "
                </div>
                ";
            // line 29
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "content", []), 'label', ["label" => "Laisser un commentaire"]);
            echo "
                ";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "content", []), 'widget');
            echo "

                ";
            // line 32
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? null), "submit", []), 'widget');
            echo "

            ";
            // line 34
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
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
        $context['_seq'] = twig_ensure_traversable(($context["allComments"] ?? null));
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
            $context['_seq'] = twig_ensure_traversable(($context["lastArticles"] ?? null));
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
            $context['_seq'] = twig_ensure_traversable(($context["othersArticles"] ?? null));
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
    }

    public function getTemplateName()
    {
        return "@MyTechnosBlog/Front/Article/article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 131,  289 => 129,  276 => 122,  268 => 119,  262 => 116,  258 => 114,  254 => 113,  251 => 112,  249 => 111,  234 => 99,  226 => 94,  218 => 89,  207 => 81,  201 => 78,  195 => 75,  189 => 72,  183 => 69,  175 => 63,  172 => 62,  162 => 58,  158 => 57,  155 => 56,  150 => 55,  148 => 54,  139 => 47,  131 => 45,  124 => 44,  120 => 43,  115 => 40,  111 => 38,  104 => 34,  99 => 32,  94 => 30,  90 => 29,  85 => 27,  80 => 25,  76 => 23,  74 => 22,  68 => 19,  61 => 17,  57 => 16,  51 => 13,  42 => 6,  39 => 5,  29 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@MyTechnosBlog/Front/Article/article.html.twig", "C:\\wamp64\\www\\mon-blog-technos\\src\\My\\TechnosBlogBundle\\Resources\\views\\Front\\Article\\article.html.twig");
    }
}
