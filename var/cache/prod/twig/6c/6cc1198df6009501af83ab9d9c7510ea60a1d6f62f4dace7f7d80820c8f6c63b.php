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

/* @MyTechnosBlog/Back/Admin/admin.html.twig */
class __TwigTemplate_d95f565a1813f35f61aab9b8024b4e99fecbc025458fe367bbfc177f469fbd49 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("@MyTechnosBlog/Back/layout.html.twig", "@MyTechnosBlog/Back/Admin/admin.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_add_administrator", ["page" => 1]);
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
        return array (  154 => 75,  148 => 72,  137 => 64,  131 => 61,  120 => 53,  114 => 50,  103 => 42,  97 => 39,  86 => 31,  80 => 28,  69 => 20,  63 => 17,  50 => 6,  46 => 5,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MyTechnosBlog/Back/Admin/admin.html.twig", "C:\\wamp64\\www\\mon-blog-technos\\src\\My\\TechnosBlogBundle\\Resources\\views\\Back\\Admin\\admin.html.twig");
    }
}
