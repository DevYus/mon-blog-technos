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

/* @MyTechnosBlog/Front/Index\index.html.twig */
class __TwigTemplate_80655eb97f44fbbb187327493fdfcb770d2a4a4068e6d3dbfdc25f89ebab6d8b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MyTechnosBlog/Front/Index\\index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MyTechnosBlog/Front/Index\\index.html.twig"));

        $this->parent = $this->loadTemplate("@MyTechnosBlog/Front/layout.html.twig", "@MyTechnosBlog/Front/Index\\index.html.twig", 2);
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
    <section class=\"sectionHomeOne\">

        <div class=\"leftBloc\">

            ";
        // line 15
        if ((isset($context["lastArticle"]) || array_key_exists("lastArticle", $context))) {
            // line 16
            echo "
              <article class=\"lastestArticle\">
                  <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article", ["category" => twig_get_attribute($this->env, $this->source, (isset($context["lastArticle"]) || array_key_exists("lastArticle", $context) ? $context["lastArticle"] : (function () { throw new RuntimeError('Variable "lastArticle" does not exist.', 18, $this->source); })()), "category", [], "any", false, false, false, 18), "id" => twig_get_attribute($this->env, $this->source, (isset($context["lastArticle"]) || array_key_exists("lastArticle", $context) ? $context["lastArticle"] : (function () { throw new RuntimeError('Variable "lastArticle" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18), "slug" => twig_get_attribute($this->env, $this->source, (isset($context["lastArticle"]) || array_key_exists("lastArticle", $context) ? $context["lastArticle"] : (function () { throw new RuntimeError('Variable "lastArticle" does not exist.', 18, $this->source); })()), "slug", [], "any", false, false, false, 18)]), "html", null, true);
            echo "\">
                    <figure>
                      <img src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["lastArticle"]) || array_key_exists("lastArticle", $context) ? $context["lastArticle"] : (function () { throw new RuntimeError('Variable "lastArticle" does not exist.', 20, $this->source); })()), "pathImg", [], "any", false, false, false, 20))), "html", null, true);
            echo "\" />
                      <figcaption>
                        <span class=\"catFigCaption\"><strong>A la une </strong>| ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lastArticle"]) || array_key_exists("lastArticle", $context) ? $context["lastArticle"] : (function () { throw new RuntimeError('Variable "lastArticle" does not exist.', 22, $this->source); })()), "category", [], "any", false, false, false, 22), "html", null, true);
            echo "</span>
                        <h1>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lastArticle"]) || array_key_exists("lastArticle", $context) ? $context["lastArticle"] : (function () { throw new RuntimeError('Variable "lastArticle" does not exist.', 23, $this->source); })()), "title", [], "any", false, false, false, 23), "html", null, true);
            echo "</h1>
                        <p>";
            // line 24
            echo strip_tags(twig_slice($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lastArticle"]) || array_key_exists("lastArticle", $context) ? $context["lastArticle"] : (function () { throw new RuntimeError('Variable "lastArticle" does not exist.', 24, $this->source); })()), "content", [], "any", false, false, false, 24), 0, 170), "p");
            echo "...</p>
                        <span class=\"dateFicaption\">Le ";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lastArticle"]) || array_key_exists("lastArticle", $context) ? $context["lastArticle"] : (function () { throw new RuntimeError('Variable "lastArticle" does not exist.', 25, $this->source); })()), "date", [], "any", false, false, false, 25), "d M Y"), "html", null, true);
            echo "</span>
                      </figcaption>
                    </figure>
                  </a>
              </article>

            ";
        }
        // line 32
        echo "
        </div>

        <div class=\"rightBloc\">

            ";
        // line 37
        if ((isset($context["rightArticles"]) || array_key_exists("rightArticles", $context))) {
            // line 38
            echo "
                ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["rightArticles"]) || array_key_exists("rightArticles", $context) ? $context["rightArticles"] : (function () { throw new RuntimeError('Variable "rightArticles" does not exist.', 39, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["articleRight"]) {
                // line 40
                echo "
                        <article class=\"asideArticle\">
                            <a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article", ["category" => twig_get_attribute($this->env, $this->source, $context["articleRight"], "category", [], "any", false, false, false, 42), "id" => twig_get_attribute($this->env, $this->source, $context["articleRight"], "id", [], "any", false, false, false, 42), "slug" => twig_get_attribute($this->env, $this->source, $context["articleRight"], "slug", [], "any", false, false, false, 42)]), "html", null, true);
                echo "\">
                                <figure>
                                    <div class=\"truncateWrapperImg rightBlocsWidth\">
                                        <img src=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["articleRight"], "pathImg", [], "any", false, false, false, 45))), "html", null, true);
                echo "\" />
                                    </div>
                                    <figcaption>
                                        <h3 class=\"asideArticleTitle\">";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["articleRight"], "title", [], "any", false, false, false, 48), "html", null, true);
                echo "</h3>
                                        <span class=\"dateFicaption\">Le ";
                // line 49
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["articleRight"], "date", [], "any", false, false, false, 49), "d M Y"), "html", null, true);
                echo " par ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["articleRight"], "author", [], "any", false, false, false, 49), "html", null, true);
                echo "</span>
                                    </figcaption>
                                </figure>
                            </a>
                        </article>


                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['articleRight'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "
            ";
        }
        // line 59
        echo "
        </div>

    </section>

    <section class=\"sectionHomeTwo\">

      \t<h2>Articles populaires</h2>

    \t<div class=\"divFlexWrapper\">

            ";
        // line 70
        if ((isset($context["popularArticles"]) || array_key_exists("popularArticles", $context))) {
            // line 71
            echo "
                ";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["popularArticles"]) || array_key_exists("popularArticles", $context) ? $context["popularArticles"] : (function () { throw new RuntimeError('Variable "popularArticles" does not exist.', 72, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["popular"]) {
                // line 73
                echo "
                    <article class=\"asidePopularArticle\">
                        <a href=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article", ["category" => twig_get_attribute($this->env, $this->source, $context["popular"], "category", [], "any", false, false, false, 75), "id" => twig_get_attribute($this->env, $this->source, $context["popular"], "id", [], "any", false, false, false, 75), "slug" => twig_get_attribute($this->env, $this->source, $context["popular"], "slug", [], "any", false, false, false, 75)]), "html", null, true);
                echo "\">
                            <figure>
                                <div class=\"truncateWrapperImg\">
                                    <img src=\"";
                // line 78
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["popular"], "pathImg", [], "any", false, false, false, 78))), "html", null, true);
                echo "\" alt=\"popular-artilce-blog\" class=\"truncateImg\">
                                </div>
                                <figcaption>
                                    <h3>";
                // line 81
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["popular"], "title", [], "any", false, false, false, 81), "html", null, true);
                echo "</h3>
                                    <p>";
                // line 82
                echo strip_tags(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["popular"], "content", [], "any", false, false, false, 82), 0, 200), "p");
                echo "...</p>
                                </figcaption>
                            </figure>
                        </a>
                    </article>

                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['popular'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "
            ";
        }
        // line 91
        echo "
\t  \t</div>

    </section>

    <section class=\"sectionHomeThree\">

        <h2>Médias</h2>

    \t<div class=\"divBlockWrapper\">

            ";
        // line 102
        if ((isset($context["videos"]) || array_key_exists("videos", $context))) {
            // line 103
            echo "
                ";
            // line 104
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["videos"]) || array_key_exists("videos", $context) ? $context["videos"] : (function () { throw new RuntimeError('Variable "videos" does not exist.', 104, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
                // line 105
                echo "

                    <article class=\"videoBlock\">
                        <a href=\"";
                // line 108
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article", ["category" => twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["video"], "category", [], "any", false, false, false, 108), ["é" => "e"]), "id" => twig_get_attribute($this->env, $this->source, $context["video"], "id", [], "any", false, false, false, 108), "slug" => twig_get_attribute($this->env, $this->source, $context["video"], "slug", [], "any", false, false, false, 108)]), "html", null, true);
                echo "\">
                            <figure>
                                <div class=\"truncateWrapperImgVideo\">
                                    <img src=\"";
                // line 111
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["video"], "pathImg", [], "any", false, false, false, 111))), "html", null, true);
                echo "\" class=\"videoBlockImg\">
                                </div>
                                <figcaption class=\"figcaptionVideo\">
                                    <span class=\"catFigCaption\" ><strong>Ressources |</strong> ";
                // line 114
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "category", [], "any", false, false, false, 114), "html", null, true);
                echo " </span>
                                    <h3>";
                // line 115
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "title", [], "any", false, false, false, 115), "html", null, true);
                echo "</h3>
                                    <p>";
                // line 116
                echo strip_tags(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["video"], "content", [], "any", false, false, false, 116), 0, 200), "p");
                echo "...</p>
                                </figcaption>
                            </figure>
                        </a>
                    </article>

                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "
            ";
        }
        // line 125
        echo "
  \t\t</div>

    </section>

    <section class=\"sectionHomeFour\">

        <div class=\"wrapperTutorialBlocks\">
            <div id=\"hWrapperLeft\">
                <h2>Tutoriels</h2>
            </div>

            ";
        // line 137
        if ((isset($context["tutorials"]) || array_key_exists("tutorials", $context))) {
            // line 138
            echo "
                ";
            // line 139
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tutorials"]) || array_key_exists("tutorials", $context) ? $context["tutorials"] : (function () { throw new RuntimeError('Variable "tutorials" does not exist.', 139, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["tutorial"]) {
                // line 140
                echo "
                    <article class=\"tutorialBlock\">
                        <a href=\"";
                // line 142
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article", ["category" => twig_get_attribute($this->env, $this->source, $context["tutorial"], "category", [], "any", false, false, false, 142), "id" => twig_get_attribute($this->env, $this->source, $context["tutorial"], "id", [], "any", false, false, false, 142), "slug" => twig_get_attribute($this->env, $this->source, $context["tutorial"], "slug", [], "any", false, false, false, 142)]), "html", null, true);
                echo "\">
                        <figure>
                            <div class=\"tutorialBlockImg\">
                                <img src=\"";
                // line 145
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["tutorial"], "pathImg", [], "any", false, false, false, 145))), "html", null, true);
                echo "\" alt=\"articles-populaire\">
                            </div>
                            <figcaption>
                                <div class=\"tutorialBlockContent\">
                                    <h3>";
                // line 149
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tutorial"], "title", [], "any", false, false, false, 149), "html", null, true);
                echo "</h3>
                                    <p>";
                // line 150
                echo strip_tags(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["tutorial"], "content", [], "any", false, false, false, 150), 0, 200), "p");
                echo "...</p>
                                </div>
                            </figcaption>
                        </figure>
                        </a>
                    </article>

                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tutorial'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 158
            echo "
            ";
        }
        // line 160
        echo "


        </div>

        <div class=\"wrapperSurveyBlocks\">

            <div id=\"hWrapperRight\">
                <h2>Étude de marché</h2>
            </div>

            ";
        // line 171
        if ((isset($context["surveys"]) || array_key_exists("surveys", $context))) {
            // line 172
            echo "
                ";
            // line 173
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["surveys"]) || array_key_exists("surveys", $context) ? $context["surveys"] : (function () { throw new RuntimeError('Variable "surveys" does not exist.', 173, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["survey"]) {
                // line 174
                echo "
                    <aside class=\"surveyBlock\">
                        <a href=\"";
                // line 176
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article", ["category" => twig_get_attribute($this->env, $this->source, $context["survey"], "category", [], "any", false, false, false, 176), "id" => twig_get_attribute($this->env, $this->source, $context["survey"], "id", [], "any", false, false, false, 176), "slug" => twig_get_attribute($this->env, $this->source, $context["survey"], "slug", [], "any", false, false, false, 176)]), "html", null, true);
                echo "\">
                            <figure>
                                <img src=\"";
                // line 178
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["survey"], "pathImg", [], "any", false, false, false, 178))), "html", null, true);
                echo "\" alt=\"popular-artilce-blog\">
                                <figcaption>
                                    <h3>";
                // line 180
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["survey"], "title", [], "any", false, false, false, 180), "html", null, true);
                echo "</h3>
                                    <p>";
                // line 181
                echo strip_tags(twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["survey"], "content", [], "any", false, false, false, 181), 0, 200), "p");
                echo "... </p>
                                </figcaption>
                            </figure>
                        </a>
                    </aside>

                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['survey'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 188
            echo "
            ";
        }
        // line 190
        echo "

        </div>

    </section>

    <section class=\"sectionHomeFive\">

        <div id=\"mainContainer\">

            <div class=\"sliderTitle\">
                <h2>Vous avez peut-être raté :</h2>
            </div>

            <div id=\"sliderFix\">

                ";
        // line 206
        if ((isset($context["articlesCarrousel"]) || array_key_exists("articlesCarrousel", $context))) {
            // line 207
            echo "
                    <div class=\"item\">

                        ";
            // line 210
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["articlesCarrousel"]) || array_key_exists("articlesCarrousel", $context) ? $context["articlesCarrousel"] : (function () { throw new RuntimeError('Variable "articlesCarrousel" does not exist.', 210, $this->source); })()), 0, 3));
            foreach ($context['_seq'] as $context["_key"] => $context["articleCarrousel"]) {
                // line 211
                echo "
                            <a href=\"";
                // line 212
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article", ["category" => twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["articleCarrousel"], "category", [], "any", false, false, false, 212), ["é" => "e"]), "id" => twig_get_attribute($this->env, $this->source, $context["articleCarrousel"], "id", [], "any", false, false, false, 212), "slug" => twig_get_attribute($this->env, $this->source, $context["articleCarrousel"], "slug", [], "any", false, false, false, 212)]), "html", null, true);
                echo "\">
                                <div class=\"articleSlide\">
                                    <div class=\"imgSlide\">
                                        <img src=\"";
                // line 215
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["articleCarrousel"], "pathImg", [], "any", false, false, false, 215))), "html", null, true);
                echo "\" alt=\"\">
                                    </div>
                                    <div class=\"contentSlide\">
                                        <div class=\"titleSlide\">
                                            <h3>
                                                ";
                // line 220
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["articleCarrousel"], "title", [], "any", false, false, false, 220), "html", null, true);
                echo "
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['articleCarrousel'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 228
            echo "
                    </div>

                    <div class=\"item\">

                        ";
            // line 233
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["articlesCarrousel"]) || array_key_exists("articlesCarrousel", $context) ? $context["articlesCarrousel"] : (function () { throw new RuntimeError('Variable "articlesCarrousel" does not exist.', 233, $this->source); })()), 3, 3));
            foreach ($context['_seq'] as $context["_key"] => $context["articleCarrousel"]) {
                // line 234
                echo "
                            <a href=\"";
                // line 235
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article", ["category" => twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["articleCarrousel"], "category", [], "any", false, false, false, 235), ["é" => "e"]), "id" => twig_get_attribute($this->env, $this->source, $context["articleCarrousel"], "id", [], "any", false, false, false, 235), "slug" => twig_get_attribute($this->env, $this->source, $context["articleCarrousel"], "slug", [], "any", false, false, false, 235)]), "html", null, true);
                echo "\">
                                <div class=\"articleSlide\">
                                    <div class=\"imgSlide\">
                                        <img src=\"";
                // line 238
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["articleCarrousel"], "pathImg", [], "any", false, false, false, 238))), "html", null, true);
                echo "\" alt=\"\">
                                    </div>
                                    <div class=\"contentSlide\">
                                        <div class=\"titleSlide\">
                                            <h3>
                                                ";
                // line 243
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["articleCarrousel"], "title", [], "any", false, false, false, 243), "html", null, true);
                echo "
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['articleCarrousel'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 251
            echo "
                    </div>

                    <div class=\"item\">

                        ";
            // line 256
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["articlesCarrousel"]) || array_key_exists("articlesCarrousel", $context) ? $context["articlesCarrousel"] : (function () { throw new RuntimeError('Variable "articlesCarrousel" does not exist.', 256, $this->source); })()), 6, 3));
            foreach ($context['_seq'] as $context["_key"] => $context["articleCarrousel"]) {
                // line 257
                echo "
                            <a href=\"";
                // line 258
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article", ["category" => twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["articleCarrousel"], "category", [], "any", false, false, false, 258), ["é" => "e"]), "id" => twig_get_attribute($this->env, $this->source, $context["articleCarrousel"], "id", [], "any", false, false, false, 258), "slug" => twig_get_attribute($this->env, $this->source, $context["articleCarrousel"], "slug", [], "any", false, false, false, 258)]), "html", null, true);
                echo "\">
                                <div class=\"articleSlide\">
                                    <div class=\"imgSlide\">
                                        <img src=\"";
                // line 261
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["articleCarrousel"], "pathImg", [], "any", false, false, false, 261))), "html", null, true);
                echo "\" alt=\"\">
                                    </div>
                                    <div class=\"contentSlide\">
                                        <div class=\"titleSlide\">
                                            <h3>
                                                ";
                // line 266
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["articleCarrousel"], "title", [], "any", false, false, false, 266), "html", null, true);
                echo "
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['articleCarrousel'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 274
            echo "
                    </div>

                ";
        }
        // line 278
        echo "
            </div>

            <div id=\"sliderFixResonsive\">

                ";
        // line 283
        if ((isset($context["articlesCarrousel"]) || array_key_exists("articlesCarrousel", $context))) {
            // line 284
            echo "
                    <div class=\"item\">

                        ";
            // line 287
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, (isset($context["articlesCarrousel"]) || array_key_exists("articlesCarrousel", $context) ? $context["articlesCarrousel"] : (function () { throw new RuntimeError('Variable "articlesCarrousel" does not exist.', 287, $this->source); })()), 0, 3));
            foreach ($context['_seq'] as $context["_key"] => $context["articleCarrousel"]) {
                // line 288
                echo "
                            <a href=\"";
                // line 289
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article", ["category" => twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["articleCarrousel"], "category", [], "any", false, false, false, 289), ["é" => "e"]), "id" => twig_get_attribute($this->env, $this->source, $context["articleCarrousel"], "id", [], "any", false, false, false, 289), "slug" => twig_get_attribute($this->env, $this->source, $context["articleCarrousel"], "slug", [], "any", false, false, false, 289)]), "html", null, true);
                echo "\">
                                <div class=\"articleSlide\">
                                    <div class=\"imgSlide\">
                                        <img src=\"";
                // line 292
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["articleCarrousel"], "pathImg", [], "any", false, false, false, 292))), "html", null, true);
                echo "\" alt=\"\">
                                    </div>
                                    <div class=\"contentSlide\">
                                        <div class=\"titleSlide\">
                                            <h3>
                                                ";
                // line 297
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["articleCarrousel"], "title", [], "any", false, false, false, 297), "html", null, true);
                echo "
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['articleCarrousel'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 305
            echo "
                    </div>

                ";
        }
        // line 309
        echo "
            </div>

        </div>
    </section>



  </main>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@MyTechnosBlog/Front/Index\\index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  620 => 309,  614 => 305,  600 => 297,  592 => 292,  586 => 289,  583 => 288,  579 => 287,  574 => 284,  572 => 283,  565 => 278,  559 => 274,  545 => 266,  537 => 261,  531 => 258,  528 => 257,  524 => 256,  517 => 251,  503 => 243,  495 => 238,  489 => 235,  486 => 234,  482 => 233,  475 => 228,  461 => 220,  453 => 215,  447 => 212,  444 => 211,  440 => 210,  435 => 207,  433 => 206,  415 => 190,  411 => 188,  398 => 181,  394 => 180,  389 => 178,  384 => 176,  380 => 174,  376 => 173,  373 => 172,  371 => 171,  358 => 160,  354 => 158,  340 => 150,  336 => 149,  329 => 145,  323 => 142,  319 => 140,  315 => 139,  312 => 138,  310 => 137,  296 => 125,  292 => 123,  279 => 116,  275 => 115,  271 => 114,  265 => 111,  259 => 108,  254 => 105,  250 => 104,  247 => 103,  245 => 102,  232 => 91,  228 => 89,  215 => 82,  211 => 81,  205 => 78,  199 => 75,  195 => 73,  191 => 72,  188 => 71,  186 => 70,  173 => 59,  169 => 57,  153 => 49,  149 => 48,  143 => 45,  137 => 42,  133 => 40,  129 => 39,  126 => 38,  124 => 37,  117 => 32,  107 => 25,  103 => 24,  99 => 23,  95 => 22,  90 => 20,  85 => 18,  81 => 16,  79 => 15,  68 => 6,  58 => 5,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends \"@MyTechnosBlog/Front/layout.html.twig\" %}


{% block main %}

<!-- Extension du layout au templates fils -->


  <main>
    <section class=\"sectionHomeOne\">

        <div class=\"leftBloc\">

            {% if lastArticle is defined %}

              <article class=\"lastestArticle\">
                  <a href=\"{{ path('article', {'category' : lastArticle.category, 'id' : lastArticle.id , 'slug' : lastArticle.slug}) }}\">
                    <figure>
                      <img src=\"{{ asset('uploads/' ~ lastArticle.pathImg) }}\" />
                      <figcaption>
                        <span class=\"catFigCaption\"><strong>A la une </strong>| {{ lastArticle.category }}</span>
                        <h1>{{ lastArticle.title }}</h1>
                        <p>{{ lastArticle.content|slice(0,170)|striptags('p')|raw }}...</p>
                        <span class=\"dateFicaption\">Le {{ lastArticle.date|date('d M Y') }}</span>
                      </figcaption>
                    </figure>
                  </a>
              </article>

            {% endif %}

        </div>

        <div class=\"rightBloc\">

            {% if rightArticles is defined %}

                {% for articleRight in rightArticles %}

                        <article class=\"asideArticle\">
                            <a href=\"{{ path('article', {'category' : articleRight.category, 'id' : articleRight.id , 'slug' : articleRight.slug}) }}\">
                                <figure>
                                    <div class=\"truncateWrapperImg rightBlocsWidth\">
                                        <img src=\"{{ asset('uploads/' ~ articleRight.pathImg) }}\" />
                                    </div>
                                    <figcaption>
                                        <h3 class=\"asideArticleTitle\">{{ articleRight.title }}</h3>
                                        <span class=\"dateFicaption\">Le {{ articleRight.date|date('d M Y') }} par {{ articleRight.author }}</span>
                                    </figcaption>
                                </figure>
                            </a>
                        </article>


                {% endfor %}

            {% endif %}

        </div>

    </section>

    <section class=\"sectionHomeTwo\">

      \t<h2>Articles populaires</h2>

    \t<div class=\"divFlexWrapper\">

            {% if popularArticles is defined %}

                {% for popular in popularArticles %}

                    <article class=\"asidePopularArticle\">
                        <a href=\"{{ path('article', {'category' : popular.category, 'id' : popular.id , 'slug' : popular.slug}) }}\">
                            <figure>
                                <div class=\"truncateWrapperImg\">
                                    <img src=\"{{ asset('uploads/' ~ popular.pathImg) }}\" alt=\"popular-artilce-blog\" class=\"truncateImg\">
                                </div>
                                <figcaption>
                                    <h3>{{ popular.title }}</h3>
                                    <p>{{ popular.content|slice(0,200)|striptags('p')|raw }}...</p>
                                </figcaption>
                            </figure>
                        </a>
                    </article>

                {% endfor %}

            {% endif %}

\t  \t</div>

    </section>

    <section class=\"sectionHomeThree\">

        <h2>Médias</h2>

    \t<div class=\"divBlockWrapper\">

            {% if videos is defined %}

                {% for video in videos %}


                    <article class=\"videoBlock\">
                        <a href=\"{{ path('article', {'category' : video.category|replace({ 'é' : 'e' }), 'id' : video.id , 'slug' : video.slug}) }}\">
                            <figure>
                                <div class=\"truncateWrapperImgVideo\">
                                    <img src=\"{{ asset('uploads/' ~ video.pathImg) }}\" class=\"videoBlockImg\">
                                </div>
                                <figcaption class=\"figcaptionVideo\">
                                    <span class=\"catFigCaption\" ><strong>Ressources |</strong> {{ video.category }} </span>
                                    <h3>{{ video.title }}</h3>
                                    <p>{{ video.content|slice(0,200)|striptags('p')|raw }}...</p>
                                </figcaption>
                            </figure>
                        </a>
                    </article>

                {% endfor %}

            {% endif %}

  \t\t</div>

    </section>

    <section class=\"sectionHomeFour\">

        <div class=\"wrapperTutorialBlocks\">
            <div id=\"hWrapperLeft\">
                <h2>Tutoriels</h2>
            </div>

            {% if tutorials is defined %}

                {% for tutorial in tutorials %}

                    <article class=\"tutorialBlock\">
                        <a href=\"{{ path('article', {'category' : tutorial.category, 'id' : tutorial.id , 'slug' : tutorial.slug}) }}\">
                        <figure>
                            <div class=\"tutorialBlockImg\">
                                <img src=\"{{ asset('uploads/' ~ tutorial.pathImg) }}\" alt=\"articles-populaire\">
                            </div>
                            <figcaption>
                                <div class=\"tutorialBlockContent\">
                                    <h3>{{ tutorial.title }}</h3>
                                    <p>{{ tutorial.content|slice(0,200)|striptags('p')|raw }}...</p>
                                </div>
                            </figcaption>
                        </figure>
                        </a>
                    </article>

                {% endfor %}

            {% endif %}



        </div>

        <div class=\"wrapperSurveyBlocks\">

            <div id=\"hWrapperRight\">
                <h2>Étude de marché</h2>
            </div>

            {% if surveys is defined %}

                {% for survey in surveys %}

                    <aside class=\"surveyBlock\">
                        <a href=\"{{ path('article', {'category' : survey.category, 'id' : survey.id , 'slug' : survey.slug}) }}\">
                            <figure>
                                <img src=\"{{ asset('uploads/' ~ survey.pathImg) }}\" alt=\"popular-artilce-blog\">
                                <figcaption>
                                    <h3>{{ survey.title }}</h3>
                                    <p>{{ survey.content|slice(0,200)|striptags('p')|raw }}... </p>
                                </figcaption>
                            </figure>
                        </a>
                    </aside>

                {% endfor %}

            {% endif %}


        </div>

    </section>

    <section class=\"sectionHomeFive\">

        <div id=\"mainContainer\">

            <div class=\"sliderTitle\">
                <h2>Vous avez peut-être raté :</h2>
            </div>

            <div id=\"sliderFix\">

                {% if articlesCarrousel is defined %}

                    <div class=\"item\">

                        {% for articleCarrousel in articlesCarrousel[0:3] %}

                            <a href=\"{{ path('article', {'category' : articleCarrousel.category|replace({ 'é' : 'e' }), 'id' : articleCarrousel.id , 'slug' : articleCarrousel.slug}) }}\">
                                <div class=\"articleSlide\">
                                    <div class=\"imgSlide\">
                                        <img src=\"{{ asset('uploads/' ~ articleCarrousel.pathImg) }}\" alt=\"\">
                                    </div>
                                    <div class=\"contentSlide\">
                                        <div class=\"titleSlide\">
                                            <h3>
                                                {{ articleCarrousel.title }}
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        {% endfor %}

                    </div>

                    <div class=\"item\">

                        {% for articleCarrousel in articlesCarrousel[3:3] %}

                            <a href=\"{{ path('article', {'category' : articleCarrousel.category|replace({ 'é' : 'e' }), 'id' : articleCarrousel.id , 'slug' : articleCarrousel.slug}) }}\">
                                <div class=\"articleSlide\">
                                    <div class=\"imgSlide\">
                                        <img src=\"{{ asset('uploads/' ~ articleCarrousel.pathImg) }}\" alt=\"\">
                                    </div>
                                    <div class=\"contentSlide\">
                                        <div class=\"titleSlide\">
                                            <h3>
                                                {{ articleCarrousel.title }}
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        {% endfor %}

                    </div>

                    <div class=\"item\">

                        {% for articleCarrousel in articlesCarrousel[6:3] %}

                            <a href=\"{{ path('article', {'category' : articleCarrousel.category|replace({ 'é' : 'e' }), 'id' : articleCarrousel.id , 'slug' : articleCarrousel.slug}) }}\">
                                <div class=\"articleSlide\">
                                    <div class=\"imgSlide\">
                                        <img src=\"{{ asset('uploads/' ~ articleCarrousel.pathImg) }}\" alt=\"\">
                                    </div>
                                    <div class=\"contentSlide\">
                                        <div class=\"titleSlide\">
                                            <h3>
                                                {{ articleCarrousel.title }}
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        {% endfor %}

                    </div>

                {% endif %}

            </div>

            <div id=\"sliderFixResonsive\">

                {% if articlesCarrousel is defined %}

                    <div class=\"item\">

                        {% for articleCarrousel in articlesCarrousel[0:3] %}

                            <a href=\"{{ path('article', {'category' : articleCarrousel.category|replace({ 'é' : 'e' }), 'id' : articleCarrousel.id , 'slug' : articleCarrousel.slug}) }}\">
                                <div class=\"articleSlide\">
                                    <div class=\"imgSlide\">
                                        <img src=\"{{ asset('uploads/' ~ articleCarrousel.pathImg) }}\" alt=\"\">
                                    </div>
                                    <div class=\"contentSlide\">
                                        <div class=\"titleSlide\">
                                            <h3>
                                                {{ articleCarrousel.title }}
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        {% endfor %}

                    </div>

                {% endif %}

            </div>

        </div>
    </section>



  </main>



{% endblock %}



", "@MyTechnosBlog/Front/Index\\index.html.twig", "C:\\wamp64\\www\\mon-blog-technos\\src\\My\\TechnosBlogBundle\\Resources\\views\\Front\\Index\\index.html.twig");
    }
}
