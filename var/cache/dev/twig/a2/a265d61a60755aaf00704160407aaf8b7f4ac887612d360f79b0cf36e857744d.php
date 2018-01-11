<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_96acd39d7abcce4b0a96ae95ca6aa59d378e4f39e92bb3d313729057053235fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1af1e38032b5cffa66e384cc3fbbc90868c9d213898f70f841fdfbf54cbe76bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1af1e38032b5cffa66e384cc3fbbc90868c9d213898f70f841fdfbf54cbe76bf->enter($__internal_1af1e38032b5cffa66e384cc3fbbc90868c9d213898f70f841fdfbf54cbe76bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_4a1196d0ec9e5a56fe0044d6b51d431a8259740b0bd578e79a7e1a44ad16a1ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a1196d0ec9e5a56fe0044d6b51d431a8259740b0bd578e79a7e1a44ad16a1ad->enter($__internal_4a1196d0ec9e5a56fe0044d6b51d431a8259740b0bd578e79a7e1a44ad16a1ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_1af1e38032b5cffa66e384cc3fbbc90868c9d213898f70f841fdfbf54cbe76bf->leave($__internal_1af1e38032b5cffa66e384cc3fbbc90868c9d213898f70f841fdfbf54cbe76bf_prof);

        
        $__internal_4a1196d0ec9e5a56fe0044d6b51d431a8259740b0bd578e79a7e1a44ad16a1ad->leave($__internal_4a1196d0ec9e5a56fe0044d6b51d431a8259740b0bd578e79a7e1a44ad16a1ad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
