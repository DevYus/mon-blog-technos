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

/* @MyTechnosBlog/Back/AllUsers/allUsers.html.twig */
class __TwigTemplate_ffbe402534fe1cd05d8f71690bf9fb6bea4ba7d3d986361327f9d4a1fe227809 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MyTechnosBlog/Back/AllUsers/allUsers.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MyTechnosBlog/Back/AllUsers/allUsers.html.twig"));

        $this->parent = $this->loadTemplate("@MyTechnosBlog/Back/layout.html.twig", "@MyTechnosBlog/Back/AllUsers/allUsers.html.twig", 2);
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
      <h1>Utilisateurs inscrits</h1>
      <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin");
        echo "\" class=\"adminBtn\">Retourner à l'accueil</a>

        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "flashBag", []), "get", [0 => "notice"], "method"));
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_all_users", ["page" => 1]);
        echo "\" method=\"post\" class=\"filterFormUsers\">
            <select name=\"category\" class=\"filterFormSelect\">
                <option value=\"\">Sans filtre</option>
                ";
        // line 22
        if (((isset($context["cat"]) || array_key_exists("cat", $context)) && (($context["cat"] ?? $this->getContext($context, "cat")) == "role-user"))) {
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
        if (((isset($context["cat"]) || array_key_exists("cat", $context)) && (($context["cat"] ?? $this->getContext($context, "cat")) == "role-admin"))) {
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
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 57
            echo "                    <tr>
                        <td class=\"colunmchild1\">";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", []), "html", null, true);
            echo "</td>
                        <td class=\"colunmchild2\">";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", []), "html", null, true);
            echo "</td>

                        ";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "roles", []));
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
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "date", []), "d/m/Y"), "html", null, true);
            echo "</td>
                        <td class=\"colunmchild5\">
                            <ul>
                                <li class=\"liChildUsers\">
                                    <a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_delete_user", ["id" => $this->getAttribute($context["user"], "id", [])]), "html", null, true);
            echo "\">
                                        <img src=\"";
            // line 76
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
        return array (  219 => 88,  217 => 87,  211 => 83,  198 => 76,  194 => 75,  187 => 71,  184 => 70,  177 => 68,  173 => 66,  169 => 64,  167 => 63,  164 => 62,  160 => 61,  155 => 59,  151 => 58,  148 => 57,  144 => 56,  126 => 40,  120 => 36,  114 => 32,  111 => 31,  105 => 27,  99 => 23,  97 => 22,  91 => 19,  88 => 18,  79 => 15,  76 => 14,  72 => 13,  67 => 11,  60 => 6,  51 => 5,  29 => 2,);
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
