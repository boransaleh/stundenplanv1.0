<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_be0dea93d8f490c000ad8515c9d0969187cd4f0772e05947bea10def1706cd37 extends Twig_Template
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
        $__internal_4cde86e367cefaa80ab5bc1f1cedb62cb99cea03b6209e66b1c1adf4a1e3b131 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cde86e367cefaa80ab5bc1f1cedb62cb99cea03b6209e66b1c1adf4a1e3b131->enter($__internal_4cde86e367cefaa80ab5bc1f1cedb62cb99cea03b6209e66b1c1adf4a1e3b131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_fee782f23e56cd9b35ee6c732e66a2123e0a57aee0fcf8f33898803b3913165b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fee782f23e56cd9b35ee6c732e66a2123e0a57aee0fcf8f33898803b3913165b->enter($__internal_fee782f23e56cd9b35ee6c732e66a2123e0a57aee0fcf8f33898803b3913165b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_4cde86e367cefaa80ab5bc1f1cedb62cb99cea03b6209e66b1c1adf4a1e3b131->leave($__internal_4cde86e367cefaa80ab5bc1f1cedb62cb99cea03b6209e66b1c1adf4a1e3b131_prof);

        
        $__internal_fee782f23e56cd9b35ee6c732e66a2123e0a57aee0fcf8f33898803b3913165b->leave($__internal_fee782f23e56cd9b35ee6c732e66a2123e0a57aee0fcf8f33898803b3913165b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\Apache24\\htdocs\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
