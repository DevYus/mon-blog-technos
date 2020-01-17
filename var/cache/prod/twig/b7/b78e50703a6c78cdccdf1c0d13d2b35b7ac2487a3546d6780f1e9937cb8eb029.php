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

/* @MyTechnosBlog/Front/Security/login.html.twig */
class __TwigTemplate_f52ff19f3b3a62019a1bf33c1c12e67f57a7eef0478def18fef3f19a6dd25904 extends \Twig\Template
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
        return "@MyTechnosBlog/Front/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("@MyTechnosBlog/Front/layout.html.twig", "@MyTechnosBlog/Front/Security/login.html.twig", 2);
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

      <section class=\"containerLoginForm\">

          <h1>Connexion</h1>

          ";
        // line 15
        if (($context["error"] ?? null)) {
            // line 16
            echo "              <div class=\"alert alert-danger\">
                  ";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 17), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 17), "security", "fr"), "html", null, true);
            echo "
              </div>
          ";
        }
        // line 20
        echo "
          ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 21));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 22
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 23
                echo "                  <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo "\">
                      ";
                // line 24
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                  </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
          <form method=\"post\" action=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login_check");
        echo "\">
              <label>Login <span class=\"star\">*</span></label>
              <p class=\"clear\"></p>
              <input type=\"text\" name=\"_username\" id=\"username\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\">

              <p class=\"clear\"></p>
              <br>

              <label>Password <span class=\"star\">*</span></label>
              <p class=\"clear\"></p>
              <input type=\"password\" name=\"_password\" id=\"password\">

              <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">

              <a href=\"http://localhost/mon-blog-technos/web/app_dev.php/forgot\" class=\"lostPassword\">Vous avez perdu votre mot de passe ?</a>

              <input type=\"submit\" value=\"Connexion\">

          </form>

          <p>Vous n'avez pas encore de compte ? <a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("registration");
        echo "\">Cliquez ici pour vous inscrire !</a></p>

      </section>

  </main>


";
    }

    public function getTemplateName()
    {
        return "@MyTechnosBlog/Front/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 49,  125 => 41,  113 => 32,  107 => 29,  104 => 28,  98 => 27,  89 => 24,  84 => 23,  79 => 22,  75 => 21,  72 => 20,  66 => 17,  63 => 16,  61 => 15,  50 => 6,  46 => 5,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MyTechnosBlog/Front/Security/login.html.twig", "C:\\wamp64\\www\\mon-blog-technos\\src\\My\\TechnosBlogBundle\\Resources\\views\\Front\\Security\\login.html.twig");
    }
}
