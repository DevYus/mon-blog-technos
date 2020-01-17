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

/* @MyTechnosBlog/Back/Includes/pagination.html.twig */
class __TwigTemplate_ed9b9e2c89181b49429ed10ccdcf7b3cb58eaef1bf0f67bd4fe32dd9f8946560 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if ((twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "nbPages", [], "any", false, false, false, 1) > 0)) {
            // line 2
            echo "    <ul class=\"pagination\">
        ";
            // line 3
            if ((twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page", [], "any", false, false, false, 3) > 1)) {
                // line 4
                echo "            <li>
                <a href=\"";
                // line 5
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "routeName", [], "any", false, false, false, 5), twig_array_merge(twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "paramsRoute", [], "any", false, false, false, 5), ["page" => 1])), "html", null, true);
                echo "\">
                    <<
                </a>
            </li>
            <li>
                <a href=\"";
                // line 10
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "routeName", [], "any", false, false, false, 10), twig_array_merge(twig_get_attribute($this->env, $this->source,                 // line 11
($context["pagination"] ?? null), "paramsRoute", [], "any", false, false, false, 11), ["page" => (twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page", [], "any", false, false, false, 11) - 1)])), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable(range(max((twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page", [], "any", false, false, false, 18) - 4), 1), min((twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page", [], "any", false, false, false, 18) + 4), twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "nbPages", [], "any", false, false, false, 18))));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 19
                echo "            <li ";
                if (($context["p"] == twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page", [], "any", false, false, false, 19))) {
                    echo "class=\"active\"";
                }
                echo ">
                <a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "routeName", [], "any", false, false, false, 20), twig_array_merge(twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "paramsRoute", [], "any", false, false, false, 20), ["page" => $context["p"]])), "html", null, true);
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
            if ((twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page", [], "any", false, false, false, 26) < twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "nbPages", [], "any", false, false, false, 26))) {
                // line 27
                echo "            <li>
                <a href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "routeName", [], "any", false, false, false, 28), twig_array_merge(twig_get_attribute($this->env, $this->source,                 // line 29
($context["pagination"] ?? null), "paramsRoute", [], "any", false, false, false, 29), ["page" => (twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "page", [], "any", false, false, false, 29) + 1)])), "html", null, true);
                echo "\">
                    >
                </a>
            </li>
            <li>
                <a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "routeName", [], "any", false, false, false, 34), twig_array_merge(twig_get_attribute($this->env, $this->source,                 // line 35
($context["pagination"] ?? null), "paramsRoute", [], "any", false, false, false, 35), ["page" => twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "nbPages", [], "any", false, false, false, 35)])), "html", null, true);
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
        return array (  119 => 40,  111 => 35,  110 => 34,  102 => 29,  101 => 28,  98 => 27,  96 => 26,  93 => 25,  83 => 21,  79 => 20,  72 => 19,  67 => 18,  64 => 16,  56 => 11,  55 => 10,  47 => 5,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MyTechnosBlog/Back/Includes/pagination.html.twig", "C:\\wamp64\\www\\mon-blog-technos\\src\\My\\TechnosBlogBundle\\Resources\\views\\Back\\Includes\\pagination.html.twig");
    }
}
