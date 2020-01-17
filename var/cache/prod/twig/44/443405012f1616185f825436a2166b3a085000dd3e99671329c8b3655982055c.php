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
class __TwigTemplate_39dbe8d36c5d93c8c18b1e27651cd9f54078e7f37534da4dd5c9f1069c4e46a7 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@MyTechnosBlog/Back/layout.html.twig", "@MyTechnosBlog/Back/AllUsers/allUsers.html.twig", 2);
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
      <h1>Utilisateurs inscrits</h1>
      <a href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
        echo "\" class=\"adminBtn\">Retourner à l'accueil</a>

        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 13), "flashBag", [], "any", false, false, false, 13), "get", [0 => "notice"], "method", false, false, false, 13));
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
        if (((isset($context["cat"]) || array_key_exists("cat", $context)) && (($context["cat"] ?? null) == "role-user"))) {
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
        if (((isset($context["cat"]) || array_key_exists("cat", $context)) && (($context["cat"] ?? null) == "role-admin"))) {
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
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
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
        return array (  209 => 88,  207 => 87,  201 => 83,  188 => 76,  184 => 75,  177 => 71,  174 => 70,  167 => 68,  163 => 66,  159 => 64,  157 => 63,  154 => 62,  150 => 61,  145 => 59,  141 => 58,  138 => 57,  134 => 56,  116 => 40,  110 => 36,  104 => 32,  101 => 31,  95 => 27,  89 => 23,  87 => 22,  81 => 19,  78 => 18,  69 => 15,  66 => 14,  62 => 13,  57 => 11,  50 => 6,  46 => 5,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MyTechnosBlog/Back/AllUsers/allUsers.html.twig", "C:\\wamp64\\www\\mon-blog-technos\\src\\My\\TechnosBlogBundle\\Resources\\views\\Back\\AllUsers\\allUsers.html.twig");
    }
}
