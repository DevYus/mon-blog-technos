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

/* @MyTechnosBlog/Front/Index\index.html.twig */
class __TwigTemplate_89bbd827faa0c2ba6ee88e449031390fb1ed6f53a6c2b7d498da4b47257bebd2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MyTechnosBlog/Front/Index\\index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MyTechnosBlog/Front/Index\\index.html.twig"));

        $this->parent = $this->loadTemplate("@MyTechnosBlog/Front/layout.html.twig", "@MyTechnosBlog/Front/Index\\index.html.twig", 2);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article", ["category" => $this->getAttribute(($context["lastArticle"] ?? $this->getContext($context, "lastArticle")), "category", []), "id" => $this->getAttribute(($context["lastArticle"] ?? $this->getContext($context, "lastArticle")), "id", []), "slug" => $this->getAttribute(($context["lastArticle"] ?? $this->getContext($context, "lastArticle")), "slug", [])]), "html", null, true);
            echo "\">
                    <figure>
                      <img src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/" . $this->getAttribute(($context["lastArticle"] ?? $this->getContext($context, "lastArticle")), "pathImg", []))), "html", null, true);
            echo "\" />
                      <figcaption>
                        <span class=\"catFigCaption\"><strong>A la une </strong>| ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute(($context["lastArticle"] ?? $this->getContext($context, "lastArticle")), "category", []), "html", null, true);
            echo "</span>
                        <h1>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute(($context["lastArticle"] ?? $this->getContext($context, "lastArticle")), "title", []), "html", null, true);
            echo "</h1>
                        <p>";
            // line 24
            echo strip_tags(twig_slice($this->env, twig_convert_encoding($this->getAttribute(($context["lastArticle"] ?? $this->getContext($context, "lastArticle")), "content", []), "UTF-8", "HTML-ENTITIES"), 0, 150), "p");
            echo "...</p>
                        <span class=\"dateFicaption\">Le ";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["lastArticle"] ?? $this->getContext($context, "lastArticle")), "date", []), "d M Y"), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable(($context["rightArticles"] ?? $this->getContext($context, "rightArticles")));
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
            $context['_seq'] = twig_ensure_traversable(($context["popularArticles"] ?? $this->getContext($context, "popularArticles")));
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
            $context['_seq'] = twig_ensure_traversable(($context["videos"] ?? $this->getContext($context, "videos")));
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
            $context['_seq'] = twig_ensure_traversable(($context["tutorials"] ?? $this->getContext($context, "tutorials")));
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
            $context['_seq'] = twig_ensure_traversable(($context["surveys"] ?? $this->getContext($context, "surveys")));
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
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["articlesCarrousel"] ?? $this->getContext($context, "articlesCarrousel")), 0, 3));
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
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["articlesCarrousel"] ?? $this->getContext($context, "articlesCarrousel")), 3, 3));
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
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["articlesCarrousel"] ?? $this->getContext($context, "articlesCarrousel")), 6, 3));
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
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["articlesCarrousel"] ?? $this->getContext($context, "articlesCarrousel")), 0, 3));
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
        return array (  612 => 309,  606 => 305,  592 => 297,  584 => 292,  578 => 289,  575 => 288,  571 => 287,  566 => 284,  564 => 283,  557 => 278,  551 => 274,  537 => 266,  529 => 261,  523 => 258,  520 => 257,  516 => 256,  509 => 251,  495 => 243,  487 => 238,  481 => 235,  478 => 234,  474 => 233,  467 => 228,  453 => 220,  445 => 215,  439 => 212,  436 => 211,  432 => 210,  427 => 207,  425 => 206,  407 => 190,  403 => 188,  390 => 181,  386 => 180,  381 => 178,  376 => 176,  372 => 174,  368 => 173,  365 => 172,  363 => 171,  350 => 160,  346 => 158,  332 => 150,  328 => 149,  321 => 145,  315 => 142,  311 => 140,  307 => 139,  304 => 138,  302 => 137,  288 => 125,  284 => 123,  271 => 116,  267 => 115,  263 => 114,  257 => 111,  251 => 108,  246 => 105,  242 => 104,  239 => 103,  237 => 102,  224 => 91,  220 => 89,  207 => 82,  203 => 81,  197 => 78,  191 => 75,  187 => 73,  183 => 72,  180 => 71,  178 => 70,  165 => 59,  161 => 57,  145 => 49,  141 => 48,  135 => 45,  129 => 42,  125 => 40,  121 => 39,  118 => 38,  116 => 37,  109 => 32,  99 => 25,  95 => 24,  91 => 23,  87 => 22,  82 => 20,  77 => 18,  73 => 16,  71 => 15,  60 => 6,  51 => 5,  29 => 2,);
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
                        <p>{{ lastArticle.content|convert_encoding('UTF-8', 'HTML-ENTITIES')|slice(0,150)|striptags('p')|raw }}...</p>
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
                                    <p>{{ popular.content|convert_encoding('UTF-8', 'HTML-ENTITIES')|slice(0,200)|striptags('p')|raw }}...</p>
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
                                    <p>{{ video.content|convert_encoding('UTF-8', 'HTML-ENTITIES')|slice(0,200)|striptags('p')|raw }}...</p>
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
                                    <p>{{ tutorial.content|convert_encoding('UTF-8', 'HTML-ENTITIES')|slice(0,200)|striptags('p')|raw }}...</p>
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
                                    <p>{{ survey.content|convert_encoding('UTF-8', 'HTML-ENTITIES')|slice(0,200)|striptags('p')|raw }}... </p>
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
