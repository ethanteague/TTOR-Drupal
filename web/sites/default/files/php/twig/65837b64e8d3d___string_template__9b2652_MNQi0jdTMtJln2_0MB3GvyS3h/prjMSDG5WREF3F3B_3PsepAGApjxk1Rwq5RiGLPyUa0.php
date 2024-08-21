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

/* __string_template__9b2652a7cf78e38c5e906a3d63950b2d */
class __TwigTemplate_f43c77e470b0a16bed34bdc62c8ece42 extends Template
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
        echo "<html>
<head>
<title>Unexpected error</title>
<meta name=\"viewport\" content=\"width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no\">
<style type=\"text/css\">
  body { background-color: #ddd; }
  #mix-exception { width: 50%; min-width: 260px; max-width: 600px; margin: 60px auto; padding: 20px; background: #fff; border-radius: 10px; }
  #mix-exception .error-code { font-size: 128px; margin: 0; line-height: 1}
  #mix-exception .blue { color: #00aaee; }
  #mix-exception .grey { color: #888; }
  #mix-exception .ps-10 { padding-left: 10px; }
</style>
</head>

<body>
<div id=\"mix-exception\">
  <div class=\"error-code blue\"><strong>500</strong></div> 
  <p class=\"blue ps-10\"><strong>Oops! Unexpected error...</strong></p>
  <p class=\"grey ps-10\">Refresh this page or try again later, feel free to contact us if the problem persists.</p>
  <p class=\"ps-10\"><a class=\"blue\" href=\"/\">Back to homepage</a></p>
</div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "__string_template__9b2652a7cf78e38c5e906a3d63950b2d";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__9b2652a7cf78e38c5e906a3d63950b2d", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
