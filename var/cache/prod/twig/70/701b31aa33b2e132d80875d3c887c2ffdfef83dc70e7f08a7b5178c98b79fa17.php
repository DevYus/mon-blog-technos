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

/* @MyTechnosBlog/Back/AllArticle/allArticle.html.twig */
class __TwigTemplate_006e61a36ccf1f2fc2edb59dba8b9550045b494456ad448d1b4588e66bfcd1f1 extends \Twig\Template
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
        return "@MyTechnosBlog/Back/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@MyTechnosBlog/Back/layout.html.twig", "@MyTechnosBlog/Back/AllArticle/allArticle.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
  <main>

    <section class=\"sectionAll\">
      <h1>Vos articles</h1>

        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 12), "flashBag", [], "any", false, false, false, 12), "get", [0 => "notice"], "method", false, false, false, 12));
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_all_article", ["page" => 1]);
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_add_article");
        echo "\" class=\"addBtn\">Ajouter un article</a>
        <a href=\"";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 101), "html", null, true);
            echo "</td>
                            <td class=\"colunmchild2\">";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "author", [], "any", false, false, false, 102), "html", null, true);
            echo "</td>
                            <td class=\"colunmchild3\">";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "category", [], "any", false, false, false, 103), "html", null, true);
            echo "</td>
                            <td class=\"colunmchild4\" >";
            // line 104
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "date", [], "any", false, false, false, 104), "d/m/Y"), "html", null, true);
            echo "</td>
                            <td class=\"colunmchild5\">
                                <ul>
                                    <li>
                                        <a href=\"";
            // line 108
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_update_article", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 108)]), "html", null, true);
            echo "\">
                                            <img src=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/update.png"), "html", null, true);
            echo "\" alt=\"update\">
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"";
            // line 113
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_delete_article", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 113)]), "html", null, true);
            echo "\">
                                            <img src=\"";
            // line 114
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/delete.png"), "html", null, true);
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
        return array (  265 => 125,  263 => 124,  258 => 121,  245 => 114,  241 => 113,  234 => 109,  230 => 108,  223 => 104,  219 => 103,  215 => 102,  211 => 101,  208 => 100,  204 => 99,  185 => 83,  181 => 82,  173 => 76,  167 => 72,  161 => 68,  158 => 67,  152 => 63,  146 => 59,  143 => 58,  137 => 54,  131 => 50,  128 => 49,  122 => 45,  116 => 41,  113 => 40,  107 => 36,  101 => 32,  98 => 31,  92 => 27,  86 => 23,  84 => 22,  77 => 18,  74 => 17,  65 => 14,  62 => 13,  58 => 12,  50 => 6,  46 => 5,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MyTechnosBlog/Back/AllArticle/allArticle.html.twig", "C:\\wamp64\\www\\mon-blog-technos\\src\\My\\TechnosBlogBundle\\Resources\\views\\Back\\AllArticle\\allArticle.html.twig");
    }
}
