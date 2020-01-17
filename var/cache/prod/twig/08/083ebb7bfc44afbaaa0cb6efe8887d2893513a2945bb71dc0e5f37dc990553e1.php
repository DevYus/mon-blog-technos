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

/* @MyTechnosBlog/Back/DeleteUser/deleteUser.html.twig */
class __TwigTemplate_db76335c6481054427e43ed8b748974e3f25ab118965a8f5d315a35e2be0b7c8 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@MyTechnosBlog/Back/layout.html.twig", "@MyTechnosBlog/Back/DeleteUser/deleteUser.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
  <main>

    <section class=\"sectionArticle\">
      <h1>Supprimer un utilisateur</h1>



            ";
        // line 14
        if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 14) == "ouldamri.youssef@gmail.com")) {
            // line 15
            echo "
                <span class=\"deleteText\">

                    Attention, vous ne pouvez pas supprimer ce compte.
                     <div class=\"deleteContainer\">
                        <a href=\"";
            // line 20
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_all_users", ["page" => 1]);
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 30), "html", null, true);
            echo " inscrit le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "date", [], "any", false, false, false, 30), "d M Y"), "html", null, true);
            echo " utilisant le pseudo ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "pseudo", [], "any", false, false, false, 30), "html", null, true);
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
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_all_users", ["page" => 1]);
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
        return array (  120 => 44,  112 => 39,  108 => 38,  104 => 37,  100 => 36,  96 => 35,  84 => 30,  78 => 26,  69 => 20,  62 => 15,  60 => 14,  50 => 6,  46 => 5,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MyTechnosBlog/Back/DeleteUser/deleteUser.html.twig", "C:\\wamp64\\www\\mon-blog-technos\\src\\My\\TechnosBlogBundle\\Resources\\views\\Back\\DeleteUser\\deleteUser.html.twig");
    }
}
