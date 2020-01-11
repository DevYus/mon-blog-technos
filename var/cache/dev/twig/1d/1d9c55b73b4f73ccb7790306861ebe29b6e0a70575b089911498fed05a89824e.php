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
class __TwigTemplate_d07b6ae5b8b536d4a40c200610ee425f40fb56bc1792ddd8fd7f5d89b15ab425 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MyTechnosBlog/Back/AllArticle/allArticle.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MyTechnosBlog/Back/AllArticle/allArticle.html.twig"));

        $this->parent = $this->loadTemplate("@MyTechnosBlog/Back/layout.html.twig", "@MyTechnosBlog/Back/AllArticle/allArticle.html.twig", 2);
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
  <main>

    <section class=\"sectionAll\">
      <h1>Vos articles</h1>

        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashBag", []), "get", [0 => "notice"], "method"));
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
        if (((isset($context["cat"]) || array_key_exists("cat", $context)) && (($context["cat"] ?? $this->getContext($context, "cat")) == "php"))) {
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
        if (((isset($context["cat"]) || array_key_exists("cat", $context)) && (($context["cat"] ?? $this->getContext($context, "cat")) == "javascript"))) {
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
        if (((isset($context["cat"]) || array_key_exists("cat", $context)) && (($context["cat"] ?? $this->getContext($context, "cat")) == "rubis"))) {
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
        if (((isset($context["cat"]) || array_key_exists("cat", $context)) && (($context["cat"] ?? $this->getContext($context, "cat")) == "tutoriel"))) {
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
        if (((isset($context["cat"]) || array_key_exists("cat", $context)) && (($context["cat"] ?? $this->getContext($context, "cat")) == "sondage"))) {
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
        if (((isset($context["cat"]) || array_key_exists("cat", $context)) && (($context["cat"] ?? $this->getContext($context, "cat")) == "video"))) {
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
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? $this->getContext($context, "articles")));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  275 => 125,  273 => 124,  268 => 121,  255 => 114,  251 => 113,  244 => 109,  240 => 108,  233 => 104,  229 => 103,  225 => 102,  221 => 101,  218 => 100,  214 => 99,  195 => 83,  191 => 82,  183 => 76,  177 => 72,  171 => 68,  168 => 67,  162 => 63,  156 => 59,  153 => 58,  147 => 54,  141 => 50,  138 => 49,  132 => 45,  126 => 41,  123 => 40,  117 => 36,  111 => 32,  108 => 31,  102 => 27,  96 => 23,  94 => 22,  87 => 18,  84 => 17,  75 => 14,  72 => 13,  68 => 12,  60 => 6,  51 => 5,  29 => 2,);
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
{% extends \"@MyTechnosBlog/Back/layout.html.twig\" %}


{% block main %}

  <main>

    <section class=\"sectionAll\">
      <h1>Vos articles</h1>

        {% for flash_message in app.session.flashBag.get('notice') %}
            <div class=\"flash-notice\">
                {{ flash_message }}
            </div>
        {% endfor %}

        <form action=\"{{ path('admin_all_article', { page : 1 }) }}\" method=\"post\" class=\"filterFormArticles\">
            <select name=\"category\" class=\"filterFormSelect\">
                <option value=\"\">Sans filtre</option>

                {% if cat is defined and cat == 'php'  %}
                    <option value='php' selected>
                        Php
                    </option>
                {% else %}
                    <option value='php'>
                        Php
                    </option>
                {% endif %}
                {% if cat is defined and cat == 'javascript' %}
                    <option value='javascript' selected>
                        Javascript
                    </option>
                {% else %}
                    <option value='javascript'>
                        Javascript
                    </option>
                {% endif %}
                {% if cat is defined and cat == 'rubis' %}
                    <option value='rubis' selected>
                        Rubis
                    </option>
                {% else %}
                    <option value='rubis'>
                        Rubis
                    </option>
                {% endif %}
                {% if cat is defined and cat == 'tutoriel' %}
                    <option value='tutoriel' selected>
                        Tutoriels
                    </option>
                {% else %}
                    <option value='tutoriel'>
                        Tutoriels
                    </option>
                {% endif %}
                {% if cat is defined and cat == 'sondage' %}
                    <option value='sondage' selected>
                        Sondages
                    </option>
                {% else %}
                    <option value='sondage'>
                        Sondages
                    </option>
                {% endif %}
                {% if cat is defined and cat == 'video' %}
                    <option value='video' selected>
                        Vidéo
                    </option>
                {% else %}
                    <option value='video'>
                        Vidéo
                    </option>
                {% endif %}


            </select>
            <input type=\"submit\" id=\"filterCategoryBtn\" class=\"filterFormSubmit\">
        </form>

        <a href=\"{{ path('admin_add_article') }}\" class=\"addBtn\">Ajouter un article</a>
        <a href=\"{{ path('admin') }}\" class=\"adminBtn\">Retourner à l'accueil</a>

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
                    {% for article in articles %}
                        <tr>
                            <td class=\"colunmchild1\">{{ article.title }}</td>
                            <td class=\"colunmchild2\">{{ article.author }}</td>
                            <td class=\"colunmchild3\">{{ article.category }}</td>
                            <td class=\"colunmchild4\" >{{ article.date|date('d/m/Y') }}</td>
                            <td class=\"colunmchild5\">
                                <ul>
                                    <li>
                                        <a href=\"{{ path('admin_update_article', { 'id' : article.id }) }}\">
                                            <img src=\"{{ asset('img/update.png') }}\" alt=\"update\">
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"{{ path('admin_delete_article', { 'id' : article.id }) }}\">
                                            <img src=\"{{ asset('img/delete.png') }}\" alt=\"delete\">
                                        </a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
        {% include '@MyTechnosBlog/Back/Includes/pagination.html.twig' %}


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




{% endblock %}



", "@MyTechnosBlog/Back/AllArticle/allArticle.html.twig", "C:\\wamp64\\www\\mon-blog-technos\\src\\My\\TechnosBlogBundle\\Resources\\views\\Back\\AllArticle\\allArticle.html.twig");
    }
}
