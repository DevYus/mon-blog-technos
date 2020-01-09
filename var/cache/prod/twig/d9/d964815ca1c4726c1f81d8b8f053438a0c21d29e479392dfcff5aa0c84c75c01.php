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

/* @MyTechnosBlog/Front/Index/index.html.twig */
class __TwigTemplate_6057e94847f7698db10465c353389fb1de82ebd260f5313f98725b9008e5e3fc extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@MyTechnosBlog/Front/layout.html.twig", "@MyTechnosBlog/Front/Index/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article", ["category" => $this->getAttribute(($context["lastArticle"] ?? null), "category", []), "id" => $this->getAttribute(($context["lastArticle"] ?? null), "id", []), "slug" => $this->getAttribute(($context["lastArticle"] ?? null), "slug", [])]), "html", null, true);
            echo "\">
                    <figure>
                      <img src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/" . $this->getAttribute(($context["lastArticle"] ?? null), "pathImg", []))), "html", null, true);
            echo "\" />
                      <figcaption>
                        <span class=\"catFigCaption\"><strong>A la une </strong>| ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute(($context["lastArticle"] ?? null), "category", []), "html", null, true);
            echo "</span>
                        <h1>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute(($context["lastArticle"] ?? null), "title", []), "html", null, true);
            echo "</h1>
                        <p>";
            // line 24
            echo strip_tags(twig_slice($this->env, twig_convert_encoding($this->getAttribute(($context["lastArticle"] ?? null), "content", []), "UTF-8", "HTML-ENTITIES"), 0, 150), "p");
            echo "...</p>
                        <span class=\"dateFicaption\">Le ";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["lastArticle"] ?? null), "date", []), "d M Y"), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article", ["category" => $this->getAttribute($context["articleRight"], "category", []), "id" => $this->getAttribute($context["articleRight"], "id", []), "slug" => $this->getAttribute($context["articleRight"], "slug", [])]), "html", null, true);
                echo "\">
                                <figure>
                                    <div class=\"truncateWrapperImg rightBlocsWidth\">
                                        <img src=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/" . $this->getAttribute($context["articleRight"], "pathImg", []))), "html", null, true);
                echo "\" />
                                    </div>
                                    <figcaption>
                                        <h3 class=\"asideArticleTitle\">";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["articleRight"], "title", []), "html", null, true);
                echo "</h3>
                                        <span class=\"dateFicaption\">Le ";
                // line 49
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["articleRight"], "date", []), "d M Y"), "html", null, true);
                echo " par ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["articleRight"], "author", []), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article", ["category" => $this->getAttribute($context["popular"], "category", []), "id" => $this->getAttribute($context["popular"], "id", []), "slug" => $this->getAttribute($context["popular"], "slug", [])]), "html", null, true);
                echo "\">
                            <figure>
                                <div class=\"truncateWrapperImg\">
                                    <img src=\"";
                // line 78
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/" . $this->getAttribute($context["popular"], "pathImg", []))), "html", null, true);
                echo "\" alt=\"popular-artilce-blog\" class=\"truncateImg\">
                                </div>
                                <figcaption>
                                    <h3>";
                // line 81
                echo twig_escape_filter($this->env, $this->getAttribute($context["popular"], "title", []), "html", null, true);
                echo "</h3>
                                    <p>";
                // line 82
                echo strip_tags(twig_slice($this->env, twig_convert_encoding($this->getAttribute($context["popular"], "content", []), "UTF-8", "HTML-ENTITIES"), 0, 200), "p");
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
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article", ["category" => twig_replace_filter($this->getAttribute($context["video"], "category", []), ["é" => "e"]), "id" => $this->getAttribute($context["video"], "id", []), "slug" => $this->getAttribute($context["video"], "slug", [])]), "html", null, true);
                echo "\">
                            <figure>
                                <div class=\"truncateWrapperImgVideo\">
                                    <img src=\"";
                // line 111
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/" . $this->getAttribute($context["video"], "pathImg", []))), "html", null, true);
                echo "\" class=\"videoBlockImg\">
                                </div>
                                <figcaption class=\"figcaptionVideo\">
                                    <span class=\"catFigCaption\" ><strong>Ressources |</strong> ";
                // line 114
                echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "category", []), "html", null, true);
                echo " </span>
                                    <h3>";
                // line 115
                echo twig_escape_filter($this->env, $this->getAttribute($context["video"], "title", []), "html", null, true);
                echo "</h3>
                                    <p>";
                // line 116
                echo strip_tags(twig_slice($this->env, twig_convert_encoding($this->getAttribute($context["video"], "content", []), "UTF-8", "HTML-ENTITIES"), 0, 200), "p");
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
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article", ["category" => $this->getAttribute($context["tutorial"], "category", []), "id" => $this->getAttribute($context["tutorial"], "id", []), "slug" => $this->getAttribute($context["tutorial"], "slug", [])]), "html", null, true);
                echo "\">
                        <figure>
                            <div class=\"tutorialBlockImg\">
                                <img src=\"";
                // line 145
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/" . $this->getAttribute($context["tutorial"], "pathImg", []))), "html", null, true);
                echo "\" alt=\"articles-populaire\">
                            </div>
                            <figcaption>
                                <div class=\"tutorialBlockContent\">
                                    <h3>";
                // line 149
                echo twig_escape_filter($this->env, $this->getAttribute($context["tutorial"], "title", []), "html", null, true);
                echo "</h3>
                                    <p>";
                // line 150
                echo strip_tags(twig_slice($this->env, twig_convert_encoding($this->getAttribute($context["tutorial"], "content", []), "UTF-8", "HTML-ENTITIES"), 0, 200), "p");
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
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article", ["category" => $this->getAttribute($context["survey"], "category", []), "id" => $this->getAttribute($context["survey"], "id", []), "slug" => $this->getAttribute($context["survey"], "slug", [])]), "html", null, true);
                echo "\">
                            <figure>
                                <img src=\"";
                // line 178
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/" . $this->getAttribute($context["survey"], "pathImg", []))), "html", null, true);
                echo "\" alt=\"popular-artilce-blog\">
                                <figcaption>
                                    <h3>";
                // line 180
                echo twig_escape_filter($this->env, $this->getAttribute($context["survey"], "title", []), "html", null, true);
                echo "</h3>
                                    <p>";
                // line 181
                echo strip_tags(twig_slice($this->env, twig_convert_encoding($this->getAttribute($context["survey"], "content", []), "UTF-8", "HTML-ENTITIES"), 0, 200), "p");
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
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article", ["category" => twig_replace_filter($this->getAttribute($context["articleCarrousel"], "category", []), ["é" => "e"]), "id" => $this->getAttribute($context["articleCarrousel"], "id", []), "slug" => $this->getAttribute($context["articleCarrousel"], "slug", [])]), "html", null, true);
                echo "\">
                                <div class=\"articleSlide\">
                                    <div class=\"imgSlide\">
                                        <img src=\"";
                // line 215
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/" . $this->getAttribute($context["articleCarrousel"], "pathImg", []))), "html", null, true);
                echo "\" alt=\"\">
                                    </div>
                                    <div class=\"contentSlide\">
                                        <div class=\"titleSlide\">
                                            <h3>
                                                ";
                // line 220
                echo twig_escape_filter($this->env, $this->getAttribute($context["articleCarrousel"], "title", []), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article", ["category" => twig_replace_filter($this->getAttribute($context["articleCarrousel"], "category", []), ["é" => "e"]), "id" => $this->getAttribute($context["articleCarrousel"], "id", []), "slug" => $this->getAttribute($context["articleCarrousel"], "slug", [])]), "html", null, true);
                echo "\">
                                <div class=\"articleSlide\">
                                    <div class=\"imgSlide\">
                                        <img src=\"";
                // line 238
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/" . $this->getAttribute($context["articleCarrousel"], "pathImg", []))), "html", null, true);
                echo "\" alt=\"\">
                                    </div>
                                    <div class=\"contentSlide\">
                                        <div class=\"titleSlide\">
                                            <h3>
                                                ";
                // line 243
                echo twig_escape_filter($this->env, $this->getAttribute($context["articleCarrousel"], "title", []), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article", ["category" => twig_replace_filter($this->getAttribute($context["articleCarrousel"], "category", []), ["é" => "e"]), "id" => $this->getAttribute($context["articleCarrousel"], "id", []), "slug" => $this->getAttribute($context["articleCarrousel"], "slug", [])]), "html", null, true);
                echo "\">
                                <div class=\"articleSlide\">
                                    <div class=\"imgSlide\">
                                        <img src=\"";
                // line 261
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/" . $this->getAttribute($context["articleCarrousel"], "pathImg", []))), "html", null, true);
                echo "\" alt=\"\">
                                    </div>
                                    <div class=\"contentSlide\">
                                        <div class=\"titleSlide\">
                                            <h3>
                                                ";
                // line 266
                echo twig_escape_filter($this->env, $this->getAttribute($context["articleCarrousel"], "title", []), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article", ["category" => twig_replace_filter($this->getAttribute($context["articleCarrousel"], "category", []), ["é" => "e"]), "id" => $this->getAttribute($context["articleCarrousel"], "id", []), "slug" => $this->getAttribute($context["articleCarrousel"], "slug", [])]), "html", null, true);
                echo "\">
                                <div class=\"articleSlide\">
                                    <div class=\"imgSlide\">
                                        <img src=\"";
                // line 292
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/" . $this->getAttribute($context["articleCarrousel"], "pathImg", []))), "html", null, true);
                echo "\" alt=\"\">
                                    </div>
                                    <div class=\"contentSlide\">
                                        <div class=\"titleSlide\">
                                            <h3>
                                                ";
                // line 297
                echo twig_escape_filter($this->env, $this->getAttribute($context["articleCarrousel"], "title", []), "html", null, true);
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
        return array (  594 => 309,  588 => 305,  574 => 297,  566 => 292,  560 => 289,  557 => 288,  553 => 287,  548 => 284,  546 => 283,  539 => 278,  533 => 274,  519 => 266,  511 => 261,  505 => 258,  502 => 257,  498 => 256,  491 => 251,  477 => 243,  469 => 238,  463 => 235,  460 => 234,  456 => 233,  449 => 228,  435 => 220,  427 => 215,  421 => 212,  418 => 211,  414 => 210,  409 => 207,  407 => 206,  389 => 190,  385 => 188,  372 => 181,  368 => 180,  363 => 178,  358 => 176,  354 => 174,  350 => 173,  347 => 172,  345 => 171,  332 => 160,  328 => 158,  314 => 150,  310 => 149,  303 => 145,  297 => 142,  293 => 140,  289 => 139,  286 => 138,  284 => 137,  270 => 125,  266 => 123,  253 => 116,  249 => 115,  245 => 114,  239 => 111,  233 => 108,  228 => 105,  224 => 104,  221 => 103,  219 => 102,  206 => 91,  202 => 89,  189 => 82,  185 => 81,  179 => 78,  173 => 75,  169 => 73,  165 => 72,  162 => 71,  160 => 70,  147 => 59,  143 => 57,  127 => 49,  123 => 48,  117 => 45,  111 => 42,  107 => 40,  103 => 39,  100 => 38,  98 => 37,  91 => 32,  81 => 25,  77 => 24,  73 => 23,  69 => 22,  64 => 20,  59 => 18,  55 => 16,  53 => 15,  42 => 6,  39 => 5,  29 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@MyTechnosBlog/Front/Index/index.html.twig", "C:\\wamp64\\www\\mon-blog-technos\\src\\My\\TechnosBlogBundle\\Resources\\views\\Front\\Index\\index.html.twig");
    }
}
