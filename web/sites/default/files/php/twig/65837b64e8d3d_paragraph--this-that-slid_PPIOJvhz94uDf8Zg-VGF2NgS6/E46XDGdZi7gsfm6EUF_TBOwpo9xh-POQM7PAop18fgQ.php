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

/* themes/custom/ttor/templates/paragraphs/paragraph--this-that-slideshow.html.twig */
class __TwigTemplate_23ebfbc1a535d19444caba83447c8375 extends Template
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
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "
      <div";
        // line 11
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 11), 11, $this->source), "html", null, true);
        echo ">
        ";
        // line 12
        $this->displayBlock('content', $context, $blocks);
        // line 142
        echo "      </div>
    ";
    }

    // line 12
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "          <div
            class=\"paragraph-grid-wrap\">
            <div
              class=\"grid-wrap-left\">";
        // line 16
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_text", [], "any", false, false, true, 16), "processed", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
        echo "</div>
            <div
              class=\"grid-wrap-right\">
              <div
                class=\"CSSgal\">

                <!-- Don't wrap targets in parent -->
                <s
                  id=\"s1\"></s>
                <s
                  id=\"s2\"></s>
                <s
                  id=\"s3\"></s>
                <s
                  id=\"s4\"></s>
                <s
                  id=\"s5\"></s>
                <s
                  id=\"s6\"></s>

                <div
                  class=\"slider\">
                  ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_say_this", [], "any", false, false, true, 38));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["this"]) {
            // line 39
            echo "                    <div
                      class=\"chat-wrap\">
                      <div
                        class=\"chat-bubble say-this\">
                        <p
                          class=\"large\">
                          ";
            // line 45
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_spanish_slideshow", [], "any", false, false, true, 45), "value", [], "any", false, false, true, 45) == "1")) {
                echo "DIGA ESTO
                            ";
            } else {
                // line 46
                echo "SAY THIS
                          ";
            }
            // line 48
            echo "                        </p>

                        <p>";
            // line 50
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["this"], "value", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
            echo "</p>
                      </div>
                      <div
                        class=\"chat-bubble not-that\">
                        <p
                          class=\"large\">
                          ";
            // line 56
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_spanish_slideshow", [], "any", false, false, true, 56), "value", [], "any", false, false, true, 56) == "1")) {
                echo "Y NO ESTO
                            ";
            } else {
                // line 57
                echo "NOT THAT
                          ";
            }
            // line 59
            echo "                        </p>

                        <p>";
            // line 61
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["paragraph"] ?? null), "field_not_that", [], "any", false, false, true, 61)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 61) - 1)] ?? null) : null), "value", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
            echo "</p>
                      </div>
                    </div>
                  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['this'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "
                </div>

                <div
                  class=\"prevNext\">
                  <div>
                    <a
                      href=\"#s6\">«</a>

                    <a
                      href=\"#s2\">»</a>

                  </div>
                  <div>
                    <a
                      href=\"#s1\">«</a>

                    <a
                      href=\"#s3\">»</a>

                  </div>
                  <div>
                    <a
                      href=\"#s2\">«</a>

                    <a
                      href=\"#s4\">»</a>

                  </div>
                  <div>
                    <a
                      href=\"#s3\">«</a>

                    <a
                      href=\"#s5\">»</a>

                  </div>
                  <div>
                    <a
                      href=\"#s4\">«</a>

                    <a
                      href=\"#s6\">»</a>

                  </div>
                  <div>
                    <a
                      href=\"#s5\">«</a>

                    <a
                      href=\"#s1\">»</a>

                  </div>
                </div>

                <div
                  class=\"bullets\">
                  <a
                    href=\"#s1\">1</a>
                  <a
                    href=\"#s2\">2</a>
                  <a
                    href=\"#s3\">3</a>
                  <a
                    href=\"#s4\">4</a>
                  <a
                    href=\"#s5\">5</a>
                  <a
                    href=\"#s6\">6</a>
                </div>

              </div>
            </div>
          </div>


        ";
    }

    public function getTemplateName()
    {
        return "themes/custom/ttor/templates/paragraphs/paragraph--this-that-slideshow.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 65,  162 => 61,  158 => 59,  154 => 57,  149 => 56,  140 => 50,  136 => 48,  132 => 46,  127 => 45,  119 => 39,  102 => 38,  77 => 16,  72 => 13,  68 => 12,  63 => 142,  61 => 12,  57 => 11,  54 => 10,  46 => 9,  44 => 6,  43 => 5,  42 => 4,  41 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/ttor/templates/paragraphs/paragraph--this-that-slideshow.html.twig", "/home/ttorahos/html_and_drupal/TTOR-Drupal/web/themes/custom/ttor/templates/paragraphs/paragraph--this-that-slideshow.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "block" => 9, "for" => 38, "if" => 45);
        static $filters = array("clean_class" => 4, "escape" => 11);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'for', 'if'],
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
