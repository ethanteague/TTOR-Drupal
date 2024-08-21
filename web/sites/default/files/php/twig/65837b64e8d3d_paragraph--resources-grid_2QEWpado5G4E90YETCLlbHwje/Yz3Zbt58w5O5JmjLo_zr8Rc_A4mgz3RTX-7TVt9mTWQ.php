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

/* themes/custom/ttor/templates/paragraphs/paragraph--resources-grid-boxes.html.twig */
class __TwigTemplate_394b0c9596a3630596ea6f3cb69e6edc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'paragraph' => [$this, 'block_paragraph'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["view"] = "resources_list";
        // line 2
        echo "    ";
        $context["view_tta"] = "texas_takes_action_list";
        // line 3
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_spanish_slideshow", [], "any", false, false, true, 3), "value", [], "any", false, false, true, 3) == "1")) {
            // line 4
            echo "      ";
            $context["view"] = "resources_list_spanish";
            // line 5
            echo "      ";
            $context["view_tta"] = "texas_takes_action_list_spanish";
            // line 6
            echo "    ";
        }
        // line 7
        echo "
    ";
        // line 9
        $context["classes"] = [0 => "paragraph", 1 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 11
($context["paragraph"] ?? null), "bundle", [], "any", false, false, true, 11), 11, $this->source))), 2 => ("paragraph-language-" . $this->sandbox->ensureToStringAllowed(        // line 12
($context["view"] ?? null), 12, $this->source)), 3 => ((        // line 13
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 13, $this->source)))) : ("")), 4 => (( !twig_get_attribute($this->env, $this->source,         // line 14
($context["paragraph"] ?? null), "isPublished", [], "method", false, false, true, 14)) ? ("paragraph--unpublished") : (""))];
        // line 17
        echo "    ";
        $context["byline"] = "empty-byline";
        // line 18
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_byline", [], "any", false, false, true, 18), "value", [], "any", false, false, true, 18))) {
            // line 19
            echo "      ";
            $context["byline"] = "not-empty-byline";
            // line 20
            echo "
    ";
        }
        // line 22
        echo "
    ";
        // line 23
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "      <div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 24), 24, $this->source), "html", null, true);
        echo ">
        ";
        // line 25
        $this->displayBlock('content', $context, $blocks);
        // line 33
        echo "      </div>
    ";
    }

    // line 25
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "          ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_grid_display", [], "any", false, false, true, 26), "value", [], "any", false, false, true, 26) == "two")) {
            // line 27
            echo "            ";
            $this->loadTemplate("@ttor/includes/resources.html.twig", "themes/custom/ttor/templates/paragraphs/paragraph--resources-grid-boxes.html.twig", 27)->display($context);
            // line 28
            echo "          ";
        } else {
            // line 29
            echo "            ";
            $this->loadTemplate("@ttor/includes/tta.html.twig", "themes/custom/ttor/templates/paragraphs/paragraph--resources-grid-boxes.html.twig", 29)->display($context);
            // line 30
            echo "
          ";
        }
        // line 32
        echo "        ";
    }

    public function getTemplateName()
    {
        return "themes/custom/ttor/templates/paragraphs/paragraph--resources-grid-boxes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 32,  118 => 30,  115 => 29,  112 => 28,  109 => 27,  106 => 26,  102 => 25,  97 => 33,  95 => 25,  90 => 24,  83 => 23,  80 => 22,  76 => 20,  73 => 19,  70 => 18,  67 => 17,  65 => 14,  64 => 13,  63 => 12,  62 => 11,  61 => 9,  58 => 7,  55 => 6,  52 => 5,  49 => 4,  46 => 3,  43 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/ttor/templates/paragraphs/paragraph--resources-grid-boxes.html.twig", "/home/ttorahos/html_and_drupal/TTOR-Drupal/web/themes/custom/ttor/templates/paragraphs/paragraph--resources-grid-boxes.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 3, "block" => 23, "include" => 27);
        static $filters = array("clean_class" => 11, "escape" => 24);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block', 'include'],
                ['clean_class', 'escape'],
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
