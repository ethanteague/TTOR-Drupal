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

/* themes/custom/ttor/templates/paragraphs/paragraph--checklist.html.twig */
class __TwigTemplate_aeb5bbd9ffe1c2e0a5b200d1a7053af4 extends Template
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
        $context["img_placement"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_image_placement", [], "any", false, false, true, 1), "value", [], "any", false, false, true, 1);
        // line 2
        echo "    ";
        $context["parent"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "_referringItem", [], "any", false, false, true, 2), "parent", [], "any", false, false, true, 2), "parent", [], "any", false, false, true, 2), "entity", [], "any", false, false, true, 2);
        // line 3
        echo "    ";
        $context["img_placement"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_video_placement", [], "any", false, false, true, 3), "value", [], "any", false, false, true, 3);
        // line 4
        echo "    ";
        $context["parent"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "_referringItem", [], "any", false, false, true, 4), "parent", [], "any", false, false, true, 4), "parent", [], "any", false, false, true, 4), "entity", [], "any", false, false, true, 4);
        // line 5
        echo "    ";
        // line 6
        $context["classes"] = [0 => "paragraph", 1 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 8
($context["paragraph"] ?? null), "bundle", [], "any", false, false, true, 8), 8, $this->source))), 2 => ("paragraph-vid-" . $this->sandbox->ensureToStringAllowed(        // line 9
($context["img_placement"] ?? null), 9, $this->source)), 3 => ((        // line 10
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
        // line 43
        echo "      </div>
    ";
    }

    // line 17
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "          <h2
            class=\"title\">";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_feature_title", [], "any", false, false, true, 19), "value", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
        echo "</h2>
          <div
            class=\"paragraph-grid-wrap\">
            <div
              class=\"grid-wrap-left\">
              ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_images", [], "any", false, false, true, 24));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 25
            echo "                ";
            $context["imagestyle"] = ["#theme" => "image_style", "#style_name" => "wide", "#uri" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 28
$context["image"], "entity", [], "any", false, false, true, 28), "uri", [], "any", false, false, true, 28), "value", [], "any", false, false, true, 28), "#alt" => twig_get_attribute($this->env, $this->source,             // line 29
$context["image"], "alt", [], "any", false, false, true, 29), "#attributes" => ["class" => "cta-image"]];
            // line 33
            echo "                ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["imagestyle"] ?? null), 33, $this->source), "html", null, true);
            echo "
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "            </div>
            <div
              class=\"grid-wrap-right\">

              ";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_text", [], "any", false, false, true, 39), "processed", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
        echo "</div>

          </div>
        ";
    }

    public function getTemplateName()
    {
        return "themes/custom/ttor/templates/paragraphs/paragraph--checklist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 39,  115 => 35,  106 => 33,  104 => 29,  103 => 28,  101 => 25,  97 => 24,  89 => 19,  86 => 18,  82 => 17,  77 => 43,  75 => 17,  71 => 16,  68 => 15,  60 => 14,  58 => 11,  57 => 10,  56 => 9,  55 => 8,  54 => 6,  52 => 5,  49 => 4,  46 => 3,  43 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/ttor/templates/paragraphs/paragraph--checklist.html.twig", "/home/ttorahos/html_and_drupal/TTOR-Drupal/web/themes/custom/ttor/templates/paragraphs/paragraph--checklist.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "block" => 14, "for" => 24);
        static $filters = array("clean_class" => 8, "escape" => 16);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'for'],
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
