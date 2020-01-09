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

/* @MyTechnosBlog/Back/DeleteArticle/deleteArticle.html.twig */
class __TwigTemplate_3aad29d391dc080acfd30df883e74fd07fff0d640e1f3d1505dc964fb398453f extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@MyTechnosBlog/Back/layout.html.twig", "@MyTechnosBlog/Back/DeleteArticle/deleteArticle.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        // line 6
        echo "
    <style>



    </style>

  <main>

    <section class=\"sectionArticle\">
      <h1>Supprimer un article</h1>

        <span class=\"deleteText\">
            Attention, êtes vous certains de vouloir supprimer cet article ? <br>
            Si vous confirmez, l'article sera définitivement perdu.<br><br>
            Titre de l'article ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? null), "title", []), "html", null, true);
        echo " par ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["article"] ?? null), "author", []), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["article"] ?? null), "date", []), "d M Y"), "html", null, true);
        echo ".
        </span>

        <div class=\"deleteContainer\">

            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
              ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
              ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
            <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_all_article", ["page" => 1]);
        echo "\" class=\"returnBtn\">Retourner à l'administration</a>
            ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

        </div>


    </section>

  </main>



";
    }

    public function getTemplateName()
    {
        return "@MyTechnosBlog/Back/DeleteArticle/deleteArticle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 30,  83 => 29,  79 => 28,  75 => 27,  71 => 26,  59 => 21,  42 => 6,  39 => 5,  29 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@MyTechnosBlog/Back/DeleteArticle/deleteArticle.html.twig", "C:\\wamp64\\www\\mon-blog-technos\\src\\My\\TechnosBlogBundle\\Resources\\views\\Back\\DeleteArticle\\deleteArticle.html.twig");
    }
}
