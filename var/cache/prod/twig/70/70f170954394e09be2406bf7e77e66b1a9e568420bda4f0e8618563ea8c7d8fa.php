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
class __TwigTemplate_28ffe0f82976af1b3e408ac6ff0c7a1a8564ed7a0d7f785bbeec86a099eac27d extends \Twig\Template
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
        // line 1
        if (($this->getAttribute(($context["pagination"] ?? null), "nbPages", []) > 0)) {
            // line 2
            echo "    <ul class=\"pagination\">
        ";
            // line 3
            if (($this->getAttribute(($context["pagination"] ?? null), "page", []) > 1)) {
                // line 4
                echo "            <li>
                <a href=\"";
                // line 5
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute(($context["pagination"] ?? null), "routeName", []), twig_array_merge($this->getAttribute(($context["pagination"] ?? null), "paramsRoute", []), ["page" => 1])), "html", null, true);
                echo "\">
                    <<
                </a>
            </li>
            <li>
                <a href=\"";
                // line 10
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute(($context["pagination"] ?? null), "routeName", []), twig_array_merge($this->getAttribute(                // line 11
($context["pagination"] ?? null), "paramsRoute", []), ["page" => ($this->getAttribute(($context["pagination"] ?? null), "page", []) - 1)])), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable(range(max(($this->getAttribute(($context["pagination"] ?? null), "page", []) - 4), 1), min(($this->getAttribute(($context["pagination"] ?? null), "page", []) + 4), $this->getAttribute(($context["pagination"] ?? null), "nbPages", []))));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 19
                echo "            <li ";
                if (($context["p"] == $this->getAttribute(($context["pagination"] ?? null), "page", []))) {
                    echo "class=\"active\"";
                }
                echo ">
                <a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute(($context["pagination"] ?? null), "routeName", []), twig_array_merge($this->getAttribute(($context["pagination"] ?? null), "paramsRoute", []), ["page" => $context["p"]])), "html", null, true);
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
            if (($this->getAttribute(($context["pagination"] ?? null), "page", []) < $this->getAttribute(($context["pagination"] ?? null), "nbPages", []))) {
                // line 27
                echo "            <li>
                <a href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute(($context["pagination"] ?? null), "routeName", []), twig_array_merge($this->getAttribute(                // line 29
($context["pagination"] ?? null), "paramsRoute", []), ["page" => ($this->getAttribute(($context["pagination"] ?? null), "page", []) + 1)])), "html", null, true);
                echo "\">
                    >
                </a>
            </li>
            <li>
                <a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute(($context["pagination"] ?? null), "routeName", []), twig_array_merge($this->getAttribute(                // line 35
($context["pagination"] ?? null), "paramsRoute", []), ["page" => $this->getAttribute(($context["pagination"] ?? null), "nbPages", [])])), "html", null, true);
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
        return array (  112 => 40,  104 => 35,  103 => 34,  95 => 29,  94 => 28,  91 => 27,  89 => 26,  86 => 25,  76 => 21,  72 => 20,  65 => 19,  60 => 18,  57 => 16,  49 => 11,  48 => 10,  40 => 5,  37 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@MyTechnosBlog/Back/Includes/pagination.html.twig", "C:\\wamp64\\www\\mon-blog-technos\\src\\My\\TechnosBlogBundle\\Resources\\views\\Back\\Includes\\pagination.html.twig");
    }
}
