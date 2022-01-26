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

/* modules/contrib/civic_accessibility_toolbar/templates/block--accessibility_toolbar.html.twig */
class __TwigTemplate_fc00d463969ad6cff0279abfbb2eb1bed8006aea86eeaa5e0faa5a3dd5155dbb extends \Twig\Template
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
        $context["module_path"] = twig_split_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getTemplateName(), 1, $this->source), "/templates");
        // line 2
        echo "<div class=\"accessibility--controls\">
  ";
        // line 3
        if (($context["color_contrast"] ?? null)) {
            // line 4
            echo "    
      ";
            // line 5
            if (($context["color_contrast_label"] ?? null)) {
                // line 6
                echo "        <span class=\"accessibility--label\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_contrast_label"] ?? null), 6, $this->source), "html", null, true);
                echo "</span>
      ";
            }
            // line 8
            echo "      <button type=\"button\" class=\"accessibility--control button__normal\" data-accessibility-feature=\"colorContrast\" data-accessibility-unit=\"color\">
        <h5>☀️</h5>
        <span class=\"visually-hidden\">";
            // line 10
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Switch to color theme"));
            echo "</span>
      </button>
      <button type=\"button\" class=\"accessibility--control button__blue\" data-accessibility-feature=\"colorContrast\" data-accessibility-unit=\"blue\">
        <h5>🌊</h5>
        <span class=\"visually-hidden\">";
            // line 14
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Switch to blue theme"));
            echo "</span>
      </button>
      <button type=\"button\" class=\"accessibility--control button__hivis\" data-accessibility-feature=\"colorContrast\" data-accessibility-unit=\"hivis\">
        <h5>🌙</h5>
        <span class=\"visually-hidden\">";
            // line 18
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Switch to high visibility theme"));
            echo "</span>
      </button>
      <button type=\"button\" class=\"accessibility--control button__soft\" data-accessibility-feature=\"colorContrast\" data-accessibility-unit=\"soft\">
        <h5>🌱</h5>
        <span class=\"visually-hidden\">";
            // line 22
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Switch to soft theme"));
            echo "</span>
      </button>
    
  ";
        }
        // line 26
        echo "
  ";
        // line 27
        if (($context["text_resize"] ?? null)) {
            // line 28
            echo "    <div class=\"text-sizing\">
      ";
            // line 29
            if (($context["text_resize_label"] ?? null)) {
                // line 30
                echo "        <span class=\"accessibility--label\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["text_resize_label"] ?? null), 30, $this->source), "html", null, true);
                echo "</span>
      ";
            }
            // line 32
            echo "      <button type=\"button\" class=\"accessibility--control button__small\" data-accessibility-feature=\"fontSize\" data-accessibility-unit=\"1\">
        A
        <span class=\"visually-hidden\">";
            // line 34
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Set font size to 100%"));
            echo "</span>
      </button>
      <button type=\"button\" class=\"accessibility--control button__medium\" data-accessibility-feature=\"fontSize\" data-accessibility-unit=\"1.25\">
        A
        <span class=\"visually-hidden\">";
            // line 38
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Set font size to 125%"));
            echo "</span>
      </button>
      <button type=\"button\" class=\"accessibility--control button__large\" data-accessibility-feature=\"fontSize\" data-accessibility-unit=\"1.5\">
        A
        <span class=\"visually-hidden\">";
            // line 42
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Set font size to 150%"));
            echo "</span>
      </button>
    </div>
  ";
        }
        // line 46
        echo "                
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/civic_accessibility_toolbar/templates/block--accessibility_toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 46,  123 => 42,  116 => 38,  109 => 34,  105 => 32,  99 => 30,  97 => 29,  94 => 28,  92 => 27,  89 => 26,  82 => 22,  75 => 18,  68 => 14,  61 => 10,  57 => 8,  51 => 6,  49 => 5,  46 => 4,  44 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/civic_accessibility_toolbar/templates/block--accessibility_toolbar.html.twig", "D:\\Aplicaciones\\XAMPP\\htdocs\\PlantillaWeb\\web\\modules\\contrib\\civic_accessibility_toolbar\\templates\\block--accessibility_toolbar.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "if" => 3);
        static $filters = array("split" => 1, "escape" => 6, "t" => 10);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['split', 'escape', 't'],
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
