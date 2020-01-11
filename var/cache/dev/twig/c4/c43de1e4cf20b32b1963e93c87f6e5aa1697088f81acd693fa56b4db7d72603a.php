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

/* @MyTechnosBlog/Back/Includes/pagination.html.twig */
class __TwigTemplate_de345937d3ccfdf0d77f2ef015794f9df4364216bf8cd1a31c28a8dc0118f1f6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MyTechnosBlog/Back/Includes/pagination.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MyTechnosBlog/Back/Includes/pagination.html.twig"));

        // line 1
        if (($this->getAttribute(($context["pagination"] ?? $this->getContext($context, "pagination")), "nbPages", []) > 0)) {
            // line 2
            echo "    <ul class=\"pagination\">
        ";
            // line 3
            if (($this->getAttribute(($context["pagination"] ?? $this->getContext($context, "pagination")), "page", []) > 1)) {
                // line 4
                echo "            <li>
                <a href=\"";
                // line 5
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute(($context["pagination"] ?? $this->getContext($context, "pagination")), "routeName", []), twig_array_merge($this->getAttribute(($context["pagination"] ?? $this->getContext($context, "pagination")), "paramsRoute", []), ["page" => 1])), "html", null, true);
                echo "\">
                    <<
                </a>
            </li>
            <li>
                <a href=\"";
                // line 10
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute(($context["pagination"] ?? $this->getContext($context, "pagination")), "routeName", []), twig_array_merge($this->getAttribute(                // line 11
($context["pagination"] ?? $this->getContext($context, "pagination")), "paramsRoute", []), ["page" => ($this->getAttribute(($context["pagination"] ?? $this->getContext($context, "pagination")), "page", []) - 1)])), "html", null, true);
                echo "\">
                    <
                </a>
            </li>
        ";
            }
            // line 16
            echo "
        ";
            // line 18
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(max(($this->getAttribute(($context["pagination"] ?? $this->getContext($context, "pagination")), "page", []) - 4), 1), min(($this->getAttribute(($context["pagination"] ?? $this->getContext($context, "pagination")), "page", []) + 4), $this->getAttribute(($context["pagination"] ?? $this->getContext($context, "pagination")), "nbPages", []))));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 19
                echo "            <li ";
                if (($context["p"] == $this->getAttribute(($context["pagination"] ?? $this->getContext($context, "pagination")), "page", []))) {
                    echo "class=\"active\"";
                }
                echo ">
                <a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute(($context["pagination"] ?? $this->getContext($context, "pagination")), "routeName", []), twig_array_merge($this->getAttribute(($context["pagination"] ?? $this->getContext($context, "pagination")), "paramsRoute", []), ["page" => $context["p"]])), "html", null, true);
                echo "\">
                    ";
                // line 21
                echo twig_escape_filter($this->env, $context["p"], "html", null, true);
                echo "
                </a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "
        ";
            // line 26
            if (($this->getAttribute(($context["pagination"] ?? $this->getContext($context, "pagination")), "page", []) < $this->getAttribute(($context["pagination"] ?? $this->getContext($context, "pagination")), "nbPages", []))) {
                // line 27
                echo "            <li>
                <a href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute(($context["pagination"] ?? $this->getContext($context, "pagination")), "routeName", []), twig_array_merge($this->getAttribute(                // line 29
($context["pagination"] ?? $this->getContext($context, "pagination")), "paramsRoute", []), ["page" => ($this->getAttribute(($context["pagination"] ?? $this->getContext($context, "pagination")), "page", []) + 1)])), "html", null, true);
                echo "\">
                    >
                </a>
            </li>
            <li>
                <a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute(($context["pagination"] ?? $this->getContext($context, "pagination")), "routeName", []), twig_array_merge($this->getAttribute(                // line 35
($context["pagination"] ?? $this->getContext($context, "pagination")), "paramsRoute", []), ["page" => $this->getAttribute(($context["pagination"] ?? $this->getContext($context, "pagination")), "nbPages", [])])), "html", null, true);
                echo "\">
                    >>
                </a>
            </li>
        ";
            }
            // line 40
            echo "    </ul>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@MyTechnosBlog/Back/Includes/pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 40,  110 => 35,  109 => 34,  101 => 29,  100 => 28,  97 => 27,  95 => 26,  92 => 25,  82 => 21,  78 => 20,  71 => 19,  66 => 18,  63 => 16,  55 => 11,  54 => 10,  46 => 5,  43 => 4,  41 => 3,  38 => 2,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if pagination.nbPages > 0 %}
    <ul class=\"pagination\">
        {% if pagination.page > 1 %}
            <li>
                <a href=\"{{ path(pagination.routeName, pagination.paramsRoute|merge({'page': 1})) }}\">
                    <<
                </a>
            </li>
            <li>
                <a href=\"{{ path(pagination.routeName,
                    pagination.paramsRoute|merge({'page': pagination.page-1})) }}\">
                    <
                </a>
            </li>
        {% endif %}

        {# Affichage de toutes les pages entre p-4 et p+4 sauf si < 1 ou > nbPages #}
        {% for p in range(max(pagination.page-4, 1), min(pagination.page+4, pagination.nbPages)) %}
            <li {% if p == pagination.page %}class=\"active\"{% endif %}>
                <a href=\"{{ path(pagination.routeName, pagination.paramsRoute|merge({'page': p})) }}\">
                    {{ p }}
                </a>
            </li>
        {% endfor %}

        {% if pagination.page < pagination.nbPages %}
            <li>
                <a href=\"{{ path(pagination.routeName,
                    pagination.paramsRoute|merge({'page': pagination.page+1})) }}\">
                    >
                </a>
            </li>
            <li>
                <a href=\"{{ path(pagination.routeName,
                    pagination.paramsRoute|merge({'page': pagination.nbPages})) }}\">
                    >>
                </a>
            </li>
        {% endif %}
    </ul>
{% endif %}", "@MyTechnosBlog/Back/Includes/pagination.html.twig", "C:\\wamp64\\www\\mon-blog-technos\\src\\My\\TechnosBlogBundle\\Resources\\views\\Back\\Includes\\pagination.html.twig");
    }
}
