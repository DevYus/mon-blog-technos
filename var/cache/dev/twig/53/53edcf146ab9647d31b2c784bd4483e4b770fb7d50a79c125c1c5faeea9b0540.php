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

/* @MyTechnosBlog/Back/AllComments/allComments.html.twig */
class __TwigTemplate_63db50469293453864289ab95a566f46d193b4640d8a239dbdf3f520e3de58ee extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MyTechnosBlog/Back/AllComments/allComments.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MyTechnosBlog/Back/AllComments/allComments.html.twig"));

        $this->parent = $this->loadTemplate("@MyTechnosBlog/Back/layout.html.twig", "@MyTechnosBlog/Back/AllComments/allComments.html.twig", 2);
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
  <main>

    <section class=\"sectionAll\">
      <h1 id=\"toto\">Commentaires membres</h1>
      <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
        echo "\" class=\"adminBtn\">Retourner à l'accueil</a>

        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "session", [], "any", false, false, false, 13), "flashBag", [], "any", false, false, false, 13), "get", [0 => "notice"], "method", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 14
            echo "            <div class=\"flash-notice\">
                ";
            // line 15
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
        <table style=\"width:100%\">
            <thead>
                <tr>
                    <th class=\"colunmchild1\">Commentaires</th>
                    <th class=\"colunmchild2\">Pseudo</th>
                    <th class=\"colunmchild3\">Titre de l'article</th>
                    <th class=\"colunmchild4\">Date</th>
                    <th class=\"colunmchild5\">Actions</th>
                </tr>
            </thead>
            <tbody>

                ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 32
            echo "
                    <tr>
                        <td class=\"colunmchild1\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                        <td class=\"colunmchild2\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "pseudo", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                        <td class=\"colunmchild3\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "article", [], "any", false, false, false, 36), "title", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                        <td class=\"colunmchild4\">";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "date", [], "any", false, false, false, 37), "d/m/Y"), "html", null, true);
            echo "</td>
                        <td class=\"colunmchild5 leftActionComment\">
                            <ul>
                                <li>
                                    <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_delete_comment", ["id" => twig_get_attribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\">
                                        <img src=\"";
            // line 42
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "
            </tbody>
        </table>

        ";
        // line 53
        $this->loadTemplate("@MyTechnosBlog/Back/Includes/pagination.html.twig", "@MyTechnosBlog/Back/AllComments/allComments.html.twig", 53)->display($context);
        // line 54
        echo "

    </section>

  </main>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@MyTechnosBlog/Back/AllComments/allComments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 54,  161 => 53,  155 => 49,  142 => 42,  138 => 41,  131 => 37,  127 => 36,  123 => 35,  119 => 34,  115 => 32,  111 => 31,  96 => 18,  87 => 15,  84 => 14,  80 => 13,  75 => 11,  68 => 6,  58 => 5,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends \"@MyTechnosBlog/Back/layout.html.twig\" %}


{% block main %}

  <main>

    <section class=\"sectionAll\">
      <h1 id=\"toto\">Commentaires membres</h1>
      <a href=\"{{ path('admin') }}\" class=\"adminBtn\">Retourner à l'accueil</a>

        {% for flash_message in app.session.flashBag.get('notice') %}
            <div class=\"flash-notice\">
                {{ flash_message }}
            </div>
        {% endfor %}

        <table style=\"width:100%\">
            <thead>
                <tr>
                    <th class=\"colunmchild1\">Commentaires</th>
                    <th class=\"colunmchild2\">Pseudo</th>
                    <th class=\"colunmchild3\">Titre de l'article</th>
                    <th class=\"colunmchild4\">Date</th>
                    <th class=\"colunmchild5\">Actions</th>
                </tr>
            </thead>
            <tbody>

                {% for comment in comments %}

                    <tr>
                        <td class=\"colunmchild1\">{{ comment.content }}</td>
                        <td class=\"colunmchild2\">{{ comment.pseudo }}</td>
                        <td class=\"colunmchild3\">{{ comment.article.title }}</td>
                        <td class=\"colunmchild4\">{{ comment.date|date('d/m/Y') }}</td>
                        <td class=\"colunmchild5 leftActionComment\">
                            <ul>
                                <li>
                                    <a href=\"{{ path('admin_delete_comment', { 'id' : comment.id }) }}\">
                                        <img src=\"{{ asset('img/delete.png') }}\" alt=\"delete\">
                                    </a>
                                </li>
                            </ul>
                        </td>
                    </tr>
                {% endfor %}

            </tbody>
        </table>

        {% include '@MyTechnosBlog/Back/Includes/pagination.html.twig' %}


    </section>

  </main>



{% endblock %}



", "@MyTechnosBlog/Back/AllComments/allComments.html.twig", "C:\\wamp64\\www\\mon-blog-technos\\src\\My\\TechnosBlogBundle\\Resources\\views\\Back\\AllComments\\allComments.html.twig");
    }
}
