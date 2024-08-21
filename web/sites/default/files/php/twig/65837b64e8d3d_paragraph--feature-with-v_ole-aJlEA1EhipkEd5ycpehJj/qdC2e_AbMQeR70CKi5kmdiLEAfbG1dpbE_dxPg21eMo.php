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

/* themes/custom/ttor/templates/paragraphs/paragraph--feature-with-video.html.twig */
class __TwigTemplate_d4682c99542e144e70fd4da596544d0e extends Template
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
        echo "    ";
        $context["parent"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "_referringItem", [], "any", false, false, true, 2), "parent", [], "any", false, false, true, 2), "parent", [], "any", false, false, true, 2), "entity", [], "any", false, false, true, 2);
        // line 3
        echo "

    ";
        // line 6
        $context["classes"] = [0 => "paragraph", 1 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 8
($context["paragraph"] ?? null), "bundle", [], "any", false, false, true, 8), 8, $this->source))), 2 => ("paragraph-vid-" . $this->sandbox->ensureToStringAllowed(        // line 9
($context["vid_placement"] ?? null), 9, $this->source)), 3 => ((        // line 10
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 10, $this->source)))) : ("")), 4 => (( !twig_get_attribute($this->env, $this->source,         // line 11
($context["paragraph"] ?? null), "isPublished", [], "method", false, false, true, 11)) ? ("paragraph--unpublished") : (""))];
        // line 14
        echo "    ";
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "
      <div";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 16), 16, $this->source), "html", null, true);
        echo ">
        ";
        // line 17
        $this->displayBlock('content', $context, $blocks);
        // line 47
        echo "    </div>
  ";
    }

    // line 17
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "          ";
        if ((($context["vid_placement"] ?? null) == "right")) {
            // line 19
            echo "
            <div
              class=\"grid-wrap-left\">
              ";
            // line 22
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_feature_title", [], "any", false, false, true, 22), "value", [], "any", false, false, true, 22))) {
                // line 23
                echo "              <span
                class=\"feature-title-span\">";
                // line 24
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_feature_title", [], "any", false, false, true, 24), "value", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
                echo "</span>
            ";
            }
            // line 26
            echo "

            <h1
              class=\"title\">";
            // line 29
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["parent"] ?? null), "title", [], "any", false, false, true, 29), "value", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
            echo "</h1>
            ";
            // line 30
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_text", [], "any", false, false, true, 30), "processed", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
            echo "</div>

          <div
            class=\"grid-wrap-right\">";
            // line 33
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 33, $this->source), "html", null, true);
            echo "</div>
        ";
        } else {
            // line 35
            echo "          <div
            class=\"grid-wrap-left\">
            ";
            // line 37
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 37, $this->source), "html", null, true);
            echo "
          </div>
          <div
            class=\"grid-wrap-right\">
            <h1
              class=\"title\">";
            // line 42
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["parent"] ?? null), "title", [], "any", false, false, true, 42), "value", [], "any", false, false, true, 42), 42, $this->source), "html", null, true);
            echo "</h1>
            ";
            // line 43
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_text", [], "any", false, false, true, 43), "processed", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
            echo "</div>

        ";
        }
        // line 46
        echo "      ";
    }

    public function getTemplateName()
    {
        return "themes/custom/ttor/templates/paragraphs/paragraph--feature-with-video.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 46,  136 => 43,  132 => 42,  124 => 37,  120 => 35,  115 => 33,  109 => 30,  105 => 29,  100 => 26,  95 => 24,  92 => 23,  90 => 22,  85 => 19,  82 => 18,  78 => 17,  73 => 47,  71 => 17,  67 => 16,  64 => 15,  56 => 14,  54 => 11,  53 => 10,  52 => 9,  51 => 8,  50 => 6,  46 => 3,  43 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/ttor/templates/paragraphs/paragraph--feature-with-video.html.twig", "/home/ttorahos/html_and_drupal/TTOR-Drupal/web/themes/custom/ttor/templates/paragraphs/paragraph--feature-with-video.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "block" => 14, "if" => 18);
        static $filters = array("clean_class" => 8, "escape" => 16);
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
