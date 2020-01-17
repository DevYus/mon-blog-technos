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

/* @MyTechnosBlog/Front/Index/index.html.twig */
class __TwigTemplate_f7cd254a6fed6a6d2c5a45af49b6b382a68f1cc0ece78cfd957dd89111b3f15e extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@MyTechnosBlog/Front/layout.html.twig", "@MyTechnosBlog/Front/Index/index.html.twig", 2);
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
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article", ["category" => twig_get_attribute($this->env, $this->source, ($context["lastArticle"] ?? null), "category", [], "any", false, false, false, 18), "id" => twig_get_attribute($this->env, $this->source, ($context["lastArticle"] ?? null), "id", [], "any", false, false, false, 18), "slug" => twig_get_attribute($this->env, $this->source, ($context["lastArticle"] ?? null), "slug", [], "any", false, false, false, 18)]), "html", null, true);
            echo "\">
                    <figure>
                      <img src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, ($context["lastArticle"] ?? null), "pathImg", [], "any", false, false, false, 20))), "html", null, true);
            echo "\" />
                      <figcaption>
                        <span class=\"catFigCaption\"><strong>A la une </strong>| ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lastArticle"] ?? null), "category", [], "any", false, false, false, 22), "html", null, true);
            echo "</span>
                        <h1>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lastArticle"] ?? null), "title", [], "any", false, false, false, 23), "html", null, true);
            echo "</h1>
                        <p>";
            // line 24
            echo strip_tags(twig_slice($this->env, twig_get_attribute($this->env, $this->source, ($context["lastArticle"] ?? null), "content", [], "any", false, false, false, 24), 0, 170), "p");
            echo "...</p>
                        <span class=\"dateFicaption\">Le ";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lastArticle"] ?? null), "date", [], "any", false, false, false, 25), "d M Y"), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable(($context["rightArticles"] ?? null));
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
            $context['_seq'] = twig_ensure_traversable(($context["popularArticles"] ?? null));
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
            $context['_seq'] = twig_ensure_traversable(($context["videos"] ?? null));
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
            $context['_seq'] = twig_ensure_traversable(($context["tutorials"] ?? null));
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
            $context['_seq'] = twig_ensure_traversable(($context["surveys"] ?? null));
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
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["articlesCarrousel"] ?? null), 0, 3));
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
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["articlesCarrousel"] ?? null), 3, 3));
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
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["articlesCarrousel"] ?? null), 6, 3));
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
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["articlesCarrousel"] ?? null), 0, 3));
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
    }

    public function getTemplateName()
    {
        return "@MyTechnosBlog/Front/Index/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  602 => 309,  596 => 305,  582 => 297,  574 => 292,  568 => 289,  565 => 288,  561 => 287,  556 => 284,  554 => 283,  547 => 278,  541 => 274,  527 => 266,  519 => 261,  513 => 258,  510 => 257,  506 => 256,  499 => 251,  485 => 243,  477 => 238,  471 => 235,  468 => 234,  464 => 233,  457 => 228,  443 => 220,  435 => 215,  429 => 212,  426 => 211,  422 => 210,  417 => 207,  415 => 206,  397 => 190,  393 => 188,  380 => 181,  376 => 180,  371 => 178,  366 => 176,  362 => 174,  358 => 173,  355 => 172,  353 => 171,  340 => 160,  336 => 158,  322 => 150,  318 => 149,  311 => 145,  305 => 142,  301 => 140,  297 => 139,  294 => 138,  292 => 137,  278 => 125,  274 => 123,  261 => 116,  257 => 115,  253 => 114,  247 => 111,  241 => 108,  236 => 105,  232 => 104,  229 => 103,  227 => 102,  214 => 91,  210 => 89,  197 => 82,  193 => 81,  187 => 78,  181 => 75,  177 => 73,  173 => 72,  170 => 71,  168 => 70,  155 => 59,  151 => 57,  135 => 49,  131 => 48,  125 => 45,  119 => 42,  115 => 40,  111 => 39,  108 => 38,  106 => 37,  99 => 32,  89 => 25,  85 => 24,  81 => 23,  77 => 22,  72 => 20,  67 => 18,  63 => 16,  61 => 15,  50 => 6,  46 => 5,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MyTechnosBlog/Front/Index/index.html.twig", "C:\\wamp64\\www\\mon-blog-technos\\src\\My\\TechnosBlogBundle\\Resources\\views\\Front\\Index\\index.html.twig");
    }
}
