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

/* @MyTechnosBlog/Front/Includes/socialNetwork.html.twig */
class __TwigTemplate_7e9f5205470e30d5a199c857631dd14de4d777c7a967c706e0007919ee82ac35 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MyTechnosBlog/Front/Includes/socialNetwork.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MyTechnosBlog/Front/Includes/socialNetwork.html.twig"));

        // line 1
        echo "<aside class=\"asidebarSocialNetwork\">
    <h2>Suivez-nous</h2>
      <div>
          <a href=\"https://www.facebook.com/\">
            <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./img/facebook.png"), "html", null, true);
        echo "\" alt=\"facebook\">
          </a>
      </div>
      <div>
          <a href=\"https://twitter.com/\">
            <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./img/twitter.png"), "html", null, true);
        echo "\" alt=\"twitter\">
          </a>
      </div>
      <div>
          <a href=\"https://aboutme.google.com/u/0/?referer=gplus\">
            <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./img/google-plus.png"), "html", null, true);
        echo "\" alt=\"google\">
          </a>
      </div>
</aside>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@MyTechnosBlog/Front/Includes/socialNetwork.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 15,  57 => 10,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<aside class=\"asidebarSocialNetwork\">
    <h2>Suivez-nous</h2>
      <div>
          <a href=\"https://www.facebook.com/\">
            <img src=\"{{ asset('./img/facebook.png') }}\" alt=\"facebook\">
          </a>
      </div>
      <div>
          <a href=\"https://twitter.com/\">
            <img src=\"{{ asset('./img/twitter.png') }}\" alt=\"twitter\">
          </a>
      </div>
      <div>
          <a href=\"https://aboutme.google.com/u/0/?referer=gplus\">
            <img src=\"{{ asset('./img/google-plus.png') }}\" alt=\"google\">
          </a>
      </div>
</aside>", "@MyTechnosBlog/Front/Includes/socialNetwork.html.twig", "C:\\wamp64\\www\\mon-blog-technos\\src\\My\\TechnosBlogBundle\\Resources\\views\\Front\\Includes\\socialNetwork.html.twig");
    }
}
