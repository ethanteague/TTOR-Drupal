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

/* themes/custom/ttor/templates/paragraphs/paragraph--feature-without-video.html.twig */
class __TwigTemplate_1bbd702bf91275fe9c94698b5e229c97 extends Template
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
        $context["img_placement"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_image_placement", [], "any", false, false, true, 3), "value", [], "any", false, false, true, 3);
        // line 4
        echo "    ";
        $context["parent"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "_referringItem", [], "any", false, false, true, 4), "parent", [], "any", false, false, true, 4), "parent", [], "any", false, false, true, 4), "entity", [], "any", false, false, true, 4);
        // line 5
        echo "    ";
        // line 6
        $context["classes"] = [0 => "paragraph", 1 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 8
($context["paragraph"] ?? null), "bundle", [], "any", false, false, true, 8), 8, $this->source))), 2 => ("paragraph-img-" . $this->sandbox->ensureToStringAllowed(        // line 9
($context["img_placement"] ?? null), 9, $this->source)), 3 => ((        // line 10
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 10, $this->source)))) : ("")), 4 => (( !twig_get_attribute($this->env, $this->source,         // line 11
($context["paragraph"] ?? null), "isPublished", [], "method", false, false, true, 11)) ? ("paragraph--unpublished") : (""))];
        // line 14
        echo "
    ";
        // line 15
        $this->displayBlock('paragraph', $context, $blocks);
        // line 120
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_button", [], "any", false, false, true, 120))) {
            // line 121
            echo "
      <div
        class=\"field--name-field-button\">
        <a
          href=\"";
            // line 125
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_button", [], "any", false, false, true, 125), "get", [0 => 0], "method", false, false, true, 125), "getUrl", [], "method", false, false, true, 125), "toString", [], "method", false, false, true, 125), 125, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_button", [], "any", false, false, true, 125), "title", [], "any", false, false, true, 125), 125, $this->source), "html", null, true);
            echo "</a>
      </div>
    ";
        }
    }

    // line 15
    public function block_paragraph($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "      <span
        class=\"feature-title-span img-placement-";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["img_placement"] ?? null), 17, $this->source), "html", null, true);
        echo "\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_feature_title", [], "any", false, false, true, 17), "value", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
        echo "</span>

      <div";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 19), 19, $this->source), "html", null, true);
        echo ">
        ";
        // line 20
        $this->displayBlock('content', $context, $blocks);
        // line 118
        echo "      </div>
    ";
    }

    // line 20
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "          ";
        if ((($context["img_placement"] ?? null) == "right")) {
            // line 22
            echo "
            <div
              class=\"grid-wrap-left feature-no-vid-text\">

              <h1
                class=\"title\">";
            // line 27
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["parent"] ?? null), "title", [], "any", false, false, true, 27), "value", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
            echo "</h1>
              ";
            // line 28
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_text", [], "any", false, false, true, 28), "processed", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
            echo "</div>

            <div
              class=\"grid-wrap-right center-image\">
              ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_images", [], "any", false, false, true, 32));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 33
                echo "                ";
                $context["imagestyle"] = ["#theme" => "image", "#uri" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 35
$context["image"], "entity", [], "any", false, false, true, 35), "uri", [], "any", false, false, true, 35), "value", [], "any", false, false, true, 35), "#alt" => twig_get_attribute($this->env, $this->source,                 // line 36
$context["image"], "alt", [], "any", false, false, true, 36), "#attributes" => ["class" => "cta-image"]];
                // line 40
                echo "                <div>
                  ";
                // line 41
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["imagestyle"] ?? null), 41, $this->source), "html", null, true);
                echo "
                  ";
                // line 42
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_show_image_caption", [], "any", false, false, true, 42), "value", [], "any", false, false, true, 42) == "1")) {
                    // line 43
                    echo "                    <span
                      class=\"caption\">";
                    // line 44
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "alt", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
                    echo "</span>
                  ";
                }
                // line 46
                echo "                </div>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "            </div>

          ";
        } elseif ((        // line 50
($context["img_placement"] ?? null) == "left")) {
            // line 51
            echo "            <div
              class=\"grid-wrap-left\">
              ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_images", [], "any", false, false, true, 53));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 54
                echo "                ";
                $context["imagestyle"] = ["#theme" => "image_style", "#style_name" => "wide", "#uri" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 57
$context["image"], "entity", [], "any", false, false, true, 57), "uri", [], "any", false, false, true, 57), "value", [], "any", false, false, true, 57), "#alt" => twig_get_attribute($this->env, $this->source,                 // line 58
$context["image"], "alt", [], "any", false, false, true, 58), "#attributes" => ["class" => "cta-image"]];
                // line 62
                echo "                <div>
                  ";
                // line 63
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["imagestyle"] ?? null), 63, $this->source), "html", null, true);
                echo "
                  ";
                // line 64
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_show_image_caption", [], "any", false, false, true, 64), "value", [], "any", false, false, true, 64) == "1")) {
                    // line 65
                    echo "                    <span
                      class=\"caption\">";
                    // line 66
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "alt", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
                    echo "</span>
                  ";
                }
                // line 68
                echo "                </div>


              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "
            </div>
            <div
              class=\"grid-wrap-right feature-no-vid-text\">
              <span
                class=\"feature-title-span\">";
            // line 77
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_feature_title", [], "any", false, false, true, 77), "value", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
            echo "</span>

              <h1
                class=\"title\">";
            // line 80
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["parent"] ?? null), "title", [], "any", false, false, true, 80), "value", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
            echo "</h1>
              ";
            // line 81
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_text", [], "any", false, false, true, 81), "processed", [], "any", false, false, true, 81), 81, $this->source), "html", null, true);
            echo "</div>

          ";
        } else {
            // line 84
            echo "            <div
              class=\"grid-wrap-top feature-no-vid-text\">
              <h1
                class=\"title\">";
            // line 87
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["parent"] ?? null), "title", [], "any", false, false, true, 87), "value", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
            echo "</h1>
              ";
            // line 88
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_text", [], "any", false, false, true, 88), "processed", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
            echo "

            </div>
            <div
              class=\"grid-wrap-bottom\">
              ";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_images", [], "any", false, false, true, 93));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 94
                echo "                ";
                $context["imagestyle"] = ["#theme" => "image_style", "#style_name" => "4_grid_panel", "#uri" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 97
$context["image"], "entity", [], "any", false, false, true, 97), "uri", [], "any", false, false, true, 97), "value", [], "any", false, false, true, 97), "#alt" => twig_get_attribute($this->env, $this->source,                 // line 98
$context["image"], "alt", [], "any", false, false, true, 98), "#attributes" => ["class" => "cta-image"]];
                // line 102
                echo "                <div>
                  ";
                // line 103
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["imagestyle"] ?? null), 103, $this->source), "html", null, true);
                echo "
                  ";
                // line 104
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_show_image_caption", [], "any", false, false, true, 104), "value", [], "any", false, false, true, 104) == "1")) {
                    // line 105
                    echo "                    <span
                      class=\"caption\">";
                    // line 106
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["image"], "alt", [], "any", false, false, true, 106), 106, $this->source), "html", null, true);
                    echo "</span>
                  ";
                }
                // line 108
                echo "                </div>


              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 112
            echo "            </div>

          ";
        }
        // line 115
        echo "

        ";
    }

    public function getTemplateName()
    {
        return "themes/custom/ttor/templates/paragraphs/paragraph--feature-without-video.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 115,  287 => 112,  278 => 108,  273 => 106,  270 => 105,  268 => 104,  264 => 103,  261 => 102,  259 => 98,  258 => 97,  256 => 94,  252 => 93,  244 => 88,  240 => 87,  235 => 84,  229 => 81,  225 => 80,  219 => 77,  212 => 72,  203 => 68,  198 => 66,  195 => 65,  193 => 64,  189 => 63,  186 => 62,  184 => 58,  183 => 57,  181 => 54,  177 => 53,  173 => 51,  171 => 50,  167 => 48,  160 => 46,  155 => 44,  152 => 43,  150 => 42,  146 => 41,  143 => 40,  141 => 36,  140 => 35,  138 => 33,  134 => 32,  127 => 28,  123 => 27,  116 => 22,  113 => 21,  109 => 20,  104 => 118,  102 => 20,  98 => 19,  91 => 17,  88 => 16,  84 => 15,  74 => 125,  68 => 121,  65 => 120,  63 => 15,  60 => 14,  58 => 11,  57 => 10,  56 => 9,  55 => 8,  54 => 6,  52 => 5,  49 => 4,  46 => 3,  43 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/ttor/templates/paragraphs/paragraph--feature-without-video.html.twig", "/home/ttorahos/html_and_drupal/TTOR-Drupal/web/themes/custom/ttor/templates/paragraphs/paragraph--feature-without-video.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "block" => 15, "if" => 120, "for" => 32);
        static $filters = array("clean_class" => 8, "escape" => 125);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if', 'for'],
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
