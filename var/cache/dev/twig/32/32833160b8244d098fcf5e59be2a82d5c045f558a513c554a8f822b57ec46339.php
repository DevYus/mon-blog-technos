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

/* @MyTechnosBlog/Back/Admin\admin.html.twig */
class __TwigTemplate_fc8df0f9edc9976866dada8ea5aab42894b78843c3163f20c714aa58ef7cb1fa extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MyTechnosBlog/Back/Admin\\admin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@MyTechnosBlog/Back/Admin\\admin.html.twig"));

        $this->parent = $this->loadTemplate("@MyTechnosBlog/Back/layout.html.twig", "@MyTechnosBlog/Back/Admin\\admin.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "
<!-- Extension du layout au templates fils -->

  <main>

    <section class=\"sectionAdminFirst\">
      <h1>Interface d'administration</h1>
      <p><em>Bienvenue ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13), "username", [], "any", false, false, false, 13), "html", null, true);
        echo "</em></p>

      <div class=\"optionsHomeContainer\">

      <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_add_article");
        echo "\">
          <div class=\"optionsHome\">
           <figure>
             <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./img/add-article.png"), "html", null, true);
        echo "\" alt=\"\">
             <figcaption>
               <span>Ajouter un article</span>
             </figcaption>
           </figure>
          </div>
        </a>

        <a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_all_article", ["page" => 1]);
        echo "\">
          <div class=\"optionsHome\">
            <figure>
              <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./img/list.png"), "html", null, true);
        echo "\" alt=\"\">
              <figcaption>
                <span> Voir tout les articles</span>
              </figcaption>
            </figure>
          </div>
        </a>

        <a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_all_users", ["page" => 1]);
        echo "\">
          <div class=\"optionsHome\">
            <figure>
              <img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./img/users.png"), "html", null, true);
        echo "\" alt=\"\">
              <figcaption>
                <span> Mes utilisateurs</span>
              </figcaption>
            </figure>
          </div>
        </a>

        <a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_all_comments", ["page" => 1]);
        echo "\">
          <div class=\"optionsHome\">
            <figure>
              <img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./img/comment.png"), "html", null, true);
        echo "\" alt=\"\">
              <figcaption>
                <span>Derniers commentaires</span>
              </figcaption>
            </figure>
          </div>
        </a>

        <a href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_add_administrator");
        echo "\">
          <div class=\"optionsHome\">
              <figure>
                <img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./img/admin.png"), "html", null, true);
        echo "\" alt=\"\">
                <figcaption>
                  <span>Ajouter un administrateur</span>
                </figcaption>
              </figure>
          </div>
        </a>

        <a href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        echo "\">
          <div class=\"optionsHome\">
            <figure>
              <img src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./img/logout.png"), "html", null, true);
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
        return "@MyTechnosBlog/Back/Admin\\admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 75,  169 => 72,  158 => 64,  152 => 61,  141 => 53,  135 => 50,  124 => 42,  118 => 39,  107 => 31,  101 => 28,  90 => 20,  84 => 17,  77 => 13,  68 => 6,  58 => 5,  35 => 2,);
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
      <p><em>Bienvenue {{ app.user.username }}</em></p>

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

        <a href=\"{{ path('admin_add_administrator') }}\">
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



", "@MyTechnosBlog/Back/Admin\\admin.html.twig", "C:\\wamp64\\www\\mon-blog-technos\\src\\My\\TechnosBlogBundle\\Resources\\views\\Back\\Admin\\admin.html.twig");
    }
}
