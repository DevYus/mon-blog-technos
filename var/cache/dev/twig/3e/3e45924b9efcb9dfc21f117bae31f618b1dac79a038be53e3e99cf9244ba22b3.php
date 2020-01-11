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

/* @MyTechnosBlog/Back/Admin/admin.html.twig */
class __TwigTemplate_eb63ab79926bc834fcfbc1fc1f3e499f952b468d34ac860c4d4011cbc237a815 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MyTechnosBlog/Back/Admin/admin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MyTechnosBlog/Back/Admin/admin.html.twig"));

        $this->parent = $this->loadTemplate("@MyTechnosBlog/Back/layout.html.twig", "@MyTechnosBlog/Back/Admin/admin.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "
<!-- Extension du layout au templates fils -->

  <main>

    <section class=\"sectionAdminFirst\">
      <h1>Interface d'administration</h1>
      <p><em>Bienvenue Admin</em></p>

      <div class=\"optionsHomeContainer\">

      <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_add_article");
        echo "\">
          <div class=\"optionsHome\">
           <figure>
             <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./img/add-article.png"), "html", null, true);
        echo "\" alt=\"\">
             <figcaption>
               <span>Ajouter un article</span>
             </figcaption>
           </figure>
          </div>
        </a>

        <a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_all_article", ["page" => 1]);
        echo "\">
          <div class=\"optionsHome\">
            <figure>
              <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./img/list.png"), "html", null, true);
        echo "\" alt=\"\">
              <figcaption>
                <span> Voir tout les articles</span>
              </figcaption>
            </figure>
          </div>
        </a>

        <a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_all_users", ["page" => 1]);
        echo "\">
          <div class=\"optionsHome\">
            <figure>
              <img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./img/users.png"), "html", null, true);
        echo "\" alt=\"\">
              <figcaption>
                <span> Mes utilisateurs</span>
              </figcaption>
            </figure>
          </div>
        </a>

        <a href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_all_comments", ["page" => 1]);
        echo "\">
          <div class=\"optionsHome\">
            <figure>
              <img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./img/comment.png"), "html", null, true);
        echo "\" alt=\"\">
              <figcaption>
                <span>Derniers commentaires</span>
              </figcaption>
            </figure>
          </div>
        </a>

        <a href=\"";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_add_administrator", ["page" => 1]);
        echo "\">
          <div class=\"optionsHome\">
              <figure>
                <img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./img/admin.png"), "html", null, true);
        echo "\" alt=\"\">
                <figcaption>
                  <span>Ajouter un administrateur</span>
                </figcaption>
              </figure>
          </div>
        </a>

        <a href=\"";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
        echo "\">
          <div class=\"optionsHome\">
            <figure>
              <img src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./img/logout.png"), "html", null, true);
        echo "\" alt=\"\">
              <figcaption>
                <span>Deconnexion</span>
              </figcaption>
            </figure>
          </div>
        </a>

      </div>

    </section>

  </main>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@MyTechnosBlog/Back/Admin/admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 75,  158 => 72,  147 => 64,  141 => 61,  130 => 53,  124 => 50,  113 => 42,  107 => 39,  96 => 31,  90 => 28,  79 => 20,  73 => 17,  60 => 6,  51 => 5,  29 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("
{% extends \"@MyTechnosBlog/Back/layout.html.twig\" %}


{% block main %}

<!-- Extension du layout au templates fils -->

  <main>

    <section class=\"sectionAdminFirst\">
      <h1>Interface d'administration</h1>
      <p><em>Bienvenue Admin</em></p>

      <div class=\"optionsHomeContainer\">

      <a href=\"{{ path('admin_add_article') }}\">
          <div class=\"optionsHome\">
           <figure>
             <img src=\"{{ asset('./img/add-article.png') }}\" alt=\"\">
             <figcaption>
               <span>Ajouter un article</span>
             </figcaption>
           </figure>
          </div>
        </a>

        <a href=\"{{ path('admin_all_article', { 'page' : 1 }) }}\">
          <div class=\"optionsHome\">
            <figure>
              <img src=\"{{ asset('./img/list.png') }}\" alt=\"\">
              <figcaption>
                <span> Voir tout les articles</span>
              </figcaption>
            </figure>
          </div>
        </a>

        <a href=\"{{ path('admin_all_users', { 'page' : 1 }) }}\">
          <div class=\"optionsHome\">
            <figure>
              <img src=\"{{ asset('./img/users.png') }}\" alt=\"\">
              <figcaption>
                <span> Mes utilisateurs</span>
              </figcaption>
            </figure>
          </div>
        </a>

        <a href=\"{{ path('admin_all_comments', { 'page' : 1 }) }}\">
          <div class=\"optionsHome\">
            <figure>
              <img src=\"{{ asset('./img/comment.png') }}\" alt=\"\">
              <figcaption>
                <span>Derniers commentaires</span>
              </figcaption>
            </figure>
          </div>
        </a>

        <a href=\"{{ path('admin_add_administrator', { 'page' : 1 }) }}\">
          <div class=\"optionsHome\">
              <figure>
                <img src=\"{{ asset('./img/admin.png') }}\" alt=\"\">
                <figcaption>
                  <span>Ajouter un administrateur</span>
                </figcaption>
              </figure>
          </div>
        </a>

        <a href=\"{{ path('logout') }}\">
          <div class=\"optionsHome\">
            <figure>
              <img src=\"{{ asset('./img/logout.png') }}\" alt=\"\">
              <figcaption>
                <span>Deconnexion</span>
              </figcaption>
            </figure>
          </div>
        </a>

      </div>

    </section>

  </main>



{% endblock %}



", "@MyTechnosBlog/Back/Admin/admin.html.twig", "C:\\wamp64\\www\\mon-blog-technos\\src\\My\\TechnosBlogBundle\\Resources\\views\\Back\\Admin\\admin.html.twig");
    }
}
