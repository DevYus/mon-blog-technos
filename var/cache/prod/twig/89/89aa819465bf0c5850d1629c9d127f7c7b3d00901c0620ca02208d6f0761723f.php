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

/* @MyTechnosBlog/Front/Article/article.html.twig */
class __TwigTemplate_421c8dc58e1957d78388da06aa8efd3b6bbe65f8b486a6fac4b929ec39b643d4 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@MyTechnosBlog/Front/layout.html.twig", "@MyTechnosBlog/Front/Article/article.html.twig", 2);
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

    <section class=\"containerArticle\">

      <h1>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "title", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>

      <article>
        <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "pathImg", [], "any", false, false, false, 16))), "html", null, true);
        echo "\" alt=\"title-img\">
        <span class=\"asideInfosArticle\">Le ";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "date", [], "any", false, false, false, 17), "d/m/Y"), "html", null, true);
        echo " par ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "author", [], "any", false, false, false, 17), "html", null, true);
        echo "</span>
        <div class=\"contentArticle\">
          ";
        // line 19
        echo strip_tags(twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "content", [], "any", false, false, false, 19), "<p><strong><br>");
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
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article", ["category" => twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "category", [], "any", false, false, false, 25), "slug" => twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "slug", [], "any", false, false, false, 25), "id" => twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "id", [], "any", false, false, false, 25)])]);
            echo "
                <div class=\"my-custom-class-for-errors\">
                    ";
            // line 27
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            echo "
                </div>
                ";
            // line 29
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "content", [], "any", false, false, false, 29), 'label', ["label" => "Laisser un commentaire"]);
            echo "
                ";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "content", [], "any", false, false, false, 30), 'widget');
            echo "

                ";
            // line 32
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "submit", [], "any", false, false, false, 32), 'widget');
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
            $context['_seq'] = twig_ensure_traversable(($context["lastArticles"] ?? null));
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
            $context['_seq'] = twig_ensure_traversable(($context["othersArticles"] ?? null));
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
        return array (  301 => 131,  297 => 129,  284 => 122,  276 => 119,  270 => 116,  266 => 114,  262 => 113,  259 => 112,  257 => 111,  242 => 99,  234 => 94,  226 => 89,  215 => 81,  209 => 78,  203 => 75,  197 => 72,  191 => 69,  183 => 63,  180 => 62,  170 => 58,  166 => 57,  163 => 56,  158 => 55,  156 => 54,  147 => 47,  139 => 45,  132 => 44,  128 => 43,  123 => 40,  119 => 38,  112 => 34,  107 => 32,  102 => 30,  98 => 29,  93 => 27,  88 => 25,  84 => 23,  82 => 22,  76 => 19,  69 => 17,  65 => 16,  59 => 13,  50 => 6,  46 => 5,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MyTechnosBlog/Front/Article/article.html.twig", "C:\\wamp64\\www\\mon-blog-technos\\src\\My\\TechnosBlogBundle\\Resources\\views\\Front\\Article\\article.html.twig");
    }
}
