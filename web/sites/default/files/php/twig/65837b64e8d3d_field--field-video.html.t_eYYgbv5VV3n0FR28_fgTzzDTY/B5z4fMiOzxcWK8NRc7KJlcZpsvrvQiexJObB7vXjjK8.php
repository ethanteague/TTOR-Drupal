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

/* themes/custom/ttor/templates/field/field--field-video.html.twig */
class __TwigTemplate_4b2ab9c4d009362b42f3f8d8f2e2e5ff extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div
      class=\"videos-wrapper\">
      ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_compile_0 = ($context["element"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#items"] ?? null) : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 4
            echo "        ";
            $context["last_arg"] = twig_last($this->env, twig_split_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 4), "field_media_oembed_video", [], "any", false, false, true, 4), "value", [], "any", false, false, true, 4), 4, $this->source), "/"));
            // line 5
            echo "
        ";
            // line 6
            if (twig_in_filter("watch?v=", ($context["last_arg"] ?? null))) {
                // line 7
                echo "          ";
                $context["last_arg"] = twig_last($this->env, twig_split_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["last_arg"] ?? null), 7, $this->source), "watch?v="));
                // line 8
                echo "        ";
            }
            // line 9
            echo "        ";
            if (twig_in_filter("&ab_channel=", ($context["last_arg"] ?? null))) {
                // line 10
                echo "          ";
                $context["last_arg"] = twig_first($this->env, twig_split_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["last_arg"] ?? null), 10, $this->source), "&ab_channel="));
                // line 11
                echo "        ";
            }
            // line 12
            echo "        <div
          class=\"field field--name-field-video field--type-entity-reference field--label-hidden field__items\">
          <div
            class=\"field field--name-field-media-oembed-video field--type-string field--label-hidden field__item\">
            <iframe
              style=\"max-width:100%;\"
              class=\"media-oembed-content\"
              width=\"800\"
              height=\"600\"
              enablejsapi=\"true\"
              frameborder=\"0\"
              allowfullscreen
              allowtransparency
              title=\"";
            // line 25
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_1 = (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 25), "name", [], "any", false, false, true, 25)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[0] ?? null) : null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["value"] ?? null) : null), 25, $this->source), "html", null, true);
            echo "\" src=\"https://www.youtube.com/embed/";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["last_arg"] ?? null), 25, $this->source), "html", null, true);
            echo "\"></iframe>
          </div>
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/ttor/templates/field/field--field-video.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 29,  85 => 25,  70 => 12,  67 => 11,  64 => 10,  61 => 9,  58 => 8,  55 => 7,  53 => 6,  50 => 5,  47 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/ttor/templates/field/field--field-video.html.twig", "/home/ttorahos/html_and_drupal/TTOR-Drupal/web/themes/custom/ttor/templates/field/field--field-video.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 3, "set" => 4, "if" => 6);
        static $filters = array("last" => 4, "split" => 4, "first" => 10, "escape" => 25);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['last', 'split', 'first', 'escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
