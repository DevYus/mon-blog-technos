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

/* @MyTechnosBlog/Back/DeleteUser/deleteUser.html.twig */
class __TwigTemplate_174d4dfae47efd7c70ce1aed0f2868c786718c6ad34d6a6dc9578464b10942fc extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@MyTechnosBlog/Back/layout.html.twig", "@MyTechnosBlog/Back/DeleteUser/deleteUser.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        // line 6
        echo "
  <main>

    <section class=\"sectionArticle\">
      <h1>Supprimer un utilisateur</h1>



            ";
        // line 14
        if (($this->getAttribute(($context["user"] ?? null), "email", []) == "ouldamri.youssef@gmail.com")) {
            // line 15
            echo "
                <span class=\"deleteText\">

                    Attention, vous ne pouvez pas supprimer ce compte.
                     <div class=\"deleteContainer\">
                        <a href=\"";
            // line 20
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_all_users", ["page" => 1]);
            echo "\" class=\"returnBtn\">Retourner à l'administration</a>
                     </div>

                </span>

            ";
        } else {
            // line 26
            echo "
                <span class=\"deleteText\">
                    Attention, êtes vous certains de vouloir supprimer cet utilisateur ? <br>
                    Si vous confirmez, l'utilisateur sera définitivement supprimé de votre base de données.<br><br>
                    Utilisateur : ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "username", []), "html", null, true);
            echo " inscrit le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["user"] ?? null), "date", []), "d M Y"), "html", null, true);
            echo " utilisant le pseudo ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? null), "pseudo", []), "html", null, true);
            echo " .
                </span>

                <div class=\"deleteContainer\">

                    ";
            // line 35
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            echo "
                    ";
            // line 36
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
            echo "
                    ";
            // line 37
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
            echo "
                    <a href=\"";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_all_users", ["page" => 1]);
            echo "\" class=\"returnBtn\">Retourner à l'administration</a>
                    ";
            // line 39
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
            echo "

                </div>

            ";
        }
        // line 44
        echo "

        </span>




    </section>

  </main>



";
    }

    public function getTemplateName()
    {
        return "@MyTechnosBlog/Back/DeleteUser/deleteUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 44,  104 => 39,  100 => 38,  96 => 37,  92 => 36,  88 => 35,  76 => 30,  70 => 26,  61 => 20,  54 => 15,  52 => 14,  42 => 6,  39 => 5,  29 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@MyTechnosBlog/Back/DeleteUser/deleteUser.html.twig", "C:\\wamp64\\www\\mon-blog-technos\\src\\My\\TechnosBlogBundle\\Resources\\views\\Back\\DeleteUser\\deleteUser.html.twig");
    }
}
