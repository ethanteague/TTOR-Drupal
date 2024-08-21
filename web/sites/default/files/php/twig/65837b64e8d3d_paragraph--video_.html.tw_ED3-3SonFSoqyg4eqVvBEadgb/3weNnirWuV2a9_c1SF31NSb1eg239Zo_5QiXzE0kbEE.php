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

/* themes/custom/ttor/templates/paragraphs/paragraph--video_.html.twig */
class __TwigTemplate_2b7c3bc779e992ca577ca7942c9622d0 extends Template
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
        $context["vid_placement"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_video_placement", [], "any", false, false, true, 1), "value", [], "any", false, false, true, 1);
        // line 2
        echo "
    ";
        // line 4
        $context["classes"] = [0 => "paragraph", 1 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 6
($context["paragraph"] ?? null), "bundle", [], "any", false, false, true, 6), 6, $this->source))), 2 => ("paragraph-vid-" . $this->sandbox->ensureToStringAllowed(        // line 7
($context["vid_placement"] ?? null), 7, $this->source)), 3 => ((        // line 8
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 8, $this->source)))) : ("")), 4 => (( !twig_get_attribute($this->env, $this->source,         // line 9
($context["paragraph"] ?? null), "isPublished", [], "method", false, false, true, 9)) ? ("paragraph--unpublished") : (""))];
        // line 12
        echo "    ";
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "
      <div";
        // line 14
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 14), 14, $this->source), "html", null, true);
        echo ">
        ";
        // line 15
        $this->displayBlock('content', $context, $blocks);
        // line 41
        echo "      </div>
    ";
    }

    // line 15
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "          ";
        if ((($context["vid_placement"] ?? null) == "right")) {
            // line 17
            echo "
            <div
              class=\"grid-wrap-left\">
              <h2
                class=\"title\">";
            // line 21
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_feature_title", [], "any", false, false, true, 21), "value", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
            echo "</h2>

              ";
            // line 23
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_text", [], "any", false, false, true, 23), "processed", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
            echo "</div>

            <div
              class=\"grid-wrap-right\">";
            // line 26
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 26, $this->source), "html", null, true);
            echo "</div>
          ";
        } else {
            // line 28
            echo "            <div
              class=\"grid-wrap-left\">
              ";
            // line 30
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 30, $this->source), "html", null, true);
            echo "
            </div>
            <div
              class=\"grid-wrap-right\">
              <h2
                class=\"title\">";
            // line 35
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_feature_title", [], "any", false, false, true, 35), "value", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
            echo "</h2>

              ";
            // line 37
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_text", [], "any", false, false, true, 37), "processed", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
            echo "</div>

          ";
        }
        // line 40
        echo "        ";
    }

    public function getTemplateName()
    {
        return "themes/custom/ttor/templates/paragraphs/paragraph--video_.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 40,  120 => 37,  115 => 35,  107 => 30,  103 => 28,  98 => 26,  92 => 23,  87 => 21,  81 => 17,  78 => 16,  74 => 15,  69 => 41,  67 => 15,  63 => 14,  60 => 13,  52 => 12,  50 => 9,  49 => 8,  48 => 7,  47 => 6,  46 => 4,  43 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/ttor/templates/paragraphs/paragraph--video_.html.twig", "/home/ttorahos/html_and_drupal/TTOR-Drupal/web/themes/custom/ttor/templates/paragraphs/paragraph--video_.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "block" => 12, "if" => 16);
        static $filters = array("clean_class" => 6, "escape" => 14);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
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
