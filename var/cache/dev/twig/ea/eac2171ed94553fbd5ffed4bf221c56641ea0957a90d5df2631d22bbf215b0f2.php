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

/* @MyTechnosBlog/Back/AllUsers/allUsers.html.twig */
class __TwigTemplate_87841547b9ba6249ee39219cd973bdfd807c1b141f4a1345dd328f04b1bac352 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MyTechnosBlog/Back/AllUsers/allUsers.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MyTechnosBlog/Back/AllUsers/allUsers.html.twig"));

        $this->parent = $this->loadTemplate("@MyTechnosBlog/Back/layout.html.twig", "@MyTechnosBlog/Back/AllUsers/allUsers.html.twig", 2);
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
      <h1>Utilisateurs inscrits</h1>
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
        <form action=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_all_users", ["page" => 1]);
        echo "\" method=\"post\" class=\"filterFormUsers\">
            <select name=\"category\" class=\"filterFormSelect\">
                <option value=\"\">Sans filtre</option>
                ";
        // line 22
        if (((isset($context["cat"]) || array_key_exists("cat", $context)) && ((isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new RuntimeError('Variable "cat" does not exist.', 22, $this->source); })()) == "role-user"))) {
            // line 23
            echo "                    <option value='role-user' selected>
                        Membre
                    </option>
                ";
        } else {
            // line 27
            echo "                    <option value='role-user'>
                        Membre
                    </option>
                ";
        }
        // line 31
        echo "                ";
        if (((isset($context["cat"]) || array_key_exists("cat", $context)) && ((isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new RuntimeError('Variable "cat" does not exist.', 31, $this->source); })()) == "role-admin"))) {
            // line 32
            echo "                    <option value='role-admin' selected>
                        Administrateur
                    </option>
                 ";
        } else {
            // line 36
            echo "                     <option value='role-admin'>
                         Administrateur
                     </option>
                ";
        }
        // line 40
        echo "            </select>
            <input type=\"submit\" id=\"filterCategoryBtn\" class=\"filterFormSubmit\">
        </form>

        <table style=\"width:100%\">
            <thead>
                <tr>
                    <th class=\"colunmchild1\">Email</th>
                    <th class=\"colunmchild2\">Pseudo</th>
                    <th class=\"colunmchild3\">Role</th>
                    <th class=\"colunmchild4\">Date d'inscription</th>
                    <th class=\"colunmchild5\">Actions</th>
                </tr>
            </thead>
            <tbody>

                ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 56, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 57
            echo "                    <tr>
                        <td class=\"colunmchild1\">";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
                        <td class=\"colunmchild2\">";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>

                        ";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 61));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 62
                echo "
                            ";
                // line 63
                if (($context["role"] == "ROLE_ADMIN")) {
                    // line 64
                    echo "                                <td class=\"colunmchild3\">Administrateur</td>
                            ";
                } else {
                    // line 66
                    echo "                                <td class=\"colunmchild3\">Membre</td>
                            ";
                }
                // line 68
                echo "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "
                        <td class=\"colunmchild4\" >";
            // line 71
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "date", [], "any", false, false, false, 71), "d/m/Y"), "html", null, true);
            echo "</td>
                        <td class=\"colunmchild5\">
                            <ul>
                                <li class=\"liChildUsers\">
                                    <a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_delete_user", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 75)]), "html", null, true);
            echo "\">
                                        <img src=\"";
            // line 76
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "
            </tbody>
        </table>

        ";
        // line 87
        $this->loadTemplate("@MyTechnosBlog/Back/Includes/pagination.html.twig", "@MyTechnosBlog/Back/AllUsers/allUsers.html.twig", 87)->display($context);
        // line 88
        echo "

    </section>

  </main>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@MyTechnosBlog/Back/AllUsers/allUsers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 88,  225 => 87,  219 => 83,  206 => 76,  202 => 75,  195 => 71,  192 => 70,  185 => 68,  181 => 66,  177 => 64,  175 => 63,  172 => 62,  168 => 61,  163 => 59,  159 => 58,  156 => 57,  152 => 56,  134 => 40,  128 => 36,  122 => 32,  119 => 31,  113 => 27,  107 => 23,  105 => 22,  99 => 19,  96 => 18,  87 => 15,  84 => 14,  80 => 13,  75 => 11,  68 => 6,  58 => 5,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends \"@MyTechnosBlog/Back/layout.html.twig\" %}


{% block main %}

  <main>

    <section class=\"sectionAll\">
      <h1>Utilisateurs inscrits</h1>
      <a href=\"{{ path('admin') }}\" class=\"adminBtn\">Retourner à l'accueil</a>

        {% for flash_message in app.session.flashBag.get('notice') %}
            <div class=\"flash-notice\">
                {{ flash_message }}
            </div>
        {% endfor %}

        <form action=\"{{ path('admin_all_users', { page : 1 }) }}\" method=\"post\" class=\"filterFormUsers\">
            <select name=\"category\" class=\"filterFormSelect\">
                <option value=\"\">Sans filtre</option>
                {% if cat is defined and cat == 'role-user'  %}
                    <option value='role-user' selected>
                        Membre
                    </option>
                {% else %}
                    <option value='role-user'>
                        Membre
                    </option>
                {% endif %}
                {% if cat is defined and cat == 'role-admin'  %}
                    <option value='role-admin' selected>
                        Administrateur
                    </option>
                 {% else %}
                     <option value='role-admin'>
                         Administrateur
                     </option>
                {% endif %}
            </select>
            <input type=\"submit\" id=\"filterCategoryBtn\" class=\"filterFormSubmit\">
        </form>

        <table style=\"width:100%\">
            <thead>
                <tr>
                    <th class=\"colunmchild1\">Email</th>
                    <th class=\"colunmchild2\">Pseudo</th>
                    <th class=\"colunmchild3\">Role</th>
                    <th class=\"colunmchild4\">Date d'inscription</th>
                    <th class=\"colunmchild5\">Actions</th>
                </tr>
            </thead>
            <tbody>

                {% for user in users %}
                    <tr>
                        <td class=\"colunmchild1\">{{ user.email }}</td>
                        <td class=\"colunmchild2\">{{ user.username }}</td>

                        {% for role in user.roles %}

                            {% if role == 'ROLE_ADMIN' %}
                                <td class=\"colunmchild3\">Administrateur</td>
                            {% else %}
                                <td class=\"colunmchild3\">Membre</td>
                            {% endif %}

                        {% endfor %}

                        <td class=\"colunmchild4\" >{{ user.date|date('d/m/Y') }}</td>
                        <td class=\"colunmchild5\">
                            <ul>
                                <li class=\"liChildUsers\">
                                    <a href=\"{{ path('admin_delete_user', { 'id' : user.id }) }}\">
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



", "@MyTechnosBlog/Back/AllUsers/allUsers.html.twig", "C:\\wamp64\\www\\mon-blog-technos\\src\\My\\TechnosBlogBundle\\Resources\\views\\Back\\AllUsers\\allUsers.html.twig");
    }
}
