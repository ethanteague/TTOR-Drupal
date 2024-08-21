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

/* themes/custom/ttor/templates/layouts/page.html.twig */
class __TwigTemplate_249533598a3bcd0cebd790a808ccd709 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'featured' => [$this, 'block_featured'],
            'content' => [$this, 'block_content'],
            'content_sub_feature' => [$this, 'block_content_sub_feature'],
            'content_two' => [$this, 'block_content_two'],
            'content_three' => [$this, 'block_content_three'],
            'content_four' => [$this, 'block_content_four'],
            'content_five' => [$this, 'block_content_five'],
            'content_six' => [$this, 'block_content_six'],
            'content_seven' => [$this, 'block_content_seven'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["header_area_color"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_header_background_color", [], "any", false, false, true, 1), "value", [], "any", false, false, true, 1);
        // line 2
        echo "    ";
        $context["first_area_color"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_first_content_area_bg", [], "any", false, false, true, 2), "value", [], "any", false, false, true, 2);
        // line 3
        echo "
    ";
        // line 4
        $context["second_area_color"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_second_content_area_bg", [], "any", false, false, true, 4), "value", [], "any", false, false, true, 4);
        // line 5
        echo "
    ";
        // line 6
        $context["third_area_color"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_third_content_area_bg_colo", [], "any", false, false, true, 6), "value", [], "any", false, false, true, 6);
        // line 7
        echo "
    ";
        // line 8
        $context["fourth_area_color"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_fourth_content_area_bg_col", [], "any", false, false, true, 8), "value", [], "any", false, false, true, 8);
        // line 9
        echo "
    ";
        // line 10
        $context["fifth_area_color"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_fifth_content_area_bg_colo", [], "any", false, false, true, 10), "value", [], "any", false, false, true, 10);
        // line 11
        echo "
    ";
        // line 12
        $context["sixth_area_color"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_sixth_content_area_bg_colo", [], "any", false, false, true, 12), "value", [], "any", false, false, true, 12);
        // line 13
        echo "

    ";
        // line 15
        $context["language"] = "english";
        // line 16
        echo "    ";
        if ( !twig_test_empty((($__internal_compile_0 = (($__internal_compile_1 = ($context["page"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["primary_menu"] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["spanishmainnavigation"] ?? null) : null))) {
            // line 17
            echo "      ";
            $context["language"] = "spanish";
            // line 18
            echo "    ";
        }
        // line 19
        echo "    <div
      id=\"page-wrapper\"
      class=\"";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["language"] ?? null), 21, $this->source), "html", null, true);
        echo " bg-color-";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_area_color"] ?? null), 21, $this->source), "html", null, true);
        echo "\">
<svg
class=\"scroll-page-button\"
id=\"scroll-down-js\"
      xmlns=\"http://www.w3.org/2000/svg\"
      xmlns:xlink=\"http://www.w3.org/1999/xlink\"
      width=\"70\"
      height=\"70\"
      viewbox=\"0 0 70 70\">
      <defs>
        <clipPath
          id=\"clip-path\">
          <rect
            id=\"Rectangle_299\"
            data-name=\"Rectangle 299\"
            width=\"35\"
            height=\"28.395\"
            fill=\"#003087\"/>
        </clipPath>
      </defs>
      <g
        id=\"Group_549\"
        data-name=\"Group 549\"
        transform=\"translate(-1778 -903)\">
        <circle
          id=\"Ellipse_416\"
          data-name=\"Ellipse 416\"
          cx=\"35\"
          cy=\"35\"
          r=\"35\"
          transform=\"translate(1778 903)\"
          fill=\"rgba(234,234,234,0.6)\"/>
        <g
          id=\"Group_547\"
          data-name=\"Group 547\"
          transform=\"translate(1795.5 925.803)\">
          <g
            id=\"Group_546\"
            data-name=\"Group 546\"
            clip-path=\"url(#clip-path)\">
            <path
              id=\"Path_142\"
              data-name=\"Path 142\"
              d=\"M2.128.007A1.976,1.976,0,0,0,.748,3.524L16.272,15.739h0a1.976,1.976,0,0,0,2.449,0L34.245,3.524a1.973,1.973,0,0,0-2.434-3.1L17.495,11.674,3.2.419A1.975,1.975,0,0,0,2.128.007Zm0,12.215a1.976,1.976,0,0,0-1.38,3.518L16.272,27.97h0a1.975,1.975,0,0,0,2.449,0L34.245,15.739h0a1.973,1.973,0,0,0-2.434-3.105L17.495,23.9,3.2,12.634a1.975,1.975,0,0,0-1.069-.413Z\"
              transform=\"translate(0 0)\"
              fill=\"#003087\"/>
          </g>
        </g>
      </g>
    </svg>
<svg
class=\"scroll-page-button\"
id=\"scroll-up-js\"
      id=\"Group_552\"
      data-name=\"Group 552\"
      xmlns=\"http://www.w3.org/2000/svg\"
      xmlns:xlink=\"http://www.w3.org/1999/xlink\"
      width=\"70\"
      height=\"70\"
      viewbox=\"0 0 70 70\">
      <defs>
        <clipPath
          id=\"clip-path\">
          <rect
            id=\"Rectangle_299\"
            data-name=\"Rectangle 299\"
            width=\"35\"
            height=\"28.395\"
            fill=\"#003087\"/>
        </clipPath>
      </defs>
      <circle
        id=\"Ellipse_416\"
        data-name=\"Ellipse 416\"
        cx=\"35\"
        cy=\"35\"
        r=\"35\"
        fill=\"rgba(204,204,204,0.6)\"/>
      <g
        id=\"Group_547\"
        data-name=\"Group 547\"
        transform=\"translate(17.5 18.802)\">
        <g
          id=\"Group_546\"
          data-name=\"Group 546\"
          clip-path=\"url(#clip-path)\">
          <path
            id=\"Path_142\"
            data-name=\"Path 142\"
            d=\"M2.128,28.389a1.976,1.976,0,0,1-1.38-3.518L16.272,12.656h0a1.976,1.976,0,0,1,2.449,0L34.245,24.871a1.973,1.973,0,0,1-2.434,3.1L17.495,16.721,3.2,27.976a1.975,1.975,0,0,1-1.069.413Zm0-12.215a1.976,1.976,0,0,1-1.38-3.518L16.272.425h0a1.975,1.975,0,0,1,2.449,0L34.245,12.656h0a1.973,1.973,0,0,1-2.434,3.105L17.495,4.491,3.2,15.761a1.975,1.975,0,0,1-1.069.413Z\"
            transform=\"translate(0 0)\"
            fill=\"#003087\"/>
        </g>
      </g>
    </svg>



      <div
        id=\"page\">
        <div
          id=\"above-header-wrap\"
          class=\"layout-main-wrapper default-color\">

          <div
            id=\"above-header\"
            class=\"container\">
            ";
        // line 128
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 128) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 128)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 128))) {
            // line 129
            echo "              <div
                class=\"row row-offcanvas row-offcanvas-left clearfix\">
                <nav";
            // line 131
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_top_attributes"] ?? null), 131, $this->source), "html", null, true);
            echo ">
                  ";
            // line 132
            if (($context["container_navbar"] ?? null)) {
                // line 133
                echo "                    <div
                      class=\"container\">
                    ";
            }
            // line 136
            echo "                    ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "secondary_menu", [], "any", false, false, true, 136), 136, $this->source), "html", null, true);
            echo "
                    ";
            // line 137
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header", [], "any", false, false, true, 137), 137, $this->source), "html", null, true);
            echo "
                    ";
            // line 138
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 138)) {
                // line 139
                echo "                      <div
                        class=\"form-inline navbar-form ml-auto\">
                        ";
                // line 141
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "top_header_form", [], "any", false, false, true, 141), 141, $this->source), "html", null, true);
                echo "
                      </div>
                    ";
            }
            // line 144
            echo "                    ";
            if (($context["container_navbar"] ?? null)) {
                // line 145
                echo "                    </div>
                  ";
            }
            // line 147
            echo "                </nav>
              </div>
            ";
        }
        // line 150
        echo "          </div>
        </div>
        <div
          id=\"header-wrap\"
          class=\"layout-main-wrapper\">
          <header
            id=\"header\"
            class=\"header container\"
            role=\"banner\"
            aria-label=\"";
        // line 159
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Site header"));
        echo "\">
            ";
        // line 160
        $this->displayBlock('head', $context, $blocks);
        // line 222
        echo "          </header>
        </div>
        ";
        // line 224
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 224)) {
            // line 225
            echo "          <div
            class=\"highlighted\">
            <aside
              class=\"";
            // line 228
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 228, $this->source), "html", null, true);
            echo " section clearfix\" role=\"complementary\">
              ";
            // line 229
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 229), 229, $this->source), "html", null, true);
            echo "
            </aside>
          </div>
        ";
        }
        // line 233
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 233)) {
            // line 234
            echo "          ";
            $this->displayBlock('featured', $context, $blocks);
            // line 244
            echo "        ";
        }
        // line 245
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 245)) {
            // line 246
            echo "          <div
            id=\"main-wrapper\"
            class=\"layout-main-wrapper clearfix\">

            ";
            // line 250
            $this->displayBlock('content', $context, $blocks);
            // line 287
            echo "          </div>
        ";
        }
        // line 289
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_sub_feature", [], "any", false, false, true, 289)) {
            // line 290
            echo "          <div
            class=\"layout-main-wrapper page-content-two clearfix bg-color-dark\">

            ";
            // line 293
            $this->displayBlock('content_sub_feature', $context, $blocks);
            // line 309
            echo "          </div>
        ";
        }
        // line 311
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_two", [], "any", false, false, true, 311)) {
            // line 312
            echo "          <div
            class=\"layout-main-wrapper page-content-two clearfix bg-color-";
            // line 313
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["first_area_color"] ?? null), 313, $this->source), "html", null, true);
            echo "\">
            ";
            // line 314
            $this->displayBlock('content_two', $context, $blocks);
            // line 328
            echo "          </div>
        ";
        }
        // line 330
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_three", [], "any", false, false, true, 330)) {
            // line 331
            echo "          <div
            class=\"layout-main-wrapper page-content-three clearfix bg-color-";
            // line 332
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["second_area_color"] ?? null), 332, $this->source), "html", null, true);
            echo "\">
            ";
            // line 333
            $this->displayBlock('content_three', $context, $blocks);
            // line 347
            echo "          </div>
        ";
        }
        // line 349
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_four", [], "any", false, false, true, 349)) {
            // line 350
            echo "          <div
            class=\"layout-main-wrapper page-content-four clearfix bg-color-";
            // line 351
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["third_area_color"] ?? null), 351, $this->source), "html", null, true);
            echo "\">
            ";
            // line 352
            $this->displayBlock('content_four', $context, $blocks);
            // line 366
            echo "          </div>
        ";
        }
        // line 368
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_five", [], "any", false, false, true, 368)) {
            // line 369
            echo "          <div
            class=\"layout-main-wrapper page-content-five clearfix bg-color-";
            // line 370
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["fourth_area_color"] ?? null), 370, $this->source), "html", null, true);
            echo "\">
            ";
            // line 371
            $this->displayBlock('content_five', $context, $blocks);
            // line 385
            echo "          </div>
        ";
        }
        // line 387
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_six", [], "any", false, false, true, 387)) {
            // line 388
            echo "          <div
            class=\"layout-main-wrapper page-content-six clearfix bg-color-";
            // line 389
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["fifth_area_color"] ?? null), 389, $this->source), "html", null, true);
            echo "\">
            ";
            // line 390
            $this->displayBlock('content_six', $context, $blocks);
            // line 404
            echo "          </div>
        ";
        }
        // line 406
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_seven", [], "any", false, false, true, 406)) {
            // line 407
            echo "          <div
            class=\"layout-main-wrapper page-content-seven clearfix bg-color-";
            // line 408
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sixth_area_color"] ?? null), 408, $this->source), "html", null, true);
            echo "\">
            ";
            // line 409
            $this->displayBlock('content_seven', $context, $blocks);
            // line 423
            echo "          </div>
        ";
        }
        // line 425
        echo "

        ";
        // line 427
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_first", [], "any", false, false, true, 427) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_second", [], "any", false, false, true, 427)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_third", [], "any", false, false, true, 427))) {
            // line 428
            echo "          <div
            class=\"featured-bottom\">
            <aside
              class=\"";
            // line 431
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 431, $this->source), "html", null, true);
            echo " clearfix\" role=\"complementary\">
              ";
            // line 432
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_first", [], "any", false, false, true, 432), 432, $this->source), "html", null, true);
            echo "
              ";
            // line 433
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_second", [], "any", false, false, true, 433), 433, $this->source), "html", null, true);
            echo "
              ";
            // line 434
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_third", [], "any", false, false, true, 434), 434, $this->source), "html", null, true);
            echo "
            </aside>
          </div>
        ";
        }
        // line 438
        echo "        <footer
          class=\"site-footer\">
          ";
        // line 440
        $this->displayBlock('footer', $context, $blocks);
        // line 460
        echo "        </footer>
        ";
        // line 461
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "copyright", [], "any", false, false, true, 461)) {
            // line 462
            echo "          <div
            class=\"site-copyright\">
            <div
              class=\"";
            // line 465
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 465, $this->source), "html", null, true);
            echo "\">
              ";
            // line 466
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "copyright", [], "any", false, false, true, 466), 466, $this->source), "html", null, true);
            echo "
            </div>
          </div>
        ";
        }
        // line 470
        echo "
      </div>
    </div>
";
    }

    // line 160
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 161
        echo "              <div
                class=\"row row-offcanvas row-offcanvas-left clearfix\">
                <nav";
        // line 163
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_attributes"] ?? null), 163, $this->source), "html", null, true);
        echo ">
                  ";
        // line 164
        if (($context["container_navbar"] ?? null)) {
            // line 165
            echo "                    <div
                      class=\"container\">
                    ";
        }
        // line 168
        echo "                    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 168), 168, $this->source), "html", null, true);
        echo "
                    ";
        // line 169
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 169) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 169))) {
            // line 170
            echo "                      <button
                        class=\"navbar-toggler collapsed\"
                        type=\"button\"
                        data-bs-toggle=\"";
            // line 173
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_collapse_btn_data"] ?? null), 173, $this->source), "html", null, true);
            echo "\" data-bs-target=\"#CollapsingNavbar\"
                        aria-controls=\"CollapsingNavbar\"
                        aria-expanded=\"false\"
                        aria-label=\"Toggle navigation\">
                        <span
                          class=\"navbar-toggler-icon\"></span>
                      </button>
                      <div
                        class=\"";
            // line 181
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["navbar_collapse_class"] ?? null), 181, $this->source), "html", null, true);
            echo "\" id=\"CollapsingNavbar\">
                        ";
            // line 182
            if (($context["navbar_offcanvas"] ?? null)) {
                // line 183
                echo "                          <div
                            class=\"offcanvas-header\">
                            <button
                              type=\"button\"
                              class=\"btn-close text-reset\"
                              data-bs-dismiss=\"offcanvas\"
                              aria-label=\"Close\"></button>
                          </div>
                          <div
                            class=\"offcanvas-body\">
                          ";
            }
            // line 194
            echo "                          ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "primary_menu", [], "any", false, false, true, 194), 194, $this->source), "html", null, true);
            echo "
                          ";
            // line 195
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 195)) {
                // line 196
                echo "                            <div
                              class=\"form-inline navbar-form justify-content-end\">
                              ";
                // line 198
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_form", [], "any", false, false, true, 198), 198, $this->source), "html", null, true);
                echo "
                            </div>
                          ";
            }
            // line 201
            echo "                          ";
            if (($context["navbar_offcanvas"] ?? null)) {
                // line 202
                echo "                          </div>
                        ";
            }
            // line 204
            echo "                      </div>
                    ";
        }
        // line 206
        echo "                    ";
        if (($context["sidebar_collapse"] ?? null)) {
            // line 207
            echo "                      <button
                        class=\"navbar-toggler navbar-toggler-left collapsed\"
                        type=\"button\"
                        data-bs-toggle=\"collapse\"
                        data-bs-target=\"#CollapsingLeft\"
                        aria-controls=\"CollapsingLeft\"
                        aria-expanded=\"false\"
                        aria-label=\"Toggle navigation\"></button>
                    ";
        }
        // line 216
        echo "                    ";
        if (($context["container_navbar"] ?? null)) {
            // line 217
            echo "                    </div>
                  ";
        }
        // line 219
        echo "                </nav>
              </div>
            ";
    }

    // line 234
    public function block_featured($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 235
        echo "            <div
              class=\"featured-top\">
              <aside
                class=\"featured-top__inner section ";
        // line 238
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 238, $this->source), "html", null, true);
        echo " clearfix\"
                role=\"complementary\">
                ";
        // line 240
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "featured_top", [], "any", false, false, true, 240), 240, $this->source), "html", null, true);
        echo "
              </aside>
            </div>
          ";
    }

    // line 250
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 251
        echo "              <div
                id=\"main\"
                class=\"";
        // line 253
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 253, $this->source), "html", null, true);
        echo "\">
                ";
        // line 254
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 254), 254, $this->source), "html", null, true);
        echo "
                <div
                  class=\"row row-offcanvas row-offcanvas-left clearfix\">
                  <main";
        // line 257
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null), 257, $this->source), "html", null, true);
        echo ">
                    <section
                      class=\"section\">
                      <a
                        id=\"main-content\"
                        tabindex=\"-1\"></a>
                      ";
        // line 263
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 263), 263, $this->source), "html", null, true);
        echo "
                    </section>
                  </main>
                  ";
        // line 266
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 266)) {
            // line 267
            echo "                    <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_attributes"] ?? null), 267, $this->source), "html", null, true);
            echo ">
                      <aside
                        class=\"section\"
                        role=\"complementary\">
                        ";
            // line 271
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 271), 271, $this->source), "html", null, true);
            echo "
                      </aside>
                    </div>
                  ";
        }
        // line 275
        echo "                  ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 275)) {
            // line 276
            echo "                    <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_attributes"] ?? null), 276, $this->source), "html", null, true);
            echo ">
                      <aside
                        class=\"section\"
                        role=\"complementary\">
                        ";
            // line 280
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 280), 280, $this->source), "html", null, true);
            echo "
                      </aside>
                    </div>
                  ";
        }
        // line 284
        echo "                </div>
              </div>
            ";
    }

    // line 293
    public function block_content_sub_feature($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 294
        echo "
              <div
                class=\"";
        // line 296
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 296, $this->source), "html", null, true);
        echo "\">
                <div
                  class=\"row row-offcanvas row-offcanvas-left clearfix\">
                  <div";
        // line 299
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null), 299, $this->source), "html", null, true);
        echo ">
                    <section
                      class=\"section\">
                      ";
        // line 302
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_sub_feature", [], "any", false, false, true, 302), 302, $this->source), "html", null, true);
        echo "

                    </section>
                  </div>
                </div>
              </div>
            ";
    }

    // line 314
    public function block_content_two($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 315
        echo "              <div
                class=\"";
        // line 316
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 316, $this->source), "html", null, true);
        echo "\">
                <div
                  class=\"row row-offcanvas row-offcanvas-left clearfix\">
                  <div";
        // line 319
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null), 319, $this->source), "html", null, true);
        echo ">
                    <section
                      class=\"section\">
                      ";
        // line 322
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_two", [], "any", false, false, true, 322), 322, $this->source), "html", null, true);
        echo "
                    </section>
                  </div>
                </div>
              </div>
            ";
    }

    // line 333
    public function block_content_three($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 334
        echo "              <div
                class=\"";
        // line 335
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 335, $this->source), "html", null, true);
        echo "\">
                <div
                  class=\"row row-offcanvas row-offcanvas-left clearfix\">
                  <div";
        // line 338
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null), 338, $this->source), "html", null, true);
        echo ">
                    <section
                      class=\"section\">
                      ";
        // line 341
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_three", [], "any", false, false, true, 341), 341, $this->source), "html", null, true);
        echo "
                    </section>
                  </div>
                </div>
              </div>
            ";
    }

    // line 352
    public function block_content_four($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 353
        echo "              <div
                class=\"";
        // line 354
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 354, $this->source), "html", null, true);
        echo "\">
                <div
                  class=\"row row-offcanvas row-offcanvas-left clearfix\">
                  <div";
        // line 357
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null), 357, $this->source), "html", null, true);
        echo ">
                    <section
                      class=\"section\">
                      ";
        // line 360
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_four", [], "any", false, false, true, 360), 360, $this->source), "html", null, true);
        echo "
                    </section>
                  </div>
                </div>
              </div>
            ";
    }

    // line 371
    public function block_content_five($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 372
        echo "              <div
                class=\"";
        // line 373
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 373, $this->source), "html", null, true);
        echo "\">
                <div
                  class=\"row row-offcanvas row-offcanvas-left clearfix\">
                  <div";
        // line 376
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null), 376, $this->source), "html", null, true);
        echo ">
                    <section
                      class=\"section\">
                      ";
        // line 379
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_five", [], "any", false, false, true, 379), 379, $this->source), "html", null, true);
        echo "
                    </section>
                  </div>
                </div>
              </div>
            ";
    }

    // line 390
    public function block_content_six($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 391
        echo "              <div
                class=\"";
        // line 392
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 392, $this->source), "html", null, true);
        echo "\">
                <div
                  class=\"row row-offcanvas row-offcanvas-left clearfix\">
                  <div";
        // line 395
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null), 395, $this->source), "html", null, true);
        echo ">
                    <section
                      class=\"section\">
                      ";
        // line 398
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_six", [], "any", false, false, true, 398), 398, $this->source), "html", null, true);
        echo "
                    </section>
                  </div>
                </div>
              </div>
            ";
    }

    // line 409
    public function block_content_seven($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 410
        echo "              <div
                class=\"";
        // line 411
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 411, $this->source), "html", null, true);
        echo "\">
                <div
                  class=\"row row-offcanvas row-offcanvas-left clearfix\">
                  <div";
        // line 414
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_attributes"] ?? null), 414, $this->source), "html", null, true);
        echo ">
                    <section
                      class=\"section\">
                      ";
        // line 417
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_seven", [], "any", false, false, true, 417), 417, $this->source), "html", null, true);
        echo "
                    </section>
                  </div>
                </div>
              </div>
            ";
    }

    // line 440
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 441
        echo "            <div
              class=\"";
        // line 442
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 442, $this->source), "html", null, true);
        echo "\">
              ";
        // line 443
        if ((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 443) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 443)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 443)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 443))) {
            // line 444
            echo "                <div
                  class=\"site-footer__top clearfix\">
                  ";
            // line 446
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 446), 446, $this->source), "html", null, true);
            echo "
                  ";
            // line 447
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 447), 447, $this->source), "html", null, true);
            echo "
                  ";
            // line 448
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 448), 448, $this->source), "html", null, true);
            echo "
                  ";
            // line 449
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fourth", [], "any", false, false, true, 449), 449, $this->source), "html", null, true);
            echo "
                </div>
              ";
        }
        // line 452
        echo "              ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 452)) {
            // line 453
            echo "                <div
                  class=\"site-footer__bottom\">
                  ";
            // line 455
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 455), 455, $this->source), "html", null, true);
            echo "
                </div>
              ";
        }
        // line 458
        echo "            </div>
          ";
    }

    public function getTemplateName()
    {
        return "themes/custom/ttor/templates/layouts/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  963 => 458,  957 => 455,  953 => 453,  950 => 452,  944 => 449,  940 => 448,  936 => 447,  932 => 446,  928 => 444,  926 => 443,  922 => 442,  919 => 441,  915 => 440,  905 => 417,  899 => 414,  893 => 411,  890 => 410,  886 => 409,  876 => 398,  870 => 395,  864 => 392,  861 => 391,  857 => 390,  847 => 379,  841 => 376,  835 => 373,  832 => 372,  828 => 371,  818 => 360,  812 => 357,  806 => 354,  803 => 353,  799 => 352,  789 => 341,  783 => 338,  777 => 335,  774 => 334,  770 => 333,  760 => 322,  754 => 319,  748 => 316,  745 => 315,  741 => 314,  730 => 302,  724 => 299,  718 => 296,  714 => 294,  710 => 293,  704 => 284,  697 => 280,  689 => 276,  686 => 275,  679 => 271,  671 => 267,  669 => 266,  663 => 263,  654 => 257,  648 => 254,  644 => 253,  640 => 251,  636 => 250,  628 => 240,  623 => 238,  618 => 235,  614 => 234,  608 => 219,  604 => 217,  601 => 216,  590 => 207,  587 => 206,  583 => 204,  579 => 202,  576 => 201,  570 => 198,  566 => 196,  564 => 195,  559 => 194,  546 => 183,  544 => 182,  540 => 181,  529 => 173,  524 => 170,  522 => 169,  517 => 168,  512 => 165,  510 => 164,  506 => 163,  502 => 161,  498 => 160,  491 => 470,  484 => 466,  480 => 465,  475 => 462,  473 => 461,  470 => 460,  468 => 440,  464 => 438,  457 => 434,  453 => 433,  449 => 432,  445 => 431,  440 => 428,  438 => 427,  434 => 425,  430 => 423,  428 => 409,  424 => 408,  421 => 407,  418 => 406,  414 => 404,  412 => 390,  408 => 389,  405 => 388,  402 => 387,  398 => 385,  396 => 371,  392 => 370,  389 => 369,  386 => 368,  382 => 366,  380 => 352,  376 => 351,  373 => 350,  370 => 349,  366 => 347,  364 => 333,  360 => 332,  357 => 331,  354 => 330,  350 => 328,  348 => 314,  344 => 313,  341 => 312,  338 => 311,  334 => 309,  332 => 293,  327 => 290,  324 => 289,  320 => 287,  318 => 250,  312 => 246,  309 => 245,  306 => 244,  303 => 234,  300 => 233,  293 => 229,  289 => 228,  284 => 225,  282 => 224,  278 => 222,  276 => 160,  272 => 159,  261 => 150,  256 => 147,  252 => 145,  249 => 144,  243 => 141,  239 => 139,  237 => 138,  233 => 137,  228 => 136,  223 => 133,  221 => 132,  217 => 131,  213 => 129,  211 => 128,  99 => 21,  95 => 19,  92 => 18,  89 => 17,  86 => 16,  84 => 15,  80 => 13,  78 => 12,  75 => 11,  73 => 10,  70 => 9,  68 => 8,  65 => 7,  63 => 6,  60 => 5,  58 => 4,  55 => 3,  52 => 2,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/ttor/templates/layouts/page.html.twig", "/home/ttorahos/html_and_drupal/TTOR-Drupal/web/themes/custom/ttor/templates/layouts/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 16, "block" => 160);
        static $filters = array("escape" => 21, "t" => 159);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['escape', 't'],
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
