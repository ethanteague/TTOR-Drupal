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

/* @ttor/includes/resources.html.twig */
class __TwigTemplate_dd60bbda3ccda7c8767ecc41a93b3577 extends Template
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
      class=\"paragraph-grid-wrap two-column-grid\">
      <div
        class=\"grid-wrap-left\">
        ";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view($this->sandbox->ensureToStringAllowed(($context["view"] ?? null), 5, $this->source), "block_1"), "html", null, true);
        echo "
      </div>
      <div
        class=\"grid-wrap-right\">
        ";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view($this->sandbox->ensureToStringAllowed(($context["view"] ?? null), 9, $this->source), "block_2"), "html", null, true);
        echo "
        <div
          class=\"resource-boxes-container\">

          ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_info_grid_text_box", [], "any", false, false, true, 13));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 14
            echo "            <div
              class=\"resource-box tid-";
            // line 15
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 15), "field_category", [], "any", false, false, true, 15), "target_id", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
            echo "\">
              ";
            // line 16
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 16), "field_info_grid_box", [], "any", false, false, true, 16), "processed", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
            echo "
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "        </div>
      </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@ttor/includes/resources.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 19,  70 => 16,  66 => 15,  63 => 14,  59 => 13,  52 => 9,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@ttor/includes/resources.html.twig", "/home/ttorahos/html_and_drupal/TTOR-Drupal/web/themes/custom/ttor/templates/includes/resources.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 13);
        static $filters = array("escape" => 5);
        static $functions = array("drupal_view" => 5);

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
