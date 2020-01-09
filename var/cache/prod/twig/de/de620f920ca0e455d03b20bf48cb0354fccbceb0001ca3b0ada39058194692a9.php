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

/* @MyTechnosBlog/Back/AllComments/allComments.html.twig */
class __TwigTemplate_09496a1afb50d1d4d3f06332c84223220fbb4c59a6a2fc79c8eb6e45cb50bf4f extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@MyTechnosBlog/Back/layout.html.twig", "@MyTechnosBlog/Back/AllComments/allComments.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        // line 6
        echo "
  <main>

    <section class=\"sectionAll\">
      <h1 id=\"toto\">Commentaires membres</h1>
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
        $context['_seq'] = twig_ensure_traversable(($context["comments"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 32
            echo "
                    <tr>
                        <td class=\"colunmchild1\">";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "content", []), "html", null, true);
            echo "</td>
                        <td class=\"colunmchild2\">";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "pseudo", []), "html", null, true);
            echo "</td>
                        <td class=\"colunmchild3\">";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "article", []), "title", []), "html", null, true);
            echo "</td>
                        <td class=\"colunmchild4\">";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "date", []), "d/m/Y"), "html", null, true);
            echo "</td>
                        <td class=\"colunmchild5 leftActionComment\">
                            <ul>
                                <li>
                                    <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_delete_comment", ["id" => $this->getAttribute($context["comment"], "id", [])]), "html", null, true);
            echo "\">
                                        <img src=\"";
            // line 42
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
        return array (  137 => 54,  135 => 53,  129 => 49,  116 => 42,  112 => 41,  105 => 37,  101 => 36,  97 => 35,  93 => 34,  89 => 32,  85 => 31,  70 => 18,  61 => 15,  58 => 14,  54 => 13,  49 => 11,  42 => 6,  39 => 5,  29 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@MyTechnosBlog/Back/AllComments/allComments.html.twig", "C:\\wamp64\\www\\mon-blog-technos\\src\\My\\TechnosBlogBundle\\Resources\\views\\Back\\AllComments\\allComments.html.twig");
    }
}
