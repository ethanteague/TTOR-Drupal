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

/* themes/custom/ttor/templates/paragraphs/paragraph--toolkit-cards.html.twig */
class __TwigTemplate_60ec3f60b90b5522442b4155a0d32fe5 extends Template
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
        // line 2
        $context["classes"] = [0 => "paragraph", 1 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 4
($context["paragraph"] ?? null), "bundle", [], "any", false, false, true, 4), 4, $this->source))), 2 => ((        // line 5
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 5, $this->source)))) : ("")), 3 => (( !twig_get_attribute($this->env, $this->source,         // line 6
($context["paragraph"] ?? null), "isPublished", [], "method", false, false, true, 6)) ? ("paragraph--unpublished") : (""))];
        // line 9
        echo "    ";
        $context["imagestyle"] = ["#theme" => "image_style", "#style_name" => "290x225", "#uri" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 12
($context["image"] ?? null), "entity", [], "any", false, false, true, 12), "uri", [], "any", false, false, true, 12), "value", [], "any", false, false, true, 12), "#alt" => twig_get_attribute($this->env, $this->source,         // line 13
($context["image"] ?? null), "alt", [], "any", false, false, true, 13), "#attributes" => ["class" => "cta-image"]];
        // line 17
        echo "    ";
        $context["toolkit_id"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_media", [], "any", false, false, true, 17), "entity", [], "any", false, false, true, 17), "id", [], "any", false, false, true, 17);
        // line 18
        echo "    ";
        $context["toolkit_image"] = Drupal\twig_tweak\TwigTweakExtension::drupalEntity("media", $this->sandbox->ensureToStringAllowed(($context["toolkit_id"] ?? null), 18, $this->source), "toolkit");
        // line 19
        echo "
    ";
        // line 20
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "      <div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 21), 21, $this->source), "html", null, true);
        echo ">
        ";
        // line 22
        $this->displayBlock('content', $context, $blocks);
        // line 44
        echo "      </div>
    ";
    }

    // line 22
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "          <div
            class=\"paragraph-grid-wrap\">
            <div
              class=\"grid-wrap-left\">
              ";
        // line 27
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["toolkit_image"] ?? null), 27, $this->source), "html", null, true);
        echo "
            </div>
            <div
              class=\"grid-wrap-right\">
              <strong>";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_feature_title", [], "any", false, false, true, 31), "value", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
        echo "</strong>
              ";
        // line 32
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_text", [], "any", false, false, true, 32)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "processed", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
        echo "
              ";
        // line 33
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_button", [], "any", false, false, true, 33))) {
            // line 34
            echo "                <div
                  class=\"field--name-field-button\">
                  <a
                    target=\"_blank\" href=\"";
            // line 37
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_button", [], "any", false, false, true, 37), "get", [0 => 0], "method", false, false, true, 37), "getUrl", [], "method", false, false, true, 37), "toString", [], "method", false, false, true, 37), 37, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_button", [], "any", false, false, true, 37), "title", [], "any", false, false, true, 37), 37, $this->source), "html", null, true);
            echo "</a>
                </div>
              ";
        }
        // line 40
        echo "
            </div>
          </div>
        ";
    }

    public function getTemplateName()
    {
        return "themes/custom/ttor/templates/paragraphs/paragraph--toolkit-cards.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 40,  111 => 37,  106 => 34,  104 => 33,  100 => 32,  96 => 31,  89 => 27,  83 => 23,  79 => 22,  74 => 44,  72 => 22,  67 => 21,  60 => 20,  57 => 19,  54 => 18,  51 => 17,  49 => 13,  48 => 12,  46 => 9,  44 => 6,  43 => 5,  42 => 4,  41 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/ttor/templates/paragraphs/paragraph--toolkit-cards.html.twig", "/home/ttorahos/html_and_drupal/TTOR-Drupal/web/themes/custom/ttor/templates/paragraphs/paragraph--toolkit-cards.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "block" => 20, "if" => 33);
        static $filters = array("clean_class" => 4, "escape" => 21);
        static $functions = array("drupal_entity" => 18);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['clean_class', 'escape'],
                ['drupal_entity']
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
