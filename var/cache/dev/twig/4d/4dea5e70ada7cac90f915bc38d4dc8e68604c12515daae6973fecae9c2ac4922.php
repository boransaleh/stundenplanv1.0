<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_36ee560802d1a34e7e1cb1944325f29a957c0a7e16ea39ddd28497c88f63667a extends Twig_Template
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
        $__internal_08c08015b9ef2f84fbf0f6fb17f219f9cd8498e742a42a4f722f11e78e76beae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08c08015b9ef2f84fbf0f6fb17f219f9cd8498e742a42a4f722f11e78e76beae->enter($__internal_08c08015b9ef2f84fbf0f6fb17f219f9cd8498e742a42a4f722f11e78e76beae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_1faca6c31be962ccdd4ca46ab07f2254467b27811934bdf886d1ae4bb192dd79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1faca6c31be962ccdd4ca46ab07f2254467b27811934bdf886d1ae4bb192dd79->enter($__internal_1faca6c31be962ccdd4ca46ab07f2254467b27811934bdf886d1ae4bb192dd79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_08c08015b9ef2f84fbf0f6fb17f219f9cd8498e742a42a4f722f11e78e76beae->leave($__internal_08c08015b9ef2f84fbf0f6fb17f219f9cd8498e742a42a4f722f11e78e76beae_prof);

        
        $__internal_1faca6c31be962ccdd4ca46ab07f2254467b27811934bdf886d1ae4bb192dd79->leave($__internal_1faca6c31be962ccdd4ca46ab07f2254467b27811934bdf886d1ae4bb192dd79_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
