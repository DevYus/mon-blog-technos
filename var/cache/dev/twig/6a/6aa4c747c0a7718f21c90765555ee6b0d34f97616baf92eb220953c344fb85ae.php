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

/* @MyTechnosBlog/Back/DeleteUser/deleteUser.html.twig */
class __TwigTemplate_5f6c44bed68fc30603f9e4a6015eafdc815295a2670ae88421c2fc06e14d60e5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MyTechnosBlog/Back/DeleteUser/deleteUser.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MyTechnosBlog/Back/DeleteUser/deleteUser.html.twig"));

        $this->parent = $this->loadTemplate("@MyTechnosBlog/Back/layout.html.twig", "@MyTechnosBlog/Back/DeleteUser/deleteUser.html.twig", 2);
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

    <section class=\"sectionArticle\">
      <h1>Supprimer un utilisateur</h1>



            ";
        // line 14
        if ((twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 14, $this->source); })()), "email", [], "any", false, false, false, 14) == "ouldamri.youssef@gmail.com")) {
            // line 15
            echo "
                <span class=\"deleteText\">

                    Attention, vous ne pouvez pas supprimer ce compte.
                     <div class=\"deleteContainer\">
                        <a href=\"";
            // line 20
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_all_users", ["page" => 1]);
            echo "\" class=\"returnBtn\">Retourner à l'administration</a>
                     </div>

                </span>

            ";
        } else {
            // line 26
            echo "
                <span class=\"deleteText\">
                    Attention, êtes vous certains de vouloir supprimer cet utilisateur ? <br>
                    Si vous confirmez, l'utilisateur sera définitivement supprimé de votre base de données.<br><br>
                    Utilisateur : ";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 30, $this->source); })()), "username", [], "any", false, false, false, 30), "html", null, true);
            echo " inscrit le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 30, $this->source); })()), "date", [], "any", false, false, false, 30), "d M Y"), "html", null, true);
            echo " utilisant le pseudo ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 30, $this->source); })()), "pseudo", [], "any", false, false, false, 30), "html", null, true);
            echo " .
                </span>

                <div class=\"deleteContainer\">

                    ";
            // line 35
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), 'errors');
            echo "
                    ";
            // line 36
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), 'form_start');
            echo "
                    ";
            // line 37
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), 'widget');
            echo "
                    <a href=\"";
            // line 38
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_all_users", ["page" => 1]);
            echo "\" class=\"returnBtn\">Retourner à l'administration</a>
                    ";
            // line 39
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), 'form_end');
            echo "

                </div>

            ";
        }
        // line 44
        echo "

        </span>




    </section>

  </main>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@MyTechnosBlog/Back/DeleteUser/deleteUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 44,  130 => 39,  126 => 38,  122 => 37,  118 => 36,  114 => 35,  102 => 30,  96 => 26,  87 => 20,  80 => 15,  78 => 14,  68 => 6,  58 => 5,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends \"@MyTechnosBlog/Back/layout.html.twig\" %}


{% block main %}

  <main>

    <section class=\"sectionArticle\">
      <h1>Supprimer un utilisateur</h1>



            {% if user.email == \"ouldamri.youssef@gmail.com\" %}

                <span class=\"deleteText\">

                    Attention, vous ne pouvez pas supprimer ce compte.
                     <div class=\"deleteContainer\">
                        <a href=\"{{ path('admin_all_users', { 'page' : 1 }) }}\" class=\"returnBtn\">Retourner à l'administration</a>
                     </div>

                </span>

            {% else %}

                <span class=\"deleteText\">
                    Attention, êtes vous certains de vouloir supprimer cet utilisateur ? <br>
                    Si vous confirmez, l'utilisateur sera définitivement supprimé de votre base de données.<br><br>
                    Utilisateur : {{ user.username }} inscrit le {{ user.date|date('d M Y') }} utilisant le pseudo {{ user.pseudo }} .
                </span>

                <div class=\"deleteContainer\">

                    {{ form_errors(form) }}
                    {{ form_start(form) }}
                    {{ form_widget(form) }}
                    <a href=\"{{ path('admin_all_users', { 'page' : 1 }) }}\" class=\"returnBtn\">Retourner à l'administration</a>
                    {{ form_end(form) }}

                </div>

            {% endif %}


        </span>




    </section>

  </main>



{% endblock %}



", "@MyTechnosBlog/Back/DeleteUser/deleteUser.html.twig", "C:\\wamp64\\www\\mon-blog-technos\\src\\My\\TechnosBlogBundle\\Resources\\views\\Back\\DeleteUser\\deleteUser.html.twig");
    }
}
