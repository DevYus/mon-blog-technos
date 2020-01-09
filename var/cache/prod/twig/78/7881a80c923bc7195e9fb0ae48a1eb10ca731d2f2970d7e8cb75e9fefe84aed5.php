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

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_cd6568a68b2b2d72c40a8c04e357710ba25757dfe406eaa6327e20818042ca2c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.', 1, $this->getSourceContext());
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_widget_simple' => [$this, 'block_form_widget_simple'],
                'button_widget' => [$this, 'block_button_widget'],
                'money_widget' => [$this, 'block_money_widget'],
                'checkbox_widget' => [$this, 'block_checkbox_widget'],
                'radio_widget' => [$this, 'block_radio_widget'],
                'form_label' => [$this, 'block_form_label'],
                'choice_label' => [$this, 'block_choice_label'],
                'checkbox_label' => [$this, 'block_checkbox_label'],
                'radio_label' => [$this, 'block_radio_label'],
                'checkbox_radio_label' => [$this, 'block_checkbox_radio_label'],
                'form_row' => [$this, 'block_form_row'],
                'button_row' => [$this, 'block_button_row'],
                'choice_row' => [$this, 'block_choice_row'],
                'date_row' => [$this, 'block_date_row'],
                'time_row' => [$this, 'block_time_row'],
                'datetime_row' => [$this, 'block_datetime_row'],
                'checkbox_row' => [$this, 'block_checkbox_row'],
                'radio_row' => [$this, 'block_radio_row'],
                'form_errors' => [$this, 'block_form_errors'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('button_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 45
        echo "
";
        // line 46
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 56
        echo "
";
        // line 58
        echo "
";
        // line 59
        $this->displayBlock('form_label', $context, $blocks);
        // line 63
        echo "
";
        // line 64
        $this->displayBlock('choice_label', $context, $blocks);
        // line 69
        echo "
";
        // line 70
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 75
        echo "
";
        // line 76
        $this->displayBlock('radio_label', $context, $blocks);
        // line 81
        echo "
";
        // line 82
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 106
        echo "
";
        // line 108
        echo "
";
        // line 109
        $this->displayBlock('form_row', $context, $blocks);
        // line 116
        echo "
";
        // line 117
        $this->displayBlock('button_row', $context, $blocks);
        // line 122
        echo "
";
        // line 123
        $this->displayBlock('choice_row', $context, $blocks);
        // line 127
        echo "
";
        // line 128
        $this->displayBlock('date_row', $context, $blocks);
        // line 132
        echo "
";
        // line 133
        $this->displayBlock('time_row', $context, $blocks);
        // line 137
        echo "
";
        // line 138
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 142
        echo "
";
        // line 143
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 149
        echo "
";
        // line 150
        $this->displayBlock('radio_row', $context, $blocks);
        // line 156
        echo "
";
        // line 158
        echo "
";
        // line 159
        $this->displayBlock('form_errors', $context, $blocks);
    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = [])
    {
        // line 6
        if (( !(isset($context["type"]) || array_key_exists("type", $context)) || !twig_in_filter(($context["type"] ?? null), [0 => "file", 1 => "hidden"]))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "")) : ("")) . " form-control"))]);
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
    }

    // line 12
    public function block_button_widget($context, array $blocks = [])
    {
        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", []), "btn-default")) : ("btn-default")) . " btn"))]);
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
    }

    // line 17
    public function block_money_widget($context, array $blocks = [])
    {
        // line 18
        $context["prepend"] =  !(is_string($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["money_pattern"] ?? null)) && is_string($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = "{{") && ('' === $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 || 0 === strpos($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144)));
        // line 19
        echo "    ";
        $context["append"] =  !(is_string($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["money_pattern"] ?? null)) && is_string($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = "}}") && ('' === $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 === substr($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b, -strlen($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002))));
        // line 20
        echo "    ";
        if ((($context["prepend"] ?? null) || ($context["append"] ?? null))) {
            // line 21
            echo "        <div class=\"input-group\">
            ";
            // line 22
            if (($context["prepend"] ?? null)) {
                // line 23
                echo "                <span class=\"input-group-addon\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, ($context["money_pattern"] ?? null));
                echo "</span>
            ";
            }
            // line 25
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 26
            if (($context["append"] ?? null)) {
                // line 27
                echo "                <span class=\"input-group-addon\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->encodeCurrency($this->env, ($context["money_pattern"] ?? null));
                echo "</span>
            ";
            }
            // line 29
            echo "        </div>
    ";
        } else {
            // line 31
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
    }

    // line 35
    public function block_checkbox_widget($context, array $blocks = [])
    {
        // line 36
        $context["parent_label_class"] = (((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context))) ? (_twig_default_filter(($context["parent_label_class"] ?? null), (($this->getAttribute(($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", []), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", []), "")) : (""))));
        // line 37
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? null))) {
            // line 38
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)]);
        } else {
            // line 40
            echo "<div class=\"checkbox\">";
            // line 41
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)]);
            // line 42
            echo "</div>";
        }
    }

    // line 46
    public function block_radio_widget($context, array $blocks = [])
    {
        // line 47
        $context["parent_label_class"] = (((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context))) ? (_twig_default_filter(($context["parent_label_class"] ?? null), (($this->getAttribute(($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", []), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", []), "")) : (""))));
        // line 48
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? null))) {
            // line 49
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("radio_widget", $context, $blocks)]);
        } else {
            // line 51
            echo "<div class=\"radio\">";
            // line 52
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', ["widget" => $this->renderParentBlock("radio_widget", $context, $blocks)]);
            // line 53
            echo "</div>";
        }
    }

    // line 59
    public function block_form_label($context, array $blocks = [])
    {
        // line 60
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", []), "")) : ("")) . " control-label"))]);
        // line 61
        $this->displayParentBlock("form_label", $context, $blocks);
    }

    // line 64
    public function block_choice_label($context, array $blocks = [])
    {
        // line 66
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", []), "")) : ("")), ["checkbox-inline" => "", "radio-inline" => ""]))]);
        // line 67
        $this->displayBlock("form_label", $context, $blocks);
    }

    // line 70
    public function block_checkbox_label($context, array $blocks = [])
    {
        // line 71
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["for" => ($context["id"] ?? null)]);
        // line 73
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 76
    public function block_radio_label($context, array $blocks = [])
    {
        // line 77
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["for" => ($context["id"] ?? null)]);
        // line 79
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 82
    public function block_checkbox_radio_label($context, array $blocks = [])
    {
        // line 84
        if ((isset($context["widget"]) || array_key_exists("widget", $context))) {
            // line 85
            if (($context["required"] ?? null)) {
                // line 86
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", []), "")) : ("")) . " required"))]);
            }
            // line 88
            if ((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context))) {
                // line 89
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), ["class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", []), "")) : ("")) . " ") . ($context["parent_label_class"] ?? null)))]);
            }
            // line 91
            if (( !(($context["label"] ?? null) === false) && twig_test_empty(($context["label"] ?? null)))) {
                // line 92
                if ( !twig_test_empty(($context["label_format"] ?? null))) {
                    // line 93
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? null), ["%name%" =>                     // line 94
($context["name"] ?? null), "%id%" =>                     // line 95
($context["id"] ?? null)]);
                } else {
                    // line 98
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
                }
            }
            // line 101
            echo "<label";
            $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ["attr" => ($context["label_attr"] ?? null)];
            if (!twig_test_iterable($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a hash.', 101, $this->getSourceContext());
            }
            $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_to_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4);
            $context['_parent'] = $context;
            $context = $this->env->mergeGlobals(array_merge($context, $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4));
            $this->displayBlock("attributes", $context, $blocks);
            $context = $context['_parent'];
            echo ">";
            // line 102
            echo ($context["widget"] ?? null);
            echo " ";
            (( !(($context["label"] ?? null) === false)) ? (print (twig_escape_filter($this->env, (((($context["translation_domain"] ?? null) === false)) ? (($context["label"] ?? null)) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? null), [], ($context["translation_domain"] ?? null)))), "html", null, true))) : (print ("")));
            // line 103
            echo "</label>";
        }
    }

    // line 109
    public function block_form_row($context, array $blocks = [])
    {
        // line 110
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? null) || (((isset($context["force_error"]) || array_key_exists("force_error", $context))) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            echo " has-error";
        }
        echo "\">";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        echo " ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo " ";
        // line 113
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo " ";
        // line 114
        echo "</div> ";
    }

    // line 117
    public function block_button_row($context, array $blocks = [])
    {
        // line 118
        echo "<div class=\"form-group\">";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 120
        echo "</div>";
    }

    // line 123
    public function block_choice_row($context, array $blocks = [])
    {
        // line 124
        $context["force_error"] = true;
        // line 125
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 128
    public function block_date_row($context, array $blocks = [])
    {
        // line 129
        $context["force_error"] = true;
        // line 130
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 133
    public function block_time_row($context, array $blocks = [])
    {
        // line 134
        $context["force_error"] = true;
        // line 135
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 138
    public function block_datetime_row($context, array $blocks = [])
    {
        // line 139
        $context["force_error"] = true;
        // line 140
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 143
    public function block_checkbox_row($context, array $blocks = [])
    {
        // line 144
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? null)) {
            echo " has-error";
        }
        echo "\">";
        // line 145
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 146
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 147
        echo "</div>";
    }

    // line 150
    public function block_radio_row($context, array $blocks = [])
    {
        // line 151
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? null)) {
            echo " has-error";
        }
        echo "\">";
        // line 152
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 153
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 154
        echo "</div>";
    }

    // line 159
    public function block_form_errors($context, array $blocks = [])
    {
        // line 160
        if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
            // line 161
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? null))) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 162
            echo "    <ul class=\"list-unstyled\">";
            // line 163
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 164
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", []), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 166
            echo "</ul>
    ";
            // line 167
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? null))) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  486 => 167,  483 => 166,  475 => 164,  471 => 163,  469 => 162,  463 => 161,  461 => 160,  458 => 159,  454 => 154,  452 => 153,  450 => 152,  444 => 151,  441 => 150,  437 => 147,  435 => 146,  433 => 145,  427 => 144,  424 => 143,  420 => 140,  418 => 139,  415 => 138,  411 => 135,  409 => 134,  406 => 133,  402 => 130,  400 => 129,  397 => 128,  393 => 125,  391 => 124,  388 => 123,  384 => 120,  382 => 119,  380 => 118,  377 => 117,  373 => 114,  370 => 113,  367 => 112,  364 => 111,  358 => 110,  355 => 109,  350 => 103,  346 => 102,  334 => 101,  330 => 98,  327 => 95,  326 => 94,  325 => 93,  323 => 92,  321 => 91,  318 => 89,  316 => 88,  313 => 86,  311 => 85,  309 => 84,  306 => 82,  302 => 79,  300 => 77,  297 => 76,  293 => 73,  291 => 71,  288 => 70,  284 => 67,  282 => 66,  279 => 64,  275 => 61,  273 => 60,  270 => 59,  265 => 53,  263 => 52,  261 => 51,  258 => 49,  256 => 48,  254 => 47,  251 => 46,  246 => 42,  244 => 41,  242 => 40,  239 => 38,  237 => 37,  235 => 36,  232 => 35,  227 => 31,  223 => 29,  217 => 27,  215 => 26,  213 => 25,  207 => 23,  205 => 22,  202 => 21,  199 => 20,  196 => 19,  194 => 18,  191 => 17,  187 => 14,  185 => 13,  182 => 12,  178 => 9,  175 => 7,  173 => 6,  170 => 5,  166 => 159,  163 => 158,  160 => 156,  158 => 150,  155 => 149,  153 => 143,  150 => 142,  148 => 138,  145 => 137,  143 => 133,  140 => 132,  138 => 128,  135 => 127,  133 => 123,  130 => 122,  128 => 117,  125 => 116,  123 => 109,  120 => 108,  117 => 106,  115 => 82,  112 => 81,  110 => 76,  107 => 75,  105 => 70,  102 => 69,  100 => 64,  97 => 63,  95 => 59,  92 => 58,  89 => 56,  87 => 46,  84 => 45,  82 => 35,  79 => 34,  77 => 17,  74 => 16,  72 => 12,  69 => 11,  67 => 5,  64 => 4,  61 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "bootstrap_3_layout.html.twig", "C:\\wamp64\\www\\mon-blog-technos\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_3_layout.html.twig");
    }
}
