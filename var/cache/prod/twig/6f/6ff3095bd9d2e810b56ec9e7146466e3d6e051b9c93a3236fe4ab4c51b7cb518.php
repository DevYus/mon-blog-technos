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
class __TwigTemplate_a051a79b665925296475d41cceef4b11aec82bbc8410d9ed5d584d3b9c29b642 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@MyTechnosBlog/Back/layout.html.twig", "@MyTechnosBlog/Back/Admin/admin.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
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
        return array (  146 => 75,  140 => 72,  129 => 64,  123 => 61,  112 => 53,  106 => 50,  95 => 42,  89 => 39,  78 => 31,  72 => 28,  61 => 20,  55 => 17,  42 => 6,  39 => 5,  29 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@MyTechnosBlog/Back/Admin/admin.html.twig", "C:\\wamp64\\www\\mon-blog-technos\\src\\My\\TechnosBlogBundle\\Resources\\views\\Back\\Admin\\admin.html.twig");
    }
}
