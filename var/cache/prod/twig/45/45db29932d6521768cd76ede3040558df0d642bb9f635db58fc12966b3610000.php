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

/* @MyTechnosBlog/Back/AllArticle/allArticle.html.twig */
class __TwigTemplate_79a26a4dd435b1c4758535038cc631bba71e689e8d589da7ca67a7ab442d63b2 extends \Twig\Template
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
        return "@MyTechnosBlog/Back/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@MyTechnosBlog/Back/layout.html.twig", "@MyTechnosBlog/Back/AllArticle/allArticle.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        // line 6
        echo "
  <main>

    <section class=\"sectionAll\">
      <h1>Vos articles</h1>

        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", []), "flashBag", []), "get", [0 => "notice"], "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 13
            echo "            <div class=\"flash-notice\">
                ";
            // line 14
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
        <form action=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_all_article", ["page" => 1]);
        echo "\" method=\"post\" class=\"filterFormArticles\">
            <select name=\"category\" class=\"filterFormSelect\">
                <option value=\"\">Sans filtre</option>

                ";
        // line 22
        if (((isset($context["cat"]) || array_key_exists("cat", $context)) && (($context["cat"] ?? null) == "php"))) {
            // line 23
            echo "                    <option value='php' selected>
                        Php
                    </option>
                ";
        } else {
            // line 27
            echo "                    <option value='php'>
                        Php
                    </option>
                ";
        }
        // line 31
        echo "                ";
        if (((isset($context["cat"]) || array_key_exists("cat", $context)) && (($context["cat"] ?? null) == "javascript"))) {
            // line 32
            echo "                    <option value='javascript' selected>
                        Javascript
                    </option>
                ";
        } else {
            // line 36
            echo "                    <option value='javascript'>
                        Javascript
                    </option>
                ";
        }
        // line 40
        echo "                ";
        if (((isset($context["cat"]) || array_key_exists("cat", $context)) && (($context["cat"] ?? null) == "rubis"))) {
            // line 41
            echo "                    <option value='rubis' selected>
                        Rubis
                    </option>
                ";
        } else {
            // line 45
            echo "                    <option value='rubis'>
                        Rubis
                    </option>
                ";
        }
        // line 49
        echo "                ";
        if (((isset($context["cat"]) || array_key_exists("cat", $context)) && (($context["cat"] ?? null) == "tutoriel"))) {
            // line 50
            echo "                    <option value='tutoriel' selected>
                        Tutoriels
                    </option>
                ";
        } else {
            // line 54
            echo "                    <option value='tutoriel'>
                        Tutoriels
                    </option>
                ";
        }
        // line 58
        echo "                ";
        if (((isset($context["cat"]) || array_key_exists("cat", $context)) && (($context["cat"] ?? null) == "sondage"))) {
            // line 59
            echo "                    <option value='sondage' selected>
                        Sondages
                    </option>
                ";
        } else {
            // line 63
            echo "                    <option value='sondage'>
                        Sondages
                    </option>
                ";
        }
        // line 67
        echo "                ";
        if (((isset($context["cat"]) || array_key_exists("cat", $context)) && (($context["cat"] ?? null) == "video"))) {
            // line 68
            echo "                    <option value='video' selected>
                        Vidéo
                    </option>
                ";
        } else {
            // line 72
            echo "                    <option value='video'>
                        Vidéo
                    </option>
                ";
        }
        // line 76
        echo "

            </select>
            <input type=\"submit\" id=\"filterCategoryBtn\" class=\"filterFormSubmit\">
        </form>

        <a href=\"";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_add_article");
        echo "\" class=\"addBtn\">Ajouter un article</a>
        <a href=\"";
        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin");
        echo "\" class=\"adminBtn\">Retourner à l'accueil</a>

        <span class=\"clear\"></span>

        <div class=\"scrollTable\">
            <table>
                <thead>
                    <tr>
                        <th class=\"colunmchild1\">Titre</th>
                        <th class=\"colunmchild2\">Auteur</th>
                        <th class=\"colunmchild3\">Catégories</th>
                        <th class=\"colunmchild4\">Date</th>
                        <th class=\"colunmchild5\">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 100
            echo "                        <tr>
                            <td class=\"colunmchild1\">";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "title", []), "html", null, true);
            echo "</td>
                            <td class=\"colunmchild2\">";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "author", []), "html", null, true);
            echo "</td>
                            <td class=\"colunmchild3\">";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "category", []), "html", null, true);
            echo "</td>
                            <td class=\"colunmchild4\" >";
            // line 104
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "date", []), "d/m/Y"), "html", null, true);
            echo "</td>
                            <td class=\"colunmchild5\">
                                <ul>
                                    <li>
                                        <a href=\"";
            // line 108
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_update_article", ["id" => $this->getAttribute($context["article"], "id", [])]), "html", null, true);
            echo "\">
                                            <img src=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/update.png"), "html", null, true);
            echo "\" alt=\"update\">
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"";
            // line 113
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_delete_article", ["id" => $this->getAttribute($context["article"], "id", [])]), "html", null, true);
            echo "\">
                                            <img src=\"";
            // line 114
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/delete.png"), "html", null, true);
            echo "\" alt=\"delete\">
                                        </a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "                </tbody>
            </table>
        </div>
        ";
        // line 124
        $this->loadTemplate("@MyTechnosBlog/Back/Includes/pagination.html.twig", "@MyTechnosBlog/Back/AllArticle/allArticle.html.twig", 124)->display($context);
        // line 125
        echo "

    </section>

  </main>

    <script src=\"https://code.jquery.com/jquery-3.3.1.min.js\" integrity=\"sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=\" crossorigin=\"anonymous\"></script>
    <script>
        /*
        \$(function() {


            \$('#filterCategoryBtn').click(function(e){

                e.preventDefault();

                let category = \$('#filtreCategory option:selected').val();


                \$.ajax({
                    url:  'http://localhost/mon-blog-technos/web/app_dev.php/admin/ajax-request',
                    type: 'POST',
                    dataType: 'json',
                    data:'category='+ category,
                    success: function(data){

                        var container = document.querySelector('.ajax-result');
                        container.innerHTML = \"\";

                        var data = JSON.parse(JSON.stringify(data));

                        \$.each(data,function(index, value){

                            let p = document.createElement('p');
                            let content = document.createTextNode(value.category);
                            p.appendChild(content);
                            container.appendChild(p);

                        });


                    },
                    error : function(){
                        alert('pas ok');
                    }

                });

            });

        });
        */

    </script>




";
    }

    public function getTemplateName()
    {
        return "@MyTechnosBlog/Back/AllArticle/allArticle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 125,  255 => 124,  250 => 121,  237 => 114,  233 => 113,  226 => 109,  222 => 108,  215 => 104,  211 => 103,  207 => 102,  203 => 101,  200 => 100,  196 => 99,  177 => 83,  173 => 82,  165 => 76,  159 => 72,  153 => 68,  150 => 67,  144 => 63,  138 => 59,  135 => 58,  129 => 54,  123 => 50,  120 => 49,  114 => 45,  108 => 41,  105 => 40,  99 => 36,  93 => 32,  90 => 31,  84 => 27,  78 => 23,  76 => 22,  69 => 18,  66 => 17,  57 => 14,  54 => 13,  50 => 12,  42 => 6,  39 => 5,  29 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@MyTechnosBlog/Back/AllArticle/allArticle.html.twig", "C:\\wamp64\\www\\mon-blog-technos\\src\\My\\TechnosBlogBundle\\Resources\\views\\Back\\AllArticle\\allArticle.html.twig");
    }
}
