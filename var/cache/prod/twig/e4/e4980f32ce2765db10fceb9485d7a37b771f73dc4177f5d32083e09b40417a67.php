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
class __TwigTemplate_0d8c477d6f53f1bab7f089e998a3ec3b1e98179eaa8fb32a1cb9453d4a1fd713 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@MyTechnosBlog/Back/layout.html.twig", "@MyTechnosBlog/Back/AllUsers/allUsers.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", []), "flashBag", []), "get", [0 => "notice"], "method"));
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
        return array (  201 => 88,  199 => 87,  193 => 83,  180 => 76,  176 => 75,  169 => 71,  166 => 70,  159 => 68,  155 => 66,  151 => 64,  149 => 63,  146 => 62,  142 => 61,  137 => 59,  133 => 58,  130 => 57,  126 => 56,  108 => 40,  102 => 36,  96 => 32,  93 => 31,  87 => 27,  81 => 23,  79 => 22,  73 => 19,  70 => 18,  61 => 15,  58 => 14,  54 => 13,  49 => 11,  42 => 6,  39 => 5,  29 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@MyTechnosBlog/Back/AllUsers/allUsers.html.twig", "C:\\wamp64\\www\\mon-blog-technos\\src\\My\\TechnosBlogBundle\\Resources\\views\\Back\\AllUsers\\allUsers.html.twig");
    }
}
