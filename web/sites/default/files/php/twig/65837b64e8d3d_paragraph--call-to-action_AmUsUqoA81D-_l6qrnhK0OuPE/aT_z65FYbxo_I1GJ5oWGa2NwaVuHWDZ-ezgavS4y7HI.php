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

/* themes/custom/ttor/templates/paragraphs/paragraph--call-to-action.html.twig */
class __TwigTemplate_9261ad422eb382092b4051398a7b1262 extends Template
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
        $context["header_tag"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_feature_title_tag", [], "any", false, false, true, 1), "value", [], "any", false, false, true, 1);
        // line 2
        echo "
    ";
        // line 3
        $context["img_placement"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_image_placement", [], "any", false, false, true, 3), "value", [], "any", false, false, true, 3);
        // line 4
        echo "    ";
        $context["parent"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "_referringItem", [], "any", false, false, true, 4), "parent", [], "any", false, false, true, 4), "parent", [], "any", false, false, true, 4), "entity", [], "any", false, false, true, 4);
        // line 5
        echo "    ";
        $context["imagestyle"] = ["#theme" => "image_style", "#style_name" => "rectangle", "#uri" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source,         // line 8
($context["paragraph"] ?? null), "field_images", [], "any", false, false, true, 8)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "entity", [], "any", false, false, true, 8), "uri", [], "any", false, false, true, 8), "value", [], "any", false, false, true, 8), "#alt" => twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source,         // line 9
($context["paragraph"] ?? null), "field_images", [], "any", false, false, true, 9)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null), "alt", [], "any", false, false, true, 9), "#attributes" => ["class" => "cta-image"]];
        // line 13
        echo "
    ";
        // line 15
        $context["classes"] = [0 => "paragraph", 1 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 17
($context["paragraph"] ?? null), "bundle", [], "any", false, false, true, 17), 17, $this->source))), 2 => ("paragraph-img-" . $this->sandbox->ensureToStringAllowed(        // line 18
($context["img_placement"] ?? null), 18, $this->source)), 3 => ("paragraph-tag-" . $this->sandbox->ensureToStringAllowed(        // line 19
($context["header_tag"] ?? null), 19, $this->source)), 4 => ((        // line 20
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 20, $this->source)))) : ("")), 5 => (( !twig_get_attribute($this->env, $this->source,         // line 21
($context["paragraph"] ?? null), "isPublished", [], "method", false, false, true, 21)) ? ("paragraph--unpublished") : (""))];
        // line 24
        echo "    ";
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "      ";
        if ((($context["header_tag"] ?? null) == "h2")) {
            // line 26
            echo "        <h2
          class=\"cta-center\">";
            // line 27
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_feature_title", [], "any", false, false, true, 27), "value", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
            echo "</h2>
      ";
        }
        // line 29
        echo "
      <div";
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 30), 30, $this->source), "html", null, true);
        echo ">
        ";
        // line 31
        $this->displayBlock('content', $context, $blocks);
        // line 94
        echo "      </div>

    ";
    }

    // line 31
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "          ";
        if ((($context["img_placement"] ?? null) == "right")) {
            // line 33
            echo "
            <div
              class=\"grid-wrap-left\">
              ";
            // line 36
            if ((($context["header_tag"] ?? null) != "h2")) {
                // line 37
                echo "                <span
                  class=\"feature-title-span\">";
                // line 38
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_feature_title", [], "any", false, false, true, 38), "value", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
                echo "</span>
              ";
            }
            // line 40
            echo "              ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_text", [], "any", false, false, true, 40), "processed", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
            echo "

              ";
            // line 42
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_button", [], "any", false, false, true, 42))) {
                // line 43
                echo "
                <div
                  class=\"field--name-field-button\">
                  <a
                    href=\"";
                // line 47
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_button", [], "any", false, false, true, 47), "get", [0 => 0], "method", false, false, true, 47), "getUrl", [], "method", false, false, true, 47), "toString", [], "method", false, false, true, 47), 47, $this->source), "html", null, true);
                echo "\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_button", [], "any", false, false, true, 47), "title", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
                echo "</a>
                </div>
              ";
            }
            // line 50
            echo "            </div>
            <div
              class=\"grid-wrap-right\">";
            // line 52
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["imagestyle"] ?? null), 52, $this->source), "html", null, true);
            echo "
              ";
            // line 53
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_show_image_caption", [], "any", false, false, true, 53), "value", [], "any", false, false, true, 53) == "1")) {
                // line 54
                echo "                <span
                  class=\"caption\">";
                // line 55
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_images", [], "any", false, false, true, 55)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[0] ?? null) : null), "alt", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
                echo "</span>

              ";
            }
            // line 58
            echo "
            </div>

          ";
        } else {
            // line 62
            echo "            <div
              class=\"grid-wrap-left\">
              ";
            // line 64
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["imagestyle"] ?? null), 64, $this->source), "html", null, true);
            echo "
              ";
            // line 65
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_show_image_caption", [], "any", false, false, true, 65), "value", [], "any", false, false, true, 65) == "1")) {
                // line 66
                echo "                <span
                  class=\"caption\">";
                // line 67
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_images", [], "any", false, false, true, 67)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[0] ?? null) : null), "alt", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
                echo "</span>

              ";
            }
            // line 70
            echo "
            </div>
            <div
              class=\"grid-wrap-right\">
              ";
            // line 74
            if ((($context["header_tag"] ?? null) != "h2")) {
                // line 75
                echo "                <span
                  class=\"feature-title-span\">";
                // line 76
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_feature_title", [], "any", false, false, true, 76), "value", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
                echo "</span>
              ";
            }
            // line 78
            echo "              ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_text", [], "any", false, false, true, 78), "processed", [], "any", false, false, true, 78), 78, $this->source), "html", null, true);
            echo "

              ";
            // line 80
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_button", [], "any", false, false, true, 80))) {
                // line 81
                echo "

                <div
                  class=\"field--name-field-button\">
                  <a
                    href=\"";
                // line 86
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_button", [], "any", false, false, true, 86), "get", [0 => 0], "method", false, false, true, 86), "getUrl", [], "method", false, false, true, 86), "toString", [], "method", false, false, true, 86), 86, $this->source), "html", null, true);
                echo "\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_button", [], "any", false, false, true, 86), "title", [], "any", false, false, true, 86), 86, $this->source), "html", null, true);
                echo "</a>
                </div>
              ";
            }
            // line 89
            echo "            </div>


          ";
        }
        // line 93
        echo "        ";
    }

    public function getTemplateName()
    {
        return "themes/custom/ttor/templates/paragraphs/paragraph--call-to-action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 93,  227 => 89,  219 => 86,  212 => 81,  210 => 80,  204 => 78,  199 => 76,  196 => 75,  194 => 74,  188 => 70,  182 => 67,  179 => 66,  177 => 65,  173 => 64,  169 => 62,  163 => 58,  157 => 55,  154 => 54,  152 => 53,  148 => 52,  144 => 50,  136 => 47,  130 => 43,  128 => 42,  122 => 40,  117 => 38,  114 => 37,  112 => 36,  107 => 33,  104 => 32,  100 => 31,  94 => 94,  92 => 31,  88 => 30,  85 => 29,  80 => 27,  77 => 26,  74 => 25,  66 => 24,  64 => 21,  63 => 20,  62 => 19,  61 => 18,  60 => 17,  59 => 15,  56 => 13,  54 => 9,  53 => 8,  51 => 5,  48 => 4,  46 => 3,  43 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/ttor/templates/paragraphs/paragraph--call-to-action.html.twig", "/home/ttorahos/html_and_drupal/TTOR-Drupal/web/themes/custom/ttor/templates/paragraphs/paragraph--call-to-action.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "block" => 24, "if" => 25);
        static $filters = array("clean_class" => 17, "escape" => 27);
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
