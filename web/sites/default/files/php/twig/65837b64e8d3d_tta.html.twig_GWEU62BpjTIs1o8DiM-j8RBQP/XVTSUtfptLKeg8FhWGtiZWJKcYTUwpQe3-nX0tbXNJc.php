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

/* @ttor/includes/tta.html.twig */
class __TwigTemplate_4d46e4675eb777eb3e8efd61e7e4d432 extends Template
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
      class=\"paragraph-grid-wrap three-column-grid\">
      ";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view($this->sandbox->ensureToStringAllowed(($context["view_tta"] ?? null), 3, $this->source), "block_1"), "html", null, true);
        echo "
      ";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view($this->sandbox->ensureToStringAllowed(($context["view_tta"] ?? null), 4, $this->source), "block_2"), "html", null, true);
        echo "

      <div
        class=\"grid-wrap-right\">
        <div
          class=\"resource-boxes-container\">
          ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_info_grid_text_box", [], "any", false, false, true, 10));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 11
            echo "            <div
              class=\"resource-box tid-";
            // line 12
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 12), "field_category", [], "any", false, false, true, 12), "target_id", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
            echo "\">
              ";
            // line 13
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 13), "field_info_grid_box", [], "any", false, false, true, 13), "processed", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
            echo "
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "        </div>
      </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@ttor/includes/tta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 16,  67 => 13,  63 => 12,  60 => 11,  56 => 10,  47 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@ttor/includes/tta.html.twig", "/home/ttorahos/html_and_drupal/TTOR-Drupal/web/themes/custom/ttor/templates/includes/tta.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 10);
        static $filters = array("escape" => 3);
        static $functions = array("drupal_view" => 3);

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape'],
                ['drupal_view']
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
