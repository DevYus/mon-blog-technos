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

/* @MyTechnosBlog/Front/Security/login.html.twig */
class __TwigTemplate_b53038ada0ba83b9baef23da39e9da78e35bd6db0592f5e9a557bf4548e011bc extends \Twig\Template
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
        return "@MyTechnosBlog/Front/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@MyTechnosBlog/Front/layout.html.twig", "@MyTechnosBlog/Front/Security/login.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? null), "messageKey", []), $this->getAttribute(($context["error"] ?? null), "messageData", []), "security", "fr"), "html", null, true);
            echo "
              </div>
          ";
        }
        // line 20
        echo "
          ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? null), "flashes", []));
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("registration");
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
        return array (  128 => 49,  117 => 41,  105 => 32,  99 => 29,  96 => 28,  90 => 27,  81 => 24,  76 => 23,  71 => 22,  67 => 21,  64 => 20,  58 => 17,  55 => 16,  53 => 15,  42 => 6,  39 => 5,  29 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@MyTechnosBlog/Front/Security/login.html.twig", "C:\\wamp64\\www\\mon-blog-technos\\src\\My\\TechnosBlogBundle\\Resources\\views\\Front\\Security\\login.html.twig");
    }
}
